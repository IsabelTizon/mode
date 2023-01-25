-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 25, 2023 at 11:19 AM
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
  `id` int(11) NOT NULL,
  `itemPic` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descript` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemsMode`
--

INSERT INTO `itemsMode` (`id`, `itemPic`, `title`, `descript`, `category`, `brand`, `condition`, `price`) VALUES
(1, 'media/items/ab-wheel', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Sport', 'Romix', 'used', '£ 11'),
(2, 'media/items/barbour-', 'Accessory', 'Big grey tartan Barbour bag', 'Accessory', 'Barbour', 'Used a few times', '£ 30'),
(3, 'media/items/beige-dr', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(4, 'media/items/beige-sh', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(5, 'media/items/bench-gr', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(6, 'media/items/black-an', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(7, 'media/items/black-an', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Shoes', 'brand', 'condition', 'price'),
(8, 'media/items/black-be', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(9, 'media/items/black-bl', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(10, 'media/items/black-co', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(11, 'media/items/black-dr', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(12, 'media/items/black-dr', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemsMode`
--
ALTER TABLE `itemsMode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemsMode`
--
ALTER TABLE `itemsMode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
