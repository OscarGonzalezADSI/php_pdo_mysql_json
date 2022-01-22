-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2022 a las 11:24:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `celular` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id_medico`, `nombre`, `apellido`, `celular`) VALUES
(2, 'aaa', 'bbb', 'ccc'),
(3, 'aaa', 'bbb', 'ccc'),
(5, 'nombre', 'apellido', 'celular'),
(6, 'nombre', 'apellido', 'celular'),
(7, 'nombre', 'apellido', 'celular'),
(8, 'nombre', 'apellido', 'celular'),
(9, 'nombre', 'apellido', 'celular'),
(10, 'nombre', 'apellido', 'celular'),
(11, 'nombre', 'apellido', 'celular'),
(12, 'nombre', 'apellido', 'celular'),
(13, 'nombre', 'apellido', 'celular'),
(14, 'nombre', 'apellido', 'celular'),
(15, 'nombre', 'apellido', 'celular'),
(16, 'nombre', 'apellido', 'celular'),
(17, 'nombre', 'apellido', 'celular'),
(18, 'nombre', 'apellido', 'celular'),
(19, 'nombre', 'apellido', 'celular'),
(20, 'nombre', 'apellido', 'celular'),
(21, 'nombre', 'apellido', 'celular'),
(22, 'nombre', 'apellido', 'celular'),
(23, 'nombre', 'apellido', 'celular'),
(24, 'nombre', 'apellido', 'celular');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
