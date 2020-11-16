<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=swiftgeek", "root", "WittTech1.");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
}
catch(PDOException $e) {
    echo "Connection failed:" . $e->getMessage();
    die();
}
?>