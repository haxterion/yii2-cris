/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.30-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `recordguestbook` (
	`id` int (10),
	`id_guestbook` varchar (30),
	`date_phone` date ,
	`date_today` date ,
	`date_input` date ,
	`date_transaksi` date ,
	`price` int (20),
	`explanation` varchar (750),
	`status` int (20),
	`id_user` int (10),
	`person_name` int (100)
); 
