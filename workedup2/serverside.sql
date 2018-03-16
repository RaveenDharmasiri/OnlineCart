-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2018 at 05:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serverside`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(7889610, 'Wolfenstein 2', 'img4.jpg', 'The best game to kill Nazis\r\n', '29.00', 100),
(7890820, 'Assassin\'s Creed Origins PS4', 'img5.jpg', 'Adventure free roaming', '45.00', 100),
(7896106, 'Rocket League Collector\'s Ed', 'img3.jpg', 'Important Information\r\nThe above details have been prepared to help you select suitable products. Products and their ingredients are liable to change.\r\n\r\nYou should always read the label before consuming or using the product and never rely solely on the information presented here.\r\n\r\nIf you require specific advice on any Sainsbury\'s branded product, please contact our Customer Careline on 0800 636262. For all other products, please contact the manufacturer.\r\n\r\nThis information is supplied for your personal use only. It may not be reproduced in any way without the prior consent of Sainsbury\'s Supermarkets Ltd and due acknowledgement.', '19.00', 100),
(7902299, 'Dragonball FighterZ PS4', 'img1.jpg', 'Important Information\r\nThe above details have been prepared to help you select suitable products. Products and their ingredients are liable to change.\r\n\r\nYou should always read the label before consuming or using the product and never rely solely on the information presented here.\r\n\r\nIf you require specific advice on any Sainsbury\'s branded product, please contact our Customer Careline on 0800 636262. For all other products, please contact the manufacturer.\r\n\r\nThis information is supplied for your personal use only. It may not be reproduced in any way without the prior consent of Sainsbury\'s Supermarkets Ltd and due acknowledgement.', '47.00', 50),
(7902431, 'Monster Hunter World PS4', 'img2.jpg', 'Important Information\r\nThe above details have been prepared to help you select suitable products. Products and their ingredients are liable to change.\r\n\r\nYou should always read the label before consuming or using the product and never rely solely on the information presented here.\r\n\r\nIf you require specific advice on any Sainsbury\'s branded product, please contact our Customer Careline on 0800 636262. For all other products, please contact the manufacturer.\r\n\r\nThis information is supplied for your personal use only. It may not be reproduced in any way without the prior consent of Sainsbury\'s Supermarkets Ltd and due acknowledgement.', '47.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userType` varchar(20) DEFAULT NULL,
  `userFName` varchar(20) NOT NULL,
  `userSName` varchar(20) NOT NULL,
  `userAddress` varchar(30) DEFAULT NULL,
  `userPostCode` int(5) DEFAULT NULL,
  `userTelNo` int(10) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userPassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(4, NULL, 'Raveen', 'Dharmasiri', 'Colombo', 20223, 771234567, 'raveen@gmail.com', '123'),
(7, NULL, 'Anjula', 'Rathnayaka', 'Kurunegala', 45678, 712837465, 'anjula@gmail.com', '345'),
(9, NULL, 'Anjuala', 'Boteju', 'Borella', 34567, 773456789, 'anjala@gmail.com', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7902432;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
