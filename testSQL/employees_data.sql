-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 11:15 AM
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
-- Database: `employees_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `EmployeeID` varchar(10) DEFAULT NULL,
  `AttendanceDate` date DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `AttendanceID` varchar(3) DEFAULT NULL,
  `AttendanceStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`EmployeeID`, `AttendanceDate`, `StartTime`, `EndTime`, `AttendanceID`, `AttendanceStatus`) VALUES
('EMP0001', '2011-12-11', '00:00:00', '00:00:00', 'SWC', 'Sick'),
('EMP0001', '2011-12-12', '08:04:00', '17:55:00', 'PRS', 'Present'),
('EMP0002', '2011-12-11', '08:00:00', '18:07:00', 'PRS', 'Present'),
('EMP0002', '2011-12-12', '07:50:00', '17:45:00', 'PRS', 'Present'),
('EMP0003', '2011-12-11', '07:54:00', '18:11:00', 'PRS', 'Present'),
('EMP0003', '2011-12-12', '00:00:00', '00:00:00', 'ABS', 'Absent'),
('EMP0004', '2011-12-11', '00:00:00', '00:00:00', 'LVE', 'Leave'),
('EMP0004', '2011-12-12', '00:00:00', '00:00:00', 'LVE', 'Leave'),
('EMP0005', '2011-12-11', '07:58:00', '17:14:00', 'PRS', 'Present'),
('EMP0005', '2011-12-12', '08:00:00', '18:29:00', 'PRS', 'Present'),
('EMP0006', '2011-12-11', '07:53:00', '17:30:00', 'PRS', 'Present'),
('EMP0006', '2011-12-12', '07:59:00', '18:23:00', 'PRS', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` varchar(10) NOT NULL,
  `EmployeeName` varchar(100) DEFAULT NULL,
  `BirthPlaceID` varchar(3) DEFAULT NULL,
  `BirthPlace` varchar(50) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `PositionID` varchar(10) DEFAULT NULL,
  `PositionName` varchar(100) DEFAULT NULL,
  `EmploymentStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `EmployeeName`, `BirthPlaceID`, `BirthPlace`, `BirthDate`, `Address`, `Phone`, `Gender`, `PositionID`, `PositionName`, `EmploymentStatus`) VALUES
('EMP0001', 'Samuel Wildwood', 'MY', 'Malaysia', '1975-04-20', 'Jl.Kebayoran Lama No. 123', '021-8758814', 'M', 'SWD', 'Software Developer', 'Active'),
('EMP0002', 'Pearl Stefany', 'ID', 'Indonesia', '1984-01-02', 'Jl. Arteri Iskandar Muda No. 224', '021-5491240', 'F', 'PRM', 'Project Manager', 'Active'),
('EMP0003', 'Avril Johnson', 'ID', 'Indonesia', '1985-09-11', 'Kav. DKI Blok 155 No. 66', '021-5100891', 'F', 'QAR', 'Quality Assurance', 'Active'),
('EMP0004', 'Brian Dempsey', 'TH', 'Thailand', '1970-10-28', 'Komplek Perumahan Meruya Blok 11 No. 90', '021-7551345', 'M', 'SWD', 'Software Developer', 'Active'),
('EMP0005', 'Gerard Anthony', 'GE', 'Germany', '1973-07-19', 'Apartmen Mediterania 2 Tower H 10EA', '021-6459756', 'M', 'DIR', 'Director', 'Active'),
('EMP0006', 'Yossi Jackson', 'MY', 'Malaysia', '1978-02-12', 'Komplek Puri Indah Blok 121 No. 55', '021-5484590', 'M', 'CEO', 'Chief Executive Officer', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
