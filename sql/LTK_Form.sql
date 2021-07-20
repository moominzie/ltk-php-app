-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2021 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `Problem` text DEFAULT NULL,
  `Corrective` text DEFAULT NULL,
  `Summary` text DEFAULT NULL,
  `RegDate` date DEFAULT current_timestamp(),
  `Images1` varchar(150) DEFAULT NULL,
  `Images2` varchar(150) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corrective_maintenance`
--

INSERT INTO `corrective_maintenance` (`id`, `Problem`, `Corrective`, `Summary`, `RegDate`, `Images1`, `Images2`, `Username`) VALUES
(1, 'Azurill’s tail is large and bouncy. It is packed full of the nutrients this Pokémon needs to grow. Azurill can be seen bouncing and playing on its big, rubbery tail.Minun loves to cheer on its partner in battle. It gives off sparks from its body while it is doing so. If its partner is in trouble, this Pokémon gives off increasing amounts of sparks.They’re popular, but they’re rare. Trainers who show them off recklessly may be targeted by thieves.\r\n\r\nIf it’s in a pinch, it will secrete a sweet liquid from the tip of its head. Syrup made from gathering that liquid is tasty on bread.When it encounters an enemy that’s truly mighty, this Pokémon removes the power-save belt from its waist and unleashes its full power.Swellow is very conscientious about the upkeep of its glossy wings. Once two Swellow are gathered, they diligently take care of cleaning each other’s wings.\r\n\r\n', 'Azurill’s tail is large and bouncy. It is packed full of the nutrients this Pokémon needs to grow. Azurill can be seen bouncing and playing on its big, rubbery tail.Minun loves to cheer on its partner in battle. It gives off sparks from its body while it is doing so. If its partner is in trouble, this Pokémon gives off increasing amounts of sparks.They’re popular, but they’re rare. Trainers who show them off recklessly may be targeted by thieves.\r\n\r\nIf it’s in a pinch, it will secrete a sweet liquid from the tip of its head. Syrup made from gathering that liquid is tasty on bread.When it encounters an enemy that’s truly mighty, this Pokémon removes the power-save belt from its waist and unleashes its full power.Swellow is very conscientious about the upkeep of its glossy wings. Once two Swellow are gathered, they diligently take care of cleaning each other’s wings.\r\n\r\n', 'Azurill’s tail is large and bouncy. It is packed full of the nutrients this Pokémon needs to grow. Azurill can be seen bouncing and playing on its big, rubbery tail.Minun loves to cheer on its partner in battle. It gives off sparks from its body while it is doing so. If its partner is in trouble, this Pokémon gives off increasing amounts of sparks.They’re popular, but they’re rare. Trainers who show them off recklessly may be targeted by thieves.\r\n\r\nIf it’s in a pinch, it will secrete a sweet liquid from the tip of its head. Syrup made from gathering that liquid is tasty on bread.When it encounters an enemy that’s truly mighty, this Pokémon removes the power-save belt from its waist and unleashes its full power.Swellow is very conscientious about the upkeep of its glossy wings. Once two Swellow are gathered, they diligently take care of cleaning each other’s wings.\r\n\r\n', '2021-07-04', '107090846_592908191425345_8494019087227375486_n.png', 'IMG_3260.jpg', 'ltk'),
(2, 'dtyefruewr', 'wergrterte', 'etyetytyey', '2021-07-09', 'IMG_4511.JPG', 'IMG_6724.JPG', 'ltk'),
(3, 'gfdgffgsfg', 'sdggreger', 'fgfgfgdffdfdfgre', '2021-07-09', 'IMG_6724.JPG', 'IMG_6724.JPG', 'ltk'),
(4, 'yewgfiwyegwueb', 'oiwhtowrithwirth', 'lreiltjweoriheotihrth', '2021-07-09', 'IMG_4511.JPG', 'IMG_6724.JPG', 'ltk'),
(5, 'qweazdwawdsaew', 'rdersera', 'drerewswtrwyrryewt55wt53', '2021-07-09', 'IMG_6724.JPG', 'IMG_4511.JPG', 'ltk');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) UNSIGNED NOT NULL,
  `Images1` varchar(150) DEFAULT NULL,
  `Images2` varchar(150) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `Images1`, `Images2`, `Username`) VALUES
(1, 'Screen Shot 2564-06-08 at 17.37.48.png', 'Screen Shot 2564-06-08 at 18.54.16.png', 'B6019938'),
(2, 'why-image.jpg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938'),
(3, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'why-image.jpg', 'B6019938'),
(4, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'B6019938');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `Username`, `Name`, `Password`) VALUES
(1, 'ltk', 'นางสาวเมธาวี อรรถวัน', 'ltk');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `id` int(11) UNSIGNED NOT NULL,
  `AuthorName` varchar(100) DEFAULT NULL,
  `PowerId` int(11) DEFAULT NULL,
  `InitialsId` int(11) DEFAULT NULL,
  `RegDate` date DEFAULT current_timestamp(),
  `Username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`id`, `AuthorName`, `PowerId`, `InitialsId`, `RegDate`, `Username`) VALUES
(1, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-10', 'B6019938'),
(2, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(3, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(4, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(5, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-13', 'B6019938'),
(6, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(7, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(8, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(9, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(10, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(11, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(12, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(13, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-14', 'B6019938'),
(14, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-06-23', 'B6019938'),
(15, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-07-04', 'ltk'),
(16, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-07-09', 'ltk'),
(17, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-07-09', 'ltk'),
(18, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-07-09', 'ltk'),
(19, 'นางสาวเมธาวี อรรถวัน', 1, 1, '2021-07-09', 'ltk');

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
(1, 'งานบำรุงรักษาโรงไฟฟ้า');

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
-- Indexes for table `member`
--
ALTER TABLE `member`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
