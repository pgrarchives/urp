<?php
include "connect.php"; // Include your database connection file
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="add_department.php" class="text-light"> Add Department </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">DeptID</th>
                    <th scope="col">DeptName</th>
                    <th scope="col">DeptDescription</th>
                    <th scope="col">DeptHead</th>
                    <th scope="col">proff_ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from Department";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dept_id = $row['DepartmentID'];
                        $dept_name = $row['DeptName'];
                        $dept_description = $row['DeptDescription'];
                        $dept_head = $row['DeptHead'];
                        $prof_id = $row['ProfessorID'];
                        echo '
        <tr>
            <th scope="row">' . $dept_id . '</th>
            <td>' . $dept_name . '</td>
            <td>' . $dept_description . '</td>
            <td>' . $dept_head . '</td>
            <td>' . $prof_id . '</td>
        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>