-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2023 at 01:02 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdb_urp`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `Assignment ID` int NOT NULL AUTO_INCREMENT,
  `Assignment Name` varchar(100) DEFAULT NULL,
  `Assignment Description` varchar(100) DEFAULT NULL,
  `Maximum Marks` int DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Assignment ID`),
  KEY `FK_student_assgn` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `Attendance ID` int NOT NULL AUTO_INCREMENT,
  `Student ID` int DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`Attendance ID`),
  KEY `FK_student_atten` (`Student ID`),
  KEY `FK_prof_atten` (`Professor ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class schedule`
--

DROP TABLE IF EXISTS `class schedule`;
CREATE TABLE IF NOT EXISTS `class schedule` (
  `Class Schedule ID` int NOT NULL AUTO_INCREMENT,
  `Class Start Time` time DEFAULT NULL,
  `Class End Time` time DEFAULT NULL,
  `Class Day` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`Class Schedule ID`),
  KEY `FK_prof_cs` (`Professor ID`),
  KEY `FK_stud_cs` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `CourseID` int NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(100) DEFAULT NULL,
  `CourseDescription` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`CourseID`),
  KEY `FK_stu_course` (`Student ID`),
  KEY `FK_prof_course` (`Professor ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course requirement`
--

DROP TABLE IF EXISTS `course requirement`;
CREATE TABLE IF NOT EXISTS `course requirement` (
  `Course Requirement ID` int NOT NULL AUTO_INCREMENT,
  `Course Requirement Description` varchar(100) DEFAULT NULL,
  `Course ID` int DEFAULT NULL,
  PRIMARY KEY (`Course Requirement ID`),
  KEY `FK_course_courseReq` (`Course ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Department ID` int NOT NULL AUTO_INCREMENT,
  `DeptName` varchar(100) DEFAULT NULL,
  `DeptDescription` varchar(100) DEFAULT NULL,
  `DeptHead` varchar(100) DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`Department ID`),
  KEY `FK_prof_dept` (`Professor ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department ID`, `DeptName`, `DeptDescription`, `DeptHead`, `Professor ID`) VALUES
(1, 'cse', 'computer', 'gagan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_requirement`
--

DROP TABLE IF EXISTS `department_requirement`;
CREATE TABLE IF NOT EXISTS `department_requirement` (
  `Department Requirement_ID` int NOT NULL AUTO_INCREMENT,
  `Department Req Description` varchar(100) DEFAULT NULL,
  `Min GPA` float DEFAULT NULL,
  `Department ID` int DEFAULT NULL,
  PRIMARY KEY (`Department Requirement_ID`),
  KEY `FK_dept_deptReq` (`Department ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dining hall`
--

DROP TABLE IF EXISTS `dining hall`;
CREATE TABLE IF NOT EXISTS `dining hall` (
  `Hall ID` int NOT NULL AUTO_INCREMENT,
  `Hall Description` varchar(100) DEFAULT NULL,
  `Hall Name` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Hall ID`),
  KEY `FK_student_dining` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `Event ID` int NOT NULL AUTO_INCREMENT,
  `Event Name` varchar(100) DEFAULT NULL,
  `Event Description` varchar(100) DEFAULT NULL,
  `Event Date` date DEFAULT NULL,
  `Event Type` varchar(100) DEFAULT NULL,
  `Participants` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Event ID`),
  KEY `FK_student_event` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee payment`
--

DROP TABLE IF EXISTS `fee payment`;
CREATE TABLE IF NOT EXISTS `fee payment` (
  `Payment ID` int NOT NULL AUTO_INCREMENT,
  `Payment Amount` int DEFAULT NULL,
  `Payment Date` date DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Payment ID`),
  KEY `FK_stu_Fee` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `Grade ID` int NOT NULL AUTO_INCREMENT,
  `Grade Obtained` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Grade ID`),
  KEY `FK_student_grade` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `Professor ID` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Professor ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`Professor ID`, `first_name`, `last_name`, `address`, `date_of_birth`, `email`, `phone`, `gender`) VALUES
(1, 'hari', 'vamsi', 'hickory', '2023-04-06', 'h@gmail.com', 132, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `residential facility`
--

DROP TABLE IF EXISTS `residential facility`;
CREATE TABLE IF NOT EXISTS `residential facility` (
  `Facility ID` int NOT NULL AUTO_INCREMENT,
  `Facility Name` varchar(100) DEFAULT NULL,
  `Facility Description` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`Facility ID`),
  KEY `FK_stud_resFac` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `Section ID` int NOT NULL AUTO_INCREMENT,
  `Section Name` varchar(100) DEFAULT NULL,
  `Section Description` varchar(100) DEFAULT NULL,
  `Semester` int DEFAULT NULL,
  `Course ID` int DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`Section ID`),
  KEY `FK_couse_sec` (`Course ID`),
  KEY `FK_student_sec` (`Student ID`),
  KEY `FK_prof_sec` (`Professor ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Student ID` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  PRIMARY KEY (`Student ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student ID`, `first_name`, `last_name`, `address`, `date_of_birth`, `email`, `phone`, `gender`, `enrollment_date`) VALUES
(1, 'hari', 'vamsi', 'elm street', '2222-02-16', 'h@gmail.com', 567, 'male', '2023-04-29'),
(2, 'hari', 'vamsi', 'elm street', '2222-02-16', 'h@gmail.com', 567, 'male', '2023-04-29'),
(3, 'akhila', 'B', 'charlotte street', '2001-10-12', 'bomm@outlook.com', 456789235, '', '2009-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `student feedback`
--

DROP TABLE IF EXISTS `student feedback`;
CREATE TABLE IF NOT EXISTS `student feedback` (
  `Feedback ID` int NOT NULL AUTO_INCREMENT,
  `Feedback Text` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  `Professor ID` int DEFAULT NULL,
  PRIMARY KEY (`Feedback ID`),
  KEY `FK_stud_feedback` (`Student ID`),
  KEY `FK_prof_feedback` (`Professor ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

DROP TABLE IF EXISTS `transportation`;
CREATE TABLE IF NOT EXISTS `transportation` (
  `T_Facility ID` int NOT NULL AUTO_INCREMENT,
  `T_Facility Name` varchar(100) DEFAULT NULL,
  `T_Facility Description` varchar(100) DEFAULT NULL,
  `Student ID` int DEFAULT NULL,
  PRIMARY KEY (`T_Facility ID`),
  KEY `FK_student_trans` (`Student ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `FK_student_assgn` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `FK_prof_atten` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_student_atten` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `class schedule`
--
ALTER TABLE `class schedule`
  ADD CONSTRAINT `FK_prof_cs` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_stud_cs` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_prof_course` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_stu_course` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `course requirement`
--
ALTER TABLE `course requirement`
  ADD CONSTRAINT `FK_course_courseReq` FOREIGN KEY (`Course ID`) REFERENCES `course` (`CourseID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FK_prof_dept` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `department_requirement`
--
ALTER TABLE `department_requirement`
  ADD CONSTRAINT `FK_dept_deptReq` FOREIGN KEY (`Department ID`) REFERENCES `department` (`Department ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `dining hall`
--
ALTER TABLE `dining hall`
  ADD CONSTRAINT `FK_student_dining` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_student_event` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `fee payment`
--
ALTER TABLE `fee payment`
  ADD CONSTRAINT `FK_stu_Fee` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `FK_student_grade` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `residential facility`
--
ALTER TABLE `residential facility`
  ADD CONSTRAINT `FK_stud_resFac` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `FK_couse_sec` FOREIGN KEY (`Course ID`) REFERENCES `course` (`CourseID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_prof_sec` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_student_sec` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `student feedback`
--
ALTER TABLE `student feedback`
  ADD CONSTRAINT `FK_prof_feedback` FOREIGN KEY (`Professor ID`) REFERENCES `professor` (`Professor ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_stud_feedback` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `FK_student_trans` FOREIGN KEY (`Student ID`) REFERENCES `student` (`Student ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
