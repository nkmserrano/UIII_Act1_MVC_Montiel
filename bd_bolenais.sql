-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 21:31:06
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_bolenais`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_boleto`
--

CREATE TABLE `tbl_boleto` (
  `id_boleto` int(11) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `fila` varchar(5) NOT NULL,
  `asiento` varchar(5) NOT NULL,
  `artista` varchar(70) NOT NULL,
  `ciudad` varchar(70) NOT NULL,
  `lugar` varchar(70) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `codigo` int(10) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_boleto`
--

INSERT INTO `tbl_boleto` (`id_boleto`, `seccion`, `fila`, `asiento`, `artista`, `ciudad`, `lugar`, `dia`, `hora`, `codigo`, `precio`) VALUES
(1, 'General B', 'NA1', '15', 'Harry Styles', 'CDMX', 'Estadio Azteca', '2023-11-24', '19:26:00', 1032746580, '1200.00'),
(2, 'General A', 'CI1', '50', 'Taylor Swift', 'CDMX', 'Foro Sol', '2023-11-17', '20:33:00', 2147483647, '3000.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_boleto`
--
ALTER TABLE `tbl_boleto`
  ADD PRIMARY KEY (`id_boleto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_boleto`
--
ALTER TABLE `tbl_boleto`
  MODIFY `id_boleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
