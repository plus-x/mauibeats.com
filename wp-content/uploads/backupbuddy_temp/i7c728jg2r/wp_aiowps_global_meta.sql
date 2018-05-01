CREATE TABLE `wp_aiowps_global_meta` (  `meta_id` bigint(20) NOT NULL AUTO_INCREMENT,  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  `meta_key1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_key2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_key3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_key4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_key5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_value1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_value2` text COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_value3` text COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_value4` longtext COLLATE utf8mb4_unicode_ci NOT NULL,  `meta_value5` longtext COLLATE utf8mb4_unicode_ci NOT NULL,  PRIMARY KEY (`meta_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_aiowps_global_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_aiowps_global_meta` ENABLE KEYS */;
