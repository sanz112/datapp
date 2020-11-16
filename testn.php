<?php
session_start();
require 'swiftdetails/connPDO.php';
require 'swift_env.php'; 
// $name = $_POST['firstname'];
// $secondname = $_POST['secondname'];
// $number = $_POST['numb'];



// $normal = $name.$secondname.'*'.$number.'#';
// $namenew = json_encode($name);
// $data = [
//    'name' => $namenew,
//    'secondname' => $secondname.'*'.$number.'#',
//    'number' => $number
// ];

// echo $data['name'].'<br>';

// $serial = serialize($data);
// echo json_encode($serial).'\n<br>';
$sim= $_POST['sim'];
$server = $_POST['server'];
$ref = $_POST['ref'];
$numb = $_POST['numb'];
$numbnew = $_POST['numbnew'];
//$msg = $_POST['msg'];


$simnew = json_encode($sim);
$message =json_encode($msg);
$servernew = json_encode($server);
$number = json_encode($numb);
$reference = json_encode($ref);


function HTTPPost($url, array $params) {
    $query = http_build_query($params);
    $ch = curl_init();
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


    $svalues = array(
        'apikey' => $_ENV['MY_SIMHOSTING_API_KEY'],
        'server'  => $server,
        'sim' => $sim,
        //'number' => $var_codew.$varr.$phn_numberw.$pin.'#',
        'number' => $numb.$numbnew,
        //'message' => $msg,
        'ref' => $ref,
        'url' =>$_ENV['MY_PAYMENT_URL']
    );
 

$resp = HTTPPost("https://simhostng.com/api/ussd", $svalues);






?>