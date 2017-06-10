-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2017 a las 07:19:00
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base.sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `ciadministrador` int(11) NOT NULL,
  `grado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajasuspencion`
--

CREATE TABLE `bajasuspencion` (
  `cibajaadministrador` int(11) NOT NULL,
  `idbajapublicacion` int(11) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariopermuta`
--

CREATE TABLE `comentariopermuta` (
  `permutaid` int(11) NOT NULL,
  `idcompermuta` int(11) NOT NULL,
  `cicomperpersona` int(11) NOT NULL,
  `comentarioper` varchar(500) DEFAULT NULL,
  `fechacomper` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariopublicacion`
--

CREATE TABLE `comentariopublicacion` (
  `idcompublicacion` int(11) NOT NULL,
  `cicompersona` int(11) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentariopublicacion`
--

INSERT INTO `comentariopublicacion` (`idcompublicacion`, `cicompersona`, `comentario`, `fecha`) VALUES
(204, 456789890, 'jejejeje', '2017-06-10 01:48:49'),
(207, 23786548, 'sepalo', '2017-06-10 01:43:44'),
(207, 456789890, 'asdasdasd', '2017-06-10 01:48:34'),
(208, 23786548, 'autito siii', '2017-06-10 00:00:00'),
(208, 23786548, 'sabpee', '2017-06-10 00:59:56'),
(208, 23786548, 'xdxdxddx', '2017-06-10 01:02:27'),
(208, 456789890, 'prueba', '2017-06-10 01:51:02'),
(209, 23786548, 'xdxdxdxdxd', '2017-06-10 01:39:50'),
(209, 23786548, 'sepalo', '2017-06-10 01:40:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariosubasta`
--

CREATE TABLE `comentariosubasta` (
  `idcomsubpublicacion` int(11) NOT NULL,
  `cicomsubpersona` int(11) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariovendecompra`
--

CREATE TABLE `comentariovendecompra` (
  `idcomvenpublicacion` int(11) NOT NULL,
  `cicomvenpersona` int(11) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `cifavpersona` int(11) NOT NULL,
  `idfavpublicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favorito`
--

INSERT INTO `favorito` (`cifavpersona`, `idfavpublicacion`) VALUES
(12345678, 1),
(12345678, 203);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombreusuario`
--

CREATE TABLE `nombreusuario` (
  `idusuario` int(11) NOT NULL,
  `nombreusu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permuta`
--

CREATE TABLE `permuta` (
  `idpublicacion` int(11) NOT NULL,
  `calificacion` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `contrasena` varchar(500) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `tarjeta` int(11) DEFAULT NULL,
  `calificacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre`, `apellido`, `email`, `pais`, `contrasena`, `calle`, `numero`, `tarjeta`, `calificacion`) VALUES
(4356789, 'asdasd', 'puto', 'oinbon@iunobm', 'ib', NULL, 'asd', 0, NULL, '0'),
(12345678, 'asd', 'ekis de', 'mecabe@soygay.com', 'la concha de tu madre', 'asd', 'grove street', 12345678, 2147483647, '3'),
(12534578, 'putas', 'asdasd', 'dfgh@ertgch', 'dsefgh', '$2y$10$vfRp47pwOzO4qFIA/AJzP.jUB88HfPOMLowHzICcW4ntVz0E.Tlxa', 'adszfggh', 1423567, NULL, '0'),
(23786548, 'aesrdjy', 'raesthyd', 'regtrhy@tsryt', 'tsgrdyj', 'hgfdsrtuy', 'myhntgbfbgnht', 34567543, 453647586, '0'),
(456789890, 'putsaharry', 'putas', 'bhknml,;', 'hbknml,;', '202cb962ac59075b964b07152d234b70', 'fyghjk', 0, NULL, '0'),
(2147483647, 'asdasd', 'puto', 'oinbon@iunobm', 'ib', '$2y$10$CwLkBhu4kz87udf6bwvCx.vdLcK8Lwayf9dsEnWHCRvGhAWsdpJ06', 'asd', 0, NULL, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `cipersona` int(11) NOT NULL,
  `nombrepubli` varchar(60) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `cipersona`, `nombrepubli`, `precio`, `descripcion`, `categoria`, `stock`, `fecha`, `tipo`) VALUES
(1, 12345678, 'putas', 15, 'putas baratas', 'A', 10, '2017-05-29 07:56:23', 'Usado'),
(200, 12345678, 'MÃ¡s putas que antes', 2354, 'asdasdasdads', 'B', 123123, '2017-05-29 08:27:01', 'nuevo'),
(201, 12345678, 'MÃ¡s putas que antes', 2354, 'asdasdasdads', 'B', 123123, '2017-05-29 08:29:42', 'nuevo'),
(202, 12345678, 'putas', 500, 'muchas putas', 'tecn', 200, '2017-06-04 19:47:15', 'nuevo'),
(203, 12345678, 'putas', 2000, 'otras putas', 'tecn', 500, '2017-06-04 21:17:43', 'nuevo'),
(204, 12345678, 'un autito', 2000000000, 'es mi auto mÃ¡s pro', 'veh', 1, '2017-06-09 04:17:36', 'nuevo'),
(205, 12345678, 'asd', 123, 'asd', 'amobl', 123, '2017-06-09 06:33:57', 'nuevo'),
(206, 12345678, 'asd', 123, 'asd', 'amobl', 123, '2017-06-09 06:34:50', 'nuevo'),
(207, 23786548, 'asd', 123, 'asd', 'amobl', 123, '2017-06-09 06:41:28', 'nuevo'),
(208, 456789890, 'autito', 2000, 'autito', 'veh', 1, '2017-06-10 00:52:08', 'nuevo'),
(209, 456789890, 'autito 2', 40000, 'autito 2 papeii', 'veh', 2, '2017-06-10 01:38:50', 'nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sancionadmin`
--

CREATE TABLE `sancionadmin` (
  `ciadministradorsanadmin` int(11) NOT NULL,
  `idadministradorsan1` int(11) NOT NULL,
  `idadministradorsan2` int(11) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sansiona`
--

CREATE TABLE `sansiona` (
  `ciadministradorsan` int(11) NOT NULL,
  `ciusuariosan` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta`
--

CREATE TABLE `subasta` (
  `cisubpersona` int(11) NOT NULL,
  `idsubpublicacion` int(11) NOT NULL,
  `calificacion` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `preciototal` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonopersona`
--

CREATE TABLE `telefonopersona` (
  `cipersona` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `ciusuario` int(11) NOT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendecompra`
--

CREATE TABLE `vendecompra` (
  `cvendeipersona` int(11) NOT NULL,
  `idvendepublicacion` int(11) NOT NULL,
  `calificacion` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) NOT NULL,
  `preciototal` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendecompra`
--

INSERT INTO `vendecompra` (`cvendeipersona`, `idvendepublicacion`, `calificacion`, `fecha`, `preciototal`, `cantidad`, `total`) VALUES
(12345678, 1, '0', '2017-05-31 01:50:17', 200, 2, 2),
(12345678, 1, '0', '2017-05-31 02:08:08', 2000, 1, 2000),
(23786548, 1, '5', '1234', 765, 6, 43),
(456789890, 208, '5', '2017-06-10 02:05:35', 500, 2, 500),
(456789890, 208, '5', '2017-06-10 02:05:39', 500, 2, 500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`,`ciadministrador`),
  ADD KEY `ciadmin` (`ciadministrador`);

--
-- Indices de la tabla `bajasuspencion`
--
ALTER TABLE `bajasuspencion`
  ADD PRIMARY KEY (`cibajaadministrador`,`idbajapublicacion`),
  ADD KEY `idpublicacion_idx` (`idbajapublicacion`);

--
-- Indices de la tabla `comentariopermuta`
--
ALTER TABLE `comentariopermuta`
  ADD PRIMARY KEY (`permutaid`,`idcompermuta`,`cicomperpersona`),
  ADD KEY `cicomperpersona_idx` (`cicomperpersona`),
  ADD KEY `idcompermuta` (`idcompermuta`);

--
-- Indices de la tabla `comentariopublicacion`
--
ALTER TABLE `comentariopublicacion`
  ADD PRIMARY KEY (`idcompublicacion`,`cicompersona`,`fecha`),
  ADD KEY `cipersona_idx` (`cicompersona`);

--
-- Indices de la tabla `comentariosubasta`
--
ALTER TABLE `comentariosubasta`
  ADD PRIMARY KEY (`idcomsubpublicacion`,`cicomsubpersona`),
  ADD KEY `cipersona_idx` (`cicomsubpersona`);

--
-- Indices de la tabla `comentariovendecompra`
--
ALTER TABLE `comentariovendecompra`
  ADD PRIMARY KEY (`idcomvenpublicacion`,`cicomvenpersona`),
  ADD KEY `cipersona_idx` (`cicomvenpersona`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`cifavpersona`,`idfavpublicacion`),
  ADD KEY `idpublicacion_idx` (`idfavpublicacion`);

--
-- Indices de la tabla `nombreusuario`
--
ALTER TABLE `nombreusuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `permuta`
--
ALTER TABLE `permuta`
  ADD PRIMARY KEY (`idpublicacion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`,`cipersona`);

--
-- Indices de la tabla `sancionadmin`
--
ALTER TABLE `sancionadmin`
  ADD PRIMARY KEY (`ciadministradorsanadmin`,`idadministradorsan1`,`idadministradorsan2`),
  ADD KEY `idadministradorsan1_idx` (`idadministradorsan1`),
  ADD KEY `idadministradorsan2_idx` (`idadministradorsan2`);

--
-- Indices de la tabla `sansiona`
--
ALTER TABLE `sansiona`
  ADD PRIMARY KEY (`ciadministradorsan`,`ciusuariosan`),
  ADD KEY `ciusuario_idx` (`ciusuariosan`);

--
-- Indices de la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD PRIMARY KEY (`cisubpersona`,`idsubpublicacion`),
  ADD KEY `idpublicacion_idx` (`idsubpublicacion`);

--
-- Indices de la tabla `telefonopersona`
--
ALTER TABLE `telefonopersona`
  ADD PRIMARY KEY (`cipersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`ciusuario`),
  ADD KEY `ciusuario_idx` (`ciusuario`);

--
-- Indices de la tabla `vendecompra`
--
ALTER TABLE `vendecompra`
  ADD PRIMARY KEY (`cvendeipersona`,`idvendepublicacion`,`fecha`),
  ADD KEY `idpublicacion_idx` (`idvendepublicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentariopermuta`
--
ALTER TABLE `comentariopermuta`
  MODIFY `permutaid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `ciadmin` FOREIGN KEY (`ciadministrador`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bajasuspencion`
--
ALTER TABLE `bajasuspencion`
  ADD CONSTRAINT `cibajaadministrador` FOREIGN KEY (`cibajaadministrador`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idbajapublicacion` FOREIGN KEY (`idbajapublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentariopermuta`
--
ALTER TABLE `comentariopermuta`
  ADD CONSTRAINT `cicomperpersona` FOREIGN KEY (`cicomperpersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idcompermuta` FOREIGN KEY (`idcompermuta`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentariopublicacion`
--
ALTER TABLE `comentariopublicacion`
  ADD CONSTRAINT `cicompersona` FOREIGN KEY (`cicompersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idcompublicacion` FOREIGN KEY (`idcompublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentariosubasta`
--
ALTER TABLE `comentariosubasta`
  ADD CONSTRAINT `cicomsubpersona` FOREIGN KEY (`cicomsubpersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idcomsubpublicacion` FOREIGN KEY (`idcomsubpublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentariovendecompra`
--
ALTER TABLE `comentariovendecompra`
  ADD CONSTRAINT `cicomvenpersona` FOREIGN KEY (`cicomvenpersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idcomvenpublicacion` FOREIGN KEY (`idcomvenpublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `cifavpersona` FOREIGN KEY (`cifavpersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idfavpublicacion` FOREIGN KEY (`idfavpublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nombreusuario`
--
ALTER TABLE `nombreusuario`
  ADD CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permuta`
--
ALTER TABLE `permuta`
  ADD CONSTRAINT `idpublicacion` FOREIGN KEY (`idpublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sancionadmin`
--
ALTER TABLE `sancionadmin`
  ADD CONSTRAINT `ciadministradorsanadmin` FOREIGN KEY (`ciadministradorsanadmin`) REFERENCES `administrador` (`ciadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idadministradorsan1` FOREIGN KEY (`idadministradorsan1`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idadministradorsan2` FOREIGN KEY (`idadministradorsan2`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sansiona`
--
ALTER TABLE `sansiona`
  ADD CONSTRAINT `ciadministradorsan` FOREIGN KEY (`ciadministradorsan`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ciusuariosan` FOREIGN KEY (`ciusuariosan`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subasta`
--
ALTER TABLE `subasta`
  ADD CONSTRAINT `cisubpersona` FOREIGN KEY (`cisubpersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idsubpublicacion` FOREIGN KEY (`idsubpublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefonopersona`
--
ALTER TABLE `telefonopersona`
  ADD CONSTRAINT `ci` FOREIGN KEY (`cipersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `ciusuario` FOREIGN KEY (`ciusuario`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendecompra`
--
ALTER TABLE `vendecompra`
  ADD CONSTRAINT `civendepersona` FOREIGN KEY (`cvendeipersona`) REFERENCES `persona` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idvendepublicacion` FOREIGN KEY (`idvendepublicacion`) REFERENCES `publicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
