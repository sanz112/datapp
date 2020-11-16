<?php
$hostname = "localhost";
$username = "root";
$password = "WittTech1.";
$dbname = "swiftgeek";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn) {
    "Connection Error:".mysqli_connect_error();
    die();
}

// try {
//     $conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname.",".$username.",".$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected";
// }
// catch(PDOException $e) {
//     echo "Connection failed:" . $e->getMessage();
//     die();
// }

?>
