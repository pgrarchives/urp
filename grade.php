<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $gradeObtained = $_POST['GradeObtained'];
    $studentID = $_POST['StudentID'];

    $sql = "INSERT INTO grade (GradeObtained, StudentID) VALUES ('$gradeObtained', '$studentID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:view_grade.php');
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

    <title>Grade</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Grade Obtained</label>
                <input type="text" class="form-control" placeholder="Enter Grade Obtained" name="GradeObtained">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="number" class="form-control" placeholder="Enter Student ID" name="StudentID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_grade.php"><button type="submit" class="btn btn-primary" name="submit">View Existing data</button></a>
    </div>
</body>

</html>
