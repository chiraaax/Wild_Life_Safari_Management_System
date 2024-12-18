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
