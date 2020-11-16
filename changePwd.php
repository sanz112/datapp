<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();
require 'swiftdetails/connPDO.php';


$message = '';
$messageErr = '';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$oldpwd =test_input($_POST['oldPwd']);
$newpwd = test_input($_POST['newPwd']);
$curpwd = test_input($_POST['confirmPwd']);
$idSwiftUsers = $_SESSION['userSwiftId'];




// $query = mysql_query("SELECT pwdSwiftUsers from users WHERE uidSwiftUsers ='.$uidSwiftUsers.'") or die("Did not work");
// $ow = msql_fetch_assoc($query);

// $oldpasswordnew = $row['pwdSwiftUsers'];

$oldpasswordnew = password_hash($oldpwd, PASSWORD_DEFAULT);

$sql = "SELECT pwdSwiftUsers from users WHERE idSwiftUsers=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$idSwiftUsers]);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

if($row = $results) {
    $oldpasswordnew = password_verify($oldpwd, $row["pwdSwiftUsers"]);
    $oldpassword = $row['pwdSwiftUsers'];
    if($oldpassword == $oldpasswordnew) {
        echo "Password the same";

        if($newpwd === $curpwd) {
    
        $hashedPassword = password_hash($newpwd, PASSWORD_DEFAULT); 
            $sql = 'UPDATE users SET pwdSwiftUsers=? WHERE idSwiftUsers=?;';
            $stmt = $conn->prepare($sql);
            $results =  $stmt->execute([$hashedPassword, $idSwiftUsers]);
            if($results) {
                $message ='Data  Updated Successfully';
                //header("Location: home.php");
            } else {
                $messageErr ='Data not Updated';
            }
        } else {
            $messageErr = "Password Not the same";
        }
    } else {
     $messageErr = "Password not the same";
        // echo $oldpassword;
        // echo $oldpasswordnew;
    }

}


// if(isset($_POST['submit'])) {
//     $request_id = test_input($_POST["request_id"]);
//     $uidSwiftUsers = test_input($_POST['uid']);
//     $emailSwiftUsers = test_input($_POST['mail']);
//     $pwdSwiftUsers = test_input($_POST['pwd']);
//     $wallet = test_input($_POST['wallet']);
//     $token = test_input($_POST['token']);
//     $confirmation = test_input($_POST['confirmation']);
//     $userType = test_input($_POST['user_type']);
//     function getToken($len=32) {
//         return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
//     }
//     if($confirmation > 0 || $confirmation === 1) {
//      $token = " ";
//     }  else {
//         $token = getToken(20);
//     }
//     $hashedPassword = password_hash($pwdSwiftUsers, PASSWORD_DEFAULT);
//     $sql = 'UPDATE users SET request_id=?, uidSwiftUsers=?, emailSwiftUsers=?, pwdSwiftUsers=?, wallet=?, token=?, confirmation=?, userType=? WHERE idSwiftUsers=?;';
//     $stmt = $conn->prepare($sql);
//     $results =  $stmt->execute([$request_id, $uidSwiftUsers, $emailSwiftUsers, $hashedPassword, $wallet, $token, $confirmation, $userType, $idSwiftUsers]);
//     if($results) {
//         $message ='Data  Updated Successfully';
//         header("Location: ./database.php");
//     } else {
//         $messageErr ='Data not Updated';
//     }




?>