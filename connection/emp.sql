/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.8-log : Database - employee_mgnt_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`employee_mgnt_system` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `employee_mgnt_system`;

/*Table structure for table `attendance` */

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `aid` int(100) NOT NULL AUTO_INCREMENT,
  `eid` varchar(100) DEFAULT NULL,
  `attendance` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `attendance` */

insert  into `attendance`(`aid`,`eid`,`attendance`,`date`) values (1,'3','1','2024-03-22'),(3,'3','0','2024-02-12'),(5,'4','0','2024-02-21'),(6,'3','1','2024-03-20'),(7,'3','0','2024-03-19'),(8,'4','0','2024-03-18'),(9,'4','0','2024-02-13'),(10,'4','1','2024-02-14'),(11,'3','1','2024-02-15'),(12,'4','1','2024-03-17'),(13,'4','1','2024-02-12'),(14,'5','1','2024-03-23'),(15,'4','1','2024-03-23'),(16,'3','1','2024-03-23');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `eid` int(100) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `ephone` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `eaddress` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`eid`,`ename`,`e_email`,`ephone`,`image`,`eaddress`,`dob`,`designation`,`rating`) values (3,'Arjun','arjun@gmail.com','9656546546','boy1.png','Kannur, Kerala','October 20, 2003','Python Developer ','0'),(4,'Midhun','midhun@gmail.com','9876487684','man.png','Malappuram, Kerala','July 19, 2001','Android Developer','4.5'),(5,'Vidhya','vidhyarajan54@gmail.com','9061755881','girl.png','Pattanath house Iringappuram P O,Guruvayur 680103','September 25, 2000','Designer',NULL);

/*Table structure for table `leave` */

DROP TABLE IF EXISTS `leave`;

CREATE TABLE `leave` (
  `lid` int(100) NOT NULL AUTO_INCREMENT,
  `eid` varchar(100) DEFAULT NULL,
  `leave_type` varchar(100) DEFAULT NULL,
  `edate` varchar(100) DEFAULT NULL,
  `sdate` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `leave` */

insert  into `leave`(`lid`,`eid`,`leave_type`,`edate`,`sdate`,`reason`,`status`) values (1,'4','1','March 23, 2024','March 22, 2024','sick leave ','Approved'),(3,'4','1','March 22, 2024','March 22, 2024','okry','Requested');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `lid` int(100) NOT NULL AUTO_INCREMENT,
  `rid` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`lid`,`rid`,`email`,`password`,`type`,`status`) values (0,'0','admin@gmail.com','$2a$10$OTMxOTg0MTQzNjVmYmQ1OOegyIsVZOwRxz0t3vbE9RgOdjN6tDj6.','Admin',NULL),(2,'3','arjun@gmail.com','$2a$10$MTI4NzQxOTI4MDY1ZmJkN.K2KqTokybcNJEBNDk78Cof6zG0luqHq','Employee','Approved'),(4,'4','midhun@gmail.com','$2a$10$MTA5NzMzNzgyNjY1ZmJmZe6kCVmQnkRxXHVW2oM4h3gKhULIsyk86','Employee','Approved'),(5,'5','vidhyarajan54@gmail.com','$2a$10$MTMzNTc1OTE3MTY1ZmU5NORWOy9ECQsSCfNaaPaPFxIa9v1mJX7Xa','Employee','Approved');

/*Table structure for table `rating` */

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
  `rid` int(100) NOT NULL AUTO_INCREMENT,
  `eid` varchar(100) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `rating` */

insert  into `rating`(`rid`,`eid`,`rating`) values (6,'4','5'),(7,'4','4'),(8,'4','3');

/*Table structure for table `salary` */

DROP TABLE IF EXISTS `salary`;

CREATE TABLE `salary` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `eid` varchar(100) DEFAULT NULL,
  `emp_salary` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `leave_deduction` varchar(100) DEFAULT NULL,
  `tax` varchar(100) DEFAULT NULL,
  `per_day_l_cost` varchar(100) DEFAULT NULL,
  `total_balance` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `salary` */

insert  into `salary`(`sid`,`eid`,`emp_salary`,`date`,`leave_deduction`,`tax`,`per_day_l_cost`,`total_balance`) values (5,'3','60000','2024-03-23','0','200','500','59800'),(6,'4','30000','2024-03-26','1500.00','200','500','28300');

/*Table structure for table `task` */

DROP TABLE IF EXISTS `task`;

CREATE TABLE `task` (
  `tid` int(100) NOT NULL AUTO_INCREMENT,
  `eid` varchar(100) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `sdate` varchar(100) DEFAULT NULL,
  `edate` varchar(100) DEFAULT NULL,
  `complexity` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status_date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `task` */

insert  into `task`(`tid`,`eid`,`pname`,`category`,`sdate`,`edate`,`complexity`,`desc`,`file`,`status`,`status_date`) values (2,'4','Employee Management System ','Website Design','2024-03-21','2024-03-28','Medium','Develop an website ','download (1).pdf','In Progress','2024-03-22'),(3,'4','Gemini Chatbot','Backend Development','2024-03-22','2024-03-26','Medium','Develop an Backend code for an Chatbot using Gemini','download (1).pdf','Assigned',NULL),(5,'5','Poster Creation','UI/UX Design','2024-03-23','2024-03-26','Medium','Create an python developer hiring poster ','pexels-chris-f-12969796.jpg','Assigned',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
