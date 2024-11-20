<?php
// Display system messages if any exist
if(isset($message)){
   foreach($message as $message){
      echo  ' <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div> ';
   }
}

// Database configuration
include 'config.php';

// Initialize session
session_start();

// Get current user ID from session
$user_id = $_SESSION['user_id'];

// Redirect to login if user not authenticated
if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

<!-- header section starts -->
<section class="header"></section>

<a href="home.php" class="logo"><span>S</span>afari <span>L</span>anka</a>

<nav class="navbar">
        <a href="about.php">About Us</a>
        <a href="./contact_us/index.php">Contact Us</a>
        <a href="package.php">Our Packages</a>
        <a href="./reservations/add.php">Reservations</a>
        <a href="./payment/add_payment.php">Check Out</a>
        <a href="donation/addDonation.php">Donate Now!</a>
    </nav>

    <div class="icons">
    
        <i class="fas fa-user-plus" id="login-btn"> </i>
        <a href="login.php" class="logbtn">Login</a> &nbsp;
        <i class="fas fa-user-circle" id="my-acc"> </i>
        <div id="user-btn" class="logbtn">My account</div> &nbsp;
        <i class="fas fa-search" id="search-btn"></i>
    </div> 

        <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>


    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search here...">
        <label for="search-bar" class="fas fa-search"></label>
    
    
    

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->