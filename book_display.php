<?php
include 'bookdbconfig.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="book.php" class="text-light" style="text-decoration:none">Add Another Booking</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Leaving</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $sql="Select * from `book`";
    $result=mysqli_query($conn,$sql);
    if($result)
    {

        while ($row=mysqli_fetch_assoc($result))
        {
            $bookid=$row['bookid'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $address=$row['address'];
            $location=$row['location'];
            $guests=$row['guests'];
            $arrivals=$row['arrivals'];
            $leaving=$row['leaving'];
            echo'<tr>
            <th scope="row">'.$bookid.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$address.'</td>
            <td>'.$location.'</td>
            <td>'.$guests.'</td>
            <td>'.$arrivals.'</td>
            <td>'.$leaving.'</td>
            <td>
        <button class="btn btn-primary"><a href="updateBook.php? updateid='.$bookid.'"class="text-light" style="text-decoration:none">Update</a></button>
        <button class="btn btn-danger"><a href="deletebook.php? deleteid='.$bookid.'"class="text-light" style="text-decoration:none">Delete</a></button>
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
