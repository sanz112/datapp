<?php
//session_start();
require "header.php";
?>
    <link rel="icon" href="../image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="../image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <title>Swift Geek Links - Forgot Password</title>
     <link href="../swiftbootcss/boot.css" rel="stylesheet">
    <link href="../swiftbootcss/main.css" rel="stylesheet">
</head>
<body>
<section>

<form style="width: 100%;" class="form-signin" method="POST" action="forgotPwd.php" enctype="multipart/form-data">
      <div class="text-center mb-4">
        <img class="mb-4" src="../image/swiftlogo.png" alt="" width="150" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Swift Geek Links</h1>
        <strong><h2>PassWord Reset</h2></strong>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Enter Your Email address" required autofocus>
        <label for="inputEmail">Enter Your Email Address</label>
      </div>
    <div class="form-label-group">
      <button style="background: #f1a947;" class="btn btn-lg btn-info btn-block" name="reset_password" type="submit">Get New PassWord</button>
      </div>
      <p class="mt-4 mb-3 text-muted text-center">
          <b>Swift Geek Links &copy;</b>
          <span id="datefooter"> Year</span>
          . Design and Powered by Witt
          <span style="color:plum;">Stack</span>
          . All right Reserved
        </p>
    </form>
    
</section>
<script>
            var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;
        </script>
</body>
</html>