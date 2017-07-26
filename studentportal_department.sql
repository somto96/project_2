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
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `faculty` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_department_faculty_idx` (`faculty`),
  CONSTRAINT `fk_department_faculty` FOREIGN KEY (`faculty`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Agric. Economics',1),(2,'Agric. Extension',1),(3,'Animal Science',1),(4,'Soil Science',1),(5,'Archaeology & Tourism',2),(6,'English & Literary Studies',2),(7,'Fine & Applied Arts',2),(8,'Foreign Languages',2),(9,'History & International Studies',2),(10,'Linguistics & Nigerian Languages',2),(11,'Mass Communication',2),(12,'Music',2),(13,'Performing Arts',2),(14,'Accountancy',3),(15,'Biochemistry',3),(16,'Business Administration	',3),(17,'Marketing',3),(18,'Microbiology',3),(19,'Plant Sciences',3),(20,'Zoology',3),(21,'Banking & Finance',4),(22,'Management',4),(23,'Child Dental Health',5),(24,'Oral Maxillofacial Surgery',5),(25,'Preventive Dentistry',5),(26,'Restorative Dentistry',5),(27,'Adult Education',6),(28,'Arts Education',6),(29,'Computer Education',6),(30,'Education Foundation',6),(31,'Health & Physical Education',6),(32,'Home Economics',6),(33,'Library Sciences Education',6),(34,'Science Education',6),(35,'Social Science Education',6),(36,'Vocational Teacher Education',6),(37,'Agric. & Bioresources Engineering',7),(38,'Civil Engineering',7),(39,'Electrical Engineering',7),(40,'Electronic Engineering',7),(41,'Materials & Metallurgical Engineering',7),(42,'Mechanical Engineering',7),(43,'Architecture',8),(44,'Estate Management',8),(45,'Surveying & Geodesy',8),(46,'Urban & Regional Planning',8),(47,'Medical Laboratory Technology',9),(48,'Medical Rehabilitation',9),(49,'Nursing Sciences',9),(50,'International Law & Jurisprudence',10),(51,'Property Law',10),(52,'Public & Private Law',10),(53,'Anaesthesia',11),(54,'Anatomy',11),(55,'Chemical Pathology',11),(56,'Community Medicine',11),(57,'Dermatology',11),(58,'Haematology & Immunology',11),(59,'Medical Biochemistry',11),(60,'Medical Microbiology',11),(61,'Morbid Anatomy',11),(62,'Obstetrics & Gaenecology',11),(63,'Ophthalmology',11),(64,'Otolaringology',11),(65,'Paediatric Surgery',11),(66,'Paediatrics',11),(67,'Pharmacology & Therapeutics',11),(68,'Physiological Medicine',11),(69,'Radiation Medicine',11),(70,'Surgery',11),(71,'Clinical Pharmacy',12),(72,'Pharmaceutical Technology',12),(73,'Pharmaceutical and Medicinal Chemistry',12),(74,'Pharmaceutics',12),(75,'Pharmacognosy',12),(76,'Pharmacognosy and Environmental Medicines',12),(77,'Pharmacology and Toxicology',12),(78,'Computer Science',13),(79,'Geology',13),(80,'Mathematics',13),(81,'Physics & Astronomy',13),(82,'Pure and Industrial Chemistry',13),(83,'Statistics',13),(84,'Economics',14),(85,'Geography',14),(86,'Philosophy',14),(87,'Psychology',14),(88,'Public Administration',14),(89,'Religious and Cultural Studies',14),(90,'Social Work',14),(91,'Sociology & Anthropology',14),(92,'Animal Health & Production',15),(93,'Veterinary Anatomy',15),(94,'Veterinary Medicine',15),(95,'Veterinary Obstetrics and Reproductive Diseas',15),(96,'Veterinary Parasitology & Entomology',15),(97,'Veterinary Physiology and Pharmacology',15),(98,'Veterinary Public Health & Preventive Medicin',15),(99,'Veterinary Surgery',15),(100,'Veterinary Teaching Hospital',15),(101,'Veterinary pathology and Microbiology',15);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-24  8:15:57
