-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2020 a las 05:56:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_portada` int(11) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_idioma` int(11) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `desc_pelicula` varchar(500) DEFAULT NULL,
  `id_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `id_genero`, `id_portada`, `id_pais`, `id_idioma`, `link`, `desc_pelicula`, `id_year`) VALUES
(3, 'Rápidos y furiosos', 1, 7, 2, 2, 'algo', NULL, NULL),
(4, 'Aviones', 1, 11, 2, 2, 'linkde aviones', 'Es un avión ', 4),
(5, 'Corazones de Acero', 1, 12, 2, 2, 'Cora_acero', 'Es la segunda Guerra mundial.', 8),
(6, 'Terminator', 1, 10, 2, 2, 'Terminator', 'Es un robot acesino', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `tiene_idx` (`id_genero`),
  ADD KEY `esta_idx` (`id_pais`),
  ADD KEY `usa_idx` (`id_portada`),
  ADD KEY `traduce_idx` (`id_idioma`),
  ADD KEY `crado_idx` (`id_year`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `crado` FOREIGN KEY (`id_year`) REFERENCES `years` (`id_years`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `esta` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tiene` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `traduce` FOREIGN KEY (`id_idioma`) REFERENCES `idiomas` (`id_idioma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usa` FOREIGN KEY (`id_portada`) REFERENCES `portadas` (`id_portada`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
