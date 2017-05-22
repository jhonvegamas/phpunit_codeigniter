-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5170
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para torneo
DROP DATABASE IF EXISTS `torneo`;
CREATE DATABASE IF NOT EXISTS `torneo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `torneo`;

-- Volcando estructura para tabla torneo.match
CREATE TABLE IF NOT EXISTS `match` (
  `id_match` int(11) NOT NULL,
  `id_tournament` int(11) NOT NULL,
  `id_phase` int(11) NOT NULL,
  `team_id_a` int(11) NOT NULL,
  `score_a` int(2) NOT NULL,
  `team_id_b` int(11) NOT NULL,
  `score_b` int(2) NOT NULL,
  PRIMARY KEY (`id_match`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla torneo.phase
CREATE TABLE IF NOT EXISTS `phase` (
  `id_phase` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  PRIMARY KEY (`id_phase`,`id_tournament`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla torneo.team
CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_team`,`id_tournament`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla torneo.tournament
CREATE TABLE IF NOT EXISTS `tournament` (
  `id_tournament` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(45) NOT NULL,
  `name` varchar(21) NOT NULL,
  `description` varchar(45) NOT NULL,
  `image_url` varchar(45) NOT NULL,
  `color` varchar(8) NOT NULL,
  PRIMARY KEY (`id_tournament`,`user_email`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla torneo.user
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(45) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
