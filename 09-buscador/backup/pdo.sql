-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2022 a las 08:48:52
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `fecha_publicacion`, `titulo`, `contenido`, `estado`) VALUES
(1, '2016-01-01', 'Desarrollo de Aplicaciones con Visual Studio 2019', '<p>Utilizando Visual Studio 2019 aprenderás a desarrollar aplicaciones en .NET con la sintaxis del lenguaje .NET y/o Visual Studio.NET. El curso comienza con el desarrollo de aplicaciones utilizando la última versión del Framework de Microsoft .NET.</p>', 1),
(2, '2016-02-14', 'curso de Seguridad en PHP', '<p>Implementar criterios de seguridad del lenguaje php para proteger la integridad de los datos y usabilidad de la aplicación.</p>', 1),
(3, '2016-03-01', 'Desarrollo de aplicaciones para Android con Java', '<p>Dirigido a Profesionales y técnicos, incluso estudiantes que tengan la necesidad de aprender a programar aplicaciones móviles.</p>', 1),
(4, '2016-02-19', 'Administración de Servidores en Linux (Básico)', '<p>Dirigido a:  Estudiantes, que quieran desarrollar una carrera profesional como técnicos  de sistemas en Linux o que deseen completar su perfil profesional.</p>', 1),
(5, '2016-01-13', 'Instalación y Configuración de Correos con Exchange y ZImbra', '<p>Zimbra es la solución líder para correo electrónico y calendario de código abierto para empresas, proveedores de servicios, instituciones académicas y gubernamentales. Zimbra ofrece un software de grupos, moderno e innovador, muy superior a los sistemas de software anteriores.</p>', 1),
(6, '2016-02-14', 'SQL SERVER Administración l', '<p>Este curso está dirigido para profesionales de IT quienes se encargan de  administrar, IMPLEMENTAR y MANTENER bases de datos de SQL. Se necesitan conocimientos previos en Diseño de BD y programación de BD.</p>', 1),
(7, '2017-01-02', 'Análisis Estadístico de Datos con SPSS V.25', '<p>Personas de diferentes Profesiones, Estudiantes, Técnicos e investigadores, que  quieren conocer el uso del SPSS y la aplicación de procedimientos estadísticos para  el tratamiento y análisis de la información.</p>', 2),
(8, '2015-09-16', 'Análisis y Diseño de Sistema con UML', '<p>El Lenguaje de Modelamiento Unificado (UML – Unified Modeling Language) es un lenguaje gráfico para visualizar, especificar y documentar cada una de las partes que comprende el desarrollo de software.</p>', 1),
(9, '2014-12-31', 'Cloud Computing', '<p>Este curso proporciona la cobertura total de los temas fundamentales del Cloud Computing en relación con la tecnología y las consideraciones de negocio. </p>', 1),
(10, '2016-07-16', 'Hacking y Ciber Seguridad', '<p> En este curso aprenderás desde cero las técnicas que usan los cibercriminales para tomar el control de los sistemas. Esto te permitirá proponer contramedidas para mitigarlas y proteger tu red frente a ataques a la Seguridad de la Información.</p>', 2),
(11, '2016-03-10', 'Desarrollo de Página Web', '<p>En el curso se explicaran las técnicas y métodos necesarios para hacer aplicaciones web dinámicas haciendo uso PHP y MYSQL</p>', 1),
(12, '2016-02-24', 'Diseño de Pagina Web', '<p>El curso está abierto a todo aquél que deseen adquirir conocimientos prácticos en  el diseño y publicación de sitios web en Internet.</p>', 1),
(13, '2015-12-31', 'Desarrollo Web Con Django', '<p>El alumno será capaz elaborar sitios web con Django, un framework basado en Python, utilizado hoy en día ampleamente en código libre.</p>', 1),
(14, '2016-01-01', 'Seguridad Informática', 'Estudiantes de cualquiera de las áreas de conocimientos vinculadas o  relacionadas con la seguridad informática.Estudiantes de carreras afines a computación, sistemas y electrónica que desean enriquecer sus conocimientos en el tema de seguridad.', 1),
(15, '2015-11-30', 'Programacion En Python', '<p>Dirigido a Profesionales y técnicos, incluso estudiantes que tengan la necesidad de aprender a programar aplicaciones móviles.</p>', 1),
(17, '0000-00-00', 'Cambio de nombre', 'El contenido a ha cambiado', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
