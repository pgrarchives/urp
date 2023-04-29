<?php
// Connect to the database
$db = new mysqli("localhost", "root", "gagan", "fdb_urp");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get form data
$courseName = $_POST['CourseName'];
$courseDescription = $_POST['CourseDescription'];
$courseCredits = $_POST['CourseCredits'];

// Insert course details into the database
$sql = "INSERT INTO Course (CourseName, CourseDescription, CourseCredits) VALUES (?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param("ssi", $courseName, $courseDescription, $courseCredits);
if ($stmt->execute()) {
    echo "Course added successfully.";
} else {
    echo "Error adding course: " . $stmt->error;
}

// Close database connection
$stmt->close();
$db->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Add Course</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post" action="add_course.php">
            <div class="form-group" autocomplete="off">
                <label>Course Name</label>
                <input type="text" class="form-control" placeholder="Enter Course Name" name="CourseName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Course Description</label>
                <input type="text" class="form-control" placeholder="Enter Course Description"
                    name="CourseDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Course Credits</label>
                <input type="number" class="form-control" placeholder="Enter Course Credits" name="CourseCredits">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
