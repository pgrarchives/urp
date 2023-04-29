<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Dining Hall</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Hall ID</th>
                    <th scope="col">Hall Description</th>
                    <th scope="col">Hall Name</th>
                    <th scope="col">Student ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `Dining Hall`"; // Assuming the table name is "Dining Hall" with a space in between
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $hallID = $row['HallID'];
                        $hallDescription = $row['HallDescription'];
                        $hallName = $row['HallName'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $hallID . '</th>
            <td>' . $hallDescription . '</td>
            <td>' . $hallName . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="dininghall_delete.php?deleteid=' . $hallID . '" class="text-light">Delete</a></button>
            </td>
        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
