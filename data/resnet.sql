-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2018 at 03:46 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1531919414, '::1', 'FSBwW'),
(2, 1531926233, '::1', 'mwRvZ'),
(3, 1531926238, '::1', 'At82H');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('7uarj8r6dhc3t7e424gojvt7v317fbvp', '::1', 1531925893, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313932353839333b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b),
('cu07f0a96cfd2hv579aeij43m7bmai1g', '::1', 1531919325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313931393332353b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b6c6f676765645f696e7c613a31303a7b733a323a226964223b733a313a2231223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a31303a2266697273745f6e616d65223b733a343a2253697465223b733a393a226c6173745f6e616d65223b733a31333a2241646d696e6973747261746f72223b733a353a22656d61696c223b733a31353a2261646d696e4061646d696e2e636f6d223b733a383a226c616e6775616765223b733a373a22656e676c697368223b733a383a2269735f61646d696e223b733a313a2231223b733a363a22737461747573223b733a313a2231223b733a373a2263726561746564223b733a31393a22323031332d30312d30312030303a30303a3030223b733a373a2275706461746564223b733a31393a22323031362d30322d32362032313a34363a3433223b7d72656665727265727c733a37363a22687474703a2f2f6c6f63616c686f73742f7265736e65742f61646d696e2f75736572733f736f72743d6c6173745f6e616d65266469723d617363266c696d69743d3130266f66667365743d30223b),
('fa2qtch8d5mnb223hscm3icp71b6ht33', '::1', 1531927292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313932373239323b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b),
('gjabdc1dc6ifkfhdndqtjp2s99r89kn6', '::1', 1531926227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313932363232373b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b),
('mj1cvqkdled7unvq6qktls2b2gun1blc', '::1', 1531927292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313932373239323b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b),
('pncnp6ukk09dfo1d5eb5bp3brtpj8jfs', '::1', 1531924619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533313932343631393b6c616e6775616765737c613a373a7b733a353a226475746368223b733a353a224475746368223b733a373a227370616e697368223b733a373a225370616e697368223b733a31383a2273696d706c69666965642d6368696e657365223b733a31383a2253696d706c6966696564204368696e657365223b733a31303a22696e646f6e657369616e223b733a31303a22496e646f6e657369616e223b733a373a227275737369616e223b733a373a225275737369616e223b733a373a227475726b697368223b733a373a225475726b697368223b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b6c6f676765645f696e7c613a31303a7b733a323a226964223b733a313a2232223b733a383a22757365726e616d65223b733a373a226a6f686e646f65223b733a31303a2266697273745f6e616d65223b733a343a224a6f686e223b733a393a226c6173745f6e616d65223b733a333a22446f65223b733a353a22656d61696c223b733a31323a226a6f686e40646f652e636f6d223b733a383a226c616e6775616765223b733a373a22656e676c697368223b733a383a2269735f61646d696e223b733a313a2230223b733a363a22737461747573223b733a313a2231223b733a373a2263726561746564223b733a31393a22323031332d30312d30312030303a30303a3030223b733a373a2275706461746564223b733a31393a22323031382d30372d31382031343a30393a3032223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `read` datetime DEFAULT NULL,
  `read_by` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `title`, `message`, `created`, `read`, `read_by`) VALUES
(1, 'John Doe', 'john@doe.com', 'Test Message', 'This is only a test message. Notice that once you\'ve read it, the button changes from blue to grey, indicating that it has been reviewed.', '2013-01-01 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE `friendship` (
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `relation` enum('friend','ignored') NOT NULL DEFAULT 'ignored'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `ip` varchar(20) NOT NULL,
  `attempt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`ip`, `attempt`) VALUES
('::1', '2018-07-18 14:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `input_type` enum('input','textarea','radio','dropdown','timezones') CHARACTER SET latin1 NOT NULL,
  `options` text COMMENT 'Use for radio and dropdown: key|value on each line',
  `is_numeric` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'forces numeric keypad on mobile devices',
  `show_editor` enum('0','1') NOT NULL DEFAULT '0',
  `input_size` enum('large','medium','small') DEFAULT NULL,
  `translate` enum('0','1') NOT NULL DEFAULT '0',
  `help_text` varchar(256) DEFAULT NULL,
  `validation` varchar(128) NOT NULL,
  `sort_order` tinyint(3) UNSIGNED NOT NULL,
  `label` varchar(128) NOT NULL,
  `value` text COMMENT 'If translate is 1, just start with your default language',
  `last_update` datetime DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `input_type`, `options`, `is_numeric`, `show_editor`, `input_size`, `translate`, `help_text`, `validation`, `sort_order`, `label`, `value`, `last_update`, `updated_by`) VALUES
(1, 'site_name', 'input', NULL, '0', '0', 'large', '0', NULL, 'required|trim|min_length[3]|max_length[128]', 10, 'Site Name', 'RESNET', '2018-07-18 14:07:30', 1),
(2, 'per_page_limit', 'dropdown', '10|10\r\n25|25\r\n50|50\r\n75|75\r\n100|100', '1', '0', 'small', '0', NULL, 'required|trim|numeric', 50, 'Items Per Page', '10', '2018-07-18 14:07:30', 1),
(3, 'meta_keywords', 'input', NULL, '0', '0', 'large', '0', 'Comma-seperated list of site keywords', 'trim', 20, 'Meta Keywords', 'social,network,researcher', '2018-07-18 14:07:30', 1),
(4, 'meta_description', 'textarea', NULL, '0', '0', 'large', '0', 'Short description describing your site.', 'trim', 30, 'Meta Description', 'This is the site description.', '2018-07-18 14:07:30', 1),
(5, 'site_email', 'input', NULL, '0', '0', 'medium', '0', 'Email address all emails will be sent from.', 'required|trim|valid_email', 40, 'Site Email', 'youremail@yourdomain.com', '2018-07-18 14:07:30', 1),
(6, 'timezones', 'timezones', NULL, '0', '0', 'medium', '0', NULL, 'required|trim', 60, 'Timezone', 'UTC', '2018-07-18 14:07:30', 1),
(7, 'welcome_message', 'textarea', NULL, '0', '1', 'large', '1', 'Message to display on home page.', 'trim', 70, 'Welcome Message', 'a:7:{s:5:\"dutch\";s:18:\"<p><br></p><p></p>\";s:7:\"spanish\";s:18:\"<p><br></p><p></p>\";s:18:\"simplified-chinese\";s:18:\"<p><br></p><p></p>\";s:10:\"indonesian\";s:18:\"<p><br></p><p></p>\";s:7:\"russian\";s:18:\"<p><br></p><p></p>\";s:7:\"turkish\";s:18:\"<p><br></p><p></p>\";s:7:\"english\";s:20:\"<p><br></p>\r\n<p></p>\";}', '2018-07-18 14:07:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(256) NOT NULL,
  `language` varchar(64) DEFAULT NULL,
  `is_admin` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `validation_code` varchar(50) DEFAULT NULL COMMENT 'Temporary code for opt-in registration',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `scopus_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `first_name`, `last_name`, `email`, `language`, `is_admin`, `status`, `deleted`, `validation_code`, `created`, `updated`, `scopus_id`) VALUES
(1, 'admin', 'ce516f215aa468c376736c9013e8b663f7b3c06226a87739bc6b32882f9278349a721ea725a156eecf9e3c1868904a77e4d42c783e0287a0909a8bbb97e1525f', '66cb0ab1d9efe250b46e28ecb45eb33b3609f1efda37547409a113a2b84c3f94b6a0e738acc391e2dfa718676aa55adead05fcb12d2e32aee379e190511a3252', 'Site', 'Administrator', 'admin@admin.com', 'english', '1', '1', '0', NULL, '2013-01-01 00:00:00', '2016-02-26 21:46:43', ''),
(2, 'johndoe', '1c6722ad893de353fadebefd3b0c0b1be1e8da6696f6be32f1186461aeff2156e771c1458f593739cd66c7c0f7ece8e04dc9c403968eb03b02afdc04260be55e', '8ce006163dd692201abc1a67a0ddf58901e3b08657293a326bd7ac815c345114856573e648462adba442e2a40817053cfda1d2d66fe60928855f8467c96112ef', 'John', 'Doe', 'john@doe.com', 'english', '0', '1', '0', NULL, '2013-01-01 00:00:00', '2018-07-18 14:09:02', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `title` (`title`),
  ADD KEY `created` (`created`),
  ADD KEY `read` (`read`),
  ADD KEY `read_by` (`read_by`),
  ADD KEY `email` (`email`(78));

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
