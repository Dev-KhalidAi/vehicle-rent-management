-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 11:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `availablity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `availablity`, `price`, `image`) VALUES
(1, 'AMG A 35 4MATIC', 'Mercedes', 10, 640, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-mercedes-amg-a-35-4matic/_jcr_content/root/slider_4_copy/sliderchilditems/slideritem_copy/image/MQ7-0-image-20190805170520/00-mercedes-benz-vehicles-mbsocialcar-mercedes-amg-a-35-4matic-mountain-grey-metallic-w177-by-ricci-speckels-3400x1440.jpeg'),
(2, 'AMG A 45 S', 'Mercedes', 10, 550, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-mercedes-amg-a-45-s-4matic-ranier-fernandez/_jcr_content/root/slider_1672405516/sliderchilditems/slideritem_1521999240/image/MQ7-0-image-20200813100855/08-mbsocialcar-mercedes-amg-a-45-s-4matic-ranier-fernandez-3400x1440.jpeg'),
(3, 'AMG G 63', 'Mercedes', 10, 1200, 'https://www.mercedes-benz.com/en/mbsocialcar/mbvideocar-mercedes-amg-g-63-conquering-the-alps/_jcr_content/root/slider_0/sliderchilditems/slideritem/image/MQ7-0-image-20190423153305/01-mercedes-benz-vehicles-mbsocialcar-mercedes-amg-g-63-w463-conquering-the-alps-3400x1440.jpeg'),
(4, 'CLA 200', 'Mercedes', 10, 350, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-cla-200/_jcr_content/root/slider_259105999/sliderchilditems/slideritem_614050845/image/MQ7-0-image-20200204120758/07-mercedes-benz-wallpaper-gallery-cla-200-c118-christopher-busch-3400x1440.jpeg'),
(5, 'CLA 220 d Shooting Brake', 'Mercedes', 10, 900, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-cla-220-d-shooting-brake/_jcr_content/root/slider_copy/sliderchilditems/slideritem_2059295002/image/MQ7-0-image-20210108102921/09-mercedes-benz-vehicles-mbsocialcar-mercedes-benz-cla-220-d-shooting-brake-stefan-bischoff-3400x1440.jpeg'),
(6, 'G-Class', 'Mercedes', 10, 467, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-g-class/_jcr_content/root/slider/sliderchilditems/slideritem_1498494953/image/MQ7-0-image-20200820082706/08-mercedes-benz-vehicles-mbsocialcar-mercedes-benz-g-500-patrick-walter-3400x1440.jpeg'),
(7, 'GLS 500 4MATIC', 'Mercedes', 10, 700, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-gls-500-4matic/_jcr_content/root/slider_1145355957/sliderchilditems/slideritem_552634373/image/MQ7-0-image-20200218120741/08-mercedes-benz-gls-500-4matic-x167-mbsocialcar-wallpaper-marcel-hobrath-3400x1440.jpeg'),
(8, 'Marco Polo.', 'Mercedes', 10, 1400, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-marco-polo/_jcr_content/root/slider_4/sliderchilditems/slideritem_7/image/MQ7-0-image-20190114133040/08-mercedes-benz-camper-vans-mbsocialcar-marco-polo-w447-dolomite-brown-metallic-3400x1440.jpeg'),
(9, 'SLC Final Edition', 'Mercedes', 10, 750, 'https://www.mercedes-benz.com/en/mbsocialcar/mbsocialcar-slc-final-edition/_jcr_content/root/slider_4_copy/sliderchilditems/slideritem_copy/image/MQ7-0-image-20190729114412/02-mercedes-benz-mbsocialcar-slc-300-final-edition-r172-in-sun-yellow-3400x1440.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `user_username` varchar(25) NOT NULL,
  `pickdate` date NOT NULL,
  `dropdate` date NOT NULL,
  `picktime` time NOT NULL,
  `droptime` time NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `accepted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `user_username` varchar(25) NOT NULL,
  `number` varchar(16) NOT NULL,
  `exp_date` text NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`, `admin`) VALUES
('Aziz', 'Bahassan', 'Aziz', 'Aziz@gmail.com', '1234', 0),
('Ibrahim', 'Ahmed', 'Ibra', 'a@a.com', '1234', 0),
('Khalid', 'Awlaqi', 'Khalid', 'imr_khaled@outlook.com', '12345', 1),
('Mohammed', 'Ahmed', 'Moh', 'Mohammed@hotmail.com', '1234', 0),
('Waleed', 'Alharthi', 'willy', 'willy@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD KEY `car_id` (`car_name`),
  ADD KEY `user_username` (`user_username`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`number`),
  ADD KEY `user_username` (`user_username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`user_username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `checkout_ibfk_4` FOREIGN KEY (`car_name`) REFERENCES `cars` (`name`),
  ADD CONSTRAINT `checkout_ibfk_5` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`);

--
-- Constraints for table `credit`
--
ALTER TABLE `credit`
  ADD CONSTRAINT `credit_ibfk_1` FOREIGN KEY (`user_username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
