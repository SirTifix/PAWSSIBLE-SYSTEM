-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2024 at 07:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawssible`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUsername` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`, `adminEmail`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$.NoS7kE5O3.hFsDlgMk/NeERDlJ5X9dG1uaR66xyTrky4tle.s6L.', 'admin@admin.com', '2024-02-29 00:24:43', '2024-02-29 00:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(10) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `contactNumber` varchar(12) NOT NULL,
  `numberPets` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `resched_reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `firstName`, `middlename`, `lastName`, `emailAddress`, `contactNumber`, `numberPets`, `status`, `bookingDate`, `bookingTime`, `resched_reason`) VALUES
(4875, 'Test', '', 'Test', 'test@test.com', '123123412', 1, 'Pending', 'May 4, 2024', '08:00 AM - 09:00 AM', 'No time and no money hehe'),
(5577, 'Batman', 'Bin', 'Suparman', 'kryptonite@luthor.com', '12312', 2, 'Pending', 'May 5, 2024', '08:00 AM - 09:00 AM', 'dugay kaayo sila');

-- --------------------------------------------------------

--
-- Table structure for table `booking_pet`
--

CREATE TABLE `booking_pet` (
  `bookingPetID` int(11) NOT NULL,
  `petName` varchar(100) NOT NULL,
  `petType` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `concerns` text NOT NULL,
  `petBreed` varchar(100) NOT NULL,
  `petBirthDate` date NOT NULL,
  `bookingID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `vetID` int(11) NOT NULL,
  `customerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_pet`
--

INSERT INTO `booking_pet` (`bookingPetID`, `petName`, `petType`, `sex`, `concerns`, `petBreed`, `petBirthDate`, `bookingID`, `serviceID`, `vetID`, `customerID`) VALUES
(32, 'Kongkik', 'Cat', 'Male', 'Cat neuter', 'Siamese', '2024-04-18', 4875, 2, 5, 13),
(45, 'Barry', 'Tortor', 'Male', '', 'Mabilis', '2024-05-25', 5577, 5, 4, 13),
(46, 'Cyborg', 'Bakal', 'Female', 'wala lng mahina kasi', 'Mamaw', '2024-05-16', 5577, 2, 5, 13);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(13, 'test', '', 'test', 'test@test.com', '$2y$10$CQh7F4D5R1UerGTqw0qcBO/nCNA8utVQOn6qPPE0wRb5Ujd6mlQoK', '2024-03-04 12:51:10', '2024-03-04 12:51:10'),
(27, 'joy', '', 'pioquinto', 'joypioquinto1017@gmail.ph', '$2y$10$butq3BTeLUdhhjqdbwUGnOTFC45iQ/oe.Evk2Rq18CkH4tyWiA.FO', '2024-05-01 09:28:39', '2024-05-01 09:28:39'),
(28, 'rambutan', '', 'apol', 'pruts@vejtabol.com', '$2y$10$0ZszKdppLOPAjD88FrSu2usf1lo3UYQRJGRtoLkDkM6jDRQvCEDgi', '2024-05-04 13:42:12', '2024-05-04 13:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_record`
--

CREATE TABLE `customer_record` (
  `customerID` int(11) NOT NULL,
  `customerFirstname` varchar(255) NOT NULL,
  `customerLastname` varchar(255) NOT NULL,
  `customerDOB` date NOT NULL,
  `customerAddress` varchar(255) NOT NULL,
  `customerCity` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerState` varchar(255) NOT NULL,
  `customerPostal` int(11) NOT NULL,
  `customerPhone` int(155) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_record`
--

INSERT INTO `customer_record` (`customerID`, `customerFirstname`, `customerLastname`, `customerDOB`, `customerAddress`, `customerCity`, `customerEmail`, `customerState`, `customerPostal`, `customerPhone`, `created_at`, `updated_at`) VALUES
(26, 'Anton', 'Altair', '2024-03-13', 'test', 'test', 'test@test.com', 'Zamboanga City', 7000, 2147483647, '2024-03-03 08:59:04', '2024-03-03 08:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `recordID` int(11) NOT NULL,
  `ageWeeks` int(11) NOT NULL,
  `recordDate` date NOT NULL,
  `recordHistory` varchar(500) NOT NULL,
  `recordExamination` varchar(500) NOT NULL,
  `recordTreatment` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petId` int(11) NOT NULL,
  `petName` varchar(255) NOT NULL,
  `petBirthdate` date NOT NULL,
  `petAge` int(11) NOT NULL,
  `petBreed` varchar(255) NOT NULL,
  `petType` varchar(255) NOT NULL,
  `petGender` varchar(255) NOT NULL,
  `petWeight` float NOT NULL,
  `petColor` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petId`, `petName`, `petBirthdate`, `petAge`, `petBreed`, `petType`, `petGender`, `petWeight`, `petColor`, `customerID`, `created_at`, `updated_at`) VALUES
(14, 'Gompi', '0000-00-00', 2, 'Siamese', 'Cat', 'Male', 140, 'Brown', 26, '2024-03-03 08:59:04', '2024-03-03 08:59:04'),
(15, 'Kongpi', '0000-00-00', 23, 'Wala', 'Grabe', 'Babae', 34, 'Rainbow', 26, '2024-05-02 23:49:33', '2024-05-02 23:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_status`
--

CREATE TABLE `schedule_status` (
  `scheduleID` int(11) NOT NULL,
  `scheduleDate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `secretaryID` int(11) NOT NULL,
  `secretaryUsername` varchar(255) NOT NULL,
  `secretaryPassword` varchar(255) NOT NULL,
  `secretaryEmail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int(10) NOT NULL,
  `serviceName` varchar(100) NOT NULL,
  `serviceDescription` varchar(100) NOT NULL,
  `servicePrice` double NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `serviceName`, `serviceDescription`, `servicePrice`, `created_at`, `updated_at`) VALUES
(2, 'Kapon', 'Low cost male', 1700, '2024-03-04', '2024-03-04'),
(5, 'Vaccination', 'bakuna', 999, '2024-04-27', '0000-00-00'),
(7, 'Eye Surgery', 'Offers expert care and advice to ensure the health and well-being of your beloved pets.', 250, '2024-05-03', '2024-05-04'),
(8, 'Deworming', 'Promote your pet&#039;s health and vitality through regular, reliable deworming solutions.', 200, '2024-05-04', '2024-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccineID` int(11) NOT NULL,
  `ageVaccine` int(11) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `dateGiven` date DEFAULT NULL,
  `vaccine` varchar(255) DEFAULT NULL,
  `next_date` date DEFAULT NULL,
  `veterinarian` varchar(255) DEFAULT NULL,
  `category` enum('Primary Series','Annual Booster','Deworming') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_list`
--

CREATE TABLE `vaccine_list` (
  `vaccineID` int(10) NOT NULL,
  `vaccineName` varchar(50) NOT NULL,
  `vaccineType` varchar(50) NOT NULL,
  `vaccineAge` varchar(50) NOT NULL,
  `vaccineDosage` varchar(50) NOT NULL,
  `vaccineInterval` varchar(50) NOT NULL,
  `vaccinePrice` varchar(50) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_list`
--

INSERT INTO `vaccine_list` (`vaccineID`, `vaccineName`, `vaccineType`, `vaccineAge`, `vaccineDosage`, `vaccineInterval`, `vaccinePrice`, `petType`, `created_at`, `updated_at`) VALUES
(1, 'adasd', 'vaccine1', 'adasd', 'asdas', 'asdasd', 'asdasd', 'vaccine2', '2024-05-02 16:00:00', '0000-00-00 00:00:00'),
(2, 'Certromycin', 'vaccine3', '2 weeks', '1ml per kilo', '48 weeks', '250', 'vaccine3', '2024-05-02 16:00:00', '0000-00-00 00:00:00'),
(3, 'asdasd', 'vaccine1', 'asdasd', 'asdasd', 'asdas', 'asdasd', '', '2024-05-03 01:55:05', '2024-05-03 01:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vetID` int(11) NOT NULL,
  `vetFirstname` varchar(255) NOT NULL,
  `vetLastname` varchar(255) NOT NULL,
  `vetPhone` int(11) NOT NULL,
  `vetEmail` varchar(255) NOT NULL,
  `vetUsername` varchar(255) NOT NULL,
  `vetPassword` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`vetID`, `vetFirstname`, `vetLastname`, `vetPhone`, `vetEmail`, `vetUsername`, `vetPassword`, `created_at`, `updated_at`) VALUES
(4, 'Vet ', 'Test', 12314512, 'test@test.com', 'vet', '$2y$10$lL4yHJ.D6Z0WzlsZf0..CO1zEcLLY5Ts/SrGulWMkvZDvcWy0or7a', '2024-03-03 01:29:55', '2024-03-03 08:29:55'),
(5, 'Kakong', 'Chips', 2147483647, 'raf_saludo@yahoo.com.ph', 'kingkong', '$2y$10$iGMQbhb7UtcklrB7JyiwK.CnL6XJI5D3LokUb.BkrOsr8w0dzioLq', '2024-04-27 13:04:45', '2024-04-27 19:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `booking_pet`
--
ALTER TABLE `booking_pet`
  ADD PRIMARY KEY (`bookingPetID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_record`
--
ALTER TABLE `customer_record`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`recordID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petId`);

--
-- Indexes for table `schedule_status`
--
ALTER TABLE `schedule_status`
  ADD PRIMARY KEY (`scheduleID`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`secretaryID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vaccineID`);

--
-- Indexes for table `vaccine_list`
--
ALTER TABLE `vaccine_list`
  ADD PRIMARY KEY (`vaccineID`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`vetID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_pet`
--
ALTER TABLE `booking_pet`
  MODIFY `bookingPetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_record`
--
ALTER TABLE `customer_record`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schedule_status`
--
ALTER TABLE `schedule_status`
  MODIFY `scheduleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `secretaryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccineID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccine_list`
--
ALTER TABLE `vaccine_list`
  MODIFY `vaccineID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `vetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
