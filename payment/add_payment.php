<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include 'db_conn.php'; // Include the database connection file

    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];

    // Insert query
    $sql = "INSERT INTO payments (fullname, email, address, city, state, zipcode, cardname, cardnumber, exp_month, exp_year) 
            VALUES ('$fullname', '$email', '$address', '$city', '$state', '$zipcode', '$cardname', '$cardnumber', '$exp_month', '$exp_year')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to success page or perform other actions
        header("Location: view_payment.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payment</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles/Addstyles.css">
    <!-- <script src="js/validation.js" defer></script> -->
</head>
<body>

<!-- header section starts -->
<section class="header">

    <a href="../home.php" class="logo"><span>S</span>afari <span>L</span>anka</a>

    <nav class="navbar">
        <a href="../about.php">About Us</a>
        <a href="../contact_us/index.php">Contact Us</a>
        <a href="../package.php">Our Packages</a>
        <a href="../reservations/add.php">Reservations</a>
        <a href="../payment/add_payment.php">Check Out</a>
        <a href="../donation/addDonation.php">Donate Now!</a>
    </nav>

    

</section>

<!-- header section ends -->

<div class="container">
    <h2>Add Payment</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="paymentForm" enctype="multipart/form-data">
        <div class="row">
            <div class="column">
                <!-- Address Details -->
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"><br><br>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city"><br><br>

                <label for="state">State:</label><br>
                <input type="text" id="state" name="state"><br><br>

                <label for="zipcode">Zipcode:</label><br>
                <input type="text" id="zipcode" name="zipcode"><br><br>
            </div>
            <div class="column">
                <!-- Card Details -->
                <div class="row">
                    <div class="column">
                        <label for="cardname">Name on Card:</label><br>
                        <input type="text" id="cardname" name="cardname"><br><br>
                    
                        <label for="cardnumber">Credit Card Number:</label><br>
                        <input type="text" id="cardnumber" name="cardnumber"><br><br>

                        <label for="exp_month">Expire Month:</label><br>
                        <input type="text" id="exp_month" name="exp_month"><br><br>

                        <label for="exp_year">Expire Year:</label><br>
                        <input type="text" id="exp_year" name="exp_year"><br><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit" onclick="validatePaymentForm()">
        <p id="error-message" class="error-message"></p>
    </form>
</div>

<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="../home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="../about.php"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="../package.php"><i class="fas fa-angle-right"></i>Offers & Packages</a>
            <a href=".../#book.php"><i class="fas fa-angle-right"></i>Reservations</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> Contact Us </a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"><i class="fas fa-envelope"></i> Safarilanka@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> Colombo, SriLanka </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Facebook </a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i> Twitter </a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram </a>
            <a href="https://lk.linkedin.com/"><i class="fab fa-linkedin"></i> Linkedin </a>
        </div>

    </div>

    <div class="credit">Powered By <span><span1>S</span1>afari <span1>L</span1>anka</span> |All rights reserved!</div>
</section>
</body>

</html>

