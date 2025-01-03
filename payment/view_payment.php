<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <link rel="stylesheet" href="styles\ViewStyles.css">
    <link rel="stylesheet" href="styles\ButtonStyle.css"> <!-- Link the button styles -->
    <script src="js\delete.js" defer></script>
</head>

<body>
    <div class="container">
        <h2>Payments List</h2>
        <!-- Add Payment button -->
        <a href="add_payment.php" class="add-payment-button">Add Payment</a>
        <div class="payments-list">
            <?php
            include 'db_conn.php'; // Include the database connection file

            // Fetch payments from the database
            $sql = "SELECT * FROM payments";
            $result = mysqli_query($conn, $sql);

            // Check if there are any payments
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='payment'>";
                    echo "<div class='payment-details'>";
                    echo "<p><strong>Full Name:</strong> " . $row["fullname"] . "</p>";
                    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                    echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
                    echo "<p><strong>City:</strong> " . $row["city"] . "</p>";
                    echo "<p><strong>State:</strong> " . $row["state"] . "</p>";
                    echo "<p><strong>Zipcode:</strong> " . $row["zipcode"] . "</p>";
                    echo "<p><strong>Name on Card:</strong> " . $row["cardname"] . "</p>";
                    echo "<p><strong>Credit Card Number:</strong> " . $row["cardnumber"] . "</p>";
                    echo "<p><strong>Expire Month:</strong> " . $row["exp_month"] . "</p>";
                    echo "<p><strong>Expire Year:</strong> " . $row["exp_year"] . "</p>";
                    // Add Edit button with payment ID as parameter
                    echo "<a href='update_payment.php?id=" . $row["payment_id"] . "' class='edit-button'>Edit</a>";
                    // Add Delete button with payment ID as parameter
                    echo "<button onclick='deletePayment(" . $row["payment_id"] . ")' class='delete-button'>Delete</button>";
                    echo "</div>"; // end payment-details
                    echo "</div>"; // end payment
                }
            } else {
                echo "<p>No payments found.</p>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div> <!-- end payments-list -->
    </div> <!-- end container -->
</body>

</html>

