CREATE DATABASE  IF NOT EXISTS `community` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `community`;
-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: community
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `type` varchar(30) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user`, `password`, `email`, `address`, `city`, `type`) VALUES (1,'test','$2y$10$sk12hghtA5xM7ZgdDJbAiOLm641VsCwrZROG6QuOjybrhpZ9ewXRK','test1@gmail.com','test','test','user'),(2,'q','$2y$10$YZdetPLwvcL3hlc.CFoGv.jctQnh9EbIOoFoZKScBkz3fAqpfj0Ti','q@q.com','q','q','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteeringopps`
--

DROP TABLE IF EXISTS `volunteeringopps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteeringopps` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `volunteeringopp` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `enddate` datetime DEFAULT NULL,
  `uploader` int(8) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteeringopps`
--

LOCK TABLES `volunteeringopps` WRITE;
/*!40000 ALTER TABLE `volunteeringopps` DISABLE KEYS */;
INSERT INTO `volunteeringopps` (`id`, `volunteeringopp`, `address`, `description`, `enddate`, `uploader`, `status`) VALUES (1,'test','test','test','4141-12-12 00:41:00',1,0),(2,'Test','t','t','3123-03-21 00:31:00',1,0);
/*!40000 ALTER TABLE `volunteeringopps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteerlist`
--

DROP TABLE IF EXISTS `volunteerlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteerlist` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `volid` int(8) DEFAULT NULL,
  `uid` int(8) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteerlist`
--

LOCK TABLES `volunteerlist` WRITE;
/*!40000 ALTER TABLE `volunteerlist` DISABLE KEYS */;
INSERT INTO `volunteerlist` (`id`, `volid`, `uid`, `status`) VALUES (1,1,1,0),(2,1,2,0),(3,2,2,0);
/*!40000 ALTER TABLE `volunteerlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-26 12:28:34
