<?php
session_start();
require 'swiftdetails/connPDO.php';
include 'swiftdetails/header.php';
$message = '';
$messageErr = '';
$sql = "SELECT transact.idSwift, users.emailSwiftUsers, transact.client_id, transact.request_id, transact.swiftType, transact.amount, transact.amountPaid, transact.platforms
FROM `transact`
INNER JOIN `users`
ON transact.client_id=users.idSwiftUsers 
ORDER BY transact.idSwift DESC";
//"SELECT * from `transact` ORDER BY idSwift DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
if($results) {
    $message = "Database Successfully Fetched & Updated";
    // for($stmt->fetch(PDO::FETCH_OBJ)->$client_id) {
    // if($r->client_id == " " || $r->client_id == null || $r->client_id !== $_SESSION["userSwiftId"]) {
    //     $messageN ="You Have No Transaction";
    // }}
} else {
    $messageErr == "There was an Error in Fetching Base";
}

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
        width: 98%;
        box-sizing: border-box;
        margin: 0 auto;
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
<script>
        $(window).on("load", function() {
            //alert("hello");
        $("div#alert_message").fadeOut(5000);
        $("div#alert_messageErr").fadeOut(5000);
    });
    </script>
<div style="width: 100%;";>
    <div style="width: 100%;"  class="card mt-4">
    <div class="row">
        <div style="width: 100%;" class="card-header">
            <div style="float: left">
            <strong><h3> Transaction History</h3></strong>
            </div>
           
        
</div>
</div>
        <div style="width: 100%;" class="card-body">
            <?php if(!empty($message) || !empty($messageErr)): ?>
                <?php if($message): ?> 
                <div id="alert_message" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <?= $message; ?>
            </div>
            <?php endif; ?>
            <?php if(!$message): ?> 
            <div id="alert_messageErr" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $messageErr; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php

            $msg = "You Have not made Any Transaction";
            ?>
  <style>     
#myInput {
  background-image: url('image/searchicon.png');
  background-size: 25px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search based on Pay With.." title="Type in a platform you used">     
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
            <table style="width: 100%;" class="table table-bodered">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Email</th>
                    <th> Client ID</th>
                    <th> Request ID </th>
                    
                    <th> Sub Type </th>
                    <th> Amount </th>
                    <th> Amount Paid</th>
                    <th> Pay With </th>
                </tr>
            </thead>
           
                <tbody id="myTable">
                <!-- <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" id="platwallet" onclick="filterSelection('Wallet')">Wallet</button>
  <button class="btn" id="platcard" onclick="filterSelection('Card')">Card</button>
</div> -->
                <?php foreach($results as $r): ?>
                    <?php if($_SESSION["userSwiftId"] == $r->client_id): ?>
                    <tr class="filterDiv" id="filter">
                        <td><?php echo $r->idSwift; ?> </td>
                        <td><?php echo $r->emailSwiftUsers; ?> </td>
                        <td><?php echo $r->client_id; ?> </td>
                     <td><?php echo $r->request_id; ?> </td>  
                        <td><?php echo $r->swiftType; ?> </td>
                        <td><?php echo $r->amount; ?> </td>
                        <td><?php echo $r->amountPaid; ?> </td>
                        <td id="plat"><?php echo $r->platforms; ?> </td>
                    
                        <!-- <td>
                            <div class="p-2 row">
                                     
                             <a class=" btn mb-2 btn-md btn-warning" href="update.php?id= //$r->idSwiftUsers"> Edit  </a>
                             <a class="btn btn-md btn-danger" name="deleteuser" onclick="return confirm('Are You Sure You Want to Delete this User')" href="delete.php?id= //$r->idSwiftUsers"> Delete </a>
                        
                        </div>
                        </td> -->
                    </tr>
                  
                     <!-- <div> <h3>You Have not made Any Transaction Yet </h3> </div> -->
                    <?php endif; ?>
            
                    <?php endforeach; ?>
               
                </tbody>
                
            </table>

        </div>
      
                </div>
                    </div>
                    </main>
                <!-- <style>
/* .filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
} */

.show {
  display: table;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<script>
                filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
      if(document.getElementById('platwallet').innerText == "Wallet" && document.getElementById('plat').innerText == "Wallet") {
          document.getElementById("filter").classList.add("Wallet");
      } else if(document.getElementById('platcard').innerText == "Card" && document.getElementById('plat').innerText == "Card") {
        document.getElementById("filter").classList.add("Card");
      } else {
        document.getElementById("filter").classList.add("");
      }
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> -->

                <?php else: ?>
              <main id="myDiv">
      <div  style="position: absolute; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
      <div id="alert_messageErr" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="text-center">Hello User! You are not Authorized to view this Page, only an admin can. Thanks </h4>
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
