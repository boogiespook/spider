CREATE TABLE `data` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `client` varchar(50) NOT NULL,
  `o1` int(1) NOT NULL,
  `o2` int(1) NOT NULL,
  `o3` int(1) NOT NULL,
  `o4` int(1) NOT NULL,
  `o5` int(1) NOT NULL,
  `d1` int(1) NOT NULL,
  `d2` int(1) NOT NULL,
  `d3` int(1) NOT NULL,
  `d4` int(1) NOT NULL,
  `d5` int(1) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hash` (`hash`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

