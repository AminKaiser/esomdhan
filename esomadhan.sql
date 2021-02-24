-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 03:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esomadhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usertype`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'Administrator', 'admin', 1552722663, 'admin@gmail.com', '12345'),
(7, 'UNO', 'uno11006', 1557888532, 'uno11006@gmail.com', '12345'),
(8, 'Chairman', 'chairman4110', 1857948565, 'chairman4110@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `adminapproveinfo`
--

CREATE TABLE `adminapproveinfo` (
  `id` int(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commentinfo`
--

CREATE TABLE `commentinfo` (
  `problem_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentinfo`
--

INSERT INTO `commentinfo` (`problem_id`, `username`, `comment`) VALUES
(43, 'user', 'Please Check'),
(43, 'aminkaiser', 'What kind of problem ?'),
(44, 'user', 'Hello'),
(44, 'user', 'Easy Process'),
(43, 'user', 'This kind of problem we are also facing everyday'),
(43, 'user', 'The next comment'),
(43, 'user', 'hello'),
(43, 'user', 'This kind of problem we are also facing every day. So I think administrator should work on it.\r\n'),
(44, 'user', 'This kind of problem we are also facing every day. So I think administrator should work on it.'),
(45, 'sukriti', 'oh! seriously?'),
(45, 'voctichakma', 'i faced same problem.'),
(45, 'aminkaiser', 'oh! ok.'),
(46, 'user', 'uuu');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `fromid` int(10) NOT NULL,
  `toid` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`fromid`, `toid`, `message`) VALUES
(7, 9, 'Okay, Thanks for your message. Our Team is working with it.'),
(7, 9, 'Ok, our team working on it. thanks.'),
(13, 7, 'hi, sir .. we are faciing water problem.'),
(7, 13, 'Ok, We are Checking your problem. Thanks for information.'),
(13, 7, 'thanks sir for taking steps.'),
(13, 7, 'Please help us'),
(7, 13, 'ok'),
(13, 7, 'our pritpr');

-- --------------------------------------------------------

--
-- Table structure for table `probleminfo`
--

CREATE TABLE `probleminfo` (
  `problem_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_520_ci NOT NULL,
  `problempicture` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `district` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `City` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `upazilla` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `street` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `types` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `mention` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `mention1` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `mention2` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `probleminfo`
--

INSERT INTO `probleminfo` (`problem_id`, `user_id`, `description`, `problempicture`, `district`, `City`, `upazilla`, `street`, `types`, `status`, `mention`, `mention1`, `mention2`) VALUES
(43, 13, 'This is our first problem set.', 'ProblemPicture/1580108030_82x82xbd_logo.png.pagespeed.ic.jHIWb9hHMB.png', 'Dhaka', 'Rajshahi', 'Cumilla', 'DUET, Joydebpur Sadar', 'Educational', 'Pending', 'Administration', 'UNO', 'Councilor'),
(44, 12, 'Hello World', 'ProblemPicture/1580108231_computer.jpg', 'Chattagram', 'Baghaichari', 'Cumilla', 'DUET, Joydebpur Sadar', 'Educational', 'Finished', 'Administration', 'Mayor', 'Councilor'),
(45, 13, 'There is a problem near gazipur.', 'ProblemPicture/1580197340_Globe256.png', 'Dhaka', 'Gazipur', 'Gazipur', 'DUET,Gazipur -1707', 'Corruption', 'Pending', 'Chairman', 'UNO', 'Mayor'),
(46, 12, 'City corporation', 'ProblemPicture/1580199457_binary-tree128.png', 'Chattagram', 'Hathazari', 'Hathazari', 'gazipur', 'Social', 'Pending', 'Administration', 'UNO', 'Chairman'),
(47, 13, 'Dustbin problem in gazipur', 'ProblemPicture/1580305052_DUST BIN.jpg', 'Dhaka', 'Gazipur', 'Gazipur', 'Joydebpur, Gazipur', 'Social', NULL, 'Administration', 'Mayor', 'Councilor');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `mobile`, `email`, `password`, `id`) VALUES
('aminkaiser', 1552722663, 'aminkaiser@engineer.', '12345', 9),
('voctichakma', 1557888532, 'vocti@gmail.com', '12345', 10),
('sukriti', 1851915713, 'sukriti@gmail.com', '12345', 11),
('anonymous', 0, 'anonymous@gmail.com', '12345', 12),
('user', 1552722663, 'user@gmail.com', '12345', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminapproveinfo`
--
ALTER TABLE `adminapproveinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `probleminfo`
--
ALTER TABLE `probleminfo`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adminapproveinfo`
--
ALTER TABLE `adminapproveinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `probleminfo`
--
ALTER TABLE `probleminfo`
  MODIFY `problem_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
