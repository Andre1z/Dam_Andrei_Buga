-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 18:07:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen_capitulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `Identificador` int(11) NOT NULL,
  `numero_capitulo` int(150) NOT NULL,
  `nombre_capitulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `saber_mas` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`Identificador`, `numero_capitulo`, `nombre_capitulo`, `descripcion`, `saber_mas`, `imagen`) VALUES
(1, 9, 'Prueba de los capitulos', 'Resumimos las restauraciones de las décadas posteriores a la caída y destrucción de la estatua de San Lorenzo, en 1994. El historiador René Payo y el arquitecto Javier Garabito hacen balance de las actuaciones realizadas durante estos años en la Catedral de Burgos hasta su pulcro estado en la celebración de su VIII Centenario. La serie finaliza con reflexiones sobre el futuro de la Catedral y el papel de la ciencia y la tecnología en su creación y conservación.', 'https://cienciaycatedral.ubuinvestiga.es/la-conservacion/', 'https://cienciaycatedral.ubuinvestiga.es/wp-content/uploads/sites/14/2022/06/La-ciencia-que-esconde-la-catedral-de-Burgos-La-conservacion-min.jpg'),
(2, 10, 'Las vidrieras', 'Estudiamos la luz mediante técnicas y materiales para crear vidrio, pintar y componer vidrieras, así como las investigaciones modernas sobre las vidrieras, en las que se ha encontrado un nuevo pigmento denominado «rojo Burgos«. La historiadora del arte Pilar Alonso expone las características, composición, historia y estudio de las vidrieras.  Enrique Barrio, pintor y vidriero, muestra cómo realiza vidrieras en su taller, empleando muchas técnicas similares a los artesanos y artistas del pasado.', 'https://cienciaycatedral.ubuinvestiga.es/las-vidrieras/', 'https://cienciaycatedral.ubuinvestiga.es/wp-content/uploads/sites/14/2022/06/La-ciencia-que-esconde-la-catedral-de-Burgos-Las-vidrieras-min.jpg'),
(3, 11, 'Las matemáticas', 'Conoceremos proporciones y formas escondidas en la Catedral de Burgos, como la vesica piscis, la proporción áurea, el número de plata y el número cordobés. Los historiadores René Payo y José Matesanz introducen la relevancia de la geometría para los constructores medievales y posteriores. El matemático Constantino de la Fuente desgrana algunas de las proporciones más importantes presentes en el templo, relacionadas con números irracionales.\r\n\r\n', 'https://cienciaycatedral.ubuinvestiga.es/las-matematicas/', 'https://cienciaycatedral.ubuinvestiga.es/wp-content/uploads/sites/14/2022/06/La-ciencia-que-esconde-la-catedral-de-Burgos-Las-matematicas-min.jpg'),
(4, 12, 'La piedra', 'En este capítulo conoceremos el origen de la piedra que conforma la Catedral, sus propiedades, la forma de trabajarla y su restauración. Gabriel García, gestor de las canteras de Hontoria-Cubillo, explica la extracción de la piedra y su transporte con carreteros. Por su parte, José Javier Barrio  escultor y restaurador, presenta las claves del cuidado y la restauración de la piedra, incluyendo sus volúmenes y su característico color blanco, desvelado, para sorpresa de la ciudadanía, tras una larga limpieza integral.\r\n\r\n', 'https://cienciaycatedral.ubuinvestiga.es/la-piedra/', 'https://cienciaycatedral.ubuinvestiga.es/wp-content/uploads/sites/14/2022/06/La-ciencia-que-esconde-la-catedral-de-Burgos-La-piedra-min.jpg'),
(5, 14, 'La música', 'Repasamos la historia y las propiedades de los órganos, así como la composición y el mantenimiento de las campanas de la Catedral de Burgos. El restaurador de órganos Óscar Laguna cuenta las características físicas que hacen idóneo este instrumento en las catedrales, además de mostrar su funcionamiento, su interior y su reparación. El campanero Antonio Cano presenta las campanas de la catedral y su fabricación.', 'https://cienciaycatedral.ubuinvestiga.es/la-musica/', 'https://cienciaycatedral.ubuinvestiga.es/wp-content/uploads/sites/14/2022/06/La-ciencia-que-esconde-la-catedral-de-Burgos-La-musica-min.jpg'),
(8, 15, 'Update desde Python', 'Hemos hecho un update desde Python', 'Nada', 'Nada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`Identificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `Identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
