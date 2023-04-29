<?php
include "connect.php"; // Assuming you have a connection to your MySQL database

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="add_assignment.php" class="text-light"> Add Assignment </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">AssignmentID</th>
                    <th scope="col">AssignmentName</th>
                    <th scope="col">AssignmentDescription</th>
                    <th scope="col">MaximumMarks</th>
                    <th scope="col">StudentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM assignment";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $assignmentID = $row['AssignmentID'];
                        $assignmentName = $row['AssignmentName'];
                        $assignmentDescription = $row['AssignmentDescription'];
                        $maximumMarks = $row['MaximumMarks'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $assignmentID . '</th>
            <td>' . $assignmentName . '</td>
            <td>' . $assignmentDescription . '</td>
            <td>' . $maximumMarks . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="delete_assignment.php?deleteid=' . $assignmentID . '" class="text-light">Delete</a></button>
                <button class="btn btn-danger"><a href="assignment_update.php?deleteid=' . $assignmentID . '" class="text-light">Update</a></button>
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
