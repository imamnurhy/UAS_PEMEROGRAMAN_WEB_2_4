/*
 Navicat Premium Data Transfer

 Source Server         : root@127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80029
 Source Host           : 127.0.01:3306
 Source Schema         : app_uas

 Target Server Type    : MySQL
 Target Server Version : 80029
 File Encoding         : 65001

 Date: 07/07/2022 23:05:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jenis_zakat
-- ----------------------------
DROP TABLE IF EXISTS `jenis_zakat`;
CREATE TABLE `jenis_zakat` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nm_zakat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_zakat
-- ----------------------------
BEGIN;
INSERT INTO `jenis_zakat` (`id`, `nm_zakat`) VALUES (1, 'Zakat Penghasilan');
INSERT INTO `jenis_zakat` (`id`, `nm_zakat`) VALUES (2, 'Zakat Maal');
INSERT INTO `jenis_zakat` (`id`, `nm_zakat`) VALUES (3, 'Zakat Fitrah');
COMMIT;

-- ----------------------------
-- Table structure for pembayaran_zakat
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran_zakat`;
CREATE TABLE `pembayaran_zakat` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenis_zakat_id` int unsigned DEFAULT NULL,
  `nominal` int DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telpn` char(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rek_bank` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembayaran_zakat
-- ----------------------------
BEGIN;
INSERT INTO `pembayaran_zakat` (`id`, `jenis_zakat_id`, `nominal`, `nama`, `telpn`, `email`, `bank`, `rek_bank`) VALUES (1, 1, 100000, 'Imam Nurhidayat', '0821289300', 'imam@gmail.com', 'Mandiri', '12342438');
INSERT INTO `pembayaran_zakat` (`id`, `jenis_zakat_id`, `nominal`, `nama`, `telpn`, `email`, `bank`, `rek_bank`) VALUES (2, 1, 150000, 'Ikbal', '082837437728', 'ikbal@gmail.com', 'BNI', '2341234809');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES (1, 'Imam Nurhidayat', 'admin', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
