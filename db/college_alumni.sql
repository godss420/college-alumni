-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 11:55 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE `admin_post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`id`, `title`, `fname`, `stype`, `details`, `rdate`) VALUES
(1, 'sdsadsad', 'P1', '', 'xzcxzcxzczxczxcxzc', '20-01-2018'),
(2, 'aaaaaaaaaaa', 'P2', '', 'bbbbbbbbbbbbbbb', '20-01-2018'),
(3, 'seminar', 'P3', '', 'seminar on jan 28 2018', '20-01-2018'),
(4, 'seminar', 'P4imagesacc.jpeg', 'Image', 'bcvb cvbcvbcvb cvbcvb', '20-01-2018'),
(5, 'accc', 'P5dd.jpg', '', 'nnbbnn', '20-01-2018'),
(6, 'video', 'P6small.webm', 'Video', 'my video', '05-04-2018'),
(7, 'Event1', 'P7imgdages.jpg', 'Image', 'event1', '26-01-2019');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `uname`, `degree`, `college`, `location`, `year`) VALUES
(1, 'MC102', 'MPhil', 'JJ College', 'Trichy', 'Apr 2017');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `uname`, `desig`, `company`, `location`, `experience`) VALUES
(1, 'MC102', 'Project Manager', 'Wipro', 'Chennai', 'PHP in 2015 to 2017');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `year` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `city`, `location`, `gender`, `dob`, `mobile`, `email`, `regno`, `year`, `dept`, `degree`, `photo`, `pass`, `rdate`) VALUES
(1, 'Rajesh', 'Trichy', '', 'Male', '11-11-1996', 9876610998, 'kannan@gmail.com', 'MC101', '2015-2018', 'CS', 'MCA', 'P120121.jpg', '123456', '12-01-2018'),
(2, 'Dinesh', 'Salem', '', 'Male', '11-11-1996', 9876610998, 'kannan@gmail.com', 'MC102', '2012-2015', 'CS', 'MCA', 'P220121.jpg', '123456', '20-01-2018'),
(3, 'jerry', 'chennai', 'chennai', 'Male', '02-05-1990', 9009877641, 'jerry@umail.com', '1100', '2019', 'CS', 'BSc', '', '111', '26-02-2019');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `cday` int(11) NOT NULL,
  `cmonth` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `msg_cnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `dob`, `cday`, `cmonth`, `mobile`, `email`, `location`, `city`, `regno`, `year`, `batch`, `dept`, `degree`, `msg_cnt`) VALUES
(1, 'Sanju', 'Male', '03-02-1996', 3, 2, 9976570006, 'sanju@gmail.com', 'aa', 'Salem', 'B101', 'Second Year', '2015-2018', 'CS', 'BCA', 0),
(2, 'Suresh', 'Male', '07-02-1996', 7, 2, 9976570006, 'kannan@gmail.com', 'Trichy', 'Trichy', 'B102', 'Second Year', '2015-2018', 'CS', 'BCA', 1),
(3, 'jerry', 'Male', '01-03-1990', 1, 3, 9009877641, 'jerry@umail.com', 'omr', 'chennai', '100', 'Final Year', '2019', 'IT', 'M.Tech', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_fund`
--

CREATE TABLE `user_fund` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `fund` varchar(30) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_fund`
--

INSERT INTO `user_fund` (`id`, `uname`, `fund`, `rdate`) VALUES
(1, '1100', '', '26-02-2019'),
(2, '1100', '', '26-02-2019'),
(3, '1100', '110000', '26-02-2019'),
(4, '1100', '30000', '26-02-2019');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `details` varchar(100) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `uname`, `title`, `fname`, `stype`, `details`, `rdate`) VALUES
(1, 'MC102', 'seminar', 'P120121.jpg', '', 'hghghjghjghjghjhj', '20-01-2018'),
(2, 'MC101', 'hh', 'P2delllp.jpg', 'Image', 'ffff', '05-04-2018'),
(3, 'MC101', 'vvv', 'P3small.webm', 'Video', 'vvvv', '05-04-2018'),
(4, 'MC102', 'Student Project11', 'P4Chrysanthemum.jpg', 'Image', 'image', '10-02-2019'),
(5, 'MC102', 'New Vaccant', 'P5Desert.jpg', 'Image', 'job', '10-02-2019');
