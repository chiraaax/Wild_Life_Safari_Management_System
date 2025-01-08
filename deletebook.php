<?php
include 'bookdbconfig.php';
if(isset($_GET['deleteid'])){
    $bookid=$_GET['deleteid'];

    $sql="delete from `book` where bookid=$bookid";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:book_display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
