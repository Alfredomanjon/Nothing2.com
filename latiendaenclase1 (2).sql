-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2019 a las 12:02:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `latiendaenclase1`
--
CREATE DATABASE IF NOT EXISTS `latiendaenclase1` DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish_ci;
USE `latiendaenclase1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `Id_pedido` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_detail`
--

DROP TABLE IF EXISTS `pedidos_detail`;
CREATE TABLE `pedidos_detail` (
  `Id_localizador` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Foto` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `Nombre`, `Precio`, `Foto`) VALUES
(5, 'Paquete de Nada 1', 21, 'https://www.raimapapers.cat/7321-large_default/caja-blanca-25x28x15-hecho-a-medida.jpg'),
(6, 'Sobre de Nada', 3, 'https://http2.mlstatic.com/sobre-blanco-obra-19x24-cm-250-unidades-D_NQ_NP_960609-MLA26156014098_102017-Q.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nick` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `Password` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `Nombre` varchar(25) COLLATE utf16_spanish_ci DEFAULT NULL,
  `Apellido` varchar(35) COLLATE utf16_spanish_ci DEFAULT NULL,
  `Correo` varchar(30) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nick`, `Password`, `Nombre`, `Apellido`, `Correo`) VALUES
(1, 'Alfred', '1234', 'Alfredo', 'Manjon', 'Hola@gmail.com'),
(2, 'Paco', '4321', 'Paco', 'Palotes', 'PalotePaco@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_pedido`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `pedidos_detail`
--
ALTER TABLE `pedidos_detail`
  ADD PRIMARY KEY (`Id_localizador`),
  ADD KEY `productos` (`id_producto`),
  ADD KEY `pedidos` (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos_detail`
--
ALTER TABLE `pedidos_detail`
  MODIFY `Id_localizador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`Id_pedido`) REFERENCES `pedidos_detail` (`id_pedido`);

--
-- Filtros para la tabla `pedidos_detail`
--
ALTER TABLE `pedidos_detail`
  ADD CONSTRAINT `pedidos_detail_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
