-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-06-2019 a las 17:13:52
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tb_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `apellidos` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `pais` varchar(300) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha_nacimiento`, `pais`, `fecha_registro`) VALUES
(18, 'jose', 'jose', 'jose@gmail.com', 'jose', '2019-06-20', 'jose', '2019-06-10 11:20:37'),
(20, 'sad', 'asd', 'atiketesale@gmail.com', 'sdfsdfsdfsdf', '2019-06-26', 'asd', '2019-06-10 13:21:49'),
(21, 'new updated', 'new', 'new@gmail.com', '', '2019-06-04', 'new', '2019-06-10 22:14:20'),
(30, 'jose', 'apellidos', 'josasde@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(50, 'jose', 'apellidos', 'josdfgasde@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(61, 'jose', 'apellidos', 'dfgdfg@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(77, 'jose', 'apellidos', 'dfgdDSFSDFfg@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(80, 'jose', 'apellidos', 'dfgdDSASFSDFfg@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(87, 'jose', 'apellidos', 'SDFSDF@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(121, 'jose', 'apellidos', 'D@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(125, 'jose', 'apellidos', 'SDFSDFSDFD@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(127, 'jose', 'apellidos', 'werwe@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(128, 'jose', 'apellidos', 'sdf@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(158, 'jose', 'apellidos', 'sddf@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(164, 'jose', 'apellidos', 'sdddsff@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(172, 'jose', 'apellidos', 'dfg@gmail.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(175, 'jose', 'apellidos', 'dfg@asdasd.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(198, 'jose', 'apellidos', 'ddfg@asdasd.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00'),
(201, 'jose', 'apellidos', 'dddfgfg@asdasd.com', 'passwosdfrd', '1434-04-03', 'espaÃ±a', '1999-12-31 23:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
