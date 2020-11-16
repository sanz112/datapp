<?php
include '../swiftdetails/header.php';
require '../swiftdetails/connPDO.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$message = '';
$messageErr = '';
if(isset($_POST['submit'])) {
    $request_id = test_input($_POST["request_id"]);
    $uidSwiftUsers = test_input($_POST['uid']);
    $emailSwiftUsers = test_input($_POST['mail']);
    $pwdSwiftUsers = test_input($_POST['pwd']);
    $wallet = test_input($_POST['wallet']);
    $token = test_input($_POST['token']);
    $confirmation = test_input($_POST['confirmation']);
    $userType = test_input($_POST['user_type']);
      $sql = "SELECT uidSwiftUsers FROM `users` WHERE uidSwiftUsers=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uidSwiftUsers]);
        $result = $stmt->rowCount();
        if($result > 0) {
            $messageErr ='Name Taken, Kindly Use a New Name';
        } else {
            $sql = "SELECT emailSwiftUsers FROM `users` WHERE emailSwiftUsers=?;";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$emailSwiftUsers]);
            $resultEmail = $stmt->rowCount();
            if($resultEmail > 0) {
                $messageErr ='Email Taken, Kindly Use new Email Address';
            } else {
               
                function getToken($len=32) {
                    return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
                }
                if($confirmation > 0 || $confirmation == 1) {
                 $token = " ";
                }  else {
                    $token = getToken(20);
                }
                $hashedPassword = password_hash($pwdSwiftUsers, PASSWORD_DEFAULT);
                
    $sql = 'INSERT INTO `users`(request_id, uidSwiftUsers, emailSwiftUsers, pwdSwiftUsers, wallet, token, confirmation, userType) VALUES(:request_id, :uidSwiftUsers, :emailSwiftUsers, :pwdSwiftUsers, :wallet, :token, :confirmation, :userType)';
    $stmt = $conn->prepare($sql);
    $results =  $stmt->execute([
        ':request_id' => $request_id,
        ':uidSwiftUsers' => $uidSwiftUsers,
        ':emailSwiftUsers' => $emailSwiftUsers,
        ':pwdSwiftUsers' => $hashedPassword,
        ':wallet' => $wallet,
        ':token' => $token,
        ':confirmation' => $confirmation, 
        ':userType' => $userType
        ]);
    if($results) {
        $message ='Data Entered Successfully';
        header('Location: index.php');
    } else {
        $messageErr ='Data not Entered';
    }
}
            }
}   
?>  
 <link rel="icon" href="../image/swiftgeek32.png" sizes="32x32" />
<link rel="icon" href="../image/swiftgeek192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../imageswift180apple.png" />
<link rel="stylesheet" href="../css/swift.css" type="text/css">
<link rel="stylesheet" href="../css/loading.css" type="text/css">
<link href="../swiftbootcss/boot.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Swift Geek Links:Admin - Create DataBase</title>
</head>
<body onload="refLoad()"> 
<?php if(isset($_SESSION['userSwiftId']) && isset($_SESSION['userType']) == "Admin"): ?>
     <script>
          $(window).on("load", function() {
           alert("hello");
           $("input#request_id").attr("value", "Create_"+Math.floor(Math.random() * 1000000) +1);
        $("div#alert_message").fadeOut(5000);
        $("div#alert_messageErr").fadeOut(5000);
    });
</script>
<script>
    var confirm = document.querySelector("option#confirmz").value;
         var token = document.querySelector("input#token").value;
         if(confirm === 1) {
             //alert("hi");
             token = " ";
         } else {
             return true;
         }
        
                    </script>
    <div class="container">
    <div style="width: 100%;" class="card mt-4">
        <div style="width: 100%;" class="card-header">
            Add to DataBase
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
            <form method='POST' enctype="multipart/form-data" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                    <label for="name"> Request ID </label>
                    <input type="hidden"  name="request_id" id="request_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name"> UserName </label>
                    <input type="text" name="uid" id="uid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name"> Email Address </label>
                    <input type="email" name="mail" id="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name"> Password: </label>
                    <input type="password" name="pwd" id="pwd" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name"> Wallet: </label>
                    <input type="number" name="wallet" id="wallet" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name"> Token: </label>
                    <input type="text" value=" " name="token" value="" id="token"  placeholder="Not to be Edited. Token will be generated automatically" class="form-control" disabled>
                </div>
              
                <div class="form-group">
                <label for="name"> Confirmation: </label>
                    <select class="form-control" name="confirmation" id="confirmation">
                    
                        <option value="0">0</option>
                        <option id="confirmz" selected value="1">1</option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label for="name"> User Type: </label>
                    <select class="form-control" name="user_type">
                        <optgroup label="Select A User">
                        <option value="Admin">Admin</option>
                        <option selected value="User">User</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                  
                    <input type="submit" name="submit" id="submit" value="Create" class="btn btn-md btn-info form-control">
                </div>
</form>
        </div>
        <div style="width: 100%;" class="card-footer">
           <a href="./"> <button class="btn btn-primary btn-md">Admin Panel </button></a>
        </div>
    </div>
    </div>
    
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

