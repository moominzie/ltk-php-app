-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 10:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LTK_Form`
--

-- --------------------------------------------------------

--
-- Table structure for table `corrective_maintenance`
--

CREATE TABLE `corrective_maintenance` (
  `id` int(30) NOT NULL,
  `Problem` varchar(255) DEFAULT NULL,
  `Corrective` varchar(255) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corrective_maintenance`
--

INSERT INTO `corrective_maintenance` (`id`, `Problem`, `Corrective`, `Summary`) VALUES
(1, '1.Lovesick Girl', '1.Playing With Fire', '1.Solo');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) UNSIGNED NOT NULL,
  `Images1` varchar(150) DEFAULT NULL,
  `Images2` varchar(150) DEFAULT NULL,
  `DataId` int(11) DEFAULT NULL,
  `AuthorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `Images1`, `Images2`, `DataId`, `AuthorId`) VALUES
(1, 'IMG_6887.JPG', 'twitter_Eg_huTjWkAALWWz.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` int(11) UNSIGNED NOT NULL,
  `AuthorName` varchar(100) DEFAULT NULL,
  `PowerId` int(11) DEFAULT NULL,
  `InitialsId` int(11) DEFAULT NULL,
  `RegDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `AuthorName`, `PowerId`, `InitialsId`, `RegDate`) VALUES
(1, 'Jennie Kim', 1, 1, '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tblcm`
--

CREATE TABLE `tblcm` (
  `id` int(11) UNSIGNED NOT NULL,
  `Agency` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcm`
--

INSERT INTO `tblcm` (`id`, `Agency`) VALUES
(1, 'งานบำรุงรักษา');

-- --------------------------------------------------------

--
-- Table structure for table `tblinitials`
--

CREATE TABLE `tblinitials` (
  `id` int(11) UNSIGNED NOT NULL,
  `Initials` varchar(100) DEFAULT NULL,
  `AgencyId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinitials`
--

INSERT INTO `tblinitials` (`id`, `Initials`, `AgencyId`) VALUES
(1, 'หบลอ-ฟ.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpower`
--

CREATE TABLE `tblpower` (
  `id` int(11) UNSIGNED NOT NULL,
  `PowerplantName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpower`
--

INSERT INTO `tblpower` (`id`, `PowerplantName`) VALUES
(1, 'โรงไฟฟ้าลำตะคองชลภาวัฒนา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corrective_maintenance`
--
ALTER TABLE `corrective_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcm`
--
ALTER TABLE `tblcm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinitials`
--
ALTER TABLE `tblinitials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpower`
--
ALTER TABLE `tblpower`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corrective_maintenance`
--
ALTER TABLE `corrective_maintenance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcm`
--
ALTER TABLE `tblcm`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinitials`
--
ALTER TABLE `tblinitials`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpower`
--
ALTER TABLE `tblpower`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
