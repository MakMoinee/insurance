/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80029
 Source Host           : localhost:3306
 Source Schema         : insurancedb

 Target Server Type    : MySQL
 Target Server Version : 80029
 File Encoding         : 65001

 Date: 09/08/2022 21:59:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for collections
-- ----------------------------
DROP TABLE IF EXISTS `collections`;
CREATE TABLE `collections`  (
  `collectionID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `or` int NULL DEFAULT NULL,
  `ordate` date NULL DEFAULT NULL,
  `amountpaid` double(8, 2) NOT NULL,
  `memberID` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`collectionID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of collections
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for iusers
-- ----------------------------
DROP TABLE IF EXISTS `iusers`;
CREATE TABLE `iusers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uType` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of iusers
-- ----------------------------
INSERT INTO `iusers` VALUES (1, 'mak', 'mak', 1, '2022-08-07 19:53:24', '2022-08-07 19:53:28');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `memberID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNum` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilStat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthPlace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mop` int NOT NULL,
  `birthDate` date NULL DEFAULT NULL,
  `plan` int NOT NULL,
  `dep1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep8` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep9` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dep10` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `amount` double(8, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`memberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of members
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_07_26_155318_create_iusers_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_07_27_151258_create_members_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_08_04_140345_create_plans_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_08_06_143034_create_collections_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_08_07_062440_create_staffs_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_08_07_063733_create_user_types_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

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

-- ----------------------------
-- Table structure for staffs
-- ----------------------------
DROP TABLE IF EXISTS `staffs`;
CREATE TABLE `staffs`  (
  `staffID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roledesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `contactNumber` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateHired` date NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`staffID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staffs
-- ----------------------------

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `uType` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` tinyint(1) NOT NULL,
  `collections` tinyint(1) NOT NULL,
  `plans` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uType`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'Administrator', 1, 1, 1, '2022-08-07 19:54:33', '2022-08-07 19:54:37');
INSERT INTO `user_types` VALUES (2, 'Collector', 1, 0, 0, '2022-08-07 12:12:13', '2022-08-07 12:12:13');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- View structure for vwactiveplan
-- ----------------------------
DROP VIEW IF EXISTS `vwactiveplan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwactiveplan` AS select `plans`.`planID` AS `planID`,`plans`.`description` AS `description`,`plans`.`amount` AS `amount`,`plans`.`status` AS `status`,`plans`.`created_at` AS `created_at`,`plans`.`updated_at` AS `updated_at` from `plans` where (`plans`.`status` <> 2);

-- ----------------------------
-- View structure for vwcollections
-- ----------------------------
DROP VIEW IF EXISTS `vwcollections`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwcollections` AS select `collections`.`collectionID` AS `collectionID`,concat(`members`.`firstName`,' ',`members`.`middleName`,' ',`members`.`lastName`) AS `FullName`,`collections`.`or` AS `or`,`collections`.`ordate` AS `ordate`,`collections`.`amountpaid` AS `amountpaid`,`members`.`memberID` AS `memberID`,`collections`.`created_at` AS `created_at` from (`collections` join `members` on((`collections`.`memberID` = `members`.`memberID`)));

-- ----------------------------
-- View structure for vwfullnames
-- ----------------------------
DROP VIEW IF EXISTS `vwfullnames`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwfullnames` AS select distinct concat(`members`.`firstName`,' ',`members`.`middleName`,' ',`members`.`lastName`) AS `FullName` from `members`;

-- ----------------------------
-- View structure for vwroles
-- ----------------------------
DROP VIEW IF EXISTS `vwroles`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwroles` AS select `user_types`.`uType` AS `uType`,`user_types`.`description` AS `description`,`user_types`.`members` AS `members`,`user_types`.`collections` AS `collections`,`user_types`.`plans` AS `plans`,`user_types`.`created_at` AS `created_at`,`user_types`.`updated_at` AS `updated_at` from `user_types` where (`user_types`.`uType` <> 1);

-- ----------------------------
-- View structure for vwtotalcollections
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalcollections`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalcollections` AS select sum(`collections`.`amountpaid`) AS `TotalCollections` from `collections`;

-- ----------------------------
-- View structure for vwtotalmembers
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalmembers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalmembers` AS select count(`members`.`memberID`) AS `TotalMembers` from `members`;

-- ----------------------------
-- View structure for vwtotalnewmembers
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalnewmembers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalnewmembers` AS select count(`members`.`memberID`) AS `TotalNewMembers` from `members` where (month(`members`.`created_at`) = month(now()));

SET FOREIGN_KEY_CHECKS = 1;
