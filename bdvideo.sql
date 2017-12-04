-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 23:28:44
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdvideo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `idalbum` int(11) NOT NULL,
  `nombrealbum` varchar(50) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `valor` double NOT NULL,
  `iddisquera` int(11) NOT NULL,
  `idartista` int(11) NOT NULL,
  `portada` varchar(100) NOT NULL DEFAULT 'img/compositor.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`idalbum`, `nombrealbum`, `anio`, `valor`, `iddisquera`, `idartista`, `portada`) VALUES
(1, 'ALBUM DARK FEST 2017', '2010', 50, 1, 1, 'img/compositor.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `idartista` int(11) NOT NULL,
  `nombreartista` varchar(50) NOT NULL,
  `apellidoartista` varchar(50) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `fechanac` date NOT NULL,
  `portada` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`idartista`, `nombreartista`, `apellidoartista`, `nacionalidad`, `fechanac`, `portada`) VALUES
(1, 'juan', 'perez', 'peru', '1995-01-05', 'img/artista2.jpg'),
(2, 'Julio', 'Melendez', 'Peru', '2017-12-08', 'img/artista2.jpg'),
(3, 'Julio', 'Garcia', 'Peru', '2009-02-04', 'img/title-1024x638.png'),
(4, 'Julio', 'Perez', 'Peru', '2012-02-02', 'img/artistaxd.png'),
(5, 'Julio', 'Perze', 'Peru', '2009-03-12', 'img/phone-1814604_1920.jpg'),
(6, 'Julio', 'Chavez', 'Peru', '2017-12-07', 'img/artista2.jpg'),
(7, 'Julio', 'xD', 'Peru', '1990-12-04', 'img/artistaxd.png'),
(8, 'Julio', 'adad', 'Peru', '1995-03-02', 'img/phone-1814604_1920.jpg'),
(9, 'artistaxd', 'artistaxd', 'Peru', '2017-12-04', 'img/title-1024x638.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `idcancion` int(11) NOT NULL,
  `idalbum` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disquera`
--

CREATE TABLE `disquera` (
  `iddisquera` int(11) NOT NULL,
  `nomdisquera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disquera`
--

INSERT INTO `disquera` (`iddisquera`, `nomdisquera`) VALUES
(1, 'disquera NACIONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idevento` int(11) NOT NULL,
  `nomevento` varchar(200) NOT NULL,
  `fechaevento` date NOT NULL,
  `estadoevento` int(11) NOT NULL,
  `portada` varchar(100) NOT NULL,
  `idartista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idevento`, `nomevento`, `fechaevento`, `estadoevento`, `portada`, `idartista`) VALUES
(1, 'EVENTO MUSIC FEST 2017', '2017-12-31', 1, 'img/wallmusic.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombrerol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `idrol` int(11) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `login`, `pass`, `idrol`, `activo`) VALUES
(1, 'eladmin', 'eladmin123456', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idalbum`,`idartista`,`iddisquera`) USING BTREE,
  ADD KEY `idartista` (`idartista`) USING BTREE,
  ADD KEY `iddisquera` (`iddisquera`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idartista`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`idcancion`,`idalbum`) USING BTREE,
  ADD KEY `idalbum` (`idalbum`);

--
-- Indices de la tabla `disquera`
--
ALTER TABLE `disquera`
  ADD PRIMARY KEY (`iddisquera`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`,`idartista`) USING BTREE,
  ADD KEY `idartista` (`idartista`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idrol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `idalbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `idartista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `idcancion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `disquera`
--
ALTER TABLE `disquera`
  MODIFY `iddisquera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`idartista`) REFERENCES `artista` (`idartista`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`iddisquera`) REFERENCES `disquera` (`iddisquera`);

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `cancion_ibfk_1` FOREIGN KEY (`idalbum`) REFERENCES `album` (`idalbum`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`idartista`) REFERENCES `artista` (`idartista`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
