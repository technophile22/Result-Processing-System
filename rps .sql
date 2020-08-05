-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 03:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `batch` varchar(9) NOT NULL,
  `sem_no` int(11) NOT NULL,
  `courseno` varchar(100) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `credit` int(11) NOT NULL,
  `mid_marks` int(11) NOT NULL,
  `th_marks` int(11) NOT NULL,
  `pract_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`batch`, `sem_no`, `courseno`, `course_name`, `credit`, `mid_marks`, `th_marks`, `pract_marks`) VALUES
('2017', 1, 'BS-100C', 'Engineering Chemistry', 3, 20, 50, 30),
('2017', 1, 'BS-100E', 'Communication Skills and Personality Development', 3, 20, 50, 30),
('2017', 1, 'BS-111', 'Mathematics-I', 3, 20, 80, 0),
('2017', 1, 'CE-115', 'Engineering Drawing', 1, 20, 0, 80),
('2017', 1, 'CS-100', 'Introduction to Computer Programming and Data Structures', 3, 20, 50, 30),
('2017', 1, 'EC-100', 'Electronics and Communication', 3, 20, 50, 30),
('2017', 1, 'ME-113', 'Mechanical Engineering-I', 3, 20, 80, 0),
('2017', 1, 'ME-114', 'Workshop Practice', 1, 20, 0, 80),
('2017', 2, 'BS-100P', 'Engineering Physics', 3, 20, 50, 30),
('2017', 2, 'BS-121', 'Mathematics-II', 3, 20, 80, 0),
('2017', 2, 'CE-100', 'Engineering Mechanics', 3, 20, 50, 30),
('2017', 2, 'CE-122', 'Civil Engineering', 2, 20, 50, 30),
('2017', 2, 'EE-100', 'Electrical Engineering-I', 4, 20, 50, 30),
('2017', 2, 'ME-123', 'Machine Drawing', 1, 20, 0, 80),
('2017', 2, 'ME-124', 'Workshop Technology', 3, 20, 50, 30),
('2017', 2, 'REE-100', 'Environmental Studies and Disaster Management', 2, 20, 80, 0),
('2017', 3, 'BS - 211', 'Mathematics-III', 3, 20, 80, 0),
('2017', 3, 'CS-211', 'Digital Logic Design', 4, 20, 50, 30),
('2017', 3, 'CS-212', 'Unix and shell programming lab', 2, 0, 0, 100),
('2017', 3, 'CS-213', 'Object oriented programming with C++', 5, 20, 50, 30),
('2017', 3, 'CS-214', 'Principles of programming languages', 3, 20, 80, 0),
('2017', 3, 'EC-219', 'Analog Electronics', 3, 20, 50, 30),
('2017', 3, 'EE-212', 'Electrical Measurements and Instruments', 4, 20, 50, 30),
('2017', 4, 'BS-222', 'Discrete mathematical structure', 3, 20, 80, 0),
('2017', 4, 'CS-221', 'Computer Organization', 3, 20, 80, 0),
('2017', 4, 'CS-222', 'Data Structure', 4, 20, 50, 30),
('2017', 4, 'CS-224', 'Microprocessors', 4, 20, 50, 30),
('2017', 4, 'CS-225', 'System Software', 4, 20, 50, 30),
('2017', 4, 'EC-228', 'Communication Systems', 3, 20, 80, 0),
('2017', 5, 'CS-311', 'Theory of computation', 3, 20, 80, 0),
('2017', 5, 'CS-312', 'Java Programming', 5, 20, 50, 30),
('2017', 5, 'CS-313', 'Data communication and networks', 4, 20, 50, 30),
('2017', 5, 'CS-314', 'Computer Architecture', 3, 20, 80, 0),
('2017', 5, 'CS-315', 'Database Systems', 4, 20, 50, 30),
('2017', 5, 'EC-319', 'Pulse, Digital and wave shaping', 3, 20, 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dno` int(11) NOT NULL,
  `dname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dno`, `dname`) VALUES
(1, 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `marks_obtained`
--

CREATE TABLE `marks_obtained` (
  `roll_no` int(11) NOT NULL,
  `batch_no` varchar(9) NOT NULL,
  `SEM` int(11) NOT NULL,
  `course_no` varchar(100) NOT NULL,
  `midterm_marks` int(11) NOT NULL,
  `theory_marks` int(11) NOT NULL,
  `practical_marks` int(11) NOT NULL,
  `backlog` text NOT NULL,
  `gp` int(11) DEFAULT NULL,
  `grade_points` float(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks_obtained`
--

INSERT INTO `marks_obtained` (`roll_no`, `batch_no`, `SEM`, `course_no`, `midterm_marks`, `theory_marks`, `practical_marks`, `backlog`, `gp`, `grade_points`) VALUES
(1, '2017', 1, 'BS-100C', 20, 43, 26, 'No', 89, 8.9),
(1, '2017', 1, 'BS-100E', 15, 36, 27, 'No', 78, 7.8),
(1, '2017', 1, 'BS-111', 20, 35, 0, 'No', 55, 5.5),
(1, '2017', 1, 'CE-115', 19, 0, 63, 'No', 82, 8.2),
(1, '2017', 1, 'CS-100', 19, 30, 29, 'No', 78, 7.8),
(1, '2017', 1, 'EC-100', 18, 39, 26, 'No', 83, 8.3),
(1, '2017', 1, 'ME-113', 20, 58, 0, 'No', 78, 7.8),
(1, '2017', 1, 'ME-114', 20, 0, 71, 'No', 91, 9.1),
(1, '2017', 2, 'BS-100P', 20, 37, 27, 'No', 84, 8.4),
(1, '2017', 2, 'BS-121', 19, 67, 0, 'No', 86, 8.6),
(1, '2017', 2, 'CE-100', 15, 33, 26, 'No', 74, 7.4),
(1, '2017', 2, 'CE-122', 13, 38, 22, 'No', 73, 7.3),
(1, '2017', 2, 'EE-100', 12, 32, 27, 'No', 71, 7.1),
(1, '2017', 2, 'ME-123', 19, 0, 52, 'No', 71, 7.1),
(1, '2017', 2, 'ME-124', 20, 38, 23, 'No', 81, 8.1),
(1, '2017', 2, 'REE-100', 18, 52, 0, 'No', 70, 7.0),
(1, '2017', 3, 'BS - 211', 20, 55, 0, 'No', 75, 7.5),
(1, '2017', 3, 'CS-211', 18, 40, 28, 'No', 86, 8.6),
(1, '2017', 3, 'CS-212', 0, 72, 0, 'No', 72, 7.2),
(1, '2017', 3, 'CS-213', 13, 32, 29, 'No', 74, 7.4),
(1, '2017', 3, 'CS-214', 20, 70, 0, 'No', 90, 9.0),
(1, '2017', 3, 'EC-219', 18, 39, 24, 'No', 81, 8.1),
(1, '2017', 3, 'EE-212', 14, 42, 27, 'No', 83, 8.3),
(1, '2017', 4, 'BS-222', 19, 54, 0, 'No', 73, 7.3),
(1, '2017', 4, 'CS-221', 18, 58, 0, 'No', 76, 7.6),
(1, '2017', 4, 'CS-222', 20, 26, 30, 'No', 76, 7.6),
(1, '2017', 4, 'CS-224', 16, 35, 28, 'No', 79, 7.9),
(1, '2017', 4, 'CS-225', 16, 26, 28, 'No', 70, 7.0),
(1, '2017', 4, 'EC-228', 20, 39, 0, 'No', 59, 5.9),
(1, '2017', 5, 'CS-311', 17, 64, 0, 'No', 81, 8.1),
(1, '2017', 5, 'CS-312', 18, 42, 28, 'No', 88, 8.8),
(1, '2017', 5, 'CS-313', 19, 34, 29, 'No', 82, 8.2),
(1, '2017', 5, 'CS-314', 19, 59, 0, 'No', 78, 7.8),
(1, '2017', 5, 'CS-315', 19, 36, 30, 'No', 85, 8.5),
(1, '2017', 5, 'EC-319', 15, 46, 0, 'No', 61, 6.1),
(2, '2017', 1, 'BS-100C', 20, 50, 30, 'No', 100, 9.9),
(2, '2017', 1, 'BS-100E', 20, 34, 29, 'No', 83, 8.3),
(2, '2017', 1, 'BS-111', 20, 35, 0, 'No', 60, 6.0),
(2, '2017', 1, 'CE-115', 20, 0, 68, 'No', 88, 8.8),
(2, '2017', 1, 'CS-100', 19, 30, 29, 'No', 78, 7.8),
(2, '2017', 1, 'EC-100', 18, 39, 25, 'No', 82, 8.2),
(2, '2017', 1, 'ME-113', 20, 58, 0, 'No', 78, 7.8),
(2, '2017', 1, 'ME-114', 20, 0, 75, 'No', 95, 9.5),
(2, '2017', 2, 'BS-100P', 20, 37, 27, 'No', 84, 8.4),
(2, '2017', 2, 'BS-121', 19, 67, 0, 'No', 86, 8.6),
(2, '2017', 2, 'CE-100', 15, 33, 26, 'No', 74, 7.4),
(2, '2017', 2, 'CE-122', 13, 38, 22, 'No', 73, 7.3),
(2, '2017', 2, 'EE-100', 12, 32, 27, 'No', 71, 7.1),
(2, '2017', 2, 'ME-123', 19, 0, 52, 'No', 71, 7.1),
(2, '2017', 2, 'ME-124', 20, 38, 23, 'No', 81, 8.1),
(2, '2017', 2, 'REE-100', 18, 52, 0, 'No', 70, 7.0),
(2, '2017', 3, 'BS - 211', 20, 55, 0, 'No', 75, 7.5),
(2, '2017', 3, 'CS-211', 18, 40, 28, 'No', 86, 8.6),
(2, '2017', 3, 'CS-212', 0, 72, 0, 'No', 72, 7.2),
(2, '2017', 3, 'CS-213', 13, 32, 29, 'No', 74, 7.4),
(2, '2017', 3, 'CS-214', 20, 70, 0, 'No', 90, 9.0),
(2, '2017', 3, 'EC-219', 18, 39, 24, 'No', 81, 8.1),
(2, '2017', 3, 'EE-212', 14, 42, 27, 'No', 83, 8.3),
(2, '2017', 4, 'BS-222', 19, 54, 0, 'No', 73, 7.3),
(2, '2017', 4, 'CS-221', 18, 58, 0, 'No', 76, 7.6),
(2, '2017', 4, 'CS-222', 20, 26, 30, 'No', 76, 7.6),
(2, '2017', 4, 'CS-224', 16, 35, 28, 'No', 79, 7.9),
(2, '2017', 4, 'CS-225', 16, 26, 28, 'No', 70, 7.0),
(2, '2017', 4, 'EC-228', 20, 39, 0, 'No', 59, 5.9),
(2, '2017', 5, 'CS-311', 17, 64, 0, 'No', 81, 8.1),
(2, '2017', 5, 'CS-312', 18, 42, 28, 'No', 88, 8.8),
(2, '2017', 5, 'CS-313', 19, 34, 29, 'No', 82, 8.2),
(2, '2017', 5, 'CS-314', 19, 59, 0, 'No', 78, 7.8),
(2, '2017', 5, 'CS-315', 19, 36, 30, 'No', 85, 8.5),
(2, '2017', 5, 'EC-319', 15, 46, 0, 'No', 61, 6.1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Roll_no` int(11) NOT NULL,
  `Student_name` varchar(200) NOT NULL,
  `Father_name` varchar(200) NOT NULL,
  `Mother_name` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `dno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Roll_no`, `Student_name`, `Father_name`, `Mother_name`, `dob`, `dno`) VALUES
(1, 'Student name', 'Student father name', 'Student Mother name', '20001-01-01', 1),
(2, 'abc', 'abc', 'abc', '2000-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `Roll_no` int(11) NOT NULL,
  `Sem_no` int(11) NOT NULL,
  `SGPA` float(3,2) DEFAULT NULL,
  `OGPA` float(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`Roll_no`, `Sem_no`, `SGPA`, `OGPA`) VALUES
(1, 1, 7.78, 7.78),
(1, 2, 7.70, 7.74),
(1, 3, 8.03, 7.85),
(1, 4, 7.26, 7.70),
(1, 5, 8.04, 7.77),
(2, 1, 8.12, 8.12),
(2, 2, 7.70, 7.90),
(2, 3, 8.03, 7.95),
(2, 4, 7.26, 7.78),
(2, 5, 8.04, 7.83);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`batch`,`sem_no`,`courseno`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `marks_obtained`
--
ALTER TABLE `marks_obtained`
  ADD PRIMARY KEY (`roll_no`,`batch_no`,`SEM`,`course_no`),
  ADD KEY `roll_no` (`roll_no`),
  ADD KEY `batch_no` (`batch_no`,`SEM`,`course_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Roll_no`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD PRIMARY KEY (`Roll_no`,`Sem_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks_obtained`
--
ALTER TABLE `marks_obtained`
  ADD CONSTRAINT `marks_obtained_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `students` (`Roll_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_obtained_ibfk_2` FOREIGN KEY (`batch_no`,`SEM`,`course_no`) REFERENCES `courses` (`batch`, `sem_no`, `courseno`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`) ON UPDATE CASCADE;

--
-- Constraints for table `student_result`
--
ALTER TABLE `student_result`
  ADD CONSTRAINT `student_result_ibfk_1` FOREIGN KEY (`Roll_no`) REFERENCES `students` (`Roll_no`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
