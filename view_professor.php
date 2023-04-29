<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Professor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="professor.php" class="text-light"> Add Professor </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ProfessorID</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Address</th>
                    <th scope="col">DateOfBirth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Professor";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $profID = $row['ProfessorID'];
                        $firstName = $row['first_name'];
                        $lastName = $row['last_name'];
                        $address = $row['address'];
                        $dateOfBirth = $row['date_of_birth'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];

                        echo '
        <tr>
            <th scope="row">' . $profID . '</th>
            <td>' . $firstName . '</td>
            <td>' . $lastName . '</td>
            <td>' . $address . '</td>
            <td>' . $dateOfBirth . '</td>
            <td>' . $email . '</td>
            <td>' . $phone . '</td>
            <td>' . $gender . '</td>
            <td>
                <button class="btn btn-danger"><a href="professor_delete.php?deleteid=' . $profID . '" class="text-light">Delete</a></button>
                <br>
                <button class="btn btn-primary mr-2"><a href="student_update.php?updateid=' . $profID . '" class="text-light">Update</a></button>
            </td>
        </tr>';
                    }
                }
                ?>

<a href="index.php" style="float: right;"><button type="submit" class="btn btn-primary" name="home">Home</button></a>

            </tbody>
        </table>
    </div>

</body>

</html>
