-- Base de datos: `Facultad`
--C1ZC--
--https://github.com/C1ZC
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
-- Estructura de tabla para la tabla `profesore`
--
CREATE DATABASE empleados;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(70) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Password` varchar(60) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `profesores` (
  `idempleados` int(11) NOT NULL ,
  `Apellido` varchar(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Seccional` varchar(25) NOT NULL,
  `Facultad` varchar(25) NOT NULL,
  `Cargo` varchar(25) NOT NULL,
  `Salario` int(25) NOT NULL,
  `Fech_com` date NOT NULL,
  `Fech_nac` date NOT NULL,
   UNIQUE (`idempleados`)); 