-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2019 a las 07:14:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electromaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `smartphone`
--

CREATE TABLE `smartphone` (
  `smartphoneid` int(10) NOT NULL,
  `nombre` varchar(254) NOT NULL,
  `marca` varchar(254) NOT NULL,
  `precio` double NOT NULL,
  `imagenid` varchar(254) NOT NULL,
  `descuento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `smartphone`
--

INSERT INTO `smartphone` (`smartphoneid`, `nombre`, `marca`, `precio`, `imagenid`, `descuento`) VALUES
(1, 'iPhone XR 64G Negro', 'Apple', 20729, 'product01.png', 30),
(2, 'Galaxy A9 Azul', 'Samsung', 13659, 'product02.png', 0),
(3, 'Mate 20 Lite Azul', 'Huawei', 7199, 'product03.png', 30),
(4, 'QStylus Alpha Azul', 'LG', 699, 'product04.png', 0),
(5, '3C Rosa', 'Alcatel', 2999, 'product05.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioid` int(10) NOT NULL,
  `nombre` varchar(254) NOT NULL,
  `apellido` varchar(254) NOT NULL,
  `tipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioid`, `nombre`, `apellido`, `tipo`) VALUES
(1, 'Rodrigo', 'Uscanga', 1),
(2, 'Cliente', 'Comprar', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ventaid` int(11) NOT NULL,
  `nombre` varchar(254) NOT NULL,
  `apellido` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `direccion` varchar(254) NOT NULL,
  `ciudad` varchar(254) NOT NULL,
  `pais` varchar(254) NOT NULL,
  `codigopostal` int(10) NOT NULL,
  `telefono` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`smartphoneid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
