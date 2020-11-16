<?php
//include '../swiftdetails/header.php';
require 'swiftdetails/connPDO.php';
//$message = '';
//$messageErr = '';
//if(isset($_POST['submit'])) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $referenceId = test_input($_POST["request_id"]);
    $uidSwift = test_input($_POST['uidSwift']);
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $networkProvider = test_input($_POST['networkProvider']);
    $amount = test_input($_POST['amount']);
    $amountReceived = test_input($_POST['amountReceived']);


    $sql = 'INSERT INTO `airtime` (referenceId, uidSwift, firstName, lastName, email, phone, networkProvider, amount, amountReceived, datet) VALUES(:referenceId, :uidSwift, :firstName, :lastName, :email, :phone, :networkProvider, :amount, :amountReceived)';
    $stmt = $conn->prepare($sql);
    $results =  $stmt->execute([
        ':referenceId' => $referenceId,
        ':uidSwift' => $uidSwift,
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phone' => $phone,
        ':networkProvider' => $networkProvider,
        ':amount' => $amount,
        ':amountReceived' => $amountReceived,
          ]);
    if($results) {
        echo 'Data Entered Successfully';
        header('Location: index.php');
    } else {
        echo 'Data not Entered';
    }
// } else {
//     echo 'Unable to submit request';
// }
   
?>  