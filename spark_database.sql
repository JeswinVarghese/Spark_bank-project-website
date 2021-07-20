-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 08:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Balance` int(11) NOT NULL DEFAULT 1000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Email`, `Phone`, `Balance`) VALUES
(1, 'Amal K', 'amalk123@gmail.com', '9864271513', 9500),
(2, 'Rohan V', 'rohann@gmail.com', '8997682134', 8289),
(3, 'kishore Dev', 'kishdev@gmail.com', '8779546212', 5500),
(4, 'David Abraham', 'davidab369@gmail.com', '8945212234', 9400),
(5, 'Rajan G', 'rajan543@gmail.com', '8735208754', 5800),
(6, 'John G', 'johnjohn@gmail.com', '9231898455', 6000),
(7, 'Madahavan Nair', 'madhav@gmail.com', '8796740244', 12100),
(8, 'Abhishek Abhi', 'abhi12@gmail.com', '8054782166', 6100),
(9, 'Stanly M', 'stanly123@gmail.com', '8979923512', 2711),
(10, 'Justin Roy', 'justinroy23@gmail.com', '9835618964', 7600);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sno` int(5) NOT NULL,
  `Name1` varchar(30) NOT NULL,
  `Name2` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sno`, `Name1`, `Name2`, `Amount`, `Time`) VALUES
(1, 'David Abraham', 'Rajan G', 400, '2021-07-19 05:02:56'),
(2, 'Madahavan Nair', 'Stanly M', 2000, '2021-07-19 05:04:20'),
(3, 'Rohan V', 'Justin Roy', 600, '2021-07-19 05:05:12'),
(4, 'John G', 'Stanly M', 300, '2021-07-19 05:05:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
