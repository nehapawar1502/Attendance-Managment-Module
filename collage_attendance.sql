-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 08:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pword` varchar(200) NOT NULL,
  `dept` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `uname`, `pword`, `dept`) VALUES
(1, 'admin', 'admin', 'cm'),
(2, 'admin123', 'admin123', 'if');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(45) NOT NULL,
  `Staff_Name` varchar(50) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `b_year` varchar(60) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Staff_Name`, `Subject`, `b_year`, `dept`, `uname`, `pword`) VALUES
(1, 'abc', 'st', '2', 'cm', 'abc', 'abc'),
(2, 'xyz', 'math', '2', 'cm', 'xyz', 'xyz'),
(3, 'pqr', 'java', '3', 'if', 'pqr', 'pqr'),
(4, 'mno', 'C', '1', 'cm', 'mno', 'mno'),
(5, 'abc', 'os', '2', 'cm', 'abc', 'abc'),
(6, 'srs', 'asp.net', '2', 'if', 'srs', 'srs'),
(7, 'srs', 'php', '1', 'if', 'vrs', 'vrs'),
(8, 'pqr', 'edp', '2', 'if', 'pqr', 'pqr'),
(9, 'abc', 'evs', '1', 'if', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `staff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`id`, `uname`, `pword`, `dept`, `staff_id`) VALUES
(1, 'abc', 'abc', 'cm', 1),
(2, 'xyz', 'xyz', 'cm', 2),
(3, 'pqr', 'pqr', 'if', 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `Roll_no` int(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Attendance` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `date1` date NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Roll_no`, `Name`, `Attendance`, `Subject`, `date1`, `dept`) VALUES
(40, 176143, 'neha', 'a', 'edp', '0000-00-00', 'if'),
(41, 176144, 'riddhi', 'a', 'edp', '0000-00-00', 'if'),
(42, 176143, 'neha', 'a', 'java', '2020-03-18', 'cm'),
(43, 176152, 'santoshi', 'p', 'java', '2020-03-18', 'cm'),
(44, 176143, 'neha', 'a', 'java', '0000-00-00', 'cm'),
(45, 176152, 'santoshi', 'a', 'java', '0000-00-00', 'cm'),
(46, 176143, 'neha', 'p', 'java', '0000-00-00', 'cm'),
(47, 176152, 'santoshi', 'p', 'java', '0000-00-00', 'cm'),
(48, 176143, 'neha', 'p', 'edp', '0000-00-00', 'if'),
(49, 176144, 'riddhi', 'a', 'edp', '0000-00-00', 'if'),
(50, 176143, 'neha', 'a', 'java', '2020-06-17', 'cm'),
(51, 176152, 'santoshi', 'p', 'java', '2020-06-17', 'cm');

-- --------------------------------------------------------

--
-- Table structure for table `student_exist`
--

CREATE TABLE `student_exist` (
  `id` int(255) NOT NULL,
  `Roll_no` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_exist`
--

INSERT INTO `student_exist` (`id`, `Roll_no`, `Name`, `Subject`, `dept`) VALUES
(1, 176152, 'santoshi', 'st', 'cm'),
(2, 176156, 'dhanashri', 'st', 'cm'),
(3, 176143, 'neha', 'java', 'cm'),
(4, 176151, 'vaishnavi', 'st', 'cm'),
(5, 176122, 'neha', 'st', 'cm'),
(6, 175652, 'vaishu', 'mm', 'if'),
(7, 176152, 'santoshi', 'java', 'cm'),
(8, 176143, 'neha', 'edp', 'if'),
(9, 176144, 'riddhi', 'edp', 'if');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Staff_Name` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Staff_Name`, `Subject`, `id`) VALUES
('abc', 'java', 1),
('abc', 'mm', 1),
('abc', 'st', 1),
('pqr', 'java', 3),
('pqr', 'edp', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exist`
--
ALTER TABLE `student_exist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `student_exist`
--
ALTER TABLE `student_exist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD CONSTRAINT `staff_login_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staff` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
