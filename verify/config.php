<?php
include "conn.php";
// include('Mail.php'); // includes the PEAR Mail class, already on your server.

// $username = 'info@swiftgeek.com.ng'; // your email address
// $password = 'Datageek2020!'; // your email address password

$output = "";


if($_POST) {
    if(isset($_POST["email"])) {
        $email = $_POST["email"];
        if($email == "") {
            unset($email);
        }
    }
    if(isset($_POST["password"])) {
        $password = $_POST["password"];
        if($password == "") {
            unset($password);
        }
    }
    if(!empty($email) && !empty($password))  {
        $password = password_hash($password, PASSWORD_DEFAULT);
        function getToken($len=32) {
            return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
        }
        $token = getToken(20);
        $insert = $conn->prepare("INSERT INTO user SET
        email = :email,
        password = :password,
        token = :token");
        $insert->execute(array(
            "email" => $email,
            "password" => $password,
            "token" => $token
        ));
        echo 'Activate your email.
        <a href="localhost:81/data/verify/verification.php?email='. $email . '&token='. $token.'">Activate Email</a>';
        
// $from = $username;
// $to = $email;
// $subject = "Confirm Email";
// $body= 'Activate your email;
// <a href="swiftgeek.com/verification.php?email="'. $email . '&token='. $token.'>Activate Email</a>';
// $headers["From"] = $from;
// $headers["To"] = $to;
// $headers["Subject"] = $subject;
// $headers["Reply-To"] = $username;
// $headers["Content-Type"] = "text/html; UTF-8";
    
    
// $smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
// $mail = $smtp->send($to, $headers, $body); // sending the email

// if (PEAR::isError($mail)){
// echo("<p>" . $mail->getMessage() . "</p>");
// }
// else {
// echo("<h2 style='text-align: center'>Kindly verify your email Address. By clicking the link sent to your email Address</h2>");
// // header("Location: http://www.example.com/"); // you can redirect page on successful submission.
// }
      }
}


?>

