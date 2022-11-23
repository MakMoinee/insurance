/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : insurancedb

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 17/11/2022 02:51:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for plans
-- ----------------------------
DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans`  (
  `planID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8, 2) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`planID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of plans
-- ----------------------------
INSERT INTO `plans` VALUES (1, 'Orchids Package', 30000.00, 1, '2022-08-04 22:16:51', '2022-08-04 22:16:54');
INSERT INTO `plans` VALUES (2, 'Sunflower Package with Memorial Services', 40000.00, 1, '2022-08-04 22:22:05', '2022-08-04 22:22:08');
INSERT INTO `plans` VALUES (3, 'Anthurium Package with Memorial Services', 50000.00, 1, '2022-08-04 22:22:52', '2022-08-04 22:22:56');
INSERT INTO `plans` VALUES (4, 'Rose Package with Memorial Services', 100000.00, 1, '2022-08-04 22:23:19', '2022-08-04 22:23:24');
INSERT INTO `plans` VALUES (5, 'Sampaguita Package with Memorial Services', 150000.00, 1, '2022-08-04 22:23:46', '2022-08-04 22:23:49');

SET FOREIGN_KEY_CHECKS = 1;
