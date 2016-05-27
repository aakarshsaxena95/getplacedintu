-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2015 at 06:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `User_name` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `User_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_name`, `Password`, `User_id`) VALUES
('aarush', '1234', 'a_gupta'),
('aarthi', '1234', 'a_iyer'),
('aakarsh', '1234', 'a_saxena');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `U_id` int(10) NOT NULL,
  `Password` int(10) NOT NULL,
  `Passout year` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Comments` text NOT NULL,
  `User_id` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`U_id`, `Password`, `Passout year`, `Name`, `Comments`, `User_id`) VALUES
(1, 1, 2015, 'aakarsh saxena', 'hello world', 'aakarshsaxena95@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `btech placements`
--

CREATE TABLE IF NOT EXISTS `btech placements` (
  `Bc_id` int(5) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btech placements`
--

INSERT INTO `btech placements` (`Bc_id`, `Branch`, `Number`) VALUES
(1, 'MCA', 1),
(2, 'CS', 12),
(4, 'CS', 4),
(5, 'CS', 2),
(5, 'EC', 2),
(5, 'EIC', 1),
(6, 'CS', 1),
(6, 'MCA', 1),
(7, 'EIC', 1),
(7, 'MEH', 1),
(9, 'EC', 1),
(10, 'CS', 6),
(10, 'EC', 3),
(11, 'CS', 3),
(12, 'CH', 1),
(12, 'CS', 5),
(12, 'EC', 10),
(12, 'EIC', 4),
(13, 'EC', 1),
(14, 'CS', 11),
(14, 'MCA', 1),
(15, 'CS', 14),
(15, 'EC', 6),
(15, 'EE', 4),
(15, 'EIC', 4),
(16, 'CS', 4),
(16, 'EC', 1),
(17, 'CE', 13),
(17, 'MEH', 6),
(18, 'EC', 2),
(18, 'EE', 2),
(18, 'EIC', 1),
(18, 'MEH', 1),
(19, 'CS', 1),
(20, 'CS', 7),
(20, 'MCA', 4),
(21, 'CS', 35),
(21, 'MCA', 2),
(22, 'CS', 7),
(22, 'EC', 8),
(22, 'MCA', 4),
(23, 'CS', 7),
(24, 'EE', 2),
(24, 'MEH', 2),
(25, 'CS', 2),
(25, 'MCA', 1),
(26, 'CS', 3),
(27, 'CE', 1),
(27, 'EIC', 2),
(27, 'MEH', 3),
(28, 'EC', 4),
(29, 'EE', 8),
(31, 'CS', 2),
(32, 'CS', 4),
(32, 'MCA', 4),
(34, 'CS', 3),
(35, 'MEH', 1),
(36, 'CS', 4),
(36, 'EC', 2),
(36, 'MCA', 1),
(37, 'CS', 10),
(37, 'EC', 2),
(38, 'MEH', 3),
(39, 'BT', 4),
(39, 'CH', 2),
(39, 'CS', 8),
(39, 'EC', 22),
(39, 'EE', 4),
(39, 'EIC', 17),
(39, 'MCA', 16),
(40, 'CS', 1),
(40, 'EC', 1),
(40, 'MCA', 2),
(41, 'CH', 5),
(41, 'EC', 10),
(41, 'EE', 5),
(41, 'EIC', 6),
(41, 'MCA', 1),
(41, 'MEH', 5),
(42, 'CS', 3),
(42, 'EC', 4),
(42, 'EIC', 5),
(43, 'MEH', 3),
(44, 'CS', 8),
(44, 'MCA', 9),
(45, 'MEH', 1),
(46, 'CH', 1),
(46, 'EIC', 1),
(47, 'MEH', 4),
(48, 'CH', 1),
(48, 'EIC', 1),
(48, 'MEH', 1),
(49, 'CS', 2),
(49, 'MCA', 2),
(50, 'BT', 1),
(50, 'CE', 3),
(50, 'CH', 4),
(50, 'CS', 8),
(50, 'EC', 5),
(50, 'EE', 5),
(50, 'EIC', 4),
(50, 'MCA', 7),
(50, 'MEH', 3),
(51, 'CE', 1),
(51, 'CH', 1),
(51, 'CS', 1),
(51, 'EC', 1),
(51, 'EIC', 1),
(51, 'MEH', 1),
(52, 'CS', 2),
(53, 'BT', 1),
(53, 'CS', 1),
(53, 'EC', 7),
(53, 'MEH', 1),
(55, 'CH', 11),
(55, 'EE', 3),
(55, 'EIC', 12),
(55, 'MEH', 9),
(56, 'BT', 1),
(57, 'CE', 3),
(57, 'EE', 1),
(57, 'MEH', 3),
(58, 'CS', 1),
(58, 'EIC', 2),
(58, 'MCA', 9),
(59, 'EIC', 2),
(60, 'CE', 1),
(60, 'CS', 2),
(60, 'MCA', 2),
(60, 'MEH', 4),
(61, 'CH', 1),
(61, 'MEH', 1),
(62, 'MEH', 4),
(63, 'CH', 1),
(64, 'CS', 2),
(64, 'MCA', 2),
(65, 'MEH', 1),
(66, 'CS', 1),
(67, 'MCA', 4),
(68, 'MCA', 1),
(69, 'CS', 1),
(69, 'EC', 2),
(70, 'MEH', 3),
(71, 'EE', 2),
(71, 'MEH', 4),
(72, 'EC', 4),
(73, 'CS', 2),
(73, 'EC', 2),
(73, 'EE', 1),
(73, 'EIC', 1),
(74, 'MEH', 3),
(75, 'BT', 1),
(75, 'EE', 1),
(75, 'MEH', 1),
(77, 'BT', 1),
(77, 'CE', 1),
(77, 'CH', 2),
(77, 'MEH', 3),
(78, 'BT', 1),
(78, 'CE', 1),
(78, 'CH', 1),
(78, 'EC', 1),
(79, 'CS', 2),
(79, 'MCA', 1),
(80, 'CE', 2),
(86, 'EC', 4),
(91, 'CS', 2),
(91, 'MEH', 6),
(93, 'CE', 2),
(93, 'MEH', 2),
(94, 'EE', 2),
(95, 'CE', 4),
(95, 'CH', 4),
(98, 'EE', 1),
(98, 'EIC', 1),
(98, 'MEH', 1),
(99, 'CE', 5),
(102, 'CS', 1),
(104, 'CS', 3),
(105, 'BT', 1),
(106, 'CS', 1),
(106, 'MCA', 1),
(108, 'CH', 1),
(108, 'MEH', 1),
(109, 'CS', 2),
(109, 'EC', 1),
(118, 'MEH', 1),
(119, 'EE', 1),
(119, 'MCA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `btech salary`
--

CREATE TABLE IF NOT EXISTS `btech salary` (
  `Bc_id` int(5) NOT NULL,
  `Salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btech salary`
--

INSERT INTO `btech salary` (`Bc_id`, `Salary`) VALUES
(2, 7.5),
(4, 16),
(5, 6.34),
(6, 18),
(7, 8.5),
(9, 10.21),
(10, 7.68),
(11, 8.75),
(12, 4.75),
(13, 6),
(14, 6),
(15, 6.27),
(16, 6),
(17, 3.1),
(18, 5.65),
(19, 7.5),
(20, 5.5),
(21, 7.75),
(22, 4.5),
(23, 7),
(24, 4.8),
(25, 8),
(26, 6),
(27, 4.49),
(28, 9.54),
(29, 4.75),
(31, 9.5),
(32, 5.7),
(34, 7.75),
(35, 5),
(36, 5),
(37, 23),
(38, 5.6),
(39, 3.16),
(40, 5),
(41, 3.4),
(42, 4.5),
(43, 4.03),
(44, 3.5),
(45, 4.5),
(46, 4.56),
(47, 3.5),
(48, 4.25),
(49, 4),
(50, 3.25),
(51, 4),
(52, 4.5),
(53, 3.6),
(55, 5.5),
(56, 3),
(57, 3.6),
(58, 3.5),
(59, 4.25),
(60, 5.4),
(61, 3.75),
(62, 4),
(63, 8),
(64, 3.8),
(65, 4.8),
(66, 9),
(67, 3.45),
(68, 2.5),
(69, 5),
(70, 4.2),
(71, 9),
(72, 5),
(73, 4.95),
(74, 2.82),
(75, 5.5),
(77, 5.6),
(78, 4.15),
(79, 5),
(80, 3.6),
(86, 3.5),
(91, 6.25),
(93, 3.6),
(94, 3.8),
(95, 16.28),
(98, 7),
(99, 3.86),
(102, 5),
(104, 7),
(105, 2.5),
(106, 4.8),
(108, 6.25),
(109, 4.2),
(118, 5),
(119, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `company details`
--

CREATE TABLE IF NOT EXISTS `company details` (
  `C_id` int(10) NOT NULL DEFAULT '0',
  `C_name` varchar(50) NOT NULL,
  `CG_criteria` float NOT NULL,
  `Email_id` text NOT NULL,
  `Ph_no` varchar(20) NOT NULL,
  `About` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company details`
--

INSERT INTO `company details` (`C_id`, `C_name`, `CG_criteria`, `Email_id`, `Ph_no`, `About`) VALUES
(1, 'Thorogood Associates', 0, 'contactus@thorogood.com', '+91 (0)80 4123 3700', 'Thorogood is a specialist Business Intelligence and Analytics consultancy.'),
(2, 'Oracle India', 0, 'https://www.oracle.com/corporate/careers/\r\n', ' 000-800-1007789', 'From the most comprehensive portfolio of cloud solutions, to the world''s no. 1 enterprise database, Oracle offers the choice and flexibility to meet your business requirements.'),
(3, 'Google India', 0, 'https://www.google.co.in/about/company/facts/locations/', '+91-80-67218000', 'Google Inc. is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software.'),
(4, 'Microsoft IT India', 0, 'https://support.microsoft.com/en-in/contactus', ' 040-66936239', 'MSIT India employs a pool of talented IT professionals who consider the Centre as a great place to build their career, and help the customers and partners realize their full potential. '),
(5, 'ZS Associates India Pvt. Ltd.', 0, 'web@zsassociates.com', '0855-972-4769', 'ZS Associates is a sales and marketing consulting and technology firm  that provides counsel in the areas of product development, strategy creation and planning for clients.'),
(6, 'D.E. Shaw (I) Software Pvt. Ltd.', 0, '', '0', ''),
(7, 'Futures First Info Services Pvt. Ltd.', 0, '', '0', ''),
(8, 'Amazon India Dev. Centre', 0, '', '0', ''),
(9, 'Sandisk Corp.', 0, '', '0', ''),
(10, 'Amadeus Software Lab. India Ltd.', 0, '', '0', ''),
(11, 'Infomatica Corporation', 0, '', '0', ''),
(12, 'EXL Services', 0, '', '0', ''),
(13, 'Exocom Tele Systems', 0, '', '0', ''),
(14, 'Make My Trip.com', 0, '', '0', ''),
(15, 'Deloitte Consulting India Pvt. Ltd.', 0, '', '0', ''),
(16, 'Indus Valley Partners', 0, '', '0', ''),
(17, 'L & T Construction', 0, '', '0', ''),
(18, 'The Smart Cube', 0, '', '0', ''),
(19, 'Winshuttle India ltd.', 0, '', '0', ''),
(20, 'Edifecs Technologies  Pvt. Ltd.', 0, '', '0', ''),
(21, 'Samsung Research India', 0, '', '0', ''),
(22, 'Sapient Nitro', 0, '', '0', ''),
(23, 'MAQ Software', 0, '', '0', ''),
(24, 'Havells India Ltd.', 0, '', '0', ''),
(25, 'Success Factors Business Solutions India Pvt. ltd.', 0, '', '0', ''),
(26, 'Naukri.com', 0, '', '0', ''),
(27, 'Samsung Engineering (I) Pvt. Ltd.', 0, '', '0', ''),
(28, 'Freescale Semi Conductors (I) ltd.', 0, '', '0', ''),
(29, 'Schneider Electric', 0, '', '0', ''),
(30, 'MU  Sigma Business Solutions', 0, '', '0', ''),
(31, 'Gwynnievee India', 0, '', '0', ''),
(32, 'libsys Corporation', 0, '', '0', ''),
(33, 'Hindustan Unilever ltd.', 0, '', '0', ''),
(34, 'Samsung India Electronics Noida', 0, '', '0', ''),
(35, 'VE Commercial Vehicles ltd.', 0, '', '0', ''),
(36, 'Mahindra Comviva Technologies Ltd.', 0, '', '0', ''),
(37, 'Hikari Tsushin', 0, '', '0', ''),
(38, 'Tata Motors', 0, '', '0', ''),
(39, 'TCS', 0, '', '0', ''),
(40, 'Nagarro Software', 0, '', '0', ''),
(41, 'IBM', 0, '', '0', ''),
(42, 'Nucules Software', 0, '', '0', ''),
(43, 'ISGEC', 0, '', '0', ''),
(44, 'Infogain India  Pvt. Ltd.', 0, '', '0', ''),
(45, 'Whirlpool of India', 0, '', '0', ''),
(46, 'Technip KT India Ltd.', 0, '', '0', ''),
(47, 'Honda Motorcycle &  Scooter India Ltd.', 0, '', '0', ''),
(48, 'Mondetez International-Cadbury', 0, '', '0', ''),
(49, 'Start Up Farms IT Pvt.Ltd.', 0, '', '0', ''),
(50, 'Infosys Technologies', 0, '', '0', ''),
(51, 'Absolutdata', 0, '', '0', ''),
(52, 'KPMG', 0, '', '0', ''),
(53, 'TT Consultants', 0, '', '0', ''),
(54, 'Paxcel Technologies', 0, '', '0', ''),
(55, 'Relieance Industries Ltd.', 0, '', '0', ''),
(56, 'Root Analysis Business Research & Consulting', 0, '', '0', ''),
(57, 'Crompton Greaves ltd.', 0, '', '0', ''),
(58, 'Aricent Technologies', 0, '', '0', ''),
(59, 'SAB Miller India', 0, '', '0', ''),
(60, 'Maruti Suzuki (I) Ltd.', 0, '', '0', ''),
(61, 'Jindal Steel Works (JSW)', 0, '', '0', ''),
(62, 'Anand Groups', 0, '', '0', ''),
(63, 'UOP', 0, '', '0', ''),
(64, 'Stone Wair Systems', 0, '', '0', ''),
(65, 'Alstom India', 0, '', '0', ''),
(66, 'Z-Scaler', 0, '', '0', ''),
(67, 'Markit India', 0, '', '0', ''),
(68, 'RTS Systems', 0, '', '0', ''),
(69, 'Century Link', 0, '', '0', ''),
(70, 'Steel Strips Group ', 0, '', '0', ''),
(71, 'Trident Group', 0, '', '0', ''),
(72, 'Idea Cellular', 0, '', '0', ''),
(73, 'Oracle Financial Services', 0, '', '0', ''),
(74, 'LSR Group of Comps.', 0, '', '0', ''),
(75, 'Stryker  Corporation', 0, '', '0', ''),
(76, 'Elegant Marine Services', 0, '', '0', ''),
(77, 'Aakash Educational Services', 0, '', '0', ''),
(78, 'G-Rail', 0, '', '0', ''),
(79, 'Software AG', 0, '', '0', ''),
(80, 'lovely Professional University', 0, '', '0', ''),
(81, 'Vardhaman Group', 0, '', '0', ''),
(82, 'Seaworld  Martime', 0, '', '0', ''),
(83, 'Premier Biosoft Ltd.', 0, '', '0', ''),
(84, 'Navyug Infosolutions Ltd.', 0, '', '0', ''),
(85, 'Marwadi Education Foundation', 0, '', '0', ''),
(86, 'Bharti Airtel Ltd.', 0, '', '0', ''),
(87, 'GATI ltd.', 0, '', '0', ''),
(88, 'Orient Electric Ltd.', 0, '', '0', ''),
(89, 'Kayko', 0, '', '0', ''),
(90, 'Fractal Analytics', 0, '', '0', ''),
(91, 'Hero Motocorp Ltd.', 0, '', '0', ''),
(92, 'Mewar University', 0, '', '0', ''),
(93, 'Triune Energy Services', 0, '', '0', ''),
(94, 'Secure Meters', 0, '', '0', ''),
(95, 'Samsung Engineering Ltd.', 0, '', '0', ''),
(96, 'DEF Team Solutions', 0, '', '0', ''),
(97, 'biltech Building Elements', 0, '', '0', ''),
(98, 'Dabur India', 0, '', '0', ''),
(99, 'AFCONS Infrastructures Ltd.', 0, '', '0', ''),
(100, 'Bharat Institute of Technology', 0, '', '0', ''),
(101, 'APG Shimla University', 0, '', '0', ''),
(102, 'Saviance Technologies', 0, '', '0', ''),
(103, 'Aspiring Minds', 0, '', '0', ''),
(104, 'Snapdeal.com', 0, '', '0', ''),
(105, 'Informaths', 0, '', '0', ''),
(106, 'Black N Green India', 0, '', '0', ''),
(107, 'ACG Value link Ltd.', 0, '', '0', ''),
(108, 'Loreal India', 0, '', '0', ''),
(109, 'Amdocs India', 0, '', '0', ''),
(110, 'Bechtel India', 0, '', '0', ''),
(111, 'u trade Solutions', 0, '', '0', ''),
(112, 'Virtual Info', 0, '', '0', ''),
(113, 'Aakar Edu.Services', 0, '', '0', ''),
(114, 'Orange Twig', 0, '', '0', ''),
(115, 'Ericsson India', 0, '', '0', ''),
(116, 'Ramboll India', 0, '', '0', ''),
(117, 'Sobha Developers', 0, '', '0', ''),
(118, 'Oxylane Group', 0, '', '0', ''),
(119, 'Beta Soft Systems', 0, '', '0', ''),
(120, 'Computer Sc. Corporation', 0, '', '0', ''),
(121, 'Bonn Industries', 0, '', '0', ''),
(122, 'Aakash management Services', 0, '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `mtech placements`
--

CREATE TABLE IF NOT EXISTS `mtech placements` (
  `Mc_id` int(5) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech placements`
--

INSERT INTO `mtech placements` (`Mc_id`, `Branch`, `Number`) VALUES
(9, 'VLSI', 1),
(15, 'CS', 2),
(15, 'CSA', 1),
(17, 'EIC', 1),
(21, 'CS', 1),
(23, 'CSA', 2),
(26, 'IS', 1),
(28, 'VLSI', 1),
(31, 'CS', 1),
(34, 'CSA', 1),
(34, 'SW', 2),
(39, 'CS', 9),
(39, 'CSA', 5),
(39, 'EC', 5),
(39, 'S', 1),
(39, 'SW', 8),
(40, 'CS', 1),
(40, 'SW', 2),
(41, 'CAD', 2),
(41, 'CS', 1),
(41, 'CSA', 1),
(41, 'EC', 1),
(41, 'IS', 1),
(41, 'POW', 1),
(41, 'SW', 2),
(41, 'VLSI', 1),
(41, 'WR', 2),
(44, 'CS', 1),
(44, 'SW', 1),
(50, 'CAD', 3),
(50, 'CS', 4),
(50, 'CSA', 1),
(50, 'IS', 2),
(50, 'POW', 2),
(50, 'SW', 3),
(50, 'VLSI', 4),
(50, 'WR', 2),
(56, 'BIO-TECH', 1),
(58, 'CS', 2),
(58, 'CSA', 4),
(58, 'EC', 1),
(58, 'IS', 3),
(58, 'SW', 2),
(58, 'VLSI', 3),
(58, 'WR', 2),
(73, 'CSA', 2),
(73, 'SW', 1),
(75, 'CSA', 1),
(77, 'BIO-TECH', 1),
(79, 'CSA', 1),
(79, 'SW', 2),
(80, 'CAD', 3),
(80, 'CSA', 1),
(80, 'EC', 3),
(80, 'INR', 1),
(80, 'IS', 2),
(80, 'POW', 1),
(80, 'PRD', 3),
(80, 'STR', 6),
(80, 'SW', 3),
(80, 'THE', 6),
(80, 'VLSI', 2),
(80, 'WR', 1),
(83, 'BIO-TECH', 1),
(85, 'CAD', 2),
(85, 'ENV', 3),
(85, 'INR', 1),
(85, 'MT. SC', 2),
(85, 'POW', 3),
(85, 'PRD', 1),
(85, 'STR', 1),
(85, 'THE', 2),
(92, 'CAD', 1),
(92, 'PRD', 1),
(100, 'EC', 1),
(100, 'IS', 1),
(100, 'VLSI', 1),
(101, 'CAD', 1),
(101, 'IS', 1),
(101, 'SW', 1),
(101, 'THE', 1),
(110, 'CSA', 2),
(111, 'CS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mtech salary`
--

CREATE TABLE IF NOT EXISTS `mtech salary` (
  `mc_id` int(5) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtech salary`
--

INSERT INTO `mtech salary` (`mc_id`, `salary`) VALUES
(9, 11.56),
(15, 6.27),
(17, 3.21),
(21, 7.75),
(23, 7),
(26, 8.14),
(28, 10.31),
(31, 10),
(34, 9.11),
(39, 3.3),
(40, 5),
(41, 3.75),
(44, 3.5),
(50, 3.5),
(56, 3),
(58, 3.5),
(73, 4.95),
(75, 6.5),
(77, 5.6),
(79, 5),
(80, 4.8),
(83, 3.25),
(85, 4.66),
(92, 3.2),
(100, 4.27),
(101, 3.6),
(110, 4.8),
(111, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `btech placements`
--
ALTER TABLE `btech placements`
  ADD PRIMARY KEY (`Bc_id`,`Branch`);

--
-- Indexes for table `btech salary`
--
ALTER TABLE `btech salary`
  ADD PRIMARY KEY (`Bc_id`);

--
-- Indexes for table `company details`
--
ALTER TABLE `company details`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `mtech placements`
--
ALTER TABLE `mtech placements`
  ADD PRIMARY KEY (`Mc_id`,`Branch`);

--
-- Indexes for table `mtech salary`
--
ALTER TABLE `mtech salary`
  ADD PRIMARY KEY (`mc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `U_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `btech placements`
--
ALTER TABLE `btech placements`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`Bc_id`) REFERENCES `company details` (`C_id`);

--
-- Constraints for table `btech salary`
--
ALTER TABLE `btech salary`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`Bc_id`) REFERENCES `btech placements` (`Bc_id`);

--
-- Constraints for table `mtech placements`
--
ALTER TABLE `mtech placements`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Mc_id`) REFERENCES `company details` (`C_id`);

--
-- Constraints for table `mtech salary`
--
ALTER TABLE `mtech salary`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`mc_id`) REFERENCES `mtech placements` (`Mc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
