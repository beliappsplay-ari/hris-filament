/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80300
 Source Host           : localhost:3306
 Source Schema         : hrisdge_herry_new

 Target Server Type    : MySQL
 Target Server Version : 80300
 File Encoding         : 65001

 Date: 18/05/2025 12:45:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for advances
-- ----------------------------
DROP TABLE IF EXISTS `advances`;
CREATE TABLE `advances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `period` date NOT NULL,
  `amount` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_process` int DEFAULT NULL,
  `release_on` date DEFAULT NULL,
  `amount_release` int DEFAULT NULL,
  `via` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `advances_employee_id_foreign` (`employee_id`),
  KEY `advances_created_by_foreign` (`created_by`),
  KEY `advances_updated_by_foreign` (`updated_by`),
  CONSTRAINT `advances_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `advances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `advances_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of advances
-- ----------------------------
BEGIN;
INSERT INTO `advances` (`id`, `created_by`, `updated_by`, `employee_id`, `period`, `amount`, `remark`, `amount_process`, `release_on`, `amount_release`, `via`, `created_at`, `updated_at`) VALUES (37, 1, 1, 113, '2025-03-01', 5000000, NULL, NULL, '2025-03-13', 4000000, 'Cash', '2025-03-18 08:25:25', '2025-03-18 08:32:49');
INSERT INTO `advances` (`id`, `created_by`, `updated_by`, `employee_id`, `period`, `amount`, `remark`, `amount_process`, `release_on`, `amount_release`, `via`, `created_at`, `updated_at`) VALUES (38, 1, NULL, 113, '2025-04-01', 2000000, NULL, NULL, '2025-04-25', 2000000, 'Cash', '2025-04-26 13:25:10', '2025-04-26 13:25:10');
INSERT INTO `advances` (`id`, `created_by`, `updated_by`, `employee_id`, `period`, `amount`, `remark`, `amount_process`, `release_on`, `amount_release`, `via`, `created_at`, `updated_at`) VALUES (39, 1, 1, 113, '2025-04-01', 2000000, 'THR 2025', NULL, '2025-04-22', 2000000, 'Deutche Bank', '2025-04-28 11:16:58', '2025-04-28 11:21:12');
INSERT INTO `advances` (`id`, `created_by`, `updated_by`, `employee_id`, `period`, `amount`, `remark`, `amount_process`, `release_on`, `amount_release`, `via`, `created_at`, `updated_at`) VALUES (40, 1, NULL, 113, '2025-04-01', 3000000, 'THR', NULL, '2025-04-22', 3000000, 'Deutche Bank', '2025-04-28 11:31:20', '2025-04-28 11:31:20');
INSERT INTO `advances` (`id`, `created_by`, `updated_by`, `employee_id`, `period`, `amount`, `remark`, `amount_process`, `release_on`, `amount_release`, `via`, `created_at`, `updated_at`) VALUES (41, 1, NULL, 113, '2025-05-01', 120000, 'Kasbon', NULL, '2025-05-01', 120000, 'Deutche Bank', '2025-05-02 03:58:56', '2025-05-02 03:58:56');
COMMIT;

-- ----------------------------
-- Table structure for airlines
-- ----------------------------
DROP TABLE IF EXISTS `airlines`;
CREATE TABLE `airlines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `airlines_created_by_foreign` (`created_by`),
  KEY `airlines_updated_by_foreign` (`updated_by`),
  CONSTRAINT `airlines_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `airlines_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of airlines
-- ----------------------------
BEGIN;
INSERT INTO `airlines` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, 1, 'Garuda Indonesias', '2024-05-22 02:54:53', '2025-01-27 07:57:10');
INSERT INTO `airlines` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (3, 1, NULL, 'testing', '2024-08-10 04:47:20', '2024-08-10 04:47:20');
COMMIT;

-- ----------------------------
-- Table structure for area_management
-- ----------------------------
DROP TABLE IF EXISTS `area_management`;
CREATE TABLE `area_management` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `area_management_created_by_foreign` (`created_by`),
  KEY `area_management_updated_by_foreign` (`updated_by`),
  CONSTRAINT `area_management_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `area_management_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of area_management
-- ----------------------------
BEGIN;
INSERT INTO `area_management` (`id`, `created_by`, `updated_by`, `name`, `description`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'test', 'satu', '2024-05-21 08:16:57', '2024-05-21 08:16:57');
INSERT INTO `area_management` (`id`, `created_by`, `updated_by`, `name`, `description`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'testing', '123', '2024-05-21 08:17:50', '2024-05-21 08:17:50');
COMMIT;

-- ----------------------------
-- Table structure for area_setups
-- ----------------------------
DROP TABLE IF EXISTS `area_setups`;
CREATE TABLE `area_setups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `area_setups_created_by_foreign` (`created_by`),
  KEY `area_setups_updated_by_foreign` (`updated_by`),
  CONSTRAINT `area_setups_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `area_setups_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of area_setups
-- ----------------------------
BEGIN;
INSERT INTO `area_setups` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Jakarta', '2024-05-21 07:06:03', '2024-08-09 04:48:03');
INSERT INTO `area_setups` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'test', '2024-07-01 08:43:44', '2024-07-01 08:44:02');
INSERT INTO `area_setups` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 'Bandung', '2024-08-09 04:48:49', '2024-08-09 04:48:49');
COMMIT;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `areas_country_id_foreign` (`country_id`),
  KEY `areas_created_by_foreign` (`created_by`),
  KEY `areas_updated_by_foreign` (`updated_by`),
  CONSTRAINT `areas_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `areas_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `areas_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of areas
-- ----------------------------
BEGIN;
INSERT INTO `areas` (`id`, `created_by`, `updated_by`, `name`, `country_id`, `created_at`, `updated_at`, `code`) VALUES (1, NULL, NULL, 'test', 1, '2024-05-22 02:40:07', '2024-05-22 02:40:07', NULL);
INSERT INTO `areas` (`id`, `created_by`, `updated_by`, `name`, `country_id`, `created_at`, `updated_at`, `code`) VALUES (3, NULL, NULL, 'test', 1, '2024-07-01 08:46:51', '2024-07-01 08:46:51', '123');
INSERT INTO `areas` (`id`, `created_by`, `updated_by`, `name`, `country_id`, `created_at`, `updated_at`, `code`) VALUES (5, 1, NULL, 'asda', 1, '2025-02-05 03:43:52', '2025-02-05 03:43:52', 'asd');
COMMIT;

-- ----------------------------
-- Table structure for authorized_approvers
-- ----------------------------
DROP TABLE IF EXISTS `authorized_approvers`;
CREATE TABLE `authorized_approvers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `authorized_approvers_email_unique` (`email`),
  KEY `authorized_approvers_created_by_foreign` (`created_by`),
  KEY `authorized_approvers_updated_by_foreign` (`updated_by`),
  CONSTRAINT `authorized_approvers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `authorized_approvers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of authorized_approvers
-- ----------------------------
BEGIN;
INSERT INTO `authorized_approvers` (`id`, `created_by`, `updated_by`, `name`, `email`, `created_at`, `updated_at`, `code`) VALUES (1, NULL, NULL, 'test', 'testy@gmail.com', '2024-05-22 03:24:50', '2024-05-22 03:24:50', NULL);
INSERT INTO `authorized_approvers` (`id`, `created_by`, `updated_by`, `name`, `email`, `created_at`, `updated_at`, `code`) VALUES (4, NULL, NULL, 'qwe', 'qwe@gmail.com', '2024-07-01 08:37:02', '2024-07-01 08:37:44', '21');
COMMIT;

-- ----------------------------
-- Table structure for bank_letters
-- ----------------------------
DROP TABLE IF EXISTS `bank_letters`;
CREATE TABLE `bank_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bank_letters_employee_id_foreign` (`employee_id`),
  KEY `bank_letters_created_by_foreign` (`created_by`),
  KEY `bank_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `bank_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `bank_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `bank_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of bank_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for banks
-- ----------------------------
DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bankadd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bankname2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `banks_employee_id_foreign` (`employee_id`),
  KEY `banks_created_by_foreign` (`created_by`),
  KEY `banks_updated_by_foreign` (`updated_by`),
  CONSTRAINT `banks_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `banks_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `banks_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of banks
-- ----------------------------
BEGIN;
INSERT INTO `banks` (`id`, `created_by`, `updated_by`, `employee_id`, `bank_name`, `bank_address`, `bank_account`, `account_name`, `bank_code`, `created_at`, `updated_at`, `bankadd`, `bankname2`) VALUES (42, 1, NULL, 121, 'Bank Mandiri', 'vvhg', '7657', 'hgfhg', '008', '2025-03-13 09:15:35', '2025-03-13 09:15:35', NULL, NULL);
INSERT INTO `banks` (`id`, `created_by`, `updated_by`, `employee_id`, `bank_name`, `bank_address`, `bank_account`, `account_name`, `bank_code`, `created_at`, `updated_at`, `bankadd`, `bankname2`) VALUES (43, 1, 1, 123, 'Bank Mandiri', 'DEPOK', '123123', 'Basrul', '008', '2025-03-13 09:19:13', '2025-05-17 16:53:01', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for business_unit_contract
-- ----------------------------
DROP TABLE IF EXISTS `business_unit_contract`;
CREATE TABLE `business_unit_contract` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `business_unit_id` bigint DEFAULT NULL,
  `old_business_unit` bigint DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `business_unit_histories_created_by_foreign` (`created_by`),
  KEY `business_unit_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `business_unit_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `business_unit_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of business_unit_contract
-- ----------------------------
BEGIN;
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (33, 43, '2025-02-01', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (35, 46, '2000-01-01', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (51, 62, '2025-02-01', 7, NULL, 'Voluptatem Quaerat ', NULL, NULL, 'Non fugiat nemo max', NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (68, 17, '2025-03-07', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (73, 22, '1993-11-14', 6, NULL, 'Doloribus eos elit ', NULL, NULL, 'Vero velit sed imped', NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (76, 30, '1993-11-14', 6, NULL, 'Doloribus eos elit ', NULL, NULL, 'Vero velit sed imped', NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (77, 31, NULL, 8, NULL, 'Laboriosam quidem c', NULL, NULL, 'Aliqua Nemo et volu', NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (82, 36, '2025-03-06', 8, NULL, 'Laboriosam quidem c', NULL, NULL, 'Aliqua Nemo et volu', NULL, NULL, NULL, NULL);
INSERT INTO `business_unit_contract` (`id`, `contract_id`, `effective_date`, `business_unit_id`, `old_business_unit`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (88, 42, '2025-05-02', 5, NULL, 'Sed commodo minima q', NULL, NULL, 'Doloremque et qui co', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for business_units
-- ----------------------------
DROP TABLE IF EXISTS `business_units`;
CREATE TABLE `business_units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `business_units_created_by_foreign` (`created_by`),
  KEY `business_units_updated_by_foreign` (`updated_by`),
  CONSTRAINT `business_units_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `business_units_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of business_units
-- ----------------------------
BEGIN;
INSERT INTO `business_units` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Headquarter', '2025-02-10 16:52:11', '2025-02-10 16:52:11');
INSERT INTO `business_units` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (6, NULL, NULL, 'Main Branch', '2025-02-10 16:52:25', '2025-02-10 16:52:25');
INSERT INTO `business_units` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (7, NULL, NULL, 'Secondary Branch', '2025-02-10 16:52:32', '2025-02-10 16:52:32');
INSERT INTO `business_units` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (8, NULL, NULL, 'abc123', '2025-02-11 12:01:44', '2025-02-11 12:01:44');
COMMIT;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cache
-- ----------------------------
BEGIN;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES ('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1747543948);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES ('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1747543948;', 1747543948);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES ('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:176:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:13:\"view_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:17:\"view_any_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:15:\"create_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"update_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:16:\"restore_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:20:\"restore_any_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:18:\"replicate_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:16:\"reorder_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:15:\"delete_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:19:\"delete_any_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:21:\"force_delete_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:25:\"force_delete_any_contract\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:13:\"view_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:17:\"view_any_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:15:\"create_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:15:\"update_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:16:\"restore_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:20:\"restore_any_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:18:\"replicate_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:16:\"reorder_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:15:\"delete_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:19:\"delete_any_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:21:\"force_delete_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:25:\"force_delete_any_employee\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:19:\"view_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:23:\"view_any_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:21:\"create_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:21:\"update_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:22:\"restore_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:26:\"restore_any_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:24:\"replicate_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:22:\"reorder_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:21:\"delete_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:25:\"delete_any_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:27:\"force_delete_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:31:\"force_delete_any_business::unit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:15:\"view_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:19:\"view_any_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:17:\"create_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:17:\"update_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:18:\"restore_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:22:\"restore_any_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:20:\"replicate_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:18:\"reorder_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:17:\"delete_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:21:\"delete_any_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:23:\"force_delete_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:27:\"force_delete_any_department\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:13:\"view_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:17:\"view_any_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:15:\"create_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:15:\"update_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:16:\"restore_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:20:\"restore_any_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:18:\"replicate_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:16:\"reorder_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:15:\"delete_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:19:\"delete_any_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:21:\"force_delete_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:25:\"force_delete_any_division\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:19:\"view_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:23:\"view_any_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:21:\"create_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:21:\"update_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:22:\"restore_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:26:\"restore_any_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:24:\"replicate_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:22:\"reorder_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:21:\"delete_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:25:\"delete_any_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:27:\"force_delete_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:31:\"force_delete_any_family::detail\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:23:\"view_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:27:\"view_any_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:25:\"create_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:25:\"update_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:26:\"restore_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:30:\"restore_any_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:28:\"replicate_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:26:\"reorder_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:25:\"delete_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:29:\"delete_any_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:31:\"force_delete_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:35:\"force_delete_any_foreign::languages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:15:\"view_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:19:\"view_any_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:17:\"create_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:17:\"update_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:18:\"restore_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:22:\"restore_any_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:20:\"replicate_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:18:\"reorder_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:17:\"delete_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:21:\"delete_any_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:23:\"force_delete_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:27:\"force_delete_any_home::base\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:22:\"view_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:26:\"view_any_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:24:\"create_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:24:\"update_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:25:\"restore_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:29:\"restore_any_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:27:\"replicate_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:25:\"reorder_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:24:\"delete_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:28:\"delete_any_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:30:\"force_delete_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:34:\"force_delete_any_homebase::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:17:\"view_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:115;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:21:\"view_any_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:116;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:19:\"create_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:19:\"update_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:20:\"restore_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:119;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:24:\"restore_any_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:120;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:22:\"replicate_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:20:\"reorder_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:19:\"delete_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:23:\"delete_any_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:25:\"force_delete_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:29:\"force_delete_any_job::history\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:13:\"view_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:17:\"view_any_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:128;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:15:\"create_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:15:\"update_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:130;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:16:\"restore_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:20:\"restore_any_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:132;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:18:\"replicate_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:133;a:4:{s:1:\"a\";i:134;s:1:\"b\";s:16:\"reorder_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:134;a:4:{s:1:\"a\";i:135;s:1:\"b\";s:15:\"delete_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:135;a:4:{s:1:\"a\";i:136;s:1:\"b\";s:19:\"delete_any_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:136;a:4:{s:1:\"a\";i:137;s:1:\"b\";s:21:\"force_delete_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:137;a:4:{s:1:\"a\";i:138;s:1:\"b\";s:25:\"force_delete_any_position\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:138;a:4:{s:1:\"a\";i:139;s:1:\"b\";s:25:\"view_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:139;a:4:{s:1:\"a\";i:140;s:1:\"b\";s:29:\"view_any_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:140;a:4:{s:1:\"a\";i:141;s:1:\"b\";s:27:\"create_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:141;a:4:{s:1:\"a\";i:142;s:1:\"b\";s:27:\"update_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:142;a:4:{s:1:\"a\";i:143;s:1:\"b\";s:28:\"restore_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:143;a:4:{s:1:\"a\";i:144;s:1:\"b\";s:32:\"restore_any_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:144;a:4:{s:1:\"a\";i:145;s:1:\"b\";s:30:\"replicate_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:145;a:4:{s:1:\"a\";i:146;s:1:\"b\";s:28:\"reorder_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:146;a:4:{s:1:\"a\";i:147;s:1:\"b\";s:27:\"delete_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:147;a:4:{s:1:\"a\";i:148;s:1:\"b\";s:31:\"delete_any_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:148;a:4:{s:1:\"a\";i:149;s:1:\"b\";s:33:\"force_delete_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:149;a:4:{s:1:\"a\";i:150;s:1:\"b\";s:37:\"force_delete_any_previous::employment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:150;a:4:{s:1:\"a\";i:151;s:1:\"b\";s:12:\"view_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:151;a:4:{s:1:\"a\";i:152;s:1:\"b\";s:16:\"view_any_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:152;a:4:{s:1:\"a\";i:153;s:1:\"b\";s:14:\"create_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:153;a:4:{s:1:\"a\";i:154;s:1:\"b\";s:14:\"update_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:154;a:4:{s:1:\"a\";i:155;s:1:\"b\";s:15:\"restore_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:155;a:4:{s:1:\"a\";i:156;s:1:\"b\";s:19:\"restore_any_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:156;a:4:{s:1:\"a\";i:157;s:1:\"b\";s:17:\"replicate_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:157;a:4:{s:1:\"a\";i:158;s:1:\"b\";s:15:\"reorder_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:158;a:4:{s:1:\"a\";i:159;s:1:\"b\";s:14:\"delete_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:159;a:4:{s:1:\"a\";i:160;s:1:\"b\";s:18:\"delete_any_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:160;a:4:{s:1:\"a\";i:161;s:1:\"b\";s:20:\"force_delete_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:161;a:4:{s:1:\"a\";i:162;s:1:\"b\";s:24:\"force_delete_any_project\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:162;a:4:{s:1:\"a\";i:163;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:163;a:4:{s:1:\"a\";i:164;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:164;a:4:{s:1:\"a\";i:165;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:165;a:4:{s:1:\"a\";i:166;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:166;a:4:{s:1:\"a\";i:167;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:167;a:4:{s:1:\"a\";i:168;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:168;a:4:{s:1:\"a\";i:169;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:169;a:4:{s:1:\"a\";i:170;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:170;a:4:{s:1:\"a\";i:171;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:171;a:4:{s:1:\"a\";i:172;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:172;a:4:{s:1:\"a\";i:173;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:173;a:4:{s:1:\"a\";i:174;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:174;a:4:{s:1:\"a\";i:175;s:1:\"b\";s:20:\"widget_StatsOverview\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:175;a:4:{s:1:\"a\";i:176;s:1:\"b\";s:24:\"widget_JobPlacementChart\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:2:\"HR\";s:1:\"c\";s:3:\"web\";}}}', 1747577247);
COMMIT;

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for cdos
-- ----------------------------
DROP TABLE IF EXISTS `cdos`;
CREATE TABLE `cdos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `period_process` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_ts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `workday_hours` int NOT NULL,
  `workday` int NOT NULL,
  `holiday_hours` int NOT NULL,
  `holiday` int NOT NULL,
  `total_cdo_rounded` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cdos_employee_id_foreign` (`employee_id`),
  KEY `cdos_created_by_foreign` (`created_by`),
  KEY `cdos_updated_by_foreign` (`updated_by`),
  CONSTRAINT `cdos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `cdos_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cdos_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cdos
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for cities
-- ----------------------------
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_area_id_foreign` (`area_id`),
  KEY `cities_created_by_foreign` (`created_by`),
  KEY `cities_updated_by_foreign` (`updated_by`),
  CONSTRAINT `cities_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cities_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `cities_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cities
-- ----------------------------
BEGIN;
INSERT INTO `cities` (`id`, `created_by`, `updated_by`, `name`, `area_id`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'test', 1, '2024-05-22 02:47:41', '2024-05-22 02:47:41');
COMMIT;

-- ----------------------------
-- Table structure for completeness_personal_data
-- ----------------------------
DROP TABLE IF EXISTS `completeness_personal_data`;
CREATE TABLE `completeness_personal_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` bigint unsigned NOT NULL,
  `ppf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_transkrip_nilai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_npwp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spt_1721A1_tahun_2024` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_buku_tabungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_ijazah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fc_skbb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `completeness_personal_data_created_by_foreign` (`created_by`),
  KEY `completeness_personal_data_updated_by_foreign` (`updated_by`),
  CONSTRAINT `completeness_personal_data_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `completeness_personal_data_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of completeness_personal_data
-- ----------------------------
BEGIN;
INSERT INTO `completeness_personal_data` (`id`, `employee_id`, `ppf`, `fc_transkrip_nilai`, `fc_npwp`, `spt_1721A1_tahun_2024`, `cv`, `fc_buku_tabungan`, `fc_ktp`, `fc_ijazah`, `fc_skbb`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (4, 113, '1', '1', '1', NULL, '1', '1', '1', '1', '1', 1, 1, '2025-03-05 10:06:44', '2025-05-04 13:26:06');
INSERT INTO `completeness_personal_data` (`id`, `employee_id`, `ppf`, `fc_transkrip_nilai`, `fc_npwp`, `spt_1721A1_tahun_2024`, `cv`, `fc_buku_tabungan`, `fc_ktp`, `fc_ijazah`, `fc_skbb`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (11, 121, '1', '0', '0', NULL, '1', '0', '1', '1', NULL, 1, NULL, '2025-03-05 10:42:02', '2025-03-05 10:42:02');
INSERT INTO `completeness_personal_data` (`id`, `employee_id`, `ppf`, `fc_transkrip_nilai`, `fc_npwp`, `spt_1721A1_tahun_2024`, `cv`, `fc_buku_tabungan`, `fc_ktp`, `fc_ijazah`, `fc_skbb`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (13, 123, '1', '1', '1', NULL, '1', '1', '1', '1', '1', NULL, 1, '2025-03-05 11:18:10', '2025-04-21 06:17:12');
INSERT INTO `completeness_personal_data` (`id`, `employee_id`, `ppf`, `fc_transkrip_nilai`, `fc_npwp`, `spt_1721A1_tahun_2024`, `cv`, `fc_buku_tabungan`, `fc_ktp`, `fc_ijazah`, `fc_skbb`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (14, 124, '1', '0', '1', NULL, '1', '1', '1', '1', '1', 1, 1, '2025-03-05 12:02:25', '2025-03-05 12:05:29');
INSERT INTO `completeness_personal_data` (`id`, `employee_id`, `ppf`, `fc_transkrip_nilai`, `fc_npwp`, `spt_1721A1_tahun_2024`, `cv`, `fc_buku_tabungan`, `fc_ktp`, `fc_ijazah`, `fc_skbb`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (15, 125, '1', '1', '1', NULL, '1', '1', '0', '1', '1', 1, 1, '2025-05-17 14:51:23', '2025-05-17 14:53:11');
COMMIT;

-- ----------------------------
-- Table structure for contract_department
-- ----------------------------
DROP TABLE IF EXISTS `contract_department`;
CREATE TABLE `contract_department` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_histories_job_place_id_foreign` (`contract_id`),
  KEY `department_histories_created_by_foreign` (`created_by`),
  KEY `department_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `department_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `department_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contract_department
-- ----------------------------
BEGIN;
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (76, 17, '2025-03-07', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (81, 22, '1993-11-14', '6', NULL, 'Aliqua Doloribus se', NULL, NULL, 'Voluptatem dolorum ', NULL, NULL, NULL, NULL);
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (86, 30, '1993-11-14', '6', NULL, 'Aliqua Doloribus se', NULL, NULL, 'Voluptatem dolorum ', NULL, NULL, NULL, NULL);
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (87, 31, NULL, '6', NULL, 'Maxime et aut optio', NULL, NULL, 'Suscipit aut sit aut', NULL, NULL, NULL, NULL);
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (92, 36, '2025-03-06', '6', NULL, 'Maxime et aut optio', NULL, NULL, 'Suscipit aut sit aut', NULL, NULL, NULL, NULL);
INSERT INTO `contract_department` (`id`, `contract_id`, `effective_date`, `department_id`, `old_department`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `updated_by`, `created_by`) VALUES (98, 42, '2025-05-02', '2', NULL, 'Fugiat ab officiis r', NULL, NULL, 'Vero quidem Nam cupi', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for contract_division
-- ----------------------------
DROP TABLE IF EXISTS `contract_division`;
CREATE TABLE `contract_division` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `division_id` bigint DEFAULT NULL,
  `old_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `division_histories_created_by_foreign` (`created_by`),
  KEY `division_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `division_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `division_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contract_division
-- ----------------------------
BEGIN;
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (77, 17, '2025-03-07', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (82, 22, '1993-11-14', 2, NULL, 'Dolor elit nostrud ', NULL, NULL, 'Ad pariatur Cupidat', NULL, NULL, NULL, NULL);
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (85, 30, '1993-11-14', 2, NULL, 'Dolor elit nostrud ', NULL, NULL, 'Ad pariatur Cupidat', NULL, NULL, NULL, NULL);
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (86, 31, NULL, 5, NULL, 'Consequatur digniss', NULL, NULL, 'Vero consequat Volu', NULL, NULL, NULL, NULL);
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (91, 36, '2025-03-06', 5, NULL, 'Consequatur digniss', NULL, NULL, 'Vero consequat Volu', NULL, NULL, NULL, NULL);
INSERT INTO `contract_division` (`id`, `contract_id`, `effective_date`, `division_id`, `old_division`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (97, 42, '2025-05-02', 1, NULL, 'Nihil occaecat ut ve', NULL, NULL, 'Odio quia incididunt', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for contract_homebase
-- ----------------------------
DROP TABLE IF EXISTS `contract_homebase`;
CREATE TABLE `contract_homebase` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `homebase_id` bigint DEFAULT NULL,
  `old_homebase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `homebase_histories_job_place_id_foreign` (`contract_id`),
  KEY `homebase_histories_created_by_foreign` (`created_by`),
  KEY `homebase_histories_updated_by_foreign` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contract_homebase
-- ----------------------------
BEGIN;
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (19, 1, 1, 23, '2024-07-31', 2, '3', '123123', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 'test', '2024-07-16', 'test');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (20, 1, 1, 23, '2024-07-31', 1, '1', '123123', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 'test', '2024-07-16', 'test');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (21, 1, NULL, 23, '2024-08-02', 4, '3', '123123', '2024-08-22 04:29:31', '2024-08-22 04:29:31', '1', '2024-08-23', 'test');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (22, 1, NULL, 23, '2024-08-15', 1, '8', '123', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 'test', '2024-08-15', '123');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (23, NULL, NULL, 23, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (25, NULL, NULL, 25, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (26, NULL, NULL, 26, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (27, NULL, NULL, 27, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (63, NULL, NULL, 30, '1974-08-30', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (75, NULL, NULL, 43, '2025-02-01', 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (77, NULL, NULL, 46, '2000-01-01', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (78, NULL, NULL, 46, '2025-02-01', 14, '5', 'TEST', NULL, '2025-02-11 03:53:30', 'TEST', NULL, 'TEST');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (97, NULL, NULL, 62, '2025-02-01', 5, NULL, NULL, NULL, NULL, 'Eius possimus est ', NULL, 'Accusantium earum do');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (114, NULL, NULL, 17, '2025-03-07', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (119, NULL, NULL, 17, '2025-03-07', 9, NULL, 'asd', NULL, NULL, 'asd', '2025-03-07', 'asdasd');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (120, NULL, NULL, 17, '2025-03-21', 10, '17', '123123', NULL, '2025-03-06 10:00:59', '12321', '2025-03-14', 'asdasd');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (121, NULL, NULL, 22, '1993-11-14', 13, NULL, NULL, NULL, NULL, 'At optio commodi in', NULL, 'Accusantium beatae v');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (125, NULL, NULL, 30, '1993-11-14', 13, NULL, NULL, NULL, NULL, 'At optio commodi in', NULL, 'Accusantium beatae v');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (126, NULL, NULL, 31, NULL, 17, NULL, NULL, NULL, NULL, 'Enim error dolore te', NULL, 'Obcaecati sed sit li');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (131, NULL, NULL, 36, '2025-03-06', 17, NULL, NULL, NULL, NULL, 'Enim error dolore te', NULL, 'Obcaecati sed sit li');
INSERT INTO `contract_homebase` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `homebase_id`, `old_homebase`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (145, NULL, NULL, 42, '2025-05-02', 17, NULL, NULL, NULL, NULL, 'Ipsum in quisquam si', NULL, 'Quasi et temporibus ');
COMMIT;

-- ----------------------------
-- Table structure for contract_position
-- ----------------------------
DROP TABLE IF EXISTS `contract_position`;
CREATE TABLE `contract_position` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `position_id` bigint DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `old_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `position_histories_created_by_foreign` (`created_by`),
  KEY `position_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `position_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `position_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contract_position
-- ----------------------------
BEGIN;
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (15, 23, 4, '2024-07-03', '4', '123123', 'Efficiency', '2024-07-24', 'test', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 1, 1);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (16, 23, 5, '2024-07-24', '4', '123124', 'promotion', '2024-07-24', 'test', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 1, 1);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (17, 23, 6, '2024-08-22', '1', '123213', 'test', '2024-08-30', 'test', '2024-08-22 04:29:31', '2024-08-22 04:29:31', 1, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (19, 25, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (20, 26, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (21, 27, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (26, 30, 5, '1974-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (38, 43, 3, '2025-02-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (40, 46, 1, '2000-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (56, 62, 8, '2025-02-01', NULL, NULL, 'Quia perspiciatis t', NULL, 'Sit commodo dolor c', NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (73, 17, 8, '2025-03-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (78, 22, 1, '1993-11-14', NULL, NULL, 'A iusto ea sit cons', NULL, 'Laborum eius ullamco', NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (81, 30, 1, '1993-11-14', NULL, NULL, 'A iusto ea sit cons', NULL, 'Laborum eius ullamco', NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (82, 31, 2, NULL, NULL, NULL, 'Lorem ut veniam in ', NULL, 'Ex irure et vero per', NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (87, 36, 2, '2025-03-06', NULL, NULL, 'Lorem ut veniam in ', NULL, 'Ex irure et vero per', NULL, NULL, NULL, NULL);
INSERT INTO `contract_position` (`id`, `contract_id`, `position_id`, `effective_date`, `old_position`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (93, 42, 2, '2025-05-02', NULL, NULL, 'Quia aut illo unde q', NULL, 'Exercitationem ut er', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for contract_project
-- ----------------------------
DROP TABLE IF EXISTS `contract_project`;
CREATE TABLE `contract_project` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `project_id` bigint DEFAULT NULL,
  `old_project_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phone_limit_histories_created_by_foreign` (`created_by`),
  KEY `phone_limit_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `contract_project_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `contract_project_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contract_project
-- ----------------------------
BEGIN;
INSERT INTO `contract_project` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `project_id`, `old_project_id`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (74, NULL, NULL, 42, '2025-05-02', 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `contract_project` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `project_id`, `old_project_id`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (77, NULL, NULL, 42, '2025-05-10', 2, '1', 'asdas', 'dasd', NULL, '2025-05-18 05:43:03');
INSERT INTO `contract_project` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `project_id`, `old_project_id`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (78, NULL, NULL, 42, '2025-05-16', 3, '2', 'asd', 'dasd', NULL, '2025-05-18 05:43:15');
COMMIT;

-- ----------------------------
-- Table structure for contracts
-- ----------------------------
DROP TABLE IF EXISTS `contracts`;
CREATE TABLE `contracts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` bigint unsigned NOT NULL,
  `type_of_contract_print` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_on` date DEFAULT NULL,
  `send_on` date DEFAULT NULL,
  `received_on` date DEFAULT NULL,
  `job_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `no_surat_keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hti_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_employment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_employment_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date_from_previous` date DEFAULT NULL,
  `is_ex_dge` tinyint(1) DEFAULT NULL,
  `ex_dge_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_ex_nsn` tinyint(1) DEFAULT '0',
  `ex_nsn_note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `rehire_date` date DEFAULT NULL,
  `start_payroll` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stream` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_status_remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pengangkatan` date DEFAULT NULL,
  `tanggal_permanent` date DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `resign_date` date DEFAULT NULL,
  `temporary_extension` date DEFAULT NULL,
  `further_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_resign` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `performance_review_amount` int DEFAULT NULL,
  `recon_payroll` tinyint(1) DEFAULT '0',
  `recon_process_in_payroll` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homebase` bigint DEFAULT NULL,
  `department` bigint DEFAULT NULL,
  `division` bigint DEFAULT NULL,
  `project` bigint DEFAULT NULL,
  `position` bigint DEFAULT NULL,
  `business_unit` bigint DEFAULT NULL,
  `hay_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_allowance` int DEFAULT NULL,
  `has_sign_in_bonus` tinyint(1) DEFAULT '0',
  `sign_in_bonus` int DEFAULT NULL,
  `sign_in_bonus_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relocating_allowance` int DEFAULT NULL,
  `immediate_superior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_salary` int DEFAULT NULL,
  `project_base` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_payslip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scope_of_salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cdo_entitlement` tinyint(1) DEFAULT '1',
  `wee_hours_entitlement` tinyint(1) DEFAULT '1',
  `jamsostek_entitlement` tinyint(1) DEFAULT '1',
  `insurance_entitlement` tinyint(1) DEFAULT '1',
  `expatriate_entitlement` tinyint(1) DEFAULT '1',
  `travel_allowance_entitlement` tinyint(1) DEFAULT '1',
  `thr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_blacklisted` tinyint(1) DEFAULT '0',
  `blacklist_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `penalty_amount` decimal(15,2) DEFAULT NULL,
  `transfer_dates` json DEFAULT NULL,
  `amount_transferred` json DEFAULT NULL,
  `received_dates` json DEFAULT NULL,
  `amount_received` json DEFAULT NULL,
  `received_dge_bank` json DEFAULT NULL,
  `fund_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bt_period` json DEFAULT NULL,
  `allowance_bt_amount` json DEFAULT NULL,
  `btid_no_settled_id` json DEFAULT NULL,
  `exp_without_bt_amount` json DEFAULT NULL,
  `start_claim_date` json DEFAULT NULL,
  `deduct_last_payment_period` date DEFAULT NULL,
  `deduct_last_payment_amount` decimal(15,2) DEFAULT NULL,
  `deduct_salary_period` date DEFAULT NULL,
  `deduct_salary_amount` decimal(15,2) DEFAULT NULL,
  `recon_to_hti_in_brd_period` date DEFAULT NULL,
  `amount_recon_to_hti` decimal(15,2) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_limit` int DEFAULT NULL,
  `parking_allowance` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contract_histories_created_by_foreign` (`created_by`),
  KEY `contract_histories_updated_by_foreign` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contracts
-- ----------------------------
BEGIN;
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (17, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTI001', '1', 'Earum qui quidem sunt esse magnam id ipsa quam quis corporis cupiditate facere', '1984-11-10', 0, 'Fugiat dolor minus quae nostrud repudiandae veniam blanditiis', 0, NULL, '1979-08-04', '2003-03-10', '2024-07-23', NULL, 'Permanent', NULL, '2025-03-07', '2025-03-08', NULL, NULL, NULL, '1970-06-10', 'Freelance', 'Nostrud deserunt est', 1000000, 0, NULL, 10, 2, 5, 4, 8, 8, '14', NULL, 1, 1000000, 'Continue', 'abc123', 'abc123', NULL, 'Veniam deserunt similique in molestias et distinctio Accusamus veniam et Nam itaque aliquid adipisicing', 12000000, 'Sunt aut sed est sed elit amet deserunt consequatur ducimus aut accusantium earum dolore qui ut dolores unde atque dolor', NULL, NULL, 0, 0, 0, 0, 0, 0, 'No THR', 'Tenaga Ahli', 'C', 0, NULL, 500000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200000, 300000, '2025-03-06 04:38:04', '2025-05-04 13:01:28', NULL, NULL);
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (22, 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTI002', '1', 'Dolor nihil eu quasi reiciendis laudantium sed ut magna est sint unde sit odit quam irure iure doloribus', '1996-11-18', 0, 'Voluptatibus dolorum repellendus Laudantium aut deserunt officiis quo', 0, NULL, '2006-01-18', '2011-07-18', NULL, NULL, 'Contract', 'Test', '1993-11-14', '1973-12-10', '2025-03-06', '2025-03-31', NULL, '1999-10-14', 'Transfer to HTI', 'Est minus ut incidi', NULL, 0, NULL, 13, 6, 2, 4, 1, 6, '13', NULL, 0, NULL, NULL, 'tebet', 'tebet', NULL, 'Esse pariatur Earum ut cupidatat nisi neque corrupti quod anim magnam ut earum sed', NULL, 'Voluptatem Ut aute est aspernatur minus odio iusto veniam architecto illum ut et cum dolores', NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 'Net', 'C', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000000, NULL, '2025-03-06 10:34:05', '2025-05-04 13:00:56', NULL, NULL);
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (30, 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTI003', '10', 'Dolor nihil eu quasi reiciendis laudantium sed ut magna est sint unde sit odit quam irure iure doloribus', '1996-11-18', 0, 'Voluptatibus dolorum repellendus Laudantium aut deserunt officiis quo', 0, NULL, NULL, NULL, '2025-04-03', NULL, 'Permanent', 'test Remark', '1993-11-14', '1973-12-10', NULL, NULL, NULL, '1999-10-14', 'Transfer to HTI', 'Est minus ut incidi', 850000, 0, NULL, 13, 6, 2, 4, 1, 6, '13', NULL, 0, NULL, NULL, 'tebet', 'tebet', 100000, 'Esse pariatur Earum ut cupidatat nisi neque corrupti quod anim magnam ut earum sed', 15000000, 'Voluptatem Ut aute est aspernatur minus odio iusto veniam architecto illum ut et cum dolores', NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 'Net', 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000000, 1000000, '2025-03-13 08:28:27', '2025-04-29 04:27:41', NULL, NULL);
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (31, 113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTI004', '1', 'Enim laudantium necessitatibus fugit quo dolor cum', '2024-02-28', 0, 'Officia magnam nobis officiis quod voluptas dicta ut illo', 0, NULL, '2025-03-06', '2008-09-06', '2025-01-01', NULL, 'Contract', 'Test Remark', NULL, NULL, '2025-03-06', '2025-12-26', NULL, '2023-10-01', 'Transfer to Other Company', 'Ut molestias quae mo', 8000000, 0, NULL, 17, 6, 5, 2, 2, 8, '14', 1400000, 1, 1000000, 'Continue', 'abc123', 'abc123', 650000, 'Dolorem placeat excepturi ut velit impedit officia sit quo sunt nihil magnam', 10000000, 'Cumque irure earum dolor iure lorem sunt', NULL, NULL, 0, 0, 0, 0, 0, 0, 'Prorate', 'Tenaga Ahli', 'DCPE', 1, 'asdasdas', 1231231231.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 700000, 500000, '2025-03-18 08:21:02', '2025-05-17 16:45:05', NULL, NULL);
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (36, 113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTI004', '1', 'Enim laudantium necessitatibus fugit quo dolor cum', '2024-02-28', NULL, 'Officia magnam nobis officiis quod voluptas dicta ut illo', 0, NULL, '2025-03-06', '2008-09-06', '2025-01-01', 'ARP FGDP', 'Contract', 'Test Remark', NULL, NULL, '2025-03-06', '2025-12-26', NULL, '2023-10-01', 'Transfer to Other Company', 'Ut molestias quae mo', 8000000, 0, NULL, 17, 6, 5, 2, 2, 8, '14', 14000, 1, 1000000, 'Continue', 'abc123', 'abc123', 6500, 'Dolorem placeat excepturi ut velit impedit officia sit quo sunt nihil magnam', 10000000, 'Cumque irure earum dolor iure lorem sunt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Prorate', 'Tenaga Ahli', 'DCPE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 700000, 500000, '2025-05-17 16:38:36', '2025-05-17 16:38:36', NULL, NULL);
INSERT INTO `contracts` (`id`, `employee_id`, `type_of_contract_print`, `employment`, `print_on`, `send_on`, `received_on`, `job_status`, `reference`, `sent_remark`, `no_surat_keterangan`, `fullname`, `hti_id`, `previous_employment`, `previous_employment_remark`, `join_date_from_previous`, `is_ex_dge`, `ex_dge_note`, `is_ex_nsn`, `ex_nsn_note`, `join_date`, `rehire_date`, `start_payroll`, `stream`, `employee_status`, `employee_status_remark`, `tanggal_pengangkatan`, `tanggal_permanent`, `contract_start_date`, `contract_end_date`, `resign_date`, `temporary_extension`, `further_status`, `reason_resign`, `performance_review_amount`, `recon_payroll`, `recon_process_in_payroll`, `homebase`, `department`, `division`, `project`, `position`, `business_unit`, `hay_level`, `position_allowance`, `has_sign_in_bonus`, `sign_in_bonus`, `sign_in_bonus_type`, `original_workbase`, `current_workbase`, `relocating_allowance`, `immediate_superior`, `basic_salary`, `project_base`, `area_payslip`, `scope_of_salary`, `cdo_entitlement`, `wee_hours_entitlement`, `jamsostek_entitlement`, `insurance_entitlement`, `expatriate_entitlement`, `travel_allowance_entitlement`, `thr`, `tax_type`, `category`, `is_blacklisted`, `blacklist_reason`, `penalty_amount`, `transfer_dates`, `amount_transferred`, `received_dates`, `amount_received`, `received_dge_bank`, `fund_source`, `bt_period`, `allowance_bt_amount`, `btid_no_settled_id`, `exp_without_bt_amount`, `start_claim_date`, `deduct_last_payment_period`, `deduct_last_payment_amount`, `deduct_salary_period`, `deduct_salary_amount`, `recon_to_hti_in_brd_period`, `amount_recon_to_hti`, `password`, `phone_limit`, `parking_allowance`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (42, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Et aspernatur et voluptas voluptatibus dolore cum tenetur at dolor delectus ad', '1', 'Voluptate quam et praesentium consectetur consequuntur cupiditate aperiam', '1992-10-12', NULL, 'Anim voluptates in deleniti reprehenderit ipsam odit fugiat eiusmod sit soluta laborum tempor ullamco', 0, NULL, '2025-02-02', '1994-01-22', '2025-01-01', 'ARP FGDP', 'Contract', NULL, NULL, NULL, '2025-05-02', '2025-05-31', '1979-05-18', '1990-07-02', 'Terminate Black List', 'Eaque rerum tenetur ', NULL, 0, NULL, 17, 2, 1, 3, 2, 5, 'Ea alias eu minima doloremque in in tempora excepteur', 1000000, NULL, NULL, NULL, 'abc123', 'abc123', 1000000, 'Rerum aut delectus vero sint at non voluptatem voluptatum veritatis blanditiis enim assumenda vitae rerum incidunt quos dolorem dolor accusantium', 20000000, 'Et commodo non sequi doloremque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tenaga Ahli', 'ARP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 123123, 123123, '2025-05-18 05:26:58', '2025-05-18 05:43:15', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for copy_old_ids
-- ----------------------------
DROP TABLE IF EXISTS `copy_old_ids`;
CREATE TABLE `copy_old_ids` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `old_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `copy_old_ids_created_by_foreign` (`created_by`),
  KEY `copy_old_ids_updated_by_foreign` (`updated_by`),
  CONSTRAINT `copy_old_ids_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `copy_old_ids_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of copy_old_ids
-- ----------------------------
BEGIN;
INSERT INTO `copy_old_ids` (`id`, `created_by`, `updated_by`, `old_id`, `new_id`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, '1232', '12342', '2024-05-21 08:01:08', '2024-08-08 04:15:00');
INSERT INTO `copy_old_ids` (`id`, `created_by`, `updated_by`, `old_id`, `new_id`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'H11111', 'H2222', '2024-08-08 04:14:27', '2024-08-08 04:14:27');
INSERT INTO `copy_old_ids` (`id`, `created_by`, `updated_by`, `old_id`, `new_id`, `created_at`, `updated_at`) VALUES (4, 1, NULL, 'H22327', 'H22338', '2024-08-20 08:50:47', '2024-08-20 08:50:47');
INSERT INTO `copy_old_ids` (`id`, `created_by`, `updated_by`, `old_id`, `new_id`, `created_at`, `updated_at`) VALUES (5, 1, NULL, 'H12345', 'H22341', '2024-08-22 04:29:31', '2024-08-22 04:29:31');
INSERT INTO `copy_old_ids` (`id`, `created_by`, `updated_by`, `old_id`, `new_id`, `created_at`, `updated_at`) VALUES (6, 1, NULL, 'H111111', 'H22342', '2024-08-22 04:35:17', '2024-08-22 04:35:17');
COMMIT;

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `countries_code_unique` (`code`),
  KEY `countries_region_id_foreign` (`region_id`),
  KEY `countries_created_by_foreign` (`created_by`),
  KEY `countries_updated_by_foreign` (`updated_by`),
  CONSTRAINT `countries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `countries_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `countries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of countries
-- ----------------------------
BEGIN;
INSERT INTO `countries` (`id`, `created_by`, `updated_by`, `name`, `code`, `region_id`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Indonesia', '21', 1, NULL, '2024-08-06 12:35:52');
INSERT INTO `countries` (`id`, `created_by`, `updated_by`, `name`, `code`, `region_id`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Malaysia', '34', 1, '2024-05-21 08:45:29', '2024-08-06 12:36:14');
COMMIT;

-- ----------------------------
-- Table structure for credit_letters
-- ----------------------------
DROP TABLE IF EXISTS `credit_letters`;
CREATE TABLE `credit_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `credit_letters_employee_id_foreign` (`employee_id`),
  KEY `credit_letters_created_by_foreign` (`created_by`),
  KEY `credit_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `credit_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `credit_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `credit_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of credit_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for currencies
-- ----------------------------
DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `currency_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `currencies_created_by_foreign` (`created_by`),
  KEY `currencies_updated_by_foreign` (`updated_by`),
  CONSTRAINT `currencies_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `currencies_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of currencies
-- ----------------------------
BEGIN;
INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `currency_name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Dolar', '2024-05-21 05:23:26', '2024-05-21 05:23:26');
INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `currency_name`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'Rupiah', '2024-05-21 05:23:45', '2024-05-21 05:24:29');
INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `currency_name`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 'Yuan', '2024-07-01 08:42:03', '2024-08-09 04:44:13');
INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `currency_name`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'yen', '2024-07-01 08:42:39', '2024-07-01 08:42:39');
INSERT INTO `currencies` (`id`, `created_by`, `updated_by`, `currency_name`, `created_at`, `updated_at`) VALUES (6, NULL, NULL, 'Rupee', '2024-08-09 04:44:33', '2024-08-09 04:44:33');
COMMIT;

-- ----------------------------
-- Table structure for current_workbases
-- ----------------------------
DROP TABLE IF EXISTS `current_workbases`;
CREATE TABLE `current_workbases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `current_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_current_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `current_workbase_histories_created_by_foreign` (`created_by`),
  KEY `current_workbase_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `current_workbase_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `current_workbase_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of current_workbases
-- ----------------------------
BEGIN;
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (9, 62, '2025-02-01', 'Cakung', NULL, NULL, NULL, NULL, NULL, '2025-02-21 07:58:28', '2025-02-21 07:58:28', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (25, 17, '2025-03-07', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-03-06 04:38:05', '2025-03-06 04:38:05', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (28, 17, '2025-03-21', 'Kuningan', 'abc123', NULL, NULL, NULL, 'asdasd', '2025-03-06 10:00:59', '2025-03-06 10:00:59', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (29, 22, '1993-11-14', 'tebet', NULL, NULL, NULL, NULL, NULL, '2025-03-06 10:34:05', '2025-03-06 10:34:05', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (33, 30, '1993-11-14', 'tebet', NULL, NULL, NULL, NULL, NULL, '2025-03-13 08:28:27', '2025-03-13 08:28:27', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (34, 31, NULL, 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-03-18 08:21:02', '2025-03-18 08:21:02', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (39, 36, '2025-03-06', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-05-17 16:38:36', '2025-05-17 16:38:36', NULL, NULL);
INSERT INTO `current_workbases` (`id`, `contract_id`, `effective_date`, `current_workbase`, `old_current_workbase`, `reason`, `ref_no`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (49, 42, '2025-05-02', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-05-18 05:26:58', '2025-05-18 05:26:58', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for deduction_types
-- ----------------------------
DROP TABLE IF EXISTS `deduction_types`;
CREATE TABLE `deduction_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of deduction_types
-- ----------------------------
BEGIN;
INSERT INTO `deduction_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES (1, 'Absent', NULL, NULL, NULL);
INSERT INTO `deduction_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES (2, 'Advance', NULL, NULL, NULL);
INSERT INTO `deduction_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES (4, 'THR', 'Tunjangan Hari Raya', '2025-04-23 03:44:03', '2025-04-23 03:44:03');
COMMIT;

-- ----------------------------
-- Table structure for deductions
-- ----------------------------
DROP TABLE IF EXISTS `deductions`;
CREATE TABLE `deductions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type_of_deduction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_deduction` date NOT NULL,
  `period_timesheet` date NOT NULL,
  `total_days` int DEFAULT NULL,
  `amount` int NOT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deductionable_id` bigint DEFAULT NULL,
  `deductionable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `deductions_employee_id_foreign` (`employee_id`),
  KEY `deductions_created_by_foreign` (`created_by`),
  KEY `deductions_updated_by_foreign` (`updated_by`),
  CONSTRAINT `deductions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `deductions_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `deductions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of deductions
-- ----------------------------
BEGIN;
INSERT INTO `deductions` (`id`, `created_by`, `updated_by`, `employee_id`, `type_of_deduction`, `date_of_deduction`, `period_timesheet`, `total_days`, `amount`, `remark`, `deductionable_id`, `deductionable_type`, `created_at`, `updated_at`) VALUES (155, 1, NULL, 113, '1', '2025-03-13', '2025-03-01', NULL, 4000000, NULL, 37, 'App\\Models\\Advance', '2025-03-23 13:55:10', '2025-03-23 13:55:10');
INSERT INTO `deductions` (`id`, `created_by`, `updated_by`, `employee_id`, `type_of_deduction`, `date_of_deduction`, `period_timesheet`, `total_days`, `amount`, `remark`, `deductionable_id`, `deductionable_type`, `created_at`, `updated_at`) VALUES (157, 1, 1, 113, '2', '2025-04-25', '2025-04-01', 1, 2000000, 'Kasbon', NULL, NULL, '2025-04-26 13:25:46', '2025-04-28 14:50:49');
INSERT INTO `deductions` (`id`, `created_by`, `updated_by`, `employee_id`, `type_of_deduction`, `date_of_deduction`, `period_timesheet`, `total_days`, `amount`, `remark`, `deductionable_id`, `deductionable_type`, `created_at`, `updated_at`) VALUES (163, 1, NULL, 113, '2', '2025-04-22', '2025-04-01', NULL, 2000000, 'THR 2025', 39, 'App\\Models\\Advance', '2025-04-28 11:28:33', '2025-04-28 11:28:33');
INSERT INTO `deductions` (`id`, `created_by`, `updated_by`, `employee_id`, `type_of_deduction`, `date_of_deduction`, `period_timesheet`, `total_days`, `amount`, `remark`, `deductionable_id`, `deductionable_type`, `created_at`, `updated_at`) VALUES (165, 1, NULL, 113, '2', '2025-05-01', '2025-05-01', NULL, 120000, 'Kasbon', 41, 'App\\Models\\Advance', '2025-05-02 03:58:56', '2025-05-02 03:58:56');
COMMIT;

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `departments_created_by_foreign` (`created_by`),
  KEY `departments_updated_by_foreign` (`updated_by`),
  CONSTRAINT `departments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `departments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of departments
-- ----------------------------
BEGIN;
INSERT INTO `departments` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Human Resource', NULL, NULL);
INSERT INTO `departments` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (2, NULL, 1, 'Keuangan', NULL, '2025-02-10 15:12:21');
INSERT INTO `departments` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (6, 1, NULL, 'abc123', '2025-02-11 12:01:52', '2025-02-11 12:01:52');
COMMIT;

-- ----------------------------
-- Table structure for divisions
-- ----------------------------
DROP TABLE IF EXISTS `divisions`;
CREATE TABLE `divisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `divisions_created_by_foreign` (`created_by`),
  KEY `divisions_updated_by_foreign` (`updated_by`),
  CONSTRAINT `divisions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `divisions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of divisions
-- ----------------------------
BEGIN;
INSERT INTO `divisions` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'IT', NULL, NULL);
INSERT INTO `divisions` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'Umum', NULL, NULL);
INSERT INTO `divisions` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (5, 1, NULL, 'abc123', '2025-02-11 12:01:59', '2025-02-11 12:01:59');
COMMIT;

-- ----------------------------
-- Table structure for e_slips
-- ----------------------------
DROP TABLE IF EXISTS `e_slips`;
CREATE TABLE `e_slips` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `record_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `record_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empno` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `check_to_email` tinyint(1) NOT NULL DEFAULT '0',
  `cc_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `check_cc_email` tinyint(1) NOT NULL DEFAULT '0',
  `bcc_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `period_payslip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `e_slips_employee_id_foreign` (`employee_id`),
  KEY `e_slips_created_by_foreign` (`created_by`),
  KEY `e_slips_updated_by_foreign` (`updated_by`),
  CONSTRAINT `e_slips_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `e_slips_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `e_slips_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of e_slips
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for education
-- ----------------------------
DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `education_employee_id_foreign` (`employee_id`),
  KEY `education_created_by_foreign` (`created_by`),
  KEY `education_updated_by_foreign` (`updated_by`),
  CONSTRAINT `education_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `education_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `education_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of education
-- ----------------------------
BEGIN;
INSERT INTO `education` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `name`, `major`, `period`, `end_date`, `place`, `graduate`, `created_at`, `updated_at`) VALUES (19, 1, 1, 113, 'SD', 'SD 01 Petang Jakarta Timur', NULL, '1993', '31-Oct-1993', 'Jakarta timur', '1', '2025-05-04 13:06:44', '2025-05-04 13:07:01');
INSERT INTO `education` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `name`, `major`, `period`, `end_date`, `place`, `graduate`, `created_at`, `updated_at`) VALUES (20, 1, NULL, 113, 'SMP', 'SMP 6 Jakarta', NULL, '1999', '31-Oct-1999', 'Jakarta', '1', '2025-05-04 13:07:28', '2025-05-04 13:07:28');
INSERT INTO `education` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `name`, `major`, `period`, `end_date`, `place`, `graduate`, `created_at`, `updated_at`) VALUES (21, 1, NULL, 113, 'SMA', 'SM 59 Jakarta', 'IPS', '2002', '31-Oct-2002', 'Jakarta', '1', '2025-05-04 13:07:54', '2025-05-04 13:07:54');
INSERT INTO `education` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `name`, `major`, `period`, `end_date`, `place`, `graduate`, `created_at`, `updated_at`) VALUES (22, 1, NULL, 113, 'S1', 'Universita Muhammadiyah', 'Teknik Informatika', '2006', '31-Oct-2006', 'Jakrta', '1', '2025-05-04 13:08:39', '2025-05-04 13:08:39');
COMMIT;

-- ----------------------------
-- Table structure for employee_additional_details
-- ----------------------------
DROP TABLE IF EXISTS `employee_additional_details`;
CREATE TABLE `employee_additional_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `employee_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking_allowance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_effective_date` date DEFAULT NULL,
  `insurance_remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_registered` tinyint DEFAULT NULL,
  `send_data_insurance_to_bni_on` date DEFAULT NULL,
  `cut_off_insurance` tinyint DEFAULT NULL,
  `cut_off_insurance_date` date DEFAULT NULL,
  `jamsostek_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_her_reg_jamsostek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpjs_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_bpjs_soft_copy` tinyint(1) DEFAULT NULL,
  `bpjs_no_soft_copy_receive_on` date DEFAULT NULL,
  `bpjs_no_soft_copy_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_bpjs_hard_copy` tinyint(1) DEFAULT NULL,
  `bpjs_no_hard_copy_receive_on` date DEFAULT NULL,
  `bpjs_no_hard_copy_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpjs_registered` date DEFAULT NULL,
  `bpjs_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpjs_pension` date DEFAULT NULL,
  `personal_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hti_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_print_on` date DEFAULT NULL,
  `id_card_sent_on` date DEFAULT NULL,
  `id_card_receive_on` date DEFAULT NULL,
  `id_card_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completeness_personal_data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `induction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_dge` tinyint(1) DEFAULT NULL,
  `dge` date DEFAULT NULL,
  `is_neo_huaweii` tinyint(1) DEFAULT NULL,
  `neo_huaweii` date DEFAULT NULL,
  `is_lvc_neo` tinyint(1) DEFAULT NULL,
  `lvc_neo` date DEFAULT NULL,
  `breakdown_shift` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_takwim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `netto_sebelum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pph_sebelum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_data_spt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_email_received_from_hti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `case` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hti_asset` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date` date DEFAULT NULL,
  `action_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_to_hti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_from_hti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date_2` date DEFAULT NULL,
  `action_type_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_to_hti_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_from_hti_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date_3` date DEFAULT NULL,
  `action_type_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_to_hti_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_from_hti_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_date_4` date DEFAULT NULL,
  `action_type_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_to_hti_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_from_hti_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_additional_details_employee_id_foreign` (`employee_id`),
  KEY `employee_additional_details_created_by_foreign` (`created_by`),
  KEY `employee_additional_details_updated_by_foreign` (`updated_by`),
  CONSTRAINT `employee_additional_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `employee_additional_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of employee_additional_details
-- ----------------------------
BEGIN;
INSERT INTO `employee_additional_details` (`id`, `created_by`, `updated_by`, `employee_id`, `employee_no`, `order_number`, `mother_name`, `blood`, `weight`, `height`, `ethnic`, `pos_code`, `no_telephone`, `telephone`, `parking_allowance`, `insurance_plan`, `insurance_effective_date`, `insurance_remark`, `insurance_no`, `insurance_registered`, `send_data_insurance_to_bni_on`, `cut_off_insurance`, `cut_off_insurance_date`, `jamsostek_remark`, `from_her_reg_jamsostek`, `bpjs_no`, `is_bpjs_soft_copy`, `bpjs_no_soft_copy_receive_on`, `bpjs_no_soft_copy_by`, `is_bpjs_hard_copy`, `bpjs_no_hard_copy_receive_on`, `bpjs_no_hard_copy_by`, `bpjs_registered`, `bpjs_amount`, `bpjs_pension`, `personal_email`, `hti_email`, `id_card_print_on`, `id_card_sent_on`, `id_card_receive_on`, `id_card_to`, `id_card_remark`, `completeness_personal_data`, `induction`, `is_dge`, `dge`, `is_neo_huaweii`, `neo_huaweii`, `is_lvc_neo`, `lvc_neo`, `breakdown_shift`, `tahun_takwim`, `netto_sebelum`, `pph_sebelum`, `created_data_spt`, `info_email_received_from_hti`, `case`, `hti_asset`, `action_date`, `action_type`, `result`, `info_to_hti`, `response_from_hti`, `action_date_2`, `action_type_2`, `result_2`, `info_to_hti_2`, `response_from_hti_2`, `action_date_3`, `action_type_3`, `result_3`, `info_to_hti_3`, `response_from_hti_3`, `action_date_4`, `action_type_4`, `result_4`, `info_to_hti_4`, `response_from_hti_4`, `created_at`, `updated_at`) VALUES (42, 1, 1, 113, NULL, NULL, 'LAla', '0', '64', '175', 'Padang', '16435', '087878719285', '021345345', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asfj@gmail.com', 'sdfsd@huawei.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-22 12:55:53', '2025-05-04 13:26:06');
INSERT INTO `employee_additional_details` (`id`, `created_by`, `updated_by`, `employee_id`, `employee_no`, `order_number`, `mother_name`, `blood`, `weight`, `height`, `ethnic`, `pos_code`, `no_telephone`, `telephone`, `parking_allowance`, `insurance_plan`, `insurance_effective_date`, `insurance_remark`, `insurance_no`, `insurance_registered`, `send_data_insurance_to_bni_on`, `cut_off_insurance`, `cut_off_insurance_date`, `jamsostek_remark`, `from_her_reg_jamsostek`, `bpjs_no`, `is_bpjs_soft_copy`, `bpjs_no_soft_copy_receive_on`, `bpjs_no_soft_copy_by`, `is_bpjs_hard_copy`, `bpjs_no_hard_copy_receive_on`, `bpjs_no_hard_copy_by`, `bpjs_registered`, `bpjs_amount`, `bpjs_pension`, `personal_email`, `hti_email`, `id_card_print_on`, `id_card_sent_on`, `id_card_receive_on`, `id_card_to`, `id_card_remark`, `completeness_personal_data`, `induction`, `is_dge`, `dge`, `is_neo_huaweii`, `neo_huaweii`, `is_lvc_neo`, `lvc_neo`, `breakdown_shift`, `tahun_takwim`, `netto_sebelum`, `pph_sebelum`, `created_data_spt`, `info_email_received_from_hti`, `case`, `hti_asset`, `action_date`, `action_type`, `result`, `info_to_hti`, `response_from_hti`, `action_date_2`, `action_type_2`, `result_2`, `info_to_hti_2`, `response_from_hti_2`, `action_date_3`, `action_type_3`, `result_3`, `info_to_hti_3`, `response_from_hti_3`, `action_date_4`, `action_type_4`, `result_4`, `info_to_hti_4`, `response_from_hti_4`, `created_at`, `updated_at`) VALUES (48, 1, NULL, 121, NULL, NULL, NULL, NULL, '55', '168', 'Sunda', '21376', NULL, '022234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hjdbsf@gmail.com', 'llnsn@huawei.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-05 10:42:02', '2025-03-05 10:42:02');
INSERT INTO `employee_additional_details` (`id`, `created_by`, `updated_by`, `employee_id`, `employee_no`, `order_number`, `mother_name`, `blood`, `weight`, `height`, `ethnic`, `pos_code`, `no_telephone`, `telephone`, `parking_allowance`, `insurance_plan`, `insurance_effective_date`, `insurance_remark`, `insurance_no`, `insurance_registered`, `send_data_insurance_to_bni_on`, `cut_off_insurance`, `cut_off_insurance_date`, `jamsostek_remark`, `from_her_reg_jamsostek`, `bpjs_no`, `is_bpjs_soft_copy`, `bpjs_no_soft_copy_receive_on`, `bpjs_no_soft_copy_by`, `is_bpjs_hard_copy`, `bpjs_no_hard_copy_receive_on`, `bpjs_no_hard_copy_by`, `bpjs_registered`, `bpjs_amount`, `bpjs_pension`, `personal_email`, `hti_email`, `id_card_print_on`, `id_card_sent_on`, `id_card_receive_on`, `id_card_to`, `id_card_remark`, `completeness_personal_data`, `induction`, `is_dge`, `dge`, `is_neo_huaweii`, `neo_huaweii`, `is_lvc_neo`, `lvc_neo`, `breakdown_shift`, `tahun_takwim`, `netto_sebelum`, `pph_sebelum`, `created_data_spt`, `info_email_received_from_hti`, `case`, `hti_asset`, `action_date`, `action_type`, `result`, `info_to_hti`, `response_from_hti`, `action_date_2`, `action_type_2`, `result_2`, `info_to_hti_2`, `response_from_hti_2`, `action_date_3`, `action_type_3`, `result_3`, `info_to_hti_3`, `response_from_hti_3`, `action_date_4`, `action_type_4`, `result_4`, `info_to_hti_4`, `response_from_hti_4`, `created_at`, `updated_at`) VALUES (49, 1, 1, 123, NULL, NULL, NULL, NULL, '72', '171', 'Betawi', '39282', NULL, '021234234', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iou@gmail.com', 'poihgv@huawei.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-05 11:18:37', '2025-04-21 06:17:12');
INSERT INTO `employee_additional_details` (`id`, `created_by`, `updated_by`, `employee_id`, `employee_no`, `order_number`, `mother_name`, `blood`, `weight`, `height`, `ethnic`, `pos_code`, `no_telephone`, `telephone`, `parking_allowance`, `insurance_plan`, `insurance_effective_date`, `insurance_remark`, `insurance_no`, `insurance_registered`, `send_data_insurance_to_bni_on`, `cut_off_insurance`, `cut_off_insurance_date`, `jamsostek_remark`, `from_her_reg_jamsostek`, `bpjs_no`, `is_bpjs_soft_copy`, `bpjs_no_soft_copy_receive_on`, `bpjs_no_soft_copy_by`, `is_bpjs_hard_copy`, `bpjs_no_hard_copy_receive_on`, `bpjs_no_hard_copy_by`, `bpjs_registered`, `bpjs_amount`, `bpjs_pension`, `personal_email`, `hti_email`, `id_card_print_on`, `id_card_sent_on`, `id_card_receive_on`, `id_card_to`, `id_card_remark`, `completeness_personal_data`, `induction`, `is_dge`, `dge`, `is_neo_huaweii`, `neo_huaweii`, `is_lvc_neo`, `lvc_neo`, `breakdown_shift`, `tahun_takwim`, `netto_sebelum`, `pph_sebelum`, `created_data_spt`, `info_email_received_from_hti`, `case`, `hti_asset`, `action_date`, `action_type`, `result`, `info_to_hti`, `response_from_hti`, `action_date_2`, `action_type_2`, `result_2`, `info_to_hti_2`, `response_from_hti_2`, `action_date_3`, `action_type_3`, `result_3`, `info_to_hti_3`, `response_from_hti_3`, `action_date_4`, `action_type_4`, `result_4`, `info_to_hti_4`, `response_from_hti_4`, `created_at`, `updated_at`) VALUES (50, 1, 1, 124, NULL, '303', 'Malik Brooks', 'A', '64', '170', 'Batak', '83636', '02121212', '0212020202', 'Ab sit porro hic dol', 'Non doloribus omnis ', NULL, NULL, 'Similique do dolorem', 0, '1973-04-26', 0, '1991-10-29', 'Est quidem odio qua', 'Hic dolore fugiat qu', 'Tempore sint quia ', 1, '1970-01-27', '1213123', 1, '1970-04-24', 'Sed est culpa simil', '2004-04-08', 'Autem culpa tempor i', '2013-01-01', 'gisesyqoxi@mailinator.com', 'hifuco@mailinator.com', '2021-11-18', '1994-03-09', '2021-01-28', 'Consequat Itaque eo', 'Est dolor assumenda ', NULL, 'Enim sit est impedi', NULL, '2021-12-06', NULL, '2024-07-02', NULL, '2019-02-02', 'Sunt vel fuga Quis', 'Nobis nulla illum n', 'Aute qui ipsum tempo', 'Nulla facere dolorem', 'Esse est amet qui ', 'nalyw@mailinator.com', 'Velit suscipit beata', 'Tempore commodo eum', '1978-11-25', 'Quis reprehenderit e', 'Natus officiis ipsa', 'Tenetur sint commodo', 'Dolor possimus quis', '2023-01-06', 'Voluptate incididunt', 'Voluptates officiis ', 'Omnis velit fugiat', 'Aut facere amet eli', '1980-02-01', 'Eu illum sequi veri', 'Recusandae Vitae et', 'Molestiae fugit aut', 'Reprehenderit offici', '2003-02-15', 'Ipsa minima rerum d', 'Amet culpa rerum vo', 'Distinctio Voluptat', 'Non sapiente volupta', '2025-03-05 12:02:25', '2025-03-05 12:05:29');
INSERT INTO `employee_additional_details` (`id`, `created_by`, `updated_by`, `employee_id`, `employee_no`, `order_number`, `mother_name`, `blood`, `weight`, `height`, `ethnic`, `pos_code`, `no_telephone`, `telephone`, `parking_allowance`, `insurance_plan`, `insurance_effective_date`, `insurance_remark`, `insurance_no`, `insurance_registered`, `send_data_insurance_to_bni_on`, `cut_off_insurance`, `cut_off_insurance_date`, `jamsostek_remark`, `from_her_reg_jamsostek`, `bpjs_no`, `is_bpjs_soft_copy`, `bpjs_no_soft_copy_receive_on`, `bpjs_no_soft_copy_by`, `is_bpjs_hard_copy`, `bpjs_no_hard_copy_receive_on`, `bpjs_no_hard_copy_by`, `bpjs_registered`, `bpjs_amount`, `bpjs_pension`, `personal_email`, `hti_email`, `id_card_print_on`, `id_card_sent_on`, `id_card_receive_on`, `id_card_to`, `id_card_remark`, `completeness_personal_data`, `induction`, `is_dge`, `dge`, `is_neo_huaweii`, `neo_huaweii`, `is_lvc_neo`, `lvc_neo`, `breakdown_shift`, `tahun_takwim`, `netto_sebelum`, `pph_sebelum`, `created_data_spt`, `info_email_received_from_hti`, `case`, `hti_asset`, `action_date`, `action_type`, `result`, `info_to_hti`, `response_from_hti`, `action_date_2`, `action_type_2`, `result_2`, `info_to_hti_2`, `response_from_hti_2`, `action_date_3`, `action_type_3`, `result_3`, `info_to_hti_3`, `response_from_hti_3`, `action_date_4`, `action_type_4`, `result_4`, `info_to_hti_4`, `response_from_hti_4`, `created_at`, `updated_at`) VALUES (51, 1, 1, 125, NULL, '473', 'Haviva Noble', 'Consequatur laboriosam eos consequuntur odit quae eveniet voluptas repudiandae culpa ut et nihil', 'Cupiditate fugiat nisi eu odio molestiae ut deleniti rerum doloribus incidunt et quia maiores sit nulla sunt sed voluptatem', 'Magnam quod duis sit commodo commodo et omnis sit enim Nam irure est magni', 'Et duis a sunt aut officia dolor voluptatem est sed eveniet', 'In quidem voluptatem reprehenderit laborum ex cillum cumque qui dolore minima', '32942342', '723423423', 'Qui cupidatat vitae necessitatibus deserunt ipsa quam ab maxime consectetur', 'Pariatur Eu dolores nihil quis', NULL, NULL, 'Iusto qui eos mollit quas a consequatur autem magni autem eligendi earum minima aut ad possimus consequatur explicabo', 0, '1981-09-10', 0, '2020-11-25', 'In distinctio Placeat est aute et dolore numquam nulla dolor voluptatem fugit at', 'Cupidatat aut deleniti aut minus ipsam dolor et irure eaque iure culpa aliqua Animi dolore rem labore hic', 'Quo nihil laboriosam ex pariatur Omnis ex nobis mollit', 0, '2025-11-08', 'Qui a laboris deserunt sint laboriosam dicta distinctio Ut aut et nobis quo fugit rem ducimus mollitia', 0, '1996-12-26', 'Tempor quo illum est consectetur', '1996-01-20', 'Atque expedita ullamco aut molestias quam ad inventore et recusandae Obcaecati minus', '2016-04-04', 'pyverin@mailinator.com', 'gakohax@mailinator.com', '1973-03-01', '2015-08-02', '1977-04-09', 'Accusamus aut nisi ut magnam maiores sint sint irure facilis fugiat voluptas', 'Sit voluptatem officiis aute dolore quae et ut est ab nesciunt', NULL, 'Adipisci magna expedita Nam ut quia quia voluptates aut ut autem error ducimus laborum dolores nihil ipsam', 1, '2008-11-06', 1, '2017-01-18', 1, '1991-06-10', 'Excepturi numquam fugiat qui sint excepturi minim sed veritatis porro in rerum quia', 'Odit culpa elit modi nulla aute eaque aut quia exercitation velit vero eos fuga Autem', 'Sit ipsum nisi adipisci aut quia voluptate proident in nobis mollitia architecto ut aut quis mollit ut sit', 'Deleniti molestias doloribus voluptatem Laboriosam delectus libero omnis officia aspernatur mollitia voluptatum quasi molestias quis', 'Reprehenderit anim iste possimus eu illo doloremque porro qui consequuntur ut labore nisi ut at sequi', 'tuhoruwysa@mailinator.com', 'Aut ex sed maxime consequatur quia enim dolore', 'Ut ea velit voluptas itaque voluptatem laborum nostrum nemo aliquip eum autem illum molestiae consequatur enim dolor explicabo Est laboris', '1985-04-10', 'Eius qui quam provident iure sed similique dolores dolor occaecat recusandae Est quia', 'Veritatis ut provident blanditiis suscipit corporis voluptatem occaecat quasi modi deserunt quisquam sunt autem est sunt', 'Tenetur velit maxime vel pariatur', 'Expedita ab quod exercitationem aspernatur exercitationem corporis id placeat sunt a ea', '2002-08-21', 'Cupiditate quis aut ratione atque fugiat laudantium', 'Autem adipisicing voluptates ullamco aspernatur est qui porro rerum non', 'Nesciunt exercitationem tenetur incididunt itaque mollitia aperiam provident provident delectus sed', 'Aliquid mollit non eaque quia quo ullamco non quas', '2000-01-29', 'Enim aliquam repellendus Eos sunt at odio amet', 'Doloremque aute qui officia quas', 'Ea reprehenderit Nam quas ipsum magna esse deserunt cum', 'Et eligendi dolor ea nulla possimus adipisicing est eiusmod eu sapiente totam eum in', '2007-05-03', 'Accusantium hic ipsum porro magni mollitia non ratione', 'Esse sed dolorum qui temporibus cum cupiditate hic alias eos saepe obcaecati incididunt obcaecati neque ipsum reiciendis possimus molestias quia', 'Numquam iure provident sunt id nisi autem quis doloremque est sapiente a molestias et adipisci praesentium reprehenderit eum quas', 'Vero expedita autem nostrum a culpa fugiat lorem eos omnis et rerum eum voluptatem Dolor blanditiis cumque corporis', '2025-05-17 14:51:23', '2025-05-17 14:53:11');
COMMIT;

-- ----------------------------
-- Table structure for employee_contact_details
-- ----------------------------
DROP TABLE IF EXISTS `employee_contact_details`;
CREATE TABLE `employee_contact_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `new_office_hp_dge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_new_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_limit_new_office_dge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_office_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `simcard_provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_limit_new_office_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_office_hp2_dge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider2_new_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_limit_new_office_hp2_dge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_hp_dge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilihan_simcard` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_contact_details_employee_id_foreign` (`employee_id`),
  KEY `employee_contact_details_created_by_foreign` (`created_by`),
  KEY `employee_contact_details_updated_by_foreign` (`updated_by`),
  CONSTRAINT `employee_contact_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `employee_contact_details_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `personal_data` (`id`) ON DELETE CASCADE,
  CONSTRAINT `employee_contact_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of employee_contact_details
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `empno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_empno_unique` (`empno`),
  KEY `employees_created_by_foreign` (`created_by`),
  KEY `employees_updated_by_foreign` (`updated_by`),
  CONSTRAINT `employees_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `employees_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of employees
-- ----------------------------
BEGIN;
INSERT INTO `employees` (`id`, `created_by`, `updated_by`, `empno`, `image`, `created_at`, `updated_at`) VALUES (113, NULL, NULL, 'H0001', '01JMPVSBBSV642NCW3SJZBYWM7.jpg', '2025-02-22 12:55:53', '2025-02-22 12:58:14');
INSERT INTO `employees` (`id`, `created_by`, `updated_by`, `empno`, `image`, `created_at`, `updated_at`) VALUES (121, NULL, NULL, 'H0002', NULL, '2025-03-05 10:42:02', '2025-03-05 10:42:02');
INSERT INTO `employees` (`id`, `created_by`, `updated_by`, `empno`, `image`, `created_at`, `updated_at`) VALUES (123, NULL, NULL, 'H0004', NULL, '2025-03-05 11:18:10', '2025-03-05 11:18:10');
INSERT INTO `employees` (`id`, `created_by`, `updated_by`, `empno`, `image`, `created_at`, `updated_at`) VALUES (124, 1, 1, 'H0005', NULL, '2025-03-05 12:02:25', '2025-03-05 12:02:25');
INSERT INTO `employees` (`id`, `created_by`, `updated_by`, `empno`, `image`, `created_at`, `updated_at`) VALUES (125, 1, NULL, 'H0006', NULL, '2025-05-17 14:51:23', '2025-05-17 14:51:23');
COMMIT;

-- ----------------------------
-- Table structure for exports
-- ----------------------------
DROP TABLE IF EXISTS `exports`;
CREATE TABLE `exports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exporter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed_rows` int unsigned NOT NULL DEFAULT '0',
  `total_rows` int unsigned NOT NULL,
  `successful_rows` int unsigned NOT NULL DEFAULT '0',
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exports_user_id_foreign` (`user_id`),
  CONSTRAINT `exports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of exports
-- ----------------------------
BEGIN;
INSERT INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES (1, '2025-02-24 16:03:26', 'local', 'export-1-others-income-taxables', 'App\\Filament\\Exports\\OthersIncomeTaxableExporter', 5, 5, 5, 1, '2025-02-24 16:02:43', '2025-02-24 16:03:26');
INSERT INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES (2, '2025-02-24 16:07:00', 'local', 'export-2-others-income-taxables', 'App\\Filament\\Exports\\OthersIncomeTaxableExporter', 5, 5, 5, 1, '2025-02-24 16:06:59', '2025-02-24 16:07:00');
INSERT INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES (3, '2025-02-24 16:07:48', 'local', 'export-3-others-income-taxables', 'App\\Filament\\Exports\\OthersIncomeTaxableExporter', 5, 5, 5, 1, '2025-02-24 16:07:46', '2025-02-24 16:07:48');
COMMIT;

-- ----------------------------
-- Table structure for failed_import_rows
-- ----------------------------
DROP TABLE IF EXISTS `failed_import_rows`;
CREATE TABLE `failed_import_rows` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `data` json NOT NULL,
  `import_id` bigint unsigned NOT NULL,
  `validation_error` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `failed_import_rows_import_id_foreign` (`import_id`),
  CONSTRAINT `failed_import_rows_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `imports` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_import_rows
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for family_details
-- ----------------------------
DROP TABLE IF EXISTS `family_details`;
CREATE TABLE `family_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_marriage` date DEFAULT NULL,
  `place_marriage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birth_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handphone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `family_details_employee_id_foreign` (`employee_id`),
  KEY `family_details_created_by_foreign` (`created_by`),
  KEY `family_details_updated_by_foreign` (`updated_by`),
  CONSTRAINT `family_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `family_details_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `family_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of family_details
-- ----------------------------
BEGIN;
INSERT INTO `family_details` (`id`, `created_by`, `updated_by`, `employee_id`, `status`, `name`, `sex`, `date_marriage`, `place_marriage`, `birthday`, `birth_place`, `address`, `homephone`, `handphone`, `occupation`, `company`, `type_of_education`, `graduate`, `created_at`, `updated_at`) VALUES (26, 1, NULL, 123, '3rd Children', 'Walker Alvarado', 'Male', '2005-08-21', 'Eiusmod quia aut corrupti enim velit neque aut esse architecto inventore sunt rem culpa quod quo excepteur maxime id', '2024-05-26', 'Ab aut eos consequatur Eiusmod voluptas et totam', 'Ipsum minus est ipsum consequatur delectus autem dolorum hic enim labore eaque mollitia ipsam et veniam', '92340234', '083492423', 'Placeat fugit totam consequat Aut dignissimos sit officia ut optio voluptas dolor nostrud accusamus iure', 'Carpenter Douglas Trading', 'Ullam enim animi porro quod dolore ex libero magna', 'Quo fugiat assumenda', '2025-05-17 16:56:40', '2025-05-17 16:56:40');
COMMIT;

-- ----------------------------
-- Table structure for foreign_languages
-- ----------------------------
DROP TABLE IF EXISTS `foreign_languages`;
CREATE TABLE `foreign_languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `writing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_languages_employee_id_foreign` (`employee_id`),
  KEY `foreign_languages_created_by_foreign` (`created_by`),
  KEY `foreign_languages_updated_by_foreign` (`updated_by`),
  CONSTRAINT `foreign_languages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `foreign_languages_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `foreign_languages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of foreign_languages
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for further_statuses
-- ----------------------------
DROP TABLE IF EXISTS `further_statuses`;
CREATE TABLE `further_statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `business_units_created_by_foreign` (`created_by`),
  KEY `business_units_updated_by_foreign` (`updated_by`),
  CONSTRAINT `further_statuses_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `further_statuses_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of further_statuses
-- ----------------------------
BEGIN;
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Cancell Contract', NULL, NULL);
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (2, 1, NULL, 'Freelance', '2025-03-05 13:00:24', '2025-03-05 13:00:24');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (3, 1, NULL, 'Not Extend', '2025-03-05 13:00:55', '2025-03-05 13:00:55');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (4, 1, NULL, 'Resign', '2025-03-05 13:00:59', '2025-03-05 13:00:59');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (5, 1, NULL, 'Terminate', '2025-03-05 13:01:04', '2025-03-05 13:01:04');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (6, 1, NULL, 'Terminate Black List', '2025-03-05 13:01:20', '2025-03-05 13:01:20');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (7, 1, NULL, 'Transfer to HTI', '2025-03-05 13:01:25', '2025-03-05 13:01:25');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (8, 1, NULL, 'Transfer to Other Company', '2025-03-05 13:01:30', '2025-03-05 13:01:30');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (9, 1, NULL, 'Move To New ID After 18 November 2013', '2025-03-05 13:01:36', '2025-03-05 13:01:36');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (10, 1, NULL, 'Passed away', '2025-03-05 13:01:41', '2025-03-05 13:01:41');
INSERT INTO `further_statuses` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (11, 1, NULL, 'Convert to ARP', '2025-03-05 13:01:46', '2025-03-05 13:01:46');
COMMIT;

-- ----------------------------
-- Table structure for hold_salary_processes
-- ----------------------------
DROP TABLE IF EXISTS `hold_salary_processes`;
CREATE TABLE `hold_salary_processes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `resign_date` date DEFAULT NULL,
  `further_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kary_berkesan` tinyint(1) NOT NULL DEFAULT '0',
  `hold` tinyint(1) NOT NULL DEFAULT '0',
  `info_spi_iti_tgi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` json DEFAULT NULL,
  `remark_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `take_home_pay` decimal(10,2) NOT NULL,
  `deduct_1` decimal(10,2) NOT NULL DEFAULT '0.00',
  `amount_to_transfer_1` decimal(10,2) NOT NULL,
  `deduct_remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deduct_2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `amount_to_transfer_2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hold_salary_processes_employee_id_foreign` (`employee_id`),
  KEY `hold_salary_processes_created_by_foreign` (`created_by`),
  KEY `hold_salary_processes_updated_by_foreign` (`updated_by`),
  CONSTRAINT `hold_salary_processes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `hold_salary_processes_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `hold_salary_processes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hold_salary_processes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for holds
-- ----------------------------
DROP TABLE IF EXISTS `holds`;
CREATE TABLE `holds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `holds_employee_id_foreign` (`employee_id`),
  KEY `holds_created_by_foreign` (`created_by`),
  KEY `holds_updated_by_foreign` (`updated_by`),
  CONSTRAINT `holds_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `holds_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `holds_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of holds
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for homebases
-- ----------------------------
DROP TABLE IF EXISTS `homebases`;
CREATE TABLE `homebases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `homebases_created_by_foreign` (`created_by`),
  KEY `homebases_updated_by_foreign` (`updated_by`),
  CONSTRAINT `homebases_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `homebases_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of homebases
-- ----------------------------
BEGIN;
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Cakung', '2024-05-21 04:16:16', '2024-05-21 04:16:16');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (7, NULL, NULL, 'Meruya', '2024-05-21 04:26:59', '2024-05-21 04:26:59');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (8, NULL, NULL, 'Pulo Gadung', '2024-05-21 04:27:01', '2024-05-21 04:27:01');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (9, NULL, NULL, 'Mampang', '2024-05-21 04:27:03', '2024-05-21 04:27:03');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (10, NULL, NULL, 'Kuningan', '2024-05-21 04:27:05', '2024-05-21 04:27:05');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (11, NULL, NULL, 'Panncoran', '2024-05-21 04:27:07', '2024-05-21 04:27:07');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (13, NULL, NULL, 'tebet', '2024-05-21 04:27:12', '2024-05-21 04:27:12');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (14, NULL, NULL, 'Jatinegara', '2024-07-01 08:38:35', '2024-07-01 08:40:14');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (16, 1, NULL, 'DKI Jakarta', '2025-02-11 03:47:45', '2025-02-11 03:47:45');
INSERT INTO `homebases` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (17, 1, NULL, 'abc123', '2025-02-11 12:02:09', '2025-02-11 12:02:09');
COMMIT;

-- ----------------------------
-- Table structure for hti_histories
-- ----------------------------
DROP TABLE IF EXISTS `hti_histories`;
CREATE TABLE `hti_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `job_place_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `hti_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_hti_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hti_histories_job_place_id_foreign` (`job_place_id`),
  KEY `hti_histories_created_by_foreign` (`created_by`),
  KEY `hti_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `hti_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `hti_histories_job_place_id_foreign` FOREIGN KEY (`job_place_id`) REFERENCES `job_places` (`id`) ON DELETE CASCADE,
  CONSTRAINT `hti_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hti_histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for imports
-- ----------------------------
DROP TABLE IF EXISTS `imports`;
CREATE TABLE `imports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `importer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed_rows` int unsigned NOT NULL DEFAULT '0',
  `total_rows` int unsigned NOT NULL,
  `successful_rows` int unsigned NOT NULL DEFAULT '0',
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imports_user_id_foreign` (`user_id`),
  CONSTRAINT `imports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of imports
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for incentives
-- ----------------------------
DROP TABLE IF EXISTS `incentives`;
CREATE TABLE `incentives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `award_date` date NOT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `incentives_employee_id_foreign` (`employee_id`),
  KEY `incentives_created_by_foreign` (`created_by`),
  KEY `incentives_updated_by_foreign` (`updated_by`),
  CONSTRAINT `incentives_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `incentives_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `incentives_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of incentives
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for insurance_plan_histories
-- ----------------------------
DROP TABLE IF EXISTS `insurance_plan_histories`;
CREATE TABLE `insurance_plan_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `personal_data_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `current_insurance_plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_insurance_plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `insurance_plan_histories_personal_data_id_foreign` (`personal_data_id`),
  KEY `insurance_plan_histories_created_by_foreign` (`created_by`),
  KEY `insurance_plan_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `insurance_plan_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `insurance_plan_histories_personal_data_id_foreign` FOREIGN KEY (`personal_data_id`) REFERENCES `personal_data` (`id`) ON DELETE CASCADE,
  CONSTRAINT `insurance_plan_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of insurance_plan_histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_batches_created_by_foreign` (`created_by`),
  KEY `job_batches_updated_by_foreign` (`updated_by`),
  CONSTRAINT `job_batches_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `job_batches_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of job_batches
-- ----------------------------
BEGIN;
INSERT INTO `job_batches` (`id`, `created_by`, `updated_by`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES ('9e4a25e6-64b4-4f3c-ac5f-5e31d27dd8fd', NULL, NULL, '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5666:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:10:\"created_at\";s:19:\"2025-02-24 16:02:43\";s:2:\"id\";i:1;s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:10:\"created_at\";s:19:\"2025-02-24 16:02:43\";s:2:\"id\";i:1;s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:10:\"\0*\0changes\";a:2:{s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Personal data\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Personal data\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2484:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:10:\"created_at\";s:19:\"2025-02-24 16:02:43\";s:2:\"id\";i:1;s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:10:\"created_at\";s:19:\"2025-02-24 16:02:43\";s:2:\"id\";i:1;s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:10:\"\0*\0changes\";a:2:{s:10:\"updated_at\";s:19:\"2025-02-24 16:02:44\";s:9:\"file_name\";s:31:\"export-1-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Personal data\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:1;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Personal data\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009650000000000000000\";}\";s:4:\"hash\";s:44:\"VlekilSb2ksAU2sZthvFtbHKt0LyekwgTMCEvrKelDo=\";}}}}', NULL, 1740413006, 1740413006);
INSERT INTO `job_batches` (`id`, `created_by`, `updated_by`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES ('9e4a272d-20af-4171-ae16-d1b9998de467', NULL, NULL, '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5576:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:06:59\";s:10:\"created_at\";s:19:\"2025-02-24 16:06:59\";s:2:\"id\";i:2;s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:06:59\";s:10:\"created_at\";s:19:\"2025-02-24 16:06:59\";s:2:\"id\";i:2;s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2439:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:06:59\";s:10:\"created_at\";s:19:\"2025-02-24 16:06:59\";s:2:\"id\";i:2;s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:06:59\";s:10:\"created_at\";s:19:\"2025-02-24 16:06:59\";s:2:\"id\";i:2;s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:31:\"export-2-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:2;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"00000000000009c60000000000000000\";}\";s:4:\"hash\";s:44:\"Dc6yn8Dn/4al3taOhtKCnvs4XhqXqpGxdT344YXmku0=\";}}}}', NULL, 1740413220, 1740413220);
INSERT INTO `job_batches` (`id`, `created_by`, `updated_by`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES ('9e4a2776-f2f9-41a0-a41e-f4e8089d5b5e', NULL, NULL, '', 2, 0, 0, '[]', 'a:2:{s:13:\"allowFailures\";b:1;s:7:\"finally\";a:1:{i:0;O:47:\"Laravel\\SerializableClosure\\SerializableClosure\":1:{s:12:\"serializable\";O:46:\"Laravel\\SerializableClosure\\Serializers\\Signed\":2:{s:12:\"serializable\";s:5576:\"O:46:\"Laravel\\SerializableClosure\\Serializers\\Native\":5:{s:3:\"use\";a:1:{s:4:\"next\";O:46:\"Filament\\Actions\\Exports\\Jobs\\ExportCompletion\":7:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:07:46\";s:10:\"created_at\";s:19:\"2025-02-24 16:07:46\";s:2:\"id\";i:3;s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:07:46\";s:10:\"created_at\";s:19:\"2025-02-24 16:07:46\";s:2:\"id\";i:3;s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:3;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0formats\";a:2:{i:0;E:47:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv\";i:1;E:48:\"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx\";}s:10:\"\0*\0options\";a:0:{}s:7:\"chained\";a:1:{i:0;s:2439:\"O:44:\"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile\":4:{s:11:\"\0*\0exporter\";O:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\":3:{s:9:\"\0*\0export\";O:38:\"Filament\\Actions\\Exports\\Models\\Export\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:1;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:07:46\";s:10:\"created_at\";s:19:\"2025-02-24 16:07:46\";s:2:\"id\";i:3;s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:11:\"\0*\0original\";a:8:{s:7:\"user_id\";i:1;s:8:\"exporter\";s:48:\"App\\Filament\\Exports\\OthersIncomeTaxableExporter\";s:10:\"total_rows\";i:5;s:9:\"file_disk\";s:5:\"local\";s:10:\"updated_at\";s:19:\"2025-02-24 16:07:46\";s:10:\"created_at\";s:19:\"2025-02-24 16:07:46\";s:2:\"id\";i:3;s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:10:\"\0*\0changes\";a:1:{s:9:\"file_name\";s:31:\"export-3-others-income-taxables\";}s:8:\"\0*\0casts\";a:4:{s:12:\"completed_at\";s:9:\"timestamp\";s:14:\"processed_rows\";s:7:\"integer\";s:10:\"total_rows\";s:7:\"integer\";s:15:\"successful_rows\";s:7:\"integer\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:0:{}}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}s:9:\"\0*\0export\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:38:\"Filament\\Actions\\Exports\\Models\\Export\";s:2:\"id\";i:3;s:9:\"relations\";a:0:{}s:10:\"connection\";s:5:\"mysql\";s:15:\"collectionClass\";N;}s:12:\"\0*\0columnMap\";a:5:{s:32:\"employee.personalData.first_name\";s:13:\"Employee Name\";s:14:\"employee.empno\";s:8:\"Employee\";s:6:\"period\";s:6:\"Period\";s:4:\"type\";s:4:\"Type\";s:6:\"amount\";s:6:\"Amount\";}s:10:\"\0*\0options\";a:0:{}}\";}s:19:\"chainCatchCallbacks\";a:0:{}}}s:8:\"function\";s:266:\"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }\";s:5:\"scope\";s:27:\"Illuminate\\Bus\\ChainedBatch\";s:4:\"this\";N;s:4:\"self\";s:32:\"0000000000000a0a0000000000000000\";}\";s:4:\"hash\";s:44:\"2MZQw8X3IFDrD2m9dM+apfVtvPIA9YDjxzEiBq6FMUU=\";}}}}', NULL, 1740413268, 1740413268);
COMMIT;

-- ----------------------------
-- Table structure for job_histories
-- ----------------------------
DROP TABLE IF EXISTS `job_histories`;
CREATE TABLE `job_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `reason_of_leaving` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_histories_employee_id_foreign` (`employee_id`),
  KEY `job_histories_created_by_foreign` (`created_by`),
  KEY `job_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `job_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `job_histories_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `job_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of job_histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for job_places
-- ----------------------------
DROP TABLE IF EXISTS `job_places`;
CREATE TABLE `job_places` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hti_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_employment` tinyint(1) DEFAULT NULL,
  `previous_employment_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date_from_previous` date DEFAULT NULL,
  `is_ex_nsn` tinyint(1) NOT NULL DEFAULT '0',
  `ex_nsn_note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performance_review_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performance_review_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performance_review_effective_date` date DEFAULT NULL,
  `performance_review_amount` decimal(15,2) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `rehire_date` date DEFAULT NULL,
  `start_payroll` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pengangkatan` date DEFAULT NULL,
  `tanggal_permanent` date DEFAULT NULL,
  `resign_date` date DEFAULT NULL,
  `temporary_extension` date DEFAULT NULL,
  `further_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_resign` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `recon_payroll` tinyint(1) NOT NULL DEFAULT '0',
  `recon_process_in_payroll` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hay_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_allowance` decimal(15,2) DEFAULT NULL,
  `has_sign_in_bonus` tinyint(1) NOT NULL DEFAULT '0',
  `sign_in_bonus` decimal(15,2) DEFAULT NULL,
  `sign_in_bonus_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homebase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relocating_allowance` decimal(15,2) DEFAULT NULL,
  `immediate_superior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_salary` decimal(15,2) DEFAULT NULL,
  `project_base` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_payslip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scope_of_salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cdo_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `wee_hours_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `jamsostek_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `insurance_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `expatriate_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `travel_allowance_entitlement` tinyint(1) NOT NULL DEFAULT '1',
  `thr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_blacklisted` tinyint(1) NOT NULL DEFAULT '0',
  `blacklist_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `penalty_amount` decimal(15,2) DEFAULT NULL,
  `transfer_dates` json DEFAULT NULL,
  `amount_transferred` json DEFAULT NULL,
  `received_dates` json DEFAULT NULL,
  `amount_received` json DEFAULT NULL,
  `received_dge_bank` json DEFAULT NULL,
  `fund_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bt_period` json DEFAULT NULL,
  `allowance_bt_amount` json DEFAULT NULL,
  `btid_no_settled_id` json DEFAULT NULL,
  `exp_without_bt_amount` json DEFAULT NULL,
  `start_claim_date` json DEFAULT NULL,
  `deduct_last_payment_period` date DEFAULT NULL,
  `deduct_last_payment_amount` decimal(15,2) DEFAULT NULL,
  `deduct_salary_period` date DEFAULT NULL,
  `deduct_salary_amount` decimal(15,2) DEFAULT NULL,
  `recon_to_hti_in_brd_period` date DEFAULT NULL,
  `amount_recon_to_hti` decimal(15,2) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `has_performance_review` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_places_employee_id_foreign` (`employee_id`),
  KEY `job_places_created_by_foreign` (`created_by`),
  KEY `job_places_updated_by_foreign` (`updated_by`),
  CONSTRAINT `job_places_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `job_places_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `job_places_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of job_places
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`),
  KEY `jobs_created_by_foreign` (`created_by`),
  KEY `jobs_updated_by_foreign` (`updated_by`),
  CONSTRAINT `jobs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `jobs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kecamatans
-- ----------------------------
DROP TABLE IF EXISTS `kecamatans`;
CREATE TABLE `kecamatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `kota_kabupaten_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kecamatans_code_unique` (`code`),
  KEY `kecamatans_kota_kabupaten_id_foreign` (`kota_kabupaten_id`),
  KEY `kecamatans_created_by_foreign` (`created_by`),
  KEY `kecamatans_updated_by_foreign` (`updated_by`),
  CONSTRAINT `kecamatans_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `kecamatans_kota_kabupaten_id_foreign` FOREIGN KEY (`kota_kabupaten_id`) REFERENCES `kotas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kecamatans_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kecamatans
-- ----------------------------
BEGIN;
INSERT INTO `kecamatans` (`id`, `created_by`, `updated_by`, `kota_kabupaten_id`, `name`, `code`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 1, 'Ujung Berung', '32', '2024-05-20 05:15:04', '2024-05-20 05:15:04');
INSERT INTO `kecamatans` (`id`, `created_by`, `updated_by`, `kota_kabupaten_id`, `name`, `code`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 4, 'Cempaka Putih', '324', '2024-05-20 05:22:13', '2024-08-06 11:52:59');
INSERT INTO `kecamatans` (`id`, `created_by`, `updated_by`, `kota_kabupaten_id`, `name`, `code`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 4, 'Gambir', '321', '2024-05-21 07:39:21', '2024-08-06 11:53:25');
COMMIT;

-- ----------------------------
-- Table structure for kelurahans
-- ----------------------------
DROP TABLE IF EXISTS `kelurahans`;
CREATE TABLE `kelurahans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `kecamatan_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kelurahans_code_unique` (`code`),
  KEY `kelurahans_kecamatan_id_foreign` (`kecamatan_id`),
  KEY `kelurahans_created_by_foreign` (`created_by`),
  KEY `kelurahans_updated_by_foreign` (`updated_by`),
  CONSTRAINT `kelurahans_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `kelurahans_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kelurahans_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kelurahans
-- ----------------------------
BEGIN;
INSERT INTO `kelurahans` (`id`, `created_by`, `updated_by`, `kecamatan_id`, `name`, `code`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 1, 'Pasir Endah', '123', '2024-05-20 05:55:58', '2024-05-20 05:55:58');
INSERT INTO `kelurahans` (`id`, `created_by`, `updated_by`, `kecamatan_id`, `name`, `code`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 2, 'Cempaka Putih Barat', '32', '2024-05-21 07:40:03', '2024-08-06 11:54:22');
COMMIT;

-- ----------------------------
-- Table structure for kotas
-- ----------------------------
DROP TABLE IF EXISTS `kotas`;
CREATE TABLE `kotas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `provinsi_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_kabupaten` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kotas_code_unique` (`code`),
  KEY `kotas_provinsi_id_foreign` (`provinsi_id`),
  KEY `kotas_created_by_foreign` (`created_by`),
  KEY `kotas_updated_by_foreign` (`updated_by`),
  CONSTRAINT `kotas_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `kotas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kotas_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kotas
-- ----------------------------
BEGIN;
INSERT INTO `kotas` (`id`, `created_by`, `updated_by`, `provinsi_id`, `name`, `kota_kabupaten`, `code`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 1, 'Bandung', 2, '323', '2024-05-20 03:57:11', '2024-05-20 04:20:30');
INSERT INTO `kotas` (`id`, `created_by`, `updated_by`, `provinsi_id`, `name`, `kota_kabupaten`, `code`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 2, 'Pekalongan', 1, '3234', '2024-05-20 05:25:12', '2024-05-20 05:38:17');
INSERT INTO `kotas` (`id`, `created_by`, `updated_by`, `provinsi_id`, `name`, `kota_kabupaten`, `code`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 4, 'Jakarta', 1, '3237', '2024-05-21 07:38:23', '2024-08-06 11:51:03');
INSERT INTO `kotas` (`id`, `created_by`, `updated_by`, `provinsi_id`, `name`, `kota_kabupaten`, `code`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 5, 'Yogyakarta', 1, '3219', '2024-06-04 06:31:30', '2024-08-06 11:51:21');
COMMIT;

-- ----------------------------
-- Table structure for last_payments
-- ----------------------------
DROP TABLE IF EXISTS `last_payments`;
CREATE TABLE `last_payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` bigint unsigned NOT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_income` int NOT NULL,
  `thp_to_be_release` int NOT NULL,
  `release_on` date NOT NULL,
  `amt_release` int NOT NULL,
  `via` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `last_payments_employee_id_foreign` (`employee_id`),
  KEY `last_payments_created_by_foreign` (`created_by`),
  KEY `last_payments_updated_by_foreign` (`updated_by`),
  CONSTRAINT `last_payments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `last_payments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `last_payments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of last_payments
-- ----------------------------
BEGIN;
INSERT INTO `last_payments` (`id`, `employee_id`, `period`, `gross_income`, `thp_to_be_release`, `release_on`, `amt_release`, `via`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (2, 113, '2025-02-01 00:00:00', 1200000, 1000000, '2025-02-27', 1200000, 'Cash', 1, NULL, '2025-02-27 04:33:04', '2025-02-27 04:33:04');
COMMIT;

-- ----------------------------
-- Table structure for leaves
-- ----------------------------
DROP TABLE IF EXISTS `leaves`;
CREATE TABLE `leaves` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `start_on` date NOT NULL,
  `end_on` date NOT NULL,
  `total_days` int NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leaves_employee_id_foreign` (`employee_id`),
  KEY `leaves_created_by_foreign` (`created_by`),
  KEY `leaves_updated_by_foreign` (`updated_by`),
  CONSTRAINT `leaves_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `leaves_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `leaves_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of leaves
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2024_05_17_044122_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2024_05_17_044538_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2024_05_17_051717_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2024_05_20_024217_create_provinsis_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2024_05_20_024238_create_kotas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10, '2024_05_20_024249_create_kecamatans_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11, '2024_05_20_024300_create_kelurahans_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12, '2024_05_20_075526_create_area_management_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (13, '2024_05_20_075551_create_regions_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (14, '2024_05_20_075606_create_projects_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15, '2024_05_20_075624_create_countries_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16, '2024_05_20_075635_create_areas_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17, '2024_05_20_075649_create_cities_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18, '2024_05_20_075706_create_airlines_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19, '2024_05_20_075719_create_travel_agents_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20, '2024_05_20_075736_create_providers_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21, '2024_05_20_075747_create_stamps_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (22, '2024_05_20_075810_create_authorized_approvers_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (23, '2024_05_21_025308_create_homebases_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24, '2024_05_21_025525_create_positions_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (25, '2024_05_21_025622_create_currencies_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (31, '2024_05_21_025656_create_departments_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (32, '2024_05_21_025741_create_divisions_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (33, '2024_05_21_025919_create_area_setups_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (34, '2024_05_21_030004_create_previous_employments_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (35, '2024_05_21_030049_create_copy_old_ids_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (74, '2024_05_22_070852_create_employees_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (75, '2024_05_24_023711_create_banks_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (76, '2024_05_24_023851_create_education_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (77, '2024_05_24_024012_create_family_details_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (78, '2024_05_24_024103_create_foreign_languages_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (79, '2024_05_24_024234_create_job_histories_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (80, '2024_05_24_024326_create_personal_data_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (81, '2024_05_24_024358_create_trainings_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (82, '2024_05_24_031129_create_job_places_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (83, '2024_05_24_091746_create_employee_contact_details_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (85, '2024_05_24_091833_create_employee_additional_details_table', 6);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (86, '2024_05_31_093434_remove_salary_from_positions_table', 7);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (88, '2024_07_01_040047_add_remark_to_homebase_table', 8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (89, '2024_07_01_051235_add_rate_to_currency_table', 9);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (90, '2024_07_01_051840_add_remark_to_area_setups_table', 10);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (91, '2024_07_01_052812_add_code_to_area_table', 11);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (92, '2024_07_01_060038_add_code_to_authorized_approvers_table', 11);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (93, '2024_07_01_060208_add_rate_and_batch_to_stamps_table', 11);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (113, '2024_07_01_090533_add_bankname2_and_bankadd_to_banks_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (114, '2024_07_08_080657_add_data_into_job_places_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (115, '2024_07_08_082820_create_contract_history_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (116, '2024_07_08_082841_create_current_workbase_history_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (117, '2024_07_08_083341_create_department_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (118, '2024_07_08_083453_create_division_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (119, '2024_07_08_083538_create_homebase_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (120, '2024_07_08_083628_create_hti_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (121, '2024_07_08_084141_create_original_workbase_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (122, '2024_07_08_084235_create_performance_histories_table', 12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (130, '2024_07_08_084329_create_position_histories_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (131, '2024_07_08_084418_create_position_allowance_histories_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (132, '2024_07_09_040028_create_relocation_history_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (133, '2024_07_09_040036_create_salary_history_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (134, '2024_07_09_040045_create_temporary_history_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (135, '2024_07_10_050830_add_received_on_to_contract_histories_table', 13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (136, '2024_07_10_074552_create_performance_review_histories_table', 14);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (137, '2024_07_11_062856_add_additional_fields_to_contract_histories_table', 15);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (138, '2024_07_11_064548_add_fields_to_salary_histories_table', 16);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (139, '2024_07_11_071230_add_fields_to_current_workbase_histories_table', 17);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (140, '2024_07_11_084622_add_columns_to_homebase_history_table', 18);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (142, '2024_07_11_090550_add_another_columns_to_department_history_table', 19);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (143, '2024_07_11_091340_add_columns_to_division_history_table', 20);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (144, '2024_07_11_105138_add_columns_to_hti_history_table', 21);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (145, '2024_07_11_105153_add_columns_to_original_workbase_history_table', 22);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (146, '2024_07_11_105212_add_columns_to_performance_review_history_table', 22);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (147, '2024_07_11_105240_add_columns_to_position_history_table', 23);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (150, '2024_07_11_105403_add_columns_to_temporary_movement_history_table', 24);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (151, '2024_07_12_085113_make_banks_columns_nullable', 25);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (152, '2024_07_15_052914_create_credit_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (153, '2024_07_15_053255_create_movement_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (154, '2024_07_15_053440_create_reference_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (155, '2024_07_15_053518_create_warning_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (156, '2024_07_15_053547_create_bank_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (157, '2024_07_15_054246_create_whatever_letters_table', 26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (159, '2024_07_16_080031_adding_aditional_movement_letters_column_nullable', 27);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (160, '2024_07_17_085753_change_place_column_in_education_table', 28);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (161, '2024_07_17_091122_changing_lenght_column_in_trainingv2_table', 29);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (162, '2024_07_19_033629_create_deductions_table', 30);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (164, '2024_07_19_034225_add_deduction_permissions_to_permissions_table', 31);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (178, '2024_07_20_032352_create_advances_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (179, '2024_07_20_032410_create_cdos_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (180, '2024_07_20_032510_create_incentives_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (181, '2024_07_20_032630_create_leaves_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (182, '2024_07_20_032658_create_others_income_non_taxables_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (183, '2024_07_20_032707_create_others_income_taxables_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (184, '2024_07_20_032721_create_overtimes_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (185, '2024_07_20_032735_create_shifts_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (186, '2024_07_20_032757_create_status_time_sheets_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (187, '2024_07_20_032819_create_wee_hours_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (188, '2024_07_23_063535_create_holds_table', 32);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (190, '2024_07_23_064416_create_deducts_table', 33);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (191, '2024_07_23_084419_create_insurance_plan_histories_table', 34);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (192, '2024_07_23_084452_create_parking_histories_table', 34);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (193, '2024_07_23_084523_create_phone_limit_histories_table', 34);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (197, '2024_07_24_042144_create_hold_salary_processes_table', 35);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (198, '2024_07_29_075442_modify_amount_and_old_amount_in_performance_review_histories_table', 36);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (200, '2024_07_29_090903_create_release_salary_processes_table', 37);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (203, '2024_07_30_044801_update_incentives_table', 38);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (205, '2024_07_30_085030_create_e_slips_table', 39);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (206, '2024_07_31_123339_create_salary_slips_table', 40);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (207, '2024_08_02_034626_add_image_to_employees_table', 41);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (208, '2024_08_08_032754_update_job_place_table', 42);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (209, '2024_08_08_040007_update_performance_review_in_job_places_table', 43);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (210, '2024_08_08_041024_remove_description_from_copy_old_id', 44);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (211, '2024_08_08_043626_add_end_date_to_educations_table', 45);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (212, '2024_08_08_043641_add_end_date_to_job_histories_table', 45);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (213, '2024_08_08_043658_add_end_date_to_trainings_table', 45);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (215, '2024_08_09_034916_update_homebases_table', 46);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (216, '2024_08_09_034940_update_positions_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (217, '2024_08_09_035032_update_currencies_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (218, '2024_08_09_035127_update_departments_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (219, '2024_08_09_035248_update_divisions_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (220, '2024_08_09_035404_update_area_setups_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (221, '2024_08_09_035538_update_previous_employments_table', 47);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (222, '2024_08_10_042546_add_created_by_and_updated_by_to_all_tables', 48);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (223, '2024_08_13_045631_remove_tax_status_from_employee_additional_details', 49);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (224, '2024_08_13_063226_modify_hti_histories_table', 50);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (225, '2024_08_13_063827_update_original_workbase_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (226, '2024_08_13_063924_update_performance_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (227, '2024_08_13_064058_update_position_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (228, '2024_08_13_064229_update_position_allowance_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (229, '2024_08_13_064418_update_relocation_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (230, '2024_08_13_064514_update_salary_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (231, '2024_08_13_064759_update_temporary_histories_nullable', 51);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (232, '2024_08_13_064832_update_performance_review_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (233, '2024_08_13_064957_update_contract_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (234, '2024_08_13_065041_update_current_workbase_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (235, '2024_08_13_065139_update_department_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (236, '2024_08_13_065213_update_division_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (237, '2024_08_13_065345_update_homebase_histories_nullable', 52);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (238, '2024_08_19_031155_adding_period_others_income_taxable_table', 53);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (239, '2024_08_19_070558_alter_amount_column_in_others_income_taxables_table', 54);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (240, '2024_08_19_112310_turn_insurance_plan_history_into_nullable_table', 55);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (241, '2024_08_19_112424_turn_parking_history_into_nullable_table', 55);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (242, '2024_08_19_112534_turn_phone_limit_history_into_nullable_table', 55);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (243, '2024_08_22_031539_adding_field_in_phone_limit_histories_table', 56);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (244, '2024_08_22_041921_remove_unique_from_ref_no_in_performance_review_histories', 57);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (245, '2024_08_22_042903_add_created_by_and_updated_by_to_whatever_letters', 58);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (246, '2024_08_22_100146_adding_aditional_field_in_employee_additional_details_histories_table', 59);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (249, '2024_09_09_082321_create_last_payments_table', 60);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (251, '2024_09_10_040319_create_completeness_personal_data_table', 61);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (253, '2024_09_19_050243_update_amount_precision_in_others_income_non_taxables', 62);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (255, '2024_09_19_111334_adding_period_in_leaves', 63);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (257, '2023_10_16_140559_create_settings_table', 64);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (258, '2023_01_21_111103_create_permission_tables', 65);
COMMIT;

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
BEGIN;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (2, 'App\\Models\\User', 34);
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES (3, 'App\\Models\\User', 34);
COMMIT;

-- ----------------------------
-- Table structure for movement_letters
-- ----------------------------
DROP TABLE IF EXISTS `movement_letters`;
CREATE TABLE `movement_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movement_letters_employee_id_foreign` (`employee_id`),
  KEY `movement_letters_created_by_foreign` (`created_by`),
  KEY `movement_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `movement_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `movement_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `movement_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of movement_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of notifications
-- ----------------------------
BEGIN;
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES ('8e8e49a9-358d-4f57-8df9-d5efadbcabb3', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"download_csv\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .csv\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/3\\/download?format=csv\",\"view\":\"filament-actions::link-action\"},{\"name\":\"download_xlsx\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"Download .xlsx\",\"shouldClose\":false,\"shouldMarkAsRead\":true,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":true,\"size\":\"sm\",\"tooltip\":null,\"url\":\"\\/filament\\/exports\\/3\\/download?format=xlsx\",\"view\":\"filament-actions::link-action\"}],\"body\":\"Your others income taxable export has completed and 5 rows exported.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"Export completed\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', '2025-02-24 16:07:52', '2025-02-24 16:07:48', '2025-02-24 16:07:52');
COMMIT;

-- ----------------------------
-- Table structure for original_workbases
-- ----------------------------
DROP TABLE IF EXISTS `original_workbases`;
CREATE TABLE `original_workbases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `original_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_original_workbase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `original_workbase_histories_created_by_foreign` (`created_by`),
  KEY `original_workbase_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `original_workbase_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `original_workbase_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of original_workbases
-- ----------------------------
BEGIN;
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (1, 53, '2025-02-05', 'tebet', NULL, NULL, NULL, NULL, NULL, '2025-02-12 11:38:42', '2025-02-12 11:38:42', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (10, 62, '2025-02-01', 'Cakung', NULL, NULL, NULL, NULL, NULL, '2025-02-21 07:58:28', '2025-02-21 07:58:28', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (26, 17, '2025-03-07', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-03-06 04:38:05', '2025-03-06 04:38:05', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (29, 22, '1993-11-14', 'tebet', NULL, NULL, NULL, NULL, NULL, '2025-03-06 10:34:05', '2025-03-06 10:34:05', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (33, 30, '1993-11-14', 'tebet', NULL, NULL, NULL, NULL, NULL, '2025-03-13 08:28:27', '2025-03-13 08:28:27', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (34, 31, NULL, 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-03-18 08:21:02', '2025-03-18 08:21:02', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (39, 36, '2025-03-06', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-05-17 16:38:36', '2025-05-17 16:38:36', NULL, NULL);
INSERT INTO `original_workbases` (`id`, `contract_id`, `effective_date`, `original_workbase`, `old_original_workbase`, `ref_no`, `reason`, `ref_date`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (45, 42, '2025-05-02', 'abc123', NULL, NULL, NULL, NULL, NULL, '2025-05-18 05:26:58', '2025-05-18 05:26:58', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for others_income_non_taxables
-- ----------------------------
DROP TABLE IF EXISTS `others_income_non_taxables`;
CREATE TABLE `others_income_non_taxables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` date NOT NULL,
  `amount` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `others_income_non_taxables_employee_id_foreign` (`employee_id`),
  CONSTRAINT `others_income_non_taxables_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of others_income_non_taxables
-- ----------------------------
BEGIN;
INSERT INTO `others_income_non_taxables` (`id`, `employee_id`, `type`, `period`, `amount`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (3, 113, 'Others', '2025-02-01', 1000000, 'asfdsf', '2025-02-26 09:06:08', '2025-02-26 09:06:08', 1, NULL);
INSERT INTO `others_income_non_taxables` (`id`, `employee_id`, `type`, `period`, `amount`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (7, 113, 'Recon HTI', '2025-04-01', 123131, 'sdfdf', '2025-04-29 10:49:10', '2025-04-29 10:49:10', 1, NULL);
COMMIT;

-- ----------------------------
-- Table structure for others_income_taxables
-- ----------------------------
DROP TABLE IF EXISTS `others_income_taxables`;
CREATE TABLE `others_income_taxables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `others_income_taxables_employee_id_foreign` (`employee_id`),
  KEY `others_income_taxables_created_by_foreign` (`created_by`),
  KEY `others_income_taxables_updated_by_foreign` (`updated_by`),
  CONSTRAINT `others_income_taxables_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `others_income_taxables_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `others_income_taxables_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of others_income_taxables
-- ----------------------------
BEGIN;
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (7, NULL, 1, 113, 'Parking Allowance', 500000, NULL, '2025-02-01 00:00:00', NULL, '2025-02-25 14:31:28');
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (8, NULL, NULL, 113, 'Relocating Allowance', 800000, NULL, '2025-02-25 13:35:45', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (9, NULL, NULL, 113, 'Position Allowance', 300000, NULL, '2025-02-25 13:35:50', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (11, NULL, NULL, 113, 'Performance Review', 1000000, NULL, '2025-02-25 13:36:04', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (12, NULL, NULL, 113, 'Phone Allowance', 1000000, NULL, '2025-02-25 13:36:57', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (13, 1, 1, 113, 'Phone Allowance', 200000, 'sdsf', '2025-02-01 00:00:00', '2025-02-25 15:08:48', '2025-02-25 15:11:00');
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (14, 1, NULL, 113, 'Performance Review', 1000000, 'asdas', '2025-02-01 00:00:00', '2025-02-25 15:10:11', '2025-02-25 15:10:11');
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (16, NULL, NULL, 113, 'Sign In Bonus', 600000, NULL, '2025-02-26 15:50:26', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (34, NULL, NULL, 113, 'Advance', 4000000, NULL, '2025-03-23 13:55:10', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (67, NULL, NULL, 113, 'Phone Allowance', 700000, NULL, '2025-04-23 16:25:35', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (68, NULL, NULL, 121, 'Phone Allowance', 1000000, NULL, '2025-04-23 16:25:35', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (69, NULL, NULL, 123, 'Phone Allowance', 200000, NULL, '2025-04-23 16:25:35', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (70, NULL, NULL, 113, 'Performance Review', 8000000, NULL, '2025-04-23 16:25:38', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (71, NULL, NULL, 123, 'Performance Review', 1000000, NULL, '2025-04-23 16:25:38', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (72, NULL, NULL, 113, 'Parking Allowance', 500000, NULL, '2025-04-23 16:25:43', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (73, NULL, NULL, 121, 'Parking Allowance', 1000000, NULL, '2025-04-23 16:25:43', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (74, NULL, NULL, 123, 'Parking Allowance', 300000, NULL, '2025-04-23 16:25:43', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (75, NULL, NULL, 113, 'Relocating Allowance', 650000, NULL, '2025-04-23 16:25:48', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (76, NULL, NULL, 121, 'Relocating Allowance', 100000, NULL, '2025-04-23 16:25:48', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (77, NULL, NULL, 113, 'Position Allowance', 1400000, NULL, '2025-04-23 16:25:54', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (78, NULL, NULL, 113, 'Sign In Bonus', 1000000, NULL, '2025-04-23 16:25:59', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (79, NULL, NULL, 123, 'Sign In Bonus', 1000000, NULL, '2025-04-23 16:25:59', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (80, 1, NULL, 113, 'THR', 10000000, 'test', '2025-04-01 00:00:00', '2025-04-26 03:48:20', '2025-04-26 03:48:20');
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (81, NULL, NULL, 113, 'Advance', 2000000, NULL, '2025-04-26 13:25:16', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (82, NULL, NULL, 113, 'Performance Review', 8000000, NULL, '2025-05-02 04:07:18', NULL, NULL);
INSERT INTO `others_income_taxables` (`id`, `created_by`, `updated_by`, `employee_id`, `type`, `amount`, `remark`, `period`, `created_at`, `updated_at`) VALUES (83, NULL, NULL, 123, 'Performance Review', 1000000, NULL, '2025-05-02 04:07:18', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for overtimes
-- ----------------------------
DROP TABLE IF EXISTS `overtimes`;
CREATE TABLE `overtimes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `basic_salary` int NOT NULL DEFAULT '0',
  `position_allowance` int NOT NULL DEFAULT '0',
  `performance_review` int NOT NULL DEFAULT '0',
  `phone_allowance` int NOT NULL DEFAULT '0',
  `parking_allowance` int NOT NULL DEFAULT '0',
  `one_and_half_weekdays_public_leave` int NOT NULL DEFAULT '0',
  `one_and_half_weekdays_public_leave_amount` int NOT NULL DEFAULT '0',
  `two_weekdays_public_leave` int NOT NULL DEFAULT '0',
  `two_weekdays_public_leave_amount` int NOT NULL DEFAULT '0',
  `two_weekend` int NOT NULL DEFAULT '0',
  `two_weekend_amount` int NOT NULL DEFAULT '0',
  `three_weekend` int NOT NULL DEFAULT '0',
  `three_weekend_amount` int NOT NULL DEFAULT '0',
  `four_weekend` int NOT NULL DEFAULT '0',
  `four_weekend_amount` int NOT NULL DEFAULT '0',
  `two_public_holiday` int NOT NULL DEFAULT '0',
  `two_public_holiday_amount` int NOT NULL DEFAULT '0',
  `three_public_holiday` int NOT NULL DEFAULT '0',
  `three_public_holiday_amount` int NOT NULL DEFAULT '0',
  `four_public_holiday` int NOT NULL DEFAULT '0',
  `four_public_holiday_amount` int NOT NULL DEFAULT '0',
  `total_hours` int NOT NULL DEFAULT '0',
  `amount` int NOT NULL DEFAULT '0',
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `period_month` int NOT NULL DEFAULT '0',
  `period_year` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `overtimes_employee_id_foreign` (`employee_id`),
  KEY `overtimes_created_by_foreign` (`created_by`),
  KEY `overtimes_updated_by_foreign` (`updated_by`),
  CONSTRAINT `overtimes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `overtimes_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `overtimes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of overtimes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for parking_histories
-- ----------------------------
DROP TABLE IF EXISTS `parking_histories`;
CREATE TABLE `parking_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `current_parking_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_parking_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parking_histories_created_by_foreign` (`created_by`),
  KEY `parking_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `parking_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `parking_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of parking_histories
-- ----------------------------
BEGIN;
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (48, 1, NULL, 17, '2025-03-07', '300000', NULL, NULL, NULL, '2025-03-06 04:38:05', '2025-03-06 04:38:05');
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (49, 1, NULL, 22, '2025-03-02', '200000', NULL, 'test reason', 'test remark', NULL, NULL);
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (51, 1, NULL, 30, '1993-11-14', '1000000', NULL, 'test reason', 'test remark', '2025-03-13 08:28:27', '2025-03-13 08:28:27');
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (52, 1, NULL, 31, NULL, '200000', NULL, 'Dolorem sunt rem err', 'Ut molestiae molesti', '2025-03-18 08:21:02', '2025-03-18 08:21:02');
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (53, 1, NULL, 31, '2025-03-19', '500000', NULL, 'sdsdf', 'asdasd', '2025-03-19 03:48:56', '2025-03-19 03:48:56');
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (58, 1, NULL, 36, '2025-03-06', '500000', NULL, 'sdsdf', 'asdasd', '2025-05-17 16:38:36', '2025-05-17 16:38:36');
INSERT INTO `parking_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_parking_amount`, `old_parking_amount`, `reason`, `remark`, `created_at`, `updated_at`) VALUES (62, 1, NULL, 42, '2025-05-02', '123123', NULL, 'Est saepe quis nisi ', 'Quam assumenda sed r', '2025-05-18 05:26:58', '2025-05-18 05:26:58');
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for payrolls
-- ----------------------------
DROP TABLE IF EXISTS `payrolls`;
CREATE TABLE `payrolls` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `period` date DEFAULT NULL,
  `employee_id` bigint DEFAULT NULL,
  `ter` char(10) DEFAULT NULL,
  `basic_salary` int DEFAULT NULL,
  `basic_salary_accumulation` int DEFAULT NULL,
  `allowances` int DEFAULT NULL,
  `deductions` int DEFAULT NULL,
  `jkk_jkm` int DEFAULT NULL,
  `bpjs_kesehatan` int DEFAULT NULL,
  `insurance` int DEFAULT NULL,
  `gross` int DEFAULT NULL,
  `tax_ter_per_month` int DEFAULT NULL,
  `tax_status` char(100) DEFAULT NULL,
  `has_npwp` tinyint(1) DEFAULT NULL,
  `deduct_jht` int DEFAULT NULL,
  `deduct_bpjs_pension` int DEFAULT NULL,
  `deduct_bpjs_kesehatan` int DEFAULT NULL,
  `net_income` int DEFAULT NULL,
  `allowances_details` json DEFAULT NULL,
  `deduction_details` json DEFAULT NULL,
  `is_closed` tinyint(1) DEFAULT '0',
  `contract_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of payrolls
-- ----------------------------
BEGIN;
INSERT INTO `payrolls` (`id`, `period`, `employee_id`, `ter`, `basic_salary`, `basic_salary_accumulation`, `allowances`, `deductions`, `jkk_jkm`, `bpjs_kesehatan`, `insurance`, `gross`, `tax_ter_per_month`, `tax_status`, `has_npwp`, `deduct_jht`, `deduct_bpjs_pension`, `deduct_bpjs_kesehatan`, `net_income`, `allowances_details`, `deduction_details`, `is_closed`, `contract_id`, `created_at`, `updated_at`) VALUES (1, '2025-04-01', 113, 'TER A', 10000000, 10000000, 24250000, 4000000, 54000, 480000, 180000, 34964000, 839136, 'TK0', 1, 685000, 95590, 120000, 32690274, '[{\"id\": 67, \"type\": \"Phone Allowance\", \"amount\": 700000, \"period\": \"2025-04-23T16:25:35.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 70, \"type\": \"Performance Review\", \"amount\": 8000000, \"period\": \"2025-04-23T16:25:38.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 72, \"type\": \"Parking Allowance\", \"amount\": 500000, \"period\": \"2025-04-23T16:25:43.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 75, \"type\": \"Relocating Allowance\", \"amount\": 650000, \"period\": \"2025-04-23T16:25:48.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 77, \"type\": \"Position Allowance\", \"amount\": 1400000, \"period\": \"2025-04-23T16:25:54.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 78, \"type\": \"Sign In Bonus\", \"amount\": 1000000, \"period\": \"2025-04-23T16:25:59.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}, {\"id\": 80, \"type\": \"THR\", \"amount\": 10000000, \"period\": \"2025-04-01T00:00:00.000000Z\", \"remark\": \"test\", \"created_at\": \"2025-04-26T03:48:20.000000Z\", \"created_by\": 1, \"updated_at\": \"2025-04-26T03:48:20.000000Z\", \"updated_by\": null, \"employee_id\": 113}, {\"id\": 81, \"type\": \"Advance\", \"amount\": 2000000, \"period\": \"2025-04-26T13:25:16.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 113}]', '[{\"id\": 157, \"amount\": 2000000, \"remark\": \"Kasbon\", \"created_at\": \"2025-04-26T13:25:46.000000Z\", \"created_by\": 1, \"total_days\": 1, \"updated_at\": \"2025-04-28T14:50:49.000000Z\", \"updated_by\": 1, \"employee_id\": 113, \"deduction_type\": {\"id\": 2, \"name\": \"Advance\", \"created_at\": null, \"updated_at\": null, \"description\": null}, \"deductionable_id\": null, \"period_timesheet\": \"2025-04-01\", \"date_of_deduction\": \"2025-04-25\", \"type_of_deduction\": \"2\", \"deductionable_type\": null}, {\"id\": 163, \"amount\": 2000000, \"remark\": \"THR 2025\", \"created_at\": \"2025-04-28T11:28:33.000000Z\", \"created_by\": 1, \"total_days\": null, \"updated_at\": \"2025-04-28T11:28:33.000000Z\", \"updated_by\": null, \"employee_id\": 113, \"deduction_type\": {\"id\": 2, \"name\": \"Advance\", \"created_at\": null, \"updated_at\": null, \"description\": null}, \"deductionable_id\": 39, \"period_timesheet\": \"2025-04-01\", \"date_of_deduction\": \"2025-04-22\", \"type_of_deduction\": \"2\", \"deductionable_type\": \"App\\\\Models\\\\Advance\"}]', 0, 31, '2025-05-03 11:35:03', '2025-05-03 11:35:04');
INSERT INTO `payrolls` (`id`, `period`, `employee_id`, `ter`, `basic_salary`, `basic_salary_accumulation`, `allowances`, `deductions`, `jkk_jkm`, `bpjs_kesehatan`, `insurance`, `gross`, `tax_ter_per_month`, `tax_status`, `has_npwp`, `deduct_jht`, `deduct_bpjs_pension`, `deduct_bpjs_kesehatan`, `net_income`, `allowances_details`, `deduction_details`, `is_closed`, `contract_id`, `created_at`, `updated_at`) VALUES (2, '2025-04-01', 123, 'TER C', 12000000, 12000000, 2500000, 0, 64800, 480000, 180000, 15224800, 304496, 'K3', 0, 290000, 95590, 120000, 13869914, '[{\"id\": 69, \"type\": \"Phone Allowance\", \"amount\": 200000, \"period\": \"2025-04-23T16:25:35.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 123}, {\"id\": 71, \"type\": \"Performance Review\", \"amount\": 1000000, \"period\": \"2025-04-23T16:25:38.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 123}, {\"id\": 74, \"type\": \"Parking Allowance\", \"amount\": 300000, \"period\": \"2025-04-23T16:25:43.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 123}, {\"id\": 79, \"type\": \"Sign In Bonus\", \"amount\": 1000000, \"period\": \"2025-04-23T16:25:59.000000Z\", \"remark\": null, \"created_at\": null, \"created_by\": null, \"updated_at\": null, \"updated_by\": null, \"employee_id\": 123}]', '[]', 0, 17, '2025-05-03 11:35:04', '2025-05-03 11:35:04');
COMMIT;

-- ----------------------------
-- Table structure for performance_histories
-- ----------------------------
DROP TABLE IF EXISTS `performance_histories`;
CREATE TABLE `performance_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `job_place_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `old_amount` decimal(15,2) DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `performance_histories_job_place_id_foreign` (`job_place_id`),
  KEY `performance_histories_created_by_foreign` (`created_by`),
  KEY `performance_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `performance_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `performance_histories_job_place_id_foreign` FOREIGN KEY (`job_place_id`) REFERENCES `job_places` (`id`) ON DELETE CASCADE,
  CONSTRAINT `performance_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of performance_histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for performance_review_histories
-- ----------------------------
DROP TABLE IF EXISTS `performance_review_histories`;
CREATE TABLE `performance_review_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `old_amount` int DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `performance_review_histories_created_by_foreign` (`created_by`),
  KEY `performance_review_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `performance_review_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `performance_review_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of performance_review_histories
-- ----------------------------
BEGIN;
INSERT INTO `performance_review_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `amount`, `old_amount`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (48, 1, NULL, 31, '2025-03-18', 10000000, NULL, NULL, '2025-03-18 11:25:41', '2025-03-18 11:25:41', 'fsdfsd', NULL, 'sadsf');
INSERT INTO `performance_review_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `amount`, `old_amount`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (52, 1, NULL, 31, '2025-03-19', 8000000, NULL, NULL, '2025-03-19 03:29:56', '2025-03-19 03:29:56', 'asdsad', NULL, '12123');
INSERT INTO `performance_review_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `amount`, `old_amount`, `ref_no`, `created_at`, `updated_at`, `reason`, `ref_date`, `remark`) VALUES (53, 1, NULL, 30, '2025-04-26', 850000, NULL, NULL, '2025-04-26 12:35:59', '2025-04-26 12:35:59', 'test reason', NULL, 'TEst remark');
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1, 'view_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (2, 'view_any_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (3, 'create_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (4, 'update_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (5, 'delete_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (6, 'delete_any_role', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (7, 'view_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (8, 'view_any_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (9, 'create_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (10, 'update_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (11, 'restore_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (12, 'restore_any_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (13, 'replicate_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (14, 'reorder_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (15, 'delete_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (16, 'delete_any_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (17, 'force_delete_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (18, 'force_delete_any_contract', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (19, 'view_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (20, 'view_any_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (21, 'create_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (22, 'update_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (23, 'restore_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (24, 'restore_any_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (25, 'replicate_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (26, 'reorder_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (27, 'delete_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (28, 'delete_any_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (29, 'force_delete_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (30, 'force_delete_any_employee', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (31, 'view_business::unit', 'web', '2025-02-18 07:40:29', '2025-02-18 07:40:29');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (32, 'view_any_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (33, 'create_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (34, 'update_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (35, 'restore_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (36, 'restore_any_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (37, 'replicate_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (38, 'reorder_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (39, 'delete_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (40, 'delete_any_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (41, 'force_delete_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (42, 'force_delete_any_business::unit', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (43, 'view_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (44, 'view_any_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (45, 'create_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (46, 'update_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (47, 'restore_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (48, 'restore_any_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (49, 'replicate_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (50, 'reorder_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (51, 'delete_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (52, 'delete_any_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (53, 'force_delete_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (54, 'force_delete_any_department', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (55, 'view_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (56, 'view_any_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (57, 'create_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (58, 'update_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (59, 'restore_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (60, 'restore_any_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (61, 'replicate_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (62, 'reorder_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (63, 'delete_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (64, 'delete_any_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (65, 'force_delete_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (66, 'force_delete_any_division', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (67, 'view_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (68, 'view_any_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (69, 'create_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (70, 'update_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (71, 'restore_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (72, 'restore_any_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (73, 'replicate_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (74, 'reorder_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (75, 'delete_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (76, 'delete_any_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (77, 'force_delete_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (78, 'force_delete_any_family::detail', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (79, 'view_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (80, 'view_any_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (81, 'create_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (82, 'update_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (83, 'restore_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (84, 'restore_any_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (85, 'replicate_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (86, 'reorder_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (87, 'delete_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (88, 'delete_any_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (89, 'force_delete_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (90, 'force_delete_any_foreign::languages', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (91, 'view_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (92, 'view_any_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (93, 'create_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (94, 'update_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (95, 'restore_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (96, 'restore_any_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (97, 'replicate_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (98, 'reorder_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (99, 'delete_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (100, 'delete_any_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (101, 'force_delete_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (102, 'force_delete_any_home::base', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (103, 'view_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (104, 'view_any_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (105, 'create_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (106, 'update_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (107, 'restore_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (108, 'restore_any_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (109, 'replicate_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (110, 'reorder_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (111, 'delete_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (112, 'delete_any_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (113, 'force_delete_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (114, 'force_delete_any_homebase::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (115, 'view_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (116, 'view_any_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (117, 'create_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (118, 'update_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (119, 'restore_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (120, 'restore_any_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (121, 'replicate_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (122, 'reorder_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (123, 'delete_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (124, 'delete_any_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (125, 'force_delete_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (126, 'force_delete_any_job::history', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (127, 'view_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (128, 'view_any_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (129, 'create_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (130, 'update_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (131, 'restore_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (132, 'restore_any_position', 'web', '2025-02-18 07:40:30', '2025-02-18 07:40:30');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (133, 'replicate_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (134, 'reorder_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (135, 'delete_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (136, 'delete_any_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (137, 'force_delete_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (138, 'force_delete_any_position', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (139, 'view_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (140, 'view_any_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (141, 'create_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (142, 'update_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (143, 'restore_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (144, 'restore_any_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (145, 'replicate_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (146, 'reorder_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (147, 'delete_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (148, 'delete_any_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (149, 'force_delete_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (150, 'force_delete_any_previous::employment', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (151, 'view_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (152, 'view_any_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (153, 'create_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (154, 'update_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (155, 'restore_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (156, 'restore_any_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (157, 'replicate_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (158, 'reorder_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (159, 'delete_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (160, 'delete_any_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (161, 'force_delete_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (162, 'force_delete_any_project', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (163, 'view_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (164, 'view_any_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (165, 'create_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (166, 'update_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (167, 'restore_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (168, 'restore_any_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (169, 'replicate_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (170, 'reorder_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (171, 'delete_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (172, 'delete_any_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (173, 'force_delete_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (174, 'force_delete_any_user', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (175, 'widget_StatsOverview', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (176, 'widget_JobPlacementChart', 'web', '2025-02-18 07:40:31', '2025-02-18 07:40:31');
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_data
-- ----------------------------
DROP TABLE IF EXISTS `personal_data`;
CREATE TABLE `personal_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthday_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correspondence_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correspondence_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_handphone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handphone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jamsostek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personal_data_employee_id_foreign` (`employee_id`),
  KEY `personal_data_created_by_foreign` (`created_by`),
  KEY `personal_data_updated_by_foreign` (`updated_by`),
  CONSTRAINT `personal_data_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `personal_data_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personal_data_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_data
-- ----------------------------
BEGIN;
INSERT INTO `personal_data` (`id`, `created_by`, `updated_by`, `employee_id`, `first_name`, `last_name`, `birthday`, `birthday_place`, `sex`, `religion`, `marital_status`, `nationality`, `permanent_address`, `permanent_city`, `correspondence_address`, `correspondence_city`, `no_handphone`, `handphone`, `ktp`, `passport`, `npwp`, `jamsostek`, `tax`, `email`, `created_at`, `updated_at`) VALUES (81, 1, 1, 113, 'Basrul', 'Yandri', '1998-02-05', 'Jakarta', 'Male', 'Islam', 'Married', 'Indonesia', 'asdas', 'dasd', 'dasd', 'dasd', '0871821212711', NULL, '31750714029328382328', '7878123812738', '128312312378', '872187381238912', 'TK0', 'basrul.yandri@gmail.com', '2025-02-22 12:55:53', '2025-03-05 09:55:11');
INSERT INTO `personal_data` (`id`, `created_by`, `updated_by`, `employee_id`, `first_name`, `last_name`, `birthday`, `birthday_place`, `sex`, `religion`, `marital_status`, `nationality`, `permanent_address`, `permanent_city`, `correspondence_address`, `correspondence_city`, `no_handphone`, `handphone`, `ktp`, `passport`, `npwp`, `jamsostek`, `tax`, `email`, `created_at`, `updated_at`) VALUES (88, 1, NULL, 121, 'Silas', 'Holcomb', '2025-10-10', '12', 'Male', 'Islam', 'Married', 'Indonesia', 'Aliquip incidunt ma', 'Laboris ut qui sit e', 'Dolorem iure incidid', 'Quis libero ex aut d', '+1 (478) 744-1719', NULL, 'Consequuntur magni d', 'Voluptatibus volupta', 'A reprehenderit sequ', 'Doloremque do elit ', 'TK1', 'myheq@mailinator.com', '2025-03-05 10:42:02', '2025-03-05 10:42:02');
INSERT INTO `personal_data` (`id`, `created_by`, `updated_by`, `employee_id`, `first_name`, `last_name`, `birthday`, `birthday_place`, `sex`, `religion`, `marital_status`, `nationality`, `permanent_address`, `permanent_city`, `correspondence_address`, `correspondence_city`, `no_handphone`, `handphone`, `ktp`, `passport`, `npwp`, `jamsostek`, `tax`, `email`, `created_at`, `updated_at`) VALUES (90, NULL, 1, 123, 'herrys', 'sabarudin', '1999-07-25', NULL, 'male', 'Moslem', 'Single', 'Indonesia', NULL, NULL, 'depok cimanggis', '48846', '082240181375', NULL, '3273232507920002', NULL, NULL, NULL, 'K3', NULL, '2025-03-05 11:18:10', '2025-04-21 06:17:12');
INSERT INTO `personal_data` (`id`, `created_by`, `updated_by`, `employee_id`, `first_name`, `last_name`, `birthday`, `birthday_place`, `sex`, `religion`, `marital_status`, `nationality`, `permanent_address`, `permanent_city`, `correspondence_address`, `correspondence_city`, `no_handphone`, `handphone`, `ktp`, `passport`, `npwp`, `jamsostek`, `tax`, `email`, `created_at`, `updated_at`) VALUES (91, 1, 1, 124, 'Hadleys', 'Browning', '1973-02-03', '5', 'Female', 'Konghucu', 'Single Parent', 'Indonesia', 'Est nesciunt adipis', 'Eligendi aut reprehe', 'Aut nihil excepteur ', 'Non labore fuga Qui', '+1 (309) 808-3192', NULL, 'Veniam quis sequi s', 'Velit facilis fuga ', 'Ut quo aliquip in vo', 'Laboriosam sequi mo', 'TK0', 'cedekel@mailinator.com', '2025-03-05 12:02:25', '2025-03-05 12:05:29');
INSERT INTO `personal_data` (`id`, `created_by`, `updated_by`, `employee_id`, `first_name`, `last_name`, `birthday`, `birthday_place`, `sex`, `religion`, `marital_status`, `nationality`, `permanent_address`, `permanent_city`, `correspondence_address`, `correspondence_city`, `no_handphone`, `handphone`, `ktp`, `passport`, `npwp`, `jamsostek`, `tax`, `email`, `created_at`, `updated_at`) VALUES (92, 1, NULL, 125, 'Kevyn', 'Mcdaniel', '1996-07-28', '15', 'Female', 'Christian', 'Single', 'Corrupti deleniti facilis est aut in voluptas accusamus est', 'Blanditiis quis et d', 'Eos dolore repellend', 'Iusto architecto nih', 'Mollit neque quod se', '+1 (375) 165-3764', NULL, 'Sint consequuntur ut elit eos rerum harum ratione dolorum atque et magnam id sint maiores tempore distinctio Necessitatibus non consequat', 'Sed possimus deserunt dolore facere ut in', 'Quibusdam inventore nobis ut qui voluptatem sed voluptatem Unde sunt omnis quaerat nulla odio vero velit nulla laborum quae', 'Molestiae eu id totam earum adipisicing veniam fuga Aut velit vel quia adipisicing id reprehenderit ipsum porro', 'K0', 'cozo@mailinator.com', '2025-05-17 14:51:23', '2025-05-17 14:51:23');
COMMIT;

-- ----------------------------
-- Table structure for phone_limit_histories
-- ----------------------------
DROP TABLE IF EXISTS `phone_limit_histories`;
CREATE TABLE `phone_limit_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `current_phone_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_phone_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phone_limit_histories_created_by_foreign` (`created_by`),
  KEY `phone_limit_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `phone_limit_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `phone_limit_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of phone_limit_histories
-- ----------------------------
BEGIN;
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (57, 1, NULL, 17, '2025-03-07', '200000', NULL, NULL, NULL, '2025-03-06 04:38:05', '2025-03-06 04:38:05', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (60, 1, NULL, 22, '1993-11-14', '1000000', NULL, '+1 (915) 555-6669', '+1 (311) 454-7435', '2025-03-06 10:34:05', '2025-03-06 10:34:05', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (63, 1, NULL, 30, '1993-11-14', '1000000', NULL, '+1 (915) 555-6669', '+1 (311) 454-7435', '2025-03-13 08:28:27', '2025-03-13 08:28:27', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (64, 1, NULL, 31, NULL, '500000', NULL, 'sdfdsfsdf', 'sdfsdfsdf', '2025-03-18 08:21:02', '2025-03-18 08:21:02', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (65, 1, NULL, 31, '2025-03-19', '700000', NULL, 'dasd', 'asdasd', '2025-03-19 03:54:48', '2025-03-19 03:54:48', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (70, 1, NULL, 36, '2025-03-06', '700000', NULL, 'dasd', 'asdasd', '2025-05-17 16:38:36', '2025-05-17 16:38:36', NULL);
INSERT INTO `phone_limit_histories` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_phone_limit`, `old_phone_limit`, `reason`, `remark`, `created_at`, `updated_at`, `field`) VALUES (76, 1, NULL, 42, '2025-05-02', '123123', NULL, '+1 (894) 909-7226', '+1 (596) 683-5999', '2025-05-18 05:26:58', '2025-05-18 05:26:58', NULL);
COMMIT;

-- ----------------------------
-- Table structure for position_allowances
-- ----------------------------
DROP TABLE IF EXISTS `position_allowances`;
CREATE TABLE `position_allowances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `current_allowance` int DEFAULT NULL,
  `old_allowance` int DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `position_allowance_histories_created_by_foreign` (`created_by`),
  KEY `position_allowance_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `position_allowance_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `position_allowance_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of position_allowances
-- ----------------------------
BEGIN;
INSERT INTO `position_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_allowance`, `old_allowance`, `remark`, `ref_no`, `created_at`, `updated_at`) VALUES (16, NULL, NULL, 31, '2025-03-18', 2000000, NULL, NULL, 'sdfsd', '2025-03-18 08:22:30', '2025-03-18 08:22:30');
INSERT INTO `position_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_allowance`, `old_allowance`, `remark`, `ref_no`, `created_at`, `updated_at`) VALUES (20, NULL, NULL, 31, '2025-03-19', 1400000, NULL, 'TEst remark', NULL, '2025-03-19 03:24:35', '2025-03-19 03:24:35');
INSERT INTO `position_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_allowance`, `old_allowance`, `remark`, `ref_no`, `created_at`, `updated_at`) VALUES (25, NULL, NULL, 36, '2025-03-06', 14000, NULL, NULL, NULL, '2025-05-17 16:38:36', '2025-05-17 16:38:36');
INSERT INTO `position_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `current_allowance`, `old_allowance`, `remark`, `ref_no`, `created_at`, `updated_at`) VALUES (28, NULL, NULL, 42, '2025-05-02', 1000000, NULL, 'Eius est veniam quos amet in impedit', NULL, '2025-05-18 05:26:58', '2025-05-18 05:26:58');
COMMIT;

-- ----------------------------
-- Table structure for positions
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positions_created_by_foreign` (`created_by`),
  KEY `positions_updated_by_foreign` (`updated_by`),
  CONSTRAINT `positions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `positions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of positions
-- ----------------------------
BEGIN;
INSERT INTO `positions` (`id`, `created_by`, `updated_by`, `title`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Direktur Keuangan', '2024-05-21 05:07:34', '2024-08-09 04:41:27');
INSERT INTO `positions` (`id`, `created_by`, `updated_by`, `title`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'Manager', NULL, NULL);
INSERT INTO `positions` (`id`, `created_by`, `updated_by`, `title`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'Supervisor', NULL, NULL);
INSERT INTO `positions` (`id`, `created_by`, `updated_by`, `title`, `created_at`, `updated_at`) VALUES (8, 1, NULL, 'abc123', '2025-02-11 12:02:23', '2025-02-11 12:02:23');
COMMIT;

-- ----------------------------
-- Table structure for previous_employments
-- ----------------------------
DROP TABLE IF EXISTS `previous_employments`;
CREATE TABLE `previous_employments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `previous_employments_created_by_foreign` (`created_by`),
  KEY `previous_employments_updated_by_foreign` (`updated_by`),
  CONSTRAINT `previous_employments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `previous_employments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of previous_employments
-- ----------------------------
BEGIN;
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'New Hired', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'Transferred from OI Batch I', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'Transferred from OI Batch II', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 'Transferred from OI Batch III', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Transferred from HTI to DGE', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (6, NULL, NULL, 'Transferred from OI Batch IV', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (7, NULL, NULL, 'Transferred from OI Batch V', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (8, NULL, NULL, 'Transferred from DGE Project NSN', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (9, NULL, NULL, 'Transferred from IMSI Project NSN', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (10, NULL, NULL, 'Transferred from HTI Batch VI', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (11, NULL, NULL, 'New Hired After 18 November 2013', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (12, NULL, NULL, 'Re Arrangement ex HTI', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (13, NULL, NULL, 'Transferred from DYKA to DGE', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (14, NULL, NULL, 'Transferred from HS to ARP', NULL, NULL);
INSERT INTO `previous_employments` (`id`, `created_by`, `updated_by`, `company`, `created_at`, `updated_at`) VALUES (15, NULL, NULL, 'Transferred from DCPE to ARP', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_created_by_foreign` (`created_by`),
  KEY `projects_updated_by_foreign` (`updated_by`),
  CONSTRAINT `projects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `projects_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of projects
-- ----------------------------
BEGIN;
INSERT INTO `projects` (`id`, `created_by`, `updated_by`, `name`, `description`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'test', '1234', '2024-05-21 08:28:53', '2024-05-21 08:28:53');
INSERT INTO `projects` (`id`, `created_by`, `updated_by`, `name`, `description`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'abc123', '212312', NULL, NULL);
INSERT INTO `projects` (`id`, `created_by`, `updated_by`, `name`, `description`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'LAlala', 'grfgdsa', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for providers
-- ----------------------------
DROP TABLE IF EXISTS `providers`;
CREATE TABLE `providers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providers_created_by_foreign` (`created_by`),
  KEY `providers_updated_by_foreign` (`updated_by`),
  CONSTRAINT `providers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `providers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of providers
-- ----------------------------
BEGIN;
INSERT INTO `providers` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'XL', '2024-05-22 03:06:05', '2024-08-06 12:30:33');
INSERT INTO `providers` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'Telkomsel', '2024-08-06 12:30:50', '2024-08-06 12:30:50');
INSERT INTO `providers` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 'Indosat', '2024-08-06 12:30:56', '2024-08-06 12:30:56');
INSERT INTO `providers` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Axis', '2024-08-06 12:30:58', '2024-08-06 12:30:58');
COMMIT;

-- ----------------------------
-- Table structure for provinsis
-- ----------------------------
DROP TABLE IF EXISTS `provinsis`;
CREATE TABLE `provinsis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provinsis_code_unique` (`code`),
  KEY `provinsis_created_by_foreign` (`created_by`),
  KEY `provinsis_updated_by_foreign` (`updated_by`),
  CONSTRAINT `provinsis_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `provinsis_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of provinsis
-- ----------------------------
BEGIN;
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Jawa Barat', '32', '2024-05-20 03:42:27', '2024-05-20 03:42:27');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (2, NULL, NULL, 'Jawa Tengah', '42', '2024-05-20 05:29:33', '2024-05-20 05:29:33');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (3, NULL, NULL, 'Jawa Timur', '12', '2024-05-21 04:41:26', '2024-08-06 11:47:39');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (4, NULL, NULL, 'DKI Jakarta', '21', '2024-05-21 04:41:40', '2024-08-06 11:48:28');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (5, NULL, NULL, 'Daerah Istimewa Yogyakarta', '321', '2024-05-21 04:42:03', '2024-08-06 11:48:47');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (6, NULL, NULL, 'Bali', '54', '2024-05-21 04:42:19', '2024-08-06 11:49:05');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (7, NULL, NULL, 'Kalimantan Barat', '1', '2024-05-21 04:42:34', '2024-08-06 11:49:23');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (8, NULL, NULL, 'Sulawesi Barat', '326', '2024-05-21 07:37:31', '2024-08-06 11:49:40');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (9, NULL, NULL, 'Sumatera Utara', '422', '2024-06-04 06:26:41', '2024-08-06 11:50:07');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (10, NULL, NULL, 'Papua Selatan', '1235', '2024-07-02 09:21:45', '2024-08-06 11:50:34');
INSERT INTO `provinsis` (`id`, `created_by`, `updated_by`, `name`, `code`, `created_at`, `updated_at`) VALUES (11, NULL, NULL, 'test4', '12356', '2024-07-02 09:22:12', '2024-07-02 09:22:12');
COMMIT;

-- ----------------------------
-- Table structure for ptkp
-- ----------------------------
DROP TABLE IF EXISTS `ptkp`;
CREATE TABLE `ptkp` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ter` char(10) DEFAULT NULL,
  `start` int DEFAULT NULL,
  `end` int DEFAULT NULL,
  `tarif` decimal(10,2) DEFAULT NULL,
  `ter_percent` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ptkp
-- ----------------------------
BEGIN;
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (1, 'TER A', 0, 5400000, 0.00, 0, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (2, 'TER A', 5400001, 5650000, 0.25, 0.0025, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (3, 'TER A', 5650001, 5950000, 0.50, 0.005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (4, 'TER A', 5950001, 6300000, 0.75, 0.0075, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (5, 'TER A', 6300001, 6750000, 1.00, 0.01, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (6, 'TER A', 6750001, 7500000, 1.25, 0.0125, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (7, 'TER A', 7500001, 8550000, 1.50, 0.015000000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (8, 'TER A', 8550001, 9650000, 1.75, 0.0175, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (9, 'TER A', 9650001, 10050000, 2.00, 0.02, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (10, 'TER A', 10050001, 10350000, 2.25, 0.0225, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (11, 'TER A', 10350001, 10700000, 2.50, 0.024999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (12, 'TER A', 10700001, 11050000, 3.00, 0.03, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (13, 'TER A', 11050001, 11600000, 3.50, 0.035, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (14, 'TER A', 11600001, 12500000, 4.00, 0.04, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (15, 'TER A', 12500001, 13750000, 5.00, 0.05, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (16, 'TER A', 13750001, 15100000, 6.00, 0.060000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (17, 'TER A', 15100001, 16950000, 7.00, 0.07, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (18, 'TER A', 16950001, 19750000, 8.00, 0.08, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (19, 'TER A', 19750001, 24150000, 9.00, 0.09, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (20, 'TER A', 24150001, 26450000, 10.00, 0.09999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (21, 'TER A', 26450001, 28000000, 11.00, 0.10999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (22, 'TER A', 28000001, 30050000, 12.00, 0.11999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (23, 'TER A', 30050001, 32400000, 13.00, 0.12999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (24, 'TER A', 32400001, 35400000, 14.00, 0.13999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (25, 'TER A', 35400001, 39100000, 15.00, 0.15, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (26, 'TER A', 39100001, 43850000, 16.00, 0.16, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (27, 'TER A', 43850001, 47800000, 17.00, 0.17, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (28, 'TER A', 47800001, 51400000, 18.00, 0.18000000000000002, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (29, 'TER A', 51400001, 56300000, 19.00, 0.19000000000000003, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (30, 'TER A', 56300001, 62200000, 20.00, 0.20000000000000004, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (31, 'TER A', 62200001, 68600000, 21.00, 0.21000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (32, 'TER A', 68600001, 77500000, 22.00, 0.22000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (33, 'TER A', 77500001, 89000000, 23.00, 0.23000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (34, 'TER A', 89000001, 103000000, 24.00, 0.24000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (35, 'TER A', 103000001, 125000000, 25.00, 0.25000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (36, 'TER A', 125000001, 157000000, 26.00, 0.26000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (37, 'TER A', 157000001, 206000000, 27.00, 0.2700000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (38, 'TER A', 206000001, 337000000, 28.00, 0.2800000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (39, 'TER A', 337000001, 454000000, 29.00, 0.2900000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (40, 'TER A', 454000001, 550000000, 30.00, 0.3000000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (41, 'TER A', 550000001, 695000000, 31.00, 0.3100000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (42, 'TER A', 695000001, 910000000, 32.00, 0.3200000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (43, 'TER A', 910000001, 1400000000, 33.00, 0.3300000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (44, 'TER A', 1400000001, NULL, 34.00, 0.34000000000000014, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (45, 'TER B', 0, 6200000, 0.00, 0, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (46, 'TER B', 6200001, 6500000, 0.25, 0.0025, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (47, 'TER B', 6500001, 6850000, 0.50, 0.005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (48, 'TER B', 6850001, 7300000, 0.75, 0.0075, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (49, 'TER B', 7300001, 9200000, 1.00, 0.01, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (50, 'TER B', 9200001, 10750000, 1.50, 0.015, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (51, 'TER B', 10750001, 11250000, 2.00, 0.02, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (52, 'TER B', 11250001, 11600000, 2.50, 0.025, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (53, 'TER B', 11600001, 12600000, 3.00, 0.030000000000000002, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (54, 'TER B', 12600001, 13600000, 4.00, 0.04, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (55, 'TER B', 13600001, 14950000, 5.00, 0.05, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (56, 'TER B', 14950001, 16400000, 6.00, 0.060000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (57, 'TER B', 16400001, 18450000, 7.00, 0.07, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (58, 'TER B', 18450001, 21850000, 8.00, 0.08, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (59, 'TER B', 21850001, 26000000, 9.00, 0.09, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (60, 'TER B', 26000001, 27700000, 10.00, 0.09999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (61, 'TER B', 27700001, 29350000, 11.00, 0.10999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (62, 'TER B', 29350001, 31450000, 12.00, 0.11999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (63, 'TER B', 31450001, 33950000, 13.00, 0.12999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (64, 'TER B', 33950001, 37100000, 14.00, 0.13999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (65, 'TER B', 37100001, 41100000, 15.00, 0.15, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (66, 'TER B', 41100001, 45800000, 16.00, 0.16, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (67, 'TER B', 45800001, 49500000, 17.00, 0.17, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (68, 'TER B', 49500001, 53800000, 18.00, 0.18000000000000002, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (69, 'TER B', 53800001, 58500000, 19.00, 0.19000000000000003, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (70, 'TER B', 58500001, 64000000, 20.00, 0.20000000000000004, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (71, 'TER B', 64000001, 71000000, 21.00, 0.21000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (72, 'TER B', 71000001, 80000000, 22.00, 0.22000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (73, 'TER B', 80000001, 93000000, 23.00, 0.23000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (74, 'TER B', 93000001, 109000000, 24.00, 0.24000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (75, 'TER B', 109000001, 129000000, 25.00, 0.25000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (76, 'TER B', 129000001, 163000000, 26.00, 0.26000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (77, 'TER B', 163000001, 211000000, 27.00, 0.2700000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (78, 'TER B', 211000001, 374000000, 28.00, 0.2800000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (79, 'TER B', 374000001, 459000000, 29.00, 0.2900000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (80, 'TER B', 459000001, 555000000, 30.00, 0.3000000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (81, 'TER B', 555000001, 704000000, 31.00, 0.3100000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (82, 'TER B', 704000001, 957000000, 32.00, 0.3200000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (83, 'TER B', 957000001, 1405000000, 33.00, 0.3300000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (84, 'TER B', 1405000001, NULL, 34.00, 0.34000000000000014, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (85, 'TER C', 0, 6600000, 0.00, 0, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (86, 'TER C', 6600001, 6950000, 0.25, 0.0025, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (87, 'TER C', 6950001, 7350000, 0.50, 0.005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (88, 'TER C', 7350001, 7800000, 0.75, 0.0075, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (89, 'TER C', 7800001, 8850000, 1.00, 0.01, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (90, 'TER C', 8850001, 9800000, 1.25, 0.0125, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (91, 'TER C', 9800001, 10950000, 1.50, 0.015000000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (92, 'TER C', 10950001, 11200000, 1.75, 0.0175, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (93, 'TER C', 11200001, 12050000, 2.00, 0.02, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (94, 'TER C', 12050001, 12950000, 3.00, 0.03, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (95, 'TER C', 12950001, 14150000, 4.00, 0.04, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (96, 'TER C', 14150001, 1550000, 5.00, 0.05, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (97, 'TER C', 1550001, 17050000, 6.00, 0.060000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (98, 'TER C', 17050001, 19500000, 7.00, 0.07, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (99, 'TER C', 19500001, 22700000, 8.00, 0.08, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (100, 'TER C', 22700001, 26600000, 9.00, 0.09, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (101, 'TER C', 26600001, 28100000, 10.00, 0.09999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (102, 'TER C', 28100001, 30100000, 11.00, 0.10999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (103, 'TER C', 30100001, 32600000, 12.00, 0.11999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (104, 'TER C', 32600001, 35400000, 13.00, 0.12999999999999998, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (105, 'TER C', 35400001, 38900000, 14.00, 0.13999999999999999, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (106, 'TER C', 38900001, 43000000, 15.00, 0.15, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (107, 'TER C', 43000001, 47400000, 16.00, 0.16, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (108, 'TER C', 47400001, 51200000, 17.00, 0.17, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (109, 'TER C', 51200001, 55800000, 18.00, 0.18000000000000002, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (110, 'TER C', 55800001, 60400000, 19.00, 0.19000000000000003, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (111, 'TER C', 60400001, 66700000, 20.00, 0.20000000000000004, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (112, 'TER C', 66700001, 74500000, 21.00, 0.21000000000000005, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (113, 'TER C', 74500001, 83200000, 22.00, 0.22000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (114, 'TER C', 83200001, 95600000, 23.00, 0.23000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (115, 'TER C', 95600001, 110000000, 24.00, 0.24000000000000007, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (116, 'TER C', 110000001, 134000000, 25.00, 0.25000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (117, 'TER C', 134000001, 169000000, 26.00, 0.26000000000000006, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (118, 'TER C', 169000001, 221000000, 27.00, 0.2700000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (119, 'TER C', 221000001, 390000000, 28.00, 0.2800000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (120, 'TER C', 390000001, 463000000, 29.00, 0.2900000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (121, 'TER C', 463000001, 561000000, 30.00, 0.3000000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (122, 'TER C', 561000001, 709000000, 31.00, 0.3100000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (123, 'TER C', 709000001, 965000000, 32.00, 0.3200000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (124, 'TER C', 965000001, 1419000000, 33.00, 0.3300000000000001, NULL, NULL);
INSERT INTO `ptkp` (`id`, `ter`, `start`, `end`, `tarif`, `ter_percent`, `created_at`, `updated_at`) VALUES (125, 'TER C', 1419000001, NULL, 34.00, 0.34000000000000014, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for reference_letters
-- ----------------------------
DROP TABLE IF EXISTS `reference_letters`;
CREATE TABLE `reference_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reference_letters_employee_id_foreign` (`employee_id`),
  KEY `reference_letters_created_by_foreign` (`created_by`),
  KEY `reference_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `reference_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `reference_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `reference_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reference_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `regions_created_by_foreign` (`created_by`),
  KEY `regions_updated_by_foreign` (`updated_by`),
  CONSTRAINT `regions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `regions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of regions
-- ----------------------------
BEGIN;
INSERT INTO `regions` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'pusat', '2024-05-21 08:24:31', '2024-05-21 08:24:31');
COMMIT;

-- ----------------------------
-- Table structure for release_salary_processes
-- ----------------------------
DROP TABLE IF EXISTS `release_salary_processes`;
CREATE TABLE `release_salary_processes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_salary` decimal(15,2) NOT NULL,
  `additional_income` decimal(15,2) DEFAULT NULL,
  `deductions` decimal(15,2) DEFAULT NULL,
  `total_salary` decimal(15,2) DEFAULT NULL,
  `salary_month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `release_salary_processes_employee_id_foreign` (`employee_id`),
  KEY `release_salary_processes_created_by_foreign` (`created_by`),
  KEY `release_salary_processes_updated_by_foreign` (`updated_by`),
  CONSTRAINT `release_salary_processes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `release_salary_processes_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `release_salary_processes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of release_salary_processes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for relocating_allowances
-- ----------------------------
DROP TABLE IF EXISTS `relocating_allowances`;
CREATE TABLE `relocating_allowances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `old_amount` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `relocation_histories_created_by_foreign` (`created_by`),
  KEY `relocation_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `relocation_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `relocation_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of relocating_allowances
-- ----------------------------
BEGIN;
INSERT INTO `relocating_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `old_amount`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES (22, NULL, NULL, 30, '1993-11-14', NULL, 100000, NULL, '2025-03-13 08:28:27', '2025-03-13 08:28:27');
INSERT INTO `relocating_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `old_amount`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES (23, NULL, NULL, 31, NULL, NULL, 1000000, NULL, '2025-03-18 08:21:02', '2025-03-18 08:21:02');
INSERT INTO `relocating_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `old_amount`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES (25, NULL, NULL, 31, '2025-03-19', NULL, 650000, NULL, '2025-03-19 03:41:24', '2025-03-19 03:41:24');
INSERT INTO `relocating_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `old_amount`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES (30, NULL, NULL, 36, '2025-03-06', NULL, 6500, NULL, '2025-05-17 16:38:36', '2025-05-17 16:38:36');
INSERT INTO `relocating_allowances` (`id`, `created_by`, `updated_by`, `contract_id`, `effective_date`, `old_amount`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES (33, NULL, NULL, 42, '2025-05-02', NULL, 1000000, NULL, '2025-05-18 05:26:58', '2025-05-18 05:26:58');
COMMIT;

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
BEGIN;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (2, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (3, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (4, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (5, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (6, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (7, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (8, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (9, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (10, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (11, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (12, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (13, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (14, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (15, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (16, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (17, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (18, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (19, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (20, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (21, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (22, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (23, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (24, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (25, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (26, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (27, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (28, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (29, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (30, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (31, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (32, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (33, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (34, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (35, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (36, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (37, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (38, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (39, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (40, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (41, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (42, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (43, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (44, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (45, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (46, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (47, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (48, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (49, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (50, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (51, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (52, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (53, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (54, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (55, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (56, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (57, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (58, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (59, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (60, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (61, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (62, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (63, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (64, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (65, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (66, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (67, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (68, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (69, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (70, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (71, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (72, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (73, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (74, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (75, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (76, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (77, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (78, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (79, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (80, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (81, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (82, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (83, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (84, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (85, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (86, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (87, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (88, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (89, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (90, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (91, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (92, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (93, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (94, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (95, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (96, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (97, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (98, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (99, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (100, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (101, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (102, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (103, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (104, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (105, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (106, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (107, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (108, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (109, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (110, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (111, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (112, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (113, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (114, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (115, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (116, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (117, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (118, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (119, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (120, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (121, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (122, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (123, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (124, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (125, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (126, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (127, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (128, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (129, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (130, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (131, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (132, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (133, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (134, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (135, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (136, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (137, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (138, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (139, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (140, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (141, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (142, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (143, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (144, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (145, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (146, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (147, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (148, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (149, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (150, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (151, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (152, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (153, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (154, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (155, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (156, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (157, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (158, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (159, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (160, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (161, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (162, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (163, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (164, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (165, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (166, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (167, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (168, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (169, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (170, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (171, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (172, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (173, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (174, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (175, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (176, 1);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (7, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (8, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (9, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (10, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (11, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (12, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (13, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (14, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (15, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (16, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (17, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (18, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (19, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (20, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (21, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (22, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (23, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (24, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (25, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (26, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (27, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (28, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (29, 2);
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES (30, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (1, 'super_admin', 'web', '2025-02-17 15:51:03', '2025-02-17 15:51:03');
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (2, 'HR', 'web', '2025-02-17 15:53:31', '2025-02-17 15:53:31');
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (3, 'panel_user', 'web', '2025-02-18 07:31:39', '2025-02-18 07:31:39');
COMMIT;

-- ----------------------------
-- Table structure for salaries
-- ----------------------------
DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` bigint unsigned NOT NULL,
  `effective_date` date DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int DEFAULT NULL,
  `old_salary` int DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_date` date DEFAULT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salary_histories_created_by_foreign` (`created_by`),
  KEY `salary_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `salary_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of salaries
-- ----------------------------
BEGIN;
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (10, 43, '2025-02-01', 'IDR', 5000000, NULL, NULL, NULL, NULL, NULL, '2025-02-11 02:57:21', '2025-02-11 02:57:21', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (11, 44, '2025-02-01', 'IDR', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-11 03:02:13', '2025-02-11 03:02:13', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (13, 46, '2000-01-01', 'IDR', 5000000, NULL, NULL, NULL, NULL, NULL, '2025-02-11 03:25:48', '2025-02-11 03:25:48', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (14, 46, '2025-01-02', 'IDR', 6000000, NULL, 'TEST', NULL, 'TEST', 'TEST', '2025-02-11 03:46:50', '2025-02-11 03:46:50', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (31, 62, '2025-02-01', 'IDR', 6000000, NULL, 'Error obcaecati ulla', NULL, 'Ratione nihil quod s', NULL, '2025-02-21 07:58:28', '2025-02-21 07:58:28', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (48, 17, '2025-03-07', 'IDR', 12000000, NULL, NULL, NULL, NULL, NULL, '2025-03-06 04:38:05', '2025-03-06 04:38:05', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (53, 22, '1993-11-14', 'IDR', NULL, NULL, 'Dolore amet maiores', NULL, 'Incidunt quas eiusm', NULL, '2025-03-06 10:34:05', '2025-03-06 10:34:05', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (59, 31, NULL, 'IDR', 10000000, NULL, 'Sit eu enim volupta', NULL, 'Vel omnis qui quas t', NULL, '2025-03-18 08:21:02', '2025-03-18 08:21:02', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (60, 30, '2025-04-16', 'IDR', 15000000, NULL, 'Test', '2025-04-03', 'remark 1', '123', '2025-04-23 15:59:10', '2025-04-23 15:59:10', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (65, 36, '2025-03-06', 'IDR', 10000000, NULL, 'Sit eu enim volupta', NULL, 'Vel omnis qui quas t', NULL, '2025-05-17 16:38:36', '2025-05-17 16:38:36', NULL, NULL);
INSERT INTO `salaries` (`id`, `contract_id`, `effective_date`, `currency`, `salary`, `old_salary`, `reason`, `ref_date`, `remark`, `ref_no`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES (71, 42, '2025-05-02', 'IDR', 20000000, NULL, 'Recusandae Ipsum c', NULL, 'Rerum quis sunt veli', NULL, '2025-05-18 05:26:58', '2025-05-18 05:26:58', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for salary_slips
-- ----------------------------
DROP TABLE IF EXISTS `salary_slips`;
CREATE TABLE `salary_slips` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `wee_hours_income` decimal(10,2) NOT NULL,
  `overtime_income` decimal(10,2) NOT NULL,
  `bt_allowance` decimal(10,2) NOT NULL,
  `position_allowance` decimal(10,2) NOT NULL,
  `performance_review_amount` decimal(10,2) NOT NULL,
  `insurance_plan` decimal(10,2) NOT NULL,
  `tax_income` decimal(10,2) NOT NULL,
  `jamsostek` decimal(10,2) NOT NULL,
  `bpjs_pension` decimal(10,2) NOT NULL,
  `bpjs` decimal(10,2) NOT NULL,
  `total_income` decimal(10,2) NOT NULL,
  `total_deduction` decimal(10,2) NOT NULL,
  `take_home_pay` decimal(10,2) NOT NULL,
  `period_from` date NOT NULL,
  `period_to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salary_slips_employee_id_foreign` (`employee_id`),
  KEY `salary_slips_created_by_foreign` (`created_by`),
  KEY `salary_slips_updated_by_foreign` (`updated_by`),
  CONSTRAINT `salary_slips_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `salary_slips_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `salary_slips_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of salary_slips
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`),
  KEY `sessions_created_by_foreign` (`created_by`),
  KEY `sessions_updated_by_foreign` (`updated_by`),
  CONSTRAINT `sessions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `sessions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------
BEGIN;
INSERT INTO `sessions` (`id`, `created_by`, `updated_by`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('vWXo3ZenyL5eJqX76WTSXApE28ECEpm8PS9qobc6', NULL, NULL, 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiRXozcXhtRDRSaGQ4MU00dm5kbUlCeUlEak45NE9XZ0FPRUVxbVFyWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiQ4UUh0WDVRSzduY09JOFlqWFJqV1UuWG9hWG1IL0pya1dlb0hoN2hyclFQZVRVYmVyYWR0ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9lbXBsb3llZXMiO31zOjg6ImZpbGFtZW50IjthOjA6e319', 1747547143);
COMMIT;

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for shifts
-- ----------------------------
DROP TABLE IF EXISTS `shifts`;
CREATE TABLE `shifts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `off_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `off_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shifts_employee_id_foreign` (`employee_id`),
  KEY `shifts_created_by_foreign` (`created_by`),
  KEY `shifts_updated_by_foreign` (`updated_by`),
  CONSTRAINT `shifts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `shifts_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `shifts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of shifts
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for stamps
-- ----------------------------
DROP TABLE IF EXISTS `stamps`;
CREATE TABLE `stamps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `batch` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `stamps_created_by_foreign` (`created_by`),
  KEY `stamps_updated_by_foreign` (`updated_by`),
  CONSTRAINT `stamps_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `stamps_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stamps
-- ----------------------------
BEGIN;
INSERT INTO `stamps` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`, `rate`, `batch`) VALUES (1, NULL, NULL, 'test', '2024-05-22 03:10:16', '2024-05-22 03:10:16', NULL, NULL);
INSERT INTO `stamps` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`, `rate`, `batch`) VALUES (3, NULL, NULL, 'test', '2024-07-01 08:51:03', '2024-07-01 08:51:31', '55651', '1231');
COMMIT;

-- ----------------------------
-- Table structure for status_time_sheets
-- ----------------------------
DROP TABLE IF EXISTS `status_time_sheets`;
CREATE TABLE `status_time_sheets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `received_on` date NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_b` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_time_sheets_employee_id_foreign` (`employee_id`),
  KEY `status_time_sheets_created_by_foreign` (`created_by`),
  KEY `status_time_sheets_updated_by_foreign` (`updated_by`),
  CONSTRAINT `status_time_sheets_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `status_time_sheets_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `status_time_sheets_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of status_time_sheets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for temporary_histories
-- ----------------------------
DROP TABLE IF EXISTS `temporary_histories`;
CREATE TABLE `temporary_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `job_place_id` bigint unsigned NOT NULL,
  `request_date` date DEFAULT NULL,
  `effective_date` date DEFAULT NULL,
  `homebase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_project` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_superior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_project` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_superior` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_of_assignment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `temporary_histories_job_place_id_foreign` (`job_place_id`),
  KEY `temporary_histories_created_by_foreign` (`created_by`),
  KEY `temporary_histories_updated_by_foreign` (`updated_by`),
  CONSTRAINT `temporary_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `temporary_histories_job_place_id_foreign` FOREIGN KEY (`job_place_id`) REFERENCES `job_places` (`id`) ON DELETE CASCADE,
  CONSTRAINT `temporary_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of temporary_histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for trainings
-- ----------------------------
DROP TABLE IF EXISTS `trainings`;
CREATE TABLE `trainings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `length` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_date` date NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trainings_employee_id_foreign` (`employee_id`),
  KEY `trainings_created_by_foreign` (`created_by`),
  KEY `trainings_updated_by_foreign` (`updated_by`),
  CONSTRAINT `trainings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `trainings_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `trainings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of trainings
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for travel_agents
-- ----------------------------
DROP TABLE IF EXISTS `travel_agents`;
CREATE TABLE `travel_agents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `travel_agents_created_by_foreign` (`created_by`),
  KEY `travel_agents_updated_by_foreign` (`updated_by`),
  CONSTRAINT `travel_agents_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `travel_agents_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of travel_agents
-- ----------------------------
BEGIN;
INSERT INTO `travel_agents` (`id`, `created_by`, `updated_by`, `name`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'test', '2024-05-22 03:01:17', '2024-05-22 03:01:17');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_created_by_foreign` (`created_by`),
  KEY `users_updated_by_foreign` (`updated_by`),
  CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `created_by`, `updated_by`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES (1, NULL, NULL, 'Admin', 'rolloic@gmail.com', NULL, '$2y$12$8QHtX5QK7ncOI8YjXRjWU.XoaXmH/JrkWeoHh7hrrQPeTUberadte', NULL, NULL, NULL, 'Tn1f1JHNIIJxjikew4yRvljGpjypgvfMn4mI2rjFBlaCoDc9z1FE0P7WOOeM', NULL, NULL, '2024-05-20 03:41:32', '2025-01-26 11:50:53');
INSERT INTO `users` (`id`, `created_by`, `updated_by`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES (34, NULL, NULL, 'andi', 'andi@gmail.com', NULL, '$2y$12$T0HdjRXUCZtYI2BZwZfLHuYAPtk3SRiMwqwhOGvKdOcd4vpE9Cv7K', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 07:36:10', '2025-02-18 07:36:10');
COMMIT;

-- ----------------------------
-- Table structure for warning_letters
-- ----------------------------
DROP TABLE IF EXISTS `warning_letters`;
CREATE TABLE `warning_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `warning_letters_employee_id_foreign` (`employee_id`),
  KEY `warning_letters_created_by_foreign` (`created_by`),
  KEY `warning_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `warning_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `warning_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `warning_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of warning_letters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for wee_hours
-- ----------------------------
DROP TABLE IF EXISTS `wee_hours`;
CREATE TABLE `wee_hours` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `period_process` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_ts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_works` date NOT NULL,
  `total_day_per_month` int NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wee_hours_employee_id_foreign` (`employee_id`),
  KEY `wee_hours_created_by_foreign` (`created_by`),
  KEY `wee_hours_updated_by_foreign` (`updated_by`),
  CONSTRAINT `wee_hours_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `wee_hours_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wee_hours_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wee_hours
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for whatever_letters
-- ----------------------------
DROP TABLE IF EXISTS `whatever_letters`;
CREATE TABLE `whatever_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `ref_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_of_letter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `whatever_letters_employee_id_foreign` (`employee_id`),
  KEY `whatever_letters_created_by_foreign` (`created_by`),
  KEY `whatever_letters_updated_by_foreign` (`updated_by`),
  CONSTRAINT `whatever_letters_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `whatever_letters_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `whatever_letters_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of whatever_letters
-- ----------------------------
BEGIN;
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
