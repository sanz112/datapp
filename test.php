<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body onload="refLoad()" onunload="refStopped()">



<link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/swift8.css" type="text/css">
    <!--<link rel="stylesheet" href="css/loading.css" type="text/css">-->
    <link href="swiftbootcss/boot.css" rel="stylesheet">
    <title>Swift Geek Links</title>



<form id="formss" onunload="clickTo()" action="/action_page.php">
      <div class="form-group">
      <label for="ref">ReferenceID</label>
      <input type="number" class="form-control" id="refvalue" value="Reference ID"  name="refId" readonly>
    </div>
    <div class="form-group">
      <label for="mySelect">Select list (select one):</label>
      <select id="category" onchange="selectNew()" class="form-control" name="sellist">
        <option value="000" selected="selected">Select A Network Provider</option>
        <option id="mtnnew" value="001" name="mtn">MTN NG</option>
        <option id="glo" name="glo" value="002">GLO NG</option>
        <option id="airtel" name="airtel" value="003" >AIRTEL NG</option>
        <option id="9mobile" name="9mobile" value="004">9MOBILE NG</option>
      </select>
      </div>
      <div class="form-group">
      <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" placeholder="Amount" name="amnt" required>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
      <label for="num">Number*:</label>
        <input type="number" class="form-control" id="num" placeholder="Enter Your Phone Number" name="num" required>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field or character must be must than 11 and less than 15.</div>
      </div>
      <div class="form-group">
      <label for="serv">serviceID*:</label>
        <input type="text" class="form-control" id="serv" placeholder="Enter Your service ID" disabled>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field or character must be must than 11 and less than 15.</div>
      </div>
      <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="services" name="sellist">
        <option value=" ">Select Data Plans</option>  
      </select>
      </div>

      <div class="card-footer">
      <div class="form-group">
      <button type="submit" onclick="clickme()" class="btn btn-success">Submit</button>
      </div>
        </div>
        </form>

<?php
echo "my name is".getenv('REMOTE_ADDR');
?>


 
<script>

/* var optionVarsx = [{"id":1,"prods":[{"name":"Airtel Airtime VTU","slug":"airtel-airtime"},{"name":"MTN Airtime VTU","slug":"mtn-airtime"},{"name":"GLO Airtime VTU","slug":"glo-airtime"},{"name":"9mobile Airtime VTU","slug":"9mobile-airtime"},{"name":"Smile Network Payment","slug":"smile-airtime"}]},{"id":3,"prods":[{"name":"Airtel Data","slug":"airtel-data"},{"name":"MTN Data","slug":"mtn-data"},{"name":"GLO Data","slug":"glo-data"},{"name":"9mobile Data","slug":"9mobile-data"},{"name":"Smile Payment","slug":"smile"}]},{"id":6,"prods":[{"name":"DSTV Subscription","slug":"dstv"},{"name":"Gotv Payment","slug":"gotv"},{"name":"Startimes Subscription","slug":"startimes"}]},{"id":7,"prods":[{"name":"Ikeja Electric Payment - PHCN","slug":"ikeja-electric"},{"name":"Eko Electric Payment - EKEDC","slug":"eko-electric"},{"name":"Abuja Electricity Distribution Company- AEDC","slug":"abuja-electric"},{"name":"KEDCO - Kano Electric","slug":"kano-electric"},{"name":"PHED - Port Harcourt Electric","slug":"portharcourt-electric"},{"name":"Jos Electric - JED","slug":"jos-electric"},{"name":"Kaduna Electric - KAEDCO","slug":"kaduna-electric"},{"name":"Ibadan Electric - IBEDC","slug":"ibedc"}]},{"id":8,"prods":[{"name":"WAEC Result Checker PIN","slug":"waec-result"},{"name":"WAEC Registration PIN","slug":"waec-registration"}]},{"id":10,"prods":[{"name":"Bank Deposit","slug":"bank-deposit"}]},{"id":13,"prods":null},{"id":14,"prods":[{"name":"Website Design Deal - Hostparker","slug":"website-design"},{"name":"SMSclone.com","slug":"smsclone"}]},{"id":15,"prods":[{"name":"Third Party Motor Insurance - Universal Insurance","slug":"car-insurance"}]}];*/
var refValue =  Math.floor(Math.random() * 1000000000000) +1;

function refLoad() {
  document.querySelector('#refvalue').setAttribute = "disabled";  
document.querySelector('#refvalue').value = refValue;
}

function refStopped() {
  alert("A refrece number have been generated for you" + refValue);
}

var optionVarsx = [
{"response_description":"001","content":{"ServiceName":"MTN Data","serviceID":"mtn-data","convinience_fee":"0 %","varations":[{"variation_code":"mtn-10mb-100","name":"N100 100MB - 24 hrs","variation_amount":"100.00","fixedPrice":"Yes"},{"variation_code":"mtn-50mb-200","name":"N200 200MB - 2 days","variation_amount":"200.00","fixedPrice":"Yes"},{"variation_code":"mtn-100mb-1000","name":"N1000 1.5GB - 30 days","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"mtn-500mb-2000","name":"N2000 4.5GB - 30 days","variation_amount":"2000.00","fixedPrice":"Yes"},{"variation_code":"mtn-20hrs-1500","name":"N1500 6GB - 7 days","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-2500","name":"N2500 6GB - 30 days","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"mtn-data-3000","name":"N3000 8GB - 30 days","variation_amount":"3000.00","fixedPrice":"Yes"},{"variation_code":"mtn-1gb-3500","name":"N3500 10GB - 30 days","variation_amount":"3500.00","fixedPrice":"Yes"},{"variation_code":"mtn-100hr-5000","name":"N5000 15GB - 30 days","variation_amount":"5000.00","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-6000","name":"N6000 20GB - 30 days","variation_amount":"6000.00","fixedPrice":"Yes"},{"variation_code":"mtn-40gb-10000","name":"N10000 40GB - 30 days","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"mtn-75gb-15000","name":"N15000 75GB - 30 days","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"mtn-110gb-20000","name":"N20000 110GB - 30 days","variation_amount":"20000.00","fixedPrice":"Yes"},{"variation_code":"mtn-3gb-1500","name":"N1500 3GB - 30 days","variation_amount":"1500.00","fixedPrice":"Yes"}]}},

{"response_description":"002","content":{"ServiceName":"GLO Data","serviceID":"glo-data","convinience_fee":"0 %","varations":[{"variation_code":"glo100","name":"Glo Data N100 - 105MB - 2 day","variation_amount":"100.00","fixedPrice":"Yes"},{"variation_code":"glo200","name":"Glo Data N200 - 350MB - 4 days","variation_amount":"200.00","fixedPrice":"Yes"},{"variation_code":"glo500","name":"Glo Data N500 - 1.05GB - 14 days","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"glo1000","name":"Glo Data N1000 - 2.5GB - 30 days","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"glo2000","name":"Glo Data N2000 - 5.8GB - 30 days","variation_amount":"2000.00","fixedPrice":"Yes"},{"variation_code":"glo2500","name":"Glo Data N2500 - 7.7GB - 30 days","variation_amount":"2500.00","fixedPrice":"Yes"},{"variation_code":"glo3000","name":"Glo Data N3000 - 10GB - 30 days","variation_amount":"3000.00","fixedPrice":"Yes"},{"variation_code":"glo4000","name":"Glo Data N4000 - 13.25GB - 30 days","variation_amount":"4000.00","fixedPrice":"Yes"},{"variation_code":"glo5000","name":"Glo Data N5000 - 18.25GB - 30 days","variation_amount":"5000.00","fixedPrice":"Yes"},{"variation_code":"glo8000","name":"Glo Data N8000 - 29.5GB - 30 days","variation_amount":"8000.00","fixedPrice":"Yes"},{"variation_code":"glo10000","name":"Glo Data N10000 - 50GB - 30 days","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"glo15000","name":"Glo Data N15000 - 93GB - 30 days","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"glo18000","name":"Glo Data N18000 - 119GB - 30 days","variation_amount":"18000.00","fixedPrice":"Yes"},{"variation_code":"glo1500","name":"Glo Data N1500 - 4.1GB - 30 days","variation_amount":"1500.00","fixedPrice":"Yes"},{"variation_code":"glo20000","name":"Glo Data N20000 - 138GB - 30 days","variation_amount":"20000.00","fixedPrice":"Yes"}]}},

{"response_description":"003","content":{"ServiceName":"Airtel Data","serviceID":"airtel-data","convinience_fee":"0 %","varations":[{"variation_code":"airt-50","name":"Airtel Data Bundle - 50 Naira - 25MB - 1Day","variation_amount":"49.99","fixedPrice":"Yes"},{"variation_code":"airt-100","name":"Airtel Data Bundle - 100 Naira - 75MB - 1Day","variation_amount":"99.00","fixedPrice":"Yes"},{"variation_code":"airt-200","name":"Airtel Data Bundle - 200 Naira - 200MB - 3Days","variation_amount":"199.03","fixedPrice":"Yes"},{"variation_code":"airt-300","name":"Airtel Data Bundle - 300 Naira - 350MB - 7 Days","variation_amount":"299.02","fixedPrice":"Yes"},{"variation_code":"airt-500","name":"Airtel Data Bundle - 500 Naira - 750MB - 14 Days","variation_amount":"499.00","fixedPrice":"Yes"},{"variation_code":"airt-1000","name":"Airtel Data Bundle - 1,000 Naira - 1.5GB - 30 Days","variation_amount":"999.00","fixedPrice":"Yes"},{"variation_code":"airt-1500","name":"Airtel Data Bundle - 1,500 Naira - 3GB - 30 Days","variation_amount":"1499.01","fixedPrice":"Yes"},{"variation_code":"airt-2000","name":"Airtel Data Bundle - 2,000 Naira - 4.5GB - 30 Days","variation_amount":"1999.00","fixedPrice":"Yes"},{"variation_code":"airt-3000","name":"Airtel Data Bundle - 3,000 Naira - 8GB - 30 Days","variation_amount":"2999.02","fixedPrice":"Yes"},{"variation_code":"airt-4000","name":"Airtel Data Bundle - 4,000 Naira - 11GB - 30 Days","variation_amount":"3999.01","fixedPrice":"Yes"},{"variation_code":"airt-5000","name":"Airtel Data Bundle - 5,000 Naira - 15GB - 30 Days","variation_amount":"4999.00","fixedPrice":"Yes"},{"variation_code":"airt-1500-2","name":"Airtel Binge Data - 1,500 Naira (7 Days) - 6GB","variation_amount":"1499.03","fixedPrice":"Yes"},{"variation_code":"airt-10000","name":"Airtel Data Bundle - 10,000 Naira - 40GB - 30 Days","variation_amount":"9999.00","fixedPrice":"Yes"},{"variation_code":"airt-15000","name":"Airtel Data Bundle - 15,000 Naira - 75GB - 30 Days","variation_amount":"14999.00","fixedPrice":"Yes"},{"variation_code":"airt-20000","name":"Airtel Data Bundle - 20,000 Naira - 110GB - 30 Days","variation_amount":"19999.02","fixedPrice":"Yes"}]}},

{"response_description":"004","content":{"ServiceName":"9mobile Data","serviceID":"etisalat-data","convinience_fee":"0 %","varations":[{"variation_code":"eti-100","name":"9mobile Data - 100 Naira - 100MB - 1 day","variation_amount":"100.00","fixedPrice":"Yes"},{"variation_code":"eti-200","name":"9mobile Data - 200 Naira - 650MB - 1 day","variation_amount":"200.00","fixedPrice":"Yes"},{"variation_code":"eti-500","name":"9mobile Data - 500 Naira - 500MB - 30 Days","variation_amount":"500.00","fixedPrice":"Yes"},{"variation_code":"eti-1000","name":"9mobile Data - 1000 Naira - 1.5GB - 30 days","variation_amount":"1000.00","fixedPrice":"Yes"},{"variation_code":"eti-2000","name":"9mobile Data - 2000 Naira - 4.5GB Data - 30 Days","variation_amount":"2000.00","fixedPrice":"Yes"},{"variation_code":"eti-5000","name":"9mobile Data - 5000 Naira - 15GB Data - 30 Days","variation_amount":"5000.00","fixedPrice":"Yes"},{"variation_code":"eti-10000","name":"9mobile Data - 10000 Naira - 40GB - 30 days","variation_amount":"10000.00","fixedPrice":"Yes"},{"variation_code":"eti-15000","name":"9mobile Data - 15000 Naira - 75GB - 30 Days","variation_amount":"15000.00","fixedPrice":"Yes"},{"variation_code":"eti-27500","name":"9mobile Data - 27,500 Naira - 30GB - 90 days","variation_amount":"27500.00","fixedPrice":"Yes"},{"variation_code":"eti-55000","name":"9mobile Data - 55,000 Naira - 60GB - 180 days","variation_amount":"55000.00","fixedPrice":"Yes"},{"variation_code":"eti-110000","name":"9mobile Data - 110,000 Naira - 120GB - 365 days","variation_amount":"110000.00","fixedPrice":"Yes"}]}}];



$(document).ready(function(){
//      $("#click").click(function() {
  
 // alert("hi");
  $('#servid').html('');
  $('#servid').text('');
//$("#click").html(optionVarsx.length)''
    $('#category').on('change', function(e){
    $("#amount").attr('disabled', 'disabled');
     // alert("hello");
    $(this).find("option[value='0']").remove();

        var idxy = $("select#category option:selected").val();
        $('#services').html('');
      
        //  $("#quick-load").addClass('show');
        //  $("#quick-form").css('opacity','0.3');          
         for(var i = 000; i < optionVarsx.length; i++) {
            var code = optionVarsx[i].response_description;	                     
              if(code == idxy) {
                $("select#category option").removeAttr("class");
                // $("#quick-load").removeClass('show');
                // $("#quick-form").css('opacity','1.0'); 
                //$('#class').append('<option value="">Select Above First</option>');
               // $('#servid').html('');
               $.each(optionVarsx[i].content.varations, function (index,sectionObj) {
                    $("select#category option:selected").addClass("servicess");
                 // for(var j=0; j < sectionObj.length; j++) {
                $('#services').append('<option name='+sectionObj.variation_code+' value='+sectionObj.variation_code+'>'+sectionObj.name+'</option>');
                
               // $("#amount").val(sectionObj[i].variation_amount) = $("select#services option:selected").val();
                //  }
              //     for(var j = 0; j < optionVarsx[i].content.length; j++) {
              //       var coden = optionVarsx[i].content[j].varations.variation_code;
              //       if(coden == $("select#services option:selected").val()) {
              //   $("#amount").val(sectionObj.variation_amount) = $("select#services option:selected").val();  
              //       }
              //     }
              // });
               /*var btnn = document.querySelector("#btnn");
    var btnn1 = document.querySelector("#btnn1");
    var btnn2 = document.querySelector("#btnn2");
    var btnn3 = document.querySelector("#btnn3");
    var btnnew = document.querySelector("#btnnew");
    var btnnew1 = document.querySelector("#btnnew1");
    var btnnew2 = document.querySelector("#btnnew2");
    var btnnew3 = document.querySelector("#btnnew3");
    var loading = document.querySelector("#loading");
    var loading1 = document.querySelector("#loading1");
    var loading2 = document.querySelector("#loading2");
    var loading3 = document.querySelector("#loading3");

   btnn.addEventListener("click", function() {
        loading.style.display="inline";
        btnnew.classList.add("mystyle");
       });
       btnn1.addEventListener("click", function() {
        loading1.style.display="inline";
        btnnew1.classList.add("mystyle");
       });
       btnn2.addEventListener("click", function() {
        loading2.style.display="inline";
        btnnew2.classList.add("mystyle");
       });
       btnn3.addEventListener("click", function() {
        loading3.style.display="inline";
        btnnew3.classList.add("mystyle");
       });
      
      var td;
    for (var t=1;t<6;t++){
        var btnn = document.getElementById('btnn'+t);
        var btnnew = document.querySelector("#btnnew1"+t);
        var loading = document.querySelector("#loading"+t);
        if (typeof window.addEventListener==='function'){
                btnn.addEventListener('click',function(){
                  loading+t.style.display= "inline";
                  btnnew+t.classList.add("mystyle");
            })}
 }    

$("a").click(function(e) {
    e.preventDefault();
    if (!$(this).hasClass('className')) {
        alert("You did not click className!");
    }
});*/
                });
               $(optionVarsx[i].content).each(function (index,sectionObj) {
               
                $("#serv").val(sectionObj.serviceID).attr("name", sectionObj.serviceID);
          
                });
               
            }
         }
          e.preventDefault();
    });
});

            //   $('#services').on('change', function() {
            //     $(optionVarsx.content).each(function (index, element) {
            //       $("#amount").val(index + element.variations.variation_amount);
            //       console.log(index + element.variations.variation_amount);
            // //  for(var k = 0; k < optionVarsx.length; k++) {
            // //       var idxyz = $("select#services option:selected").val();
            // //       var neww = optionVarsx.content[k];
            // //       var code = neww[k].varations.variation_code;            
            // //      if(code == idxyz) {
            // //      $(neww[k].varations).each(function (index,sectionObj) {
            // //     $("#amount").val(sectionObj.variation_amount);
             
            // //      });
            // //      }
            // //      }
            //   });
            //   });


</script>
<style>
    .servicess {
        color: red;
    }
    </style>
<p id="click">Click on this paragraph.</p>

<script>
    //alert("hiiii");
 document.getElementById("serv").setAttribute("name") =  document.getElementById("serv").value;
//document.getElementById("click").innerHTML = optionVarsx[1].content.serviceID;
</script>

</body>
</html>




<?php
  if(isset($_SESSION["userSwiftId"])) {
      echo '
      <main id="myDiv" style="display: none;">
      <div id="card">
      <div class="row">
      <div class="col-lg-8">
      <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="card">
      <h3 class="text-center py-2">Data Top Up </h3>
      <div  style="width: 100%;" class="px-5">
      <form onunload="clickTo()" action="/action_page.php">
      <div class="form-group">
      <label for="ref">ReferenceID</label>
      <input type="number" class="form-control" id="refvalue" value="Reference ID"  name="refId" readonly>
    </div>
    <div class="form-group">
      <label for="mySelect">Select list (select one):</label>
      <select id="category" onchange="selectNew()" class="form-control" name="sellist">
        <option value="000" selected="selected">Select A Network Provider</option>
        <option id="mtnnew" value="001" name="mtn">MTN NG</option>
        <option id="glo" name="glo" value="002">GLO NG</option>
        <option id="airtel" name="airtel" value="003" >AIRTEL NG</option>
        <option id="9mobile" name="9mobile" value="004">9MOBILE NG</option>
      </select>
      </div>
      <div class="form-group">
      <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" placeholder="Amount" name="amnt" required>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
      <label for="num">Number*:</label>
        <input type="number" class="form-control" id="num" placeholder="Enter Your Phone Number" name="num" required>
        <div class="valid-feedback">Great</div>
        <div class="invalid-feedback">Please fill out this field or character must be must than 11 and less than 15.</div>
      </div>
      <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="services" name="sellist">
        <option value=" ">Select Data Plans</option>  
      </select>
      </div>

      <div class="card-footer">
      <div class="form-group">
      <button type="submit" onclick="clickme()" class="btn btn-success">Submit</button>
      </div>
        </div>
        </form>
      </div>
      </div>
      </div>

     
      <div id="table" class="col-lg-4">
      <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="card">
      <div  style="width: 100%;">
      <table  style="width: 100%; height: 100%;" class="table text-center">
        <thead  style="width: 100%;" class="thead-dark pl-2">
      <th><h3> Links </h3></th>
        </thead>
        <tbody>
        <tr>
      <td><h5><b><a href="data.php"> Data </a> </b></h4></td>
    </tr>
        <tr>
      <td><h5><b><a href="cable.php"> Cable </a> </b></h5></td>
    </tr>
      <tr>
      <td><h5><b><a href="airtime.php"> Airtime </a> </b></h5></td>
      </tr> 
    <tr>
      <td><h5><b><a href="utility.php"> Utility </a> </b></h5></td>
    </tr>
    
        </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
              </div>
      </main>';
    } else {
      echo '<br>
      <div style=" margin: 25% 0; display: flex; align-items: center; justify-content: center;" id="myDiv">
      <div style=" width: 100%; height: 100%;">
      <h3 class="mt-4 text-center"> You have to Logged In </h3>
      </div>
      </div>';
  }
  ?>
<style>
#footer {
    background: #000;
    color: #fff;
    position:relative;
}
#footer::after {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color: #fff;
    content: '';
    z-index: -1;
    background: inherit;
    transform-origin: top left;
    transform: skewY(-5deg);
}


.text-left > h4:hover, .text-left >hr:hover {
color: #f1a947;
}
.text-left > #lines:hover {
    width: 200px;
    color: #f1a947;
}

.text-left > #links, .text-left > #links a, .text-left > #social-media a {
    color: #fff;
    list-style: none;
    text-decoration: none;
}
.text-left > #links a:hover, .text-left > #social-media a:hover {
    color: #f1a947;
}
    </style>
<section id="footer">
<div id="foot">
<div class="container">
<div class="row">
<div class="text-left py-3 col-lg-6">
            <h4> About Us </h4>
            <hr id="lines" style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
            <p class="py-2 mb-2" style="color:#fff;">
            
        Welcome to Swift Geek Links. A site where you can purchase airtime, data, utility bills with ease and affordable price        

        </p>
    </div>
    <div  class="text-left py-3 col-lg-3">
        <h4>Quick Links </h4>
        <hr style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
        <ul id="links" class="py-2 mb-2" type="square">
        <li><a href="index.php"> Home </a></li>
        <li class="py-2"><a href="swiftdetails/login.php"> LogIn </a> </li>
        <li class="py-2"><a href="swiftdetails/register.php"> SignUp </a></li>
        <li class="py-2"><a href="swift_privacy.php"> Privacy Policy </a></li>
        <li class="pt-2"><a title="Frequently Asked Questions"href="faq.php"> FAQ </a></li>
        </ul>
</div>
<div class="text-left py-3 col-lg-3">
        <h4>Connect With us </h4>
        <hr style="float: left; margin-top: -1px; width: 50px; height: 3px; background: #fff;"><br>
            <div id="social-media" class="py-2 mb-2">
        <a style="padding-right: 10px;" href="#"><span class="fab fa-facebook"></span> </a>
        <a style="padding-right: 10px;" href="#"> <span class="fab fa-twitter"></span> </a>
        <a style="padding-right: 10px;" href="#"> <span class="fab fa-instagram "></span> </a>
        </div>
        <p id="click">hello</p>
        </div>

</div>
        </div>
        </div>
</section>


<!-- <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    //document.getElementById("nextBtn").removeAttribute("type");
    //document.getElementById("nextBtn").setAttribute("type", "submit")
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("paymentForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script> -->
var optionVarsw = [{"id" : "0", "content": [
  {"variation_code": "dstv1"},
  {"variation_code": "dstv2"},
  {"variation_code": "dstv3"},
  {"variation_code": "dstv4"},
  {"variation_code": "dstv5"},
  {"variation_code": "dstv6"}]},
  {"id" : "1", "content": [
  {"variation_code": "gotv1"},
  {"variation_code": "gotv2"},
  {"variation_code": "gotv3"},
  {"variation_code": "gotv4"},
  {"variation_code": "gotv5"},
  {"variation_code": "gotv6"}]},
  {"id" : "2", "content": [
  {"variation_code": "startimes1"},
  {"variation_code": "startimes2"},
  {"variation_code": "startimes3"},
  {"variation_code": "startimes4"},
  {"variation_code": "startimes5"},
  {"variation_code": "startimes6"}]}
];
