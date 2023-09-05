-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 11:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `customeraccountinformation`
--

CREATE TABLE `customeraccountinformation` (
  `id` int(11) NOT NULL,
  `accountType` varchar(255) DEFAULT NULL,
  `clientCode` varchar(255) DEFAULT NULL,
  `cashMargin` date DEFAULT NULL,
  `linkCode` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `presentAddress` text DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `permanentAddress` text DEFAULT NULL,
  `permanentTelephone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `eTin` varchar(255) DEFAULT NULL,
  `firstAccountSignaturePath` varchar(255) DEFAULT NULL,
  `firstAccountPicturePath` varchar(255) DEFAULT NULL,
  `jointFirstName` varchar(255) DEFAULT NULL,
  `jointFatherName` varchar(255) DEFAULT NULL,
  `jointMotherName` varchar(255) DEFAULT NULL,
  `jointDob` date DEFAULT NULL,
  `jointSex` enum('Male','Female') DEFAULT NULL,
  `jointPresentAddress` text DEFAULT NULL,
  `jointNationality` varchar(255) DEFAULT NULL,
  `jointMobile` varchar(15) DEFAULT NULL,
  `jointTelephone` varchar(15) DEFAULT NULL,
  `jointPermanentAddress` text DEFAULT NULL,
  `jointPermanentTelephone` varchar(15) DEFAULT NULL,
  `jointEmail` varchar(255) DEFAULT NULL,
  `jointOccupation` varchar(255) DEFAULT NULL,
  `jointETin` varchar(255) DEFAULT NULL,
  `jointAccountSignaturePath` varchar(255) DEFAULT NULL,
  `jointAccountPicturePath` varchar(255) DEFAULT NULL,
  `authorizedName` varchar(255) DEFAULT NULL,
  `authorizedFatherName` varchar(255) DEFAULT NULL,
  `authorizedDob` date DEFAULT NULL,
  `authorizedSex` enum('Male','Female') DEFAULT NULL,
  `authorizedAddress` text DEFAULT NULL,
  `authorizedNationality` varchar(255) DEFAULT NULL,
  `authorizedMobile` varchar(15) DEFAULT NULL,
  `authorizedTelephone` varchar(15) DEFAULT NULL,
  `authorizedPermanentAddress` text DEFAULT NULL,
  `authorizedPermanentTelephone` varchar(15) DEFAULT NULL,
  `authorizedEmail` varchar(255) DEFAULT NULL,
  `authorizedOccupation` varchar(255) DEFAULT NULL,
  `authorizedETin` varchar(255) DEFAULT NULL,
  `authorizedBranchName` varchar(255) DEFAULT NULL,
  `authorizedRoutingNo` varchar(255) DEFAULT NULL,
  `authorizedSignaturePath` varchar(255) DEFAULT NULL,
  `isStockExchange` enum('yes','no') DEFAULT NULL,
  `stockExchangeName` varchar(255) DEFAULT NULL,
  `branchName` varchar(255) DEFAULT NULL,
  `accountNumber` varchar(255) DEFAULT NULL,
  `officerSignaturePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customeraccountinformation`
--

INSERT INTO `customeraccountinformation` (`id`, `accountType`, `clientCode`, `cashMargin`, `linkCode`, `firstName`, `fatherName`, `motherName`, `dob`, `sex`, `presentAddress`, `nationality`, `mobile`, `telephone`, `permanentAddress`, `permanentTelephone`, `email`, `occupation`, `eTin`, `firstAccountSignaturePath`, `firstAccountPicturePath`, `jointFirstName`, `jointFatherName`, `jointMotherName`, `jointDob`, `jointSex`, `jointPresentAddress`, `jointNationality`, `jointMobile`, `jointTelephone`, `jointPermanentAddress`, `jointPermanentTelephone`, `jointEmail`, `jointOccupation`, `jointETin`, `jointAccountSignaturePath`, `jointAccountPicturePath`, `authorizedName`, `authorizedFatherName`, `authorizedDob`, `authorizedSex`, `authorizedAddress`, `authorizedNationality`, `authorizedMobile`, `authorizedTelephone`, `authorizedPermanentAddress`, `authorizedPermanentTelephone`, `authorizedEmail`, `authorizedOccupation`, `authorizedETin`, `authorizedBranchName`, `authorizedRoutingNo`, `authorizedSignaturePath`, `isStockExchange`, `stockExchangeName`, `branchName`, `accountNumber`, `officerSignaturePath`) VALUES
(1, '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'asass', 'sa', '2023-09-15', 'as', 'asaasa', 'sas', 'xa', '2023-09-21', 'Female', 'zx', 'asa', '1223', '1232', 'wer', '1232', 'dfs@kjk', 'fdsf', 'dfg', 'path_to_store_first_signature', 'path_to_store_first_picture', 'fgdh', 'fdgdg', 'fbg', '2023-10-04', 'Male', 'sdsd', 'wewe', '121', '232', 'sdsd', '5675', 'ghgh@ghg', 'hgk', 'gjhg', 'path_to_store_joint_signature', 'path_to_store_joint_picture', 'jhghg', 'jhghjgjh', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'path_to_store_authorized_signature', 'no', '', '', '', 'path_to_store_officer_signature');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customeraccountinformation`
--
ALTER TABLE `customeraccountinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customeraccountinformation`
--
ALTER TABLE `customeraccountinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
