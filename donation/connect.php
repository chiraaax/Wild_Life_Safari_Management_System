<?php
  // rename 
  $con = new mysqli('localhost', 'root','', 'wildlife');

  if (!$con) {
    die(mysqli_error($con));
  }

?>
