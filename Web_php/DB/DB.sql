-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 08:19:43
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE DATABASE `articles`;
USE articles;
CREATE TABLE IF NOT EXISTS `articles` (
  `ref` INT auto_increment,
  `nom` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `familia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mesures` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pes` INT(5) COLLATE utf8_spanish_ci NOT NULL,
  `pais_fabric` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `data_fabric` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descripcio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
 
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `articles` (`nom`, `familia`, `mesures`, `material`, `color`, `pes`, `pais_fabric`, `data_fabric`,`descripcio`) VALUES
('Kallak', 'Armaris', '210x90', 'Pi:Alumini', 'Blanc:Gris', 120, 'Portugal', '12/09/2016','nsiufh dfiuhdf asidufb'),
('Morduf', 'Taules', '40x110', 'Roure:', 'Natural:', 15, 'Italia', '02/02/2017','hfnsbfu dfiuas dfiusdf');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
