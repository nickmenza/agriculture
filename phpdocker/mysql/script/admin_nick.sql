-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2019 at 07:44 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_nick`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=ข่าวใหม่,2=คู่มือ,3=เกษตร',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_name`, `detail`, `images`, `date`, `type`, `created_at`, `updated_at`) VALUES
(2, NULL, '<p>&ldquo;เกษตรสวนปาล์มน้ำมันเมืองลุง พลิกนาข้าว ปลูกปาล์มน้ำมัน แม้จะมีพื้นที่น้อยแต่ด้วยการดูแลที่ดีทั้งพันธุ์ปาล์ม น้ำและปุ๋ย จึงทำผลผลิตได้ 6.2 ตัน/ไร่/ปี พร้อมกับทำสวนปาล์มให้เกิดประโยชน์สูงสุด เช่น ปลูกพืชแซม เลี้ยงปลา เลี้ยงหมู&rdquo;&nbsp;</p>\r\n\r\n<p><strong>คุณลุงเยื้อน เปาะทองคำ</strong></p>\r\n\r\n<p><strong>จ.นครศรีธรรมราช</strong></p>', 'article/kzdAUZvv2MhthnxayBIW9pWt1Y7k7iSxln7IehSR.png', NULL, 4, '2019-05-25 02:43:14', '2019-05-25 02:43:14'),
(3, NULL, NULL, 'article/RKPyqtsAPBMBxMT1iBJlbL2updruRarjkEalIIO3.png', NULL, 4, '2019-05-25 02:52:42', '2019-05-25 02:52:42'),
(4, NULL, NULL, 'article/S3zRUMYqSCu3G2QLtu3YLpjS0zw9F4h6quwQJms4.png', NULL, 4, '2019-05-25 02:52:50', '2019-05-25 02:52:50'),
(5, 'test', '<p>test</p>', 'article/0rudK1hFsEea0h4nXB4kiwVX25dN3YO06afSDkPp.png', NULL, 3, '2019-05-25 10:26:55', '2019-05-25 10:26:55'),
(6, 'นิเวศวิทยาของปาล์มน้ำมัน', '<p>ปาล์มน้ำมันเป็นพืชยืนต้นที่เจริญเติบโตได้ดีในสภาพภูมิอากาศร้อนชื้น กล่าวคือ มีฝนตกชุก มีแสงแดดมาก ไม่มีสภาพอากาศหนาว ซึ่งสภาวะอากาศดังกล่าว</p>', 'article/EpyojzlNktouEZtCj0pC4wcVu7oBJt9iKIZBjVMS.png', '2019-05-25', 1, '2019-05-25 10:29:31', '2019-05-25 10:29:40'),
(7, 'นิเวศวิทยาของปาล์มน้ำมัน', '<p>ปาล์มน้ำมันเป็นพืชยืนต้นที่เจริญเติบโตได้ดีในสภาพภูมิอากาศร้อนชื้น กล่าวคือ มีฝนตกชุก มีแสงแดดมาก ไม่มีสภาพอากาศหนาว ซึ่งสภาวะอากาศดังกล่าว</p>', 'article/EpyojzlNktouEZtCj0pC4wcVu7oBJt9iKIZBjVMS.png', '2019-05-25', 2, '2019-05-25 10:29:31', '2019-05-25 10:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=home,2=about,3=news,4=product,5=garden,6=agriculturist,7=location,8=career,9=contact',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `career_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `property` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `career_name`, `detail`, `location`, `property`, `created_at`, `updated_at`) VALUES
(1, 'เจ้าหน้าที่การตลาด ประจำสำนักงานใหญ่', 'วางแผน จัดลำดับการทำงาน และเสนอแนะให้แก่ฝ่ายบริหารทราบถึงการส่งเสริมและกิจกรรมทางด้านการตลาดได้อย่างมีศักยภาพ', 'กรุงเทพฯ', '<ul>\r\n	<li>\r\n	<p>ปริญญาตรีสาขาการตลาด หรือที่เกี่ยวข้อง</p>\r\n	</li>\r\n	<li>\r\n	<p>ประสบการณ์ 2 ปีขึ้นไป ด้านการตลาดและการประชาสัมพันธ์</p>\r\n	</li>\r\n</ul>', '2019-05-25 10:39:31', '2019-05-25 10:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `iframe` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `title`, `location`, `phone`, `email`, `link`, `iframe`, `created_at`, `updated_at`) VALUES
(1, 'ศูนย์กล้าปาล์มน้ำมันนครนายก', '185 ต.โพธิ์แทน อำเภอ องครักษ์ นครนายก 26130', '088-385-1854', 'sales@rdkaset.com', 'https://goo.gl/maps/JPpHK1spdMFcv99y7', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5340641833536!2d100.53714641426086!3d13.746635601118205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecfc2f455e1%3A0xc4ad0280d8906604!2sCentral+World!5e0!3m2!1sen!2sth!4v1558780533163!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-05-25 10:37:06', '2019-05-25 10:37:06'),
(2, 'ศูนย์กล้าปาล์มน้ำมัน', 'กกกก', 'กกก', 'กกก', 'กกก', 'กกก', '2019-05-25 13:50:00', '2019-05-25 13:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_05_07_135238_create_product', 1),
(21, '2019_05_07_135410_create_artical', 1),
(22, '2019_05_07_135520_create_location', 1),
(23, '2019_05_07_135546_create_career', 1),
(24, '2019_05_07_135620_create_contact', 1),
(25, '2019_05_07_135723_create_banner', 1),
(26, '2019_05_25_091659_create_seo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name_old` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_name_en`, `product_name_old`, `detail`, `images`, `created_at`, `updated_at`) VALUES
(1, 'ชาร์เลนเจอร์', 'CHALLENGER', NULL, NULL, 'product/To0rDBy1D30CgCAZ7uuIgFuKnESjFatyYXYB0CCH.png', '2019-05-25 10:25:23', '2019-05-25 10:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=home,2=about,3=news,4=product,5=garden,6=agriculturist,7=location,8=career,9=contact',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `keyword`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'test', 'da', 'dsadsad', 1, '2019-05-25 02:26:08', '2019-05-25 02:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
