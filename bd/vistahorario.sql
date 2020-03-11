-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2020 a las 01:34:59
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `letstravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vistahorario`
--

CREATE TABLE `vistahorario` (
  `id_usuario` int(11) NOT NULL,
  `dias` varchar(200) CHARACTER SET utf8 NOT NULL,
  `lugares` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vistahorario`
--

INSERT INTO `vistahorario` (`id_usuario`, `dias`, `lugares`) VALUES
(24, 'Lunes,Miercoles,Viernes,Domingos,', 'Museo de la Revolucion,Museo de las Aves,Museo del Desierto,Museo catrina,'),
(27, 'Miercoles,Sabados,', 'Museo Taurino,Museo de la pintura,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
