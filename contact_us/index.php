<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Make sure 'styles.css' is in the correct path -->
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>

<body>

<!-- Start of Header -->
<section class="header">

    <a href="../home.php" class="logo"><span>S</span>afari <span>L</span>anka</a>

    <nav class="navbar">
        <a href="../home.php">Home</a>
        <a href="../about.php">About Us</a>
        <a href="index.php">Contact Us</a>
        <a href="../package.php">Our Packages</a>
        <a href="../reservations/add.php">Reservations</a>   
        <a href="../payment/add_payment.php">Check Out</a>
        <a href="../donation/addDonation.php">Donate Now!</a>     
    </nav>                
    

</section>


<!-- End of Header -->

  <!-- Main content for Contact Us page -->
<div class="contact-container"> <!-- Main container for contact page -->
    <h1>Contact Us</h1>

    <!-- Contact Information Section -->
    <div class="contact-info">
    <div class="info-section">
    <h3>
        <i class="fas fa-map-marker-alt"></i> <!-- Font Awesome Location Icon -->
        Our Location
    </h3>
    <p>
        <i class="fas fa-map-marker-alt"></i> <!-- Font Awesome Location Icon -->
        No 23, Kaduwela Road, Malabe.
    </p>
</div>

        <div class="info-section">
    <h3>
        <i class="fas fa-phone-alt"></i> <!-- Font Awesome Phone Icon -->
        Phone
    </h3>
    <p>
        <i class="fas fa-phone-alt"></i> <!-- Font Awesome Phone Icon -->
        +94 - 773545678
    </p>
</div>

<div class="info-section">
    <h3>
        <i class="fas fa-envelope"></i> <!-- Font Awesome Envelope Icon -->
        Email
    </h3>
    <p>
        <i class="fas fa-envelope"></i> <!-- Font Awesome Envelope Icon -->
        safarilanka@gmail.com
    </p>
</div>

    </div>

    <!-- Contact Form Section -->
    <div class="contact-form">
        <h2>Send Us a Message</h2>
        <form action="submit_form.php" method="post"> <!-- Form submission method and action -->
            <div class="form-group"> <!-- Grouping elements for styling -->
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </div>
             <!-- Form submission button -->
        </form>
    </div>
</div>

  <!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Offers & Packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Reservations</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="./FAQ/FAQ.html"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="./contact_us/index.php"><i class="fas fa-angle-right"></i> Contact Us </a>
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

<script src="scripts.js"></script> <!-- Optional JavaScript -->
</body>
</html>

