-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for webshop
CREATE DATABASE IF NOT EXISTS `webshop` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `webshop`;

-- Dumping structure for table webshop.products
CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'An Unique Identifier of every product saved',
  `Title` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '' COMMENT 'Title of the product',
  `Description` varchar(255) COLLATE armscii8_bin DEFAULT NULL COMMENT 'Description of the prodcut',
  `ImageURL` varchar(500) COLLATE armscii8_bin DEFAULT 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftacm.com%2Fwp-content%2Fuploads%2F2018%2F01%2Fno-image-available.jpeg&f=1&nofb=1' COMMENT 'URL of the product (can be local or from a external website)',
  `Price` decimal(20,6) NOT NULL DEFAULT 0.000000 COMMENT 'Price of the product',
  `CREATED_AT` date NOT NULL DEFAULT current_timestamp() COMMENT 'When the product was created',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table webshop.products: ~2 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`Id`, `Title`, `Description`, `ImageURL`, `Price`, `CREATED_AT`) VALUES
	(1, 'A Massive ass', 'This massive ass can be portable for every occasion', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftacm.com%2Fwp-content%2Fuploads%2F2018%2F01%2Fno-image-available.jpeg&f=1&nofb=1', 0.000000, '2022-04-12'),
	(2, 'Chicken nuggies', 'Just a couple of nuggies', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmcdonalds.com.au%2Fsites%2Fmcdonalds.com.au%2Ffiles%2Fhero_pdt_6_nuggets_no_sauce.png&f=1&nofb=1', 5.000000, '2022-04-12'),
	(4, 'Monster Energy', 'Just a monster Energy', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.ifmal.com%2Fwp-content%2Fuploads%2F2020%2F01%2FMonster-Energy-Drink-500ml-1579622858.jpg&f=1&nofb=1', 69.000000, '2022-04-12');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
