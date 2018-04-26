CREATE TABLE `wp_aiowps_permanent_block` (  `id` bigint(20) NOT NULL AUTO_INCREMENT,  `blocked_ip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',  `block_reason` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',  `country_origin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',  `blocked_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_aiowps_permanent_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_aiowps_permanent_block` ENABLE KEYS */;
