<?php
session_start();
require "swiftdetails/header.php"; 
?>
    <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/swift.css" type="text/css">
    <link rel="stylesheet" href="css/loading.css" type="text/css">
    <link href="swiftbootcss/boot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <title>Swift Geek Links - Data</title>
</head>
<body onload="refLoad()" onunload="refStopped()">
<script>
$(document).ready(function() {
$("input#request_id").val(Math.floor(Math.random() * 1000000000) + 1).attr("disabled", "disabled");
$("input[name='ref']").val(Math.floor(Math.random() * 1000000000) + 1);
});
</script>
<script>
var myVar;
function refLoad() {
    myVar = setTimeout(showPage, 4000);
}

function showPage() {
  document.getElementById("swiftContent").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
var i = 0;
var txt = 'Loading. Please wait...';
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
 </script>      
      <style>
      #myDiv {
        display:none;
      }    
      </style>
    <header>
    <div class="topnav" id="myTopnav">
   <a href="index.php"> <img src="image/swiftlogo.png" class="active" width="30px" height="20px" /></a>
  <a style="background: #fff; padding: 10px 15px 12px 15px; color: #000; font-weight: 700; font-size: 16px;" href="/data/home.php#">DashBoard</a>
              
  <a href="/data/start.php#">About Us</a>
    <a href="/data/start.php#contact">Contact Us</a>

    <?php if(!isset($_SESSION["userSwiftId"])): ?> 
    
      <a href="swiftdetails/register.php">Register</a>
  <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/login.php">LogIn</a>
    <?php else: ?>
    
    <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/logout.php">Logout</a>
      <?php if(isset($_SESSION["userType"]) == "Admin"): ?>
      <a style="color: #eece1a; font-weight: 700;" href="admin">Admin</a>
      <?php endif; ?>

      <a id="nameuser" style="color: #fff; float: right;"><span class="dropbtn">Welcome, <span onClick="swiftDropdown()" class="dropbtn" style='color:#eece1a;' ><?php echo $_SESSION["userSwiftUid"]; ?></span><i class="fas fa-angle-down"></i><img class="ml-2" style="float: right; width: 27px; height: 25px; border-radius: 50%;" src="images/swiftuserprofile.png" /></span>
      </a>
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
    <div id="swiftContent">
    <div>
    <div  class="loadingio-spinner-pulse-np1e5y15zy"><div class="ldio-vcgc72oq9pl">
    <div></div><div></div><div></div>

    </div></div><br>
    <div id="swiftNew">
    <p style="text-align: center;" id="swiftDemo"></p>
    </div>
    </div>
    </div>
<?php if(isset($_SESSION['userSwiftId'])): ?>

   <main id="myDiv">
    <div id="card">
    <div class="row">
    <div class="col-lg-4">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-5 card">
    <h3 class="text-center py-2">Data Top Up (SME from SwiftGeek) </h3>
    <strong> This is Working </strong>
    <form class="w-100" id="paymentFormNew" method="POST" action="" enctype="multipart/form-data">
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="varrpin">variable:</span>
      </div>
    <input type="text" class="form-control" name="var_codew" id="var_codew" placeholder="var_codew" required/>
</div>
<!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="var_codew">var_code:</span>
      </div>
      <input type="text" id="var_codew" name="var_codew" class="form-control" placeholder="Var Code" required aria-describedby="var_codew">
    </div> -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="varrnew">variable:</span>
      </div>
    <input type="text" class="form-control" name="varrnew" id="varrnew" placeholder="varrnew" required/>
</div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="varrnew">variable:</span>
      </div>
      <input type="text" id="varrnew" name="varrnew" class="form-control" placeholder="variable"  required aria-describedby="varrnew">
    </div> -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="varrpin">Pin:</span>
      </div>
    <input type="text" class="form-control" name="varrpin" id="varrpin" placeholder="Pin" required/>
</div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="varrpin">variable:</span>
      </div>
      <input type="text" id="varrpin" name="varrpin" class="form-control" placeholder="variable"  required aria-describedby="varrpin">
    </div> -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="server">Server</span>
      </div>
    <input type="text" class="form-control" name="server"  id="server" placeholder="server" required/>
</div>
    <!-- <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="server">Server:</span>
      </div>
      <input type="text" id="server" name="server" class="form-control" placeholder="Server"  required aria-describedby="server">
    </div>  -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="ref">Reference ID:</span>
      </div>
    <input type="number" class="form-control" name="ref" id="ref" placeholder="reference" required/>
</div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="ref">Reference ID:</span>
      </div>
      <input type="number" id="ref" name="ref" class="form-control" placeholder="Reference Identification" required aria-describedby="ref">
    </div>
    -->

    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="sim">Pick</span>
      </div>
    <select class="form-control" name="sim" id="sim">
    <option value="-1" selected="selected">Select A Network Provider</option>
    <option value="1">MTN NG</option>
    <option value="2">AIRTEL NG</option>
    <option value="3">GLO NG</option>
    <option value="4">GLO NG</option>
    </select>
    </div>
    <!-- <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="sim">Pick</span>
      </div>
      <select id="sim" class="form-control" name="sim">
        <option value="-1" selected="selected">Select A Network Provider</option>
        <option id="mtn" name="mtn" value="1">MTN NG</option>
        <option id="airtel" name="airtel" value="2" >AIRTEL NG</option>
        <option id="glo" name="glo" value="3">GLO NG</option>
       <option id="9mobile" name="9mobile" value="4">9MOBILE NG</option>

      </select>
      </div> -->
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="servicesw">Pick</span>
      </div>
    <select  id="servicesw" class="form-control" name="servicesw">
        <option value="-1">Select Data Plans</option>  
      </select>
    </div>
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="walletw">&#x20A6</span>
      </div>
    <input type="number" class="form-control" id="walletw" name="amount" placeholder="reference" required/>
</div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="walletw">&#x20A6</span>
      </div>
      <input type="number" id="walletw" name="amountw" class="form-control" placeholder="Amount to recharge" required aria-describedby="walletw">
    </div> -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="serviceIDw">Service ID</span>
      </div>
      <input type="text"  class="form-control" id="serviceIDw" name="serviceIDw"  placeholder="Your Service ID" required>
    </div>
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="emailw">Email Address</span>
      </div>
    <input type="email"  class="form-control" id="emailw" name="emailw" value="<?= $_SESSION['emailSwiftUid']; ?>" placeholder="Email address"/>        
    </div> 
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="emailw">Email Address</span>
      </div>
      <input type="emailw" id="emailw" name="emailw" class="form-control"  placeholder="Your Email Address" required aria-describedby="emailw">
    </div> -->
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="phn_numberw">Phone Number</span>
      </div>
    <input type="number"  maxlength="11" max="100000000000" class="form-control" name="phn_numberw"  id="phn_numberw" required placeholder="Phone Number"/>
</div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="phn_numberw">Phone Number</span>
      </div>
      <input type="number" maxlength="11" max="100000000000" id="phn_numberw" name="phn_numberw" class="form-control" placeholder="Enter Your Phone Number" required aria-describedby="phn_numberw">
    </div> -->
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersCodew"> Customer's Number </span>
      </div>
      <input type="text" id="billersCodew" name="billersCodew" class="form-control" disabled placeholder="Your Biller ID" required aria-describedby="billersCodew">
    </div> -->
    <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="platforms">Select Platform</span>
          </div>
          <select class="form-control" name="platforms" id="platforms">
              <option value="card">Card</option>
              <option value="wallet">Wallet</option>
            
          </select>
        </div>
    <div class="input-group">
    <input type="submit" style="background: #f1a947;" class="btn btn-lg btn-success btn-block" id="datasubmit" name="datasubmitt" value="Purchase From SwiftGeek">
    </div>
    </form>
      </div>
      <script>
        $(document).ready(function() {
     
         $("select#servicesw").on("change", function() {
       
          $("input#varrnew").attr("value", $("select#servicesw option:selected").val()); 
                function myTrim(x) {
                  return x.replace(/^\s+|\s+$/gm,'');
                }
                var str = $("select#servicesw option:selected").text();
                $("input#walletw").val(parseFloat(myTrim(str.substr(1, 4))));
                $("input#walletw").attr("value",parseFloat(myTrim(str.substr(1, 4))));
        
        });
     
              });
  
              </script>
</div>

    <div id= "table" class="col-lg-4">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-5 card">
    <h3 class="text-center py-2">Data Top Up(From Third Party) </h3>
    <strong> This is likewise Working </strong>
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
      <select id="category" class="form-control" name="category">
        <option value="-1" selected="selected">Select A Network Provider</option>
        <option id="mtn" name="mtn" value="001">MTN NG</option>
        <option id="glo" name="glo" value="002">GLO NG</option>
        <option id="airtel" name="airtel" value="003" >AIRTEL NG</option>
        <option id="9mobile" name="9mobile" value="004">9MOBILE NG</option>
        <option id="9mobile" name="9mobile" value="005">SMILE NG</option>
      </select>
      </div>

    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="services">Pick</span>
      </div>
    <select class="form-control" id="services" name="variation">
        <option value="0">Select Data Plans</option>  
      </select>
    </div>
     
      <input type="hidden" id="variation_code" name="variation_code" class="form-control" placeholder="Variation Code" required aria-describedby="variation_code">

      <input type="hidden" id="wallet" name="amount" class="form-control" disabled placeholder="Amount to Subcribe" required aria-describedby="wallet">
  
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="serviceID">Service ID</span>
      </div>
      <input type="text" id="serviceID" name="serviceID" class="form-control" placeholder="Your Service ID" required aria-describedby="serviceID">
    </div>

    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-envelope" id="email"></span>
      </div>
      <input type="email" id="email" name="email" class="form-control" value="<?= $_SESSION['emailSwiftUid']; ?>" placeholder="Your Email Address" required aria-describedby="email">
    </div>

    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="phone">Phone</span>
      </div>
      <input type="number" maxlength="11" max="100000000000" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" required aria-describedby="phone">
    </div>
    <!-- <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersCode"> Biller's Number </span>
      </div>
      <input type="number" id="billersCode" name="billersCode" class="form-control" placeholder="Your Biller ID" required aria-describedby="billersCode">
    </div> -->
    <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="platformdatas">Select Platform</span>
          </div>
          <select class="form-control" name="platformdatas" id="platformdatas" aria-describedby="platformdatas" required>
              <option value="card">Card</option>
              <option value="wallet">Wallet</option>
            
          </select>
        </div>
    <div class="w-100 input-group">
      <input type="submit" style="background: #f1a947;" class="btn btn-lg btn-success btn-block" id="datathirdsubmit" name="datathirdsubmit" value="Purchase Data">
    </div>
    </form>
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
      <td><h5><b><a href="data.php"> Data </a> </b></h4></td>
    </tr>
        <tr>
      <td><h5><b><a href="cable.php"> Cable </a> </b></h5></td>
    </tr>
        <tr>
      <td><h5><b><a href="utility.php"> Utility </a> </b></h5></td>
    </tr>
      <tr>
      <td><h5><b><a href="airtime.php"> Airtime </a> </b></h5></td>
      </tr>    
        </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      </main>

      <?php elseif(!isset($_SESSION['userSwiftId'])): ?>
              <main id="myDiv">
      <div  style="position: absolute; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
      <div id="alert_messageErr" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="text-center">Hello User! Please You have to Log In. Thanks </h4>
            </div>
            <script>
              $(document).ready(function() {
                $(".close").click(function() {
                  window.location = "http://localhost:81/data/swiftdetails/login.php";
                });
              });
            </script>
      </div>
            </main>
      <?php endif; ?>

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
<script>

/* Please do not make any effect to this JSON. Thanks */
var optionVarsw = [
{"response_description":"1","content":{"ServiceName":"MTN Data","varrpin":"3337#","server":"SWMTNNKKR","varcode":"*461*","serviceID":"mtn-data","convinience_fee":"0 %","varations":[
  {"variation_code":"mtn-1gb-170", "var_cod" :"*500*", "name":"N170 - 500MB - 30 days","variation_amount":"170","fixedPrice":"Yes"},{"variation_code":"mtn-1gb-300", "var_cod" :"*1000*", "name":"N300 - 1GB - 30 days","variation_amount":"300","fixedPrice":"Yes"},{"variation_code":"mtn-2gb-600","var_cod" :"*2000*","name":"N600 - 2GB - 30 days","variation_amount":"600","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-900","var_cod" :"*3000*","name":"N900 - 3GB - 30 days","variation_amount":"900","fixedPrice":"Yes"},{"variation_code":"mtn-5gb-1550","var_cod" :"*5000*","name":"N1550 - 5GB - 30 days","variation_amount":"1550","fixedPrice":"Yes"}]}},


  {"response_description":"2","content":{"ServiceName":"Airtel Data","varrpin":"1472#","server":"SWMTNNKKR","varcode":"*141*6*2*1*","serviceID":"airtel-data","convinience_fee":"0 %","varations":[{"variation_code":"airt-950", "var_cod" : "7*1*","name":"N950 - 1.5GB - 30 Days","variation_amount":"950","fixedPrice":"Yes"},{"variation_code":"airt-1140", "var_cod" : "6*1*","name":"N1140 - 2GB - 30 Days","variation_amount":"1140","fixedPrice":"Yes"},{"variation_code":"airt-1425", "var_cod" : "5*1*","name":"N1425 - 3GB - 30 Days","variation_amount":"1425","fixedPrice":"Yes"},{"variation_code":"airt-1900", "var_cod" : "4*1*","name":"N1900 - 4.5GB - 30 Days","variation_amount":"1900","fixedPrice":"Yes"},{"variation_code":"airt-2375", "var_cod" : "3*1*","name":"N2375  - 6GB - 30 Days","variation_amount":"2375","fixedPrice":"Yes"},
{"variation_code":"airt-2850", "var_cod" : "2*1*","name":"N2850 - 8GB - 30 Days","variation_amount":"2850","fixedPrice":"Yes"},
{"variation_code":"airt-3800", "var_cod" : "1*1*","name":"N3800 - 11GB - 30 Days","variation_amount":"3800","fixedPrice":"Yes"}]}},


{"response_description":"3","content":{"ServiceName":"GLO Data","varrpin":"#","server":"SWGLODLMP","varcode":"*127*","serviceID":"glo-data","convinience_fee":"0 %","varations":[{"variation_code":"glo450", "var_cod" : "57*","name":"N450 - 940MB - 14 Days","variation_amount":"450","fixedPrice":"Yes"},{"variation_code":"glo850", "var_cod" : "53*","name":"N850 - 1.84GB - 30 days","variation_amount":"850","fixedPrice":"Yes"},{"variation_code":"glo1750", "var_cod" : "55*","name":"N1750 - 4.5GB - 30 days","variation_amount":"1750","fixedPrice":"Yes"},{"variation_code":"glo2225", "var_cod" :"58*","name":"N2225 - 7.2GB - 30 days","variation_amount":"2200","fixedPrice":"Yes"},{"variation_code":"glo2700", "var_cod" :"54*","name":"N2700 - 8.75GB - 30 days","variation_amount":"2700","fixedPrice":"Yes"},{"variation_code":"glo3560", "var_cod" : "59*","name":"N3560 - 12.5GB - 30 days","variation_amount":"3560","fixedPrice":"Yes"},{"variation_code":"glo4408", "var_cod" : "2*","name":"N4480 - 15.6GB - 30 days","variation_amount":"4480","fixedPrice":"Yes"}]}},

{"response_description":"4","content":{"ServiceName":"9mobile Data","varrpin":"#","server":"SWGLODLMP","varcode":"*229*2*","serviceID":"etisalat-data","convinience_fee":"0 %","varations":[
  {"variation_code":"eti-190","var_cod" : "10*","name":"N190 - 250MB - 7 Days","variation_amount":"190","fixedPrice":"Yes"},
{"variation_code":"eti-440","var_cod" : "1*","name":"N440 - 1GB - 7 Days","variation_amount":"440","fixedPrice":"Yes"},
{"variation_code":"eti-1275", "var_cod" : "2*","name":"N1275 - 7GB - 7 Days","variation_amount":"1275","fixedPrice":"Yes"},{"variation_code":"eti-850","var_cod" : "7*","name":"N850 - 1.5GB - 30 Days","variation_amount":"850","fixedPrice":"Yes"},{"variation_code":"eti-1030","var_cod" : "25*","name":"N1020 - 2GB - 30 days","variation_amount":"1020","fixedPrice":"Yes"},{"variation_code":"eti-1275","var_cod" : "3*","name":"N1275 - 3GB - 30 Days","variation_amount":"1275","fixedPrice":"Yes"},
{"variation_code":"eti-1700","var_cod" : "8*","name":"N1700 - 4.5GB - 30 Days","variation_amount":"1700","fixedPrice":"Yes"},
{"variation_code":"eti-3400","var_cod" : "36*","name":"N3400 - 11GB - 30 days","variation_amount":"3400","fixedPrice":"Yes"},
{"variation_code":"eti-4250","var_cod" : "37*","name":"N4250  - 15GB - 30 Days","variation_amount":"4250","fixedPrice":"Yes"}]}}];



var optionVarsx = [
{"response_description":"001","content":{"ServiceName":"MTN Data","serviceID":"mtn-data","convinience_fee":"0 %","varations":[{"variation_code":"mtn-10mb-100","name":"N100 100MB - 24 hrs","variation_amount":"100","fixedPrice":"Yes"},{"variation_code":"mtn-50mb-200","name":"N200 200MB - 2 days","variation_amount":"200","fixedPrice":"Yes"},{"variation_code":"mtn-100mb-1000","name":"N1000 1.5GB - 30 days","variation_amount":"1000","fixedPrice":"Yes"},{"variation_code":"mtn-500mb-2000","name":"N2000 4.5GB - 30 days","variation_amount":"2000","fixedPrice":"Yes"},{"variation_code":"mtn-20hrs-1500","name":"N1500 6GB - 7 days","variation_amount":"1500","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-2500","name":"N2500 6GB - 30 days","variation_amount":"2500","fixedPrice":"Yes"},{"variation_code":"mtn-data-3000","name":"N3000 8GB - 30 days","variation_amount":"3000","fixedPrice":"Yes"},{"variation_code":"mtn-1gb-3500","name":"N3500 10GB - 30 days","variation_amount":"3500","fixedPrice":"Yes"},{"variation_code":"mtn-100hr-5000","name":"N5000 15GB - 30 days","variation_amount":"5000","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-6000","name":"N6000 20GB - 30 days","variation_amount":"6000","fixedPrice":"Yes"},{"variation_code":"mtn-40gb-10000","name":"N10000 40GB - 30 days","variation_amount":"10000","fixedPrice":"Yes"},{"variation_code":"mtn-75gb-15000","name":"N15000 75GB - 30 days","variation_amount":"15000","fixedPrice":"Yes"},{"variation_code":"mtn-110gb-20000","name":"N20000 110GB - 30 days","variation_amount":"20000","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-1500","name":"N1500 3GB - 30 days","variation_amount":"1500","fixedPrice":"Yes"}]}},

{"response_description":"002","content":{"ServiceName":"GLO Data","serviceID":"glo-data","convinience_fee":"0 %","varations":[{"variation_code":"glo100","name":"Glo Data N100 - 105MB - 2 day","variation_amount":"100","fixedPrice":"Yes"},{"variation_code":"glo200","name":"Glo Data N200 - 350MB - 4 days","variation_amount":"200","fixedPrice":"Yes"},{"variation_code":"glo500","name":"Glo Data N500 - 1.05GB - 14 days","variation_amount":"500","fixedPrice":"Yes"},{"variation_code":"glo1000","name":"Glo Data N1000 - 2.5GB - 30 days","variation_amount":"1000","fixedPrice":"Yes"},{"variation_code":"glo2000","name":"Glo Data N2000 - 5.8GB - 30 days","variation_amount":"2000","fixedPrice":"Yes"},{"variation_code":"glo2500","name":"Glo Data N2500 - 7.7GB - 30 days","variation_amount":"2500","fixedPrice":"Yes"},{"variation_code":"glo3000","name":"Glo Data N3000 - 10GB - 30 days","variation_amount":"3000","fixedPrice":"Yes"},{"variation_code":"glo4000","name":"Glo Data N4000 - 13.25GB - 30 days","variation_amount":"4000","fixedPrice":"Yes"},{"variation_code":"glo5000","name":"Glo Data N5000 - 18.25GB - 30 days","variation_amount":"5000","fixedPrice":"Yes"},{"variation_code":"glo8000","name":"Glo Data N8000 - 29.5GB - 30 days","variation_amount":"8000","fixedPrice":"Yes"},{"variation_code":"glo10000","name":"Glo Data N10000 - 50GB - 30 days","variation_amount":"10000","fixedPrice":"Yes"},{"variation_code":"glo15000","name":"Glo Data N15000 - 93GB - 30 days","variation_amount":"15000","fixedPrice":"Yes"},{"variation_code":"glo18000","name":"Glo Data N18000 - 119GB - 30 days","variation_amount":"18000","fixedPrice":"Yes"},{"variation_code":"glo1500","name":"Glo Data N1500 - 4.1GB - 30 days","variation_amount":"1500","fixedPrice":"Yes"},{"variation_code":"glo20000","name":"Glo Data N20000 - 138GB - 30 days","variation_amount":"20000","fixedPrice":"Yes"}]}},

{"response_description":"003","content":{"ServiceName":"Airtel Data","serviceID":"airtel-data","convinience_fee":"0 %","varations":[{"variation_code":"airt-50","name":"Airtel Data Bundle - 50 Naira - 25MB - 1Day","variation_amount":"50","fixedPrice":"Yes"},{"variation_code":"airt-100","name":"Airtel Data Bundle - 100 Naira - 75MB - 1Day","variation_amount":"100","fixedPrice":"Yes"},{"variation_code":"airt-200","name":"Airtel Data Bundle - 200 Naira - 200MB - 3Days","variation_amount":"200","fixedPrice":"Yes"},{"variation_code":"airt-300","name":"Airtel Data Bundle - 300 Naira - 350MB - 7 Days","variation_amount":"300","fixedPrice":"Yes"},{"variation_code":"airt-500","name":"Airtel Data Bundle - 500 Naira - 750MB - 14 Days","variation_amount":"500","fixedPrice":"Yes"},{"variation_code":"airt-1000","name":"Airtel Data Bundle - 1,000 Naira - 1.5GB - 30 Days","variation_amount":"1000","fixedPrice":"Yes"},{"variation_code":"airt-1500","name":"Airtel Data Bundle - 1,500 Naira - 3GB - 30 Days","variation_amount":"1500","fixedPrice":"Yes"},{"variation_code":"airt-2000","name":"Airtel Data Bundle - 2,000 Naira - 4.5GB - 30 Days","variation_amount":"2000","fixedPrice":"Yes"},{"variation_code":"airt-3000","name":"Airtel Data Bundle - 3,000 Naira - 8GB - 30 Days","variation_amount":"3000","fixedPrice":"Yes"},{"variation_code":"airt-4000","name":"Airtel Data Bundle - 4,000 Naira - 11GB - 30 Days","variation_amount":"4000","fixedPrice":"Yes"},{"variation_code":"airt-5000","name":"Airtel Data Bundle - 5,000 Naira - 15GB - 30 Days","variation_amount":"5000","fixedPrice":"Yes"},{"variation_code":"airt-1500-2","name":"Airtel Binge Data - 1,500 Naira (7 Days) - 6GB","variation_amount":"1500","fixedPrice":"Yes"},{"variation_code":"airt-10000","name":"Airtel Data Bundle - 10,000 Naira - 40GB - 30 Days","variation_amount":"10000","fixedPrice":"Yes"},{"variation_code":"airt-15000","name":"Airtel Data Bundle - 15,000 Naira - 75GB - 30 Days","variation_amount":"15000","fixedPrice":"Yes"},{"variation_code":"airt-20000","name":"Airtel Data Bundle - 20,000 Naira - 110GB - 30 Days","variation_amount":"20000","fixedPrice":"Yes"}]}},

{"response_description":"004","content":{"ServiceName":"9mobile Data","serviceID":"etisalat-data","convinience_fee":"0 %","varations":[{"variation_code":"eti-100","name":"9mobile Data - 100 Naira - 100MB - 1 day","variation_amount":"100","fixedPrice":"Yes"},{"variation_code":"eti-200","name":"9mobile Data - 200 Naira - 650MB - 1 day","variation_amount":"200","fixedPrice":"Yes"},{"variation_code":"eti-500","name":"9mobile Data - 500 Naira - 500MB - 30 Days","variation_amount":"500","fixedPrice":"Yes"},{"variation_code":"eti-1000","name":"9mobile Data - 1000 Naira - 1.5GB - 30 days","variation_amount":"1000","fixedPrice":"Yes"},{"variation_code":"eti-2000","name":"9mobile Data - 2000 Naira - 4.5GB Data - 30 Days","variation_amount":"2000","fixedPrice":"Yes"},{"variation_code":"eti-5000","name":"9mobile Data - 5000 Naira - 15GB Data - 30 Days","variation_amount":"5000","fixedPrice":"Yes"},{"variation_code":"eti-10000","name":"9mobile Data - 10000 Naira - 40GB - 30 days","variation_amount":"10000","fixedPrice":"Yes"},{"variation_code":"eti-15000","name":"9mobile Data - 15000 Naira - 75GB - 30 Days","variation_amount":"15000","fixedPrice":"Yes"},{"variation_code":"eti-27500","name":"9mobile Data - 27,500 Naira - 30GB - 90 days","variation_amount":"27500","fixedPrice":"Yes"},{"variation_code":"eti-55000","name":"9mobile Data - 55,000 Naira - 60GB - 180 days","variation_amount":"55000","fixedPrice":"Yes"},{"variation_code":"eti-110000","name":"9mobile Data - 110,000 Naira - 120GB - 365 days","variation_amount":"110000","fixedPrice":"Yes"}]}},


{"response_description":"005","content":{"ServiceName":"Smile Payment","serviceID":"smile-direct","convinience_fee":"N0.00","variations":[{"variation_code":"516","name":"SmileVoice ONLY 65 for 30days - 510 Naira","variation_amount":"510.00","fixedPrice":"Yes"},{"variation_code":"413","name":"2GB MidNite for 7days - 1,020 Naira","variation_amount":"1020.00","fixedPrice":"Yes"},{"variation_code":"517","name":"SmileVoice ONLY 135 for 30days - 1,020 Naira","variation_amount":"1020.00","fixedPrice":"Yes"},{"variation_code":"414","name":"3GB MidNite for 7days - 1,530 Naira","variation_amount":"1530.00","fixedPrice":"Yes"},{"variation_code":"415","name":"3GB Weekend ONLY for 3days - 1,530 Naira","variation_amount":"1530.00","fixedPrice":"Yes"},{"variation_code":"518","name":"SmileVoice ONLY 430 for 30days - 3,070 Naira","variation_amount":"3070.00","fixedPrice":"Yes"},{"variation_code":"airtime","name":"Buy Airtime","variation_amount":"0.00","fixedPrice":"Yes"},{"variation_code":"583","name":"UnlimitedPlatinum for 30days - 24,000 Naira","variation_amount":"24000.00","fixedPrice":"Yes"},{"variation_code":"624","name":" 1GB Flexi for 1days - 300 Naira","variation_amount":"300.00","fixedPrice":"Yes"},{"variation_code":"625","name":" 2.5GB Flexi for 2days - 500 Naira","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"626","name":"1GB Flexi-Weekly for 7days - 500 Naira","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"606","name":"1.5GB Bigga for 30days - 1,000 Naira","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"627","name":" 2GB Flexi-Weekly for 7days - 1,000 Naira","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"607","name":"2GB Bigga for 30days - 1,200 Naira","variation_amount":"1200.00","fixedPrice":"Yes"},{"variation_code":"608","name":"3GB Bigga for 30days - 1,500 Naira","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"628","name":" 6GB Flexi-Weekly for 7days - 1,500 Naira","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"620","name":"5GB Bigga for 30days - 2,000 Naira","variation_amount":"2000.00","fixedPrice":"Yes"},{"variation_code":"609","name":"6.5GB Bigga for 30days - 2,500 Naira","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"610","name":"8GB Bigga for 30days - 3,000 Naira","variation_amount":"3000.00","fixedPrice":"Yes"},{"variation_code":"611","name":"10GB Bigga for 30days - 3,500 Naira","variation_amount":"3500.00","fixedPrice":"Yes"},{"variation_code":"612","name":"12GB Bigga for 30days - 4,000 Naira","variation_amount":"4000.00","fixedPrice":"Yes"},{"variation_code":"613","name":"15GB Bigga for 30days - 5,000 Naira","variation_amount":"5000.00","fixedPrice":"Yes"},{"variation_code":"614","name":"20GB Bigga for 30days - 6,000 Naira","variation_amount":"6000.00","fixedPrice":"Yes"},{"variation_code":"601","name":"15GB-Anytime for 365days - 8,000 Naira","variation_amount":"8000.00","fixedPrice":"Yes"},{"variation_code":"615","name":"30GB Bigga for 30days - 8,000 Naira","variation_amount":"8000.00","fixedPrice":"Yes"},{"variation_code":"616","name":"40GB Bigga for 30days - 10,000 Naira","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"629","name":"Unlimited-Lite for 30days - 10,000 Naira","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"617","name":"60GB Bigga for 30days - 13,500 Naira","variation_amount":"13500.00","fixedPrice":"Yes"},{"variation_code":"618","name":"75GB Bigga for 30days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"621","name":" 50GB Bumpa-Value for 60days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"630","name":"Unlimited-Essential for 30days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"602","name":" 35GB-Anytime for 365days - 16,000 Naira","variation_amount":"16000.00","fixedPrice":"Yes"},{"variation_code":"619","name":"100GB Bigga for 30days - 18,000 Naira","variation_amount":"18000.00","fixedPrice":"Yes"},{"variation_code":"655","name":"UnlimitedPremium for 30days - 20,000 Naira","variation_amount":"20000.00","fixedPrice":"Yes"},{"variation_code":"622","name":" 80GB Bumpa-Value for 90days - 30,000 Naira","variation_amount":"30000.00","fixedPrice":"Yes"},{"variation_code":"603","name":" 90GB-Anytime for 365days - 36,000 Naira","variation_amount":"36000.00","fixedPrice":"Yes"},{"variation_code":"623","name":" 100GB Bumpa-Value for 120days - 40,000 Naira","variation_amount":"40000.00","fixedPrice":"Yes"},{"variation_code":"604","name":" 200GB-Anytime for 365days - 70,000 Naira","variation_amount":"70000.00","fixedPrice":"Yes"},{"variation_code":"605","name":" 400GB-Anytime for 365days - 120,000 Naira","variation_amount":"120000.00","fixedPrice":"Yes"}],"varations":[{"variation_code":"516","name":"SmileVoice ONLY 65 for 30days - 510 Naira","variation_amount":"510.00","fixedPrice":"Yes"},{"variation_code":"413","name":"2GB MidNite for 7days - 1,020 Naira","variation_amount":"1020.00","fixedPrice":"Yes"},{"variation_code":"517","name":"SmileVoice ONLY 135 for 30days - 1,020 Naira","variation_amount":"1020.00","fixedPrice":"Yes"},{"variation_code":"414","name":"3GB MidNite for 7days - 1,530 Naira","variation_amount":"1530.00","fixedPrice":"Yes"},{"variation_code":"415","name":"3GB Weekend ONLY for 3days - 1,530 Naira","variation_amount":"1530.00","fixedPrice":"Yes"},{"variation_code":"518","name":"SmileVoice ONLY 430 for 30days - 3,070 Naira","variation_amount":"3070.00","fixedPrice":"Yes"},{"variation_code":"airtime","name":"Buy Airtime","variation_amount":"0.00","fixedPrice":"Yes"},{"variation_code":"583","name":"UnlimitedPlatinum for 30days - 24,000 Naira","variation_amount":"24000.00","fixedPrice":"Yes"},{"variation_code":"624","name":" 1GB Flexi for 1days - 300 Naira","variation_amount":"300.00","fixedPrice":"Yes"},{"variation_code":"625","name":" 2.5GB Flexi for 2days - 500 Naira","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"626","name":"1GB Flexi-Weekly for 7days - 500 Naira","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"606","name":"1.5GB Bigga for 30days - 1,000 Naira","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"627","name":" 2GB Flexi-Weekly for 7days - 1,000 Naira","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"607","name":"2GB Bigga for 30days - 1,200 Naira","variation_amount":"1200.00","fixedPrice":"Yes"},{"variation_code":"608","name":"3GB Bigga for 30days - 1,500 Naira","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"628","name":" 6GB Flexi-Weekly for 7days - 1,500 Naira","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"620","name":"5GB Bigga for 30days - 2,000 Naira","variation_amount":"2000.00","fixedPrice":"Yes"},{"variation_code":"609","name":"6.5GB Bigga for 30days - 2,500 Naira","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"610","name":"8GB Bigga for 30days - 3,000 Naira","variation_amount":"3000.00","fixedPrice":"Yes"},{"variation_code":"611","name":"10GB Bigga for 30days - 3,500 Naira","variation_amount":"3500.00","fixedPrice":"Yes"},{"variation_code":"612","name":"12GB Bigga for 30days - 4,000 Naira","variation_amount":"4000.00","fixedPrice":"Yes"},{"variation_code":"613","name":"15GB Bigga for 30days - 5,000 Naira","variation_amount":"5000.00","fixedPrice":"Yes"},{"variation_code":"614","name":"20GB Bigga for 30days - 6,000 Naira","variation_amount":"6000.00","fixedPrice":"Yes"},{"variation_code":"601","name":"15GB-Anytime for 365days - 8,000 Naira","variation_amount":"8000.00","fixedPrice":"Yes"},{"variation_code":"615","name":"30GB Bigga for 30days - 8,000 Naira","variation_amount":"8000.00","fixedPrice":"Yes"},{"variation_code":"616","name":"40GB Bigga for 30days - 10,000 Naira","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"629","name":"Unlimited-Lite for 30days - 10,000 Naira","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"617","name":"60GB Bigga for 30days - 13,500 Naira","variation_amount":"13500.00","fixedPrice":"Yes"},{"variation_code":"618","name":"75GB Bigga for 30days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"621","name":" 50GB Bumpa-Value for 60days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"630","name":"Unlimited-Essential for 30days - 15,000 Naira","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"602","name":" 35GB-Anytime for 365days - 16,000 Naira","variation_amount":"16000.00","fixedPrice":"Yes"},{"variation_code":"619","name":"100GB Bigga for 30days - 18,000 Naira","variation_amount":"18000.00","fixedPrice":"Yes"},{"variation_code":"655","name":"UnlimitedPremium for 30days - 20,000 Naira","variation_amount":"20000.00","fixedPrice":"Yes"},{"variation_code":"622","name":" 80GB Bumpa-Value for 90days - 30,000 Naira","variation_amount":"30000.00","fixedPrice":"Yes"},{"variation_code":"603","name":" 90GB-Anytime for 365days - 36,000 Naira","variation_amount":"36000.00","fixedPrice":"Yes"},{"variation_code":"623","name":" 100GB Bumpa-Value for 120days - 40,000 Naira","variation_amount":"40000.00","fixedPrice":"Yes"},{"variation_code":"604","name":" 200GB-Anytime for 365days - 70,000 Naira","variation_amount":"70000.00","fixedPrice":"Yes"},{"variation_code":"605","name":" 400GB-Anytime for 365days - 120,000 Naira","variation_amount":"120000.00","fixedPrice":"Yes"}]}}];

$(document).ready(function(){


    $('select#sim').on('change', function(e){
  $("input#walletw").html('');
  $('select#varr').html(''); 
  $('select#varr').val(''); 
  $("input#walletw").val('');
   $("input#walletw").attr('disabled', 'disabled');
   $("input#emailw").attr('disabled', 'disabled').val('<?= $_SESSION['emailSwiftUid']; ?>');;
   $("input#varr").attr('disabled', 'disabled');
    $(this).find("select#sim option[value='0']").remove();

        var idwxy = $("select#sim option:selected").val();
        $('select#servicesw').html('');
        $('select#servicesw').text(''); 
       $('select#varr').html('');  
        $('select#varr').text('');       
         for(var i = 0; i < optionVarsw.length; i++) {
            var codew = optionVarsw[i].response_description;	                     
              if(codew == idwxy) {
                $("select#sim option").removeAttr("class");
            
               $.each(optionVarsw[i].content.varations, function (i,sectionObj) {
                    $("select#sim option:selected").addClass("servicessw");
                $("input#walletw").val("The Amount is set Default Amount");
            
               $('select#servicesw').append('<option name='+sectionObj.variation_code+' value='+sectionObj.var_cod+'>'+sectionObj.name+'</option>');   
         
                $("input#varrnew").attr("value", $("select#servicesw option:selected").val()); 
                function myTrim(x) {
                  return x.replace(/^\s+|\s+$/gm,'');
                }
                var str = $("select#servicesw option:selected").text();
                $("input#walletw").val(parseFloat(myTrim(str.substr(1, 4))));
                $("input#walletw").attr("value", parseFloat(myTrim(str.substr(1, 4))));
                  });

               $(optionVarsw[i].content).each(function (index,sectionObj) {
                $("input#var_codew").attr("value", sectionObj.varcode);
                $("input#varrpin").attr("value", sectionObj.varrpin);
                $("input#server").attr("value", sectionObj.server);
                $("input#serviceIDw").attr("value", sectionObj.serviceID);
          
                });
               
            }
         }
          e.preventDefault();
    });

    $('select#services').on("change", function() {
      $("input#amount").attr("value", $('select#services option:selected').val());
      $("input#amount").val($('select#services option:selected').val());
    })

 
    $('select#category').on('change', function(e){
   
  $("input#amount").html('');
  $("input#amount").val('');
  $("input#amount").val('This is not to be edited. The amount  is set to Default');
    $("input#email").attr('disabled', 'disabled').val('<?= $_SESSION['emailSwiftUid']; ?>');
    $("input#amount").attr('disabled', 'disabled');
    $(this).find("select#category option[value='0']").remove();

        var idxy = $("select#category option:selected").val();
        $('select#services').html('');
        $('select#services').text('');      
         for(var i = 000; i < optionVarsx.length; i++) {
            var code = optionVarsx[i].response_description;	                     
              if(code == idxy) {
                $("select#category option").removeAttr("class");
            
               $.each(optionVarsx[i].content.varations, function (index,sectionObj) {
                    $("select#category option:selected").addClass("servicess");
                $("input#amount").val("The Amount is set Default Amount");
                $('select#services').append('<option name='+sectionObj.variation_code+' value='+index+'>'+sectionObj.name+'</option>'); 
                var val = $('select#services option:selected').val();
        if (val == index) {
          //$("input#amount").attr('disabled', 'disabled');
          $("input#wallet").attr("value", sectionObj.variation_amount);
          $("input#wallet").val(sectionObj.variation_amount);
          $("input#variation_code").val(sectionObj.variation_code);
          $("input#variation_code").attr("value", sectionObj.variation_code);
         
        }
        
 $('select#services').on("change", function(e) {
              
        var val = $('select#services option:selected').val();
        if (val == index) {
          //$("input#amount").attr('disabled', 'disabled');
          $("input#wallet").attr("value", sectionObj.variation_amount);
          $("input#wallet").val(sectionObj.variation_amount);
          $("input#variation_code").val(sectionObj.variation_code);
          $("input#variation_code").attr("value", sectionObj.variation_code);
         
        
        }   
      });
                  });
                  // $("input#amount").attr("value", $('select#services option:selected').val());
                  // $("input#amount").val($('select#services option:selected').val());
               $(optionVarsx[i].content).each(function (index,sectionObj) {
                $("input#serviceID").val(sectionObj.serviceID);
                $("input#serviceID").attr("value", sectionObj.serviceID);
            //                .attr("name", sectionObj.serviceID);
          
                });
               
            }
         }
          e.preventDefault();
    });
});
    $("input#phone, input#phn_numberw").keydown(function(){
    $(this).css("background-color", "yellow");
  });
  $("input#phone, input#phn_numberw").keyup(function(){
    $(this).css("background-color", "pink");
  });

      $("input#phone, input#phn_numberw").keypress(function(event) {
        if(event.target.value === 11) {
          alert("Max Input Reached!");
        }
      });

        $("input#phone").blur(function(e) {
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
         
         alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
         // $('input#phn_number').val() = $("input##billerCode").val();
          alert("This is okay to submit");
          // $("input#billersCode").val($(this).val());
          // $("input#billersCode").attr("value", $(this).val());
          //.attr("disabled", "disabled");
        }
        e.preventDefault();
      });
      $("input#phn_numberw").blur(function(e) {
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
         
         alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
         // $('input#phn_number').val() = $("input##billerCode").val();
          alert("This is okay to submit");
          $("input#billersCodew").val($(this).val()).attr("disabled", "disabled");
        }
        e.preventDefault();
      });

</script>

<style>
    option .servicess {
        color: red;
        font-weight: 700;
    }
    .servicess {
      color: red !important;
      font-weight: 700;
    }
    option .servicessw {
        color: red;
        font-weight: 700;
    }
    .servicessw {
      color: red !important;
      font-weight: 700;
    }
</style>
<!-- 
<script src ="pay/thirddata.js"></script> -->
<script src ="pay/datapaynewwwww.js"></script>
<script src ="pay/thirddatapay.js"></script>


 <?php
 include 'swiftdetails/footer.php';
 ?>