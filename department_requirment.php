<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department Requirements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Department Requirement ID</th>
                    <th scope="col">Department Requirement Description</th>
                    <th scope="col">Minimum GPA</th>
                    <th scope="col">Department ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `department_requirement`"; // Assuming the table name is "Department Requirement" with a space in between
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $departmentRequirementID = $row['DepartmentRequirementID'];
                        $departmentReqDescription = $row['DepartmentReqDescription'];
                        $minGPA = $row['MinGPA'];
                        $departmentID = $row['DepartmentID'];

                        echo '
        <tr>
            <th scope="row">' . $departmentRequirementID . '</th>
            <td>' . $departmentReqDescription . '</td>
            <td>' . $minGPA . '</td>
            <td>' . $departmentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="department_requirement_delete.php?deleteid=' . $departmentRequirementID . '" class="text-light">Delete</a></button>
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
