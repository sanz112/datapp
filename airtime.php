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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://js.paystack.co/v1/inline.js"></script>

     <title>Swift Geek Links - Airtime</title>
</head>
<body onload="refLoad()" onunload="refStopped()">
<style>
    
  .menu-branding  div.portrait {
  background-position: center !important;
   margin-top: 30px;
    padding-top: 50px;
     align-items: center !important;
      width: 100% !important;
       justify-content: center !important;
        text-align:center !important;
         display: flex !important;
}

</style>
<script>
    function refLoad() {


       var datav = localStorage.getItem("2");
       count = 1

        if(typeof(Storage) !== "undefined") {

    if (datav) {
        datav = Number(datav) + 1;
      localStorage.setItem("2", datav);
    }

    else {
        localStorage.setItem("2", count);
    }

var datav = localStorage.getItem("2");
 console.log(datav);
 console.log(datav);
   if (datav <= 2){
    alert("Dear SwiftGeek Link Users ,this is to inform us that the airtime will not be available for few days, but you can make Data, Cable and Utility Subscription .Thank you for using SwiftGeek LInk");
   }

  } else {
    alert("Sorry, your browser does not support web storage...");
  }
    }
      $(document).ready(function() {
        $("input#request_id").val(Math.floor((Math.random() * 1000000000000) + 1));
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
   <a href="index"> <img src="image/swiftlogo.png" class="active" width="30px" height="20px" /></a>
  <a style="background: #fff; padding: 10px 15px 12px 15px; color: #000; font-weight: 700; font-size: 16px;" href="home#">DashBoard</a>
              
  <a href="start#">About Us</a>
    <a href="start#contact">Contact Us</a>

    <?php if(!isset($_SESSION["userSwiftId"])): ?> 
    
      <a href="swiftdetails/register">Register</a>
  <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/login">LogIn</a>
    <?php else: ?>
    
    <a style="color: #eece1a; font-weight: 700;" href="swiftdetails/logout">Logout</a>
        <?php if($_SESSION["userType"] == "Admin"): ?>
      <a style="color: #eece1a; font-weight: 700;" href="admin">Admin</a>
      <?php endif; ?>

      <a id="nameuser" style="color: #fff; float: right;"><span class="dropbtn">Welcome, <span onClick="swiftDropdown()" class="dropbtn" style='color:#eece1a;' ><?php echo $_SESSION["userSwiftUid"]; ?></span><i class="fas fa-angle-down"></i><img class="ml-2" style="float: right; width: 27px; height: 25px; border-radius: 50%;" src="images/swiftuserprofile.png" /></span>
      </a>
  <div id="myDropdown" class="dropdown-content">
   <p> <a  href="changePassword"><i class="mr-2  fa fa-lock"></i>Change Password</a></p>
   <p> <a  href="profile"><i class="mr-2 fa fa-user"></i>Profile</a></p>
   <?php if(!isset($_SESSION["userSwiftId"])): ?> 
    
   <p><a href="swiftdetails/register"><i class="mr-2  fa fa-lock"></i>Register</a></p>
    <p><a style="color: #eece1a; font-weight: 700;" href="swiftdetails/login"><i class="mr-2  fa fa-lock"></i>LogIn</a></p>
   <?php else: ?>
    <p><a  style="color: #eece1a; background: grey; font-weight: 700;" href="swiftdetails/logout"><i class="mr-2 fa fa-lock"></i>LogOut</a></p>
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
                    <a href="home#" class="nav-link">DashBoard</a>
                </li>
                <li class="nav-item">
                    <a href="start#" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="start#contact" class="nav-link">Contact Us</a>
                </li>
                <?php
  if(!isset($_SESSION["userSwiftId"])) {
      echo '
      <li class="nav-item">
      <a href="swiftdetails/register" class="nav-link">Register</a>
  </li>
                <li class="nav-item">
                    <a href="swiftdetails/login" class="nav-link">Log In</a>
                </li>'; } else {
                    echo '
                    <li class="nav-item">
                    <a  href="swiftdetails/logout" class="nav-link">Log Out</a>
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
    <div class="col-lg-8">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-3 card">
    <h3 class="text-center py-2">Airtime Top Up </h3>
    <div id="alert_message" class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b> You cannot recharge more than 5,000 Naira at a request. Also Enjoy 3% Discount on all recharge. Thanks. </b>
            </div>
    <form class="w-100" id="paymentForm" method="POST" enctype="multipart/form-data">
    <input type="number" id="client_id" name="client_id" class="form-control" value="<?php echo $_SESSION['userSwiftId']; ?>" placeholder="Client Id" aria-describedby="client_id">
    <input type="text" id="swiftType" name="swiftType" class="form-control" value="Airtime" required aria-describedby="swiftType">
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="request_id">Reference ID</span>
      </div>
      <input type="number" id="request_id" name="request_id" class="form-control" placeholder="Reference Identification" required autofocus  aria-describedby="request_id">
    </div>
    <!-- <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-envelope" id="serviceID"></span>
      </div>
      <input type="text" id="serviceID" value="mtn" name="serviceID" class="form-control" placeholder="serviceID" required autofocus disabled aria-describedby="serviceID">
    </div> -->
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="serviceID">Pick</span>
      </div>
      <select id="serviceID" class="form-control" name="serviceID">
        <option>Select A Network Provider</option>
        <option id="mtn" name="mtn" value="mtn"  selected="selected">MTN NG</option>
        <option id="glo" name="glo" value="glo">GLO NG</option>
        <option id="airtel" name="airtel" value="airtel" >AIRTEL NG</option>
        <option id="9mobile" name="etisalat" value="etisalat">9MOBILE NG</option>
      </select>
      </div>
      <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-naira" id="confirmwallet">&#x20A6</span>
      </div>
      <input type="number" id="confirmwallet" name="amount" class="form-control" placeholder="Amount to Recharge" required autofocus aria-describedby="amount">
    </div>
  <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-naira" id="wallet">&#x20A6</span>
      </div>
      <input type="number" id="wallet" name="confirmamount" class="form-control" placeholder="Amount to Pay" required disabled aria-describedby="confirmamount">
    </div>
     
    <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fa fa-envelope" id="email"></span>
      </div>
      <input type="email" id="email" name="email" class="form-control" disabled value="<?= $_SESSION['emailSwiftUid']; ?>" placeholder="Email Address" required autofocus aria-describedby="email">
    </div>
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fa fa-phone" id="phone"></span>
      </div>
      <input type="number" maxlength="11" max="100000000000" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" required autofocus aria-describedby="phone">
    </div>
     <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="coupon_code">Coupon</span>
      </div>
      <input type="text" id="coupon_code" name="coupon_code" class="form-control" placeholder="Coupon" aria-describedby="coupon_code">
    </div>
    <div class="w-100 input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="platforms">Pay With</span>
          </div>
          <select class="form-control" name="platforms" id="platforms" aria-describedby="platforms" required>
              <option value="Card">Card</option>
              <option value="Wallet">Wallet</option>          
          </select>
        </div>
 
    <div class="w-100 mb-3 input-group">
        <span id="loadingairtime" style="font-size: 30px; animation-duration: 1s;"></span>
      <input type="submit" id="airtimesubmit" style="background: #f1a947; width: 100%;" class="btn btn-lg btn-success" name="airtimesubmit" value="Purchase Airtime">
    </div>
  </form>
    </div>
    </div>

    <script>
     
      $(document).ready(function(){
        // $("input#airtime").on("click", function() {
        //   $(this).attr("disabled", "disabled");
        // });
   
        $("input#confirmwallet").keyup(function() {
            $("input#wallet").val($(this).val()*97/100);
        });
//    var coupp = ;
        $("input#coupon_code").blur(function() {
        if ($("input#coupon_code").val("SwiftGeek2020!")) {
            alert("Coupon Code Applied!!");
        } else {
            alert("Coupon Code is Incorrect");
        }
        });
        
  $("input#phone").keydown(function(){
    $(this).css("background-color", "yellow");
  });
  $("input#phone").keyup(function(){
    $(this).css("background-color", "pink");
  });

      $("input#phone").keypress(function(event) {
        if(event.target.value === 11) {
          alert("Max Input Reached!");
        }
      });

        $("input#phone").blur(function() {
       // alert("hello");
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
          alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
          alert("This is okay to submit");
        }
      });
    });
      </script>
      <div id="table" class="col-lg-4">
      <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="card">
      <div  style="width: 100%;">
      <table  style="width: 100%; height: 100%;" class="table text-center">
        <thead  style="width: 100%;" class="thead-dark pl-2">
      <th><h3> Links </h3></th>
        </thead>
        <tbody>
        <tr>
      <td><h5><b><a href="airtime"> Airtime </a> </b></h5></td>
      </tr> 
        <tr>
      <td><h5><b><a href="data"> Data </a> </b></h4></td>
    </tr>
        <tr>
      <td><h5><b><a href="cable"> Cable </a> </b></h5></td>
    </tr>
        <tr>
      <td><h5><b><a href="utility"> Utility </a> </b></h5></td>
    </tr>
        </tbody>
      </table>
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
                  window.location = "https://www.swiftgeek.com.ng/swiftdetails/login";
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
        <li><a href="index"> Home </a></li>
        <li class="py-2"><a href="swiftdetails/login"> LogIn </a> </li>
        <li class="py-2"><a href="swiftdetails/register"> SignUp </a></li>
        <li class="py-2"><a href="swiftdetails/swift_privacy"> Privacy Policy </a></li>
        <li class="pt-2"><a title="Frequently Asked Questions"href="swiftdetails/faq"> FAQ </a></li>
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
        <a style="text-decoration: none; color: yellow;" href="https://chat.whatsapp.com/JFY11Gde1NAJwVvOa6Wyss">Join Our Whatsapp Group </a>
        </div>

</div>
        </div>
        </div>
</section>
<script src="pay/airtimegeekk.js"></script>
    <?php
    include 'swiftdetails/footer.php';
    ?>