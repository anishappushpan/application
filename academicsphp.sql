-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academicsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_faculty`
--

CREATE TABLE `add_faculty` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_faculty`
--

INSERT INTO `add_faculty` (`id`, `name`, `email`, `phoneno`, `qualification`, `batch`, `username`, `password`) VALUES
(1, 'amitha', 'a@gmail.com', 2147483647, 'b.tech', 'jsd', 'amitha', 'amitha123'),
(3, 'gaana', 'g@gmail.com', 2147483647, 'b.tech', 'jsd', 'gaana', 'gan');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`id`, `name`, `dob`, `email`, `gender`, `phoneno`, `qualification`, `batch`, `username`, `password`) VALUES
(1, 'parvathy', '1998', 'parvathy@gmail.com', 'female', '965834777', 'b.tech', 'jsd', 'parvathy', 'paru123'),
(2, 'nimisha', '1998', 'ancyanees786@gmail.c', 'female', '9635821471', 'b.tech', 'jsd', 'nimisha', 'akku');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `ass_no` varchar(10) NOT NULL,
  `sub1` varchar(10) NOT NULL,
  `sub2` varchar(10) NOT NULL,
  `sub3` varchar(10) NOT NULL,
  `sub4` varchar(10) NOT NULL,
  `maxmark` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `name`, `batch`, `ass_no`, `sub1`, `sub2`, `sub3`, `sub4`, `maxmark`) VALUES
(1, 'parvathy', 'jsd', '44', '50', '50', '50', '44', '100');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `hour1` varchar(5) NOT NULL,
  `hour2` varchar(5) NOT NULL,
  `hour3` varchar(5) NOT NULL,
  `hour4` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `batch`, `hour1`, `hour2`, `hour3`, `hour4`) VALUES
(1, 'parvathy', 'jsd', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `facultyleave`
--

CREATE TABLE `facultyleave` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `leaveid` varchar(10) NOT NULL,
  `reason` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyleave`
--

INSERT INTO `facultyleave` (`id`, `name`, `leaveid`, `reason`, `status`) VALUES
(1, 'amitha', '3', 'casual', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `stuleaveapp`
--

CREATE TABLE `stuleaveapp` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `leaveid` varchar(10) NOT NULL,
  `reason` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuleaveapp`
--

INSERT INTO `stuleaveapp` (`id`, `name`, `leaveid`, `reason`, `status`) VALUES
(1, 'nimisha', '1', 'casual', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_faculty`
--
ALTER TABLE `add_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyleave`
--
ALTER TABLE `facultyleave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuleaveapp`
--
ALTER TABLE `stuleaveapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_faculty`
--
ALTER TABLE `add_faculty`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facultyleave`
--
ALTER TABLE `facultyleave`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stuleaveapp`
--
ALTER TABLE `stuleaveapp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
