-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: surat
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `surat`
--

/*!40000 DROP DATABASE IF EXISTS `surat`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `surat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `surat`;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attachments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pdf',
  `letter_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_letter_id_foreign` (`letter_id`),
  KEY `attachments_user_id_foreign` (`user_id`),
  CONSTRAINT `attachments_letter_id_foreign` FOREIGN KEY (`letter_id`) REFERENCES `letters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `attachments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classifications`
--

DROP TABLE IF EXISTS `classifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `classifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classifications_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classifications`
--

LOCK TABLES `classifications` WRITE;
/*!40000 ALTER TABLE `classifications` DISABLE KEYS */;
INSERT INTO `classifications` VALUES (1,'ADM','Administrasi','Jenis surat yang berkaitan dengan administrasi','2025-02-23 03:14:07','2025-02-23 03:14:07');
/*!40000 ALTER TABLE `classifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `configs_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'default_password','admin',NULL,NULL),(2,'page_size','5',NULL,NULL),(3,'app_name','Aplikasi Surat Menyurat',NULL,NULL),(4,'institution_name','404nfid',NULL,NULL),(5,'institution_address','Jl. Padat Karya',NULL,NULL),(6,'institution_phone','082121212121',NULL,NULL),(7,'institution_email','admin@admin.com',NULL,NULL),(8,'language','id',NULL,NULL),(9,'pic','M. Iqbal Effendi',NULL,NULL);
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositions`
--

DROP TABLE IF EXISTS `dispositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` date NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `letter_status` bigint unsigned NOT NULL,
  `letter_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dispositions_letter_status_foreign` (`letter_status`),
  KEY `dispositions_letter_id_foreign` (`letter_id`),
  KEY `dispositions_user_id_foreign` (`user_id`),
  CONSTRAINT `dispositions_letter_id_foreign` FOREIGN KEY (`letter_id`) REFERENCES `letters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `dispositions_letter_status_foreign` FOREIGN KEY (`letter_status`) REFERENCES `letter_statuses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `dispositions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositions`
--

LOCK TABLES `dispositions` WRITE;
/*!40000 ALTER TABLE `dispositions` DISABLE KEYS */;
INSERT INTO `dispositions` VALUES (1,'Jayden Stiedemann','1980-07-27','Odio adipisci dicta hic et et iure ea ea dignissimos qui vitae tempora.','Eius consequatur veritatis.',3,1,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(2,'Dr. Lacy Emard','1980-09-29','Quam aliquam rem perferendis est et sit vel omnis officiis nihil deleniti cum dolores.','Id ea veniam.',2,44,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(3,'Lyric Greenfelder','1983-10-07','Non sed asperiores sed laborum veniam cupiditate qui ut.','Odio et ad.',3,36,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(4,'Amira Eichmann','2000-07-01','Libero dolorum animi fuga distinctio dicta non qui dolorem corrupti.','Ex repellat ea est accusantium.',2,22,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(5,'Betsy Green Sr.','2021-12-05','Eius et esse nesciunt placeat tempore cum.','Accusantium eveniet laudantium qui et.',3,22,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(6,'Mrs. Adela Ankunding','2024-08-25','Ea aut et perspiciatis inventore quasi aut a.','Fugiat nihil eos.',1,2,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(7,'Ethel Keeling','1987-02-27','Non voluptatem occaecati ea saepe quae error non repudiandae quod itaque placeat et.','Et aut molestiae.',1,28,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(8,'Devon O\'Kon PhD','2015-05-25','Nam voluptates nobis accusamus laboriosam numquam perferendis eaque nihil officia dolorem.','Quidem est sed.',2,4,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(9,'Miss Vallie Quitzon','1976-07-05','Quibusdam autem ullam saepe quasi culpa impedit voluptas accusamus possimus sed eius.','Consequatur dolor blanditiis quae ducimus.',3,6,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(10,'Mr. Korey Champlin MD','1976-10-18','Dolor eum et quia non fuga sit.','Libero impedit in.',1,40,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(11,'Dexter Dickinson','1998-02-17','Autem quo aperiam cupiditate non ipsam cum corrupti eligendi voluptate quia.','Voluptas necessitatibus omnis odit.',1,33,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(12,'Della Hansen','2012-03-27','Soluta quo harum voluptatem enim ea cum velit omnis dolorem.','Perspiciatis dolores aut.',3,38,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(13,'Kane Kuvalis','1977-03-04','Voluptatem aliquam ut omnis consequatur inventore impedit fugiat consectetur consequatur et repellat porro.','Et assumenda est et voluptas.',2,50,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(14,'Marielle Muller','2022-07-03','Illo et sed esse vel similique perferendis totam ea sunt praesentium id consectetur.','Eligendi dolores a ut.',3,23,1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(15,'Gene Emard V','2020-07-03','Qui odit vitae quos quas magnam fugiat iusto dolor iste et rerum.','Non quia iste.',3,40,1,'2025-02-23 03:14:07','2025-02-23 03:14:07');
/*!40000 ALTER TABLE `dispositions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letter_statuses`
--

DROP TABLE IF EXISTS `letter_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letter_statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letter_statuses`
--

LOCK TABLES `letter_statuses` WRITE;
/*!40000 ALTER TABLE `letter_statuses` DISABLE KEYS */;
INSERT INTO `letter_statuses` VALUES (1,'Rahasia','2025-02-23 03:14:07','2025-02-23 03:14:07'),(2,'Segera','2025-02-23 03:14:07','2025-02-23 03:14:07'),(3,'Biasa','2025-02-23 03:14:07','2025-02-23 03:14:07');
/*!40000 ALTER TABLE `letter_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letters`
--

DROP TABLE IF EXISTS `letters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `reference_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor Surat',
  `agenda_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_date` date DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'incoming' COMMENT 'Surat Masuk (incoming)/Surat Keluar (outgoing)',
  `classification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `letters_reference_number_unique` (`reference_number`),
  KEY `letters_classification_code_foreign` (`classification_code`),
  KEY `letters_user_id_foreign` (`user_id`),
  CONSTRAINT `letters_classification_code_foreign` FOREIGN KEY (`classification_code`) REFERENCES `classifications` (`code`),
  CONSTRAINT `letters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letters`
--

LOCK TABLES `letters` WRITE;
/*!40000 ALTER TABLE `letters` DISABLE KEYS */;
INSERT INTO `letters` VALUES (1,'1015188437783','77620','William Stanton','Chanel Tremblay','1976-03-06','2000-05-04','Laborum doloremque neque corporis magnam sunt magni sit in ut.','A amet accusantium accusantium.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(2,'0320736133354','2617','Kristopher Corkery','Ara Stanton','2004-09-13','1976-01-25','Possimus doloribus magni suscipit ab sapiente.','Qui perspiciatis quisquam incidunt.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(3,'3646467096698','33048','Eusebio Abernathy','Marcelle Brakus','2010-03-31','1989-11-14','Assumenda porro consectetur totam totam qui minima qui.','Corporis dicta non.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(4,'0508893670329','66699','Orlando Mills','Annalise Denesik','2021-09-29','1970-12-14','Impedit quia aut in culpa ad.','Omnis nisi magnam.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(5,'6194219839736','76541','Reyes Moen','Winifred Reinger','2014-03-18','2016-09-15','Reprehenderit atque reprehenderit molestiae ut consequuntur dolore.','Optio quidem aut.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(6,'6890744713519','68996','Lonzo Boyle','Lesly Bernier PhD','1992-01-11','2015-01-05','Quisquam quis accusamus deserunt qui aut hic autem magnam rerum.','Impedit animi quidem.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(7,'3711580103667','5053','Tommie Beer','Arlie Cormier','2012-02-08','1979-09-09','Sapiente laborum illum enim quos cum reprehenderit cupiditate.','Maxime mollitia dolorem.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(8,'0542556552287','58984','Axel Roob','Prof. Abbigail Huels','1999-08-19','1996-01-15','Iure ipsa aut voluptatibus sit earum et quisquam dolores iure.','Voluptate molestias non.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(9,'6127839256362','92614','Prof. Alexandre Ruecker','Mrs. Mossie McCullough Jr.','1999-09-20','1975-01-05','Occaecati dolorum eum sapiente quibusdam eligendi omnis iste sit quia.','Error itaque.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(10,'3055462632334','82085','Dr. Donnell Kuhn','Mandy Dickinson','2013-02-28','2007-11-01','Dolorum rerum quidem quasi non labore enim nihil quidem.','Temporibus suscipit aut.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(11,'1365933632766','76103','Rashad Hoeger V','Ms. Jewell Borer','2021-10-13','1971-01-09','Ut voluptatem sint minima vel commodi eum quis dolorum natus.','Itaque placeat dolores fuga.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(12,'8378489137022','27073','Mr. Tatum Sanford','Tess Veum','1984-06-14','2023-11-30','Eius nihil accusantium commodi eligendi voluptate sunt occaecati fugiat similique.','Est consequatur non.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(13,'9331802088332','81432','Marshall Bednar I','Alize Thompson Sr.','1973-03-10','1971-03-29','Facere dolorum cupiditate blanditiis aut magni eius quidem nostrum ut.','Quia repellendus quaerat.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(14,'8290942000158','17006','Hiram Ernser','Lia Heathcote','1980-03-23','2009-05-31','Dignissimos minima reprehenderit qui velit voluptates.','Voluptatem quis.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(15,'3319484547015','60876','Camryn Hamill','Thelma Hayes','1992-02-06','2012-01-17','Pariatur ipsam expedita dolorem eos eos autem id architecto perferendis.','Impedit nihil vitae nulla libero.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(16,'3369792026054','79910','Talon Brown','Mrs. Katelynn Lindgren I','2023-11-16','2019-02-17','Neque eius vero numquam nemo laboriosam est omnis.','Qui est rerum.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(17,'2098764601180','16827','Duncan Oberbrunner DDS','Miss Daniela McCullough Jr.','1977-09-14','1997-11-07','Voluptate at modi magni possimus quia neque.','Ullam nesciunt amet.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(18,'3608329074367','37553','Haleigh Hauck','Katherine Goldner','1989-10-16','2022-02-12','Officiis ad est voluptatem non porro voluptatem sunt.','Reprehenderit rerum quasi dolorum.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(19,'5073933782249','53121','Lester Fay','Dr. Katheryn Raynor I','1997-02-01','2014-10-24','Est nulla ullam ut ea et rem ad.','Minus facilis vero.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(20,'7731714030412','67018','Toby Crist','Mrs. Una White V','2017-01-02','2018-06-22','Unde voluptas sit aut quis accusamus aut sequi.','Quia inventore doloremque.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(21,'4276945281071','22770','Karson Nader','Prof. Marisol Beatty I','2002-03-24','2018-04-23','Pariatur fuga corrupti qui neque in sit eos dolore rerum.','Sapiente nam consequatur vero.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(22,'2103865593194','65486','Alexandro Bashirian','Lorena Toy V','2019-02-24','2013-05-12','Pariatur assumenda soluta labore ut voluptas.','Ut iusto voluptas harum nobis.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(23,'7867807895467','57248','Mr. Garret Reichert','Era Terry','2004-11-03','1997-12-07','Delectus architecto optio dolor optio.','Eius quae iure.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(24,'9066853073678','7950','Roscoe Gorczany','Marietta Barrows','1972-02-20','2013-11-03','Recusandae eius sunt laudantium accusantium aut est iste qui.','Est laudantium molestiae tempora.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(25,'5678641270547','12701','Juwan Friesen III','Nannie Jerde','1997-12-24','2024-07-29','Quos natus est voluptas amet veritatis blanditiis et sapiente.','Ab corrupti minus excepturi.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(26,'5320037166636','5155','Dr. Jorge Rippin','Maximillia Okuneva','1976-11-08','1970-09-16','Recusandae ipsam iusto nostrum non necessitatibus.','Recusandae provident sit.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(27,'7467851245012','5523','Prof. Cole Collins','Earline Fahey','2025-02-03','1990-12-29','Ut maiores est eos sint dolores aliquam amet.','Perferendis aspernatur occaecati ut suscipit.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(28,'1403845701474','22482','Quinton Bartell','Elda Yost','2024-11-03','1978-02-24','Molestiae doloremque eum qui deleniti incidunt animi sunt eaque.','Quia consequatur ut.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(29,'3447936561071','33665','Prof. Dave Johnston II','Lelia Farrell','1971-07-03','1980-12-18','Tenetur voluptatem a eos natus tempore sed voluptas cumque.','Autem corporis ut.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(30,'9729355313375','97406','Raphael Crist','Marielle Morar','2000-05-10','2005-10-16','Voluptatum ut omnis veritatis voluptas voluptas consectetur.','Natus qui laborum.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(31,'8640095933139','15415','Samson Runolfsson','Prof. Elmira Williamson III','2000-07-21','1985-02-24','Laboriosam placeat distinctio quas quaerat amet perferendis nostrum.','Recusandae dolor rerum vel fugiat.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(32,'9975874954593','89692','Prof. Rahul Zboncak','Georgette Donnelly','1990-07-12','1989-11-30','Aut corrupti et sed ducimus eius aut quaerat voluptatem.','Voluptatem nihil quae.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(33,'3003167998408','26982','Mr. Aric Keeling PhD','Kendra Braun','1976-08-25','1989-02-04','Corrupti quia cumque neque distinctio voluptate natus et debitis quia.','Quae sint sint cumque.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(34,'5790184090786','24749','Dr. Rey Kuhic I','Theodora Legros','2013-10-12','1988-04-03','Esse sequi quia cum eos accusamus qui repellendus nisi ab.','Qui officiis voluptas corporis.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(35,'9132414981628','94969','Adrian Tromp','Jada Jerde Sr.','2013-02-15','2023-03-06','Cupiditate iusto est quia tempore in est.','Quam sunt magni.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(36,'1104078532216','33185','Prof. Quincy Baumbach V','Miss Elinor Casper I','2007-02-18','2007-05-04','Blanditiis nobis ea maiores magnam error sed.','Sit illo rerum incidunt.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(37,'2118981851332','11811','Prof. Dean Upton','Ms. Shaniya Witting','2016-12-03','2006-01-13','Ab qui est quaerat quasi repudiandae sed.','Quae sunt impedit rem.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(38,'4215984794067','73768','Consuelo Weber','Eulalia Howell','2010-10-13','1994-10-17','Sequi nulla minima consequuntur amet unde quia adipisci accusantium itaque.','Non possimus at.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(39,'9421630416954','60775','Keeley Doyle','Cecelia Cremin','1989-10-12','1986-04-15','Nisi iure voluptatibus et quam voluptatem recusandae quia.','Totam dicta repellendus.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(40,'0355546862255','20121','Cicero Boyer','Antonette Grady DVM','1980-09-05','1971-08-21','Ullam ducimus earum omnis est porro.','Eius qui molestiae ipsam.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(41,'3109036800206','69305','Dr. Mark Pouros','Dr. Ellie Runte DVM','1990-10-19','1987-08-06','Impedit illo eum ipsum voluptatem similique dicta.','Dignissimos sapiente ducimus vitae.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(42,'7039119373135','79661','Jaron Turner V','Miss Dandre Bergnaum MD','2001-05-28','2018-12-19','Sed sit eum non rerum nulla tenetur.','Quasi earum praesentium sunt.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(43,'2703600196712','36135','Koby Bahringer','Addie Dare','1979-03-14','1986-11-01','Cupiditate quod cupiditate quia eaque non rerum commodi.','Et minus est fugit.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(44,'0857543572804','73420','Dr. Darwin Donnelly DVM','Cordie Pfannerstill','2017-01-31','2013-03-03','Quisquam maiores provident porro sit quae id.','Autem iste neque.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(45,'4018207332691','36821','Prof. Reginald Lockman Sr.','Prof. Kylie Rogahn','1979-01-17','2009-11-09','Asperiores blanditiis eligendi vel veniam quo.','Consectetur quam alias vitae similique.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(46,'6951783060122','49000','Stefan Hartmann Jr.','Isobel Schumm','1993-08-13','1997-10-31','Aliquid omnis quia voluptatem quidem laudantium.','Ratione inventore ipsam.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(47,'9395544753675','16051','Dr. Chad Baumbach PhD','Ms. Sandy Smith','2012-11-11','2017-12-18','Aut architecto et esse rerum et aut et et cupiditate.','Dicta et et.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(48,'5623453687977','27959','Lyric Shanahan','Tiara Bayer','2002-01-13','1984-08-02','Perspiciatis qui qui recusandae pariatur molestiae.','Facilis et est.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(49,'9472961873916','66690','Morton Kessler','Miss Shayna Ferry DVM','1995-08-23','1997-05-09','Officia suscipit ullam sunt quam et voluptatem praesentium.','Et ad distinctio.','outgoing','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07'),(50,'7941986046121','80854','Tre Carter Jr.','Elenor Collier','1978-07-02','1999-08-20','Et maxime voluptates consequuntur quos quia beatae architecto non aut.','Ut dolor quidem ipsum.','incoming','ADM',1,'2025-02-23 03:14:07','2025-02-23 03:14:07');
/*!40000 ALTER TABLE `letters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_12_05_081849_create_configs_table',1),(7,'2022_12_05_083409_create_letter_statuses_table',1),(8,'2022_12_05_083945_create_classifications_table',1),(9,'2022_12_05_084544_create_letters_table',1),(10,'2022_12_05_092303_create_dispositions_table',1),(11,'2022_12_05_093329_create_attachments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'staff',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@admin.com','2025-02-23 03:14:07','$2y$10$r0vCZVkH9fmSsBH4CDJCgO03q9UAe9sDbFKGAdqf188y6heVAdvnm',NULL,NULL,'082121212121','admin',1,NULL,'AYeDnMEks6','2025-02-23 03:14:07','2025-02-23 03:14:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'surat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-28 17:38:38
