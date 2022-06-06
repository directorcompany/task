-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `roomtab`;
CREATE TABLE `roomtab` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` int unsigned NOT NULL,
  `room` int unsigned NOT NULL,
  `email` varchar(200) NOT NULL,
  `datestart` date NOT NULL,
  `datend` date NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `roomtab` (`id`, `name`, `phone`, `room`, `email`, `datestart`, `datend`, `date`) VALUES
(25,	'keshirin',	211231,	2,	'golden-silver_777@mail.ru',	'2022-07-14',	'2022-07-24',	'2022-06-05 20:45:45'),
(26,	'shukir',	123123,	2,	'shukir@mail.ru',	'2022-06-24',	'2022-06-30',	'2022-06-05 22:40:56'),
(27,	'shukir',	123123,	1,	'shukir@mail.ru',	'2022-06-30',	'2022-07-30',	'2022-06-05 22:53:34'),
(28,	'shukir',	12312312,	2,	'shukir@mail.ru',	'2022-09-15',	'2022-07-07',	'2022-06-05 22:56:37'),
(29,	'shukir',	12312312,	2,	'shukir@mail.ru',	'2022-09-15',	'2022-07-07',	'2022-06-05 22:56:42'),
(30,	'shukir',	12312312,	2,	'shukir@mail.ru',	'2022-09-15',	'2022-07-07',	'2022-06-05 22:56:45'),
(31,	'shukir',	12312312,	2,	'shukir@mail.ru',	'2022-09-15',	'2022-07-07',	'2022-06-05 22:56:47'),
(32,	'shukir',	12312312,	2,	'shukir@mail.ru',	'2022-09-15',	'2022-07-07',	'2022-06-05 22:57:36'),
(33,	'jaqsi',	1231312,	2,	'jaqsi@mail.ru',	'2022-11-17',	'2023-03-23',	'2022-06-05 23:09:01');

-- 2022-06-06 05:12:14
