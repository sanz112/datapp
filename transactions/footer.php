

<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #f1a947;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:20px;
	left:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 1px 2px 2px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
<a href="https://api.whatsapp.com/send?phone=2348064881468&text=Good%20Day%20." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<div style="background-color: #000;">

    <hr style="color: #fff; height: 20px;" /> 

<div class="mt-2 py-3 text-muted">
    <p  class=" text-center">
        <b>Swift Geek Links &copy;</b>
        <span id="datefooter"> Year</span>
        . | <a style="color: #fff;" href="swiftDeveloper_api.php">Developers' API</a> | Designed and Powered by <a style="cursor: pointer;" href="https://wa.me/message/LCCPGHQCMQKYK1"><span style="color: #fff;">Witt</span><span style="color:plum;">Stack</span></a>
        . All Rights Reserved
      </p>
</div>
</div>
<script src="../swiftjs/js.js" type="text/javascript"></script>
<script src="../swiftjs/popper.js" type="text/javascript"></script>
<script src="../swiftjs/boot.js" type="text/javascript"></script>
<script src="../swiftjs/main.js"  type="text/javascript"></script>
<!-- <script src="https://js.paystack.co/v1/inline.js"></script>  -->
</script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--<script src="../swiftjs/jquery.js"  type="text/javascript"></script>-->
</body>
</html>