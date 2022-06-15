-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 23:50:32
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `analisis_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalletest`
--

CREATE TABLE `detalletest` (
  `cedulaUsuario` varchar(110) NOT NULL,
  `codigoTest` varchar(150) NOT NULL,
  `numeroPrueba` int(11) NOT NULL,
  `superado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalletest`
--

INSERT INTO `detalletest` (`cedulaUsuario`, `codigoTest`, `numeroPrueba`, `superado`) VALUES
('1095685471', '1095685471Alberto Casablanca', 1, 0),
('1095685471', '1095685471Alberto Casablanca', 2, 1),
('1095685471', '1095685471Alberto Casablanca', 3, 1),
('1095685471', '1095685471Alberto Casablanca', 4, 0),
('1095685471', '1095685471Alberto Casablanca', 5, 1),
('1094971551', '1094971551Santiago Velandia', 1, 1),
('1094971551', '1094971551Santiago Velandia', 2, 1),
('1094971551', '1094971551Santiago Velandia', 3, 1),
('1094971551', '1094971551Santiago Velandia', 4, 1),
('1094971551', '1094971551Santiago Velandia', 5, 1),
('12345', '12345Elver Gomez', 1, 0),
('12345', '12345Elver Gomez', 2, 1),
('12345', '12345Elver Gomez', 3, 0),
('12345', '12345Elver Gomez', 4, 0),
('12345', '12345Elver Gomez', 5, 1),
('1058974562', '1058974562OtoÃ±o delVerani', 1, 0),
('1058974562', '1058974562OtoÃ±o delVerani', 2, 1),
('1058974562', '1058974562OtoÃ±o delVerani', 3, 0),
('1058974562', '1058974562OtoÃ±o delVerani', 4, 0),
('1058974562', '1058974562OtoÃ±o delVerani', 5, 0),
('95473726', '95473726Dario Gomez', 1, 1),
('95473726', '95473726Dario Gomez', 2, 0),
('95473726', '95473726Dario Gomez', 3, 0),
('95473726', '95473726Dario Gomez', 4, 0),
('95473726', '95473726Dario Gomez', 5, 0),
('1002865124', '1002865124Guillermo Villa', 1, 0),
('1002865124', '1002865124Guillermo Villa', 2, 1),
('1002865124', '1002865124Guillermo Villa', 3, 1),
('1002865124', '1002865124Guillermo Villa', 4, 1),
('1002865124', '1002865124Guillermo Villa', 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `codigo` varchar(150) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `preg1` int(11) NOT NULL,
  `preg2` int(11) NOT NULL,
  `preg3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`codigo`, `calificacion`, `preg1`, `preg2`, `preg3`) VALUES
('1002865124Guillermo Villa', 3, 4, 3, 5),
('1058974562OtoÃ±o delVerani', 1, 4, 4, 3),
('1094971551Santiago Velandia', 5, 5, 2, 5),
('1095685471Alberto Casablanca', 3, 4, 3, 3),
('12345Elver Gomez', 2, 3, 4, 5),
('95473726Dario Gomez', 1, 4, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` varchar(110) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `email`) VALUES
('1002865124', 'Guillermo Villa', 'vigue@gmail.com'),
('1058974562', 'OtoÃ±o delVerani', 'verano@gmail.com'),
('1094971551', 'Santiago Velandia', 'b.elsanto182@gmail.com'),
('1095685471', 'Alberto Casablanca', 'alca@gmail.com'),
('12345', 'Elver Gomez', 'torba@gmail.com'),
('95473726', 'Dario Gomez', 'Darigo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalletest`
--
ALTER TABLE `detalletest`
  ADD KEY `cedulaUsuario` (`cedulaUsuario`),
  ADD KEY `codigoTest` (`codigoTest`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalletest`
--
ALTER TABLE `detalletest`
  ADD CONSTRAINT `detalletest_ibfk_1` FOREIGN KEY (`codigoTest`) REFERENCES `test` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalletest_ibfk_2` FOREIGN KEY (`cedulaUsuario`) REFERENCES `usuario` (`cedula`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
