-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 02:59 AM
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
-- Database: `file_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `office` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `admin_user` text NOT NULL,
  `admin_password` text NOT NULL,
  `admin_status` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `office`, `designation`, `admin_user`, `admin_password`, `admin_status`, `code`) VALUES
(13, 'John Michael Masmela', '', '', 'yoh798@gmail.com', '$2y$12$PL/nkbjAvuAR3NgaTUgWV.wEn2b1o9MRwRqMAVIc1zHPoOqKArHxq', 'Admin', ''),
(15, 'John Michael Masmela', 'SMC', 'Legal', 'masmela@gmail.com', '$2y$12$zngv.88fNo/aVp6qtne/B.oETjinK/OvGdBLJNKAk/3dwh1/S5txm', 'Admin', ''),
(20, 'John Michael Masmela', 'Crempco', 'HR', 'crempcoitsolution@gmail.com', '$2y$12$h8BbLiZfxyasPA7//H5CTuWRZ.vqScDlRC9Om62j8BjI750EichJm', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email_address` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `id`, `email_address`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 1, 'nario@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:36 PM', 'May-30-2019 04:33 PM'),
(0, 1, 'nario@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-30-2019 04:30 PM', 'May-30-2019 04:33 PM'),
(0, 2, 'sample@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-05-2023 10:26 AM', 'Oct-05-2023 10:32 AM');

-- --------------------------------------------------------

--
-- Table structure for table `history_log1`
--

CREATE TABLE `history_log1` (
  `log_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `admin_user` text NOT NULL,
  `action` varchar(100) NOT NULL,
  `actions` varchar(200) NOT NULL DEFAULT 'Has LoggedOut the system at',
  `ip` text NOT NULL,
  `host` text NOT NULL,
  `login_time` varchar(200) NOT NULL,
  `logout_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_log1`
--

INSERT INTO `history_log1` (`log_id`, `id`, `admin_user`, `action`, `actions`, `ip`, `host`, `login_time`, `logout_time`) VALUES
(0, 11, 'richard@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:34 PM', 'May-29-2019 02:35 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:35 PM', 'Mar-27-2021 10:59 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-29-2019 02:37 PM', 'Mar-27-2021 10:59 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'buhayko-PC', 'May-30-2019 04:33 PM', 'Mar-27-2021 10:59 PM'),
(0, 12, 'joneltoledo@yahoo.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'keystone.mwbsys.com', 'Mar-27-2021 10:56 PM', 'Mar-27-2021 10:59 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '127.0.0.1', 'keystone.mwbsys.com', 'Mar-27-2021 10:59 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-04-2023 01:21 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-05-2023 08:49 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-05-2023 08:49 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-05-2023 08:51 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-05-2023 10:32 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 10:21 AM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 11:43 AM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 01:48 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 01:48 PM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 02:44 PM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 02:44 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 02:45 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 02:49 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 03:01 PM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 03:56 PM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 03:58 PM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 03:58 PM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 04:00 PM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-09-2023 04:00 PM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 08:18 AM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 08:21 AM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 08:24 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 09:45 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 10:20 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 10:21 AM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 10:21 AM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 10:22 AM', 'Oct-18-2023 08:36 AM'),
(0, 16, 'legal@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 11:20 AM', 'Oct-10-2023 11:26 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 11:26 AM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 11:26 AM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-10-2023 02:57 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 08:07 AM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 08:07 AM', 'Oct-18-2023 08:36 AM'),
(0, 19, 'sample@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 09:26 AM', 'Oct-12-2023 10:59 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:00 AM', 'Oct-18-2023 08:36 AM'),
(0, 20, 'crempcoitsolution@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:19 AM', 'Oct-16-2023 11:38 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:20 AM', 'Oct-18-2023 08:36 AM'),
(0, 20, 'crempcoitsolution@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:21 AM', 'Oct-16-2023 11:38 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:28 AM', 'Oct-18-2023 08:36 AM'),
(0, 20, 'crempcoitsolution@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 11:45 AM', 'Oct-16-2023 11:38 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 04:59 PM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-12-2023 05:00 PM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-13-2023 09:51 AM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-13-2023 09:53 AM', 'Oct-16-2023 01:08 PM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-13-2023 09:58 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-14-2023 08:22 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 09:01 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 09:05 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 09:08 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 09:29 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 09:44 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:21 AM', 'Oct-18-2023 08:36 AM'),
(0, 20, 'crempcoitsolution@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:34 AM', 'Oct-16-2023 11:38 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:35 AM', 'Oct-18-2023 08:36 AM'),
(0, 20, 'crempcoitsolution@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:37 AM', 'Oct-16-2023 11:38 AM'),
(0, 13, 'admin@campcodes.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:38 AM', 'Oct-18-2023 08:36 AM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 11:42 AM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 01:07 PM', 'Oct-16-2023 01:08 PM'),
(0, 15, 'masmela@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 01:08 PM', ''),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:20 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:24 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:26 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:31 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:32 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:33 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-16-2023 02:38 PM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:10 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:15 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:27 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:32 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:36 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:36 AM', 'Oct-18-2023 08:36 AM'),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:40 AM', ''),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:45 AM', ''),
(0, 13, 'yoh798@gmail.com', 'Has LoggedIn the system at', 'Has LoggedOut the system at', '::1', 'DESKTOP-RF2SUNO', 'Oct-18-2023 08:49 AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email_address` text NOT NULL,
  `user_password` text NOT NULL,
  `user_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `email_address`, `user_password`, `user_status`) VALUES
(2, 'john michael masmela', 'sample@gmail.com', '$2y$12$r3cNGN0czI9m2l2dAfsuPuzgCDSRv.R5HMCXtxMZdO.D2X1egBH9y', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL,
  `DESIGNATION` varchar(200) NOT NULL,
  `SIZE` varchar(200) NOT NULL,
  `DOWNLOAD` varchar(200) NOT NULL,
  `TIMERS` varchar(200) NOT NULL,
  `ADMIN_STATUS` varchar(300) NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`ID`, `NAME`, `office`, `DESIGNATION`, `SIZE`, `DOWNLOAD`, `TIMERS`, `ADMIN_STATUS`, `EMAIL`) VALUES
(12, 'IT_20231009_Daily Report - Daily Summary Report.pdf', 'SMC', 'HR', '45956', '0', 'Oct-10-2023 02:03 PM', 'Admin', 'John Michael Masmela'),
(13, 'IT_20231007_Daily Report - Daily Summary Report.pdf', 'SMC', 'Legal', '45773', '1', 'Oct-10-2023 02:03 PM', 'Admin', 'John Michael Masmela'),
(14, 'ajax_tutorial.pdf', 'Crempco', 'HR', '618379', '0', 'Oct-12-2023 11:28 AM', 'Admin', 'John Michael Masmela'),
(15, 'Facebook PAGE for Cluster.docx', 'SMC', '', '129139', '0', 'Oct-14-2023 03:29 PM', 'Admin', 'John Michael Masmela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
