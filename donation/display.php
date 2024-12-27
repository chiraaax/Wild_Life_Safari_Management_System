<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dis.css">
  <title>Donater's Details</title>
</head>
<body>
  <div>
    <button>
      <a href="addDonation.php">Add a Donation</a>
    </button>

    <table>
      <thead>
        <tr>
          <th>Donation ID</th>
          <th>Salutation</th>
          <th>Full Name</th>
          <th>Last Name</th>
          <th>Phone</th>
          <th>Email</th>
        </tr>
      </thead>
        <?php
          $sql = "SELECT * FROM `donation`";
          $result = mysqli_query($con, $sql);
          
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $donID = $row["donID"];
                $salutation = $row["salutation"]; 
                $firstName = $row["firstName"];
                $LastName = $row["LastName"];
                $Phone = $row["Phone"];
                $Email = $row["Email"];
                
                echo ' <tr> 
                            <td>'.$donID.'</td>
                            <td>'.$salutation.'</td>
                            <td>'.$firstName.'</td>
                            <td>'.$LastName.'</td>
                            <td>'.$Phone.'</td>
                            <td>'.$Email .'</td>
                            <td>
                            <button><a href="updateDonation.php?updateid='.$donID.'">Update Details</a></button>
                            <button class="delete"><a href="deleteDonation.php?deleteid='.$donID.'">Delete Details</a></button>
                        </td>
                    </tr>';
            }
          }
        
        ?>
        
      </tbody>
    </table>
  </div>
</body>
</html>
