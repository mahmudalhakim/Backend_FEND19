-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 25, 2020 at 10:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videobutik`
--

-- --------------------------------------------------------

--
-- Table structure for table `video_customers`
--

CREATE TABLE `video_customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_customers`
--

INSERT INTO `video_customers` (`id`, `name`, `email`) VALUES
(1, 'Mahmud Al Hakim', 'mahmud@alhakim.com'),
(2, 'Yasmin Al Hakim', 'yasmin@alhakim.com');

-- --------------------------------------------------------

--
-- Table structure for table `video_films`
--

CREATE TABLE `video_films` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(3) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_films`
--

INSERT INTO `video_films` (`id`, `title`, `price`, `image`) VALUES
(1, 'Braveheart', 20, '1.jpg'),
(2, 'Matrix', 40, '2.jpg'),
(3, 'Fight Club', 15, '3.jpg'),
(4, 'Patrioten', 15, '4.jpg'),
(5, 'Goldeneye', 30, '5.jpg'),
(6, 'Blair Witch Project', 25, '6.jpg'),
(7, 'Dum dummare', 30, ''),
(8, 'Dödslängtan', 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `video_orders`
--

CREATE TABLE `video_orders` (
  `id` int(11) NOT NULL,
  `film` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_orders`
--

INSERT INTO `video_orders` (`id`, `film`, `customer`, `date`) VALUES
(5, 1, 1, '2020-03-25 10:40:49'),
(6, 1, 2, '2020-03-25 10:44:20'),
(7, 7, 1, '2020-03-25 10:44:58'),
(8, 1, 1, '2020-03-25 11:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video_customers`
--
ALTER TABLE `video_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_films`
--
ALTER TABLE `video_films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_orders`
--
ALTER TABLE `video_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film` (`film`),
  ADD KEY `customer` (`customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video_customers`
--
ALTER TABLE `video_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_films`
--
ALTER TABLE `video_films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video_orders`
--
ALTER TABLE `video_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video_orders`
--
ALTER TABLE `video_orders`
  ADD CONSTRAINT `video_orders_ibfk_1` FOREIGN KEY (`film`) REFERENCES `video_films` (`id`),
  ADD CONSTRAINT `video_orders_ibfk_2` FOREIGN KEY (`customer`) REFERENCES `video_customers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
