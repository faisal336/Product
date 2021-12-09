-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 11:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efinancials_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C3HLn7qpQP6rNUkgw9uTMgglg6ileNeCU0OBWFnS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWxNS1JockZrOHo3YktvUUlhSlI5YUo4VFd1QU9WMk04cWdwN3ZHOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vbG9jYWxob3N0L0VGaW5hbmNpYWxzL2VkaXQtb2ZmaWNlLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1635828498),
('nslZDCCaxq7UJolZEv45rLGgTMsi4j2kFAWWIRmA', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YToxOTp7czo2OiJfdG9rZW4iO3M6NDA6IlpyOTFzVWJuTFE2UnJzRWpSRmJqS251Y0NsQVA1Q0R5Nkoxa3FJSEUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ0OiJodHRwczovL2xvY2FsaG9zdC9FRmluYW5jaWFscy9lZGl0LW9mZmljZS8xNSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTY6ImVmaW5jYV9sb2dnZWRfaW4iO2I6MTtzOjE4OiJlZmluY2FfYXBwX3VzZXJfaWQiO2k6NDtzOjE5OiJlZmluY2FfYXV0aF91c2VyX2lkIjtpOjQ7czoyMToiZWZpbmNhX2lzX3N1cGVyX2FkbWluIjtpOjE7czoyMzoiZWZpbmNhX2lzX3N1cGVyX21hbmFnZXIiO2k6MDtzOjU6ImVtYWlsIjtzOjE6ImQiO3M6OToiaW1hZ2VfdXJsIjtOO3M6OToiZnVsbF9uYW1lIjtzOjEwOiJEZXZlbG9wZXIgIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSFUzd2l2aGttc0I0RDRoeGVldXVRZWRBbHRnek52QmxMQUJBSzBhZWJrbGxKTURoa0RsV2kiO3M6MTA6ImNvbXBhbnlfaWQiO3M6MToiNSI7czoxMDoiY291bnRyeV9pZCI7aToyMztzOjEyOiJkaWFsaW5nX2NvZGUiO047czo4OiJ0aW1lem9uZSI7TjtzOjk6Im9mZmljZV9pZCI7aTo3O3M6MTI6Im9mZmljZV90aXRsZSI7czoxNToiQk9UU1dBTkEgQlJBTkNIIjt9', 1635831677),
('oSnuDqVPwuyAMWJpRq4BZsMwuGGE1wuEeElaLMQq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUNXV3Z3M3JKZzBKWmR3V212S2pGMHpuUmltWnR5VEtEOFBNVlJkRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbG9jYWxob3N0L0VGaW5hbmNpYWxzL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1635828499),
('tuWQ4nm5iGuffcqAsmARRHJ53BD0eMjTvAxKcKuX', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YToxOTp7czo2OiJfdG9rZW4iO3M6NDA6InBoSUN4WXBWUnJMaTZjQTNWSGNyUEZiM3M4SlZGcHpRQ3NUc05OWmMiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwczovL2xvY2FsaG9zdC9FRmluYW5jaWFscyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTY6ImVmaW5jYV9sb2dnZWRfaW4iO2I6MTtzOjE4OiJlZmluY2FfYXBwX3VzZXJfaWQiO2k6NDtzOjE5OiJlZmluY2FfYXV0aF91c2VyX2lkIjtpOjQ7czoyMToiZWZpbmNhX2lzX3N1cGVyX2FkbWluIjtpOjE7czoyMzoiZWZpbmNhX2lzX3N1cGVyX21hbmFnZXIiO2k6MDtzOjU6ImVtYWlsIjtzOjE6ImQiO3M6OToiaW1hZ2VfdXJsIjtOO3M6OToiZnVsbF9uYW1lIjtzOjEwOiJEZXZlbG9wZXIgIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSFUzd2l2aGttc0I0RDRoeGVldXVRZWRBbHRnek52QmxMQUJBSzBhZWJrbGxKTURoa0RsV2kiO3M6MTA6ImNvbXBhbnlfaWQiO3M6MToiNSI7czoxMDoiY291bnRyeV9pZCI7aToyMztzOjEyOiJkaWFsaW5nX2NvZGUiO047czo4OiJ0aW1lem9uZSI7TjtzOjk6Im9mZmljZV9pZCI7aTo3O3M6MTI6Im9mZmljZV90aXRsZSI7czoxNToiQk9UU1dBTkEgQlJBTkNIIjt9', 1635842080);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`),
  ADD KEY `sessions_user_id_index` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
