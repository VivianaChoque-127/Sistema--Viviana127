-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 11:46:33
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certificacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_cur` int(11) NOT NULL,
  `nombre_de_curso` varchar(45) DEFAULT NULL,
  `tipo_de_capacitacion` varchar(45) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_cur`, `nombre_de_curso`, `tipo_de_capacitacion`, `costo`, `estado`) VALUES
(1, 'ww', 'ww', 0, 'ww'),
(2, 'P.A.I.', 'programa ampliado de inmunizaciones', 500, 'activo'),
(4, 'asd', 'asd', 0, 'asdklkldkld');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_doc` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `expedido` varchar(45) DEFAULT NULL,
  `grado_academico` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_doc`, `nombre`, `apellido_paterno`, `apellido_materno`, `ci`, `expedido`, `grado_academico`, `telefono`, `correo`, `direccion`, `estado`) VALUES
(1, 'marco', 'callisaya', 'choque', 1234001, 'lp', 'lic', 78096543, 'marco@gmail.com', 'z/cosmos c/campos n°878', 'activo'),
(2, 'nora', 'apaza', 'calle', 1878726, 'or', 'lic', 76654358, 'nora.lopez@gmail.com', 'z/calama c/villa n°09', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_cur`
--

CREATE TABLE `doc_cur` (
  `id_doc_cur` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `id_cur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doc_cur`
--

INSERT INTO `doc_cur` (`id_doc_cur`, `id_doc`, `id_cur`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_est` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `expedido` varchar(45) DEFAULT NULL,
  `grado_academico` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_est`, `nombre`, `apellido_paterno`, `apellido_materno`, `ci`, `expedido`, `grado_academico`, `telefono`, `correo`, `direccion`, `estado`) VALUES
(1, 'asd', 'asd', 'mamani', 0, 'dsadasd', 'Dr', 0, 'WWWWWWWWWWWWWWWWWW', 'sAD', 'asd'),
(2, 'juan', 'sdffsdfsdf', 'torrez', 0, 'sdf', 'lic', 0, 'jhivn ', 'sdfs', 'sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_cur`
--

CREATE TABLE `est_cur` (
  `id_est_cur` int(11) NOT NULL,
  `id_cur` int(11) NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `est_cur`
--

INSERT INTO `est_cur` (`id_est_cur`, `id_cur`, `id_est`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `cargo`, `usuario`, `password`) VALUES
(1, 'luis', 'quispe', 'mamani', 'luis', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_cur`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `doc_cur`
--
ALTER TABLE `doc_cur`
  ADD PRIMARY KEY (`id_doc_cur`),
  ADD KEY `fk_doc_cur_docente_idx` (`id_doc`),
  ADD KEY `fk_doc_cur_curso1_idx` (`id_cur`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_est`);

--
-- Indices de la tabla `est_cur`
--
ALTER TABLE `est_cur`
  ADD PRIMARY KEY (`id_est_cur`),
  ADD KEY `fk_est_cur_curso1_idx` (`id_cur`),
  ADD KEY `fk_est_cur_estudiante1_idx` (`id_est`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `doc_cur`
--
ALTER TABLE `doc_cur`
  MODIFY `id_doc_cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `est_cur`
--
ALTER TABLE `est_cur`
  MODIFY `id_est_cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doc_cur`
--
ALTER TABLE `doc_cur`
  ADD CONSTRAINT `fk_doc_cur_curso1` FOREIGN KEY (`id_cur`) REFERENCES `curso` (`id_cur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doc_cur_docente` FOREIGN KEY (`id_doc`) REFERENCES `docente` (`id_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `est_cur`
--
ALTER TABLE `est_cur`
  ADD CONSTRAINT `fk_est_cur_curso1` FOREIGN KEY (`id_cur`) REFERENCES `curso` (`id_cur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_est_cur_estudiante1` FOREIGN KEY (`id_est`) REFERENCES `estudiante` (`id_est`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
