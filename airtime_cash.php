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
     <title>Swift Geek Links - Convert Airtime to Cash -</title>
</head>
<body onload="refLoad()" onunload="refStopped()">

    <script>
      $(document).ready(function() {
        $("input#request_id").val(Math.floor((Math.random() * 1000000000) + 1));
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
    <!-- <div id="swiftContent">
    <div>
    <div  class="loadingio-spinner-pulse-np1e5y15zy"><div class="ldio-vcgc72oq9pl">
    <div></div><div></div><div></div>

    </div></div><br>
    <div id="swiftNew">
    <p style="text-align: center;" id="swiftDemo"></p>
    </div>
    </div>
    </div> -->

    <main id="myDiv">
<style>

#paymentForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 90%;
  min-width: 250px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<script>
 
  </script>
  <div class="container">
    <div class="">
<div class="card">
  <div style="width: 100%;" class=" mt-5 pt-3 card-header">
  <strong><h3> Swift Geek Links </h3></strong>
</div>
<div style="width: 100%;" class="card-body">
<div style="border: 2px solid #000; border-radius: 20px;" class="mt-2 mb-2 p-5">
<div class="p-2">
<strong><h4> Easily Convert Your Airtime To Cash Airtime to instant Cash? </h4>
</strong>
<p>Swiftgeek lets you convert airtime of all networks to cash in less than 5 minutes. it is possible to reverse MTN, 9mobile, Glo and Airtel airtime to any bank account in Nigeria.

Accumulated airtime?, mistakenly over-recharged?, accepting airtime as payment from customers? Swiftgeek got you covered. You can easily convert airtime to cash in Nigeria, instantly at best rates.

Exchanging your recharge card for money isn’t a problem anymore as you can quickly transfer to your bank account using Swiftgeek.</p>

*We can Include a WhatsApp link to it for direct referral

<p><b>Bank Payment</b></p>
<p><b>N100</b> Charge for Payment Above <b>N10,000</b></p><br>

<strong><h5>Providus Bank</h5></strong>
<p><b>Account Name </b> : Bashir Abubakar. </p>
<p><b>Account Number</b> : 9930343821 </p> <br>

<strong><h5>UBA(United Bank for Africa)</h5></strong>
<p><b>Account Name</b> : Bashir Abubakar.</p>
<p><b>Account Number</b> : 2068006231</p><br>
<p>Bank Deposit/Atm Transfer/Online Bank Transfer/ USSD & others (Instant/Automated) (Minimum of #1,000): Payments are accepted into any of our bank accounts stated on this page.</p>

<p>✅if your wallet is not autocredited within 15mins after you have been charged by your bank, Kindly send the payment details to our whatsapp number only via <b style="color: coral;">+2348104161970</b>. Your account will be funded as soon as your payment is verified.</p>

<p><b>Depositor Name*</b></p>
<p>(Make sure you use your registered username as depositor's name when sending your details to the above number).</p>
<p>
In the Form section, you do not need to worry because the opton is disabled and un-editable the email you used to sign up on this page will be used
</p>
<p><b>Depositor Phone*</b></p>
<strong>Reference or Narration*</strong>
(Use your name as Reference or Narration if it is bank Tranfer when sending your details to the above number)
In the Form section, yo do not need to worry aboutbecause the opton is disabled and un editable the Phone Number you used to sign up on this page will be used

</div>
</div>
<h5 class="mt-4 mb-5" style="color: coral;"> <b>✅You can pay to the form below or use the above option </b></h5>
<hr>
<h4 class="mt-2 mb-2">✅ Airtime to Cash Payment Form </h4>

<form  method="POST" id="paymentForm" enctype="multipart/form-data">
<div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="request_id"></span>
          </div>
          <input type="text"  id="request_id" name="request_id" class="form-control"  placeholder="Reference Identification" disabled required>
        </div>
      
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="uidSwift"></span>
          </div>
          <input type="text" id="uidSwift" value="<?= $_SESSION["userSwiftUid"]; ?>" name="uidSwift" class="form-control" placeholder="User Name" required autofocus aria-describedby="uidSwift">
        </div>
      
           <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="firstName"></span>
          </div>
          <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required autofocus aria-describedby="firstName">
        </div>
      
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text fa fa-user" id="lastName"></span>
     </div>
  <input  type="text" name="lastName"  id="lastName" class="form-control" placeholder="Last Name" required aria-describedby="lastName">
 
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
          <span class="input-group-text fa fa-user" id="email"></span>
     </div>
  <input id="email" type="email" name="email" value="<?= $_SESSION['emailSwiftUid']; ?>" class="form-control" disabled placeholder="Email Address" required aria-describedby="email">
  </div>
  <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="phone"></span>
          </div>
          <input type="number" id="phone"  value="<?= $_SESSION['phone']; ?>" name="phone" class="form-control" placeholder="Phone Number" required  aria-describedby="phone">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="networkProvider">Network Provider</span>
          </div>
          <select class="form-control" name="networkProvider" id="networkProvider" aria-describedby="networkProvider" required>
          <option id="noselect" value="No option Selected">Select A Network Provider</option>
              <option value="MTN NG">MTN NG</option>
              <option Value="Glo NG">Glo NG</option>
              <option Value="Airtel NG">Airtel NG</option>
              <option value="9 Mobile NG">9 Mobile NG</option>
            
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="wallet"></span>
          </div>
          <input type="number" min="1000" id="wallet" name="amount" class="form-control" placeholder="Amount" required autocomplete="off" aria-describedby="wallet">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-user" id="amountReceived"></span>
          </div>
          <input type="number" id="amountReceived" name="amountReceived" value="" step=".01" class="form-control" placeholder="Amount to be Received" required autocomplete="off" aria-describedby="amountReceived">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text fa fa-date" required autocomplete="off" name="datet" id="datePicker"></span>
          </div>
        <input type="date" id="datePicker" value="date" class="form-control"/>
</div>
        <script>
          Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});
        $(document).ready( function() {
    $('#datePicker').val(new Date().toDateInputValue());
});​
</script>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="platforms">Platform</span>
          </div>
          <select class="form-control" name="platforms" id="platforms" aria-describedby="platforms" required>
              <option value="card">Card</option>
              <option value="wallet">Wallet</option>
            
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="submit" id="airtimecashsubmit" name="airtimecashsubmit" value="Submit to Convert" class="btn btn-md btn-success" />
</div>
</form>
        <script>
    
      //      function refLoad() {
      //  document.querySelector("input#referenceId").value = Math.floor((Math.random() * 1000000000) + 1);
      //   }
        // var noselect = document.querySelector("option#noselect").selected;
        // if(noselect == true) {
        //   document.querySelector("select#networkProvider").value = " ";
        // }
        // document.querySelector("otion#glo").selected;
        // document.querySelector("option#airtel").selected;
        // document.querySelector("option#etisalat").selected;
        var sel = document.querySelector("select#networkProvider");
        var select = sel.selectedIndex;
       sel.addEventListener("change", function() {
        var select = sel.selectedIndex;
        if (select === 0) { 
          alert("Kindly Select a network provider Option");
        }
        else if (select === 1) {
          document.querySelector("input#wallet").addEventListener("keyup", function() {
            //alert("hello");
          let am = document.querySelector("input#wallet").value * 81/100;
          document.querySelector("input#amountReceived").value = am;
          //document.querySelector("input#amountReceived").setAttribute("disabled", "disabled");
        });
      } else if(select == 2) {
          document.querySelector("input#wallet").addEventListener("keyup", function() {   
          let am = document.querySelector("input#wallet").value * 75/100;
          document.querySelector("input#amountReceived").value = am;
          //document.querySelector("input#amountReceived").setAttribute("disabled", "disabled");
        });
        } else if(select === 3) {
          document.querySelector("input#wallet").addEventListener("keyup", function() {
          let am = document.querySelector("input#wallet").value * 81/100;
          document.querySelector("input#amountReceived").value = am;
          //document.querySelector("input#amountReceived").setAttribute("disabled", "disabled");
        });
        } else if(select === 4) {
          document.querySelector("input#wallet").addEventListener("keyup", function() {
          let am = document.querySelector("input#wallet").value * 75/100;
          document.querySelector("input#amountReceived").value = am;
          //document.querySelector("input#amountReceived").setAttribute("disabled", "disabled");
        });
         }
        });
       
         
      //           $("input#amount").on("keyup", function() { 
      //  var amount = $(this).val();
      //  $("input#amountReceived").val(amount).attr("disabled", "disabled");
//  });
// });   
//             </script>


</div>
</div>
</div>
</div>
<!-- <script>
  $(document).ready(function() {
    // $("input#request_id").val(Math.floor(Math.random() * 1000000000) + 1);
    // $("input#request_id").attr("value", Math.floor(Math.random() * 1000000000) + 1);
    $("form#paymentForm").on("submit", function(e) {
      e.preventDefault();
  $.ajax("pay_env.php", {
    method: "GET",
    dataType: "json",
    contentType: "application/json",
    success: function(response) {
      console.log(JSON.stringify(response.key));
      var env = response.apikey;
  let handler = PaystackPop.setup({
    key:  JSON.stringify(env), // Replace with your public key
    email: document.querySelector("input#email").value,
    amount: document.querySelector("input[name='amount']").value * 100 + 1000,
    firstname: document.querySelector("input#firstName").value,
    lastname: document.querySelector("input#lastName").value,
    label: document.querySelector("input#phone").value,
    ref: 'SwiftGeekAirtime2Cash_'+document.querySelector("input#request_id").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Payment Tab closed.');
      window.location = "http://localhost:81/data/fundAccount.php"; 
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
//$("input#referenceId").removeAttr("disabled");
        $.ajax('airtime-cash.php', {
          method: 'POST',
          dataType: 'html',
          data : $("form#paymentForm :input").serializeArray(),
          //contentType: 'application/json',
          success: function(data) {
            console.log("Database Updated");
          },
          error: function(xhr) {
            console.log(xhr.status + xhr.statusCode);
          }
          
        });
       // window.location = "https://www.swiftgeek.com.ng/transactions/transaction.php?reference=" + response.reference;
    },
    error: function(xhr) {
    alert("Error: There is an error in getting the cable request"+ xhr.statusText + ' ' + xhr.statusCode);
    }
  })
  handler.openIframe();
  },
  error: function(xhr) {
    alert("Error: Found"+ xhr.statusText + ' ' + xhr.statusCode);
    }
  });
});

</script> -->

    </main>

    
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
        <li class="py-2"><a href="swift_privacy.php"> Privacy Policy </a></li>
        <li class="pt-2"><a title="Frequently Asked Questions"href="faq.php"> FAQ </a></li>
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

<script src="pay/airtimecash.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
    <?php
    include './swiftdetails/footer.php';
    ?>