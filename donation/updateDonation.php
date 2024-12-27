<?php
  include 'connect.php';

  $update_id=$_GET['updateid'];
  $sql = "SELECT * FROM `donation` WHERE donID=$update_id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $salutation = $row["salutation"]; 
  $firstName = $row["firstName"];
  $LastName = $row["LastName"];
  $Phone = $row["Phone"];
  $Email = $row["Email"];

  if(isset($_POST['submit'])){
    $salutation=$_POST['salutation'];
    $firstName=$_POST['firstName'];
    $LastName=$_POST['lastName'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    
    $sql = "UPDATE `donation` SET salutation='$salutation', firstName='$firstName', LastName='$LastName', Phone='$Phone', Email='$Email' WHERE donID=$update_id";
    $result = mysqli_query($con, $sql);

    if($result){
      // echo "data updated successfully";
      header('location:display.php');
    } else{
      die(mysqli_error($connection));
    }
  }
?>
