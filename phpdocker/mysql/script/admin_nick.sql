-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2019 at 11:57 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

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
(2, NULL, '<p>แปลงคุณพรม แย้มช่วย</p>\r\n\r\n<p><strong>คุณลุงเยื้อน เปาะทองคำ</strong></p>\r\n\r\n<p><strong>จ.นครศรีธรรมราช</strong></p>', 'article/s6L7BwHYHzSNoNmRGO0h8Xd9pQyiKXQxSQYIMeGJ.jpeg', NULL, 4, '2019-05-25 02:43:14', '2019-06-04 10:09:17'),
(3, NULL, '<p>แปลงคุณมนศักดิ์-คุณสิริพร พรพนาวัลย์</p>\r\n\r\n<p><strong>จ.นครนายก</strong></p>\r\n\r\n<p><strong>สายพันธุ์คอมแพ็ค อายุ 7 ปี</strong></p>', 'article/dxuArrBU52KNuLrmzy4TVCgwWUoHV0e1DcXypcWu.jpeg', NULL, 4, '2019-05-25 02:52:42', '2019-06-04 10:08:52'),
(4, NULL, '<p>แปลงคุณบัญญัติ สุวรรณรักษา</p>\r\n\r\n<p><strong>จ.สงขลา</strong></p>\r\n\r\n<p><strong>สายพันธุ์เดลิคอมแพ็ค</strong></p>', 'article/TpHipSO0U0GfYQOr7TMtv4GOvCQhUT948GSlKkRV.jpeg', NULL, 4, '2019-05-25 02:52:50', '2019-06-04 10:10:14'),
(5, 'แปลงคุณพรม แย้มช่วย', '<p>จ.พัทลุง</p>\r\n\r\n<p>พันธุ์เดลิ กาน่า อายุ 6 ปี</p>', 'article/2019-06-06155982062717177.png', NULL, 3, '2019-05-25 10:26:55', '2019-06-10 08:44:31'),
(6, 'อาร์ดี เกษตรพัฒนา สาขาใหม่', '<p>&nbsp; บริษัท อาร์ดี เกษตรพัฒนา จำกัด ได้เปิดสาขาใหม่ ศูนย์ท่าแซะ จังหวัดชุมพร&nbsp;ตั้งอยู่ริมถนนเพชรเกษม (AH2)&nbsp;วันที่ 20 เมษายน 2561 ที่ผ่านมา</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; โดยศูนย์ท่าแซะนี้ เป็นศูนย์ที่ 9 ของบริษัทฯ ให้บริการจำหน่ายต้นกล้าปาล์มน้ำมัน หลากหลายสายพันธุ์ พร้อมบริการให้คำปรึกษา โดยผู้เชี่ยวชาญด้านปาล์มน้ำมันทั้งก่อน และหลังการขาย</p>\r\n\r\n<p>สอบถามข้อมูลเพิ่มเติมได้ที่ โทร.&nbsp;093 576 1054</p>', 'article/2019-06-10156015754364825.jpg', '2018-04-20', 1, '2019-05-25 10:29:31', '2019-06-10 09:06:03'),
(7, 'นิเวศวิทยาของปาล์มน้ำมัน', '<p>ปาล์มน้ำมันเป็นพืชยืนต้นที่เจริญเติบโตได้ดีในสภาพภูมิอากาศร้อนชื้น กล่าวคือ มีฝนตกชุก มีแสงแดดมาก ไม่มีสภาพอากาศหนาว ซึ่งสภาวะอากาศดังกล่าว</p>', 'article/2019-06-06155982081822733.png', '2018-07-06', 2, '2019-05-25 10:29:31', '2019-06-06 11:33:39'),
(8, NULL, '<p>แปลงคุณพิมลศรี ยืนนาน</p>\r\n\r\n<p><strong>จ.ชุมพร</strong></p>\r\n\r\n<p><strong>สายพันธุ์คอมแพ็คกาน่า</strong></p>', 'article/WauxD84o1S7D50Ewpf9sfcWVNI81cJsLe1tOVUoX.jpeg', NULL, 4, '2019-06-04 10:09:49', '2019-06-04 10:09:49'),
(9, 'การเลือกพันธุ์ปาล์มน้ำมันที่ดี', '<p>ซื้อจากแปลงเพาะที่ได้มาตรฐาน ได้รับใบอนุญาตรวบรวมเมล็ดพันธุ์ควบคุมเพื่อการค้า จากกรมวิชาการเกษตร และมีใบรับรองให้กับเกษตรกรเมื่อซื้อกล้าปาล์ม</p>', 'article/XBfaPjh9JFgVSgJBQnh5SPNeXqvx2L3FtwcpvRJf.png', '2018-07-04', 2, '2019-06-04 10:19:13', '2019-06-04 10:28:36'),
(10, 'ความเสียหายจากการใช้กล้าปลอม', '<p>เนื่องจากในปัจจุบันได้มีการปลูกปาล์มน้ำมันกันอย่างกว้างขวางทั่วทุกภาคของประเทศไทย แต่กลับพบว่าเกษตรผู้ปลูกปาล์มน้ำมันของไทยบางส่วน ได้นำกล้าปาล์มน้ำมันปลอม</p>', 'article/WxKTBa6wVDkEdwRaqXPzZu3MsB2oiKXI572d09ls.png', '2018-07-04', 2, '2019-06-04 10:27:41', '2019-06-04 10:28:23'),
(11, 'แปลงคุณมนศักดิ์-คุณสิริพร พรพนาวัลย์', '<p>จ.นครนายก</p>\r\n\r\n<p>สายพันธุ์คอมแพ็ค อายุ 7 ปี</p>', 'article/2019-06-10156015580835848.jpg', NULL, 3, '2019-06-06 11:30:49', '2019-06-10 08:37:06');

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

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_name_en`, `images`, `type`, `created_at`, `updated_at`) VALUES
(1, 'บริษัท อาร์ดี เกษตรพัฒนา จำกัด', NULL, 'product/nNWVa1kEgRSWAY6f2xXOZlZwTvJ24Nv6Y5195JJi.png', 1, '2019-06-04 09:54:32', '2019-06-04 09:57:37'),
(2, 'เกี่ยวกับเรา', 'ABOUT US', 'product/Pmk4CgGb0MTXPILDSr50cxeafdPgjTCi2Nn1ZEds.png', 2, '2019-06-10 08:30:20', '2019-06-10 08:30:20'),
(3, 'เกษตรกรตัวอย่าง', 'OUR AGRICULTURIST', 'product/05Y5PWighJRVCR2lvqtFnNb8tMe1EyN8nDunvUZr.png', 6, '2019-06-10 08:34:12', '2019-06-10 08:35:08'),
(4, 'ศูนย์กล้าปาล์มน้ำมัน', 'Oil Palm Plantation Center', 'product/iaa8q9rGAyVZqnweGpHrqrcmkDh4UiHKTmVvNhZk.png', 7, '2019-06-10 08:48:24', '2019-06-10 08:50:28'),
(5, 'ผลิตภัณฑ์', 'OUR PRODUCTS', 'product/qBUnkTulK06Hi2yTNh2xemtXXd0oG95NrhXBpVje.png', 4, '2019-06-10 08:57:20', '2019-06-10 08:57:20'),
(6, 'ข่าวสารและกิจกรรม', 'NEWS AND EVENT', 'product/ZeK115CdJTeCKRz4jOz6fR8SwaLV8te4iJpfnf7w.png', 3, '2019-06-10 09:04:29', '2019-06-10 09:04:29'),
(7, 'ติดต่อเรา', 'CONTACT US', 'product/iPvfyAYM09CFd804y6dAZAO8th6Co6c319xi6jPt.png', 9, '2019-06-10 09:08:55', '2019-06-10 09:09:09'),
(8, 'ร่วมงานกับเรา', 'CAREER', 'product/3WrrEHXtFALC1jpvX4b4wq9OSEJipAyf5Lq4Hdw0.png', 8, '2019-06-10 09:29:07', '2019-06-10 09:29:07');

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
(1, 'ศูนย์กล้าปาล์มน้ำมันนครนายก', '185 ต.โพธิ์แทน อำเภอ องครักษ์ นครนายก 26130', '088-385-1854', 'sales@rdkaset.com', 'https://goo.gl/maps/6WDt9GKj9qY7A75L9', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.8614643744877!2d100.97514461483557!3d14.20288889005671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDEyJzEwLjQiTiAxMDDCsDU4JzM4LjQiRQ!5e0!3m2!1sth!2sth!4v1560158286354!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-05-25 10:37:06', '2019-06-10 09:18:21'),
(2, 'ศูนย์กล้าปาล์มน้ำมันปราจีน', '104 หมู่ 5 ต.บางเดชะ อ.เมือง จ.ปราจีนบุรี 25000', '081-295-8906', NULL, 'https://goo.gl/maps/deJ1CBQ6LHvwc7rR8', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3828.734801756612!2d101.33198043426485!3d13.979732290419664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d002e6695ae39%3A0xfc5f6a0129b7562!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4suC4o-C5jOC4lOC4tSDguYDguIHguKnguJXguKPguJ7guLHguJLguJnguLIg4LiI4Liz4LiB4Lix4LiUICjguKjguLnguJnguKLguYzguJvguKPguLLguIjguLXguJnguJrguLjguKPguLUp!5e0!3m2!1sth!2sth!4v1560158319555!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-05-25 13:50:00', '2019-06-10 09:18:50'),
(3, 'ศูนย์กล้าปาล์มน้ำมันท่าแซะ', 'ติดถนนเพชรเกษม', '093-576-1054', NULL, 'https://goo.gl/maps/8Qsj9ZY5kMh2hk1p8', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.6492230315102!2d99.20076471479994!3d10.684311792384097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ff4d97bc337153%3A0xec5a45c2654b7a67!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4suC4o-C5jOC4lOC4tSDguYDguIHguKnguJXguKPguJ7guLHguJLguJnguLIg4LiI4Liz4LiB4Lix4LiUICjguKjguLnguJnguKLguYzguJfguYjguLLguYHguIvguLAp!5e0!3m2!1sth!2sth!4v1560158518292!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-06-10 09:22:18', '2019-06-10 09:22:18'),
(4, 'ศูนย์กล้าปาล์มน้ำมันสวี', '169/1 หมู่ 12 ต.ครน อ.สวี จ.ชุมพร 86130', '085-214-8668', NULL, 'https://goo.gl/maps/NKBukiLhezerRF9o9', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3925.486171321308!2d99.0883614!3d10.3029213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30560f508cf82547%3A0xe061241b392e9b21!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4suC4o-C5jOC4lOC4tSDguYDguIHguKnguJXguKPguJ7guLHguJLguJnguLIg4LiI4Liz4LiB4Lix4LiUICjguKrguLLguILguLIg4Liq4Lin4Li1KQ!5e0!3m2!1sth!2sth!4v1560158604072!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-06-10 09:23:41', '2019-06-10 09:23:41');

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
(1, 'ชาร์เลนเจอร์', 'CHALLENGER', 'ชื่อเดิม : คอมแพ็ค กาน่า (Compact x Ghana)', '<p>ลำต้นสูงโตช้าเฉลี่ย&nbsp; &nbsp; &nbsp; :&nbsp; 40-45 ซม. ต่อปี</p>\r\n\r\n<p>เปอร์เซ็นต์น้ำมันสูง&nbsp; &nbsp; &nbsp; :&nbsp; &gt;30%</p>\r\n\r\n<p>น้ำหนักทะลายเฉลี่ย&nbsp; &nbsp; &nbsp; :&nbsp; 18-22 กิโลกรัม (เมื่อโตเต็มที่)</p>\r\n\r\n<p>ทนแล้ง&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;ปานกลาง &ndash; สูง</p>\r\n\r\n<p>ขนาดทางใบยาว&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; 6.6 &ndash; 6.9 เมตร</p>\r\n\r\n<p>พื้นที่ปลูก&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; 22 ต้น / 1 ไร่</p>\r\n\r\n<p>ผลผลิตสูง&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; 5 ตัน / ไร่ / ปี</p>', 'product/2019-06-10156015690597240.png', '2019-05-25 10:25:23', '2019-06-10 08:55:35');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
