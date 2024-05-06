-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2024 at 03:20 AM
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
(1, 'admin', '$2y$10$UarWO2kPqfcvSlhlrQOO1.PO5241rY3fXwQhg4SD1cA.Hdvci2auS', 'admin@admin.com.ph', '2024-02-29 00:24:43', '2024-05-05 20:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(10) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
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

INSERT INTO `booking` (`bookingID`, `customerID`, `firstName`, `middlename`, `lastName`, `emailAddress`, `contactNumber`, `numberPets`, `status`, `bookingDate`, `bookingTime`, `resched_reason`) VALUES
(2949, 13, 'test', '', 'test', 'test@test.com', '5345', 1, 'Approved', 'May 22, 2024', '11:00 AM 12:00 PM', NULL),
(3959, 28, 'rambutan', '', 'apol', 'pruts@vejtabol.com', '55345', 1, 'Approved', 'May 9, 2024', '12:00 AM 01:00 PM', NULL),
(4875, 13, 'Test', '', 'Test', 'test@test.com', '123123412', 1, 'Done', 'May 5, 2024', '08:00 AM - 09:00 AM', 'No time and no money hehe'),
(5577, 28, 'Batman', 'Bin', 'Suparman', 'kryptonite@luthor.com', '12312', 2, 'Cancelled', 'May 6, 2024', '08:00 AM - 09:00 AM', 'dugay kaayo sila'),
(5603, 13, 'test', '', 'test', 'test@test.com', '53453', 2, 'Done', 'May 8, 2024', '12:00 AM 01:00 PM', NULL),
(7620, 46, 'era', 'era', 'era', 'joypioquinto1017@gmail.ph', '09278894171', 1, 'Approved', 'May 16, 2024', '12:00 AM 01:00 PM', NULL),
(9171, 28, 'rambutan', '', 'apol', 'pruts@vejtabol.com', '56645', 2, 'Approved', 'May 25, 2024', '12:00 AM 01:00 PM', NULL);

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
  `customerID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_pet`
--

INSERT INTO `booking_pet` (`bookingPetID`, `petName`, `petType`, `sex`, `concerns`, `petBreed`, `petBirthDate`, `bookingID`, `serviceID`, `vetID`, `customerID`) VALUES
(32, 'Kongkik', 'Cat', 'Male', 'Cat neuter', 'Siamese', '2024-04-18', 4875, 2, 5, 13),
(45, 'Barry', 'Tortor', 'Male', '', 'Mabilis', '2024-05-25', 5577, 5, 4, 13),
(46, 'Cyborg', 'Bakal', 'Female', 'wala lng mahina kasi', 'Mamaw', '2024-05-16', 5577, 2, 5, 13),
(54, 'Maximus', 'Aso', 'Male', '', 'Mabilis', '2024-05-09', 5603, 8, 4, 36),
(55, 'Max', 'Dog', 'Female', '', 'Doberman', '2024-05-23', 5603, 5, 5, 36),
(59, 'Bandit', 'Tortor', 'Female', '', 'Mix', '2024-05-09', 7620, 7, 5, 46),
(62, 'Shinra', 'Cat', 'Male', '', 'Persian', '2024-05-10', 3959, 2, 5, 47),
(63, 'Bandit', 'Hamster', 'Male', '', 'Husky', '2024-05-09', 2949, 7, 10, 48),
(64, 'Rer', 'Askal', 'Male', '', 'Siamese', '2024-05-09', 9171, 8, 10, 49),
(65, 'Maximus', 'Dog', 'Male', '', 'Persian', '2024-05-10', 9171, 5, 7, 49);

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
(28, 'rambutan', '', 'apol', 'pruts@vejtabol.com', '$2y$10$0ZszKdppLOPAjD88FrSu2usf1lo3UYQRJGRtoLkDkM6jDRQvCEDgi', '2024-05-04 13:42:12', '2024-05-04 13:42:12'),
(29, 'Steve', 'Papa', 'Garciano', 'steveG@gmail.com', '$2y$10$nRoJksCzl54fQqJzu3O7eOrkeJh7zdebr.UZzX61yo8DqZB6apF2C', '2024-05-05 11:49:50', '2024-05-05 11:49:50'),
(30, 'Neri', 'Garcia', 'Arthur', 'arthurNery@neri.com', '$2y$10$5oQhBV3Tgr0M7YnAzWpQeuT.LvX0tpPA8aYiGCvie0vG6irQTwSd.', '2024-05-05 11:51:48', '2024-05-05 11:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `customer_record`
--

CREATE TABLE `customer_record` (
  `customerID` int(11) NOT NULL,
  `bookingID` int(11) DEFAULT NULL,
  `customerFirstname` varchar(255) NOT NULL,
  `customerMiddlename` varchar(255) NOT NULL,
  `customerLastname` varchar(255) NOT NULL,
  `customerDOB` date NOT NULL,
  `customerAddress` varchar(255) NOT NULL,
  `customerCity` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerState` varchar(255) NOT NULL,
  `customerPostal` int(11) NOT NULL,
  `customerPhone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_record`
--

INSERT INTO `customer_record` (`customerID`, `bookingID`, `customerFirstname`, `customerMiddlename`, `customerLastname`, `customerDOB`, `customerAddress`, `customerCity`, `customerEmail`, `customerState`, `customerPostal`, `customerPhone`, `created_at`, `updated_at`) VALUES
(26, NULL, 'Antonio', '', 'Altair', '2024-03-13', 'test', 'test', 'test@test.com', 'Zamboanga City', 7000, '2147483647', '2024-03-03 08:59:04', '2024-05-05 23:07:59'),
(35, 4998, 'RAF', 'Ruste', 'SALUDO', '0000-00-00', '', '', 'raf_saludo@yahoo.com.ph', '', 0, '09979784700', '2024-05-04 22:37:27', '2024-05-04 22:37:27'),
(36, 5603, 'test', '', 'test', '0000-00-00', '', '', 'test@test.com', '', 0, '53453', '2024-05-05 10:22:45', '2024-05-05 10:22:45'),
(46, 7620, 'era', 'era', 'era', '0000-00-00', '', '', 'joypioquinto1017@gmail.ph', '', 0, '09278894171', '2024-05-05 15:48:11', '2024-05-05 15:48:11'),
(47, 3959, 'Rambutan', '', 'Apol', '2024-05-16', '108 ATIS DRIVE', 'ZAMBOANGA CITY', 'joypioquinto1017@gmail.ph', 'ZAMBOANGA DEL SUR', 7000, '09278894171', '2024-05-05 16:47:48', '2024-05-05 23:26:47'),
(48, 2949, 'test', '', 'test', '0000-00-00', '', '', 'test@test.com', '', 0, '5345', '2024-05-05 21:49:25', '2024-05-05 21:49:25'),
(49, 9171, 'rambutan', '', 'apol', '0000-00-00', '', '', 'pruts@vejtabol.com', '', 0, '56645', '2024-05-05 21:50:17', '2024-05-05 21:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `recordID` int(11) NOT NULL,
  `petId` int(11) NOT NULL,
  `ageWeeks` int(11) NOT NULL,
  `recordDate` date NOT NULL,
  `veterinarian` varchar(255) NOT NULL,
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
(14, 'Kongpinas', '2024-05-02', 0, 'asdasd', 'asd', 'asd', 0, 'Rainbow', 26, '2024-03-03 08:59:04', '2024-05-05 23:26:14'),
(15, 'Kongpinas', '2024-05-02', 0, 'asdasd', 'asd', 'asd', 0, 'Rainbow', 26, '2024-05-02 23:49:33', '2024-05-05 23:26:14'),
(21, 'Steve', '2024-05-14', 0, 'Palito', 'Askal', 'Male', 0, '', 35, '2024-05-04 22:38:23', '2024-05-04 22:38:23'),
(22, 'Raymond', '2024-05-23', 0, 'Billiard', 'Matangkad', 'Male', 0, '', 35, '2024-05-04 22:38:23', '2024-05-04 22:38:23'),
(23, 'Maximus', '2024-05-09', 0, 'Mabilis', 'Aso', 'Male', 0, '', 36, '2024-05-05 10:23:15', '2024-05-05 10:23:15'),
(24, 'Max', '2024-05-23', 0, 'Doberman', 'Dog', 'Female', 0, '', 36, '2024-05-05 10:23:15', '2024-05-05 10:23:15'),
(25, 'Bandit', '2024-05-09', 0, 'Mix', 'Tortor', 'Female', 0, '', 46, '2024-05-05 15:49:22', '2024-05-05 15:49:22'),
(26, 'Shinra', '2024-05-10', 3, 'Persian', 'Cat', 'Male', 56, 'Black', 47, '2024-05-05 16:48:07', '2024-05-05 23:26:47'),
(27, 'Bandit', '2024-05-09', 0, 'Husky', 'Hamster', 'Male', 0, '', 48, '2024-05-05 21:49:39', '2024-05-05 21:49:39'),
(28, 'Rer', '2024-05-09', 0, 'Siamese', 'Askal', 'Male', 0, '', 49, '2024-05-05 21:51:02', '2024-05-05 21:51:02'),
(29, 'Maximus', '2024-05-10', 0, 'Persian', 'Dog', 'Male', 0, '', 49, '2024-05-05 21:51:02', '2024-05-05 21:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `pet_breed`
--

CREATE TABLE `pet_breed` (
  `petBreedID` int(11) NOT NULL,
  `petBreed` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_breed`
--

INSERT INTO `pet_breed` (`petBreedID`, `petBreed`, `created_at`, `updated_at`) VALUES
(1, 'Siamese', '2024-05-05 16:14:09', '2024-05-05 16:14:09'),
(2, 'Husky', '2024-05-05 16:14:17', '2024-05-05 16:14:17'),
(3, 'Golden Retriever', '2024-05-05 16:14:40', '2024-05-05 16:14:40'),
(5, 'Persian', '2024-05-05 16:26:21', '2024-05-05 16:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `pet_type`
--

CREATE TABLE `pet_type` (
  `petTypeID` int(11) NOT NULL,
  `petType` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_type`
--

INSERT INTO `pet_type` (`petTypeID`, `petType`, `created_at`, `updated_at`) VALUES
(1, 'Dog', '2024-05-05 16:10:09', '2024-05-05 16:10:09'),
(2, 'Cat', '2024-05-05 16:10:26', '2024-05-05 16:10:26'),
(3, 'Hamster', '2024-05-05 16:12:34', '2024-05-05 16:12:34'),
(5, 'Rabbit', '2024-05-05 16:26:30', '2024-05-05 16:26:30');

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
  `secretaryFirstname` varchar(255) NOT NULL,
  `secretaryMiddlename` varchar(255) NOT NULL,
  `secretaryLastname` varchar(255) NOT NULL,
  `secretaryPhone` varchar(255) NOT NULL,
  `secretaryEmail` varchar(255) NOT NULL,
  `secretaryUsername` varchar(255) NOT NULL,
  `secretaryPassword` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`secretaryID`, `secretaryFirstname`, `secretaryMiddlename`, `secretaryLastname`, `secretaryPhone`, `secretaryEmail`, `secretaryUsername`, `secretaryPassword`, `created_at`, `updated_at`) VALUES
(2, 'RAF', '', 'SALUDO', '09979784700', 'Saludo@yahoo.com.ph', 'Raf', '$2y$10$VWnhieciFIXQNeFIZpbCLeeLAKGqCaLMVzNDWRl9556l4HIFH3bDy', '2024-05-05 10:29:34', '2024-05-05 21:02:22');

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
(2, 'Stomach Surgery', 'asdasdasdasdasdasdasdasdasd', 1700, '2024-03-04', '2024-05-04'),
(5, 'Vaccination', 'bakuna', 999, '2024-04-27', '0000-00-00'),
(7, 'Eye Surgery', 'Offers expert care and advice to ensure the health and well-being of your beloved pets.', 250, '2024-05-03', '2024-05-04'),
(8, 'Deworming', 'Promote your pet&#039;s health and vitality through regular, reliable deworming solutions.', 200, '2024-05-04', '2024-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccineRecordID` int(11) NOT NULL,
  `petId` int(11) NOT NULL,
  `ageVaccine` int(11) DEFAULT NULL,
  `dateGiven` date DEFAULT NULL,
  `vaccine` varchar(255) DEFAULT NULL,
  `next_date` date DEFAULT NULL,
  `veterinarian` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vaccineRecordID`, `petId`, `ageVaccine`, `dateGiven`, `vaccine`, `next_date`, `veterinarian`, `category`, `created_at`, `updated_at`) VALUES
(3, 26, 34, '2024-05-10', 'Sobrang Bakuna', NULL, '10', 'Primary Series', '2024-05-06 00:54:21', '2024-05-06 00:54:21');

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
(2, 'Certromycin', 'Primary Series', '2 weeks', '1ml per kilo', '48 weeks', '250', 'Cat', '2024-05-02 16:00:00', '2024-05-05 18:17:49'),
(8, 'Malakas na Bakuna', 'Annual Boosters', '34', '5', '3', '900', 'Cat', '2024-05-06 00:17:05', '2024-05-06 00:17:05'),
(9, 'Sobrang Bakuna', 'Deworming', '6', '1', '9', '600', 'Dog', '2024-05-06 00:17:42', '2024-05-06 00:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vetID` int(11) NOT NULL,
  `vetFirstname` varchar(255) NOT NULL,
  `vetMiddlename` varchar(255) NOT NULL,
  `vetLastname` varchar(255) NOT NULL,
  `vetPhone` int(11) NOT NULL,
  `vetEmail` varchar(255) NOT NULL,
  `vetStatus` varchar(255) NOT NULL,
  `vetUsername` varchar(255) NOT NULL,
  `vetPassword` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`vetID`, `vetFirstname`, `vetMiddlename`, `vetLastname`, `vetPhone`, `vetEmail`, `vetStatus`, `vetUsername`, `vetPassword`, `created_at`, `updated_at`) VALUES
(7, 'Chylle', 'Cuajotor', 'Garcia', 934534, 'kylie@jenner.com.ph', 'Unavailable', 'ChillieSauce', '$2y$10$n2I3hmnOWDwTr9XFYeTCJOuLUIRwjSTSkb8gSjNTQdrAIj/cBWvPi', '2024-05-05 10:52:01', '2024-05-05 22:15:54'),
(10, 'Mama', '', 'Coco', 432525, 'mama@coco.com', 'Available', 'mamacoco', '$2y$10$BpRLbsRt1ft.pxbfzp6FnuJCYtGYytAoNZTymY3QAqAceOc/nUgDK', '2024-05-05 11:06:40', '2024-05-05 17:06:40'),
(11, 'Coco', '', 'Melon', 55423234, 'melon@isCoco.com', 'Unavailable', 'cocomelon', '$2y$10$huRM8JMDncIcy5R5S.SWHO1eha3x18RBZRD8XWT/ufY4cHZTIe1MS', '2024-05-05 11:07:11', '2024-05-05 18:21:09');

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
-- Indexes for table `pet_breed`
--
ALTER TABLE `pet_breed`
  ADD PRIMARY KEY (`petBreedID`);

--
-- Indexes for table `pet_type`
--
ALTER TABLE `pet_type`
  ADD PRIMARY KEY (`petTypeID`);

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
  ADD PRIMARY KEY (`vaccineRecordID`);

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
  MODIFY `bookingPetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer_record`
--
ALTER TABLE `customer_record`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pet_breed`
--
ALTER TABLE `pet_breed`
  MODIFY `petBreedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pet_type`
--
ALTER TABLE `pet_type`
  MODIFY `petTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule_status`
--
ALTER TABLE `schedule_status`
  MODIFY `scheduleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `secretaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccineRecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccine_list`
--
ALTER TABLE `vaccine_list`
  MODIFY `vaccineID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `vetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
