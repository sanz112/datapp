<?php
//session_start();
require "swiftdetails/header.php"; 
?>
    <link rel="icon" href="image/swiftgeek32.png" sizes="32x32" />
    <link rel="icon" href="image/swiftgeek192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../imageswift180apple.png" />
    <link rel="stylesheet" href="css/swift8.css" type="text/css">
    <link rel="stylesheet" href="css/loading.css" type="text/css">
    <link href="swiftbootcss/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Swift Geek Links</title>
</head>
<body onload="refLoadd()" onunload="refStopped()">

<main id="myDiv">
    <div id="card">
    <div class="row">
    <div class="col-lg-8">
    <div style="box-shadow: 2px 3px 4px 3px rgba(0,0,0,0.35);" class="p-5 card">
    <h3 class="text-center py-2">Subcription Top Up </h3>
    <form class="w-100" id="paymentForm">
    <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="refvalue">Refence ID:</span>
      </div>
      <input type="number" id="refvalue" name="request_id" class="form-control" placeholder="Reference Identification" required aria-describedby="swiftRef">
    </div>
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="category">Pick</span>
      </div>
      <select id="category" class="form-control" name="sellist">
        <option value="0" selected="selected">Select A Network Provider</option>
        <option id="mtnnew" name="dstv" value="001">DSTV</option>
        <option id="glo" name="gotv" value="002">GOTV</option>
        <option id="airtel" name="startimes" value="003" >Startimes</option>
      </select>
      </div>
  <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-naira" id="amount">&#x20A6</span>
      </div>
      <input type="number" id="amount" name="amount" class="form-control" placeholder="Amount to recharge" required aria-describedby="amount">
    </div>
    <div style="width: 100%;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="services">Pick</span>
      </div>
    <select class="form-control" id="services" name="variations">
        <option value=" ">Subscription Plans</option>  
      </select>
    </div>
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="serviceID">Service ID</span>
      </div>
      <input type="text" id="serviceID" name="serviceID" class="form-control" placeholder="Your Service ID" required aria-describedby="amount">
    </div>


    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text fas fa-phone" id="phn_number"></span>
      </div>
      <input type="number" maxlength="11" max="100000000000" id="phn_number" name="phone" class="form-control" placeholder="Enter Your Phone Number" required aria-describedby="phn_number">
    </div>
    <div class="w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersCode"> Card Number </span>
      </div>
      <input type="text" id="billersCode"  name="billersCode"  class="form-control" placeholder="Your SmartCard Number/ID" aria-describedby="billersCode">
      <input type="submit" value="Validate" id="validate" class="form-control btn btn-md btn-success" /> 
    </div>
    <div class=" w-100 input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="billersName"> Biller's Name </span>
      </div>
      <input type="text" id="billersName" name="billersName" class="form-control" placeholder="Biller Name" required disabled aria-describedby="billersName">
    </div>
    <div class="input-group">
      <input style="background: #f1a947;" id="btnnn" class="btn btn-lg btn-success btn-block" name="login-submit" type="submit">SubScribe</button>
    </div>
      </div>
</div>
     
      </div>
      </div>
      </main>

 
<script>
function refLoadd() {
  alert("hello");
  document.querySelector('input#refvalue').value = Math.floor(Math.random() * 1000000000000) +1;
  document.querySelector('input#refvalue').setAttribute("disabled", "disabled"); 
}
 
function refStopped() {
  alert("A reference number have been generated for you" + refValue);
}



var optionVarsx = [
  {"response_description":"001","content":{"ServiceName":"DSTV Subscription","serviceID":"dstv","convinience_fee":"N0.00","varations":[{"variation_code":"dstv-padi","name":"DStv Padi N1,850","variation_amount":"1850.00","fixedPrice":"Yes"},{"variation_code":"dstv-yanga","name":"DStv Yanga N2,565","variation_amount":"2565.00","fixedPrice":"Yes"},{"variation_code":"dstv-confam","name":"Dstv Confam N4,615","variation_amount":"4615.00","fixedPrice":"Yes"},{"variation_code":"dstv79","name":"DStv Compact N6,975","variation_amount":"6975.00","fixedPrice":"Yes"},{"variation_code":"dstv3","name":"DStv Premium N16,200","variation_amount":"16200.00","fixedPrice":"Yes"},{"variation_code":"dstv6","name":"DStv Asia N5,540","variation_amount":"5540.00","fixedPrice":"Yes"},{"variation_code":"dstv7","name":"DStv Compact Plus N10,925","variation_amount":"10925.00","fixedPrice":"Yes"},{"variation_code":"dstv9","name":"DStv Premium-French N22,750","variation_amount":"22750.00","fixedPrice":"Yes"},{"variation_code":"dstv10","name":"DStv Premium-Asia N18,150","variation_amount":"18150.00","fixedPrice":"Yes"},{"variation_code":"confam-extra","name":"DStv Confam + ExtraView N6,870","variation_amount":"6870.00","fixedPrice":"Yes"},{"variation_code":"yanga-extra","name":"DStv Yanga + ExtraView N4,820","variation_amount":"4820.00","fixedPrice":"Yes"},{"variation_code":"padi-extra","name":"DStv Padi + ExtraView N4,105","variation_amount":"4105.00","fixedPrice":"Yes"},{"variation_code":"com-asia","name":"DStv Compact + Asia N12,515","variation_amount":"12515.00","fixedPrice":"Yes"},{"variation_code":"dstv30","name":"DStv Compact + Extra View N9,230","variation_amount":"9230.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch","name":"DStv Compact + French Touch N8,485","variation_amount":"8485.00","fixedPrice":"Yes"},{"variation_code":"dstv33","name":"DStv Premium - Extra View N18,455","variation_amount":"18455.00","fixedPrice":"Yes"},{"variation_code":"dstv40","name":"DStv Compact Plus - Asia N16,465","variation_amount":"16465.00","fixedPrice":"Yes"},{"variation_code":"com-frenchtouch-extra","name":"DStv Compact + French Touch + ExtraView N10,740","variation_amount":"10740.00","fixedPrice":"Yes"},{"variation_code":"com-asia-extra","name":"DStv Compact + Asia + ExtraView N14,770","variation_amount":"14770.00","fixedPrice":"Yes"},{"variation_code":"dstv43","name":"DStv Compact Plus + French Plus N17,445","variation_amount":"17445.00","fixedPrice":"Yes"},{"variation_code":"complus-frenchtouch","name":"DStv Compact Plus + French Touch N12,435","variation_amount":"12435.00","fixedPrice":"Yes"},{"variation_code":"dstv45","name":"DStv Compact Plus - Extra View N13,180","variation_amount":"13180.00","fixedPrice":"Yes"},{"variation_code":"complus-french-extraview","name":"DStv Compact Plus + FrenchPlus + Extra View N19,700","variation_amount":"19700.00","fixedPrice":"Yes"},{"variation_code":"dstv47","name":"DStv Compact + French Plus N13,495","variation_amount":"13495.00","fixedPrice":"Yes"},{"variation_code":"dstv48","name":"DStv Compact Plus + Asia ExtraView N18,720","variation_amount":"18720.00","fixedPrice":"Yes"},{"variation_code":"dstv61","name":"DStv Premium - Asia - Extra View N20,405","variation_amount":"20405.00","fixedPrice":"Yes"},{"variation_code":"dstv62","name":"DStv Premium - French - Extra View N25,005","variation_amount":"25005.00","fixedPrice":"Yes"},{"variation_code":"hdpvr-access-service","name":"DStv HDPVR Access Service N2,255","variation_amount":"2255.00","fixedPrice":"Yes"},{"variation_code":"frenchplus-addon","name":"DStv French Plus Add-on N6,520","variation_amount":"6520.00","fixedPrice":"Yes"},{"variation_code":"asia-addon","name":"DStv Asian Add-on N5,540","variation_amount":"5540.00","fixedPrice":"Yes"},{"variation_code":"dstv-greatwall","name":"DStv Great Wall N1,285","variation_amount":"1285.00","fixedPrice":"Yes"},{"variation_code":"frenchtouch-addon","name":"DStv French Touch Add-on N1,510","variation_amount":"1510.00","fixedPrice":"Yes"},{"variation_code":"extraview-access","name":"ExtraView Access N2,255","variation_amount":"2255.00","fixedPrice":"Yes"},{"variation_code":"french11","name":"DStv French 11 N3,260","variation_amount":"3260.00","fixedPrice":"Yes"}]}},
  {"response_description":"002","content":{"ServiceName":"Gotv Payment","serviceID":"gotv","convinience_fee":"N0.00","varations":[{"variation_code":"gotv-lite","name":"GOtv Lite N410","variation_amount":"410.00","fixedPrice":"Yes"},{"variation_code":"gotv-max","name":"GOtv Max N3,280","variation_amount":"3280.00","fixedPrice":"Yes"},{"variation_code":"gotv-jolli","name":"GOtv Jolli N2,460","variation_amount":"2460.00","fixedPrice":"Yes"},{"variation_code":"gotv-jinja","name":"GOtv Jinja N1,640","variation_amount":"1640.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-3months","name":"GOtv Lite (3 Months) N1,080","variation_amount":"1080.00","fixedPrice":"Yes"},{"variation_code":"gotv-lite-1year","name":"GOtv Lite (1 Year) N3,180","variation_amount":"3180.00","fixedPrice":"Yes"}]}},

  {"response_description":"003","content":{"ServiceName":"Startimes Subscription","serviceID":"startimes","convinience_fee":"N0.00","varations":[{"variation_code":"nova","name":"Nova - 900 Naira - 1 Month","variation_amount":"900.00","fixedPrice":"Yes"},{"variation_code":"basic","name":"Basic - 1,300 Naira - 1 Month","variation_amount":"1300.00","fixedPrice":"Yes"},{"variation_code":"smart","name":"Smart - 1,900 Naira - 1 Month","variation_amount":"1900.00","fixedPrice":"Yes"},{"variation_code":"classic","name":"Classic - 1,900 Naira - 1 Month- Promo","variation_amount":"1900.00","fixedPrice":"Yes"},{"variation_code":"super","name":"Super - 3,800 Naira - 1 Month","variation_amount":"3800.00","fixedPrice":"Yes"},{"variation_code":"nova-weekly","name":"Nova - 300 Naira - 1 Week","variation_amount":"300.00","fixedPrice":"Yes"},{"variation_code":"basic-weekly","name":"Basic - 450 Naira - 1 Week","variation_amount":"450.00","fixedPrice":"Yes"},{"variation_code":"smart-weekly","name":"Smart - 600 Naira - 1 Week","variation_amount":"600.00","fixedPrice":"Yes"},{"variation_code":"classic-weekly","name":"Classic - 900 Naira - 1 Week - Promo ","variation_amount":"900.00","fixedPrice":"Yes"},{"variation_code":"super-weekly","name":"Super - 1,300 Naira - 1 Week","variation_amount":"1300.00","fixedPrice":"Yes"},{"variation_code":"nova-daily","name":"Nova - 90 Naira - 1 Day","variation_amount":"90.00","fixedPrice":"Yes"},{"variation_code":"basic-daily","name":"Basic - 120 Naira - 1 Day","variation_amount":"120.00","fixedPrice":"Yes"},{"variation_code":"smart-daily","name":"Smart - 180 Naira - 1 Day","variation_amount":"180.00","fixedPrice":"Yes"},{"variation_code":"classic-daily","name":"Classic - 240 Naira - 1 Day - Promo ","variation_amount":"240.00","fixedPrice":"Yes"},{"variation_code":"super-daily","name":"Super - 360 Naira - 1 Day","variation_amount":"360.00","fixedPrice":"Yes"},{"variation_code":"ewallet","name":"ewallet Amount","variation_amount":"0.00","fixedPrice":"Yes"}]}}];



  var username = "info@swiftgeek.com.ng";
    var password = "Datageek2020";
  
              // function getPosts() {
              //         // e.preventDefault();
              //          let serviceID = document.querySelector("input#serviceID").value;
              //          let billerCode = document.querySelector("input#billerCode").value;

                    //   fetch("https://sandbox.vtpass.com/api/merchant-verify", {
                    //     username: "info@swiftgeek.com.ng",
                    //     password: "Datageek2020",
                    //      method: "POST",
                    //         headers : {
                    //             "Accept": "application/json, text/plain, *",
                    //              "Content-type" : "application/json"
                    //        },
                    //         body: JSON.stringify({serviceID:serviceID, billerCode:billerCode})
                    //    })
                    //     .then(res => { return res.json()})
                    //   .then(data => console.log(data))
                    // }

           
$(document).ready(function(){
 
  $("button#btnnn").on('click', function() {
   
  var username = "info@swiftgeek.com.ng";
    var password = "1SHTND2E";

    
    var datas = {
        'serviceID'   : document.querySelector('input#serviceID').value,
        'billersCode' : document.querySelector('input#billersCode').value
        // 'request_id' : '47646734747',
        // 'serviceID' : 'mtn',
        // 'amount' : '5000',
        // 'phone' : '08011111111'
    }
    var dat = JSON.stringify(datas);

    alert(document.querySelector('input#serviceID').value + ' ' + 'billersCode:' + document.querySelector('input#billersCode').value);
    var url = 'https://vtpass.com/api/merchant-verify';
        //alert("hello");
     $.ajax( url, {
   
    method: 'POST',
    headers : {
      //"Accept": "application/json, text/plain, *",
      'Authorization' : 'Basic ' + btoa(username+':'+password)
                             },
    data : dat,
    contentType: "application/json",
    dataType: 'json',
    success: function (data) {
      console.log(data);
         
    }
  });  
          });
  $('#servid').html('');
  $('#servid').text('');

    $('select#category').on('change', function(e){
    //  alert("alerted")
  //$("input#phn_number").val() = $("input#billerCode").val();
  $("input#amount").html('');
  $("input#amount").val('')
  $("input#amount").val('This is not to be edited. The amount  is set to Default');
    $("input#amount").attr('disabled', 'disabled');
    $(this).find("select#category option[value='0']").remove();

        var idxy = $("select#category option:selected").val();
        $('select#services').html('');      
         for(var i = 000; i < optionVarsx.length; i++) {
            var code = optionVarsx[i].response_description;	                     
              if(code == idxy) {
                $("select#category option").removeAttr("class");
            
               $.each(optionVarsx[i].content.varations, function (index,sectionObj) {
                    $("select#category option:selected").addClass("servicess");
                $("input#amount").val("The Amount is set Default Amount");
                $('select#services').append('<option name='+sectionObj.variation_code+' value='+sectionObj.variation_code+'>'+sectionObj.name+'</option>');    
                  });
               $(optionVarsx[i].content).each(function (index,sectionObj) {
               
                $("input#serviceID").attr("value", sectionObj.serviceID);
                //.attr("name", sectionObj.serviceID)
                });
               
            }
         }
          e.preventDefault();
    });

    $("input#phn_number").keydown(function(){
    $(this).css("background-color", "yellow");
  });
  $("input#phn_number").keyup(function(){
    $(this).css("background-color", "pink");
  });

      $("input#phn_number").keypress(function(event) {
        if(event.target.value === 11) {
          alert("Max Input Reached!");
        }
      });

        $("input#phn_number").blur(function(e) {
        var maxlength = $(this).attr("maxlength");
        if($(this).val().length > maxlength || $(this).val().length < 11) {
         
         alert( "Kindly input the right Number. Likewise, It should not be less or more than 11 characters");
        } else {
         // $('input#phn_number').val() = $("input##billerCode").val();
          alert("This is okay to submit");
         // $("input#billersCode").val($(this).val());
        }
        e.preventDefault();
        });
        

        });
      
</script>
        
  



<style>
    option .servicess {
        color: red;
    }
    .servicess {
      color: red !important;
    }
</style>

    <?php
    include 'swiftdetails/footer.php';
    ?>