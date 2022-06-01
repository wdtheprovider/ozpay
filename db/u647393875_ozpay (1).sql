-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2022 at 01:42 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u647393875_ozpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `datePaid` date NOT NULL DEFAULT current_timestamp(),
  `transactionRef` varchar(50) NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `transactionId` varchar(50) NOT NULL,
  `hash` varchar(256) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `datePaid`, `transactionRef`, `paymentStatus`, `transactionId`, `hash`, `userid`) VALUES
(1, '0.50', '2022-06-01', 'Savings_fv', 'Complete', 'f5961b51-657e-4514-aabf-e8276f7695e6 ', '', 1),
(2, '0.50', '2022-06-01', 'Savings_u6', 'Complete', '62ecf733-fa99-434d-a4c8-586f0043a79b ', '', 1),
(3, '0.50', '2022-06-01', 'Savings_wb', 'Complete', 'a41d72fc-afc3-4390-9902-4a9e6f3d88c3 ', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `siteName` varchar(50) NOT NULL,
  `siteCode` varchar(50) NOT NULL,
  `privateKey` varchar(50) NOT NULL,
  `apiKey` varchar(50) NOT NULL,
  `countryCode` varchar(20) NOT NULL,
  `currencyCode` varchar(20) NOT NULL,
  `isTest` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `siteName`, `siteCode`, `privateKey`, `apiKey`, `countryCode`, `currencyCode`, `isTest`) VALUES
(1, 'Store Name', 'TSTSTE0001', '215114531AFF7134A94C88CEEA48E', 'EB5758F2C3B4DF3FF4F2669D5FF5B', 'ZA', 'ZAR', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
