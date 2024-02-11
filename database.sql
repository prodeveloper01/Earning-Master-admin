-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 03:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earning_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `company`) VALUES
(1, 'admin@gmail.com', '123456', 'Burhan Store');

-- --------------------------------------------------------

--
-- Table structure for table `app_setting`
--

CREATE TABLE `app_setting` (
  `id` int(255) NOT NULL,
  `signup_bonus` varchar(255) NOT NULL,
  `refer_bonus` varchar(255) NOT NULL,
  `startapp_id` varchar(255) NOT NULL,
  `privacy_policy` varchar(255) NOT NULL,
  `one_signal_app_id` varchar(255) NOT NULL,
  `block_rooted_devices` varchar(255) NOT NULL,
  `block_vpn_access` varchar(255) NOT NULL,
  `block_app_clone` varchar(255) NOT NULL,
  `adcolony_app_id` varchar(255) NOT NULL,
  `adcolony_reward_zone` varchar(255) NOT NULL,
  `daily_check_rewards` varchar(255) NOT NULL,
  `int_ads_count` varchar(255) NOT NULL,
  `collect_rewards_ads` varchar(255) NOT NULL,
  `collect_int_ads` varchar(255) NOT NULL,
  `unity_game_id` varchar(255) NOT NULL,
  `minas_reward_point` varchar(255) NOT NULL,
  `admob_banner_ads_id` varchar(255) NOT NULL,
  `admob_video_ads_id` varchar(255) NOT NULL,
  `vungle_key` varchar(255) NOT NULL,
  `vungle_int_ads_id` varchar(255) NOT NULL,
  `adcolony_int_zone_id` varchar(255) NOT NULL,
  `int_admob_ads_id` varchar(255) NOT NULL,
  `ironsource_app_key` varchar(255) NOT NULL,
  `open_rewards_ads` varchar(255) NOT NULL,
  `open_int_ads` varchar(255) NOT NULL,
  `gold_video_ads` varchar(255) NOT NULL,
  `os_rest_api` varchar(255) NOT NULL,
  `refer_page_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_setting`
--

INSERT INTO `app_setting` (`id`, `signup_bonus`, `refer_bonus`, `startapp_id`, `privacy_policy`, `one_signal_app_id`, `block_rooted_devices`, `block_vpn_access`, `block_app_clone`, `adcolony_app_id`, `adcolony_reward_zone`, `daily_check_rewards`, `int_ads_count`, `collect_rewards_ads`, `collect_int_ads`, `unity_game_id`, `minas_reward_point`, `admob_banner_ads_id`, `admob_video_ads_id`, `vungle_key`, `vungle_int_ads_id`, `adcolony_int_zone_id`, `int_admob_ads_id`, `ironsource_app_key`, `open_rewards_ads`, `open_int_ads`, `gold_video_ads`, `os_rest_api`, `refer_page_text`) VALUES
(1, '400', '400', '45645466', 'https://www.google.com/', 'd3d82b29-ac27-4a0a-8dba-86a008741aaa', 'true', 'true', 'true', 'dasdas', 'hfhsdhfs', '400', '2', 'Admob', 'Admob', '5388363', '30', 'dasdasdas', 'ca-app-pub-3940256099942544/5224354917', '62ed2c9a32c5cd6dbde59839', 'INTERSTITIAL-8250040', 'dasdas', 'ca-app-pub-3940256099942544/1033173712', 'key', 'Admob', 'Admob', 'Admob', 'YzdmYjc4NDgtMGU0NS00NWY0LWFiMDQtOGM4OWJlNmI0ZTdl', 'hello this is refer text');

-- --------------------------------------------------------

--
-- Table structure for table `app_settingte`
--

CREATE TABLE `app_settingte` (
  `id` int(255) NOT NULL,
  `vi_applovin_reward` varchar(255) NOT NULL,
  `vi_adcolony_reward` varchar(255) NOT NULL,
  `vi_admob_reward` varchar(255) NOT NULL,
  `vi_startapp_reward` varchar(255) NOT NULL,
  `vi_facebook_reward` varchar(255) NOT NULL,
  `spin_video_ads` varchar(255) NOT NULL,
  `spin_int_ads` varchar(255) NOT NULL,
  `spin_count_ava` varchar(255) NOT NULL,
  `tic_tac_toe_count_ava` varchar(255) NOT NULL,
  `collect_count_ava` varchar(255) NOT NULL,
  `open_count_ava` varchar(255) NOT NULL,
  `eve_count_ava` varchar(255) NOT NULL,
  `ads_scratch_count_ava` varchar(255) NOT NULL,
  `ex_scratch_count_ava` varchar(255) NOT NULL,
  `gr_scratch_count_ava` varchar(255) NOT NULL,
  `vi_vugnle_reward` varchar(255) NOT NULL,
  `vi_unity_reward` varchar(255) NOT NULL,
  `video_wall_ava` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_settingte`
--

INSERT INTO `app_settingte` (`id`, `vi_applovin_reward`, `vi_adcolony_reward`, `vi_admob_reward`, `vi_startapp_reward`, `vi_facebook_reward`, `spin_video_ads`, `spin_int_ads`, `spin_count_ava`, `tic_tac_toe_count_ava`, `collect_count_ava`, `open_count_ava`, `eve_count_ava`, `ads_scratch_count_ava`, `ex_scratch_count_ava`, `gr_scratch_count_ava`, `vi_vugnle_reward`, `vi_unity_reward`, `video_wall_ava`) VALUES
(1, '10', '10', '10', '10', '', 'Admob', 'Admob', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '20');

-- --------------------------------------------------------

--
-- Table structure for table `app_settingtt`
--

CREATE TABLE `app_settingtt` (
  `id` int(255) NOT NULL,
  `king_pot_video_ads` varchar(255) NOT NULL,
  `pollfish_key_app` varchar(255) NOT NULL,
  `pay_earn_rewards_point` varchar(255) NOT NULL,
  `pay_earn_video_ads` varchar(255) NOT NULL,
  `ada_scratch_point` varchar(255) NOT NULL,
  `extra_scratch_point` varchar(255) NOT NULL,
  `gret_scratch_point` varchar(255) NOT NULL,
  `ada_scratch_video_ads` varchar(255) NOT NULL,
  `ada_scratch_int_ads` varchar(255) NOT NULL,
  `extra_scratch_int_ads` varchar(255) NOT NULL,
  `extra_scratch_video_ads` varchar(255) NOT NULL,
  `great_scratch_point` varchar(255) NOT NULL,
  `great_scratch_video_ads` varchar(255) NOT NULL,
  `great_scratch_int_ads` varchar(255) NOT NULL,
  `open_rewards_point` varchar(255) NOT NULL,
  `gold_rewards_point` varchar(255) NOT NULL,
  `king_pot_point` varchar(255) NOT NULL,
  `everday_video_ads` varchar(255) NOT NULL,
  `everday_int_ads` varchar(255) NOT NULL,
  `tic_tac_point` varchar(255) NOT NULL,
  `tic_video_ads` varchar(255) NOT NULL,
  `tic_int_ads` varchar(255) NOT NULL,
  `adget_wall_id` varchar(255) NOT NULL,
  `fyber_app_id` varchar(255) NOT NULL,
  `fyber_security_key` varchar(255) NOT NULL,
  `collect_rewards_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_settingtt`
--

INSERT INTO `app_settingtt` (`id`, `king_pot_video_ads`, `pollfish_key_app`, `pay_earn_rewards_point`, `pay_earn_video_ads`, `ada_scratch_point`, `extra_scratch_point`, `gret_scratch_point`, `ada_scratch_video_ads`, `ada_scratch_int_ads`, `extra_scratch_int_ads`, `extra_scratch_video_ads`, `great_scratch_point`, `great_scratch_video_ads`, `great_scratch_int_ads`, `open_rewards_point`, `gold_rewards_point`, `king_pot_point`, `everday_video_ads`, `everday_int_ads`, `tic_tac_point`, `tic_video_ads`, `tic_int_ads`, `adget_wall_id`, `fyber_app_id`, `fyber_security_key`, `collect_rewards_point`) VALUES
(1, 'Admob', 'b64779be-6828-453e-a0a3-ffb5c9784688', '10', 'Admob', '10', '10', '10', 'Admob', 'Admob', 'Admob', 'Admob', '10', 'Admob', 'Admob', '10', '10', '10', 'Admob', 'Admob', '10', 'Admob', 'Admob', '11', '11', '11', '10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_support`
--

CREATE TABLE `contact_support` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_support`
--

INSERT INTO `contact_support` (`id`, `subject`, `message`, `user_id`, `user_name`, `created_date`) VALUES
(1, 'ggg', 'bbbb', '73332901', 'Md Burhan', '2023-08-21 16:58:43'),
(2, 'bbj', 'bbjj', '73332901', 'Md Burhan', '2023-08-21 16:59:05'),
(3, 'kjkkk', 'jjkj', '73332901', 'Md Burhan', '2023-08-21 16:59:49'),
(4, 'vvv', 'bbbbb', '73332901', 'Md Burhan', '2023-08-21 17:01:03'),
(5, 'bbb', 'gghh', '73332901', 'Arif Khan', '2023-08-23 18:06:54'),
(6, 'yhyy', 'vvv', '73332901', 'Arif Khan', '2023-08-23 18:11:44'),
(7, 'hello ', 'hello ', '73332901', 'Arif Khan', '2023-08-24 13:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `everyday_gift`
--

CREATE TABLE `everyday_gift` (
  `id` int(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `everyday_gift`
--

INSERT INTO `everyday_gift` (`id`, `point`, `status`) VALUES
(1, '20', '0'),
(2, '20', '0'),
(3, '20', '0'),
(4, '20', '0'),
(5, '20', '0'),
(6, '20', '0'),
(7, '20', '0'),
(8, '20', '0'),
(9, '20', '0'),
(10, '20', '0'),
(11, '20', '0');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner`
--

CREATE TABLE `home_banner` (
  `id` int(255) NOT NULL,
  `slide_url_control` varchar(255) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slide_open_url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner`
--

INSERT INTO `home_banner` (`id`, `slide_url_control`, `slide_name`, `image`, `slide_open_url`, `status`) VALUES
(1, 'Yes', 'hello', 'dasdasdasda.jpg', 'https://www.google.com/', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `url`, `date`, `message`, `status`, `image`) VALUES
(1, 'hello ', 'https://www.google.com/', '2023-08-22 13:19:50', 'hello ', '0', ''),
(2, 'hello ', 'https://www.google.com/', '2023-08-22 13:22:25', 'hello ', '0', ''),
(3, 'hello ', 'https://www.google.com/', '2023-08-22 16:42:10', 'hello ', '0', 'https://www.google.com/'),
(4, 'hello ', 'https://www.google.com/', '2023-08-22 16:44:56', 'hello ', '0', 'https://www.google.com/'),
(5, 'hello ', 'https://www.google.com/', '2023-08-22 16:45:12', 'hello ', '0', 'https://www.google.com/'),
(6, 'hello ', 'https://www.google.com/', '2023-08-22 16:45:51', 'hello ', '0', 'https://www.google.com/'),
(7, 'https://www.google.com/', 'https://www.google.com/', '2023-08-22 16:48:15', 'https://www.google.com/', '0', 'https://www.google.com/'),
(8, 'dsa', 'https://www.google.com/', '2023-08-22 16:49:38', 'dasd', '0', 'https://www.google.com/'),
(9, 'das', 'https://www.google.com/', '2023-08-22 16:51:29', 'dasdas', '0', 'https://www.google.com/'),
(10, 'hello ', 'https://www.google.com/', '2023-08-23 18:20:32', 'https://www.google.com/', '0', 'https://www.google.com/'),
(11, 'https://www.google.com/', 'https://www.google.com/', '2023-08-23 18:20:42', 'https://www.google.com/', '0', 'https://www.google.com/'),
(12, 'hello', 'https://www.google.com/', '2023-08-26 13:21:46', 'hello', '0', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `hint` varchar(255) NOT NULL,
  `input_type` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `image`, `symbol`, `hint`, `input_type`, `details`, `status`) VALUES
(1, 'Paypal', 'paypal_kzfp.png', '$', 'Enter your PayPal Email', 'Email', 'Enter your PayPal Email', '0'),
(2, 'Paypal', 'paypal_kzfp.png', '$', 'Enter your PayPal Email', 'Email', 'Enter your PayPal Email', '0'),
(3, 'Paypal', 'paypal_kzfp.png', '$', 'Enter your PayPal Email', 'Email', 'Enter your PayPal Email', '0'),
(5, 'Bkash', 'image-26832-1636289660.jpg', '৳', 'enter your bkash number', '', 'enter your bkash number', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment_package`
--

CREATE TABLE `payment_package` (
  `id` int(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `coins` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_package`
--

INSERT INTO `payment_package` (`id`, `payment_id`, `amount`, `coins`, `symbol`) VALUES
(1, '1', '2', '2000', '$'),
(2, '1', '3', '3000', '$'),
(3, '1', '5', '500', '$'),
(5, '1', '2', '2000', '$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_refer` varchar(255) NOT NULL DEFAULT '0',
  `notice_badge` varchar(255) NOT NULL,
  `daily_date_store` varchar(255) NOT NULL,
  `date_to` varchar(255) NOT NULL,
  `collect_count` varchar(255) NOT NULL,
  `collect_leste_date` varchar(255) NOT NULL,
  `open_count` varchar(255) NOT NULL,
  `open_leste_date` varchar(255) NOT NULL,
  `gold_date` varchar(255) NOT NULL,
  `king_pot_date` varchar(255) NOT NULL,
  `pay_earn_gift_date` varchar(255) NOT NULL,
  `ada_scratch_count` varchar(255) NOT NULL,
  `ada_scratch_date` varchar(255) NOT NULL,
  `extra_scratch_count` varchar(255) NOT NULL,
  `extra_scratch_date` varchar(255) NOT NULL,
  `great_scratch_count` varchar(255) NOT NULL,
  `great_scratch_date` varchar(255) NOT NULL,
  `everday_gift_count` varchar(255) NOT NULL,
  `everday_gift_date` varchar(255) NOT NULL,
  `tic_tac_toe_count` varchar(255) NOT NULL,
  `tic_tac_toe_date` varchar(255) NOT NULL,
  `video_wall_count` varchar(255) NOT NULL,
  `video_wall_date` varchar(255) NOT NULL,
  `spin_count` varchar(255) NOT NULL,
  `last_date_spin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `image`, `username`, `password`, `refer`, `email`, `device_id`, `user_country`, `points`, `user_id`, `status`, `date_registered`, `total_refer`, `notice_badge`, `daily_date_store`, `date_to`, `collect_count`, `collect_leste_date`, `open_count`, `open_leste_date`, `gold_date`, `king_pot_date`, `pay_earn_gift_date`, `ada_scratch_count`, `ada_scratch_date`, `extra_scratch_count`, `extra_scratch_date`, `great_scratch_count`, `great_scratch_date`, `everday_gift_count`, `everday_gift_date`, `tic_tac_toe_count`, `tic_tac_toe_date`, `video_wall_count`, `video_wall_date`, `spin_count`, `last_date_spin`) VALUES
(1, 'App Test', '79788963', 'null', 'U2OHN8', 'QEDE8N', '1HBXQ3', 'apptestworking@gmail.com', 'dsa', 'Bangladesh', '410', '79788963', 'active', '2023-08-26 12:28:22', '0', '1', '', '', '9', '26-08-2023', '10', '', '', '', '', '10', '', '10', '', '10', '', '10', '', '10', '', '10', '26-08-2023', '10', ''),
(2, 'Arif Khan', '+8801928663482', 'ic_avatar_default_1.png', 'Khanbboo9n', '123456', 'a1eunv', 'arifkhan@gmail.com', '630910856f14b9acda', 'Bangladesh', '800', '28028605', 'active', '2023-08-26 12:38:21', '1', '1', '', '', '10', '', '10', '', '', '', '', '10', '', '10', '', '10', '', '10', '', '10', '', '20', '', '10', ''),
(3, 'Sumon Khan', '+8801234569870', 'ic_avatar_default_1.png', 'Khan04niif', 'gghhjkkkkk', 'xp2irc', 'sumon@gmail.com', '630910856f14b9ac', 'Bangladesh', '1311', '45359219', 'active', '2023-08-26 12:40:20', '0', '1', '26-08-2023', '10', '10', '27-08-2023', '10', '27-08-2023', '26-08-2023', '26-08-2023', '26-08-2023', '10', '27-08-2023', '10', '27-08-2023', '10', '27-08-2023', '10', '27-08-2023', '10', '27-08-2023', '20', '27-08-2023', '10', '27-08-2023');

-- --------------------------------------------------------

--
-- Table structure for table `user_tracking`
--

CREATE TABLE `user_tracking` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `type_earn` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `minas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tracking`
--

INSERT INTO `user_tracking` (`id`, `user_id`, `points`, `type_earn`, `created_date`, `minas`) VALUES
(1, '79788963', '400', 'Sign up Bonus', '2023-08-26 12:28:22', ''),
(2, '79788963', '10', 'Collect Reward', '2023-08-26 12:29:54', ''),
(3, '28028605', '400', 'Sign up Bonus', '2023-08-26 12:38:21', ''),
(4, '45359219', '400', 'Sign up Bonus', '2023-08-26 12:40:20', ''),
(5, '28028605', '400', 'Refer claim completed', '2023-08-26 12:40:20', ''),
(6, '45359219', '10', 'Collect Reward', '2023-08-26 12:41:15', ''),
(7, '45359219', '10', 'Collect Reward', '2023-08-26 12:43:48', ''),
(8, '45359219', '10', 'Collect Reward', '2023-08-26 12:43:52', ''),
(9, '45359219', '30', 'Collect Reward Point', '2023-08-26 12:43:55', 'true'),
(10, '45359219', '400', 'Daily Reward', '2023-08-26 12:44:14', ''),
(11, '45359219', '400', 'Daily Reward', '2023-08-26 12:44:17', ''),
(12, '45359219', '10', 'Open Reward', '2023-08-26 12:44:30', ''),
(13, '45359219', '10', 'Open Reward', '2023-08-26 12:44:33', ''),
(14, '45359219', '30', 'Lucky win Point', '2023-08-26 12:44:36', 'true'),
(15, '45359219', '20', 'Everday Reward', '2023-08-26 12:44:46', ''),
(16, '45359219', '20', 'Everday Reward', '2023-08-26 12:44:49', ''),
(17, '45359219', '30', 'Everday Reward Point', '2023-08-26 12:44:52', 'true'),
(18, '45359219', '10', 'Additional Scratch', '2023-08-26 12:45:13', ''),
(19, '45359219', '10', 'Additional Scratch', '2023-08-26 12:45:17', ''),
(20, '45359219', '30', 'Additional Scratch Point', '2023-08-26 12:45:20', 'true'),
(21, '45359219', '10', 'Extra Scratch', '2023-08-26 12:45:30', ''),
(22, '45359219', '10', 'Extra Scratch', '2023-08-26 12:45:34', ''),
(23, '45359219', '30', 'Extra Scratch Point', '2023-08-26 12:45:36', 'true'),
(24, '45359219', '10', 'Great Scratch', '2023-08-26 12:45:40', ''),
(25, '45359219', '10', 'Great Scratch', '2023-08-26 12:45:44', ''),
(26, '45359219', '30', 'Great Scratch Point', '2023-08-26 12:45:48', 'true'),
(27, '45359219', '10', 'TicTacToe Reward', '2023-08-26 12:46:04', ''),
(28, '45359219', '10', 'TicTacToe Reward', '2023-08-26 12:46:11', ''),
(29, '45359219', '10', 'Gold Reward', '2023-08-26 12:46:29', ''),
(30, '45359219', '10', 'KingPot Reward', '2023-08-26 12:46:42', ''),
(31, '45359219', '10', 'Pay Earn Gift Reward', '2023-08-26 12:46:48', ''),
(32, '45359219', '95', 'Spin Win Reward', '2023-08-26 12:47:05', ''),
(33, '45359219', '6', 'Spin Win Reward', '2023-08-26 12:47:11', ''),
(34, '45359219', '30', 'Spin Win Point', '2023-08-26 12:47:13', 'true'),
(35, '45359219', '10', 'Video Wall Vungle', '2023-08-26 12:47:42', ''),
(36, '45359219', '10', 'Video Wall Applovin', '2023-08-26 12:47:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `u_app`
--

CREATE TABLE `u_app` (
  `id` int(255) NOT NULL,
  `purchase_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `fff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_app`
--

INSERT INTO `u_app` (`id`, `purchase_code`, `email`, `company`, `fff`) VALUES
(1, 'app', 'admin@gmail.com', 'Burhan Store', '0');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `package_amount` varchar(255) NOT NULL,
  `payment_coin` varchar(255) NOT NULL,
  `payment_info` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_setting`
--
ALTER TABLE `app_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settingte`
--
ALTER TABLE `app_settingte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settingtt`
--
ALTER TABLE `app_settingtt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_support`
--
ALTER TABLE `contact_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `everyday_gift`
--
ALTER TABLE `everyday_gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner`
--
ALTER TABLE `home_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_package`
--
ALTER TABLE `payment_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tracking`
--
ALTER TABLE `user_tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_app`
--
ALTER TABLE `u_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_setting`
--
ALTER TABLE `app_setting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_settingte`
--
ALTER TABLE `app_settingte`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_settingtt`
--
ALTER TABLE `app_settingtt`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_support`
--
ALTER TABLE `contact_support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `everyday_gift`
--
ALTER TABLE `everyday_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_banner`
--
ALTER TABLE `home_banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_package`
--
ALTER TABLE `payment_package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tracking`
--
ALTER TABLE `user_tracking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `u_app`
--
ALTER TABLE `u_app`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
