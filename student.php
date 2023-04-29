<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    // $studentID=$_POST['student_id']; // Assuming student_id is auto-incremented
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $enrollmentDate = $_POST['enrollment_date'];

    $sql = "INSERT INTO Student(first_name, last_name, address, date_of_birth, email, phone, gender, enrollment_date) VALUES('$firstName','$lastName','$address','$dateOfBirth','$email','$phone','$gender','$enrollmentDate')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:view_student.php');
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

    <title>Student</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>FirstName</label>
                <input type="text" class="form-control" placeholder="Enter your FirstName" name="first_name">
            </div>
            <div class="form-group" autocomplete="off">
                <label>LastName</label>
                <input type="text" class="form-control" placeholder="Enter your LastName" name="last_name">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your Address" name="address">
            </div>
            <div class="form-group" autocomplete="off">
                <label>DateOfBirth</label>
                <input type="date" class="form-control" placeholder="Enter your DateOfBirth" name="date_of_birth">
            </div>
            <div class="form-group" autocomplete="off">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="phone">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Gender</label>
                <input type="text" class="form-control" placeholder="Enter your Gender" name="gender">
            </div>
            <div class="form-group" autocomplete="off">
                <label>EnrollmentDate</label>
                <input type="date" class="form-control" placeholder="Enter your EnrollmentDate" name="enrollment_date">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_student.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
    </div>
</body>

</html>