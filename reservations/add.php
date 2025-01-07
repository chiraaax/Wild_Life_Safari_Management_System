<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Make sure 'styles.css' is in the correct path -->
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Add Data</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="form_styles2.css">

</head>
<body>

<!-- Start of Header -->
<section class="header">

    <a href="../home.php" class="logo"><span>S</span>afari <span>L</span>anka</a>

    <nav class="navbar">
        <a href="../about.php">About Us</a>
        <a href="../contact_us/index.php">Contact Us</a>
        <a href="../package.php">Our Packages</a>
        <a href="add.php">Reservations</a>
        <a href="../payment/add_payment.php">Check Out</a>
        <a href="../donation/addDonation.php">Donate Now!</a>
    </nav>

</section>


<!-- End of Header -->

    <h2><u>Add Reservation Data</u></h2>
    
    <form action="addAction.php" method="post" name="add" class="form-bordered">
        <table>
            <tr> 
                <td>Full Name</td>
                <td><input type="text" name="full_name" required></td>
            </tr>
            <tr> 
                <td>Type of Trip</td>
                <td>
                    <select name="trip_type" required>
                        <option value="Wild Adventure">Wild Adventure</option>
                        <option value="Trekking">Trekking</option>
                        <option value="Birdwatching">Birdwatching</option>
                        <option value="Offroad Tours">Offroad Tours</option>
                        <option value="Wild Camping">Wild Camping</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" required></td>
            </tr>
            <tr> 
                <td>Country</td>
                <td><input type="text" name="country" required></td>
            </tr>
            <tr> 
                <td>Number of Adults</td>
                <td><input type="number" name="adults" min="1" required></td>
            </tr>
            <tr> 
                <td>Number of Children</td>
                <td><input type="number" name="children" min="0" required></td>
            </tr>
            <tr> 
                <td>Budget per Day ($)</td>
                <td><input type="number" name="budget_per_day" min="0" step="0.01" required></td>
            </tr>
            <tr> 
                <td>Expected Safari Date</td>
                <td><input type="date" name="safari_date" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="../home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="../about.php"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="../package.php"><i class="fas fa-angle-right"></i>Offers & Packages</a>
            <a href="../book.php"><i class="fas fa-angle-right"></i>Reservations</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="../FAQ/FAQ.html"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="../contact_us/index.php"><i class="fas fa-angle-right"></i> Contact Us </a>
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
<!-- End of Footer -->

</body>
</html>

