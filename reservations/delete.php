<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM bookings WHERE booking_id = $id");

// Check if the deletion was successful
if ($result) {
    // Redirect to the main display page (index.php in our case)
    header("Location:index.php");
} else {
    // If deletion fails, display an error message
    echo "<font color='red'>Error deleting data.</font>";
}
?>

