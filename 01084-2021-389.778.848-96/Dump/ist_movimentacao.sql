-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: ist
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `movimentacao`
--

DROP TABLE IF EXISTS `movimentacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movimentacao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_conta` int(11) unsigned NOT NULL,
  `data` datetime DEFAULT NULL,
  `movimentacao` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `id_conta` (`id_conta`),
  CONSTRAINT `movimentacao_ibfk_1` FOREIGN KEY (`id_conta`) REFERENCES `contas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimentacao`
--

LOCK TABLES `movimentacao` WRITE;
/*!40000 ALTER TABLE `movimentacao` DISABLE KEYS */;
INSERT INTO `movimentacao` VALUES (1,3,'2020-10-10 10:00:00','200'),(2,1,'2020-10-10 10:00:00','10'),(3,4,'2020-10-10 10:00:00','-20'),(4,1,'2021-06-20 19:03:25','700'),(5,1,'2021-06-20 19:08:51','700'),(6,1,'2021-06-20 19:10:07','700'),(7,1,'2021-06-20 19:14:47','700'),(8,1,'2021-06-20 19:14:54','700'),(9,3,'2021-06-20 19:16:11','100'),(10,3,'2021-06-20 19:18:00','100'),(11,3,'2021-06-20 19:21:45','100'),(12,3,'2021-06-20 19:23:33','100'),(13,3,'2021-06-20 19:23:42','100'),(14,6,'2021-06-20 19:25:59','450'),(15,6,'2021-06-20 19:26:40','50'),(16,6,'2021-06-20 19:26:54','10'),(17,6,'2021-06-20 19:29:32','10'),(18,6,'2021-06-20 19:29:36','10'),(19,3,'2021-06-20 19:38:58','100'),(20,3,'2021-06-20 19:39:09','100'),(21,3,'2021-06-20 19:41:02','-100'),(22,3,'2021-06-20 19:41:10','-100');
/*!40000 ALTER TABLE `movimentacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-20 23:36:31
