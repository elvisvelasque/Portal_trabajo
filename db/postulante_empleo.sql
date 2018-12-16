-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2018 a las 05:35:04
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
-- Estructura de tabla para la tabla `postulante_empleo`
--

CREATE TABLE `postulante_empleo` (
  `id_postulante_empleo` int(11) NOT NULL,
  `id_empleo` int(11) NOT NULL,
  `id_postulante` int(11) NOT NULL,
  `calificacion_cv` int(11) NOT NULL,
  `calificacion_conocimientos` int(11) NOT NULL,
  `calificacion_psicologico` int(11) NOT NULL,
  `calificacion_entrevista` int(11) NOT NULL,
  `fase` int(11) NOT NULL,
  `estado_fase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulante_empleo`
--

INSERT INTO `postulante_empleo` (`id_postulante_empleo`, `id_empleo`, `id_postulante`, `calificacion_cv`, `calificacion_conocimientos`, `calificacion_psicologico`, `calificacion_entrevista`, `fase`, `estado_fase`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulante_empleo`
--
ALTER TABLE `postulante_empleo`
  ADD PRIMARY KEY (`id_postulante_empleo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulante_empleo`
--
ALTER TABLE `postulante_empleo`
  MODIFY `id_postulante_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
