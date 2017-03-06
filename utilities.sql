-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 06:30 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utilities`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--

CREATE TABLE `adminlogs` (
  `no` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `loggedin` datetime NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  `loggedout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventlogs`
--

CREATE TABLE `eventlogs` (
  `no` int(11) NOT NULL,
  `eventtitle` varchar(40) NOT NULL,
  `createdby` varchar(40) NOT NULL,
  `createdon` datetime NOT NULL,
  `decription` varchar(100) NOT NULL,
  `smsstatus` enum('Sent','Not sent') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `smslogs`
--

CREATE TABLE `smslogs` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `type` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  `senton` time NOT NULL,
  `sentto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `adminfname` varchar(40) NOT NULL,
  `adminlname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `adminaddress` varchar(50) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblevent`
--

CREATE TABLE `tblevent` (
  `no` int(11) NOT NULL,
  `eventtitle` varchar(40) NOT NULL,
  `eventdesc` varchar(100) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` datetime NOT NULL,
  `send` enum('SITE','1st Year','2nd Year','3rd Year','4th Year','Do not send') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblkey`
--

CREATE TABLE `tblkey` (
  `no` int(11) NOT NULL,
  `keyid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `studid` int(15) NOT NULL DEFAULT '0',
  `studlname` varchar(40) NOT NULL,
  `studfname` varchar(40) NOT NULL,
  `year` int(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `birthdate` date NOT NULL,
  `studaddress` varchar(100) NOT NULL,
  `studemail` varchar(50) NOT NULL,
  `studcontactno` bigint(11) NOT NULL,
  `personfname` varchar(40) DEFAULT NULL,
  `personlname` varchar(40) DEFAULT NULL,
  `studrelation` varchar(50) DEFAULT NULL,
  `personaddress` varchar(100) NOT NULL,
  `personcontactno` bigint(11) DEFAULT NULL,
  `studstatus` enum('Enrolled','Unenrolled') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `eventlogs`
--
ALTER TABLE `eventlogs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `smslogs`
--
ALTER TABLE `smslogs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblevent`
--
ALTER TABLE `tblevent`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tblkey`
--
ALTER TABLE `tblkey`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`studid`),
  ADD UNIQUE KEY `studid` (`studid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `eventlogs`
--
ALTER TABLE `eventlogs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smslogs`
--
ALTER TABLE `smslogs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblevent`
--
ALTER TABLE `tblevent`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblkey`
--
ALTER TABLE `tblkey`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
