-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2019 at 05:25 AM
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
(5, 'แปลงคุณพรม แย้มช่วย', '<p>จ.พัทลุง</p>\r\n\r\n<p>พันธุ์เดลิ กาน่า อายุ 6 ปี</p>', 'article/2019-06-11156024436874397.jpg', NULL, 3, '2019-05-25 10:26:55', '2019-06-11 09:12:48'),
(6, 'อาร์ดี เกษตรพัฒนา สาขาใหม่', '<p>&nbsp; บริษัท อาร์ดี เกษตรพัฒนา จำกัด ได้เปิดสาขาใหม่ ศูนย์ท่าแซะ จังหวัดชุมพร&nbsp;ตั้งอยู่ริมถนนเพชรเกษม (AH2)&nbsp;วันที่ 20 เมษายน 2561 ที่ผ่านมา</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; โดยศูนย์ท่าแซะนี้ เป็นศูนย์ที่ 9 ของบริษัทฯ ให้บริการจำหน่ายต้นกล้าปาล์มน้ำมัน หลากหลายสายพันธุ์ พร้อมบริการให้คำปรึกษา โดยผู้เชี่ยวชาญด้านปาล์มน้ำมันทั้งก่อน และหลังการขาย</p>\r\n\r\n<p>สอบถามข้อมูลเพิ่มเติมได้ที่ โทร.&nbsp;093 576 1054</p>', 'article/2019-06-10156015754364825.jpg', '2018-04-20', 1, '2019-05-25 10:29:31', '2019-06-10 09:06:03'),
(7, 'นิเวศวิทยาของปาล์มน้ำมัน', '<p>1. ซื้อจากแปลงเพาะที่ได้มาตรฐาน ได้รับใบอนุญาตรวบรวมเมล็ดพันธุ์ควบคุมเพื่อการค้า จากกรมวิชาการเกษตร และมีใบรับรองให้กับเกษตรกรเมื่อซื้อกล้าปาล์ม</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"IMG_0128-Edit-wide.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b3c77900e2e723077aa9e10/1530689438734/IMG_0128-Edit-wide.jpg?format=2500w\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56d0174df8baf3a2ef712d0d/1456478034885/?format=1000w\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56d0178f01dbae2cf08475c6/1456478102131/?format=1000w\" /></p>\r\n\r\n<p>2. สอบถามข้อมูล ตรวจสอบแหล่งที่มาของพันธุ์ ก่อนตัดสินใจเลือกซื้อ</p>\r\n\r\n<p>3. ต้นกล้าที่สมบูรณ์ผ่านกระบวนการผลิตที่ได้มาตรฐาน และมีการคัดทิ้งต้นผิดปกติทางพันธุกรรม</p>\r\n\r\n<p><img alt=\"IMG_0229-Edit_Watermark.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b3c7b17562fa782f9d3782e/1530690354295/IMG_0229-Edit_Watermark.jpg?format=1000w\" /></p>\r\n\r\n<p><img alt=\"คัดทิ้งและทำลายกล้าผิดปกติ ไม่นำมาจำหน่ายให้เกษตรกร\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56d017e17c65e4d6eac7ec41/1456478266304/?format=1000w\" /></p>\r\n\r\n<p><em>คัดทิ้งและทำลายกล้าผิดปกติ ไม่นำมาจำหน่ายให้เกษตรกร</em></p>\r\n\r\n<p>4. เลือกซื้อจากบริษัทที่มีการติดตามผล อย่างใกล้ชิด&nbsp;กรณีมีปัญหาสามารถปรึกษาได้ตลอดการเพาะปลูก</p>\r\n\r\n<p>5.&nbsp;พันธุ์ปาล์มน้ำมันที่ได้จากการปรับปรุงพันธุ์จากแหล่งผลิตที่มีมาตรฐานและผ่านการคัดเลือกอย่างดีจะให้ผลผลิตดีกว่าปาล์มน้ำมันที่ไม่ทราบที่มา ซึ่งจะเป็นความเสี่ยงสำหรับเกษตรกร</p>\r\n\r\n<p>6.&nbsp;พิจารณาเลือกพื้นที่ปลูกปาล์มน้ำมันในเขตที่เหมาะสม โดยศึกษาลักษณะเฉพาะและข้อจำกัดของปาล์มน้ำมัน ซึ่งจะช่วยลดต้นทุนการผลิตได้</p>\r\n\r\n<p><img alt=\"_DSC2887.JPG\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b223454575d1f9090dddb3f/1528968347246/_DSC2887.JPG?format=1000w\" /></p>\r\n\r\n<p>7. เลือกซื้อจากบริษัทที่มีนโยบายส่งเสริมการผลิตและการตลาดที่แน่นอน</p>\r\n\r\n<p><img alt=\"IMG_25610420_094328.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b22350d6d2a73e9152bc15e/1528969507324/IMG_25610420_094328.jpg?format=2500w\" /></p>\r\n\r\n<p><img alt=\"การคัดเลือกต้นกล้าปาล์มน้ำมันที่มีคุณภาพ_NoRAT.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5afcf82903ce64542a60a480/1528949121511/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%81%E0%B8%95%E0%B9%89%E0%B8%99%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%9B%E0%B8%B2%E0%B8%A5%E0%B9%8C%E0%B8%A1%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A1%E0%B8%B5%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E_NoRAT.jpg?format=500w\" /></p>', 'article/2019-06-12156030694917679.jpg', '2018-07-05', 2, '2019-05-25 10:29:31', '2019-06-12 02:45:49'),
(8, NULL, '<p>แปลงคุณพิมลศรี ยืนนาน</p>\r\n\r\n<p><strong>จ.ชุมพร</strong></p>\r\n\r\n<p><strong>สายพันธุ์คอมแพ็คกาน่า</strong></p>', 'article/WauxD84o1S7D50Ewpf9sfcWVNI81cJsLe1tOVUoX.jpeg', NULL, 4, '2019-06-04 10:09:49', '2019-06-04 10:09:49'),
(9, 'ความเสียหายจากกล้าปาล์มน้ำมันปลอม', '<p>ใช้กล้าปาล์มน้ำมันปลอม...เสียหายแค่ไหน !!!</p>\r\n\r\n<p>เนื่องจากในปัจจุบันได้มีการปลูกปาล์มน้ำมันกันอย่างกว้างขวางทั่วทุกภาคของประเทศไทย แต่กลับพบว่าเกษตรผู้ปลูกปาล์มน้ำมันของไทยบางส่วน ได้นำกล้าปาล์มน้ำมันปลอมหรือกล้าปาล์มน้ำมันที่ไม่ได้มาตรฐานมาปลูก ซึ่งอาจเกิดจากการขาดความใส่ใจถึงแหล่งที่มาของต้นกล้าหรือเลือกซื้อต้นกล้าปาล์มจากแหล่งเพาะกล้าที่ไม่ได้มาตรฐาน<br />\r\n<br />\r\nเพื่อให้ทุกท่านได้เห็นความสำคัญของกล้าปาล์มน้ำมัน&nbsp;บริษัท อาร์ดี เกษตรพัฒนา จำกัด ขอนำความเสียหายจากการปลูกปาล์มน้ำมันปลอม หรือปาล์มน้ำมันที่ไม่ได้มาตรฐานมาฝากแก่เกษตรกรทุกท่าน<br />\r\n<br />\r\n<strong>ปาล์มน้ำมัน</strong>&nbsp;เป็นพืชที่สามารถให้ผลผลิตทะลายสดได้ตลอดทั้งปี และมีอายุเก็บเกี่ยวผลผลิตได้นานมากกว่า 25 ปีขึ้นไป ดังนั้นพันธุ์ปาล์มน้ำมันที่เกษตรกรนำมาปลูก ต้องเป็นพันธุ์ปาล์มที่ดี จึงจะสามารถเพิ่มประสิทธิภาพ และลดต้นทุนในการผลิตตลอดจนอายุการเก็บเกี่ยวของปาล์มน้ำมันได้<br />\r\n<strong>พันธุ์ปาล์มน้ำมันที่ดี</strong>&nbsp;หมายถึง พันธุ์ปาล์มน้ำมันที่ผ่านกระบวนการปรับปรุงพันธุ์ ที่สามารถยืนยันได้ว่าเป็นพันธุ์ที่ให้ผลผลิตน้ำมัน / หน่วยพื้นที่ / หน่วยระยะเวลาสูง และสามารถปรับตัวเข้ากับสภาพแวดล้อมในแหล่งปลูกได้ดี<br />\r\n<br />\r\nปัจจุบันพันธุ์ปาล์มน้ำมันที่นิยมปลูกเป็นการค้า จัดเป็นพันธุ์ลูกผสมแบบเทเนอรา ที่ต้องผ่านกระบวนการปรับปรุงพันธุ์แล้ว ซึ่งมีขั้นตอนสำคัญๆ สรุปได้ ดังนี้<br />\r\n<br />\r\n1.&nbsp;ต้องมีการคัดเลือกต้นแม่พันธุ์แบบดูรา และพ่อพันธุ์แบบพิสิเฟอรา ที่มีลักษณะที่ดีจากประชากรที่ผ่านการปรับปรุงมาแล้ว<br />\r\n<br />\r\n2.&nbsp;ต้องมีขั้นตอนและวิธีการในการผสมพันธุ์ระหว่างต้นแม่พันธุ์แบบดูรา และพ่อพันธุ์แบบพิสิเฟอราอย่างถูกต้อง เพื่อให้ได้ลูกผสมแบบเทเนอราที่ถูกต้อง เพื่อนำมาทดสอบผลผลิตและความสามารถในการปรับตัวเข้ากับสภาพแวดล้อมต่อไป<br />\r\n<br />\r\n3.&nbsp;ลูกผสมเทเนอราที่ได้ในข้อ 2 ต้องใช้วิธีการทดสอบที่เชื่อถือผลการทดสอบได้ โดยพิจารณาถึงศักยภาพในการให้ผลผลิต ลักษณะประจำพันธุ์ต่าง ๆ ของคู่ผสม และความสามารถในการปรับตัวเข้ากับสภาพแวดล้อมที่ปลูกทดสอบ<br />\r\n<br />\r\n4.&nbsp;ต้องมีวิธีการผลิตเมล็ดพันธุ์ที่ดีได้มาตรฐาน จากคู่ผสม (ต้นดูรา X ต้นพิสิเฟอรา) ที่ผ่านการทดสอบในขั่วลูกแล้ว<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"IMG_0412.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b3c928a88251b56319ebff0/1530696522926/IMG_0412.jpg?format=1500w\" /></p>\r\n\r\n<p>5.&nbsp;เมล็ดพันธุ์ที่ดีได้ในข้อ 4 ต้องนำมาเพาะงอก และเลี้ยงดูกล้าปาล์มในระยะกล้าอย่างถูกวิธีการ โดยต้องมีการคัดทิ้งและทำลายต้นกล้าปาล์มที่มีลักษณะผิดปกติ หรือที่ไม่แน่ใจว่าจะเป็นลักษณะปกติ รวมทั้งต้นกล้าปาล์มที่ไม่สมบูรณ์ เพราะหากนำต้นกล้าปาล์มเหล่านี้ไปปลูก จะมีผลกระทบต่อการให้ผลผลิตของปาล์มน้ำมันอย่างมาก</p>\r\n\r\n<p><img alt=\"IMG_0419.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b3c95986d2a7346fac1f647/1530697125753/IMG_0419.jpg?format=2500w\" /></p>\r\n\r\n<p><br />\r\nอย่างไรก็ตาม พบว่า ในปัจจุบันยังคงมีเกษตรกรอีกจำนวนไม่น้อยที่ยังขาดความเข้าใจเกี่ยวกับความสำคัญในการเลือกใช้พันธุ์ปาล์มที่ดี และมีการเก็บเมล็ดจากโคนต้นปาล์ม หรือต้นกล้าปาล์มที่งอกแล้วบริเวณโคนต้นปาล์มจากสวนปาล์มต่าง ๆ มาปลูกเอง หรือจำหน่ายให้กับเกษตรกรรายอื่นๆ ที่สนใจปลูกปาล์ม ซึ่งจะก่อให้เกิดปัญหาอย่างมากต่อการพัฒนาปาล์มน้ำมันของไทยต่อไปในอนาคต และเกิดผลเสียหายต่อทั้งเกษตรกรและเศรษฐกิจโดยรวมของประเทศ ดังนี้<br />\r\n&nbsp;</p>\r\n\r\n<p>ลักษณะของปาล์มน้ำมันที่ปลูกจากเมล็ดที่เก็บจากโคนต้นปาล์ม (พันธุ์ปลอม)</p>\r\n\r\n<p>ปาล์มน้ำมันที่ปลูกจากเมล็ดที่เก็บจากโคนต้นปาล์ม มีความแปรปรวนของลักษณะต่างๆ สูงมาก โดยเฉพาะความแปรปรวนในลักษณะของผลปาล์ม นอกจากนี้ค่าเฉลี่ยของลักษณะทางการเกษตรอื่นๆ เช่น จำนวนทะลายและขนาดทะลายก็มีความแปรปรวนสูงเช่นกัน รวมทั้งมีเปอร์เซ็นต์จำนวนต้นที่ไม่ให้ทะลายปาล์มเลยสูง โดยทั่วไปพันธุ์ปลอมจะมีผลผลิตทะลายปาล์มสด/ไร่/ปี ต่ำกว่าการปลูกปาล์มน้ำมันพันธุ์ดี (ลูกผสมเทเนอรา) ประมาณ 30-40% ซึ่งมีผลทำให้รายรับเป็นจำนวนเงินจากการขายทะลายปาล์มสด/ไร่/ปี ลดลง 30-40% เช่นกัน<br />\r\n&nbsp;</p>\r\n\r\n<p>ความเสียหายที่เกิดกับเกษตรกร&nbsp;จากการปลูกปาล์มน้ำมันที่เก็บเมล็ดจากโคนต้น (พันธุ์ปลอม)</p>\r\n\r\n<p>ความเสียหายทางตรง&nbsp;:</p>\r\n\r\n<p>เกษตรกรที่ปลูกปาล์มน้ำมันที่เก็บเมล็ดจากโคนต้น จะมีต้นทุนในการผลิตสูง เนื่องจากต้องใช้ปัจจัยในการผลิตเท่าเดิม แต่การให้ผลผลิตทะลายสด/ไร่/ปี ต่ำจากการประมาณการผลผลิตทะลายสดตลอดอายุการให้ผลผลิตของปาล์มน้ำมัน (0-32 ปี) พบว่าปาล์มน้ำมันที่ปลูกจากเมล็ดที่เก็บจากโคนต้นปาล์มน้ำมันให้ผลผลิตต่ำกว่าการใช้พันธุ์ดี ถึง 30,976.99 กก/ไร่ คิดเป็นมูลค่าที่เกษตรกรต้องสูญเสียรายได้เป็นจำนวนเงิน 92,930.98 บาท/ไร่ (กำหนดให้ราคาทะลายสดปาล์มน้ำมัน อยู่ที่ 3 บาท/กก. ตลอดอายุเก็บเกี่ยว)* ดังนั้นหากเกษตรกรรายหนึ่งมีพื้นที่ปลูกปาล์มน้ำมันที่ปลูกจากเมล็ดที่เก็บจากโคนต้น จำนวน 50 ไร่ จะทำให้เกษตรกรนั้น สูญเสียรายได้จากการขายผลผลิตทะลายสด เป็นจำนวนเงินทั้งสิ้น 4,646,549 บาท ตลอดอายุการให้ผลผลิตของปาล์มน้ำมัน (0-32 ปี)<br />\r\n* คำนวณผลผลิตของปาล์มน้ำมันที่เก็บเมล็ดจากโคนต้นมาปลูก ให้ผลผลิตทะลายสดเพียง 62% ของปาล์มน้ำมันพันธุ์ดี (ธีระและคณะ, 2545)</p>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/574c0d20c2ea517f706a3ec6/1464601896442/?format=2500w\" /></p>\r\n\r\n<p>ความเสียหายทางอ้อม&nbsp;:</p>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56d01cd17da24f329b159660/1456479447831/?format=750w\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ความเสียหายต่อเศรษฐกิจโดยรวมของประเทศ&nbsp;จากการปลูกปาล์มน้ำมันที่เก็บเมล็ดจากโคนต้น(พันธุ์ปลอม)</p>\r\n\r\n<p>เนื่องจากปาล์มน้ำมัน เป็นพืชอุตสาหกรรมที่เกี่ยวข้องกับผู้ประกอบการหลายฝ่าย อีกทั้งมีความหลากหลายในการเพิ่มมูลค่าโดยการแปรรูปเป็นผลิตภัณฑ์ต่างๆ มากมาย หากพิจารณาถึงภาพรวมทั้งหมดเกี่ยวกับปริมาณการผลิต และมูลค่าของผลิตภัณฑ์ต่างๆ ตลอดอายุการเก็บเกี่ยวปาล์มน้ำมัน (0-32 ปี) เริ่มตั้งแต่การผลิตวัตถุดิบทะลายสดปาล์มน้ำมันจนถึงการแปรรูปเป็นผลิตภัณฑ์ที่สำคัญๆ ที่ต่อเนื่องกันก่อนถึงผู้บริโภค โดยเปรียบเทียบระหว่างการใช้พันธุ์ดี กับพันธุ์ปลอม (เก็บเมล็ดจากโคนต้นมาปลูก) พบว่าการใช้พันธุ์ปลอม หรือการใช้เมล็ดจากโคนต้นปาล์มน้ำมันมาปลูก จะทำให้ประเทศสูญเสียรายได้เป็นจำนวนเงิน 370,903 บาท/ไร่&nbsp;<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;ดังนั้นหากประเทศไทยมีพื้นที่ปลูกปาล์มน้ำมันพันธุ์ปลอม หรือพันธุ์ที่เก็บเมล็ดจากโคนต้นมาปลูก จำนวนถึง 400,000 ไร่ นั่นแสดงว่า ประเทศชาติต้องสูญเสียรายได้เป็นจำนวนเงินมหาศาล คือ ประมาณ 148,361,200,000 บาท ตลอดอายุการให้ผลผลิตปาล์มน้ำมัน (0-32 ปี) หรือสูญเสียรายได้ คิดเฉลี่ยปีละ 4,636,287,500 บาท/4 แสนไร่/ปี<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;การปลูกปาล์มน้ำมันที่เก็บเมล็ดจากโคนต้นปาล์ม (พันธุ์ปลอม) ทำให้ปาล์มน้ำมันที่ปลูกมีความแปรปรวนของลักษณะทางการเกษตรต่าง ๆ สูง และมีผลผลิตทะลายสด/ไร่/ปี ต่ำกว่าการปลูกปาล์มน้ำมันพันธุ์ดีที่ผ่านการปรับปรุงพันธุ์แล้ว ประมาณ 30-40% ซึ่งจะทำให้เกษตรกรสูญเสียรายได้เมื่อเปรียบเทียบกับการปลูกปาล์มน้ำมันพันธุ์ดี คิดเป็นเงิน ดังนั้นก่อนการปลูกปาล์มน้ำมันทุกครั้ง เกษตรกรควรต้องมีความมั่นใจในความถูกต้องของพันธุ์ปาล์มก่อนเสมอ<br />\r\n&nbsp;</p>\r\n\r\n<p>อ้างอิง : เส้นทางสู่ความสำเร็จ การผลิตปาล์มน้ำมัน ศูนย์วิจัยและพัฒนาการผลิตปาล์มน้ำมัน&nbsp;<br />\r\nคณะทรัพยากรธรรมชาติ มหาวิทยาลัยสงขลานครินทร์&nbsp;</p>', 'article/2019-06-12156030639027746.jpg', '2018-07-04', 2, '2019-06-04 10:19:13', '2019-06-12 02:27:35'),
(10, 'นิเวศวิทยาของปาล์มน้ำมัน', '<p>ปาล์มน้ำมันเป็นพืชยืนต้นที่เจริญเติบโตได้ดีในสภาพภูมิอากาศร้อนชื้น กล่าวคือ มีฝนตกชุก มีแสงแดดมาก ไม่มีสภาพอากาศหนาว ซึ่งสภาวะอากาศดังกล่าว ได้แก่ บริเวณเส้นศูนย์สูตร พบว่าปาล์มน้ำมันมีการกระจายอยู่ระหว่างเส้นรุ้งที่ 16 องศาเหนือ ถึง เส้นรุ้งที่ 15 องศาใต้ โดย 90% ของประเทศที่มีการปลูกปาล์มน้ำมันจะอยู่ระหว่างเส้นรุ้งที่ 10 องศาเหนือและใต้</p>\r\n\r\n<h1>สภาพภูมิอากาศที่เหมาะสมสำหรับการปลูกปาล์มน้ำมัน มี 4 ปัจจัย คือ</h1>\r\n\r\n<h2>ปริมาณน้ำฝนและการกระจายตัวของฝน :</h2>\r\n\r\n<p><img alt=\"pexels-photo-52851.jpeg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b1e56ed88251b8e2e4060b3/1528714995036/pexels-photo-52851.jpeg?format=1500w\" /></p>\r\n\r\n<p>ถือได้ว่าเป็นปัจจัยที่สำคัญที่สุดในการกำหนดการเจริญเติบโตของปาล์มน้ำมัน เนื่องจากน้ำมีความสำคัญในการเคลื่อนย้ายของธาตุอาหาร โดยปกติปาล์มน้ำมันที่เจริญเติบโตเต็มที่จะมีการคายน้ำ 5-6 มม./วัน หากมีการขาดน้ำจะทำให้ผลผลิตอีก 19-22 เดือนข้างหน้าลดลง ปริมาณน้ำฝนที่เหมาะสมสำหรับปาล์มน้ำมัน ควรจะอยู่ระหว่าง 2,000-3,000 มม./ปี และมีการกระจายของฝนดีในแต่ละเดือน โดยจะต้องมีปริมาณน้ำฝนมากกว่า 100 มม./เดือน การกระจายของน้ำฝนจะมีความสำคัญมากโดยเฉพาะพื้นที่ซึ่งเป็นดินร่วนปนทราย ซึ่งดินดังกล่าวจะมีการเก็บความชื้นได้น้อยจึงทำให้มีโอกาสขาดน้ำได้ง่าย ดังนั้นการใช้วัชพืชคลุมดิน&nbsp;ก็จะเป็นอีกวิธีที่จะช่วยรักษาความชื้นไว้ในดินได้</p>\r\n\r\n<p><br />\r\nพื้นที่ซึ่งมีปริมาณน้ำฝนต่ำกว่า 1,200 มม./ปี ปริมาณน้ำฝนจะไม่เพียงพอสำหรับการเจริญเติบโตของปาล์ม ปาล์มน้ำมันที่ปลูกในพื้นที่ดังกล่าวจะให้ผลผลิตลดลง ในการรักษาระดับของผลผลิตของปาล์มน้ำมันที่ปลูกในพื้นที่ซึ่งมีปริมาณน้ำฝนและการกระจายของฝนน้อย อาจทำได้โดยการติดตั้งระบบน้ำซึ่งจะช่วยรักษาระดับการให้ผลผลิตของปาล์มในช่วงฤดูแล้งได้ แต่อย่างไรก็ตามในพื้นที่ซึ่งมีฝนตกมากเกินไป (มากกว่า 3,000 มม./ปี) ก็ไม่เหมาะกับปาล์มน้ำมันเช่นเดียวกัน เนื่องจากปาล์มน้ำมันจะได้รับแสงแดดน้อยลง มีการท่วมขังของน้ำในที่ลุ่ม นอกจากนั้นจะมีการระบาดของโรคได้ง่ายกว่าปกติ จากการศึกษาการให้ผลผลิตของปาล์มน้ำมันในพื้นที่ซึ่งมีปริมาณน้ำฝน/ปี แตกต่างกัน พบว่าปริมาณฝนที่มากหรือน้อยเกินไปจะทำให้ผลผลิตปาล์มน้ำมันลดลง</p>\r\n\r\n<p><br />\r\nพื้นที่ที่เหมาะสมสำหรับการปลูกปาล์มน้ำมันไม่ควรมีเดือนที่ขาดน้ำ (เดือนที่ขาดน้ำ ได้แก่ เดือนที่มีน้ำฝนน้อยกว่า 100 มม./เดือน) หากมีการขาดน้ำมากกว่า 4 เดือน (มีช่วงฤดูแล้งที่ยาวนาน) พื้นที่ดังกล่าวจะไม่เหมาะสมที่จะปลูกปาล์มน้ำมัน แต่สามารถแก้ไขได้โดยมีการตั้งระบบน้ำให้กับปาล์มน้ำมัน หากมีสภาพการขาดน้ำในรอบปีมาก จะทำให้จำนวนทะลาย น้ำหนักทะลาย และเปอร์เซ็นต์น้ำมันลดลง</p>\r\n\r\n<h2><strong>ปริมาณแสงแดด :</strong>&nbsp;</h2>\r\n\r\n<p><img alt=\"pexels-photo-147465.jpeg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b1e571b352f5360aaab40f0/1528715040703/pexels-photo-147465.jpeg?format=1500w\" /></p>\r\n\r\n<p>ปริมาณแสงแดดเป็นปัจจัยสำคัญรองจากปริมาณน้ำฝน โดยปกติปาล์มน้ำมันจะต้องได้รับแสงแดดมากกว่า 5 ชั่วโมง/วัน (ได้รับพลังงานแสงไม่น้อยกว่า 17 MJ/ตารางเมตร/วัน) เนื่องจากแสงแดดเป็นปัจจัยสำคัญในการสังเคราะห์แสงของพืชทุกชนิด หากปาล์มน้ำมันได้รับปริมาณแสงน้อยจะทำให้การเจริญเติบโตลดลง การสร้างดอกตัวเมียน้อยลงซึ่งจะทำให้ผลผลิตลดลง นอกจากนั้นยังทำให้สัดส่วนของผลต่อทะลายลดลงซึ่งจะมีผลทำให้ปริมาณน้ำมันลดลงอีกด้วย</p>\r\n\r\n<p>&nbsp;<br />\r\nสำหรับประเทศไทยปริมาณของแสงเพียงพอสำหรับการเจริญเติบโตของปาล์มน้ำมัน ปัจจัยของแสงจะมีปัญหากับปาล์มน้ำมันเมื่อปลูกปาล์มไปแล้วมากกว่า 10 ปี เนื่องจากปาล์มที่ปลูกในระยะที่ชิดจะมีการบังแสงของทางใบระหว่างต้นทำให้เกิดการแข่งขันระหว่างต้น ดังนั้นจำเป็นต้องมีการจัดการอย่างถูกต้องเหมาะสมเกี่ยวกับระยะปลูกและการตัดแต่งทางใบ เพื่อให้ปาล์มมีจำนวนใบและมีพื้นที่ใบที่จะรับแสงได้เหมาะสมตลอดอายุของการเจริญเติบโตของปาล์ม พบว่าช่วงแรกของการเจริญเติบโต การตัดแต่งทางใบไม่ค่อยมีความจำเป็นมากนัก แต่เมื่อปาล์มน้ำมันโตมากขึ้นจะต้องมีการตัดแต่งทางใบมากขึ้น เพื่อทำให้มีพื้นที่ใบรับแสงแดดได้อย่างเพียงพอ ในสภาพที่ปาล์มน้ำมันถูกบังแสง จะทำให้สร้างอาหารได้น้อยลง และทำให้มีการสร้างดอกตัวเมียน้อยลง มีการศึกษาพบว่าช่วงเดือนที่มีกลางวันสั้น จะมีผลทำให้สัดส่วนเพศของปาล์มน้ำมันลดลง</p>\r\n\r\n<h2><strong>อุณหภูมิ :</strong>&nbsp;</h2>\r\n\r\n<p><img alt=\"temperature-1418302-640x480.jpg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b1e573970a6ad65229d6b28/1528715078772/temperature-1418302-640x480.jpg?format=1500w\" /></p>\r\n\r\n<p>อุณหภูมิ มีผลต่อการเจริญเติบโตของปาล์มน้ำมันเช่นเดียวกัน อุณหภูมิที่เหมาะสมในการเจริญเติบโตของปาล์มน้ำมันควรอยู่ช่วง 22-32 องศาเซลเซียส ซึ่งเป็นช่วงอุณหภูมิปกติของเขตภูมิอากาศแบบร้อนชื้น อุณหภูมิที่สูงขึ้นจะมีผลกระทบกับปาล์มน้ำมันน้อยกว่าอุณหภูมิที่ต่ำ ในสภาพอุณหภูมิที่สูงจะมีผลกับการคายน้ำของปาล์มน้ำมันซึ่งจะทำให้ปาล์มน้ำมันขาดน้ำ แต่ในสภาพอุณหภูมิต่ำปาล์มน้ำมันจะมีพัฒนาของใบช้าลง มีการศึกษาพบว่าการเจริญเติบโตของกล้าปาล์มน้ำมันจะจำกัดอย่างมากเมื่ออุณหภูมิต่ำว่า 15 องศาเซลเซียส แต่เมื่ออุณหภูมิเพิ่มขึ้นเป็น 20 องศาเซลเซียส กล้าปาล์มจะเจริญเติบโตเพิ่มขึ้นเป็น 3 เท่า และมีการเจริญเติบโตเพิ่มขึ้นเป็น 7 เท่าเมื่ออุณหภูมิสูงขึ้นเป็น 25 องศาเซลเซียส</p>\r\n\r\n<h2><strong>ความสูงจากระดับน้ำทะเล :&nbsp;</strong></h2>\r\n\r\n<p><img alt=\"pexels-photo-462089.jpeg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b1e57bdf950b7e55e4af8f0/1528715199223/pexels-photo-462089.jpeg?format=1500w\" /></p>\r\n\r\n<p>มีผลกับอุณหภูมิเช่นเดียวกัน (อุณหภูมิจะลดลงประมาณ 0.6 องศาเซลเซียส เมื่อความสูงเพิ่มขึ้นทุกๆ 100 เมตร) มีรายงานว่าปาล์มน้ำมันที่ปลูกในบริเวณพื้นที่สูงกว่าระดับน้ำทะเลมากกว่า 500 เมตร จะให้ผลผลิตช้ากว่าปาล์มน้ำมันที่ปลูกในพื้นที่ต่ำถึง 1 ปี</p>\r\n\r\n<h2><strong>ลม :&nbsp;</strong></h2>\r\n\r\n<p><img alt=\"pexels-photo-243138.jpeg\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/5b1e580a1ae6cffa59ccb3d3/1528715280697/pexels-photo-243138.jpeg?format=1500w\" /></p>\r\n\r\n<p>ลำต้นของปาล์มน้ำมันไม่แข็งแรง (ซึ่งแตกต่างกับมะพร้าว) จึงไม่เหมาะสมที่จะปลูกปาล์มน้ำมันในพื้นที่ซึ่งมีลมแรง หรือ แนวพายุ ความเร็วลมที่เหมาะสมควรอยู่ระหว่าง 0-10 เมตร/วินาที และการที่มีลมพัดช้าๆ จะช่วยลดอุณหภูมิในช่วงเที่ยงวันได้ด้วย&nbsp;<br />\r\nรากของปาล์มน้ำมันเป็นรากฝอย ทำให้ไม่ทนทานต่อกระแสลมที่พัดแรง ประกอบกับปาล์มน้ำมันมีทรงพุ่มใหญ่ทำให้ล้มได้ง่าย โดยเฉพาะการปลูกในพื้นที่พรุ นอกจากนั้นในพื้นที่ซึ่งมีลมแรงจะทำให้ใบปาล์มน้ำมันฉีกขาดหรือทางใบหัก เป็นผลให้อัตราการสังเคราะห์แสงลดลง ในสภาพพื้นที่ซึ่งมีลมพัดโชยอ่อนๆ โดยเฉพาะช่วงที่มีแดดจัดจะช่วยเสริมให้ปาล์มน้ำมันมีการหายใจได้ดีขึ้น และเป็นการช่วยระบายความร้อนแก่ใบปาล์มด้วย</p>\r\n\r\n<h1>ลักษณะทั่วไปของปาล์มน้ำมัน</h1>\r\n\r\n<p><br />\r\nปาล์มน้ำมันจัดอยู่ในพืชตระกูลปาล์ม ตระกูลย่อยเดียวกับมะพร้าว เป็นพืชใบเลี้ยงเดี่ยวที่ผสมข้าม (ใช้เกสรตัวผู้จากต้นอื่นมาผสมกับเกสรตัวเมียของต้นตัวเอง) ปาล์มน้ำมันเป็นพืชสมบูรณ์เพศ คือ&nbsp;มีทั้งช่อดอกเพศผู้และช่อดอกเพศเมียบนต้นเดียวกัน (แยกช่อดอกอยู่ในต้นเดียวกัน) การผสมเปิดจะได้ต้นปาล์มน้ำมันรุ่นลูกที่แตกต่างจากต้นแม่เดิม จึงไม่แนะนำให้เก็บเมล็ดจากใต้ต้นไปขยายพันธุ์ ถ้าปลูกปาล์มน้ำมันจากเมล็ดที่หล่นใต้ต้นหรือนำมาจากแหล่งเพาะพันธุ์ที่ไม่น่าเชื่อถือ จะทำให้ผลผลิตทะลายสดลดลง</p>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56cd5fea2fe13126751de4b6/1456300022320/?format=1000w\" /></p>\r\n\r\n<p><br />\r\nต้นปาล์มน้ำมันจะไม่มีปาล์มต้นตัวเมียหรือต้นตัวผู้ ต้นตัวผู้ที่เกษตรกรเข้าใจ คือ ต้นที่ผิดปกติซึ่งจะออกดอกตัวผู้มากกว่าปกติ (แต่ยังมีดอกตัวเมีย) ดังนั้นจึงเป็นต้นตัวผู้ไม่ได้</p>\r\n\r\n<h1>การผลิตเมล็ดพันธุ์ลูกผสม</h1>\r\n\r\n<p><img alt=\"\" src=\"https://static1.squarespace.com/static/568c93370ab377164ea3225a/t/56cd60b722482ed43c656aad/1456300224540/?format=1000w\" /></p>\r\n\r\n<h2>ดูรา&nbsp;(DURA) :</h2>\r\n\r\n<p>กะลาหนา 2-8 มม. ไม่มีวงเส้นประสีดำอยู่รอบกะลา มีชั้นเปลือกนอกบาง ประมาณ 35-60 เปอร์เซ็นต์ของน้ำหนักผล มียีนส์ควบคุมเป็นลักษณะเด่น ปาล์มชนิดนี้ใช้เป็นแม่พันธุ์</p>\r\n\r\n<h2>ฟิสิเฟอร่า&nbsp;(PISIFERA) :</h2>\r\n\r\n<p>ยีนส์ควบคุมลักษณะผลแบบนี้เป็นลักษณะด้อย ลักษณะผลไม่มีกะลาหรือมีกะลาบาง ช่อดอกตัวเมียมักเป็นหมัน ทำให้ผลฝ่อลีบ ทะลายเล็กเนื่องจากผลไม่พัฒนา ผลผลิตทะลายต่ำมาก ไม่ใช้ปลูกเป็นการค้าแต่ใช้เป็นพ่อพันธุ์ในการผลิตลูกผสม เนื่องจากมีจำนวนดอกตัวเมียมาก</p>\r\n\r\n<h2>เทเนอร่า&nbsp;(TENERA) :</h2>\r\n\r\n<p>มีกะลาบาง ตั้งแต่ 0.5-4 มม. มีวงเส้นประสีดำอยู่รอบกะลา มีชั้นเปลือกนอกมาก 60-90 เปอร์เซ็นต์ของน้ำหนักผล ลักษณะเทเนอร่าเป็นพันธุ์ทาง เกิดจากการผสมข้ามระหว่างต้นแม่ดูราและต้นต่อฟิสิเฟอร่า</p>', 'article/2019-06-12156030673482851.jpg', '2018-07-06', 2, '2019-06-04 10:27:41', '2019-06-12 02:32:14'),
(11, 'แปลงคุณมนศักดิ์-คุณสิริพร พรพนาวัลย์', '<p>จ.นครนายก</p>\r\n\r\n<p>สายพันธุ์คอมแพ็ค อายุ 7 ปี</p>', 'article/2019-06-11156024428759737.jpg', NULL, 3, '2019-06-06 11:30:49', '2019-06-11 09:11:27'),
(12, 'แปลงคุณเสรี สังข์นุ่น', '<p>จ.กระบี่&nbsp;<br />\r\nสายพันธุ์คอมแพ็ค อายุ 7 ปี&nbsp;</p>', 'article/2019-06-12156030608696812.jpg', NULL, 3, '2019-06-12 02:21:26', '2019-06-12 02:21:26'),
(13, 'แปลงคุณลุงเยื้อน เปาะทองคำ', '<p>จ.นครศรีธรรมราช&nbsp;<br />\r\nสายพันธุ์คอมแพ็ค อายุ 4 ปี 6 เดือน</p>', 'article/2019-06-12156030615648218.jpg', NULL, 3, '2019-06-12 02:22:36', '2019-06-12 02:22:36');

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
(8, 'ร่วมงานกับเรา', 'CAREER', 'product/3WrrEHXtFALC1jpvX4b4wq9OSEJipAyf5Lq4Hdw0.png', 8, '2019-06-10 09:29:07', '2019-06-10 09:29:07'),
(9, 'คู่มือการจัดการสวน', 'GARDEN MANAGEMENT GUIDE', 'product/el7RcSHkHPPZhMVWNED5DRHNtLVW0j2bqFmPH00P.png', 5, '2019-06-12 02:43:06', '2019-06-12 02:43:06');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
