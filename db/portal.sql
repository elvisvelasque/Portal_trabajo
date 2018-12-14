-- Base de datos: `portal`

-- Estructura de tabla para la tabla `alumnos`

CREATE TABLE `postulante` (
  `id_postulante` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
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
  `foto` varchar(50) DEFAULT 'user_png',
  `puesto` varchar(50) DEFAULT NULL,
  `conocimientos` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `contraseña` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `postulante`
  ADD PRIMARY KEY (`id_postulante`);

ALTER TABLE `postulante`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE `trabajos` (
  `id_trabajo` int(11) NOT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `lugar` varchar(70) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id_trabajo`);

ALTER TABLE `trabajos`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
