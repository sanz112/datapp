<?php
session_start();
require 'swiftdetails/connPDO.php';
require 'swift_env.php'; 


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sim = test_input($_POST['sim']);
$ref = test_input($_POST['ref']);
$var_codew = test_input($_POST['var_codew']);
$phn_numberw = test_input($_POST['phn_numberw']);
$varr = test_input($_POST['varrnew']);
$varrpin = test_input($_POST['varrpin']);
$server = test_input($_POST['server']);

if(isset($_POST['datasubmitt'])) {

$number = $var_codew.$phn_numberw.$varr.$varrpin;
$numbernew = $var_codew.$varr.$phn_numberw.$varrpin;



function HTTPPost($url, array $params) {
    $query = http_build_query($params);
    $ch    = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    $resp = $response;
    echo $resp;
    curl_close($ch);
    return $resp;
}
//}

$urlnew = $_ENV['MY_PAYMENT_URL'];

if($sim == 1) {
$svalues = [
    'apikey' => $_ENV['MY_SIMHOSTING_API_KEY'],
    'server'  => $server,
    'sim' => $sim,
    //'number' => $var_codew.$varr.$phn_numberw.$pin.'#',
    'number' => $number,
    //'message' => 'ok. This is a message from sim 1',
    'ref' => $ref,
    'url' => $urlnew
];
} else {
    $svalues = [
        'apikey' => $_ENV['MY_SIMHOSTING_API_KEY'],
        'server'  => $server,
        'sim' => $sim,
        //'number' => $var_codew.$varr.$phn_numberw.$pin.'#',
        'number' => $numbernew,
        //'message' => 'ok. This is a message from sim 1',
        'ref' => $ref,
        'url' => $_ENV['MY_PAYMENT_URL']
    ];
}

$resp = HTTPPost("https://simhostng.com/api/ussd", $svalues);


} else {
    echo "not found";
}



?>