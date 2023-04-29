
<?php
require('connect.php'); // Assuming you have already included the database connection file

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $studentid = $_POST['StudentID'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $enrollmentDate = $_POST['enrollment_date'];

    $sql = "UPDATE Student SET first_name='$firstName', last_name='$lastName', address='$address', date_of_birth='$dateOfBirth', email='$email', phone='$phone', gender='$gender', enrollment_date='$enrollmentDate' WHERE StudentID='$studentid'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated Successfully";
        header('location:view_student.php');
    } else {
        die(mysqli_error($con));
    }
}

// Retrieve student data from the database for editing
$sql = "SELECT * FROM Student WHERE StudentID='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$studentID = $row['StudentID'];
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$address = $row['address'];
$dateOfBirth = $row['date_of_birth'];
$email = $row['email'];
$phone = $row['phone'];
$gender = $row['gender'];
$enrollmentDate = $row['enrollment_date'];

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
            <input type="hidden" name="StudentID" value="<?php echo $studentID; ?>">
            <div class="form-group" autocomplete="off">
                <label>FirstName</label>
                <input type="text" class="form-control" placeholder="Update your FirstName" name="first_name" value="<?php echo $firstName; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>LastName</label>
                <input type="text" class="form-control" placeholder="Update your LastName" name="last_name" value="<?php echo $lastName; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Update your Address" name="address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>DateOfBirth</label>
                <input type="date" class="form-control" placeholder="Update your DateOfBirth" name="date_of_birth" value="<?php echo $dateOfBirth; ?>">
            </div>
            <div class="form-group" autocomplete="off">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="Update your email" name="email" value="<?php echo $email; ?>">

<div class="form-group" autocomplete="off">
    <label>Phone</label>
    <input type="text" class="form-control" placeholder="Update your mobile number" name="phone">
</div>
<div class="form-group" autocomplete="off">
    <label>Gender</label>
    <input type="text" class="form-control" placeholder="Update your Gender" name="gender">
</div>
<div class="form-group" autocomplete="off">
    <label>EnrollmentDate</label>
    <input type="date" class="form-control" placeholder="Update your EnrollmentDate" name="enrollment_date">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<button type="submit" class="btn btn-primary" name="submit" href="index.php">Home</button>
</body>

</html>