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

        if (fullname === "" || email === "" || address === "" || city === "" || state === "" || zipcode === "" ||
        cardname === "" || cardnumber === "" || exp_month === "" || exp_year === "") {
        errorMessage = "All fields are required!";
    } else if (!validateEmail(email)) {
        errorMessage = "Invalid email address!";
    } else if (!validateCreditCard(cardnumber)) {
        errorMessage = "Invalid credit card number!";
    }

    if (errorMessage !== "") {
        document.getElementById("error-message").innerHTML = errorMessage;
        event.preventDefault();
    }
}

function validateEmail(email) {
    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateCreditCard(cardnumber) {
    // Regular expression for credit card number validation
    var cardRegex = /^[0-9]{16}$/;
    return cardRegex.test(cardnumber);
}

