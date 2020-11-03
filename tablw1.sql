-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33
-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
--
-- --------------------------------------------------------
--
-- Table structure for table `cart`
--
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `product`
CREATE TABLE `fruits` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `fruits` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    1,
    'Pear',
    160.00,
    './assets/fruits/Pear.jpg',
    '₹160.00 (1kg)'
  ),
  (
    2,
    'Apple',
    180.00,
    './assets/fruits/apple.jpg',
    '₹180.00 (1kg)'
  ),
  (
    3,
    'Banana',
    50.00,
    './assets/fruits/banana.jpg',
    '₹50.00 (1kg)'
  ),
  (
    4,
    'Orange',
    60.00,
    './assets/fruits/oranges.jpg',
    '₹60.00 (1kg)'
  ),
  (
    5,
    'Pineapple',
    150.00,
    './assets/fruits/pineapple.jpg',
    '₹150.00 (1kg)'
  );
CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `product` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    1,
    'Pear',
    160.00,
    './assets/fruits/Pear.jpg',
    '₹160.00 (1kg)'
  ),
  (
    2,
    'Apple',
    180.00,
    './assets/fruits/apple.jpg',
    '₹180.00 (1kg)'
  ),
  (
    3,
    'Banana',
    50.00,
    './assets/fruits/banana.jpg',
    '₹50.00 (1kg)'
  ),
  (
    4,
    'Orange',
    60.00,
    './assets/fruits/oranges.jpg',
    '₹60.00 (1kg)'
  ),
  (
    5,
    'Pineapple',
    150.00,
    './assets/fruits/pineapple.jpg',
    '₹150.00 (1kg)'
  ),
  (
    6,
    'Cabbage',
    110.00,
    './assets/vegetables/cabbage.jpg',
    '₹110.00 (1kg)'
  ),
  (
    7,
    'Cauliflower',
    120.00,
    './assets/vegetables/cauliflower.jpg',
    '₹120.00 (1kg)'
  ),
  (
    8,
    'Onion',
    100.00,
    './assets/vegetables/onion.jpg',
    '₹100.00 (1kg)'
  ),
  (
    9,
    'Potatoes',
    50.00,
    './assets/vegetables/potatoes.jpg',
    '₹50.00 (1kg)'
  ),
  (
    10,
    'Tomatoes',
    80.00,
    './assets/vegetables/tomatoes.jpg',
    '₹80.00 (1kg)'
  ),
  (
    11,
    'Boneless-Chicken',
    450.00,
    './assets/meat/chicken-boneless.jpg',
    '₹450.00 (1kg)'
  ),
  (
    12,
    'CurryCut-Chicken',
    300.00,
    './assets/meat/currycut-chicken.jpg',
    '₹300.00 (1kg)'
  ),
  (
    13,
    'Whole-Chicken',
    850.00,
    './assets/meat/whole-chicken.jpg',
    '₹850.00 (1kg)'
  ),
  (
    14,
    'Boneless-Mutton',
    1000.00,
    './assets/meat/boneless-mutton.jpg',
    '₹1000.00 (1kg)'
  ),
  (
    15,
    'Mutton-Chops',
    700.00,
    './assets/meat/mutton-chops.jpg',
    '₹700.00 (1kg)'
  ),
  (
    16,
    'Bhetki',
    1200.00,
    './assets/fish/bhetki.png',
    '₹1200.00 (1kg)'
  ),
  (
    17,
    'Crab',
    300.00,
    './assets/fish/crab.jpg',
    '₹300.00 (1kg)'
  ),
  (
    18,
    'Catla',
    400.00,
    './assets/fish/katla.jpg',
    '₹400.00 (1kg)'
  ),
  (
    19,
    'Lobster',
    1200.00,
    './assets/fish/lobster.jpg',
    '₹1200.00 (1kg)'
  ),
  (
    20,
    'Surmai',
    700.00,
    './assets/fish/Surmai.jpg',
    '₹700.00 (1kg)'
  ),
  (
    21,
    'Coco-Cola',
    70.00,
    './assets/beverages/coke.jpg',
    '₹50.00 (500ml)'
  ),
  (
    22,
    'Sprite',
    45.00,
    './assets/beverages/sprite.jpg',
    '₹45.00 (250ml)'
  ),
  (
    23,
    'Maaza',
    100.00,
    './assets/beverages/maaza.jpg',
    '₹100.00 (2.5L)'
  ),
  (
    24,
    'Pepsi',
    70.00,
    './assets/beverages/pepsi.jpg',
    '₹50.00 (500ml)'
  ),
  (
    25,
    'Red Bull',
    90.00,
    './assets/beverages/red bull.jpg',
    '₹90.00 (500ml)'
  ),
  (
    26,
    'Milk',
    50.00,
    './assets/Dairy/milk.jpg',
    '₹50.00 (1kg)'
  ),
  (
    27,
    'Curd',
    25.00,
    './assets/Dairy/curd.jpg',
    '₹25.00 (500g)'
  ),
  (
    28,
    'Cheese',
    120.00,
    './assets/Dairy/cheese.jpg',
    '₹120.00 (500g)'
  ),
  (
    29,
    'Paneer',
    200.00,
    './assets/Dairy/paneer.jpg',
    '₹200.00 (500g)'
  ),
  (
    30,
    'Ghee',
    250.00,
    './assets/Dairy/ghee.jpg',
    '₹250.00 (500g)'
  );
-- Vegetables
CREATE TABLE `vegetables` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `vegetables` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    6,
    'Cabbage',
    110.00,
    './assets/vegetables/cabbage.jpg',
    '₹110.00 (1kg)'
  ),
  (
    7,
    'Cauliflower',
    120.00,
    './assets/vegetables/cauliflower.jpg',
    '₹120.00 (1kg)'
  ),
  (
    8,
    'Onion',
    100.00,
    './assets/vegetables/onion.jpg',
    '₹100.00 (1kg)'
  ),
  (
    9,
    'Potatoes',
    50.00,
    './assets/vegetables/potatoes.jpg',
    '₹50.00 (1kg)'
  ),
  (
    10,
    'Tomatoes',
    80.00,
    './assets/vegetables/tomatoes.jpg',
    '₹80.00 (1kg)'
  );
-- Meat/Chicken
CREATE TABLE `Meat` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `Meat` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    11,
    'Boneless-Chicken',
    450.00,
    './assets/meat/chicken-boneless.jpg',
    '₹450.00 (1kg)'
  ),
  (
    12,
    'CurryCut-Chicken',
    300.00,
    './assets/meat/currycut-chicken.jpg',
    '₹300.00 (1kg)'
  ),
  (
    13,
    'Whole-Chicken',
    850.00,
    './assets/meat/whole-chicken.jpg',
    '₹850.00 (1kg)'
  ),
  (
    14,
    'Boneless-Mutton',
    1000.00,
    './assets/meat/boneless-mutton.jpg',
    '₹1000.00 (1kg)'
  ),
  (
    15,
    'Mutton-Chops',
    700.00,
    './assets/meat/mutton-chops.jpg',
    '₹700.00 (1kg)'
  );
-- Fish
CREATE TABLE `fish` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `fish` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    16,
    'Bhetki',
    1200.00,
    './assets/fish/bhetki.png',
    '₹1200.00 (1kg)'
  ),
  (
    17,
    'Crab',
    300.00,
    './assets/fish/crab.jpg',
    '₹300.00 (1kg)'
  ),
  (
    18,
    'Catla',
    400.00,
    './assets/fish/katla.jpg',
    '₹400.00 (1kg)'
  ),
  (
    19,
    'Lobster',
    1200.00,
    './assets/fish/lobster.jpg',
    '₹1200.00 (1kg)'
  ),
  (
    20,
    'Surmai',
    700.00,
    './assets/fish/Surmai.jpg',
    '₹700.00 (1kg)'
  );
-- Beverage
CREATE TABLE `beverage` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `beverage` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    21,
    'Coco-Cola',
    70.00,
    './assets/beverages/coke.jpg',
    '₹50.00 (500ml)'
  ),
  (
    22,
    'Sprite',
    45.00,
    './assets/beverages/sprite.jpg',
    '₹45.00 (250ml)'
  ),
  (
    23,
    'Maaza',
    100.00,
    './assets/beverages/maaza.jpg',
    '₹100.00 (2.5L)'
  ),
  (
    24,
    'Pepsi',
    70.00,
    './assets/beverages/pepsi.jpg',
    '₹50.00 (500ml)'
  ),
  (
    25,
    'Red Bull',
    90.00,
    './assets/beverages/red bull.jpg',
    '₹90.00 (500ml)'
  );
-- Dairy
CREATE TABLE `dairy` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10, 2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_qty` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `dairy` (
    `item_id`,
    `item_name`,
    `item_price`,
    `item_image`,
    `item_qty`
  )
VALUES (
    26,
    'Milk',
    50.00,
    './assets/Dairy/milk.jpg',
    '₹50.00 (1kg)'
  ),
  (
    27,
    'Curd',
    25.00,
    './assets/Dairy/curd.jpg',
    '₹25.00 (500g)'
  ),
  (
    28,
    'Cheese',
    120.00,
    './assets/Dairy/cheese.jpg',
    '₹120.00 (500g)'
  ),
  (
    29,
    'Paneer',
    200.00,
    './assets/Dairy/paneer.jpg',
    '₹200.00 (500g)'
  ),
  (
    30,
    'Ghee',
    250.00,
    './assets/Dairy/ghee.jpg',
    '₹250.00 (500g)'
  );
-- --------------------------------------------------------
--
-- Table structure for table `user`
--
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `user`
--
-- INSERT INTO `user` (`name`, `phone`, `password`)
VALUES (1, 'Anirbaan Ghatak', '12369420', 'abcd1');
(2, 'Hiral Modi', '1234567890', 'abc2');
-- --------------------------------------------------------
--
-- Table structure for table `wishlist`
--
CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Indexes for dumped tables
--
--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
ADD PRIMARY KEY (`cart_id`);
--
-- Indexes for table `product`
--
ALTER TABLE `product`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `fruits`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `vegetables`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `beverage`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `dairy`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `fish`
ADD PRIMARY KEY (`item_id`);
ALTER TABLE `meat`
ADD PRIMARY KEY (`item_id`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `fruits`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `vegetables`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `beverage`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `dairy`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `fish`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
ALTER TABLE `meat`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;