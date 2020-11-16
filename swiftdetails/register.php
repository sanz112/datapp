<?php

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
session_start();
require "header.php";

$message = '';
$messageErr= '';
?>
    <link rel="icon" href="../image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="../image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <link href="../swiftbootcss/main.css" rel="stylesheet">
    <title>Swift Geek Links - Register </title>
  </head>

  <body>
    <style>
      #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 3px;
  margin-top: 2px;
}

#message p {
  padding: 1px 5px;
  font-size: 14px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -5px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -5px;
  content: "✖";
}
</style>
<script>
    $(document).ready(function() {
  $("input#num").keydown(function(){
    $(this).css("background-color", "yellow");
  });
  $("input#num").keyup(function(){
    $(this).css("background-color", "pink");
  });

      $("input#num").keypress(function(event) {
        if(event.target.value === 11) {
          alert("Max Input Reached!");
        }
      });

        $("input#num").blur(function(e) {
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
         
         alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
          alert("This is okay to submit");
        }
        e.preventDefault();
      });
    });
</script>
  <?php
if(!isset($_SESSION["userSwiftId"])): ?>
<main>
<section>
  <div style="margin-top: 100px;" class="container">
    <div>
    <form class="form-signin" method="POST" action="signup.php" enctype="multipart/form-data">
      <div class="mt-2 text-center mb-4">
        <img class="mb-2" src="../image/swiftlogo.png" alt="" width="150" height="72">
        <h1 class="font-weight-normal">Swift Geek Links</h1>
        <strong><h2>Register</h2></strong>
      </div>
    <?php 
    if(isset($_GET['error'])) {
      if($_GET['error'] == 'emptyFields') {
        echo "<p style='color: red;'>*Fields Must not Be Empty</p>";
      } else if($_GET['error'] == 'invalidmail') {
        echo "<p style='color: red;'>*Invalid Email Address</p>";
    } else if($_GET['error'] == 'invaliduid') {
      echo "<p style='color: red;'>*Username must contain only alphabeths and number(s).</p>";
  } else if($_GET['error'] == 'passwordcheck') {
    echo "<p style='color: red;'>*Both Password are not the same</p>";
} else if($_GET['error'] == 'usertaken') {
  echo "<p style='color: red;'>*Username has been Taken. Kindly choose a new username.</p>";
} else if($_GET['error'] == 'emailtaken') {
  echo "<p style='color: red;'>*Email Taken. Choose A new Email Address</p>";
} else if($_GET['error'] == 'phone_number_taken') {
  echo "<p style='color: red;'>*Phone Number Taken. Choose a different Number.</p>";
} }
?>
 <!-- <div class="form-label-group">
        <input type="text" id="uid" name="fullName" class="form-control" placeholder="Enter Your Username" required autofocus>
        <label for="uid">Enter Your Name</label>
      </div> -->
      <div class="form-label-group">
        <input type="text" id="uid" name="uid" class="form-control" placeholder="Enter Your Username" required autofocus>
        <label for="uid">Enter Your Username</label>
      </div>

      <div class="form-label-group">
        <input type="email" id="mail" name="mail" class="form-control" placeholder="Enter Your Email address" required autofocus>
        <label for="email">Enter Your Email address</label>
      </div>
      <div class="form-label-group">
        <input type="number" id="phone" maxlength="11" max="100000000000" name="phone" class="form-control" placeholder="Enter Your Phone Address" title="Phone Number Should not be more than 11 Characters" autocomplete="off" required autofocus>
        <label for="num">Phone Number</label>
      </div>
      <!-- <div class="form-label-group">
        <input type="text" id="iconAddress"  name="iconAddress" class="form-control" placeholder="Enter Your  Address"  required autofocus>
        <label for="iconAddress">Address</label>
      </div>
      <div class="form-label-group">
        <input type="text" id="referal" name="referal" class="form-control" placeholder="referal"> 
        <label for="referal">Referal</label>
      </div> -->

      <div class="form-label-group">
        <input type="password" name="pwd" id="pwd" maxlength="15" minlegth="8" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
        <label for="Password">Password</label>
      </div>
              <div id="message">
          <h6>Password must contain the following:</h6>
          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
          <p id="number" class="invalid">A <b>number</b></p>
          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
      <div class="form-label-group">
        <input type="password" name="pwd-repeat" id="pwd-repeat" class="form-control" placeholder="Password" required>
        <label for="pwd-repeat">Confirm Your Password</label>
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text fa fa-user" id="user_type"> User Type</span>
      </div>
      <select class="form-control" id="userType" name="userType">
      <option disabled selected value="-1">Select User Type </option>
      <option disabled value="Admin">Admin </option>
      <option selected value="User">You are a User [Not Editable] </option>
      </select>
      </div>
      <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-info btn-block" id="signup-submit" name="signup-submit" type="submit">Register</button>
      </div>
      <div class="text-center mb-2 mt-2 font-weight-bold">
      <a href="login.php"><h4 style="color: coral;">LogIn?</h4></a>
    </div>
      <p class="mt-2 mb-3 text-muted text-center">
          <b>Swift Geek Links &copy;</b>
          <span id="datefooter"> Year</span>
          . Designed and Powered by <a style="cursor: pointer;" href="https://wa.me/message/LCCPGHQCMQKYK1"><span style="color: #000;">Witt</span><span style="color:plum;">Stack</span></a>
          . All Rights Reserved
        </p>
     
    </form>
            </div>
            </div>
</section>
            </main>
 <?php elseif(isset($_SESSION["userSwiftId"])): ?>
  <main>
<div class="container">
  <div style='text-align: center; color:#000; font-size: 26px; font-weight: 400;'>
      <h3 class="mb-3"> You are already Logged In. You can register with another Email Address & Username or Visit the DashBoard or Home Page to explore our Services</h3> 
      <a style="float: left;" href="login.php" class="btn btn-lg btn-info">LogIn </a><a href="../home.php" class="btn btn-lg btn-success">DashBoard </a><a style="float: right;"href="./register.php" class="btn btn-lg btn-warning">Register </a>
  </div>
  </div>
 </main>
<?php endif;
?>

    <script>

var myInput = document.getElementById("pwd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}


            var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;
        </script>
  