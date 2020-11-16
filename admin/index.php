
 <?php
 session_start();
require '../swiftdetails/connPDO.php';
include '../swiftdetails/header.php';
?>
   <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="../css/swift.css" type="text/css">
    <link rel="stylesheet" href="../css/loading.css" type="text/css">
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Swift Geek Links:Admin Page</title>
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
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 22px;
  color: #818181;
  display: block;
}
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 24px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.sidenav a:hover {
  color: #f1f1f1;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (max-width: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
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
<?php if(isset($_SESSION['userSwiftId']) && isset($_SESSION['userType']) == "Admin"): ?>
<main id="myDiv">
<div class="sidenav">
    <a class="brand" href="#!"> SwiftGeek DataBase </a>
    <a style="width: 100%; color: #fff; background-color: geen;" href="../home.php"><span class="fa fa-home mr-2"></span>Home</a>
  <a href="#main">DataBase</a>
  <a href="#airtime_cash">Airtime to Cash </a>
  <a style="width: 100%; color:coral; background-color: geen;" href="../swiftdetails/logout.php"><span class="fa fa-lock mr-2"></span>LogOut</a>

</div>
<div  id="main" class="main">
<div style="width: 100%;">
 <div style="width: 100%;"  class="card mt-4">
        <div style="width: 100%;"  class="card-header">
     <strong><h1>SwiftGeek Links DataBase</h1></strong>
        </div>
        <div style="width: 100%;" class="card-body">
        <?php
        require 'swiftframe.php';
        ?>
</div>
<div style="width: 100%;"  class="card-footer">
            <a style="float: left;"  class="btn btn-info" href="create.php">Create/Add User</a>
        </div>
</div>
</div>
        <div style="width: 100%;">
 <div style="width: 100%;"  class="card mt-4">
        <div style="width: 100%;"  class="card-header">
     <strong><h1>SwiftGeek Airtime DataBase</h1></strong>
        </div>
        <div style="width: 100%;" class="card-body">
        <?php
        require 'swiftframenew.php';
        ?>
    </div>
                </div>
</div>
</main>
                <script>
                    $(document).ready(function() {
                        //alert("hellow");
                        if(document.URL.indexOf("#") == -1) {
                            url = document.URL + "#";
                            location = "#";
                            location.reload(true);
                        }
                    });
                    
                     </script>

</main>

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
                  window.location = "http://localhost:81/data/swiftdetails/login.php";
                });
              });
            </script>
      </div>
            </main>
      <?php endif; ?>

                <?php
                include 'footer.php';
                ?>
