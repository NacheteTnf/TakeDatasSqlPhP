-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.18-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para imprenta
CREATE DATABASE IF NOT EXISTS `imprenta` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `imprenta`;

-- Volcando estructura para tabla imprenta.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `idArticulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArticulo` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`idArticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla imprenta.articulos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`idArticulo`, `nombreArticulo`, `precio`, `imagen`) VALUES
	(1, 'LETTERPRESS PRINT SET (5 PRINTS)', 75, 'Captura1.PNG'),
	(2, 'ENDLESS POSSIBILITIES (LETTERPRESS PRINT)', 18, 'Captura2.PNG'),
	(3, 'DO WHAT YOU LOVE (LETTERPRESS PRINT)', 18, 'Captura3.PNG'),
	(4, 'SLOW & STEADY (LETTERPRESS PRINT)', 18, 'Captura4.PNG'),
	(5, 'GET UNCOMFORTABLE (LETTERPRESS PRINT)', 18, 'Captura5.PNG'),
	(6, 'NEVER SETTLE (LETTERPRESS PRINT)', 18, 'Captura6.PNG'),
	(7, 'DAY & NIGHT (PRINT SET)', 48, 'Captura7.PNG'),
	(8, 'NEVER SETTLE (PRINT)', 26, 'Captura8.PNG');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
