-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2026 a las 00:38:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
  `cuenta_id` int(11) NOT NULL,
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
  `teléfono` int(20) NOT NULL,
  `contraseña` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas_usuarios`
--

INSERT INTO `cuentas_usuarios` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `institucion`, `teléfono`, `contraseña`) VALUES
(1, 'emanuel', 'koo', 902920, 'emanuelgomezch8@gmail.com', 'a', 33333, '1234'),
(2, 'juan', 'lol', 224466, 'juan@gmail.com', 'a', 33333, 'juangod');

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
  `institucion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `nombre`, `cedula`, `platos entregados`, `fecha`, `hora`, `desperdicios`, `institucion`) VALUES
(3, 'emanuel', 902920, 11111, '2026-09-10', '03:08:00', 0.00000000000000000000000000000000000000, 'a'),
(4, 'emanuel', 902920, 0, '0000-00-00', '11:13:00', 0.00000000000000000000000000000000000000, 'a'),
(5, 'emanuel', 902920, 12, '2026-09-24', '12:36:00', 1.00000000000000000000000000000000000000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones_registradas`
--

CREATE TABLE `instituciones_registradas` (
  `id institucion` int(11) NOT NULL,
  `nombre institucion` text NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `administrador ced` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_registros_instituciones`
--

CREATE TABLE `pre_registros_instituciones` (
  `id` int(11) NOT NULL,
  `nombre institucion` text NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `administrador ced` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros usuarios`
--

CREATE TABLE `registros usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cedula` int(20) NOT NULL,
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
(6, 'paloolo', 'ramaz', 90000, 'pablito@nimeli.000', 'juaolp', 12345, 'ayudaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_semanales`
--

CREATE TABLE `registros_semanales` (
  `id` int(11) NOT NULL,
  `fechas` date NOT NULL,
  `desperdicios totales` double(65,30) NOT NULL,
  `platos entregados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instituciones_registradas`
--
ALTER TABLE `instituciones_registradas`
  ADD PRIMARY KEY (`id institucion`),
  ADD UNIQUE KEY `administrador ced` (`administrador ced`);

--
-- Indices de la tabla `pre_registros_instituciones`
--
ALTER TABLE `pre_registros_instituciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrador ced` (`administrador ced`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fecha inicial` (`fechas`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `instituciones_registradas`
--
ALTER TABLE `instituciones_registradas`
  MODIFY `id institucion` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
