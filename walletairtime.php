<?php
session_start();
require 'swiftdetails/connPDO.php';
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      
if(isset($_POST['airtimesubmit'])) {
        $wallet = test_input($_POST['confirmamount']);
        $idSwiftUsers = test_input($_SESSION['userSwiftId']);
        $sql = "SELECT wallet FROM `users` WHERE idSwiftUsers=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idSwiftUsers]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        //
        if($row = $results) {
            if($row['wallet'] >= $wallet && $_SESSION['walletAmount'] >= $wallet) {
                unset($_SESSION['walletAmount']);
        $_SESSION["walletAmount"] = $row["wallet"];
         $sql = 'UPDATE `users` SET wallet=:wallet + wallet WHERE idSwiftUsers=:idSwiftUsers;';
            $stmt = $conn->prepare($sql);
            $result =  $stmt->execute([
                ':wallet' => -$wallet,
                ':idSwiftUsers' => $idSwiftUsers
                ]);
          // $result = $stmt->execute([$wallet, $idSwiftUsers]);
           
            // $stmt->fetch(PDO::FETCH_ASSOC);
           if($result) {
            $sql = "SELECT wallet from users WHERE idSwiftUsers=?;";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$idSwiftUsers]);
            $resultts = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row = $resultts) {
            $_SESSION["walletAmount"] = $row["wallet"];
           // echo "data selected";
            }
           //if($row ==  $stmt->fetch(PDO::FETCH_ASSOC)) {
             //  $_SESSION['wallet'];
          // if($results) {
            $info = new \stdClass();
              $info->key = "Data Updated Successfully";
              $infonew = json_encode($info);
              echo $infonew;
              //echo
            //  header("Location: home.php");
           
        } else {
            $info = new \stdClass();
            $info->key = "Data  not Updated Successfully";
            $infonew = json_encode($info);
            echo $infonew;
        }
      } else if($row['wallet'] < $wallet && $_SESSION['walletAmount'] < $wallet) {
    //  } else if($row['wallet'] >= !$wallet && $_SESSION['walletAmount'] >= !$wallet) {
        $info = new \stdClass();
        $info->key = "Insufficient Fund";
        $infonew = json_encode($info);
        echo $infonew;
        }
        } else {
            $info = new \stdClass();
            $info->key = "Data  not Fetched";
            $infonew = json_encode($info);
            echo $infonew;
        }
    } else {   
        $info = new \stdClass();
         $info->error = "You are not authorized to view this page and you did not Go Throught the right Source";
        $infonew = json_encode($info);
        echo $infonew;    
    }

       // if(isset($_POST['submit'])) {
           
    
        ?>