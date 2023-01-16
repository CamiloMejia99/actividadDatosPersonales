-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2023 a las 21:42:23
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
-- Base de datos: `usuariobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` varchar(20) COLLATE utf8_bin NOT NULL,
  `primerNombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `segundoNombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `primerApellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `segundoApellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `edad` int(100) NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_bin NOT NULL,
  `barrio` varchar(100) COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` int(10) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `edad`, `ciudad`, `barrio`, `correo`, `telefono`, `fechaNacimiento`) VALUES
('123', 'Iván', 'Camilo', 'Mejia', 'Parra', 23, 'Ipiales', '', '', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
