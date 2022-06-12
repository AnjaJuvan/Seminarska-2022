-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: webshop
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `Id` int NOT NULL AUTO_INCREMENT COMMENT 'An Unique Identifier of every product saved',
  `Title` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL DEFAULT '' COMMENT 'Title of the product',
  `Description` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL COMMENT 'Description of the prodcut',
  `ImageURL` varchar(500) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftacm.com%2Fwp-content%2Fuploads%2F2018%2F01%2Fno-image-available.jpeg&f=1&nofb=1' COMMENT 'URL of the product (can be local or from a external website)',
  `Price` decimal(20,6) NOT NULL DEFAULT '0.000000' COMMENT 'Price of the product',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (27,'Monster energy ','Original flavor of Monster energy drink','https://images.heb.com/is/image/HEBGrocery/000561259',3.000000),(28,'Monster energy ultra paradise','Monster Ultra Paradise, sugar free, pure, crisp, invigorating island flavors.','https://groceries.morrisons.com/productImages/504/504491011_0_640x640.jpg?identifier=2735080b7aba740a35537a82f1b35df6',3.000000),(30,'Zero-Sugar Ultra Peachy Keen','Zero sugar, juicy peach flavor and the Monster Energy blend from our secret stash. ','https://ipcdn.freshop.com/resize?url=https://images.freshop.com/00070847029427/1ac7ed0da608728c02363ce6c166f54b_large.png&width=512&type=webp&quality=90',4.000000),(31,'Zero-Sugar Ultra Watermelon','Zero sugar, easy-drinking refreshing flavor with the explosive Monster energy blend to light-up those hot summer nights.','https://snack.je/wp-content/webpc-passthru.php?src=https://snack.je/wp-content/uploads/2022/01/Monster-Zero-Sugar-Ultra-Watermelon-500ml.png&nocache=1',4.000000),(32,'Zero-Sugar Ultra Gold','With zero sugar, easy-drinking Ultra Gold has the heavenly fresh flavor of biting into a perfectly ripened golden pineapple.','https://www.turnerandwrights.co.uk/media/catalog/product/cache/e70602422d911f0edb0b0d50a9ac95bc/d/c/dcedecd889e90b10aa63cc2e74ba957e.jpg',5.000000),(33,'Zero Ultra a.k.a. The White Monster','Monster Zero Ultra a.k.a. the \"White Monster\" is zero sugar, lighter-tasting, zero calories, but with a full load of our Monster energy blend.','https://m.media-amazon.com/images/I/51wOEZQGM5L.jpg',2.000000),(34,'Zero-Sugar Ultra Black',' Monster Ultra Black a.k.a. the \"Black Monster\", refreshingly light with zero calories, sugar free and packed with our Monster energy blend.','https://www.perfectbody.ie/image/cache/data/2016-products/M/monster-energy-ultra-black-500-ml-zero-sugar-pack-of-12-600x315.jpg',4.000000),(35,'Zero-Sugar Ultra Fiesta Mango','Zero sugar Ultra Fiesta blends juicy mango flavor into the Ultra we love finished-off with a full load of our Monster Energy blend.','https://www.myamericanmarket.com/31807/monster-ultra-fiesta-mango-can.jpg',4.000000),(36,'Zero-Sugar Ultra Red','White, Blue, and now Ultra Red Monster: Light, crisp, refreshing with zero calories and zero sugar. ','https://cdn.shopify.com/s/files/1/0003/3914/8847/products/monster-ultra-zero-sugar-energy-drink-500ml-888719_1500x.jpg?v=1625484409',2.000000);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-12 21:16:12
