-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Računalo: 127.0.0.1
-- Vrijeme generiranja: Pro 07, 2014 u 08:49 PM
-- Verzija poslužitelja: 5.5.27
-- PHP verzija: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `vehicle_db`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `cars_data`
--

CREATE TABLE IF NOT EXISTS `cars_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Izbacivanje podataka za tablicu `cars_data`
--

INSERT INTO `cars_data` (`id`, `brand`, `type`, `color`, `price`) VALUES
(52, 'Fiat', 'Uno', 'Blue', '1300'),
(53, 'Opel', 'Astra', 'White', '6000'),
(54, 'Audi', 'A6', 'Black', '13000'),
(55, 'Opel', 'Corsa', 'Red', '3000'),
(56, 'Mazda', '626', 'Black', '5000'),
(57, 'Volkswagen', 'Polo Classic', 'Yellow', '3500'),
(59, 'Renault', 'Clio', 'Clio', '4200');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
