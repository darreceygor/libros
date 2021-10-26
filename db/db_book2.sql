-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 08:02:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_book2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `b_autor` varchar(100) NOT NULL,
  `b_year` varchar(20) NOT NULL,
  `id_country` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `b_title`, `b_autor`, `b_year`, `id_country`) VALUES

(6, 'Cuentos infantiles ed', 'Hans Christian Andersen', '1835–37', NULL),
(7, 'Divina comedia', 'Dante Alighieri', '1265–1321 ed', 7),
(8, 'Orgullo y prejuicio', 'Jane Austen', '1813', 8),
(9, 'Papá Goriot', 'Honoré de Balzac', '1835', 9),
(12, 'Ficciones editada', 'Jorge Luis Borges', '1944–86', 1),
(13, 'Cumbres Borrascosas', 'Emily Brontë', '1847', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id_country` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id_country`, `name`) VALUES
(1, 'Islandia'),
(2, 'Estados Unidos'),
(3, 'Imperio aqueménida'),
(4, 'India/Irán/Irak/Egipto'),
(6, 'Dinamarca'),
(7, 'Italia'),
(8, 'Reino Unido'),
(9, 'Francia'),
(10, 'Irlanda'),
(11, 'Rávena'),
(12, 'Argentina'),
(13, 'Imperio francés'),
(14, 'Francia'),
(15, 'España'),
(16, 'Inglaterra'),
(17, 'Rusia'),
(18, 'Alemania'),
(19, 'Imperio ateniense'),
(20, 'Colombia'),
(21, 'Alemania'),
(22, 'Ucrania'),
(23, 'Alemania Occidental'),
(24, 'Brasil'),
(25, 'Noruega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2a$12$a3ci7YRzKeYh7fsDu1PMa.fWFM1wkHSeW16.1Ljhl3vPrXxv1bS12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD KEY `id_country` (`id_country`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id_country`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id_country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
