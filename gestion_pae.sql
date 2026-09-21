-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2026 a las 23:36:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_usuarios`
--

CREATE TABLE `cuentas_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cedula` int(20) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `institucion` varchar(80) NOT NULL,
  `telefono` int(20) NOT NULL,
  `contraseña` varchar(70) NOT NULL,
  `rol` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas_usuarios`
--

INSERT INTO `cuentas_usuarios` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `institucion`, `telefono`, `contraseña`, `rol`) VALUES
(4, 'emanuel', 'gomez', 11, 'a@a', 'a', 123, '1', 'ADP'),
(5, 'e', 'e', 1010, 'e@e', 'g', 333, '1', ''),
(6, 'Juan', 'mesa', 1010, 'juan@1', 'jorge', 333, '1020', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cedula` int(60) NOT NULL,
  `platos entregados` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `desperdicios` decimal(65,38) NOT NULL,
  `institucion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `platos_enviados` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `nombre`, `cedula`, `platos entregados`, `fecha`, `hora`, `desperdicios`, `institucion`, `platos_enviados`) VALUES
(4, 'emanuel', 902920, 0, '0000-00-00', '11:13:00', 0.00000000000000000000000000000000000000, 'a', 0),
(5, 'emanuel', 902920, 12, '2026-09-24', '12:36:00', 1.00000000000000000000000000000000000000, 'a', 0),
(6, 'emanuel', 902920, 1111, '2026-09-07', '11:01:00', 11.00000000000000000000000000000000000000, 'a', 0),
(8, 'emanuel', 11, 11, '2026-09-15', '15:45:00', 11.00000000000000000000000000000000000000, 'a', 0),
(9, 'emanuel', 11, 111, '2026-09-16', '16:53:00', 0.00000000000000000000000000000000000000, 'a', 0),
(10, 'emanuel', 11, 45, '2020-09-22', '13:02:00', 66.00000000000000000000000000000000000000, 'a', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones_registradas`
--

CREATE TABLE `instituciones_registradas` (
  `id_institucion` int(11) NOT NULL,
  `nombre institucion` text NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `id_administrador` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros usuarios`
--

CREATE TABLE `registros usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cedula` int(20) DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `institucion` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `contraseña` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros usuarios`
--

INSERT INTO `registros usuarios` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `institucion`, `telefono`, `contraseña`) VALUES
(5, 'palo', 'ramaz', 902920, 'pablito@nimeli.com', 'juanito', 12345, 'ayudaaaaaa'),
(6, 'paloolo', 'ramaz', 90000, 'pablito@nimeli.000', 'juaolp', 12345, 'ayudaaaaaa'),
(7, '', '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_semanales`
--

CREATE TABLE `registros_semanales` (
  `id` int(11) NOT NULL,
  `desperdicios_totales` double(65,30) NOT NULL,
  `platos_entregados_totales` int(20) NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `platos_enviados` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros_semanales`
--

INSERT INTO `registros_semanales` (`id`, `desperdicios_totales`, `platos_entregados_totales`, `fecha_inicial`, `fecha_final`, `platos_enviados`) VALUES
(1, 90.000000000000000000000000000000, 1290, '2026-09-07', '2026-09-24', 0);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registros_semanales`
--
ALTER TABLE `registros_semanales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pre_registros_instituciones`
--
ALTER TABLE `pre_registros_instituciones`
  ADD CONSTRAINT `fk_pre_registros_instituciones` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones_registradas` (`id_institucion`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
