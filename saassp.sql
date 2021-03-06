-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 12:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saassp`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `personalId` int(250) NOT NULL,
  `path` varchar(250) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `personalId`, `path`, `images`) VALUES
(4, 66, 'public/upload/66', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]'),
(5, 68, 'public/upload/68', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]'),
(6, 70, 'public/upload/70', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]'),
(7, 71, 'public/upload/71', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]'),
(8, 72, 'public/upload/72', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]'),
(9, 73, 'public/upload/73', '[\"ODYSSEY OVERVIEW_opt.pdf\",\"ODYSSEY OVERVIEW_opt_opt.pdf\"]');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE `educational` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `institution` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `yearCompleted` varchar(250) NOT NULL,
  `qualification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employmenthistory`
--

CREATE TABLE `employmenthistory` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `employer` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `startDate` varchar(250) NOT NULL,
  `endDate` varchar(250) NOT NULL,
  `dutiesResponsibilities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `orgarnisation` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `title` varchar(200) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `cellphoneNumber` varchar(250) NOT NULL,
  `telephoneNumber` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `citizenship` varchar(250) NOT NULL,
  `criminalOffense` varchar(250) NOT NULL,
  `drugScreening` varchar(250) NOT NULL,
  `personalId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personalreferences`
--

CREATE TABLE `personalreferences` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `organisation` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `positionavailability`
--

CREATE TABLE `positionavailability` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `postion` varchar(250) NOT NULL,
  `availability` varchar(250) NOT NULL,
  `noticePeriod` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postaladdress`
--

CREATE TABLE `postaladdress` (
  `id` int(200) NOT NULL,
  `number` varchar(250) NOT NULL,
  `streetName` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `postalCode` varchar(250) NOT NULL,
  `personalDetails` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residentialaddress`
--

CREATE TABLE `residentialaddress` (
  `id` int(200) NOT NULL,
  `personalId` int(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `streetName` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `postalCode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational`
--
ALTER TABLE `educational`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employmenthistory`
--
ALTER TABLE `employmenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`personalId`);

--
-- Indexes for table `personalreferences`
--
ALTER TABLE `personalreferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positionavailability`
--
ALTER TABLE `positionavailability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postaladdress`
--
ALTER TABLE `postaladdress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residentialaddress`
--
ALTER TABLE `residentialaddress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `educational`
--
ALTER TABLE `educational`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `employmenthistory`
--
ALTER TABLE `employmenthistory`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `personalId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `personalreferences`
--
ALTER TABLE `personalreferences`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `positionavailability`
--
ALTER TABLE `positionavailability`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `postaladdress`
--
ALTER TABLE `postaladdress`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `residentialaddress`
--
ALTER TABLE `residentialaddress`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
