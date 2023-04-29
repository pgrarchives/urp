<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="student.php" class="text-light"> Add Student </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">StudentID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Address</th>
                    <th scope="col">DateOfBirth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">EnrollmentDate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Student";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $studentID = $row['StudentID'];
                        $firstName = $row['first_name'];
                        $lastName = $row['last_name'];
                        $address = $row['address'];
                        $dateOfBirth = $row['date_of_birth'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];
                        $enrollmentDate = $row['enrollment_date'];

                        echo '
        <tr>
            <th scope="row">' . $studentID . '</th>
            <td>' . $firstName . '</td>
            <td>' . $lastName . '</td>
            <td>' . $address . '</td>
            <td>' . $dateOfBirth . '</td>
            <td>' . $email . '</td>
            <td>' . $phone . '</td>
            <td>' . $gender . '</td>
            <td>' . $enrollmentDate . '</td>
            <td>
                <button class="btn btn-danger"><a href="student_delete.php?deleteid=' . $studentID . '" class="text-light">Delete</a></button>
                <button class="btn btn-primary mr-2"><a href="student_update.php?updateid=' . $studentID . '" class="text-light">Update</a></button>
            </td>
        </tr>';

                    }
                }
                ?>

                <a href="index.php" style="float: right;"><button type="submit" class="btn btn-primary"
                        name="home">Home</button></a>



            </tbody>
        </table>
    </div>

</body>

</html>