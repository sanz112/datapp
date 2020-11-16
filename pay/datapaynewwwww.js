$("form#paymentFormNew").on("submit", function(e) {
  e.preventDefault();
  $("input#datasubmit").attr("value", "Processing..!");
  $("input#datasubmit").attr("disabled", "disabled");

var select = document.querySelector("select#platforms").selectedIndex;
if(select == 0) {
$.ajax("pay_env.php", {
    method: "GET",
    dataType: "json",
    contentType: "application/json",
    success: function(response) {
      //console.log(JSON.stringify(response.key));
      var env = response.key;
      let envkey = JSON.stringify(env);
  let handler = PaystackPop.setup({
    key:  `${env}`, // Replace with your public key
    email: document.querySelector("input#emailw").value,
    amount: document.querySelector("input#walletw").value * 100,
    label: document .querySelector("input#phn_numberw").value,
    ref: 'SwiftGeekData_'+document.querySelector("input#ref").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Payment Tab closed.');
      window.location = window.location.protocol+'//'+window.location.hostname+"/:81/home.php"; 
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      if(typeof(Storage) !== "undefined") {
        sessionStorage.setItem('resp', response.reference);
        sessionStorage.setItem('payment', 'success');
      }
      //$("input#request_id").removeAttr("disabled");
     
      var sim = $("select[name='sim']").val();
      var ref = $("input[name='ref']").val();
      var var_codew = $("input[name='var_codew']").val();
      var phn_numberw = $("input[name='phn_numberw']").val();
      var varrnew = $("input[name='varrnew']").val();
      var varrpin = $("input[name='varrpin']").val();
      var server = $("input[name='server']").val();
      var datasubmitt = $("input[name='datasubmitt']").val();

      var datacard = {
        'sim' : sim,
        'ref' : ref,
        'var_codew' : var_codew,
        'phn_numberw' : phn_numberw,
        'varrnew' : varrnew,
        'varrpin' : varrpin,
        'server' : server,
       'datasubmitt' : datasubmitt
      }
      //  var dat = JSON.stringify(datas);

  
      $.ajax('data_recharged.php',  {
          method: 'POST',
          dataType: 'html',
          data : datacard,
      
          //contentType: 'application/json',
          success: function(response) {
           console.log("Database Updated" + response);
            var newdat = JSON.parse(response);
            var respn = newdat.data[0]
            //console.log(respn.response);
            alert("Transaction Successful");
            window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + respn.response + "&pay_ref=" + sessionStorage.getItem('resp') + "&id=" + respn.id;
          },
          error: function(xhr) {
            console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
          }
          
        });
       // window.location = "https://www.swiftgeek.com.ng/transactions/transaction.php?reference=" + response.reference;
    },
  });
  handler.openIframe();
},
    error: function(xhr) {
      console.error("Error Found:"+ xhr.statusCode + ' '+ xhr.statusText+ ' ' + xhr.status);
      }
  
    });
  } else {
    // request_id = $("input[name='request_id']").val();
    var amount = $("input[name='amount']").val();
    var datathirdsubmit = $("input[name='datasubmitt']").val();
    var datawal = {
      'amount' : amount,
      'datathirdsubmit' : datathirdsubmit
    }
    $.ajax("walletupdate.php", {
      method: "POST",
      data : datawal,
      dataType: 'html',
      async: false,
      success: function(data) {
        console.log(data);
        var dat = JSON.parse(data);
       console.log(dat.key);
       // var ky = JSON.stringify(dat.key);
        if(dat.key == "Insufficient Fund") {
          alert("Insufficient Fund. Kindly Fund Your Wallet");
          window.location= window.location.protocol+'//'+window.location.hostname+':81/data/home.php?key=' + dat.key;
        } else {
          if(typeof(Storage) !== "undefined") {
            sessionStorage.setItem('payment', 'success');
            sessionStorage.setItem('responses', 'success');
          }
         
          var sim = $("select[name='sim']").val();
          var ref = $("input[name='ref']").val();
          var var_codew = $("input[name='var_codew']").val();
          var phn_numberw = $("input[name='phn_numberw']").val();
          var varrnew = $("input[name='varrnew']").val();
          var varrpin = $("input[name='varrpin']").val();
          var server = $("input[name='server']").val();
          var datasubmitt = $("input[name='datasubmitt']").val();
    

      var datawallet = {
        'sim' : sim,
        'ref' : ref,
        'var_codew' : var_codew,
        'phn_numberw' : phn_numberw,
        'varrnew' : varrnew,
        'varrpin' : varrpin,
        'server' : server,
       'datasubmitt' : datasubmitt
      }


          $.ajax('data_recharged.php',  {
              method: 'POST',
              dataType: 'html',
              data : datawallet,
          
              //contentType: 'application/json',
              success: function(response) {
                console.log("Database Updated" + response);
                var newdat = JSON.parse(response);
                var respn = newdat.data[0]
               console.log(respn.response);
                alert("Transaction Successful");
                window.location = window.location.protocol+"//"+window.location.hostname+":81/data/transactions/transaction.php?transactions=" + respn.response;
      
              },
              error: function(xhr) {
                alert("Not Successful. Please Try Again. Thanks");
                console.log(xhr.status + ' ' + xhr.statusCode + ' ' + xhr.statusText);
              }
              
            });
       
        }
      },
      error: function(xhr) {
        console.log("Error Found, Could not update the database"+ xhr.statusCode + ' ' + xhr.statusText);
      }
    })
  }
});

