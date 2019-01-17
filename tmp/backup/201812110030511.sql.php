<?php die();?>
SET NAMES utf8;
DROP TABLE IF EXISTS `zt_action`;
CREATE TABLE `zt_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` varchar(255) NOT NULL,
  `project` mediumint(9) NOT NULL,
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` text NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `actor` (`actor`),
  KEY `project` (`project`),
  KEY `objectID` (`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('1','user','1',',0,','0','admin','login','2018-11-27 14:21:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('2','user','1',',0,','0','admin','login','2018-11-27 14:42:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('3','user','1',',0,','0','admin','login','2018-11-27 15:01:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('4','user','1',',0,','0','admin','login','2018-11-28 13:41:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('5','project','1',',,','1','admin','opened','2018-11-28 13:48:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('6','task','1',',,','1','admin','opened','2018-11-28 13:49:46','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('7','task','1',',,','1','admin','commented','2018-11-28 13:51:11','三四五六七','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('8','task','1',',,','1','admin','commented','2018-11-28 13:51:27','<p>
	七八九十十一
</p>
<p>
	<br />
</p>','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('9','user','1',',0,','0','admin','login','2018-11-28 18:45:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('10','user','1',',0,','0','admin','login','2018-11-29 09:14:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('11','product','1',',1,','0','admin','opened','2018-11-29 09:15:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('12','story','1',',1,','0','admin','opened','2018-11-29 09:22:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('13','productplan','1',',1,','0','admin','opened','2018-11-29 09:24:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('14','story','1',',1,','0','admin','edited','2018-11-29 09:25:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('15','user','2',',0,','0','abcd','login','2018-11-29 09:30:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('16','user','2',',0,','0','abcd','login','2018-11-29 09:32:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('17','user','1',',0,','0','admin','login','2018-11-29 09:33:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('18','user','2',',0,','0','admin','edited','2018-11-29 09:34:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('19','user','1',',0,','0','admin','logout','2018-11-29 09:35:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('20','user','2',',0,','0','abcd','login','2018-11-29 09:35:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('21','user','3',',0,','0','admin','edited','2018-11-29 09:39:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('22','user','3',',0,','0','abcd2','login','2018-11-29 09:40:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('23','user','2',',0,','0','abcd','logout','2018-11-29 09:42:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('24','user','2',',0,','0','abcd','login','2018-11-29 09:42:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('25','user','2',',0,','0','abcd','logout','2018-11-29 09:46:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('26','user','2',',0,','0','abcd','login','2018-11-29 09:46:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('27','story','2',',1,','0','abcd','opened','2018-11-29 09:47:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('28','story','2',',1,','0','abcd','commented','2018-11-29 09:47:47','砌墙dsa','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('29','story','2',',1,','0','abcd','closed','2018-11-29 09:50:34','<p>
	<img src=\"{1.png}\" />
</p>','Done','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('30','story','1',',1,','0','abcd','edited','2018-11-29 10:02:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('31','user','3',',0,','0','admin','edited','2018-11-29 10:06:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('32','product','2',',2,','0','admin','opened','2018-11-29 10:14:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('33','user','2',',0,','0','admin','edited','2018-11-29 10:15:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('34','user','3',',0,','0','admin','edited','2018-11-29 10:15:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('35','user','4',',0,','0','admin','edited','2018-11-29 10:15:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('36','user','5',',0,','0','admin','edited','2018-11-29 10:15:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('37','user','4',',0,','0','abcd3','login','2018-11-29 10:17:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('38','user','4',',0,','0','abcd3','logout','2018-11-29 10:20:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('39','user','4',',0,','0','abcd3','login','2018-11-29 10:20:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('40','story','3',',2,','0','abcd3','opened','2018-11-29 10:20:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('41','user','5',',0,','0','abcd4','login','2018-11-29 10:23:49','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('42','story','3',',2,','0','abcd4','edited','2018-11-29 10:26:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('43','story','3',',2,','0','admin','edited','2018-11-29 10:32:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('44','product','3',',3,','0','admin','opened','2018-11-29 10:34:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('45','user','4',',0,','0','abcd3','logout','2018-11-29 10:36:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('46','user','6',',0,','0','abcd5','login','2018-11-29 10:36:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('47','project','2',',,','2','admin','opened','2018-11-29 10:37:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('48','user','6',',0,','0','abcd5','logout','2018-11-29 10:39:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('49','user','6',',0,','0','abcd5','login','2018-11-29 10:39:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('50','user','6',',0,','0','admin','edited','2018-11-29 10:41:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('51','story','4',',3,','0','abcd5','opened','2018-11-29 10:44:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('52','productplan','2',',3,','0','admin','opened','2018-11-29 10:46:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('53','story','4',',3,','0','admin','edited','2018-11-29 10:46:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('54','project','2',',3,','2','admin','edited','2018-11-29 10:48:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('55','story','4',',3,','0','abcd5','edited','2018-11-29 10:51:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('56','productplan','3',',3,','0','admin','opened','2018-11-29 10:54:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('57','task','2',',3,','2','admin','opened','2018-11-29 10:58:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('58','task','3',',3,','2','admin','opened','2018-11-29 10:58:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('59','task','4',',3,','2','admin','opened','2018-11-29 10:58:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('60','user','6',',0,','0','abcd5','logout','2018-11-29 10:59:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('61','user','6',',0,','0','abcd5','login','2018-11-29 11:00:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('62','user','6',',0,','0','abcd5','logout','2018-11-29 11:04:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('63','user','6',',0,','0','abcd5','login','2018-11-29 11:04:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('64','user','1',',0,','0','admin','login','2018-11-29 11:20:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('65','user','2',',0,','0','admin','deleted','2018-11-29 11:26:06','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('66','user','3',',0,','0','admin','deleted','2018-11-29 11:26:17','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('67','user','4',',0,','0','admin','deleted','2018-11-29 11:26:21','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('68','user','5',',0,','0','admin','deleted','2018-11-29 11:26:25','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('69','user','6',',0,','0','admin','deleted','2018-11-29 11:26:29','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('70','user','7',',0,','0','admin','deleted','2018-11-29 11:26:36','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('71','user','8',',0,','0','admin','edited','2018-11-29 11:35:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('72','user','9',',0,','0','admin','edited','2018-11-29 11:35:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('73','user','10',',0,','0','admin','edited','2018-11-29 11:36:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('74','user','11',',0,','0','admin','edited','2018-11-29 11:36:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('75','user','12',',0,','0','admin','edited','2018-11-29 11:37:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('76','user','13',',0,','0','admin','edited','2018-11-29 11:37:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('77','user','14',',0,','0','admin','edited','2018-11-29 11:38:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('78','user','15',',0,','0','admin','edited','2018-11-29 11:38:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('79','user','16',',0,','0','admin','edited','2018-11-29 11:38:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('80','project','2',',3,','2','admin','edited','2018-11-29 11:41:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('81','project','1',',,','1','admin','edited','2018-11-29 11:42:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('82','user','17',',0,','0','admin','edited','2018-11-29 11:53:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('83','user','18',',0,','0','admin','edited','2018-11-29 11:53:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('84','user','19',',0,','0','admin','edited','2018-11-29 11:53:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('85','user','20',',0,','0','admin','edited','2018-11-29 11:54:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('86','project','3',',,','3','admin','opened','2018-11-29 14:08:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('87','user','1',',0,','0','admin','edited','2018-11-29 14:14:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('88','user','1',',0,','0','admin','logout','2018-11-29 14:14:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('89','user','1',',0,','0','admin','login','2018-11-29 14:14:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('90','project','2',',3,','2','admin','deleted','2018-11-29 14:15:28','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('91','project','1',',,','1','admin','deleted','2018-11-29 14:15:46','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('92','project','3',',,','3','admin','deleted','2018-11-29 14:17:29','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('93','project','4',',,','4','admin','opened','2018-11-29 14:19:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('94','project','4',',,','4','admin','edited','2018-11-29 14:20:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('95','project','5',',,','5','admin','opened','2018-11-29 14:22:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('96','project','6',',,','6','admin','opened','2018-11-29 14:26:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('97','project','4',',,','4','admin','edited','2018-11-29 14:26:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('98','project','7',',,','7','admin','opened','2018-11-29 14:27:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('99','project','8',',,','8','admin','opened','2018-11-29 14:29:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('100','project','9',',,','9','admin','opened','2018-11-29 14:30:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('101','project','10',',,','10','admin','opened','2018-11-29 14:35:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('102','project','11',',,','11','admin','opened','2018-11-29 14:37:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('103','project','12',',,','12','admin','opened','2018-11-29 14:38:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('104','project','13',',,','13','admin','opened','2018-11-29 14:39:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('105','project','14',',,','14','admin','opened','2018-11-29 14:40:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('106','project','15',',,','15','admin','opened','2018-11-29 14:40:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('107','project','5',',,','5','admin','edited','2018-11-29 14:42:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('108','project','6',',,','6','admin','edited','2018-11-29 14:43:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('109','project','7',',,','7','admin','edited','2018-11-29 14:44:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('110','project','8',',,','8','admin','edited','2018-11-29 14:45:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('111','project','9',',,','9','admin','edited','2018-11-29 14:46:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('112','project','10',',,','10','admin','edited','2018-11-29 14:46:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('113','project','11',',,','11','admin','edited','2018-11-29 14:47:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('114','project','13',',,','13','admin','edited','2018-11-29 14:52:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('115','project','14',',,','14','admin','edited','2018-11-29 14:52:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('116','project','15',',,','15','admin','edited','2018-11-29 14:53:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('117','project','6',',,','6','admin','edited','2018-11-29 14:58:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('118','project','12',',,','12','admin','edited','2018-11-29 15:00:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('119','story','4',',3,','0','admin','deleted','2018-11-29 15:01:46','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('120','productplan','3',',3,','0','admin','deleted','2018-11-29 15:02:08','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('121','productplan','2',',3,','0','admin','deleted','2018-11-29 15:02:11','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('122','user','90',',0,','0','chenyazhou','login','2018-11-29 16:33:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('123','user','90',',0,','0','chenyazhou','logout','2018-11-29 16:35:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('124','user','1',',0,','0','admin','login','2018-11-29 16:35:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('125','user','1',',0,','0','admin','logout','2018-11-29 16:35:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('126','user','1',',0,','0','admin','login','2018-11-29 16:35:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('127','user','1',',0,','0','admin','logout','2018-11-29 16:58:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('128','user','90',',0,','0','chenyazhou','login','2018-11-29 16:58:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('129','user','90',',0,','0','chenyazhou','logout','2018-11-29 17:00:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('130','user','90',',0,','0','chenyazhou','login','2018-11-29 17:00:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('131','user','90',',0,','0','chenyazhou','logout','2018-11-29 17:00:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('132','user','90',',0,','0','chenyazhou','login','2018-11-29 17:00:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('133','task','5',',,','12','chenyazhou','opened','2018-11-29 17:04:06','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('134','user','90',',0,','0','chenyazhou','logout','2018-11-29 17:04:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('135','user','8',',0,','0','huangjun','login','2018-11-29 17:04:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('136','user','8',',0,','0','huangjun','logout','2018-11-29 17:05:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('137','user','90',',0,','0','chenyazhou','login','2018-11-29 17:05:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('138','task','5',',,','12','chenyazhou','deleted','2018-11-29 17:06:01','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('139','user','90',',0,','0','chenyazhou','logout','2018-11-29 17:08:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('140','user','22',',0,','0','guoduanqiang','login','2018-11-29 17:08:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('141','user','22',',0,','0','guoduanqiang','logout','2018-11-29 17:09:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('142','user','22',',0,','0','guoduanqiang','login','2018-11-29 17:09:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('143','user','22',',0,','0','guoduanqiang','logout','2018-11-29 17:09:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('144','user','133',',0,','0','shiyingyong','login','2018-11-29 17:09:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('145','user','133',',0,','0','shiyingyong','logout','2018-11-29 17:09:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('146','user','8',',0,','0','huangjun','login','2018-11-29 17:09:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('147','user','8',',0,','0','huangjun','logout','2018-11-29 17:10:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('148','user','51',',0,','0','liandong','login','2018-11-29 17:10:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('149','user','51',',0,','0','liandong','logout','2018-11-29 17:11:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('150','user','8',',0,','0','huangjun','login','2018-11-29 17:11:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('151','user','8',',0,','0','huangjun','logout','2018-11-29 17:12:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('152','user','51',',0,','0','liandong','login','2018-11-29 17:12:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('153','user','1',',0,','0','admin','login','2018-11-30 09:41:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('154','user','1',',0,','0','admin','login','2018-11-30 19:16:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('155','user','1',',0,','0','admin','login','2018-11-30 19:19:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('156','user','90',',0,','0','chenyazhou','login','2018-11-30 19:22:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('157','user','90',',0,','0','chenyazhou','logout','2018-11-30 19:42:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('158','user','90',',0,','0','chenyazhou','login','2018-11-30 19:43:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('159','user','134',',0,','0','admin','created','2018-11-30 19:48:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('160','user','90',',0,','0','chenyazhou','logout','2018-11-30 19:51:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('161','user','134',',0,','0','test','login','2018-11-30 19:51:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('162','user','134',',0,','0','test','logout','2018-11-30 19:55:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('163','user','134',',0,','0','test','login','2018-11-30 19:55:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('164','user','134',',0,','0','test','logout','2018-11-30 19:56:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('165','user','134',',0,','0','test','login','2018-11-30 19:56:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('166','user','134',',0,','0','test','logout','2018-11-30 19:57:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('167','user','134',',0,','0','test','login','2018-11-30 19:57:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('168','user','134',',0,','0','test','logout','2018-11-30 20:00:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('169','user','134',',0,','0','test','login','2018-11-30 20:00:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('170','user','90',',0,','0','chenyazhou','login','2018-11-30 20:01:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('171','user','90',',0,','0','chenyazhou','logout','2018-11-30 20:02:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('172','user','1',',0,','0','admin','login','2018-11-30 20:02:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('173','user','134',',0,','0','test','logout','2018-11-30 20:02:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('174','user','134',',0,','0','test','login','2018-11-30 20:02:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('175','user','135',',0,','0','admin','created','2018-11-30 20:04:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('176','user','134',',0,','0','test','logout','2018-11-30 20:04:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('177','user','134',',0,','0','test','login','2018-11-30 20:04:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('178','task','6',',,','6','test','opened','2018-11-30 20:06:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('179','user','1',',0,','0','admin','logout','2018-11-30 20:07:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('180','user','135',',0,','0','test2','login','2018-11-30 20:07:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('181','user','135',',0,','0','test2','logout','2018-11-30 20:07:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('182','user','1',',0,','0','admin','login','2018-11-30 20:07:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('183','user','1',',0,','0','admin','logout','2018-11-30 20:08:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('184','user','135',',0,','0','test2','login','2018-11-30 20:08:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('185','user','1',',0,','0','admin','login','2018-12-03 09:10:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('186','user','134',',0,','0','test','login','2018-12-03 09:11:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('187','user','135',',0,','0','test2','login','2018-12-03 09:13:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('188','user','134',',0,','0','test','logout','2018-12-03 09:17:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('189','user','134',',0,','0','test','login','2018-12-03 09:17:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('190','user','136',',0,','0','admin','created','2018-12-03 13:50:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('191','user','136',',0,','0','test3','login','2018-12-03 13:52:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('192','task','6',',,','6','test','assigned','2018-12-03 13:54:44','','chenhuan','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('193','task','7',',,','6','test','opened','2018-12-03 14:01:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('194','task','6',',,','6','test','assigned','2018-12-03 14:02:01','','test2','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('195','user','134',',0,','0','test','logout','2018-12-03 14:32:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('196','user','134',',0,','0','test','login','2018-12-03 14:34:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('197','task','7',',,','6','test','finished','2018-12-03 14:40:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('198','task','7',',,','6','test','finished','2018-12-03 14:40:19','2让2','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('199','task','6',',,','6','test','started','2018-12-03 14:40:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('200','user','134',',0,','0','test','logout','2018-12-03 15:04:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('201','user','135',',0,','0','test2','login','2018-12-03 17:42:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('202','user','135',',0,','0','test2','logout','2018-12-03 17:42:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('203','user','1',',0,','0','admin','login','2018-12-03 17:42:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('204','user','1',',0,','0','admin','login','2018-12-04 09:32:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('205','user','134',',0,','0','admin','edited','2018-12-04 09:49:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('206','user','135',',0,','0','test2','login','2018-12-04 09:50:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('207','task','6',',,','6','test2','assigned','2018-12-04 09:50:26','','test','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('208','user','1',',0,','0','admin','login','2018-12-06 09:27:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('209','user','1',',0,','0','admin','logout','2018-12-06 10:59:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('210','user','1',',0,','0','admin','login','2018-12-06 11:03:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('211','user','1',',0,','0','admin','logout','2018-12-06 11:03:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('212','user','1',',0,','0','admin','login','2018-12-06 11:03:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('213','user','1',',0,','0','admin','logout','2018-12-06 11:03:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('214','user','1',',0,','0','admin','login','2018-12-06 11:03:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('215','user','1',',0,','0','admin','logout','2018-12-06 11:22:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('216','user','1',',0,','0','admin','login','2018-12-06 15:43:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('217','user','1',',0,','0','admin','logout','2018-12-06 15:43:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('218','user','1',',0,','0','admin','login','2018-12-06 15:43:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('219','user','1',',0,','0','admin','logout','2018-12-06 15:43:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('220','user','1',',0,','0','admin','login','2018-12-06 15:43:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('221','user','1',',0,','0','admin','login','2018-12-07 09:14:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('222','user','134',',0,','0','test','login','2018-12-07 09:49:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('223','task','8',',,','6','test','opened','2018-12-07 09:58:03','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('224','task','8',',,','6','test','finished','2018-12-07 09:58:26','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('225','user','135',',0,','0','test2','login','2018-12-07 09:59:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('226','task','7',',,','6','test','closed','2018-12-07 10:28:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('227','task','8',',,','6','test','closed','2018-12-07 10:29:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('228','task','6',',,','6','admin','edited','2018-12-07 10:37:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('229','task','9',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('230','task','10',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('231','task','11',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('232','task','12',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('233','task','13',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('234','task','14',',,','6','test2','opened','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('235','task','6',',,','6','test2','canceled','2018-12-07 10:45:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('236','user','135',',0,','0','test2','logout','2018-12-07 10:47:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('237','user','135',',0,','0','test2','login','2018-12-07 10:47:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('238','task','6',',,','6','test2','started','2018-12-07 10:48:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('239','task','14',',,','6','test2','started','2018-12-07 10:48:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('240','task','13',',,','6','test2','started','2018-12-07 10:48:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('241','user','136',',0,','0','admin','edited','2018-12-07 11:02:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('242','user','134',',0,','0','test','logout','2018-12-07 11:03:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('243','user','136',',0,','0','test3','login','2018-12-07 11:03:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('244','task','10',',,','6','test2','assigned','2018-12-07 11:09:03','','test3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('245','user','1',',0,','0','admin','login','2018-12-07 11:10:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('246','user','1',',0,','0','admin','logout','2018-12-07 11:11:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('247','user','136',',0,','0','test3','login','2018-12-07 11:11:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('248','user','136',',0,','0','test3','logout','2018-12-07 11:11:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('249','user','1',',0,','0','admin','login','2018-12-07 11:11:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('250','user','136',',0,','0','admin','edited','2018-12-07 11:35:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('251','user','136',',0,','0','test3','logout','2018-12-07 11:39:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('252','user','136',',0,','0','test3','login','2018-12-07 11:39:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('253','user','136',',0,','0','test3','logout','2018-12-07 11:41:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('254','user','136',',0,','0','test3','login','2018-12-07 11:41:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('255','user','135',',0,','0','test2','logout','2018-12-07 11:42:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('256','user','135',',0,','0','test2','login','2018-12-07 11:42:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('257','user','135',',0,','0','test2','logout','2018-12-07 11:43:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('258','user','135',',0,','0','test2','login','2018-12-07 11:44:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('259','user','1',',0,','0','admin','logout','2018-12-07 11:45:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('260','user','135',',0,','0','test2','logout','2018-12-07 11:54:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('261','user','135',',0,','0','test2','login','2018-12-07 11:54:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('262','user','1',',0,','0','admin','login','2018-12-07 14:42:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('263','project','16',',,','16','admin','opened','2018-12-07 15:14:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('264','user','1',',0,','0','admin','login','2018-12-10 10:55:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('265','user','135',',0,','0','test2','login','2018-12-10 13:04:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('266','user','135',',0,','0','test2','logout','2018-12-10 13:08:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('267','user','135',',0,','0','test2','login','2018-12-10 13:09:10','','','0');
DROP TABLE IF EXISTS `zt_block`;
CREATE TABLE `zt_block` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `params` text NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `grid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountModuleOrder` (`account`,`module`,`order`),
  KEY `account` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=190 DEFAULT CHARSET=utf8;
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('1','admin','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('2','admin','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('3','admin','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('4','admin','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('5','admin','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('6','admin','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('7','admin','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('8','admin','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('9','admin','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('10','admin','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('11','admin','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('12','admin','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('13','admin','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('14','admin','qa','测试统计','qa','statistic','{\"type\":\"noclosed\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('15','admin','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('16','admin','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('17','admin','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','4','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('18','admin','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('19','admin','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('20','admin','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('21','admin','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('22','abcd','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('23','abcd','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('24','abcd','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('25','abcd','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('26','abcd','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('27','abcd','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('28','abcd','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('29','abcd','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('30','abcd','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('31','abcd','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('32','abcd','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('33','abcd','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('34','abcd','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('35','abcd','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('36','abcd','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('37','abcd','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('38','abcd','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('39','abcd2','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('40','abcd2','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('41','abcd2','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('42','abcd2','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('43','abcd2','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('44','abcd2','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('45','abcd2','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('46','abcd2','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('47','abcd2','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('48','abcd2','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('49','abcd2','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('50','abcd2','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('51','abcd2','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('52','abcd3','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('53','abcd3','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('54','abcd3','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('55','abcd3','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('56','abcd3','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('57','abcd3','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('58','abcd3','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('59','abcd3','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('60','abcd3','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('61','abcd3','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('62','abcd3','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('63','abcd3','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('64','abcd3','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('65','abcd4','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('66','abcd4','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('67','abcd4','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('68','abcd4','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('69','abcd4','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('70','abcd4','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('71','abcd4','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('72','abcd4','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('73','abcd4','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('74','abcd4','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('75','abcd4','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('76','abcd4','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('77','abcd4','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('78','abcd5','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('79','abcd5','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('80','abcd5','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('81','abcd5','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('82','abcd5','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('83','abcd5','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('84','abcd5','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('85','abcd5','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('86','abcd5','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('87','abcd5','product','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','0','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('88','abcd5','product','产品总览','product','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('89','abcd5','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('90','abcd5','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('91','abcd5','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('92','abcd5','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('93','abcd5','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('94','abcd5','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('95','chenyazhou','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('96','chenyazhou','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('98','chenyazhou','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('99','chenyazhou','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('100','chenyazhou','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('101','chenyazhou','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('102','chenyazhou','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('103','chenyazhou','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('154','chenyazhou','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('152','chenyazhou','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('153','chenyazhou','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('151','chenyazhou','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('108','huangjun','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('109','huangjun','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('110','huangjun','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('111','huangjun','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('112','huangjun','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('113','huangjun','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('114','huangjun','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('115','huangjun','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('116','huangjun','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('117','huangjun','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('118','huangjun','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('119','huangjun','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('120','huangjun','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('121','guoduanqiang','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('122','guoduanqiang','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('123','guoduanqiang','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('124','guoduanqiang','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('125','guoduanqiang','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('126','guoduanqiang','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('127','guoduanqiang','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('128','guoduanqiang','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('129','guoduanqiang','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('130','guoduanqiang','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('131','guoduanqiang','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('132','guoduanqiang','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('133','guoduanqiang','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('134','shiyingyong','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('135','shiyingyong','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('136','shiyingyong','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('137','shiyingyong','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('138','liandong','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('139','liandong','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('140','liandong','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('141','liandong','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('142','liandong','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('143','liandong','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('144','liandong','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('145','liandong','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('146','liandong','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('147','liandong','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('148','liandong','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('149','liandong','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('150','liandong','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('155','test','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('156','test','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('157','test','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('158','test','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('159','test','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('160','test','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('161','test','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('162','test','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('163','test','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('164','test','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('165','test','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('166','test','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('167','test','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('168','test2','project','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('169','test2','project','项目总览','project','overview','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('170','test2','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('171','test2','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('172','test3','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('173','test3','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('174','test3','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('175','test3','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('176','test3','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('177','test3','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('178','test3','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('179','test3','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('180','test3','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('181','test2','my','欢迎','','welcome','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('182','test2','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('183','test2','my','流程图','','flowchart','','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('184','test2','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('185','test2','my','项目统计','project','statistic','{\"type\":\"all\",\"num\":\"20\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('186','test2','my','项目总览','project','overview','','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('187','test2','my','产品统计','product','statistic','{\"type\":\"all\",\"num\":\"20\"}','7','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('188','test2','my','产品总览','product','overview','','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('189','test2','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','9','4','0','0');
DROP TABLE IF EXISTS `zt_branch`;
CREATE TABLE `zt_branch` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_bug`;
CREATE TABLE `zt_bug` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toTask` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toStory` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `severity` tinyint(4) NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `os` varchar(30) NOT NULL DEFAULT '',
  `browser` varchar(30) NOT NULL DEFAULT '',
  `hardware` varchar(30) NOT NULL,
  `found` varchar(30) NOT NULL DEFAULT '',
  `steps` text NOT NULL,
  `status` enum('active','resolved','closed') NOT NULL DEFAULT 'active',
  `color` char(7) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `activatedCount` smallint(6) NOT NULL,
  `activatedDate` datetime NOT NULL,
  `mailto` text,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `openedBuild` varchar(255) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `deadline` date NOT NULL,
  `resolvedBy` varchar(30) NOT NULL DEFAULT '',
  `resolution` varchar(30) NOT NULL DEFAULT '',
  `resolvedBuild` varchar(30) NOT NULL DEFAULT '',
  `resolvedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `duplicateBug` mediumint(8) unsigned NOT NULL,
  `linkBug` varchar(255) NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `caseVersion` smallint(6) NOT NULL DEFAULT '1',
  `result` mediumint(8) unsigned NOT NULL,
  `testtask` mediumint(8) unsigned NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `project` (`project`),
  KEY `status` (`status`),
  KEY `plan` (`plan`),
  KEY `story` (`story`),
  KEY `case` (`case`),
  KEY `assignedTo` (`assignedTo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_build`;
CREATE TABLE `zt_build` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(150) NOT NULL,
  `scmPath` char(255) NOT NULL,
  `filePath` char(255) NOT NULL,
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `builder` char(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `project` (`project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_burn`;
CREATE TABLE `zt_burn` (
  `project` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `estimate` float NOT NULL,
  `left` float NOT NULL,
  `consumed` float NOT NULL,
  PRIMARY KEY (`project`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-11-29','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-11-30','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-11-30','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-01','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-01','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-02','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-02','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-03','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-03','0','1','4');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-04','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-04','0','1','4');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-06','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-06','0','1','4');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-07','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-07','0','0','3');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-08','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-08','0','0','3');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-09','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-09','0','0','3');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('2','2018-12-10','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2018-12-10','0','0','3');
DROP TABLE IF EXISTS `zt_case`;
CREATE TABLE `zt_case` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lib` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(30) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `precondition` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `type` char(30) NOT NULL DEFAULT '1',
  `stage` varchar(255) NOT NULL,
  `howRun` varchar(30) NOT NULL,
  `scriptedBy` varchar(30) NOT NULL,
  `scriptedDate` date NOT NULL,
  `scriptStatus` varchar(30) NOT NULL,
  `scriptLocation` varchar(255) NOT NULL,
  `status` char(30) NOT NULL DEFAULT '1',
  `color` char(7) NOT NULL,
  `frequency` enum('1','2','3') NOT NULL DEFAULT '1',
  `order` tinyint(30) unsigned NOT NULL DEFAULT '0',
  `openedBy` char(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` date NOT NULL,
  `lastEditedBy` char(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `linkCase` varchar(255) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL,
  `fromCaseID` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `story` (`story`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_casestep`;
CREATE TABLE `zt_casestep` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(3) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'step',
  `desc` text NOT NULL,
  `expect` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `case` (`case`),
  KEY `version` (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_company`;
CREATE TABLE `zt_company` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(120) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `fax` char(20) DEFAULT NULL,
  `address` char(120) DEFAULT NULL,
  `zipcode` char(10) DEFAULT NULL,
  `website` char(120) DEFAULT NULL,
  `backyard` char(120) DEFAULT NULL,
  `guest` enum('1','0') NOT NULL DEFAULT '0',
  `admins` char(255) DEFAULT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_company`(`id`,`name`,`phone`,`fax`,`address`,`zipcode`,`website`,`backyard`,`guest`,`admins`,`deleted`) VALUES ('1','宇培国际控股','','','','','','','0',',admin,','0');
DROP TABLE IF EXISTS `zt_config`;
CREATE TABLE `zt_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('1','system','common','global','version','10.6');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('2','system','common','global','flow','full');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('3','system','common','safe','mode','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('4','system','common','safe','changeWeak','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('5','system','common','global','cron','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('6','system','xuanxuan','','key','c16edc355e1f6f41c53c215371f6c28b');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('7','system','cron','run','status','running');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('8','admin','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('9','admin','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('10','admin','common','global','novice','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('11','system','common','global','sn','729b6a73905fdcead5ad28faffd1f2e1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('12','admin','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('13','admin','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('14','admin','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('15','admin','qa','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('16','admin','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('17','admin','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('18','abcd','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('19','abcd','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('20','abcd','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('21','abcd','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('22','abcd','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('23','abcd','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('24','abcd2','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('25','abcd2','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('26','abcd2','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('27','abcd2','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('28','abcd3','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('29','abcd3','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('30','abcd3','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('31','abcd3','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('32','abcd4','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('33','abcd4','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('34','abcd4','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('35','abcd4','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('36','abcd5','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('37','abcd5','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('38','abcd5','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('39','abcd5','product','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('40','abcd5','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('41','abcd5','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('42','admin','project','custom','batchEditFields','days,type,status,PM');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('43','chenyazhou','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('44','chenyazhou','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('64','chenyazhou','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('65','chenyazhou','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('49','chenyazhou','common','global','novice','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('50','huangjun','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('51','huangjun','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('52','huangjun','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('53','huangjun','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('54','guoduanqiang','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('55','guoduanqiang','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('56','guoduanqiang','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('57','guoduanqiang','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('58','shiyingyong','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('59','shiyingyong','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('60','liandong','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('61','liandong','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('62','liandong','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('63','liandong','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('66','test','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('67','test','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('68','test','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('69','test','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('70','test2','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('71','test2','project','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('72','test3','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('73','test3','my','block','initVersion','2');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('74','test2','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('75','test2','my','block','initVersion','2');
DROP TABLE IF EXISTS `zt_cron`;
CREATE TABLE `zt_cron` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m` varchar(20) NOT NULL,
  `h` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `mon` varchar(20) NOT NULL,
  `dow` varchar(20) NOT NULL,
  `command` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `buildin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `lastTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lastTime` (`lastTime`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('1','*','*','*','*','*','','监控定时任务','zentao','1','normal','2018-12-11 00:30:51');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('2','30','23','*','*','*','moduleName=project&methodName=computeburn','更新燃尽图','zentao','1','normal','2018-12-10 23:30:52');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('3','0','8','*','*','*','moduleName=report&methodName=remind','每日任务提醒','zentao','1','normal','2018-12-10 08:00:50');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('4','*/5','*','*','*','*','moduleName=svn&methodName=run','同步SVN','zentao','1','stop','0000-00-00 00:00:00');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('5','*/5','*','*','*','*','moduleName=git&methodName=run','同步GIT','zentao','1','stop','0000-00-00 00:00:00');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('6','30','0','*','*','*','moduleName=backup&methodName=backup','备份数据和附件','zentao','1','running','2018-12-11 00:30:51');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('7','*/5','*','*','*','*','moduleName=mail&methodName=asyncSend','异步发信','zentao','1','normal','2018-12-11 00:25:51');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('8','*/5','*','*','*','*','moduleName=webhook&methodName=asyncSend','异步发送Webhook','zentao','1','normal','2018-12-11 00:25:51');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('9','*/5','*','*','*','*','moduleName=admin&methodName=deleteLog','删除过期日志','zentao','1','normal','2018-12-11 00:25:51');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('10','1','1','*','*','*','moduleName=todo&methodName=createCycle','生成周期性待办','zentao','1','normal','2018-12-10 01:01:50');
DROP TABLE IF EXISTS `zt_dept`;
CREATE TABLE `zt_dept` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(60) NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `position` char(30) NOT NULL DEFAULT '',
  `function` char(255) NOT NULL DEFAULT '',
  `manager` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('1','昆山园区','12',',12,1,','2','1','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('2','苏州园区','12',',12,2,','2','2','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('3','北京园区','12',',12,3,','2','3','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('4','成都园区','12',',12,4,','2','4','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('5','芜湖园区','12',',12,5,','2','5','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('6','郑州园区','12',',12,6,','2','6','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('7','武汉园区','12',',12,7,','2','7','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('8','上海园区','12',',12,8,','2','8','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('9','惠州园区','12',',12,9,','2','9','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('10','西安园区','12',',12,10,','2','10','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('11','沈阳园区','12',',12,11,','2','11','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('12','总裁办','0',',12,','1','0','','','');
DROP TABLE IF EXISTS `zt_doc`;
CREATE TABLE `zt_doc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `lib` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `views` smallint(5) unsigned NOT NULL,
  `collector` text NOT NULL,
  `addedBy` varchar(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `acl` varchar(10) NOT NULL DEFAULT 'open',
  `groups` varchar(255) NOT NULL,
  `users` text NOT NULL,
  `version` smallint(5) unsigned NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `project` (`project`),
  KEY `lib` (`lib`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_doccontent`;
CREATE TABLE `zt_doccontent` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `doc` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doc_version` (`doc`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_doclib`;
CREATE TABLE `zt_doclib` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `acl` varchar(10) NOT NULL DEFAULT 'open',
  `groups` varchar(255) NOT NULL,
  `users` text NOT NULL,
  `main` enum('0','1') NOT NULL DEFAULT '0',
  `collector` text NOT NULL,
  `order` tinyint(5) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `project` (`project`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('1','project','0','1','项目主库','open','','','1','','0','1');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('2','product','1','0','产品主库','open','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('3','product','2','0','产品主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('4','product','3','0','产品主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('5','project','0','2','项目主库','private','','','1','','0','1');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('6','project','0','3','项目主库','private','','','1','','0','1');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('7','project','0','4','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('8','project','0','5','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('9','project','0','6','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('10','project','0','7','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('11','project','0','8','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('12','project','0','9','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('13','project','0','10','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('14','project','0','11','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('15','project','0','12','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('16','project','0','13','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('17','project','0','14','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('18','project','0','15','项目主库','private','','','1','','0','0');
INSERT INTO `zt_doclib`(`id`,`type`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`collector`,`order`,`deleted`) VALUES ('19','project','0','16','项目主库','private','','','1','','0','0');
DROP TABLE IF EXISTS `zt_effort`;
CREATE TABLE `zt_effort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` char(30) NOT NULL DEFAULT '',
  `todo` enum('1','0') NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `begin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('1','2','3') NOT NULL DEFAULT '1',
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `status` enum('1','2','3') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_entry`;
CREATE TABLE `zt_entry` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `account` varchar(30) NOT NULL DEFAULT '',
  `code` varchar(20) NOT NULL,
  `key` varchar(32) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_extension`;
CREATE TABLE `zt_extension` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `zentaoCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` mediumtext NOT NULL,
  `files` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `installedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_file`;
CREATE TABLE `zt_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(100) NOT NULL,
  `title` char(255) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `objectType` (`objectType`),
  KEY `objectID` (`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('1','201811/2909503301964fbc.png','2909503301964fbc','png','128687','','0','abcd','2018-11-29 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('2','201812/03140059038467jc.png','03140059038467jc','png','108403','task','7','test','2018-12-03 00:00:00','0','editor','0');
DROP TABLE IF EXISTS `zt_group`;
CREATE TABLE `zt_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `role` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `acl` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('1','管理员','admin','系统管理员','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('25','园区负责人','','能看到和操作园区内的所有任务，可以指派给园区内人员，也可以指派给其他园区负责人，或者总部','{\"views\":{\"project\":\"project\"}}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('11','guest','guest','For guest','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('12','受限用户','limited','受限用户分组(只能编辑与自己相关的内容)','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('13','上海园区','','上海园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"products\":[\"1\"],\"projects\":[\"12\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('14','昆山园区','','昆山园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"products\":[\"2\"],\"projects\":[\"5\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('15','芜湖园区','','芜湖园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"products\":[\"3\"],\"projects\":[\"9\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('16','总裁办','','总裁办','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"15\",\"14\",\"13\",\"12\",\"11\",\"10\",\"9\",\"8\",\"7\",\"6\",\"5\",\"4\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('17','苏州园区','','苏州园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"6\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('18','北京园区','','北京园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"7\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('19','成都园区','','成都园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"8\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('20','郑州园区','','郑州园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"10\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('21','武汉园区','','武汉园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"11\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('22','惠州园区','','惠州园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"13\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('23','西安园区','','西安园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"14\"]}');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('24','沈阳园区','','沈阳园区','{\"views\":{\"project\":\"project\",\"report\":\"report\"},\"projects\":[\"15\"]}');
DROP TABLE IF EXISTS `zt_grouppriv`;
CREATE TABLE `zt_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','checkDB');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','checkWeak');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','safe');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','debug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','sql');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','backup');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','manage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','execute');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','selectSource');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setBugfree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','toggle');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','turnon');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','flow');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','set');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','working');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dev','api');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dev','db');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','extend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','newPage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','deactivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','erase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','install');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','uninstall');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upgrade');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','copy');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','manageMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','managePriv');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','manageView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','batchDelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','detect');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','resend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','reset');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','test');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','message','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','message','setting');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','calendar');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importPlanStories');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','treestory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','treetask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','changeStatus');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeBranch');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchCaseTypeChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchConfirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchDelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','importFromLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','linkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','batchCreateCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','batchUnlinkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','createCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','library');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','libView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','linkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','block');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','createCycle');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','unlock');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','treestory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','treetask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','limited');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('13','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('14','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','kanbanColsColor');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('19','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('20','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('21','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('22','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('23','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','treeTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('24','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','calendar');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('25','task','view');
DROP TABLE IF EXISTS `zt_history`;
CREATE TABLE `zt_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('1','14','plan','','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('2','29','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('3','29','closedDate','0000-00-00 00:00:00','2018-11-29 09:50:34','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('4','29','closedBy','','abcd','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('5','29','assignedTo','admin','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('6','29','status','draft','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('7','29','stage','planned','released','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('8','30','assignedTo','','abcd2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('9','42','assignedTo','admin','abcd4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('10','43','module','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('11','53','plan','','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('12','54','PM','','admin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('13','55','assignedTo','admin','abcd2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('14','80','name','芜湖风控项目','总裁办风控项目','001- <del>芜湖风控项目</del>
001+ <ins>总裁办风控项目</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('15','80','code','WHFKXM','ZCBFKXM','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('16','80','PM','admin','huangjun','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('17','81','name','宇培国际控股风控项目','昆山园区风控项目','001- <del>宇培国际控股风控项目</del>
001+ <ins>昆山园区风控项目</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('18','81','code','YPGJKGFK','KSYQFKXM','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('19','94','PM','','huangjun','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('20','97','code','ZCBFXX','ZCBFXXM','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('21','107','PM','','guoduanqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('22','108','PM','','liuxia','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('23','109','PM','','sunqi','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('24','110','PM','','liandong','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('25','111','PM','','fanbao','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('26','112','PM','','hufeng','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('27','113','PM','','heshaoan','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('28','114','PM','','yanrui','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('29','115','PM','','chengyun','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('30','116','PM','','lihuiyu','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('31','117','PM','liuxia','guoduanqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('32','118','PM','','shiyingyong','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('33','192','assignedTo','test2','chenhuan','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('34','194','assignedTo','chenhuan','test2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('35','197','realStarted','0000-00-00','2018-12-03','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('36','197','assignedTo','test2','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('37','197','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('38','197','finishedBy','','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('39','197','finishedDate','','2018-12-03 14:40:03','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('40','198','consumed','0','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('41','198','finishedDate','2018-12-03 14:40:03','2018-12-03 14:40:19','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('42','199','realStarted','0000-00-00','2018-12-03','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('43','199','consumed','0','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('44','199','left','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('45','199','assignedTo','test2','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('46','199','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('47','224','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('48','224','finishedDate','','2018-12-06','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('49','224','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('50','224','finishedBy','','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('51','226','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('52','226','assignedTo','test','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('53','226','closedBy','','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('54','226','closedDate','0000-00-00 00:00:00','2018-12-07 10:28:59','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('55','226','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('56','227','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('57','227','assignedTo','test','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('58','227','closedBy','','test','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('59','227','closedDate','0000-00-00 00:00:00','2018-12-07 10:29:03','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('60','227','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('61','228','module','0','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('62','235','status','doing','wait','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('63','238','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('64','239','realStarted','0000-00-00','2018-12-07','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('65','239','consumed','0','12','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('66','239','left','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('67','239','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('68','240','realStarted','0000-00-00','2018-12-07','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('69','240','consumed','0','15','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('70','240','left','0','10','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('71','240','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('72','244','assignedTo','test2','test3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('73','244','left','0','5','');
DROP TABLE IF EXISTS `zt_im_chat`;
CREATE TABLE `zt_im_chat` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT 'group',
  `admins` varchar(255) NOT NULL DEFAULT '',
  `committers` varchar(255) NOT NULL DEFAULT '',
  `subject` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `public` enum('0','1') NOT NULL DEFAULT '0',
  `createdBy` varchar(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editedBy` varchar(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastActiveTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dismissDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `public` (`public`),
  KEY `createdBy` (`createdBy`),
  KEY `editedBy` (`editedBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_im_chatuser`;
CREATE TABLE `zt_im_chatuser` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `order` smallint(5) NOT NULL DEFAULT '0',
  `star` enum('0','1') NOT NULL DEFAULT '0',
  `hide` enum('0','1') NOT NULL DEFAULT '0',
  `mute` enum('0','1') NOT NULL DEFAULT '0',
  `join` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `chatuser` (`cgid`,`user`),
  KEY `cgid` (`cgid`),
  KEY `user` (`user`),
  KEY `order` (`order`),
  KEY `star` (`star`),
  KEY `hide` (`hide`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_im_message`;
CREATE TABLE `zt_im_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` bigint(8) unsigned NOT NULL,
  `type` enum('normal','broadcast','notify') NOT NULL DEFAULT 'normal',
  `content` text NOT NULL,
  `contentType` enum('text','plain','emotion','image','file','object') NOT NULL DEFAULT 'text',
  `data` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mgid` (`gid`),
  KEY `mcgid` (`cgid`),
  KEY `muser` (`user`),
  KEY `mtype` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_im_messagestatus`;
CREATE TABLE `zt_im_messagestatus` (
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `gid` char(40) NOT NULL DEFAULT '',
  `status` enum('waiting','sent','readed','deleted') NOT NULL DEFAULT 'waiting',
  UNIQUE KEY `user` (`user`,`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_lang`;
CREATE TABLE `zt_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `key` varchar(60) NOT NULL,
  `value` text NOT NULL,
  `system` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('1','zh-cn','task','typeList','','','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('2','zh-cn','task','typeList','affair','事务','1');
DROP TABLE IF EXISTS `zt_log`;
CREATE TABLE `zt_log` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(8) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `contentType` varchar(30) NOT NULL,
  `data` text NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objectType` (`objectType`),
  KEY `obejctID` (`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_module`;
CREATE TABLE `zt_module` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(60) NOT NULL DEFAULT '',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `collector` text NOT NULL,
  `short` varchar(30) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `root` (`root`),
  KEY `type` (`type`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('1','2','0','ABC','0',',1,','1','10','story','','','ABC','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('2','6','0','1)	业务流程中的错误或漏洞','0',',2,','1','10','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('3','6','0','2)	危及安全生产的隐患','0',',3,','1','20','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('4','6','0','3)	企业内、外部人员的道德风险，如违反诚实守信原则、行贿受贿、徇私舞弊等','0',',4,','1','30','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('5','6','0','4)	盘存损失；资产盘点异常','0',',5,','1','40','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('6','6','0','5)	客户提出索赔要求','0',',6,','1','50','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('7','6','0','6)	被行政管理机关检查发现不合规或被处罚','0',',7,','1','60','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('8','6','0','7)	运营中发生的各种事故','0',',8,','1','70','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('9','6','0','8)	公司资产发生非正常减值','0',',9,','1','80','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('10','6','0','9)	会计政策调整或发生变化','0',',10,','1','90','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('11','6','0','10)	应收账款发生逾期','0',',11,','1','100','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('12','6','0','11)	合同在我方签署后，对方超过7个工作日仍未签署并收回合同原件','0',',12,','1','110','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('13','6','0','12)	合同对方发生违约，或对方明确或明显将违约的情形','0',',13,','1','120','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('14','6','0','13)	我方在履行合同时，发生无法履行即将发生违约的情形；或继续履行将给公司带来重大损失的情形','0',',14,','1','130','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('15','6','0','14)	影响企业的新的法律法规','0',',15,','1','140','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('16','6','0','15)	发生纠纷或诉讼案件','0',',16,','1','150','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('17','6','0','16)	市场发生系统性危机','0',',17,','1','160','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('18','6','0','17)	客户、供应商信用情况发生重大不利变化','0',',18,','1','170','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('19','6','0','18)	产品、服务、价格、竞争发生重大变化','0',',19,','1','180','task','','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`collector`,`short`,`deleted`) VALUES ('20','6','0','19)	其他突发事件或给公司可能带来损失的事件','0',',20,','1','190','task','','','','0');
DROP TABLE IF EXISTS `zt_notify`;
CREATE TABLE `zt_notify` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(50) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(9) NOT NULL,
  `toList` varchar(255) NOT NULL,
  `ccList` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `sendTime` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'wait',
  `failReason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
INSERT INTO `zt_notify`(`id`,`objectType`,`objectID`,`action`,`toList`,`ccList`,`subject`,`data`,`createdBy`,`createdDate`,`sendTime`,`status`,`failReason`) VALUES ('12','message','0','192','chenhuan','','','测试指派了任务 <a href=\'/zentao/task-view-6.html\' >[#6::测试----库区温度监控设备更新]</a>
','test','2018-12-03 13:54:44','0000-00-00 00:00:00','wait','');
INSERT INTO `zt_notify`(`id`,`objectType`,`objectID`,`action`,`toList`,`ccList`,`subject`,`data`,`createdBy`,`createdDate`,`sendTime`,`status`,`failReason`) VALUES ('3','message','0','30','abcd2','','','dfdsafasdfads编辑了需求 <a href=\'/zentao/story-view-1.html\' >[#1::dsafdfsa]</a>
','abcd','2018-11-29 10:02:04','0000-00-00 00:00:00','wait','');
INSERT INTO `zt_notify`(`id`,`objectType`,`objectID`,`action`,`toList`,`ccList`,`subject`,`data`,`createdBy`,`createdDate`,`sendTime`,`status`,`failReason`) VALUES ('7','message','0','55','abcd2','','','abcd5编辑了需求 <a href=\'/zentao/story-view-4.html\' >[#4::fdadsafdsafdsa]</a>
','abcd5','2018-11-29 10:51:03','0000-00-00 00:00:00','wait','');
INSERT INTO `zt_notify`(`id`,`objectType`,`objectID`,`action`,`toList`,`ccList`,`subject`,`data`,`createdBy`,`createdDate`,`sendTime`,`status`,`failReason`) VALUES ('10','message','0','133','huangjun','','','陈亚洲创建任务 <a href=\'/zentao/task-view-5.html\' >[#5::test]</a>
','chenyazhou','2018-11-29 17:04:06','0000-00-00 00:00:00','wait','');
INSERT INTO `zt_notify`(`id`,`objectType`,`objectID`,`action`,`toList`,`ccList`,`subject`,`data`,`createdBy`,`createdDate`,`sendTime`,`status`,`failReason`) VALUES ('9','message','0','58','abcd6','','','admin创建任务 <a href=\'/zentao/task-view-3.html\' >[#3::safddsf]</a>
','admin','2018-11-29 10:58:43','0000-00-00 00:00:00','wait','');
DROP TABLE IF EXISTS `zt_product`;
CREATE TABLE `zt_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `line` mediumint(8) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'normal',
  `status` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `PO` varchar(30) NOT NULL,
  `QD` varchar(30) NOT NULL,
  `RD` varchar(30) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdVersion` varchar(20) NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order` (`order`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_product`(`id`,`name`,`code`,`line`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('1','上海园区','1234','0','normal','normal','','admin','','','open','','admin','2018-11-29 09:15:16','10.6','5','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`line`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('2','昆山园区','KSYQ','0','normal','normal','','admin','','','custom','14','admin','2018-11-29 10:14:08','10.6','10','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`line`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('3','芜湖园区','WHYQ','0','normal','normal','','admin','','','private','','admin','2018-11-29 10:34:08','10.6','15','0');
DROP TABLE IF EXISTS `zt_productplan`;
CREATE TABLE `zt_productplan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  `title` varchar(90) NOT NULL,
  `desc` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `order` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `end` (`end`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`order`,`deleted`) VALUES ('1','1','0','fdadsfdsf','','2018-11-29','2019-06-02','','0');
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`order`,`deleted`) VALUES ('2','3','0','dfadsfafdsa','daffdsafdsa','2018-11-29','2019-11-28','','1');
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`order`,`deleted`) VALUES ('3','3','0','fafdfa','dfadsafadsf','2019-11-29','2020-06-01','','1');
DROP TABLE IF EXISTS `zt_project`;
CREATE TABLE `zt_project` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `isCat` enum('1','0') NOT NULL DEFAULT '0',
  `catID` mediumint(8) unsigned NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'sprint',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `days` smallint(5) unsigned NOT NULL,
  `status` varchar(10) NOT NULL,
  `statge` enum('1','2','3','4','5') NOT NULL DEFAULT '1',
  `pri` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `openedVersion` varchar(20) NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `canceledBy` varchar(30) NOT NULL DEFAULT '',
  `canceledDate` datetime NOT NULL,
  `PO` varchar(30) NOT NULL DEFAULT '',
  `PM` varchar(30) NOT NULL DEFAULT '',
  `QD` varchar(30) NOT NULL DEFAULT '',
  `RD` varchar(30) NOT NULL DEFAULT '',
  `team` varchar(90) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` text NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  KEY `begin` (`begin`),
  KEY `end` (`end`),
  KEY `status` (`status`),
  KEY `order` (`order`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('1','0','0','ops','0','昆山园区风控项目','KSYQFKXM','2018-11-28','2018-11-30','3','wait','1','1','','admin','2018-11-28 13:48:20','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','宇培国际控股风控项目','open','','5','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('2','0','0','sprint','0','总裁办风控项目','ZCBFKXM','2018-11-29','2019-12-27','282','wait','1','1','','admin','2018-11-29 10:37:57','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','huangjun','','','芜湖风控项目','private','','10','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('3','0','0','waterfall','0','苏州园区风控项目','SZYQFKXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:08:06','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','苏州园区风控项目','private','','15','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('4','0','0','waterfall','0','总裁办风险项目管理','ZCBFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:19:03','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','huangjun','','','总裁办','private','','20','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('5','0','0','waterfall','0','昆山园区风险项目管理','KSYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:22:00','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','guoduanqiang','','','昆山园区','private','','25','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('6','0','0','waterfall','0','苏州园区风险项目管理','SZYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:26:04','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','guoduanqiang','','','苏州园区','private','','30','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('7','0','0','waterfall','0','北京园区风险项目管理','BJYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:27:37','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','sunqi','','','北京园区','private','','35','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('8','0','0','waterfall','0','成都园区风险项目管理','CDYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:29:48','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','liandong','','','成都园区','private','','40','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('9','0','0','waterfall','0','芜湖园区风险项目管理','WHYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:30:41','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','fanbao','','','芜湖园区','private','','45','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('10','0','0','waterfall','0','郑州园区风险项目管理','ZZYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:35:17','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','hufeng','','','郑州园区','private','','50','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('11','0','0','waterfall','0','武汉园区风险项目管理','WHYQFXXMGL','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:37:08','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','heshaoan','','','武汉园区','private','','55','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('12','0','0','waterfall','0','上海园区风险项目管理','SHYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:38:10','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','shiyingyong','','','上海园区','private','','60','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('13','0','0','waterfall','0','惠州园区风险项目管理','HZYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:39:19','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','yanrui','','','惠州园区','private','','65','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('14','0','0','waterfall','0','西安园区风险项目管理','XAYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:40:02','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','chengyun','','','西安园区','private','','70','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('15','0','0','waterfall','0','沈阳园区风险项目管理','SYYQFXXM','2018-11-29','2019-11-28','261','wait','1','1','','admin','2018-11-29 14:40:52','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','lihuiyu','','','沈阳园区','private','','75','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('16','0','0','waterfall','0','测试项目','007','2018-12-07','2021-12-31','801','wait','1','1','','admin','2018-12-07 15:14:41','10.6','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','测试项目团队','custom','15,16,25','80','0');
DROP TABLE IF EXISTS `zt_projectproduct`;
CREATE TABLE `zt_projectproduct` (
  `project` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  `plan` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`project`,`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`,`plan`) VALUES ('2','3','0','0');
DROP TABLE IF EXISTS `zt_projectstory`;
CREATE TABLE `zt_projectstory` (
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` mediumint(8) unsigned NOT NULL,
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(6) NOT NULL DEFAULT '1',
  `order` smallint(6) unsigned NOT NULL,
  UNIQUE KEY `project` (`project`,`story`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_release`;
CREATE TABLE `zt_release` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` mediumint(8) unsigned NOT NULL,
  `name` char(30) NOT NULL DEFAULT '',
  `marker` enum('0','1') NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `leftBugs` text NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `build` (`build`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_score`;
CREATE TABLE `zt_score` (
  `id` bigint(12) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL DEFAULT '',
  `method` varchar(30) NOT NULL,
  `desc` varchar(250) NOT NULL DEFAULT '',
  `before` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  `after` int(11) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `model` (`module`),
  KEY `method` (`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_story`;
CREATE TABLE `zt_story` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` text,
  `source` varchar(20) NOT NULL,
  `sourceNote` varchar(255) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `estimate` float unsigned NOT NULL,
  `status` enum('','changed','active','draft','closed') NOT NULL DEFAULT '',
  `color` char(7) NOT NULL,
  `stage` enum('','wait','planned','projected','developing','developed','testing','tested','verified','released','closed') NOT NULL DEFAULT 'wait',
  `mailto` text,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` date NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `toBug` mediumint(9) NOT NULL,
  `childStories` varchar(255) NOT NULL,
  `linkStories` varchar(255) NOT NULL,
  `duplicateStory` mediumint(8) unsigned NOT NULL,
  `version` smallint(6) NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `status` (`status`),
  KEY `assignedTo` (`assignedTo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('1','1','0','0','1','','','0','dsafdfsa','','','0','0','active','','wait','','admin','2018-11-29 09:22:45','abcd2','2018-11-29 10:02:04','abcd','2018-11-29 10:02:04','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('2','1','0','0','1','','','0','fdasfdsaffdafadsfafd','','','0','0','closed','','released','','abcd','2018-11-29 09:47:23','closed','2018-11-29 09:50:34','abcd','2018-11-29 09:50:34','','0000-00-00','abcd','2018-11-29 09:50:34','done','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('3','2','0','1','','','','0','dafsdsfasdfsaf','','','0','0','draft','','wait','','abcd3','2018-11-29 10:20:52','abcd4','2018-11-29 10:26:22','admin','2018-11-29 10:32:47','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('4','3','0','0','2','','','0','fdadsafdsafdsa','','','0','0','draft','','wait','','abcd5','2018-11-29 10:44:54','abcd2','2018-11-29 10:51:03','abcd5','2018-11-29 10:51:03','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','1');
DROP TABLE IF EXISTS `zt_storyspec`;
CREATE TABLE `zt_storyspec` (
  `story` mediumint(9) NOT NULL,
  `version` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `spec` text NOT NULL,
  `verify` text NOT NULL,
  UNIQUE KEY `story` (`story`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('1','1','dsafdfsa','','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('2','1','fdasfdsaffdafadsfafd','dafdsafdfasdfa','adfdsafdsafds');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('3','1','dafsdsfasdfsaf','dfasfdsafadsf','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('4','1','fdadsafdsafdsa','fdasfasdfasf','');
DROP TABLE IF EXISTS `zt_storystage`;
CREATE TABLE `zt_storystage` (
  `story` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  `stage` varchar(50) NOT NULL,
  KEY `story` (`story`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_suitecase`;
CREATE TABLE `zt_suitecase` (
  `suite` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `suitecase` (`suite`,`case`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_task`;
CREATE TABLE `zt_task` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `estimate` float unsigned NOT NULL,
  `consumed` float unsigned NOT NULL,
  `left` float unsigned NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('wait','doing','done','pause','cancel','closed') NOT NULL DEFAULT 'wait',
  `color` char(7) NOT NULL,
  `mailto` text,
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL,
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `estStarted` date NOT NULL,
  `realStarted` date NOT NULL,
  `finishedBy` varchar(30) NOT NULL,
  `finishedDate` datetime NOT NULL,
  `finishedList` text NOT NULL,
  `canceledBy` varchar(30) NOT NULL,
  `canceledDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL,
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `project` (`project`),
  KEY `story` (`story`),
  KEY `assignedTo` (`assignedTo`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','0','1','0','0','1','0','测试系统','affair','3','0','0','0','0000-00-00','wait','','','一二三四五','admin','2018-11-28 13:49:46','admin','2018-11-28 13:49:46','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','admin','2018-11-28 13:51:27','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','0','2','0','0','1','0','safddsf','affair','3','0','0','0','0000-00-00','wait','','','afdsafdsafdsa','admin','2018-11-29 10:58:43','abcd5','2018-11-29 10:58:43','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('3','0','2','0','0','1','0','safddsf','affair','3','0','0','0','0000-00-00','wait','','','afdsafdsafdsa','admin','2018-11-29 10:58:43','abcd6','2018-11-29 10:58:43','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('4','0','2','0','0','1','0','safddsf','affair','3','0','0','0','0000-00-00','wait','','','afdsafdsafdsa','admin','2018-11-29 10:58:43','admin','2018-11-29 10:58:43','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('5','0','12','0','0','1','0','test','study','3','0','0','0','0000-00-00','wait','','','11111','chenyazhou','2018-11-29 17:04:06','huangjun','2018-11-29 17:04:06','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','1');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('6','-1','6','3','0','1','0','测试----库区温度监控设备更新','affair','3','0','27','18','0000-00-00','doing','','','<p>
	12354465757868
</p>
<p>
	4235346
</p>
<p>
	647
</p>
<p>
	3746
</p>
<p>
	37
</p>
<p>
	<br /></p>','test','2018-11-30 20:06:34','test','2018-12-04 09:50:26','0000-00-00','2018-12-07','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','test2','2018-12-07 10:48:16','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('7','0','6','0','0','1','0','测试2222','affair','3','0','2','0','2018-12-06','closed','','','<p>
	<img src=\"{2.png}\" alt=\"file-read-2.png\" /></p>','test','2018-12-03 14:01:33','closed','2018-12-07 10:28:59','2018-12-03','2018-12-03','test','2018-12-03 14:40:19','','','0000-00-00 00:00:00','test','2018-12-07 10:28:59','done','test','2018-12-07 10:28:59','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('8','0','6','0','0','1','0','测试数据','affair','3','0','1','0','2018-12-06','closed','','','安全我发好几千万已发货前为欧服hi符合其无法和服务if黑发','test','2018-12-07 09:58:03','closed','2018-12-07 10:29:03','2018-12-06','0000-00-00','test','2018-12-06 00:00:00','','','0000-00-00 00:00:00','test','2018-12-07 10:29:03','done','test','2018-12-07 10:29:03','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('9','6','6','3','0','1','0','子任务测试111','affair','3','0','0','0','0000-00-00','wait','','','找供应商','test2','2018-12-07 10:45:57','test2','2018-12-07 10:45:57','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('10','6','6','3','0','1','0','子任务测试1222','affair','3','0','0','5','0000-00-00','wait','','','与供应商谈判','test2','2018-12-07 10:45:57','test3','2018-12-07 11:09:03','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','test2','2018-12-07 11:09:03','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('11','6','6','3','0','1','0','子任务测试3333','affair','3','0','0','0','0000-00-00','wait','','','仓库测温','test2','2018-12-07 10:45:57','test2','2018-12-07 10:45:57','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('12','6','6','3','0','1','0','子任务测试4444','affair','3','0','0','0','0000-00-00','wait','','','合同签订','test2','2018-12-07 10:45:57','test2','2018-12-07 10:45:57','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('13','6','6','3','0','1','0','子任务测试5555','affair','3','0','15','10','0000-00-00','doing','','','交货','test2','2018-12-07 10:45:57','test2','2018-12-07 10:45:57','0000-00-00','2018-12-07','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','test2','2018-12-07 10:48:39','0');
INSERT INTO `zt_task`(`id`,`parent`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`finishedList`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('14','6','6','3','0','1','0','子任务测试6666','affair','3','0','12','8','0000-00-00','doing','','','库房安装','test2','2018-12-07 10:45:57','test2','2018-12-07 10:45:57','0000-00-00','2018-12-07','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','test2','2018-12-07 10:48:16','0');
DROP TABLE IF EXISTS `zt_taskestimate`;
CREATE TABLE `zt_taskestimate` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `left` float unsigned NOT NULL DEFAULT '0',
  `consumed` float unsigned NOT NULL,
  `account` char(30) NOT NULL DEFAULT '',
  `work` text,
  PRIMARY KEY (`id`),
  KEY `task` (`task`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('1','7','2018-12-03','0','0','test','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('2','7','2018-12-03','0','2','test','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('3','6','2018-12-03','1','2','test','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('4','8','2018-12-07','0','1','test','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('5','14','2018-12-07','8','12','test2','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('6','13','2018-12-07','10','15','test2','');
DROP TABLE IF EXISTS `zt_team`;
CREATE TABLE `zt_team` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `type` enum('project','task') NOT NULL DEFAULT 'project',
  `account` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT '',
  `limited` char(8) NOT NULL DEFAULT 'no',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `days` smallint(5) unsigned NOT NULL,
  `hours` float(2,1) unsigned NOT NULL DEFAULT '0.0',
  `estimate` decimal(12,2) unsigned NOT NULL DEFAULT '0.00',
  `consumed` decimal(12,2) unsigned NOT NULL DEFAULT '0.00',
  `left` decimal(12,2) unsigned NOT NULL DEFAULT '0.00',
  `order` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `team` (`root`,`type`,`account`)
) ENGINE=MyISAM AUTO_INCREMENT=291 DEFAULT CHARSET=utf8;
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('1','1','project','admin','','no','2018-11-28','3','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('2','2','project','admin','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('16','3','project','chenxiaoyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('17','3','project','fangjuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('5','2','project','huangjun','项目负责人','no','2018-11-29','0','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('6','3','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('7','2','project','chenhuan','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('8','2','project','guojunfeng','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('9','2','project','houdazhuang','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('10','2','project','jianglina','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('11','2','project','maofeng','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('12','2','project','shaohuiling','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('13','2','project','shenlei','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('14','2','project','wuyaojun','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('15','2','project','zhenshiyu','','no','2018-11-29','282','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('18','3','project','fuhao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('19','3','project','gaopengcheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('20','3','project','guoduanqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('21','3','project','huangqin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('22','3','project','liwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('23','3','project','panglinwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('24','3','project','taoweiyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('25','3','project','wang.fang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('26','3','project','wanghui','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('27','3','project','wupanlong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('28','3','project','wuxiaolu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('29','3','project','xuxin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('30','3','project','yangjian','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('31','3','project','yangli','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('32','3','project','zhafeiyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('33','3','project','zhangqiong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('34','3','project','zhangzhenya','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('35','3','project','zhangzhiqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('36','3','project','zhaoyong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('37','3','project','zhoukeke','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('38','4','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('39','4','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('40','4','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('41','4','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('42','4','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('43','4','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('44','4','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('45','4','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('46','4','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('47','4','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('48','4','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('49','5','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('50','5','project','chenxiaoyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('51','5','project','fangjuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('52','5','project','fuhao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('53','5','project','gaopengcheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('54','5','project','guoduanqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('55','5','project','huangqin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('56','5','project','liwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('57','5','project','panglinwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('58','5','project','taoweiyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('59','5','project','wang.fang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('60','5','project','wanghui','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('61','5','project','wupanlong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('62','5','project','wuxiaolu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('63','5','project','xuxin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('64','5','project','yangjian','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('65','5','project','yangli','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('66','5','project','zhafeiyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('67','5','project','zhangqiong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('68','5','project','zhangzhenya','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('69','5','project','zhangzhiqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('70','5','project','zhaoyong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('71','5','project','zhoukeke','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('72','6','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('73','6','project','liuxia','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('74','6','project','qinwenlin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('75','6','project','zhaoqingsong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('76','7','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('77','7','project','hushuling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('78','7','project','jixun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('79','7','project','sunqi','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('80','7','project','wangfenglan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('81','7','project','wangyilei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('82','7','project','yangchao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('83','7','project','zhangaiwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('84','7','project','zhangshuwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('85','8','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('86','8','project','liandong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('87','8','project','liuxiuhong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('88','8','project','qiaojie','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('89','8','project','qiulingxia','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('90','8','project','tangdong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('91','8','project','tangzhenqi','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('92','8','project','tuorurong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('93','8','project','wujun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('94','8','project','wuqiangxiu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('95','8','project','yanqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('96','8','project','zhangbo','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('97','8','project','zhangyao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('98','8','project','zhuangxiaoping','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('99','9','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('100','9','project','bihuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('101','9','project','chenweilan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('102','9','project','fanbao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('103','9','project','gaoshoubin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('104','9','project','hanlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('105','9','project','hanlimei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('106','9','project','jiakang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('107','9','project','wangtao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('108','9','project','xuzhenkui','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('109','9','project','yuming','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('110','9','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('111','9','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('112','9','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('113','9','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('114','9','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('115','9','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('116','9','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('117','9','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('118','9','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('119','9','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('120','8','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('121','8','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('122','8','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('123','8','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('124','8','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('125','8','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('126','8','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('127','8','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('128','8','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('129','8','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('130','7','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('131','7','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('132','7','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('133','7','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('134','7','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('135','7','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('136','7','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('137','7','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('138','7','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('139','7','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('140','6','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('141','6','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('142','6','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('143','6','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('144','6','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('145','6','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('146','6','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('147','6','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('148','6','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('149','6','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('150','5','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('151','5','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('152','5','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('153','5','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('154','5','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('155','5','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('156','5','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('157','5','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('158','5','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('159','5','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('160','10','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('161','10','project','helijian','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('162','10','project','hufeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('163','10','project','niudeshuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('164','10','project','songyang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('165','10','project','sunrenyuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('166','10','project','tangyunhao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('167','10','project','wangguoan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('168','10','project','yangrenke','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('169','10','project','zhangcong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('170','10','project','zhengxiangping','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('171','10','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('172','10','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('173','10','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('174','10','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('175','10','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('176','10','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('177','10','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('178','10','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('179','10','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('180','10','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('181','11','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('182','11','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('183','11','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('184','11','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('185','11','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('186','11','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('187','11','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('188','11','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('189','11','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('190','11','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('191','11','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('192','11','project','chennianqiu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('193','11','project','heshaoan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('194','11','project','liujicheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('195','11','project','lixia','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('196','11','project','ranxi','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('197','11','project','wangliyuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('198','12','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('199','12','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('200','12','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('201','12','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('202','12','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('203','12','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('204','12','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('205','12','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('206','12','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('207','12','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('208','12','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('209','12','project','chenyazhou','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('210','12','project','chenzhaonan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('211','12','project','chuhongzhong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('212','12','project','cuishudong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('213','12','project','fanhaile','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('214','12','project','guofengxia','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('215','12','project','jinyuanyuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('216','12','project','licongya','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('217','12','project','lifeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('218','12','project','litingyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('219','12','project','liushijiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('220','12','project','liuweiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('221','12','project','liyuping','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('222','12','project','lizhuo','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('223','12','project','luyong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('224','12','project','luzhenrui','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('225','12','project','mengke','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('226','12','project','renjing','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('227','12','project','shenying','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('228','12','project','shiyouqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('229','12','project','shuyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('230','12','project','xiangsheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('231','12','project','xuliang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('232','12','project','yangcheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('233','12','project','yangxuanwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('234','12','project','yaochao','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('235','12','project','zouqinrong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('236','13','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('237','13','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('238','13','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('239','13','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('240','13','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('241','13','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('242','13','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('243','13','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('244','13','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('245','13','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('246','13','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('247','13','project','fengxiaofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('248','13','project','liyuanjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('249','13','project','luxiaoting','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('250','13','project','weijunqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('251','13','project','yanrui','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('252','14','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('253','14','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('254','14','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('255','14','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('256','14','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('257','14','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('258','14','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('259','14','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('260','14','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('261','14','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('262','14','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('263','14','project','baiqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('264','14','project','chengyun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('265','14','project','qinlongbo','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('266','14','project','shiguoqiang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('267','14','project','shimengni','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('268','14','project','shitieheng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('269','14','project','yangxu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('270','14','project','zhanghaiyan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('271','15','project','admin','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('272','15','project','chenhuan','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('273','15','project','guojunfeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('274','15','project','houdazhuang','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('275','15','project','huangjun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('276','15','project','jianglina','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('277','15','project','maofeng','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('278','15','project','shaohuiling','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('279','15','project','shenlei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('280','15','project','wuyaojun','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('281','15','project','zhenshiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('282','15','project','diaohongwei','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('283','15','project','lihuiyu','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('284','15','project','tianjue','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('285','6','project','guoduanqiang','项目负责人','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('286','12','project','shiyingyong','','no','2018-11-29','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('287','6','project','test','','no','2018-11-30','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('288','6','project','test2','','no','2018-11-30','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('289','6','project','test3','','no','2018-12-07','261','7.0','0.00','0.00','0.00','0');
INSERT INTO `zt_team`(`id`,`root`,`type`,`account`,`role`,`limited`,`join`,`days`,`hours`,`estimate`,`consumed`,`left`,`order`) VALUES ('290','16','project','admin','','no','2018-12-07','801','7.0','0.00','0.00','0.00','0');
DROP TABLE IF EXISTS `zt_testreport`;
CREATE TABLE `zt_testreport` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `tasks` varchar(255) NOT NULL,
  `builds` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `owner` char(30) NOT NULL,
  `members` text NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `cases` text NOT NULL,
  `report` text NOT NULL,
  `objectType` varchar(20) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_testresult`;
CREATE TABLE `zt_testresult` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `run` mediumint(8) unsigned NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `caseResult` char(30) NOT NULL,
  `stepResults` text NOT NULL,
  `lastRunner` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `case` (`case`),
  KEY `version` (`version`),
  KEY `run` (`run`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_testrun`;
CREATE TABLE `zt_testrun` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `assignedTo` char(30) NOT NULL DEFAULT '',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  `status` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task` (`task`,`case`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_testsuite`;
CREATE TABLE `zt_testsuite` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `addedBy` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `lastEditedBy` char(30) NOT NULL,
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product` (`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_testtask`;
CREATE TABLE `zt_testtask` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(90) NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `mailto` text,
  `desc` text NOT NULL,
  `report` text NOT NULL,
  `status` enum('blocked','doing','wait','done') NOT NULL DEFAULT 'wait',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `build` (`build`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_todo`;
CREATE TABLE `zt_todo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `begin` smallint(4) unsigned zerofill NOT NULL,
  `end` smallint(4) unsigned zerofill NOT NULL,
  `type` char(10) NOT NULL,
  `cycle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `desc` text NOT NULL,
  `status` enum('wait','doing','done','closed') NOT NULL DEFAULT 'wait',
  `private` tinyint(1) NOT NULL,
  `config` varchar(255) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedBy` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `finishedBy` varchar(30) NOT NULL DEFAULT '',
  `finishedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `assignedTo` (`assignedTo`),
  KEY `finishedBy` (`finishedBy`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_user`;
CREATE TABLE `zt_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dept` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `role` char(10) NOT NULL DEFAULT '',
  `realname` varchar(100) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `commiter` varchar(100) NOT NULL,
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `gender` enum('f','m') NOT NULL DEFAULT 'f',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL DEFAULT '',
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` int(10) unsigned NOT NULL DEFAULT '0',
  `fails` tinyint(5) NOT NULL DEFAULT '0',
  `locked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ranzhi` char(30) NOT NULL DEFAULT '',
  `score` int(11) NOT NULL DEFAULT '0',
  `scoreLevel` int(11) NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('online','away','busy','offline') NOT NULL DEFAULT 'offline',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `dept` (`dept`),
  KEY `email` (`email`),
  KEY `commiter` (`commiter`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('1','0','admin','73436b3abc4d107f1cf0b6c27ed20127','','admin','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','31','180.168.25.50','1544410510','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('2','1','abcd','73436b3abc4d107f1cf0b6c27ed20127','','abcd','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','5','180.168.25.50','1543456013','2','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('3','1','abcd2','73436b3abc4d107f1cf0b6c27ed20127','','abcd2','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','1','180.168.25.50','1543455642','0','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('4','2','abcd3','73436b3abc4d107f1cf0b6c27ed20127','','abcd3','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','2','180.168.25.50','1543458016','0','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('5','2','abcd4','73436b3abc4d107f1cf0b6c27ed20127','','abcd4','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','46.17.42.62','1543458229','0','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('6','5','abcd5','73436b3abc4d107f1cf0b6c27ed20127','','abcd5','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','4','180.168.25.50','1543460669','0','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('7','5','abcd6','e10adc3949ba59abbe56e057f20f883e','','abcd6','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','1','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('8','12','huangjun','1edd1c1900025739035b50f32a6452b2','','黄俊','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','3','180.168.25.50','1543482697','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('9','12','chenhuan','1edd1c1900025739035b50f32a6452b2','','陈焕','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('10','12','guojunfeng','1edd1c1900025739035b50f32a6452b2','','郭俊峰','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('11','12','jianglina','1edd1c1900025739035b50f32a6452b2','','姜丽娜','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('12','12','maofeng','1edd1c1900025739035b50f32a6452b2','','冒锋','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('13','12','shaohuiling','1edd1c1900025739035b50f32a6452b2','','邵慧玲','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('14','12','shenlei','1edd1c1900025739035b50f32a6452b2','','沈蕾','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('15','12','wuyaojun','1edd1c1900025739035b50f32a6452b2','','吴耀均','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('16','12','zhenshiyu','1edd1c1900025739035b50f32a6452b2','','郑世玉','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('17','1','zhafeiyan','1edd1c1900025739035b50f32a6452b2','','查飞燕','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('18','1','chenxiaoyan','1edd1c1900025739035b50f32a6452b2','','陈晓琰','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('19','1','fangjuan','1edd1c1900025739035b50f32a6452b2','','方娟','','','','0000-00-00','f','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('20','1','fuhao','1edd1c1900025739035b50f32a6452b2','','付浩','','','','0000-00-00','m','','','','','','','','','','admin','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('21','1','gaopengcheng','1edd1c1900025739035b50f32a6452b2','','高鹏程','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('22','1','guoduanqiang','1edd1c1900025739035b50f32a6452b2','','郭端强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','2','180.168.25.50','1543482546','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('23','1','huangqin','1edd1c1900025739035b50f32a6452b2','','黄琴','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('24','1','liwei','1edd1c1900025739035b50f32a6452b2','','李伟','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('25','1','panglinwei','1edd1c1900025739035b50f32a6452b2','','庞林威','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('26','1','wang.fang','1edd1c1900025739035b50f32a6452b2','','王芳','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('27','1','wanghui','1edd1c1900025739035b50f32a6452b2','','王慧','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('28','1','wupanlong','1edd1c1900025739035b50f32a6452b2','','武盘龙','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('29','1','wuxiaolu','1edd1c1900025739035b50f32a6452b2','','吴晓璐','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('30','1','yangjian','1edd1c1900025739035b50f32a6452b2','','杨剑','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('31','1','yangli','1edd1c1900025739035b50f32a6452b2','','杨丽','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('32','1','zhangqiong','1edd1c1900025739035b50f32a6452b2','','张琼','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('33','1','zhangzhenya','1edd1c1900025739035b50f32a6452b2','','张真亚','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('34','1','zhangzhiqiang','1edd1c1900025739035b50f32a6452b2','','张志强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('35','1','zhoukeke','1edd1c1900025739035b50f32a6452b2','','周可可','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('36','1','xuxin','1edd1c1900025739035b50f32a6452b2','','辛许','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('37','2','liuxia','1edd1c1900025739035b50f32a6452b2','','刘霞','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('38','2','qinwenlin','1edd1c1900025739035b50f32a6452b2','','秦文林','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('39','2','zhaoqingsong','1edd1c1900025739035b50f32a6452b2','','赵庆松','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('40','12','houdazhuang','1edd1c1900025739035b50f32a6452b2','','侯大壮','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('41','1','taoweiyan','1edd1c1900025739035b50f32a6452b2','','陶伟艳','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('42','1','zhaoyong','1edd1c1900025739035b50f32a6452b2','','赵勇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('43','3','hushuling','1edd1c1900025739035b50f32a6452b2','','胡淑玲','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('44','3','jixun','1edd1c1900025739035b50f32a6452b2','','蓟训','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('45','3','sunqi','1edd1c1900025739035b50f32a6452b2','','孙奇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('46','3','wangfenglan','1edd1c1900025739035b50f32a6452b2','','王凤兰','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('47','3','wangyilei','1edd1c1900025739035b50f32a6452b2','','王艺磊','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('48','3','yangchao','1edd1c1900025739035b50f32a6452b2','','杨超','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('49','3','zhangaiwei','1edd1c1900025739035b50f32a6452b2','','张爱伟','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('50','3','zhangshuwei','1edd1c1900025739035b50f32a6452b2','','张术维','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('51','4','liandong','1edd1c1900025739035b50f32a6452b2','','李安东','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','2','180.168.25.50','1543482730','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('52','4','liuxiuhong','1edd1c1900025739035b50f32a6452b2','','刘秀红','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('53','4','qiaojie','1edd1c1900025739035b50f32a6452b2','','乔杰','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('54','4','qiulingxia','1edd1c1900025739035b50f32a6452b2','','邱零霞','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('55','4','tangdong','1edd1c1900025739035b50f32a6452b2','','唐东','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('56','4','tangzhenqi','1edd1c1900025739035b50f32a6452b2','','唐真琦','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('57','4','tuorurong','1edd1c1900025739035b50f32a6452b2','','庹如蓉','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('58','4','wujun','1edd1c1900025739035b50f32a6452b2','','吴俊','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('59','4','wuqiangxiu','1edd1c1900025739035b50f32a6452b2','','吴强修','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('60','4','yanqiang','1edd1c1900025739035b50f32a6452b2','','晏强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('61','4','zhangbo','1edd1c1900025739035b50f32a6452b2','','张波','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('62','4','zhangyao','1edd1c1900025739035b50f32a6452b2','','张尧','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('63','4','zhuangxiaoping','1edd1c1900025739035b50f32a6452b2','','庄小萍','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('64','5','bihuan','1edd1c1900025739035b50f32a6452b2','','毕欢','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('65','5','chenweilan','1edd1c1900025739035b50f32a6452b2','','陈威兰','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('66','5','fanbao','1edd1c1900025739035b50f32a6452b2','','范豹','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('67','5','gaoshoubin','1edd1c1900025739035b50f32a6452b2','','高守兵','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('68','5','hanlei','1edd1c1900025739035b50f32a6452b2','','韩磊','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('69','5','hanlimei','1edd1c1900025739035b50f32a6452b2','','韩丽媚','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('70','5','jiakang','1edd1c1900025739035b50f32a6452b2','','贾康','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('71','5','wangtao','1edd1c1900025739035b50f32a6452b2','','王涛','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('72','5','xuzhenkui','1edd1c1900025739035b50f32a6452b2','','徐振魁','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('73','6','helijian','1edd1c1900025739035b50f32a6452b2','','贺利建','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('74','6','hufeng','1edd1c1900025739035b50f32a6452b2','','胡枫','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('75','6','niudeshuan','1edd1c1900025739035b50f32a6452b2','','牛德栓','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('76','6','songyang','1edd1c1900025739035b50f32a6452b2','','宋阳','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('77','6','sunrenyuan','1edd1c1900025739035b50f32a6452b2','','孙任远','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('78','6','tangyunhao','1edd1c1900025739035b50f32a6452b2','','唐云浩','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('79','6','wangguoan','1edd1c1900025739035b50f32a6452b2','','王国安','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('80','6','yangrenke','1edd1c1900025739035b50f32a6452b2','','杨仁苛','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('81','6','zhangcong','1edd1c1900025739035b50f32a6452b2','','张聪','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('82','6','zhengxiangping','1edd1c1900025739035b50f32a6452b2','','郑香平','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('83','7','chennianqiu','1edd1c1900025739035b50f32a6452b2','','陈年球','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('84','7','heshaoan','1edd1c1900025739035b50f32a6452b2','','何绍安','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('85','7','liujicheng','1edd1c1900025739035b50f32a6452b2','','刘继承','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('86','7','lixia','1edd1c1900025739035b50f32a6452b2','','李霞','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('87','7','ranxi','1edd1c1900025739035b50f32a6452b2','','冉曦','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('88','7','wangliyuan','1edd1c1900025739035b50f32a6452b2','','王丽媛','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('89','5','yuming','1edd1c1900025739035b50f32a6452b2','','于敏','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('90','8','chenyazhou','1edd1c1900025739035b50f32a6452b2','','陈亚洲','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','8','180.168.25.50','1543579271','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('91','8','chenzhaonan','1edd1c1900025739035b50f32a6452b2','','陈照楠','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('92','8','chuhongzhong','1edd1c1900025739035b50f32a6452b2','','褚宏中','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('93','8','cuishudong','1edd1c1900025739035b50f32a6452b2','','崔树栋','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('94','8','fanhaile','1edd1c1900025739035b50f32a6452b2','','范海乐','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('95','8','guofengxia','1edd1c1900025739035b50f32a6452b2','','郭丰霞','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('96','8','jinyuanyuan','1edd1c1900025739035b50f32a6452b2','','靳媛媛','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('97','8','licongya','1edd1c1900025739035b50f32a6452b2','','李丛雅','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('98','8','liushijiang','1edd1c1900025739035b50f32a6452b2','','刘世江','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('99','8','liuweiling','1edd1c1900025739035b50f32a6452b2','','刘卫岭','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('100','8','liyuping','1edd1c1900025739035b50f32a6452b2','','李玉萍','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('101','8','lizhuo','1edd1c1900025739035b50f32a6452b2','','李倬','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('102','8','lifeng','1edd1c1900025739035b50f32a6452b2','','陆峰','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('103','8','litingyu','1edd1c1900025739035b50f32a6452b2','','陆庭煜','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('104','8','luyong','1edd1c1900025739035b50f32a6452b2','','卢勇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('105','8','luzhenrui','1edd1c1900025739035b50f32a6452b2','','卢珍锐','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('106','8','mengke','1edd1c1900025739035b50f32a6452b2','','孟柯','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('107','8','renjing','1edd1c1900025739035b50f32a6452b2','','任静','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('108','8','shenying','1edd1c1900025739035b50f32a6452b2','','沈莹','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('109','8','shiyouqiang','1edd1c1900025739035b50f32a6452b2','','施友强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('110','8','shuyu','1edd1c1900025739035b50f32a6452b2','','疏宇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('111','8','xiangsheng','1edd1c1900025739035b50f32a6452b2','','项升','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('112','8','xuliang','1edd1c1900025739035b50f32a6452b2','','徐亮','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('113','8','yangcheng','1edd1c1900025739035b50f32a6452b2','','杨成','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('114','8','yangxuanwei','1edd1c1900025739035b50f32a6452b2','','杨宣炜','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('115','8','yaochao','1edd1c1900025739035b50f32a6452b2','','姚超','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('116','8','zouqinrong','1edd1c1900025739035b50f32a6452b2','','邹钦荣','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('117','9','fengxiaofeng','1edd1c1900025739035b50f32a6452b2','','冯小锋','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('118','9','liyuanjun','1edd1c1900025739035b50f32a6452b2','','黎苑筠','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('119','9','luxiaoting','1edd1c1900025739035b50f32a6452b2','','卢小婷','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('120','9','weijunqiang','1edd1c1900025739035b50f32a6452b2','','魏俊强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('121','9','yanrui','1edd1c1900025739035b50f32a6452b2','','严瑞','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('122','10','baiqiang','1edd1c1900025739035b50f32a6452b2','','白强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('123','10','chengyun','1edd1c1900025739035b50f32a6452b2','','程云','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('124','10','qinlongbo','1edd1c1900025739035b50f32a6452b2','','秦龙波','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('125','10','shiguoqiang','1edd1c1900025739035b50f32a6452b2','','史国强','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('126','10','shimengni','1edd1c1900025739035b50f32a6452b2','','史梦妮','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('127','10','shitieheng','1edd1c1900025739035b50f32a6452b2','','史铁恒','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('128','10','yangxu','1edd1c1900025739035b50f32a6452b2','','杨旭','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('129','10','zhanghaiyan','1edd1c1900025739035b50f32a6452b2','','张海燕','','','','0000-00-00','f','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('130','11','diaohongwei','1edd1c1900025739035b50f32a6452b2','','刁宏伟','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('131','11','lihuiyu','1edd1c1900025739035b50f32a6452b2','','李慧宇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('132','11','tianjue','1edd1c1900025739035b50f32a6452b2','','田珏','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('133','8','shiyingyong','1edd1c1900025739035b50f32a6452b2','','石应勇','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','180.168.25.50','1543482568','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('134','2','test','1edd1c1900025739035b50f32a6452b2','','测试','','123.aaa','','0000-00-00','m','lixingxing@yupei-scm.com','','','','','','','','','admin','2018-11-30','11','180.169.229.226','1544147353','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('135','2','test2','1edd1c1900025739035b50f32a6452b2','','测试2','','admin','','0000-00-00','m','','','','','','','','','','','2018-11-30','12','180.168.25.50','1544418550','0','0000-00-00 00:00:00','','0','0','0','offline');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`score`,`scoreLevel`,`deleted`,`status`) VALUES ('136','2','test3','1edd1c1900025739035b50f32a6452b2','','测试3','','admin','','0000-00-00','m','','','','','','','','','','admin','2018-12-03','5','180.168.25.50','1544154118','0','0000-00-00 00:00:00','','0','0','0','offline');
DROP TABLE IF EXISTS `zt_usercontact`;
CREATE TABLE `zt_usercontact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `listName` varchar(60) NOT NULL,
  `userList` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usergroup`;
CREATE TABLE `zt_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('abcd2','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('abcd5','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('abcd6','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('admin','1');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('baiqiang','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('bihuan','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chengyun','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenhuan','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chennianqiu','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenweilan','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenxiaoyan','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenyazhou','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenzhaonan','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chuhongzhong','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('cuishudong','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('diaohongwei','24');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanbao','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fangjuan','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanhaile','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fengxiaofeng','22');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fuhao','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('gaopengcheng','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('gaoshoubin','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('guoduanqiang','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('guoduanqiang','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('guofengxia','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('guojunfeng','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('hanlei','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('hanlimei','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('helijian','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('heshaoan','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('houdazhuang','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('huangjun','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('huangqin','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('hufeng','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('hushuling','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jiakang','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jianglina','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jinyuanyuan','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jixun','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liandong','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('licongya','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lifeng','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lihuiyu','24');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('litingyu','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liujicheng','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liushijiang','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuweiling','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxia','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxiuhong','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liwei','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lixia','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liyuanjun','22');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liyuping','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lizhuo','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luxiaoting','22');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luyong','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luzhenrui','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('maofeng','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('mengke','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('niudeshuan','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('panglinwei','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qiaojie','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qinlongbo','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qinwenlin','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qiulingxia','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('ranxi','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('renjing','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shaohuiling','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shenlei','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shenying','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shiguoqiang','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shimengni','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shitieheng','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shiyingyong','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shiyouqiang','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shuyu','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('songyang','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('sunqi','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('sunrenyuan','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tangdong','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tangyunhao','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tangzhenqi','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('taoweiyan','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('test','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('test2','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('test2','25');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('test3','25');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tianjue','24');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tuorurong','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wang.fang','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangfenglan','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangguoan','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wanghui','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangliyuan','21');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangtao','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangyilei','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('weijunqiang','22');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wujun','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wupanlong','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wuqiangxiu','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wuxiaolu','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wuyaojun','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xiangsheng','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuliang','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuxin','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuzhenkui','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangchao','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangcheng','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangjian','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangli','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangrenke','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangxu','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yangxuanwei','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yanqiang','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yanrui','22');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yaochao','13');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yumin','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yuming','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhafeiyan','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangaiwei','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangbo','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangcong','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhanghaiyan','23');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangqiong','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangshuwei','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangyao','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangzhenya','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangzhiqiang','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhaoqingsong','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhaoyong','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhengxiangping','20');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhenshiyu','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhoukeke','14');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhuangxiaoping','19');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zouqinrong','13');
DROP TABLE IF EXISTS `zt_userquery`;
CREATE TABLE `zt_userquery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(90) NOT NULL,
  `form` text NOT NULL,
  `sql` text NOT NULL,
  `shortcut` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usertpl`;
CREATE TABLE `zt_usertpl` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `type` char(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_userview`;
CREATE TABLE `zt_userview` (
  `account` char(30) NOT NULL,
  `products` mediumtext NOT NULL,
  `projects` mediumtext NOT NULL,
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('admin','1,2,3','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd','1','1');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd2','1','1');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd3','1','1');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd4','1','1');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd5','1','1,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('abcd6','1','1,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('huangjun','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chenhuan','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('guojunfeng','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('jianglina','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('maofeng','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shaohuiling','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shenlei','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wuyaojun','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhenshiyu','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhafeiyan','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chenxiaoyan','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('fangjuan','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('fuhao','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('gaopengcheng','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('guoduanqiang','1,2','1,3,5,6');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('huangqin','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liwei','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('panglinwei','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wang.fang','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wanghui','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wupanlong','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wuxiaolu','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangjian','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangli','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangqiong','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangzhenya','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangzhiqiang','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhoukeke','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('xuxin','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liuxia','1','1,6');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('qinwenlin','1','1,6');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhaoqingsong','1','1,6');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('houdazhuang','1,3','1,2,4,9,8,7,6,5,10,11,12,13,14,15,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('taoweiyan','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhaoyong','1,2','1,3,5');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('hushuling','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('jixun','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('sunqi','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wangfenglan','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wangyilei','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangchao','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangaiwei','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangshuwei','1','1,7');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liandong','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liuxiuhong','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('qiaojie','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('qiulingxia','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('tangdong','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('tangzhenqi','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('tuorurong','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wujun','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wuqiangxiu','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yanqiang','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangbo','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangyao','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhuangxiaoping','1','1,8');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('bihuan','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chenweilan','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('fanbao','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('gaoshoubin','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('hanlei','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('hanlimei','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('jiakang','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wangtao','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('xuzhenkui','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('helijian','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('hufeng','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('niudeshuan','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('songyang','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('sunrenyuan','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('tangyunhao','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wangguoan','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangrenke','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhangcong','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhengxiangping','1','1,10');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chennianqiu','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('heshaoan','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liujicheng','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('lixia','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('ranxi','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('wangliyuan','1','1,11');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yuming','1','1,9,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chenyazhou','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chenzhaonan','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chuhongzhong','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('cuishudong','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('fanhaile','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('guofengxia','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('jinyuanyuan','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('licongya','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liushijiang','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liuweiling','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liyuping','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('lizhuo','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('lifeng','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('litingyu','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('luyong','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('luzhenrui','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('mengke','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('renjing','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shenying','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shiyouqiang','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shuyu','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('xiangsheng','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('xuliang','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangcheng','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangxuanwei','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yaochao','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zouqinrong','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('fengxiaofeng','1','1,13');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('liyuanjun','1','1,13');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('luxiaoting','1','1,13');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('weijunqiang','1','1,13');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yanrui','1','1,13');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('baiqiang','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('chengyun','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('qinlongbo','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shiguoqiang','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shimengni','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shitieheng','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('yangxu','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('zhanghaiyan','1','1,14');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('diaohongwei','1','1,15');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('lihuiyu','1','1,15');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('tianjue','1','1,15');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('shiyingyong','1','1,12');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('test','1','1,6');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('test2','1','1,6,16');
INSERT INTO `zt_userview`(`account`,`products`,`projects`) VALUES ('test3','1','1,6,16');
DROP TABLE IF EXISTS `zt_webhook`;
CREATE TABLE `zt_webhook` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL DEFAULT 'default',
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `contentType` varchar(30) NOT NULL DEFAULT 'application/json',
  `sendType` enum('sync','async') NOT NULL DEFAULT 'sync',
  `products` text NOT NULL,
  `projects` text NOT NULL,
  `params` varchar(100) NOT NULL,
  `actions` text NOT NULL,
  `desc` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
