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
/*Table structure for table `advertisement` */

DROP TABLE IF EXISTS `advertisement`;

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `advertisement_avatar` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `advertisement` */

insert  into `advertisement`(`id`,`first_name`,`last_name`,`phone`,`email`,`address1`,`address2`,`postcode`,`city`,`state`,`country`,`delivery`,`price`,`advertisement_avatar`,`created_by`,`created_on`) values 
(1,'Elizabeth','Carver','16064053497','hackbaby1996@gmail.com','Address Line 1','Address Line 2','3000','Melbourne','VIC','RO','overnight','30','HOME_AUDIO_SYSTEM.jpg',1,'2021-04-27 17:57:38'),
(2,'Alvi','Exa','+61412345678','john.wick@reeves.com','Address Line 1','Address Line 2','3000','Melbourne','VIC','AU','overnight','100','Luxury_Entertainment_4.jpg',1,'2021-04-27 18:34:59'),
(3,'Elizabeth','Carver','16064053497','hackbaby1996@gmail.com','Address Line 1','Address Line 2','3000','Melbourne','VIC','RO','overnight','0','MULTI-ROOM_SMART_HOME_AUDIO.jpg',1,'2021-04-27 20:43:32'),
(4,'Elizabeth','Carver','16064053497','hackbaby1996@gmail.com','Address Line 1','Address Line 2','3000','Melbourne','VIC','PL','overnight','500','Why_hoy_hoy_ibiza.jpg',1,'2021-04-27 21:29:00');

/*Table structure for table `announcement` */

DROP TABLE IF EXISTS `announcement`;

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `announcement_category_id` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  `read_by` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcement` */

insert  into `announcement`(`id`,`name`,`announcement_category_id`,`body`,`status`,`created_by`,`created_on`,`read_by`) values 
(4,'Announcement Cards for Every Occasion',1,'<p><span style=\"color: rgb(24, 21, 18);\">Share your wonderful news with custom announcements! Whether you’re announcing the birth of your baby or your recent move, Shutterfly has you covered. With so many options to create personalized announcements – with or without photos – you can truly express your personal style and sentiment. From birth announcements and graduation announcements to wedding announcements and more, you can create one-of-a-kind photo cards with Shutterfly. Customize each of our unique greeting card templates to make the perfect personalized announcements for any occasion.</span></p>',NULL,1,'2021-04-16 14:40:25','1,2,6,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1'),
(5,'Sharing Your Bundle of Joy With Personalized Birth Announcement Cards',1,'<p><span style=\"color: rgb(24, 21, 18);\">Share your wonderful news with custom announcements! Whether you’re announcing the birth of your baby or your recent move, Shutterfly has you covered. With so many options to create personalized announcements – with or without photos – you can truly express your personal style and sentiment. From birth announcements and graduation announcements to wedding announcements and more, you can create one-of-a-kind photo cards with Shutterfly. Customize each of our unique greeting card templates to make the perfect personalized announcements for any occasion.</span></p>',NULL,1,'2021-04-16 15:01:51','1,6,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1'),
(6,'Stay in Touch on the Move With Moving Announcements',1,'<p>It’s easy to lose touch with loved ones when life gets busy, but don’t let time slip away. Be sure to update friends and family when you move, and you might find yourself with visitors! At Shutterfly, we offer a variety of different&nbsp;<a href=\"https://www.shutterfly.com/cards-stationery/announcements/moving-announcements\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(51, 102, 153);\">moving announcements</a>&nbsp;to let everyone know you have a new home. We have options for nomadic renters as well as homeowners, and we can customize any design to your preference. Share your first-time home purchase or recent cross-country relocation with style. You might also be interested in finding a self-inking rubber&nbsp;<a href=\"https://www.shutterfly.com/cards-stationery/personal-stationery/custom-self-inking-rubber-stamps\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(51, 102, 153);\">return address stamp</a>&nbsp;for&nbsp;<a href=\"https://www.shutterfly.com/cards-stationery/holiday-cards\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(51, 102, 153);\">holiday cards</a>&nbsp;too.</p><p><br></p><p><br></p>',NULL,1,'2021-04-16 15:27:58','1,1,6,1,1,1,1,1,1,1,1,1,1,1,1,1,1'),
(7,'Tie the Knot in Style With Custom Wedding Announcements',1,'<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(24, 21, 18);\">Our bridal announcements are elegant and romantic – perfect for sharing your recent engagement with friends and family. Once you and your betrothed have selected a date, be sure to begin exploring options for save the dates. We offer flat, folded, and magnet options for save the dates to suit every need. We also make it easy to design custom&nbsp;</span><a href=\"https://www.shutterfly.com/cards-stationery/announcements/wedding-announcements\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255); color: rgb(51, 102, 153);\">wedding announcements</a><span style=\"background-color: rgb(255, 255, 255); color: rgb(24, 21, 18);\">. These can be great for new couples, especially if you or your spouse is changing names or if you’ve recently had a change in address. If you decided to elope, wedding announcements can help you share the big news.</span></p>',NULL,1,'2021-04-16 15:58:47','1,1,6,1,1,1,1,1,1,1,1,1,1,1,1,1'),
(8,'Tie the Knot in Style With Custom Wedding Announcements',1,'<p>Tie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding AnnouncementsTie the Knot in Style With Custom Wedding Announcements</p>',NULL,1,'2021-04-16 16:00:20','1,1,1,6,1,1,1,1,1,1,1,1,1,1'),
(9,'Announcement Cards for Every Occasion',1,'<p>Announcement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every Occasion</p>',NULL,1,'2021-04-16 16:29:07','1,1,6,1,1,1,1,1,1,1,1'),
(10,'Announcement Cards for Every Occasion',1,'<p>Announcement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every OccasionAnnouncement Cards for Every Occasion</p>',NULL,1,'2021-04-17 00:01:48','1,1,6,1,1,1,1,1,1');

/*Table structure for table `announcement_category` */

DROP TABLE IF EXISTS `announcement_category`;

CREATE TABLE `announcement_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcement_category` */

insert  into `announcement_category`(`id`,`name`,`created_by`,`created_on`) values 
(1,'Critical Issue',1,'2021-04-16 13:45:36');

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
('j6auh10iubn6k6ff56c1a48ufm38tpaq','::1',1619625045,0,1,'admin@admin.com','__ci_last_regenerate|i:1619625045;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619610080\";last_check|i:1619623431;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('3v5mtbk9g37bd730ejm0icc4i1l0i3fm','::1',1619625540,0,1,'admin@admin.com','__ci_last_regenerate|i:1619625540;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619610080\";last_check|i:1619623431;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('0df39c192n808kvtj1slt48mlkr9tm8r','::1',1619626681,0,1,'admin@admin.com','__ci_last_regenerate|i:1619626681;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619610080\";last_check|i:1619623431;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('k6okfkntuqkhad8odic6d4l4t4r3bkpi','::1',1619626803,0,1,'admin@admin.com','__ci_last_regenerate|i:1619626803;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('5ppfgpqck2238nsv5h4sufr8kfonoo7u','::1',1619627223,0,1,'admin@admin.com','__ci_last_regenerate|i:1619627223;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('632lt5h9oms9pdljrm6ojfrcmgkeigj8','::1',1619627558,0,1,'admin@admin.com','__ci_last_regenerate|i:1619627558;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('r8inqvthe48ghpap1dn8o5sanj1h6087','::1',1619627923,0,1,'admin@admin.com','__ci_last_regenerate|i:1619627923;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('qntmgt3mjvm4ido4iiebo0prj2e12tkb','::1',1619628321,0,1,'admin@admin.com','__ci_last_regenerate|i:1619628321;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('rt2c9bdfees3pp5861h8lr7le1co19dh','::1',1619629321,0,1,'admin@admin.com','__ci_last_regenerate|i:1619629321;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('uu3em1nfh3uedm2s72cvftbl881uco5g','::1',1619629847,0,1,'admin@admin.com','__ci_last_regenerate|i:1619629847;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('k5p0surtomearv7eamq7amp8vkrmouk2','::1',1619631369,0,1,'admin@admin.com','__ci_last_regenerate|i:1619631369;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('rss98sdtqrh89dfhhmsgvvqmb47ab32i','::1',1619631670,0,1,'admin@admin.com','__ci_last_regenerate|i:1619631670;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('9lk393oe6uc6oi3cj337hndfk9a3hgde','::1',1619632017,0,1,'admin@admin.com','__ci_last_regenerate|i:1619631670;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619623431\";last_check|i:1619626803;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

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
(12,'Sup?',1,6,1,'2021-04-14 17:42:43',1),
(13,'Hello ?',6,1,1,'2021-04-15 23:37:24',6),
(14,'Sup?',1,6,1,'2021-04-15 23:57:26',1),
(15,'What bro?',1,6,1,'2021-04-16 00:09:09',1),
(16,'I will get back to you!',1,6,1,'2021-04-16 00:13:10',1),
(17,'Hahahaha Hi!',6,1,1,'2021-04-16 00:16:37',6),
(18,'Hi ! You there?',1,6,1,'2021-04-16 15:28:30',1),
(19,'Yes i am here ? say',6,1,1,'2021-04-16 15:29:05',6),
(20,'HAHAH Whre have you been bro?',1,6,1,'2021-04-16 15:29:37',1),
(21,'Hi Bro.',1,6,1,'2021-04-16 16:29:35',1),
(22,'Hi Baby',6,1,1,'2021-04-16 16:30:06',6),
(23,'I love you.',1,6,1,'2021-04-16 16:30:45',1),
(24,'I love you too.',6,1,1,'2021-04-16 16:31:10',6),
(25,'Hey i love you',1,6,1,'2021-04-17 00:00:59',1),
(26,'Hey love you 2',6,1,1,'2021-04-17 00:01:24',6);

/*Table structure for table `token` */

DROP TABLE IF EXISTS `token`;

CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `token` */

insert  into `token`(`id`,`access_token`) values 
(2,'{\"access_token\":\"eyJhbGciOiJIUzUxMiIsInYiOiIyLjAiLCJraWQiOiI0YWFhMWFhMy00YTQ2LTRmOTQtYmY2NC01ZDUxMzgyYThhYjgifQ.eyJ2ZXIiOjcsImF1aWQiOiIwNTA5OWJlNDQwZTVkNzMwM2FjMTgxZDc4YTIyZWRlZCIsImNvZGUiOiJXMlJDZjU5ZUh0X29GbmdZRXBBU1lTSHZEaHYxMXkwemciLCJpc3MiOiJ6bTpjaWQ6OEd4anE0cjBUdGFaeHdrR3ZLbUJRIiwiZ25vIjowLCJ0eXBlIjowLCJ0aWQiOjAsImF1ZCI6Imh0dHBzOi8vb2F1dGguem9vbS51cyIsInVpZCI6Im9GbmdZRXBBU1lTSHZEaHYxMXkwemciLCJuYmYiOjE2MTk2MjU5NjgsImV4cCI6MTYxOTYyOTU2OCwiaWF0IjoxNjE5NjI1OTY4LCJhaWQiOiJvWDUyV3lfZ1JCV0dwMWJIVUlxR2pnIiwianRpIjoiY2U3MGQyMTctMDc1OC00NWY4LTk1ZmMtODQxYzA3OTkwMTY2In0.QydmDoUY9hGpPLW44eSRX3PKp9oUx4kbCNga8cMWPeEMTPwQNpSwDLrRrCf-HRm6gsPPHudzuCqEZvB5JbUm8g\",\"token_type\":\"bearer\",\"refresh_token\":\"eyJhbGciOiJIUzUxMiIsInYiOiIyLjAiLCJraWQiOiIzMDM1NjdlMy02NWIyLTQ3NDgtODVjMS02ZGY1OTA1MDZmNTEifQ.eyJ2ZXIiOjcsImF1aWQiOiIwNTA5OWJlNDQwZTVkNzMwM2FjMTgxZDc4YTIyZWRlZCIsImNvZGUiOiJXMlJDZjU5ZUh0X29GbmdZRXBBU1lTSHZEaHYxMXkwemciLCJpc3MiOiJ6bTpjaWQ6OEd4anE0cjBUdGFaeHdrR3ZLbUJRIiwiZ25vIjowLCJ0eXBlIjoxLCJ0aWQiOjAsImF1ZCI6Imh0dHBzOi8vb2F1dGguem9vbS51cyIsInVpZCI6Im9GbmdZRXBBU1lTSHZEaHYxMXkwemciLCJuYmYiOjE2MTk2MjU5NjgsImV4cCI6MjA5MjY2NTk2OCwiaWF0IjoxNjE5NjI1OTY4LCJhaWQiOiJvWDUyV3lfZ1JCV0dwMWJIVUlxR2pnIiwianRpIjoiYmFiNDdiN2YtMTljYy00NWUxLTkxMmItZjlkYzdiYTk3MzZlIn0.HHMuPfMsMJElMG0MYvtYTHBBL0ssbHkF-b5aV26v36EFt8SL3GrXdcS8pU5jYGbS3PC80prR9frw1BJpYXbIPQ\",\"expires_in\":3599,\"scope\":\"meeting:master meeting:read:admin meeting:write:admin\"}');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topic_replies` */

insert  into `topic_replies`(`id`,`body`,`topic_id`,`attachment`,`created_by`,`created_on`) values 
(2,'Hi i will help you.',1,NULL,1,'2021-04-12 20:53:26'),
(4,'Yes, I Am totally Agreed',1,NULL,5,'2021-04-12 21:09:52'),
(6,'A formal discourse on a topic; an exposition.\n',2,NULL,1,'2021-04-12 21:30:43'),
(7,'Hey how are you',1,NULL,1,'2021-04-12 22:19:02'),
(8,'asasas',1,NULL,1,'2021-04-14 01:05:27'),
(9,'You Are Right',1,NULL,6,'2021-04-14 01:58:35'),
(10,'Hi',1,NULL,1,'2021-04-16 00:31:59'),
(11,'hello',1,NULL,6,'2021-04-17 00:02:54');

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
(1,'127.0.0.1','administrator','$2y$12$1p1JveSFacSEXNrusb38z.FNAJyxpvSrzWxoHt01lYc5p1PsxHalW','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1619626803,1,'Elizabeth','Carver','ADMIN','0','Testimonial-Girl-13.jpg','admin',0,1),
(5,'::1',NULL,'$2y$12$1p1JveSFacSEXNrusb38z.FNAJyxpvSrzWxoHt01lYc5p1PsxHalW','demo@president.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1618071819,1618510626,1,'Ellaa','Smitson','none','123456789','images.jpg','rita_garrett',0,1),
(6,'::1',NULL,'$2y$10$lIKdmdZCpPnU7u9R26YtluLJkZWesmQTJ57bm2xSCFWhdASRXGnIq','alli@rita.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1618347461,1618599643,1,'Alli','Steve','none','812819','default.jpg','lori_nichols',0,1);

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

/*Table structure for table `zoom_meetings` */

DROP TABLE IF EXISTS `zoom_meetings`;

CREATE TABLE `zoom_meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `duration` varchar(2) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `attendant` text DEFAULT NULL,
  `meeting_url` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `zoom_meetings` */

insert  into `zoom_meetings`(`id`,`name`,`start_time`,`duration`,`password`,`attendant`,`meeting_url`,`created_by`,`created_on`) values 
(1,'Isadora Gates','2021-04-28T22:16','30','1233','[\"5\",\"6\"]','https://zoom.us/j/93179109948?pwd=YmxRY1VnYms4YjJNc0dXV09aK092Zz09null',1,'2021-04-28 22:14:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
