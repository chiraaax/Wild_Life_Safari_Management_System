<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .card h3 {
            margin-top: 0;
        }
        .card p {
            margin: 5px 0;
        }
        .btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn.edit {
            background-color: #28a745;
        }
        .btn.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h2>Booking Details</h2>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    // Fetch booking details from the database
    $result = mysqli_query($mysqli, "SELECT * FROM bookings");

    // Check if there are any bookings
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <h3><?php echo $row['full_name']; ?></h3>
                <p><strong>Trip Type:</strong> <?php echo $row['trip_type']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                <p><strong>Mobile:</strong> <?php echo $row['mobile']; ?></p>
                <p><strong>Country:</strong> <?php echo $row['country']; ?></p>
                <p><strong>Number of Adults:</strong> <?php echo $row['adults']; ?></p>
                <p><strong>Number of Children:</strong> <?php echo $row['children']; ?></p>
                <p><strong>Budget per Day ($):</strong> <?php echo $row['budget_per_day']; ?></p>
                <p><strong>Expected Safari Date:</strong> <?php echo $row['safari_date']; ?></p>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn delete" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
            </div>
            <?php
        }
    } else {
        echo "<p>No bookings found.</p>";
    }
    ?>
</body>
</html>

