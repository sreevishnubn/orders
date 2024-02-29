-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2023 at 05:42 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `image`) VALUES
(1, 'admin', '7756908815', 'admin@gmail.com', 'password', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int NOT NULL,
  `itemid` int NOT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `itemid`, `userid`) VALUES
(21, 5, 2),
(25, 15, 0),
(26, 11, 0),
(27, 8, 0),
(28, 6, 0),
(29, 9, 0),
(30, 3, 3),
(31, 4, 4),
(32, 27, 5),
(33, 21, 6),
(34, 6, 7),
(35, 9, 8),
(36, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_name` varchar(30) NOT NULL,
  `category_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `category_id`, `date`, `time`) VALUES
('non-veg', 6, '2018-02-08', '20:13:00'),
('veg', 4, '2019-01-14', '20:07:00'),
('non-veg', 5, '2023-02-07', '19:57:00'),
('veg', 222, '2014-02-06', '19:47:00'),
('veg', 9, '2019-02-06', '20:23:00'),
('non-veg', 11, '2020-02-19', '20:32:00'),
('veg', 17, '2020-02-20', '20:37:00'),
('veg', 14, '2018-02-12', '20:49:00'),
('non-veg', 7, '2019-02-12', '20:55:00'),
('non-veg', 10, '2022-06-15', '21:07:00'),
('non-veg', 2345678, '2023-02-22', '20:33:00'),
('non-veg', 102, '2023-02-06', '15:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `customer_id` int NOT NULL,
  `review` varchar(30) NOT NULL,
  PRIMARY KEY (`phone_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `address`, `Email`, `phone_no`, `DOB`, `password`, `customer_id`, `review`) VALUES
('siddharth', 'manglore', 'sidd@gmail.com', '9356427788', '2018-02-12', ' sidd23456', 234567, 'average service'),
('ramu', 'bhadrvati', 'ramu@gmail.com', '9863786548', '2019-02-03', 'ramu56565', 565656, 'not good'),
('sunil', 'honnali', 'sunil@gmail.com', '8744783353', '2018-02-12', ' sunil23232', 232323, 'good at interior'),
('charana', 'shivmogga', 'char@gmail.com', '8976658089', '2020-02-20', ' char56565', 565656, 'loving there service'),
('shalom', 'shikaripura', 'shalom@gmail.com', '8497442596', '2020-02-19', ' shalom89898', 898989, 'love to have it'),
('skanda', 'davangere', 'skan@gmail.com', '9376698452', '2019-02-06', ' skan010101', 10101, 'good time with family'),
('pavan', 'bhadravati', 'pavan@gmail.com', '9844532204', '2018-01-08', ' pav112233', 223344, 'nice time'),
('ram', 'bhadrvati', 'ram@gmail.com', '9768874436', '2019-02-14', ' ram808080', 880088, 'good to taste it'),
('4563', 'chikmanglore', 'raj@gmail.com', '8766534229', '2023-02-07', ' raj0123', 4563, 'good to have food'),
('sanjay m', 'shimoga', 'sanjay@gmail.com', '8088006789', '2014-09-06', ' san1234', 1234, 'please get it fast'),
('ramanuja', 'chikkabalapura', 'ramanuja@gmail.com', '8765890345', '2022-06-15', ' ramanuja1234', 87654, 'it was ok'),
('chethana', 'shimoga', 'chethu@gmail.com', '8897065436', '2002-12-21', '1234', 6543098, 'it was a good time'),
('chethana', 'durgigudi ', 'chethana@gmail.com', '9480938603', '2002-12-21', ' 1234', 1234, 'please get it fast'),
('vishnu', 'shimoga', 'vishnu@gmail.com', '8088890679', '2023-09-12', ' vishnu123', 1901, 'it was good time');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `name` varchar(30) NOT NULL,
  `qty` int NOT NULL,
  `specification` varchar(30) NOT NULL,
  `order_no` int NOT NULL,
  `food_id` int NOT NULL,
  PRIMARY KEY (`order_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `qty`, `specification`, `order_no`, `food_id`) VALUES
('curd', 8, 'q aksjasjna', 129898, 123),
('curd', 8, 'what a place to go it was too ', 13, 2),
('rotti', 5, 'ok with food', 2, 3),
('ice', 3, 'great with services  ', 4, 4),
('ro', 8, 'ok', 1200999, 5),
('rice', 13, 'food was good ', 11, 6),
('cury', 7, 'good place to go with family', 19, 7),
('egg', 4, 'enjoyed the day', 8, 8),
('egg', 8, 'good', 7, 123),
('rotti', 2, 'bad', 17, 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `itemid` int NOT NULL,
  `Title` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `item_rating` int NOT NULL,
  `image` varchar(90) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `Title`, `category`, `item_rating`, `image`, `discription`, `price`) VALUES
(2, 'Fresho Green Peas, 500 gm ', 'FruitVegetables', 5, '10000283_11-fresho-green-peas.jpg', '500 gm - Rs 10.00\r\n250 gm - Rs 6.00\r\n1 kg - Rs 21.00', '10'),
(3, 'Fresho Banana - Robusta, 1 kg ', 'FruitVegetables', 3, '10000025_24-fresho-banana-robusta.jpg', '1 kg - Rs 23.00\r\n500 gm - Rs 12.00', '23'),
(4, 'Fresho Ladies Finger, 1 kg ', 'FruitVegetables', 2, '10000142_16-fresho-ladies-finger.jpg', '1 kg - Rs 59.00\r\n250 gm - Rs 15.00\r\n500 gm - Rs 30.00', '59'),
(5, 'Fresho Tomato - Hybrid, 1 kg ', 'FruitVegetables', 5, '10000200_17-fresho-tomato-hybrid.jpg', '1 kg - Rs 18.00\r\n500 gm - Rs 10.00', '18'),
(6, 'Fresho Pomegranate, 1 kg ', 'FruitVegetables', 5, '20000708_14-fresho-pomegranate.jpg', '1 kg - Rs 69.00\r\n500 gm - Rs 40.00', '69'),
(7, 'Saffola Gold - Pro Healthy Lifestyle Edi', 'FoodgrainsoilMasala', 5, '147493_11-saffola-gold-pro-healthy-lifestyle-edible-oil.jpg', '5 lt Jar - Rs 649.00\r\n2x1 L ( Multipack ) - Rs 278.00\r\n2x2 L ( Multipack ) - Rs 611.00\r\n3x1 L ( Multipack ) - Rs 417.00\r\n1 lt Pouch - Rs 139.00\r\n2 lt Jar - Rs 274.95', '649'),
(8, 'bb Royal Whole Wheat Atta, 5 kg ', 'FoodgrainsoilMasala', 5, '40099240_8-bb-royal-whole-wheat-atta.jpg', '5 kg - Rs 149.00\r\n1 kg - Rs 44.00\r\n10 kg - Rs 295.00', '149'),
(9, 'Daawat Basmati Rice - Rozana Super 90, 5', 'FoodgrainsoilMasala', 5, '40075197_2-daawat-basmati-rice-rozana-super-90.jpg', '5 kg - Rs 349.00\r\n1 kg - Rs 69.00', '349'),
(10, 'bb Royal Besan - Flour, 500 gm ', 'FoodgrainsoilMasala', 5, '10000475_7-bb-royal-besan-flour.jpg', '500 gm - Rs 42.00\r\n1 kg Pouch - Rs 89.00', '42'),
(11, 'Madhur Sugar - Refined, 5 kg Pouch', 'FoodgrainsoilMasala', 2, '214431_6-madhur-sugar-refined.jpg', '5 kg Pouch - Rs 221.50\r\n1 kg Pouch - Rs 46.50', '221'),
(12, 'Parle Rusk - Real Elaichi, 200 gm ', 'BakerycakesDairy', 4, '30008655_8-parle-rusk-real-elaichi.jpg', 'good test', '28'),
(13, 'Amul Lassi - Rose Flavor, 200 ml Carton', 'BakerycakesDairy', 3, '40013013_1-amul-lassi-rose-flavor.jpg', '200 ml Carton - Rs 14.10\r\n1 lt Carton - Rs 61.10 (Out of Stock)', '14'),
(14, 'Bauli Spyroll, 37 gm ', 'BakerycakesDairy', 5, '40158399_1-bauli-spyroll.jpg', '', '20'),
(15, 'Metro Bread - White Sliced, Metro Kattu,', 'BakerycakesDairy', 5, '40076722_2-metro-bread-white-sliced-metro-kattu.jpg', '', '18'),
(16, 'Kalory Bun, 200 gm ', 'BakerycakesDairy', 5, '40096153_1-kalory-bun.jpg', '', '20'),
(17, 'Nescafe Latte, 25 gm ', 'Beverage', 5, '40090542_4-nescafe-latte.jpg', 'Standard Delivery: Tomorrow Morning', '23.50'),
(18, 'Bisleri Mineral Water, 24x500 ml Multi P', 'Beverage', 5, '1200137_1-bisleri-mineral-water.jpg', '24x500 ml Multi Pack - Rs 218.88\r\n1 L Bottle - Rs 18.80\r\n2 L Bottle - Rs 28.20\r\n500 ml Bottle - Rs 9.40', '218'),
(19, 'Bournvita Pro-Health Chocolate Drink, 2x', 'Beverage', 5, '1203451_1-bournvita-pro-health-chocolate-drink.jpg', '2x1 kg ( Multipack ) - Rs 689.32\r\n1 kg Jar - Rs 355.32\r\n500 gm Jar - Rs 202.10', '689'),
(21, 'Kinley Club Soda, 750 ml ', 'Beverage', 5, '265680_5-kinley-club-soda.jpg', '', '15'),
(22, 'Nescafe Coffee - Classic, 2x25 gm ( Mult', 'Beverage', 5, '1204509_1-nescafe-coffee-classic.jpg', '2x25 gm ( Multipack ) - Rs 127.66\r\n100 gm Glass Jar - Rs 245.00\r\n2x100 gm ( Multipack ) - Rs 498.68\r\n25 gm Glass Jar - Rs 65.00', '127'),
(23, 'Parle Hide & Seek Chocolate, 6x33 gm Mul', 'SnacksBrandedFoods', 5, '1200153_3-parle-hide-seek-chocolate.jpg', '6x33 gm Multi Pack - Rs 53.58\r\n2x120 gm Multi Pack - Rs 55.28\r\n33 gm Pouch - Rs 9.40\r\n120 gm Pouch - Rs 26.00', '53'),
(24, 'Parle Biscuits - Monaco Salted Snack, 3x', 'SnacksBrandedFoods', 5, '1200146_3-parle-biscuits-monaco-salted-snack.jpg', '3x200 gm Multi Pack - Rs 80.37\r\n6x75.4 gm Multi Pack - Rs 53.58\r\n200 gm Pouch - Rs 27.00\r\n75.4 gm Pouch - Rs 9.40', '80'),
(25, 'Cadbury Oreo Creme Biscuit - Vanilla, 51', 'SnacksBrandedFoods', 5, '100423120_22-cadbury-oreo-creme-biscuit-vanilla.jpg', '51.5 gm - Rs 9.40\r\n3x120 gm ( Multipack ) - Rs 84.39\r\n120 gm - Rs 28.13', '9'),
(26, 'Quaker Oats, 400 gm Pouch', 'SnacksBrandedFoods', 5, '266122_6-quaker-oats.jpg', '400 gm Pouch - Rs 69.56\r\n1 kg Pouch - Rs 178.00', '69'),
(27, 'Kelloggs Chocos, 1.2 kg ', 'SnacksBrandedFoods', 5, '30008601_8-kelloggs-chocos.jpg', '1.2 kg - Rs 405.00\r\n375 gm - Rs 150.40\r\n700 gm - Rs 263.20\r\n250 gm - Rs 108.10\r\n125 gm - Rs 51.70', '405'),
(29, 'Rin Detergent Bar, 250 gm Pack of 4', 'Cleaninghousehold', 5, '281497_4-rin-detergent-bar.jpg', '', '60'),
(30, 'Vim Dishwash Bar, 300 gm ', 'Cleaninghousehold', 5, '306160_20-vim-dishwash-bar.jpg', '', '70'),
(31, 'Godrej Ezee Detergent Liquid, 500 gm ', 'Cleaninghousehold', 5, '40006995_4-godrej-ezee-detergent-liquid.jpg', '', '84'),
(32, 'Lizol Disinfectant Surface Cleaner ', 'Cleaninghousehold', 5, '1202437_4-lizol-disinfectant-surface-cleaner-citrus-2-l-floor-cleaner-floral-2-l.jpg', '', '582'),
(34, 'Himalaya Soap - Neem & Turmeric, 2x75 g ', 'Cleaninghousehold', 3, 'soap.jpg', 'Himalaya Protecting Neem and Turmeric soap improved with oils of Neem that protects skin due to its antibacterial activities; Lemon that energizes and keeps skin due to its antiseptic activities and Turmeric nourishes, recovers complexion and its antiseptic activities protect the skin.\r\n\r\n', '58'),
(35, 'soap', 'Cleaninghousehold', 3, '1202789_1-himalaya-bathing-soap-cucumber-coconut.jpg', 'abc', '50'),
(36, 'Fresho Banana - Robusta, 500 g', 'FruitVegetables', 5, '10000025_24-fresho-banana-robusta.jpg', '', '22'),
(37, 'soap', 'Cleaninghousehold', 4, '3.jpg', 'Its just a Soap', '22'),
(38, 'Soap', 'FruitVegetables', 3, '2.jpg', 'Its Just a Soap', '200');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `Quantity` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `date` date NOT NULL,
  `order_no` int NOT NULL,
  `time` time NOT NULL,
  `floor` int NOT NULL,
  `order_type` varchar(30) NOT NULL,
  `cphone` varchar(11) NOT NULL,
  PRIMARY KEY (`order_no`,`cphone`),
  KEY `cphone` (`cphone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `order_no`, `time`, `floor`, `order_type`, `cphone`) VALUES
('2014-02-06', 6, '24:19:13', 1, 'TO TABLE', '9768874436'),
('2023-02-07', 10, '08:21:06', 3, 'TO HOME', '8766534229'),
('2019-02-14', 2, '24:09:13', 3, 'TO TABLE', '9768874436'),
('2018-02-08', 8, '23:06:09', 0, 'TO HOME', '9844532204'),
('2019-02-06', 5, '16:06:19', 2, 'TO TABLE', '937669852'),
('2020-02-19', 20, '11:21:08', 2, 'TO HOME', '8497442596'),
('2020-02-18', 15, '14:06:14', 1, 'TO HOME', '8976658089'),
('2019-02-13', 4, '14:00:11', 2, 'TO', '9356427788'),
('2019-02-03', 10, '18:56:32', 2, 'TO', '8765890345'),
('0000-00-00', 1, '00:00:00', 3, 'TO TABLE', '80887890'),
('0000-00-00', 765, '00:00:00', 1, 'TO TABLE', '9480938603');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `netprice` int NOT NULL,
  `cash paid` int NOT NULL,
  `payment_id` int NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `pay` (`netprice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`netprice`, `cash paid`, `payment_id`, `payment_type`) VALUES
(3900, 3500, 564327, 'CARD'),
(1000, 950, 4532678, 'CASH'),
(3000, 2590, 123425, 'CARD'),
(10000, 9000, 56372, 'CASH'),
(5000, 4500, 87362, 'CARD'),
(4600, 4000, 67582, 'CARD'),
(600, 550, 67543, 'CARD'),
(3700, 3600, 56789, 'CASH'),
(8090, 8000, 26391, 'CASH'),
(98600, 98450, 98765, 'CARD');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `table_name` varchar(30) NOT NULL,
  `table_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_name`, `table_id`, `date`, `time`) VALUES
('a5', 112, '2019-02-06', '20:22:00'),
('b3', 8, '2023-02-07', '06:48:01'),
('a1', 5, '2023-02-06', '19:56:00'),
('a2', 3, '2019-02-14', '20:05:00'),
('a3', 2, '2014-02-06', '19:44:00'),
('a4', 4, '2020-02-19', '20:31:00'),
('b1', 6, '2020-02-20', '20:37:00'),
('b2', 7, '2018-02-12', '20:44:00'),
('a6', 13, '2019-01-12', '20:54:00'),
('b4', 9, '2022-06-15', '21:06:00'),
('a2345', 23456, '2023-02-22', '16:30:00'),
('a18', 18, '2023-02-06', '15:19:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
