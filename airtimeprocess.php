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

if(isset($_POST['airtimesubmit'])) {


$host="https://vtpass.com/api/pay";

$request_id = test_input($_POST['request_id']);
$client_id = test_input($_POST['client_id']);
$swiftType = test_input($_POST['swiftType']);
$serviceID = test_input($_POST['serviceID']);
$amount = test_input($_POST['amount']);
$phone = test_input($_POST['phone']);
$amountPaid = test_input($_POST['confirmamount']);
$platforms = test_input($_POST['platforms']);

 
$header = array(
    'Accept: application/json',
	'Content-Type: application/json',
	
);
 
$data = array(
    "request_id" => $request_id, 
	"serviceID" => $serviceID,
	"amount" => $amount,
	"phone" => $phone
     
);

$datt = json_encode($data);

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
	CURLOPT_POSTFIELDS => $datt,
	CURLOPT_HTTPHEADER => $header

));
 $result = curl_exec($curl);
 echo $result;
//  $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//  echo $httpCode;
 $sql = 'INSERT INTO `transact`(request_id, client_id, swiftType, amount, amountPaid, platforms) VALUES(:request_id, :client_id, :swiftType, :amount, :amountPaid, :platforms)';
    $stmt = $conn->prepare($sql);
    $results =  $stmt->execute([
		':request_id' => $request_id,
		':client_id' => $client_id,
        ':swiftType' => $swiftType,
        ':amount' => $amount,
        ':amountPaid' => $amountPaid,
        ':platforms' => $platforms
        ]);
    // if($results) {
    //     $message ='Data Entered Successfully';
    //     header('Location: index.php');
    // } else {
    //     $messageErr ='Data not Entered';
    // }
} else {
	echo "You have to submit via the page. Thanks";
}
?>

