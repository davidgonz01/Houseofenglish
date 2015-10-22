-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2015 a las 23:47:33
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `houseofenglish`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_tipo_documento` int(30) DEFAULT NULL,
  `nro_documento` varchar(30) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `localidad` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_tipo_alumno` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre`, `apellido`, `id_tipo_documento`, `nro_documento`, `telefono`, `correo_electronico`, `id_pais`, `localidad`, `fecha_nacimiento`, `id_tipo_alumno`) VALUES
(23, 'Alma', 'Benitez Santos', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(24, 'Victoria ', 'Berdejo Thiebeaud', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(25, 'Cayo', 'Gonzalez Lenz', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(26, 'Marcos ', 'Martinez Sabluk', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(27, 'Lua', 'Lopez Baez', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(28, 'Zaira ', 'Arrua Aguilar', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(29, 'Juan Manuel', 'Balletbo', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(31, 'Amanda ', 'Plese Pylik', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(32, 'Analia ', 'Ortiz Delgado', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(33, 'Maria Alejandra ', 'Aguero Madrazo', NULL, '', '00000', NULL, 0, NULL, NULL, 0),
(34, 'Ivanna ', 'Harms Gomez', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(35, 'Guadalupe ', 'Lopez Baez', NULL, '', '0001', NULL, 0, NULL, NULL, 0),
(36, 'Paulina', 'Lopez Baez', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(37, 'Cristian ', 'Plese Pylik', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(38, 'Maxima ', 'Ramirez', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(39, 'Mathias', 'Rios', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(40, 'Milena ', 'Rodriguez Coronel', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(41, 'Victoria ', 'Soler', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(42, 'Fernando', 'Agüero Madrazo', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(43, ' Maria Cristina', 'Ceno Arregui', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(44, 'Guillermo', 'Centurión', NULL, '', '00', NULL, 0, NULL, NULL, 0),
(45, 'Pedro', 'Diaz de Vivar Lessa', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(46, 'Fabrizio', 'Giménez Fretes', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(47, 'Micaela', 'Martinez López', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(48, 'Fátima', 'Mendoza Martinez', NULL, '', '0001', NULL, 0, NULL, NULL, 0),
(49, 'Jose', 'Pereira Thiebaud', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(50, 'Maria Rafaella', 'Plese Pylik', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(51, 'Camila', 'Duarte Maidana', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(52, 'Lucas ', 'Duarte', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(53, 'Martin ', 'Espinoza Von Knobloch', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(54, ' Maria Rosa', 'Frutos Trussy', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(55, 'Nara', 'Lamarque Abadíe', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(56, 'Paloma', 'Martinez Maciel', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(57, 'Federico', 'Pedrozo Campuzano', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(58, 'Erik', 'Studenko Bordón', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(59, 'Kaori', 'Sumi', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(60, 'Axel', 'Benedetti Bolf', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(61, 'Piero', 'Crichigno Aguilar', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(62, 'Jorge', 'Fernández Bordón', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(63, 'Marcelo', 'Abud Silvero', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(64, 'Fabricio', 'Astigarraga Hrisuk', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(65, 'Joaquin', 'Duarte Riquelme', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(66, 'Andres ', 'Morel Diaz de Vivar', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(67, 'Gian', 'Novosad Bocian', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(68, 'Bianca', 'Núñez Barrios', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(69, 'Sofia ', 'Salinas Ramirez', NULL, '', '0000', NULL, 0, NULL, NULL, 0),
(70, 'Santiago', 'Talavera Paniagua', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(71, 'Clarissa', 'Aranda', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(72, 'Marian', 'Aranda', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(73, 'Santiago', 'Benitez', NULL, '', '000', NULL, 0, NULL, NULL, 0),
(74, 'Matias', 'Casas Barmuta', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(75, 'Micaela', 'Duarte', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(76, 'Maria Jose', 'Segovia Martinez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(77, 'Milko', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(78, 'Cristhian ', 'Sumi', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(79, 'Sianna', 'Vargas Benitez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(80, 'Briana', 'Abud Silvero', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(81, 'Joaquin', 'Bogado', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(82, 'Tomás', 'Hrisuk Trussi', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(83, 'Jazmin', 'Hsieh Pan', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(84, 'Danna', 'Paredes', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(85, 'Luján', 'Ramirez Benitez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(86, 'Sofia', 'Silvero Hoppe', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(87, 'Fabián', 'Villasanti González', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(88, 'Manuel', 'Aldana', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(89, 'Martin', 'Ayala Pérez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(90, 'Daira', 'Bresani Agüero', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(91, 'Valeria', 'Doldán Melgarejo', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(92, 'Raúl', 'Benega Encina', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(93, 'Constaza', 'Faraldo Benitez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(94, 'Suri', 'Murawski Shimanaka', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(95, 'Maria Cielo', 'Rodriguez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(96, 'Nadia', 'Trociuk Andino', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(97, 'Mathias', 'Villagra Melgarejo', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(98, 'Gabriela', 'Alvarez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(99, 'Alan', 'Bresani Agüero', 2, '', '0000', NULL, 1, NULL, NULL, 1),
(100, 'Maria Magali', 'Chávez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(101, 'Adriana', 'Espinoza Von Knobloch', 1, '', '000', NULL, 1, NULL, NULL, 1),
(102, 'Rebeca', 'Zayas', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(103, 'Eugenia', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(104, 'Maria Paz ', 'Segovia Martinez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(105, 'Marcos ', 'Damús Orué', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(106, 'Giuliano', 'Ghiglione Orué', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(107, 'Maximiliano', 'Plese Pylik', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(108, 'Fiorella', 'Gimenez Bado', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(109, 'Lucas', 'Balbuena Rojas', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(110, 'Santiago', 'Caballero Arrúa', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(111, 'Julieta', 'Cano Arregui', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(112, 'Jorge', 'Doldán Melgarejo', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(113, 'Axel', 'Lamarque Abadie', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(114, 'Dahia', 'Pereira Gómez', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(115, 'Angel', 'Rodriguez Coronel', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(116, 'Matias', 'Sawczuk Schmid', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(117, 'Esteban', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(118, 'Loisana', 'Zarza Schmid', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(119, 'Enrique', 'Arrúa Melgarejo', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(120, 'Monserrat', 'Astigarraga Riquelme', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(121, 'Alejandro', 'Fernández Bordón', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(122, 'Guillermina', 'Medina Britez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(123, 'Christian', 'Pedrozo Campuzano', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(124, 'Sofia', 'Quiñonez Gómez', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(125, 'Nicolás', 'Scheid', NULL, '1', '0000', NULL, 0, NULL, NULL, 0),
(126, 'Ambar', 'Talavera Benitez', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(127, 'Ariel', 'Villaverde Fariña', NULL, '1', '000', NULL, 0, NULL, NULL, 0),
(135, 'Enzo Sebastian', 'Medina Riveros', 1, '', '81 995 224', NULL, 1, NULL, '2009-12-10', 1),
(136, 'Micaela Belén', 'Urdinola Flores', 1, '', '85 722 277', NULL, 1, NULL, '2009-11-27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE IF NOT EXISTS `asistencias` (
  `id_asistencia` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `presente` varchar(10) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `cant_horas` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id_asistencia`, `id_alumno`, `id_clase`, `presente`, `fecha_asistencia`, `cant_horas`) VALUES
(1, 1, 1, 'SI', '2015-02-03', 2),
(2, 0, 0, '', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias_ideal`
--

CREATE TABLE IF NOT EXISTS `asistencias_ideal` (
  `id_asistencia_ideal` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `cant_febrero` int(11) NOT NULL DEFAULT '0',
  `cant_marzo` int(11) NOT NULL DEFAULT '0',
  `cant_abril` int(11) NOT NULL DEFAULT '0',
  `cant_mayo` int(11) NOT NULL DEFAULT '0',
  `cant_junio` int(11) NOT NULL DEFAULT '0',
  `cant_julio` int(11) NOT NULL DEFAULT '0',
  `cant_agosto` int(11) NOT NULL DEFAULT '0',
  `cant_septiembre` int(11) NOT NULL DEFAULT '0',
  `cant_octubre` int(11) NOT NULL DEFAULT '0',
  `cant_noviembre` int(11) NOT NULL DEFAULT '0',
  `cant_diciembre` int(11) NOT NULL DEFAULT '0',
  `cantidad_clases` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencias_ideal`
--

INSERT INTO `asistencias_ideal` (`id_asistencia_ideal`, `id_clase`, `cant_febrero`, `cant_marzo`, `cant_abril`, `cant_mayo`, `cant_junio`, `cant_julio`, `cant_agosto`, `cant_septiembre`, `cant_octubre`, `cant_noviembre`, `cant_diciembre`, `cantidad_clases`) VALUES
(13, 13, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 55),
(18, 4, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 6, 75),
(20, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 77),
(21, 19, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 110),
(22, 16, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 8, 108),
(24, 18, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 110),
(25, 9, 7, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 67),
(26, 0, 5, 5, 5, 6, 5, 5, 5, 5, 5, 5, 0, 51),
(27, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_general`
--

CREATE TABLE IF NOT EXISTS `asistencia_general` (
  `id_asistencia_general` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `cant_febrero` int(11) NOT NULL DEFAULT '0',
  `cant_marzo` int(11) NOT NULL DEFAULT '0',
  `cant_abril` int(11) NOT NULL DEFAULT '0',
  `cant_mayo` int(11) NOT NULL DEFAULT '0',
  `cant_junio` int(11) NOT NULL DEFAULT '0',
  `cant_julio` int(11) NOT NULL DEFAULT '0',
  `cant_agosto` int(11) NOT NULL DEFAULT '0',
  `cant_septiembre` int(11) NOT NULL DEFAULT '0',
  `cant_octubre` int(11) NOT NULL DEFAULT '0',
  `cant_noviembre` int(11) NOT NULL DEFAULT '0',
  `cant_diciembre` int(11) NOT NULL DEFAULT '0',
  `cantidad_clases` int(11) NOT NULL DEFAULT '0',
  `cantidad_ausencia` int(11) NOT NULL DEFAULT '0',
  `porcentaje_asistencia` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia_general`
--

INSERT INTO `asistencia_general` (`id_asistencia_general`, `id_alumno`, `id_clase`, `cant_febrero`, `cant_marzo`, `cant_abril`, `cant_mayo`, `cant_junio`, `cant_julio`, `cant_agosto`, `cant_septiembre`, `cant_octubre`, `cant_noviembre`, `cant_diciembre`, `cantidad_clases`, `cantidad_ausencia`, `porcentaje_asistencia`) VALUES
(13, 31, 19, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 55, 55, 50),
(14, 32, 13, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 44, 11, 80),
(16, 121, 1, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 5, 65, -10, 118),
(18, 121, 9, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6, 56, 11, 84),
(20, 66, 19, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 33, 77, 30),
(21, 23, 4, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 66, 9, 88),
(22, 45, 1, 4, 5, 4, 4, 4, 4, 4, 4, 4, 4, 4, 45, 10, 82);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE IF NOT EXISTS `bancos` (
  `id_banco` int(11) NOT NULL,
  `descripcion_banco` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id_banco`, `descripcion_banco`) VALUES
(1, 'Regional'),
(2, 'Banco Familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id_city`, `Name`) VALUES
(1, 'encarnacion'),
(2, 'ayolas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE IF NOT EXISTS `clases` (
  `id_clase` int(11) NOT NULL,
  `descripcion_clase` varchar(30) NOT NULL,
  `cantidad_hs` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clase`, `descripcion_clase`, `cantidad_hs`) VALUES
(3, 'preschool 3', 6),
(4, 'Kids 3A', 2),
(5, 'teens 3', NULL),
(6, 'kids 3B', NULL),
(7, 'teens 4', 2),
(8, 'pre teens', NULL),
(9, 'young adults 1', NULL),
(10, 'kids 1', NULL),
(11, 'teens 1', NULL),
(12, 'young adults 2', NULL),
(13, 'kids 2', NULL),
(14, 'teens 2', NULL),
(16, 'kids 3C', NULL),
(18, 'kids 4', NULL),
(19, 'kids 5', NULL),
(20, 'elementary', 12),
(21, 'teens 4 B', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `id_cuenta` int(30) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_tutor` int(11) NOT NULL DEFAULT '1',
  `id_tutor2` int(11) NOT NULL,
  `debito_cuenta` int(11) NOT NULL DEFAULT '0',
  `credito_cuenta` int(11) NOT NULL DEFAULT '0',
  `saldo_cuenta` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id_cuenta`, `id_alumno`, `id_tutor`, `id_tutor2`, `debito_cuenta`, `credito_cuenta`, `saldo_cuenta`) VALUES
(1, 3, 0, 0, 355000, 240000, 115000),
(2, 2, 0, 0, 250000, 3700000, 500000),
(3, 24, 1, 0, 297000, 141000, -85000),
(4, 36, 1, 0, 293040, 226040, 0),
(5, 134, 0, 0, 5084000, 11088000, 5004000),
(6, 1, 0, 0, 275000, 400000, -125000),
(7, 21, 0, 0, 0, 0, 0),
(8, 22, 0, 0, 0, 0, 0),
(9, 25, 0, 0, 0, 0, 0),
(10, 27, 0, 0, 0, 0, 0),
(11, 23, 0, 0, 0, 0, 0),
(12, 26, 0, 0, 0, 0, 0),
(13, 28, 0, 0, 0, 0, 0),
(14, 29, 0, 0, 0, 0, 0),
(15, 30, 0, 0, 0, 0, 0),
(16, 32, 0, 0, 0, 0, 0),
(17, 33, 0, 0, 0, 0, 0),
(18, 34, 0, 0, 0, 0, 0),
(19, 31, 0, 0, 0, 0, 0),
(21, 35, 0, 0, 0, 0, 0),
(22, 37, 0, 0, 0, 0, 0),
(23, 38, 0, 0, 0, 0, 0),
(24, 39, 0, 0, 0, 0, 0),
(25, 40, 0, 0, 0, 0, 0),
(26, 41, 0, 0, 0, 0, 0),
(27, 42, 0, 0, 0, 0, 0),
(28, 43, 0, 0, 0, 0, 0),
(29, 45, 0, 0, 0, 0, 0),
(30, 46, 0, 0, 0, 0, 0),
(31, 47, 0, 0, 0, 0, 0),
(32, 48, 0, 0, 0, 0, 0),
(33, 49, 0, 0, 0, 0, 0),
(34, 50, 0, 0, 0, 0, 0),
(35, 51, 0, 0, 0, 0, 0),
(36, 52, 0, 0, 0, 0, 0),
(37, 53, 0, 0, 0, 0, 0),
(38, 54, 0, 0, 0, 0, 0),
(39, 55, 0, 0, 0, 0, 0),
(40, 57, 0, 0, 0, 0, 0),
(41, 56, 0, 0, 0, 0, 0),
(42, 58, 0, 0, 235000, 215000, -20000),
(43, 59, 0, 0, 0, 0, 0),
(44, 61, 0, 0, 0, 0, 0),
(45, 60, 0, 0, 0, 0, 0),
(46, 62, 0, 0, 0, 0, 0),
(47, 63, 0, 0, 0, 0, 0),
(48, 64, 0, 0, 0, 0, 0),
(49, 64, 0, 0, 0, 0, 0),
(50, 66, 0, 0, 0, 0, 0),
(51, 67, 0, 0, 0, 0, 0),
(52, 65, 0, 0, 0, 0, 0),
(53, 68, 0, 0, 0, 0, 0),
(54, 69, 0, 0, 0, 0, 0),
(55, 70, 0, 0, 0, 0, 0),
(56, 71, 0, 0, 0, 0, 0),
(57, 72, 0, 0, 0, 0, 0),
(58, 73, 0, 0, 0, 0, 0),
(59, 74, 0, 0, 0, 0, 0),
(60, 75, 0, 0, 0, 0, 0),
(61, 76, 0, 0, 0, 0, 0),
(62, 77, 0, 0, 0, 0, 0),
(63, 78, 0, 0, 0, 0, 0),
(64, 79, 0, 0, 0, 0, 0),
(65, 80, 136, 0, 0, 0, 0),
(66, 81, 0, 0, 0, 0, 0),
(67, 82, 0, 0, 0, 0, 0),
(68, 83, 0, 0, 0, 0, 0),
(69, 84, 0, 0, 0, 0, 0),
(70, 85, 0, 0, 0, 0, 0),
(71, 86, 0, 0, 0, 0, 0),
(72, 87, 0, 0, 0, 0, 0),
(73, 88, 0, 0, 0, 0, 0),
(74, 89, 0, 0, 0, 0, 0),
(75, 90, 0, 0, 0, 0, 0),
(76, 91, 0, 0, 0, 0, 0),
(77, 92, 0, 0, 0, 0, 0),
(78, 93, 0, 0, 0, 0, 0),
(79, 94, 0, 0, 0, 0, 0),
(80, 95, 0, 0, 0, 0, 0),
(81, 96, 0, 0, 0, 0, 0),
(82, 97, 0, 0, 0, 0, 0),
(83, 98, 0, 0, 0, 0, 0),
(84, 99, 0, 0, 0, 0, 0),
(85, 100, 0, 0, 0, 0, 0),
(86, 101, 0, 0, 0, 0, 0),
(87, 102, 0, 0, 0, 0, 0),
(88, 103, 0, 0, 0, 0, 0),
(89, 104, 0, 0, 300800, 100100, -200700),
(90, 105, 0, 0, 0, 0, 0),
(91, 107, 0, 0, 0, 0, 0),
(92, 106, 0, 0, 0, 0, 0),
(93, 108, 0, 0, 0, 0, 0),
(94, 109, 0, 0, 0, 0, 0),
(95, 110, 0, 0, 0, 0, 0),
(96, 111, 0, 0, 0, 0, 0),
(97, 112, 0, 0, 0, 0, 0),
(98, 113, 0, 0, 0, 0, 0),
(99, 114, 0, 0, 0, 0, 0),
(100, 115, 0, 0, 0, 0, 0),
(101, 116, 0, 0, 0, 0, 0),
(102, 117, 0, 0, 0, 0, 0),
(103, 118, 0, 0, 0, 0, 0),
(104, 119, 0, 0, 450000, 189500, -195500),
(105, 120, 0, 0, 0, 0, 0),
(106, 121, 0, 0, 0, 0, 0),
(107, 122, 0, 0, 0, 0, 0),
(108, 123, 0, 0, 0, 0, 0),
(109, 124, 0, 0, 0, 0, 0),
(110, 125, 0, 0, 0, 0, 0),
(111, 126, 0, 0, 0, 0, 0),
(112, 127, 0, 0, 0, 0, 0),
(113, 128, 0, 0, 0, 0, 0),
(114, 134, 0, 0, 0, 0, 0),
(115, 1, 0, 0, 0, 0, 0),
(116, 2, 0, 0, 0, 0, 0),
(117, 1, 0, 0, 0, 0, 0),
(118, 135, 0, 0, 0, 0, 0),
(119, 136, 0, 0, 0, 0, 0),
(120, 73, 0, 0, 0, 0, 0),
(121, 45, 0, 0, 0, 0, 0),
(122, 46, 0, 0, 0, 0, 0),
(123, 47, 0, 0, 0, 0, 0),
(124, 49, 0, 0, 0, 0, 0),
(125, 50, 0, 0, 0, 0, 0),
(126, 51, 0, 0, 0, 0, 0),
(127, 52, 0, 0, 0, 0, 0),
(128, 72, 0, 0, 0, 0, 0),
(129, 53, 0, 0, 0, 0, 0),
(130, 54, 0, 0, 0, 0, 0),
(131, 55, 0, 0, 0, 0, 0),
(132, 56, 0, 0, 0, 0, 0),
(133, 71, 0, 0, 0, 0, 0),
(134, 57, 0, 0, 0, 0, 0),
(135, 58, 0, 0, 0, 0, 0),
(136, 59, 0, 0, 0, 0, 0),
(137, 60, 0, 0, 0, 0, 0),
(138, 61, 0, 0, 0, 0, 0),
(139, 62, 0, 0, 0, 0, 0),
(140, 63, 0, 0, 0, 0, 0),
(141, 64, 0, 0, 0, 0, 0),
(142, 65, 0, 0, 0, 0, 0),
(143, 66, 0, 0, 0, 0, 0),
(144, 67, 0, 0, 0, 0, 0),
(145, 68, 0, 0, 0, 0, 0),
(146, 69, 0, 0, 0, 0, 0),
(147, 70, 0, 0, 0, 0, 0),
(148, 99, 0, 0, 0, 0, 0),
(149, 101, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_detalle`
--

CREATE TABLE IF NOT EXISTS `cuenta_detalle` (
  `id_cuenta_detalle` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `nro_comprobante` varchar(30) NOT NULL,
  `concepto_detalle` varchar(30) NOT NULL,
  `debito_detalle` int(11) NOT NULL DEFAULT '0',
  `credito_detalle` int(11) NOT NULL DEFAULT '0',
  `saldo_detalle` int(11) NOT NULL DEFAULT '0',
  `fecha_detalle` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta_detalle`
--

INSERT INTO `cuenta_detalle` (`id_cuenta_detalle`, `id_cuenta`, `nro_comprobante`, `concepto_detalle`, `debito_detalle`, `credito_detalle`, `saldo_detalle`, `fecha_detalle`) VALUES
(4, 3, '7889', 'pago cuota', 25000, 0, 160000, '2015-04-02 14:49:09'),
(5, 2, '7896', 'pago', 250000, 0, 0, '2015-04-02 15:00:41'),
(8, 4, '7', 'pago cuota febrero', 40, 21000, 51960, '2015-04-09 03:51:46'),
(11, 1, '898555', 'cuota marzo', 100000, 50000, -250000, '2015-04-09 04:31:25'),
(12, 1, '885', 'cuota abril', 0, 25000, 225000, '2015-04-09 04:33:12'),
(22, 1, '852', 'reserva', 0, 2000, 22000, '2015-04-10 03:43:15'),
(23, 1, '852', 'reserva', 0, 2000, 24000, '2015-04-10 03:43:15'),
(34, 5, '', '', 0, 1000000, 5000000, '2015-04-10 04:36:24'),
(35, 1, '4888', 'pago cuota', 0, 62000, 112000, '2015-04-13 00:10:46'),
(36, 1, '1', 'sumar', 0, 3000, 115000, '2015-04-13 00:15:51'),
(37, 5, '85', '48464', 0, 4000, 5004000, '2015-04-13 00:20:15'),
(38, 0, '48789', 'pago matricula', 250000, 200000, 0, '2015-04-18 03:19:08'),
(39, 0, '8555', 'pago matricula', 250000, 200000, 0, '2015-04-18 03:24:58'),
(40, 0, '488', 'cuota', 250000, 200000, 0, '2015-04-18 03:27:02'),
(41, 104, '4546546', 'cuota', 300000, 150000, -117500, '2015-04-18 03:39:24'),
(43, 104, '2322323bvnmbnb', 'nbmnbmnb', 50000, 2000, -165500, '2015-04-18 03:46:59'),
(44, 104, 'kdkd', 'dlldkdk', 40000, 10000, -195500, '2015-04-18 03:50:18'),
(45, 89, 'khjkjh', 'gjhghjg', 800, 100, -700, '2015-04-18 04:01:12'),
(46, 89, 'jkjjkhh', 'cuota', 300000, 100000, -200700, '2015-04-18 04:02:43'),
(47, 42, '56484665', 'pago de matricula', 70000, 50000, -20000, '2015-04-22 04:00:00'),
(48, 42, '88785', 'cuota', 165000, 165000, -20000, '2015-04-18 15:46:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_detalle_personalizado`
--

CREATE TABLE IF NOT EXISTS `cuenta_detalle_personalizado` (
  `id_cuenta_detalle_personalizado` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_clase` int(11) DEFAULT NULL,
  `cant_horas` double NOT NULL,
  `precio_hora` int(11) DEFAULT NULL,
  `debito` int(11) DEFAULT NULL,
  `credito` int(11) DEFAULT '0',
  `saldo` int(11) DEFAULT '0',
  `fecha` datetime NOT NULL,
  `nro_comprobante` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta_detalle_personalizado`
--

INSERT INTO `cuenta_detalle_personalizado` (`id_cuenta_detalle_personalizado`, `id_cuenta`, `id_clase`, `cant_horas`, `precio_hora`, `debito`, `credito`, `saldo`, `fecha`, `nro_comprobante`) VALUES
(1, 2, 4, 4, 15000, 0, 600000, -2300000, '2015-04-15 00:00:00', '88888'),
(2, 1, 6, 2.5, 14000, 10000, 35000, -300000, '2015-04-02 00:00:00', '7899'),
(3, 3, 10, 2, 15000, 30000, 15000, 100000, '2015-04-02 08:23:23', '788'),
(4, 3, 16, 1.5, 10000, 15000, 10000, 90000, '2015-04-02 07:47:49', '7899'),
(5, 3, 14, 4, 10000, 40000, 3000, 122000, '2015-04-02 07:59:22', '788'),
(6, 4, 6, 2, 10000, 30000, 20000, 40000, '2015-04-02 08:20:23', '488'),
(7, 4, 14, 2, 20000, 50000, 55000, 25000, '2015-04-02 08:05:14', '789'),
(8, 4, 12, 2, 5000, 2000, 1000, 26000, '2015-04-02 09:05:16', '588'),
(9, 3, 12, 5, 10000, 50000, 25000, 110000, '2015-04-02 09:07:04', '852'),
(10, 104, 4, 5, 10000, 50000, 25000, -25000, '2015-04-17 23:30:13', '15878855'),
(11, 104, 4, 2, 5000, 10000, 2500, 17500, '2015-04-17 23:34:34', '1253415454'),
(12, 6, 20, 5, 55000, 275000, 100000, -175000, '2015-04-18 11:49:57', '4546'),
(13, 6, 20, 0, NULL, 0, 300000, 475000, '2015-04-18 11:51:48', '55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE IF NOT EXISTS `descuentos` (
  `id_descuento` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `concepto_detalle` varchar(30) DEFAULT NULL,
  `precio_unitario` int(11) NOT NULL DEFAULT '0',
  `cantidad_hs` int(11) NOT NULL DEFAULT '1',
  `sub_total_descuento` int(11) NOT NULL DEFAULT '0',
  `fecha_detalle` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=552 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `id_profesor`, `concepto_detalle`, `precio_unitario`, `cantidad_hs`, `sub_total_descuento`, `fecha_detalle`, `id_estado`) VALUES
(550, 24, 'adelanto de efectivo', 20000, 1, 20000, '2015-09-30 03:05:02', 500),
(551, 24, 'descuentos', 80000, 2, 160000, '2015-09-29 04:00:00', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=502 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `descripcion`) VALUES
(500, 'activo'),
(501, 'desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE IF NOT EXISTS `etapas` (
  `id_etapa` int(11) NOT NULL,
  `descripcion_etapa` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id_etapa`, `descripcion_etapa`) VALUES
(1, 'Primera'),
(2, 'Segunda'),
(3, 'GLOBAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE IF NOT EXISTS `examenes` (
  `id_examen` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `r_w` int(11) NOT NULL,
  `listening` int(11) NOT NULL,
  `speaking` int(11) NOT NULL,
  `class_part` int(11) NOT NULL,
  `id_nota` int(30) NOT NULL,
  `fecha_examen` date NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`id_examen`, `id_alumno`, `id_clase`, `r_w`, `listening`, `speaking`, `class_part`, `id_nota`, `fecha_examen`, `id_etapa`) VALUES
(3, 31, 6, 80, 40, 20, 40, 1, '2015-03-14', 1),
(5, 23, 18, 20, 10, 20, 10, 1, '2015-03-10', 1),
(6, 32, 4, 40, 60, 40, 40, 0, '2015-03-11', 2),
(7, 22, 10, 30, 30, 30, 30, 0, '2015-03-14', 1),
(8, 23, 11, 20, 20, 20, 20, 0, '2015-03-12', 1),
(9, 22, 10, 30, 30, 30, 30, 0, '2015-03-17', 1),
(11, 23, 18, 20, 20, 20, 20, 1, '2015-03-04', 2),
(12, 22, 11, 10, 10, 10, 10, 2, '2015-03-03', 2),
(13, 121, 4, 10, 10, 10, 10, 0, '2015-04-16', 1),
(14, 99, 6, 15, 15, 15, 15, 0, '2015-04-18', 2),
(15, 63, 6, 20, 20, 20, 20, 0, '2015-04-08', 1),
(16, 91, 18, 80, 80, 80, 80, 0, '2015-04-08', 1),
(17, 28, 9, 13, 13, 13, 13, 0, '2015-04-09', 1),
(18, 110, 8, 9, 9, 9, 9, 0, '2015-04-09', 1),
(19, 32, 18, 20, 20, 20, 20, 0, '2015-04-21', 1),
(20, 32, 18, 40, 30, 30, 40, 0, '2015-04-16', 2),
(21, 80, 19, 39, 39, 35, 39, 0, '2015-04-23', 1),
(22, 80, 19, 41, 41, 41, 40, 0, '2015-04-16', 2),
(23, 23, 14, 35, 35, 40, 35, 0, '2015-04-16', 1),
(24, 23, 14, 59, 59, 59, 59, 0, '2015-04-30', 2),
(25, 71, 5, 20, 20, 20, 20, 0, '2015-04-16', 1),
(26, 71, 5, 30, 30, 30, 25, 0, '2015-04-30', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes_global`
--

CREATE TABLE IF NOT EXISTS `examenes_global` (
  `id_examen_global` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `r_w` int(11) NOT NULL,
  `listening` int(11) NOT NULL,
  `speaking` int(11) NOT NULL,
  `class_part` int(11) NOT NULL,
  `global_logro` int(11) NOT NULL,
  `id_nota` int(30) NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examenes_global`
--

INSERT INTO `examenes_global` (`id_examen_global`, `id_alumno`, `id_clase`, `r_w`, `listening`, `speaking`, `class_part`, `global_logro`, `id_nota`, `id_etapa`) VALUES
(6, 31, 5, 40, 40, 40, 40, 40, 40, 3),
(7, 22, 11, 30, 24, 24, 24, 24, 1, 3),
(8, 23, 10, 33, 67, 33, 33, 42, 1, 3),
(9, 28, 2, 0, 0, 0, 0, 0, 1, 3),
(10, 110, 8, 0, 0, 0, 0, 0, 1, 3),
(11, 32, 18, 100, 84, 84, 100, 92, 1, 3),
(12, 80, 19, 100, 100, 95, 99, 98, 1, 3),
(13, 23, 14, 118, 118, 124, 118, 119, 1, 3),
(14, 71, 5, 100, 100, 100, 90, 98, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes_ideal`
--

CREATE TABLE IF NOT EXISTS `examenes_ideal` (
  `id_examen_ideal` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `r_w` int(11) NOT NULL,
  `listening` int(11) NOT NULL,
  `speaking` int(11) NOT NULL,
  `class_part` int(11) NOT NULL,
  `fecha_examen` date NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examenes_ideal`
--

INSERT INTO `examenes_ideal` (`id_examen_ideal`, `id_clase`, `r_w`, `listening`, `speaking`, `class_part`, `fecha_examen`, `id_etapa`) VALUES
(6, 4, 50, 50, 50, 50, '2015-03-11', 1),
(7, 1, 50, 50, 50, 50, '2015-03-11', 2),
(8, 10, 60, 30, 60, 60, '2015-03-04', 1),
(9, 11, 50, 50, 50, 50, '2015-03-11', 1),
(11, 18, 30, 30, 30, 30, '2015-04-09', 1),
(12, 18, 40, 40, 40, 40, '2015-04-10', 2),
(13, 19, 40, 40, 40, 40, '2015-04-17', 1),
(14, 19, 45, 45, 45, 45, '2015-04-08', 2),
(15, 13, 20, 20, 20, 20, '2015-04-08', 1),
(16, 14, 40, 40, 40, 40, '2015-04-16', 1),
(17, 14, 60, 60, 60, 60, '2015-04-30', 2),
(18, 5, 25, 25, 25, 25, '2015-04-16', 1),
(19, 5, 30, 30, 30, 30, '2015-04-30', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle_profesor`
--

CREATE TABLE IF NOT EXISTS `factura_detalle_profesor` (
  `id_factura_detalle` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `monto_acumulado` int(11) NOT NULL,
  `monto_descontado` int(11) NOT NULL,
  `total_pagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_profesor`
--

CREATE TABLE IF NOT EXISTS `factura_profesor` (
  `id_factura` int(11) NOT NULL DEFAULT '0',
  `id_profesor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `id_forma_pago` int(11) NOT NULL,
  `descripcion_pago` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_forma_pago`, `descripcion_pago`) VALUES
(1, 'efectivo'),
(2, 'tranferencias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_catedras`
--

CREATE TABLE IF NOT EXISTS `horas_catedras` (
  `id_horas_catedras` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `precio_unitario` int(11) NOT NULL DEFAULT '0',
  `cantidad_hs` int(11) NOT NULL DEFAULT '1',
  `sub_total` int(11) NOT NULL DEFAULT '0',
  `fecha_detalle` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horas_catedras`
--

INSERT INTO `horas_catedras` (`id_horas_catedras`, `id_clase`, `id_profesor`, `precio_unitario`, `cantidad_hs`, `sub_total`, `fecha_detalle`, `id_estado`) VALUES
(500, 7, 70, 100000, 1, 100000, '2015-09-30 03:07:42', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id_nota` int(11) NOT NULL,
  `descripcion_nota` varchar(30) DEFAULT NULL,
  `valor_maximo` int(11) DEFAULT NULL,
  `valor_minimo` int(11) DEFAULT NULL,
  `letra` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `descripcion_nota`, `valor_maximo`, `valor_minimo`, `letra`) VALUES
(1, 'Excellent', 100, 97, 'A+'),
(2, 'Very Good', 96, 90, 'A'),
(3, 'Good', 89, 80, 'B'),
(4, 'Average', 79, 70, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id_pais` int(11) NOT NULL,
  `descripcion_pais` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `descripcion_pais`) VALUES
(1, 'Paraguay'),
(2, 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `nro_documento` varchar(30) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo_electronico` varchar(30) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `localidad` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_tipo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) unsigned NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persons`
--

INSERT INTO `persons` (`id`, `firstName`, `lastName`, `gender`, `address`, `dob`) VALUES
(1, 'esteban', 'chera', 'male', 'encar', '2002-01-01'),
(2, 'Garrett', 'Winters', 'male', 'japon', '1988-09-02'),
(6, 'David', 'hijo de isai', 'male', 'encarnacion', '1999-02-02'),
(7, 'juan', 'cruz', 'male', 'artigas', '2000-02-02'),
(8, 'samuel', 'arrieta', 'male', 'ayolas', '1990-02-04'),
(9, 'julian', 'cacaceres', 'female', 'encarnacion', '2002-02-02'),
(10, 'noelia', 'gonzalez', 'male', 'encarnaciion', '2002-02-02'),
(11, 'david', 'gonzalez', 'male', 'py', '2002-02-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_tipo_documento` int(30) DEFAULT NULL,
  `nro_documento` varchar(30) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `localidad` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `apellido`, `id_tipo_documento`, `nro_documento`, `telefono`, `correo_electronico`, `id_pais`, `localidad`, `fecha_nacimiento`) VALUES
(23, 'mirna', 'Benitez Santos', 1, '4889966', '0975686855', 'mirna@gmai.com', 2, 'encarnacion', '2013-08-13'),
(24, 'Victoria ', 'Berdejo Thiebeaud', NULL, '', '000', NULL, 0, NULL, NULL),
(68, 'Bianca', 'Núñez Barrios', NULL, '', '000', NULL, 0, NULL, NULL),
(69, 'Sofia ', 'Salinas Ramirez', NULL, '', '0000', NULL, 0, NULL, NULL),
(70, 'Santiago', 'Talavera Paniagua', NULL, '', '000', NULL, 0, NULL, NULL),
(71, 'Clarissa', 'Aranda', NULL, '', '000', NULL, 0, NULL, NULL),
(72, 'Marian', 'Aranda', NULL, '', '000', NULL, 0, NULL, NULL),
(73, 'Santiago', 'Benitez', NULL, '', '000', NULL, 0, NULL, NULL),
(74, 'Matias', 'Casas Barmuta', NULL, '1', '0000', NULL, 0, NULL, NULL),
(75, 'Micaela', 'Duarte', NULL, '1', '0000', NULL, 0, NULL, NULL),
(76, 'Maria Jose', 'Segovia Martinez', NULL, '1', '000', NULL, 0, NULL, NULL),
(77, 'Milko', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL),
(78, 'Cristhian ', 'Sumi', NULL, '1', '000', NULL, 0, NULL, NULL),
(79, 'Sianna', 'Vargas Benitez', NULL, '1', '000', NULL, 0, NULL, NULL),
(80, 'Briana', 'Abud Silvero', NULL, '1', '0000', NULL, 0, NULL, NULL),
(81, 'Joaquin', 'Bogado', NULL, '1', '000', NULL, 0, NULL, NULL),
(82, 'Tomás', 'Hrisuk Trussi', NULL, '1', '000', NULL, 0, NULL, NULL),
(83, 'Jazmin', 'Hsieh Pan', NULL, '1', '000', NULL, 0, NULL, NULL),
(84, 'Danna', 'Paredes', NULL, '1', '000', NULL, 0, NULL, NULL),
(85, 'Luján', 'Ramirez Benitez', NULL, '1', '000', NULL, 0, NULL, NULL),
(86, 'Sofia', 'Silvero Hoppe', NULL, '1', '000', NULL, 0, NULL, NULL),
(87, 'Fabián', 'Villasanti González', NULL, '1', '000', NULL, 0, NULL, NULL),
(88, 'Manuel', 'Aldana', NULL, '1', '000', NULL, 0, NULL, NULL),
(89, 'Martin', 'Ayala Pérez', NULL, '1', '000', NULL, 0, NULL, NULL),
(90, 'Daira', 'Bresani Agüero', NULL, '1', '000', NULL, 0, NULL, NULL),
(91, 'Valeria', 'Doldán Melgarejo', NULL, '1', '000', NULL, 0, NULL, NULL),
(92, 'Raúl', 'Benega Encina', NULL, '1', '000', NULL, 0, NULL, NULL),
(93, 'Constaza', 'Faraldo Benitez', NULL, '1', '000', NULL, 0, NULL, NULL),
(94, 'Suri', 'Murawski Shimanaka', NULL, '1', '000', NULL, 0, NULL, NULL),
(95, 'Maria Cielo', 'Rodriguez', NULL, '1', '000', NULL, 0, NULL, NULL),
(96, 'Nadia', 'Trociuk Andino', NULL, '1', '000', NULL, 0, NULL, NULL),
(97, 'Mathias', 'Villagra Melgarejo', NULL, '1', '0000', NULL, 0, NULL, NULL),
(98, 'Gabriela', 'Alvarez', NULL, '1', '000', NULL, 0, NULL, NULL),
(99, 'Alan', 'Bresani Agüero', 2, '', '0000', NULL, 1, NULL, NULL),
(100, 'Maria Magali', 'Chávez', NULL, '1', '000', NULL, 0, NULL, NULL),
(101, 'Adriana', 'Espinoza Von Knobloch', 1, '', '000', NULL, 1, NULL, NULL),
(102, 'Rebeca', 'Zayas', NULL, '1', '000', NULL, 0, NULL, NULL),
(103, 'Eugenia', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL),
(104, 'Maria Paz ', 'Segovia Martinez', NULL, '1', '000', NULL, 0, NULL, NULL),
(105, 'Marcos ', 'Damús Orué', NULL, '1', '000', NULL, 0, NULL, NULL),
(106, 'Giuliano', 'Ghiglione Orué', NULL, '1', '0000', NULL, 0, NULL, NULL),
(107, 'Maximiliano', 'Plese Pylik', NULL, '1', '0000', NULL, 0, NULL, NULL),
(108, 'Fiorella', 'Gimenez Bado', NULL, '1', '0000', NULL, 0, NULL, NULL),
(109, 'Lucas', 'Balbuena Rojas', NULL, '1', '0000', NULL, 0, NULL, NULL),
(110, 'Santiago', 'Caballero Arrúa', NULL, '1', '000', NULL, 0, NULL, NULL),
(111, 'Julieta', 'Cano Arregui', NULL, '1', '0000', NULL, 0, NULL, NULL),
(112, 'Jorge', 'Doldán Melgarejo', NULL, '1', '000', NULL, 0, NULL, NULL),
(113, 'Axel', 'Lamarque Abadie', NULL, '1', '0000', NULL, 0, NULL, NULL),
(114, 'Dahia', 'Pereira Gómez', NULL, '1', '0000', NULL, 0, NULL, NULL),
(115, 'Angel', 'Rodriguez Coronel', NULL, '1', '000', NULL, 0, NULL, NULL),
(116, 'Matias', 'Sawczuk Schmid', NULL, '1', '0000', NULL, 0, NULL, NULL),
(117, 'Esteban', 'Studenko Bordón', NULL, '1', '000', NULL, 0, NULL, NULL),
(118, 'Loisana', 'Zarza Schmid', NULL, '1', '000', NULL, 0, NULL, NULL),
(119, 'Enrique', 'Arrúa Melgarejo', NULL, '1', '0000', NULL, 0, NULL, NULL),
(120, 'Monserrat', 'Astigarraga Riquelme', NULL, '1', '0000', NULL, 0, NULL, NULL),
(121, 'Alejandro', 'Fernández Bordón', NULL, '1', '000', NULL, 0, NULL, NULL),
(122, 'Guillermina', 'Medina Britez', NULL, '1', '000', NULL, 0, NULL, NULL),
(123, 'Christian', 'Pedrozo Campuzano', NULL, '1', '0000', NULL, 0, NULL, NULL),
(124, 'Sofia', 'Quiñonez Gómez', NULL, '1', '0000', NULL, 0, NULL, NULL),
(125, 'Nicolás', 'Scheid', NULL, '1', '0000', NULL, 0, NULL, NULL),
(126, 'Ambar', 'Talavera Benitez', NULL, '1', '000', NULL, 0, NULL, NULL),
(127, 'Ariel', 'Villaverde Fariña', NULL, '1', '000', NULL, 0, NULL, NULL),
(135, 'Enzo Sebastian', 'Medina Riveros', 1, '', '81 995 224', NULL, 1, NULL, '2009-12-10'),
(136, 'Micaela Belén', 'Urdinola Flores', 1, '', '85 722 277', NULL, 1, NULL, '2009-11-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `id_prueba` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `saldo_cuenta` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_prueba`, `id_alumno`, `saldo_cuenta`) VALUES
(2, 24, 50500),
(4, 26, 870000),
(8, 24, 24),
(9, 25, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_alumnos`
--

CREATE TABLE IF NOT EXISTS `tipo_alumnos` (
  `id_tipo_alumno` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_alumnos`
--

INSERT INTO `tipo_alumnos` (`id_tipo_alumno`, `descripcion`) VALUES
(1, 'Regular'),
(2, 'Personalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documentos`
--

CREATE TABLE IF NOT EXISTS `tipo_documentos` (
  `id_tipo_documento` int(11) NOT NULL,
  `descripcion_tipo_documentos` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documentos`
--

INSERT INTO `tipo_documentos` (`id_tipo_documento`, `descripcion_tipo_documentos`) VALUES
(1, 'C.I'),
(2, 'D.N.I'),
(3, 'R.U.C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_personas`
--

CREATE TABLE IF NOT EXISTS `tipo_personas` (
  `id_tipo_persona` int(11) NOT NULL,
  `persona_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `id_tutor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `id_tipo_documento` int(30) DEFAULT NULL,
  `nro_documento` varchar(30) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `localidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `nombre`, `apellido`, `id_tipo_documento`, `nro_documento`, `telefono`, `correo_electronico`, `id_pais`, `localidad`) VALUES
(135, 'Lorena ', 'Gómez', 3, '1.393.185-7', '0975687951', NULL, 1, 'Encarnación'),
(136, 'Karla ', 'Silvero', 3, '2.295.351-5', '0985 182 768', NULL, 1, 'Encarnacion'),
(137, 'Walter', 'Duarte', 3, '2.876.431-5', '0985 ', 'walter.duarte@regional.com.py', 1, 'Encarnación'),
(138, 'Rubén', 'Zayas', 3, '687.562-9', '0', NULL, 1, 'Encarnación'),
(139, 'Maria Teresa', 'Benitez', 3, '412.011-6', '0', NULL, 1, 'Encarnación'),
(140, 'Ninfa', 'Garcia', 3, '2.295.351-5', '0', NULL, 1, 'Encarnación'),
(141, 'Pablo', 'Balbuena', 3, '2.978.327-5', '0', NULL, 1, 'Encarnación'),
(142, 'Dora', 'Bolf', 3, '870.365-5', '0985 115 603', NULL, 1, 'Encarnación'),
(143, 'Eugenio José', 'Cano', 3, '1.045.985-5', '0', NULL, 1, 'Encarnación'),
(144, 'Claudio', 'Diaz de Vivar', 3, '1.257.475-9', '0', NULL, 1, 'Encarnnación'),
(145, 'Jorge', 'Doldán', 3, '1.888.176', '0', NULL, 1, 'Encarnación'),
(146, 'Gregorio', 'Faraldo', 3, '1.735.501-0', '0985 780 078', NULL, 1, 'Encarnación'),
(147, 'Jorge', 'Fernández', 3, '791.609-4', '0', NULL, 1, 'Encarnación'),
(148, 'Adriana', 'González', 3, '1.482.714-0', '0', NULL, 1, 'Encarnación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`) VALUES
(1, 'diego', 'diego@gmail.com'),
(2, 'david', 'david@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'david', 'david'),
(2, 'yshizuka', 'yshizuka'),
(3, 'jose', 'jose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `asistencias_ideal`
--
ALTER TABLE `asistencias_ideal`
  ADD PRIMARY KEY (`id_asistencia_ideal`);

--
-- Indices de la tabla `asistencia_general`
--
ALTER TABLE `asistencia_general`
  ADD PRIMARY KEY (`id_asistencia_general`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indices de la tabla `cuenta_detalle`
--
ALTER TABLE `cuenta_detalle`
  ADD PRIMARY KEY (`id_cuenta_detalle`);

--
-- Indices de la tabla `cuenta_detalle_personalizado`
--
ALTER TABLE `cuenta_detalle_personalizado`
  ADD PRIMARY KEY (`id_cuenta_detalle_personalizado`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id_etapa`);

--
-- Indices de la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indices de la tabla `examenes_global`
--
ALTER TABLE `examenes_global`
  ADD PRIMARY KEY (`id_examen_global`);

--
-- Indices de la tabla `examenes_ideal`
--
ALTER TABLE `examenes_ideal`
  ADD PRIMARY KEY (`id_examen_ideal`);

--
-- Indices de la tabla `factura_profesor`
--
ALTER TABLE `factura_profesor`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id_forma_pago`);

--
-- Indices de la tabla `horas_catedras`
--
ALTER TABLE `horas_catedras`
  ADD PRIMARY KEY (`id_horas_catedras`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id_prueba`);

--
-- Indices de la tabla `tipo_alumnos`
--
ALTER TABLE `tipo_alumnos`
  ADD PRIMARY KEY (`id_tipo_alumno`);

--
-- Indices de la tabla `tipo_documentos`
--
ALTER TABLE `tipo_documentos`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_personas`
--
ALTER TABLE `tipo_personas`
  ADD PRIMARY KEY (`id_tipo_persona`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `asistencias_ideal`
--
ALTER TABLE `asistencias_ideal`
  MODIFY `id_asistencia_ideal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `asistencia_general`
--
ALTER TABLE `asistencia_general`
  MODIFY `id_asistencia_general` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id_banco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT de la tabla `cuenta_detalle`
--
ALTER TABLE `cuenta_detalle`
  MODIFY `id_cuenta_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `cuenta_detalle_personalizado`
--
ALTER TABLE `cuenta_detalle_personalizado`
  MODIFY `id_cuenta_detalle_personalizado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=552;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=502;
--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id_etapa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `examenes`
--
ALTER TABLE `examenes`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `examenes_global`
--
ALTER TABLE `examenes_global`
  MODIFY `id_examen_global` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `examenes_ideal`
--
ALTER TABLE `examenes_ideal`
  MODIFY `id_examen_ideal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id_forma_pago` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `horas_catedras`
--
ALTER TABLE `horas_catedras`
  MODIFY `id_horas_catedras` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=501;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipo_alumnos`
--
ALTER TABLE `tipo_alumnos`
  MODIFY `id_tipo_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_documentos`
--
ALTER TABLE `tipo_documentos`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_personas`
--
ALTER TABLE `tipo_personas`
  MODIFY `id_tipo_persona` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
