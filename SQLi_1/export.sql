-- MariaDB dump 10.19  Distrib 10.6.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Anime
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'FPS'),(2,'Football'),(3,'Aventure');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeux`
--

LOCK TABLES `jeux` WRITE;
/*!40000 ALTER TABLE `jeux` DISABLE KEYS */;
INSERT INTO `jeux` VALUES (1,'Valorant',1,'hero-1.jpg','Riot Games présente VALORANT : un FPS tactique en 5v5 basé sur les personnages, où la précision des armes à feu rencontre les capacités uniques des agents.'),(2,'Rocket League',2,'hero-3.jpg','Voici Rocket League ! Bienvenue dans un mélange détonnant de football d\'arcade et de chaos motorisé !'),(3,'FIFA 23',2,'popular-1.jpg',NULL),(4,'Overwatch 2',1,'hero-2.jpg','Overwatch 2 est la suite du Hero Shooter de Blizzard. Le titre prolonge l\'expérience PvP du jeu tout en y ajoutant une nouvelle dimension PvE sous forme de missions scénarisées et de contenus en coopération rejouables.'),(5,'God of War: Ragnarok',3,'trend-3.jpg',NULL),(6,'Modern Warfare II',1,'popular-3.jpg',NULL),(7,'The Last Of Us: Part 1',3,'trend-5.jpg',NULL),(8,'World of Warcraft Wrath of the Lich King Classic',3,'trend-6.jpg',NULL),(9,'Rainbow Six Siege',1,'popular-4.jpg',NULL),(10,'Saints Row (2022)',3,'popular-5.jpg',NULL),(11,'The Legend of Zelda : Tears of the Kingdom',3,'popular-6.jpg',NULL),(12,'Apex Legends',1,'tv-1.jpg',NULL),(13,'Cyberpunk 2077',3,'tv-2.jpg',NULL),(14,'Mario',3,'tv-3.jpg',NULL),(15,'Counter-Strike: Global Offensive (CS:GO)',1,'tv-4.jpg',NULL),(16,'Forza Horizon 5',3,'tv-5.jpg',NULL),(17,'Gotham Knights',3,'comment-1.jpg',NULL),(18,'Elden Ring',3,'comment-2.jpg',NULL),(19,'Pokémon Ecarlate/Violet',3,'comment-3.jpg',NULL),(20,'Dying Light 2 : Stay Human',1,'comment-5.jpg',NULL);
/*!40000 ALTER TABLE `jeux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','cGFzc3cwcmQxMjM=');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'Anime'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-27 15:46:40
