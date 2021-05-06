-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2021 at 05:36 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsalin19_638`
--

-- --------------------------------------------------------

--
-- Table structure for table `decade`
--

CREATE TABLE `decade` (
  `decade_id` int(11) NOT NULL,
  `era_type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decade`
--

INSERT INTO `decade` (`decade_id`, `era_type`) VALUES
(1, '1940s'),
(2, '1940s'),
(3, '1960s'),
(4, '1940s'),
(5, '1950s'),
(6, '1960s'),
(7, '1960s'),
(8, '1960s'),
(9, '1950s'),
(10, '1950s');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, '2'),
(2, '2'),
(3, '2'),
(4, '2'),
(5, '2'),
(7, '2'),
(8, '2'),
(10, '2'),
(6, '3'),
(9, '3');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `fullimage_filepath` varchar(100) NOT NULL,
  `thumb_filepath` varchar(100) NOT NULL,
  `closeup_filepath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `item_id`, `fullimage_filepath`, `thumb_filepath`, `closeup_filepath`) VALUES
(1, 1, '001fullsize.jpg', '001main.jpg', '001closeup.jpg'),
(2, 2, '002fullsize.jpg', '002main.jpg', '002closeup.jpg'),
(3, 3, '003fullsize.jpg', '003main.jpg', '003closeup.jpg'),
(4, 4, '004fullsize.jpg', '004main.jpg', '004closeup.jpg'),
(5, 5, '005fullsize.jpg', '005main.jpg', '005closeup.jpg'),
(6, 6, '006fullsize.jpg', '006main.jpg', '006closeup.jpg'),
(7, 7, '007fullsize.jpg', '007main.jpg', '007closeup.jpg'),
(8, 8, '008fullsize.jpg', '008main.jpg', '008closeup.jpg'),
(9, 9, '009fullsize.jpg', '009main.jpg', '009closeup.jpg'),
(10, 10, '010fullsize.jpg', '010main.jpg', '010closeup.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `season` tinyint(1) NOT NULL,
  `type_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `status` enum('available','sold_out') NOT NULL,
  `decade_id` int(11) NOT NULL,
  `etsy_location` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `season`, `type_id`, `gender_id`, `status`, `decade_id`, `etsy_location`) VALUES
(1, '1940s pinafore dress made of waffle knit cotton with red ric rac trim', 0, 1, 2, 'sold_out', 2, NULL),
(2, '1940s girl\'s leather sandals with plaid details', 0, 3, 2, 'sold_out', 2, NULL),
(3, 'toddler girl\'s elephant-themed flutter pinafore dress with novelty pocket', 0, 1, 2, 'sold_out', 4, NULL),
(4, '1940s novelty feedsack print toddler sundress with oversized buttons', 0, 1, 2, 'sold_out', 2, NULL),
(5, '1950s toddler zip front romper with checked pattern by Stoneswear', 0, 2, 2, 'sold_out', 3, NULL),
(6, 'c.1950 heirloom sun suit/romper with embroidery details', 0, 2, 3, 'sold_out', 3, NULL),
(7, '1960s purple poodle-themed dress with puff sleeves', 0, 1, 2, 'sold_out', 4, NULL),
(8, 'c.1960 red hen cotton baby dress with ric rac details', 1, 1, 2, 'sold_out', 4, NULL),
(9, 'c.1950s baby boy knit outfit set', 1, 5, 1, 'sold_out', 3, NULL),
(10, '1950s toddler girl pinafore look dress with sheer bodice by Nannette', 0, 1, 2, 'sold_out', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `garment_type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `garment_type`) VALUES
(1, 1),
(3, 1),
(4, 1),
(7, 1),
(8, 1),
(10, 1),
(5, 2),
(6, 2),
(2, 3),
(9, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decade`
--
ALTER TABLE `decade`
  ADD PRIMARY KEY (`decade_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`),
  ADD KEY `gender_name` (`gender_name`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `decade_id` (`decade_id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `garment_type` (`garment_type`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`decade_id`) REFERENCES `decade` (`decade_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
