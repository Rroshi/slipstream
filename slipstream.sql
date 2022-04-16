-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2021 at 07:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16237526_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngarkoni`
--

CREATE TABLE `ngarkoni` (
  `id` int(15) NOT NULL,
  `emri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mbiemri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ngarkoni`
--

INSERT INTO `ngarkoni` (`id`, `emri`, `mbiemri`, `email`, `password`, `gender`, `birthday`) VALUES
(10, 'Kejsi', 'Rroshi', 'kejsi.rroshi05@gmail.com', '123456', 'male', '2002-11-06'),
(11, 'Ledio', 'Bushi', 'Lediobushi1@gmail.com', '1234', 'male', '2003-04-30'),
(12, 'Klinti', 'Xhebrahimi', 'Klintixhebrahimi@gmail.com', 'Klinti123', 'male', '2003-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngarkoni`
--
ALTER TABLE `ngarkoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngarkoni`
--
ALTER TABLE `ngarkoni`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
