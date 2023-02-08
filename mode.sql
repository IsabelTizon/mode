-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2023 at 03:25 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mode`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemsMode`
--

CREATE TABLE `itemsMode` (
  `order_ID` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `itemPic` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descript` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `condition1` varchar(50) NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemsMode`
--

INSERT INTO `itemsMode` (`order_ID`, `user_ID`, `itemPic`, `title`, `descript`, `category`, `brand`, `condition1`, `size`, `price`) VALUES
(15, 3, 'black-benetton-sweater.jpg', 'sweater', 'black', 'women', 'Benneton', 'in good condition', 's', '22'),
(16, 2, 'tartan-skirt.jpg', 'skirt', 'midi tartan skirt', 'women', 'Zara', 'new', 'S', '22'),
(17, 3, 'short-polo.jpg', 'Polo', 'black', 'women', 'Zara', 'almost new', 's', '13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `email`, `password_hash`) VALUES
(1, 'Sofia', 'sofia@gmail.com', '$2y$10$kQgcgF.JrGv7mcga7Ibftu4DD/aivIUZk13Q8xHclJ8YjlaptbrV2'),
(2, 'David', 'david@gmail.com', '$2y$10$rosDKNXeHwB6wAzRPKOxpukbYvZH1PnSUnvENOgoDOFYvTrQXzBwW'),
(3, 'Marta', 'marta@gmail.com', '$2y$10$GyEHD5v1XrjgWXrE6NKBsuVBFfC4T.f2YKR0kHEWcVMiYxPwEPFC.'),
(13, 'Alvaro', 'alvaro@gmail.com', '$2y$10$0yevmjQ0AaI1qhCMM5gkY.XrqgkXuFHpbT6ewqG5a8fynQpJCxiHm'),
(14, 'Raquel', 'raquel@gmail.com', '$2y$10$/77wfVN1rU77S3Ae3HiQSOQq1dd8aJ3lb2OLL.LzPeuLfpBBGjKPO'),
(16, 'Victor', 'victor@gmail.com', '$2y$10$OwWTDkcbHgZWdJQsW4WFx.502tSU7oBc67VvYEI618gPcEcDpvWZC'),
(17, 'Horacio', 'horacio@gmail.com', '$2y$10$aLFO0daTNX9vJBIz49nAj.0MTPtNZUuUSrex44rT0FWuukbUcno.a'),
(18, 'Ciara', 'ciara35@gmail.com', '$2y$10$wSrOL7p3QjAr8Mv3m2ZZU.bsZvWjdjntnE6xFUxhWeW8XwFG8Hb8q'),
(19, 'Willy', 'willy@gmail.com', '$2y$10$EiHB4XkFk9mWOeGHkHjLquQXbjD/H.lXC1nusO9/wIXSWrnIhmCFW'),
(20, 'Iain', 'iain@gmail.com', '$2y$10$LvpI0Wv2upt8mZ.J3iiT/.hCNP89EuihNZ/wmKXvT8/GU9tMGRC42'),
(21, 'Samuel', 'samuel@gmail.com', '$2y$10$AMVOatG/H1t4TUYM4Z9gyOPCt4iJwk.C7egtwTVP2x1HUOV.gLxy2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemsMode`
--
ALTER TABLE `itemsMode`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemsMode`
--
ALTER TABLE `itemsMode`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemsMode`
--
ALTER TABLE `itemsMode`
  ADD CONSTRAINT `itemsmode_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
