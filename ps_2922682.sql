-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2024 a las 18:41:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ps_2922682`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yamahamotocicleta`
--

CREATE TABLE `yamahamotocicleta` (
  `id` int(11) NOT NULL,
  `chasisNum` bigint(11) DEFAULT NULL,
  `modelo` varchar(10) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `kilometraje` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `yamahamotocicleta`
--

INSERT INTO `yamahamotocicleta` (`id`, `chasisNum`, `modelo`, `anio`, `color`, `kilometraje`) VALUES
(1, 2147483647, '12345', 12345, '12345', 2147483647),
(3, 234, '234', 234, '234', 234),
(4, 2147483647, '22', 22, '22', 2147483647),
(7, 13213213, 'YZF-01', 2002, 'Negro', 13213),
(8, 21312, 'YZF-01', 2002, 'Azul', 15000),
(13, 213, '213', 123, 'Rojo', 123),
(14, 123, '123', 123, 'Amarillo', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `yamahamotocicleta`
--
ALTER TABLE `yamahamotocicleta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `yamahamotocicleta`
--
ALTER TABLE `yamahamotocicleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
