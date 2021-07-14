<?php 

include 'conn.php';

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from user where ID = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:Controller.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}


?>