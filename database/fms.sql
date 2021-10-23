-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 04:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `famers_crop_dtls`
--

CREATE TABLE `famers_crop_dtls` (
  `id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `crop_summer` varchar(400) NOT NULL,
  `crop_winter` varchar(400) NOT NULL,
  `crop_rainy` varchar(400) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `famers_crop_dtls`
--

INSERT INTO `famers_crop_dtls` (`id`, `farmer_id`, `crop_summer`, `crop_winter`, `crop_rainy`, `creation_date`) VALUES
(1, 1, 'RAINY12', 'WINTER', 'xyz1', '2021-08-24 10:08:48'),
(2, 1, 'asd', 'asdasd', 'asdasd', '2021-08-24 10:08:53'),
(3, 1, 'sdfsdf', 'asdfadsf', 'asdfasdf', '2021-08-24 10:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `u_name` varchar(350) NOT NULL,
  `u_location` varchar(400) NOT NULL,
  `land_size` varchar(100) NOT NULL,
  `u_adhar` int(16) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `u_name`, `u_location`, `land_size`, `u_adhar`, `mobile_no`, `creation_date`) VALUES
(2, 'Kahkashan', 'Kalaburagi', '12', 8345876, '34568375345', '2021-08-24 10:08:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `famers_crop_dtls`
--
ALTER TABLE `famers_crop_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `famers_crop_dtls`
--
ALTER TABLE `famers_crop_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
