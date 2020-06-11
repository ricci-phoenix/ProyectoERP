-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2020 a las 02:36:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yii2basic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_alumno`
--

CREATE TABLE `admin_alumno` (
  `id_alumno` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `id_materia1` int(20) NOT NULL,
  `id_materia2` int(20) NOT NULL,
  `id_materia3` int(20) NOT NULL,
  `id_materia4` int(20) NOT NULL,
  `id_materia5` int(20) NOT NULL,
  `id_campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_docente`
--

CREATE TABLE `admin_docente` (
  `id_docente` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `materias` varchar(50) NOT NULL,
  `id_campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_docente`
--

INSERT INTO `admin_docente` (`id_docente`, `nombre`, `apaterno`, `amaterno`, `materias`, `id_campus`) VALUES
(1, 'Rodrigo', 'Martinez', 'Velázquez', 'Matemáticas', 1),
(2, 'Aquilez', 'Ezquivel', 'Madrazo', 'Computación', 2),
(3, 'Paulina', 'Palacios', 'Cárdenas', 'Dibujo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_alumno` int(20) NOT NULL,
  `id_materia` int(50) NOT NULL,
  `parcial1` int(50) NOT NULL,
  `parcial2` int(50) NOT NULL,
  `parcial3` int(50) NOT NULL,
  `final` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE `campus` (
  `id_campus` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `codigopostal` varchar(10) NOT NULL,
  `telefono` int(12) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`id_campus`, `nombre`, `calle`, `colonia`, `numero`, `codigopostal`, `telefono`, `ciudad`, `estado`) VALUES
(1, 'Morelia', 'Lázaro Cárdenas', 'Centro', '123', '59121', 1234567890, 'Morelia', 'Michoacán'),
(2, 'Oaxaca', 'Oaxaca 203', 'Puente', '124', '39128', 123456789, 'Colima', 'Sinalóa'),
(3, 'Topoto', 'qwerty', 'qwerty', '1234', '213456', 1234567890, 'Tepalcatepec', 'Michoacán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_deptos` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `telefono` int(12) NOT NULL,
  `id_campus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_deptos`, `nombre`, `descripcion`, `telefono`, `id_campus`) VALUES
(1, '1', '1', 1, 1),
(2, '2', '2', 2, 2),
(3, '3', '3', 3, 1),
(4, '3', '3', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_docente` int(20) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `grado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `id_docente`, `carrera`, `grado`) VALUES
(1, 'Matemáticas', 1, 'Arquitectura', '1'),
(2, 'Computación', 2, 'Sistemas', '1'),
(3, 'Estadística', 1, 'Sistemas', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apaterno` varchar(100) NOT NULL,
  `amaterno` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `RFC` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_deptos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `apaterno`, `amaterno`, `fecha_nac`, `sexo`, `RFC`, `status`, `id_deptos`) VALUES
(1, 'Celerina', 'Perez', 'Gomez', '0000-00-00', 'Mujer', '1232143124', 'abc', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `precioVenta`, `precioCompra`, `existencia`) VALUES
(1, '1', 'Galletas chokis', '15.00', '10.00', '98.00'),
(2, '2', 'Mermelada de fresa', '80.00', '65.00', '100.00'),
(3, '3', 'Aceite', '20.00', '18.00', '100.00'),
(4, '4', 'Palomitas de maíz', '15.00', '12.00', '100.00'),
(5, '5', 'Doritos', '8.00', '5.00', '99.00'),
(6, '1', 'red bull', '40.00', '40.00', '999.99'),
(7, '7', 'bonafont 1 l', '12.00', '10.00', '-1.00'),
(8, '8', 'leche lalal entera 1L', '15.00', '13.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_alumno`
--
ALTER TABLE `admin_alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `campus` (`id_campus`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_campus` (`id_campus`),
  ADD KEY `id_materia1` (`id_materia1`),
  ADD KEY `id_materia2` (`id_materia2`),
  ADD KEY `id_materia3` (`id_materia3`),
  ADD KEY `id_materia4` (`id_materia4`),
  ADD KEY `id_materia5` (`id_materia5`),
  ADD KEY `id_materia5_2` (`id_materia5`);

--
-- Indices de la tabla `admin_docente`
--
ALTER TABLE `admin_docente`
  ADD PRIMARY KEY (`id_docente`),
  ADD UNIQUE KEY `campus` (`id_campus`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `campus_2` (`id_campus`),
  ADD KEY `id_campus` (`id_campus`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_alumno`,`id_materia`),
  ADD KEY `id_alumno` (`id_alumno`,`id_materia`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id_campus`),
  ADD KEY `id_campus` (`id_campus`) USING BTREE;

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_deptos`),
  ADD KEY `id_campus` (`id_campus`),
  ADD KEY `id_deptos` (`id_deptos`),
  ADD KEY `id_campus_2` (`id_campus`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`),
  ADD UNIQUE KEY `id_alumno` (`id_materia`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_docente_2` (`id_docente`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_deptos` (`id_deptos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_alumno`
--
ALTER TABLE `admin_alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `admin_docente`
--
ALTER TABLE `admin_docente`
  MODIFY `id_docente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `campus`
--
ALTER TABLE `campus`
  MODIFY `id_campus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_deptos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin_alumno`
--
ALTER TABLE `admin_alumno`
  ADD CONSTRAINT `admin_alumno_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`id_campus`),
  ADD CONSTRAINT `admin_alumno_ibfk_2` FOREIGN KEY (`id_materia1`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `admin_alumno_ibfk_3` FOREIGN KEY (`id_materia2`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `admin_alumno_ibfk_4` FOREIGN KEY (`id_materia3`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `admin_alumno_ibfk_5` FOREIGN KEY (`id_materia4`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `admin_alumno_ibfk_6` FOREIGN KEY (`id_materia5`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `admin_docente`
--
ALTER TABLE `admin_docente`
  ADD CONSTRAINT `admin_docente_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`id_campus`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `admin_alumno` (`id_alumno`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`id_campus`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `admin_docente` (`id_docente`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_deptos`) REFERENCES `departamento` (`id_deptos`);

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
