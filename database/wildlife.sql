-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 02:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `trip_type` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) DEFAULT NULL,
  `budget_per_day` decimal(10,2) NOT NULL,
  `safari_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `full_name`, `trip_type`, `email`, `mobile`, `country`, `adults`, `children`, `budget_per_day`, `safari_date`, `created_at`, `updated_at`) VALUES
(23, 'sfdfgfhfh', 'Trekking', 'dfdsfd@gmail.com', '65576', 'sri lanka', 665, 6, 65.00, '2024-05-23', '2024-05-05 19:03:32', '2024-05-05 19:30:56'),
(24, 'werty', 'Wild Camping', 'sdfg@gmail.com', '45678', 'Sri Lanka', 4, 6, 6.00, '2024-05-09', '2024-05-05 19:34:24', '2024-05-05 19:34:24'),
(25, 'chira', 'Wild Adventure', 'chira@gmail.com', '0714811048', 'Sri Lanka', 4, 3, 2000.00, '2024-05-15', '2024-05-06 19:08:04', '2024-05-06 19:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donID` int(10) NOT NULL,
  `salutation` varchar(15) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donID`, `salutation`, `firstName`, `lastName`, `Phone`, `Email`) VALUES
(3, 'hasjdhaksda', '', '', 0, '123@g.j'),
(5, 'All', '', '', 9877654, 'yama@h.lk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
