-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2026 a las 21:10:23
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_pae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes`
--

CREATE TABLE `comprobantes` (
  `id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `creado_en` datetime NOT NULL,
  `expira_en` datetime NOT NULL,
  `usado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_usuarios`
--

CREATE TABLE `cuentas_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(60) CHARACTER SET utf8 NOT NULL,
  `cedula` int(20) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `institucion` varchar(80) NOT NULL,
  `teléfono` int(20) NOT NULL,
  `contraseña` varchar(70) NOT NULL,
  `id_registros` int(4) DEFAULT NULL,
  `rol` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas_usuarios`
--

INSERT INTO `cuentas_usuarios` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `institucion`, `teléfono`, `contraseña`, `id_registros`, `rol`) VALUES
(4, 'emanuel', 'gomez', 11, 'a@a', 'a', 123, '1', 5, 'ADP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `cedula` int(60) NOT NULL,
  `platos entregados` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `desperdicios` decimal(65,38) NOT NULL,
  `institucion` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `nombre`, `cedula`, `platos entregados`, `fecha`, `hora`, `desperdicios`, `institucion`) VALUES
(4, 'emanuel', 902920, 0, '0000-00-00', '11:13:00', '0.00000000000000000000000000000000000000', 'a'),
(5, 'emanuel', 902920, 12, '2026-09-24', '12:36:00', '1.00000000000000000000000000000000000000', ''),
(6, 'emanuel', 902920, 1111, '2026-09-07', '11:01:00', '11.00000000000000000000000000000000000000', ''),
(8, 'emanuel', 11, 11, '2026-09-15', '15:45:00', '11.00000000000000000000000000000000000000', 'a'),
(9, 'emanuel', 11, 111, '2026-09-16', '16:53:00', '0.00000000000000000000000000000000000000', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones_registradas`
--

CREATE TABLE `instituciones_registradas` (
  `id_institucion` int(11) NOT NULL,
  `nombre institucion` text NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `id_administrador` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_registros_instituciones`
--

CREATE TABLE `pre_registros_instituciones` (
  `id` int(11) NOT NULL,
  `nombre institucion` text NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `administrador_ced` int(20) NOT NULL,
  `id_institucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros usuarios`
--

CREATE TABLE `registros usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(70) CHARACTER SET utf8 NOT NULL,
  `cedula` int(20) DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `institucion` varchar(80) CHARACTER SET utf8 NOT NULL,
  `telefono` int(20) NOT NULL,
  `contraseña` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros usuarios`
--

INSERT INTO `registros usuarios` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `institucion`, `telefono`, `contraseña`) VALUES
(5, 'palo', 'ramaz', 902920, 'pablito@nimeli.com', 'juanito', 12345, 'ayudaaaaaa'),
(6, 'paloolo', 'ramaz', 90000, 'pablito@nimeli.000', 'juaolp', 12345, 'ayudaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_semanales`
--

CREATE TABLE `registros_semanales` (
  `id` int(11) NOT NULL,
  `desperdicios totales` double(65,30) NOT NULL,
  `platos entregados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indices de la tabla `cuentas_usuarios`
--
ALTER TABLE `cuentas_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_registros` (`id_registros`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instituciones_registradas`
--
ALTER TABLE `instituciones_registradas`
  ADD PRIMARY KEY (`id_institucion`),
  ADD UNIQUE KEY `id_administrador` (`id_administrador`);

--
-- Indices de la tabla `pre_registros_instituciones`
--
ALTER TABLE `pre_registros_instituciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrador ced` (`administrador_ced`),
  ADD UNIQUE KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `registros usuarios`
--
ALTER TABLE `registros usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `registros_semanales`
--
ALTER TABLE `registros_semanales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuentas_usuarios`
--
ALTER TABLE `cuentas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `instituciones_registradas`
--
ALTER TABLE `instituciones_registradas`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pre_registros_instituciones`
--
ALTER TABLE `pre_registros_instituciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros usuarios`
--
ALTER TABLE `registros usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros_semanales`
--
ALTER TABLE `registros_semanales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentas_usuarios`
--
ALTER TABLE `cuentas_usuarios`
  ADD CONSTRAINT `cuentas_usuarios_ibfk_1` FOREIGN KEY (`id_registros`) REFERENCES `registros usuarios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pre_registros_instituciones`
--
ALTER TABLE `pre_registros_instituciones`
  ADD CONSTRAINT `fk_pre_registros_instituciones` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones_registradas` (`id_institucion`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
