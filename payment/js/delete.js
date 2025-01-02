// delete.js

// JavaScript to handle payment deletion asynchronously
function deletePayment(payment_id) {
    if (confirm("Are you sure you want to delete this payment?")) {
        // Send an AJAX request to delete the payment
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display the response message
                alert(this.responseText);
                // Remove the payment from the DOM
                var paymentElement = document.getElementById("payment_" + payment_id);
                if (paymentElement) {
                    paymentElement.remove();
                }
            }
        };
        xhttp.open("GET", "delete_payment.php?id=" + payment_id, true);
        xhttp.send();
    }
}

