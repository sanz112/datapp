

    <?php
    session_start();
require '../swiftdetails/connPDO.php';
include '../swiftdetails/header.php';
$message = '';
$messageErr = '';
$sql = "SELECT * from `users`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
if($results) {
    $message = "Database Successfully Fetched & Updated";
} else {
    $messageErr == "There was an Error in Fetching Base";
}
?>
   <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="../css/swift.css" type="text/css">
    <link rel="stylesheet" href="../css/loading.css" type="text/css">
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Swift Geek Links:Admin </title>
</head>
<body onload="refLoad()">
<?php if(isset($_SESSION['userSwiftId']) && isset($_SESSION['userType']) == "Admin"): ?>
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
            <strong><h1> DataBase</h1></strong>
            </div>
           
        
        <div style="float: right">
        <form action="search.php" method="POST">
            <div class="row">
            <input class="form-control" type="text" placeholder="Search.." />

            <input class=" btn btn-md btn-success" type="submit" value="Search"/>
</div>
        </form>
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
            <table class="table table-bodered">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Request ID </th>
                    <th> UserName </th>
                    <th> Email Address </th>
                    <th> Password </th>
                    <th> Phone </th>
                    <th> Wallet </th>
                    <th> Token </th>
                    <th> Confirmation </th>
                    <th> User Type </th>
                </tr>
            </thead>
               
                <tbody>
                <?php foreach($results as $r): ?>
                    <tr>
                        <td><?php echo $r->idSwiftUsers; ?> </td>
                        <td><?php echo $r->request_id; ?> </td>
                        <td><?php echo $r->uidSwiftUsers; ?> </td>
                        <td><?php echo $r->emailSwiftUsers; ?> </td>
                        <td><?php echo $r->pwdSwiftUsers; ?> </td>
                        <td><?php echo $r->phone; ?> </td>
                        <td><?php echo $r->wallet; ?> </td>
                        <td><?php echo $r->token; ?> </td>
                        <td><?php echo $r->confirmation; ?> </td>
                        <td><?php echo $r->userType; ?> </td>
                        
                        <td>
                            <div class="p-2 row">
                                     
                             <a class=" btn mb-2 btn-md btn-warning" href="update.php?id=<?= $r->idSwiftUsers ?>"> Edit  </a>
                             <a class="btn btn-md btn-danger" name="deleteuser" onclick="return confirm('Are You Sure You Want to Delete this User')" href="delete.php?id=<?= $r->idSwiftUsers ?>"> Delete </a>
                        
                        </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              
            </table>

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