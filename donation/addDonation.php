<?php
  include 'connect.php';

  if(isset($_POST['submit'])){
    $salutation=$_POST['salutation'];
    $firstName=$_POST['firstName'];
    $LastName=$_POST['lastName'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    
    $sql = "INSERT INTO `donation` (salutation, firstName, LastName, Phone, Email) VALUES ('$salutation', '$first_name', '$Last_name', '$Phone', '$Email')";
    $result = mysqli_query($con, $sql);

    if($result){
       //echo "data inserted successfully";
      header('location:display.php');
    } else{
      die(mysqli_error($con));
    }
  }
?>
