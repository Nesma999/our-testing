-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 07:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egypt-visa`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`) VALUES
(5, 'very good'),
(6, 'very boring'),
(7, 'very bad'),
(9, 'good'),
(10, 'very good'),
(11, 'nice'),
(15, 'this is very interested');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `app` varchar(30) NOT NULL,
  `visa` varchar(30) NOT NULL,
  `entry` varchar(30) NOT NULL,
  `travelfrom` varchar(30) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`aid`, `id`, `app`, `visa`, `entry`, `travelfrom`, `arrival`, `departure`, `status`) VALUES
(3, 8, 'Single', 'Travel', 'Single', 'Tuvalu', '2020-06-25', '2020-06-30', 'accept'),
(11, 15, 'Family', 'Travel', 'Single', 'vanuatu', '2020-10-20', '2020-10-12', 'pending'),
(12, 13, 'Single', 'Travel', 'Single', 'Tuvalu', '2020-05-06', '2021-06-06', 'reject'),
(13, 7, 'Family', 'Travel', 'Multiple', 'British', '2020-10-10', '2021-11-11', 'pending'),
(14, 5, 'Group', 'Travel', 'Multiple', 'Vietnam', '2020-01-01', '2021-02-22', 'pending'),
(15, 10, 'Single', 'Travel', 'Multiple', 'British', '2021-10-10', '2022-03-10', 'pending'),
(16, 6, 'Family', 'Travel', 'Single', 'Afghanistan', '2020-10-10', '2021-01-01', 'pending'),
(17, 9, 'Family', 'Travel', 'Single', 'Samoa', '2021-05-05', '2021-05-06', 'accept'),
(18, 14, 'Family', 'Travel', 'Multiple', 'Sweden', '2021-10-02', '2021-10-12', 'accept');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `group_id`) VALUES
(1, 'nesma', 'nesma@gmail.com', 1146485834, '123', 1),
(5, 'mariam', 'mariam1@gmail.com', 12376567, '12345', 0),
(6, 'haidy', 'haidy@gmail.com', 1209876543, '1234', 0),
(7, 'hala', 'hala@gmail.com', 11234567, '123', 0),
(8, 'mona', 'mona@gmail.com', 123456778, '123', 0),
(9, 'aya', 'aya@gmail.com', 123987654, '123', 0),
(10, 'hamza', 'hamza@gmail.com', 120524521, '158', 0),
(11, 'sally', 'saaly245874@gmail.com', 2147483647, '14585sally', 0),
(12, 'mamdouh', 'mamdouh3030@gmail.com', 521451, 'mamdouh2547896', 0),
(13, 'hamdy', 'hamdy8597@gmail.com', 125478963, '145874hamdy', 0),
(14, 'foaud', 'foda52525@gmail.com', 2547896, 'foda2547896', 0),
(15, 'noura', 'nour87nour@gmail.com', 2147483647, 'nono2145687', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
