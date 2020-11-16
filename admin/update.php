<?php
require '../swiftdetails/connPDO.php';
include '../swiftdetails/header.php';

$idSwiftUsers = $_GET['id'];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$message = '';
$messageErr = '';
$sql = "SELECT * from users WHERE idSwiftUsers= ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$idSwiftUsers]);
$results = $stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['submit'])) {
    $request_id = test_input($_POST["request_id"]);
    $uidSwiftUsers = test_input($_POST['uid']);
    $emailSwiftUsers = test_input($_POST['mail']);
    $pwdSwiftUsers = test_input($_POST['pwd']);
    $phone = test_input($_POST['phone']);
    $wallet = test_input($_POST['wallet']);
    $token = test_input($_POST['token']);
    $confirmation = test_input($_POST['confirmation']);
    $userType = test_input($_POST['user_type']);
    function getToken($len=32) {
        return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
    }
    if($confirmation > 0 || $confirmation === 1) {
     $token = " ";
    }  else {
        $token = getToken(20);
    }
    $hashedPassword = password_hash($pwdSwiftUsers, PASSWORD_DEFAULT);
    $sql = 'UPDATE users SET request_id=?, uidSwiftUsers=?, emailSwiftUsers=?, pwdSwiftUsers=?, wallet=?, token=?, confirmation=?, userType=? WHERE idSwiftUsers=?;';
    $stmt = $conn->prepare($sql);
    $results =  $stmt->execute([$request_id, $uidSwiftUsers, $emailSwiftUsers, $hashedPassword, $wallet, $token, $confirmation, $userType, $idSwiftUsers]);
    if($results) {
        $message ='Data  Updated Successfully';
        header("Location: ./database.php");
    } else {
        $messageErr ='Data not Updated';
    }
    
}
?>
   <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="../css/swift.css" type="text/css">
    <link rel="stylesheet" href="../css/loading.css" type="text/css">
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Swift Geek Links:Admin - Update DataBase</title>
</head>
<body>
    <div class="container">
    <div class="card mt-4">
        <div style="width: 100%;"  class="card-header">
            Update Database
        </div>
        <div style="width: 100%;" class="card-body">
        <strong style="color: red;">Disclaimer Note: </strong><p>When Updating This page. Please do well to change the password likewise for security reasons. Use at least <strong style="color: red;"> 8 </strong> characters; not limited to at least one Upper case, Lower Case, Numeric Character. Likewise, Note do not update database 1 and 2 with the UserName <strong style="color: red;">WittStack</strong> and <strong style="color: red;">SwiftGeek</strong>. Thanks </p>
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
            <form method='POST' enctype="multipart/form-data" action="">
            <div class="form-group">
                    <label for="name"> Request ID </label>
                    <input type="hidden" value="<?php echo 'Update_'.$results->request_id; ?>" name="request_id" id="request_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name"> UserName </label>
                    <input type="text" value="<?=$results->uidSwiftUsers; ?>" name="uid" id="uid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mail"> Email Address </label>
                    <input type="email" value="<?=$results->emailSwiftUsers; ?>" name="mail" id="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd"> Password: </label>
                    <input type="text" disabled value="******"  name="pwd" id="pwd" class="form-control">
                    <a href="#!" id="edit_password">Edit</a>
                </div>
                <script>
                    $(document).ready(function() {
                        $("a#edit_password").click(function() {
                            $("input#pwd").val("<?=$results->pwdSwiftUsers; ?>").removeAttr('disabled');
                            $("a#edit_password").text('You can now Update Your Password!')
                    });
                });
                    </script>
                     <div class="form-group">
                    <label for="phone"> Phone: </label>
                    <input type="number"  value="<?=$results->phone; ?>" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="wallet"> Wallet: </label>
                    <input type="number"  value="<?=$results->wallet; ?>" name="amount" id="wallet" class="form-control">
                </div>
                <div class="form-group">
                    <label for="token"> Token: </label>
                    <input type="text" value="<?=$results->token; ?>"  name="token" value="" id="token"  placeholder=" " class="form-control" disabled>
                </div>
              
                <div class="form-group">
                <label for="confirmation"> Confirmation: </label>
                    <select class="form-control" value="<?=$results->confirmation; ?>" name="confirmation" id="confirmation">
                    
                        <option value="0">0</option>
                        <option id="confirmz" selected value="1">1</option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label for="user_type"> User Type: </label>
                    <select class="form-control" value="<?=$results->userType; ?>" name="user_type">
                        <optgroup label="Select A User">
                        <option value="Admin">Admin</option>
                        <option selected value="User">User</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                  
                    <input type="submit" name="submit" id="submit" value="Update" class="btn btn-md btn-info form-control">
                </div>
</form>
          
        </div>
    </div>
    </div>
<?php
include '../swiftdetails/footer.php';
?>
