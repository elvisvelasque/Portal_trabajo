-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2018 a las 05:13:35
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
(36, 26, 'wwer'),
(37, 27, 'qweqwe'),
(38, 28, 'wer');

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
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_php` int(11) NOT NULL,
  `c_java` int(11) NOT NULL,
  `c_python` int(11) NOT NULL,
  `c_ofimatica` int(11) NOT NULL,
  `c_angular` int(11) NOT NULL,
  `c_laravel` int(11) NOT NULL,
  `c_net` int(11) NOT NULL,
  `c_sql` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `titulo`, `ubicacion`, `descripcion`, `estado`, `fecha`, `c_php`, `c_java`, `c_python`, `c_ofimatica`, `c_angular`, `c_laravel`, `c_net`, `c_sql`) VALUES
(1, 'tituloEmpleo', 'ubicacion', 'descripcion', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'ass', 'sa', 'sa', 2, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'qqqqq', 'qqq', 'qqq', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'ASD', 'ASD', 'ASD', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'ASD', 'ASD', 'ASD', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'qq', 'qq', 'qqq', 1, '2018-12-14 19:53:44', 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'qwe', 'qwe', 'qwe', 1, '2018-12-15 23:06:00', 0, 0, 1, 1, 0, 0, 0, 0),
(30, 'qwe', 'qqqq', 'qew', 1, '2018-12-15 23:06:23', 1, 0, 1, 0, 0, 0, 0, 0),
(31, 'qwe', 'qqqq', 'qew', 1, '2018-12-15 23:06:45', 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'qwe', 'qqqq', 'qew', 1, '2018-12-15 23:06:52', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(11) NOT NULL,
  `id_empleo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_examen`, `id_empleo`, `estado`, `tipo`) VALUES
(1, 0, 0, 1),
(2, 1, 0, 1),
(3, 1, 0, 1),
(4, 1, 0, 1),
(5, 1, 0, 1),
(6, 1, 0, 1),
(7, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `id_postulante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `distrito` varchar(70) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `contrasena` varchar(30) DEFAULT NULL,
  `edad` varchar(100) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(30) DEFAULT NULL,
  `lugar_nac` varchar(110) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT 'user.png',
  `puesto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `rol` varchar(2) DEFAULT 'P',
  `php` int(11) DEFAULT 0,
  `java` int(11) DEFAULT 0,
  `python` int(11) DEFAULT 0,
  `laravel` int(11) DEFAULT 0,
  `net` int(11) DEFAULT 0,
  `sql_` int(11) DEFAULT 0,
  `ofimatica` int(11) DEFAULT 0,
  `angular` int(11) DEFAULT 0

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `postulante` (`id_postulante`, `email`,`contrasena`, `rol`) VALUES
(1, 'admin@gmail.com', 'admin','A');

-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`id_postulante`, `nombre`, `dni`, `direccion`, `distrito`, `email`, `telefono`, `edad`, `sexo`, `estado_civil`, `lugar_nac`, `institucion`, `carrera`, `foto`, `puesto`) VALUES
(2, 'Javier Ormeño Vera', 'ew', 'we', 'we', 'we', 'wewqeqwe', 'e', 'weqwe', 'e', 'we', 'eqwe', 'q', 'weqweqwe', 'qwe'),
(3, 'Javier Ormeño Vera', 'ew', 'we', 'we', 'we', 'wewqeqwe', 'e', 'weqwe', 'e', 'we', 'eqwe', 'q', 'weqweqwe', 'qwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante_empleo`
--

CREATE TABLE `postulante_empleo` (
  `id_postulante_empleo` int(11) NOT NULL,
  `id_empleo` int(11) NOT NULL,
  `id_postulante` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `seleccionado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulante_empleo`
--

INSERT INTO `postulante_empleo` (`id_postulante_empleo`, `id_empleo`, `id_postulante`, `calificacion`, `seleccionado`) VALUES
(1, 1, 1, 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_examen`
--

CREATE TABLE `pregunta_examen` (
  `id_pregunta` int(11) NOT NULL,
  `id_examen` int(11) NOT NULL,
  `encabezado` varchar(50) NOT NULL,
  `opcion1` varchar(50) NOT NULL,
  `opcion2` varchar(50) NOT NULL,
  `opcion3` varchar(50) NOT NULL,
  `opcion4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta_examen`
--

INSERT INTO `pregunta_examen` (`id_pregunta`, `id_examen`, `encabezado`, `opcion1`, `opcion2`, `opcion3`, `opcion4`) VALUES
(1, 1, 'e', 'ew', 'werwe', 'er', 'wer'),
(2, 2, 'wer', 'werw', 'werwer', 'er', 'wer'),
(3, 5, 'AS', 'QW', 'QW', 'QW', 'QW'),
(4, 5, 'QWQ', 'QWQ', 'QWQ', 'QWQ', 'QWQ'),
(5, 5, 'AS', 'QW', 'QW', 'QW', 'QW'),
(6, 5, 'AS', 'QW', 'QW', 'QW', 'QW'),
(7, 5, 'Q2', 'Q2', '2Q2', '2', '2'),
(8, 5, 'QWQ', 'QWQ', 'QWQ', 'QWQ', 'QWQ'),
(9, 5, 'QWQ', 'QWQ', 'QWQ', 'QWQ', 'QWQ'),
(10, 5, 'Q2', 'Q2', '2Q2', '2', '2'),
(11, 5, 'Q2', 'Q2', '2Q2', '2', '2'),
(12, 6, 'RT', 'ERT', 'ERT', 'ERT', 'ERT'),
(13, 7, 'as', 'aa', 'a', 'a', 'a');

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
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`id_postulante`);

-- Indices de la tabla `postulante_empleo`
--
ALTER TABLE `postulante_empleo`
  ADD PRIMARY KEY (`id_postulante_empleo`);

--
-- Indices de la tabla `pregunta_examen`
--
ALTER TABLE `pregunta_examen`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conocimiento_empleo`
--
ALTER TABLE `conocimiento_empleo`
  MODIFY `id_conocimiento_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `postulante_empleo`
--
ALTER TABLE `postulante_empleo`
  MODIFY `id_postulante_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pregunta_examen`
--
ALTER TABLE `pregunta_examen`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `postulante`
--

ALTER TABLE `postulante`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
