<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $guests=$_POST['guests'];
        $arrivals=$_POST['arrivals'];
        $leaving=$_POST['leaving'];

        $request = "insert into book (name, email, phone, address, location, guests, arrivals, leaving) values('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
    
        mysqli_query($connection, $request);
        
         header('location:book_display.php');
        
    }else{
        echo 'something went wrong try again'; 
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
<section class="header">

    

    <a href="home.php" class="logo"><span>S</span>afari <span>L</span>anka</a>

    <nav class="navbar">
        <a href="about.php">About Us</a>
        <a href="./contact_us/index.php">Contact Us</a>
        <a href="package.php">Our Packages</a>
        <a href="./reservations/add.php">Reservations</a>
        <a href="./payment/add_payment.php">Check Out</a>
        <a href="donation/addDonation.php">Donate Now!</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(images/aboutus3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>

    <form method="post" class="book-form">
       
    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="text" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="places you want to visit" name="location">
        </div>
        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <!-- input a calender -->
        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>
        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>

<!-- booking section ends -->

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

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="./js/script.js"></script>

</body>
</html> 
