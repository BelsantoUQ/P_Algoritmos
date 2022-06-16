-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 04:08:59
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
('1002865124', '1002865124Guillermo Villa', 5, 0),
('1006130843', '1006130843Sergio Latorre', 1, 1),
('1006130843', '1006130843Sergio Latorre', 2, 1),
('1006130843', '1006130843Sergio latorre', 3, 1),
('1006130843', '1006130843Sergio latorre', 4, 1),
('1006130843', '1006130843Sergio latorre', 5, 1),
('1006895632', '1006895632Camila Ramirez', 1, 0),
('1006895632', '1006895632Camila Ramirez', 2, 1),
('1006895632', '1006895632Camila Ramirez', 3, 1),
('1006895632', '1006895632Camila Ramirez', 4, 1),
('1006895632', '1006895632Camila Ramirez', 5, 1),
('1010039342', '1010039342Juan Giraldo', 1, 0),
('1010039342', '1010039342Juan Giraldo', 2, 1),
('1010039342', '1010039342Juan Giraldo', 3, 1),
('1010039342', '1010039342Juan Giraldo', 4, 1),
('1010039342', '1010039342Juan Giraldo', 5, 1),
('1094875632', '1094875632Jessica Largo', 1, 1),
('1094875632', '1094875632Jessica Largo', 2, 1),
('1094875632', '1094875632Jessica Largo', 3, 1),
('1094875632', '1094875632Jessica Largo', 4, 1),
('1094875632', '1094875632Jessica Largo', 5, 1),
('1094921079', '1094921079Jessica Gomez', 1, 1),
('1094921079', '1094921079Jessica Gomez', 2, 1),
('1094921079', '1094921079Jessica Gomez', 3, 1),
('1094921079', '1094921079Jessica Gomez', 4, 1),
('1094921079', '1094921079Jessica Gomez', 5, 1),
('1094956857', '1094956857Kimberly Oliveros', 1, 0),
('1094956857', '1094956857Kimberly Oliveros', 2, 1),
('1094956857', '1094956857Kimberly Oliveros', 3, 1),
('1094956857', '1094956857Kimberly Oliveros', 4, 1),
('1094956857', '1094956857Kimberly Oliveros', 5, 1),
('1094972972', '1094972972Juan Retavisca', 1, 0),
('1094972972', '1094972972Juan Retavisca', 2, 0),
('1094972972', '1094972972Juan Retavisca', 3, 0),
('1094972972', '1094972972Juan Retavisca', 4, 0),
('1094972972', '1094972972Juan Retavisca', 5, 1),
('1099709715', '1099709715Jhonatan Zapata', 1, 1),
('1099709715', '1099709715Jhonatan Zapata', 2, 0),
('1099709715', '1099709715Jhonatan Zapata', 3, 0),
('1099709715', '1099709715Jhonatan Zapata', 4, 0),
('1099709715', '1099709715Jhonatan Zapata', 5, 0),
('1110476233', '1110476233Leidy Ospina', 1, 1),
('1110476233', '1110476233Leidy Ospina', 2, 0),
('1110476233', '1110476233Leidy Ospina', 3, 0),
('1110476233', '1110476233Leidy Ospina', 4, 0),
('1110476233', '1110476233Leidy Ospina', 5, 0),
('1110476258', '1110476258Daniel Monsalve', 1, 0),
('1110476258', '1110476258Daniel Monsalve', 2, 0),
('1110476258', '1110476258Daniel Monsalve', 3, 0),
('1110476258', '1110476258Daniel Monsalve', 4, 0),
('1110476258', '1110476258Daniel Monsalve', 5, 1),
('1234642882', '1234642882Larry Latorre', 1, 0),
('1234642882', '1234642882Larry Latorre', 2, 0),
('1234642882', '1234642882Larry Latorre', 3, 0),
('1234642882', '1234642882Larry Latorre', 4, 1),
('1234642882', '1234642882Larry Latorre', 5, 1),
('15235698', '15235698Astrid Camacho', 1, 1),
('15235698', '15235698Astrid Camacho', 2, 0),
('15235698', '15235698Astrid Camacho', 3, 0),
('15235698', '15235698Astrid Camacho', 4, 0),
('15235698', '15235698Astrid Camacho', 5, 1),
('15489263', '15489263Adriana Roncancio', 1, 1),
('15489263', '15489263Adriana Roncancio', 2, 1),
('15489263', '15489263Adriana Roncancio', 3, 0),
('15489263', '15489263Adriana Roncancio', 4, 0),
('15489263', '15489263Adriana Roncancio', 5, 0),
('24585162', '24585162Liliana Carvajal', 1, 1),
('24585162', '24585162Liliana Carvajal', 2, 1),
('24585162', '24585162Liliana Carvajal', 3, 0),
('24585162', '24585162Liliana Carvajal', 4, 0),
('24585162', '24585162Liliana Carvajal', 5, 0),
('25021268', '25021268Berenice Giraldo', 1, 0),
('25021268', '25021268Berenice Giraldo', 2, 0),
('25021268', '25021268Berenice Giraldo', 3, 0),
('25021268', '25021268Berenice Giraldo', 4, 1),
('25021268', '25021268Berenice Giraldo', 5, 1),
('41927252', '41927252Lina Castañeda', 1, 1),
('41927252', '41927252Lina Castañeda', 2, 0),
('41927252', '41927252Lina Castañeda', 3, 0),
('41927252', '41927252Lina Castañeda', 4, 0),
('41927252', '41927252Lina Castañeda', 5, 1),
('41931501', '41931501Cecilia Mora', 1, 1),
('41931501', '41931501Cecilia Mora', 2, 1),
('41931501', '41931501Cecilia Mora', 3, 0),
('41931501', '41931501Cecilia Mora', 4, 0),
('41931501', '41931501Cecilia Mora', 5, 0),
('4423854', '4423854Adrian Roman', 1, 1),
('4423854', '4423854Adrian Roman', 2, 1),
('4423854', '4423854Adrian Roman', 3, 0),
('4423854', '4423854Adrian Roman', 4, 0),
('4423854', '4423854Adrian Roman', 5, 0),
('456789', '456789Humberto Calle', 1, 1),
('456789', '456789Humberto Calle', 2, 0),
('456789', '456789Humberto Calle', 3, 0),
('456789', '456789Humberto Calle', 4, 1),
('456789', '456789Humberto Calle', 5, 0),
('45896325', '45896325Camilo Betancour', 1, 0),
('45896325', '45896325Camilo Betancour', 2, 1),
('45896325', '45896325Camilo Betancour', 3, 1),
('45896325', '45896325Camilo Betancour', 4, 0),
('45896325', '45896325Camilo Betancour', 5, 0);

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
('1006130843Sergio Latorre', 5, 1, 2, 3),
('1006895632Camila Ramirez', 4, 1, 2, 3),
('1010039342Juan Giraldo', 4, 1, 2, 3),
('1058974562OtoÃ±o delVerani', 1, 4, 4, 3),
('1094875632Jessica Largo', 5, 1, 2, 3),
('1094921079Jessica Gomez', 5, 1, 2, 3),
('1094956857Kimberly Oliveros', 4, 1, 2, 3),
('1094971551Santiago Velandia', 5, 5, 2, 5),
('1094972972Juan Retavisca', 1, 1, 2, 3),
('1095685471Alberto Casablanca', 3, 4, 3, 3),
('1099709715Jhonatan Zapata', 1, 1, 2, 3),
('1110476233Leidy Ospina', 1, 1, 2, 3),
('1110476258Daniel Monsalve', 1, 1, 2, 3),
('12345Elver Gomez', 2, 3, 4, 5),
('1234642882Larry Latorre', 2, 1, 2, 3),
('15235698Astrid Camacho', 2, 1, 2, 3),
('15489263Adriana Roncancio', 2, 1, 2, 3),
('24585162Liliana Carvajal', 2, 1, 2, 3),
('25021268Berenice Giraldo', 2, 1, 2, 3),
('41927252Lina Castañeda', 2, 1, 2, 3),
('41931501Cecilia Mora', 2, 1, 2, 3),
('4423854Adrian Roman', 2, 1, 2, 3),
('456789Humberto Calle', 2, 1, 2, 3),
('45896325Camilo Betancour', 2, 1, 2, 3),
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
('1006130843', 'Sergio Latorre', 'sergioe@gmail.com'),
('1006895632', 'Camila Ramirez', 'camila12@gmail.com'),
('1010039342', 'Juan Giraldo', 'juagiraldo@gmail.com'),
('1058974562', 'OtoÃ±o delVerani', 'verano@gmail.com'),
('1094875632', 'Jessica Largo', 'jessi@gmail.com'),
('1094921079', 'Jessica Gomez', 'jessik@hotmail.com'),
('1094956857', 'Kimberly Oliveros', 'kimberlyo@gmail.com'),
('1094971551', 'Santiago Velandia', 'b.elsanto182@gmail.com'),
('1094972972', 'Juan Retavisca', 'amby012@gmail.com'),
('1095685471', 'Alberto Casablanca', 'alca@gmail.com'),
('1099709715', 'Jhonatan Zapata', 'Jhonathanzapa@gmail.com'),
('1110476233', 'Leidy Ospina', 'leidy17@gmail.com'),
('1110476258', 'Daniel Monsalve', 'danieMonsalve@gmail.com'),
('12345', 'Elver Gomez', 'torba@gmail.com'),
('1234642882', 'Larry Latorre', 'larry@gmail.com'),
('15235698', 'Astrid Camacho', 'astridcama@gmail.com'),
('15489263', 'Adriana Roncancio', 'adrironca@hotmail.com'),
('24585162', 'Liliana Carvajal', 'lilicarvajal@hotmail.com'),
('25021268', 'Berenice Giraldo', 'berenais@gmail.com'),
('41927252', 'Lina Castañeda', 'lina@gmail.com'),
('41931501', 'Cecilia Mora', 'ceci2586@gmail.com'),
('4423854', 'Adrian Roman', 'ADRIANROMAN@GMAIL.COM'),
('456789', 'Humberto Calle', 'Humbert654@gmail.com'),
('45896325', 'Camilo Betancour', 'camilob@hotmail.com'),
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
