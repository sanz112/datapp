<?php
session_start();
require "swiftdetails/header.php"; 
?>

<link href="swiftjs/anime.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/loading.css" type="text/css">
    <link rel="stylesheet" href="css/swiftnewwww.css" type="text/css">
    <link href="swiftbootcss/boot.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
   
    <title>Swift Geek Links Welcomes You</title>
</head>
<body class="animate__animated animate__lightSpeedInLeft">
<style>
            .animate__animated.animate__lightSpeedInLeft {
                --animate-duration: 3s;
                --animation-delay: 1s;
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
<style>
          @media screen and (max-width: 768px) {
        #myDiv {
            padding-top: 100px;
            
        }  
         }
            .carousel-inner img {
            width: 100%;
            height: 100%;
            }
        </style>
        
    <main id="myDiv">
        
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/swiftimage_1.jpg" alt="Swift_Geek_1" width="100%" height="100%">
     
    </div>
    <div class="carousel-item">
      <img src="images/swiftimage_2.jpg" alt="Swift_Geek_2" width="100%" height="100%">
    
    </div>
    <div class="carousel-item">
      <img src="images/swiftimage_3.jpg" alt="Swift_Geek_3" width="100%" height="100%">
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        <h2 class="mt-4 p-2 py-2 lg-heading"><span class="text-secondary"> Swift Geek Links</span></h2>
       


        <div class="p-2 bio">
            <h2 class="text-secondary">About US!</h2>
            <p style="text-indent: 100px; font-weight: 400; font-size: 18px;">Welcome to Swift Geek Links. Swift Geek is a company of Swift Geek Links LTD. We offer best deals when it comes to internet Data Plans Like; <b style="color:yellow">MTN</b>, <b style="color:green;">GLO</b>, <b style="color: red;">AIRTEL</b>, <b style="color: lightgreen;">9MOBILE</b>, <b style="color:green;">SMILE</b>, Airtime such as: <b style="color:yellow">MTN</b>, <b style="color:green;">GLO</b>, <b style="color: red;">AIRTEL</b>, <b style="color: lightgreen;">9MOBILE</b>, Utility/Electricity Bills, Cable/TV Bills like <b style="color: red;">GOTV</b>, <b style="color: green;">DSTV</b> & <b style="color: plum;">STARTIMES</b>, you will get these at affordable prices</p>
        </div>
        <section style="background: green;" class="p-5 my-3 mb-4">
<div style="color: #fff;" class="text-center p-3 mb-4"><h3><b><u> Why Choose Us? </u></b></h3></div>
          <div class="container">
            <div style="z-index: 1;" class="row">
              <div style="z-index: 1; background: lightgreen; border-radius: 5px;" class="w-100 p-4 col-md-3">
              <div class="text-center">
               <div> <h1><i class="fa fa-eye"></i></h1></div>
                <div><h4> AUTOMATION </h4></div>
                <div>
                <p> In Assurance to give you the best treat, all our services and transactions are running on an automated system. No Delay in Delivery </p>
          </div>
              </div>
          </div>
              <div style="z-index: 1; background: lightgreen; border-radius: 5px;" class="w-100 p-4 col-md-3">
              <div class="text-center">
               <div> <h1><i class="fa fa-support"></i></h1></div>
                <div><h4> USER SUPPORT </h4></div>
                <div>
                <p> You are not alone, our customer representative is just click away, don't hesitate to consult us on anything as the system is 98% automated. Thus, all transactions are attended to within minutes. </p>
              </div> 
          </div>
          </div>
                <div style="z-index: 1; background: lightgreen; border-radius: 5px;" class="w-100 p-4 col-md-3">
                <div class="text-center">
               <div> <h1><i class="fas fa-credit-card"></i></h1></div>
                <div><h4> E-Wallet </h4></div>
                <div>
                <p> Swift Geek Links allows you to save your money on the website and use it anytime (24/7 services) for any transactions, and if not used, it can be withdrawn by converting to cash or send us a message. It is <b>100%</b> Secured </p>
          </div>
              </div>
          </div>
        
          </div>
          </div>
        </section>
        <div class="p-2 mt-lg-3 mt-md-0">
            <strong><h3 class="text-center mb-4"><u> Purchase Data & Airtime from Us </u></h3></strong>
        </div>
        <script>
        $(document).ready(function() {
        $("a#btn1, a#btn2, a#btn3, a#btn4").click(function() {
              //alert('hello');
              $(this).text('Processing...!').attr("disabled", "disabled");
              });
              });
        
        </script>
        <div class="row">
        <div class="p-sm-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div style="border: 5px solid yellow;" class="card">
            <div style="width: 100%;">
                <div class="card-img-top ">
                    <img style="display: grid; place-items: center;" width="100%" height= "250px" src="images/mtn.png">
                </div>
                <div class="card-body">
                    <div class="text-center card-title">
                    <h2> MTN NG </h2>
                    <h4> CHECK BALANCE </h4>
                    <p> <strong>*461*4 </strong> </p>
                     </div> 
                              
                    <table style="width: 100%;" class="table table-dark text-center">
                        <thead> <th>MTN NG Subcription</th>
                        </thead>
                        <tbody style="color: #333">
<tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; ">1GB --- &#x20A6 310</td>
   </tr>  
   
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 2GB --- &#x20A6 620</td>
   </tr>   
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 3GB --- &#x20A6 930</td>
   </tr>   
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 5GB --- &#x20A6 1,550</td>
   </tr>     
</tbody>                    
</table>
        <a href="home.php" id="btn1" style="background: #f1a947; display: grid; place-items: center; color: #fff; font-weight: 500; text-align: center; margin: 0 10px;"class="btn btn-success btn-md mt-2"> Buy Now! </a>
                </div>
            </div>
        </div>
        </div>
        <div class="p-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div style="border: 5px solid green;"  class="card">
                <div style="width: 100%;">
                <div class="card-img-top">
                    <img style="display: grid; place-items: center;" width="100%" height= "250px" src="images/glo.jpg">
                </div>
                <div class="card-body">
                <div style="width: 100%;">
                <div class="text-center card-title">
                    <h2> GLO NG </h2>
                    <h4> CHECK BALANCE </h4>
                    <p> <strong> *127*0# </strong> or Visit <b> HSI.GLO.COM </b> to check full balance and analysis </p>
                     </div>          
                     <table style="width: 100%;" class="table table-dark text-center">
                        <thead> <th>GLO NG Subcription</th>
                        </thead>

<tbody style="color: #333">
<!-- <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; color: red; padding: 5px; "> 1GB(30 Days) ---  N310[Promo]</td>
   </tr> -->
<tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 7GB(7 Days) ---  &#x20A6 1,350</td>
   </tr>  
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 1GB(14 Days) --- &#x20A6 450</td>
   </tr>   
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 2.5GB(30 Days) ---&#x20A6 880</td>
   </tr>   
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 4.1GB(30 Days) --- &#x20A6 1,320</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 5.25GB(30 Days) --- &#x20A6 1,760</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 7.7GB(30 Days) --- &#x20A6 2,200</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 9GB(30 Days) --- &#x20A6 2,640</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 13GB(30 Days) --- &#x20A6 3,520</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 18.5GB(30 Days) --- &#x20A6 4,400</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 29GB(30 Days) --- &#x20A6 7,040</td>
   </tr>    
</tbody>                    
</table>
                    <a href="home.php" id="btn2" style="background: #f1a947; display: grid; place-items: center; color: #fff; font-weight: 500; text-align: center; margin: 0 10px;"class="btn btn-success btn-md mt-2"> Buy Now! </a>
                </div>
                </div>
            </div>
        </div>
        </div>
     
        <div class="p-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div style="border: 5px solid red;" class="card">
            <div style="width: 100%;">
                <div class="card-img-top">
                    <img style="display: grid; place-items: center;" width="100%" height= "250px" src="images/airtel.png">
                </div>
                <div class="card-body">
                <div class="text-center card-title">
                    <h2> AIRTEL NG </h2>
                    <!-- <h4> CHECK BALANCE </h4>
                    <p> *461*4 </p> -->
                     </div>          
                     <table style="width: 100%;" class="table table-dark text-center">
                        <thead> <th>AIRTEL NG Subcription</th>
                        </thead>

                        <tbody style="color: #333">
<tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 1.5GB(30 Days) --- #950</td>
   </tr>  
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 2GB(30 Days) --- &#x20A6 1,140</td>
   </tr>   
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 3GB(30 Days) --- &#x20A6 1,425</td>
   </tr>   
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 4.5GB(30 Days) --- &#x20A6 1,900</td>
   </tr> 
   <!-- <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 6GB(30 Days) --- #1,900</td>
   </tr>  -->
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 8GB(30 Days) --- &#x20A6 2,850</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 11GB(30 Days) --- &#x20A6 3,800</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 15GB(30 Days) --- &#x20A6 4,750</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 40GB(30 Days) --- &#x20A6 9,400</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 75GB(30 Days) --- &#x20A6 14,100</td>
   </tr>      
</tbody>                    
</table>
                    <a href="home.php" id="btn3" style="background: #f1a947; display: grid; place-items: center; color: #fff; font-weight: 500; text-align: center; margin: 0 10px;"class=" mt-2 btn btn-success btn-md"> Buy Now! </a>
                </div>
            </div>
        </div>
        </div>
        <div class="p-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div style="border: 5px solid lightgreen;"  class="card">
            <div style="width: 100%;">
                <div class="card-img-top">
                    <img style="display: grid; place-items: center;" width="100%" height= "250px" src="images/9Mobile.jpg">
                </div>
                <div class="card-body">
                <div class="text-center card-title">
                    <h2> 9Mobile NG </h2>
                    <!-- <h4> CHECK BALANCE </h4>
                    <p> *461*4 </p> -->
                     </div>          
                     <table style="width: 100%;" class="table table-dark text-center">
                        <thead> <th>9Mobile NG Subcription</th>
                        </thead>

                        <tbody style="color: #333">
<tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 1GB(7 Days) --- &#x20A6 440</td>
   </tr>  
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 7GB(7 Days) --- &#x20A6 12,750</td>
   </tr>   
   <tr style="border-bottom: 1px solid #333;">
    <td style="background: #b4b4b4; padding: 5px; "> 1.5GB(30 Days) --- &#x20A6 85,000</td>
   </tr>   
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 2GB(30 Days) --- &#x20A6 1,020</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;"> 3GB(30 Days) --- &#x20A6 1,275</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;">4.5GB(30 Days) --- &#x20A6 1,700</td>
   </tr>
   <tr>
    <td style="background: #b4b4b4; padding: 5px;">11GB(30 Days) --- &#x20A6 3,400</td>
   </tr>  
   <tr>
    <td style="background: #b4b4b4; padding: 5px;">15GB(30 Days) --- &#x20A6 4,250</td>
   </tr> 
   <tr>
    <td style="background: #b4b4b4; padding: 5px;">75GB(30 Days) --- &#x20A6 12,700</td>
   </tr>      
</tbody>                    
</table>
                    <a href="home.php" id="btn4" style="background: #f1a947; display: grid; place-items: center; color: #fff; font-weight: 500; text-align: center; margin: 0 10px;"class="btn btn-success btn-md mt-2"> Buy Now! </a>
                <!--onClick="this.form.submit(); this.disabled=true; this.innerText ='Processing.....'; "-->
                
                </div>
            </div>
        </div>
        </div>
            </div>
    </main>
 <section>
<div id="bubble">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

 </section>

<section class="my-4">
    <div style="width: 90%;" class="card">
    <div style="width: 100% !important;" id="contact">
         <div>
  <h2 class="h1-responsive font-weight-bold text-center my-3">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-3">Contact Us. We will Respond as Soon As Possible</p>
        </div>
  <div class="row">
    <div class="col-lg-4">
    
      <form  action="mail.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="card">
      <div style="width: 100%;"> 
        <div class="card-header">
            <h1> Write to Us! </h1>
        </div>
        <div class="card-body">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="uid">Username/Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username/Name" name="user_name" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="subject">Subject:</label>
      <input type="text" class="form-control" id="subject" maxlength="100" minlength="5" placeholder="Enter Subject" name="subject" required>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field or character must be must than 5 and less than 100 Characters.</div>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea style="resize: none;" type="text" class="form-control" id="message" placeholder="Your Message" name="message" required></textarea>
      <div class="valid-feedback">Great</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on <a href="#!" data-toggle="modal" data-target="#myModal">Terms & Condition </a>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Swift Geek Links Terms & Condition</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p class="text-center"> Our Terms & Condition are as follows: </p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-md btn-warning" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
    <?php
    if(isset($_GET["error"])) {
          if($_GET["error"] == "eMAIL_NOT_sENT") {
              echo "<p style='color:red'> Email Not Sent</p>";
          }
        }
        ?>

         <div class="card-footer">
    <input type="submit" class="form-control btn btn-success" id="subject" Value="Submit Message" name="submit_message" required>
        </div>
        </div>
    </div>
    </div>
  </form>
    </div>
       
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="pr-3 pl-3 mb-4" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=Lagos&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0; height: 100%; width: 100%;" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-map-marker-alt"></i>
          </a>
          <p>Lagos</p>
          <b><p class="mb-0">Nigeria</p></b>
        </div>
        <div class="col-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-phone"></i>
          </a>
          <p>+ 234- 80 345 678 32</p>
          <b><p class="mb-0">24/7, 8:00-22:00</p></b>
        </div>
        <div class="col-4 mb-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-3x fa-envelope"></i>
          </a>
          <p>info@swiftgeek.com.ng</p>
        </div>
      </div>

    </div>
    </div>
        </div>
        </div>
</section>
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
<style>
     .card:hover {
        box-shadow: 2px 3px 3px 4px rgba(0,0,0,0.25);
     }
     @media screen and (min-width: 100px) {
      #bubble span {
         height: 50px;
         width: 50px;
         border-radius: 50%;
         background: #ff0000;
         animation: bubble 8s ease-in-out alternate-reverse infinite;
     }
     #bubble {
         width: 100%;
         height: 100%;
         opacity: 0.85;
         z-index: 1;
         display: flex;
         align-items: center;
         justify-content: space-around;
         position: absolute;
         bottom: 50%;
     }
     @keyframes bubble {
         0% {
             transform:  translateY(0);
             opacity: 0;
         }
         50% {
            
             opacity: 1;
         }
         70% {
            
             opacity: 0;
         }
         100% {
             transform:  translateY(1300px);
             opacity: 0;
         }
     }
     #bubble span:nth-child(1) {
        animation-delay: 2s;
        width: 30px;
        height: 30px;
        background: #f1a947;
     }
     #bubble span:nth-child(2) {
        animation-delay: 1.5s;
        width: 20px;
        height: 20px;
        background: plum;
}
#bubble span:nth-child(3) {
    animation-delay: 4s;
    width: 60px;
    height: 60px;
    background: yellow;
}
#bubble span:nth-child(4) {
    animation-delay: 6s;
    width: 15px;
    height: 15px;
    background: yellowgreen;
}
#bubble span:nth-child(5) {
    animation-delay: 2.5s;
    background: purple;
}
#bubble span:nth-child(6) {
    animation-delay: 5s;
    width: 10px;
    height: 10px;
}
#bubble span:nth-child(7) {
    animation-delay: 0.5s;
    background: gold;
}
#bubble span:nth-child(8) {
    animation-delay: 1.75s;
    background: gold;
}
#bubble span:nth-child(9) {
    animation-delay: 3s;
    background: #f1a947;
}
     }
     </style>
     <!-- <script>
     document.body.innerHTML += "<script>"+localStorage.getItem("alert"); +"<\/script>";
     var script = document.scripts[document.scripts.length -1];
     var s = document.createElement("script");
     s.textContent = script.textContent;
     document.body.removeChild(script);
     document.body.appendChild(s);
//document.getElementsByTagName("body") = localStorage.alert;
 </script> -->
   <?php
   include 'swiftdetails/footer.php';
   ?>
   
