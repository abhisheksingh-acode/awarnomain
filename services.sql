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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(9) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `description`) VALUES
(39, 'uploads/awarno-favicon.png', 'Web Development', ' We’ve mastered the top web technologies to deliver projects that have raked in investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.'),
(43, 'uploads/awarno-favicon.png', 'Mobile Development', ' Our talented experts promise to turn client’s ideas into living and running mobile apps, be it for Android or IOS. We focus on an interactive user interface that needs to be coupled with flawless functionality to make any app a success in the industry.'),
(44, 'uploads/awarno-favicon.png', 'Digital Marketing', 'With our passionate and dedicated digital marketing geeks, we help businesses reach their full online potential and keep them updated with the latest trends to create innovative solutions to drive desired results.'),
(45, 'uploads/awarno-favicon.png', 'Digital Marketing', 'With our passionate and dedicated digital marketing geeks, we help businesses reach their full online potential and keep them updated with the latest trends to create innovative solutions to drive desired results.'),
(46, 'uploads/awarno-favicon.png', 'Mobile Development', ' Our talented experts promise to turn client’s ideas into living and running mobile apps, be it for Android or IOS. We focus on an interactive user interface that needs to be coupled with flawless functionality to make any app a success in the industry.'),
(47, 'uploads/awarno-favicon.png', 'Web Development', ' We’ve mastered the top web technologies to deliver projects that have raked in investments. A trusted market leader in developing high performing web fronts for every business. Our Mobile Friendly websites are suitable for every device.'),
(48, 'uploads/awarno-favicon.png', 'Mobile Development', ' Our talented experts promise to turn client’s ideas into living and running mobile apps, be it for Android or IOS. We focus on an interactive user interface that needs to be coupled with flawless functionality to make any app a success in the industry.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
