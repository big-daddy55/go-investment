-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 06:27 PM
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
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `user_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`user_id`, `user_no`, `business_name`, `email`) VALUES
(1, 'BUS001', 'DerryAce Designs', 'derryace.de@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `user_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT 'public/resource/images/uploads/profile/default.png',
  `phone_number` varchar(10) DEFAULT NULL,
  `dob` date NOT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`user_id`, `user_no`, `first_name`, `last_name`, `email`, `profile_photo`, `phone_number`, `dob`, `country`) VALUES
(1, 'IND001', 'Derrick', 'Azaglo', 'derrick@gmail.com', '\'public/resource/images/uploads/profile/IND001Designer.jpeg\'', '0549632604', '2024-01-25', 'Ghana'),
(4, 'IND002', 'Ricky', 'Azaglo', 'rick@gmail.com', '\'/public/resource/images/uploads/profile/IND002Designer (1).jpeg\'', '0500276193', '2023-12-27', 'Ghana');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `stock_price` varchar(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `stock_price`, `description`, `company_logo`, `industry`) VALUES
(1, 'Coca-Cola', '0.13', 'Global Beverage Icon: Coca-Cola, a global beverage giant, leads in Ghana with its diverse range of non-alcoholic drinks, making a positive impact on communities with a commitment to refreshment.', 'public/resource/images/cocacola.png', 'Beverage'),
(2, 'Twellium Industrial', '18.45', 'Diversified F&B Leader: Twellium Industrial Company in Ghana is known for innovation and quality in producing bottled water, energy drinks, and juices, providing refreshing and nutritious options.', 'public/resource/images/twellium.png', 'Food & Beverage'),
(3, 'Ghana Commercial Bank', '20.34', 'Banking Excellence: Ghana Commercial Bank (GCB), a prominent financial institution, has a rich history, offering comprehensive banking services and contributing significantly to Ghana\'s economic development.', 'public/resource/images/gcb.png', 'Financial Service'),
(4, 'MTN Group', '42.34', 'Telecom Connectivity Leader: MTN Group, a telecom and mobile network giant, plays a crucial role in connecting people and businesses across Africa and the Middle East, driving economic development through digital innovation and reliable services.', 'public/resource/images/mtn.jpeg', 'Telecommunication'),
(5, 'Access Bank', '32.56', 'Innovative Financial Partner: Access Bank in Ghana is a leading financial institution committed to fostering economic growth through innovation, technology, and tailored financial solutions for businesses and individuals.', 'public/resource/images/access.png', 'Financial Service');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `business_number` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `business_website` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `company_revenue` varchar(255) NOT NULL,
  `income_per_day` varchar(255) NOT NULL,
  `losses_per_day` varchar(255) NOT NULL,
  `financial_statement` varchar(255) NOT NULL,
  `founder_name` varchar(255) NOT NULL,
  `number_of_executive` varchar(255) NOT NULL,
  `number_of_board` varchar(255) NOT NULL,
  `number_of_branches` varchar(255) NOT NULL,
  `product_and_services` varchar(255) NOT NULL,
  `risk_factors` varchar(255) NOT NULL,
  `company_policy` varchar(255) NOT NULL,
  `number_of_employees` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT '/public/resource/images/uploads/profile/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `user_no`, `company_name`, `email`, `industry`, `business_number`, `business_type`, `business_website`, `phone_number`, `company_revenue`, `income_per_day`, `losses_per_day`, `financial_statement`, `founder_name`, `number_of_executive`, `number_of_board`, `number_of_branches`, `product_and_services`, `risk_factors`, `company_policy`, `number_of_employees`, `address`, `bio`, `logo`) VALUES
(1, 'BUS001', 'DerryAce Design', 'derryace.de@gmail.com', 'technology', '123345', 'soleProprietorship', 'derryace.de', '0549632604', '500000000', '7491', '7491', '\'public/resource/documents/BUS001Go Investment Proposal 2.pdf\'', 'Derrick Azaglo', '1', '1', '1', 'Design', 'Market Competition', 'Self Sustaining', '5', '24 Osakuman Street', 'Hello', 'public/resource/images/uploads/profile/BUS001New Logo Black(White).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `investor_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `investor_name` varchar(255) NOT NULL,
  `percentage_owned` varchar(20) NOT NULL,
  `interest_structure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`investor_id`, `user_no`, `investor_name`, `percentage_owned`, `interest_structure`) VALUES
(1, 'BUS001', 'Derrick', '10', 'Weekly'),
(2, 'BUS001', 'Azaglo', '50', 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `logo` varchar(10000) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `user_no`, `logo`, `product_name`, `description`, `price`) VALUES
(2, 'BUS001', '\'/public/resource/images/uploads/profile/BUS001cocacola.png\'', 'Coca cola', 'List', '200'),
(3, 'BUS001', '\'/public/resource/images/uploads/profile/BUS001access.png\'', 'Access Bank', 'A Bank', '200'),
(4, 'BUS001', '\'/public/resource/images/uploads/profile/BUS001fanmilk.png\'', 'Yogurt', 'A strawberry flavored milk', '300');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_no`, `user_type`, `email`, `password`) VALUES
(1, 'BUS001', 'business', 'derryace.de@gmail.com', '$2y$10$3544Ckn1ZWbB0guW1Qs3uOjxdXzW/KG3GNhKhR2tTherzUSPa43ou'),
(2, 'IND001', 'individual', 'derrick@gmail.com', '$2y$10$F0k.Ih.9CPyxBHFNN4f1BukBOwocMPTFRaDgd0V/wa8IP6H6F2Phu'),
(3, 'IND001', 'individual', 'derrick@gmail.com', '$2y$10$5DyOvar23U3qqH1LcWTxMub0RNu1YH2qRwnzIIt9po3M8Du5zPWle'),
(4, 'IND002', 'individual', 'rick@gmail.com', '$2y$10$EH2KsQC0B2hs7G7OMSvg/.uQhB3Sx8jnJNwF4NBfgrw7K5raMF1YK'),
(5, 'IND002', 'individual', 'rick@gmail.com', '$2y$10$mT1jJ6pViCVWtoQYWFdHk.1C3LJrrsEqMcWJkWPoAy0mF5mtLS7TC'),
(6, 'IND002', 'individual', 'rick@gmail.com', '$2y$10$kWI5LpM.VIkBkzSQWlt72OHMy6zIKJYoRf9Wc9IoWxHvNqdvGJcee');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(10) NOT NULL,
  `user_no` varchar(20) NOT NULL,
  `balance` varchar(255) NOT NULL DEFAULT '0.00',
  `wallet_name` varchar(255) NOT NULL,
  `wallet_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `user_no`, `balance`, `wallet_name`, `wallet_number`) VALUES
(1, 'BUS001', '0.00', 'DerryAce Design', 'WAL001'),
(2, 'IND001', '0.00', 'Derrick', 'WAL002'),
(3, 'IND001', '0.00', 'Derrick', 'WAL003'),
(4, 'IND001', '0.00', 'Derrick', 'WAL004'),
(5, 'IND002', '0.00', 'Ricky', 'WAL005'),
(6, 'IND002', '0.00', 'Ricky', 'WAL006'),
(7, 'IND002', '0.00', 'Rick', 'WAL007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`investor_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `investor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
