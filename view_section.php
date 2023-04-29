<?php
include "connect.php"; // include your database connection file

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="section.php" class="text-light">Add Section</a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">SectionID</th>
                    <th scope="col">SectionName</th>
                    <th scope="col">SectionDescription</th>
                    <th scope="col">Semester</th>
                    <th scope="col">CourseID</th>
                    <th scope="col">StudentID</th>
                    <th scope="col">ProfessorID</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * from section ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $SectionID = $row['SectionID'];
                        $SectionName = $row['SectionName'];
                        $SectionDescription = $row['SectionDescription'];
                        $Semester = $row['Semester'];
                        $CourseID = $row['CourseID'];
                        $StudentID = $row['StudentID'];
                        $ProfessorID = $row['ProfessorID'];
                        echo '
                        <tr>
                            <th scope="row">' . $SectionID . '</th>
                            <td>' . $SectionName . '</td>
                            <td>' . $SectionDescription . '</td>
                            <td>' . $Semester . '</td>
                            <td>' . $CourseID . '</td>
                            <td>' . $StudentID . '</td>
                            <td>' . $ProfessorID . '</td>
                            <td>
                                <button class="btn btn-danger"><a href="section_delete.php?deleteid=' . $SectionID . '" class="text-light">Delete</a></button>
                                <button class="btn btn-primary mr-2"><a href="student_update.php?updateid=' . $SectionID . '" class="text-light">Update</a></button>
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
