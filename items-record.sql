-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 
-- Generation Time: Jan 24, 2023 at 17:00 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `itemsMode` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `itemPic` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descript` varchar(300) NOT NULL,
  `category` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `brand` varchar(50) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `itemsMode` (`id`, `itemPic`, `title`, `descript`, `category`, `brand`, `condition`, `price`) VALUES
(1, 'media/items/ab-wheel.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Sport', 'Romix', 'used', '£ 11'),
(2, 'media/items/barbour-bag.jpg', 'Accessory', 'Big grey tartan Barbour bag', 'Accessory', 'Barbour', 'Used a few times', '£ 30'),
(3, 'media/items/beige-dress-pants.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(4, 'media/items/beige-short-sleeved-sweater.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(5, 'media/items/bench-grey-sweater.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(6, 'media/items/black-and-gold-fred-perry-polo.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(7, 'media/items/black-ankle-boots.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Shoes', 'brand', 'condition', 'price'),
(8, 'media/items/black-benetton-sweater.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women','brand', 'condition', 'price'),
(9, 'media/items/black-blue-fred-perry-polo.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Men', 'brand', 'condition', 'price'),
(10, 'media/items/black-corduroy-skirt.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(11, 'media/items/black-dress-pants.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price'),
(12, 'media/items/black-dress.jpg', 'Ab Wheel', 'it is a great exercise to work the entire upper body', 'Women', 'brand', 'condition', 'price');

