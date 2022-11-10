-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2022 at 01:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` bigint(20) NOT NULL,
  `User_Name` text NOT NULL,
  `Message` text NOT NULL DEFAULT 'NL',
  `file` varchar(500) NOT NULL,
  `File_Name` text NOT NULL,
  `Time_Stamps` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `User_Name`, `Message`, `file`, `File_Name`, `Time_Stamps`) VALUES
(1, 'Henil Code', 'Hello Welcome to Live chat.', '', '', '10:48 pm'),
(2, 'Henil Code', 'website in add some features.', '', '', '10:49 pm'),
(3, 'Henil Code', 'now you can see name of message sender.', '', '', '10:49 pm'),
(40, 'Surya', 'Hii', '', '', '08:40 pm'),
(41, 'Henil Code', 'hi\r\n', '', '', '08:41 pm'),
(43, 'Henil Code', 'ohh nice\r\n', '', '', '08:42 pm'),
(47, 'Henil Code', 'hi\r\n', '', '', '5:15 pm'),
(48, 'Henil Code', 'he', '', '', '5:16 pm'),
(49, 'Sir_premji', 'Hlo', '', '', '10:57 am'),
(50, 'Henil Code', 'hi', '', '', '10:57 am'),
(51, 'Henil Code', 'welcome bro', '', '', '10:57 am'),
(52, 'Sir_premji', 'Thxs', '', '', '10:59 am'),
(54, 'Henil Code', 'hmm', '', '', '10:59 am'),
(56, 'Henil Code', 'Hi', '', '', '11:14 am'),
(60, 'Surya', 'Hii', '', '', '11:45 am'),
(61, 'henil code', 'hello surya', '', '', '12:01 pm'),
(62, 'henil code', 'hello', '', '', '18-May-2022 7:28 pm'),
(63, 'Henil code', 'Hi', '', '', '19-May-2022 10:06 pm'),
(64, 'Henil code', 'Hi', '', '', '22-May-2022 4:40 pm'),
(65, 'henil code', 'Hi', '1653397624Photo_.jpg', 'Photo_.jpg', '24-May-2022 6:37 pm'),
(66, 'henil code', 'hello', '1654695534', '', '08-Jun-2022 7:08 pm'),
(67, 'henil', 'd', '1666319138', '', '21-Oct-2022 7:55 am'),
(68, 'henil', 'ejw', '1666319140', '', '21-Oct-2022 7:55 am');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `ID` bigint(20) NOT NULL,
  `UNAME` text NOT NULL,
  `UPASSWORD` text NOT NULL,
  `UEMAIL` text NOT NULL,
  `STATUS` text NOT NULL DEFAULT 'PENDING',
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`ID`, `UNAME`, `UPASSWORD`, `UEMAIL`, `STATUS`, `time_stamp`) VALUES
(1, 'henil', '123', 'henil@heem.e', 'VERIFIED', '2022-10-21 02:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
