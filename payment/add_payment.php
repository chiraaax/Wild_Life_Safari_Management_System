<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include 'db_conn.php'; // Include the database connection file

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

    // Insert query
    $sql = "INSERT INTO payments (fullname, email, address, city, state, zipcode, cardname, cardnumber, exp_month, exp_year) 
            VALUES ('$fullname', '$email', '$address', '$city', '$state', '$zipcode', '$cardname', '$cardnumber', '$exp_month', '$exp_year')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to success page or perform other actions
        header("Location: view_payment.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
