<?php
//session_start();
require 'swift_env.php';

$APIKEY = $_ENV['MY_PAYSTACK_PUBLIC_KEY'];

$myKey = new \stdClass();
$myKey->key =  $APIKEY;
$payKey = json_encode($myKey);

echo $payKey;

// $new = json_decode($payKey);
// echo $new->key;