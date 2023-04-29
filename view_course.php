<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="course.php" class="text-light">Add Course </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">CourseID</th>
                    <th scope="col">CourseName</th>
                    <th scope="col">CourseDescription</th>
                    <th scope="col">CourseCredits</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * from course ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $CourseID = $row['CourseID'];
                        $CourseName = $row['CourseName'];
                        $CourseDescription = $row['CourseDescription'];
                        $CourseCredits = $row['CourseCredits'];
                        echo '
                        <tr>
                            <th scope="row">' . $CourseID . '</th>
                            <td>' . $CourseName . '</td>
                            <td>' . $CourseDescription . '</td>
                            <td>' . $CourseCredits . '</td>
                            <td>
                                <button class="btn btn-danger"><a href="course_delete.php?deleteid='.$CourseID.'" class="text-light">Delete</a></button>
                                <button class="btn btn-primary mr-2"><a href="course_update.php?updateid=' . $CourseID . '" class="text-light">Update</a></button>
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

