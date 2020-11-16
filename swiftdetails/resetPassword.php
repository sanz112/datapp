<?php
//session_start();

//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
require "header.php";
?>
    <link rel="icon" href="../image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="../image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <link href="../swiftbootcss/main.css" rel="stylesheet">
    <title>Swift Geek Links - Reset Password</title>
</head>
<body>
<section>
<?php
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

     if(empty($selector) || empty($validator)) {
        echo "Could not validate your request";
    } else {
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
?>


        <form class="form-signin" method="POST" action="resetPwd.php" enctype="multipart/form-data">
        <input type="hidden" name="selector" value="<?php echo $selector; ?>"> 
        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
        <div class="text-center mb-4">
        <img class="mb-4" src="../image/swiftlogo.png" alt="" width="150" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Swift Geek Links</h1>
        <strong><h2><u>Reset Password</u></h2></strong>
      </div>

      <div class="form-label-group">
        <input type="password" name="newpwd" maxlength="15" minlegth="8" id="inputNewPassword" class="form-control" placeholder="New Password" required>
        <label for="inputNewPassword">New Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="pwd-repeat" id="inputConfirmNewPassword" class="form-control" placeholder="Confirm New Password" required>
        <label for="inputConfirmNewPassword">Confirm New Password</label>
      </div>
    <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-info btn-block" name="reset_password_submit" type="submit">Reset Password</button>
      </div>
    <p class="mt-4 mb-3 text-muted text-center">
        <b>Swift Geek Links &copy;</b>
        <span id="datefooter"> Year</span>
        . Design and Powered by Witt
        <span style="color:plum;">Stack</span>
        . All right Reserved
      </p>
    </form>';
    <?php
        }
    }
    ?>

</section>

</body>
</html>