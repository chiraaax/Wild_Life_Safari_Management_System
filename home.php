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

