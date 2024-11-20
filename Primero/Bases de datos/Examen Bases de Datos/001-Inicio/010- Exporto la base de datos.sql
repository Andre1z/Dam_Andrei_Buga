-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 18:08:29
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
-- Base de datos: `examen_bd_capitulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo`
--

CREATE TABLE `capitulo` (
  `Identificador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `identificador_captitulos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `identificador` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `capitulos_experto` int(11) NOT NULL,
  `capitulos_capitulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expertos`
--

CREATE TABLE `expertos` (
  `Identificador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `identificador_capitulos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`Identificador`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`identificador`),
  ADD KEY `capitulos a capitulo` (`capitulos_capitulo`),
  ADD KEY `capitulos a expertos` (`capitulos_experto`);

--
-- Indices de la tabla `expertos`
--
ALTER TABLE `expertos`
  ADD PRIMARY KEY (`Identificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `Identificador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expertos`
--
ALTER TABLE `expertos`
  MODIFY `Identificador` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `capitulos a capitulo` FOREIGN KEY (`capitulos_capitulo`) REFERENCES `capitulo` (`Identificador`),
  ADD CONSTRAINT `capitulos a expertos` FOREIGN KEY (`capitulos_experto`) REFERENCES `expertos` (`Identificador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
