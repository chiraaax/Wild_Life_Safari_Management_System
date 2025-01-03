<?php
include 'db_conn.php'; // Include the database connection file

// Check if payment ID is provided in the URL
if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];

    // Fetch payment details from the database based on payment ID
    $sql_fetch = "SELECT * FROM payments WHERE payment_id = $payment_id";
    $result_fetch = mysqli_query($conn, $sql_fetch);

    // Check if payment exists
    if (mysqli_num_rows($result_fetch) > 0) {
        $payment = mysqli_fetch_assoc($result_fetch);

        // Initialize the update query variable
        $sql_update = "";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

            // Update query
            $sql_update = "UPDATE payments SET fullname='$fullname', email='$email', address='$address', city='$city', state='$state', zipcode='$zipcode', cardname='$cardname', cardnumber='$cardnumber', exp_month='$exp_month', exp_year='$exp_year' WHERE payment_id=$payment_id";

            // Execute the update query
            if (mysqli_query($conn, $sql_update)) {
                // Redirect to view payment page or perform other actions
                header("Location: view_payment.php");
                exit();
            } else {
                echo "Error updating payment: " . mysqli_error($conn);
            }
        }

        // Display form with payment details for editing
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Payment</title>
            <link rel="stylesheet" href="styles/Updatestyles.css">
        </head>
        <body>
            <div class="container">
                <h2>Edit Payment</h2>
                <form method="post" action="update_payment.php?id=<?php echo $payment_id; ?>">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" id="fullname" name="fullname" value="<?php echo $payment['fullname']; ?>"><br><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="<?php echo $payment['email']; ?>"><br><br>

                    <label for="address">Address:</label><br>
                    <input type="text" id="address" name="address" value="<?php echo $payment['address']; ?>"><br><br>

                    <label for="city">City:</label><br>
                    <input type="text" id="city" name="city" value="<?php echo $payment['city']; ?>"><br><br>

                    <label for="state">State:</label><br>
                    <input type="text" id="state" name="state" value="<?php echo $payment['state']; ?>"><br><br>

                    <label for="zipcode">Zipcode:</label><br>
                    <input type="text" id="zipcode" name="zipcode" value="<?php echo $payment['zipcode']; ?>"><br><br>

                    <label for="cardname">Name on Card:</label><br>
                    <input type="text" id="cardname" name="cardname" value="<?php echo $payment['cardname']; ?>"><br><br>

                    <label for="cardnumber">Credit Card Number:</label><br>
                    <input type="text" id="cardnumber" name="cardnumber" value="<?php echo $payment['cardnumber']; ?>"><br><br>

                    <label for="exp_month">Expire Month:</label><br>
                    <input type="text" id="exp_month" name="exp_month" value="<?php echo $payment['exp_month']; ?>"><br><br>

                    <label for="exp_year">Expire Year:</label><br>
                    <input type="text" id="exp_year" name="exp_year" value="<?php echo $payment['exp_year']; ?>"><br><br>

                    <input type="submit" name="submit" value="Update">
                </form>
            </div>
        </body>
        </html>
<?php
    } else {
        echo "Payment not found.";
    }
} else {
    echo "Payment ID not provided.";
}
?>

