-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 28, 2023 at 09:48 AM
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
  `image_ID` int(11) NOT NULL,
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

INSERT INTO `itemsMode` (`image_ID`, `itemPic`, `title`, `descript`, `category`, `brand`, `condition1`, `size`, `price`) VALUES
(1, 'media/items/photos/ab-wheel.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Sport', 'Romix', 'used', 'one size', '£ 11'),
(2, 'media/items/photos/barbour-bag.jpg', 'Bag', 'Large gray bag with tartan print', 'Accessory', 'Barbour', 'Used a few times', 'one size', '£ 30'),
(3, 'media/items/photos/beige-dress-pants.jpg', 'Dress pants', 'Beige dress culottes', 'Women', 'Zara', 'Used a few times', '12', '£ 15'),
(4, 'media/items/photos/beige-short-sleeved-sweater.jpg', 'Jersey', 'Beige knitted short sleeve jumper', 'Women', 'Hug & Clau', 'almost new', 'M', '£ 9'),
(5, 'media/items/photos/bench-grey-sweater.jpg', 'Sweater', 'Gray sweater with a red stripe and a blue stripe', 'Men', 'Bench', 'used', '42', '£ 7'),
(6, 'media/items/photos/black-and-gold-fred-perry-polo.jpg', 'Polo', 'Black polo shirt with gold detail', 'Men', 'Fred Perry', 'used', '42', '£ 30'),
(7, 'media/items/photos/black-ankle-boots.jpg', 'Boots', 'Water resistant Black leather Chelsea boots', 'Shoes', 'Dr Martens', 'used', '5', '£ 50'),
(8, 'media/items/photos/black-benetton-sweater.jpg', 'Cardigan', 'Black cashmere cardigan', 'Women', 'Benetton', 'used', '8', '£ 20'),
(9, 'media/items/photos/black-blue-fred-perry-polo.jpg', 'Polo', 'Black polo shirt with blue detail', 'Men', 'Fred Perry', 'used', '42', '£ 30'),
(10, 'media/items/photos/black-corduroy-skirt.jpg', 'Skirt', 'Black corduroy skirt', 'Women', 'Mango', 'used', '6', '£ 8'),
(11, 'media/items/photos/black-dress-pants.jpg', 'Dress pants', 'Black dress pants with pinstripe', 'Women', 'Zara', 'used a few times', '10', '£ 12'),
(12, 'media/items/photos/black-dress.jpg', 'Dress', 'Black midi dress with a high neck and a small opening on the leg', 'Women', 'Zara', 'use', 'M', '£ 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemsMode`
--
ALTER TABLE `itemsMode`
  ADD PRIMARY KEY (`image_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemsMode`
--
ALTER TABLE `itemsMode`
  MODIFY `image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
