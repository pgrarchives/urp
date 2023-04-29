<?php
include "connect.php"; // Assuming you have a connection to the database in connect.php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Fee Payments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">PaymentID</th>
                    <th scope="col">PaymentAmount</th>
                    <th scope="col">PaymentDate</th>
                    <th scope="col">StudentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `fee payment`"; // Assuming the table name is "fee payment" with a space in between
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $paymentID = $row['PaymentID'];
                        $paymentAmount = $row['PaymentAmount'];
                        $paymentDate = $row['PaymentDate'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $paymentID . '</th>
            <td>' . $paymentAmount . '</td>
            <td>' . $paymentDate . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="feepayment_delete.php?deleteid=' . $paymentID . '" class="text-light">Delete</a></button>
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
