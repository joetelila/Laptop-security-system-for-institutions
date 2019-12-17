# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: Laravel
# Generation Time: 2017-06-24 08:45:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_uslastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SME_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;

INSERT INTO `ads` (`id`, `ad_title`, `ad_desc`, `ad_uslastname`, `SME_id`, `ad_content`, `ad_status`, `created_at`, `updated_at`)
VALUES
	(6,'This is going to be huge!! caffe','This is going to be greate!!','Kifle','2','40% discount in all our products!!','accepted','2017-06-21 14:08:54','2017-06-21 14:10:56');

/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table catagories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `catagories`;

CREATE TABLE `catagories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `catagories` WRITE;
/*!40000 ALTER TABLE `catagories` DISABLE KEYS */;

INSERT INTO `catagories` (`id`, `category`, `created_at`, `updated_at`)
VALUES
	(1,'Johny',NULL,NULL),
	(2,'Temp 2',NULL,NULL);

/*!40000 ALTER TABLE `catagories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `com_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `comment`, `User_id`, `l_n_b_s_id`, `com_date`, `created_at`, `updated_at`)
VALUES
	(52,'you are not allowed to do anything...','1','4','','2017-06-01 07:49:53','2017-06-01 07:49:53'),
	(53,'This is John kifle @gmail.com','1','2','','2017-06-01 09:34:52','2017-06-01 09:34:52'),
	(54,'great day to be alive!!','1','3','','2017-06-01 19:35:52','2017-06-01 19:35:52'),
	(55,'fsdfsdfs','1','1','','2017-06-02 05:08:21','2017-06-02 05:08:21'),
	(56,'This is johnny man Kifle telila..','1','1','','2017-06-04 05:37:44','2017-06-04 05:37:44'),
	(57,'asasasasassasa','3','1','','2017-06-08 03:57:45','2017-06-08 03:57:45'),
	(58,'This is me11','4','1','','2017-06-13 12:39:51','2017-06-13 12:39:51'),
	(59,'sdfsdfsdf','4','1','','2017-06-13 12:40:00','2017-06-13 12:40:00'),
	(60,'This is great Li..','3','4','','2017-06-13 18:18:26','2017-06-13 18:18:26'),
	(61,'asdasda','3','4','','2017-06-13 18:18:32','2017-06-13 18:18:32'),
	(62,'dasd asd as','3','4','','2017-06-13 18:18:38','2017-06-13 18:18:38'),
	(63,'This d sf s\nx','3','4','','2017-06-13 18:18:54','2017-06-13 18:18:54'),
	(64,'This is really great!!!','3','2','','2017-06-13 18:21:56','2017-06-13 18:21:56'),
	(65,'This another comment','3','2','','2017-06-13 18:22:43','2017-06-13 18:22:43'),
	(66,'THI IS IT!!!','3','2','','2017-06-18 16:19:34','2017-06-18 16:19:34'),
	(67,'This is the main greate wall!@@@','3','1','','2017-06-21 14:17:56','2017-06-21 14:17:56'),
	(68,'I love the location and the name!!1','4','3','','2017-06-23 19:55:25','2017-06-23 19:55:25'),
	(69,'fdsf sdf sdf sdf sdf sdfs','4','4','','2017-06-24 08:22:01','2017-06-24 08:22:01');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `event_title`, `event_content`, `event_date`, `event_status`, `created_at`, `updated_at`)
VALUES
	(1,'werw','werwe','werwe','stopped',NULL,'2017-05-23 20:06:05'),
	(2,'Fasika Expo','you are all invited. all products are available with free meal.','13/09/2017','stopped','2017-05-24 08:46:25','2017-05-24 08:48:04'),
	(4,'Genna Expo','you are all invited. all products are available with free meal.','15/08/2017','running','2017-05-24 08:52:53','2017-05-24 08:52:53'),
	(6,'Fasika Expo 2009','You are all invited and welcome','09/05/2017','stopped','2017-05-24 11:13:51','2017-05-24 11:32:03'),
	(7,'Fasika Expo 2009','You are all invited and welcome','14/06/2017','stopped','2017-05-24 11:31:36','2017-05-24 11:31:57'),
	(8,'','','09/05/2017','stopped','2017-05-25 14:54:51','2017-05-25 14:54:59'),
	(9,'Fasika Expo','you are all invited. all products are available with free meal.','06/06/2017','running','2017-05-29 08:41:55','2017-05-29 08:41:55');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_requirement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `job_contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_contact_skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `job_title`, `job_desc`, `job_requirement`, `job_experience`, `l_n_b_s_id`, `job_contact_phone`, `job_contact_email`, `job_contact_skype`, `created_at`, `updated_at`)
VALUES
	(3,'Web Desiegner','build a website','1. aaewwe\r\n2 .adas d\r\n3 .sdf d','1. dfsf sd\r\n2 .sdf ','3','+251977399269','millo@gmail.com','','2017-05-24 11:27:13','2017-05-24 11:27:13'),
	(4,'CTO','we are looking for technology officer','1. Degree in Computer Science\r\n2. Degree in Computer Science\r\n3. Degree in Computer Science','No','1','+251977399269','yohannis.kifle@aau.edu.et','','2017-05-28 17:03:30','2017-05-28 17:03:30'),
	(5,'Web designer','df sdf sdf',' 1.sdf sdf\r\nsdf sdf','s df sdf sf','4','977399269','girma@gmail.com','','2017-05-29 08:47:23','2017-05-29 08:47:23'),
	(7,'Product Manager','you are going to manage all our products ','1. managerial Study','none','2','+251977399269','millo@gmail.com','','2017-06-19 16:08:48','2017-06-19 16:08:48'),
	(10,'Safety Inspector','asses any safety issues around here','f sdf sf','df sf sdf','2','+251977399269','millo@gmail.com','','2017-06-19 16:11:58','2017-06-19 16:11:58');

/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table l_n_b_s
# ------------------------------------------------------------

DROP TABLE IF EXISTS `l_n_b_s`;

CREATE TABLE `l_n_b_s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LNB_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lnb_quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wallpaper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rated_val` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `l_n_b_s` WRITE;
/*!40000 ALTER TABLE `l_n_b_s` DISABLE KEYS */;

INSERT INTO `l_n_b_s` (`id`, `LNB_name`, `lnb_quote`, `profile_pic`, `wallpaper`, `users_id`, `rated_val`, `category`, `longitude`, `latitude`, `created_at`, `updated_at`)
VALUES
	(1,'Yohannes Internet Caffe','Here we go again','','','1','5','Caffe','9.0199914','38.7610888','2017-05-24 09:05:51','2017-06-21 19:08:23'),
	(2,'Joey Restaurent','Here we Go again','','','3','4','Restaurent','9.0243025','38.768228','2017-05-24 11:25:16','2017-06-21 19:24:42'),
	(3,'Labour Management and letters','we repair like God!','','','4','3','Restaurent','9.023496324294564','38.77762591000646','2017-05-28 08:00:22','2017-05-28 08:00:22'),
	(4,'Temporary','ss df sdf sdf','','','5','1','Caffe','8.5366602','39.2849759','2017-05-29 08:40:34','2017-05-29 08:40:34');

/*!40000 ALTER TABLE `l_n_b_s` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table lbnad_apps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lbnad_apps`;

CREATE TABLE `lbnad_apps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table LNBS
# ------------------------------------------------------------

DROP TABLE IF EXISTS `LNBS`;

CREATE TABLE `LNBS` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LNB_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lnb_quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wallpaper` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rated_val` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `LNBS` WRITE;
/*!40000 ALTER TABLE `LNBS` DISABLE KEYS */;

INSERT INTO `LNBS` (`id`, `LNB_name`, `lnb_quote`, `profile_pic`, `wallpaper`, `users_id`, `category`, `longitude`, `latitude`, `created_at`, `updated_at`, `rated_val`)
VALUES
	(1,'Yohannes Internet Caffe','Here we go again','','','1','Caffe','9.0199914','38.7610888','2017-05-24 09:05:51','2017-05-24 09:05:51',NULL),
	(2,'Joey Restaurent','Here we Go again','','','3','Restaurent','9.0243025','38.768228','2017-05-24 11:25:16','2017-05-24 11:29:27',NULL),
	(3,'Labour Management and letters','we repair like God!','','','4','Restaurent','9.023496324294564','38.77762591000646','2017-05-28 08:00:22','2017-05-28 08:00:22',NULL),
	(4,'Temporary','ss df sdf sdf','','','5','Caffe','','','2017-05-29 08:40:34','2017-05-29 08:40:34',NULL);

/*!40000 ALTER TABLE `LNBS` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messagereplays
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messagereplays`;

CREATE TABLE `messagereplays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reply_cont` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messages_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `messagereplays` WRITE;
/*!40000 ALTER TABLE `messagereplays` DISABLE KEYS */;

INSERT INTO `messagereplays` (`id`, `reply_cont`, `messages_id`, `time`, `status`, `l_n_b_s_id`, `created_at`, `updated_at`)
VALUES
	(1,'yes this has been great!','2','','','',NULL,NULL);

/*!40000 ALTER TABLE `messagereplays` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `message`, `User_id`, `status`, `created_at`, `updated_at`)
VALUES
	(2,'This has been great!!','3','unseen','2017-06-19 20:41:45','2017-06-19 20:41:45'),
	(10,'This is the name of me!!','3','unseen','2017-06-19 21:23:31','2017-06-19 21:23:31'),
	(11,'This is the name of God did this !!!!','3','unseen','2017-06-19 21:30:26','2017-06-19 21:30:26'),
	(12,'The Rgb color space consists of all possible colors that can be made by the combination of red, green, and blue light. It\'s a popular model in photography, television, and computer graphics.\n\nCmy is frequenty associated with color printing, and it\'s deter','3','unseen','2017-06-20 11:01:26','2017-06-20 11:01:26'),
	(13,'I would like to schedule counseling time on moday??','4','unseen','2017-06-21 19:16:13','2017-06-21 19:16:13'),
	(14,'sdfs dfs dfs ','4','unseen','2017-06-21 19:28:23','2017-06-21 19:28:23'),
	(15,'fgfsg dfg dfg','4','unseen','2017-06-24 08:23:11','2017-06-24 08:23:11');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2017_05_16_051235_create_catagories_table',1),
	('2017_05_16_051828_create_sub_categories_table',1),
	('2017_05_16_194256_create_l_n_b_s_table',1),
	('2017_05_17_093820_create_comments_table',1),
	('2017_05_17_094513_create_jobs_table',1),
	('2017_05_17_122444_create_ads_table',1),
	('2017_05_17_122839_create_events_table',1),
	('2017_05_17_193126_create_s_m_e__a_p_p_s_table',1),
	('2017_05_20_134804_create_p_h_o_t_o_s_table',1),
	('2017_05_21_053302_create_lbnad_apps_table',1),
	('2017_05_30_043948_create_notes_table',2),
	('2017_06_03_100753_create_rates_table',3),
	('2017_06_13_185402_create_rates_table',4),
	('2017_06_13_190146_create_rates_table',5),
	('2017_06_13_194050_create_l_n_b_s_table',6),
	('2017_06_13_194358_create_l_n_b_s_table',7),
	('2017_06_16_173315_create_messages_table',8),
	('2017_06_19_210859_create_messagereplays_table',9),
	('2017_06_19_213305_create_messagereplays_table',10);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;

INSERT INTO `notes` (`id`, `note`, `User_id`, `status`, `created_at`, `updated_at`)
VALUES
	(2,'Thi is not the final!!','3','','2017-06-15 11:58:26','2017-06-15 11:58:26'),
	(3,'This is the final!!!','2','','2017-06-15 16:55:39','2017-06-15 16:55:39'),
	(4,'Lidia gonna get it anyway!!!!','3','','2017-06-15 16:56:11','2017-06-15 16:56:11'),
	(5,'Johnny man Rocks!!1','2','active','2017-06-15 17:02:34','2017-06-15 17:02:34');

/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table p_h_o_t_o_s
# ------------------------------------------------------------

DROP TABLE IF EXISTS `p_h_o_t_o_s`;

CREATE TABLE `p_h_o_t_o_s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photoname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `p_h_o_t_o_s` WRITE;
/*!40000 ALTER TABLE `p_h_o_t_o_s` DISABLE KEYS */;

INSERT INTO `p_h_o_t_o_s` (`id`, `photoname`, `l_n_b_s_id`, `created_at`, `updated_at`)
VALUES
	(1,'lnb-Yohannes-1-2017-05-24 09:09:33.jpg',1,'2017-05-24 09:09:33','2017-05-24 09:09:33'),
	(2,'lnb-Yohannes-1-2017-05-24 09:09:45.jpg',1,'2017-05-24 09:09:45','2017-05-24 09:09:45'),
	(3,'lnb-Yohannes-1-2017-05-24 09:09:54.jpg',1,'2017-05-24 09:09:54','2017-05-24 09:09:54'),
	(4,'lnb-Millo-2-2017-05-24 11:29:42.jpg',2,'2017-05-24 11:29:42','2017-05-24 11:29:42'),
	(5,'lnb-Millo-2-2017-05-24 11:29:48.jpg',2,'2017-05-24 11:29:48','2017-05-24 11:29:48'),
	(6,'lnb-Millo-2-2017-05-24 11:30:00.jpg',2,'2017-05-24 11:30:00','2017-05-24 11:30:00'),
	(7,'lnb-Joe -3-2017-05-28 08:01:07.jpg',3,'2017-05-28 08:01:07','2017-05-28 08:01:07'),
	(8,'lnb-Yohannes-1-2017-05-29 02:56:15.jpg',1,'2017-05-29 02:56:15','2017-05-29 02:56:15'),
	(9,'lnb-Girma-4-2017-05-29 08:43:52.jpg',4,'2017-05-29 08:43:52','2017-05-29 08:43:52'),
	(10,'lnb-Girma-4-2017-05-29 08:43:59.jpg',4,'2017-05-29 08:43:59','2017-05-29 08:43:59'),
	(18,'lnbcarousal1-Millo--2017-06-10 15:08:38.jpg',2,'2017-06-10 15:08:38','2017-06-10 15:08:38'),
	(19,'lnbcarousal1-Millo-2-2017-06-10 15:12:07.jpg',2,'2017-06-10 15:12:07','2017-06-10 15:12:07'),
	(20,'lnbcarousal2-Millo-2-2017-06-10 15:12:35.jpg',2,'2017-06-10 15:12:35','2017-06-10 15:12:35'),
	(21,'lnbcarousal3-Millo-2-2017-06-10 15:18:03.jpg',2,'2017-06-10 15:18:03','2017-06-10 15:18:03'),
	(22,'lnb-Millo-2-2017-06-12 16:00:23.jpg',2,'2017-06-12 16:00:23','2017-06-12 16:00:23'),
	(23,'lnbprofilepic-Millo-2-2017-06-13 18:21:01.jpg',2,'2017-06-13 18:21:01','2017-06-13 18:21:01'),
	(24,'lnbprofilepic-Millo-2-2017-06-18 16:08:43.jpg',2,'2017-06-18 16:08:43','2017-06-18 16:08:43');

/*!40000 ALTER TABLE `p_h_o_t_o_s` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table rates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rates`;

CREATE TABLE `rates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rate_val` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;

INSERT INTO `rates` (`id`, `user_id`, `l_n_b_s_id`, `rate_val`, `created_at`, `updated_at`)
VALUES
	(5,'3','1','5','2017-06-14 11:34:46','2017-06-21 18:27:05'),
	(6,'3','4','4','2017-06-14 11:40:17','2017-06-15 03:04:59'),
	(7,'3','3','5','2017-06-14 11:44:08','2017-06-14 11:58:58'),
	(8,'3','2','4','2017-06-14 11:46:38','2017-06-21 18:55:55'),
	(9,'4','1','5','2017-06-21 18:56:34','2017-06-21 19:08:23'),
	(10,'4','2','4','2017-06-21 18:56:50','2017-06-21 19:24:42');

/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_m_e__a_p_p_s
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_m_e__a_p_p_s`;

CREATE TABLE `s_m_e__a_p_p_s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `appCat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `essay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legalID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_letter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `s_m_e__a_p_p_s` WRITE;
/*!40000 ALTER TABLE `s_m_e__a_p_p_s` DISABLE KEYS */;

INSERT INTO `s_m_e__a_p_p_s` (`id`, `appCat`, `Name`, `essay`, `legalID`, `business_letter`, `status`, `User_id`, `phone`, `user_fname`, `motto`, `created_at`, `updated_at`)
VALUES
	(1,'Caffe','Yohannes Internet Caffe','egwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw we\r\negwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw weegwef wef wef wef wef ew fw weegwef wef wef','','','accepted','1','+251977399269','Yohannes Telia','Here we go again','2017-05-23 19:17:29','2017-05-24 09:05:51'),
	(2,'Caffe','Millo caffe and Restaurent','df sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdf\r\ndf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdf\r\ndf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sdfdf sdf sdf sdf sd','','','accepted','3','+251977399269','Millo Shitto','Here we go again','2017-05-24 11:22:38','2017-05-24 11:25:16'),
	(3,'Caffe','Labour Management and letters','fsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf s\r\nfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sfsdf sdf sdf sf','','','accepted','4','+977399269','Joe  Doe','we repair like God!','2017-05-28 07:58:44','2017-05-28 08:00:22'),
	(4,'Caffe','Temporary',' sdf sdf sdf ','','','accepted','5','977399269','Girma Tafese','ss df sdf sdf','2017-05-29 08:36:59','2017-05-29 08:40:34');

/*!40000 ALTER TABLE `s_m_e__a_p_p_s` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sub_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_categories`;

CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catagories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;

INSERT INTO `sub_categories` (`id`, `created_at`, `updated_at`, `sub_cat`, `catagories_id`)
VALUES
	(1,NULL,NULL,'Caffe',1),
	(2,NULL,NULL,'Temp',1);

/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owns_SME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SME_APPS_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_n_b_s_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `gender`, `last_name`, `city`, `job`, `phone`, `address`, `owns_SME`, `is_admin`, `app_status`, `SME_APPS_id`, `l_n_b_s_id`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Yohannes','yohannis.kifle@aau.edu.et','$2y$10$sNAPGU52rH2dhsgGeREAquxNLpZbd.gjSyVBPfJwOcaCo3VBaoUpG','Male','Abebe','Addis Ababa','Web Developer','+251977399269','King George VI St, Addis Ababa,','1','0','accepted','','1','O9XORY5mPPSDAUAoiVmRUznqiqaiI0wC6ADQGVKw9se8zrl6vERPCqhpyEhK','2017-05-23 19:16:17','2017-06-04 05:37:51'),
	(2,'Yonatan','yonatan@gmail.com','$2y$10$a/o0xH7E/Y0qHeOY38WeAukYr5KOwV9/RzpDDFGU7u7EjTV5evlr6','Male','Girma','Addis Ababa','Student','977399269','King Road, Addis Ababa','0','1','','','-1','tZE0yp8tMrmrTK2dgnnZTAVS26B1vGaMOcS9djZq5D1luzpFXqY3iuXh0Cz8','2017-05-23 19:18:13','2017-05-26 04:15:35'),
	(3,'Google','millo@gmail.com','$2y$10$ODFlG27njfB0vRuRGiZth.MFDfJR3rJa278.JOFYgnjcP7rAFInWC','Male','Kifle','Addis Ababa','Student','+251977399269','King Road, Addis Ababa','1','0','accepted','','2','voiAGu0eZ8StF64UAngfCW0LInWIJzupafDqrb6V77B5hSFB19Sr1XPBNHX9','2017-05-24 11:20:33','2017-06-21 18:56:22'),
	(4,'Joe ','joe@gmail.com','$2y$10$2OO2klg6pFSPzESctXYj3.mCSi.dCV2bIXEeVa272ekH9Z9a0NTKO','Male','Doe','Addis Ababa','Web Desiegner','+977399269','King George VI St, Addis Ababa,','1','0','accepted','','3','3dW0DSB9P0urS0tUuHoZ8jv0B6VfcURlzIJXfdirreLCfibcVJGlLbhbM0Vo','2017-05-28 07:57:50','2017-06-04 05:43:45'),
	(5,'Girma','girma@gmail.com','$2y$10$G/yMwqNzptHcUo3GamQ03uaIeHO9quZPmzTLWo4PIrn3/.KL7H48.','Male','Tafese','Addis Ababa','Web Developer','977399269','King George VI St, Addis Ababa,','1','0','accepted','','4','QMHZ8Y1IVOMMJmaYJ1pVTKtRw4ib2ykGTUscjIBijZ4lm1CUw4lyz2kHUFz4','2017-05-29 08:33:26','2017-06-01 04:52:48');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
