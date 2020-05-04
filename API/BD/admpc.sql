-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2020 a las 13:15:36
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admpc`
--
CREATE SCHEMA IF NOT EXISTS `admpc` DEFAULT CHARACTER SET utf8 ;
USE `admpc` ;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `nombreImg` text NOT NULL,
  `estatus` int(11) NOT NULL COMMENT '0 = act\n1 = inactivo',
  `posicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `nombreImg`, `estatus`, `posicion`) VALUES
(45, 'ad6ca6ba7086646717a7a67fc8534c3794a392d4first.jpg', 0, 1),
(46, 'bced24ecb188d2c562a2dde5c035bfecc56e4615fourth.jpg', 0, 2),
(47, '390d8ee57f532d5fb5f502f3e4c524760044807asecond.jpg', 0, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlaces`
--

CREATE TABLE `enlaces` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enlaces`
--

INSERT INTO `enlaces` (`id`, `link`, `img`, `estatus`) VALUES
(2, 'https://www.facebook.com/TODOPCCOMPUTADORAS/', '110470a640f4c541299ec217e8cbfcba004a3f42todopc.png', 0),
(3, 'https://www.facebook.com/pc.cel.total.mx/', '43a0aabded021cb425bdc3f8f737de75637be30fceltotal.png', 0),
(4, 'https://www.facebook.com/MEGADULCERIASOTRES/', 'a3aacfd4c04d143247771e2680231eb1feaf20bdsotres.png', 0),
(5, 'https://www.facebook.com/TODOPCCOMPUTADORAS/', 'adc6a3b9dc4be0dd818699e59e30b0d123226249ranci.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `img`, `estatus`) VALUES
(4, '81d302aab45c16ccd7a2012768e045cca4aa52d420170220_134513.jpg', 0),
(5, '4da38c3d349e004a0fdab0673e041ad501f6fa9420170221_120104.jpg', 0),
(6, '09f0519ecf1cf552850b3d356cf36a445c3e374420170220_134913.jpg', 0),
(7, 'ffb0ef0b976f526cf994a8750344a3690f76d18f20170220_134922.jpg', 0),
(8, '142c1c4fcdd3e5076c60f367f56b8dacff783e8920170311_111900.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `img` text NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `titulo`, `img`, `estatus`) VALUES
(3, 'Cel total', 'celtotal.png', 0),
(4, 'anuncio', 'celtotal.png', 1),
(6, 'Anuncio representativo', '19983eac8498b068b703d67c3e94922c89f14746007a45dd07f5acb26312d74b6d1fc73aafcfff589186603c6d5aa8d23987fa158ae3da26f58a8a0a9294940ea5335547068adf59ac07a759e9235437background-01-1920x310.jpg', 0),
(7, 'sotres.com', '814d72232a54e86910747520b39406c9f4d872bcsotres.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `celular` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `img`, `celular`, `telefono`, `email`, `estatus`) VALUES
(2, '7e4c7649451e6af73b73a01b2ba7d80ea36e17eeesperanza.jpg', '6122587878', '6122587878', 'todopc@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `imgTienda` text NOT NULL,
  `imgMapa` text NOT NULL,
  `direccion` text NOT NULL,
  `contacto` text NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `imgTienda`, `imgMapa`, `direccion`, `contacto`, `estatus`) VALUES
(7, 'cbf9ce22976012da53afa12928ba60229d01491aubicacion1.jpg', 'cbf9ce22976012da53afa12928ba60229d01491amapa1.jpg', 'Jalisco S/N e/ Meliton Albañez y Alvarez Rico, Col. Indeco, CP 23070', 'Matriz (612) 12 8 62 10', 0),
(8, '959b6e3e1eabb64cbe6511bdd572c59e630bdc48ubicacion2.jpg', '959b6e3e1eabb64cbe6511bdd572c59e630bdc48mapa2.jpg', 'Calzada Camino Real e/Salmon y Ocre interior de Mega Sotres 6 , Col. Camino Real, CP 23088', 'Sucursal Camino Real (612) 11 4 96 44', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(199) NOT NULL,
  `correo` varchar(199) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'Administrador', 'todopc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enlaces`
--
ALTER TABLE `enlaces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `enlaces`
--
ALTER TABLE `enlaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
