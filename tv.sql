-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 02:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tv`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(28) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `image`) VALUES
(21, 'ahmad mohammed ', 'ahmad1997@gmail.com', '123@ah', 'image/3.jpg'),
(22, 'heba ', 'heba@yahoo.com', '123123', 'image/12.jpg'),
(23, 'abdullah sami ', 'abdullah@gmail.com', '147147', 'image/2.jpg'),
(24, 'abeer jameel yehya', 'abeer_j@hotmail.com', '123@aj', 'image/6.jpg'),
(25, 'tala', 'tala@gmail.com', 'tala@99', 'image/4.jpg'),
(26, 'rana mohammed', 'rana1994@gmail.com', '14@rana', 'image/8.jpg'),
(27, 'aya hasan ', 'aya.hasan@gmail.com', '123123', 'image/10.jpg'),
(29, 'mariam ismaeel ', 'mariam@yahoo.com', '147147', 'image/9.jpg'),
(30, 'yehya', 'yehya1987@gmail.com', '159@159', 'image/1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
