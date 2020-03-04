-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2020 a las 15:05:31
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
-- Estructura de tabla para la tabla `datosgenerales`
--

CREATE TABLE `datosgenerales` (
  `telefono` int(11) NOT NULL,
  `domicilio` varchar(50) CHARACTER SET utf8 NOT NULL,
  `colonia` varchar(25) CHARACTER SET utf8 NOT NULL,
  `numero` int(5) NOT NULL,
  `RFC` varchar(18) CHARACTER SET utf8 NOT NULL,
  `CURP` varchar(13) CHARACTER SET utf8 NOT NULL,
  `municipio` varchar(30) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(30) CHARACTER SET utf32 NOT NULL,
  `fechaN` date NOT NULL,
  `id_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosgenerales`
--

INSERT INTO `datosgenerales` (`telefono`, `domicilio`, `colonia`, `numero`, `RFC`, `CURP`, `municipio`, `estado`, `fechaN`, `id_usuario`) VALUES
(999999, 'lindepp', 'san jose', 242, 'DASPOPK2313D', 'DAID99IPOKAS', 'saltillo', 'coahuila', '1991-11-11', 24),
(321, '', '', 0, '', '', '', '', '0000-00-00', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
