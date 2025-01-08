<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
   exit(); // Ensure script stops executing if not logged in
}

if(isset($_POST['submit'])) {
    // Handle form submission for updating user details
    $user_id = $_POST['user_id'];
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];

    // Perform update query
    $update_query = "UPDATE `users` SET `name`='$new_name', `email`='$new_email' WHERE `id`='$user_id'";
    $result = mysqli_query($conn, $update_query);

    if($result) {
        // Redirect back to user listing page after successful update
        header('location: admin_users.php');
        exit();
    } else {
        echo "Update failed. Please try again.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update User</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="update-user">
   <h1>Update User Details</h1>
   <?php
       if(isset($_GET['user_id'])) {
           $user_id = $_GET['user_id'];
           $select_user_query = "SELECT * FROM `users` WHERE `id`='$user_id'";
           $user_result = mysqli_query($conn, $select_user_query);
           $user_data = mysqli_fetch_assoc($user_result);

           if($user_data) {
               ?>
               <form method="post" action="">
                   <input type="hidden" name="user_id" value="<?php echo $user_data['id']; ?>">
                   <label for="new_name">Enter New Username:</label>
                   <input type="text" id="new_name" name="new_name" value="<?php echo $user_data['name']; ?>"><br><br>
                   <label for="new_email">Enter New Email:</label>
                   <input type="email" id="new_email" name="new_email" value="<?php echo $user_data['email']; ?>"><br><br>
                   <input type="submit" name="submit" value="Update">
               </form>
               <?php
           } else {
               echo "User not found.";
           }
       } else {
           echo "User ID not provided.";
       }
   ?>
</section>

<?php include 'admin_footer.php'; ?>

</body>
</html>

