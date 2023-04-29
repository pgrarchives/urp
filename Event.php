<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="view_event.php" class="text-light"> Add Event </a>
        </button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">EventID</th>
                    <th scope="col">EventName</th>
                    <th scope="col">EventDescription</th>
                    <th scope="col">EventDate</th>
                    <th scope="col">EventType</th>
                    <th scope="col">Participants</th>
                    <th scope="col">StudentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM event";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $eventID = $row['EventID'];
                        $eventName = $row['EventName'];
                        $eventDescription = $row['EventDescription'];
                        $eventDate = $row['EventDate'];
                        $eventType = $row['EventType'];
                        $participants = $row['Participants'];
                        $studentID = $row['StudentID'];

                        echo '
        <tr>
            <th scope="row">' . $eventID . '</th>
            <td>' . $eventName . '</td>
            <td>' . $eventDescription . '</td>
            <td>' . $eventDate . '</td>
            <td>' . $eventType . '</td>
            <td>' . $participants . '</td>
            <td>' . $studentID . '</td>
            <td>
                <button class="btn btn-danger"><a href="event_delete.php?deleteid=' . $eventID . '" class="text-light">Delete</a></button>
                <button class="btn btn-danger"><a href="event_update.php?deleteid=' . $eventID . '" class="text-light">Update</a></button>
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
