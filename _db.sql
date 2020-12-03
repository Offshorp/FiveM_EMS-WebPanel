CREATE DATABASE `fivem_ems`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `job` int(11) DEFAULT '0',
  `is_activated` enum('0', '1') DEFAULT '0',
  `is_admin` enum('0','1') DEFAULT '0',
  `is_banned` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING HASH,
  UNIQUE KEY `username` (`username`),
  KEY `password` (`password`),
  KEY `lastname` (`lastname`),
  KEY `firstname` (`firstname`),
  KEY `phonenumber` (`phonenumber`),
  KEY `job` (`job`),
  KEY `is_activated` (`is_activated`),
  KEY `is_admin` (`is_admin`),
  KEY `is_banned` (`is_banned`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
