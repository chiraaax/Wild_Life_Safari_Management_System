<?php
include 'db_conn.php'; // Include the database connection file

// Check if payment ID is provided in the URL
if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];

    // Delete payment from the database
    $sql = "DELETE FROM payments WHERE payment_id = $payment_id";

    if (mysqli_query($conn, $sql)) {
        echo "Payment deleted successfully.";
    } else {
        echo "Error deleting payment: " . mysqli_error($conn);
    }
} else {
    echo "Payment ID not provided.";
}

// Close connection
mysqli_close($conn);
?>

