-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 06:26 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`

-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL);
--
INSERT INTO `user` (`name`, `email`, `password`)VALUES
  ('laks', 'salakshan2001@gmail.com', '$2y$10$Kx95JlOkNx/mNusvKtXFLuShPXo.XC94liS8yBT6UrkqvG1noye8S'),
  ('thuva', 'thuva12@gmail.com ', '$2y$10$Kx95JlOkNx/mNusvKtXFLuShPXo.XC94liS8yBT6UrkqvG1noye8S');
-- --------------------------------------------------------

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--
-- --------------------------------------------------------


 