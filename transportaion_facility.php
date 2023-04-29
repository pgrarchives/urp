<?php
include "connect.php"; // Include your database connection file

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transportation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="transportation.php" class="text-light"> Add Transportation </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">FacilityID</th>
                    <th scope="col">FacilityName</th>
                    <th scope="col">FacilityDescription</th>
                    <th scope="col">StudentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM transportation";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $facilityID = $row['T_FacilityID'];
                        $facilityName = $row['T_FacilityName'];
                        $facilityDescription = $row['T_FacilityDescription'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $facilityID . '</th>
            <td>' . $facilityName . '</td>
            <td>' . $facilityDescription . '</td>
            <td>' . $studentID . '</td>
            
        </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>
