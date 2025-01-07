<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
    // Escape special characters in strings for use in SQL statement
    $full_name = mysqli_real_escape_string($mysqli, $_POST['full_name']);
    $trip_type = mysqli_real_escape_string($mysqli, $_POST['trip_type']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
    $country = mysqli_real_escape_string($mysqli, $_POST['country']);
    $adults = mysqli_real_escape_string($mysqli, $_POST['adults']);
    $children = mysqli_real_escape_string($mysqli, $_POST['children']);
    $budget_per_day = mysqli_real_escape_string($mysqli, $_POST['budget_per_day']);
    $safari_date = mysqli_real_escape_string($mysqli, $_POST['safari_date']);

    // Check for empty fields
    if (empty($full_name) || empty($trip_type) || empty($email) || empty($mobile) || empty($country) || empty($adults) || empty($budget_per_day) || empty($safari_date)) {
        echo "<script>alert('All fields are required.');</script>";
        // Show link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // If all the fields are filled (not empty)

        // Insert data into database
        $result = mysqli_query($mysqli, "INSERT INTO bookings (full_name, trip_type, email, mobile, country, adults, children, budget_per_day, safari_date) VALUES ('$full_name', '$trip_type', '$email', '$mobile', '$country', '$adults', '$children', '$budget_per_day', '$safari_date')");

        // Check for successful insertion
        if ($result) {
            // Display success message
            echo "<script>alert('Data added successfully!');</script>";
            echo "<a href='index.php'>View Results</a>";
        } else {
            // Display error message
            echo "<script>alert('Error in adding data.');</script>";
            // Show link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
    }
}
?>
</body>
</html>

