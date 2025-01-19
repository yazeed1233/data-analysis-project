--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `words` (
  `id` int NOT NULL AUTO_INCREMENT,
  `word` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (1,'apple','A fruit that is typically red, green, or yellow.'),(2,'banana','A long curved fruit that grows in clusters and has soft pulpy flesh and yellow skin when ripe.'),(3,'cherry','A small, round fruit that is typically red or black.'),(4,'date','The sweet fruit of the date palm, often eaten dried.'),(5,'elderberry','A small dark purple fruit that grows in clusters on the elder tree.');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;


