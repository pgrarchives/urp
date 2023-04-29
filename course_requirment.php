<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course Requirements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Course Requirement ID</th>
                    <th scope="col">Course Requirement Description</th>
                    <th scope="col">Course ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `course requirement`"; // Assuming the table name is "course requirement" with a space in between
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $courseRequirementID = $row['CourseRequirementID'];
                        $courseRequirementDescription = $row['CourseRequirementDescription'];
                        $courseID = $row['CourseID'];

                        echo '
        <tr>
            <th scope="row">' . $courseRequirementID . '</th>
            <td>' . $courseRequirementDescription . '</td>
            <td>' . $courseID . '</td>
            <td>
                <button class="btn btn-danger"><a href="course_requirement_delete.php?deleteid=' . $courseRequirementID . '" class="text-light">Delete</a></button>
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
