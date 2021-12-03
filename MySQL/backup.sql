-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 04:32:07
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test-js-propiedades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `PK_Condicion_ID` int UNSIGNED NOT NULL,
  `Condicion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `PK_Estado_ID` int UNSIGNED NOT NULL,
  `Estado` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE `inmueble` (
  `PK_Inmueble_ID` int UNSIGNED NOT NULL,
  `Inmueble` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `PK_Operacion_ID` int UNSIGNED NOT NULL,
  `Operacion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `PK_Propiedades_ID` int NOT NULL,
  `Nombre_propietario` varchar(64) NOT NULL,
  `Precio` int NOT NULL,
  `Direccion` varchar(128) NOT NULL,
  `Dormitorios` int NOT NULL,
  `Baños` int NOT NULL,
  `Estacionamientos` int NOT NULL,
  `Metros_Construidos` int NOT NULL,
  `Superficie_Terreno` int NOT NULL,
  `fk_inmueble` int UNSIGNED NOT NULL,
  `fk_operacion` int UNSIGNED NOT NULL,
  `fk_ubicacion` int UNSIGNED NOT NULL,
  `fk_condicion` int UNSIGNED NOT NULL,
  `fk_estado` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `PK_Ubicacion_ID` int UNSIGNED NOT NULL,
  `Ubicacion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int NOT NULL,
  `Usuario` varchar(64) NOT NULL,
  `Hashed_Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`PK_Condicion_ID`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`PK_Estado_ID`);

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`PK_Inmueble_ID`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`PK_Operacion_ID`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`PK_Propiedades_ID`),
  ADD KEY `fk_condicon_id` (`fk_condicion`),
  ADD KEY `fk_inmueble_id` (`fk_inmueble`),
  ADD KEY `fk_estado_id` (`fk_estado`),
  ADD KEY `fk_ubicacion_id` (`fk_ubicacion`),
  ADD KEY `fk_operacion_id` (`fk_operacion`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`PK_Ubicacion_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `PK_Condicion_ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `PK_Estado_ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  MODIFY `PK_Inmueble_ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `PK_Operacion_ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `PK_Propiedades_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `PK_Ubicacion_ID` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `fk_condicon_id` FOREIGN KEY (`fk_condicion`) REFERENCES `condicion` (`PK_Condicion_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_estado_id` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`PK_Estado_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_inmueble_id` FOREIGN KEY (`fk_inmueble`) REFERENCES `inmueble` (`PK_Inmueble_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_operacion_id` FOREIGN KEY (`fk_operacion`) REFERENCES `operacion` (`PK_Operacion_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_ubicacion_id` FOREIGN KEY (`fk_ubicacion`) REFERENCES `ubicacion` (`PK_Ubicacion_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
