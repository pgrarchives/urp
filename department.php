<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $DeptName=$_POST['DeptName'];
    $DeptDescription=$_POST['DeptDescription'];
    $DeptHead=$_POST['DeptHead'];

    $sql="INSERT INTO Department(DeptName, DeptDescription, DeptHead) VALUES('$DeptName','$DeptDescription','$DeptHead')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:view_department.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Department</title>
</head>
<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Department Name</label>
                <input type="text" class="form-control" placeholder="Enter Department Name" name="DeptName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Department Description</label>
                <input type="text" class="form-control" placeholder="Enter Department Description" name="DeptDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Department Head</label>
                <input type="text" class="form-control" placeholder="Enter Department Head" name="DeptHead">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Professor ID</label>
                <input type="text" class="form-control" placeholder="Enter your professor ID" name="proff_ID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_department.php"><button type="submit" class="btn btn-primary" name="submit">View Existing data</button></a>
        <a href="index.php" style="float: right;"><button type="submit" class="btn btn-primary" name="home">Home</button></a>
    </div>
</body>

</html>
