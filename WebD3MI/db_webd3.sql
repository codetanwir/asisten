/*
Navicat MySQL Data Transfer

Source Server         : tanwir
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : db_webd3

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2018-01-06 18:21:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mahasiswa`;
CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_mahasiswa
-- ----------------------------
INSERT INTO `tbl_mahasiswa` VALUES ('1', 'Budi Budi', 'mataram', 'P', 'S1TI');
INSERT INTO `tbl_mahasiswa` VALUES ('2', 'Budi Anduk', 'mataram', 'P', 'S1TI');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('admin','operator','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');
INSERT INTO `tbl_user` VALUES ('2', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');
INSERT INTO `tbl_user` VALUES ('3', 'tanwir', '2833b6943bdacc9aac3d5346fde1f267', 'admin');
