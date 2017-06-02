-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2014 at 05:57 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `autor`, `fecha`, `hora`, `color`) VALUES
(64, 'hola', 'USUARIO DOS', '2014-07-20', '04:01:54', ''),
(65, 'Como estas', 'USUARIO UNO', '2014-07-20', '04:09:54', ''),
(66, 'Muy bien gracias', 'USUARIO DOS', '2014-07-20', '04:10:05', ''),
(67, 'Hola', 'USUARIO DOS', '2014-07-20', '04:10:12', ''),
(68, 'Hola', 'USUARIO UNO', '2014-07-20', '04:10:17', ''),
(69, ':D', 'USUARIO DOS', '2014-07-20', '04:14:56', ''),
(70, ':P', 'USUARIO DOS', '2014-07-20', '04:15:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usu` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usu`, `con`, `nombre`, `color`) VALUES
(1, '12345', '12345', 'USUARIO UNO', 'verde'),
(2, '54321', '54321', 'USUARIO DOS', 'azul');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
