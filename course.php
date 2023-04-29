<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $courseName = $_POST['CourseName'];
    $courseDescription = $_POST['CourseDescription'];
    $studentID = $_POST['StudentID'];
    $professorID = $_POST['ProfessorID'];
    $courseCredits = $_POST['CourseCredits'];

    $sql = "INSERT INTO Course(CourseName, CourseDescription, StudentID, ProfessorID, CourseCredits) VALUES('$courseName','$courseDescription','$studentID','$professorID','$courseCredits')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:view_course.php');
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

    <title>Course</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Course Name</label>
                <input type="text" class="form-control" placeholder="Enter Course Name" name="CourseName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Course Description</label>
                <input type="text" class="form-control" placeholder="Enter Course Description" name="CourseDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter Student ID" name="StudentID">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Professor ID</label>
                <input type="text" class="form-control" placeholder="Enter Professor ID" name="ProfessorID">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Course Credits</label>
                <input type="text" class="form-control" placeholder="Enter Course Credits" name="CourseCredits">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_course.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
    </div>
</body>

</html>
