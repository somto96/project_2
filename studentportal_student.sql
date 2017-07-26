-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: studentportal
-- ------------------------------------------------------
-- Server version	5.5.28

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regnumber` varchar(11) NOT NULL,
  `department` int(10) unsigned NOT NULL,
  `level` int(1) unsigned NOT NULL,
  `surname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `othernames` varchar(45) NOT NULL,
  `lga` int(5) unsigned NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `regnumber_UNIQUE` (`regnumber`),
  KEY `fk_student_dept_idx` (`department`),
  KEY `fk_student_lga_idx` (`lga`),
  CONSTRAINT `fk_student_dept` FOREIGN KEY (`department`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_lga` FOREIGN KEY (`lga`) REFERENCES `lga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'2012/123456',38,5,'Ciroma','Chukwuma','Adekunle',209,'08012345678','cc.ade@jamb.org.ng','123 JAMB Street, Ikeja, Lagos'),(4,'2011/176480',42,5,'Aso','Leo','Ukweni',10,'08099030231','aso_leo@yahoo.com','302 Alvan Hall, Nsukka'),(5,'2012/123768',40,1,'Eze','Somto','Emma',306,'08164076967','Johndoe@gmail.com','Eni-Njoku, UNN'),(6,'2012/191456',1,1,'Aka','Christian','Onyeka',74,'08037456823','aka1@yahoo.com','Cartwright, UNN'),(7,'2012/185606',40,1,'Anene','Kenechukwu','Victor',78,'07038585235','palvicnene@gmail.com','Odim gate, UNN'),(8,'2012/181207',40,1,'Ezerioha','Somtochukwu','Emmanuel',307,'08164076967','somtochukwu.ezerioha.181207@unn.edu.ng','Alvan Ikoku, UNN.'),(9,'2012/182501',40,2,'Eze','Kelvin','Chukwuebuka',267,'08103930076','kelvin.eze.182501@unn.edu.ng','Alvan Ikoku, UNN.'),(10,'2012/182487',37,1,'Maduekwe','Olisadera','Frances',77,'08188360285','frachiemaddy@gmail.com','Akintola, UNN'),(11,'2012/182473',40,1,'Amadi','Chukwuemeka','James',262,'07064462126','jamesamadi88@gmail.com','Hilltop, UNN'),(12,'2012/185577',37,1,'Iloegbunam','Justin','Chukwuebuka',264,'07065413516','iloegbunam@gmail.com','Hilltop, UNN'),(13,'2012/182470',40,2,'Ene','Ozy','Chisom',1,'08162445443','oziomaene@gmail.com','unn'),(14,'2013/186871',40,4,'Igwe','Miracle','Chinonso',295,'08148286795','miracle.igwe.186871@unn.edu.ng','UNN');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-24  8:15:55
