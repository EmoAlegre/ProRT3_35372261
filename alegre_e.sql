-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2024 a las 03:51:31
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
-- Base de datos: `alegre_e`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(2, 'emi', 'emi', 'emicapo', 'emicapo@gmail.com', '$2y$10$oXQm4yKhPgp45gaLBWWHXeW3NkAUlZCfOG4YcBemPU2.Tc74wdWT.', 2, 'NO'),
(3, 'ema', 'ema', 'ema', 'ema@gmail.com', '$2y$10$nDv/X53LZuN1Vw.keniBeuVk1fExWbu2uorZYBh.AlpjABjKuGFqG', 2, 'NO'),
(4, 'eme', 'eme', 'eme', 'eme@gmail.com', '$2y$10$hwUvMUKgmMlF2P89k3D4dOpQpJXBe6PbsXnMk139FXugDeQXInBkG', 2, 'NO'),
(5, 'carlos', 'carlos', 'carlos', 'carlos@carlos.com', '$2y$10$N8kwFwuh8bqmdhoHJU5rkOv5yAM14VxHHNagnJ.jy7wwjTesA3a1q', 2, 'NO'),
(6, 'hemo', 'hemo', 'hemo', 'hemo@mail.com', '$2y$10$UnxOR14/CYayUBHKUPrHxuEkSjYzyV.IIL4Ykhr1hJNamUofrvJjW', 1, 'NO'),
(7, 'cacho', 'cacho', 'cacho', 'cacho@mail.com', '$2y$10$b5U66YEYGULPVK4JHZ.pSeyR2qMvyTdU0NamaCP8t61OKQuS5rc3G', 2, 'NO'),
(8, 'hema', 'hema', 'hema', 'hema@mail.com', '$2y$10$NSvuqKoA4pQpAcyUGLFaj.oIkwrPzdTYBQRaFynf4teLvLQJLJ9gq', 2, 'NO'),
(9, 'Mayu', 'Mayu', 'Mayu', 'Mayu@mail.com', '$2y$10$Gnubb8cFOWDPwsnTajq7wOPxaL2vWIaU6XCRNsHh0kq3ixV.Z7zh.', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
