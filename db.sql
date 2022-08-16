CREATE DATABASE  IF NOT EXISTS `form` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `form`;
-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.0    Database: form
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-15 21:36:35
