-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Identifiant` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'ytranchot@gmail.com','1234','Yo_tcht','Yoann','Tranchot');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_form` (
  `ID_Contact` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Texte` text COLLATE utf8_roman_ci NOT NULL,
  `Date` date NOT NULL,
  `Mail` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_form`
--

LOCK TABLES `contact_form` WRITE;
/*!40000 ALTER TABLE `contact_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liste_page`
--

DROP TABLE IF EXISTS `liste_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liste_page` (
  `ID_Page` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Page` varchar(255) NOT NULL,
  `Chemin` varchar(255) NOT NULL,
  `Parent` varchar(255) NOT NULL,
  `Niveau` int(11) NOT NULL,
  `ID_Template` int(11) NOT NULL,
  PRIMARY KEY (`ID_Page`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liste_page`
--

LOCK TABLES `liste_page` WRITE;
/*!40000 ALTER TABLE `liste_page` DISABLE KEYS */;
INSERT INTO `liste_page` VALUES (1,'about','/index.php?page=about','',1,0),(2,'accueil','/index.php','',1,0),(3,'competences','/index.php?page=competences','',1,0),(4,'contact','visiteur/VUE/php/contact.php','',1,0),(5,'project','/index.php?page=project','',1,0),(6,'Audiovisuel','/index.php?page=vue_project&content=Audiovisuel','project',2,0),(7,'Programation','/index.php?page=vue_project&content=Programation','project',2,0),(8,'Multimedia','/index.php?page=vue_project&content=Multimedia','project',2,0);
/*!40000 ALTER TABLE `liste_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `ID_Media` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Adress` text COLLATE utf8_roman_ci NOT NULL,
  `Position` int(11) NOT NULL,
  `ID_Page` int(11) NOT NULL,
  `Lien` text COLLATE utf8_roman_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Media`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'img','/visiteur/VUE/image/carrousel.jpg',2,7,'','carrousel'),(2,'img','/visiteur/VUE/image/film_metier.png',1,6,'','film_metier'),(3,'img','/visiteur/VUE/image/flag-for-guadeloupe_1f1ec-1f1f5.png',1,0,'','flag'),(4,'img','/visiteur/VUE/image/souris.jpg',1,7,'','souris'),(5,'img','/visiteur/VUE/image/teammeca.jpg',4,7,'','teammeca'),(6,'img','/visiteur/VUE/image/tower defense.jpg',3,7,'','tower'),(7,'img','/visiteur/VUE/image/y.png',1,0,'','y'),(8,'img','/visiteur/VUE/image/yoann.png',1,0,'','yoann');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template` (
  `Nom_template` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `ID_Template` int(11) NOT NULL AUTO_INCREMENT,
  `CSS_path` text COLLATE utf8_roman_ci NOT NULL,
  `JS_path` text COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Template`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texte`
--

DROP TABLE IF EXISTS `texte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texte` (
  `ID_Texte` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Page` int(11) NOT NULL,
  `Texte` text COLLATE utf8_roman_ci NOT NULL,
  `Position` int(11) NOT NULL,
  PRIMARY KEY (`ID_Texte`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texte`
--

LOCK TABLES `texte` WRITE;
/*!40000 ALTER TABLE `texte` DISABLE KEYS */;
INSERT INTO `texte` VALUES (1,1,'<p>Bonjour\r\nJe prépare actuellement un diplôme universitaire métier du multimédia et de l\'internet. Je souhaiterais acquérir davantage d\'expérience dans le monde professionnel. Les languages de programmation comme le HTML, le CSS, le Javascript ou le PHP sont les outils de développement que j’apprends à utiliser. D’ailleurs mon diplôme m’aide à affiner mes armes pour devenir développeur web. Assimiler les méthodes agiles m’aide à approfondir des compétences comme la conception et le développement me permettant ainsi de travailler plus efficacement.Jeune volontaire et dynamique je reste à votre disposition pour de plus amples informations.</p>',1);
/*!40000 ALTER TABLE `texte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titre`
--

DROP TABLE IF EXISTS `titre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titre` (
  `ID_Titre` int(11) NOT NULL AUTO_INCREMENT,
  `Taille` varchar(8) COLLATE utf8_roman_ci NOT NULL,
  `Contenu` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `ID_Page` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Lien` varchar(255) COLLATE utf8_roman_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Titre`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titre`
--

LOCK TABLES `titre` WRITE;
/*!40000 ALTER TABLE `titre` DISABLE KEYS */;
INSERT INTO `titre` VALUES (1,'','YOANN TRANCHOT',2,2,''),(2,'','Bonjour, je m\'appelle',2,2,''),(3,'','MOI',1,2,''),(4,'h1','Développement',1,2,''),(5,'h1','Design',1,2,''),(6,'','HTML',2,2,''),(7,'','JavaScript',2,2,''),(8,'','PHP',2,2,''),(9,'','SQL',2,2,''),(10,'','CSS',2,2,''),(11,'','Photoshop',2,3,''),(12,'','Illustrator',2,3,''),(13,'','AUDIOVISUEL',5,1,''),(14,'','PROGRAMATION',5,1,''),(15,'','MULTIMÉDIA',5,1,''),(16,'','CDP - Motion',5,1,'UuLsSFWqLc4'),(17,'','Le chef de projet - ITW',5,1,'6X4rqUCNH3o'),(18,'','Jitter Click',5,1,'programation/Jitter_click/index.html'),(19,'','Machine de l\'Ile',5,1,'programation/Machin_de_l\'ile_sem2/accueil.html'),(20,'','Tower Defense',5,1,'programation/projet-tower-defense/index.html\"'),(21,'','Team Meca',5,1,'programation/TeamMeca_Tranchot/index.php');
/*!40000 ALTER TABLE `titre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-06 13:21:41
