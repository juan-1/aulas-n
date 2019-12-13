-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 06:32:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservaunam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `id_aula` varchar(11) NOT NULL,
  `capacidad` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`id_aula`, `capacidad`) VALUES
('A01', 40),
('A01-A02', 80),
('A02', 40),
('A03', 40);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `datosusuarios2`
--
CREATE TABLE `datosusuarios2` (
`numero_usuario` varchar(24)
,`paterno` varchar(50)
,`materno` varchar(50)
,`nombre` varchar(50)
,`tipoUsu` varchar(50)
,`contrasena` varchar(45)
,`modif` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `numero_reserva` int(20) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `nombreEve` varchar(260) DEFAULT NULL,
  `descrip` varchar(260) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fechaI` varchar(50) DEFAULT NULL,
  `fechaF` varchar(150) DEFAULT NULL,
  `horaI` time DEFAULT NULL,
  `horaF` time DEFAULT NULL,
  `color` varchar(20) NOT NULL,
  `registra` int(10) NOT NULL,
  `fk_numAula` varchar(50) DEFAULT NULL,
  `fk_numUsu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`numero_reserva`, `departamento`, `nombreEve`, `descrip`, `material`, `tipo`, `fechaI`, `fechaF`, `horaI`, `horaF`, `color`, `registra`, `fk_numAula`, `fk_numUsu`) VALUES
(9, 'medicina basica', 'Probando evento numero 2', 'evento para alumnos', 'solo proyector', 'Curso', '2019-11-28', '2019-11-28', '12:00:00', '13:00:00', '#00CDF0', 1, 'A01', '1012'),
(10, 'Mi primer curso', 'Historia de la medicina', 'evento para alumnos', 'solo proyector', 'Taller', '2019-11-28', '2019-11-28', '15:00:00', '17:00:00', '#AC1B4E', 2, 'A01', '1112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `ids` int(20) NOT NULL,
  `emailTemp` varchar(50) DEFAULT NULL,
  `contrasenaTemp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numero_usuario` varchar(24) NOT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tipoUsu` varchar(50) DEFAULT NULL,
  `ruta` varchar(620) DEFAULT NULL,
  `modif` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numero_usuario`, `paterno`, `materno`, `nombre`, `contrasena`, `email`, `tipoUsu`, `ruta`, `modif`) VALUES
('1012', 'torres', 'aguilar', 'juan', 'juanito', 'juan@gmail.com', 'Observador Academico', 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/eliminar-y-resultados-negativos-de-google.png', 'Si'),
('1112', 'orozpe', 'lara', 'javier', 'negro', 'javier@gmail.com', 'Usuario', 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/Walmart-Logo-PNG-Transparent.png', 'No'),
('1213', 'Herrera', 'Garcia', 'Juan Enrique', 'carlos1', 'carlos1@gmail.com', 'Administrador Restringido', 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/fondos.jpg', 'No'),
('2123', 'Herrera', 'Garcia', 'Ing Carlos', 'carlos2', 'solrac512@hotmail.com', 'Administrador General', 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/IMG-20181223-WA0007.jpg', 'Si'),
('5555555', 'Hernandez', 'Flores', 'Jose Pepe', 'aaa', 'a@gmail.com', 'Administrador Restringido', 'C:/xampp/htdocs/resunam/vista/constancia/imagenes/Captura de pantalla (8).png', 'No');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_reservas`
--
CREATE TABLE `vista_reservas` (
`numero_reserva` int(20)
,`nombreEve` varchar(260)
,`tipo` varchar(45)
,`fk_numAula` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `datosusuarios2`
--
DROP TABLE IF EXISTS `datosusuarios2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datosusuarios2`  AS  select `usuarios`.`numero_usuario` AS `numero_usuario`,`usuarios`.`paterno` AS `paterno`,`usuarios`.`materno` AS `materno`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`tipoUsu` AS `tipoUsu`,`usuarios`.`contrasena` AS `contrasena`,`usuarios`.`modif` AS `modif` from `usuarios` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_reservas`
--
DROP TABLE IF EXISTS `vista_reservas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_reservas`  AS  select `reservas`.`numero_reserva` AS `numero_reserva`,`reservas`.`nombreEve` AS `nombreEve`,`reservas`.`tipo` AS `tipo`,`reservas`.`fk_numAula` AS `fk_numAula` from `reservas` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`numero_reserva`),
  ADD KEY `fk_num_usu` (`fk_numUsu`),
  ADD KEY `fk_num_aul` (`fk_numAula`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`ids`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numero_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `numero_reserva` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `ids` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `fk_num_aul` FOREIGN KEY (`fk_numAula`) REFERENCES `aulas` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_num_usu` FOREIGN KEY (`fk_numUsu`) REFERENCES `usuarios` (`numero_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
