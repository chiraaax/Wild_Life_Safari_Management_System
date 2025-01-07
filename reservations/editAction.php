<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    // Extract and sanitize the inputs
    $id = intval($_POST['booking_id']); // Use intval for IDs to ensure they're numeric
    $full_name = $_POST['full_name'];
    $trip_type = $_POST['trip_type'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $adults = intval($_POST['adults']); // Convert to integer
    $children = intval($_POST['children']); // Convert to integer
    $budget_per_day = floatval($_POST['budget_per_day']); // Convert to float
    $safari_date = $_POST['safari_date'];

    // Check for empty fields
    if (empty($full_name) || empty($trip_type) || empty($email) || empty($mobile) || empty($country) || empty($adults) || empty($budget_per_day) || empty($safari_date)) {
        echo "<font color='red'>All fields are required.</font><br/>";
    } else {
        // Use a prepared statement to update the database table
        $stmt = $mysqli->prepare("UPDATE bookings SET full_name = ?, trip_type = ?, email = ?, mobile = ?, country = ?, adults = ?, children = ?, budget_per_day = ?, safari_date = ? WHERE booking_id = ?");
        
        if ($stmt) {
            // Bind parameters and execute
            $stmt->bind_param("sssssiidss", $full_name, $trip_type, $email, $mobile, $country, $adults, $children, $budget_per_day, $safari_date, $id);
            if ($stmt->execute()) {
                // Display success message
                echo "<p><font color='green'>Data updated successfully!</font></p>";
                echo "<a href='index.php'>View Results</a>";
            } else {
                // Display error message with MySQL error info
                echo "<font color='red'>Error updating data: " . $stmt->error . "</font>";
            }
            
            // Close the prepared statement
            $stmt->close();
        } else {
            echo "<font color='red'>Error preparing statement: " . $mysqli->error . "</font>";
        }
    }
}
?>

