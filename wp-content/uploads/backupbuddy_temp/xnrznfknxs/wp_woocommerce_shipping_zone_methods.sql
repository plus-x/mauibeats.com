CREATE TABLE `wp_woocommerce_shipping_zone_methods` (  `zone_id` bigint(20) NOT NULL,  `instance_id` bigint(20) NOT NULL AUTO_INCREMENT,  `method_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `method_order` bigint(20) NOT NULL,  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',  PRIMARY KEY (`instance_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40000 ALTER TABLE `wp_woocommerce_shipping_zone_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_woocommerce_shipping_zone_methods` ENABLE KEYS */;
