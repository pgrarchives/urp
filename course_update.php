<?php
require('connect.php'); // Assuming you have already included the database connection file

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $courseID = $_POST['CourseID'];
    $courseName = $_POST['CourseName'];
    $courseDescription = $_POST['CourseDescription'];
    $studentID = $_POST['StudentID'];
    $professorID = $_POST['ProfessorID'];
    $courseCredits = $_POST['CourseCredits'];

    $sql = "UPDATE course SET CourseName='$courseName', CourseDescription='$courseDescription', StudentID='$studentID', ProfessorID='$professorID', CourseCredits='$courseCredits' WHERE CourseID='$courseID'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated Successfully";
        header('location:view_course.php');
    } else {
        die(mysqli_error($con));
    }
}

// Retrieve course data from the database for editing
$sql = "SELECT * FROM course WHERE CourseID='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$courseID = $row['CourseID'];
$courseName = $row['CourseName'];
$courseDescription = $row['CourseDescription'];
$studentID = $row['StudentID'];
$professorID = $row['ProfessorID'];
$courseCredits = $row['CourseCredits'];

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
    <div class="container my-5 ">
        <form method="post">
            <input type="hidden" name="CourseID" value="<?php echo $courseID; ?>">
            <div class="form-group" autocomplete="off">
                <label>CourseName</label>
                <input type="text" class="form-control" placeholder="Update CourseName" name="CourseName" value="<?php echo $courseName; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>CourseDescription</label>
                <input type="text" class="form-control" placeholder="Update CourseDescription" name="CourseDescription" value="<?php echo $courseDescription; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>StudentID</label>
                <input type="text" class="form-control" placeholder="Update StudentID" name="StudentID" value="<?php echo $studentID; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>ProfessorID</label>
                <input type="text" class="form-control" placeholder="Update ProfessorID" name="ProfessorID" value="<?php echo $professorID; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>CourseCredits</label>
                <input type="text" class="form-control" placeholder="Update CourseCredits" name="CourseCredits" value="<?php echo $courseCredits; ?>">
        
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
