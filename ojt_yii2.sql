/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 10.1.21-MariaDB : Database - ojt_yii2
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
('superuser','1',1532400886),
('superuser','3',1532401596);

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
('/*',2,NULL,NULL,NULL,1532400903,1532400903),
('driver',1,NULL,NULL,NULL,1532400994,1532400994),
('superuser',1,NULL,NULL,NULL,1532400855,1532400855);

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
  `id_guestbook` int(10) DEFAULT NULL,
  `customer` varchar(200) DEFAULT NULL,
  `cust_phone` varchar(15) DEFAULT NULL,
  `guest_name` varchar(200) DEFAULT NULL,
  `name_driver` int(20) DEFAULT NULL,
  `guest_phone` varchar(15) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `first_date` datetime DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
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
  `salary` int(15) DEFAULT NULL,
  `license_plat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `packet_fk` (`packet`),
  KEY `fk_driver_schedule` (`name_driver`),
  KEY `fk_vehicle_schedule` (`vehicle`),
  KEY `fkguestbook1` (`id_guestbook`),
  CONSTRAINT `fk_driver_schedule` FOREIGN KEY (`name_driver`) REFERENCES `driver` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vehicle_schedule` FOREIGN KEY (`vehicle`) REFERENCES `vehicle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fkguestbook1` FOREIGN KEY (`id_guestbook`) REFERENCES `guestbook` (`id`),
  CONSTRAINT `packet_fk` FOREIGN KEY (`packet`) REFERENCES `packet` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `booking_order` */

insert  into `booking_order`(`id`,`id_guestbook`,`customer`,`cust_phone`,`guest_name`,`name_driver`,`guest_phone`,`address`,`first_date`,`last_date`,`vehicle`,`origin`,`destination`,`packet`,`price`,`date_today`,`date_input`,`date_transaksi`,`id_user`,`person_name`,`salary`,`license_plat`) values 
(1,61,NULL,NULL,'Viki',NULL,'62812617151723','Kediri',NULL,NULL,NULL,'','',NULL,400000,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(2,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(3,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(4,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(5,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(6,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,''),
(7,62,NULL,NULL,'',NULL,'','',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,1,'rijalimnida',NULL,'');

/*Table structure for table `driver` */

DROP TABLE IF EXISTS `driver`;

CREATE TABLE `driver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `phone_number` decimal(13,0) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status_schedule` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_schedule2` (`status_schedule`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `driver` */

insert  into `driver`(`id`,`name`,`phone_number`,`address`,`status`,`status_schedule`) values 
(1,'ahmad',9999999999999,'surabaya','internal',NULL);

/*Table structure for table `guestbook` */

DROP TABLE IF EXISTS `guestbook`;

CREATE TABLE `guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `guest` varchar(100) DEFAULT NULL,
  `guest_address` varchar(200) DEFAULT NULL,
  `guest_pn` varchar(15) DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `date_input` date DEFAULT NULL,
  `date_transaksi` date DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL,
  `vehicle` varchar(100) DEFAULT NULL,
  `packet` varchar(100) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `status_order` int(11) NOT NULL,
  `status_schedule` int(11) NOT NULL,
  `status_close` int(11) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  `explanation` text,
  PRIMARY KEY (`id`),
  KEY `fkstatus` (`status`),
  KEY `status` (`status_order`),
  CONSTRAINT `status` FOREIGN KEY (`status_order`) REFERENCES `statusorder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

/*Data for the table `guestbook` */

insert  into `guestbook`(`id`,`customer`,`phone_number`,`address`,`guest`,`guest_address`,`guest_pn`,`date_today`,`date_input`,`date_transaksi`,`destination`,`origin`,`vehicle`,`packet`,`price`,`status`,`status_order`,`status_schedule`,`status_close`,`id_user`,`person_name`,`explanation`) values 
(61,'Rijalul','62861631264124','Kediri','Viki','Jakarta','62812617151723','2018-08-08','2018-08-08','2018-08-08','Malang','Surabaya','Avanza',NULL,400000,'Intro',1,1,0,'1','rijalimnida','ABCD'),
(62,'Rani','62856778998988','Jember','Rani','Jember','62856778998987','2018-08-08','2018-08-08','2018-08-08','Surabaya','Malang','Innova',NULL,400000,'Intro',1,1,0,'1','rijalimnida',''),
(63,'Toni','62861631264124','Kediri','Toni','Kediri','62861631264124','2018-08-10','2018-08-11','2018-08-11','Surabaya','Malang','Avanza',NULL,400000,'Intro',0,0,0,'1','rijalimnida',''),
(64,'Cimprut','62861631264124','Blitar','Tama','Solo','62861631264124','2018-08-08','2018-08-10','2018-08-10','Surabaya','Blitar','Avanza',NULL,300000,'Intro',0,0,0,'1','rijalimnida',''),
(65,'ayu','62856778998987','Surabaya','putri','Malang','62828979897657','2018-08-10','2018-08-11','2018-08-11','Malang','Surabaya','Innova',NULL,400000,'Intro',0,0,0,'1','rijalimnida','');

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
('m000000_000000_base',1530622351),
('m130524_201442_init',1530622355),
('m140506_102106_rbac_init',1532361314),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1532361314),
('m180523_151638_rbac_updates_indexes_without_prefix',1532361315);

/*Table structure for table `packet` */

DROP TABLE IF EXISTS `packet`;

CREATE TABLE `packet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `price` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `packet` */

insert  into `packet`(`id`,`name`,`price`) values 
(1,'Dropout',121);

/*Table structure for table `record_guestbook` */

DROP TABLE IF EXISTS `record_guestbook`;

CREATE TABLE `record_guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_guestbook` int(10) DEFAULT NULL,
  `date_phone` date DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `date_input` date DEFAULT NULL,
  `date_transaksi` date DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `explanation` text,
  `status` varchar(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkrecord2` (`id_user`),
  KEY `fkrecord3` (`status`),
  KEY `fkguestbook` (`id_guestbook`),
  CONSTRAINT `fkguestbook` FOREIGN KEY (`id_guestbook`) REFERENCES `guestbook` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `record_guestbook` */

insert  into `record_guestbook`(`id`,`id_guestbook`,`date_phone`,`date_today`,`date_input`,`date_transaksi`,`price`,`explanation`,`status`,`id_user`,`person_name`) values 
(1,61,'2018-08-08','2018-08-08','2018-08-08','2018-08-08',NULL,NULL,'Intro',1,'rijalimnida'),
(2,62,'2018-08-08','2018-08-08','2018-08-08',NULL,NULL,NULL,'',1,'rijalimnida'),
(3,63,'2018-08-08','2018-08-08','2018-08-08',NULL,NULL,NULL,'Intro',1,'rijalimnida'),
(4,64,'2018-08-08','2018-08-08','2018-08-08',NULL,NULL,NULL,'Intro',1,'rijalimnida'),
(5,64,NULL,'2018-08-08','2018-08-08','2018-08-08',300000,'Masih Nego','nego',1,'rijalimnida'),
(6,64,NULL,'2018-08-08','2018-08-08',NULL,NULL,'','nego',1,'rijalimnida'),
(7,64,NULL,'2018-08-08','2018-08-08',NULL,NULL,'','nego',1,'rijalimnida'),
(8,64,NULL,'2018-08-08','2018-08-08',NULL,NULL,'','nego',1,'rijalimnida'),
(9,64,NULL,'2018-08-08','2018-08-08',NULL,NULL,'','nego',1,'rijalimnida'),
(10,64,NULL,'2018-08-08','2018-08-08',NULL,NULL,'','nego',1,'rijalimnida'),
(11,62,NULL,'2018-08-10','2018-08-10','1928-08-10',400000,'gfhghj','nego',NULL,'rijalimnida'),
(12,65,'2018-08-11','2018-08-11','2018-08-11',NULL,NULL,NULL,'',1,'rijalimnida');

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

/*Table structure for table `statusorder` */

DROP TABLE IF EXISTS `statusorder`;

CREATE TABLE `statusorder` (
  `id` int(3) NOT NULL,
  `des` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `statusorder` */

insert  into `statusorder`(`id`,`des`) values 
(0,'no'),
(1,'yes');

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
(1,'rijalimnida','vd7V5q4NDtoaq6P8-flC9CWLZN5L1Irx','$2y$13$BDnWuG0cmPrv8s46QcIPQup1KcOP1CT/WpFmfkyyXtR7KTGp.ipOW',NULL,'rijalimnida@gmail.com',10,1530622505,1532804266,''),
(2,'admin','l6s6f-qFkuSHv-Xi2UHYB0wSAp0akY0J','$2y$13$gH.fgcybFhTUvhdrfMBszuZ7s/u0Mh1DP/sb4.JoRtfBpO3eHdakW',NULL,'rijalimnida1@gmail.com',10,1530687655,1530687655,''),
(3,'adminoka','qXWeDGsGaYcIs3vS1V4H-BiLgA4tNg-j','$2y$13$kI.XF1Wg9eaWy7JmITxQvuxsqNpFJQlBdU2aby1.s7DH9ICrsfl52',NULL,'admin@gmail.com',10,1532401420,1532401420,'');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehicle` */

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
