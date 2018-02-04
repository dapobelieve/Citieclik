-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(10) unsigned NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `user_id`, `body`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 1,  'Nice Service there...',  5,  'App\\Service', '2018-02-04 04:39:29',  '2018-02-04 04:39:29'),
(2, 2,  'Very good service',  5,  'App\\Service', '2018-02-04 04:39:53',  '2018-02-04 04:39:53'),
(3, 3,  'O sooooo gooo of you', 5,  'App\\Service', '2018-02-04 04:40:16',  '2018-02-04 04:40:16'),
(4, 1,  'sy say maley maley maley', 5,  'App\\Service', '2018-02-04 06:16:00',  '2018-02-04 06:16:00'),
(5, 1,  'Mkae i pay for this ooooooooooooooooooooooooooooooooooooooo, this babe is so so annoying me.\r\nYou know everything thats wrong, yet you never try to right anything. at all. you just sit there and keep complaining. Ya soooooo mad.', 11, 'App\\Service', '2018-02-04 06:18:01',  '2018-02-04 06:18:01'),
(6, 1,  'yA mad\r\nYa MaD\r\nYA mAd', 11, 'App\\Service', '2018-02-04 06:19:06',  '2018-02-04 06:19:06'),
(7, 1,  'yaaaaaaaaaaaaaaaaaaaaaaaaaaaa \r\nmaaaaaaaaaaaaaaaaaaddddddddddddddddddddddddd \r\noooooooooooooooooooooooooooo',  11, 'App\\Service', '2018-02-04 06:24:00',  '2018-02-04 06:24:00'),
(8, 1,  'hope we re still good...', 11, 'App\\Service', '2018-02-04 06:24:34',  '2018-02-04 06:24:34'),
(9, 1,  'are u ready',  11, 'App\\Service', '2018-02-04 06:24:55',  '2018-02-04 06:24:55');

-- 2018-02-04 08:08:27