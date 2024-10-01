-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 05:47 PM
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
-- Database: `id21717361_goinvestment`
--

-- --------------------------------------------------------

--
-- Table structure for table `invested_companies`
--

CREATE TABLE `invested_companies` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_no` varchar(25) NOT NULL,
  `shares_owned` varchar(25) NOT NULL,
  `amount_invested` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invested_companies`
--

INSERT INTO `invested_companies` (`id`, `product_id`, `user_no`, `shares_owned`, `amount_invested`) VALUES
(1, 2, 'IND002', '3.28', '300'),
(2, 3, 'IND002', '1.455', '140');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invested_companies`
--
ALTER TABLE `invested_companies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invested_companies`
--
ALTER TABLE `invested_companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
