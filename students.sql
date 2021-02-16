-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 11:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `batch` varchar(256) DEFAULT NULL,
  `description` text NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `city` text DEFAULT NULL,
  `province` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `MAD100` int(3) DEFAULT NULL,
  `MAD105` int(3) DEFAULT NULL,
  `MAD110` int(3) DEFAULT NULL,
  `MAD120` int(3) DEFAULT NULL,
  `MAD125` int(3) DEFAULT NULL,
  `MAD200` int(3) DEFAULT NULL,
  `MAD225` int(3) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `last_name`, `height`, `weight`, `batch`, `description`, `address`, `city`, `province`, `country`, `phone`, `email`, `website`, `MAD100`, `MAD105`, `MAD110`, `MAD120`, `MAD125`, `MAD200`, `MAD225`, `status`) VALUES
('A0000001', 'Huzaifa', 'Saboowala', 1.68, 78, 'MAD Sept 2020', 'Huzaifa is a student of MAD 2020.', '5166 Sunray Drive', 'Mississauga', 'Ontario', 'CA', '4379895253', 'huzisaboo@gmail.com', NULL, 95, 88, 92, 97, 91, 89, 86, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
