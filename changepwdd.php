<?php

//session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset($_POST['changepwdsubmit'])) {

$oldpwd =test_input($_POST['oldPwd']);
$newpwd = test_input($_POST['newPwd']);
$curpwd = test_input($_POST['confirmPwd']);
$idSwiftUsers = $_SESSION['userSwiftId'];


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
     
    }

}
} else {
    echo "Kindly go through the right source. Thanks";
}
?>