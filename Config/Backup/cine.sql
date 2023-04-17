-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 11:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valoracion` int(11) NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id`, `Nombre`, `Descripcion`, `Valoracion`, `Imagen`) VALUES
(1, 'Avengers', 'Pelicula de superheroes', 9, ''),
(2, 'Titanic', 'Pelicula del mar', 10, ''),
(4, 'Iron Man ', 'Hombre de Hierro', 9, ''),
(7, 'Iron man 2', 'Hombre de Hierro', 1, ''),
(9, 'Interestellar 3', 'Pelicula del espacio', 10, ''),
(12, 'Harry Potter', 'Pelicula de magia y hechizos ', 10, ''),
(13, 'The boys', 'Película de super héroes ', 10, ''),
(14, 'Thor Love of thunder', 'Película del Dios del trueno', 10, ''),
(15, 'Gato con botas', 'Película animada', 6, ''),
(16, 'Animales Fantasticos', 'Fantasia', 6, ''),
(17, 'Animales Fantasticos II', 'Fantasia', 6, ''),
(18, 'Dark', 'Serie de terror', 10, ''),
(19, 'Animales Fantasticos', 'Fantasía ', 6, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
