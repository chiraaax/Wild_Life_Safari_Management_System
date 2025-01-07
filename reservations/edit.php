<?php
// Include the database connection file
require_once("dbConnection.php");

// Check if id is set in URL parameter and sanitize it
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize by converting to integer
} else {
    die("Error: No ID parameter provided.");
}

// Prepare the SQL query to avoid SQL injection
$query = "SELECT * FROM bookings WHERE booking_id = ?";
$stmt = mysqli_prepare($mysqli, $query);

// Bind the parameter and execute the statement
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

// Get the result and check for errors
$result = mysqli_stmt_get_result($stmt);
if ($result === false) {
    die("SQL Error: " . mysqli_error($mysqli)); // Display SQL error
}

// Fetch the data and check if there is a result
$resultData = mysqli_fetch_assoc($result);
if (!$resultData) {
    die("Error: No record found with ID: " . $id);
}

$full_name = $resultData['full_name'];
$trip_type = $resultData['trip_type'];
$email = $resultData['email'];
$mobile = $resultData['mobile'];
$country = $resultData['country'];
$adults = $resultData['adults'];
$children = $resultData['children'];
$budget_per_day = $resultData['budget_per_day'];
$safari_date = $resultData['safari_date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="form_style.css"> 
   
</head>
<body>
    <div class="container">
        <h2>Edit Data</h2>
        
        
        <form name="edit" method="post" action="editAction.php">
            

            <div class="form-wrapper"> <!-- New wrapper with border applied -->
            <form name="edit" method="post" action="editAction.php">
                <!-- All your form groups and content -->
                <div class="form-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" name="full_name" id="full_name" value="<?php echo htmlspecialchars($full_name); ?>" required>
                </div>
            
            <div class="form-group">
                <label for="trip_type">Type of Trip:</label>
                <select name="trip_type" id="trip_type">
                    <option value="Wild Adventure" <?php if($trip_type == 'Wild Adventure') echo 'selected'; ?>>Wild Adventure</option>
                    <option value="Trekking" <?php if($trip_type == 'Trekking') echo 'selected'; ?>>Trekking</option>
                    <option value="Birdwatching" <?php if($trip_type == 'Birdwatching') echo 'selected'; ?>>Birdwatching</option>
                    <option value="Offroad Tours" <?php if($trip_type == 'Offroad Tours') echo 'selected'; ?>>Offroad Tours</option>
                    <option value="Wild Camping" <?php if($trip_type == 'Wild Camping') echo 'selected'; ?>>Wild Camping</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" id="mobile" value="<?php echo htmlspecialchars($mobile); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" value="<?php echo htmlspecialchars($country); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="adults">Number of Adults:</label>
                <input type="number" name="adults" id="adults" value="<?php echo htmlspecialchars($adults); ?>" min="1" required>
            </div>
            
            <div class="form-group">
                <label for="children">Number of Children:</label>
                <input type="number" name="children" id="children" value="<?php echo htmlspecialchars($children); ?>" min="0">
            </div>
            
            <div class="form-group">
                <label for="budget_per_day">Budget per Day ($):</label>
                <input type="number" name="budget_per_day" id="budget_per_day" value="<?php echo htmlspecialchars($budget_per_day); ?>" min="0" step="0.01" required>
            </div>
            
            <div class="form-group">
                <label for="safari_date">Expected Safari Date:</label>
                <input type="date" name="safari_date" id="safari_date" value="<?php echo htmlspecialchars($safari_date); ?>" required>
            </div>
            
            <input type="hidden" name="booking_id" value="<?php echo htmlspecialchars($id); ?>">
            
            <div class="">
                <input  type="submit" name="update" value="Update" class="btn" >
            </div>
        </form>
    </div>
</body>
</html>

