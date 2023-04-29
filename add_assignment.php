<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $assignmentName = $_POST['AssignmentName'];
    $assignmentDescription = $_POST['AssignmentDescription'];
    $maximumMarks = $_POST['MaximumMarks'];
    $studentID = $_POST['StudentID'];

    $sql = "INSERT INTO assignment(AssignmentName, AssignmentDescription, MaximumMarks, StudentID) VALUES('$assignmentName','$assignmentDescription','$maximumMarks','$studentID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:Assignment.php');
    } else {
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

    <title>Assignment</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Assignment Name</label>
                <input type="text" class="form-control" placeholder="Enter assignment name" name="AssignmentName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Assignment Description</label>
                <input type="text" class="form-control" placeholder="Enter assignment description" name="AssignmentDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Maximum Marks</label>
                <input type="text" class="form-control" placeholder="Enter maximum marks" name="MaximumMarks">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter student ID" name="StudentID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="Assignment.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
    </div>
</body>

</html>
