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
    <title>Swift Geek Links - TV/Cable Subcription</title>
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
<div class="ajax-loader">
  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/585d0331234507.564a1d239ac5e.gif" class="img-responsive" />
    </div>

    <div id="card">
    <div class="row">
    <div class="col-lg-8">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-5 card">
    <h3 class="text-center py-2">TV Subcription Top Up </h3>
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
        <option value="0" selected="selected">Select A Cable Subscription Provider</option>
        <option id="dstv" name="dstv" value="001">DSTV</option>
        <option id="gotv" name="gotv" value="002">GOTV</option>
        <option id="startimes" name="startimes" value="003" >Startimes</option>
      </select>
      </div>
      <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-credit-card" id="serviceID">Service ID</span>
      </div>
      <input placeholder="serviceID" class="col form-control" id="serviceID" disabled name="serviceID">
    
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
      <input type="number" id="wallet" name="amount" class="form-control" disabled placeholder="Amount to recharge" required aria-describedby="wallet">
    </div>
    
      <input type="hidden" id="variation_code" name="variation_code" class="form-control" placeholder="Variation Code" disabled required aria-describedby="variation_code">
   
  
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="services">Pick a Plan</span>
      </div>
    <select class="form-control" id="services" name="variation">
        <option value="-1">Subscription Plans</option>  
      </select>
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
        <span class="input-group-text fas fa-credit-card" id="billersCode"></span>
      </div>
    <input placeholder="Enter Your Subscription ID" maxlength="11" class="col form-control" id="billersCode" name="billersCode" />
    <input type="button" class="col-3 btn btn-success btn-md"value="Validate" id="validate" />
              </div>
              </div>
       
              <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersName"> Customer's Name </span>
      </div>
      <input type="text" id="billersName" name="billersName" class="form-control" placeholder="Customer's Name" required disabled aria-describedby="billersName">
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
      <input style="background: #f1a947;" id="cablesubmit" class="btn btn-lg btn-success btn-block" value="SubScribe" name="cablesubmit" type="submit">
    </div>
</form>
    <script>
    $(document).ready(function() {
              $("input#billersName, span#billersName").hide();
           $("input#cablesubmit").hide();
 
      $("input#validate").on("click", function() {
        $(this).attr("value", "Processing...!");
        $(this).attr("disabled", "disabled");
        var billersCode = $("input#billersCode").val();
        var serviceID = $("input#serviceID").val();
        if (billersCode === " " && serviceID === " ") {
          alert("Your Card ID Number Must not be empty. Likewise, Make sure you choose a TV Subcription Plan");
          return false;
        } else {
        var datas = {
            'billersCode': billersCode,
            'serviceID' : serviceID
        }
        $.ajax('validate.php', {
            method: 'POST',
            data : datas,
            dataType: 'html',
            beforeSend: function() {
              $('.ajax-loader').css("visibility", "visible");
            },
            success: function(response) {
              var resp = JSON.parse(response);
              if(resp.content.error) {
                $("input#billersName").val("InValid SmartCard");
            $("input#billersName").attr("value", "InValid SmartCard");
            alert(resp.content.error);
            window.location = "https://www.swiftgeek.com.ng/cable.php";
              } else {
              var respnew = resp.content.Customer_Name;
              console.log(response + "success");
           $("input#billersName, span#billersName").show();
            $("input#cablesubmit").show();
            $("input#billersName").val(respnew);
            $("input#billersName").attr("value", respnew);
            $('.ajax-loader').css("visibility", "hidden");
              }
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
      <td><h5><b><a href="cable.php"> Cable </a> </b></h5></td>
    </tr>
        <tr>
      <td><h5><b><a href="utility.php"> Utility </a> </b></h5></td>
    </tr>
      <tr>
      <td><h5><b><a href="airtime.php"> Airtime </a> </b></h5></td>
      </tr>
      <tr>
      <td><h5><b><a href="data.php"> Data </a> </b></h4></td>
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
 
<script>
var optionVarsw = [{"id" : "0", "content": [
  {"variation_code": "dstv1"},
  {"variation_code": "dstv2"},
  {"variation_code": "dstv3"},
  {"variation_code": "dstv4"},
  {"variation_code": "dstv5"},
  {"variation_code": "dstv6"}]},
  {"id" : "1", "content": [
  {"variation_code": "gotv1"},
  {"variation_code": "gotv2"},
  {"variation_code": "gotv3"},
  {"variation_code": "gotv4"},
  {"variation_code": "gotv5"},
  {"variation_code": "gotv6"}]},
  {"id" : "2", "content": [
  {"variation_code": "startimes1"},
  {"variation_code": "startimes2"},
  {"variation_code": "startimes3"},
  {"variation_code": "startimes4"},
  {"variation_code": "startimes5"},
  {"variation_code": "startimes6"}]}
];

var optionVarsx = [
  {"response_description":"001","content":{"ServiceName":"DSTV Subscription","serviceID":"dstv","convinience_fee":"N0.00","variations":[{"variation_code":"dstv-padi","name":"DStv Padi N1,850","variation_amount":"1850.00","fixedPrice":"Yes"},{"variation_code":"dstv-yanga","name":"DStv Yanga N2,565","variation_amount":"2565.00","fixedPrice":"Yes"},{"variation_code":"dstv-confam","name":"Dstv Confam N4,615","variation_amount":"4615.00","fixedPrice":"Yes"},{"variation_code":"dstv79","name":"DStv Compact N7900","variation_amount":"7900.00","fixedPrice":"Yes"},{"variation_code":"dstv3","name":"DStv Premium N18,400","variation_amount":"18400.00","fixedPrice":"Yes"},{"variation_code":"dstv6","name":"DStv Asia N6,200","variation_amount":"6200.00","fixedPrice":"Yes"},{"variation_code":"dstv7","name":"DStv Compact Plus N12,400","variation_amount":"12400.00","fixedPrice":"Yes"},{"variation_code":"dstv9","name":"DStv Premium-French N25,550","variation_amount":"25550.00","fixedPrice":"Yes"},{"variation_code":"dstv10","name":"DStv Premium-Asia N20,500","variation_amount":"20500.00","fixedPrice":"Yes"},{"variation_code":"confam-extra","name":"DStv Confam + ExtraView N7,115","variation_amount":"7115.00","fixedPrice":"Yes"},{"variation_code":"yanga-extra","name":"DStv Yanga + ExtraView N5,065","variation_amount":"5065.00","fixedPrice":"Yes"},{"variation_code":"padi-extra","name":"DStv Padi + ExtraView N4,350","variation_amount":"4350.00","fixedPrice":"Yes"},{"variation_code":"com-asia","name":"DStv Compact + Asia N14,100","variation_amount":"14100.00","fixedPrice":"Yes"},{"variation_code":"dstv30","name":"DStv Compact + Extra View N10,400","variation_amount":"10400.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch","name":"DStv Compact + French Touch N10,200","variation_amount":"10200.00","fixedPrice":"Yes"},{"variation_code":"dstv33","name":"DStv Premium - Extra View N20,900","variation_amount":"20900.00","fixedPrice":"Yes"},{"variation_code":"dstv40","name":"DStv Compact Plus - Asia N18,600","variation_amount":"18600.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch-extra","name":"DStv Compact + French Touch + ExtraView N12,700","variation_amount":"12700.00","fixedPrice":"Yes"},{"variation_code":"com-asia-extra","name":"DStv Compact + Asia + ExtraView N16,600","variation_amount":"16600.00","fixedPrice":"Yes"},{"variation_code":"dstv43","name":"DStv Compact Plus + French Plus N20,500","variation_amount":"20500.00","fixedPrice":"Yes"},{"variation_code":"complus-frenchtouch","name":"DStv Compact Plus + French Touch N14,700","variation_amount":"14700.00","fixedPrice":"Yes"},{"variation_code":"dstv45","name":"DStv Compact Plus - Extra View N14,900","variation_amount":"14900.00","fixedPrice":"Yes"},{"variation_code":"complus-french-extraview","name":"DStv Compact Plus + FrenchPlus + Extra View N23,000","variation_amount":"23000.00","fixedPrice":"Yes"},{"variation_code":"dstv47","name":"DStv Compact + French Plus N16,000","variation_amount":"16000.00","fixedPrice":"Yes"},{"variation_code":"dstv48","name":"DStv Compact Plus + Asia + ExtraView N21,100","variation_amount":"21100.00","fixedPrice":"Yes"},{"variation_code":"dstv61","name":"DStv Premium + Asia + Extra View N23,000","variation_amount":"23000.00","fixedPrice":"Yes"},{"variation_code":"dstv62","name":"DStv Premium + French + Extra View N28,000","variation_amount":"28050.00","fixedPrice":"Yes"},{"variation_code":"hdpvr-access-service","name":"DStv HDPVR Access Service N2,500","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"frenchplus-addon","name":"DStv French Plus Add-on N8,100","variation_amount":"8100.00","fixedPrice":"Yes"},{"variation_code":"asia-addon","name":"DStv Asian Add-on N6,200","variation_amount":"6200.00","fixedPrice":"Yes"},{"variation_code":"frenchtouch-addon","name":"DStv French Touch Add-on N2,300","variation_amount":"2300.00","fixedPrice":"Yes"},{"variation_code":"extraview-access","name":"ExtraView Access N2,500","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"french11","name":"DStv French 11 N3,260","variation_amount":"3260.00","fixedPrice":"Yes"}],"varations":[{"variation_code":"dstv-padi","name":"DStv Padi N1,850","variation_amount":"1850.00","fixedPrice":"Yes"},{"variation_code":"dstv-yanga","name":"DStv Yanga N2,565","variation_amount":"2565.00","fixedPrice":"Yes"},{"variation_code":"dstv-confam","name":"Dstv Confam N4,615","variation_amount":"4615.00","fixedPrice":"Yes"},{"variation_code":"dstv79","name":"DStv Compact N7900","variation_amount":"7900.00","fixedPrice":"Yes"},{"variation_code":"dstv3","name":"DStv Premium N18,400","variation_amount":"18400.00","fixedPrice":"Yes"},{"variation_code":"dstv6","name":"DStv Asia N6,200","variation_amount":"6200.00","fixedPrice":"Yes"},{"variation_code":"dstv7","name":"DStv Compact Plus N12,400","variation_amount":"12400.00","fixedPrice":"Yes"},{"variation_code":"dstv9","name":"DStv Premium-French N25,550","variation_amount":"25550.00","fixedPrice":"Yes"},{"variation_code":"dstv10","name":"DStv Premium-Asia N20,500","variation_amount":"20500.00","fixedPrice":"Yes"},{"variation_code":"confam-extra","name":"DStv Confam + ExtraView N7,115","variation_amount":"7115.00","fixedPrice":"Yes"},{"variation_code":"yanga-extra","name":"DStv Yanga + ExtraView N5,065","variation_amount":"5065.00","fixedPrice":"Yes"},{"variation_code":"padi-extra","name":"DStv Padi + ExtraView N4,350","variation_amount":"4350.00","fixedPrice":"Yes"},{"variation_code":"com-asia","name":"DStv Compact + Asia N14,100","variation_amount":"14100.00","fixedPrice":"Yes"},{"variation_code":"dstv30","name":"DStv Compact + Extra View N10,400","variation_amount":"10400.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch","name":"DStv Compact + French Touch N10,200","variation_amount":"10200.00","fixedPrice":"Yes"},{"variation_code":"dstv33","name":"DStv Premium - Extra View N20,900","variation_amount":"20900.00","fixedPrice":"Yes"},{"variation_code":"dstv40","name":"DStv Compact Plus - Asia N18,600","variation_amount":"18600.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch-extra","name":"DStv Compact + French Touch + ExtraView N12,700","variation_amount":"12700.00","fixedPrice":"Yes"},{"variation_code":"com-asia-extra","name":"DStv Compact + Asia + ExtraView N16,600","variation_amount":"16600.00","fixedPrice":"Yes"},{"variation_code":"dstv43","name":"DStv Compact Plus + French Plus N20,500","variation_amount":"20500.00","fixedPrice":"Yes"},{"variation_code":"complus-frenchtouch","name":"DStv Compact Plus + French Touch N14,700","variation_amount":"14700.00","fixedPrice":"Yes"},{"variation_code":"dstv45","name":"DStv Compact Plus - Extra View N14,900","variation_amount":"14900.00","fixedPrice":"Yes"},{"variation_code":"complus-french-extraview","name":"DStv Compact Plus + FrenchPlus + Extra View N23,000","variation_amount":"23000.00","fixedPrice":"Yes"},{"variation_code":"dstv47","name":"DStv Compact + French Plus N16,000","variation_amount":"16000.00","fixedPrice":"Yes"},{"variation_code":"dstv48","name":"DStv Compact Plus + Asia + ExtraView N21,100","variation_amount":"21100.00","fixedPrice":"Yes"},{"variation_code":"dstv61","name":"DStv Premium + Asia + Extra View N23,000","variation_amount":"23000.00","fixedPrice":"Yes"},{"variation_code":"dstv62","name":"DStv Premium + French + Extra View N28,000","variation_amount":"28050.00","fixedPrice":"Yes"},{"variation_code":"hdpvr-access-service","name":"DStv HDPVR Access Service N2,500","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"frenchplus-addon","name":"DStv French Plus Add-on N8,100","variation_amount":"8100.00","fixedPrice":"Yes"},{"variation_code":"asia-addon","name":"DStv Asian Add-on N6,200","variation_amount":"6200.00","fixedPrice":"Yes"},{"variation_code":"frenchtouch-addon","name":"DStv French Touch Add-on N2,300","variation_amount":"2300.00","fixedPrice":"Yes"},{"variation_code":"extraview-access","name":"ExtraView Access N2,500","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"french11","name":"DStv French 11 N3,260","variation_amount":"3260.00","fixedPrice":"Yes"}]}},

  {"response_description":"002","content":{"ServiceName":"Gotv Payment","serviceID":"gotv","convinience_fee":"N0.00","variations":[{"variation_code":"gotv-lite","name":"GOtv Lite N410","variation_amount":"410.00","fixedPrice":"Yes"},{"variation_code":"gotv-max","name":"GOtv Max N3,600","variation_amount":"3600.00","fixedPrice":"Yes"},{"variation_code":"gotv-jolli","name":"GOtv Jolli N2,460","variation_amount":"2460.00","fixedPrice":"Yes"},{"variation_code":"gotv-jinja","name":"GOtv Jinja N1,640","variation_amount":"1640.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-3months","name":"GOtv Lite (3 Months) N1,080","variation_amount":"1080.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-1year","name":"GOtv Lite (1 Year) N3,180","variation_amount":"3180.00","fixedPrice":"Yes"}],"varations":[{"variation_code":"gotv-lite","name":"GOtv Lite N410","variation_amount":"410.00","fixedPrice":"Yes"},{"variation_code":"gotv-max","name":"GOtv Max N3,600","variation_amount":"3600.00","fixedPrice":"Yes"},{"variation_code":"gotv-jolli","name":"GOtv Jolli N2,460","variation_amount":"2460.00","fixedPrice":"Yes"},{"variation_code":"gotv-jinja","name":"GOtv Jinja N1,640","variation_amount":"1640.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-3months","name":"GOtv Lite (3 Months) N1,080","variation_amount":"1080.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-1year","name":"GOtv Lite (1 Year) N3,180","variation_amount":"3180.00","fixedPrice":"Yes"}]}},

  {"response_description":"003","content":{"ServiceName":"Startimes Subscription","serviceID":"startimes","convinience_fee":"N0.00","variations":[{"variation_code":"nova","name":"Nova - 900 Naira - 1 Month","variation_amount":"900.00","fixedPrice":"Yes"},{"variation_code":"basic","name":"Basic - 1,700 Naira - 1 Month","variation_amount":"1700.00","fixedPrice":"Yes"},{"variation_code":"smart","name":"Smart - 2,200 Naira - 1 Month","variation_amount":"2200.00","fixedPrice":"Yes"},{"variation_code":"classic","name":"Classic - 2,500 Naira - 1 Month","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"super","name":"Super - 4,200 Naira - 1 Month","variation_amount":"4200.00","fixedPrice":"Yes"},{"variation_code":"nova-weekly","name":"Nova - 300 Naira - 1 Week","variation_amount":"300.00","fixedPrice":"Yes"},{"variation_code":"basic-weekly","name":"Basic - 600 Naira - 1 Week","variation_amount":"600.00","fixedPrice":"Yes"},{"variation_code":"smart-weekly","name":"Smart - 700 Naira - 1 Week","variation_amount":"700.00","fixedPrice":"Yes"},{"variation_code":"classic-weekly","name":"Classic - 1200 Naira - 1 Week ","variation_amount":"1200.00","fixedPrice":"Yes"},{"variation_code":"super-weekly","name":"Super - 1,500 Naira - 1 Week","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"nova-daily","name":"Nova - 90 Naira - 1 Day","variation_amount":"90.00","fixedPrice":"Yes"},{"variation_code":"basic-daily","name":"Basic - 160 Naira - 1 Day","variation_amount":"160.00","fixedPrice":"Yes"},{"variation_code":"smart-daily","name":"Smart - 200 Naira - 1 Day","variation_amount":"200.00","fixedPrice":"Yes"},{"variation_code":"classic-daily","name":"Classic - 320 Naira - 1 Day ","variation_amount":"320.00","fixedPrice":"Yes"},{"variation_code":"super-daily","name":"Super - 400 Naira - 1 Day","variation_amount":"400.00","fixedPrice":"Yes"},{"variation_code":"ewallet","name":"ewallet Amount","variation_amount":"0.00","fixedPrice":"Yes"}],"varations":[{"variation_code":"nova","name":"Nova - 900 Naira - 1 Month","variation_amount":"900.00","fixedPrice":"Yes"},{"variation_code":"basic","name":"Basic - 1,700 Naira - 1 Month","variation_amount":"1700.00","fixedPrice":"Yes"},{"variation_code":"smart","name":"Smart - 2,200 Naira - 1 Month","variation_amount":"2200.00","fixedPrice":"Yes"},{"variation_code":"classic","name":"Classic - 2,500 Naira - 1 Month","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"super","name":"Super - 4,200 Naira - 1 Month","variation_amount":"4200.00","fixedPrice":"Yes"},{"variation_code":"nova-weekly","name":"Nova - 300 Naira - 1 Week","variation_amount":"300.00","fixedPrice":"Yes"},{"variation_code":"basic-weekly","name":"Basic - 600 Naira - 1 Week","variation_amount":"600.00","fixedPrice":"Yes"},{"variation_code":"smart-weekly","name":"Smart - 700 Naira - 1 Week","variation_amount":"700.00","fixedPrice":"Yes"},{"variation_code":"classic-weekly","name":"Classic - 1200 Naira - 1 Week ","variation_amount":"1200.00","fixedPrice":"Yes"},{"variation_code":"super-weekly","name":"Super - 1,500 Naira - 1 Week","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"nova-daily","name":"Nova - 90 Naira - 1 Day","variation_amount":"90.00","fixedPrice":"Yes"},{"variation_code":"basic-daily","name":"Basic - 160 Naira - 1 Day","variation_amount":"160.00","fixedPrice":"Yes"},{"variation_code":"smart-daily","name":"Smart - 200 Naira - 1 Day","variation_amount":"200.00","fixedPrice":"Yes"},{"variation_code":"classic-daily","name":"Classic - 320 Naira - 1 Day ","variation_amount":"320.00","fixedPrice":"Yes"},{"variation_code":"super-daily","name":"Super - 400 Naira - 1 Day","variation_amount":"400.00","fixedPrice":"Yes"},{"variation_code":"ewallet","name":"ewallet Amount","variation_amount":"0.00","fixedPrice":"Yes"}]}}];



 
  
              // function getPosts() {
              //         // e.preventDefault();
              //          let serviceID = document.querySelector("input#serviceID").value;
              //          let billerCode = document.querySelector("input#billerCode").value;

                    //   fetch("https://sandbox.vtpass.com/api/merchant-verify", {
                    //     username: "info@swiftgeek.com.ng",
                    //     password: "Datageek2020",
                    //      method: "POST",
                    //         headers : {
                    //             "Accept": "application/json, text/plain, *",
                    //              "Content-type" : "application/json"
                    //        },
                    //         body: JSON.stringify({serviceID:serviceID, billerCode:billerCode})
                    //    })
                    //     .then(res => { return res.json()})
                    //   .then(data => console.log(data))
                    // }

           
$(document).ready(function(){
 $("input#request_id").val(Math.floor(Math.random() * 1000000000) +1);
 $("input#request_id").attr("value", Math.floor(Math.random() * 1000000000) +1);

  $('#servid').html('');
  $('#servid').text('');

    $('select#category').on('change', function(e){
    //  alert("alerted")
  //$("input#phn_number").val() = $("input#billerCode").val();
  //$("input#amount").html('');
  $("input#wallet").attr("disabled", "disabled")
  //$("input#amount").val('This is not to be edited. The amount  is set to Default');
   
    $('select#services option:selected').val();
    $(this).find("select#category option[value='0']").remove();

        var idxy = $("select#category option:selected").val();
        $('select#services').html('');      
         for(var i = 000; i < optionVarsx.length; i++) {
            var code = optionVarsx[i].response_description;	                     
              if(code == idxy) {
                $("select#category option").removeAttr("class");
                $('select#services option:selected').val();
               $.each(optionVarsx[i].content.varations, function (index, sectionObj) {
                    $("select#category option:selected").addClass("servicess");
               // $("input#amount").val("The Amount is set Default Amount");
                $('select#services').append('<option name="variations" value='+index+'>'+sectionObj.name+'</option>');   
                // $('select#servicesw').append('<option name='+sectionObj.variation_code+' value='+sectionObj.variation_code+'>'+sectionObj.name+'</option>');  
                //  $("input#amount").val($('select#services option:selected').val());
                //  $("input#amount").attr("value", $('select#services option:selected').val());
        //         $("input#variation_code").val(sectionObj.variation_code);
        //   $("input#variation_code").attr("value", sectionObj.variation_code);
        //   $("input#amount").val(sectionObj.variation_amount);
        // $("input#amount").attr("value", sectionObj.variation_amount);
        // $('select#services').on("blur", function(e) {
              
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
        e.preventDefault();
       });
      // //  var idxz = $("select#services option:selected").val();     
      //   for(var j = 0; j < sectionObj.length; j++) {
      //     //  var codez = optionVarsw[j].id;	                     
      //     //    if(codez == idxz) {
      //          $("select#services option").removeAttr("class");
           
      //         $.each(sectionObj, function (index,section) {
      //              $("select#services option:selected").addClass("servicess");
      //          $("input#variation_code").val(section[i][j].variation_code);
      //          $("input#variation_code").attr("value", section[i][j].variation_code);
           
      //         });
              
           });
      
       
                // for(var j = 001; j < sectionObj.length; j++) {
                //   $.each(sectionObj[i][j], function (index, sect) {
                //   $('select#services').append('<option name='+sect.variation_code+' value='+sect+'>'+sect.name+'</option>');  
                //   });
                // }  
                //   });
               
                
               $(optionVarsx[i].content).each(function (index,sectionObj) {
               
                $("input#serviceID").attr("value", sectionObj.serviceID);
                //.attr("name", sectionObj.serviceID)
                });
               
            }
         }
          e.preventDefault();
    });

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
        </div>

</div>
        </div>
        </div>
</section>
<script src="pay/cablepay.js"></script>
 
    <?php
    include 'swiftdetails/footer.php';
    ?>