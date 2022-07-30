-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 05:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `ProfilePic`, `CreationDate`) VALUES
(16, 'popi papa', 'loli', 987654342, 'popi@gmail.com', 'jb hoi', 'd41d8cd98f00b204e9800998ecf8427e1658693287.jpg', '2022-07-29 14:22:15'),
(18, 'hulk', 'kil', 1234563424, 'hulk@gmail.com', 'sss sss ddd d d d ddd', 'd41d8cd98f00b204e9800998ecf8427e1659026995.jpg', '2022-07-28 16:49:55'),
(19, 'ahsan', 'again', 2232341414, 'ag@gmail.com', 'joaq q qe we ewe w', 'd41d8cd98f00b204e9800998ecf8427e1659028619.jpg', '2022-07-28 17:16:59'),
(20, 'bbb', 'qq', 6667886787, 'hhh@gmail.com', 'gtuf y', 'd41d8cd98f00b204e9800998ecf8427e1659099616.jpg', '2022-07-29 13:00:16'),
(21, 'man', 'man', 1212121212, 'man@gmail.com', 'fsdb s srgbrw ', 'd41d8cd98f00b204e9800998ecf8427e1659102144.jpg', '2022-07-29 13:42:24'),
(22, 'masum', 'jared', 1231243143, 'manfred@gmail.com', 'group', 'd41d8cd98f00b204e9800998ecf8427e1659103300.jpg', '2022-07-29 14:02:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
