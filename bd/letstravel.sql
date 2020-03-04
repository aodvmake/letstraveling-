-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2020 a las 15:01:59
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
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_horario` int(8) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `comentario` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_usuario` int(8) NOT NULL,
  `id_horario` int(8) NOT NULL,
  `dia` varchar(20) CHARACTER SET utf8 NOT NULL,
  `horarioi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `horariof` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_usuario`, `id_horario`, `dia`, `horarioi`, `horariof`) VALUES
(24, 12, 'Lunes', '10:02', '17:55'),
(24, 13, 'Miercoles', '10:02', '17:55'),
(24, 14, 'Viernes', '10:02', '17:55'),
(24, 15, 'Domingos', '10:02', '17:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(8) NOT NULL,
  `id_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `id_usuario`) VALUES
(4, 24),
(1, 31),
(5, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id_idioma` int(8) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id_idioma`, `nombre`) VALUES
(1, 'Español'),
(3, 'English'),
(4, 'Português'),
(5, 'italiano'),
(6, 'français');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarvista`
--

CREATE TABLE `lugarvista` (
  `id_horario` int(8) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lugar` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `id_puesto` int(8) NOT NULL,
  `id_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id_puesto`, `id_usuario`) VALUES
(3, 24),
(4, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(8) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `nombre`) VALUES
(1, 'King'),
(2, 'Administrador'),
(3, 'Guia'),
(4, 'Turista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regitrov`
--

CREATE TABLE `regitrov` (
  `id_registro` int(8) NOT NULL,
  `id_usuario` int(8) NOT NULL,
  `id_horario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(8) NOT NULL,
  `pass` varchar(265) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(150) CHARACTER SET utf8 NOT NULL,
  `estatus` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `pass`, `foto`, `estatus`, `email`) VALUES
(24, '1234', '', 'Activo', 'aodv_seven@gmail.com'),
(26, '123', '', 'Activo', 'registroturista@registro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id_idioma` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
