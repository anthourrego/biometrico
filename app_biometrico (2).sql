-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2021 a las 02:14:02
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_biometrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huellas`
--

CREATE TABLE `huellas` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre_dedo` varchar(20) DEFAULT NULL,
  `huella` longblob DEFAULT NULL,
  `imgHuella` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huellas_temp`
--

CREATE TABLE `huellas_temp` (
  `id` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pc_serial` varchar(100) NOT NULL,
  `imgHuella` longblob DEFAULT NULL,
  `huella` longblob DEFAULT NULL,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `texto` varchar(100) DEFAULT NULL,
  `statusPlantilla` varchar(100) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `dedo` varchar(20) DEFAULT NULL,
  `opc` varchar(20) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `estado_lector` varchar(20) NOT NULL DEFAULT 'inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `nombre_completo` varchar(200) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_crecion` timestamp NULL DEFAULT NULL,
  `pc_serial` varchar(100) DEFAULT NULL,
  `foto` longblob DEFAULT NULL,
  `ext` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `huellas`
--
ALTER TABLE `huellas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `huellas_temp`
--
ALTER TABLE `huellas_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `huellas`
--
ALTER TABLE `huellas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `huellas_temp`
--
ALTER TABLE `huellas_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
