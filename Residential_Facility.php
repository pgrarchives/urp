<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Residential Facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
            <button class="btn btn-primary my-5">
            <a href="Add_Residential.php" class="text-light"> Add Student </a>
        </button>
                <tr>
                    <th scope="col">Facility ID</th>
                    <th scope="col">Facility Name</th>
                    <th scope="col">Facility Description</th>
                    <th scope="col">Student ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `residential facility`"; // Assuming the table name is "residential_facility"
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $facilityID = $row['FacilityID'];
                        $facilityName = $row['FacilityName'];
                        $facilityDescription = $row['FacilityDescription'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $facilityID . '</th>
            <td>' . $facilityName . '</td>
            <td>' . $facilityDescription . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="residential_facility_delete.php?deleteid=' . $facilityID . '" class="text-light">Delete</a></button>
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
