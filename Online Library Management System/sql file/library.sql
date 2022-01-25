-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 06:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'example@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2022-01-05 16:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `AuthorName` varchar(255) DEFAULT NULL,
  `ISBNNumber` bigint(40) DEFAULT NULL,
  `BookNumber` int(20) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `BookPrice` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `AuthorName`, `ISBNNumber`, `BookNumber`, `Status`, `BookPrice`, `RegDate`, `UpdationDate`) VALUES
(1, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30601, NULL, 400, '2022-01-23 13:09:17', NULL),
(2, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30602, NULL, 400, '2022-01-23 13:17:27', NULL),
(3, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30603, NULL, 400, '2022-01-23 13:18:18', NULL),
(4, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30604, NULL, 400, '2022-01-23 13:18:52', NULL),
(5, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30605, NULL, 400, '2022-01-23 13:19:34', NULL),
(6, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30606, NULL, 400, '2022-01-23 13:20:21', NULL),
(7, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30607, NULL, 400, '2022-01-23 13:21:29', NULL),
(8, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, ' K M Bhurchandi', 1259006131, 30608, NULL, 400, '2022-01-23 13:24:06', NULL),
(9, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30609, NULL, 400, '2022-01-23 13:24:42', NULL),
(10, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30610, NULL, 400, '2022-01-23 13:25:13', NULL),
(11, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, ' K M Bhurchandi', 1259006131, 30611, NULL, 400, '2022-01-23 13:26:07', NULL),
(12, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, ' K M Bhurchandi', 1259006131, 30612, NULL, 400, '2022-01-23 13:26:54', NULL),
(13, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30613, NULL, 400, '2022-01-23 13:27:37', NULL),
(14, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30614, NULL, 400, '2022-01-23 13:28:11', NULL),
(15, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30615, NULL, 400, '2022-01-23 13:28:44', NULL),
(16, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30616, NULL, 400, '2022-01-23 13:29:19', NULL),
(17, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30617, NULL, 400, '2022-01-23 13:29:51', NULL),
(18, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30618, NULL, 400, '2022-01-23 13:30:17', NULL),
(19, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30619, NULL, 400, '2022-01-23 13:31:33', NULL),
(20, 'ADVANCED MICROPROCESSORS & PERIPHERALS', 1, 'K M Bhurchandi', 1259006131, 30620, NULL, 400, '2022-01-23 13:32:17', NULL),
(21, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21401, NULL, 900, '2022-01-23 13:39:39', '2022-01-23 18:08:41'),
(22, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21402, NULL, 900, '2022-01-23 13:42:56', NULL),
(23, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21403, NULL, 900, '2022-01-23 13:52:04', NULL),
(24, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21404, NULL, 900, '2022-01-23 13:52:32', NULL),
(25, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21405, NULL, 900, '2022-01-23 13:53:03', NULL),
(26, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21406, NULL, 900, '2022-01-23 13:53:36', NULL),
(27, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21407, NULL, 900, '2022-01-23 13:54:08', NULL),
(28, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21408, NULL, 900, '2022-01-23 13:55:16', NULL),
(29, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21409, NULL, 900, '2022-01-23 13:55:55', NULL),
(30, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21410, NULL, 900, '2022-01-23 13:56:20', NULL),
(31, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21411, NULL, 900, '2022-01-23 13:56:55', NULL),
(32, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21412, NULL, 900, '2022-01-23 13:57:39', NULL),
(33, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21413, NULL, 900, '2022-01-23 13:58:06', NULL),
(34, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21414, NULL, 900, '2022-01-23 13:58:49', NULL),
(35, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21415, NULL, 900, '2022-01-23 14:00:01', NULL),
(36, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21416, NULL, 900, '2022-01-23 14:00:23', NULL),
(37, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21417, NULL, 900, '2022-01-23 14:00:58', NULL),
(38, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21418, NULL, 900, '2022-01-23 14:01:25', NULL),
(39, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21419, NULL, 900, '2022-01-23 14:01:48', NULL),
(40, 'Computer Graphics: Principles and Practice', 1, 'James D Foley', 8178080389, 21420, NULL, 900, '2022-01-23 14:02:19', NULL),
(41, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29701, NULL, 350, '2022-01-23 16:16:47', NULL),
(42, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29702, NULL, 350, '2022-01-23 16:18:01', NULL),
(43, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29703, NULL, 350, '2022-01-23 16:18:46', NULL),
(44, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29704, NULL, 350, '2022-01-23 16:19:14', NULL),
(45, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29705, NULL, 350, '2022-01-23 16:19:45', NULL),
(46, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29706, NULL, 350, '2022-01-23 16:20:25', NULL),
(47, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29707, NULL, 350, '2022-01-23 16:20:54', NULL),
(48, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29708, NULL, 350, '2022-01-23 16:21:25', NULL),
(49, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29709, NULL, 350, '2022-01-23 16:22:01', NULL),
(50, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29710, NULL, 350, '2022-01-23 16:22:36', NULL),
(51, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29711, NULL, 350, '2022-01-23 16:23:07', NULL),
(52, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29712, NULL, 350, '2022-01-23 16:23:30', NULL),
(53, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29713, NULL, 350, '2022-01-23 16:23:56', NULL),
(54, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29714, NULL, 350, '2022-01-23 16:24:50', NULL),
(55, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29715, NULL, 350, '2022-01-23 16:25:45', NULL),
(56, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29716, NULL, 350, '2022-01-23 16:26:23', NULL),
(57, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29717, NULL, 350, '2022-01-23 16:26:51', NULL),
(58, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29718, NULL, 350, '2022-01-23 16:27:19', NULL),
(59, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29719, NULL, 350, '2022-01-23 16:27:48', NULL),
(60, 'THEORY OF COMPUTER SCIENCE: AUTOMATA LANGUAGES AND COMPUTATION', 1, 'K L P Mishra', 8120329686, 29720, NULL, 350, '2022-01-23 16:28:16', NULL),
(61, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21701, NULL, 250, '2022-01-23 16:36:05', NULL),
(62, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21702, NULL, 250, '2022-01-23 16:36:44', NULL),
(63, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21703, NULL, 250, '2022-01-23 16:37:08', NULL),
(64, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21704, NULL, 250, '2022-01-23 16:38:08', NULL),
(65, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21705, NULL, 250, '2022-01-23 16:38:41', NULL),
(66, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21706, NULL, 250, '2022-01-23 16:39:09', NULL),
(67, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21707, NULL, 250, '2022-01-23 16:39:34', NULL),
(68, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21708, NULL, 250, '2022-01-23 16:39:59', NULL),
(69, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21709, NULL, 250, '2022-01-23 16:40:39', NULL),
(70, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21710, NULL, 250, '2022-01-23 16:41:17', NULL),
(71, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21711, NULL, 250, '2022-01-23 16:41:52', NULL),
(72, 'Computer Networks', 1, ' Andrew S. Tanenbaum', 8120321758, 21712, NULL, 250, '2022-01-23 16:43:32', '2022-01-23 17:59:41'),
(73, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21713, NULL, 250, '2022-01-23 16:43:55', NULL),
(74, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21714, NULL, 250, '2022-01-23 16:44:17', NULL),
(75, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21715, NULL, 250, '2022-01-23 16:45:01', NULL),
(76, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21716, NULL, 250, '2022-01-23 16:45:36', NULL),
(77, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21717, NULL, 250, '2022-01-23 16:46:19', '2022-01-23 18:00:51'),
(78, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21718, NULL, 250, '2022-01-23 16:50:18', NULL),
(79, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21719, NULL, 250, '2022-01-23 16:52:03', NULL),
(80, 'Computer Networks', 1, 'Andrew S. Tanenbaum', 8120321758, 21720, NULL, 250, '2022-01-23 16:52:38', NULL),
(81, 'Higher Engineering Mathematics ', 7, ' B. S. Grewal', 8193328493, 29401, NULL, 950, '2022-01-23 16:57:58', NULL),
(82, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29402, NULL, 950, '2022-01-23 16:58:47', '2022-01-23 17:52:58'),
(83, 'Higher Engineering Mathematics', 7, 'B. S. Grewal', 8193328493, 29403, NULL, 950, '2022-01-23 17:18:50', NULL),
(84, 'Higher Engineering Mathematics', 7, 'B. S. Grewal', 8193328493, 29404, NULL, 950, '2022-01-23 17:19:43', NULL),
(85, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29405, NULL, 950, '2022-01-23 17:20:29', NULL),
(86, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29406, NULL, 950, '2022-01-23 17:21:07', NULL),
(87, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29407, NULL, 950, '2022-01-23 17:21:35', NULL),
(88, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29408, NULL, 950, '2022-01-23 17:22:01', NULL),
(89, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29409, NULL, 950, '2022-01-23 17:23:01', NULL),
(90, 'Higher Engineering Mathematics ', 7, ' B. S. Grewal', 8193328493, 29410, NULL, 950, '2022-01-23 17:23:33', NULL),
(91, 'Higher Engineering Mathematics', 7, 'B. S. Grewal', 8193328493, 29411, NULL, 950, '2022-01-23 17:24:06', NULL),
(92, 'Higher Engineering Mathematics', 7, 'B. S. Grewal', 8193328493, 29412, NULL, 950, '2022-01-23 17:24:32', '2022-01-23 17:54:38'),
(93, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29413, NULL, 950, '2022-01-23 17:24:57', NULL),
(94, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29414, NULL, 950, '2022-01-23 17:26:22', NULL),
(95, 'Higher Engineering Mathematics ', 7, ' B. S. Grewal', 8193328493, 29415, NULL, 950, '2022-01-23 17:26:47', NULL),
(96, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29416, NULL, 950, '2022-01-23 17:27:17', NULL),
(97, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29417, NULL, 950, '2022-01-23 17:27:49', NULL),
(98, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29418, NULL, 950, '2022-01-23 17:28:15', NULL),
(99, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29419, NULL, 950, '2022-01-23 17:28:45', NULL),
(100, 'Higher Engineering Mathematics ', 7, 'B. S. Grewal', 8193328493, 29420, NULL, 950, '2022-01-23 17:29:16', '2022-01-23 17:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Computer Science/Information Technology', '2022-01-23 12:47:13', '2022-01-23 12:47:13'),
(2, 'Electrical', '2022-01-23 12:57:07', '2022-01-23 12:57:07'),
(3, 'Electronics And Communication  ', '2022-01-23 12:58:27', '2022-01-23 12:58:27'),
(4, 'Mechanical', '2022-01-23 12:59:43', '2022-01-23 12:59:43'),
(5, 'Mining', '2022-01-23 13:00:18', '2022-01-23 13:00:18'),
(6, 'Civil', '2022-01-23 13:00:49', '2022-01-23 13:00:49'),
(7, 'Mathematics', '2022-01-23 13:01:31', '2022-01-23 13:01:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `StudentID`, `IssuesDate`, `ReturnDate`, `RetrunStatus`, `fine`) VALUES
(1, 1, 'BH3493', '2022-01-23 19:38:57', NULL, NULL, NULL),
(2, 21, 'BH3493', '2022-01-23 19:39:23', NULL, NULL, NULL),
(3, 41, 'BH3493', '2022-01-23 19:39:48', NULL, NULL, NULL),
(4, 61, 'BH3493', '2022-01-23 19:40:13', NULL, NULL, NULL),
(5, 81, 'BH3493', '2022-01-23 19:40:39', NULL, NULL, NULL),
(6, 82, 'BH3498', '2022-01-23 19:41:03', NULL, NULL, NULL),
(7, 62, 'BH3498', '2022-01-23 19:41:16', NULL, NULL, NULL),
(8, 42, 'BH3498', '2022-01-23 19:41:34', NULL, NULL, NULL),
(9, 22, 'BH3498', '2022-01-23 19:42:04', NULL, NULL, NULL),
(10, 2, 'BH3498', '2022-01-23 19:42:29', NULL, NULL, NULL),
(11, 63, 'BH3497', '2022-01-23 19:43:04', NULL, NULL, NULL),
(12, 23, 'BH3497', '2022-01-23 19:43:20', NULL, NULL, NULL),
(13, 3, 'BH3497', '2022-01-23 19:43:35', NULL, NULL, NULL),
(14, 83, 'BH3497', '2022-01-23 19:43:58', NULL, NULL, NULL),
(15, 43, 'BH3497', '2022-01-23 19:44:11', NULL, NULL, NULL),
(16, 24, 'BH3496', '2022-01-23 19:44:34', NULL, NULL, NULL),
(17, 64, 'BH3496', '2022-01-23 19:44:49', NULL, NULL, NULL),
(18, 84, 'BH3496', '2022-01-23 19:45:02', NULL, NULL, NULL),
(19, 44, 'BH3496', '2022-01-23 19:45:21', NULL, NULL, NULL),
(20, 4, 'BH3496', '2022-01-23 19:45:50', NULL, NULL, NULL),
(21, 65, 'BH3494', '2022-01-23 19:46:16', NULL, NULL, NULL),
(22, 25, 'BH3494', '2022-01-23 19:46:35', NULL, NULL, NULL),
(23, 45, 'BH3494', '2022-01-23 19:46:57', NULL, NULL, NULL),
(24, 85, 'BH3494', '2022-01-23 19:49:56', NULL, NULL, NULL),
(25, 5, 'BH3494', '2022-01-23 19:50:14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StudentId`, `FullName`, `EmailId`, `MobileNumber`, `Password`, `Status`, `RegDate`, `UpdationDate`) VALUES
(1, 'BH3477', 'Aadarsh Rangare', 'BH3477@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:50:59', NULL),
(2, 'BH3478', 'Abhijeet Sharma', 'BH3478@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:52:24', NULL),
(3, 'BH3479', 'Abhishek Toppo', 'BH3479@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:53:22', NULL),
(4, 'BH3480', 'Afrin Qureshi', 'BH3480@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:55:07', NULL),
(5, 'BH3482', 'Ankush Kumar Singh', 'BH3482@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:56:12', NULL),
(6, 'BH3483', 'Anoop Pratap Singh ', 'BH3483@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:57:36', NULL),
(7, 'BH3484', 'Anshu Kumari', 'BH3484@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:58:33', NULL),
(8, 'BH3485', 'Anushka Shrivastava', 'BH3485@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 18:59:47', NULL),
(9, 'BH3486', 'Arwaz Khan', 'BH3486@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:00:27', NULL),
(10, 'BH3488', 'Chetan Dhruw', 'BH3488@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:01:20', NULL),
(11, 'Bh3489', 'Deep Ghritlahre', 'BH3489@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:02:42', NULL),
(12, 'BH3490', 'Deepmala Ekka', 'BH3490@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:03:47', NULL),
(13, 'BH3491', 'Ganesh Sidar', 'BH3491@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:04:49', NULL),
(14, 'BH3492', 'Himanshu Sahu', 'BH3492@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:05:39', NULL),
(15, 'BH3493', 'Himanshu Sorthe', 'BH3493@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:06:36', NULL),
(16, 'BH3494', 'Ishwar Sahu', 'BH3494@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:07:35', NULL),
(17, 'BH3495', 'Jyoti', 'BH3495@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:08:24', NULL),
(18, 'BH3496', 'Jyoti', 'BH3496@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:09:08', NULL),
(19, 'BH3497', 'Lekeshwar Das', 'BH3497@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:10:57', NULL),
(20, 'BH3498', 'Manoj Kumar Burman', 'BH3498@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:11:59', NULL),
(21, 'BH3499', 'Meghraj Dewangan', 'BH3499@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:12:41', NULL),
(22, 'BH3500', 'Neela Sidar', 'BH3500@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:14:12', NULL),
(23, 'BH3501', 'Prachi Sahu', 'BH3501@csvtu.ac.in', '123456789', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:15:03', NULL),
(24, 'BH3502', 'Prankit Sahu', 'BH3502@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:15:50', NULL),
(25, 'BH3504', 'Prem Kumar Painkra', 'BH3504@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:16:56', NULL),
(26, 'BH3505', 'Rakesh Singh Sidar', 'BH3505@csvtu.ac.in', '123456789', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:17:41', NULL),
(27, 'BH3506', 'Ranjan Singh ', 'BH3506@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:18:19', NULL),
(28, 'BH3507', 'Rishabh Dwivedi', 'BH3507@csvtu.ac.in', '123456789', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:19:29', NULL),
(29, 'BH3508', 'Rishita Bhriegu', 'BH3508@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:20:36', NULL),
(30, 'BH3509', 'Ritik Kumar Sahu', 'BH3509@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:21:16', NULL),
(31, 'BH3510', 'Rohan Bairagi', 'BH3510@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:24:01', NULL),
(32, 'BH3511', 'Rupal Das', 'BH3511@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:25:05', NULL),
(33, 'BH3512', 'Samriddhi Tandan', 'BH3512@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:26:16', NULL),
(34, 'BH3513', 'Sanya Ramchandani', 'BH3513@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:27:27', NULL),
(35, 'BH3514', 'Shailendra Sonar', 'BH3514@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:28:46', NULL),
(36, 'BH3515', 'Siddharth Kumar', 'BH3515@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:29:31', NULL),
(37, 'BH3516', 'Srishthi Gauraha', 'BH3516@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:30:30', NULL),
(38, 'BH3517', 'Ankita Kshatriya', 'BH3517@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:31:19', NULL),
(39, 'BH3518', 'Pushpendra Kumar', 'BH3518@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:32:56', NULL),
(40, 'BH3519', 'Suman Kaiwart', 'BH3519@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:34:14', NULL),
(41, 'BH3520', 'Varsha Sahu', 'BH3520@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:34:55', NULL),
(42, 'BH3521', 'Ramesh Bhagat', 'BH3521@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:35:33', NULL),
(43, 'BH3522', 'Sanit Gonard', 'BH3522@csvtu.ac.in', '1234567890', '202cb962ac59075b964b07152d234b70', 1, '2022-01-23 19:36:30', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
