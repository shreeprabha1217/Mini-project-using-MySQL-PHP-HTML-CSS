-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 10:46 AM
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
-- Database: `pharmacybyshree`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'shiva', 'admin'),
(2, 'prabha', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE `bought` (
  `medicine_name` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`medicine_name`, `quantity`, `cost`, `price`, `username`) VALUES
('Bayer aspirin', 50, 85, 4250, 'p');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_name` varchar(100) DEFAULT NULL,
  `dealer_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_name`, `dealer_id`) VALUES
('SigmaAldrich', 'D01'),
('Ab enterprices', 'D02'),
('American elements', 'D03'),
('Wego chemical group', 'D04'),
('shiva', 'D05');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_name` varchar(100) DEFAULT NULL,
  `drug_id` varchar(100) NOT NULL,
  `dealer_id` varchar(100) DEFAULT NULL,
  `drug_quantity` varchar(100) DEFAULT NULL,
  `money_dr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_name`, `drug_id`, `dealer_id`, `drug_quantity`, `money_dr`) VALUES
(' P-Aminophenol', 'DR01', 'D01', '7620 grams', 7000),
('Sodiumdithinite', 'DR02', 'D02', '1720 grams', 5500),
('Hydroxtpropyl Methyl Cellulosel', 'DR03', 'D01', '4000 grams', 7700),
('Salicylic acid', 'DR04', 'D03', '6000 grams', 77000),
('Acetic axhydrid', 'DR05', 'D04', '4400 grams', 2000),
('Phenol', 'DR06', 'D03', '1500 grams', 4000),
('Aspirin', 'DR07', 'D04', '7000 grams', 14000),
('Magnesium Sterate', 'DR08', 'D02', '5000 grams', 9500),
('Sodium starch glycolate', 'DR09', 'D01', '3350 grams', 8000),
(' P-Aminophenol', 'DR10', 'D01', '7620 grams', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_name` varchar(100) NOT NULL,
  `medicine_id` varchar(100) NOT NULL,
  `MFD` date DEFAULT NULL,
  `EXP` date DEFAULT NULL,
  `medicine_type` varchar(100) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_name`, `medicine_id`, `MFD`, `EXP`, `medicine_type`, `rate`) VALUES
('Bayer aspirin', 'A09', '2022-11-12', '2023-11-12', 'Tablet(pack of 10)', 85),
('Children Tylenol', 'A10', '2022-11-12', '2023-11-12', 'Syrup(100)ml', 170),
('ibuProfin', 'A04', '2022-03-12', '2023-03-12', 'Tablet(pack of 10)', 120),
('Motrrin', 'A07', '2022-01-12', '2023-01-12', 'Capsulet(pack of 10)', 145),
('Naproxen', 'A08', '2022-12-12', '2023-12-12', 'Tablet(pack of 10)', 120),
('Paracetamoln', 'A01', '2022-01-12', '2023-01-12', 'Tablet(pack of 10)', 50),
('Tylenol', 'A03', '2022-01-12', '2023-01-12', 'Tablet(pack of 10)', 100),
('vikas', 'A201', '2022-12-12', '2023-12-12', 'Syrup(100)ml', 75);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `medicine_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `medicine_name` varchar(100) NOT NULL,
  `medcine_id` varchar(100) NOT NULL,
  `stocks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`medicine_name`, `medcine_id`, `stocks`) VALUES
('Bayer aspirin', 'A09', 446),
('Children Tylenol', 'A10', 494),
('ibuProfin', 'A04', 500),
('Motrrin', 'A07', 500),
('Naproxen', 'A08', 494),
('Paracetamoln', 'A01', 500),
('Tylenol', 'A03', 500),
('vikas', 'A201', 498);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `email`, `address`, `phonenumber`, `city`) VALUES
('p', 'p', 'p@gmil.com', 'pp', 98, 'bd'),
('pp', 'pp', '542', 'pp@gmial.com', 0, 'kk'),
('prabha', 'pp', '9856', 's@gmail.com', 0, 'ss'),
('sibin', '123456', '64576586', 'sibin@gmail.com', 0, 'bannur'),
('wagle', 'w', '42342', 'ssd@dfs.com', 0, 'fsffs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD KEY `username` (`username`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`),
  ADD KEY `drugs` (`dealer_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_name`,`medicine_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD KEY `medicine_name` (`medicine_name`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`medicine_name`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bought`
--
ALTER TABLE `bought`
  ADD CONSTRAINT `bought_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userlogin` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs` FOREIGN KEY (`dealer_id`) REFERENCES `dealer` (`dealer_id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`medicine_name`) REFERENCES `medicine` (`medicine_name`),
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`medicine_name`) REFERENCES `medicine` (`medicine_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`medicine_name`) REFERENCES `medicine` (`medicine_name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
