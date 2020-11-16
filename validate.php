<?php 
session_start();
include 'swiftdetails/connPDO.php';

require 'swift_env.php'; 


$username = $_ENV['MY_VTAPP_USERNAME'];
$password = $_ENV['MY_VTAPP_PASSWORD'];


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['validatesubmit'])) {
$billersCode = test_input($_POST['billersCode']);
$serviceID = test_input($_POST['serviceID']);

$datas = array(
		'billersCode' => $billersCode, 
		'serviceID' =>  $serviceID
);
$dat = json_encode($datas);

$host ='https://vtpass.com/api/merchant-verify';

$header = array(
    'Accept: application/json',
	'Content-Type: application/json',
);
if (!function_exists('curl_init')){
	return 'Sorry cURL is not installed!';
}
$curl  = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => $host,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 100,
	CURLOPT_USERPWD => $username.":" .$password,
	CURLOPT_TIMEOUT => 3000,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $dat,
	CURLOPT_HTTPHEADER => $header
));
 $result = curl_exec($curl);
 echo $result;
} else {
	echo "You did no through the right source";
}
?>

