
$("form#paymentForm").on("submit", function(e) {
    e.preventDefault();
    $("input#airtimecashsubmit").attr("value", "Processing..!");
    $("input#airtimecashsubmit").attr("disabled", "disabled");

  var sel = document.querySelector("select#networkProvider");
  var select = sel.selectedIndex;

  var select = sel.selectedIndex;
  if (select == 0) { 
    alert("Kindly Select a network provider Option, AFTER WHICH YOU ADJUST AMOUNT. THANKS");
  } else {
    $("select#networkProvider").on("change", function() {
        alert("Please make sure you adjust the input");
    $("input#amountReceived").attr("value", am);
    $("input#amountReceived").val(am);
    });
  var selects = document.querySelector("select#platforms").selectedIndex;
  if(selects == 0) {
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
     
    email: document.querySelector("input#email").value,
    amount: document.querySelector("input#wallet").value * 100 + 1000,
    firstname: document.querySelector("input#firstName").value,
    lastname: document.querySelector("input#lastName").value,
    label: document.querySelector("input#phone").value,
    ref: 'SwiftGeekAirtime2Cash_'+document.querySelector("input#request_id").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      // label: "Optional string that replaces customer email"
      onClose: function(){
        alert('Payment Tab closed.');
        window.location = window.location.protocol+'//'+window.location.hostname+"/fundAccount.php"; 
      },
      callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        alert(message);
        $.ajax('airtime-cash.php', {
            method: 'POST',
            dataType: 'html',
            data : $("form#paymentForm :input").serializeArray(),
            //contentType: 'application/json',
            success: function(data) {
              console.log("Database Updated");
              alert("Payment Successfully Submitted! expect A feedback. If we did not respond within the next 24hrs, kindly contact us at info@swiftgeek.com.ng");
            },
            error: function(xhr) {
              console.log(xhr.status + xhr.statusCode);
            }
            
          });
         // window.location = "https://www.swiftgeek.com.ng/transactions/transaction.php?reference=" + response.reference;
      },
    })
    handler.openIframe();
  },
      error: function(xhr) {
          console.error("Error Found");
        }
    
      });
    } else {
        $("input#request_id").removeAttr("disabled");
        $("input#email").removeAttr("disabled");
      // request_id = $("input[name='request_id']").val();
      var wallet = $("input[name='amount']").val();
      var airtimecashsubmit = $("input[name='airtimecashsubmit']").val();
      var datass = {
        'wallet' : wallet,
        'airtimecashsubmit' : airtimecashsubmit
      }
      $.ajax("walletupdate.php", {
        method: "POST",
        data : datass,
        dataType: 'html',
        success: function(data) {
          //console.log(data);
          var dat = JSON.parse(data);
        //  console.log(dat.key);
         // var ky = JSON.stringify(dat.key);
          if(dat.key == "Insufficient Fund") {
            alert("Insufficient Fund. Kindly Fund Your Wallet");
            window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + dat.key;
          } else {
      $.ajax('airtime-cash.php', {
        method: 'POST',
        dataType: 'html',
        beforeSend: function() {
            $("input#request_id").removeAttr("disabled");
        },
        data : $("form#paymentForm :input").serializeArray(),
        async: 'false',
        //contentType: 'application/json',
        success: function(data) {
          console.log("Database Updated");
          alert("Payment Successfully Submitted! expect A feedback. If we did not respond within the next 24hrs, kindly contact us at indo@swiftgeek.com.ng");
          window.location = window.location.protocol + "//" + window.location.hostname + ":81/data/home.php";
        },
        error: function(xhr) {
          console.log(xhr.status + xhr.statusCode);
        }
        
      });
    }
}, 
    error:function(xhr) {
        alert("Could not update Database");
    }
   
         
          //window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + data;
          });
        //  window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + data;
        
}
  }
});