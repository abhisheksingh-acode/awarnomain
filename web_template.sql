-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 12:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awarno_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_template`
--

CREATE TABLE `web_template` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `typingtext1` varchar(100) NOT NULL,
  `typingtext2` varchar(100) NOT NULL,
  `typingtext3` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cert1` varchar(100) NOT NULL,
  `cert2` varchar(100) NOT NULL,
  `cert3` varchar(100) NOT NULL,
  `cert4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_template`
--

INSERT INTO `web_template` (`id`, `country`, `state`, `heading`, `typingtext1`, `typingtext2`, `typingtext3`, `description`, `cert1`, `cert2`, `cert3`, `cert4`) VALUES
(1, '', '', 'Most trusted Digital Partner for your', 'Web Development', 'App Developmen', 'Digital Marketing', 'Awarno is an ambitious web designing company which makes industry level website from cutting edge technologies. Our websites will help you in establishing your business online and drive sales exponentially with the coordination from our digital marketing team.', 'uploads/author01.jpg', 'uploads/author01.jpg', 'uploads/author02.jpg', 'uploads/author03.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_template`
--
ALTER TABLE `web_template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_template`
--
ALTER TABLE `web_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
