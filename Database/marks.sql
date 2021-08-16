-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 06:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `slno` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `cpp` varchar(255) NOT NULL,
  `java` varchar(255) NOT NULL,
  `python` varchar(255) NOT NULL,
  `javascript` varchar(255) NOT NULL,
  `react` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`slno`, `roll`, `name`, `photo`, `class`, `c`, `cpp`, `java`, `python`, `javascript`, `react`, `date`) VALUES
(5, '46', 'Saheli Mitra', 'images.jpg', 'bca', '78', '99', '99', '88', '90', '100', '2021-07-17 23:12:01'),
(7, '49', 'avijit', 'bg4.jpg', 'bca', '78', '99', '87', '88', '76', '76', '2021-07-17 23:58:04'),
(8, '51', 'rahul', 'images (1).jpg', 'bba', '75', '90', '90', '90', '89', '70', '2021-07-18 00:01:38'),
(10, '33', 'Mayukh', 'Screenshot (206).png', 'Bca', '78', '87', '77', '54', '67', '89', '2021-07-23 19:09:14'),
(11, '21', 'Neha', 'abstract-red-❤-4k-hd-desktop-wallpaper-for-•-wide-ultra.jpg', 'bba', '56', '90', '20', '54', '67', '70', '2021-07-23 19:10:24'),
(12, '24', 'Raima', 'download (1).jfif', 'bba', '76', '66', '90', '88', '98', '77', '2021-07-23 19:11:14'),
(13, '46', 'Rajib', 'download (2).jfif', 'bca', '76', '99', '20', '90', '67', '77', '2021-07-23 19:13:11'),
(14, '68', 'Koushik', 'wp2713659.jpg', 'bba', '56', '67', '88', '87', '78', '67', '2021-07-23 19:14:46'),
(16, '58', 'SACHIN', 'photo-1559526324-593bc073d938.jfif', 'bba', '89', '90', '98', '66', '77', '76', '2021-07-23 19:16:26'),
(17, '90', 'Mayukh Guha', 'images.jpg', 'Bca', '100', '90', '100', '99', '98', '89', '2021-07-24 19:53:14'),
(18, '45', 'kaustav', 'images (1).jpg', 'mba', '100', '90', '90', '99', '98', '100', '2021-07-26 01:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
