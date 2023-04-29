<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Feedback ID</th>
                    <th scope="col">Feedback Text</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Professor ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `student feedback`"; // Assuming the table name is "student feedback" with a space in between
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $feedbackID = $row['FeedbackID'];
                        $feedbackText = $row['FeedbackText'];
                        $studentID = $row['StudentID'];
                        $professorID = $row['ProfessorID'];

                        echo '
        <tr>
            <th scope="row">' . $feedbackID . '</th>
            <td>' . $feedbackText . '</td>
            <td>' . $studentID . '</td>
            <td>' . $professorID . '</td>
            <td>
                <button class="btn btn-danger"><a href="student_feedback_delete.php?deleteid=' . $feedbackID . '" class="text-light">Delete</a></button>
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
