CREATE TABLE `wp_yoast_seo_links` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `post_id` bigint(20) unsigned NOT NULL,  `target_post_id` bigint(20) unsigned NOT NULL,  `type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,  PRIMARY KEY (`id`),  KEY `link_direction` (`post_id`,`type`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_yoast_seo_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_yoast_seo_links` ENABLE KEYS */;
