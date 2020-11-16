<?php
session_start();
require "swiftdetails/header.php"; 
?>
    <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/loading.css" type="text/css">
    <link rel="stylesheet" href="css/swift.css" type="text/css">
    <link href="swiftbootcss/boot.css" rel="stylesheet">
 
    <title>Swift Geek Links - Utility</title>
</head>
<body onload="refLoad()" onunload="refStopped()">

<script>
      $(document).ready(function() {
        $("input#refvalue").val( Math.floor((Math.random() * 1000000000) + 1));
      });
    </script>
<!-- <script>
            //var a= document.createElement("h1");
//var b = document.createTextNode("We are loading the page for you. Please wait...");
// a.appendChild(b);
// document.appendChild(a);
var myVar;

function refLoad() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("swiftContent").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
var i = 0;
var txt = 'Loading the page. Please wait...';
var speed = 50;
var myApp =  setInterval( myMove, speed);
function myMove() {
  if(i < txt.length  ) {
    document.getElementById("swiftDemo").innerHTML += txt.charAt(i);
    i++;
 
  }
}
function refStopped(){
clearInterval(myApp);
}
 </script>          -->
          
 <header>
    <div class="topnav" id="myTopnav">
   <a href="index.php"> <img src="image/swiftlogo.png" class="active" width="30px" height="20px" /></a>
  <a style="background: #fff; padding: 10px 15px 12px 15px; color: #000; font-weight: 700; font-size: 16px;" href="/data/home.php#">DashBoard</a>
              
  <a href="/data/start.php#">About Us</a>
    <a href="/data/start.php#contact">Contact Us</a>

    <?php if(!isset($_SESSION["userSwiftId"])): ?> 
    
      <a href="swiftdetails/register.php">Register</a>
  <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/login.php">LogIn</a>
  <?php elseif(isset($_SESSION["userSwiftId"])): ?>
    
    <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/logout.php">Logout</a>
   <?php if(isset($_SESSION["userType"])): ?> 
      <?php if($_SESSION["userType"] == "Admin"): ?>

      <a style="color: #eece1a; font-weight: 700;" href="admin">Admin</a>
      <?php endif; ?>
      <?php endif; ?>
      <a id="nameuser" style="color: #fff; float: right;"><span class="dropbtn">Welcome, <span onClick="swiftDropdown()" class="dropbtn" style='color:#eece1a;' ><?php echo $_SESSION["userSwiftUid"]; ?></span><i class="fas fa-angle-down"></i></span>
      <img style="float: right; width: 27px; height: 25px; border-radius: 50%;" src="images/swiftuserprofile.png" /></a>
      <div id="myDropdown" class="dropdown-content">
   <p> <a  href="changePassword.php"><i class="mr-2  fa fa-lock"></i>Change Password</a></p>
   <p> <a  href="profile.php"><i class="mr-2 fa fa-user"></i>Profile</a></p>
   <?php if(!isset($_SESSION["userSwiftId"])): ?> 
    
    <p><a href="swiftdetails/register.php"><i class="mr-2  fa fa-lock"></i>Register</a></p>
     <p><a style="color: #eece1a; font-weight: 700;" href="swiftdetails/login.php"><i class="mr-2  fa fa-lock"></i>LogIn</a></p>
    <?php else: ?>
     <p><a  style="color: #eece1a; background: grey; font-weight: 700;" href="swiftdetails/logout.php"><i class="mr-2 fa fa-lock"></i>LogOut</a></p>
    <?php endif; ?>
  </div>
   <?php endif; ?>  

 <style>
.dropbtn {
    cursor: pointer;
    /*display: block;*/
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 5;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  width: 100%;
  z-index: 6;
  text-align:left;
  /*display: block !important;*/
}
.dropdown a:hover {
  background-color: #ddd;
width: 100%;
}

.show {display: block;}
      </style>
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function swiftDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  <style>
      @media screen and (max-width: 978px) {
      #table {
              margin-top: 50px;

          }
    }
      @media screen and (max-width: 768px) {
          #card, #table {
              margin-top: 50px;

          }
      }
      @media screen and (max-width: 768px) {
        #nameuser {
           display: flex;
           align-items: center;
           justify-content: center;
           position: absolute;
           width: 100%;
        
        }
        #nameuser:hover {
           background: none;
        }
      }
      #nameuser:hover {
           background: none;
        }
#nameuser {
    text-transform: uppercase;
}

  </style>
  <div class="menu-btn icon">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
  </a>
</div>
       
        <nav class="menu">
            <div class="menu-branding">
                <div class="portrait"></div>
            </div>
            <ul class="menu-nav">
            <li class="nav-item current">
                    <a href="/data/home.php#" class="nav-link">DashBoard</a>
                </li>
                <li class="nav-item">
                    <a href="/data/start.php#" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/data/start.php#contact" class="nav-link">Contact Us</a>
                </li>
                <?php
  if(!isset($_SESSION["userSwiftId"])) {
      echo '
      <li class="nav-item">
      <a href="swiftdetails/register.php" class="nav-link">Register</a>
  </li>
                <li class="nav-item">
                    <a href="swiftdetails/login.php" class="nav-link">Log In</a>
                </li>'; } else {
                    echo '
                    <li class="nav-item">
                    <a  href="swiftdetails/logout.php" class="nav-link">Log Out</a>
                </li>';
               
                  if(isset($_SESSION["userType"])) {
                    if($_SESSION["userType"] == "Admin") {
                    echo '
                    <li class="nav-item">
                    <a href="admin" class="nav-link">Admin</a>
                </li>
                    ';
                }} }
                ?>
            </ul>
        </nav>
    </header>

<main id="myDiv">
<div class="ajax-loader">
  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/585d0331234507.564a1d239ac5e.gif" class="img-responsive" />
    </div>

    <div id="card">
    <div class="row">
    <div class="col-lg-8">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-5 card">
    <h3 class="text-center py-2">Utility Bill Top Up </h3>
    <form class="w-100" id="paymentForm" method="POST" enctype="multipart/form-data">
    <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="request_id">Reference ID:</span>
      </div>
      <input type="number" id="request_id" name="request_id" class="form-control" placeholder="Reference Identification" required aria-describedby="request_id">
    </div>
    
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="category">Pick</span>
      </div>
      <select id="serviceID" class="form-control" name="serviceID">
        <option value="0" selected="selected">Select</option>
        <option id="kedc" selected="selected" name="ikeja-electric" value="ikeja-electric">IKEDC</option>
        <option id="ekedc" name="eko-electric" value="eko-electric">EKEDC</option>
        <option id="kedco" name="kano-electric" value="kano-electric" >KEDCO</option>
        <option id="phed" name="porthacourt-electric" value="porthacourt-electric" >PHED</option>
        <option id="ibedc" name="ibadan-electric" value="ibadan-electric" >IBEDC</option>
          </select>
      </div>
      <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="type">Pick a Plan</span>
      </div>
    <select class="form-control" id="type" name="type">
        <option name="prepaid" value="type">Prepaid</option>  
        <option name="postpaid">PostPaid</option> 
      </select>
    </div>
      <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fa fa-envelope" id="email"></span>
      </div>
      <input type="email" id="email" name="email" disabled class="form-control" value="<?= $_SESSION['emailSwiftUid']; ?>" placeholder="Email Address" required autofocus aria-describedby="email">
    </div>
  <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-naira" id="wallet">&#x20A6</span>
      </div>
      <input type="number" id="wallet" name="amount" class="form-control" placeholder="Amount to recharge" required aria-describedby="wallet">
    </div>

    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-phone" id="phone"></span>
      </div>
      <input type="number" maxlength="11" max="100000000000" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" required aria-describedby="phone">
    </div>
    <div class="form-row  mb-3"> 
      <div class="w-100 input-group">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-phone" id="billersCode"></span>
      </div>
    <input placeholder="billersCode" class="col form-control" id="billersCode" name="billersCode" />
    <input type="button" class="col-3 btn btn-success btn-md"value="Validate" id="validate_electricity" />
              </div>
              </div>
              <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersName"> Biller's Name </span>
      </div>
      <input type="text" id="billersName" name="billersName" class="form-control" placeholder="Biller Name" required disabled aria-describedby="billersName">
    </div>
    <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="platforms">Select Platform</span>
          </div>
          <select class="form-control" name="platforms" id="platforms" aria-describedby="platforms" required>
              <option value="card">Card</option>
              <option value="wallet">Wallet</option>
            
          </select>
        </div>
    <div class="input-group">
      <input style="background: #f1a947;" id="utilitysubmit" class="btn btn-lg btn-success btn-block" value="Pay for Utility Bill" name="utilitysubmit" type="submit">
    </div>
</form>
    <script>
    $(document).ready(function() {
      $("input#utilitysubmit").on("click", function() {
        alert("Dear Client! we cannot perform the operation at this time. please try again later. Thanks!\n No Charges was made.");
      });
              $("input#billersName, span#billersName").hide();
           $("input#utilitysubmit").hide();
 
      $("input#validate_electricity").on("click", function() {
        $(this).attr("disabled", "disabled");
        var billersCode = $("input#billersCode").val();
        var serviceID = $("input#serviceID").val();
        var type = $("select#type").val();
        //var type
        if (billersCode === " " && serviceID === " ") {
          alert("Your Card ID Number Must not be empty.");
          return false;
        } else {
        var datas = {
            'billersCode': billersCode,
            'serviceID' : serviceID,
            'type' : type
        }
        $.ajax('validate_utility.php', {
            method: 'POST',
            data : datas,
            dataType: 'html',
            beforeSend: function() {
              $('.ajax-loader').css("visibility", "visible");
            },
            success: function(response) {
              var resp = JSON.parse(response);
              var respnew = resp.content.Customer_Name;
              console.log(response + "success");
           $("input#billersName, span#billersName").show();
            $("input#cablesubmit").show();
            $("input#billersName").val(respnew);
            $("input#billersName").attr("value", respnew);
            $('.ajax-loader').css("visibility", "hidden");
        },
          
            error: function(xhr) {
                console.log("Error Found"+ xhr.statusText + xhr.statusCode)
            }

        });
      }
    });
});
    </script>   
   
    <style>
    .ajax-loader {
      visibility: hidden;
      position: absolute;
      display: flex;
      width: 100%;
      height: 100%;
      z-index: 10;
      justify-content: center;
      align-items: center;
    }
    </style>

   
      </div>
</div>
<div id="table" class="col-lg-4">
      <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="card">
      <div  style="width: 100%;">
      <table  style="width: 100%; height: 100%;" class="table text-center">
        <thead  style="width: 100%;" class="thead-dark pl-2">
      <th><h3> Links </h3></th>
        </thead>
        <tbody>
        <tr>
      <td><h5><b><a href="utility.php"> Utility </a> </b></h5></td>
    </tr>
      <tr>
      <td><h5><b><a href="airtime.php"> Airtime </a> </b></h5></td>
      </tr>
      <tr>
      <td><h5><b><a href="data.php"> Data </a> </b></h4></td>
    </tr>
    <tr>
      <td><h5><b><a href="cable.php"> Cable </a> </b></h5></td>
    </tr>
        </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      
      </main>

 
<script>
$(document).ready(function() {
  $("input#request_id").val(Math.floor(Math.random() * 1000000000) +1);
 $("input#request_id").attr("value", Math.floor(Math.random() * 1000000000) +1);
    $("input#phn_number").keydown(function(){
    $(this).css("background-color", "yellow");
  });
  $("input#phn_number").keyup(function(){
    $(this).css("background-color", "pink");
  });

      $("input#phn_number").keypress(function(event) {
        if(event.target.value === 11) {
          alert("Max Input Reached!");
        }
      });

        $("input#phn_number").blur(function(e) {
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
         
         alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
         // $('input#phn_number').val() = $("input##billerCode").val();
          alert("This is okay to submit");
         // $("input#billersCode").val($(this).val());
        }
        e.preventDefault();
        });


       // $("input#billersCode").blur(function(e) {
        
        

        });
      
</script>
        
  



<style>
    option .servicess {
        color: red;
    }
    .servicess {
      color: red !important;
    }
</style>

<style>
#footer {
    background: #000;
    color: #fff;
    position:relative;
}
#footer::after {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color: #fff;
    content: '';
    z-index: -1;
    background: inherit;
    transform-origin: top left;
    transform: skewY(-5deg);
}


.text-left > h4:hover, .text-left >hr:hover {
color: #f1a947;
}
.text-left > #lines:hover {
    width: 200px;
    color: #f1a947;
}

.text-left > #links, .text-left > #links a, .text-left > #social-media a {
    color: #fff;
    list-style: none;
    text-decoration: none;
}
.text-left > #links a:hover, .text-left > #social-media a:hover {
    color: #f1a947;
}
    </style>
<section id="footer">
<div id="foot">
<div class="container">
<div class="row">
<div class="text-left py-3 col-lg-6">
            <h4> About Us </h4>
            <hr id="lines" style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
            <p class="py-2 mb-2" style="color:#fff;">
            
        Welcome to Swift Geek Links. A site where you can purchase airtime, data, utility bills with ease and affordable price        

        </p>
    </div>
    <div  class="text-left py-3 col-lg-3">
        <h4>Quick Links </h4>
        <hr style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
        <ul id="links" class="py-2 mb-2" type="square">
        <li><a href="index.php"> Home </a></li>
        <li class="py-2"><a href="swiftdetails/login.php"> LogIn </a> </li>
        <li class="py-2"><a href="swiftdetails/register.php"> SignUp </a></li>
        <li class="py-2"><a href="swiftdetails/swift_privacy.php"> Privacy Policy </a></li>
        <li class="pt-2"><a title="Frequently Asked Questions"href="swiftdetails/faq.php"> FAQ </a></li>
        </ul>
</div>
<div class="text-left py-3 col-lg-3">
        <h4>Connect With us </h4>
        <hr style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
            <div id="social-media" class="py-2 mb-2">
            <a style="padding-right: 10px;" href="https://www.facebook.com/Swiftgeeklinks"><span class="fab fa-facebook"></span> </a>
        <a style="padding-right: 10px;" title="We are Not here Currently" href="#!"> <span class="fab fa-twitter"></span> </a>
        <a style="padding-right: 10px;" href="https://www.instagram.com/Swiftgeek_world"> <span class="fab fa-instagram "></span> </a>
        </div>
        <a style="text-decoration: none; color: yellow;" href="">Join Our Whatsapp Group </a>
        </div>

</div>
        </div>
        </div>
</section>
<script src="pay/cablepay.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
    <?php
    include 'swiftdetails/footer.php';
    ?>