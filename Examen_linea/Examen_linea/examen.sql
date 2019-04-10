-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2019 a las 05:31:36
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `apellidop` varchar(150) DEFAULT NULL,
  `apellidom` varchar(150) DEFAULT NULL,
  `matricula` varchar(15) DEFAULT NULL,
  `carrera` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Id`, `nombre`, `apellidop`, `apellidom`, `matricula`, `carrera`) VALUES
(1, 'Eduardo', 'Lopez', 'capu', '', NULL),
(2, 'Eduardo', 'Lopez', 'Capulin', '316030009', 'IngenierÃ­a en Redes y Telecomunicaciones'),
(3, 'Carlos', 'Rubi ', 'Ramirez', '316030019', 'IngenierÃ­a en PlÃ¡sticos y PolÃ­meros'),
(4, 'Diego', 'Pizano', 'Cano', '123456', 'IngenierÃ­a en Sistemas Automotrices'),
(5, '', '', '', '', 'Elegir una opciÃ³n...'),
(6, 'Eduardo', 'Torres', 'Garcia', '316030019', 'IngenierÃ­a en Manufactura Avanzada'),
(7, 'dfg', 'dg', 'gdfg', '316030009', 'IngenierÃ­a Financiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) DEFAULT NULL,
  `contraseña` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

