<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="grade.php" class="text-light"> Add Grade </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">GradeID</th>
                    <th scope="col">GradeObtained</th>
                    <th scope="col">StudentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM grade";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $gradeID = $row['GradeID'];
                        $gradeObtained = $row['GradeObtained'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $gradeID . '</th>
            <td>' . $gradeObtained . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="grade_delete.php?deleteid=' . $gradeID . '" class="text-light">Delete</a></button>
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
