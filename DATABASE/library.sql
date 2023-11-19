-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'Group B', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', '2022-10-01 11:19:19'),
(2, 'abdi', 'abdi@gmail.com', 'abdi', '123', '0000-00-00 00:00:00'),
(3, NULL, NULL, '', '', '0000-00-00 00:00:00'),
(4, NULL, NULL, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `Author` varchar(11) DEFAULT NULL,
  `ISBNNumber` varchar(25) DEFAULT NULL,
  `bookImage` varchar(250) NOT NULL,
  `isIssued` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `Author`, `ISBNNumber`, `bookImage`, `isIssued`, `RegDate`, `UpdationDate`) VALUES
(14, 'Complete ICT for Cambridge IGCSE - Second Edition', 10, 'Stephen Doy', '0198357826', '49414c05053163a31fb8d3cea560e968.jpg', 1, '2022-09-24 11:47:15', '2022-10-23 10:45:40'),
(15, 'Cambridge IGCSE ICT', 10, 'Brian Serge', '252522', 'bdada34fa1fe6a092078ac788cb14b65.jpg', 0, '2022-09-24 11:49:43', '2022-10-21 16:11:49'),
(16, 'ICT in Education', 10, 'Maria Jose', '564312', '6250367d603fe384393a0c3862bb8dc4jpeg', 0, '2022-09-24 11:51:35', '2022-09-25 08:28:12'),
(17, 'ICT and English Language ', 10, 'Henry Gabri', '3888888', '2b04af6fbe32607a262f2ae70ee6508b.png', 1, '2022-09-24 11:54:44', '2022-09-24 12:04:45'),
(18, 'Become a doctor ', 13, 'Adrian Blun', '453671111', '38ffb72bf21f883ca669880b826a690c.jpg', 1, '2022-09-24 11:57:09', '2022-09-24 12:05:34'),
(19, 'Medical Physiology', 13, 'David R, Be', '36667211', '5fdb87b6452b9d37c51b2eb5cf3435f9.jpg', 0, '2022-09-24 11:58:38', '2022-09-24 12:08:26'),
(20, 'Complete ICT for Cambridge IGCSE 2', 10, 'Dr Jamal Fa', '5050505', 'cf1366fbcffa7957ef400f583e539348.jpg', 0, '2022-09-25 14:23:23', '2022-09-25 14:25:53'),
(23, 'afdhaab', 5, 'axmed', '2332', '3e87a66775a64fc9bcdc1754a4ec9915.png', 1, '2022-10-21 15:45:53', '2022-10-21 16:00:38'),
(24, 'carabi', 9, 'geele', '2121', '45f22513a6187420403892d2d4d2c353.png', NULL, '2022-10-21 16:10:47', NULL),
(25, 'php', 10, 'hhh', '123', '7db712000e2b943cc3dc1e758c8b61d6.png', NULL, '2022-10-23 15:21:58', NULL),
(26, 'huda', 23, 'cabaas', '4444', 'b36c4a7419263c46199a3c9d15bf36a6.png', 1, '2022-10-23 15:32:38', '2022-10-23 15:34:28'),
(27, 'computer ', 24, 'Ahmed ', '54434563', '64f0b5b224fdfa7dfb499633785e8b07.png', 1, '2022-10-25 06:13:35', '2022-10-25 06:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(5, 'Technology', 1, '2022-01-22 07:23:03', '2022-01-22 07:23:03'),
(6, 'Science', 1, '2022-01-22 07:23:03', '2022-01-22 16:24:37'),
(7, 'Management', 1, '2022-01-22 07:23:03', '2022-01-22 16:24:35'),
(8, 'General', 1, '2022-01-22 07:23:03', '2022-01-22 16:24:40'),
(9, 'Programming', 1, '2022-01-22 07:23:03', '2022-01-22 16:24:42'),
(10, 'ICT', 1, '2022-09-11 17:18:10', '0000-00-00 00:00:00'),
(11, 'bb', 1, '2022-09-24 08:28:55', '0000-00-00 00:00:00'),
(12, 'ee', 1, '2022-09-24 11:38:04', '0000-00-00 00:00:00'),
(13, 'Medical', 1, '2022-09-24 11:56:28', '0000-00-00 00:00:00'),
(14, 'Meicine', 1, '2022-09-24 16:17:11', '0000-00-00 00:00:00'),
(15, 'cnncnc', 1, '2022-09-27 08:39:48', '0000-00-00 00:00:00'),
(16, 'somali', 1, '2022-10-21 15:57:50', '0000-00-00 00:00:00'),
(17, 'ICT', 1, '2022-10-23 10:48:55', '0000-00-00 00:00:00'),
(18, 'ICT', 1, '2022-10-23 11:10:27', '0000-00-00 00:00:00'),
(19, 'na', 1, '2022-10-23 11:11:20', '0000-00-00 00:00:00'),
(20, 'na', 1, '2022-10-23 11:18:49', '0000-00-00 00:00:00'),
(21, 'ICT', 1, '2022-10-23 11:18:58', '0000-00-00 00:00:00'),
(22, 'ICT', 1, '2022-10-23 11:20:38', '0000-00-00 00:00:00'),
(23, 'xisaab', 1, '2022-10-23 15:31:27', '0000-00-00 00:00:00'),
(24, 'Coimputer science ', 1, '2022-10-25 06:11:51', '0000-00-00 00:00:00'),
(25, 'ICT', 1, '2023-11-18 17:58:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblissuedbookdetails`
--

CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL,
  `BookId` int(11) DEFAULT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `IssuesDate` timestamp NULL DEFAULT current_timestamp(),
  `ReturnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `RetrunStatus` int(1) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `StudentID`, `IssuesDate`, `ReturnDate`, `RetrunStatus`, `fine`) VALUES
(20, 14, '004', '2022-09-24 12:03:47', NULL, NULL, NULL),
(21, 17, '005', '2022-09-24 12:04:45', NULL, NULL, NULL),
(22, 18, '004', '2022-09-24 12:05:34', NULL, NULL, NULL),
(23, 16, '001', '2022-09-24 12:06:06', '2022-09-25 08:28:11', 1, 0),
(28, 14, '008', '2022-09-26 19:48:47', NULL, NULL, NULL),
(29, 14, '6222', '2022-09-27 08:42:55', NULL, NULL, NULL),
(31, NULL, '002', '2022-10-21 15:49:17', NULL, NULL, NULL),
(32, 23, '002', '2022-10-21 15:50:11', '2022-10-21 15:56:55', 1, 1),
(33, 23, '002', '2022-10-21 16:00:37', NULL, NULL, NULL),
(34, 15, '333', '2022-10-21 16:07:54', '2022-10-21 16:11:49', 1, 0),
(35, NULL, '002', '2022-10-23 10:42:57', NULL, NULL, NULL),
(36, 14, '002', '2022-10-23 10:45:39', NULL, NULL, NULL),
(37, 14, '003', '2022-10-23 10:48:10', NULL, NULL, NULL),
(38, 14, '2', '2022-10-23 10:51:27', NULL, NULL, NULL),
(39, 14, '32', '2022-10-23 11:20:55', NULL, NULL, NULL),
(40, 14, '556', '2022-10-23 11:31:11', NULL, NULL, NULL),
(41, 14, '556', '2022-10-23 11:32:56', NULL, NULL, NULL),
(42, 14, '8777777777', '2022-10-23 11:33:22', NULL, NULL, NULL),
(43, 14, '566', '2022-10-23 11:41:24', NULL, NULL, NULL),
(44, 17, '005', '2022-10-23 15:16:08', NULL, NULL, NULL),
(45, 26, '222', '2022-10-23 15:34:28', NULL, NULL, NULL),
(46, 26, '222', '2022-10-23 15:34:29', NULL, NULL, NULL),
(47, 27, '115', '2022-10-25 06:16:21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(10) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StudentId`, `FullName`, `MobileNumber`, `Status`, `RegDate`, `UpdationDate`) VALUES
(16, '004', 'HUDA JAMA MOHAMED', '6318197171', 1, '2022-09-24 12:01:15', '2022-09-26 17:39:03'),
(17, '001', 'ABDIRAHMAN MOHAMED YUSUF', '0623242562', 1, '2022-09-24 12:01:46', NULL),
(18, '005', 'IHSAN ROBLE ADAM ', '6325262782', 1, '2022-09-24 12:02:17', NULL),
(19, '008', 'ABDIHALIM ABDIAZIZ KHALIF', '6337373377', 1, '2022-09-24 12:02:43', NULL),
(21, '0020', 'Ahmed Abdi', '6331818188', 1, '2022-09-24 12:29:37', NULL),
(32, '002', 'faarax', '2525523535', 1, '2022-10-21 15:48:23', NULL),
(33, '333', 'abaas', '252', 1, '2022-10-21 16:03:46', NULL),
(34, '555', '455', '444', 1, '2022-10-23 11:30:51', NULL),
(35, '123', 'farax', '0755', 1, '2022-10-23 15:25:17', NULL),
(36, 'mohamed', 'jaamac', '4444', 1, '2022-10-23 15:28:54', NULL),
(37, '4444', 'hudajamac', '777', 1, '2022-10-23 15:29:37', NULL),
(38, '222', 'kamal', '333333', 1, '2022-10-23 15:30:57', NULL),
(39, '115', 'jama', '536577', 1, '2022-10-25 06:14:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `StudentId` (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
