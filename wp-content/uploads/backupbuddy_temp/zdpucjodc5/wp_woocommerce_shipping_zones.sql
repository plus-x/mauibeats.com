CREATE TABLE `wp_woocommerce_shipping_zones` (  `zone_id` bigint(20) NOT NULL AUTO_INCREMENT,  `zone_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `zone_order` bigint(20) NOT NULL,  PRIMARY KEY (`zone_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_woocommerce_shipping_zones` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_woocommerce_shipping_zones` ENABLE KEYS */;
