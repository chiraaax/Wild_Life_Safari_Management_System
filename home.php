<?php
if(isset($message)){
   foreach($message as $message){
      echo  ' <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div> ';
   }
}

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

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


<!-- home section starts -->


<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Let's go wild!</h3> 
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3> 
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3> 
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- services section start -->
<section class="services">

    <h1 class="heading-title"> explore wilderness with us.. </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon1.png" alt="icon of adventures">
            <h3>wild adventures</h3>
        </div>

        <div class="box">
            <img src="images/icon2.png" alt="icon of trekking">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon3.png" alt="icon of camp fire">
            <h3>birdwatching</h3>
        </div>

        <div class="box">
            <img src="images/icon4.png" alt="icon of off road">
            <h3>off road tours</h3>
        </div>

        <div class="box">
            <img src="images/icon5.png" alt="icon of camping">
            <h3>wild camping</h3>
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="images/about1.webp" alt="Safari jeeps and leopard"/>
    </div> 
    
     <div class="content">
        <h3>Welcome to a brighter, wilder future</h3>
        <p align="justify">Embark on an extraordinary journey with Safari Lanka – your ultimate companion for wildlife exploration and conservation. Discover remote rainforests, majestic savannas, and eco-friendly accommodations, guided by our passion for preserving nature's wonders..</p>
        <p align="justify">Join us on a voyage of discovery, adventure, and conservation. Welcome to Safari Lanka – where every journey is a step towards a brighter, wilder future.</p>
        <a href="about.php" class="btn"><center>learn more</center></a>
    </div>

</section>
<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/about3.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>Yala National Park</h3>
                <p>Yala National Park in Sri Lanka is renowned for its diverse wildlife and stunning landscapes, making it a must-visit destination for nature enthusiasts and wildlife lovers alike.</p>
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/about2.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>Horton Plains National Park</h3>
                <p>Horton Plains National Park in Sri Lanka features beautiful landscapes, including grasslands and forests, and is known for its diverse wildlife, including the rare Sri Lankan leopard.</p>
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/about4.jpg" alt="tourism place">
            </div>
            <div class="content">
                <h3>Sinharaja National Park</h3>
                <p>Sinharaja National Park, is a breathtaking UNESCO World Heritage Site renowned for its rich biodiversity and lush rainforest, offering a haven for diverse flora and fauna.</p>
                
                <a href="book.php" class="btn"> book now </a>
            </div>
        </div>
    </div>

    <div class="load-more">
        <a href="package.php" class="btn"> load more </a>
    </div>

</section>


<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>Upto 40% off</h3>
        <p>Explore the wild with up to 40% off! Book your safari trip now for exclusive savings. Start your adventure at an unbeatable price!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends -->

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
