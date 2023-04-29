<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO Professor(first_name, last_name, address, date_of_birth, email, phone, gender) VALUES('$firstName', '$lastName', '$address', '$dateOfBirth', '$email', '$phone', '$gender')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:view_professor.php');
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

    <title>Professor</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="first_name">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="address">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Date of Birth</label>
                <input type="date" class="form-control" placeholder="Enter Date of Birth" name="date_of_birth">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Gender</label>
                <input type="text" class="form-control" placeholder="Enter Gender" name="gender">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="view_professor.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
    </div>
</body>

</html>