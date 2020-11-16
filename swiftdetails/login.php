<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();
require "header.php";
?>

    <link rel="icon" href="../image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="../image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <link href="../swiftbootcss/main.css" rel="stylesheet">
    <link href="../css/swift.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Swift Geek Links - LogIn</title>
  </head>

  <body>
  <script>
    $(document).ready(function() {
      alert("hi there");
      $("input#uid_email").blur(function(e) {
        if($(this).val() == "wittstack@gmail.com" || $(this).val() == "wittstack" || $(this).val() == "info@swiftgeek.com.ng" ||    $(this).val() == "SwiftGeek" || $(this).val()== "08119865057") {
          $("option#adm").removeAttr('disabled');
          $("option#usr").removeAttr('selected');
          $("option#usr").attr('disabled', 'disabled');
          $("option#adm").attr('selected', 'selected');
        } else {
          $("option#adm").attr('disabled', 'disabled');
          $("option#usr").attr('selected', 'selected');
          $("option#usr").removeAttr('disabled', 'disabled');
          $("option#adm").removeAttr('selected', 'selected');
        }
      });
      })
    //   ("form input#uid_email").on("blur", function() {
    //     alert("hi");
        
    // });
        
        </script>
  <?php

    echo '
    <form class="form-signin" method="POST" action="log.php" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="text-center mb-2">
        <img class="mb-4" src="../image/swiftlogo.png" alt="" width="150" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Swift Geek Links</h1>
        <strong><h2>LogIn</h2></strong>';
      
        if(!isset($_SESSION["userSwiftId"])) {
         include "connPDO.php";

if($_GET) {
        if(isset($_GET["email"])) {
            $email = $_GET["email"];
            if($email == "") {
                unset($email);
            }
        }
        if(isset($_GET["token"])) {
            $token = $_GET["token"];
            if($token == "") {
                unset($token);
            }
        }
        if(!empty($email) && !empty($token))  {
            $select = $conn->prepare("SELECT idSwiftUsers from users WHERE emailSwiftUsers = :email AND token=:token");
            $select->execute(array(
              "email" => $email,
                "token" => $token
            ));
            if($select->fetchColumn() > 0) {
                $update = $conn->prepare("UPDATE users SET confirmation=1, token='' WHERE emailSwiftUsers=:email");
                $update->execute(array(
                    "email" => $email
                ));
                if(!$update) {
                  echo "<p style='color: red; font-weight: 400;'>Email has not been Confirmed</p>";
            } else {
                echo "<p style='color: green; font-weight: 500;'>Email has been confirmed! </p>";
            }
            
    }
      
        } 
    }
    if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyFields") {
            echo "<p style='font-weight: 300; color: red;' class='text-center'>Field(s) is/are Empty. Kindly fill in your details</p>";

            } elseif($_GET["error"] == "NouserFound") {
              echo "<p style='font-weight: 300; color: red;' class='text-center'>UserName/Email Not Found. Kindly Register via <a style='font-weight: 700;' href='register.php'> SignUp </a> or Verify your Email Address via the link sent to email address. Thanks</p>";
            }
          } elseif(isset($_GET["passworderror"])) {
            if($_GET["passworderror"] == "wrongPassword") {
            echo "<p style='font-weight: 300; color: red;' class='text-center'>Wrong Password. Kindly check up Your Password</p>";
          }
          }
        }
      echo '</div>
                <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="uid_email"></span>
          </div>
          <input type="text" id="uid_email" name="uid" class="form-control" placeholder="Username/Email address" required autofocus aria-describedby="uid_email">
        </div>
      
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text fa fa-lock" id="uid_email"></span>
          </div>
  <input id="password" type="password" name="pwd" maxlength="15" minlegth="8" id="inputPassword" class="form-control" placeholder="Password" required aria-describedby="password">
  <div class="input-group-append">
    <span style="cursor: pointer" onClick="showPassword()" class="fa fa-eye input-group-text" id="pwdnew"></span>
  </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text fa fa-user" id="user_type"> User Type</span>
  </div>
  <select class="form-control" id="user_type" name="userType">
  <option disabled value="-1">Select User Type </option>
  <option id="adm" disabled value="Admin">Admin </option>
  <option id="usr" selected value="User">User </option>
  </select>
  </div>
</div>';
      if(!isset($_SESSION["userSwiftId"])) {
        if(isset($_GET["reset"])) {
          if($_GET["reset"] == "success") {
          echo "<p style='font-weight: 300; color: green;' class='text-center'>We have Sent You a Link. Check Your E-mail Address</p>";
          }
          }  if(isset($_GET["newpwd"])) {
              if($_GET["newpwd"] == "passwordupdated") {
                  echo "<p style='display: flex; height: 100%; color: blue; align-items: center; justify-content: center; font-size: 14px; font-weight: 300;'>Your Password has been updated</p>";
                  }
          } 
      } else {
           //header("Location: login.php?login=you are logged in already");
          echo "<div style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 20px;'> <h3>You are already logged in</h3></div>";
      }
      echo '
    <div class="row  mb-2">
      <div style="font-weight: 300;" class="checkbox col-6">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <div style="text-align: right; font-weight: 500;" class="col-6">
      <p><a style="color: #000; font-weight: 500;" href="forgotPassword.php">Forgot Password?</a></p>
      </div>
    </div> 
    <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-info btn-block" name="login-submit" type="submit">Sign in</button>
      </div>
      <div class="text-center mb-2 mt-3 font-weight-bold">
      <a href="register.php"><h4 style="color: coral;">Register?</h4></a>
    </div>
    <p class="mt-4 mb-3 text-muted text-center">
        <b>Swift Geek Links &copy;</b>
        <span id="datefooter"> Year</span>
        . Designed and Powered by <a style="cursor: pointer;" href="https://wa.me/message/LCCPGHQCMQKYK1"><span style="color: #000;">Witt</span><span style="color:plum;">Stack</span></a>
        . All Rights Reserved
      </p>
    </form><br>';

?>
      <script>
        function showPassword() {
  var x = document.getElementById("password");
  var y = document.querySelector("span#pwdnew");
  if (x.type === "password") {
    x.type = "text";
    y.classList.remove("fa fa-eye");
    y.classList.add("fas fa-eye-slash");
  } else {
    x.type = "password";
     y.classList.remove("fas fa-eye-slash");
    y.classList.add("fa fa-eye");
  }
}
     var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;
        </script>
        <!--
  <script>
      $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($("#password").attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});-->
          
        