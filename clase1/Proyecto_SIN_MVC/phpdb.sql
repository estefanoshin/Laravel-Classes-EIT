-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2017 a las 07:00:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpdb`
--
CREATE DATABASE IF NOT EXISTS `phpdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `cod_categoria` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`cod_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cod_categoria`, `descripcion`) VALUES
(1, 'Televisores'),
(2, 'Computadoras'),
(3, 'Impresoras'),
(4, 'Notebooks'),
(5, 'Heladeras'),
(6, 'Telefonos'),
(7, 'Lavarropas'),
(8, 'Camaras digitales'),
(9, 'Video camaras'),
(10, 'Estufas'),
(11, 'Aire acondicionado'),
(12, 'Radio'),
(13, 'Home Theater');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `cod_producto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_categoria` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`cod_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `cod_categoria`, `nombre`, `precio`, `stock`) VALUES
(1, 1, 'TV LCD 19\" MODELO PFL3403', 2199, 40),
(2, 1, 'TV LCD22\" MODELO LN22A450', 2399, 30),
(3, 1, 'TV LCD 32\" MODELO LC813H ', 2999, 25),
(4, 1, 'TV LCD 26\" MODELO 26LG30R', 2999, 25),
(5, 1, 'TV LCD 26\" MODELO CDH-L26S02', 3099, 20),
(6, 1, 'TV LCD 32\" MODELO PL3219 ', 3399, 20),
(7, 2, 'CPU LE1250DVD2GB160VS', 2199, 15),
(8, 2, 'CPU A64X246DV2G160VBOF ', 2499, 8),
(9, 2, 'CPU E5200DVDR2GB320VB ', 2699, 5),
(10, 2, 'CPU SG3308LA ', 3099, 5),
(11, 3, 'IMPRESORA T23 ', 219, 18),
(12, 3, 'IMPRESORA DJ-6940 ', 349, 20),
(13, 3, 'IMPRESORA T33', 399, 12),
(14, 3, 'IMPRESORA K5400  ', 499, 8),
(15, 13, 'HOME CINEMA SPH70 ', 319, 0),
(16, 13, 'HOME CINEMA AMX115 ', 419, 0),
(17, 13, 'HOME CINEMA HT E 860 ', 599, 0),
(18, 13, 'HOME CINEMA DC-T990 ', 759, 5),
(19, 13, 'HOME CINEMA HT-1105U', 829, 18),
(20, 13, 'HOME CINEMA HT304SL-A2 ', 949, 6),
(21, 13, 'HOME CINEMA HT-Z110 ', 999, 22),
(22, 13, 'HOME CINEMA HTS3011/55', 1099, 18),
(23, 13, 'HOME CINEMA HT503SH', 1299, 15),
(24, 13, 'HOME CINEMA HT503SH-AM', 1299, 12),
(25, 13, 'HOME CINEMA HT-IS10', 1499, 7),
(26, 13, 'HOME CINEMA HTS3365/55', 1599, 5),
(27, 12, 'RADIO PORT RP 299  ', 49, 5),
(28, 12, 'RADIO DX-365', 79, 15),
(29, 12, 'RADIO ICF-S10MK2/SCE', 79, 15),
(30, 12, 'RADIO ICF-18  ', 99, 15),
(31, 12, 'RADIO ICF-303/304 AM-FM ', 129, 8),
(32, 12, 'RADIO SRF-59/SC E ', 129, 10),
(33, 4, 'NOTEBOOK C2D2VB250WC14', 3699, 12),
(34, 4, 'NOTEBOOK CQ40-300', 2999, 9),
(35, 4, 'NOTEBOOK DV2-1010', 3999, 7),
(36, 4, 'NOTEBOOK DV4-1212', 4199, 9),
(37, 4, 'NOTEBOOK DV4-1212', 4199, 10),
(38, 6, 'TELEFONO DECT1221S INALAMBRICO', 169, 15),
(39, 6, 'TELEFONO CD1401B INALAMBRICO', 169, 8),
(40, 6, 'TELEFONO CD2401S INALAMBRICO', 239, 8),
(41, 6, 'TELEFONO CD1302S INALAMBRICO', 249, 8),
(42, 6, 'TELEFONO SANYO HNS-3300 ', 69, 10),
(43, 7, 'LAVARROPA GAFA 7000 DIG PROGR 7KG', 1679, 7),
(44, 7, 'LAVARROPA GAFA 7500 T750 7,5K ', 1839, 4),
(45, 7, 'LAVARROPA GAFA ACQ7500 GRAFT750 7,5K ', 1939, 12),
(46, 7, 'LAVARROPA LG WF-T1202TP 12KG C/S', 2449, 10),
(47, 7, 'LAVARROPA LG WF-T1205TP 12K TITANIUM', 2499, 10),
(48, 8, 'CAMARA DIGITAL KODAK C813', 549, 10),
(49, 8, 'CAMARA DIGITAL VPCS-870EX ', 579, 15),
(50, 8, 'CAMARA DIGITAL C913', 599, 15),
(51, 8, 'CAMARA DIGITAL 760+KIT', 649, 15),
(52, 8, 'CAMARA DIGITAL ES10', 749, 20),
(53, 8, 'CAMARA DIGITAL ES15 ', 799, 40),
(54, 9, 'CAMARA VIDEO DCR-DVD650', 2749, 15),
(55, 9, 'CAMARA VIDEO DCR-DVD810 ', 2999, 10),
(56, 10, 'CALEFACTOR TB 2400 GN', 459, 12),
(57, 10, 'CALEFACTOR TB 3000 GN', 699, 12),
(58, 10, 'CALEFACTOR TB 5000 GN', 1999, 15),
(59, 11, 'AIRE ACONDICIONADOR SP TS-C096EMAO 2200FS', 1999, 15),
(60, 11, 'AIRE ACONDICIONADOR SP TS-C096EMAO 2200FS ', 1999, 10),
(61, 11, 'AIRE ACONDICIONADOR SP TS-C126EMAO 3000FS', 2249, 10),
(62, 11, 'AIRE ACONDICIONADOR SP TS-C1865DLO 4500FS', 3049, 20),
(63, 11, 'AIRE ACONDICIONADOR SP LS-C1863RMO 4500FS', 3349, 20),
(64, 11, 'AIRE ACONDICIONADOR SP WSX09CG5R 2500WFS', 1599, 15),
(69, 2, 'pc i5 32gb ram', 14000, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;