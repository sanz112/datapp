<?php
include('Mail.php'); // includes the PEAR Mail class, already on your server.

$username = 'info@swiftgeek.com.ng'; // your email address
$password = 'Datageek2020!.'; // your email address password

$body= 'Activate your email;
<a href="https://swiftgeek.com/swiftdetails/login.php?email="'. $email . '&token='. $token.'">Activate Email</a>';

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo("<p>Message successfully sent!</p>");
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
?>
<?php
session_start();
include('Mail.php'); 

if(isset($_POST["submit_message"])) {

// Details from Qserver  
$username = 'info@swiftgeek.com.ng'; 
$password = 'Datageek2020!.'; 

//Parameters to send email

$email = $_POST['email'];
$name = $_POST['user_name'];
$subjectnew = $_POST['subject'];
$message = $_POST['message'];

header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
} 
else {
$from = $email;
$to = $username;
$subject = $subjectnew;
$body= '<h3><strong>Name</strong'.$name.'</h3><br>'.'<h4><strong>Email</strong'.$email.'</stong></h4><br><hr><br>'.$message;
$headers["From"] = $from;
$headers["To"] = $to;
$headers["Subject"] = $subject;
$headers["Reply-To"] = $email;
$headers["Content-Type"] = "text/html; UTF-8";
    
    
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account

//sending the email
$mail = $smtp->send($to, $headers, $body); 

if (PEAR::isError($mail)){
echo("<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>" . $mail->getMessage() . "</p>");
}
else {
 echo("<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Message successfully sent!</p>");
//print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
}
}
 else {
  header("Location: start.php#contact?error=eMAIL_NOT_sENT");
}
?><?php
session_start();
include('Mail.php'); 

if(isset($_POST["submit_message"])) {

// Details from Qserver  
$username = 'info@swiftgeek.com.ng'; 
$password = 'Datageek2020!.'; 

//Parameters to send email

$email = $_POST['email'];
$name = $_POST['user_name'];
$subjectnew = $_POST['subject'];
$message = $_POST['message'];

header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
} 
else {
$from = $email;
$to = $username;
$subject = $subjectnew;
$body= '<h3><strong>Name</strong'.$name.'</h3><br>'.'<h4><strong>Email</strong'.$email.'</stong></h4><br><hr><br>'.$message;
$headers["From"] = $from;
$headers["To"] = $to;
$headers["Subject"] = $subject;
$headers["Reply-To"] = $email;
$headers["Content-Type"] = "text/html; UTF-8";
    
    
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account

//sending the email
$mail = $smtp->send($to, $headers, $body); 

if (PEAR::isError($mail)){
echo("<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>" . $mail->getMessage() . "</p>");
}
else {
 echo("<p style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'>Message successfully sent!</p>");
//print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
}
}
 else {
  header("Location: start.php#contact?error=eMAIL_NOT_sENT");
}
?>