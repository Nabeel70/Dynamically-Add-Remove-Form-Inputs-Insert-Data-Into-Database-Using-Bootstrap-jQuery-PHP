-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 01:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `khata_voucher`
--

CREATE TABLE `khata_voucher` (
  `id` int(11) NOT NULL,
  `khata` int(11) NOT NULL,
  `quality` text NOT NULL,
  `bill` int(11) NOT NULL,
  `customer` text NOT NULL,
  `lot` int(11) NOT NULL,
  `thaan` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khata_voucher`
--

INSERT INTO `khata_voucher` (`id`, `khata`, `quality`, `bill`, `customer`, `lot`, `thaan`, `qty`) VALUES
(7, 1, 'good', 2, 'zain', 2, 2, 2),
(8, 2, 'average', 2, 'joy', 1, 1, 1),
(9, 2, 'average', 3, 'alex', 1, 1, 1),
(10, 1, 'good', 2, 'alex', 23, 23, 23),
(11, 1, 'good', 3, 'joy', 7823, 2378, 789),
(12, 1, 'good', 4, 'zain', 89, 923, 23),
(13, 1, 'good', 5, 'zain', 12, 2398, 323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khata_voucher`
--
ALTER TABLE `khata_voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khata_voucher`
--
ALTER TABLE `khata_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
