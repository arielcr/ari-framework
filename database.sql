-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2012 a las 14:32:23
-- Versión del servidor: 5.1.63
-- Versión de PHP: 5.3.3-7+squeeze14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio`
--

CREATE TABLE IF NOT EXISTS `privilegio` (
  `id_privilegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_privilegio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio_x_rol`
--

CREATE TABLE IF NOT EXISTS `privilegio_x_rol` (
  `id_privilegio_x_rol` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_privilegio` int(11) NOT NULL,
  PRIMARY KEY (`id_privilegio_x_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('administrador','lector') NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ingreso_total` int(11) NOT NULL,
  `ingreso_fecha` datetime NOT NULL,
  `ingreso_ip` varchar(25) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
