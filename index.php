<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Resource Planning</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">University Resource Planning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Student Section
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="student.php">Add Student Details</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="department.php">Department</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="course.php">Course</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="degree.php">Degree</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="student.php">Student</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="professor.php">Professor</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="department.php">Department</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="course.php">Course</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="dining_hall.php">Dining Services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="fees_payment.php">Fees Payment</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="grade.php">Grade</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="student_feedback.php">Student Feedback</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="section.php">Section</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="transportaion_facility.php">Transportation</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="course_requirment.php">Course Requirement</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="department_requirment.php">Department Requirement</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Residential_Facility.php">Residential Facility</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Event.php">Event</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Assignment.php">Assignment</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Attendance.php">Attendance</a>
          </div>
        </li>
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="about.php">About US</a>
        </li>
        </li>
        <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Images/campus1.jpeg" alt="">
      </div>
      <!-- <div class="carousel-item">
        <img class="d-block w-100" src="Images/campus2.jpeg" alt="Second slide">
      </div> -->
      <div class="carousel-item">
        <img class="d-block w-100" src="Images/campus3.jpeg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Images/campus4.jpeg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/tower.jpeg" alt="BLB" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h3 class="display-6"> University Of North Texas</h3>
          <p class="py-3">As one of the nation's largest universities, we offer 113 bachelor's, 94 master's and 37
            doctoral degree programs.
            By providing access, welcoming diversity and strengthening our collaborations with our many educational,
            business and community partners,
            UNT's faculty and staff work each day to prepare students for the challenges they will meet in our changing
            world.
          </p>
          <a href="about.php" class="btn btn-success"> More about us </a> -->
  <!-- </div>
      </div>
    </div>
  </section> -->
  <footer>
    <p class="p-3 bg-dark text-white text-center">Group 24 @copyright</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>