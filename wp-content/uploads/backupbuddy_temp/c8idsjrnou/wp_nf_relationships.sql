CREATE TABLE `wp_nf_relationships` (  `id` bigint(20) NOT NULL AUTO_INCREMENT,  `child_id` bigint(20) NOT NULL,  `parent_id` bigint(20) NOT NULL,  `child_type` varchar(255) NOT NULL,  `parent_type` varchar(255) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `wp_nf_relationships` DISABLE KEYS */;
INSERT INTO `wp_nf_relationships` VALUES('1', '2', '1', 'notification', 'form');
INSERT INTO `wp_nf_relationships` VALUES('2', '3', '1', 'notification', 'form');
INSERT INTO `wp_nf_relationships` VALUES('3', '4', '1', 'notification', 'form');
/*!40000 ALTER TABLE `wp_nf_relationships` ENABLE KEYS */;
