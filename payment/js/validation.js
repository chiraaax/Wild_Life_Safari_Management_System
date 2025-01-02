function validatePaymentForm() {
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var zipcode = document.getElementById("zipcode").value;
    var cardname = document.getElementById("cardname").value;
    var cardnumber = document.getElementById("cardnumber").value;
    var exp_month = document.getElementById("exp_month").value;
    var exp_year = document.getElementById("exp_year").value;

    var errorMessage = "";
