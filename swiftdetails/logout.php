<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();
include 'conn.php';
// function alertmessage($message) {
//     echo "<script> alert('.$message.'); 
//     window.location.assign(http://localhost:81/home.php?login=success);</script>";
// }
// echo '
// <script>
//  if (typeof(Storage) !== "undefined") {
//     localStorage.setItem("alert", + alert("Hellooo") + ");
//  }
// </script>"';
 session_unset();
 session_destroy();

header("Location:../start.php");
exit();
// // Check browser support
// if (typeof(Storage) !== "undefined") {
//     // Store
//     localStorage.setItem("lastname", "Smith");
?>

