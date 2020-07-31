-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 05:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hayche`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer_others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `employer_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `refer1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `email`, `mobile_phone`, `whatsapp_phone`, `dob`, `nationality`, `passport`, `cv`, `qualification`, `experience`, `skills`, `refer`, `refer_others`, `post_id`, `post_title`, `employer_id`, `employer_message`, `employer_name`, `status`, `created_at`, `updated_at`, `refer1`, `refer2`, `refer3`, `refer4`, `refer5`, `refer6`, `surname`, `firstname`) VALUES
(1, 1, 'tripletens.kc@gmail.com', '081626272727', '72626262662', '2019-12-17', 'nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-25', NULL, NULL, 'Hayche Signup.pdf', 'ond', 5, 'Describe your Skills nkh', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:30:21', '2019-12-21 21:30:21', NULL, NULL, 'Newspaper Ad', NULL, NULL, 'Craigslist', NULL, NULL),
(3, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2020-01-02', NULL, NULL, 'Hayche Signup.pdf', 'bsc', 10, 'Describe your Skillsjskjsdkjjkds', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:34:23', '2019-12-21 21:34:23', 'Walk-in', NULL, 'Newspaper Ad', NULL, 'Twitter', NULL, NULL, NULL),
(4, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-26', NULL, NULL, 'Hayche Signup.pdf', 'ond', 5, 'Describe your Skills', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:44:47', '2019-12-21 21:44:47', NULL, 'Employee', NULL, 'Facebook', NULL, NULL, NULL, NULL),
(5, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-26', NULL, NULL, 'Hayche Signup.pdf', 'wassce', 2, 'Describe your Skills sds', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:50:24', '2019-12-21 21:50:24', 'Walk-in', NULL, NULL, 'Facebook', NULL, NULL, NULL, NULL),
(6, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-26', NULL, NULL, 'C:\\xampp\\tmp\\phpCEA0.tmp', 'wassce', 2, 'Describe your Skills sds', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:52:20', '2019-12-21 21:52:20', 'Walk-in', NULL, 'Newspaper Ad', 'Facebook', 'Twitter', 'Craigslist', NULL, NULL),
(7, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-26', NULL, NULL, 'C:\\xampp\\tmp\\php396C.tmp', 'bsc', 5, 'Describe your Skills', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:53:52', '2019-12-21 21:53:52', NULL, NULL, 'Newspaper Ad', 'Facebook', 'Twitter', NULL, NULL, NULL),
(8, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-19', NULL, NULL, 'C:\\xampp\\tmp\\phpB119.tmp', 'nce', 10, 'Describe your Skills sdsd', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 21:55:28', '2019-12-21 21:55:28', NULL, 'Employee', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-28', NULL, NULL, 'HAYCHE PORTAL_1576973349_pdf', 'wassce', 5, 'Describe your Skills hjj', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 23:09:10', '2019-12-21 23:09:10', NULL, NULL, NULL, 'Facebook', 'Twitter', NULL, NULL, NULL),
(10, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-28', NULL, NULL, 'HAYCHE PORTAL_1576973351_pdf', 'wassce', 5, 'Describe your Skills hjj', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 23:09:11', '2019-12-21 23:09:11', NULL, NULL, NULL, 'Facebook', 'Twitter', NULL, NULL, NULL),
(11, 1, 'tripletens.kc@gmail.com', '+2348113658478', '+2348113658478', '2019-12-26', NULL, NULL, 'HAYCHE PORTAL_1576973401_pdf', 'bsc', 5, 'Describe your Skills', NULL, NULL, NULL, NULL, 2, NULL, 'Nonso tech', 2, '2019-12-21 23:10:01', '2019-12-21 23:10:01', 'Walk-in', 'Employee', 'Newspaper Ad', 'Facebook', 'Twitter', NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HAYCHE PORTAL_1576974514_pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2019-12-21 23:28:34', '2019-12-21 23:28:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `title`, `message`, `reply`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'hjjhhjjh', 'Enter your message', NULL, 1, '2019-12-22 00:54:31', '2019-12-22 00:54:31'),
(2, 1, 2, 'New nonso ticket', 'Enter your message ssss', 'Enter your reply to this message', 1, '2019-12-22 19:01:31', '2019-12-22 23:58:54'),
(3, 1, 0, 'New nonso ticket', 'Enter your message ssss', NULL, 1, '2019-12-22 19:01:32', '2019-12-22 19:01:32'),
(4, 1, 0, 'New nonso ticket', 'Enter your message ssss', NULL, 1, '2019-12-22 19:01:33', '2019-12-22 19:01:33'),
(5, 2, 1, 'greetings', 'Am greetings u', 'my test reply', 1, '2019-12-22 19:01:54', '2019-12-22 19:11:00'),
(6, NULL, NULL, NULL, NULL, 'my reply', 1, '2019-12-22 19:08:53', '2019-12-22 19:08:53'),
(7, 2, 2, 'jkjkjk', 'jkkjj Enter your message', NULL, 1, '2019-12-23 00:35:22', '2019-12-23 00:35:22'),
(8, 2, 2, 'nsjskjskj', 'Enter your message jkkjjsk', NULL, 1, '2019-12-23 00:43:12', '2019-12-23 00:43:12'),
(9, 2, 3, 'mnnnm', 'Enter your message', NULL, 1, '2019-12-23 00:50:33', '2019-12-23 00:50:33'),
(10, 2, 3, 'huut', 'Enter your message iyfifu', NULL, 1, '2019-12-23 01:05:17', '2019-12-23 01:05:17'),
(11, 2, 5, 'yiyfioy', 'Enter your message viuougugpi', 'Enter your reply to this messagehdhsdsi reply', 1, '2019-12-23 01:05:54', '2019-12-23 12:05:11'),
(12, 5, 1, 'Cyber Security Analytics Researcher Intern Program', 'Enter your message jsjdsdj', NULL, 1, '2019-12-23 11:59:44', '2019-12-23 11:59:44'),
(13, 5, 1, 'sdjshhsh', 'Enter your message dfsdfs', NULL, 1, '2019-12-23 12:00:18', '2019-12-23 12:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_12_20_224234_add_companyname_to_users_table', 1),
(7, '2019_12_21_153119_add_role_to_users_table', 2),
(9, '2019_12_21_161442_create_applications_table', 3),
(13, '2019_12_21_195014_create_vacancies_table', 4),
(14, '2019_12_21_205306_add_fields_to_applications_table', 5),
(15, '2019_12_21_235439_add_cv_to_users_table', 6),
(16, '2019_12_22_012136_create_messages_table', 7),
(17, '2019_12_22_202155_add_fields_to_users_table', 8),
(18, '2019_12_22_212205_add_state_to_users_table', 9),
(20, '2019_12_22_223440_add_new_fields_to_users_table', 10),
(21, '2019_12_22_234003_add_new_fields_to_vacancies_table', 11),
(22, '2019_12_23_001527_create_payment_table', 12),
(23, '2019_12_23_011130_add_new_fields_to_applications_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `companyname`, `role`, `cv`, `picture`, `about`, `address`, `education`, `skills`, `gender`, `dob`, `personal_phone`, `whatsapp_phone`, `skype`, `country`, `more_info`, `status`, `state`, `facility_type`, `stars`, `city`, `contact_surname`, `contact_firstname`, `contact_position`, `contact_phone_one`, `contact_phone_two`, `contact_email`) VALUES
(1, 'Kalu', 'Chinonso', 'tripletens.kc@gmail.com', NULL, '$2y$10$40/2absJTnEhHEgB/1kZA.pDu/JX9Idy0n82yJwyjmC.l5l0F2MbK', 'iWXMGOemQ8jlhKxSjv4s6jyVX3byWxRoSCXO6oXXaXg7oTgdP33ecNz4yOWP', '2019-12-20 22:05:07', '2019-12-22 21:12:34', 'Scholarship Explore', 'applicant', 'adult-agency-business-380769_1577047989_.jpg', 'adult-agency-business-380769_1577048046_.jpg', 'Enter About me', 'Enter Address', 'Tell Us About your Education', 'Tell Us About your Skills', 'male', '2019-12-27', '7473783787', '545464564', 'jjkjjkjk', 'blessing@gmail.com', 'Enter Notes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Kalu', 'Chinonso', 'nonny@gmail.com', NULL, '$2y$10$ZyrzRlW07wrahLBLe5eUze7a.jdENXC.iFIBmnDjM6mox3SWUiM9y', '0jbZhFpYmMJSbSKnDgEueR3TYZNqiRHA1bg2TMhTtIB0jt0y5ITX837iFNyD', '2019-12-20 22:05:07', '2019-12-23 10:27:27', 'Scholarship Explore', 'employer', 'adult-agency-business-380769_1577047989_.jpg', 'Yearn invitation card_1577099736_.jpg', 'Tell us a brief description about the Company', 'Enter Address', 'Tell Us About your Education', 'Tell Us About your Skills', 'male', '2019-12-27', '44554', '545464564', 'jjkjjkjk', 'Nigeria', 'Enter Notes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Kalu', 'Chinonso', 'destin@gmail.com', NULL, '$2y$10$PET7SCLo4lQvsbl6host.O4I3Ch6XFY7vvV9bG4hMH3rtKt51MClK', 'iDv5odyY6LGEDRs6EZnyZMkcfEOUnjX4DJHSVTM2rk1H4mrEosz1Ey8r73ZP', '2019-12-20 22:33:44', '2019-12-23 12:11:59', 'jkkk', 'admin', NULL, 'pexels-photo-875514_1577106665_.jpeg', 'Enter About me', 'Enter Address', 'Tell Us About your Education', 'Tell Us About your Skills', 'male', '2019-12-27', '64634878347', '787878387378', '7vhdhfskj', 'admin@yahoo.com', 'Enter Notes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'destiny1@gmail.com', NULL, '$2y$10$paSK1OPDfYhiQB8n.QxJoO24v1OLlxkySXk9QtS4fHYCLkgdeiB2.', NULL, '2019-12-20 22:37:01', '2019-12-20 22:37:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'destinuuu@gmail.com', NULL, '$2y$10$bxZQdQnpBaKplaLhVNOAjOa0x6RJ18wuiJ1KQ.X4sLRMXPOe0Yk..', NULL, '2019-12-20 22:47:58', '2019-12-20 22:47:58', 'ErrandBoy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `employer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empoyer_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `staff_no` int(11) DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `employer_id`, `employer_name`, `employer_about`, `empoyer_logo`, `employer_address`, `employer_state`, `employer_country`, `post_title`, `post_description`, `status`, `created_at`, `updated_at`, `staff_no`, `department`) VALUES
(1, 2, 'Nonso tech', 'A software Company', 'nothing', '123 road avenue', 'lagos', 'nigeria', 'Backend dev', 'A php Back end dev ', 1, '2019-12-21 06:15:16', '2019-12-21 14:00:41', NULL, NULL),
(2, 2, 'Scholarship Explore', 'Enter About me', 'adult-agency-business-380769_1577048046_.jpg', 'Enter Address', NULL, 'blessing@gmail.com', 'klklkl', 'kiojbiubobouobj', 1, '2019-12-22 23:03:54', '2019-12-22 23:03:54', 9, 'hjhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
