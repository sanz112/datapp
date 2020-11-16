<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
           
<p>New  </p>
<script src="https://js.paystack.co/v1/inline.js"></script>
<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="number" id="amount" required />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" required />
  </div>
  <div class="form-group">
    <label for="phone-number">Phone Number</label>
    <input type="number" id="phone-number" required />
  </div>
  <div class="form-group">
      <label for="category">Network*:</label>
      <select id="category" onchange="selectNew()" class="form-control" name="sellist">
      <option value="000" selected="selected">Select A Network Provider</option>
      <option id="mtnnew" value="001" name="mtn">MTN NG</option>
      <option id="glo" name="glo" value="002">GLO NG</option>
      <option id="airtel" name="airtel" value="003" >AIRTEL NG</option>
      <option id="9mobile" name="9mobile" value="004">9MOBILE NG</option>
    </select>
      </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<!--<form id="paymentForm">

  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>-->
<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_ae0aab66d73d62b7e60b94a348b3ed2c1ff9d6a7', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    category: document.getElementById("category").value,
    lastname: document.getElementById("last-name").value,
    phonenumber: document.getElementById("phone-number").value,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
        window.location = "https://www.swiftgeek.com.ng/transactions/transaction.php?reference=" + response.reference;
        $.ajax(url, {
          
        })
    },
  })
  handler.openIframe();
}
</script>

</body>
</html>