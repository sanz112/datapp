<?php
$hostname = "localhost";
$username = "root";
$password = "WittTech1.";


$dsn ='mysql:host='.$hostname.';dbname=swiftgeek';

$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
];

try {
$conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
 echo "Error:". $e->getMessage();
}
// try {
//     $conn = new PDO("mysql:host=localhost;dbname=swiftgeek", "root", "WittTech1.");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e) {
//     echo "Connection failed:" . $e->getMessage();
//     die();
// }
?>