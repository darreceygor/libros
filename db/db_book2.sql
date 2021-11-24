-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 04:02:37
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
  `id_country` int(11) DEFAULT NULL,
  `b_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `b_title`, `b_autor`, `b_year`, `id_country`, `b_image`) VALUES
(1, '¡Absalom, Absalom! ', 'William Faulkner  ', '1936', 2, 'img/books/1.jpg'),
(2, '1984 ', 'George Orwell ', '1949', 8, 'img/books/1984first.jpg'),
(3, 'Al faro ', 'Virginia Woolf ', '1927', 8, '0'),
(4, 'Almas muertas ', 'Nikolai Gogol ', '1842', 22, '0'),
(5, 'Ana Karenina editado', 'Lev Tolstói ', '1877', 17, 'img/books/5.jpg'),
(6, 'Beloved ', 'Toni Morrison  ', '1987 ', 2, '0'),
(7, 'Berlin Alexanderplatz ', 'Alfred Döblin ', '1929 ', 18, 'img/books/7.jpg'),
(8, 'Bostan ', 'Saadi editado', '1257 ', 26, '0'),
(9, 'Casa de muñecas ', 'Henrik Ibsen ', '1879 ', 25, '0'),
(10, 'Cien años de soledad ', 'Gabriel García Márquez  ', '1967 ', 20, '0'),
(11, 'Crimen y castigo ', 'Fiódor Dostoievski ', '1866 ', 17, '0'),
(12, 'Cuentos ', 'Edgar Allan Poe ', 'siglo XIX ', 2, '0'),
(13, 'Cuentos infantiles ', 'Hans Christian Andersen ', '1835–37 ', 6, '0'),
(14, 'Cumbres Borrascosas ', 'Emily Brontë ', '1847 ', 8, '0'),
(15, 'Decamerón ', 'Giovanni Boccaccio ', '1349–53 ', 11, '0'),
(16, 'Diario de un loco ', 'Lu Xun ', '1918 ', 27, '0'),
(17, 'Divina comedia ', 'Dante Alighieri ', '1265–1321 ', 7, '0'),
(18, 'Don Quijote de la Mancha ', 'Miguel de Cervantes ', '1605 (1ª parte), 161', 15, '0'),
(19, 'Edipo rey ', 'Sófocles ', '430 a. C. ', 28, '0'),
(20, 'El amor en los tiempos del cólera ', 'Gabriel García Márquez  ', '1985 ', 20, '0'),
(22, 'El cuaderno dorado ', 'Doris Lessing  ', '1962 ', 8, '0'),
(24, 'El hombre invisible ', 'Ralph Ellison ', '1952 ', 2, '0'),
(25, 'El hombre sin atributos ', 'Robert Musil ', '1930–32 ', 31, '0'),
(26, 'El idiota ', 'Fiódor Dostoievski ', '1869 ', 17, '0'),
(28, 'El rey Lear ', 'William Shakespeare ', '1608 ', 16, '0'),
(29, 'El ruido y la furia ', 'William Faulkner  ', '1929 ', 2, '0'),
(30, 'El sonido de la montaña ', 'Yasunari Kawabata  ', '1954 ', 32, '0'),
(31, 'El tambor de hojalata ', 'Günter Grass  ', '1959 ', 23, '0'),
(32, 'El viejo y el mar ', 'Ernest Hemingway  ', '1952 ', 2, '0'),
(33, 'En busca del tiempo perdido ', 'Marcel Proust ', '1913–27 ', 9, '0'),
(34, 'Eneida ', 'Virgilio ', '29–19 a. C. ', 33, '0'),
(35, 'Ensayo sobre la ceguera ', 'José Saramago  ', '1995 ', 34, '0'),
(36, 'Ensayos ', 'Michel de Montaigne ', '1595 ', 9, '0'),
(37, 'Fausto ', 'Johann Wolfgang von Goethe ', '1832 ', 35, '0'),
(38, 'Ficciones ', 'Jorge Luis Borges ', '1944–86 ', 12, '0'),
(39, 'Gargantúa y Pantagruel ', 'François Rabelais ', '1532–34 ', 9, '0'),
(40, 'Genji Monogatari ', 'Murasaki Shikibu ', 'siglo XI ', 32, '0'),
(41, 'Gente independiente ', 'Halldór Laxness  ', '1934–35 ', 1, '0'),
(42, 'Gran Sertón: Veredas ', 'João Guimarães Rosa ', '1956 ', 24, '0'),
(43, 'Grandes Esperanzas ', 'Charles Dickens ', '1861 ', 8, '0'),
(44, 'Guerra y paz ', 'Lev Tolstói ', '1865–1869 ', 17, '0'),
(45, 'Hambre ', 'Knut Hamsun  ', '1890 ', 25, '0'),
(46, 'Hamlet ', 'William Shakespeare ', '1603 ', 16, '0'),
(47, 'Hijos de la medianoche ', 'Salman Rushdie ', '1981 ', 36, '0'),
(48, 'Hijos de nuestro barrio ', 'Naguib Mahfuz  ', '1959 ', 37, '0'),
(49, 'Hijos y amantes ', 'D. H. Lawrence ', '1913 ', 8, '0'),
(50, 'Hojas de hierba ', 'Walt Whitman ', '1855 ', 2, '0');

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
(22, 'Ucrania'),
(23, 'Alemania Occidental'),
(24, 'Brasil'),
(25, 'Noruega'),
(26, 'Probablemente Esmirna'),
(27, 'Estado Libre Irlandés'),
(28, 'República de Checoslovaquia'),
(31, 'Grecia'),
(32, 'Suecia'),
(33, 'China'),
(34, 'Egipto'),
(35, 'Austria'),
(36, 'Imperio romano'),
(37, 'Portugal'),
(38, 'México'),
(40, 'Sudán'),
(47, 'Katmandu'),
(52, 'japon'),
(66, 'Persia, Imperio mongol'),
(67, 'China'),
(68, 'Imperio ateniense'),
(69, 'República de Checoslovaquia'),
(70, 'Argelia, Imperio francés'),
(71, 'Austria'),
(72, 'Japón'),
(73, 'Imperio romano'),
(74, 'Portugal'),
(75, 'Ducado de Sajonia-Weimar, Alemania'),
(76, 'India'),
(77, 'Egipto '),
(78, 'Probablemente Esmirna '),
(79, 'México '),
(80, 'Suecia '),
(81, 'Sumeria e Imperio acadio '),
(82, 'Rumanía, Francia '),
(83, 'Sudán '),
(84, 'Nigeria '),
(85, 'Estado Libre Irlandés '),
(86, 'Grecia ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rol`) VALUES
(1, 'admin@admin.com', '$2a$12$yhsgqKv0nNH1nHPQIMuEGOH69yx9TUiL/bfEuF/EfR3DYX9P8mIiG', 'admin'),
(2, 'user1@user.com', '$2a$12$Pyi1XTAAomsYqDjQgheyZ.YL2b/gEKawTylaAaVEqNlX./esDwM5y', 'user'),
(6, 'prueba1@prueba.com', '$2a$12$uwYnena6dkwaj9pjPUH2kOc7bBsW8DQ93NcpZSdbHlmxvH/.d9WMm', 'user'),
(8, 'prueba2@prueba.com', '$2a$12$uwYnena6dkwaj9pjPUH2kOc7bBsW8DQ93NcpZSdbHlmxvH/.d9WMm', 'user'),
(9, 'user2@user.com', '$2a$12$3yjej0TTXzO9pCE6quCOd.Ku3SwVY2GWbqSUr//ixcUBCJYU.r4KC', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
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
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
