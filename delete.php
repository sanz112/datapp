<?php
session_start();
require 'swiftdetails/connPDO.php';
include 'swiftdetails/header.php';
//include 'header.php';
if(isset($_POST['deletenewuser'])) {
$idSwiftUsers = $_GET['id'];
$sql = 'DELETE FROM `users` WHERE idSwiftUsers=?';
$stmt = $conn->prepare($sql);
$results = $stmt->execute([$idSwiftUsers]);
if($results) {
    session_unset();
    session_destroy();
    echo '<script>alert('.$message.');</script>';
    header("Location: start.php");
    exit();
}
}
else {
    echo 'Hello User! You are not Authorized to view and delete this Page, only an admin can. Thanks'; 

}