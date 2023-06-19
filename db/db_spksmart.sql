/*
 Navicat Premium Data Transfer

 Source Server         : laragon-mysql
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : db_spksmart

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 21/09/2020 22:29:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Administrator', 'admin', 'admin');

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria`  (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` int(11) NOT NULL,
  PRIMARY KEY (`id_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
INSERT INTO `kriteria` VALUES (1, 'Nilai Akademik', 80);
INSERT INTO `kriteria` VALUES (2, 'Nilai Mata Pelajaran', 100);
INSERT INTO `kriteria` VALUES (3, 'Nilai Kepribadian', 50);
INSERT INTO `kriteria` VALUES (4, 'nilai sosial', 70);
INSERT INTO `kriteria` VALUES (5, 'nilai sosial', 70);
INSERT INTO `kriteria` VALUES (6, 'nilai sosial', 70);
INSERT INTO `kriteria` VALUES (7, 'loncatan', 5);
INSERT INTO `kriteria` VALUES (8, 'loncatan', 5);
INSERT INTO `kriteria` VALUES (9, 'karate', 90);
INSERT INTO `kriteria` VALUES (10, 'fdsfd', 434);
INSERT INTO `kriteria` VALUES (11, 'loncatan', 5);

-- ----------------------------
-- Table structure for penilaian
-- ----------------------------
DROP TABLE IF EXISTS `penilaian`;
CREATE TABLE `penilaian`  (
  `id_penilaian` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ltbt` int(11) NOT NULL,
  `lbb` int(11) NOT NULL,
  `lt` int(11) NOT NULL,
  `lk` int(11) NOT NULL,
  `l40m` int(11) NOT NULL,
  `mft` int(11) NOT NULL,
  `cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`) USING BTREE,
  UNIQUE INDEX `nisn`(`nisn`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penilaian
-- ----------------------------
INSERT INTO `penilaian` VALUES (16, '12344', 5, 4, 4, 4, 7, 9, NULL);
INSERT INTO `penilaian` VALUES (43, '12345', 2, 5, 2, 3, 5, 2, NULL);
INSERT INTO `penilaian` VALUES (45, '1010', 5, 4, 4, 4, 4, 4, NULL);
INSERT INTO `penilaian` VALUES (46, '2222', 5, 4, 4, 4, 4, 4, NULL);
INSERT INTO `penilaian` VALUES (47, '123445', 3, 5, 5, 2, 2, 1, NULL);
INSERT INTO `penilaian` VALUES (48, '492901', 8, 5, 3, 5, 7, 9, NULL);
INSERT INTO `penilaian` VALUES (49, '9999', 5, 5, 6, 4, 6, 5, 'TIDAK ADA CABANG');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `umur` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_siswa`) USING BTREE,
  UNIQUE INDEX `nisn`(`nisn`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (9, '09123', 'Ahmad Kun', 'Laki-Laki', '9', 'MA 99 Sumut');
INSERT INTO `siswa` VALUES (15, '12344', 'Rosa', 'Perempuan', '9', 'ygjjh');
INSERT INTO `siswa` VALUES (16, '123445', 'tdrtdr', 'Laki-Laki', '8', 'fgftf');
INSERT INTO `siswa` VALUES (17, '123456', 'alus', 'Perempuan', '8', 'sadjsajdklsdjfd');
INSERT INTO `siswa` VALUES (20, '888', 'yuni', 'Perempuan', '12', 'uin');
INSERT INTO `siswa` VALUES (22, '2222', 'Rosa', 'Laki-Laki', '15', 'man 1');
INSERT INTO `siswa` VALUES (23, '1010', 'noni', 'Perempuan', '12', 'sman1');
INSERT INTO `siswa` VALUES (24, '333', 'ffrg', 'Laki-Laki', '12', 'ffg');
INSERT INTO `siswa` VALUES (25, '12345', 'ckck', 'Laki-Laki', '13', 'man2');
INSERT INTO `siswa` VALUES (26, '77', 'hhjhgh', 'Laki-Laki', '12', 'hhgh');
INSERT INTO `siswa` VALUES (27, '1122', 'kkkkk', 'Laki-Laki', '12', 'sma2');
INSERT INTO `siswa` VALUES (28, '492901', 'fauzan', 'Laki-Laki', '8', 'MAN 1');
INSERT INTO `siswa` VALUES (29, '9999', 'fauzi', 'Laki-Laki', '13', 'MIN 2');

SET FOREIGN_KEY_CHECKS = 1;
