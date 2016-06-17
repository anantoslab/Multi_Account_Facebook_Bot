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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(11) NOT NULL,
  `name` text NOT NULL,
  `Token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `Token`) VALUES
(40, 'Robin Biswas', 'CAAAACZAVC6ygBADhgSBZBIuY7DrYGYUIx7hDZAogZC6nbu6Qu2swohepACp3IMrs7dhtoHSQSo1wkUo6236cZC2VP5gNttzlIIc9uE9TCFY58yuoBfAq2zEZCfV8UCZBVbzwHpZB6Dir2N78oW7akIREGrtSIbZBLla0T1GKh4rOtYtf53ZA2ctHuZA4zIWRXUDCVbnOXC4R9g6FAZDZD'),
(41, 'Rual Robin', 'CAAAACZAVC6ygBAH4DFRi91GQq4UZCG8ZBh2sNU7nhntkOGCUQl5bPS4IjK16bkFUHhkSSKKhjCWXS1GoES2ICPgGFfidJP0TB3hLweKvRE6ZBBWbu88JEDModYDMC2xVzOrmvBgbjoZCCDck2n01v2rNfuypbZBDa8vQvZBOkfCgJzNten0TYiW9IrXSVN3WDx0xnD01LbPUQZDZD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
