/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.11-MariaDB : Database - apprita
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apprita` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `apprita`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `last_activity` int(10) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`last_activity`,`user_id`,`user_email`,`data`) values 
('niifd52h59vs7h6aolih8m2k2glpfqoe','::1',1618385124,0,NULL,NULL,'__ci_last_regenerate|i:1618385124;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('0g6g2h16104947p1mqig9upmq6511l9h','::1',1618386078,0,1,'admin@admin.com','__ci_last_regenerate|i:1618386074;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('tf13c9t6mkvkrqova8vsd90s0ss4c4sm','::1',1618387084,0,1,'admin@admin.com','__ci_last_regenerate|i:1618387084;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('uue7h9e0hjfv606gas8548l0hql18aq6','::1',1618387424,0,1,'admin@admin.com','__ci_last_regenerate|i:1618387424;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('mjvbalvttu146rosru2r52re3r87ja55','::1',1618387746,0,1,'admin@admin.com','__ci_last_regenerate|i:1618387746;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('og9vlvj7csg6m3n6ur4birdhqauignhi','::1',1618388855,0,1,'admin@admin.com','__ci_last_regenerate|i:1618388855;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('a1j0aqicgcnrnslusij2p424kqs2393t','::1',1618388189,0,1,'admin@admin.com','__ci_last_regenerate|i:1618388188;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('18u1djic0ofrham2osrtafk806satjmd','::1',1618388864,0,1,'admin@admin.com','__ci_last_regenerate|i:1618388855;requested_page|s:10:\"users/list\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618354827\";last_check|i:1618385124;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('ekb5dml62d8meosqumkcr7jls3k2s0o3','::1',1618402773,0,NULL,NULL,'__ci_last_regenerate|i:1618402773;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618385124\";last_check|i:1618402773;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('eft6jcj4960pp143h7ag79qjp6ba9vd7','::1',1618403603,0,1,'admin@admin.com','__ci_last_regenerate|i:1618403603;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618385124\";last_check|i:1618402773;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('s7qv43ad90obd7b0fhis2ee8rcnpsvcf','::1',1618404199,0,1,'admin@admin.com','__ci_last_regenerate|i:1618404199;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618385124\";last_check|i:1618402773;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('qgjui6brqjc3hpk1iiub08iol29hqpqa','127.0.0.1',1618403784,0,NULL,NULL,'__ci_last_regenerate|i:1618403784;identity|s:13:\"alli@rita.com\";email|s:13:\"alli@rita.com\";first_name|s:4:\"Alli\";last_name|s:5:\"Steve\";avatar|s:11:\"default.jpg\";group_name|s:12:\"lori_nichols\";user_id|s:1:\"6\";old_last_login|s:10:\"1618351591\";last_check|i:1618403783;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('ue0hvbqc3olg6580t4rfojr7k9i8ssf6','127.0.0.1',1618404207,0,6,'alli@rita.com','__ci_last_regenerate|i:1618404207;identity|s:13:\"alli@rita.com\";email|s:13:\"alli@rita.com\";first_name|s:4:\"Alli\";last_name|s:5:\"Steve\";avatar|s:11:\"default.jpg\";group_name|s:12:\"lori_nichols\";user_id|s:1:\"6\";old_last_login|s:10:\"1618351591\";last_check|i:1618403783;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('66btbtvc2sbe1lkkicdqhl27n0pt8hrp','127.0.0.1',1618403932,0,NULL,NULL,'__ci_last_regenerate|i:1618403932;requested_page|s:9:\"dashboard\";'),
('t1lm48pp9m8ulsaj30lioks9l620dpvn','127.0.0.1',1618403933,0,NULL,NULL,'__ci_last_regenerate|i:1618403933;'),
('5tqn4pc1bhou4imamh3bkbg5bn026pe0','::1',1618404240,0,1,'admin@admin.com','__ci_last_regenerate|i:1618404199;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618385124\";last_check|i:1618402773;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('2fr4vdppsaaoqgev845p9mfu36ouc046','127.0.0.1',1618404219,0,6,'alli@rita.com','__ci_last_regenerate|i:1618404207;identity|s:13:\"alli@rita.com\";email|s:13:\"alli@rita.com\";first_name|s:4:\"Alli\";last_name|s:5:\"Steve\";avatar|s:11:\"default.jpg\";group_name|s:12:\"lori_nichols\";user_id|s:1:\"6\";old_last_login|s:10:\"1618351591\";last_check|i:1618403783;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values 
(1,'admin','Administrator'),
(2,'members','General Users'),
(3,'rita_garrett','President-Rita Garrett'),
(4,'lori_nichols','Vice President-Lori Nichols'),
(5,'ramesh_anand','Secretary/Treasurer-Ramesh Anand\r\n'),
(6,'member','Member');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `reciever_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_on` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `message` */

insert  into `message`(`id`,`body`,`sender_id`,`reciever_id`,`status`,`created_on`,`created_by`) values 
(1,'Hey',1,6,1,'2021-04-14 02:14:44',1),
(2,'Hello',1,6,1,'2021-04-14 02:15:21',1),
(3,'Hello?',1,6,1,'2021-04-14 02:15:35',1),
(4,'How are you?????',1,6,1,'2021-04-14 02:16:37',1),
(5,'I am Good',1,6,1,'2021-04-14 03:06:57',1),
(6,'Hey Bro',1,6,1,'2021-04-14 03:08:17',1),
(7,'Hi, Brother.',1,6,1,'2021-04-14 03:32:04',1),
(8,'Sup?',5,6,1,'2021-04-14 03:57:44',1),
(9,'Welcome !',1,6,1,'2021-04-14 03:59:41',1),
(10,'Hello you there?',1,6,1,'2021-04-14 17:38:37',1),
(11,'Qe',1,6,1,'2021-04-14 17:42:22',1),
(12,'Sup?',1,6,1,'2021-04-14 17:42:43',1);

/*Table structure for table `topic` */

DROP TABLE IF EXISTS `topic`;

CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `topic_category_id` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topic` */

insert  into `topic`(`id`,`name`,`topic_category_id`,`body`,`status`,`created_by`,`created_on`) values 
(1,'All people should have the right to own guns.',1,'<ul><li>All people should have the right to own guns.</li><li>The death penalty should be abolished.</li><li>Human cloning should be legalized.</li><li>All drugs should be legalized.</li><li>Animal testing should be banned.</li><li>Juveniles should be tried and treated as adults.</li><li>Climate change is the greatest threat facing humanity today.</li></ul><p><br></p>',NULL,1,'2021-04-12 18:50:44'),
(2,'Discussion is defined as talking',1,'<p><strong>Discussion is defined as talking or writing about something, especially in order to solve a problem or resolve a question.</strong></p><p><br></p><p><em>An example of a discussion is when two or more people disagree and decide to sit down and talk out their different opinions.</em></p><p><br></p>',NULL,5,'2021-04-12 21:29:59');

/*Table structure for table `topic_category` */

DROP TABLE IF EXISTS `topic_category`;

CREATE TABLE `topic_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topic_category` */

insert  into `topic_category`(`id`,`name`,`created_by`,`created_on`) values 
(1,'Issue',1,'2021-04-12 17:47:45');

/*Table structure for table `topic_replies` */

DROP TABLE IF EXISTS `topic_replies`;

CREATE TABLE `topic_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topic_replies` */

insert  into `topic_replies`(`id`,`body`,`topic_id`,`attachment`,`created_by`,`created_on`) values 
(2,'Hi i will help you.',1,NULL,1,'2021-04-12 20:53:26'),
(4,'Yes, I Am totally Agreed',1,NULL,5,'2021-04-12 21:09:52'),
(6,'A formal discourse on a topic; an exposition.\n',2,NULL,1,'2021-04-12 21:30:43'),
(7,'Hey how are you',1,NULL,1,'2021-04-12 22:19:02'),
(8,'asasas',1,NULL,1,'2021-04-14 01:05:27'),
(9,'You Are Right',1,NULL,6,'2021-04-14 01:58:35');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `group_name` varchar(15) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`,`avatar`,`group_name`,`is_deleted`,`created_by`) values 
(1,'127.0.0.1','administrator','$2y$12$1p1JveSFacSEXNrusb38z.FNAJyxpvSrzWxoHt01lYc5p1PsxHalW','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1618402773,1,'Elizabeth','Carver','ADMIN','0','Testimonial-Girl-13.jpg','admin',0,1),
(5,'::1',NULL,'$2y$10$WAKD9omzq3mwMzW2XoShbeqmczsdeehqb0zNfS1rcaITKYyo1lt9m','demo@president.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1618071819,1618354790,1,'Ellaa','Smitson','none','123456789','images.jpg','rita_garrett',0,1),
(6,'::1',NULL,'$2y$10$8AOq4P5RF1yPlFA/5oRHMugr9eVluGkl.Ae6Yg6d8QpS7tUEDB.pe','alli@rita.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1618347461,1618403783,1,'Alli','Steve','none','812819','default.jpg','lori_nichols',0,1);

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values 
(1,1,1),
(8,5,2),
(9,6,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
