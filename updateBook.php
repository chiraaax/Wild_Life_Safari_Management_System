<?php
// Include the database connection
include 'bookdbconfig.php';

// Get the booking ID from the GET parameter
$id = isset($_GET['updateid']) ? $_GET['updateid'] : null;

// Fetch the booking details based on the ID
if ($id) {
    $sql = "SELECT * FROM `book` WHERE bookid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $location = $row['location'];
        $guests = $row['guests'];
        $arrivals = $row['arrivals'];
        $leaving = $row['leaving'];
    } else {
        die('Booking not found.');
    }
} else {
    die('No booking ID provided.');
}

// Handle form submission for updating the record
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Use prepared statements to update the record
    $update_sql = "UPDATE `book` SET name = ?, email = ?, phone = ?, address = ?, location = ?, guests = ?, arrivals = ?, leaving = ? WHERE bookid = ?";
    $update_stmt = mysqli_prepare($conn, $update_sql);
    mysqli_stmt_bind_param($update_stmt, 'ssssssssi', $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving, $id);

    if (mysqli_stmt_execute($update_stmt)) {
        header('Location: book_display.php'); // Redirect after updating
        exit;
    } else {
        die('Failed to update booking: ' . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Update Booking</h1>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your phone" name="phone" autocomplete="off" value="<?php echo htmlspecialchars($phone); ?>">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" value="<?php echo htmlspecialchars($address); ?>">
            </div>
            <div class="mb-3">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter your location" name="location" autocomplete="off" value="<?php echo htmlspecialchars($location); ?>">
            </div>
            <div class="mb-3">
                <label>Guests</label>
                <input type="number" class="form-control" name="guests" value="<?php echo htmlspecialchars($guests); ?>">
            </div>
            <div class="mb-3">
                <label>Arrival Date</label>
                <input type="date" name="arrivals" class="form-control" value="<?php echo htmlspecialchars($arrivals); ?>">
            </div>
            <div class="mb-3">
                <label>Leaving Date</label>
                <input type="date" name="leaving" class="form-control" value="<?php echo htmlspecialchars($leaving); ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>

