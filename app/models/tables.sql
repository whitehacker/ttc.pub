-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2014 at 08:31 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ttc`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_groups`
--

CREATE TABLE `forum_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_threads`
--

CREATE TABLE `forum_threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `makers`
--

CREATE TABLE `makers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `makers`
--

INSERT INTO `makers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kabul', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Ghazni', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_09_10_115049_create_users_table', 1),
('2014_09_10_115140_create_forum_groups_table', 1),
('2014_09_10_115204_create_forum_categories_table', 1),
('2014_09_10_115228_create_forum_threads_table', 1),
('2014_09_10_115243_create_forum_comments_table', 1),
('2014_09_14_115755_create_students_table', 2),
('2014_09_16_170429_create_province_table', 2),
('2014_09_16_170836_create_ttc_table', 3),
('2014_09_17_062616_create_students_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Said Jamaludin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Qarabagh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Maqor', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sangeen', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `FORM_NUMBER` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `MONITORING_PROVINCE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TTC_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEACHER_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TEACHER_SURNAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SUBJECT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DEPARTMENT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `Q11` int(11) NOT NULL,
  `Q12` int(11) NOT NULL,
  `Q13` int(11) NOT NULL,
  `Q14` int(11) NOT NULL,
  `Q15` int(11) NOT NULL,
  `Q16` int(11) NOT NULL,
  `Q17` int(11) NOT NULL,
  `Q18` int(11) NOT NULL,
  `Q19` int(11) NOT NULL,
  `Q20` int(11) NOT NULL,
  `Q21` int(11) NOT NULL,
  `Q22` int(11) NOT NULL,
  `Q23` int(11) NOT NULL,
  `Q24` int(11) NOT NULL,
  `Q25` int(11) NOT NULL,
  `Q26` int(11) NOT NULL,
  `Q27` int(11) NOT NULL,
  `Q28` int(11) NOT NULL,
  `Q29` int(11) NOT NULL,
  `Q30` int(11) NOT NULL,
  `Q31` int(11) NOT NULL,
  `Q32` int(11) NOT NULL,
  `Q33` int(11) NOT NULL,
  `Q34` int(11) NOT NULL,
  `Q35` int(11) NOT NULL,
  `Q36` int(11) NOT NULL,
  `Q37` int(11) NOT NULL,
  `Q38` int(11) NOT NULL,
  `Q39` int(11) NOT NULL,
  `Q40` int(11) NOT NULL,
  `Q41` int(11) NOT NULL,
  `Q42` int(11) NOT NULL,
  `Q43` int(11) NOT NULL,
  `Q44` int(11) NOT NULL,
  `Q45` int(11) NOT NULL,
  `Q46` int(11) NOT NULL,
  `Q47` int(11) NOT NULL,
  `Q48` int(11) NOT NULL,
  `Q49` int(11) NOT NULL,
  `Q51` int(11) NOT NULL,
  `Q52` int(11) NOT NULL,
  `Q53` int(11) NOT NULL,
  `Q54` int(11) NOT NULL,
  `SERVICES` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GENDER` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CLASS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SUBJECT_END` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER_END` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `REMARKS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_id` int(11) NOT NULL,
  `D_check_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`FORM_NUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`FORM_NUMBER`, `DATE`, `MONITORING_PROVINCE`, `TTC_NAME`, `TEACHER_NAME`, `TEACHER_SURNAME`, `SUBJECT`, `DEPARTMENT`, `SEMESTER`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`, `Q30`, `Q31`, `Q32`, `Q33`, `Q34`, `Q35`, `Q36`, `Q37`, `Q38`, `Q39`, `Q40`, `Q41`, `Q42`, `Q43`, `Q44`, `Q45`, `Q46`, `Q47`, `Q48`, `Q49`, `Q51`, `Q52`, `Q53`, `Q54`, `SERVICES`, `GENDER`, `CLASS`, `SUBJECT_END`, `SEMESTER_END`, `REMARKS`, `User_id`, `D_check_id`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00', 'کابل', 'سیدجمال الدین', 'فقیرمحمد', 'سنګری', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, '2014-09-17 03:08:14', '2014-09-17 03:08:14'),
(2, '0000-00-00', 'کندز', 'مرکز', 'خلیل', 'جبران', 'ساینس', 'ریاضی', 'سوم', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'مرد', 'چهارم', 'فزیک', 'هشتم', '', 1, 0, '2014-09-17 05:35:25', '2014-09-17 05:35:25'),
(3, '1393-06-17', 'غور', 'مرکز', 'غوریانی', 'شمس', 'فزیک', 'ریاضی', 'دوم', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'مرد', 'اول', 'اجتماعیات', 'دوم', '', 1, 0, '2014-09-17 06:07:18', '2014-09-17 06:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `student_interview`
--

CREATE TABLE `student_interview` (
  `FORM_NUMBER` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `MONITORING_PROVINCE` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `TTC_NAME` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `TEACHER_NAME` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `TEACHER_SURNAME` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `SUBJECT` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `DEPARTMENT` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `Q11` int(11) NOT NULL,
  `Q12` int(11) NOT NULL,
  `Q13` int(11) NOT NULL,
  `Q14` int(11) NOT NULL,
  `Q15` int(11) NOT NULL,
  `Q16` int(11) NOT NULL,
  `Q17` int(11) NOT NULL,
  `Q18` int(11) NOT NULL,
  `Q19` int(11) NOT NULL,
  `Q20` int(11) NOT NULL,
  `Q21` int(11) NOT NULL,
  `Q22` int(11) NOT NULL,
  `Q23` int(11) NOT NULL,
  `Q24` int(11) NOT NULL,
  `Q25` int(11) NOT NULL,
  `Q26` int(11) NOT NULL,
  `Q27` int(11) NOT NULL,
  `Q28` int(11) NOT NULL,
  `Q29` int(11) NOT NULL,
  `Q30` int(11) NOT NULL,
  `Q31` int(11) NOT NULL,
  `Q32` int(11) NOT NULL,
  `Q33` int(11) NOT NULL,
  `Q34` int(11) NOT NULL,
  `Q35` int(11) NOT NULL,
  `Q36` int(11) NOT NULL,
  `Q37` int(11) NOT NULL,
  `Q38` int(11) NOT NULL,
  `Q39` int(11) NOT NULL,
  `Q40` int(11) NOT NULL,
  `Q41` int(11) NOT NULL,
  `Q42` int(11) NOT NULL,
  `Q43` int(11) NOT NULL,
  `Q44` int(11) NOT NULL,
  `Q45` int(11) NOT NULL,
  `Q46` int(11) NOT NULL,
  `Q47` int(11) NOT NULL,
  `Q48` int(11) NOT NULL,
  `Q49` int(11) NOT NULL,
  `Q50` int(11) NOT NULL,
  `Q51` int(11) NOT NULL,
  `Q52` int(11) NOT NULL,
  `Q53` int(11) NOT NULL,
  `Q54` int(11) NOT NULL,
  `SERVICES` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'بلی  /  نخیر' COMMENT 'آیا از طرف اداره برای شما تسهیلات مورد نیاز مساعد گردیده؟',
  `GENDER` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'مرد  /  زن',
  `CLASS` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `SUBJECT_END` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER_END` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `REMARKS` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `D_CHECK_ID` int(11) NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`FORM_NUMBER`),
  KEY `FORM_NUMBER` (`FORM_NUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='فورم مصاحبه با محصل' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'baheer', '$2y$10$wcQxHZY2T/sp4./L3BwrhOWfa4kOYd2gvyTKlFJxZCgoU9TrPkdDm', 'بصیراحمد بهیر', '1', '1DrEuIz0R1PmAvjzu3tB4q8ecuJoDMFg4r5dxQKAoEkZL5B516aXrCBMtX9P', '2014-09-13 14:07:37', '2014-09-23 23:28:14'),
(2, 'tariq', '$2y$10$FRmQ/mgT1yAp9YHy4sylOODWqScR/dbBTcoexDjhUTEtlYklVPB1e', '', '0', '', '2014-09-16 07:10:00', '2014-09-16 07:10:00');
