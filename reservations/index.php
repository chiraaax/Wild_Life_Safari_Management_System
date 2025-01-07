<?php
// Include the database connection file
require_once("dbConnection.php");

// Ensure the query executes without error
$result = mysqli_query($mysqli, "SELECT * FROM bookings ORDER BY booking_id DESC");

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($mysqli));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Updated to use external CSS -->
</head>
<body class="body">
    <p>
        <a href="add.php">Add New Data</a>
    </p>

    <div>
        <?php
        while ($res = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '<p><strong>Booking ID:</strong> ' . $res['booking_id'] . '</p>';
            echo '<p><strong>Full Name:</strong> ' . $res['full_name'] . '</p>';
            echo '<p><strong>Type of Trip:</strong> ' . $res['trip_type'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $res['email'] . '</p>';
            echo '<p><strong>Mobile:</strong> ' . $res['mobile'] . '</p>';
            echo '<p><strong>Country:</strong> ' . $res['country'] . '</p>';
            echo '<p><strong>Adults:</strong> ' . $res['adults'] . '</p>';
            echo '<p><strong>Children:</strong> ' . $res['children'] . '</p>';
            echo '<p><strong>Budget per Day ($):</strong> ' . $res['budget_per_day'] . '</p>';
            echo '<p><strong>Expected Safari Date:</strong> ' . $res['safari_date'] . '</p>';
              
            echo '<div class="butn">';
            echo '<div class="card-actions">';
            echo '<a href="edit.php?id=' . $res['booking_id'] . '">';
            echo '<button>Edit</button></a>';
            echo ' ';
            echo '<a href="delete.php?id=' . $res['booking_id'] . '" onClick="return confirm(\'Are you sure you want to delete?\')">';
            echo '<button >Delete</button></a>';
            echo '</div>';
            echo '</div>';
            

            echo '</div>';
        }
        ?>
    </div>
</body>
</html>

