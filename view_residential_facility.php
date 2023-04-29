<?php
include "connect.php"; // Include your database connection file

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Residential Facility</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="residential_facility.php" class="text-light"> Add Residential Facility </a>
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
                $sql = "SELECT * FROM 'residential facility'";
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
                <button class="btn btn-danger"><a href="residential_facility_update.php?deleteid=' . $facilityID . '" class="text-light">Update</a></button>
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
