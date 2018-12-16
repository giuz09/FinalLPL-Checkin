-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2018 a las 18:48:56
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdcheckin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviones`
--

CREATE TABLE IF NOT EXISTS `aviones` (
  `idAvion` int(11) NOT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `matricula` char(8) DEFAULT NULL,
  `filas` int(50) DEFAULT NULL,
  `butacasFila` int(10) DEFAULT NULL,
  PRIMARY KEY (`idAvion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aviones`
--

INSERT INTO `aviones` (`idAvion`, `fabricante`, `modelo`, `matricula`, `filas`, `butacasFila`) VALUES
(0, 'Embraer', 'E-190', ' LV-CDI', 4, 29),
(1, 'Embraer', 'E-190', ' LV-CDZ', 4, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajeros`
--

CREATE TABLE IF NOT EXISTS `pasajeros` (
  `idPasajero` int(11) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `documento` int(8) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  PRIMARY KEY (`idPasajero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasajeros`
--

INSERT INTO `pasajeros` (`idPasajero`, `apellido`, `nombres`, `documento`, `correo`, `telefono`) VALUES
(1, 'Moreno', 'Lia', 39100130, 'liamoreno@gmail.com', 297483647),
(2, 'Cerutti', 'Alanna', 40140140, 'alannaprogramacion@gmail.com', 280969696),
(3, 'Cerutti', 'Rodrigo', 38147147, 'rodrigoCerutti@gmail.com', 297145123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajerosvuelos`
--

CREATE TABLE IF NOT EXISTS `pasajerosvuelos` (
  `fila` char(2) DEFAULT '0',
  `butaca` int(100) DEFAULT '0',
  `idVuelo` int(11) NOT NULL DEFAULT '0',
  `idPasajero` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idVuelo`,`idPasajero`),
  KEY `FK_Pasajero` (`idPasajero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasajerosvuelos`
--

INSERT INTO `pasajerosvuelos` (`fila`, `butaca`, `idVuelo`, `idPasajero`) VALUES
('C', 2, 1, 1),
('B', 14, 1, 2),
('A', 10, 1, 3),
('0', 0, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE IF NOT EXISTS `vuelos` (
  `idVuelo` int(11) NOT NULL,
  `numero` int(4) DEFAULT NULL,
  `origen` char(3) DEFAULT NULL,
  `destino` char(3) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horaSalida` time DEFAULT NULL,
  `horaLlegada` time DEFAULT NULL,
  `idAvion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVuelo`),
  KEY `FK_Avion` (`idAvion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`idVuelo`, `numero`, `origen`, `destino`, `fecha`, `horaSalida`, `horaLlegada`, `idAvion`) VALUES
(1, 2831, 'CRD', 'NQN', '2018-12-14', '17:00:00', '19:15:00', 0),
(2, 2843, 'CRD', 'NQN', '2018-12-20', '09:05:00', '10:30:00', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pasajerosvuelos`
--
ALTER TABLE `pasajerosvuelos`
  ADD CONSTRAINT `FK_Pasajero` FOREIGN KEY (`idPasajero`) REFERENCES `pasajeros` (`idPasajero`),
  ADD CONSTRAINT `FK_Vuelo` FOREIGN KEY (`idVuelo`) REFERENCES `vuelos` (`idVuelo`);

--
-- Filtros para la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD CONSTRAINT `FK_Avion` FOREIGN KEY (`idAvion`) REFERENCES `aviones` (`idAvion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
