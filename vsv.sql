-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 10:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `all`
--

CREATE TABLE `all` (
  `product_id` int(5) NOT NULL,
  `table_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all`
--

INSERT INTO `all` (`product_id`, `table_name`) VALUES
(1, 'biriyani_items'),
(2, 'biriyani_items'),
(3, 'biriyani_items'),
(4, 'biriyani_items'),
(5, 'biriyani_items'),
(6, 'biriyani_items'),
(7, 'biriyani_items'),
(8, 'biriyani_items'),
(9, 'biriyani_items'),
(10, 'chicken_items'),
(11, 'chicken_items'),
(12, 'chicken_items'),
(13, 'chicken_items'),
(14, 'chicken_items'),
(15, 'chicken_items'),
(16, 'chicken_items'),
(17, 'chicken_items'),
(18, 'chicken_items'),
(19, 'fish_items'),
(20, 'fish_items'),
(21, 'fish_items'),
(22, 'fish_items'),
(23, 'fish_items'),
(24, 'mutton_items'),
(25, 'mutton_items'),
(26, 'mutton_items'),
(27, 'mutton_items'),
(28, 'mutton_items'),
(29, 'mutton_items'),
(30, 'roti_items'),
(31, 'roti_items'),
(32, 'roti_items'),
(33, 'roti_items'),
(34, 'roti_items'),
(35, 'juice_items'),
(36, 'juice_items'),
(37, 'juice_items'),
(38, 'juice_items'),
(39, 'juice_items'),
(40, 'juice_items'),
(41, 'ice_creams'),
(42, 'ice_creams'),
(43, 'ice_creams'),
(44, 'ice_creams'),
(45, 'noodles'),
(46, 'noodles'),
(47, 'noodles'),
(48, 'noodles'),
(49, 'noodles'),
(50, 'noodles');

-- --------------------------------------------------------

--
-- Table structure for table `biriyani_items`
--

CREATE TABLE `biriyani_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biriyani_items`
--

INSERT INTO `biriyani_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(1, 'Khuska', 60, '\"IMGS/BIRIYANI/B.jpg\"'),
(2, 'Bamboo Biriyani', 180, '\"IMGS/BIRIYANI/BB.jpg\"'),
(3, 'Chicken Biriyani', 120, '\"IMGS/BIRIYANI/CB.jpg\"'),
(4, 'Fish Biriyani', 100, '\"IMGS/BIRIYANI/FB.jpg\"'),
(5, 'Hyderabad Biriyani', 160, '\"IMGS/BIRIYANI/HB.jpg\"'),
(6, 'Mutton Biriyani', 180, '\"IMGS/BIRIYANI/MB.jpg\"'),
(7, 'Pot Biriyani', 300, '\"IMGS/BIRIYANI/PB.jpg\"'),
(8, 'Thalassery Biriyani', 160, '\"IMGS/BIRIYANI/TB.jpg\"'),
(9, 'Vegetable Biriyani', 60, '\"IMGS/BIRIYANI/VB.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_items`
--

CREATE TABLE `chicken_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chicken_items`
--

INSERT INTO `chicken_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(10, 'chicken 65', 60, '\"IMGS/CHICKEN/65.jpg\"'),
(11, 'butter chicken', 120, '\"IMGS/CHICKEN/BUTTER.jpg\"'),
(12, 'leg piece', 60, '\"IMGS/CHICKEN/LEG.jpg\"'),
(13, 'lollipop', 120, '\"IMGS/CHICKEN/LOLLI.jpeg\"'),
(14, 'chicken manchoorian', 180, '\"IMGS/CHICKEN/MANCHOOR.jpg\"'),
(15, 'chicken nuggets', 150, '\"IMGS/CHICKEN/NUGGETS.jpg\"'),
(16, 'pepper chicken', 150, '\"IMGS/CHICKEN/PEPPER.jpg\"'),
(17, 'chicken tandoori', 320, '\"IMGS/CHICKEN/TANDOORI.jpg\"'),
(18, 'chicken tikka', 200, '\"IMGS/CHICKEN/TIKKA.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `fish_items`
--

CREATE TABLE `fish_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fish_items`
--

INSERT INTO `fish_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(19, 'fish bhetki', 80, '\"IMGS/FISH/BHETKI.jpg\"'),
(20, 'karimeen fry', 120, '\"IMGS/FISH/KM.jpg\"'),
(21, 'pomret fish fry', 120, '\"IMGS/FISH/POMRET.jpg\"'),
(22, 'prawn fry', 250, '\"IMGS/FISH/PRAWN.jpg\"'),
(23, 'spanish fish fry', 180, '\"IMGS/FISH/SPANISH.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `ice_creams`
--

CREATE TABLE `ice_creams` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ice_creams`
--

INSERT INTO `ice_creams` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(41, 'butterscotch', 40, '\"IMGS/ICE_CREAMS/BUTTER.jpg\"'),
(42, 'chocolate', 40, '\"IMGS/ICE_CREAMS/CHOCO.jpg\"'),
(43, 'strawberry', 40, '\"IMGS/ICE_CREAMS/STRAW.jpg\"'),
(44, 'vannila', 40, '\"IMGS/ICE_CREAMS/VANN.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `juice_items`
--

CREATE TABLE `juice_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juice_items`
--

INSERT INTO `juice_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(35, 'apple juice', 60, '\"IMGS/JUICES/APPLE.jpg\"'),
(36, 'sugarcane juice', 40, '\"IMGS/JUICES/CANE.jpg\"'),
(37, 'chikku juice', 50, '\"IMGS/JUICES/CHIKKU.jpeg\"'),
(38, 'grape juice', 50, '\"IMGS/JUICES/GRAPE.jpg\"'),
(39, 'lime juice', 40, '\"IMGS/JUICES/LIME.jpg\"'),
(40, 'mosambi juice', 50, '\"IMGS/JUICES/MOSAMBI.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `mutton_items`
--

CREATE TABLE `mutton_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` varchar(7) NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mutton_items`
--

INSERT INTO `mutton_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(24, 'mutton chukka', '150.00', '\"IMGS/MUTTON/CHUKKA.jpg\"'),
(25, 'mutton gravy', '120.00', '\"IMGS/MUTTON/GRAVY.jpg\"'),
(26, 'mutton kosha', '200.00', '\"IMGS/MUTTON/KOSHA.jpg\"'),
(27, 'mutton paya', '60.00', '\"IMGS/MUTTON/PAYA.jpg\"'),
(28, 'punjabi style gravy', '150.00', '\"IMGS/MUTTON/PUNJABI.jpg\"'),
(29, 'railway mutton gravy', '150.00', '\"IMGS/MUTTON/RAILWAY.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `noodles`
--

CREATE TABLE `noodles` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noodles`
--

INSERT INTO `noodles` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(45, 'chicken noodles', 150, '\"IMGS/NOODLES/CN.jpeg\"'),
(46, 'egg noodles', 120, '\"IMGS/NOODLES/EN.jpg\"'),
(47, 'prawn noodles', 180, '\"IMGS/NOODLES/PN.jpg\"'),
(48, 'soya noodles', 100, '\"IMGS/NOODLES/SCN.jpg\"'),
(49, 'vegetable noodles', 100, '\"IMGS/NOODLES/VN.jpg\"'),
(50, 'chineese noodles', 150, '\"IMGS/NOODLES/HCN.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `roti_items`
--

CREATE TABLE `roti_items` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roti_items`
--

INSERT INTO `roti_items` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(30, 'chappathi', 20, '\"IMGS/ROTI/CHAPPATHI.jpg\"'),
(31, 'cholapoor puri', 80, '\"IMGS/ROTI/CP.jpg\"'),
(32, 'naan', 20, '\"IMGS/ROTI/NAAN.jpg\"'),
(33, 'parotta', 20, '\"IMGS/ROTI/PAROTTA.jpg\"'),
(34, 'puri', 20, '\"IMGS/ROTI/PURi.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`) VALUES
(15, 'jk', '123@gmail.com', '$2y$10$UgJmkOXUUoL038by.dpkvOLtE3WqSTIhTLSYE5h29Xly2q.5pLsEK'),
(16, 'vaisag', '123@gmail.com', '$2y$10$obDf.x9KAz8GGHN7Y2/ynu7z2AY3glgZeH70bSlBWt3Jk9sk3fW2e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all`
--
ALTER TABLE `all`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `biriyani_items`
--
ALTER TABLE `biriyani_items`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `chicken_items`
--
ALTER TABLE `chicken_items`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `juice_items`
--
ALTER TABLE `juice_items`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `noodles`
--
ALTER TABLE `noodles`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
