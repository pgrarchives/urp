<?php
include "connect.php"; // Assuming you have already included the database connection file

// Delete assignment record
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM assignment WHERE AssignmentID =$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:Assignment.php'); // Redirect to view_assignment.php after successful deletion
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>
