<?php 
session_start();
require 'swiftdetails/connPDO.php';
require 'swift_env.php'; 


$username = $_ENV['MY_VTAPP_USERNAME'];
$password =  $_ENV['MY_VTAPP_PASSWORD'];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['cablesubmit'])) {

$request_id = test_input($_POST['request_id']);
$serviceID = test_input($_POST['serviceID']);
$billerCode = test_input($_POST['billersCode']);
$variation_code = test_input($_POST['variation_code']);
$amount = test_input($_POST['amount']);
$phone = test_input($_POST['phone']);


$host ='https://vtpass.com/api/pay';

$header = array(
    'Accept: application/json',
	'Content-Type: application/json',
	
);
 
$data = array(
    "request_id" => $request_id, 
    "serviceID" => $serviceID,
     "billersCode" => $billerCode,
    "variation_code" => $variation_code, 
	 "amount" => $amount,
	 "phone" => $phone
);
$dat = json_encode($data);
if (!function_exists('curl_init')){
	return 'Sorry cURL is not installed!';
}
$curl  = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => $host,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 100,
	CURLOPT_USERPWD => $username.":".$password,
	CURLOPT_TIMEOUT => 3000,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $dat,
	CURLOPT_HTTPHEADER => $header
));
 $result = curl_exec($curl);
 echo $result;
}
else {
	echo "You have to submit via the page. Thanks";
}
?>

