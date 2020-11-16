<!DOCTYPE html>
<html>
<title>Swift Geek Links</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
<link rel="icon" href="swiftgeek192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="swift180apple.png" />
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('image/swiftbackground.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    <img src="image/swiftlogo.png" width="150px" height="100px" />
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-large w3-animate-zoom">Swift Geek Links</h1>
    <h1 class="w3-large w3-animate-top">COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-small w3-center">Less than...</p>
    <h1 style="font-family: Raleway;" class="w3-animate-right" id="demo">Time</h1>
  </div>
  <script>
      /*const swiftTime = setInterval(swiftInterval, 1000);
      function swiftInterval() {
          let swiftT = document.querySelector("#demo");
          let n = new Date();
          let d = n.toLocaleDateString();
          swiftT.innerHTML = d
      }*/
        let swiftT = document.querySelector("#demo");
        var countDownDate = new Date("Aug 30, 2020 00:00:00").getTime();

        var x = setInterval(swiftInterval, 1000);
        function swiftInterval() {
        var now = new Date().getTime();

        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        swiftT.innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
            
        if (distance < 0) {
            clearInterval(x);
            swiftT.innerHTML = "EXPIRED";
        }
        }
     </script>
     <footer>
  <div class="w3-display-bottomleft w3-padding-large">
   <strong><h5><em> Powered by Witt<span style="color:plum;">Stack</span><em><span id="datefooter">Year</span></h5></strong>
  </div>
</div>
    </footer>
    <script>
            var d = new Date();
            var k =". " + d.getFullYear() + "." + " " + "All Rights Reserved";
            document.getElementById("datefooter").innerHTML = k;
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</body>
</html>
