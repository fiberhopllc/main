-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fiberhopllc
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `api_keys`
--

LOCK TABLES `api_keys` WRITE;
/*!40000 ALTER TABLE `api_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `api_logs`
--

LOCK TABLES `api_logs` WRITE;
/*!40000 ALTER TABLE `api_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `assigned_roles`
--

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` VALUES (1,2,1),(2,3,2),(3,4,3),(4,5,4),(5,6,5);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Admins',NULL,'2014-12-14 07:25:39','2014-12-14 07:25:39'),(2,'Monitoring',NULL,'2014-12-14 07:25:39','2014-12-14 07:25:39'),(3,'Standard',NULL,'2014-12-14 07:25:39','2014-12-14 07:25:39'),(4,'Vendor',NULL,'2014-12-14 07:25:40','2014-12-14 07:25:40'),(5,'WhiteLabel',NULL,'2014-12-14 07:25:40','2014-12-14 07:25:40');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2013_04_09_062329_create_revisions_table',1),('2013_05_12_014954_create_auth_token_table',1),('2014_06_12_084423_create_api_keys_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2014_11_14_300000_create_projects_table',1),('2014_12_10_035745_create_password_reminders_table',1),('2014_12_10_035753_create_cache_table',1),('2014_12_10_035823_create_session_table',1),('2014_12_10_035833_activity_log_table',1),('2014_12_10_035834_create_urls_table',1),('2014_12_10_035835_entrust_setup_tables',1),('2014_12_12_071159_create_failed_jobs_table',1),('2014_12_12_074433_create_fiberhopllc_database',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_reminders`
--

LOCK TABLES `password_reminders` WRITE;
/*!40000 ALTER TABLE `password_reminders` DISABLE KEYS */;
INSERT INTO `password_reminders` VALUES ('deactivated@standard.com','119ea1ab11e60835040721738b5a2e6a3eb6791a','2014-12-14 19:35:50'),('vendor@vendor.com','117e940e6453a750ba375cff619ab685bf47f8c8','2014-12-14 19:37:28');
/*!40000 ALTER TABLE `password_reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,1,2),(6,3,2),(7,1,3),(8,2,3),(9,3,3),(10,1,4),(11,2,4),(12,3,4),(13,1,5),(14,2,5),(15,3,5),(16,4,5);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'can_read','Read','2014-12-15 06:59:24','2014-12-15 06:59:24'),(2,'can_write','Write','2014-12-15 06:59:24','2014-12-15 06:59:24'),(3,'can_update','Update','2014-12-15 06:59:24','2014-12-15 06:59:24'),(4,'can_delete','Delete','2014-12-15 06:59:24','2014-12-15 06:59:24');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','2014-12-15 06:59:23','2014-12-15 06:59:23'),(2,'Monitoring','2014-12-15 06:59:23','2014-12-15 06:59:23'),(3,'Standard','2014-12-15 06:59:24','2014-12-15 06:59:24'),(4,'Vendor','2014-12-15 06:59:24','2014-12-15 06:59:24'),(5,'WhiteLabel','2014-12-15 06:59:24','2014-12-15 06:59:24'),(6,'Deactivated','2014-12-15 06:59:24','2014-12-15 06:59:24');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('b82aea915d88128ffe19aee1d665a36851a2b95d','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiREsyUU5xUFpGZDFYRUtPMmxqQWowWHd1aVRQMHJDbXduY3ZqaW1DQyI7czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e31zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQxODYwNTQxNjtzOjE6ImMiO2k6MTQxODQ1NDAxMDtzOjE6ImwiO3M6MToiMCI7fX0=',1418605416);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ta_auth_tokens`
--

LOCK TABLES `ta_auth_tokens` WRITE;
/*!40000 ALTER TABLE `ta_auth_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `ta_auth_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,2,'127.0.0.1',0,0,0,NULL,NULL,NULL),(2,7,'127.0.0.1',0,0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `urls`
--

LOCK TABLES `urls` WRITE;
/*!40000 ALTER TABLE `urls` DISABLE KEYS */;
/*!40000 ALTER TABLE `urls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin@admin.com','$2y$10$kwTsCbDD4s3pd3dijjbl3e8QB0u1nXq6UE9K/4LUb0rALmcQ.8hvu',NULL,1,NULL,NULL,'2014-12-14 04:19:08','$2y$10$4cN/NF2IcOGCd2EyeLqadu1g8tbUrGG2PVLctGqR39q3fh5MGEP7G',NULL,'AdminFirstName','AdminLastName','2014-12-14 07:25:40','2014-12-14 10:19:08'),(3,'monitoring@monitoring.com','$2y$10$I.jZWvrFcL09MAzK7frnt.xQhmS0NrHlBdXhLCLJhyq2cdjFgl5OG',NULL,1,NULL,NULL,NULL,NULL,NULL,'MonitoringFirstName','MonitoringLastName','2014-12-14 07:25:40','2014-12-14 07:25:40'),(4,'standard@standard.com','$2y$10$8Yus1RLGRx2ySchL2w2kV.IdyccKFknobuZR8WvOH3JoXva9tTrju',NULL,1,NULL,NULL,NULL,NULL,NULL,'StandardFirstName','StandardLastName','2014-12-14 07:25:41','2014-12-14 07:25:41'),(5,'vendor@vendor.com','$2y$10$j7z0YYLD1SE0KXXip/2QReCTCQLBNTCWHzdFhel.7ZXM/ZpTvgtK.',NULL,1,NULL,NULL,NULL,NULL,NULL,'VendorFirstName','VendorLastName','2014-12-14 07:25:41','2014-12-14 07:25:41'),(6,'whitelabel@whitelabel.com','$2y$10$NyrBZi6H0j8uYD5HpM7euOZi1onbXmh/CexXbcHN.puZUCmqqJnhG',NULL,1,NULL,NULL,NULL,NULL,NULL,'WhiteLabelFirstName','WhiteLabelLastName','2014-12-14 07:25:42','2014-12-14 07:25:42'),(7,'deactivated@standard.com','$2y$10$mmhN/JJsbxCnqjlaIa319umZyeVp6wGV0.DGbFoPI4SIPToH.0fJq',NULL,0,NULL,NULL,NULL,NULL,NULL,'DeactivatedFirstName','DeactivatedLastName','2014-12-14 07:25:42','2014-12-14 07:25:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,2,1),(2,3,2),(3,4,3),(4,5,4),(5,6,5),(6,7,3);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-14 19:13:17
