<?php
// Display system messages if any exist
if(isset($message)){
   foreach($message as $message){
      echo  ' <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div> ';
   }
}

// Database configuration
include 'config.php';

// Initialize session
session_start();

// Get current user ID from session
$user_id = $_SESSION['user_id'];

// Redirect to login if user not authenticated
if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

<!-- header section starts -->
<section class="header"></section>