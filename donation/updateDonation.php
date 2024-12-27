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

<html>
    <head>
        <link rel="stylesheet" href="don.css">
    </head>
    <body>
        <div class="d1">
            <div class="d1t">
               <p>DONATIONS</p>
            </div>
        </div>
        <div class="d2">
            <p>PAY NOW|--|PAY MONTHLY</p>
        </div>
        <div class="d3">
            <div class="dt1">
                <p><a href="">RS.20</a></p>
            </div>
            <div class="dt2">
                <p><a href="">RS.25</a></p>
            </div>
            <div class="dt3">
                <p><a href="">RS.30</a></p>
            </div>
            <div class="dt4">
                <p><a href="">RS.35</a></p>
            </div>
            <div class="dt5">
                <p><a href="">Other</a></p>
            </div>
        </div>

        <div class="d4">
            <p>Donor information</p>
        </div>
        <div  class="d5">
             <form id="donor information" method="post">
                <input  type="text" name = "salutation" placeholder="Salutation">
                <br><br>
                <input  type="text" name = "firstName" placeholder="Fist Name">
                <br><br>
                <input  type="text" name = "lastName" placeholder="Last Name">
                <br><br>
                <input  type="text" name = "Phone" placeholder="Phone ">
                <br><br>
                <input  type="text" name = "Email" placeholder="E-mail ">
                <br><br>
                <button type="submit" name="submit">Submit</button>
             </form>
        </div>
    </body>
</html>
