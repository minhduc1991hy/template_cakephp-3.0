/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : newsky_cakephp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-22 01:08:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` tinyint(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` char(10) NOT NULL,
  `country` char(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `users_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Bảng thành viên';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('6', '1', 'admin', 'Nguyễn Hữu Đức', '0', 'nguyenhuuduc.it.1991@gmail.com', '19/09/1991', 'vn', '$2y$10$RdII.uIHztMqw2p9HWAaCuWlMAueGiChWEqHFCi5kT8meFJ8DGSWC', '2017-05-22 08:00:17', '2017-05-22 08:00:17');

-- ----------------------------
-- Table structure for users_roles
-- ----------------------------
DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `inherit` tinyint(3) DEFAULT NULL,
  `special` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_roles
-- ----------------------------
INSERT INTO `users_roles` VALUES ('1', 'Administrator', '0', '1');
INSERT INTO `users_roles` VALUES ('2', 'Thành viên', '0', '1');
INSERT INTO `users_roles` VALUES ('3', 'Khách hàng', '0', '1');

-- ----------------------------
-- Table structure for users_roles_settings
-- ----------------------------
DROP TABLE IF EXISTS `users_roles_settings`;
CREATE TABLE `users_roles_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` tinyint(5) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `default` text,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_roles_settings_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `users_roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_roles_settings
-- ----------------------------
