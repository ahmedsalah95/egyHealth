-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2019 at 01:47 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egyhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'test.png', 'test', '2019-07-21 11:21:52', '2019-07-21 11:21:52'),
(2, 'roadmap.png', 'sas', '2019-07-21 11:26:08', '2019-07-21 11:26:08'),
(3, 'file.png', 'test logo', '2019-07-21 12:02:11', '2019-07-21 12:02:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_07_21_114259_create_mains_table', 2),
(9, '2019_07_22_084438_create_sponsors_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('01fb2dee48ae51b3c25d215ccb6bb728dbe8500d4ab51f8351696927a1a099bc0bcfecdce60998a5', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:03:00', '2019-07-18 11:03:00', '2020-07-18 13:03:00'),
('0223216caaf7dc34c7206e40b44c170757d1a7b2ffef4e3f378f41d19e2cad0e2fcc4895979ebbd1', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 08:20:13', '2019-07-21 08:20:13', '2020-07-21 10:20:13'),
('04a44c19b0ac0ed79fc4ad50ce32da30bf779de70e0b9f666d2fb254c15d754c0c3a4ebd195d5e6f', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-22 06:46:30', '2019-07-22 06:46:30', '2020-07-22 08:46:30'),
('17fbedc1fb8152027167a96e80033eaa54bd0fed248a6665db6b0d90b87ec00e704061b38a63bb06', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:04:37', '2019-07-18 11:04:37', '2020-07-18 13:04:37'),
('1dfb3f6e90d8d882edaeb5d1d8efaaf0a4368a0046bff6eb2275832b7c367fe0c38bee5609146db2', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:11:36', '2019-07-18 11:11:36', '2020-07-18 13:11:36'),
('2227210f7f7f6f37f3e4f9c569c4cdd858ad295292d3cb83d9c6278d82e995813b6612da3591da2e', 5, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:26:45', '2019-07-21 06:26:45', '2020-07-21 08:26:45'),
('25b8656a48d72705d9b2f2ff8188948e2243a1a37e7e9ea1de52a23ee4e99583d57eb203ef9847a7', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 11:18:52', '2019-07-21 11:18:52', '2020-07-21 13:18:52'),
('29a83c98739663e0996025c6b4df95621d88d3c4ff4a1ea3ffc142bc243cbaae807320aef921dcec', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-18 14:04:43', '2019-07-18 14:04:43', '2020-07-18 16:04:43'),
('2d5cda3deb06ec20d14c0f16d64eb971da454e33e73445570e1a98f5c967106ae9a9957032a832bf', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:06:14', '2019-07-18 13:06:14', '2020-07-18 15:06:14'),
('328a74dbb196ed627f140c206fb83d8e7a6bb3e6855588979d75098353e8a846bd1579c524976cad', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 10:59:43', '2019-07-18 10:59:43', '2020-07-18 12:59:43'),
('430d4d0c20a74240b30266f89ab4adbafabbf45dbd6301a15d083582515d2146edebf2aff5a0fd8c', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 12:05:35', '2019-07-21 12:05:35', '2020-07-21 14:05:35'),
('4672d5ab2537bcf2969244220f019f4cead27caccead95815d691a66e8fba5c24bac4695574e90aa', 5, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:52:00', '2019-07-18 13:52:00', '2020-07-18 15:52:00'),
('4d74976e6e8881ad9446f4dce8c8b9d4d75a4666f38624ba48d150c10d7cfc9378ff9bab469b24ff', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 11:51:41', '2019-07-21 11:51:41', '2020-07-21 13:51:41'),
('514c162ed3ae72095933c670b535278a3cb6f648504647a146b7e075440425dc6282f2fbee9e89c2', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-18 14:25:57', '2019-07-18 14:25:57', '2020-07-18 16:25:57'),
('51c362132f5108d014d1d79f177ace5d6e313f4bf559a4989a1fc45272b596a62e7b7fed60e7b98a', 6, 1, 'Personal Access Token', '[]', 1, '2019-07-21 13:40:34', '2019-07-21 13:40:34', '2020-07-21 15:40:34'),
('52e83b9c391ca5c4adeb285306219c681b65ab3e8411347f5c53a9e31784bc035a745da18070d333', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:09:57', '2019-07-18 11:09:57', '2020-07-18 13:09:57'),
('6554141e6d656ad3d33643dffa1ef3dcee8f9c788c3def9cc92b8f6c1ec0e84ded02c99fdfddf2c4', 6, 1, 'Personal Access Token', '[]', 0, '2019-07-21 08:20:23', '2019-07-21 08:20:23', '2020-07-21 10:20:23'),
('730629006d018a9d2042ece2063112781f8cfdd9d5d02dab65aa6c7dd183bd913adf8418c71a3d25', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:03:31', '2019-07-18 13:03:31', '2020-07-18 15:03:31'),
('7a15ca54aac5e620363a010eab9a07121685510f95892bf48185cc5f0cd27f8a6ca23c9db272d5a0', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:01:18', '2019-07-21 06:01:18', '2020-07-21 08:01:18'),
('7c9e743164bcd4513d281f809440fe57fd96dd03125f803befab9cce3891f94827f3b31116a83e41', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:46:13', '2019-07-21 06:46:13', '2020-07-21 08:46:13'),
('7d3b746677a05d276773fdd8f008d02a6a3343cd8336905125c7250360d5a9ca0c40f5c9d7494711', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:14:07', '2019-07-21 06:14:07', '2020-07-21 08:14:07'),
('7e316d5f7e74f0c8e9e7528f0a3e41139c0dcac738c6badfc4f161c848b6b027c50bf9b360cac4f1', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:04:31', '2019-07-18 13:04:31', '2020-07-18 15:04:31'),
('803d4f522b9b82e0448f2ddfab094cce0c2d156d94ecf75582e5c9b47c24a953e5e963e234573435', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-18 14:02:17', '2019-07-18 14:02:17', '2020-07-18 16:02:17'),
('816568fa61b9fd377c0f48c63e509a1c38547383eee7df78fd1f39b841537dd8ea4daed037c93c0c', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 10:59:29', '2019-07-18 10:59:29', '2020-07-18 12:59:29'),
('839dfb501a95ffd6c56f022a31c8cccd510f388eb4bc5c3b4f0afe18b5fd3730ad41e555330de5af', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:14:52', '2019-07-18 13:14:52', '2020-07-18 15:14:52'),
('86739aa51c733ce5b583fe8026ece1c17aeca0def5a2e6263d5ba3646a7660431fd12f814de871b8', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:23:31', '2019-07-21 06:23:31', '2020-07-21 08:23:31'),
('8a499de93d117d38be2f816566ff3476703c05f147344adc50096b709a782d91e61e94d491d8fe2c', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-17 12:03:28', '2019-07-17 12:03:28', '2020-07-17 14:03:28'),
('8b255243be710a567be2d8eefccff291ee9433b0a6f07f47f081fca99139cb7f872c5d172e6771b3', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-22 06:36:11', '2019-07-22 06:36:11', '2020-07-22 08:36:11'),
('96403b64cbd39c14321b1e6aeda93df63427c8f6992c1bf5fc125fd5d9ba5a1defef712ef9bf6c77', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:36:13', '2019-07-18 11:36:13', '2020-07-18 13:36:13'),
('990fd6b96bb961dbb03498480f08bdf0e088dda836697696abc29e6f4c22844a98c9610b982aa308', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:13:21', '2019-07-21 06:13:21', '2020-07-21 08:13:21'),
('9a38624d47c3b4d67886fa7ddca14e941c85a3b3ebff267edece1d7ca96369d7a3ab4fc4079aa3e6', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 07:36:11', '2019-07-21 07:36:11', '2020-07-21 09:36:11'),
('9d79faceb9da84d159085e9e2ed365f533be5a651d9b415592c3bb9ce83a721efc2cd04cd74680ba', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 11:19:38', '2019-07-21 11:19:38', '2020-07-21 13:19:38'),
('9fdceb70d794f14f2eef46b65d056a01dd54b71722d9a4c4151c83981397783b2b475969a52366ab', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:03:29', '2019-07-18 11:03:29', '2020-07-18 13:03:29'),
('ace07afea3166bd19f460f106e0c30297aa71b0be7cff8843c8e2150ccf6cb942dd31e05a5a20d62', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:51:24', '2019-07-21 06:51:24', '2020-07-21 08:51:24'),
('b81de5db52ebb04ec5cb7ea73601271f5611a2eb1dff1507ee8ed7906f608d688bc0397e1c8d60b6', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 13:49:46', '2019-07-18 13:49:46', '2020-07-18 15:49:46'),
('b9f2c8fa9736f64f8e4b7f27ba6c130032bc17c650b48bca97972e1661dbdf9e536626c86981f160', 5, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:49:31', '2019-07-21 06:49:31', '2020-07-21 08:49:31'),
('be0c67fb5c5f3537b144ee5799a04e17241318dda88509566ec85bd4067dc97b0c2e806c50a6537d', 2, 1, 'Personal Access Token', '[]', 1, '2019-07-17 11:56:34', '2019-07-17 11:56:34', '2020-07-17 13:56:34'),
('be9250ee6be1aa20db889dd881b06d9fccd4664bc2490ea9e8bc2feaf22bbf86ff9762701c3d4820', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 07:34:07', '2019-07-21 07:34:07', '2020-07-21 09:34:07'),
('bf58330bb6fa6c14cb14f0684b4141553f4421f929c43962589a6a2a79f73b8d4709565f06990ec6', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:03:35', '2019-07-18 11:03:35', '2020-07-18 13:03:35'),
('c2a73af2d044ad2a102076c0a1f9d5362d795895bed4d5c41fb1d295b9bd7338e73e362ac1537239', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-18 14:00:32', '2019-07-18 14:00:32', '2020-07-18 16:00:32'),
('c66005ea6ee7dc9e147c303e12517b7e883967fda679b7ecc149b316751c708867643411b60801fe', 6, 1, 'Personal Access Token', '[]', 0, '2019-07-21 07:58:08', '2019-07-21 07:58:08', '2020-07-21 09:58:08'),
('c7e8ac6f86212941d9ce0ef06fbaa4e5d7fcf17de8ad5d96aab86db486ea4afdec30db485e231353', 6, 1, 'Personal Access Token', '[]', 0, '2019-07-21 13:43:25', '2019-07-21 13:43:25', '2020-07-21 15:43:25'),
('c82e783d6a26b153416adb9b094c8724796c1caee215757fbeb744dd9327e026409260e60471d187', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:02:39', '2019-07-18 11:02:39', '2020-07-18 13:02:39'),
('d0c47ce4ae9d8acdfd35337808fe006671c3d3a856cc6531774c0ac247af18996dec75f4ceacb7a4', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:02:54', '2019-07-18 11:02:54', '2020-07-18 13:02:54'),
('d1d70a7be3d1296baf4369c5e0629ea4a42f61f67362ae6f27a5552a11437891a7e54177947c3172', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 12:54:11', '2019-07-18 12:54:11', '2020-07-18 14:54:11'),
('de564ddcb9629d429df002b8dcb6389ece62dfd8967961b3fcf86647dc6f36ca5f39eab7d56fb2b6', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 12:06:15', '2019-07-21 12:06:15', '2020-07-21 14:06:15'),
('df8c819272cc7d609aa74acbe0b3d3e6b8d7fad9a26ba3164fe759ef66b67128197e515643ebb876', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:11:09', '2019-07-18 11:11:09', '2020-07-18 13:11:09'),
('f06f12d30e56f5cc6dee46ee6b77134b6b93d34f166b5a384ba73e53b311d90203b791711b32d1d4', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-21 06:12:32', '2019-07-21 06:12:32', '2020-07-21 08:12:32'),
('f0f95c8728fed1a1882818f1c2a1cd4702030b273651debb455075887d8d49caf2e3a3cee5518d97', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 12:09:48', '2019-07-18 12:09:48', '2020-07-18 14:09:48'),
('f3ad73560a2e6da5aa3e8523a8497ca3c237c60f597732acf2d1c1e034d8a522d721fff8edd25951', 1, 1, 'Personal Access Token', '[]', 0, '2019-07-18 14:27:20', '2019-07-18 14:27:20', '2020-07-18 16:27:20'),
('f704999256691f37ea2ffa5188c4011b9b30f0bc4ab8ac1372575ec2de337e2bb84ef94fc30a2eef', 2, 1, 'Personal Access Token', '[]', 1, '2019-07-18 11:02:06', '2019-07-18 11:02:06', '2020-07-18 13:02:06'),
('f7e1dc48357c320f1b7f1af59bc6bf26f733e0de18f4be6450ec65b2ee082e0de8d7050d593bf070', 2, 1, 'Personal Access Token', '[]', 0, '2019-07-18 11:08:28', '2019-07-18 11:08:28', '2020-07-18 13:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'iFCxS9LG5D6PPypxt82b71kJfpy2GvEDykR5M5XQ', 'http://localhost', 1, 0, 0, '2019-07-17 11:36:45', '2019-07-17 11:36:45'),
(2, NULL, 'Laravel Password Grant Client', 'OLhck2x6ZkYwpFa6ZcEUel445s22kgIgrJ83vnVC', 'http://localhost', 0, 1, 0, '2019-07-17 11:36:45', '2019-07-17 11:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-17 11:36:45', '2019-07-17 11:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` mediumtext COLLATE utf8mb4_unicode_ci,
  `android` mediumtext COLLATE utf8mb4_unicode_ci,
  `ios` mediumtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `logo`, `name`, `description`, `website`, `android`, `ios`, `type`, `created_at`, `updated_at`) VALUES
(2, 'V6SXAEvUKkG4w9UWCJ7FgGCmzcIETAEOroadmap.png', 'dental sponsor', 'test dental sponsor', 'tetst', 'tet', 'ewrew', 'dental', '2019-07-22 08:26:55', '2019-07-22 08:26:55'),
(3, 'gaSTTbMaIQZwAaNOvQJcxJR9snylS0ONScreen Shot 2019-07-22 at 12.14.30 PM.png', 'normal sponsor', 'normal sponsor', 'http://smart-geeks.net/egyHealthApp/addSponsor', 'http://smart-geeks.net/egyHealthApp/addSponsor', 'http://smart-geeks.net/egyHealthApp/addSponsor', 'sponsor', '2019-07-22 08:31:23', '2019-07-22 08:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `phone`, `specialization`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$zMgwKksK9ZxFJwrL9fdogeK6NqC/QnMT/79hJ5hG3aMRU82Ov7YWS', 1, NULL, NULL, NULL, NULL, '2019-07-17 11:49:48', '2019-07-17 11:49:48'),
(6, 'fawzy', 'fawzy@gmail.com', NULL, '$2y$10$HFVWa6sk1JVm54J/V9YUX.OkbJ0SWgT7VV93s9fOHyLCRQn0p4exq', 0, '01116988471', 'aaaa', 'assaa', NULL, '2019-07-21 07:32:50', '2019-07-21 07:32:50'),
(7, 'ziad', 'ziad@gmail.com', NULL, '$2y$10$kyATPxKhSBX/FVo5ZO6QCOh5LUmB3CiRaZ1nWbj3yRAAENjCn46cm', 0, '01116988471', 'aaaa', 'assaa', NULL, '2019-07-21 13:19:03', '2019-07-21 13:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
