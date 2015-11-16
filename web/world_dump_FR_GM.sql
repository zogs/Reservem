-- MySQL dump 10.13  Distrib 5.6.23, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sfbase
-- ------------------------------------------------------
-- Server version	5.6.23-1~dotdeb.3

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
-- Table structure for table `world_country`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `world_country` (
  `id` int(11) NOT NULL,
  `CC1` varchar(2) NOT NULL,
  `LO` varchar(3) NOT NULL,
  `FULLNAME` varchar(200) NOT NULL,
  `REGION_ID` int(11) NOT NULL,
  `ISO_ALPHA2` varchar(2) NOT NULL,
  `ISO_ALPHA3` varchar(3) NOT NULL,
  `ISO_NUMERIC` smallint(6) NOT NULL,
  `INTERNET` varchar(2) NOT NULL,
  `ISO_4217` varchar(3) NOT NULL,
  `PHONE_CC` varchar(11) NOT NULL,
  `CC2` varchar(2) NOT NULL,
  `COMMENT` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CC1` (`CC1`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `world_country`
--
-- WHERE:  CC1 IN (FR,GM)

-- MySQL dump 10.13  Distrib 5.6.23, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sfbase
-- ------------------------------------------------------
-- Server version	5.6.23-1~dotdeb.3

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
-- Table structure for table `world_states`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `world_states` (
  `id` int(11) NOT NULL,
  `CHAR_CODE` varchar(1) NOT NULL,
  `UFI` int(11) NOT NULL,
  `UNI` int(11) NOT NULL,
  `CC1` varchar(2) NOT NULL,
  `DSG` varchar(4) NOT NULL,
  `ADM_PARENT` varchar(3) NOT NULL,
  `ADM_CODE` varchar(3) NOT NULL,
  `NT` smallint(6) NOT NULL,
  `LC` varchar(3) NOT NULL,
  `SHORTFORM` varchar(56) NOT NULL,
  `FULLNAME` varchar(83) NOT NULL,
  `FULLNAMEND` varchar(79) NOT NULL,
  `CHARACTERS` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FindStates` (`CC1`,`ADM_PARENT`,`DSG`),
  KEY `findAState` (`ADM_CODE`)
) ENGINE=MyISAM AUTO_INCREMENT=16967 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `world_states`
--
-- WHERE:  CC1 IN (FR,GM)

-- MySQL dump 10.13  Distrib 5.6.23, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sfbase
-- ------------------------------------------------------
-- Server version	5.6.23-1~dotdeb.3

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
-- Table structure for table `world_cities`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `world_cities` (
  `id` int(11) NOT NULL,
  `CHAR_CODE` smallint(6) NOT NULL,
  `UFI` int(11) NOT NULL,
  `UNI` int(11) NOT NULL,
  `CC1` varchar(2) NOT NULL,
  `DSG` varchar(5) NOT NULL,
  `ADM1` varchar(3) NOT NULL,
  `ADM2` varchar(3) NOT NULL,
  `ADM3` varchar(3) NOT NULL,
  `ADM4` varchar(3) NOT NULL,
  `NT` varchar(1) NOT NULL,
  `LC` varchar(3) NOT NULL,
  `SHORTFORM` varchar(128) NOT NULL,
  `FULLNAME` varchar(200) NOT NULL,
  `FULLNAMEND` varchar(200) NOT NULL,
  `CHARACTERS` varchar(24) NOT NULL,
  `LATITUDE` double NOT NULL,
  `LONGITUDE` double NOT NULL,
  `DMSLAT` int(11) NOT NULL,
  `DMSLONG` int(11) NOT NULL,
  `SOUNDEX` varchar(20) DEFAULT NULL,
  `METAPHONE` varchar(22) DEFAULT NULL,
  `CP` varchar(255) DEFAULT NULL,
  `POP` mediumint(9) DEFAULT NULL,
  `POP_ORDER` mediumint(9) DEFAULT NULL,
  `SFC` mediumint(9) DEFAULT NULL,
  `SFC_ORDER` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UNI` (`UNI`),
  KEY `FindCities` (`CC1`,`ADM1`,`ADM2`,`ADM3`,`ADM4`),
  KEY `CityName` (`FULLNAMEND`)
) ENGINE=MyISAM AUTO_INCREMENT=4147921 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `world_cities`
--
-- WHERE:  CC1 IN (FR,GM)

