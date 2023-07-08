-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: carwash
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.40-MariaDB

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
-- Table structure for table `entidades`
--

DROP TABLE IF EXISTS `entidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidades` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(60) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Numero_Tel` int(9) NOT NULL,
  `Email` varchar(40) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Palavra_Passe` varchar(60) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidades`
--

LOCK TABLES `entidades` WRITE;
/*!40000 ALTER TABLE `entidades` DISABLE KEYS */;
INSERT INTO `entidades` VALUES (1,'NETUANDA',945046757,'marcosmarquess2003@gmail.com','123456'),(2,'UANDA',932230780,'marcosmarquess2003@gmail.com','09876543'),(3,'Marcos Cena',932230780,'marcosmarquess2003@gmail.com','Marcos cena'),(4,'1',1,'1','1');
/*!40000 ALTER TABLE `entidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `N_tel` int(9) NOT NULL,
  `Funcao` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Senha` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Data_registrado` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Marcos Marques',932230780,'Utilizador normal','marcos@gmail.com','1234','2022-04-19 16:28:42');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veiculo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Marca_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Modelo_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Matricula` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Cilindragem` decimal(10,2) NOT NULL,
  `Data_registro` datetime NOT NULL,
  `Tipo_veiculo` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Preco` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` VALUES (1,'Chevrolet','Camaro','LD-32-DF-E4',1.00,'2022-04-13 19:51:01','Carro',1000),(2,'Toyota','Lander Cruser','9D-32-4D-FL',2.00,'2022-04-13 19:52:27','Carro',2000),(3,'Mercedez Benz','G63','8H-MC-23-J5',1.00,'2022-04-13 20:22:26','Carro',1000),(4,'Yamaha','XT 664','KL-0P-UT-A2',2.00,'2022-04-15 09:24:35','Moto',2000),(5,'Fiat','Toro','OP-J5-90-A3',2.00,'2022-04-17 14:48:43','Carro',2000),(6,'Fiat ','Panda','I9-LD-M8-PM',1.00,'2022-04-17 22:14:05','Carro',1000),(7,'Chevrolet','Cruze','JH-P8-S2-90',1.00,'2022-04-18 08:49:56','Carro',1000),(8,'KIA','Picanto','LP-K6-M1-56',1.32,'2022-04-18 08:54:21','Moto',1000),(9,'Chevrolet','N300','J5-90-M8-LP',1.25,'2022-04-18 09:05:31','Moto',1000),(10,'Yamaha','teste','Mk-hjrtedtezs',2.00,'2022-04-18 18:17:59','Moto',2000),(11,'Suzuki','Celerio','MJ-89-L0-21',1.00,'2022-04-19 23:36:33','Carro',1000),(12,'Yamaha','MT03','LT-09-8L-56',1.00,'2022-04-20 12:42:47','Moto',1000),(13,'Toyota','Corolla','LO-90-P9-12',1.26,'2022-04-26 16:07:18','Carro',1000),(14,'Yamaha','teste','teste',3.00,'2022-04-26 16:11:02','Moto',2000);
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-26 14:44:51
