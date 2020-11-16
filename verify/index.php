
<?php
include "../swiftdetails/header.php";
?>
   <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/swift8.css" type="text/css">
    <link href="swiftbootcss/boot.css" rel="stylesheet">
    <title>Verification Page</title>
</head>
<body>
<form class="form-signin" method="POST" action="config.php" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="text-center mb-4">
        <img class="mb-4" src="../image/swiftlogo.png" alt="" width="150" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Swift Geek Links</h1>
        <strong><h2>Register</h2></strong>
      
   </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail/uid" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail/uid">Email address</label>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-label-group">
        <input id="password" type="password" name="password" maxlength="15" minlegth="8" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
       
      </div>
    <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-info btn-block" name="login-submit" type="submit">Sign in</button>
      </div>
      <div class="text-center mb-2 mt-3 font-weight-bold">
      <a href="register.php"><h3>Register?</h3></a>
    </div>
   
    </form>
<?php
include "../swiftdetails/footer.php";
?>