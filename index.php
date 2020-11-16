<?php
include 'swiftdetails/header.php';
?>
		<title>Welcome to Swift Geek Links</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main7.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	</head>
	<body class="is-preload">
    <header id="header">
        <style>
            .animate__animated.animate__lightSpeedInLeft {
                --animate-duration: 3s;
                --animation-delay: 1s;
            }
            .animate__animated.animate__fadeInUp {
                --animate-duration: 4s;
                --animation-delay: 2s;
            }
            </style>
        <h1 style="line-height: 20px;" class="animate__animated animate__lightSpeedInLeft">Welcome to Swift Geek Link</h1>
        <p>A Hub for Internet Subscription<br /></p>
    </header>
        <div style="width: 150px; text-decoration: none;">
        <a class="animate__animated animate__fadeInUp" href="start.php"><button style="border-radius: 10px; background: #f1a947; width: 150px; padding:15px !important; font-size: 1em;" type="button"> Let's Get Started </button></a>
        </div>
    <style>
        button:hover{
            cursor:pointer;
            color: #fff;
            font-weight: 500;
            pointer-events: all ;
        }
        </style>

		<!-- Footer -->
			<section id="footer">
                <h4> Follow Us! </h4>
				<ul class="icons">
                    <li><a href="#!" title="We are currently Not Here." class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/Swiftgeeklinks" class="icon brands fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/Swiftgeek_world" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="mailto:info@swiftgeek.com.ng" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul<li> 
          <b>Swift Geek Links &copy;</b>
          <span id="datefooter"> Year</span>
          . Design and Powered by Witt
          <span style="color:plum;">Stack</span>
          . All right Reserved
            </section>
            <script>
               /* function validateForm() {
                    var swiftForm = document.forms["swiftGeekForm"]["email"].value;
                    if(swiftForm === "") {
                        alert("Please fill out the field");
                        return false;
                    }
                }*/
            var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;
        </script>

		<!-- Scripts -->
			<script src="assets/js/main5.js"></script>

	</body>
</html>