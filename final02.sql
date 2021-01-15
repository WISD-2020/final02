-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `final02` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `final02`;

DROP TABLE IF EXISTS `attends`;
CREATE TABLE `attends` (
  `student_id` bigint(20) unsigned NOT NULL,
  `classes_id` bigint(20) unsigned NOT NULL,
  `truant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `attends` (`student_id`, `classes_id`, `truant`, `created_at`, `updated_at`) VALUES
(1,	1,	'曠課',	NULL,	'2021-01-05 03:20:55'),
(1,	2,	'曠課',	NULL,	'2021-01-04 08:58:54'),
(1,	4,	'曠課',	NULL,	'2021-01-05 21:41:55'),
(2,	1,	'曠課',	NULL,	'2021-01-04 08:58:54'),
(2,	2,	'曠課',	NULL,	'2021-01-04 08:58:54');

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `classes` (`id`, `course_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1,	1,	'2021-01-11',	'1-1',	NULL,	NULL),
(2,	1,	'2021-01-11',	'1-3',	NULL,	NULL),
(3,	1,	'2021-01-13',	'3-1',	NULL,	NULL),
(4,	2,	'2021-01-12',	'2-1',	NULL,	NULL),
(7,	3,	'2021-01-12',	'2-2',	NULL,	NULL),
(8,	4,	'2021-01-11',	'1-5',	NULL,	NULL),
(9,	4,	'2021-01-11',	'1-2',	NULL,	NULL),
(10,	1,	'2021-01-18',	'1-1',	NULL,	NULL),
(11,	5,	'2021-01-15',	'5-1',	NULL,	NULL);

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `courses` (`id`, `teacher_id`, `name`, `location`, `class_time`, `created_at`, `updated_at`) VALUES
(1,	1,	'程式設計',	'M501',	'1-1-2',	NULL,	NULL),
(2,	1,	'演算法',	'M502',	'',	NULL,	NULL),
(3,	2,	'國文',	'M511',	'',	NULL,	NULL),
(4,	2,	'歷史',	'M502',	'',	NULL,	NULL),
(5,	1,	'計算機概論',	'M501',	'',	NULL,	NULL);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `leaves`;
CREATE TABLE `leaves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `teacher_id` bigint(20) unsigned NOT NULL,
  `classes_id` bigint(20) unsigned NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_date` date NOT NULL,
  `review_date` date DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `leaves` (`id`, `student_id`, `teacher_id`, `classes_id`, `reason`, `type`, `leave_date`, `review_date`, `result`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	1,	'肚子痛',	'病假',	'2020-12-27',	NULL,	'未審核',	NULL,	'2021-01-07 09:04:51'),
(2,	1,	1,	4,	'頭痛',	'病假',	'2020-12-27',	NULL,	'未審核',	NULL,	'2021-01-07 08:18:02'),
(3,	1,	1,	2,	'比賽',	'事假',	'2020-12-27',	NULL,	'未審核',	'2021-01-08 23:05:18',	'2021-01-08 23:15:23');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11,	'2020_12_22_050909_create_leaves_table',	1),
(24,	'2020_12_22_050609_create_leaves_table',	2),
(81,	'2014_10_12_000000_create_users_table',	3),
(82,	'2014_10_12_100000_create_password_resets_table',	3),
(83,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	3),
(84,	'2019_08_19_000000_create_failed_jobs_table',	3),
(85,	'2019_12_14_000001_create_personal_access_tokens_table',	3),
(86,	'2020_12_22_050356_create_students_table',	3),
(87,	'2020_12_22_050454_create_teachers_table',	3),
(88,	'2020_12_22_050455_create_courses_table',	3),
(89,	'2020_12_22_050610_create_classes_table',	3),
(90,	'2020_12_22_050611_create_leaves_table',	3),
(91,	'2020_12_22_050617_create_attends_table',	3),
(92,	'2020_12_22_050940_create_takes_table',	3),
(93,	'2020_12_22_051649_create_sessions_table',	3);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AabzbBs1ZQWqyd6R50xUL0K4gDKFeLShEMtjCrDo',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVEt2VWRMYjNZekRubkJRdVpLNzZuZHRFTWlnSUk5ZzlvaXhzcG5WaSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI2OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRqMXFZL2Y5Y25VWkFndUR1ODVUWjVPSU9nQzlXaGM3Qk9xTng4OXYuUXovUE1zaHRPQlM5dSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkajFxWS9mOWNuVVpBZ3VEdTg1VFo1T0lPZ0M5V2hjN0JPcU54ODl2LlF6L1BNc2h0T0JTOXUiO30=',	1610359349),
('r1g2Y51jOCnVYMNHC3DyPkXbCWZCF6Lxp3CJmmq3',	1,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiemk0NGh4Y1JVOXhNZmpNVXF3dlBNaTR0alRzUno0dHpKczBBVzFyTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAyOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvdGVhY2hlci9yZWNvcmQvc2VhcmNoLzE/X3Rva2VuPXppNDRoeGNSVTl4TWZqTVVxd3ZQTWk0dGpUc1J6NHR6SnMwQVcxckwmY291cnNlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkajFxWS9mOWNuVVpBZ3VEdTg1VFo1T0lPZ0M5V2hjN0JPcU54ODl2LlF6L1BNc2h0T0JTOXUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGoxcVkvZjljblVaQWd1RHU4NVRaNU9JT2dDOVdoYzdCT3FOeDg5di5Rei9QTXNodE9CUzl1IjtzOjY6ImNvdXJzZSI7czoxOiIxIjt9',	1610457252);

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `students` (`id`, `student_id`, `name`, `sex`, `faculty`, `phone`, `birth`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'001',	'小志',	'男',	'資管',	'0954635215',	'2020-12-29',	'北市南港路三段50巷號7號5F',	3,	NULL,	NULL),
(2,	'A02',	'小哲',	'男',	'資管',	'0956456485',	'2021-01-01',	'北市南港路三段50巷號7號5F',	4,	NULL,	NULL);

DROP TABLE IF EXISTS `takes`;
CREATE TABLE `takes` (
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `takes` (`student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1,	1,	NULL,	NULL),
(2,	1,	NULL,	NULL),
(1,	2,	NULL,	NULL),
(1,	3,	NULL,	NULL),
(1,	4,	NULL,	NULL),
(1,	5,	NULL,	NULL);

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teachers` (`id`, `account`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'A01',	'小安',	1,	NULL,	NULL),
(2,	'A02',	'小明',	2,	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'aaa',	'1',	'a@gmail.com',	NULL,	'$2y$10$j1qY/f9cnUZAguDu85TZ5OIOgC9Whc7BOqNx89v.Qz/PMshtOBS9u',	NULL,	NULL,	NULL,	NULL,	NULL,	'2020-12-26 06:23:16',	'2020-12-26 06:23:16'),
(2,	'bbb',	'1',	'b@gmail.com',	NULL,	'$2y$10$jV95vQLdB9mTJEHVcVnuu.G4aXGE7rQqivWHIQITCm0G/fpIUDfvy',	NULL,	NULL,	NULL,	NULL,	NULL,	'2020-12-26 23:16:16',	'2020-12-26 23:16:16'),
(3,	'c',	'2',	'c@gmail.com',	NULL,	'$2y$10$NX9VvdS8TTgIpnjo36XYNOBQpY2HJO7teaYL4f69jwp2QTHiHY4gG',	NULL,	NULL,	NULL,	NULL,	NULL,	'2020-12-29 06:47:21',	'2020-12-29 06:47:21'),
(4,	'd',	'2',	'd@email.com',	NULL,	'$2y$10$CPDpOx1cyKK1Yh3FhglAqu2wlIR/v8l6LCe0vGg.y2AHde.tUV.Rm',	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-01-01 00:34:58',	'2021-01-01 00:34:58');

-- 2021-01-12 17:53:00
