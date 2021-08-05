-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2011 at 08:08 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oams`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment_marks`
--

CREATE TABLE IF NOT EXISTS `assignment_marks` (
  `asmk_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `semester` varchar(5) NOT NULL,
  `session` int(5) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `assignment_no` int(10) NOT NULL,
  `assignment_marks` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment_marks`
--

INSERT INTO `assignment_marks` (`asmk_id`, `class`, `semester`, `session`, `subject`, `rollno`, `assignment_no`, `assignment_marks`) VALUES
(1, 'Mcs(E)', '4th', 2009, 'Probability & Statistics', 'mcs-85', 1, 15),
(1, 'Mcs(E)', '4th', 2009, 'Probability & Statistics', 'mcs-85', 1, 15),
(0, 'Bscs', '1st', 2000, 'Introduction to computing', 'MCS-09-54', 1, 25),
(0, 'Mcs(E)', '4th', 2009, 'Electronic', 'mcs-85', 1, 20),
(0, 'Mcs(E)', '4th', 2009, 'Probability & Statistics', 'MCS-09-54', 1, 20),
(0, 'Bscs', '1st', 2000, 'Probability & Statistics', 'MCS-09-54', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `attendance_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `semester` varchar(4) NOT NULL,
  `session` int(5) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`attendance_id`, `class`, `semester`, `session`, `subject`, `rollno`, `date`, `status`) VALUES
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-09-09', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-54', '2011-10-20', 'present'),
(0, 'Mcs(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-54', '2011-10-20', 'present'),
(0, 'Mcs(E)', '4th', 2009, 'Probability & Statistics', 'MCS-09-54', '2011-10-20', 'present'),
(0, 'BSCS', '1st', 2012, 'Artificial Intelligence', 'BSCS-12-54', '2011-10-20', 'present'),
(0, 'BSCS', '1st', 2000, 'Artificial Intelligence', 'BSCS-12-54', '2011-10-21', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-11-25', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-11-26', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Electronic', 'MCS-09-85', '2011-11-27', 'absent'),
(0, 'bscs', '1st', 2009, 'Artificial Intelligence', 'BCS-09-03', '2011-10-20', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-13', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-16', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-16', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-16', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-20', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-20', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-13', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-10', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '3rd', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'present'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', '2011-01-01', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `bcs_mcs`
--

CREATE TABLE IF NOT EXISTS `bcs_mcs` (
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `class` text NOT NULL,
  `rollno` varchar(11) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `session` int(5) NOT NULL,
  `squestion` text NOT NULL,
  `sanswer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcs_mcs`
--

INSERT INTO `bcs_mcs` (`name`, `fname`, `email`, `password`, `class`, `rollno`, `semester`, `session`, `squestion`, `sanswer`) VALUES
('MUHAMMAD AZAM', 'M.Khan', 'azamkhan@gmail.com', 'YWRtaW4=', 'Mcs(E)', 'MCS(E)-09-7', '4th', 2008, 'your favourite place?', 'multan'),
('Saqib Sattar', 'Abdul Sattar', 'saqibsattar86@yahoo.com', 'c2FxaWI=', 'MCS(E)', 'MCS-09-85', '4th', 2009, 'what is your pet name?', 'me'),
('FAHAD SUBHAN', 'ABDUL SUBHAN', 'fahadsubhan@hotmail.com', 'YWRtaW4=', 'Mcs(E)', 'MCS-09-54', '4th', 2009, 'what is your pet name?', 'me'),
('MUHAMMAD ARFAN', 'FAIZ RASOOL', 'arfan@yahoo.com', 'YXJmYW4=', 'MCS(E)', 'MCS-09-75', '4th', 2009, 'what is your pet name?', 'me'),
('Amir Khan', 'Abdul rasheed', 'amir@yahoo.com', 'YW1pcg==', 'MCS(E)', 'MCS-09-90', '4th', 2009, 'what is your pet name?', 'me'),
('Aqib Sattar', 'Abdul Sattar', 'aqibsattar@yahoo.com', 'YXFpYg==', 'MCS(E)', 'MCS-10-90', '1st', 2011, 'what is your pet name?', 'aqib'),
('Umair Shafqat', 'Muhammad Shafqat', 'umairshafqat@yahoo.com', 'dW1haXI=', 'BSCS', 'BCS-09-03', '1st', 2009, 'what is your pet name?', 'me'),
('Muhmmad Arfan', 'Faiz Rasool', 'irfan@yahoo.com', 'YXJmYW4=', 'MCS(E)', 'MCS-09-55', '4th', 2009, 'what is your pet name?', 'me'),
('fasial', 'khan', 'fasial@yahoo.com', 'ZmFzaWFs', 'MCS(E)', 'MCS-09-67', '4th', 2009, 'what is your pet name?', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `classes_timetable`
--

CREATE TABLE IF NOT EXISTS `classes_timetable` (
  `timetable_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `semester` varchar(8) NOT NULL,
  `session` int(4) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `teacher1` text NOT NULL,
  `day1` text NOT NULL,
  `timing1` time NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `teacher2` text NOT NULL,
  `day2` text NOT NULL,
  `timing2` time NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `teacher3` text NOT NULL,
  `day3` text NOT NULL,
  `timing3` time NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `teacher4` text NOT NULL,
  `day4` text NOT NULL,
  `timing4` time NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `teacher5` text NOT NULL,
  `day5` text NOT NULL,
  `timing5` time NOT NULL,
  `sub6` text NOT NULL,
  `teacher6` text NOT NULL,
  `day6` text NOT NULL,
  `timing6` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes_timetable`
--

INSERT INTO `classes_timetable` (`timetable_id`, `class`, `semester`, `session`, `sub1`, `teacher1`, `day1`, `timing1`, `sub2`, `teacher2`, `day2`, `timing2`, `sub3`, `teacher3`, `day3`, `timing3`, `sub4`, `teacher4`, `day4`, `timing4`, `sub5`, `teacher5`, `day5`, `timing5`, `sub6`, `teacher6`, `day6`, `timing6`) VALUES
(0, 'BSCS', '1st', 2012, 'Data Ware Housing', 'Mr.Israr Hanif', 'Monday', '09:00:00', 'Human Computer Intraction', 'Mr.Ghulam Hussain', 'Tuesday', '09:00:00', 'Computer Architecture', 'Ms.Humaira Afzal', 'Wednesday', '09:00:00', 'Analysis of Algorithem', 'Mr.Amjad Rehman Khan', 'Thursday', '12:00:00', 'Principle of Marketing', 'Mr.Aziz Akhtar', 'Friday', '02:30:00', 'System Programming', 'Dr.Aman Ullah Khan', 'Friday', '04:00:00'),
(0, 'BSCS', '1st', 2009, 'Electronic', 'Mr.Amjad Rehman Khan', 'Monday', '09:00:00', 'Philosophy', 'Mr.Minhaj Ahmad Khan', 'Tuesday', '09:00:00', 'Multivariable Calculus', 'Dr.Asghar Alli', 'Wednesday', '09:00:00', 'Differential Equation', 'Ms.Ammara Anjum Khan', 'Thursday', '09:00:00', 'Discrete Structure', 'Dr.Asghar Alli', 'Friday', '09:00:00', 'Communication skills', 'Mr.Shahid Farid', 'Friday', '02:00:00'),
(0, 'MCS(E)', '3rd', 2010, 'Computer Org & assembly', 'Ms. Humaira Afzal', 'Monday', '01:30:00', 'Databases System', 'Mr.Israr Hanif', 'Tuesday', '03:00:00', 'Computer Networking', 'Mr.Ahmad Karim', 'Wednesday', '03:00:00', 'Web Engineering', 'Ms.Sidra', 'Thursday', '03:00:00', 'Digital & Logical Design', 'Mr.Tariq', 'Friday', '03:00:00', 'Software Engineering', 'Mr.Shahid Farid', 'Friday', '04:00:00'),
(0, 'MCS(M)', '3rd', 2010, 'Databases System', 'Mr.Israr Hanif', 'Monday', '08:00:00', 'Software Engineering', 'Mr.Shahid Farid', 'Monday', '09:00:00', 'Computer Org & assembly', 'Ms.Faryal', 'Monday', '11:30:00', 'Data Structure & Algorithm', 'Mr.Tahir Rashid', 'Tuesday', '08:00:00', 'Web Engineering', 'Mr.Nauman Ch', 'Wednesday', '09:30:00', 'Computer Networking', 'Mr.Ahmad Salman', 'Thursday', '11:00:00'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'Mr.Ahmad Karim', 'Monday', '00:00:12', 'Networking', 'Mr.Aamir Raza', 'Monday-Tuesday', '00:01:21', 'System Programming', 'Dr. Qaisar Rasool', 'Wednesday', '00:04:25', 'Visual Programming', 'Mr.Ahmad Tisman Pasha', 'Monday', '00:04:56', 'Financial Accounting', 'Mr.Ahmad Salman', 'Monday-Tuesday', '00:00:46', 'Technical & Business Writing', 'Dr.Aman Ullah Khan', 'Wednesday', '00:04:56'),
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'Dr.Aman Ullah Khan', 'Monday', '09:00:00', 'System Programming', 'Dr.Aman Ullah Khan', 'Tuesday', '09:00:00', 'Network Security', 'Mr.Ahmad Salman', 'Monday-Tuesday', '11:00:00', 'Visual Programming', 'Mr.Aamir Raza', 'Wednesday', '09:00:00', 'Compiler Construction', 'Mr.Muzafar Hameed', 'Wednesday-Thursday', '11:00:00', '-select subject-', 'Mr.Ahmad Karim', 'Friday', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clerk_login`
--

CREATE TABLE IF NOT EXISTS `clerk_login` (
  `clerk_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `squestion` text NOT NULL,
  `sanswer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk_login`
--

INSERT INTO `clerk_login` (`clerk_id`, `username`, `name`, `email`, `password`, `squestion`, `sanswer`) VALUES
(1, 'admin@yahoo.com', 'Saqib Sattar', 'admin@yahoo.com', 'admin', 'what is your pet name?\r\n', 'saqib'),
(2, 'admin1@yahoo.com', 'saqib1', 'admin1@yahoo.com', 'admin1', 'what is your pet name?', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `datesheet`
--

CREATE TABLE IF NOT EXISTS `datesheet` (
  `datesheet_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `semester` varchar(5) NOT NULL,
  `session` int(4) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `day1` date NOT NULL,
  `timing1` time NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `day2` date NOT NULL,
  `timing2` time NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `day3` date NOT NULL,
  `timing3` time NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `day4` date NOT NULL,
  `timing4` time NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `day5` date NOT NULL,
  `timing5` time NOT NULL,
  `sub6` varchar(50) NOT NULL,
  `day6` date NOT NULL,
  `timing6` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`datesheet_id`, `class`, `semester`, `session`, `sub1`, `day1`, `timing1`, `sub2`, `day2`, `timing2`, `sub3`, `day3`, `timing3`, `sub4`, `day4`, `timing4`, `sub5`, `day5`, `timing5`, `sub6`, `day6`, `timing6`) VALUES
(1, 'BSCS', '1st', 2009, 'Databse System', '2011-10-17', '09:00:00', 'Operating System', '2011-10-18', '09:00:00', 'Fincancial Accounting', '2011-10-19', '09:00:00', 'Data Strusture & Algorithm', '2011-10-20', '09:00:00', 'Object Oriented Programming', '2011-10-21', '09:00:00', 'Bussiness Communication', '2011-10-24', '09:00:00'),
(0, 'MCS(E)', '4th', 2009, 'Computer Org & assembly', '2011-10-01', '01:30:00', 'Databases System', '2011-10-02', '09:00:00', 'Software Engineering', '2011-10-03', '04:00:00', 'Computer Architecture', '2011-10-04', '02:00:00', 'Web Engineering', '2011-10-05', '01:00:00', 'Digital & Logical Design', '2011-10-06', '01:00:00'),
(0, 'BSCS', '1st', 2001, 'Probability & Statistics', '2011-10-21', '09:00:00', 'Electronic', '2011-10-22', '09:00:00', 'Introduction to computing', '2011-10-23', '09:00:00', 'Communication skills', '2011-10-24', '09:00:00', 'Calculus & Analytical Geometry', '2011-10-25', '09:00:00', 'Calculus & Analytical Geometry', '2011-10-26', '09:00:00'),
(0, 'Bscs', '1st', 2001, 'Probability & Statistics', '2011-10-21', '09:00:00', 'Electronic', '2011-10-22', '09:00:00', 'Introduction to computing', '2011-10-23', '09:00:00', 'Communication skills', '2011-10-24', '09:00:00', 'Calculus & Analytical Geometry', '2011-10-25', '09:00:00', 'Calculus & Analytical Geometry', '2011-10-26', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE IF NOT EXISTS `student_result` (
  `result_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `semester` varchar(5) NOT NULL,
  `session` int(5) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `mid_marks` int(3) NOT NULL,
  `final_marks` int(3) NOT NULL,
  `sessional_marks` int(3) NOT NULL,
  `total` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`result_id`, `class`, `semester`, `session`, `subject`, `rollno`, `mid_marks`, `final_marks`, `sessional_marks`, `total`) VALUES
(0, 'MCS(E)', '4th', 2009, 'Artificial Intelligence', 'MCS-09-85', 20, 40, 15, 75),
(0, 'BSCS', '1st', 2009, 'Electronic', 'BCS-09-03', 20, 45, 15, 70),
(0, 'BSCS', '1st', 2002, 'Probability & Statistics', 'MCS-09-54', 15, 20, 40, 15),
(0, 'MCS(E)', '4th', 2009, 'System Programming', 'MCS-09-85', 20, 40, 15, 75);

-- --------------------------------------------------------

--
-- Table structure for table `student_upload_assignment`
--

CREATE TABLE IF NOT EXISTS `student_upload_assignment` (
  `upload_id` int(11) NOT NULL,
  `class` varchar(45) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `session` int(5) NOT NULL,
  `roll_no` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `assignment_no` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `submission_date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `location` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_upload_assignment`
--

INSERT INTO `student_upload_assignment` (`upload_id`, `class`, `semester`, `session`, `roll_no`, `subject`, `title`, `assignment_no`, `start_date`, `submission_date`, `name`, `type`, `size`, `location`) VALUES
(0, 'BSCS', '1st', 2009, 'BCS-09-03', 'Probability & Statistics', 'asd', 1, '2011-10-20', '2011-10-21', '2065497-AbdullahQ.pdf', 'application/pdf', 30953, 'assignment_answer/2065497-AbdullahQ.pdf'),
(0, 'MCS(E)', '4th', 2009, 'MCS-09-85', 'Artificial Intelligence', 'class assignment', 1, '2011-10-20', '2011-10-21', 'Building-Self-Confidence.pdf', 'application/pdf', 1392618, 'assignment_answer/Building-Self-Confidence.pdf'),
(0, 'MCS(E)', '4th', 2009, 'MCS-09-85', 'Networking', 'Digital Networking', 1, '2011-10-24', '2011-10-25', 'StudentManagementVision.pdf', 'application/pdf', 231446, 'assignment_answer/StudentManagementVision.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_info`
--

CREATE TABLE IF NOT EXISTS `subjects_info` (
  `SubjectId` int(90) NOT NULL AUTO_INCREMENT,
  `sub_name` text NOT NULL,
  `class` text NOT NULL,
  `credit_hours` int(3) NOT NULL,
  PRIMARY KEY (`SubjectId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `subjects_info`
--

INSERT INTO `subjects_info` (`SubjectId`, `sub_name`, `class`, `credit_hours`) VALUES
(1, 'Probability & Statistics', 'BSCS,MCS', 30),
(2, 'Electronic', 'BSCS', 30),
(3, 'Introduction to computing', 'BSCS,MCS', 30),
(4, 'Communication skills', 'BSCS', 30),
(5, 'Calculus & Analytical Geometry', 'BSCS', 30),
(6, 'Philosophy', 'BSCS', 30),
(7, 'Computer Programming with C++', 'BSCS,MCS', 30),
(9, 'Multivariable Calculus', 'BSCS', 30),
(10, 'Discrete Structure', 'BSCS,MCS', 30),
(11, 'Digital & Logical Design', 'BSCS,MCS', 30),
(12, 'Pak-Islamic Ethic', 'BSCS', 30),
(13, 'Economic', 'BSCS', 30),
(14, 'object oriented Programming', 'BSCS,MCS', 30),
(15, 'Data Communication', 'BSCS,MCS', 30),
(16, 'Data Structure & Algorithm', 'BSCS,MCS', 30),
(17, 'Financial Accounting', 'BSCS,MCS', 30),
(18, 'Differential Equation', 'BSCS', 30),
(19, 'Computer Org & assembly', 'BSCS,MCS', 30),
(20, 'Operating System', 'BSCS,MCS', 30),
(21, 'Introduction to Software Development', 'BSCS,MCS', 30),
(22, 'Marketing', 'BSCS', 30),
(23, 'Numerical & Symbolic computing', 'BSCS', 30),
(24, 'Databases System', 'BSCS,MCS', 30),
(25, 'Web Engineering', 'BSCS,MCS', 30),
(26, 'Financial Mangement', 'BSCS', 30),
(27, 'Artificial Intelligence ', 'BSCS,MCS', 30),
(28, 'Computer Networking', 'BSCS', 30),
(29, 'System Programming', 'MCS', 30),
(30, 'Principles of Marketing', 'BSCS', 30),
(31, 'Analysis of Algorithm', 'BSCS', 30),
(32, 'Computer Architecture', 'BSCS,MCS', 30),
(33, 'Human Computer Interaction', 'BSCS', 30),
(34, 'Data ware Housing', 'BSCS', 30),
(35, 'Theory of Autometa', 'BSCS,MCS', 30),
(36, 'Computer Graphics', 'BSCS', 30),
(37, 'Compiler Construction', 'BSCS,MCS', 30),
(38, 'English Comprehension ', 'BSCS', 30),
(39, 'Physics', 'BSCS', 30),
(40, 'Visual Programming', 'BSCS,MCS', 30),
(41, 'Network Security', 'MCS', 30),
(42, 'Software Engineering', 'BSCS,MCS', 30),
(43, 'Business Communication', 'MCS', 30),
(46, 'Quantitative Techniques for Business ', 'BSCS', 30),
(47, 'Software Engineering-II', 'BSCS,MCS', 30),
(48, 'Mobile Communication', 'BSCS,MCS', 30),
(50, 'Java', 'BSCS,MCS', 30);

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE IF NOT EXISTS `teachers_info` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` text NOT NULL,
  `status` text NOT NULL,
  `teacher_type` text NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`teacher_id`, `teacher_name`, `status`, `teacher_type`) VALUES
(1, 'Dr.Aman Ullah Khan', 'permanent', 'professor'),
(2, 'Mr.Muhammad Aziz Akhtar', 'permanent', 'Assistant professor'),
(3, 'Dr. Qaisar Rasool', 'permanent', 'chairman'),
(5, 'Mr. Ghulam Hussain', 'permanent', 'Lecturer'),
(7, 'Mr.Shahid Farid', 'permanent', 'Lecturer'),
(8, 'Mr.Israr Hanif', 'permanent', 'Assistant Professor'),
(9, 'Dr.Minhaj Ahmad Khan', 'permanent', 'Assistant Professor'),
(10, 'Mr.Ahmad Tisman Pasha', 'permanent', 'Lecturer'),
(11, 'Mr.Ahsan Raza', 'permanent', 'Lecturer'),
(12, 'Mr.Ahmad Karim', 'permanent', 'Lecturer'),
(13, 'Khawaja Tehseen Ahmad', 'permanent', 'Lecturer'),
(19, 'Ms.Sadaf Majeed', 'Visiting', 'Lecturar'),
(24, 'Mr.Nauman Ch', 'Visiting', 'Lecturar'),
(14, 'Mr.Muzafar Hameed', 'permanent', 'Assistant professor'),
(21, 'Mr.Nauman Ch', 'Visiting', 'Lecturar'),
(15, 'Mr.Aamir Raza', 'permanent', 'Assistant Professor'),
(16, 'Ms.Faryal', 'visiting', 'Lecturer'),
(22, 'Mr.Ahmad Salman', 'Visiting', 'Lecturar'),
(23, 'Mr.Ahmad Salman', 'Visiting', 'Lecturar'),
(20, 'Ms.Sadaf Majeed', 'Visiting', 'Lecturar'),
(17, 'Mr.Ghulam Hussain Malik', 'Permanent ', 'Lecturer'),
(18, 'Mr.Sajid', 'permanent', 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE IF NOT EXISTS `teacher_login` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `squestion` text NOT NULL,
  `sanswer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`teacher_id`, `username`, `teacher_name`, `email`, `password`, `squestion`, `sanswer`) VALUES
(1, 'tehseen@yahoo.com', 'Khawaja Tehseen Ahmad', 'tehseen@yahoo.com', 'tehseen1', 'What is your pet name?', 'tehseen'),
(0, 'Dr.Aman@yahoo.com', 'Dr.Aman Ullah Khan', 'Dr.Aman@yahoo.com', 'aman', 'what is your pet name?', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `upload_assignment`
--

CREATE TABLE IF NOT EXISTS `upload_assignment` (
  `class` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `session` int(5) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `assignment_no` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `submission_date` date NOT NULL,
  `total_marks` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `size` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_assignment`
--

INSERT INTO `upload_assignment` (`class`, `semester`, `session`, `subject`, `assignment_no`, `title`, `start_date`, `submission_date`, `total_marks`, `name`, `size`, `type`, `location`) VALUES
('BSCS', '1st', 2009, 'Probability & Statistics', 2, 'b', '2011-10-20', '2011-10-21', 20, 'php-file-upload.pdf', '368856', 'application/pdf', 'teacher/tehseen@yahoo.com/php-file-upload.pdf'),
('BSCS', '1st', 2012, 'Probability & Statistics', 1, 'assignment', '2011-10-20', '2011-10-21', 23, '2065497-AbdullahQ.pdf', '30953', 'application/pdf', 'teacher/tehseen@yahoo.com/2065497-AbdullahQ.pdf'),
('BSCS', '1st', 2012, 'Introduction to computing', 1, 'class assignment', '2011-10-20', '2011-10-21', 30, 'AMS.pdf', '1591813', 'application/pdf', 'teacher/tehseen@yahoo.com/AMS.pdf'),
('MCS(E)', '4th', 2009, 'Artificial Intelligence', 1, 'test', '2011-11-24', '2011-11-25', 30, 'Building-Self-Confidence.pdf', '1392618', 'application/pdf', 'teacher/tehseen@yahoo.com/Building-Self-Confidence.pdf'),
('MCS(E)', '4th', 2009, 'System Programming', 1, 'programming', '2011-11-29', '2011-11-30', 30, 'TV4_Logo Style Guide_v2.pdf', '323472', 'application/pdf', 'teacher/tehseen@yahoo.com/TV4_Logo Style Guide_v2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `upload_ebook`
--

CREATE TABLE IF NOT EXISTS `upload_ebook` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `teacher_name` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `upload_ebook`
--

INSERT INTO `upload_ebook` (`book_id`, `title`, `teacher_name`, `file_name`, `size`, `type`, `location`) VALUES
(7, 'Artificial Intelligence', 'Dr.Aman Ullah Khan', 'DSD Form 31-10-2011.pdf', 120026, 'application/pdf', 'teacher/tehseen@yahoo.com/DSD Form 31-10-2011.pdf'),
(5, 'confidence', 'Khawaja Tehseen Ahmad', 'thst-assignment.pdf', 528671, 'application/pdf', 'teacher/tehseen@yahoo.com/thst-assignment.pdf');
