CREATE TABLE `wp_frm_item_metas` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `meta_value` longtext COLLATE utf8mb4_unicode_ci,  `field_id` int(11) NOT NULL,  `item_id` int(11) NOT NULL,  `created_at` datetime NOT NULL,  PRIMARY KEY (`id`),  KEY `field_id` (`field_id`),  KEY `item_id` (`item_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_frm_item_metas` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_frm_item_metas` ENABLE KEYS */;
