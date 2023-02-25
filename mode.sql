-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2023 at 10:43 PM
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
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fav_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fav_ID`, `user_ID`, `order_ID`) VALUES
(171, 34, 79),
(173, 34, 114),
(175, 23, 92),
(177, 23, 120),
(178, 23, 127),
(180, 24, 123),
(182, 24, 135),
(183, 26, 84),
(184, 26, 87),
(186, 26, 85),
(189, 32, 79),
(190, 32, 115),
(191, 32, 77),
(192, 31, 165),
(193, 31, 94),
(194, 30, 104),
(195, 30, 101),
(196, 30, 137),
(197, 30, 76);

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
(76, 23, 'black-ankle-boots.jpg', 'Ankle boots', 'Alysondm\'s wintergrip chelsea boots', 'shoes', 'Dr Martens', 'used', 'Shoes: 5', '40'),
(77, 23, 'barbour-bag.jpg', 'Bag', 'Grey tartan bag', 'accessories', 'Barbour', 'almost new', 'one size', '55'),
(78, 23, 'beige-dress-pants.jpg', 'Cropped culottes', 'High-waist beige trousers ', 'women', 'Zara', 'almost new', 'M', '22'),
(79, 23, 'beige-short-sleeved-sweater.jpg', 'Knit t-shirt', 'Beige knit t-shirt', 'women', 'Hug and Clau', 'Only worn a few times', 'S', '11.20'),
(80, 23, 'black-benetton-sweater.jpg', 'Cashmere cardigan', 'Black cashmere cardigan', 'women', 'Benetton', 'use it but in good condition', 'S', '22'),
(81, 23, 'black-corduroy-skirt.jpg', 'Skirt', 'Black corduroy skirt', 'women', 'Mango', 'used', 'XS', '7'),
(82, 23, 'black-dress-pants.jpg', 'Trousers', 'Black full length trousers', 'women', 'Zara', 'almost new', 'M', '15.99'),
(83, 24, 'ab-wheel.jpg', 'Ab wheel', 'Black ab wheel', 'sport', 'Decathlon', 'Use it but in good condition', 'one size', '7.50'),
(84, 24, 'bench-grey-sweater.jpg', 'Jumper', 'Grey jumper', 'men', 'Bench', 'use it but in good condition', 'L', '13'),
(85, 24, 'black-and-gold-fred-perry-polo.jpg', 'Polo', 'Golden/Black polo shirt', 'men', 'Fred Perry', 'in good condition', 'L', '44.80'),
(86, 24, 'black-blue-fred-perry-polo.jpg', 'Polo', 'Blue/black polo shirt', 'men', 'Fred Perry', 'use them a few times', 'L', '45.30'),
(87, 25, 'black-dress.jpg', 'Dress', 'Black ribbed midi dress with short sleeves', 'women', 'Zara', 'only worn a few times', 'M', '9.99'),
(88, 25, 'black-midi-skirt.jpg', 'Skirt', 'Black high-waist midi skirt with an elastic waistband.', 'women', 'Zara', 'only worn once', 'S', '18.90'),
(89, 25, 'black-mum-jeans.jpg', 'Jeans', 'Black mum jeans', 'women', 'H&M', 'in good condition', 'M', '22.70'),
(90, 25, 'black-northface-waterprook.jpg', 'Jacket', 'Black waterproof jacket', 'women', 'North Face', 'only worn a few times', 'S', '105.70'),
(91, 25, 'black-short-sleeve-shirt-holes.jpg', 'T-shirt', 'Black t-shirt with holes', 'women', 'Dr.Denim', 'in good condition', 'S', '46'),
(92, 25, 'black-zara-coat.jpg', 'Coat', 'Black  wool blend fitted coat', 'women', 'Zara', 'almost new', 'M', '44.90'),
(93, 26, 'black-fred-perry-t-shirt.jpg', 'T-shirt', 'Black Contrast Tape Ringer T-Shirt', 'men', 'Fred Perry', 'new', 'S', '43.50'),
(94, 26, 'blue-tartan-hm-shirt.jpg', 'Shirt', 'Blue tartan shirt', 'men', 'H&M', 'use it but in good condition', 'L', '9.85'),
(95, 26, 'blue-adidas-t-shirt.jpg', 'T-shirt', 'Blue Contrast Tape Ringer T-Shirt', 'men', 'Adidas', 'new', 'S', '23.50'),
(96, 26, 'bordeaux-short-sleeved-fred-perry-polo.jpg', 'Polo', 'Black/Bordeaux  polo shirt', 'men', 'Fred Perry', 'use it but in good condition', 'L', '45.60'),
(97, 26, 'catan.jpg', 'Catan', 'Game board Catan without the extension', 'entertainment', 'Amazon', 'new', 'one size', '25'),
(98, 26, 'chess.jpg', 'Chess', 'Cardboard chess with plastic figures', 'entertainment', 'Amazon', 'use it a few times', 'one size', '3.50'),
(99, 27, 'blue-benetton-sweater.jpg', 'Jumper', 'Blue cashmere jumper', 'women', 'Benetton', 'used', 'S', '13.60'),
(100, 27, 'blue-dress.jpg', 'Dress', 'Blue ribbed midi dress with short sleeves', 'women', 'Zara', 'used it a few times', 'M', '13.40'),
(101, 27, 'blue-mango-t-shirt.jpg', 'T-shirt', 'Blue short sleeve t-shirt', 'women', 'Mango', 'use it but in good condition', 'S', '9.20'),
(102, 27, 'blue-mum-jeans.jpg', 'Jeans', 'Blue mum jeans', 'women', 'H&M', 'use it but in good condition', 'M', '13.30'),
(103, 27, 'blue-stripes-t-shirt.jpg', 'T-shirt', 'Blue stripes short sleeve t-shirt', 'women', 'Atmosphere', 'used', 'S', '3.70'),
(104, 27, 'bordeaux-dress.jpg', 'Ribbed midi dress', 'Bordeaux midi dress with short sleeves', 'women', 'Primark', 'used', 'S', '7.90'),
(105, 27, 'brown-dr-martens-boots.jpg', 'Boots', 'Dark brown leather with faux fur lined boots', 'shoes', 'Dr. Martens', 'used', 'Shoes: 6', '45.60'),
(106, 27, 'canale-white-t-shirt.jpg', 'T-shirt', 'white ribbed t-shirt', 'women', 'Zara', 'worn once', 'S', '9.90'),
(107, 27, 'carhartt-leather-bomber.jpg', 'Jacket', 'Leather jacket with hood', 'women', 'Carrthatt', 'used', 'S', '47.90'),
(108, 27, 'cashmere-sweater.jpg', 'Sweater', 'Gren cashmere sweater', 'women', '& Other Stories', 'in good condition', 'XS', '34.90'),
(109, 28, 'comptoir-des-cotonniers-coat.jpg', 'Coat', ' Grey coat with shoulder pads', 'women', 'Comptoir des cotonniers', 'in good condition', 'S', '160'),
(110, 28, 'dark-blue-mum-jeans.jpg', 'Jeans', 'Dark blue mum jeans', 'women', 'Mango', 'new', 'S', '29'),
(111, 28, 'dr-martens-bordeaux-bag.jpg', 'Bag', 'Bordeaux bag ', 'accessories', 'Dr. Martens', 'in good condition', 'one size', '59.90'),
(112, 28, 'dungarees.jpg', 'Dungarees', 'Beige dungarees with vertical stripes', 'women', 'Marks and Spencer', 'only worn once', 'S', '25.90'),
(113, 28, 'ecru-dress.jpg', 'Ribbed midi dress', 'V-neck ecru midi dress with long sleeves.', 'women', 'Zara', 'new', 'S', '17.90'),
(114, 28, 'vans.jpg', 'Vans', 'Printed vans', 'shoes', 'Vans', 'in good condition', 'Shoes: 5', '34.80'),
(115, 28, 'twister.jpg', 'Twister', 'Action-packed group game is fun for parties or a game night with family or friends.', 'entertainment', 'Amazon', 'in good condition', 'one size', '15.90'),
(116, 29, 'Dakine-backpack.jpg', 'Backpack', 'black backpack', 'accessories', 'Dakine', 'used', 'one size', '22.50'),
(117, 29, 'green-adidas.jpg', 'Shoes', 'Green adidas shoes', 'shoes', 'Adidas', 'used', 'Shoes: 8', '35'),
(118, 29, 'guatafac.jpg', 'Gameboard', 'The perfect board game to play for drinks: 400 cards with questions.', 'entertainment', 'Amazon', 'new', 'one size', '12.95'),
(119, 29, 'guitar.jpg', 'Guitar', 'Spanish guitar with tartan cover.', 'entertainment', 'Music shop', 'use it but in good condition', 'one size', '22.90'),
(120, 29, 'tartan-fred-perry-t-shirt.jpg', 'Shirt', 'Tartan shirt', 'men', 'Fred Perry', 'almost new', 'L', '66.70'),
(121, 29, 'travel-backpack.jpg', 'Backpack', 'Grey travel backpack Ryanair measurements', 'accessories', 'Amazon', 'in good condition', 'one size', '22.55'),
(122, 29, 'tartan-hm-t-shirt.jpg', 'Shirt', 'Bordeaux tartan shirt', 'men', 'H&M', 'use it but in good condition', 'XL', '8.90'),
(123, 29, 'nike.jpg', 'Shoes', 'Black waterproof shoes', 'men', 'Nike', 'use it but in good condition', 'Shoes: 8', '77'),
(125, 30, 'elvine-coat.jpg', 'Coat', 'Winter waterproof blue coat', 'women', 'Elvine', 'used', 'S', '50'),
(126, 30, 'flowers-dress.jpg', 'Dress', 'Shirt dress with flower print', 'women', 'Nature', 'only worn a few times', 'L', '16.20'),
(127, 30, 'flowers-green-dress.jpg', 'Dress', 'Open back green  with flower print.', 'women', 'Urban outfitters', 'new', 'L', '45.90'),
(128, 30, 'flowers-short-sleeved-shirt.jpg', 'Shirt', 'Transparent shirt  with flower print', 'women', 'Debenhams', 'in good condition', 'L', '11.20'),
(129, 30, 'gray-wool-hat.jpg', 'Hat', 'Grey wool hat', 'accessories', 'Carrthatt', 'in good condition', 'one size', '23.10'),
(130, 30, 'green-dr-martens-boots.jpg', 'Boots', 'Green smooth leather lace up boots', 'shoes', 'Dr. Martens', 'used', 'Shoes: 4', '22.30'),
(131, 31, 'green-coast-sweater.jpg', 'Sweater', 'blue stripes sweater', 'men', 'Green Coast', 'used', 'S', '11.85'),
(132, 31, 'grey-sweater.jpg', 'Sweater', 'Grey sweater', 'men', 'Green Coast', 'used', 'S', '12.30'),
(133, 31, 'hat-with-pompom.jpg', 'Hat', 'Pon pon hat', 'men', 'Barts', 'used', 'one size', '13.80'),
(134, 31, 'man-blue-jeans.jpg', 'Jeans', 'Dark blue jeans', 'men', 'Lee', 'used', 'S', '22.75'),
(135, 31, 'mustard-waterproof.jpg', 'Waterproof', 'Mustard waterproof jacket', 'men', 'North Face', 'use it but in good condition', 'S', '68.90'),
(136, 31, 'white-fred-perry-polo.jpg', 'Polo', 'White polo shirt', 'men', 'Fred Perry', 'in good condition', 'S', '44.90'),
(137, 32, 'green-dress.jpg', 'Dress', 'Ribbed midi dress with short sleeves.', 'women', 'Zara', 'almost new', 'S', '11.20'),
(138, 32, 'hairdresser.jpg', 'Hair dresser', 'Black hair dresses with diffuser accessorie', 'accessories', 'Babyliss', 'use it but in good condition', 'one size', '32.30'),
(139, 32, 'holes-zara-polo.jpg', 'Polo', 'White crochet polo shirt', 'women', 'Zara', 'use it a few times', 'S', '22.30'),
(140, 32, 'new-balance.jpg', 'New Balance', 'black/pink waterproof new Balance sneakers', 'shoes', 'New Balance', 'used', 'Shoes: 5', '35.60'),
(141, 32, 'nintendo-controller.jpg', 'Nintendo controllers', 'A pair of wireless classic nintendo controller', 'entertainment', 'Nintendo', 'almost new', 'one size', '48.90'),
(142, 32, 'orange-short-skirt.jpg', 'Skirt', 'Printed short skirt', 'women', 'H&M', 'in good condition', 'M', '9.80'),
(143, 32, 'pink-dress.jpg', 'Dress', 'Nude dress with lace on top and tulle on the bottom', 'women', 'H&M', 'in good condition', 'S', '8.30'),
(144, 32, 'pink-sweatshirts.jpg', 'Sweatshirts', 'Dark blue/nude sweatshirts with a zipper.', 'women', 'Urban outfitters', 'in good condition', 'S', '25.40'),
(145, 32, 'poncho.jpg', 'Poncho', 'Blue poncho with colours cross stripes', 'women', 'Vilagallo', 'almost new', 'L', '120'),
(146, 32, 'printed-long-sleeved-shirt.jpg', 'Shirt', 'Printed shirt', 'women', 'Marks and Spencer', 'in good condition', 'S', '9.90'),
(147, 33, 'printed-short-sleeve-shirt.jpg', 'Shirt', 'Printed shirt', 'women', 'Top Shop', 'used', 'XS', '9.70'),
(148, 33, 'purple-pull-and-bear-jumper.jpg', 'Jumper', 'Purple knit jumper', 'women', 'Pull and Bear', 'used', 'S', '8.20'),
(149, 33, 'tweed-coat.jpg', 'Coat', 'Tweed coat', 'women', 'Zara', 'in good condition', 'S', '22.90'),
(150, 33, 'turquoise-sweter.jpg', 'Jumper', 'Torquoise overside knit jumper', 'women', 'Pull and Bear', 'in good condition', 'S', '8.50'),
(151, 33, 'dr-martens-leather-bag.jpg', 'Bag', 'Brown leather bag', 'accessories', 'Dr. Martens', 'used', 'one size', '39.60'),
(152, 33, 'turquoise-short-sleeve-sweater.jpg', 'Shirt', 'Torquoise knit shirt with buttons and short sleeve', 'women', 'Lee', 'almost new', 'S', '35'),
(153, 33, 'travel-bag-longchamp.jpg', 'Travel bag', 'Blue travel bag', 'accessories', 'Longchamp', 'almost new', 'one size', '89'),
(154, 34, 'tartan-trousers.jpg', 'Trousers', 'Skinny tartan trousers', 'women', 'Primark', 'almost new', 'M', '6.60'),
(155, 34, 'tartan-skirt.jpg', 'Skirt', 'Tartan midi skirt', 'women', 'Zara', 'new', 'S', '13'),
(156, 34, 'tartan-polo.jpg', 'Polo', 'Black polo shirt with tartan sleeves', 'women', 'Fred Perry', 'only worn a few times', 'S', '45.90'),
(157, 34, 'white-skirt.jpg', 'Skirt', 'White tulle white skirt', 'women', 'Zara', 'in good condition', 'S', '13'),
(158, 34, 'red-dress.jpg', 'Dress', 'Tartan dress', 'women', 'Sisley', 'in good condition', 'S', '35'),
(159, 34, 'stripes-short-sweter.jpg', 'Sweater', 'Stripes sweater with long sleeves.', 'women', 'Primark', 'almost new', 'S', '5.50'),
(160, 34, 'stripes-dress.jpg', 'Dress', 'Stripes dress with medium sleeves', 'women', 'H&M', 'in good condition', 'S', '12.30'),
(163, 34, 'skulls-short-sleeved-shirt.jpg', 'Shirt', 'Short sleeve shirt with skulls', 'women', 'Chopper Monster', 'in good condition', 'L', '55.90'),
(164, 35, 'sweater-vest.jpg', 'Sweater Vest', 'Grey Sweater Vest', 'men', 'Lyle & Scott', 'almost new', 'S', '22.75'),
(165, 35, 'reversible-puffer.jpg', 'Puffer', 'Grey/Blue reversible puffer', 'men', 'Ecoalf', 'almost new', 'S', '200'),
(166, 25, 'rack-dress.jpg', 'Dress', 'Black crochet dress with elastic dress', 'women', 'H&M', 'used', 'L', '5.90'),
(167, 25, 'short-polo.jpg', 'Polo', 'Black crop polo shirt with short sleeves', 'women', 'Urban outfitters', 'in good condition', 'S', '22.90'),
(169, 34, 'strength-tapes.jpg', 'Strength tapes', '3 strength tapes (heavy, medium, lighter)', 'sport', 'Autkors', 'almost new', 'one size', '9.90'),
(170, 30, 'dumbbells.jpg', 'Dumbbells', '3kg Dumbbells', 'sport', 'Decathlon', 'almost new', 'one size', '10.50');

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
(23, 'Sofia', 'sofia@gmail.com', '$2y$10$kCLIxgQbN7782L4HNTalyuRjkX22dy.kmPl8ZLShgzG.diwsqd3CO'),
(24, 'David', 'david@gmail.com', '$2y$10$v.ybYTZB0o5oraCn4F/KeeBbwk7GHen3FAx0fzpHgpcExFiUyC6ie'),
(25, 'Marta', 'marta@gmail.com', '$2y$10$uS0RlsN50i53Y1lBuaCTGeXqiFTrMBwOPk6umEv7FOchepEQHSJxK'),
(26, 'Harry', 'harry@gmail.com', '$2y$10$XtKLB90tFIzDQphJRPZGEOIVIL4JR/XzSn5QQe/MZ/IqL9w44I03e'),
(27, 'Emma', 'emma@gmail.com', '$2y$10$Ke44/Xps30cCzFO6HmVomeQWCD1Hq4qDEiaIlneNO1ELieUOV7ZXi'),
(28, 'Claire', 'claire@gmail.com', '$2y$10$OeXIqACDqdOuIk76U/njqOqoVDW0uPkKKMCxPCQY/G0qci72T9bMK'),
(29, 'Liam', 'liam@gmail.com', '$2y$10$v8KIWURkGNbCIRnB/0zuC.Ptx2bGz5m0zlDqavsj4vmMqmn0hL5Gm'),
(30, 'Scarlett', 'scarlett@gmail.com', '$2y$10$96rtkhVtTPm5mXN3zbnH8uhM4oQ3gWcjTqQMFH/WFqx56tYLESWmi'),
(31, 'Simon', 'simon@gmail.com', '$2y$10$UP6ExHaTX5JYzC7MpEsqD.BNE7xqoOR4yjWf4Ku276EVmyXZaAZpy'),
(32, 'Helen', 'helen@gmail.com', '$2y$10$DuVDIXS.KIp4Doc2Oi72i.EbZBsQm89MpCz9q8/C8FZgegO1b.Fzy'),
(33, 'Grace', 'grace@gmail.com', '$2y$10$4/XBsP2CzO//R52mkvqoxem32cjD90FcnWRiD9Df5M.ZG7Ai9Q2ym'),
(34, 'Stella', 'stella@gmail.com', '$2y$10$z0wSb8FfqzLSAw8VIuGsCujm8De/SQAsuIKIe7O.T.P3Bn/3ZkXUy'),
(35, 'Paul', 'paul@gmail.com', '$2y$10$vw3I95p9QI0gG9tM04EQfeenRSgFMvmdPHrR0w24PpceKIoM.TGbC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fav_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `order_ID` (`order_ID`);

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
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fav_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `itemsMode`
--
ALTER TABLE `itemsMode`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`order_ID`) REFERENCES `itemsMode` (`order_ID`);

--
-- Constraints for table `itemsMode`
--
ALTER TABLE `itemsMode`
  ADD CONSTRAINT `itemsmode_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
