<?php
include 'connect.php'; // Assuming you have already included the database connection file

if (isset($_POST['submit'])) {
    $eventName = $_POST['EventName'];
    $eventDescription = $_POST['EventDescription'];
    $eventDate = $_POST['EventDate'];
    $eventType = $_POST['EventType'];
    $participants = $_POST['Participants'];
    $studentID = $_POST['StudentID'];

    $sql = "INSERT INTO event(EventName, EventDescription, EventDate, EventType, Participants, StudentID) VALUES('$eventName','$eventDescription','$eventDate','$eventType','$participants','$studentID')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo "Inserted Successfully";
        header('location:view_event.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Event</title>
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group" autocomplete="off">
                <label>Event Name</label>
                <input type="text" class="form-control" placeholder="Enter event name" name="EventName">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Event Description</label>
                <input type="text" class="form-control" placeholder="Enter event description" name="EventDescription">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Event Date</label>
                <input type="date" class="form-control" placeholder="Enter event date" name="EventDate">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Event Type</label>
                <input type="text" class="form-control" placeholder="Enter event type" name="EventType">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Participants</label>
                <input type="text" class="form-control" placeholder="Enter participants" name="Participants">
            </div>
            <div class="form-group" autocomplete="off">
                <label>Student ID</label>
                <input type="text" class="form-control" placeholder="Enter student ID" name="StudentID">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
        <a href="Event.php"><button type="submit" class="btn btn-primary" name="submit">View Existing
                data</button></a>
                <a href="index.php" style="float: right;"><button type="submit" class="btn btn-primary"
                        name="home">Home</button></a>
    </div>
</body>

</html>
