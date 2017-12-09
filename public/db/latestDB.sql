-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `state_id` int(10) NOT NULL,
  `lga` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `FK` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Local governments in Nigeria.';


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `sub_category_id` int(10) unsigned NOT NULL,
  `state_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('p','r') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `socials`;
CREATE TABLE `socials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_id` (`social_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `socials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Social Login Credentials';


DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(10) NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='States in Nigeria.';


DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `email`, `username`, `phone`, `password`, `first_name`, `last_name`, `image`, `location`, `status`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dapo@gmail.com', 'dapoBelieve',  '07069494803',  '$2y$10$EJJoTfhHe/A2BOzDIB.Dq.eVFraJcpD0XFj8Wmbk860OBvEjoQ4Gy', 'Dapo', 'Michaels', 'http://res.cloudinary.com/citieclik/image/upload/v1512672494/citi/profile/wa95nbmfaq09tgjscaoe.webp',  NULL, '1',  'believe',  'ihkV0cu5riGtmOzrUDKos2Wb0eNTdP4zVUzr5CU2fnmn5uhV9phvwMahpxYc', '2017-08-23 00:26:49',  '2017-12-07 17:47:49'),
(2, 'jerexbambex@gmail.com',  'jerexbambex',  '07068261774',  '$2y$10$2pRaUq/UOJVxvd6ebaGNq.3HNA.hsyIm41Y34JauyKfIqm5cYqv.S', 'oluwatosin', 'Ogunniyi', NULL, NULL, '1',  'oluwatosin', 'r9C00x5tUX0nNMMnWpmlomx5yELHVUORJtu5yUFBOMZErjYOI1Fxsz76JEvO', '2017-09-17 01:26:39',  '2017-10-09 18:18:23'),
(3, 'maryope8@gmail.com', '@Opeyemi08028756291',  '08028756291',  '$2y$10$5ozMKtaqGuiBhqcPcmndzuAlNiHlbaZKt1ELic4xm621GP2BOSr2C', 'Opeyemi',  'Mary', NULL, NULL, '1',  'opeyemi08028756291', 'WISYeq5qEaE8tKUWW4e2slas0JeN3tRYy2P940JyYvxOwpGpQRUtr6mgjfnQ', '2017-09-24 03:41:13',  '2017-09-24 03:41:13'),
(4, 'jerexbambex@hotmail.com',  '@Oluwafemin08067099420', '08067099420',  '$2y$10$bepvJ9Rk0E61w99DGPzeLOScZMjZGDe0IAhUW/4hlLFIAVs4HceNa', 'Oluwafemin', 'Isaac',  NULL, NULL, '1',  'oluwafemin08067099420',  'ja8FmlSpYhIInKkcEBEJ4VDbtSFLNQ4Ibp5uRlEDxlgbYyXLQGPcYCrY1rzw', '2017-09-24 03:42:15',  '2017-09-24 03:42:15'),
(8, 'dapomichaels@gmail.com', 'MrBelieve',  '09094642739',  NULL, 'Dapo Michaels',  NULL, 'http://res.cloudinary.com/citieclik/image/upload/v1512690951/citi/apxfhaqqetmqlmh1hduj.webp',  NULL, '1',  '5a21ff29f28dd',  'CS0iocFLj7YY0uGeyiMAR8pvQYuFXLiMFtMUNGyjizV80ldx8lKn3NBIuTjH', '2017-12-02 00:17:29',  '2017-12-07 22:55:26');

-- 2017-12-09 06:25:31