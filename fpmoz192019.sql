-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2020 at 12:42 PM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.2.26-1+0~20191218.33+debian9~1.gbpb5a34b

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpmoz192019`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(6, 'martina', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `lozinka` varchar(50) CHARACTER SET latin2 NOT NULL,
  `email` varchar(50) CHARACTER SET latin2 NOT NULL,
  `ime` varchar(50) CHARACTER SET latin2 NOT NULL,
  `prezime` varchar(50) CHARACTER SET latin2 NOT NULL,
  `user_type` varchar(50) CHARACTER SET latin2 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `lozinka`, `email`, `ime`, `prezime`, `user_type`, `status`) VALUES
(1, '123', 'ivoivic@gmail.com', 'ivo', 'ivic', '', '1'),
(2, '12345', 'martinazovko@mail.com', 'martina', 'Zovko', 'admin', ''),
(6, '5555', 'martinazovko1@mail.com', 'martinazovko1@gmail.com', 'Zovko', '', '1'),
(7, '1', 'antonela@mail.com', 'Antonela', 'Prusina', '', '1'),
(8, '2', 'pero@mail.com', 'pero', 'peric', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `zadaci`
--

CREATE TABLE `zadaci` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) CHARACTER SET latin2 NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zadaci`
--

INSERT INTO `zadaci` (`id`, `naziv`, `slika`) VALUES
(1, 'Zadatak 1., 2., 3., 4.', 'slika1.jpg'),
(2, 'Zadatak 5.', 'slika2.jpg'),
(3, 'Zadaci 6.-11.', 'slika3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zadaci`
--
ALTER TABLE `zadaci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `zadaci`
--
ALTER TABLE `zadaci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admintable`
--
ALTER TABLE `admintable`
  ADD CONSTRAINT `admintable_ibfk_1` FOREIGN KEY (`id`) REFERENCES `korisnik` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
