CREATE TABLE `wp_aiowps_failed_logins` (  `id` bigint(20) NOT NULL AUTO_INCREMENT,  `user_id` bigint(20) NOT NULL,  `user_login` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,  `failed_login_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  `login_attempt_ip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',  PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_aiowps_failed_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_aiowps_failed_logins` ENABLE KEYS */;
