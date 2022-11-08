-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 04:27:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` bit(1) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `edad`, `sexo`, `domicilio`, `fecha_nacimiento`) VALUES
(1, 'James C. Baker', 24, b'1', '4953 Williams Avenue\r\nLake Los Angeles, CA 93550', '2022-05-19'),
(2, 'Melissa J. Scholz', 61, b'0', '2348 Werninger Street\r\nHouston, TX 77030', '2022-11-19'),
(3, 'John S. Foster', 32, b'1', '4234 Crim Lane\r\nBrookville, OH 45309', '2022-04-15'),
(4, 'Anthony B. Burr ', 25, b'1', '2667 Hemlock Lane\r\nHarlingen, TX 78550', '2022-04-14'),
(5, 'Gabrielle F. Gibson', 28, b'0', '3571 Wilkinson Court\r\nFort Myers, FL 33905', '2022-07-14'),
(6, 'Martha D. Ames', 28, b'0', '1065 Conference Center Way\r\nManassas, VA 22110', '2022-04-06'),
(7, 'Kim K. Dupre', 37, b'0', '4839 Godfrey Road\r\nNew York, NY 10016', '2022-10-15'),
(8, 'Maureen F. Necaise', 48, b'0', '4080 McDonald Avenue\r\nLake Mary, FL 32746', '2022-07-15'),
(9, 'Dean M. Vitale', 29, b'1', '3472 Bobcat Drive\r\nBeltsville, MD 20705', '2022-08-28'),
(10, 'Debbie A. Roden', 21, b'0', '3818 Pearcy Avenue\r\nFort Wayne, IN 46804', '2022-07-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
