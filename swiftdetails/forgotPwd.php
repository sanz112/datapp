<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["reset_password"])) {

//$newemail = $_POST["email"];

$selector = bin2hex(random_bytes(8));

$token = random_bytes(32);

$url = 'https://www.swiftgeek.com.ng/swiftdetails/resetPassword.php?selector=' . $selector . '&validator=' . bin2hex($token);

$expires = date("U") + 1800 ;

$pwdresetemail = test_input($_POST['email']);

include 'conn.php';

$sql = "DELETE FROM pwdReset WHERE pwdResetSwiftEmail=?";

//$query->bindParam(':uname', $uname); && $conn->prepare($sql) usin PDO Version

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "<p style='color: red;' class='text-center'>There was an error</p>";
    exit();
} else {
    mysqli_stmt_bind_param($stmt,"s", $pwdresetemail);
    mysqli_stmt_execute($stmt);
   // header("Location: login.php?newpwd=passwordupdated");
}
$sql = "INSERT INTO pwdreset (pwdResetSwiftEmail, pwdResetSwiftSelector, pwdResetSwiftToken, pwdResetSwiftExpires) VALUES(?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "<p style='color: red;' class='text-center'>There was an errorr</p>";
    exit();
} else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss", $pwdresetemail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
    include 'mailheader.php';

//     $body= "<div style='padding: 30px; position: absolute; text-align: center; font-size: 20px; width: 100%; font-family: arial; display:flex; height: 100%; align-items: center; justify-content: center;'><div style='padding: 20px; brorder-radius: 30px; background: lightgreen;'><img width='150px' height='80px' src='../image/swiftlogo.png'/><h2> Swift Geek Links</h2><h4>Get New Password</h4><div><p> We received a password reset request. Activate it quickly before it expires soon. The link to reset your password is below</p>
// <p><b>Your reset url is </b></p><p style='padding: 20px; border-radius: 20px; border: 2px dotted #fff;'><a style='padding: 20px; word-wrap: break-word;' href='".$url."'>$url</a></p><p><b> OR Click the button below</b> </p><a style='outline: none; text-decoration: none;' href='".$url."'><button style='padding: 15px; background: coral; border-radius: 7px; font-size: 22px; cursor: pointer; border: none; text-decoration: none; font-weight: 500; color: #fff;'>Get New Password</button></a>
// </div></div></div>";
// echo $body;
// exit();
}


// $username = 'info@swiftgeek.com.ng'; 
// $password = 'Datageek2020!.';

// $from = "info@swiftgeek.com.ng";
// $to = $email;
// $subject = "Confirm Email";
// $body= "<div style='position: absolute; width: 100%; display:flex; height: 100%; align-items: center; justify-content: center;'><p> We received a password reset request. Activate it quicly before it ecxpires soon The link to reset your password is below</p>
// your reset url is <a href='".$url."'>'.$url.'</a>
// </div>";

// $headers["From"] = $from;
// $headers["To"] = $to;
// $headers["Subject"] = $subject;
// $headers["Reply-To"] = $username;
// $headers["Content-Type"] = "text/html;UTF-8";


// $smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
// $mail = $smtp->send($to, $headers, $body); // sending the email

// if (PEAR::isError($mail)){
// echo("<div style='display:flex; height: 100%; align-items: center; justify-content: center;'>
// <div style='width: 400px; background:transparent; border-radius: 10px; border: 1px dotted coral; border-bottom: 3px solid red; padding: 15px;'>
// <p style=' font-size: 24px;'>" . $mail->getMessage() . "</p></div></div>");
// exit();
// }
// else {
// echo "<div style='display:flex; height: 100%; align-items: center; justify-content: center;'>
// <div style='background:transparent; width: 400px; border-radius: 10px; border: 1px dotted #f1a947; border-bottom: 3px solid #f1a947; padding: 15px;'><h2 style=' font-size: 24px;'>Email Sent to the address provided. </h2></div>";
// exit();
// // header("Location: http://www.example.com/"); // you can redirect page on successful submission.
// } 

mysqli_stmt_close($stmt);
mysqli_close($conn);

//echo "your reset url is <a href='$url'>".$url."</a>";


} else {
    header("Location: ../index.php?error=notsent");
}