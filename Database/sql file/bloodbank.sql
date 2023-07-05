-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 07:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `name` text NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `address`, `contact`, `state`) VALUES
('Samarpan Blood Bank', '1/115, A-Kale ka Taal, Dehli Gate', 0, 'Agra'),
('Agra City Blood Bank', '71-A.M.G. Road, Oposite Subhash Park, Agra	', 0, 'Agra'),
('Samarpan Blood Bank', '1/115, A-Kale ka Taal, Dehli Gate', 0, 'Agra'),
('Agra City Blood Bank', '71-A.M.G. Road, Oposite Subhash Park, Agra	', 0, 'Agra'),
('fyyuuhiuhui', 'gyygyftyftft', 1548654548, 'Assam'),
('Railway Central Hospital (Casuality)', 'Maligaon, Maligaon, , Guwahati,781011,India', 0, 'Assam'),
('Ganga Laboratory', 'Ulubari, GS ROAD, Ulubari, , Guwahati,781006,India', 0, 'Assam'),
('Railway Central Hospital (Casuality)', 'Maligaon, Maligaon, , Guwahati,781011,India', 0, 'Assam'),
('Ganga Laboratory', 'Ulubari, GS ROAD, Ulubari, , Guwahati,781006,India', 0, 'Assam');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE IF NOT EXISTS `donors` (
  `name` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`name`, `contact`, `address`, `bloodgroup`, `dob`) VALUES
('Anuahka', 12334556, '', 'B+', '0000-00-00'),
('Drb ', 0, '', 'O-', '0000-00-00'),
('Ydhxnfc', 1245667, '', 'B+', '0000-00-00'),
('Nkdkdf', 0, '', 'O+', '0000-00-00'),
('Anu', 9005039724, 'Naushar', 'B+', '0000-00-00'),
('Vishal', 90773733, 'Hdhdhffff', 'Ab+', '1999-12-01'),
('Ssgshshsh', 764488, 'Tsyehdhbr', 'O-', '1999-08-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
