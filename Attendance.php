<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Attendance ID</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Professor ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM attendance"; // Assuming the table name is "attendance"
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $attendanceID = $row['AttendanceID'];
                        $studentID = $row['StudentID'];
                        $professorID = $row['ProfessorID'];

                        echo '
        <tr>
            <th scope="row">' . $attendanceID . '</th>
            <td>' . $studentID . '</td>
            <td>' . $professorID . '</td>
        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
