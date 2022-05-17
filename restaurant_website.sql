-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 10:33 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT 'Guest Client',
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(20) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `username`, `client_name`, `client_phone`, `client_email`, `password`) VALUES
(17, 'Client1', 'Client', '1', 'Client1@c.com', '1'),
(18, 'Client2', 'Client', '2', 'Client2@c.com', '2'),
(19, 'Client3', 'Client', '3', 'Client3@c.com', '3'),
(20, 'Client4', 'Client', '4', 'Client4@c.com', '4'),
(23, 'Guest Client', 'Client', '5', 'Client5@c.com', NULL),
(24, 'Guest Client', 'Client', '6', 'Client6@c.com', NULL),
(25, 'Guest Client', 'Client', '7', 'Client7@c.com', NULL),
(26, 'Guest Client', 'Client', '8', 'Client8@c.com', NULL),
(27, 'Guest Client', 'Client', '9', 'Client9@c.com', NULL),
(28, 'Guest Client', 'Client', '10', 'Client10@c.com', NULL),
(29, 'Guest Client', 'Client', '11', 'Client11@c.com', NULL),
(30, 'Guest Client', 'Client', '12', 'Client12@c.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

DROP TABLE IF EXISTS `image_gallery`;
CREATE TABLE IF NOT EXISTS `image_gallery` (
  `image_id` int(2) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`image_id`, `image_name`, `image`) VALUES
(1, 'Tajine', '58146_Moroccan Chicken Tagine.jpeg'),
(2, 'Italian Pasta', 'img_1.jpg'),
(3, 'Cook', 'img_2.jpg'),
(4, 'Pizza', 'img_3.jpg'),
(5, 'Burger', 'burger.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `in_order`
--

DROP TABLE IF EXISTS `in_order`;
CREATE TABLE IF NOT EXISTS `in_order` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `order_id` int(5) NOT NULL,
  `menu_id` int(5) NOT NULL,
  `quantity` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_menu` (`menu_id`),
  KEY `fk_order` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_order`
--

INSERT INTO `in_order` (`id`, `order_id`, `menu_id`, `quantity`) VALUES
(12, 13, 11, 1),
(13, 14, 1, 1),
(14, 15, 2, 1),
(15, 16, 1, 1),
(16, 16, 3, 1),
(17, 17, 8, 1),
(18, 17, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(2) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(20) NOT NULL,
  `menu_description` varchar(255) NOT NULL,
  `menu_price` decimal(4,2) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `category_id` int(2) NOT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `FK_menu_category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_description`, `menu_price`, `menu_image`, `category_id`) VALUES
(1, 'Xincent Burger', 'Classic marinara sauce', '14.00', '88737_couscous_meat.jpg', 1),
(2, 'Margherita', 'Classic marinara sauce, authentic old-world pepperoni.', '3.80', 'burger.jpeg', 1),
(3, 'Amarretti', 'Classic marinara sauce, authentic old-world pepperoni.', '7.50', 'summer-dessert-sweet-ice-cream.jpg', 2),
(4, 'Bostrengo', 'Classic marinara sauce, authentic old-world pepperoni.', '4.50', 'summer-dessert-sweet-ice-cream.jpg', 2),
(5, 'Late Vegetale', 'Classic marinara sauce, authentic old-world pepperoni.', '10.00', 'coffee.jpeg', 3),
(6, 'Ice Tea', 'Classic marinara sauce, authentic old-world pepperoni.', '3.20', 'coffee.jpeg', 3),
(7, 'Bucatini', 'Classic marinara sauce, authentic old-world pepperoni.', '20.00', 'macaroni.jpeg', 4),
(8, 'Cannelloni', 'Classic marinara sauce, authentic old-world pepperoni.', '10.00', 'cooked_pasta.jpeg', 4),
(9, 'Margherita', 'Classic marinara sauce, authentic old-world pepperoni.', '24.00', 'pizza.jpeg', 5),
(10, 'Diablo', 'Classic marinara sauce, authentic old-world pepperoni.', '10.00', 'pizza_plate.jpeg', 5),
(11, 'Tajine', 'Tajine', '20.00', '58146_Moroccan Chicken Tagine.jpeg', 1),
(12, 'BISSARA', 'BISSARA B ZIT LAOUD', '10.00', '61959_Bissara.jpg', 1),
(13, 'COUSCOUS', 'COUSCOUS BIL ADASS', '99.99', '68526_57738_w1024h768c1cx256cy192.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

DROP TABLE IF EXISTS `menu_categories`;
CREATE TABLE IF NOT EXISTS `menu_categories` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(15) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`category_id`, `category_name`) VALUES
(1, 'burgers'),
(2, 'desserts'),
(3, 'drinks'),
(4, 'pasta'),
(5, 'pizzas'),
(6, 'salads');

-- --------------------------------------------------------

--
-- Table structure for table `placed_orders`
--

DROP TABLE IF EXISTS `placed_orders`;
CREATE TABLE IF NOT EXISTS `placed_orders` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `order_time` datetime NOT NULL,
  `client_id` int(5) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `delivered` tinyint(1) NOT NULL DEFAULT '0',
  `canceled` tinyint(1) NOT NULL DEFAULT '0',
  `cancellation_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_client` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placed_orders`
--

INSERT INTO `placed_orders` (`order_id`, `order_time`, `client_id`, `delivery_address`, `delivered`, `canceled`, `cancellation_reason`) VALUES
(13, '2022-05-17 21:43:00', 23, 'c5', 0, 0, NULL),
(14, '2022-05-17 21:44:00', 24, 'c6', 0, 0, NULL),
(15, '2022-05-17 21:44:00', 25, 'C7', 0, 0, NULL),
(16, '2022-05-17 21:49:00', 26, 'c8', 0, 0, NULL),
(17, '2022-05-17 21:54:00', 29, 'c11', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(5) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `client_id` int(5) NOT NULL,
  `selected_time` datetime NOT NULL,
  `nbr_guests` int(2) NOT NULL,
  `table_id` int(3) NOT NULL,
  `liberated` tinyint(1) NOT NULL DEFAULT '0',
  `canceled` tinyint(1) NOT NULL DEFAULT '0',
  `cancellation_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `date_created`, `client_id`, `selected_time`, `nbr_guests`, `table_id`, `liberated`, `canceled`, `cancellation_reason`) VALUES
(1, '2020-07-18 09:07:00', 13, '2020-07-30 09:07:00', 0, 1, 0, 0, NULL),
(2, '2020-07-18 09:11:00', 14, '2020-07-29 13:00:00', 4, 1, 0, 0, NULL),
(3, '2022-05-17 15:30:00', 16, '2022-05-18 15:30:00', 1, 1, 0, 0, NULL),
(4, '2022-05-17 21:49:00', 27, '2022-05-27 21:49:00', 3, 1, 0, 0, NULL),
(5, '2022-05-17 21:53:00', 28, '2022-06-03 21:52:00', 3, 1, 0, 0, NULL),
(6, '2022-05-17 22:10:00', 30, '2022-05-31 22:10:00', 4, 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `table_id` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `full_name`, `password`) VALUES
(2, 'admin', 'admin@admin.com', 'admin', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `in_order`
--
ALTER TABLE `in_order`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`menu_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`order_id`) REFERENCES `placed_orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `FK_menu_category_id` FOREIGN KEY (`category_id`) REFERENCES `menu_categories` (`category_id`);

--
-- Constraints for table `placed_orders`
--
ALTER TABLE `placed_orders`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
