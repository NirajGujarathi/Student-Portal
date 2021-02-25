-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 09:42 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin', 'admin123'),
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `rail_form_detail`
--

CREATE TABLE `rail_form_detail` (
  `form_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `from_station` varchar(30) NOT NULL,
  `to_station` varchar(30) NOT NULL,
  `route_name` varchar(45) DEFAULT NULL,
  `class_of_travel` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `pass_from` date DEFAULT NULL,
  `pass_to` date DEFAULT NULL,
  `previous_pass` varchar(45) DEFAULT NULL,
  `receipt_path` varchar(200) NOT NULL,
  `receipt_name` varchar(200) NOT NULL,
  `pass_path` varchar(200) NOT NULL,
  `pass_name` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rail_form_detail`
--

INSERT INTO `rail_form_detail` (`form_id`, `st_id`, `from_station`, `to_station`, `route_name`, `class_of_travel`, `duration`, `pass_from`, `pass_to`, `previous_pass`, `receipt_path`, `receipt_name`, `pass_path`, `pass_name`, `address`, `status`) VALUES
(1, 1620141245, 'gh', 'gg', 'rt', 'tt', 're', '2017-10-04', '2017-10-20', 'ert45123132', '', '', '', '', 'dfgfdgddddddddddddd', 'approved'),
(2, 123, 'dombivali', 'vidyavihar', 'Central-Line', 'I 	(first class)', 'Monthly 		(1 months)', '2017-10-01', '2017-10-22', 'fasf654132', '', '', '', '', 'asdaaaaaaaaaaaaaa', 'not_ready'),
(3, 1620141245, '', 'Tilaknagar', 'Central-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-10', '2017-11-24', 'sdassfsfs', '', '', '', ' ', 'fdsd', 'approved'),
(6, 1620141245, '', 'Vidyavihar', 'Central-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-12', '2017-11-18', '4564', '', '', '', ' ', 'jgk', 'not_ready'),
(7, 123, '', 'Tilaknagar', 'Central-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-02', '2018-02-16', 'sdsfd', '', '', '', ' ', 'fsfs', 'not_ready'),
(8, 1620141245, '', 'Vidyavihar', 'Western-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-04', '2017-11-11', 'sdss', '', '', '', ' ', 'dsds', 'not_ready'),
(9, 1620141245, '', 'Vidyavihar', 'Western-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-04', '2017-11-11', 'sdss', '', '', '', ' ', 'dsds', 'not_ready'),
(10, 1620141245, '', 'Vidyavihar', 'Western-Line', 'I (first class)', 'Monthly (1 months)', '2017-11-04', '2017-11-11', 'sdss', '', '', '', ' ', 'dsds', 'not_ready');

-- --------------------------------------------------------

--
-- Table structure for table `registered_details`
--

CREATE TABLE `registered_details` (
  `registration_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `st_password` varchar(20) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `mail_id` varchar(45) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registered_details`
--

INSERT INTO `registered_details` (`registration_id`, `st_id`, `st_password`, `st_name`, `mail_id`, `contact_no`, `gender`) VALUES
(1, 1620141245, 'abcd', ' niraj', 'sd@er.jk', '456123', 'male'),
(2, 123, 'abcd', 'vikas', 'vikas.somaiya.edu', '6451321', 'male'),
(3, 1620150132, 'abcd', 'sanjay', '', '456523121', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_roll_no` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_dob` date NOT NULL,
  `bldg_no` varchar(40) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) DEFAULT NULL,
  `class` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `year_of_joining` year(4) NOT NULL,
  `course` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `student_mail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_password`, `student_roll_no`, `student_name`, `student_dob`, `bldg_no`, `street`, `city`, `state`, `class`, `year`, `year_of_joining`, `course`, `gender`, `student_mail`) VALUES
(123, 'abcd', 45, 'vikas', '1997-11-12', '504,society', 'b. k. road', 'dombivali', 'maharashtra', 'Comps', 'T.E.', 2015, NULL, NULL, 'vikas@somaiya.edu'),
(1620141245, 'abcd', 1415023, 'rahul ', '1996-02-07', '11,sarvoday', 'sunil nagar', 'dombivali', 'maharashtra', 'Extc', 'S.E.', 2014, NULL, NULL, 'rahul@somaiya.edu'),
(1620150132, 'abcd', 1511213, 'sanjay', '1997-04-14', '204,rockies', 's. v. road', 'mulund', 'maharashtra', 'I.T.', 'S.E.', 2015, NULL, NULL, NULL),
(1620150414, 'abcd', 1515013, 'ajay', '1997-10-15', '102,gurudev', 'nehru road', 'thane', 'maharashtra', 'Comps', 'T.E.', 2015, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `staff_id` int(11) NOT NULL,
  `staff_password` varchar(20) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `middle_name` varchar(15) DEFAULT NULL,
  `course` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rail_form_detail`
--
ALTER TABLE `rail_form_detail`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `fk1_idx` (`st_id`);

--
-- Indexes for table `registered_details`
--
ALTER TABLE `registered_details`
  ADD PRIMARY KEY (`registration_id`),
  ADD KEY `fk2_idx` (`st_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rail_form_detail`
--
ALTER TABLE `rail_form_detail`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registered_details`
--
ALTER TABLE `registered_details`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rail_form_detail`
--
ALTER TABLE `rail_form_detail`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`st_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `registered_details`
--
ALTER TABLE `registered_details`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`st_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
