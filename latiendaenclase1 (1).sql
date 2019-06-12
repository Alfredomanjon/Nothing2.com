-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 17:39:32
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_pedido` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_detail`
--

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

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Foto` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `Descripcion` varchar(300) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `Nombre`, `Precio`, `Foto`, `Descripcion`) VALUES
(5, 'Paquete con Nada', 21, 'https://www.raimapapers.cat/7321-large_default/caja-blanca-25x28x15-hecho-a-medida.jpg', 'Una mezcla sorpresa de todos nuestros productos reunidos en un solo paquete para que los uses y disfrutes!\r\n(Paquete no incluido)'),
(6, 'Sobre de Nada', 3, 'https://http2.mlstatic.com/sobre-blanco-obra-19x24-cm-250-unidades-D_NQ_NP_960609-MLA26156014098_102017-Q.jpg', 'Sobre sorpresa que puede contener cartas de nada y/o fotos de nada, desde imagenes de ninguna comida hasta imagenes de ningun vehiculo, cualquier tipo de objeto en el que pienses, No podras verlo en esta pagina!. (No incluidas imagenes, cromos, ni sobres)'),
(7, 'Caja sorpresa de Nada', 234, 'https://kartox.com/media/catalog/product/cache/1/image/940x940/9df78eab33525d08d6e5fb8d27136e95/k/a/kartox_caja-con-solapas-blanca_1.jpg', 'En esta caja recopilamos nuestros mejores paquetes de nada, podras encontrar las ediciones: \"Nada por aqui\", \"nada que ver\" e incluso \"nada mas y nada menos\", adelante, compralo y sorprendete con una seleccion de nuestros mejores productos(Paquetes no incluidos).'),
(8, 'Camiseta \"Nothing\"', 23, 'https://tienda1.mobiliarioshunfa.com/15820-large_default/percha-blanca-de-madera-con-muescas-y-pinzas-45-cm.jpg', 'Camiseta oficial Nothing con un estampado de la marca y una divertida cara sonriente(Advertencia, no lavar, malgastara agua pues el objeto no ocupa espacio ni tiempo, percha no incluida)'),
(9, 'Movil \"Nothing\"', 34, 'https://www.movilconsolas.com/images/productos/thumbnails/ventana-tactil-samsung-galaxy-i7500-blanca-1-5484_thumb_449x449.png', 'Sofisticado dispositivo movil con la ultima tecnologia de vanguardia, disfruta del mejor sistema operativo y el mejor hardware, con las mejores aplicaciones del mercado(Ninguna)\r\n(Movil o accesorios no incluidos)'),
(10, 'Mac \"Nothing\"', 4110, 'https://files.beetstech.com/wp-content/uploads/CMP-6255-UTWx_WEB-1600x1600.jpg', 'Exclusivo Mac \"Nothing\", una edicion limitada traida en colaboracion con apple.\r\nEs el producto mas ligero sacado nunca por apple u otra marca de hardware llegando a no pesar nada(Hardware & software no incluidos)'),
(11, 'Poto de Invierno', 48, 'https://mobica.vteximg.com.br/arquivos/ids/162928-1000-1000/233A9796.jpg?v=636595881302030000\r\n\r\n', 'En Nothing.com tambien cubrimos a los clientes que aman la naturaleza.\r\nEl poto de invierno clasico ya es sencillo de por si de cuidar, pero este es incluso mas resistente y facil de cuidar.\r\n(No son necesarios agua, sol y/o oxigeno para su mantenimiento, maceta no incluida)'),
(12, 'Gafas para ninguna realidad', 341, 'https://images-na.ssl-images-amazon.com/images/I/41U1DJTueZL.jpg', 'Preparate para sumergirte en ninguna realidad, no es nada emocionante ni nuevo, pero puedes apostar a que no es peor que la realidad en la que existes ahora!(gafas y realidad no incluidas)'),
(13, 'Taza Nothing', 17, 'https://disenatutaza.com/wp-content/uploads/2016/07/taza1.jpg', 'Taza oficial del equipo Nothing, con su logo y un estampado totalmente atractivo(Taza no incluida)'),
(14, 'Adopcion Nothing', 0, 'http://tienda-online-animales.com/images_bd/collar-reflectante-rosa-para-perros000317.png', 'En Nothing.com hemos colaborado con una protectora para poder ofrecer adopciones de animales totalmente gratuitas, las mascotas que adoptes desde Nothing.com no haran ningun ruido ni mancharan de ninguna forma, y no puedes decir que no sean adorables(Collar no incluido)'),
(15, 'Hamburguesa Nothing', 8, 'https://atlas-content-cdn.pixelsquid.com/stock-images/styrofoam-to-go-box-takeaway-food-container-MNKqX46-600.jpg', 'No querras sumarle nada mas a esta hamburguesa, no le sobra ningun ingrediente, deliciosa tal y como es(envase no incluido)'),
(16, 'Agua D\' Nada', 12, 'https://solemsac.info/media/catalog/product/cache/1/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/g/n/gn-577_1.png', 'Agua fresca extraida directamente del Limpopo(Rio africano) y traido por uno de nuestros trabajadores mas preciados en la empresa, Alfredo, por tan solo 12 euros podras disfrutar del agua purificadora del Limpopo(Botella y agua no incluidas)'),
(17, 'NothingStation 6 plus', 420, 'https://pbs.twimg.com/media/D800hHAX4AAcjmD.png', 'Ya esta aqui la consola de ultima generacion, la NothingStation 6, mantiene la base de la 5 pero trae incluidas nuevas funcionalidades como el vr inmersivo o la total falta de nocion de la realidad(consola no incluida)'),
(18, 'Zapatillas Nothing', 57, 'https://images.journeys.com/images/products/1_431955_FS_WHITE_ALT1.JPG', 'Zapatillas marca Nothing, para ir mas rapido que el viento, te aseguramos que no te sentiras mas ligero con otras zapatillas, estas son las menos pesadas que encontraras en el mercado(Zapatillas y cordones no incluidos)'),
(19, 'Papel higienico', 2, 'https://previews.123rf.com/images/phanuwatnandee/phanuwatnandee1603/phanuwatnandee160300052/55439397-tubo-de-papel-de-papel-higi%C3%A9nico-aislado-en-el-fondo-blanco.jpg', 'Papel higienico Nothing, para dejar tu culete mas limpio que el de nadie, no raspa, no pica y no limpia(carton no incluido)'),
(20, 'Jabon de manos', 6, 'https://mlstaticquic-a.akamaihd.net/interdesign-eva-jabon-y-bomba-de-dispensador-de-locion-para-D_NQ_NP_704395-MLU28428471949_102018-F.jpg', 'Jabon de manos marca Nothing, no tiene nada que envidiar de otros productos de este calibre, te aseguramos que tus manos no saldran mas sucias de como llegaron(tampoco mas limpias) ahora en oferta, el segundo bote a mitad de precio(bote no incluido)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
