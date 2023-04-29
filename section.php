<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $sectionName = $_POST['SectionName'];
    $sectionDescription = $_POST['SectionDescription'];
    $semester = $_POST['Semester'];
    $courseID = $_POST['CourseID'];
    $studentID = $_POST['StudentID'];
    $professorID = $_POST['ProfessorID'];

    $sql = "INSERT INTO section(SectionName, SectionDescription, Semester, CourseID, StudentID, ProfessorID) VALUES('$sectionName','$sectionDescription','$semester','$courseID','$studentID','$professorID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:view_section.php');
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

    <title>Section</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Section Name</label>
                <input type="text" class="form-control" placeholder="Enter Section Name" name="SectionName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Section Description</label>
                <input type="text" class="form-control" placeholder="Enter Section Description" name="SectionDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Semester</label>
                <input type="text" class="form-control" placeholder="Enter Semester" name="Semester">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Course ID</label>
                <input type="text" class="form-control" placeholder="Enter Course ID" name="CourseID">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter Student ID" name="StudentID">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Professor ID</label>
                <input type="text" class="form-control" placeholder="Enter Professor ID" name="ProfessorID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_section.php"><button type="submit" class="btn btn-primary" name="submit">View Existing Data</button></a>
    </div>
</body>

</html>
