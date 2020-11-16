<?php
session_start();
include '../swiftdetails/header.php';
?>
     <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="../css/loading.css" type="text/css">
    <link rel="stylesheet" href="../css/swift.css" type="text/css">
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

     <title>Swift Geek Links - Payment/Transaction Details</title>
</head>
<body>
    <?php
    if(isset($_SESSION['userSwiftId'])): ?>
<style>
@media screen and (max-width: 768px) {
        #imgdetails {
            width: 300px;
            height: 220px;
        }
        h1#payment {
            font-size: 20px;
        }
        h3#times {
            font-size: 18px;
        }
}
</style>

    <div style="margin-top: -80px;">
    <div style="position: absolute; display:flex; text-align:center; width: 100%; height: 100%; align-items:center; justify-content:center;">
    <div>
    <img id="imgdetails" src="" width="400px" height="300px" />
    <h1 style="margin-top: -10px;" id="payment"></h1>
    <?php
    if(isset($_SESSION["userSwiftId"])) {
        if(isset($_GET["transactions"])) {
         
          echo "<p style='font-weight: 500; font-size: 24px; color: green;' class='text-center'>Your Transaction Key is</p><b style='margin-bottom: 5px; border: 2px dotted coral; border-radius: 5px; padding: 5px;'>".$_GET['transactions']."</b><div><p> Please Keep it safe or screenshot this Page</p></div>";
        //  }
          } 
          if(isset($_GET["pay_ref"])) {
         
            echo "<p style='font-weight: 500; margin-top: -10px; font-size: 24px; color: green;' class='text-center'>Your Payment Reference Key is</p><b style='margin-bottom: 5px; border: 2px dotted coral; border-radius: 5px; padding: 5px;'>".$_GET['pay_ref']."</b><div><p>Please Keep it safe or screenshot this Page</p></div>";
          //  }
            } 
        }
        ?>
    <h3 style="margin-top: -5px;" id="times" class="text-center">You will redirected to the Home Page in <i style="color: red;" id="time"></i></h3>
</div>
    </div>
    </div>
    <style>
            .addcolor {
                color: green;
            }
        </style>
    <script>
        if(sessionStorage.getItem('payment') !== 'success') {
            document.getElementById("imgdetails").src="../images/error.gif";
        document.getElementById("payment").innerHTML = 'No Payment Made';
        // Set the date we're counting down to
var countDownDate = new Date().setSeconds(new Date().getSeconds()+ 10);

// Update the count down every 1 second
var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("time").innerHTML =  seconds + "S";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").classList.add("addcolor");
    document.getElementById("time").innerHTML = "\n\"Time to Redirect\"";
    sessionStorage.clear();
    window.location = window.location.protocol+"//"+window.location.hostname+":81/data/home.php";
}
}, 1000);
        //
} else if(sessionStorage.getItem('payment') == 'success' && sessionStorage.getItem('responses') == 'success') {
     document.getElementById("imgdetails").src="../images/swift_success_payment.gif";
    document.getElementById("times").remove();
    document.getElementById("payment").innerHTML = 'Payment Successfully Charged Via Wallet';
    sessionStorage.clear();
} else {
    document.getElementById("imgdetails").src="../images/swift_success_payment.gif";
    document.getElementById("times").remove();
    document.getElementById("payment").innerHTML = 'Payment Successfully Charged Via Card';
    sessionStorage.clear();
}
</script>

<?php else: ?>
    <div>
    <div style="position: absolute; display:flex; text-align:center; width: 100%; height: 100%; align-items:center; justify-content:center;">
    <div>
    <h3> You are not Authorize to view this page. Kindly Log In via <a href="../swiftdetails/login.php">LogIn</a>. Thanks</h3>
<?php endif; ?>

<div style="position:absolute; bottom:0; left:0; right: 0;">
<?php
include 'footer.php';
?>
</div>