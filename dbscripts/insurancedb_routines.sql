-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: insurancedb
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `vwroles`
--

DROP TABLE IF EXISTS `vwroles`;
/*!50001 DROP VIEW IF EXISTS `vwroles`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwroles` AS SELECT 
 1 AS `uType`,
 1 AS `description`,
 1 AS `members`,
 1 AS `collections`,
 1 AS `plans`,
 1 AS `created_at`,
 1 AS `updated_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwdistinctcollection`
--

DROP TABLE IF EXISTS `vwdistinctcollection`;
/*!50001 DROP VIEW IF EXISTS `vwdistinctcollection`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwdistinctcollection` AS SELECT 
 1 AS `collectionID`,
 1 AS `memberID`,
 1 AS `firstName`,
 1 AS `middleName`,
 1 AS `lastName`,
 1 AS `addresspurok`,
 1 AS `addressbrgy`,
 1 AS `addresscity`,
 1 AS `addressprovince`,
 1 AS `amountpaid`,
 1 AS `birthDate`,
 1 AS `gender`,
 1 AS `contactNum`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwcollectionreport`
--

DROP TABLE IF EXISTS `vwcollectionreport`;
/*!50001 DROP VIEW IF EXISTS `vwcollectionreport`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwcollectionreport` AS SELECT 
 1 AS `collectionID`,
 1 AS `memberID`,
 1 AS `firstName`,
 1 AS `middleName`,
 1 AS `lastName`,
 1 AS `addresspurok`,
 1 AS `addressbrgy`,
 1 AS `addresscity`,
 1 AS `addressprovince`,
 1 AS `or`,
 1 AS `ordate`,
 1 AS `amountpaid`,
 1 AS `gender`,
 1 AS `birthDate`,
 1 AS `contactNum`,
 1 AS `mop`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwtotalcollections`
--

DROP TABLE IF EXISTS `vwtotalcollections`;
/*!50001 DROP VIEW IF EXISTS `vwtotalcollections`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwtotalcollections` AS SELECT 
 1 AS `TotalCollections`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwactiveplan`
--

DROP TABLE IF EXISTS `vwactiveplan`;
/*!50001 DROP VIEW IF EXISTS `vwactiveplan`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwactiveplan` AS SELECT 
 1 AS `planID`,
 1 AS `description`,
 1 AS `amount`,
 1 AS `status`,
 1 AS `created_at`,
 1 AS `updated_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwuserswithroles`
--

DROP TABLE IF EXISTS `vwuserswithroles`;
/*!50001 DROP VIEW IF EXISTS `vwuserswithroles`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwuserswithroles` AS SELECT 
 1 AS `id`,
 1 AS `username`,
 1 AS `password`,
 1 AS `uType`,
 1 AS `created_at`,
 1 AS `updated_at`,
 1 AS `description`,
 1 AS `members`,
 1 AS `collections`,
 1 AS `plans`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwcollections`
--

DROP TABLE IF EXISTS `vwcollections`;
/*!50001 DROP VIEW IF EXISTS `vwcollections`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwcollections` AS SELECT 
 1 AS `collectionID`,
 1 AS `FullName`,
 1 AS `or`,
 1 AS `ordate`,
 1 AS `amountpaid`,
 1 AS `memberID`,
 1 AS `created_at`,
 1 AS `collector`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwfullnames`
--

DROP TABLE IF EXISTS `vwfullnames`;
/*!50001 DROP VIEW IF EXISTS `vwfullnames`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwfullnames` AS SELECT 
 1 AS `FullName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwtotalmembers`
--

DROP TABLE IF EXISTS `vwtotalmembers`;
/*!50001 DROP VIEW IF EXISTS `vwtotalmembers`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwtotalmembers` AS SELECT 
 1 AS `TotalMembers`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwmemberswithplan`
--

DROP TABLE IF EXISTS `vwmemberswithplan`;
/*!50001 DROP VIEW IF EXISTS `vwmemberswithplan`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwmemberswithplan` AS SELECT 
 1 AS `memberID`,
 1 AS `firstName`,
 1 AS `middleName`,
 1 AS `lastName`,
 1 AS `addresspurok`,
 1 AS `addressbrgy`,
 1 AS `addresscity`,
 1 AS `addressprovince`,
 1 AS `contactNum`,
 1 AS `civilStat`,
 1 AS `gender`,
 1 AS `birthPlace`,
 1 AS `religion`,
 1 AS `height`,
 1 AS `weight`,
 1 AS `mop`,
 1 AS `birthDate`,
 1 AS `plan`,
 1 AS `dep1`,
 1 AS `dep2`,
 1 AS `dep3`,
 1 AS `dep4`,
 1 AS `dep5`,
 1 AS `dep6`,
 1 AS `dep7`,
 1 AS `dep8`,
 1 AS `dep9`,
 1 AS `dep10`,
 1 AS `amount`,
 1 AS `created_at`,
 1 AS `updated_at`,
 1 AS `description`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwtotalnewmembers`
--

DROP TABLE IF EXISTS `vwtotalnewmembers`;
/*!50001 DROP VIEW IF EXISTS `vwtotalnewmembers`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwtotalnewmembers` AS SELECT 
 1 AS `TotalNewMembers`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwaddress`
--

DROP TABLE IF EXISTS `vwaddress`;
/*!50001 DROP VIEW IF EXISTS `vwaddress`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwaddress` AS SELECT 
 1 AS `addresspurok`,
 1 AS `addressbrgy`,
 1 AS `addresscity`,
 1 AS `addressprovince`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vwroles`
--

/*!50001 DROP VIEW IF EXISTS `vwroles`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwroles` AS select `user_types`.`uType` AS `uType`,`user_types`.`description` AS `description`,`user_types`.`members` AS `members`,`user_types`.`collections` AS `collections`,`user_types`.`plans` AS `plans`,`user_types`.`created_at` AS `created_at`,`user_types`.`updated_at` AS `updated_at` from `user_types` where (`user_types`.`uType` <> 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwdistinctcollection`
--

/*!50001 DROP VIEW IF EXISTS `vwdistinctcollection`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwdistinctcollection` AS select `vwcollectionreport`.`collectionID` AS `collectionID`,`vwcollectionreport`.`memberID` AS `memberID`,`vwcollectionreport`.`firstName` AS `firstName`,`vwcollectionreport`.`middleName` AS `middleName`,`vwcollectionreport`.`lastName` AS `lastName`,`vwcollectionreport`.`addresspurok` AS `addresspurok`,`vwcollectionreport`.`addressbrgy` AS `addressbrgy`,`vwcollectionreport`.`addresscity` AS `addresscity`,`vwcollectionreport`.`addressprovince` AS `addressprovince`,sum(`vwcollectionreport`.`amountpaid`) AS `amountpaid`,`vwcollectionreport`.`birthDate` AS `birthDate`,`vwcollectionreport`.`gender` AS `gender`,`vwcollectionreport`.`contactNum` AS `contactNum` from `vwcollectionreport` group by `vwcollectionreport`.`memberID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwcollectionreport`
--

/*!50001 DROP VIEW IF EXISTS `vwcollectionreport`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwcollectionreport` AS select `collections`.`collectionID` AS `collectionID`,`members`.`memberID` AS `memberID`,`members`.`firstName` AS `firstName`,`members`.`middleName` AS `middleName`,`members`.`lastName` AS `lastName`,`members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince`,`collections`.`or` AS `or`,`collections`.`ordate` AS `ordate`,`collections`.`amountpaid` AS `amountpaid`,`members`.`gender` AS `gender`,`members`.`birthDate` AS `birthDate`,`members`.`contactNum` AS `contactNum`,`members`.`mop` AS `mop` from (`collections` join `members` on((`collections`.`memberID` = `members`.`memberID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwtotalcollections`
--

/*!50001 DROP VIEW IF EXISTS `vwtotalcollections`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwtotalcollections` AS select sum(`collections`.`amountpaid`) AS `TotalCollections` from `collections` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwactiveplan`
--

/*!50001 DROP VIEW IF EXISTS `vwactiveplan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwactiveplan` AS select `plans`.`planID` AS `planID`,`plans`.`description` AS `description`,`plans`.`amount` AS `amount`,`plans`.`status` AS `status`,`plans`.`created_at` AS `created_at`,`plans`.`updated_at` AS `updated_at` from `plans` where (`plans`.`status` <> 2) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwuserswithroles`
--

/*!50001 DROP VIEW IF EXISTS `vwuserswithroles`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwuserswithroles` AS select `iusers`.`id` AS `id`,`iusers`.`username` AS `username`,`iusers`.`password` AS `password`,`iusers`.`uType` AS `uType`,`iusers`.`created_at` AS `created_at`,`iusers`.`updated_at` AS `updated_at`,`user_types`.`description` AS `description`,`user_types`.`members` AS `members`,`user_types`.`collections` AS `collections`,`user_types`.`plans` AS `plans` from (`iusers` join `user_types` on((`iusers`.`uType` = `user_types`.`uType`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwcollections`
--

/*!50001 DROP VIEW IF EXISTS `vwcollections`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwcollections` AS select `collections`.`collectionID` AS `collectionID`,concat(`members`.`firstName`,' ',`members`.`middleName`,' ',`members`.`lastName`) AS `FullName`,`collections`.`or` AS `or`,`collections`.`ordate` AS `ordate`,`collections`.`amountpaid` AS `amountpaid`,`members`.`memberID` AS `memberID`,`collections`.`created_at` AS `created_at`,`collections`.`collector` AS `collector` from (`collections` join `members` on((`collections`.`memberID` = `members`.`memberID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwfullnames`
--

/*!50001 DROP VIEW IF EXISTS `vwfullnames`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwfullnames` AS select distinct concat(`members`.`firstName`,' ',`members`.`middleName`,' ',`members`.`lastName`) AS `FullName` from `members` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwtotalmembers`
--

/*!50001 DROP VIEW IF EXISTS `vwtotalmembers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwtotalmembers` AS select count(`members`.`memberID`) AS `TotalMembers` from `members` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwmemberswithplan`
--

/*!50001 DROP VIEW IF EXISTS `vwmemberswithplan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwmemberswithplan` AS select `members`.`memberID` AS `memberID`,`members`.`firstName` AS `firstName`,`members`.`middleName` AS `middleName`,`members`.`lastName` AS `lastName`,`members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince`,`members`.`contactNum` AS `contactNum`,`members`.`civilStat` AS `civilStat`,`members`.`gender` AS `gender`,`members`.`birthPlace` AS `birthPlace`,`members`.`religion` AS `religion`,`members`.`height` AS `height`,`members`.`weight` AS `weight`,`members`.`mop` AS `mop`,`members`.`birthDate` AS `birthDate`,`members`.`plan` AS `plan`,`members`.`dep1` AS `dep1`,`members`.`dep2` AS `dep2`,`members`.`dep3` AS `dep3`,`members`.`dep4` AS `dep4`,`members`.`dep5` AS `dep5`,`members`.`dep6` AS `dep6`,`members`.`dep7` AS `dep7`,`members`.`dep8` AS `dep8`,`members`.`dep9` AS `dep9`,`members`.`dep10` AS `dep10`,`members`.`amount` AS `amount`,`members`.`created_at` AS `created_at`,`members`.`updated_at` AS `updated_at`,`plans`.`description` AS `description` from (`members` join `plans` on((`members`.`plan` = `plans`.`planID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwtotalnewmembers`
--

/*!50001 DROP VIEW IF EXISTS `vwtotalnewmembers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwtotalnewmembers` AS select count(`members`.`memberID`) AS `TotalNewMembers` from `members` where (month(`members`.`created_at`) = month(now())) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwaddress`
--

/*!50001 DROP VIEW IF EXISTS `vwaddress`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vwaddress` AS select `members`.`addresspurok` AS `addresspurok`,`members`.`addressbrgy` AS `addressbrgy`,`members`.`addresscity` AS `addresscity`,`members`.`addressprovince` AS `addressprovince` from `members` group by `members`.`addresspurok`,`members`.`addressbrgy`,`members`.`addresscity`,`members`.`addressprovince` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-26 11:54:50
