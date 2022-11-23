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

 Date: 23/11/2022 17:24:32
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
  `collector` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`collectionID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of collections
-- ----------------------------
INSERT INTO `collections` VALUES (4, 100123, '2022-09-26', 1000.00, 1, 'Simon', '2022-09-26 03:45:01', '2022-09-26 03:45:01');
INSERT INTO `collections` VALUES (5, 10002222, '2022-09-26', 2000.00, 3, 'Simon', '2022-09-26 03:47:14', '2022-09-26 03:47:14');
INSERT INTO `collections` VALUES (6, 0, '2022-09-25', 100.00, 6, 'JULIE LINDABAN', '2022-10-07 07:26:19', '2022-10-07 07:26:19');
INSERT INTO `collections` VALUES (7, NULL, '2022-09-25', 100.00, 6, 'JULIE LINDABAN', '2022-10-07 07:26:30', '2022-10-07 07:26:30');
INSERT INTO `collections` VALUES (8, 1, '2021-11-03', 1000.00, 1, 'Simon', '2022-11-03 06:38:32', '2022-11-03 06:38:32');
INSERT INTO `collections` VALUES (9, 1, '2021-12-12', 6000.00, 65, 'JULIE', '2022-11-03 06:56:22', '2022-11-03 06:56:22');
INSERT INTO `collections` VALUES (10, 801, '2021-12-12', 6000.00, 65, 'JULIE', '2022-11-03 06:59:25', '2022-11-03 06:59:25');
INSERT INTO `collections` VALUES (11, 100123, '2022-01-03', 200.00, 1, 'Simon', '2022-11-03 07:08:18', '2022-11-03 07:08:18');
INSERT INTO `collections` VALUES (12, 100123, '2022-02-26', 200.00, 1, 'Simon', '2022-11-03 07:08:39', '2022-11-03 07:08:39');
INSERT INTO `collections` VALUES (13, 100123, '2022-04-26', 1000.00, 1, 'Simon', '2022-11-03 07:09:14', '2022-11-03 07:09:14');
INSERT INTO `collections` VALUES (14, 100123, '2022-05-02', 200.00, 1, 'Simon', '2022-11-03 07:09:41', '2022-11-03 07:09:41');
INSERT INTO `collections` VALUES (15, 100123, '2022-06-26', 350.00, 1, 'Simon', '2022-11-03 07:10:11', '2022-11-03 07:10:11');
INSERT INTO `collections` VALUES (16, 100123, '2022-07-26', 150.00, 1, 'Simon', '2022-11-03 07:10:31', '2022-11-03 07:10:31');
INSERT INTO `collections` VALUES (17, 100123, '2022-08-26', 100.00, 1, 'Simon', '2022-11-03 07:10:58', '2022-11-03 07:10:58');
INSERT INTO `collections` VALUES (18, 100123, '2022-09-26', 200.00, 1, 'Simon', '2022-11-03 07:11:23', '2022-11-03 07:11:23');
INSERT INTO `collections` VALUES (19, 100123, '2022-10-01', 1000.00, 1, 'Simon', '2022-11-03 07:11:54', '2022-11-03 07:11:54');
INSERT INTO `collections` VALUES (20, 100123, '2022-11-02', 200.00, 1, 'Simon', '2022-11-03 07:12:34', '2022-11-03 07:12:34');
INSERT INTO `collections` VALUES (21, 3103, '2022-10-30', 100.00, 66, 'PABLITO', '2022-11-03 08:16:10', '2022-11-03 08:16:10');
INSERT INTO `collections` VALUES (22, 3103, '2022-10-30', 20.00, 67, 'PABLITO', '2022-11-03 08:16:54', '2022-11-03 08:16:54');
INSERT INTO `collections` VALUES (23, 3103, '2022-10-30', 50.00, 68, 'PABLITO', '2022-11-03 08:17:42', '2022-11-03 08:17:42');
INSERT INTO `collections` VALUES (24, 3103, '2022-10-30', 100.00, 69, 'PABLITO', '2022-11-03 08:18:13', '2022-11-03 08:18:13');
INSERT INTO `collections` VALUES (25, 3103, '2022-10-30', 300.00, 70, 'PABLITO', '2022-11-03 08:18:48', '2022-11-03 08:18:48');
INSERT INTO `collections` VALUES (26, 3103, '2022-10-30', 100.00, 71, 'PABLITO', '2022-11-03 08:20:38', '2022-11-03 08:20:38');
INSERT INTO `collections` VALUES (27, 100123, '2022-11-09', 2000.00, 79, 'PABLITO', '2022-11-23 05:42:15', '2022-11-23 05:42:15');
INSERT INTO `collections` VALUES (28, 100123, '2022-11-10', 2000.00, 80, 'JERIHCO/PAULO', '2022-11-23 06:41:58', '2022-11-23 06:41:58');
INSERT INTO `collections` VALUES (29, 100123, '2022-11-10', 1200.00, 81, 'JERICHO/ PAULO', '2022-11-23 06:47:01', '2022-11-23 06:47:01');
INSERT INTO `collections` VALUES (30, 100123, '2022-11-23', 200.00, 82, 'MARVEN /MARLON', '2022-11-23 08:09:08', '2022-11-23 08:09:08');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of iusers
-- ----------------------------
INSERT INTO `iusers` VALUES (1, 'admin', 'admin123', 1, '2022-08-13 17:34:49', '2022-08-13 17:34:52');
INSERT INTO `iusers` VALUES (2, 'ken', 'ken', 3, '2022-08-16 12:24:51', '2022-08-16 12:24:51');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `memberID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresspurok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressbrgy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresscity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressprovince` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNum` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilStat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthPlace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebookAccount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES (1, 'Judelyn', 'Pueblo', 'Salvador', 'Purok 8', 'Sinayawan', 'Valencia City', 'Bukidnon', '09090464345', 'Married', 'Female', 'BPH Malaybalay', 'Iglesia Ni Cristo', '171', '45', NULL, 2, '1998-06-06', 2, 'Xander Ford', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40000.00, '2022-08-13 09:39:04', '2022-08-13 09:39:04');
INSERT INTO `members` VALUES (5, 'Joel', 'Saludez', 'Dahan', 'P-14', 'Batangan', 'Valencia City', 'Bukidnon', '09157468362', 'Married', 'Male', 'Tabuk Opol Misamis Oriental', 'Roman Catholic', '5', '79', NULL, 2, '1979-08-23', 1, 'Vinie S. Toring Wife', NULL, 'Kathlyn Jeane Dahan 18 Daugther', NULL, 'Mc Joel Dahan 16 Son', NULL, 'Celin Dahan13 Daugther', NULL, 'Perpetua Dahan 79 Mother', NULL, 30000.00, '2022-09-30 09:41:35', '2022-09-30 09:41:35');
INSERT INTO `members` VALUES (6, 'Amy Grace', 'Tigtig', 'Villasi', 'P-11', 'Batangan', 'Valencia City', 'Bukidnon', '09678811847', 'Married', 'Female', 'Kolambugao Lanao del Norte', 'Roman Catholic', '5', '50', NULL, 2, '1992-01-01', 1, 'Jim Silvy T.Villasi 11 Son', 'Leonardo E. Tigtig 59 Father', 'Myshviel Ann T. villari 10 Daugther', 'Adelyn, A. Tigtig 60 Mother', 'Silvy O. Villari Husband', 'Dick Michael A. Tigtig 29 Sibling', 'Honey Rose A. Tigtig 22 Sibling', 'Juny Cris T. Fajasilbo 26 Sibling', 'Leah Mae A. Tigtig 25 Sibling', 'Lanie Jane Tigtig 32 Sibling', 30000.00, '2022-09-30 09:53:13', '2022-09-30 09:53:13');
INSERT INTO `members` VALUES (7, 'Leonardo', 'Elopre', 'Tigtig', 'P-11', 'Batangan', 'Valencia City', 'Bukidnon', '09975772797', 'Married', 'Male', 'Kolambugao Lanao del Norte', 'Baptism', '5', '50', NULL, 2, '1962-12-02', 1, 'Adelyn Tigtig Wife', 'Lanie Jane Tigtig Daugther', 'Honey Rose Tigtig Daugther', NULL, 'Juvy Cris Fejanilbo Daugther', NULL, 'Dick Michael Tigtig Son', NULL, 'Amy Grace Tigtig Villasi Daugther', NULL, 30000.00, '2022-09-30 10:03:28', '2022-09-30 10:03:28');
INSERT INTO `members` VALUES (8, 'Nilda', 'Trases', 'Perez', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '09362128903', 'Married', 'Female', 'Sta Catalina Negros Oriental', 'Roman Catholic', '52', '52', NULL, 2, '1963-03-21', 1, 'Abel Perez 57 Husband', NULL, 'Philmer Perez 30 Son', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-09-30 10:55:07', '2022-09-30 10:55:07');
INSERT INTO `members` VALUES (9, 'Emily', 'Trases', 'Gutierrez', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09554187258', 'Married', 'Female', 'Valencia City', 'Roman Catholic', '5', '50', NULL, 2, '1972-04-02', 1, 'Roxel Gutierrez 45 husband', 'Shan anton Guiterrez', 'Ethel Joy 24 Daugther', NULL, 'Roxelle Anne 20 Daugther', NULL, 'Isedro Trases 71 Father', NULL, 'Merlinda, Trases 67 Mother', NULL, 30000.00, '2022-09-30 11:08:10', '2022-09-30 11:08:10');
INSERT INTO `members` VALUES (10, 'Luz', 'Trases', 'Sinagpulo', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09367710662', 'Married', 'Female', 'Valencia City', 'Roman Catholic', '53', '63', NULL, 2, '1961-05-17', 1, 'Melchor Sinagpulo', 'Genus Sinagpulo', 'Renante Sinagpulo', NULL, 'Loremie Quipit', NULL, 'Charmaine Tuso', NULL, 'Sherylmae Sinagpulo', NULL, 30000.00, '2022-09-30 11:14:33', '2022-09-30 11:14:33');
INSERT INTO `members` VALUES (11, 'Kenneth Lloyd', 'Colinares', 'Libres', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09367710662', 'Separated', 'Female', 'Kibawe Bukidnon', 'Roman Catholic', '55', '72', NULL, 2, '1993-09-08', 1, 'Sherylmae Sinagpulo 31 live in Partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-09-30 12:00:40', '2022-09-30 12:00:40');
INSERT INTO `members` VALUES (12, 'Pablita', 'Geraldero', 'Doctora', 'P-10', 'Doncarlos', 'Doncarlos', 'Bukidnon', '09971429017', 'Widow', 'Female', 'Doncarlos Bukidnon', 'Roman Catholic', '511', '40', NULL, 2, '1963-01-15', 1, 'Janice D. Logaber 34 anak', NULL, 'Ritche Doctora 31 anak', NULL, 'Ryan Doctora 25 anak', NULL, 'Lorogen Doctora 28 anak', NULL, 'Al Rewen Doctora 22 anak', NULL, 30000.00, '2022-10-04 02:03:49', '2022-10-04 02:03:49');
INSERT INTO `members` VALUES (13, 'Edraline', 'Pareño', 'Gumban', 'P-4', 'Bocboc', 'Doncarlos', 'Bukidnon', '09655970805', 'Single', 'Female', 'Bocboc Doncarlos Bukidnon', 'Roman Catholic', '511', '40', NULL, 2, '1991-03-10', 1, 'Elsa Gumban', 'Jayson P. Gumban', 'Karel P. Gumban', NULL, 'Elgie Carl P. Gumban', NULL, 'Elme Jane Donal', NULL, 'Ken Anthony Gumban', NULL, 30000.00, '2022-10-04 02:10:43', '2022-10-04 02:10:43');
INSERT INTO `members` VALUES (14, 'Gloria', 'Alisoso', 'Magdaluyo', 'P-4', 'Bocboc', 'Doncarlos', 'Bukidnon', '09167468262', 'Married', 'Female', 'Salawagan Quezon Bukidnon', 'Roman Catholic', '411', '50', NULL, 2, '1979-05-21', 1, 'Juluis H. Magdaluyo 46 Husband', NULL, 'Frances Adrien Magdaluyo 21 Anak', NULL, 'Julius Vincent Magdaluyo 19 anak', NULL, 'Juliane Claire Magdaluyo', NULL, 'Rosa Alisoso', NULL, 30000.00, '2022-10-04 02:31:14', '2022-10-04 02:31:14');
INSERT INTO `members` VALUES (15, 'Rowena', 'Portal', 'Juevesano', 'P-4', 'Malipayon', 'Pangantucan', 'Bukidnon', '09263270188', 'Single', 'Female', 'Tugbok Davao City', 'Roman Catholic', '511', '84', NULL, 2, '1970-10-11', 1, 'Aida P. Juevesano 76 Mother', 'Ashley Juevesano Grandchildren', 'Elesio P. Juevesano 52 Brother', NULL, 'Elizalde P. Juevesano 50 Brother', NULL, 'Mae Ann P. Juevesano 25 Daughter', NULL, 'Kristine Juevesano 18 Dauther', NULL, 30000.00, '2022-10-04 02:37:48', '2022-10-04 02:37:48');
INSERT INTO `members` VALUES (16, 'Jenelyn', 'Besa', 'Azuelo', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '0965053757', 'Married', 'Female', 'Cadi City Negros Occidental', 'Roman Catholic', '53', '78', NULL, 2, '1982-11-28', 1, 'Ronilo Azuelo 39 Husband', 'Romeo Azuelo 64 Father in law', 'Jenie Azuelo 20 Son', NULL, 'Renz lowie Azuelo 14 Son', NULL, 'Lisette Azuelo 11 daughter', NULL, 'Claudina Azuelo 61 Mother in law', NULL, 30000.00, '2022-10-04 02:44:55', '2022-10-04 02:44:55');
INSERT INTO `members` VALUES (17, 'Venus', 'Besa', 'Sorrosa', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09678857738', 'Married', 'Female', 'Cadi City Negros Occidental', 'Roman Catholic', '52', '49', NULL, 2, '1973-07-22', 1, 'Cirilo Sorrosa 47 Husband', NULL, 'Lezel Besa 31in low', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-04 02:49:22', '2022-10-04 02:49:22');
INSERT INTO `members` VALUES (18, 'Cirilo', 'Aribal', 'Sorrosa', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09678857738', 'Married', 'Male', 'Aclan Ibahay', 'Roman Catholic', '52', '50', NULL, 2, '1975-05-12', 1, 'Nestor Besa 55 Brother', NULL, 'Venus Sorrosa 49 Wife', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-04 02:52:28', '2022-10-04 02:52:28');
INSERT INTO `members` VALUES (19, 'Elizar', 'Oleverio', 'Umbao', 'P-6', 'San Carlos', 'Valencia City', 'Bukidnon', '09367481308', 'Married', 'Male', 'Valencia City', 'Roman Catholic', '52', '50', NULL, 2, '1977-04-30', 1, 'Liezel B. Umbao B.45WIFE', NULL, 'Euliezamae B.Umbao 23 daughter', NULL, 'Cherry jean B,Umbao', NULL, 'Cherhe-an B. Umbao', NULL, 'Xyrel B. Umbao', NULL, 30000.00, '2022-10-04 04:48:10', '2022-10-04 04:48:10');
INSERT INTO `members` VALUES (20, 'Expidito', 'Capu-an Jr', 'Besa', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09568468808', 'Married', 'Male', 'Cadi City Negros Occidental', 'Roman Catholic', '54', '70', NULL, 2, '1961-07-23', 1, 'Jinelyn Azuelo 39', NULL, 'Expedito Besa 37', NULL, 'Ginalyn Grave 36', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-05 05:36:17', '2022-10-05 05:36:17');
INSERT INTO `members` VALUES (21, 'Lourdes', 'Grave', 'Belera', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09351972900', 'Widow', 'Female', 'Cadiz City Negros Occidental', 'Roman Catholic', '51', '56', NULL, 2, '1949-05-15', 1, 'Lory Jean B. Montases-Daughter', 'Leo G. Belera - Son', 'Charon B. Gamboa- Daughterer', 'Allen Aranas- Daughter', 'Lennie Belera -Daughter', 'Aireen Balicbalic-Daughter', 'Reno G. Belera -Son', NULL, 'Rena G. Belera - Daughter', NULL, 30000.00, '2022-10-05 05:44:51', '2022-10-05 05:44:51');
INSERT INTO `members` VALUES (22, 'Laura', 'Demonteverde', 'Dahuya', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09161819243', 'Married', 'Female', 'Cadiz City Negros Occidental', 'Roman Catholic', '51', '57', NULL, 2, '1962-10-28', 1, 'William Dahuya', NULL, 'Wilma Sorlaga', NULL, 'Wilfredo Dahuya', NULL, 'Wilberi Dahuya', NULL, 'Wina Dahuya', NULL, 30000.00, '2022-10-05 05:51:18', '2022-10-05 05:51:18');
INSERT INTO `members` VALUES (23, 'Amalia', 'Dejoras', 'Meraiz', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '0975117819', 'Widow', 'Female', 'South Cotabato Gland', 'Roman Catholic', '-52', '55', NULL, 2, '1971-12-29', 1, 'Melmen Meraiz 31- Children', NULL, 'Bambie Arive 26-Children', NULL, 'Romero Meraiz 22-Children', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-05 05:57:05', '2022-10-05 05:57:05');
INSERT INTO `members` VALUES (24, 'Manilyn', 'Roble', 'Meraiz', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09757117819', 'Married', 'Female', 'Eligan Lanao del Sur', 'Roman Catholic', '51', '53', NULL, 2, '1995-04-16', 1, 'Remo Meraiz 40-Husband', NULL, 'Zachariatt', NULL, 'Khasha Meraiz 7- Daughter', NULL, 'Kyla Meraiz 5- Daughter', NULL, NULL, NULL, 30000.00, '2022-10-05 06:00:59', '2022-10-05 06:00:59');
INSERT INTO `members` VALUES (25, 'Sherlyta', 'Celiz', 'Meraiz', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09059239481', 'Married', 'Female', 'Valencia City', 'Roman Catholic', '53', '65', NULL, 2, '1968-01-24', 1, 'Roque Meraiz 53-husband', NULL, 'Rochelle Amorio 27-Children', NULL, 'Krissel Mae Meraiz 23- children', NULL, 'Christine Erica Meraiz 16- children', NULL, NULL, NULL, 30000.00, '2022-10-05 06:05:06', '2022-10-05 06:05:06');
INSERT INTO `members` VALUES (26, 'Madelyn', 'Soriaga', 'Puertas', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09059239481', 'Married', 'Female', 'Manapla Negros Occidental', 'Roman Catholic', '52', '62', NULL, 2, '1961-02-03', 1, 'Jayvar Selma 26-children', NULL, 'Sabilyn Odal 42-children', NULL, 'Sabino Puertas 40-children', NULL, 'Jay an Colliamat 36-children', NULL, NULL, NULL, 30000.00, '2022-10-05 06:09:33', '2022-10-05 06:09:33');
INSERT INTO `members` VALUES (27, 'Herminia', 'Eniosa', 'Waminal', 'P-17', 'Hindangon', 'Valencia City', 'Bukidnon', '09531545499', 'Married', 'Female', 'Hindangon Valencia City', 'Roman Catholic', '411', '52', NULL, 2, '1965-12-05', 1, 'Jose T. Waminal- 57', NULL, 'Norhoney Raya -37', NULL, 'Joshua Waminal- 27', NULL, 'MaryJoy Waminal -25', NULL, NULL, NULL, 30000.00, '2022-10-05 06:14:31', '2022-10-05 06:14:31');
INSERT INTO `members` VALUES (28, 'Dina', 'Colonia', 'Besa', 'P-3', 'San Antoneo', 'Doncarlos', 'Bukidnon', '09262500828', 'Married', 'Female', 'Manlamonay Doncarlos', 'Roman Catholic', '52', '65', NULL, 2, '1969-02-02', 1, 'Wethe Jean Besa 32- Daughter', NULL, 'Mark Besa 29- Son', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-05 06:18:26', '2022-10-05 06:18:26');
INSERT INTO `members` VALUES (29, 'Janny', 'Cayetano', 'Victoriano', 'P-3B', 'Magsaysay', 'MARAMAG', 'Bukidnon', '09514876760', 'Married', 'Male', 'Adtuyon Pangantucan', 'Roman Catholic', '53', '82', NULL, 2, '1974-05-21', 1, 'Janeth Victoriano 46-wife', NULL, 'Janece Victoriano 27-Daughter', NULL, 'Janny Victoriano 22-Daughter', NULL, 'Janine Victoriano 4-', NULL, NULL, NULL, 30000.00, '2022-10-06 07:48:57', '2022-10-06 07:48:57');
INSERT INTO `members` VALUES (30, 'Dante', 'Verdida', 'Canama', 'P-14', 'Batangan', 'Valencia City', 'Bukidnon', '09533964116', 'Separated', 'Male', 'Batangan', 'Roman Catholic', '53', '50', NULL, 2, '1980-03-21', 1, 'Eva Landuay Nesnia 39- Wife', 'Rey Landuay Nesnia 36-brother inlaw', 'Ediboy Nesnia 19- Son', 'Dinnes Landuay Nesnia 30-Brother inlaw', 'Catherine Nesnia 17-Daughter', 'Jhon Mark Landuay Nesnia 16-brother inlaw', 'Hipolito Canama 72- Father', 'Jhon Ray Landuay Nesnia 15-Brotherinlaw', 'Rosa Paslohan Landuay 69-Mother Inlaw', 'Kiesha Mae Landuay Nesnia 9-', 30000.00, '2022-10-06 08:46:23', '2022-10-06 08:46:23');
INSERT INTO `members` VALUES (31, 'Lolita', 'Quiñopa', 'Vercede', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', '09056465437', 'Married', 'Male', 'Batangan', 'IGLESIA NI CRISTO', '5', '50', NULL, 2, '1959-02-12', 1, 'Sabino Vercede', 'Wilfredo Vercede', 'Jenny-Vi Vercede', 'Emeliza Vercede', 'Argie Vercede', NULL, 'Liezl Vercede', NULL, 'Robby Vercede', NULL, 30000.00, '2022-10-06 08:54:53', '2022-10-06 08:54:53');
INSERT INTO `members` VALUES (32, 'Rafael', 'Magdadaro', 'Toring', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', '09068588489', 'Married', 'Male', 'Bugo Cebu City', 'Baptism', '59', '85', NULL, 2, '1952-08-20', 1, 'Jocelyn Toring', NULL, 'Juliet Toring', NULL, 'John Rey Toring', NULL, 'Roselyn Toring', NULL, 'Raymond Jeff Toring', NULL, 30000.00, '2022-10-06 09:06:08', '2022-10-06 09:06:08');
INSERT INTO `members` VALUES (33, 'Rolando', 'Lopez', 'Bulaquiña Sr', 'P-10', 'Batangan', 'Valencia City', 'Bukidnon', '09355776136', 'Married', 'Male', 'Butuan Catholic', 'Roman Catholic', '52', '73', NULL, 2, '1961-05-11', 1, 'Irish Mae Bulaquiña', NULL, 'Rolando Bulaquiña Jr', NULL, 'Herolyn Bulaquiña', NULL, 'Roanet Bulaquiña', NULL, 'Ruel Bulaquiña', NULL, 30000.00, '2022-10-06 09:32:25', '2022-10-06 09:32:25');
INSERT INTO `members` VALUES (34, 'Anita', 'Torres', 'Dangan', 'P-11', 'Batangan', 'Valencia City', 'Bukidnon', '09679360763', 'Married', 'Female', 'Cabacan North Cotabato', 'Roman Catholic', '52', '50', NULL, 2, '1967-01-17', 1, 'Jhoan T. Dangan 23-Daughter', 'Rigine T. Ramos', 'Analou T. Dangan 21-Daughter', 'Darwen T. Galleno', 'Maricel T. lumilang', NULL, 'Marlon T. Lumilang', NULL, 'Gilbert T.Galleno', NULL, 30000.00, '2022-10-06 09:40:41', '2022-10-06 09:40:41');
INSERT INTO `members` VALUES (35, 'Jommarlou', 'Taborada', 'Maiso', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '096752422905', 'Single', 'Male', 'Doncarlos Bukidnon', 'Roman Catholic', '48', '55', NULL, 1, '1983-11-01', 2, 'Claudio Maiso 58-father', NULL, 'Romel Maiso 25-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40000.00, '2022-10-06 10:37:45', '2022-10-06 10:37:45');
INSERT INTO `members` VALUES (36, 'Lucresia', 'Mongaya', 'Gabas', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09651923911', 'Widow', 'Female', 'P-15 Batangan Valencia City', 'Roman Catholic', '160', '54', NULL, 2, '1958-11-23', 1, 'Rosalie M. Gabas 38-daughter', NULL, 'Rex B. Telen 41-', NULL, 'Vanessa Jane Gabas 18-Grandchild', NULL, 'RomelM. Gabas', NULL, 'Rocelyn G. Nacario 33-daughter', NULL, 30000.00, '2022-10-06 10:44:01', '2022-10-06 10:44:01');
INSERT INTO `members` VALUES (37, 'Evelyn', 'Alicos', 'Almodal', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09066418445', 'Married', 'Female', 'Dologon Maramag Bukidnon', 'Roman Catholic', '511', '50', NULL, 2, '1987-10-22', 1, 'Noel Almodal', 'Emeliano Alicos', 'Niel Jhon Almodal', NULL, 'Glaiza Jean Almodal', NULL, 'Prindo Iran Almodal', NULL, 'Estrela Alicos', NULL, 30000.00, '2022-10-06 10:48:44', '2022-10-06 10:48:44');
INSERT INTO `members` VALUES (38, 'Renante', 'Trases', 'Sinagpulo', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09356239065', 'Single', 'Male', 'P-15 Batangan Valencia City', 'Roman Catholic', '56', '80', NULL, 2, '1983-11-05', 1, 'Melchor Sinagpulo 61-father', 'Sheryl Mae Sinagpulo 30-Sister', 'Luz Sinagpulo 60-mother', 'Charlie Tuso- Nephew', 'Lorien Quipit 37-sister', 'Asley Amor Libres -Niece', 'Charmaine Tuso 36-sister', 'Keisha Tuso- Niece', 'Genes Sinagpulo 33- brother', 'Lezie; Jane Sinagpulo - Niece', 30000.00, '2022-10-06 10:58:26', '2022-10-06 10:58:26');
INSERT INTO `members` VALUES (39, 'Vireno', 'Manango', 'Sinanggote', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09056194485', 'Married', 'Male', 'Malabuaya Valencia City', 'Roman Catholic', '55', '70', NULL, 2, '1971-09-05', 1, 'Elna Sinanggote 60-Wife', NULL, 'Vince Sinanggote 24-Son', NULL, 'Elvin Sinanggote 22-Son', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-07 03:07:11', '2022-10-07 03:07:11');
INSERT INTO `members` VALUES (40, 'Emalinda', 'Dequit', 'Morie', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09751006542', 'Separated', 'Female', 'Clarin Misamis Occidental', 'Roman Catholic', '50', '59', NULL, 2, '1967-04-06', 1, 'Morie Michelle', 'Cedenio Marivic', 'Morie, Juvelinda', NULL, 'Morie Jose', NULL, 'Alvarez Clinton Kyle', NULL, 'Lagipo,Margelyn', NULL, 30000.00, '2022-10-07 03:14:51', '2022-10-07 03:14:51');
INSERT INTO `members` VALUES (41, 'Arnele', 'Melos', 'Casinao', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09356800385', 'Married', 'Male', 'Laligan Valencia City Bukidnon', 'C.O.G born again', '5', '83', NULL, 2, '1978-02-22', 1, 'Evangeline Casinao  40- Wife', 'Antonio Casinao', 'Niel Ivan Casinao 19- Son', NULL, 'Analiza Loque 60-mother', NULL, 'Albino Loque 63-Father', NULL, 'Elizabeth Melos', NULL, 30000.00, '2022-10-07 03:24:10', '2022-10-07 03:24:10');
INSERT INTO `members` VALUES (42, 'Helen', 'Pranca', 'Verdida', 'P-14', 'Batangan', 'Valencia City', 'Bukidnon', '09262602456', 'Married', 'Female', 'Cebu', 'Roman Catholic', '5', '58', NULL, 2, '1966-04-12', 1, 'Lomenado Verdida', NULL, 'Marlyn Longos', NULL, 'Mary Jane', NULL, 'Marlon', NULL, 'Loreinne', NULL, 30000.00, '2022-10-07 03:28:09', '2022-10-07 03:28:09');
INSERT INTO `members` VALUES (43, 'Michael', 'Abello', 'Sarsuelo', 'P-8A', 'Batangan', 'Valencia City', 'Bukidnon', '09755425842', 'Single', 'Male', 'P-8A Batangan Valencia City Bukidnon', 'Roman Catholic', '52', '60', NULL, 2, '1982-03-14', 1, 'Sally Guanzon -51', 'Vivencia Dabon', 'Michael D. Sarsuelo', 'Charles Sr.Dabon', 'Michel Mae Sarsuelo', 'Melagros Sarsuelo', 'Jarven Guanzon', 'Edwin Sr. Sarsuelo', 'Razel Guanzon', NULL, 30000.00, '2022-10-07 03:38:34', '2022-10-07 03:38:34');
INSERT INTO `members` VALUES (44, 'Gina', 'Bulaqueña', 'Aloquin', 'P-10', 'Batangan', 'Valencia City', 'Bukidnon', '09161703516', 'Married', 'Female', 'Butuan', 'Roman Catholic', '5', '56', NULL, 2, '1967-12-18', 1, 'Rumio', 'Cherry', 'Roy', NULL, 'Reynan', NULL, 'Azeil', NULL, 'Juvilyn', NULL, 30000.00, '2022-10-07 03:48:25', '2022-10-07 03:48:25');
INSERT INTO `members` VALUES (45, 'Silverio', 'Binalhay', 'Tabamo', 'P-5', 'Inaawan Batangan', 'Valencia City', 'Bukidnon', '09655960309', 'Single', 'Male', 'Kabangahan Malaybalay City', 'Roman Catholic', '5', '50', NULL, 2, '1966-06-12', 1, 'Virgie L. Estares 54-wife', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-07 04:57:21', '2022-10-07 04:57:21');
INSERT INTO `members` VALUES (46, 'Allan', 'Cagatin', 'Cabaylo', 'P-5', 'Inaawan Batangan', 'Valencia City', 'Bukidnon', '09364420444', 'Married', 'Male', 'Poblacion Valencia City', 'Roman Catholic', '56', '73', NULL, 2, '1974-05-05', 1, 'Cecil B. Cabaylo 40-wife', NULL, 'Kimberly jane Cabaylo 15 -daughter', NULL, 'Alejo Bogo 73', NULL, 'Isobelita Bogo 70', NULL, NULL, NULL, 30000.00, '2022-10-07 05:01:19', '2022-10-07 05:01:19');
INSERT INTO `members` VALUES (47, 'Ma.Erlinda', 'Alajar', 'Pamolarcon', 'P-1', 'Batangan', 'Valencia City', 'Bukidnon', '09659974377', 'Widow', 'Female', 'Bacolod City Negros Occidental', 'Roman Catholic', '51', '120', NULL, 2, '1951-05-13', 1, 'Roger A. Pamolarcon 52-son', NULL, 'Ricky A. Pamolarcon 49-son', NULL, 'Raquela Pamolarcon 46-daughter', NULL, 'Israel Ivan P. Serrano 15- grandson', NULL, NULL, NULL, 30000.00, '2022-10-07 05:06:25', '2022-10-07 05:06:25');
INSERT INTO `members` VALUES (48, 'Rolando', 'Abejar', 'Talue', 'P-2', 'Lavina Village Batangan', 'Valencia City', 'Bukidnon', '09352828773', 'Married', 'Female', 'New Rude Barogo Leyte', 'Roman Catholic', '54', '60', NULL, 2, '1967-11-25', 1, 'Madelyn A. Talue 41-wife', NULL, 'Maria teresa 15- DAUGHTER', NULL, 'John roland 13- SON', NULL, 'Emmanuel 7-son', NULL, 'Mark christian 1-son', NULL, 30000.00, '2022-10-07 05:29:54', '2022-10-07 05:29:54');
INSERT INTO `members` VALUES (49, 'Nonita', 'Visitacion', 'Garciano', 'Grand meadows', 'Batangan', 'Valencia City', 'Bukidnon', '09265400043', 'Married', 'Female', 'Valencia City Bukidnon', 'Roman Catholic', '511', '50', NULL, 1, '1969-09-04', 1, 'Jarhish jacob V. Garciano 20-son', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-07 05:33:02', '2022-10-07 05:33:02');
INSERT INTO `members` VALUES (50, 'Rosmari', 'Roroqiro', 'Ticar', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', 'N/A', 'Widow', 'Female', 'N/A', 'Roman Catholic', '5', '50', NULL, 2, '1963-03-21', 1, 'Nelmariy', 'Neljose', 'Nerven', NULL, 'Neverisa', NULL, 'Nestor', NULL, 'Liza', NULL, 30000.00, '2022-10-07 05:38:02', '2022-10-07 05:38:02');
INSERT INTO `members` VALUES (51, 'Delia', 'Quarte', 'Alsaga', 'P-6A', 'Inaawan Batangan', 'Valencia City', 'Bukidnon', '09366172204', 'Separated', 'Female', 'Mailag Valencia City Bukidnon', 'Roman Catholic', '5', '45', NULL, 2, '0001-01-01', 1, 'Rodulfo Alsaga 73-live in', NULL, 'Roderick Alsaga 23-son', NULL, 'Rish Benjie Alsaga 18-Apo', NULL, 'Rhea Butal 18-apo', NULL, NULL, NULL, 30000.00, '2022-10-07 06:02:55', '2022-10-07 06:02:55');
INSERT INTO `members` VALUES (52, 'Leopoldo', 'Casas', 'Oro', 'P-6A', 'Inaawan Batangan', 'Valencia City', 'Bukidnon', 'N/A', 'Married', 'Male', 'N/A', 'Roman Catholic', '5', '50', NULL, 2, '1958-04-21', 1, 'Rosel', NULL, 'Leonit', NULL, 'Joy', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-07 07:51:44', '2022-10-07 07:51:44');
INSERT INTO `members` VALUES (53, 'Dela Cruz', 'Labores', 'Merceditha', 'P-15', 'Batangan', 'Valencia City', 'Bukidnon', '09977958821', 'Married', 'Female', 'N/A', 'IGLESIA NI CRISTO', '52', '60', NULL, 2, '1967-01-01', 1, 'Jemmy Dela Cruz 56-Bana', 'Deyen dine Delacruz 12-apo', 'Jenefer Dela cruz 26-anak', 'Rogen Apao Jr 9-apo', 'Maryjane Apao -26 anak', 'Deyen Dela cruz 12 apo', 'Angelito Dela cruz 31-anak', 'Zefane Niezlie7-apo', 'Niekajane Apao12- apo', NULL, 30000.00, '2022-10-10 03:49:47', '2022-10-10 03:49:47');
INSERT INTO `members` VALUES (54, 'Suzette', 'Montecillo', 'Ferrer', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '09389385271', 'Married', 'Female', 'Natulungan', 'C.O.G born again', '5', '38', NULL, 2, '1986-06-12', 1, 'Ruel James Ferrer 17-Son', NULL, 'Gian Carlo Ferrer 15- Son', NULL, 'Jhon Sany Rapha Ferrer-10 son', NULL, 'Shammah Ferrer 8-Daughter', NULL, NULL, NULL, 30000.00, '2022-10-27 04:59:37', '2022-10-27 04:59:37');
INSERT INTO `members` VALUES (55, 'Armando', 'Balos', 'Jabido', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '09756890072', 'Married', 'Male', 'Zamboanga Del Sur', 'Roman Catholic', '6', '62', NULL, 2, '1964-11-01', 1, 'DIOSDADA JABIDO 53-WIFE', 'JONRY JABIDO', 'DIOSMAN JABIDO 22- DAUGHTER', 'JACRELYN JABIDO', 'ARMANDO JABIDO 34-SON', NULL, 'JOMAR BOY JABIDO', NULL, 'JENELYN TRASES', NULL, 30000.00, '2022-10-27 05:04:25', '2022-10-27 05:04:25');
INSERT INTO `members` VALUES (56, 'Reche', 'Talite', 'Trases', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '09756890072', 'Married', 'Male', 'Batangan', 'C.O.G born again', '5', '57', NULL, 2, '1988-10-12', 1, 'JENELYN TRASES 32- WIFE', NULL, 'REIGNS SAINT TRASES', NULL, 'CHERRY MAY TRASES', NULL, 'JAIROS MATT TRASES', NULL, NULL, NULL, 30000.00, '2022-10-27 05:07:21', '2022-10-27 05:07:21');
INSERT INTO `members` VALUES (57, 'Fermina', 'Basierto', 'Day-yo', 'P-17', 'Batangan', 'Valencia City', 'Bukidnon', '09261870873', 'Married', 'Female', 'N/A', 'N/A', '0', '0', NULL, 2, '1954-05-14', 1, 'MAX- HUSBAND', NULL, 'ALLAN', NULL, 'ALVIN', NULL, 'MELANY', NULL, NULL, NULL, 30000.00, '2022-10-27 05:42:52', '2022-10-27 05:42:52');
INSERT INTO `members` VALUES (58, 'Max', 'Duri', 'Day-yo', 'P-7', 'Batangan', 'Valencia City', 'Bukidnon', '09261870873', 'Married', 'Male', 'N/A', 'N/A', '0', '0', NULL, 2, '1953-02-01', 1, 'FERMINA- WIFE', NULL, 'ALLAN', NULL, 'RONALD', NULL, 'ALVIN', NULL, 'MELANY', NULL, 30000.00, '2022-10-27 05:45:09', '2022-10-27 05:45:09');
INSERT INTO `members` VALUES (59, 'Lucrecia', 'Caaupan', 'Paderan', 'P-8A', 'Batangan', 'Valencia City', 'Bukidnon', '000000', 'Single', 'Female', 'N/A', 'Roman Catholic', '0', '0', NULL, 2, '1944-11-27', 1, 'ELE', NULL, 'ALCEN', NULL, 'EDE', NULL, 'BOY', NULL, NULL, NULL, 30000.00, '2022-10-27 05:47:48', '2022-10-27 05:47:48');
INSERT INTO `members` VALUES (60, 'Lucita', 'Gunayan', 'Demonterverde', 'P-8A', 'Batangan', 'Valencia City', 'Bukidnon', '09679538868', 'Married', 'Female', 'N/A', 'Roman Catholic', '0', '0', NULL, 2, '1971-02-12', 1, 'JERRY - HUSBAND', NULL, 'RITCHARD', NULL, 'JEFFRY', NULL, 'PAOSTENA', NULL, NULL, NULL, 30000.00, '2022-10-27 05:51:23', '2022-10-27 05:51:23');
INSERT INTO `members` VALUES (61, 'Elmer', 'Dagahoya', 'Quirino', 'P-3', 'Batangan', 'Valencia City', 'Bukidnon', '09752225072', 'Married', 'Male', 'Batangan', 'IGLESIA NI CRISTO', '5', '85', NULL, 2, '1971-05-07', 1, 'ELTON ANDYAR QUIRINO-SON', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-28 03:44:24', '2022-10-28 03:44:24');
INSERT INTO `members` VALUES (62, 'Evelyn', 'Ocoy', 'Cuizon', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', '09756702558', 'Separated', 'Female', 'MARAMAG, BUKIDNON', 'Roman Catholic', '5', '70', NULL, 2, '1970-08-20', 1, 'Jacob Panan 66-live in partner', NULL, 'Vince Clyde Corazon', NULL, 'Jan rey Ocay', NULL, 'Joseph Ocay', NULL, NULL, NULL, 30000.00, '2022-10-28 03:54:28', '2022-10-28 03:54:28');
INSERT INTO `members` VALUES (63, 'Kent', 'Abong', 'Villon', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', '000000', 'Married', 'Male', 'Malaybay', 'Roman Catholic', '5', '65', NULL, 2, '1976-12-14', 1, 'Julie Pearl Villon 36-wife', NULL, 'Jasper Klent Villon 11-son', NULL, 'Nelid Villon', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-10-28 04:37:31', '2022-10-28 04:37:31');
INSERT INTO `members` VALUES (64, 'Norma', 'Tooregosa', 'Milabo', 'P-9', 'Batangan', 'Valencia City', 'Bukidnon', '09755794523', 'Widow', 'Female', 'Cabal-an Metofe Bohol', 'Roman Catholic', '5', '58', NULL, 2, '1997-06-03', 1, 'Norma T. Milabo', 'Heide M. Calub', 'Hazel M. Azuki', 'Ryan Calub', 'Jeray Azuki', 'Rheanne Mae Calub', 'Jash Azuki', NULL, 'John Rafael Azuki', NULL, 30000.00, '2022-10-28 10:46:09', '2022-10-28 10:46:09');
INSERT INTO `members` VALUES (65, 'RICARDO', 'CADIZ', 'RICARDO', 'P-13', 'Batangan', 'Valencia City', 'Bukidnon', '09261619454', 'Married', 'Male', 'NAVOTAS', 'IGLESIA NI CRISTO', '5', '60', NULL, 2, '1971-09-08', 1, 'LEONIDA GELI.46.WIFE', NULL, 'DAISY GAY GELI.22.DAUGHTER', NULL, 'RICKY DRIAN GELI.20.SON', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 06:49:36', '2022-11-03 06:49:36');
INSERT INTO `members` VALUES (66, 'LOLITA', 'RINDOQUE', 'MUTYA', 'PAGLAOM VILLAGE', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '09106503767', 'Married', 'Female', 'MAAM PISING DAVAO CITY', 'BORN AGAIN', '5', '52', NULL, 2, '1964-07-09', 1, 'DARIO SINGA-44 HUSBAND', NULL, 'MARYJOY MUTYA -27 DAUGHTER', NULL, 'MJ MUTYA -14 SON', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:23:54', '2022-11-03 07:23:54');
INSERT INTO `members` VALUES (67, 'ROSALINDA', 'OLVINADA', 'LAMAYAN', 'P-11', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '000000', 'Married', 'Female', 'Cadiz City Negros Occidental', 'Roman Catholic', '5', '52', NULL, 2, '1942-02-13', 1, 'JOCEPEN FLORENTENO', NULL, 'ADILPA LAMAYAN', NULL, 'RICARDO LAMAYAN', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:25:50', '2022-11-03 07:25:50');
INSERT INTO `members` VALUES (68, 'SATURNINA', 'ANINO', 'RETAZO', 'P-2A', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '000000', 'Widow', 'Female', 'MAGSAYSAY DAVAO DELSUR', 'Roman Catholic', '4', '55', NULL, 2, '1960-05-22', 1, 'ALVIN RAMON RETAZO-26 SON', NULL, 'MELODY AGSETO-33 DAUGHTER', NULL, 'RITCHARD -30 SON', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:28:14', '2022-11-03 07:28:14');
INSERT INTO `members` VALUES (69, 'MARLYN', 'CAMPO', 'MANAGASE', 'P-3', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '09700818993', 'Widow', 'Female', 'PANADTALAN MARAMAG', 'Roman Catholic', '4', '50', NULL, 2, '1968-09-12', 1, 'ARIEL ALINYABON-34 SON', NULL, 'MARVEN ALINYABON-30 SON', NULL, 'MARRY JANE -29', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:31:15', '2022-11-03 07:31:15');
INSERT INTO `members` VALUES (70, 'LEONCIO', 'ESTOMO', 'PARADERO', 'P-10A', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '00000', 'Single', 'Male', 'N/A', 'N/A', '4', '50', NULL, 2, '0001-10-01', 1, 'N/A', NULL, 'N/A', NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:33:12', '2022-11-03 07:33:12');
INSERT INTO `members` VALUES (71, 'EDITHA', 'BALANSA', 'CANDOLE', 'P-10A', 'SAN MIGUEL', 'MARAMAG', 'Bukidnon', '09473202747', 'Married', 'Female', 'PEGKARANGAN TUBOD LANAO', 'Baptism', '5', '47', NULL, 2, '1961-06-23', 1, 'ANANIES CANDOLE-65 HUSBAND', NULL, 'EDILYN DAGEROAS 32-', NULL, 'AILYN CANDOLE-34', NULL, 'AIZA ALERTA -30', NULL, 'JONATHAN CANDOLE-38', NULL, 30000.00, '2022-11-03 07:35:44', '2022-11-03 07:35:44');
INSERT INTO `members` VALUES (72, 'FELIX', 'CABALLERO', 'BUAQUIÑA', 'P-2', 'TUGASNON', 'MISAMIS', 'ORIENTAL', '09358144332', 'Separated', 'Male', 'OZAMIS CITY', 'MESIANIC', '5', '70', NULL, 2, '1940-05-31', 1, 'LOVELY B UBAY UBAY-45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:52:23', '2022-11-03 07:52:23');
INSERT INTO `members` VALUES (73, 'MERCEDES', 'SABELLETA', 'QUILAB', 'Z-3', 'TUGASNON', 'MISAMIS', 'ORIENTAL', '00000', 'Widow', 'Female', 'ALUBIJID', 'LFI', '5', '50', NULL, 2, '1959-07-16', 1, 'IRENE', NULL, 'JAY', NULL, 'JIECEL', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 07:54:31', '2022-11-03 07:54:31');
INSERT INTO `members` VALUES (74, 'RUBY', 'MEJARES', 'OCDAY', 'P-6', 'SAN MIGUEL', 'MANOLO FORTECH', 'Bukidnon', '09754262193', 'Married', 'Female', 'MOLAVE ZAMBOANGA DEL SUR', 'SDA', '5', '50', NULL, 2, '1969-07-05', 1, 'BONIFACIO OCDAY 57- HUSBAND', 'DENRHOD OCADAY-12 GRANDSON', 'JAMES RAEL OCDAY-22 SON', 'SOPHIA OCDAY-11 GRAND DAUGHTER', 'JUSTIN MARK OCDAY-18 SON', 'GIAN BRYLLE ECHAVES-9 GRANDSON', 'BRENDALY OCDAY-29 DAUGHTER', 'ESEQUEL ECHAVES-6 GRANDSON', 'ANNA BELLE OCDAY-20', 'CROSSMAX WELL -2 APO', 30000.00, '2022-11-03 08:00:02', '2022-11-03 08:00:02');
INSERT INTO `members` VALUES (75, 'TITA', 'DUMAYACA', 'MACAPAYAG', 'P-5', 'SAN MIGUEL', 'MANOLO FORTECH', 'Bukidnon', '09531536691', 'Widow', 'Female', 'N/A', 'Roman Catholic', '5', '50', NULL, 2, '1948-07-02', 1, 'MACAPAYA MELANIE -34 DAUGHTER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 08:04:15', '2022-11-03 08:04:15');
INSERT INTO `members` VALUES (76, 'MANOLITA', 'MABOLOC', 'GAMOLO', 'PCH-2', 'SAN MIGUEL', 'MANOLO FORTECH', 'Bukidnon', '09263803852', 'Married', 'Female', 'UBAY BOHOL', 'Roman Catholic', '5', '50', NULL, 2, '1948-12-02', 1, 'GLADYS JOCELYN AYUBAN-DAUGHTER', NULL, 'WAYNE M.GAMOLO-33-SON', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 08:06:34', '2022-11-03 08:06:34');
INSERT INTO `members` VALUES (77, 'AVELINA', 'MATURAN', 'LAINA', 'PCH-2', 'SAN MIGUEL', 'MANOLO FORTECH', 'Bukidnon', '0000', 'Married', 'Female', 'MAASIN SOUTHERN LEYTE', 'Roman Catholic', '4', '59', NULL, 2, '1949-11-10', 1, 'ALFREDO LAINA -71 HUSBAND', NULL, 'PETER LAINA-49 SON', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-03 08:08:55', '2022-11-03 08:08:55');
INSERT INTO `members` VALUES (78, 'JOSE JOSEPH', 'ENLAWAN', 'LLENARES', 'P-1A', 'SAN MIGUEL', 'MANOLO FORTECH', 'Bukidnon', '09675216041', 'Married', 'Male', 'HINAPLANAN CLAVERIA MIS. OR', 'Roman Catholic', '5', '39', NULL, 2, '1954-04-04', 1, 'VIRGINIAP.LLANARES-70 WIFE', NULL, 'JOVELYN CLAVES-36', NULL, 'ANNALYN BAQUERO-33', NULL, 'CHARLOTTE -14', NULL, 'ROCHY -11', NULL, 30000.00, '2022-11-03 08:13:56', '2022-11-03 08:13:56');
INSERT INTO `members` VALUES (79, 'BEVERLY', 'DAWANG', 'DELATORRE', 'P-6', 'DELAPA', 'QUEZON', 'Bukidnon', '09656032325', 'Married', 'Female', 'TUBIGON MARAMAG BUKIDNON', 'Roman Catholic', '5', '51', NULL, 2, '1986-07-05', 1, 'RICHARD P. DELATORRE 33-HUSBAND', NULL, 'ANGEL D. MALLO 16- DAUGHTER', NULL, 'CHARLY JAY DELATORRE 11-SON', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-23 05:40:35', '2022-11-23 05:40:35');
INSERT INTO `members` VALUES (80, 'FELICISMO', 'TOLENTINO', 'CARALDE', 'P-1', 'SAN JOSE', 'MALAYBALAY CITY', 'Bukidnon', '09758391102', 'Widow', 'Male', 'TALISAYAN MISAMIS ORIENTAL', 'Roman Catholic', '5', '60', NULL, 1, '1939-10-07', 1, 'ELMA C. CAHARIAN 50-DAUGHTER', 'LILIBETH C UBAGAN', 'RICO E. CARALDE', 'GIRLY E. UBAGAN', 'RITCHE C. BOYID', 'LYDIAN E.CARALDE', 'MARIZA E. CARALDE', NULL, 'ROEL E. CARALDE', NULL, 30000.00, '2022-11-23 06:36:07', '2022-11-23 06:36:07');
INSERT INTO `members` VALUES (81, 'EFETACIA', 'ABCEDE', 'CADALO', 'P-1', 'SAN JOSE', 'MALAYBALAY CITY', 'Bukidnon', '09272144745', 'Married', 'Female', 'CAUTOYOC,JAQNA BOHOL', 'Roman Catholic', '4', '35', NULL, 2, '1939-05-23', 1, 'MIRASOL CADALO 53- DAUGHTER', 'JESUS CADALO', 'WENCESLAO CADALO 54- SON', 'FEDIL CADALO', 'HERMOHEVES CADALO', NULL, 'BONIFACIA BUCATOT', NULL, 'ASTERIO RANISES', NULL, 30000.00, '2022-11-23 06:46:14', '2022-11-23 06:46:14');
INSERT INTO `members` VALUES (82, 'VIRNANDITA', 'MENDOZA', 'BORBON', 'P-1', 'NABAG-O', 'Valencia City', 'Bukidnon', '09977904582', 'Married', 'Female', 'GINGO-OG CITY', 'Roman Catholic', '5', '50', NULL, 2, '0001-01-01', 1, 'GELBERT OLAYON 48-LIVE IN PARTNER', NULL, 'JENNYLYN BORBON 42', NULL, 'ROWEL BORBON 38', NULL, NULL, NULL, NULL, NULL, 30000.00, '2022-11-23 07:52:10', '2022-11-23 07:52:10');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'Administrator', 1, 1, 1, '2022-08-16 18:26:27', '2022-08-16 18:26:33');
INSERT INTO `user_types` VALUES (3, 'Collector', 0, 1, 0, '2022-08-16 10:46:16', '2022-08-16 10:46:16');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- View structure for vwactiveplan
-- ----------------------------
DROP VIEW IF EXISTS `vwactiveplan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwactiveplan` AS select `plans`.`planID` AS `planID`,`plans`.`description` AS `description`,`plans`.`amount` AS `amount`,`plans`.`status` AS `status`,`plans`.`created_at` AS `created_at`,`plans`.`updated_at` AS `updated_at` from `plans` where (`plans`.`status` <> 2);

-- ----------------------------
-- View structure for vwaddress
-- ----------------------------
DROP VIEW IF EXISTS `vwaddress`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwaddress` AS select `members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince` from `members` group by `members`.`addresspurok`,`members`.`addressbrgy`,`members`.`addresscity`,`members`.`addressprovince`;

-- ----------------------------
-- View structure for vwcollectionreport
-- ----------------------------
DROP VIEW IF EXISTS `vwcollectionreport`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwcollectionreport` AS select `collections`.`collectionID` AS `collectionID`,`members`.`memberID` AS `memberID`,`members`.`firstName` AS `firstName`,`members`.`middleName` AS `middleName`,`members`.`lastName` AS `lastName`,`members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince`,`collections`.`or` AS `or`,`collections`.`ordate` AS `ordate`,`collections`.`amountpaid` AS `amountpaid`,`members`.`gender` AS `gender`,`members`.`birthDate` AS `birthDate`,`members`.`contactNum` AS `contactNum`,`members`.`mop` AS `mop` from (`collections` join `members` on((`collections`.`memberID` = `members`.`memberID`)));

-- ----------------------------
-- View structure for vwcollections
-- ----------------------------
DROP VIEW IF EXISTS `vwcollections`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwcollections` AS select `collections`.`collectionID` AS `collectionID`,concat(`members`.`lastName`,', ',`members`.`firstName`,' ',`members`.`middleName`) AS `FullName`,`collections`.`or` AS `or`,`collections`.`ordate` AS `ordate`,`collections`.`amountpaid` AS `amountpaid`,`members`.`memberID` AS `memberID`,`collections`.`created_at` AS `created_at`,`collections`.`collector` AS `collector` from (`collections` join `members` on((`collections`.`memberID` = `members`.`memberID`)));

-- ----------------------------
-- View structure for vwdistinctcollection
-- ----------------------------
DROP VIEW IF EXISTS `vwdistinctcollection`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwdistinctcollection` AS select `vwcollectionreport`.`collectionID` AS `collectionID`,`vwcollectionreport`.`memberID` AS `memberID`,`vwcollectionreport`.`firstName` AS `firstName`,`vwcollectionreport`.`middleName` AS `middleName`,`vwcollectionreport`.`lastName` AS `lastName`,`vwcollectionreport`.`addresspurok` AS `addresspurok`,`vwcollectionreport`.`addressbrgy` AS `addressbrgy`,`vwcollectionreport`.`addresscity` AS `addresscity`,`vwcollectionreport`.`addressprovince` AS `addressprovince`,sum(`vwcollectionreport`.`amountpaid`) AS `amountpaid`,`vwcollectionreport`.`birthDate` AS `birthDate`,`vwcollectionreport`.`gender` AS `gender`,`vwcollectionreport`.`contactNum` AS `contactNum` from `vwcollectionreport` group by `vwcollectionreport`.`memberID`;

-- ----------------------------
-- View structure for vwfullnames
-- ----------------------------
DROP VIEW IF EXISTS `vwfullnames`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwfullnames` AS select distinct concat(`members`.`lastName`,', ',`members`.`middleName`,' ',`members`.`firstName`) AS `FullName` from `members`;

-- ----------------------------
-- View structure for vwmemberswithplan
-- ----------------------------
DROP VIEW IF EXISTS `vwmemberswithplan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwmemberswithplan` AS select `members`.`memberID` AS `memberID`,`members`.`firstName` AS `firstName`,`members`.`middleName` AS `middleName`,`members`.`lastName` AS `lastName`,`members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince`,`members`.`contactNum` AS `contactNum`,`members`.`civilStat` AS `civilStat`,`members`.`gender` AS `gender`,`members`.`birthPlace` AS `birthPlace`,`members`.`religion` AS `religion`,`members`.`height` AS `height`,`members`.`weight` AS `weight`,`members`.`mop` AS `mop`,`members`.`birthDate` AS `birthDate`,`members`.`plan` AS `plan`,`members`.`dep1` AS `dep1`,`members`.`dep2` AS `dep2`,`members`.`dep3` AS `dep3`,`members`.`dep4` AS `dep4`,`members`.`dep5` AS `dep5`,`members`.`dep6` AS `dep6`,`members`.`dep7` AS `dep7`,`members`.`dep8` AS `dep8`,`members`.`dep9` AS `dep9`,`members`.`dep10` AS `dep10`,`members`.`amount` AS `amount`,`members`.`created_at` AS `created_at`,`members`.`updated_at` AS `updated_at`,`plans`.`description` AS `description` from (`members` join `plans` on((`members`.`plan` = `plans`.`planID`)));

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

-- ----------------------------
-- View structure for vwuserswithroles
-- ----------------------------
DROP VIEW IF EXISTS `vwuserswithroles`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwuserswithroles` AS select `iusers`.`id` AS `id`,`iusers`.`username` AS `username`,`iusers`.`password` AS `password`,`iusers`.`uType` AS `uType`,`iusers`.`created_at` AS `created_at`,`iusers`.`updated_at` AS `updated_at`,`user_types`.`description` AS `description`,`user_types`.`members` AS `members`,`user_types`.`collections` AS `collections`,`user_types`.`plans` AS `plans` from (`iusers` join `user_types` on((`iusers`.`uType` = `user_types`.`uType`)));

SET FOREIGN_KEY_CHECKS = 1;
