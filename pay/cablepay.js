



$("form#paymentForm").on("submit", function(e) {
  e.preventDefault();
  $("input#cablesubmit").attr("disabled", "disabled");
  $("input#cablesubmit").attr("value", "Processing..!");
var select = document.querySelector("select#platforms").selectedIndex;
if(select == 0) {
$.ajax("pay_env.php", {
    method: "GET",
    dataType: "json",
    contentType: "application/json",
    success: function(response) {
     // console.log(JSON.stringify(response.key));
      var env = response.key;
      let envkey = JSON.stringify(env);
//     const paymentForm = document.querySelector('form#paymentForm');
// paymentForm.addEventListener("submit", payWithPaystack, false);  
// function payWithPaystack(e) {
//   e.preventDefault();
let handler = PaystackPop.setup({
    key:  `${env}`, // Replace with your public key
    email: document.querySelector("input#email").value,
    amount: document.querySelector("input#wallet").value * 100,
    label: document .querySelector("input#phone").value,
    ref: 'SwiftGeekCable_'+document.querySelector("input#request_id").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Payment Tab closed.');
      window.location = window.location.protocol+'//'+window.location.hostname+":81/fundAccount.php"; 
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      if(typeof(Storage) !== "undefined") {
        sessionStorage.setItem('resp', response.reference);
        sessionStorage.setItem('payment', 'success');
      }
      //$("input#request_id").removeAttr("disabled");

      var request_id = $("input[name='request_id']").val();
      var serviceID = $("input[name='serviceID']").val();
      var billersCode = $("input[name='billersCode']").val();
      var variation_code = $("input[name='variation_code']").val();
      var amount = $("input[name='amount']").val();
      var phone = $("input[name='phone']").val();
      var cablesubmit = $("input[name='cablesubmit']").val();

      var datas = {
        'request_id' : request_id,
        'serviceID' : serviceID,
        'billersCode' : billersCode,
        'variation_code' : variation_code,
        'amount' : amount,
        'phone' : phone,
        'cablesubmit' : cablesubmit
      }
      //  var dat = JSON.stringify(datas);

  
      $.ajax('cable_process.php',  {
          method: 'POST',
          dataType: 'html',
          data : datas,
          async: 'false',  
          //contentType: 'application/json',
          success: function(data) {
            // console.log(data);
            //console.log(data);
            var newdat = JSON.parse(data);
           // console.log(newdat);
           if(newdat.code == "018") {
            alert("END POINT NEEDS TO BE FUNDED");
            window.location = window.location.protocol+"//"+window.location.hostname+":81/data/home?Kindly_contact_their_representative";
        
        } else {
            data_response = newdat.response_description;
           // console.log(data_response);
            alert("Transaction Successful");
      window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + data_response + "&pay_ref=" + sessionStorage.getItem('resp');;
            // window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + data_response + "&pay_ref=" + sessionStorage.getItem('resp');
          }},
          error: function(xhr) {
            console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
          }
          
        });
       // window.location = "https://www.swiftgeek.com.ng/transactions/transaction.php?reference=" + response.reference;
    },
  })
  handler.openIframe();
},
    error: function(xhr) {
        console.error("Error Found:" + xhr.statusText + ' '+ xhr.status);
      }
  
    });
  } else {
    // request_id = $("input[name='request_id']").val();
    var wallet = $("input[name='amount']").val();
    var cablesubmit = $("input[name='cablesubmit']").val();
    var datass = {
      'wallet' : wallet,
      'cablesubmit' : cablesubmit
    }
    $.ajax("walletupdate.php", {
      method: "POST",
      data : datass,
      dataType: 'html',
      success: function(data) {
       // console.log(data);
        var dat = JSON.parse(data);
      //  console.log(dat.key);
       // var ky = JSON.stringify(dat.key);
        if(dat.key == "Insufficient Fund") {
          alert("Insufficient Fund. Kindly Fund Your Wallet");
          window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + dat.key;
        } else {
          if(typeof(Storage) !== "undefined") {
            sessionStorage.setItem('payment', 'success');
            sessionStorage.setItem('responses', 'success');
          }
          var request_id = $("input[name='request_id']").val();
          var serviceID = $("input[name='serviceID']").val();
          var billersCode = $("input[name='billersCode']").val();
          var variation_code = $("input[name='variation_code']").val();
          var amount = $("input[name='amount']").val();
          var phone = $("input[name='phone']").val();
          var cablesubmit = $("input[name='cablesubmit']").val();
    
          var datas = {
            'request_id' : request_id,
            'serviceID' : serviceID,
            'billersCode' : billersCode,
            'variation_code' : variation_code,
            'amount' : amount,
            'phone' : phone,
            'cablesubmit' : cablesubmit
          }
      
          $.ajax('http://localhost:81/data/cable_process.php',  {
              method: 'POST',
              dataType: 'html',
              data : datas,
            async: 'false',
              //contentType: 'application/json',
              success: function(response) {
                // console.log(data);
               // console.log(response);
                // window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + response;
        //         alert(response);
                var newdat = JSON.parse(response);
                //.log(newdat);
                data_response = newdat.response_description;
              ///  console.log(data_response);
                alert("Transaction Successful");
        window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + data_response;
              },
              error: function(xhr) {
                alert("Not Successful. Please Try Again. Thanks");
                console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
              }
              
            });
       
       
        //window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + data;
        }
      //  window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + data;
      },
      error: function(xhr) {
        console.log("Error Found, Could not update the database"+ xhr.statusCode + ' ' + xhr.statusText);
      }
    })
  }
});

