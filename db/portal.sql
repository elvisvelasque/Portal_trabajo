-- Base de datos: `portal`

-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `postulante` (
  `id_postulante` int(11) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `distrito` varchar(70) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `edad` varchar(100) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(30) DEFAULT NULL,
  `lugar_nac` varchar(110) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `carrera` varchar(8) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `conocimientos` varchar(50) DEFAULT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=latin1;