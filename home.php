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
    <title>Welcome to Swift Geek Links</title>
</head>
<body onload="refLoad()" onunload="refStopped()">

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
      <style>
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  outline: none;
  text-decoration: none;
  border: none;
  float: left;
  border-radius: 2px;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #00ff00;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>




    <section>
    <div class="p-5" style='background: #eece1a;'>
    <div style='text-align: center;' class="mt-3 container">
    <form class="example" action="#!" style="margin:auto;">
  <input type="text" id="myInput" placeholder="Search.." onkeyup="myFunction()" name="swift_search">
  <button type="submit" disabled><i class="fa fa-search"></i></button>
</form>

    <div class="container">
    <div style="font-size: 30px; font-weight: 500;">Welcome, <?php if(isset($_SESSION['userSwiftId'])): ?>
    <?= ucfirst($_SESSION["userSwiftUid"]); ?>
    <?php elseif(!isset($_SESSION['userSwiftId'])): ?>
      Welcome <span style='color:#000;'>Kindly log In</span>>
    <?php endif; ?> </div>
    <h5> Your Referral URL is</h5>
    <strong><div style="padding: 10px; border: 2px dotted #eee; border-radius: 20px; font-size: 16px; font-weight: 500;">
    <?php if(isset($_SESSION['userSwiftId'])): ?>
      <span>localhost:81/data/swiftdetails/register.php?ref=<?=$_SESSION["userSwiftUid"]; ?></span>
    <?php elseif(!isset($_SESSION['userSwiftId'])): ?>
    <span> Kindly log In to get your Referral Link</span>
    <?php endif; ?></div></strong>
   <hr>
  
   <!-- <script>
     alert('hello');
     var wallet = <?= $_SESSION["walletAmount"]; ?>;
     document.querySelector("span#user_amount").innerHTML = parseFloat(wallet);
     </script> -->
       <strong><h4> Wallet Balance</h4>
       <?php if(isset($_SESSION['userSwiftId'])): ?>
      <h3 style="font-weight: 500;">&#x20A6<span id="user_amount" name="userAmount"><?= number_format(sprintf("%.2f", $_SESSION["walletAmount"]), 2); ?></span></h3>
      <!-- <script>
document.getElementById("user_amount").toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
</script> -->
    <?php elseif(!isset($_SESSION['userSwiftId'])): ?>
    <p class="mb-2"> Kindly log In to get your Wallet Balance</p>
    <?php endif; ?></strong>
       <a href="#!"><button onclick='fundWallet()' id="fundwallet" style="background: #00ff00; color: #fff; font-weight: 500; padding: 10px; border-radius: 5px; outline: none; border: 1px solid #000; text-decoration: none;" type="button">Fund Wallet</button></a>
       <a href="transactionHistory.php"><button style="background: #00ff00; color: #fff; font-weight: 500; padding: 10px; border-radius: 5px; outline: none; border: 1px solid #000; text-decoration: none;" type="button">Transaction History</button></a>
</div>
</div>
    </div>
            </section>

              <script>

              $(document).ready(function() {
             // alert('hi');
              $("a#btnn, a#btnn1, a#btnn2, a#btnn3, a#btnn4, a button#fundwallet").click(function() {
              //alert('hello');
              $(this).text('Processing...!').attr("disabled", "disabled");
              });
              });
              function fundWallet() {
              location.assign('http://localhost:81/data/fundAccount.php');
              }
              </script>
    <section class="py-2 my-2">
    <div class="container">
    <div id="row" class="row">

        <div id="row" class="col-lg-4 col-md-6 py-2">
   <div style="border: 2px solid green;" class="card">
   <div style="width: 100%;" class="card-header text-center">
   <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-phone"></i>
          </a>
       
   </div>
 
   <div id="filt" style="width: 100%;" class="card-body text-center">
   <h3 class="text-center">Buy Airtime </h3>
   </div>
   <div style="width: 100%;" class="card-footer text-center">
        <a href="airtime.php" class="btn btn-md btn-success" style="width: 100%;" id="btnn"  type="button">  Order Now </a>
    </div>
   </div>
</div>
<div id="row" class="col-lg-4 col-md-6 py-2">
   <div style="border: 2px solid coral;" class="card">
   <div style="width: 100%;" class="card-header text-center">
   <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-share"></i>
          </a>
       
   </div>
   <div id="filt" style="width: 100%;" class="card-body text-center">
   <h3 class="text-center"> Buy Data </h3>
   </div>
   <div style="width: 100%;" class="card-footer text-center">
   <a href="data.php" class="btn btn-md btn-success" style="width: 100%;" id="btnn1"  type="button">  Order Now </a>
    </div>
   </div>
</div>
<div id="row" class="col-lg-4 col-md-6 py-2">
   <div style="border: 2px solid yellow;" class="card">
   <div style="width: 100%;" class="card-header text-center">
   <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-desktop"></i>
          </a>
       
   </div>
  
   <div id="filt" style="width: 100%;" class="card-body text-center">
   <h3 class="text-center">Cable Subcription </h3>
   </div>
   <div style="width: 100%;" class="card-footer text-center">
   <a href="cable.php" class="btn btn-md btn-success" style="width: 100%;" id="btnn2"  type="button">  Order Now </a>
    </div>
   </div>
</div>
<div id="row" style="float: left;" class=" col-lg-4 col-md-6 py-2">
   <div style="border: 2px solid yellow;" class="card">
   <div style="width: 100%;" class="card-header text-center">
   <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-lightbulb"></i>
          </a>
       
   </div>
   <div id="filt" style="width: 100%;" class="card-body text-center">
   <h3 class="text-center"> Utility Bills </h3>
   </div>
   <div style="width: 100%;" class="card-footer text-center">
   <a href="utility.php" class="btn btn-md btn-success" style="width: 100%;" id="btnn3"  type="button">  Order Now </a>
    </div>
   </div>
</div>
<div id="row" style="float: right;" class=" col-lg-4 col-md-6 py-2">
   <div style="border: 2px solid green;" class="card">
   <div style="width: 100%;" class="card-header text-center">
   <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-money"></i>
          </a>
       
   </div>
   <div id="filt" style="width: 100%;" class="card-body text-center">
   <h3 class="text-center"> Airtime to Cash </h3>
   </div>
   <div style="width: 100%;" class="card-footer text-center">
   <a href="airtime_cash.php" class="btn btn-md btn-success" style="width: 100%;" id="btnn4"  type="button"> Order Now </a>
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
    
.mystyle {
    display: none;
}



#footer {
    background: #000;
    color: #fff;
    position: relative;
   

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
    content: "";
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
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("row");
    li = document.getElementsById("filt");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h3")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
    <?php
   include 'swiftdetails/footer.php';
   ?>
   
</div>