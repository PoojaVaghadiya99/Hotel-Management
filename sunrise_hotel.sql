-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2020 at 10:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunrise_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

DROP TABLE IF EXISTS `food_category`;
CREATE TABLE IF NOT EXISTS `food_category` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  UNIQUE KEY `fid` (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`fid`, `fname`, `price`, `id`) VALUES
(1, 'French Fries', 100, 1),
(2, 'Chilli Cheese Toast', 100, 1),
(3, 'Chilli Cheese Gralic Toast', 110, 1),
(4, 'Garlic Bread', 90, 1),
(5, 'Garlic Bread With Cheese', 120, 1),
(6, 'Tandoori Paneer Tikka', 220, 2),
(7, 'Malai Paneer Tikka', 220, 2),
(8, 'Soya Tanddori Tikka', 175, 2),
(9, 'Tandoori Aloo', 180, 2),
(10, 'Punjabi Soya Chap', 180, 2),
(11, 'Hare-Bhare Kabab', 160, 2),
(12, 'Dahi Ke Kabab', 180, 2),
(13, 'Platter', 320, 2),
(14, 'Veg. Hot and Sour Soup', 120, 3),
(15, 'Veg. Manuchurian Soup', 120, 3),
(16, 'Veg. Manchow Soup', 100, 3),
(17, 'Tomato Soup', 80, 3),
(18, 'Plain Sandwich', 175, 4),
(19, 'Grilled Sandwich', 175, 4),
(20, 'Club Sandwich', 175, 4),
(21, 'Plain Cheese Pizza', 190, 5),
(22, 'Capsicum , Onion Pizza', 210, 5),
(23, 'Tomato , Onion Pizza', 210, 5),
(24, 'Capsicum , Onion , Mashroom Pizza', 250, 5),
(25, 'Jain Special Pizza', 250, 5),
(26, 'Tandoori Pizza', 250, 5),
(27, 'Super Veggie Pizza (Double Cheese)', 265, 5),
(28, 'Veg. Mix', 120, 6),
(29, 'Veg. Kadai', 120, 6),
(30, 'Veg. Handi', 120, 6),
(31, 'Veg. Makhanvala', 140, 6),
(32, 'Veg. Toofani', 160, 6),
(33, 'Veg. Kofta', 160, 6),
(34, 'Paneer Tikka Masala', 180, 6),
(35, 'Paneer Tawa Masala', 180, 6),
(36, 'Paneer Tikka Masala', 180, 6),
(37, 'Paneer Tawa Masala', 180, 6),
(38, 'Paneer Shahi', 180, 6),
(39, 'Paneer Mirch Masala', 200, 6),
(40, 'Paneer Makhanavala', 200, 6),
(41, 'Cheese Veg. Masala', 250, 6),
(42, 'Cheese Kofta', 250, 6),
(43, 'Cheese kaju Masala', 270, 6),
(44, 'Kaju Butter Masala', 280, 6),
(45, 'Kaju Veg. Masala', 250, 6),
(46, 'Malay Kofta', 220, 6),
(47, 'Dum Aloo', 150, 6),
(48, 'Aloo Gobi Masala', 150, 6),
(49, 'Aloo Mutter', 110, 6),
(50, 'Aloo Palakh', 110, 6),
(51, 'Chana Masala', 110, 6),
(52, 'Sukhi Bhaji', 110, 6),
(53, 'Finger Chips', 110, 6),
(54, 'Butter Roti', 50, 7),
(55, 'Plain Roti', 30, 7),
(56, 'Stuff Paratha', 60, 7),
(57, 'Butter Paratha', 80, 7),
(58, 'Plain Paratha', 50, 7),
(59, 'Chess Naan', 90, 7),
(60, 'Garlic Naan', 80, 7),
(61, 'Stuff Naan', 100, 7),
(62, 'Butter Naan', 80, 7),
(63, 'Plain Naan', 60, 7),
(64, 'Chees Kulcha', 100, 7),
(65, 'Paneer Kulcha', 110, 7),
(66, 'Stuff Kulcha', 120, 7),
(67, 'Butter Kulcha', 80, 7),
(68, 'Plain Kulcha', 60, 7),
(69, 'Plain Rice', 70, 8),
(70, 'Jeera Rice', 100, 8),
(71, 'Pis Pulav', 100, 8),
(72, 'Veg. Pulav', 120, 8),
(73, 'Veg. Biriyani', 130, 8),
(74, 'Veg. Hydrabadi Biriyani', 140, 8),
(75, 'Triple Fry Rice (Grevy)', 180, 8),
(76, 'Dal Fry', 100, 8),
(77, 'Dal Fry Butter', 110, 8),
(78, 'Dal Tadka', 120, 8),
(79, 'Dal Makhani', 140, 8),
(80, 'Veg. Manchurian Dry', 130, 9),
(81, 'Veg. Manchurian Greavy', 120, 9),
(82, 'Paneer Chillly Dry', 160, 9),
(83, 'Paneer Chillly Greavy', 140, 9),
(84, 'Veg. Hakka Noodles', 90, 9),
(85, 'Sizwan Noodles', 110, 9),
(86, 'Chilly Garlic Noodles', 120, 9),
(87, 'Veg. Manchurian Noodless', 130, 9),
(88, 'Veg. Fry Rice', 100, 9),
(89, 'Sizwan Fry Rice', 120, 9),
(90, 'Veg. Manchurian Fry Rice', 130, 9),
(91, 'Chinese Bhel', 140, 9),
(92, 'Rice Idli', 80, 10),
(93, 'Sambhar Vada', 80, 10),
(94, 'Dahi Vada', 80, 10),
(95, 'Plain Dosa', 100, 10),
(96, 'Masala Dosa', 110, 10),
(97, 'Mysore Dosa', 110, 10),
(98, 'Rava Dosa', 120, 10),
(99, 'Onion Uttapam', 150, 10),
(100, 'Tomato Uttapam', 150, 10),
(101, 'Mix Veg. Uttapam', 150, 10),
(102, 'Oil Pav-Bhaji', 100, 11),
(103, 'Butter Pav-Bhaji', 120, 11),
(104, 'Extra Pav', 15, 11),
(105, 'Masala Pav With Butter', 80, 11),
(106, 'Full Gujrati Thali', 250, 12),
(107, 'Sunrise Special Full Gujrati Thali', 300, 12),
(108, 'Punjabi Dish', 280, 12),
(109, 'Onion Salad', 50, 13),
(110, 'Tomato Salad', 80, 13),
(111, 'Green Salad', 80, 13),
(112, 'Russian Salad / Maccroni', 120, 13),
(113, 'Roasted Papad ', 20, 13),
(114, 'Fry Papad', 40, 13),
(115, 'Minral Water (1 Ltr)', 25, 14),
(116, 'Soft Drinks Tin (200 Ml)', 30, 14),
(117, 'Soft Drink (750 Ml)', 50, 14),
(118, 'Butter Milk Pouch (500 Ml)', 15, 14),
(119, 'Milk Pouch (500 Ml)', 25, 14),
(120, 'Curd / Dahi (200 Gm)', 30, 14),
(121, 'Salt Lassi', 40, 14),
(122, 'Sweet Lassi', 50, 14),
(123, 'Vanilla', 30, 15),
(124, 'Strawberry', 30, 15),
(125, 'Green Pista', 30, 15),
(126, 'Fresh Litchi', 45, 15),
(127, 'Santra Mantra', 45, 15),
(128, 'Black Current', 45, 15),
(129, 'Butter Scotch', 45, 15),
(130, 'Kaju Draksha', 45, 15),
(131, 'Kesar Pista Royal', 45, 15),
(132, 'Rosted Almond', 45, 15),
(133, 'RajBhog', 45, 15),
(134, 'American Nuts', 45, 15),
(135, 'Shahi Anjir', 45, 15),
(136, 'Tuti Fruty', 14, 15),
(137, 'Choclate', 45, 15),
(138, 'Choco Chips', 45, 15),
(139, 'Choco Caremel', 45, 15),
(140, 'Browny Blast', 45, 15),
(141, 'Gulab Jamun With Vanilla Ice-Creame', 100, 16),
(142, 'Dark Chocolate Cream', 100, 16),
(143, 'Oreo Cream', 100, 16),
(144, 'Hot Nut Fudge Sundae', 130, 16);

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

DROP TABLE IF EXISTS `food_order`;
CREATE TABLE IF NOT EXISTS `food_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mo_no` double NOT NULL,
  `food_detail` varchar(1000) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `price` varchar(500) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_zone`
--

DROP TABLE IF EXISTS `food_zone`;
CREATE TABLE IF NOT EXISTS `food_zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_category` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_zone`
--

INSERT INTO `food_zone` (`id`, `food_category`) VALUES
(1, 'All Time Favorite	'),
(2, 'Starters	'),
(3, 'Soups		'),
(4, 'Sandwich		'),
(5, 'Pizzas	'),
(6, 'Sabji	'),
(7, 'Tandoori	'),
(8, 'Rice & Dal	'),
(9, 'Chinese	'),
(10, 'South Indian	'),
(11, 'Pav-Bhaji	'),
(12, 'Thali	'),
(13, 'Salads & Papad	'),
(14, 'Beverages	'),
(15, 'Ice-Creame'),
(16, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE IF NOT EXISTS `gallary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `img`) VALUES
(1, '../img/Food/1.jpg'),
(2, '../img/Food/2.jpg'),
(3, '../img/Food/3.jpg'),
(4, '../img/Food/4.jpg'),
(5, '../img/Food/5.jpg'),
(6, '../img/Food/6.jpg'),
(7, '../img/Food/7.jpg'),
(8, '../img/Food/8.jpg'),
(9, '../img/Food/9.jpg'),
(10, '../img/Food/10.jpg'),
(11, '../img/Food/11.jpg'),
(12, '../img/Food/12.jpg'),
(13, '../img/Food/13.jpg'),
(14, '../img/Food/14.jpg'),
(15, '../img/Food/15.jpg'),
(16, '../img/Food/16.jpg'),
(17, '../img/Food/17.jpg'),
(18, '../img/Food/18.jpg'),
(19, '../img/Food/19.jpg'),
(20, '../img/Food/20.jpg'),
(21, '../img/Food/21.jpg'),
(22, '../img/Food/22.jpg'),
(23, '../img/Food/23.jpg'),
(24, '../img/Food/24.jpg'),
(25, '../img/Food/25.jpg'),
(26, '../img/Food/26.jpg'),
(27, '../img/Food/27.jpg'),
(28, '../img/Food/28.jpg'),
(29, '../img/Food/29.jpg'),
(30, '../img/Food/30.jpg'),
(31, '../img/Food/31.jpg'),
(32, '../img/Food/32.jpg'),
(33, '../img/Food/33.jpg'),
(34, '../img/Food/34.jpg'),
(35, '../img/Food/35.jpg'),
(36, '../img/Food/36.jpg'),
(37, '../img/Food/37.jpg'),
(38, '../img/Food/38.jpg'),
(39, '../img/Food/39.jpg'),
(40, '../img/Food/40.jpg'),
(41, '../img/Food/41.jpg'),
(42, '../img/Food/42.jpg'),
(43, '../img/Food/43.jpg'),
(44, '../img/Food/44.jpg'),
(45, '../img/Food/45.jpg'),
(46, '../img/Food/46.jpg'),
(47, '../img/Food/47.jpg'),
(48, '../img/Food/48.jpg'),
(49, '../img/Food/49.jpg'),
(50, '../img/Food/50.jpg'),
(51, '../img/Food/51.jpg'),
(52, '../img/Food/52.jpg'),
(53, '../img/Food/53.jpg'),
(54, '../img/Food/54.jpg'),
(55, '../img/Food/55.jpg'),
(56, '../img/Food/56.jpg'),
(57, '../img/Food/57.jpg'),
(58, '../img/Food/58.jpg'),
(59, '../img/Food/59.jpg'),
(60, '../img/Food/60.jpg'),
(61, '../img/Food/61.jpg'),
(62, '../img/Food/62.jpg'),
(63, '../img/Food/63.jpg'),
(64, '../img/Food/64.jpg'),
(65, '../img/Food/65.jpg'),
(66, '../img/Food/66.jpg'),
(67, '../img/Food/67.jpg'),
(68, '../img/Food/68.jpg'),
(69, '../img/Food/69.jpg'),
(70, '../img/Food/70.jpg'),
(71, '../img/Food/71.jpg'),
(72, '../img/Food/72.jpg'),
(73, '../img/Food/73.jpg'),
(74, '../img/Food/74.jpg'),
(75, '../img/Food/75.jpg'),
(76, '../img/Food/76.jpg'),
(77, '../img/Food/77.jpg'),
(78, '../img/Food/78.jpg'),
(79, '../img/Food/79.jpg'),
(80, '../img/Food/80.jpg'),
(81, '../img/Food/81.jpg'),
(82, '../img/Food/82.jpg'),
(83, '../img/Food/83.jpg'),
(84, '../img/Food/84.jpg'),
(85, '../img/Food/85.jpg'),
(86, '../img/Food/86.jpg'),
(87, '../img/Food/87.jpg'),
(88, '../img/Food/88.jpg'),
(89, '../img/Food/89.jpg'),
(90, '../img/Food/90.jpg'),
(91, '../img/Food/91.jpg'),
(92, '../img/Food/92.jpg'),
(93, '../img/Food/93.jpg'),
(94, '../img/Food/94.jpg'),
(95, '../img/Food/95.jpg'),
(96, '../img/Food/96.jpg'),
(97, '../img/Food/97.jpg'),
(98, '../img/Food/98.jpg'),
(99, '../img/Food/99.jpg'),
(100, '../img/Food/100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_category` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `info` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`id`, `hall_category`, `price`, `info`, `img`) VALUES
(1, 'Banquet Hall', 12000, 'Banquet Hall is a Room or Building for the Purpose of Hosting a Party, Dinner , Reception  or Other Social Event. Fully Air-conditioner Hall.', '../img/Hall/Banquet Hall.jpg'),
(2, 'Wedding Hall', 15000, 'Ideal Location To Host Wedding And Reception.  Grand Decoration And Luxurious Service. Delicious Food is Served as Your Choice. ', '../img/Hall/Wedding Hall.jpg'),
(3, 'Conference Hall', 8000, 'A Conference Hall is a Room Provided For Singular Events Such as Business  Conferences And Meetings. Providing Luxurious Service.', '../img/Hall/Meeting Hall.jpg'),
(4, 'Event Hall', 10000, 'Event Hall is a Room or Building for the Purpose of Hosting a Party, School Event, College Function  or Other Social Event. Fully Air-conditioner Hall.', '../img/Hall/Event Hall.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hall_book_admin`
--

DROP TABLE IF EXISTS `hall_book_admin`;
CREATE TABLE IF NOT EXISTS `hall_book_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mo_no` double NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `nperson` int(11) NOT NULL,
  `hall_category` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_category` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `info` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_category`, `price`, `info`, `img`) VALUES
(1, 'Superior (Non Ac)', 3000, ' Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel.Free Wi-Fi,  TV,  Safe Box ,  Telephone.', '../img/Room/Superior Non AC.jpg'),
(2, 'Superior (Ac)', 4000, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel. Free Wi-Fi ,Aircondition , TV ,	Safe Box , Telephone.', '../img/Room/Superior AC.jpg'),
(3, 'Business Class', 4500, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel . Free Wi-Fi , Aircondition ,TV ,Coffee & Tea Facilities , Safe Box , Desk and Chair, Telephone.', '../img/Room/Business Class.jpg'),
(4, 'Delux Suit', 5000, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel.  Free Wi-Fi , Aircondition ,	TV ,	Blackout Curtains, Coffee & Tea Facilities , Safe Box , Desk and Chair , Telephone.', '../img/Room/Delux Suit.jpg'),
(5, 'Super Delux Suit', 5500, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel. Free Wi-Fi ,	Aircondition ,	TV ,Coffee & Tea Facilities ,	Safe Box ,  Desk and Chair ,  Bathtub Or Shower , Telephone', '../img/Room/Super Delux Suit.jpg'),
(6, 'Super Executive Suit', 6000, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel. Free Wi-Fi ,  Aircondition , TV ,	Blackout Curtains ,	Coffee & Tea Facilities ,  Hairdryer ,  Safe Box ,  Desk and Chair ,  Bathtub Or Shower , Telephone', '../img/Room/Super Executive Suit.jpeg'),
(7, 'Executive Suit', 6500, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel.  Free Wi-Fi ,  Aircondition , TV ,  Blackout Curtains ,	Coffee & Tea Facilities ,	Hairdryer , Safe Box , Desk and Chair ,  Bathtub Or Shower , Telephone', '../img/Room/Executive Suit.jpg'),
(8, 'Family Suit (5 Bed)', 8000, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel.  Free Wi-Fi ,  Aircondition ,  TV , Blackout Curtains , 	Coffee & Tea Facilities ,  Hairdryer ,  Safe Box , Desk and Chair ,  Bathtub Or Shower ,  Telephone ,  Radio ,  Iron With Ironing Board', '../img/Room/Family Suit 5 Bed.jpg'),
(9, 'Junior Suit (3 Bed)', 7000, 'Hear Is an Overview of Minimum Facilities Found in The Rooms Followed by a List Of Our Room Types at Sunrise Hotel. Free Wi-Fi ,  Aircondition , TV ,	Blackout Curtains , Coffee & Tea Facilities , Hairdryer , Safe Box ,  Desk and Chair ,  Bathtub Or Shower , Telephone , Radio', '../img/Room/Junior Suit 3 Bed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_book_admin`
--

DROP TABLE IF EXISTS `room_book_admin`;
CREATE TABLE IF NOT EXISTS `room_book_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mo_no` double NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `nperson` int(11) NOT NULL,
  `nroom` int(11) NOT NULL,
  `room_category` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
