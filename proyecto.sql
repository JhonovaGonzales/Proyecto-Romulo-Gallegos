-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2016 a las 23:26:08
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(4) NOT NULL,
  `1Nombre del Alumno` varchar(40) DEFAULT NULL,
  `2Nombre del Alumno` varchar(40) DEFAULT NULL,
  `1Apellido del Alumno` varchar(40) DEFAULT NULL,
  `2Apellido del Alumno` varchar(40) DEFAULT NULL,
  `Tipo de C.I del Alumno` varchar(10) NOT NULL,
  `C.I del alumno` int(15) NOT NULL,
  `Fecha de Nacimiento` varchar(15) NOT NULL,
  `Lugar de Nacimiento` varchar(80) NOT NULL,
  `Año` varchar(5) NOT NULL,
  `Mención` varchar(15) NOT NULL,
  `Sección` varchar(15) NOT NULL,
  `Repite` varchar(3) NOT NULL,
  `Materias que Repite` varchar(80) NOT NULL,
  `Asignaturas Pendientes` varchar(3) NOT NULL,
  `Que Asignaturas` varchar(80) NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Peso` varchar(6) NOT NULL,
  `Plantel de Procedencia` varchar(30) NOT NULL,
  `Problemas de Salud` varchar(3) NOT NULL,
  `Que Problemas` varchar(80) NOT NULL,
  `Correo del Alumno` varchar(30) NOT NULL,
  `Celular del Alumno` int(30) NOT NULL,
  `1Nombre de la Madre` varchar(20) NOT NULL,
  `2Nombre de la Madre` varchar(20) NOT NULL,
  `1Apellido de la Madre` varchar(20) NOT NULL,
  `2Apellido de la Madre` varchar(20) NOT NULL,
  `Tipo de C.I de la Madre` varchar(15) NOT NULL,
  `C.I de la Madre` int(15) NOT NULL,
  `Celular de la MAdre` int(20) NOT NULL,
  `Habitación de la Madre` int(20) NOT NULL,
  `Oficina de la Madre` int(20) NOT NULL,
  `Lugar de Trabajo de la Madre` varchar(40) NOT NULL,
  `Dirección de la Madre` varchar(20) NOT NULL,
  `Profesión de la Madre` varchar(30) NOT NULL,
  `1Nombre del Padre` varchar(20) NOT NULL,
  `2Nombre del Padre` varchar(20) NOT NULL,
  `1Apellido del Padre` varchar(20) NOT NULL,
  `2Apellido del Padre` varchar(20) NOT NULL,
  `Tipo de C.I del Padre` varchar(15) NOT NULL,
  `C.I del Padre` int(15) NOT NULL,
  `Celular del Padre` int(15) NOT NULL,
  `Habitación del Padre` int(15) NOT NULL,
  `Oficina del Padre` int(15) NOT NULL,
  `Lugar de Trabajo del Padre` varchar(30) NOT NULL,
  `Dirección del Padre` varchar(40) NOT NULL,
  `Profesión del Padre` varchar(30) NOT NULL,
  `1Nombre del Representante` varchar(20) NOT NULL,
  `2Nombre del Representante` varchar(20) NOT NULL,
  `1Apellido del Representante` varchar(20) NOT NULL,
  `2Apellido del Representante` varchar(20) NOT NULL,
  `Tipo de C.I del Representante` varchar(15) NOT NULL,
  `C.I del Representante` int(15) NOT NULL,
  `Celular del Representante` int(15) NOT NULL,
  `Habitación del Representante` int(15) NOT NULL,
  `Oficina del Representante` int(15) NOT NULL,
  `Lugar de Trabajo del Representante` varchar(40) NOT NULL,
  `Profesión del Representante` varchar(30) NOT NULL,
  `Parentesco del Representante` varchar(15) NOT NULL,
  `Correo del Representante` varchar(20) NOT NULL,
  `1Nombre de la PA` varchar(20) NOT NULL,
  `2Nombre de la PA` varchar(20) NOT NULL,
  `1Apellido de la PA` varchar(20) NOT NULL,
  `2Apellido de la PA` varchar(30) NOT NULL,
  `Tipo de C.I de la PA` varchar(15) NOT NULL,
  `C.I de la PA` int(20) NOT NULL,
  `Celular de la PA` int(15) NOT NULL,
  `Habitación de la PA` int(15) NOT NULL,
  `Oficina de la PA` int(15) NOT NULL,
  `Lugar de Trabajo de la PA` varchar(30) NOT NULL,
  `Dirección de la PA` varchar(30) NOT NULL,
  `Profesión de la PA` varchar(30) NOT NULL,
  `Parentesco de la PA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
