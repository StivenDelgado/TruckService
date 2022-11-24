-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 22:55:08
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `truckservice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `cedula` int(10) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `dir` varchar(20) DEFAULT NULL,
  `Num_licencia` int(10) DEFAULT NULL,
  `contacto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nit` int(20) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `dir` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `cedula` int(10) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `dir` varchar(15) DEFAULT NULL,
  `contacto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` varchar(10) DEFAULT NULL,
  `numero` int(20) DEFAULT NULL,
  `fecha` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placa` varchar(10) DEFAULT NULL,
  `marca` varchar(15) DEFAULT NULL,
  `modelo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
