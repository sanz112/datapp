<?php
session_start();
include 'swiftdetails/connPDO.php';
include 'swiftdetails/header.php';
// Below is optional, remove if you have already connected to your database.
// $mysqli = mysqli_connect('localhost', 'root', 'WittTech1.', 'swiftgeek');

$total_pages = $conn->query('SELECT * FROM transact')->rowCount();

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $conn->prepare("SELECT transact.idSwift, users.emailSwiftUsers, transact.client_id, transact.request_id, transact.swiftType, transact.amount, transact.amountPaid, transact.platforms
FROM `transact`
INNER JOIN `users`
ON transact.client_id=users.idSwiftUsers 
ORDER BY transact.idSwift DESC LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	//$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$result = $stmt->execute([$calc_page, $num_results_on_page]); 
	// Get the results...
    //$result = $stmt->get_result();

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
    myVar = setTimeout(showPage, 1000);
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
        <div style="width: 100%;" class="card-header">
            <div style="float: left">
            <strong><h3> Transaction History</h3></strong>
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
    
			<style>
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
	
			<table class="table table-bordered">
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
            <tbody>
            
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <?php if($_SESSION["userSwiftId"] == $row["client_id"]): ?>
				<tr>
                    <td><?php echo $row['idSwift']; ?></td>    
					<td><?php echo $row['emailSwiftUsers']; ?></td>
                    <td><?php echo $row['client_id']; ?></td>
                    <td>SwiftGeek<?php echo $row['swiftType']; ?>_<?php echo $row['request_id']; ?></td>
                    <td><?php echo $row['swiftType']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['amountPaid']; ?></td>
                    <td><?php echo $row['platforms']; ?></td>
                </tr>
                
                <?php endif; ?>
                <?php endwhile; ?>
               
            </tbody>
            </table>
                </div>
                </div>
</div>
                </main>


                
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="swiftpage.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="swiftpage.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="swiftpage.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="swiftpage.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="swiftpage.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="swiftpage.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="swiftpage.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="swiftpage.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="swiftpage.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
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
<?php
$stmt = null;
}
?>