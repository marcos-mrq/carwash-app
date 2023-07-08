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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Telefone` int(9) NOT NULL,
  `Email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`idclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Matias Agostinho',936093458,'matias.agostinho@gmail.com'),(2,'jiurhfiuhuiheiufhuier',921474836,'2378732@gmail.com'),(3,'Joaquim Raúl',918723094,'joaquimraul020@gmail.com'),(4,'Marcelo Mala',910893726,'marcelo@gmail.cm'),(5,'Carla Pedro',954230984,'carla@gmail.com'),(6,'Victória Martins ',921094782,'victoria002@gmail.com'),(7,'Antónia Joaquim',992093785,'antoniajoaquim89@gmail.com'),(8,'Noémia Bartolomeu',924673865,'noemiaB@gmail.com'),(9,'Sebastião José ',994920875,'sebajose59@gmail.com'),(10,'Délcio Ismael',990764029,'delcio@gmail.com'),(11,'Lautáro Martins',943872617,'lautaromartins@gmail.com'),(12,'Manuel Pereira',917091829,'manuelpereira@gmail.com'),(13,'Lemba Godinho',944124438,'lembagodinho15@gmail.com'),(14,'Vagner Marques',932098501,'vagner@gmail.com'),(15,'Nestor Godinho',995770204,'nestorgodinho90@gmail.com'),(16,'Santos Godinho',959999999,'santos@gmail.com'),(17,'Marcos SebastiÃ£o Marques',932230780,'marcosmarquess2003@gmail.com'),(18,'Marcos SebastiÃ£o Marques',932230780,'marcosmarquess2003@gmail.com'),(19,'Marcos SebastiÃ£o Marques',932230780,'marcosmarquess2003@gmail.com'),(20,'Marcos SebastiÃ£o Marques',932230780,'marcosmarquess2003@gmail.com'),(21,'Marcos SebastiÃ£o Marques',932230780,'marcosmarquess2003@gmail.com'),(22,'Santos Godinho',999999999,'marcosprojecto040@gmail.com'),(23,'Nestor Godinho',999999999,'marcosprojecto040@gmail.com'),(24,'Isaquias Marques',999999999,'marcosmarquess2003@gmail.com'),(25,'Vanger Marques',999999999,'rengav916@gmail.com'),(26,'Vanger Marques',999999999,'rengav916@gmail.com'),(27,'Vanger Marques',999999999,'rengav916@gmail.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Categoria` enum('u_n','adm') COLLATE utf8_general_mysql500_ci NOT NULL,
  `N_tel` int(9) NOT NULL,
  `Email` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `PalavraPasse` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Marcos Cena','u_n',932230780,'marcosmarquess2003@gmail.com','Marcos'),(5,'admin','adm',99999999,'teste@gmail.com','adm'),(11,'Miguel Martins','u_n',999999999,'miguel@gmail.com','121314');
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
  `id_user` int(11) DEFAULT NULL,
  `Proprietario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `id_user` (`id_user`),
  KEY `Proprietario` (`Proprietario`),
  CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`Id`),
  CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`Proprietario`) REFERENCES `clientes` (`idclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` VALUES (1,'Chevrolet','Camaro','LD-32-DF-E4',1.00,'2022-04-13 19:51:01','Carro',1000,1,1),(2,'Toyota','Lander Cruser','9D-32-4D-FL',2.00,'2022-04-13 19:52:27','Carro',2000,1,6),(4,'Yamaha','XT 664','KL-0P-UT-A1',2.00,'2022-04-15 09:24:35','Moto',2000,1,9),(5,'Fiat','Toro','OP-J5-90-A3',2.00,'2022-04-17 14:48:43','Carro',2000,1,2),(6,'Fiat ','Panda','I9-LD-M8-PM',1.00,'2022-04-17 22:14:05','Carro',1000,1,10),(7,'Chevrolet','Cruze','JH-P8-S2-90',1.00,'2022-04-18 08:49:56','Carro',1000,1,4),(8,'KIA','Picanto','LP-K6-M1-56',1.32,'2022-04-18 08:54:21','Carro',1000,1,8),(10,'Yamaha','teste','Mk-hjrtedtezs',2.00,'2022-04-18 18:17:59','Moto',2000,1,9),(11,'Suzuki','Celerio','MJ-89-L0-21',1.00,'2022-04-19 23:36:33','Carro',1000,1,5),(12,'Yamaha','MT03','LT-09-8L-56',1.00,'2022-04-20 12:42:47','Moto',1000,1,11),(13,'Toyota','Corolla','LO-90-P9-12',1.26,'2022-04-26 16:07:18','Carro',1000,1,14),(14,'Yamaha','teste','teste',3.00,'2022-04-26 16:11:02','Moto',2000,1,15),(15,'Chevrolet','Camaro','8H-MC-23-J5',1.45,'2022-04-27 08:29:25','Carro',2000,1,2),(16,'Fiat','Panda','teste',1.89,'2022-04-27 08:46:40','Carro',2000,1,8),(17,'Yamaha','MT','OP-J5-90-A3',1.00,'2022-04-28 14:28:29','Moto',1000,1,12),(19,'Toyota','Lander Cruser','KL-0P-UT-A2',1.45,'2022-04-29 12:14:43','Carro',2000,1,4),(20,'Suzuki','Burgman','90-KL-PO-34',1.45,'2022-05-02 00:45:56','Moto',2000,1,10),(21,'Chevrolet','Cruze','ML-90-IP-90',1.45,'2022-05-02 16:54:17','Carro',2000,1,7),(22,'KIA','Picanto','ML-90-78-21',1.50,'2022-05-02 17:02:29','Carro',2000,1,9),(23,'KIA','Joul','M9-87-WF-8C',1.00,'2022-05-06 12:14:46','Carro',1000,1,13),(24,'Lingken','-----','MN-LP-78-P0',1.00,'2022-05-06 12:43:50','Moto',1000,1,3),(25,'Apollo','50 Cc','LP-K6-M1-32',1.00,'2022-05-10 15:20:19','Moto',1000,1,9),(28,'Toyota','Hilux','BM-87-R5-NL',1.50,'2022-05-10 22:30:00','Carro',2000,11,11),(29,'Suzuki','Jimmy','LJ-90-PZ-9M',1.32,'2022-05-12 14:17:06','Carro',2000,11,9),(30,'Iveco','Trakker','LD-AB-9N-90',2.00,'2022-05-17 15:26:47','Carro',2000,1,3),(31,'Apollo','Rfz Gazelle-C 110cc','ML-01-K8-JZ',1.00,'2022-05-21 09:23:49','Moto',1000,1,16),(36,'Lingken','J7','KQ-90-L9-7J',1.32,'2022-05-21 22:39:11','Moto',2000,11,21),(37,'Mercedes Benz','GLC','P9-78-M1-9X',1.60,'2022-05-21 22:56:51','Carro',2000,11,22),(38,'Mercedes Benz','GLC','P9-78-M1-9X',1.60,'2022-05-21 23:02:41','Carro',2000,11,23),(39,'Mercedes Benz','Classe A AMG','P9-78-M1-9X',1.60,'2022-05-21 23:09:55','Carro',2000,11,24),(40,'Suzuki','Jimmy','teste',1.00,'2022-05-21 23:20:38','Carro',1000,11,25),(41,'Suzuki','Jimmy','teste',1.00,'2022-05-21 23:25:13','Carro',1000,11,26),(42,'Suzuki','Jimmy','teste',1.00,'2022-05-21 23:28:39','Carro',1000,11,27);
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

-- Dump completed on 2022-05-24  1:02:09
