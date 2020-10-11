-- MySQL Administrator dump
--
-- ------------------------------------------------------


--
-- Create schema okulardb
--

CREATE DATABASE okulardb;
USE okulardb;

--
-- Table structure for table `okulardb`.`admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(500) NOT NULL DEFAULT '',
  `admin_password` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `okulardb`.`admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`,`admin_username`,`admin_password`) VALUES 
 (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Table structure for table `okulardb`.`items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `okulardb`.`items`
--

/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`item_id`,`item_name`,`item_price`,`item_image`,`item_date`) VALUES 
 (5,'okulary1 ',100,'147124.jpg','2020-01-01'),
 (6,'okulary2',50,'181757.jpg','2020-01-01'),
 (7,'okulary3',60,'783298.jpg','2020-01-01'),
 (8,'okulary4',55,'14231.jpg','2020-01-01'),
 (9,'okulary5',90,'289865.jpg','2020-01-01'),
 (11,'okulary6',40,'722934.jpg','2020-01-01'),
 (12,'okulary7',1000,'838084.jpg','2020-01-01'),
 (13,'okulary8',500,'320199.jpg','2020-01-01'),
 (14,'okulary9',300,'361204.jpg','2020-01-01'),
 (15,'okulary10',500,'444526.jpg','2020-01-01'),
 (16,'okulary11',600,'956983.jpg','2020-01-02'),
 (17,'okulary12',300,'855187.jpg','2020-01-02'),
 (18,'okulary13',400,'45968.jpg','2020-01-02'),
 (19,'okulary14',50.5,'158191.jpg','2020-01-02');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;


--
-- Table structure for table `okulardb`.`orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE `orderdetails` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT '0',
  `order_quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `order_total` double NOT NULL DEFAULT '0',
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`order_id`),
  KEY `FK_orderdetails_1` (`user_id`),
  CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `okulardb`.`orderdetails`
--

/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` (`order_id`,`user_id`,`order_name`,`order_price`,`order_quantity`,`order_total`,`order_status`,`order_date`) VALUES 
 (20,4,'okulary2 ',50,2,100,'Ordered_Finished','2020-01-03'),
 (23,4,'okulary1 ',100,3,300,'Ordered_Finished','2020-01-03'),
 (30,4,'okulary10 ',500,1,500,'Ordered','2020-01-03'),
 (32,4,'okulary5',90,2,180,'Ordered','2020-01-03');
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;


--
-- Table structure for table `okulardb`.`users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(1000) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_firstname` varchar(1000) NOT NULL,
  `user_lastname` varchar(1000) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `okulardb`.`users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`,`user_email`,`user_password`,`user_firstname`,`user_lastname`,`user_address`) VALUES 
 (1,'testowy@wp.pl','1234','Piotr','Janas','Warszawa ochota 12'),
 (3,'testowy2@onet.pl','1234','Jan','Testowy','Warszawa Plac politechniki 1'),
 (4,'adam@gmail.com','1234','Adam','Polak','Szczecin morska 2');

