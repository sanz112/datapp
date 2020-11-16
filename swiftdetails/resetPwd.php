

<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["reset_password_submit"])) {
$selector = test_input($_POST["selector"]);
$validator = test_input($_POST["validator"]);
$pwd = test_input($_POST["newpwd"]);
$password_repeat = test_input($_POST["pwd-repeat"]);
    
    if(empty($pwd) || empty($password_repeat)) {
        header("Location: resetpassword.php?new_password=empty");
        exit();

} else if($pwd !== $password_repeat) {
    header("Location: resetpassword.php?new_password=Password-not-the-same");
    exit();
}

$currentDate = date("U");

include "conn.php";

$sql = "SELECT * FROM  pwdReset WHERE pwdResetSwiftSelector=? AND pwdResetSwiftExpires >= ?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>There was an error</p>";
    exit();
} else {
    //$stmt = mysqli_stmt_init($conn);
    mysqli_stmt_bind_param($stmt,"ss", $selector, $currentDate);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)) {
        echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Time's expired! You need to re-submit your reset request.</p>";
        exit();
    } else {       
    $tokenBin = hex2bin($validator);
    $tokenCheck = password_verify($tokenBin, $row["pwdResetSwiftToken"]);

    if($tokenCheck === false) {
        echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Token is wrong! please, You need to re-submit your request.</p>";
        exit();
    } elseif ($tokenCheck === true) {
        $tokenEmail = $row['pwdResetSwiftEmail'];
        $sql = "SELECT * FROM users WHERE emailSwiftUsers=?";
        $stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>There was an error somewhere</p>";
    exit();
} else {
    //$tokenEmail = $row['pwdResetEmail'];
    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)) {
        echo "Email Not Found in Our data base Kindly use the one You registered database. Thanks";
        exit();
    } else {
        $sql = "UPDATE users SET pwdSWiftUsers=? WHERE emailSwiftUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Kindly check your credentials. Password Not Updated.</p>";
            exit();
        } else {
           // $tokenEmail = $row['pwdResetEmail'];
            $newPwdHash = password_hash($pwd, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
            mysqli_stmt_execute($stmt);
            $sql = "DELETE FROM pwdReset WHERE pwdResetSwiftEmail=?";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Password not updated. Please try again. Thanks</p>";
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                mysqli_stmt_execute($stmt);
                header("Location: login.php?newpwd=passwordupdated");
            }

        } 
    }
    }
}
}
}
//mysqli_stmt_close($stmt);
//mysqli_close($conn);
} else {
    echo "not found";
}