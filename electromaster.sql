-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2019 a las 07:03:40
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
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `ReviewID` int(10) NOT NULL,
  `SmartphoneID` int(10) NOT NULL,
  `Nombre` varchar(254) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Opinion` varchar(254) NOT NULL,
  `Calificacion` int(10) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `review`
--

INSERT INTO `review` (`ReviewID`, `SmartphoneID`, `Nombre`, `Email`, `Opinion`, `Calificacion`, `Fecha`) VALUES
(1, 1, 'Rair Santos', 'rair.nitron@gmail.com', 'Buen telefono, el mejor que he encontrado.', 0, '2019-02-25'),
(2, 1, 'Randy Santos', 'randy_chaco@hotmail.com', 'Buen producto.', 0, '2019-02-25'),
(3, 1, 'Rodrigo Uscanga', 'ruscanga@tcdigital.com', 'Buen producto, no puedo verle ningun defecto.', 0, '2019-02-25'),
(4, 1, 'John', 'jmorales@gmail.com', 'Buen producto, cumple con la mayoria de los requisitos de muchos usuarios.', 0, '2019-02-25');

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
  `descuento` double NOT NULL,
  `tipopago` int(10) NOT NULL,
  `stock` int(14) NOT NULL,
  `stars` int(10) NOT NULL,
  `estado` int(10) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `resumen` varchar(254) NOT NULL,
  `caracteristicas` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `smartphone`
--

INSERT INTO `smartphone` (`smartphoneid`, `nombre`, `marca`, `precio`, `imagenid`, `descuento`, `tipopago`, `stock`, `stars`, `estado`, `descripcion`, `resumen`, `caracteristicas`) VALUES
(1, 'iPhone XR 64G Negro', 'Apple', 20729, 'product01.png', 14510, 1, 45, 5, 1, 'La belleza de la innovación. Su revolucionaria pantalla LCD.Simplemente seguro. Descubre una nueva era en fotografía.Video 4K y reproducción de sonido estéreo más amplia. El chip A12 Bionic en acción.', 'El iPhone XR es increíble en todos los sentidos. Con el chip más inteligente y potente en un smartphone y un revolucionario sistema de cámara, es más de lo que habías soñado.', 'Pantalla: 6.1, video: 4k, operador: Telcel, tipo pantalla: ips, lcd, HD. Camara trasera: 12 mp con flash, camara frontal: 7 mp. RAM: 4 GB, Color: negro. Memoria interna: 64 gb.'),
(2, 'Galaxy A9 Azul', 'Samsung', 13659, 'product02.png', 12999, 1, 14, 4, 2, '', '', ''),
(3, 'Mate 20 Lite Azul', 'Huawei', 7199, 'product03.png', 5039, 1, 34, 4, 1, '', '', ''),
(4, 'QStylus Alpha Azul', 'LG', 6999, 'product04.png', 5769, 2, 25, 3, 1, '', '', ''),
(5, '3C Rosa', 'Alcatel', 2999, 'product05.png', 2699, 2, 7, 2, 2, '', '', ''),
(6, 'Galaxy S9', 'Samsung', 11499, 'product06.png', 10500, 2, 21, 5, 1, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscribirse`
--

CREATE TABLE `suscribirse` (
  `suscribirseid` int(10) NOT NULL,
  `email` varchar(254) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscribirse`
--

INSERT INTO `suscribirse` (`suscribirseid`, `email`, `fecha`) VALUES
(1, 'rair.nitron@gmail.com', '2019-02-26'),
(2, 'ruscanga@tcdigital.com', '2019-02-26');

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
-- Indices de la tabla `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indices de la tabla `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`smartphoneid`);

--
-- Indices de la tabla `suscribirse`
--
ALTER TABLE `suscribirse`
  ADD PRIMARY KEY (`suscribirseid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
