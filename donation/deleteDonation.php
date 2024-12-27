<?php
  include 'connect.php';
  
  if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `donation` WHERE donID=$id";
    $result = mysqli_query($con, $sql);

    if($result){
      // echo "Deleted Successfully";
      header('location:display.php');
    }
    else {
      die(mysqli_error($connection));
    }
  }
?>
