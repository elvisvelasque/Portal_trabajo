-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2018 a las 02:07:31
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocimiento_empleo`
--

CREATE TABLE `conocimiento_empleo` (
  `id_conocimiento_empleo` int(11) NOT NULL,
  `id_empleo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conocimiento_empleo`
--

INSERT INTO `conocimiento_empleo` (`id_conocimiento_empleo`, `id_empleo`, `descripcion`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3'),
(4, 0, 'wer'),
(5, 0, 'wer'),
(6, 1, '1'),
(7, 1, '2'),
(8, 1, '3'),
(9, 0, 'wer'),
(10, 0, 'wer'),
(11, 0, 'qwe'),
(12, 0, 'we'),
(13, 3, 'ww'),
(14, 3, 'ww'),
(15, 18, '2'),
(16, 18, '2'),
(17, 19, '2'),
(18, 19, '2'),
(19, 1, 'qwe'),
(20, 1, 'qwe'),
(21, 1, 'w'),
(22, 21, 'qq'),
(23, 21, 'qq'),
(24, 22, 'qq'),
(25, 22, 'qq'),
(26, 23, 'qq'),
(27, 23, 'qq'),
(28, 24, 'qq'),
(29, 24, 'qq'),
(30, 24, '78'),
(31, 25, 'qq'),
(32, 25, 'qq'),
(33, 25, '78'),
(34, 26, 'qq'),
(35, 26, 'qq'),
(36, 26, 'wwer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `id_empleo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `titulo`, `ubicacion`, `descripcion`, `estado`, `fecha`) VALUES
(1, 'tituloEmpleo', 'ubicacion', 'descripcion', 1, '2018-12-14 19:53:44'),
(2, 'ass', 'sa', 'sa', 2, '2018-12-14 19:53:44'),
(3, 'qqqqq', 'qqq', 'qqq', 1, '2018-12-14 19:53:44'),
(4, '', '', '', 1, '2018-12-14 19:53:44'),
(5, '', '', '', 1, '2018-12-14 19:53:44'),
(6, 'ASD', 'ASD', 'ASD', 1, '2018-12-14 19:53:44'),
(7, 'ASD', 'ASD', 'ASD', 1, '2018-12-14 19:53:44'),
(8, 'ASD', 'ASD', 'ASD', 1, '2018-12-14 19:53:44'),
(9, 'asd', 'asd', 'asd', 1, '2018-12-14 19:53:44'),
(10, 'asd', 'asd', 'asd', 1, '2018-12-14 19:53:44'),
(11, '', '', '', 1, '2018-12-14 19:53:44'),
(12, '1231231', '123123', '123123', 1, '2018-12-14 19:53:44'),
(13, 'r', 'wer', 'wer', 1, '2018-12-14 19:53:44'),
(14, '1212', '121', '123', 1, '2018-12-14 19:53:44'),
(15, 'ewr', 'wer', 'wer', 1, '2018-12-14 19:53:44'),
(16, 'qwe', 'qwe', 'we', 1, '2018-12-14 19:53:44'),
(17, 'werw', 'wer', 'www', 1, '2018-12-14 19:53:44'),
(18, '12', '2', '2', 1, '2018-12-14 19:53:44'),
(19, '12', '2', '2', 1, '2018-12-14 19:53:44'),
(20, 'weeq', 'qwe', 'qwe', 1, '2018-12-14 19:53:44'),
(21, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44'),
(22, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44'),
(23, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44'),
(24, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44'),
(25, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44'),
(26, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `id_postulante` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `distrito` varchar(70) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `contrasena` varchar(30) DEFAULT NULL,
  `edad` varchar(100) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `estado_civil` varchar(30) DEFAULT NULL,
  `lugar_nac` varchar(110) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT 'user.png',
  `puesto` varchar(50) DEFAULT NULL,
  `conocimientos` varchar(50) DEFAULT NULL,
  `rol` varchar(2) DEFAULT 'P',

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `postulante` (`id_postulante`, `email`,`contrasena`, `rol`) VALUES
(1, 'admin@gmail.com', 'admin','A')

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante_empleo`
--
CREATE TABLE `postulante_empleo` (
  `id_postulante` int(11) NOT NULL,
  `id_empleo` int(11) NOT NULL,
  `estado` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conocimiento_empleo`
--
ALTER TABLE `conocimiento_empleo`
  ADD PRIMARY KEY (`id_conocimiento_empleo`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`id_empleo`);

--
-- Indices de la tabla `conocimiento_empleo`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`id_postulante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conocimiento_empleo`
--
ALTER TABLE `conocimiento_empleo`
  MODIFY `id_conocimiento_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `postulante`
--

ALTER TABLE `postulante`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
