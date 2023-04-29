<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $facilityName = $_POST['FacilityName'];
    $facilityDescription = $_POST['FacilityDescription'];
    $studentID = $_POST['StudentID'];

    $sql = "INSERT INTO `residential facility` (FacilityName, FacilityDescription, StudentID) VALUES ('$facilityName', '$facilityDescription', '$studentID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:view_residential_facility.php');
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

    <title>Residential Facility</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Facility Name</label>
                <input type="text" class="form-control" placeholder="Enter Facility Name" name="FacilityName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Facility Description</label>
                <input type="text" class="form-control" placeholder="Enter Facility Description" name="FacilityDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter Student ID" name="StudentID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_residential_facility.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
    </div>
</body>

</html>
