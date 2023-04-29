<?php
include "connect.php";

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from course where CourseID =$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:view_course.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>