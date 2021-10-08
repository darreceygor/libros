-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 20:17:47
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_books`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `title`, `autor`, `year`, `description`) VALUES
(1, 'Poema de Gilgamesh', 'Anónimo', '1', 'Siglo XVII a. C.\r\n'),
(2, 'Libro de Job (de la Biblia)' , 'Anónimo' , 'Siglo VI a. C. - IV a. C.' , 'Imperio aqueménida'),
(3, 'Las mil y una noches' , 'Anónimo' , '700–1500' , 'India/Irán/Irak/Egipto'),
(4, 'Saga de Njál' , 'Anónimo' , 'Siglo XIII' , 'Islandia'),
(5, 'Todo se desmorona' , 'Chinua Achebe' , '1958' , 'Nigeria'),
(6, 'Cuentos infantiles' , 'Hans Christian Andersen' , '1835–37' , 'Dinamarca'),
(7, 'Divina comedia' , 'Dante Alighieri' , '1265–1321' , 'Italia'),
(8, 'Orgullo y prejuicio' , 'Jane Austen' , '1813' , 'Reino Unido'),
(9, 'Papá Goriot' , 'Honoré de Balzac' , '1835' , 'Francia'),
(10, 'Molloy, Malone muere, El Innombrable, una trilogía' , 'Samuel Beckett ' , '1951–53' , 'Irlanda'),
(11, 'Decamerón' , 'Giovanni Boccaccio' , '1349–53' , 'Rávena'),
(12, 'Ficciones' , 'Jorge Luis Borges' , '1944–86' , 'Argentina'),
(13, 'Cumbres Borrascosas' , 'Emily Brontë' , '1847' , 'Reino Unido'),
(14, 'El extranjero' , 'Albert Camus ' , '1942' , 'Argelia, Imperio francés'),
(15, 'Poemas' , 'Paul Celan' , '1952' , 'Rumanía, Francia'),
(16, 'Viaje al fin de la noche' , 'Louis-Ferdinand Céline' , '1932' , 'Francia'),
(17, 'Don Quijote de la Mancha' , 'Miguel de Cervantes' , '1605 (1ª parte), 1615 (2ª parte)' , 'España'),
(18, 'Los cuentos de Canterbury' , 'Geoffrey Chaucer' , 'siglo XIV' , 'Inglaterra'),
(19, 'Relatos cortos' , 'Antón Chéjov' , '1886' , 'Rusia'),
(20, 'Nostromo' , 'Joseph Conrad' , '1904' , 'Reino Unido'),
(21, 'Grandes Esperanzas' , 'Charles Dickens' , '1861' , 'Reino Unido'),
(22, 'Jacques el fatalista' , 'Denis Diderot' , '1796' , 'Francia'),
(23, 'Berlin Alexanderplatz' , 'Alfred Döblin' , '1929' , 'Alemania'),
(24, 'Crimen y castigo' , 'Fiódor Dostoievski' , '1866' , 'Rusia'),
(25, 'El idiota' , 'Fiódor Dostoievski' , '1869' , 'Rusia'),
(26, 'Los endemoniados' , 'Fiódor Dostoievski' , '1872' , 'Rusia'),
(27, 'Los hermanos Karamazov' , 'Fiódor Dostoievski' , '1880' , 'Rusia'),
(28, 'Middlemarch' , 'George Eliot' , '1871' , 'Reino Unido'),
(29, 'El hombre invisible' , 'Ralph Ellison' , '1952' , 'Estados Unidos'),
(30, 'Medea' , 'Eurípides' , '431 a. C.' , 'Imperio ateniense'),
(31, '¡Absalom, Absalom!' , 'William Faulkner ' , '1936' , 'Estados Unidos'),
(32, 'El ruido y la furia' , 'William Faulkner ' , '1929' , 'Estados Unidos'),
(33, 'Madame Bovary' , 'Gustave Flaubert' , '1857' , 'Francia'),
(34, 'La educación sentimental' , 'Gustave Flaubert' , '1869' , 'Francia'),
(35, 'Romancero gitano' , 'Federico García Lorca' , '1928' , 'España'),
(36, 'Cien años de soledad' , 'Gabriel García Márquez ' , '1967' , 'Colombia'),
(37, 'El amor en los tiempos del cólera' , 'Gabriel García Márquez ' , '1985' , 'Colombia'),
(38, 'Fausto' , 'Johann Wolfgang von Goethe' , '1832' , 'Ducado de Sajonia-Weimar, Alemania'),
(39, 'Almas muertas' , 'Nikolai Gogol' , '1842' , 'Ucrania'),
(40, 'El tambor de hojalata' , 'Günter Grass ' , '1959' , 'Alemania Occidental'),
(41, 'Gran Sertón: Veredas' , 'João Guimarães Rosa' , '1956' , 'Brasil'),
(42, 'Hambre' , 'Knut Hamsun ' , '1890' , 'Noruega'),
(43, 'El viejo y el mar' , 'Ernest Hemingway ' , '1952' , 'Estados Unidos'),
(44, 'Ilíada' , 'Homero' , '850–750 a. C.' , 'Probablemente Esmirna'),
(45, 'Odisea' , 'Homero' , 'siglo VIII a. C.' , 'Probablemente Esmirna'),
(46, 'Casa de muñecas' , 'Henrik Ibsen' , '1879' , 'Noruega'),
(47, 'Ulises' , 'James Joyce' , '1922' , 'Estado Libre Irlandés'),
(48, 'Relatos cortos' , 'Franz Kafka' , '1924' , 'República de Checoslovaquia'),
(49, 'El proceso' , 'Franz Kafka' , '1925' , 'República de Checoslovaquia'),
(50, 'El castillo' , 'Franz Kafka' , '1926' , 'República de Checoslovaquia'),
(51, 'Shakuntala' , 'Kālidāsa' , 'siglo I a. C.-IV d. C.' , 'India'),
(52, 'El sonido de la montaña' , 'Yasunari Kawabata ' , '1954' , 'Japón'),
(53, 'Zorba, el griego' , 'Nikos Kazantzakis' , '1946' , 'Grecia'),
(54, 'Hijos y amantes' , 'D. H. Lawrence' , '1913' , 'Reino Unido'),
(55, 'Gente independiente' , 'Halldór Laxness ' , '1934–35' , 'Islandia'),
(56, 'Poemas' , 'Giacomo Leopardi' , '1818' , 'Italia'),
(57, 'El cuaderno dorado' , 'Doris Lessing ' , '1962' , 'Reino Unido'),
(58, 'Pippi Calzaslargas' , 'Astrid Lindgren' , '1945' , 'Suecia'),
(59, 'Diario de un loco' , 'Lu Xun' , '1918' , 'China'),
(60, 'Hijos de nuestro barrio' , 'Naguib Mahfuz ' , '1959' , 'Egipto'),
(61, 'Los Buddenbrook' , 'Thomas Mann ' , '1901' , 'Alemania'),
(62, 'La montaña mágica' , 'Thomas Mann ' , '1924' , 'Alemania'),
(63, 'Moby-Dick' , 'Herman Melville' , '1851' , 'Estados Unidos'),
(64, 'Ensayos' , 'Michel de Montaigne' , '1595' , 'Francia'),
(65, 'La historia' , 'Elsa Morante' , '1974' , 'Italia'),
(66, 'Beloved' , 'Toni Morrison ' , '1987' , 'Estados Unidos'),
(67, 'Genji Monogatari' , 'Murasaki Shikibu' , 'siglo XI' , 'Japón'),
(68, 'El hombre sin atributos' , 'Robert Musil' , '1930–32' , 'Austria'),
(69, 'Lolita' , 'Vladimir Nabokov' , '1955' , 'Estados Unidos'),
(70, '1984' , 'George Orwell' , '1949' , 'Reino Unido'),
(71, 'Las metamorfosis' , 'Ovidio' , 'siglo I dC' , 'Imperio romano'),
(72, 'Libro del desasosiego' , 'Fernando Pessoa' , '1928' , 'Portugal'),
(73, 'Cuentos' , 'Edgar Allan Poe' , 'siglo XIX' , 'Estados Unidos'),
(74, 'En busca del tiempo perdido' , 'Marcel Proust' , '1913–27' , 'Francia'),
(75, 'Gargantúa y Pantagruel' , 'François Rabelais' , '1532–34' , 'Francia'),
(76, 'Pedro Páramo' , 'Juan Rulfo' , '1955' , 'México'),
(77, 'Masnavi' , 'Rumi' , '1258–73' , 'Persia, Imperio mongol'),
(78, 'Hijos de la medianoche' , 'Salman Rushdie' , '1981' , 'India'),
(79, 'Bostan' , 'Saadi' , '1257' , 'Persia, Imperio mongol'),
(80, 'Tiempo de migrar al norte' , 'Tayeb Salih' , '1966' , 'Sudán'),
(81, 'Ensayo sobre la ceguera' , 'José Saramago ' , '1995' , 'Portugal'),
(82, 'Hamlet' , 'William Shakespeare' , '1603' , 'Inglaterra'),
(83, 'El rey Lear' , 'William Shakespeare' , '1608' , 'Inglaterra'),
(84, 'Otelo' , 'William Shakespeare' , '1609' , 'Inglaterra'),
(85, 'Edipo rey' , 'Sófocles' , '430 a. C.' , 'Imperio ateniense'),
(86, 'Rojo y negro' , 'Stendhal' , '1830' , 'Francia'),
(87, 'Vida y opiniones del caballero Tristram Shandy' , 'Laurence Sterne' , '1760' , 'Inglaterra'),
(88, 'La conciencia de Zeno' , 'Italo Svevo' , '1923' , 'Italia'),
(89, 'Los viajes de Gulliver' , 'Jonathan Swift' , '1726' , 'Irlanda'),
(90, 'Guerra y paz' , 'Lev Tolstói' , '1865–1869' , 'Rusia'),
(91, 'Ana Karenina' , 'Lev Tolstói' , '1877' , 'Rusia'),
(92, 'La muerte de Iván Ilich' , 'Lev Tolstói' , '1886' , 'Rusia'),
(93, 'Las aventuras de Huckleberry Finn' , 'Mark Twain' , '1884' , 'Estados Unidos'),
(94, 'Ramayana' , 'Valmiki' , 'siglo III a. C.-siglo III d. C.' , 'India'),
(95, 'Eneida' , 'Virgilio' , '29–19 a. C.' , 'Imperio romano'),
(96, 'Mahabhárata' , 'Viasa' , 'siglo IV a.C.' , 'India'),
(97, 'Hojas de hierba' , 'Walt Whitman' , '1855' , 'Estados Unidos'),
(98, 'La señora Dalloway' , 'Virginia Woolf' , '1925' , 'Reino Unido'),
(99, 'Al faro' , 'Virginia Woolf' , '1927' , 'Reino Unido'),
(100, 'Memorias de Adriano' , 'Marguerite Yourcenar' , '1951' , 'Francia');



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
