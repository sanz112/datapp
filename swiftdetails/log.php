<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["login-submit"])) {
    include "conn.php";
    $mailuid = test_input($_POST['uid']);
    $userType = test_input($_POST['userType']);
    $password = test_input($_POST['pwd']);

if(empty($mailuid) || empty($password)) {
    header("Location:login.php?error=emptyFields");
    exit();
} else {
    $sqlnew ="SELECT * FROM users WHERE emailSwiftUsers=? OR uidSwiftUsers=? AND confirmation=0;";
     $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sqlnew)) {
        header("Location:login.php?error=sqlerror");
        exit();
    } else {
        $sql ="SELECT * FROM users WHERE emailSwiftUsers=? OR phone=? OR uidSwiftUsers=? AND userType=? AND confirmation=1";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:login.php?error=Email_and_Username_not_thesame"); 
            exit();
        } else {
       
        mysqli_stmt_bind_param($stmt, "ssss", $mailuid, $mailuid, $mailuid, $userType);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row =  mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row["pwdSwiftUsers"]);
            if($pwdCheck === false) {
                header("Location:login.php?passworderror=wrongPassword");
                exit();
            } elseif($pwdCheck === true) {
                $_SESSION["userSwiftId"] = $row["idSwiftUsers"];
                $_SESSION["userSwiftUid"] = $row["uidSwiftUsers"];
                $_SESSION["userType"] = $row["userType"];
                $_SESSION["request_id"] = $row["request_id"];
               // $_SESSION['timestamp'] = time();
                $_SESSION["emailSwiftUid"] = $row["emailSwiftUsers"];
                $_SESSION["phone"] = $row["phone"];
                $_SESSION["walletAmount"] = $row["wallet"];
                $_SESSION["confirmation"] = $row["confirmation"];
                $_SESSION["userType"] = $row["userType"];
                
            //     function alertmessage($message) {
            //         echo "<script> alert('.$message.'); 
            //         window.location.assign(http://localhost:81/home.php?login=success);</script>";
            //     }
            //  alertmessage("Welcome, ".$_SESSION['userSwiftUid']);
          
             header("Location: ../home.php?login=success");
             exit();
            } else {
                header("Location:login.php?newpassworderror=wrongnewPassword");
                exit();
            }
        } else {
            header("Location:login.php?error=NouserFound");
            exit();
        }
    }
}
}
}
 else {
    header("Location: ../index.php");
    exit();
}