<?php
session_start();
require 'swiftdetails/connPDO.php';
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      if(isset($_POST['fundsubmit'])) {
        $wallet = test_input($_POST[('wallet')]);
        $idSwiftUsers = test_input($_SESSION['userSwiftId']);


        $sql = "SELECT wallet FROM `users` WHERE idSwiftUsers=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idSwiftUsers]);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($_SESSION['walletAmount']);
        if($row = $results) {
        $_SESSION["walletAmount"] = $row["wallet"];
         $sql = 'UPDATE `users` as S SET wallet=:wallet + wallet WHERE idSwiftUsers=:idSwiftUsers;';
            $stmt = $conn->prepare($sql);
            $result =  $stmt->execute([
                ':wallet' => $wallet,
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
            }
           //if($row ==  $stmt->fetch(PDO::FETCH_ASSOC)) {
             //  $_SESSION['wallet'];
          // if($results) {
              echo "Data  Updated Successfully";
              header("Location: home.php");
           
        } else {
            echo "Data not Updated";
        }
        }

      } else {
        echo "Please go through the right source. Thanks";
      }
       // if(isset($_POST['submit'])) {
           
    
        ?>