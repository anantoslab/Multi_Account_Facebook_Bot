-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 11:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id` int(11) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `token` text NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `grouprual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id`, `pin`, `token`, `comment`, `grouprual`) VALUES
(1, 123, 'CAAAACZAVC6ygBADhgSBZBIuY7DrYGYUIx7hDZAogZC6nbu6Qu2swohepACp3IMrs7dhtoHSQSo1wkUo6236cZC2VP5gNttzlIIc9uE9TCFY58yuoBfAq2zEZCfV8UCZBVbzwHpZB6Dir2N78oW7akIREGrtSIbZBLla0T1GKh4rOtYtf53ZA2ctHuZA4zIWRXUDCVbnOXC4R9g6FAZDZD', 'rual', 'hi this is a test post :V');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
