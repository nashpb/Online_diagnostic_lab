-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2023 at 04:19 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` enum('0','1','','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `middlename`, `address`, `email`, `contact_no`, `age`, `gender`, `username`, `password`, `active`) VALUES
(11, 'tshiamo', 'molefe', 'p', 'kempton park', 'ts@gmail.com', '0723659874', 26, 'Male', 'tshiamo', 'tshiamo', '1'),
(13, 'Tshegofatso', 'Mogale', '', 'methewson str', 'tshego@yahoo.com', '071 2323 564', 19, 'Female', 'tshego', 'tshego', '1'),
(16, 'Nishadh', 'P', 'B', '#195', 'nash@gmail.com', '9812298457', 26, 'Male', 'nashpb', 'jio', '1');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `date`, `message`) VALUES
(6, '', 'Doctor Makoti will be  out on December 3 2023');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_id` int NOT NULL,
  `date` varchar(100) NOT NULL,
  `service_id` int NOT NULL,
  `Number` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` decimal(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `member_id`, `date`, `service_id`, `Number`, `status`, `price`) VALUES
(87, 13, '05/09/2023', 13, 1, 'Done', 0.00),
(88, 13, '10/09/2023', 7, 1, 'Done', 0.00),
(89, 11, '28/05/2023', 1, 1, 'Done', 100.00),
(90, 11, '29/12/2023', 1, 1, 'Pending', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `service_offer` varchar(100) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_offer`, `price`) VALUES
(1, 'Complete Blood Count (CBC)', 100.00),
(2, 'Basic Metabolic Panel (BMP)', 120.00),
(3, 'Comprehensive Metabolic Panel (CMP)', 150.00),
(4, 'Lipid Panel', 90.00),
(5, 'Thyroid Stimulating Hormone (TSH) Test', 80.00),
(6, 'Blood Glucose Test', 60.00),
(7, 'Hemoglobin A1c Test', 110.00),
(8, 'Urinalysis', 40.00),
(9, 'HIV Test', 50.00),
(10, 'Hepatitis B Surface Antigen Test', 70.00),
(11, 'Allergy Testing', 180.00),
(12, 'C-Reactive Protein (CRP) Test', 75.00),
(13, 'Vitamin D Test', 50.00),
(14, 'Glucose Tolerance Test (GTT)', 90.00),
(15, 'Rapid Influenza Test', 40.00),
(16, 'Stool Occult Blood Test', 60.00),
(17, 'Serum Iron Test', 70.00),
(18, 'Lung Function Test (Spirometry)', 80.00),
(19, 'Skin Patch Allergy Test', 120.00),
(20, 'COVID-19 PCR Test', 120.00),
(21, 'STD Panel (Chlamydia, Gonorrhea, Syphilis)', 100.00),
(22, 'Food Sensitivity Test', 150.00),
(23, 'Cortisol Test', 90.00),
(24, 'Thyroid Antibodies Test', 85.00),
(25, 'H. pylori Antibody Test', 75.00),
(26, 'Cholesterol Test (Home Test Kit)', 45.00),
(27, 'Ovulation Predictor Kit', 25.00),
(28, 'Pregnancy Test', 10.00),
(29, 'Heavy Metal Testing', 200.00),
(30, 'Sleep Apnea Test (Home Sleep Study)', 250.00),
(31, 'Testosterone Test', 80.00),
(32, 'Estrogen Test', 75.00),
(33, 'Progesterone Test', 70.00),
(34, 'Lyme Disease Test', 100.00),
(35, 'Hemoglobin Electrophoresis', 110.00),
(36, 'CRP (C-reactive Protein) Test', 80.00),
(37, 'Vitamin B12 Test', 50.00),
(38, 'Ferritin Test', 60.00),
(39, 'Hormone Panel (Male/Female)', 150.00),
(40, 'Thyroid Function Panel', 90.00),
(41, 'Autoimmune Disease Panel', 120.00),
(42, 'Colon Cancer Screening (At-Home Kit)', 75.00),
(43, 'Genetic Testing (Ancestry/Disease Risk)', 150.00),
(44, 'Heavy Metal Hair Test', 95.00),
(45, 'Hepatitis C Antibody Test', 85.00),
(46, 'Chlamydia and Gonorrhea Test (At-Home Kit)', 60.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(5, 'admin', 'admin'),
(9, 'isaac', 'isaac');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
