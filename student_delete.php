<?php
include "connect.php";

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from Student where StudentID =$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:view_student.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>