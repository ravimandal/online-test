/*
SQLyog Community v12.2.2 (64 bit)
MySQL - 5.6.30-0ubuntu0.14.04.1 : Database - nitesh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nitesh` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nitesh`;

/*Table structure for table `admin_login` */

DROP TABLE IF EXISTS `admin_login`;

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `created_on` datetime(5) NOT NULL,
  `updated_on` datetime(5) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_login` */

LOCK TABLES `admin_login` WRITE;

insert  into `admin_login`(`id`,`admin_id`,`admin_pass`,`created_on`,`updated_on`) values 
(1,'admin','admin12345','2016-06-28 17:31:01.00000','2016-06-28 17:31:01.00000');

UNLOCK TABLES;

/*Table structure for table `available_test` */

DROP TABLE IF EXISTS `available_test`;

CREATE TABLE `available_test` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `active` char(255) NOT NULL,
  `created_on` datetime(5) NOT NULL,
  `updated_on` datetime(5) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `available_test` */

LOCK TABLES `available_test` WRITE;

UNLOCK TABLES;

/*Table structure for table `questions_old` */

DROP TABLE IF EXISTS `questions_old`;

CREATE TABLE `questions_old` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `q_type` int(25) NOT NULL,
  `img_url` varchar(40) NOT NULL,
  `question` tinytext NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `answer4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_on` datetime(6) NOT NULL,
  `updated_on` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `questions_old` */

LOCK TABLES `questions_old` WRITE;

insert  into `questions_old`(`id`,`q_type`,`img_url`,`question`,`answer1`,`answer2`,`answer3`,`answer4`,`answer`,`created_on`,`updated_on`) values 
(1,1,'','What  Default Data Type ?','String','Variant','Integer','Boolear','2','2016-07-01 13:12:48.000000','2016-07-01 13:12:48.000000'),
(2,1,'','What is Default Form Border Style ?','Fixed','Single','None','Sizeable','3','2016-07-01 13:16:24.000000','2016-07-01 13:16:24.000000'),
(3,1,'','Which is not type of Control ?','text','lable','checkbox','option button','1','2016-07-01 13:17:18.000000','2016-07-01 13:17:18.000000'),
(4,1,'','Which city is known as The City of Palaces','Kolkatta','Jerusalem','Mumbai','Udaipur','1','2016-07-01 13:18:07.000000','2016-07-01 13:18:07.000000'),
(5,1,'','The Gateway of India is ?','Delhi','Kolkatta','Mumbai','Udaipur','3','2016-07-01 13:19:04.000000','2016-07-01 13:19:04.000000'),
(6,1,'','Which city is known as Pink City?','Hyderabad','Jaipur','Mumbai','Udaipur','2','2016-07-01 13:20:00.000000','2016-07-01 13:20:00.000000'),
(7,1,'','Which is the city of Golden Temple?','Amritsar','Banaras','Mumbai','Udaipur','1','2016-07-01 13:20:47.000000','2016-07-01 13:20:47.000000'),
(8,1,'','The Land of Lilies ?','Finland','Banaras','Mumbai','Canada','4','2016-07-01 13:21:32.000000','2016-07-01 13:21:32.000000'),
(9,1,'','The symbol dove signifies ?','Strength','Dignity','Peace','Distress','3','2016-07-01 13:22:29.000000','2016-07-01 13:22:29.000000'),
(10,1,'','how year u old?','20','25','26','22','1','2016-07-01 14:11:05.000000','2016-07-01 14:11:05.000000'),
(11,2,'','PC Stands for','pocket computer','personal computer','phisycal computer','personal','2','2016-07-01 16:19:03.000000','2016-07-01 16:19:03.000000'),
(12,2,'','RAM Stands for','Random Access Memory','Random accelerated Memory','Random Access Machenism','Random Accurace Mantan','1','2016-07-01 16:20:06.000000','2016-07-01 16:20:06.000000'),
(13,2,'','mouse is the type of device','input','pointing','scanning','none of the above','2','2016-07-01 16:21:28.000000','2016-07-01 16:21:28.000000'),
(14,2,'','keybord is the type of device','input','pointing','scanning','none of the above','1','2016-07-01 16:22:02.000000','2016-07-01 16:22:02.000000'),
(15,2,'','scanner is the type of device','input','pointing','scanning','none of the above','3','2016-07-01 16:22:38.000000','2016-07-01 16:22:38.000000'),
(16,2,'','the touchable part of computer is called as','hardware','software','none','none of the above','1','2016-07-01 16:23:30.000000','2016-07-01 16:23:30.000000'),
(17,2,'','to deleter the character towards left side is','backspace','del','inst','none of the above','1','2016-07-01 16:24:23.000000','2016-07-01 16:24:23.000000'),
(18,2,'','to move the cursor beginning of the which key is used','end','home','pgup','pgdn','1','2016-07-01 16:25:37.000000','2016-07-01 16:25:37.000000'),
(19,2,'','to move the cursor beginning of the which key is used','end','home','pgup','pgdn','2','2016-07-01 16:26:28.000000','2016-07-01 16:26:28.000000'),
(20,2,'','f caps lock key is on then','small letters are printed','none','capital letters print','pgdn','3','2016-07-01 16:27:21.000000','2016-07-01 16:27:21.000000'),
(21,3,'','business is?','money','strategy','mind','game','1','2016-07-02 22:52:43.000000','2016-07-02 22:52:43.000000'),
(22,3,'','play business like?','money','strategy','mind','game','4','2016-07-02 22:54:42.000000','2016-07-02 22:54:42.000000'),
(23,3,'Screenshot from 2016-06-15 16:11:44.png','what u see in image?','logic ','none','game ','picture','none','2016-07-04 00:00:32.000000','2016-07-04 00:00:32.000000');

UNLOCK TABLES;

/*Table structure for table `reg` */

DROP TABLE IF EXISTS `reg`;

CREATE TABLE `reg` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(200) NOT NULL,
  `student_email` varchar(200) NOT NULL,
  `student_userid` varchar(200) NOT NULL,
  `student_passid` varchar(200) NOT NULL,
  `student_country` varchar(200) NOT NULL,
  `created_on` datetime(5) NOT NULL,
  `updated_on` datetime(5) NOT NULL,
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reg` */

LOCK TABLES `reg` WRITE;

insert  into `reg`(`student_id`,`student_name`,`student_email`,`student_userid`,`student_passid`,`student_country`,`created_on`,`updated_on`) values 
(1,'Nitesh','jhanitesh10@gmail.com','nitesh','12345','australia','2016-07-01 12:23:00.00000','2016-07-01 12:23:00.00000'),
(2,'nitesh','jhanites@gmail.com','gaurav','12345','canada','2016-07-01 12:24:54.00000','2016-07-01 12:24:54.00000'),
(3,'nitesh','jhanites@gmail.com','vikas','12345','canada','2016-07-01 12:25:06.00000','2016-07-01 12:25:06.00000'),
(4,'saurabh','sdfssd@gmail.com','saurabh','12345','australia','2016-07-01 21:09:41.00000','2016-07-01 21:09:41.00000');

UNLOCK TABLES;

/*Table structure for table `test_status` */

DROP TABLE IF EXISTS `test_status`;

CREATE TABLE `test_status` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `total_question` int(255) NOT NULL,
  `correct_ans` int(255) NOT NULL,
  `wrong_ans` int(255) NOT NULL,
  `percentage` float NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_on` datetime(5) NOT NULL,
  `updated_on` datetime(5) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `test_status` */

LOCK TABLES `test_status` WRITE;

insert  into `test_status`(`id`,`user_id`,`total_question`,`correct_ans`,`wrong_ans`,`percentage`,`status`,`created_on`,`updated_on`) values 
(1,'1',40,12,28,30,'FAIL','2016-07-03 01:30:20.00000','2016-07-03 01:30:20.00000'),
(2,'2',10,1,9,10,'FAIL','2016-07-03 11:23:57.00000','2016-07-03 11:23:57.00000'),
(3,'3',30,8,22,26.6667,'FAIL','2016-07-03 11:29:03.00000','2016-07-03 11:29:03.00000'),
(4,'1',40,12,28,30,'FAIL','2016-07-03 19:40:34.00000','2016-07-03 19:40:34.00000'),
(5,'1',40,12,28,30,'FAIL','2016-07-03 19:40:41.00000','2016-07-03 19:40:41.00000'),
(6,'4',9,5,4,55.5556,'FAIL','2016-07-03 23:56:54.00000','2016-07-03 23:56:54.00000'),
(7,'4',19,13,6,68.4211,'PASS','2016-07-03 23:58:35.00000','2016-07-03 23:58:35.00000'),
(8,'1',50,13,37,26,'FAIL','2016-07-04 00:01:43.00000','2016-07-04 00:01:43.00000'),
(9,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:44:51.00000','2016-07-04 12:44:51.00000'),
(10,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:45:00.00000','2016-07-04 12:45:00.00000'),
(11,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:46:00.00000','2016-07-04 12:46:00.00000'),
(12,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:46:04.00000','2016-07-04 12:46:04.00000'),
(13,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:46:08.00000','2016-07-04 12:46:08.00000'),
(14,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:46:44.00000','2016-07-04 12:46:44.00000'),
(15,'1',58,15,43,25.8621,'FAIL','2016-07-04 12:46:49.00000','2016-07-04 12:46:49.00000'),
(16,'1',68,16,52,23.5294,'FAIL','2016-07-04 12:49:01.00000','2016-07-04 12:49:01.00000'),
(17,'1',78,19,59,24.359,'FAIL','2016-07-04 12:50:25.00000','2016-07-04 12:50:25.00000'),
(18,'1',88,20,68,22.7273,'FAIL','2016-07-04 14:41:32.00000','2016-07-04 14:41:32.00000'),
(19,'1',98,24,74,24.4898,'FAIL','2016-07-05 00:38:34.00000','2016-07-05 00:38:34.00000'),
(20,'1',10,8,2,80,'PASS','2016-07-05 00:42:31.00000','2016-07-05 00:42:31.00000');

UNLOCK TABLES;

/*Table structure for table `user_response` */

DROP TABLE IF EXISTS `user_response`;

CREATE TABLE `user_response` (
  `user_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `option_id` int(255) NOT NULL,
  `created_on` datetime(6) NOT NULL,
  `updated_on` datetime(6) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_response` */

LOCK TABLES `user_response` WRITE;

insert  into `user_response`(`user_id`,`question_id`,`option_id`,`created_on`,`updated_on`) values 
(1,16,1,'2016-07-05 00:41:57.000000','2016-07-05 00:41:57.000000'),
(1,19,2,'2016-07-05 00:42:00.000000','2016-07-05 00:42:00.000000'),
(1,20,3,'2016-07-05 00:42:04.000000','2016-07-05 00:42:04.000000'),
(1,20,3,'2016-07-05 00:42:06.000000','2016-07-05 00:42:06.000000'),
(1,16,1,'2016-07-05 00:42:08.000000','2016-07-05 00:42:08.000000'),
(1,14,1,'2016-07-05 00:42:15.000000','2016-07-05 00:42:15.000000'),
(1,19,3,'2016-07-05 00:42:17.000000','2016-07-05 00:42:17.000000'),
(1,11,2,'2016-07-05 00:42:19.000000','2016-07-05 00:42:19.000000'),
(1,19,2,'2016-07-05 00:42:21.000000','2016-07-05 00:42:21.000000'),
(1,17,2,'2016-07-05 00:42:27.000000','2016-07-05 00:42:27.000000');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
