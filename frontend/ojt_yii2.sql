/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.30-MariaDB : Database - ojt_yii2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ojt_yii2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ojt_yii2`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values 
('driver','3',1532361036),
('superuser','1',1532360322);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values 
('/*',2,NULL,NULL,NULL,1532360383,1532360383),
('driver',1,NULL,NULL,NULL,1532360244,1532360244),
('kasir',1,NULL,NULL,NULL,1532360260,1532360260),
('operator',1,NULL,NULL,NULL,1532360282,1532360282),
('superuser',1,NULL,NULL,NULL,1532360221,1532360221);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values 
('superuser','/*');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `booking_order` */

DROP TABLE IF EXISTS `booking_order`;

CREATE TABLE `booking_order` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_guestbook` varchar(200) DEFAULT NULL,
  `guest_name` varchar(200) DEFAULT NULL,
  `name_driver` int(20) DEFAULT NULL,
  `guest_phone` decimal(13,0) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `first_date` date DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `vehicle` int(20) DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `packet` int(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `date_input` date DEFAULT NULL,
  `date_transaksi` date DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_fk` (`id_guestbook`),
  KEY `packet_fk` (`packet`),
  KEY `fk_driver_schedule` (`name_driver`),
  KEY `fk_vehicle_schedule` (`vehicle`),
  CONSTRAINT `booking_fk` FOREIGN KEY (`id_guestbook`) REFERENCES `guestbook` (`id`),
  CONSTRAINT `fk_driver_schedule` FOREIGN KEY (`name_driver`) REFERENCES `schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vehicle_schedule` FOREIGN KEY (`vehicle`) REFERENCES `schedule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `packet_fk` FOREIGN KEY (`packet`) REFERENCES `packet` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `booking_order` */

/*Table structure for table `driver` */

DROP TABLE IF EXISTS `driver`;

CREATE TABLE `driver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status_schedule` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_schedule2` (`status_schedule`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `driver` */

insert  into `driver`(`id`,`name`,`phone_number`,`address`,`status`,`status_schedule`) values 
(4,'Zainul','085257456951','Surabaya','internal',NULL),
(6,'Adi','081217772786','-','internal',NULL),
(7,'Pramudia','081235619233','.','Internal',NULL),
(8,'Tutu','082257190131','-','internal',NULL),
(9,'Sabirin','082399077635','-','Internal',NULL),
(10,'Yanto','082244454324','-','Internal',NULL),
(11,'Fadli','082131952504','-','Internal',NULL);

/*Table structure for table `guestbook` */

DROP TABLE IF EXISTS `guestbook`;

CREATE TABLE `guestbook` (
  `id` varchar(10) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `phone_number` decimal(13,0) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `date_input` date DEFAULT NULL,
  `date_transaksi` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkstatus` (`status`),
  CONSTRAINT `fkstatus` FOREIGN KEY (`status`) REFERENCES `recordguestbook` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guestbook` */

/*Table structure for table `maintence` */

DROP TABLE IF EXISTS `maintence`;

CREATE TABLE `maintence` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `vehicle_type` int(10) DEFAULT NULL,
  `licence_plat` varchar(10) DEFAULT NULL,
  `explanation` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `maintenancefk` (`vehicle_type`),
  CONSTRAINT `maintenancefk` FOREIGN KEY (`vehicle_type`) REFERENCES `vehicle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `maintence` */

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values 
('m000000_000000_base',1532359400),
('m140506_102106_rbac_init',1532359673),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1532359673),
('m180523_151638_rbac_updates_indexes_without_prefix',1532359674);

/*Table structure for table `packet` */

DROP TABLE IF EXISTS `packet`;

CREATE TABLE `packet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `price` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `packet` */

/*Table structure for table `recordguestbook` */

DROP TABLE IF EXISTS `recordguestbook`;

CREATE TABLE `recordguestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_guestbook` varchar(10) DEFAULT NULL,
  `date_phone` date DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `date_input` date DEFAULT NULL,
  `date_transaksi` date DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `explanation` varchar(250) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `person_name` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkrecord` (`id_guestbook`),
  KEY `fkrecord2` (`id_user`),
  KEY `fkrecord3` (`status`),
  CONSTRAINT `fkrecord` FOREIGN KEY (`id_guestbook`) REFERENCES `guestbook` (`id`),
  CONSTRAINT `fkrecord2` FOREIGN KEY (`id_user`) REFERENCES `login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recordguestbook` */

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_booking` int(20) DEFAULT NULL,
  `id_vehicle` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkschedule` (`id_booking`),
  KEY `fkvihcle` (`id_vehicle`),
  CONSTRAINT `fkschedule` FOREIGN KEY (`id_booking`) REFERENCES `booking_order` (`id`),
  CONSTRAINT `fkvihcle` FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `hakakses` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`hakakses`) values 
(1,'rijalimnida','vd7V5q4NDtoaq6P8-flC9CWLZN5L1Irx','$2y$13$VOFNhON.703vwgrKWH7nk.z6U6Kl5qzx9UIF2cZObwRlX//ewE55O',NULL,'rijalimnida@gmail.com',10,1530622505,1530622505,''),
(2,'admin','l6s6f-qFkuSHv-Xi2UHYB0wSAp0akY0J','$2y$13$gH.fgcybFhTUvhdrfMBszuZ7s/u0Mh1DP/sb4.JoRtfBpO3eHdakW',NULL,'rijalimnida1@gmail.com',10,1530687655,1530687655,''),
(3,'rijal','9Hv1_CBZhgS-a6FwoBnSbhzXrxB-TCNB','$2y$13$HxLvFIuJ/mFerOD7tximX.vo7j2/yh0lMz3GdnhyI9AX7KzbF2E3S',NULL,'rijal@gmail.com',10,1532360879,1532360879,'');

/*Table structure for table `vehicle` */

DROP TABLE IF EXISTS `vehicle`;

CREATE TABLE `vehicle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `licence_plat` varchar(10) DEFAULT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `vehicle_status` varchar(10) DEFAULT NULL,
  `partner` varchar(50) DEFAULT NULL,
  `id_driver` int(10) DEFAULT NULL,
  `status_schedule` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkdriver` (`id_driver`),
  KEY `fk_status_schedule` (`status_schedule`),
  CONSTRAINT `fkdriver` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `vehicle` */

insert  into `vehicle`(`id`,`licence_plat`,`vehicle_type`,`vehicle_status`,`partner`,`id_driver`,`status_schedule`) values 
(5,'AG7090HB','4','Internal','',4,NULL),
(6,'M 447 OE','1','Internal','',4,NULL);

/*Table structure for table `vehicle_type` */

DROP TABLE IF EXISTS `vehicle_type`;

CREATE TABLE `vehicle_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_type` */

insert  into `vehicle_type`(`id`,`type`,`vendor`) values 
(1,'avanza','toyota'),
(2,'rush','toyota'),
(3,'mobilio','honda'),
(4,'swift','suzuki'),
(5,'B-RV','honda'),
(6,'pajero sport','mitsubishi'),
(7,'xpander','mitsubishi'),
(8,'grand livina','nissan'),
(9,'serena','nissan'),
(10,'x-trail','nissan'),
(11,'avanza','toyota');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
