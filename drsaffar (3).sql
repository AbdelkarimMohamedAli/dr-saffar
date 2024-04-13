-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 03:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drsaffar`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_sections`
--

CREATE TABLE `banner_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_sections`
--

INSERT INTO `banner_sections` (`id`, `title_en`, `title`, `created_at`, `updated_at`) VALUES
(6, 'Specialist In Rehabilitation Of The Hand, Wrist, Elbow and Shoulder.', 'متخصص في تأهيل اليد والمعصم والكوع والكتف.', '2024-04-13 09:46:50', '2024-04-13 09:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_subtitle_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_desc_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_desc` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_img`, `blog_title_en`, `blog_title`, `slug`, `blog_subtitle_en`, `blog_subtitle`, `blog_desc_en`, `blog_desc`, `blog_keywords`, `blog_date`, `created_at`, `updated_at`) VALUES
(1, 'blog/blog-3.jpg', 'Does Early Intervention for Breast Cancer Save Lives', 'هل التدخل المبكر لسرطان الثدي ينقذ الأرواح؟', 'mohamed-hekal', 'Proin gravida nibh vel velit auctor aliquet. nean sollicitudin, lorem quis bibendum auctor.', 'Proin gravida nibh vel velit auctor aliquet. nean sollicitudin, lorem quis bibendum auctor.', 'Does Early Intervention for Breast Cancer Save Lives', 'هل التدخل المبكر لسرطان الثدي ينقذ الأرواح؟', 'ddd , sass ,ass,sadqw,qweqwe,qweqwe,rer,dfg,sdf,gfdg,fdg,herw,er,wer', '2024-04-09 00:12:29', '2024-04-08 20:12:29', '2024-04-08 20:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abdelkarim mohamed', 'karimadmin@gmail.com', '01030255622', 'dczxcz', '2024-04-13 06:18:35', '2024-04-13 06:18:35'),
(2, 'abdelkarim', 'karimadmin@gmail.com', '01030255622', 'zxc', '2024-04-13 06:18:59', '2024-04-13 06:18:59'),
(3, 'abdelkarim', 'karimadmin@gmail.com', '01030255622', 'zxc', '2024-04-13 06:19:34', '2024-04-13 06:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_sections`
--

CREATE TABLE `doctor_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_sub_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_sub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_desc_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_desc` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_vector_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_dr_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_medical_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_medical_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qualification_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qualification` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_sections`
--

INSERT INTO `doctor_sections` (`id`, `section_title_en`, `section_title`, `section_sub_en`, `section_sub`, `section_desc_en`, `section_desc`, `section_vector_img`, `section_dr_img`, `dr_name_en`, `dr_name`, `dr_medical_title_en`, `dr_medical_title`, `Qualification_en`, `Qualification`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Alsaffar', 'الدكتور الصفار', 'Dr Mahdi Alsaffar', 'الدكتور مهدي الصفار', 'Dr Mahdi Alsaffar is an Orthopaedic surgeon specialized in Shoulder, Upper Extremity Trauma and sport medicine', 'الدكتور مهدي الصفار هو جراح عظام متخصص في إصابات الكتف والأطراف العلوية والطب الرياضي أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد', 'doctor_section/alsaffar_logo.gif', 'doctor_section/doctors-details-1.jpg', 'Dr. Mahdy Al Saffar', 'دكتور مهدي الصفار', 'Doctor spec..', 'تخصص الدكتور', 'Bachelor degree of Medicine and Surgery, Cairo University.', 'بكالوريوس الطب والجراحة جامعة القاهرة.', '2024-04-08 20:14:59', '2024-04-08 20:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_translate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `label`, `ar_translate`, `link`, `parent`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'About', 'من نحن', '#', 0, 1, '2024-04-13 06:29:09', '2024-04-13 06:29:09'),
(2, 'Dr. Mahdi Alsaffar', 'دكتور مهدي الصفار', 'dr-mahdy-alsaffar', 1, 1, '2024-04-13 06:29:46', '2024-04-13 06:29:46'),
(3, 'Trauma & Disease', 'الصدمة والأمراض', NULL, 0, 2, '2024-04-13 06:31:03', '2024-04-13 06:31:03'),
(4, 'Shoulder', 'الكتف', NULL, 3, 1, '2024-04-13 06:31:53', '2024-04-13 06:31:53'),
(5, 'Elbow', 'المِرفَق', NULL, 3, 2, '2024-04-13 06:32:25', '2024-04-13 06:32:25'),
(6, 'Shoulder Dislocation', 'خلع الكتف', NULL, 4, NULL, '2024-04-13 06:32:56', '2024-04-13 06:32:56'),
(7, 'AC Separation', 'فصل التيار المتردد', NULL, 4, NULL, '2024-04-13 06:52:55', '2024-04-13 06:52:55');

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
(66, '2014_10_12_000000_create_users_table', 1),
(67, '2014_10_12_100000_create_password_resets_table', 1),
(68, '2019_08_19_000000_create_failed_jobs_table', 1),
(69, '2024_04_02_124440_create_whychooseuses_table', 1),
(70, '2024_04_02_192526_create_menus_table', 1),
(71, '2024_04_02_193956_create_sliders_table', 1),
(72, '2024_04_02_194625_create_banner_sections_table', 1),
(73, '2024_04_02_221809_create_settings_table', 1),
(74, '2024_04_04_191056_create_testimonials_table', 1),
(75, '2024_04_06_124240_create_blogs_table', 1),
(76, '2024_04_06_140728_create_doctor_sections_table', 1),
(77, '2024_04_06_181629_create_services_table', 1),
(78, '2024_04_13_080942_create_contacts_table', 2);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_desc_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_desc` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_subtitle_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_title_en`, `services_title`, `slug`, `services_img`, `services_desc_en`, `services_desc`, `services_icon`, `services_subtitle_en`, `services_subtitle`, `services_seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Orthopedics', 'طب العظام', 'Orthopedics5', 'service/orthopedics.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of psum is that it has a more-or-less normal distribution of letters as opposed to using Content here making it look like readable English. It is a long esished fact that a reader will be distracted by rea dable content of a page when looking at its layout.', 'إنها حقيقة مثبتة منذ زمن طويل أن المحتوى المقروء للصفحة سوف يشتت انتباه القارئ عند النظر إلى تخطيطها. الهدف من psum هو أنه يحتوي على توزيع طبيعي إلى حد ما للأحرف بدلاً من استخدام المحتوى هنا مما يجعله يبدو وكأنه لغة إنجليزية قابلة للقراءة. إنها حقيقة راسخة منذ زمن طويل وهي أن المحتوى القابل للقراءة لصفحة ما سوف يلهي القارئ عند النظر إلى تخطيطها.', 'service/orthopedics.png', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.', 'ddsds,sdsdsda,asdasd', '2024-04-08 20:16:45', '2024-04-08 20:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_hours_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_en`, `title`, `seo_keywords`, `seo_desc`, `phone1`, `phone2`, `whatsapp`, `email`, `logo`, `open_hours_en`, `open_hours`, `location_en`, `location`, `subtitle_en`, `subtitle`, `favicon`, `dr_image`, `dr_name_en`, `dr_name`, `instagram`, `twitter`, `facebook`, `linkedin`, `created_at`, `updated_at`) VALUES
(6, 'Dr. Alsaffar', 'دكتور الصفار', 'Dr. Alsaffar', 'Dr. Alsaffar', 'دتور الصفار', '01025969927', '201025969927', 'info@dralsaffar.com', 'setting/alsaffar_logo_green.gif', '09:00 AM to 18:00 PM', 'من 9 ص الي 6 م', 'Egypt, Cairo', 'مصر,القاهرة', 'Dr Mahdi Alsaffar is an Orthopaedic surgeon specia...', 'الدكتور مهدي الصفار متخصص في جراحة العظام...', 'setting/faviconaa.png', 'setting/doctors-details-1.jpg', 'Dr. Alsaffar', 'الصفار', 'https://www.instagram.com/drmalsaffar/', NULL, 'https://www.facebook.com/mahdi.alsaffar.9?mibextid=9R9pXO', 'http://linkedin.com/in/mahdi-alsaffar-576a9222a', '2024-04-13 08:37:16', '2024-04-13 08:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content1_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content2_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content3_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content1` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content3` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_content1_en`, `slider_content2_en`, `slider_content3_en`, `slider_content1`, `slider_content2`, `slider_content3`, `created_at`, `updated_at`) VALUES
(1, 'slider/slides-bg1.jpg', '10 Years Experience', 'Dr Mahdi Alsaffar', 'Dr Mahdi Alsaffar is an Orthopaedic surgeon specialized in Shoulder, Upper Extremity Trauma and sport medicine', '10 سنوات خبرة', 'دكتور مهدي صفار', 'الدكتور مهدي الصفار هو جراح عظام متخصص في إصابات الكتف والأطراف العلوية والطب الرياضي', '2024-04-08 20:04:35', '2024-04-08 20:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_name` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_from` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `comment`, `comment_name`, `comment_from`, `created_at`, `updated_at`) VALUES
(1, 'testimonial/image-1.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.', 'Neino Silva', '-Facebook', '2024-04-08 20:10:10', '2024-04-08 20:10:10');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'karim', 'karimadmin@gmail.com', NULL, '$2y$10$DifHwan2tx0/CdDyb1.J7Oq56mN9oYYxRkosGc65IDykp.blsAHde', NULL, '2024-04-08 19:06:09', '2024-04-08 19:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuses`
--

CREATE TABLE `whychooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_sub_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_sub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_desc_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_desc` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_1_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_2_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_3_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_4_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_1` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_3` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_title_4` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_counter_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_counter_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_counter_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box_counter_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseuses`
--

INSERT INTO `whychooseuses` (`id`, `section_title_en`, `section_title`, `section_sub_en`, `section_sub`, `section_desc_en`, `section_desc`, `box_title_1_en`, `box_title_2_en`, `box_title_3_en`, `box_title_4_en`, `box_title_1`, `box_title_2`, `box_title_3`, `box_title_4`, `box_counter_1`, `box_counter_2`, `box_counter_3`, `box_counter_4`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us', 'لماذا أخترتنا', 'The Best Care For Yourself and Your Family', 'أفضل رعاية لك ولعائلتك', 'Bone pain is one of the most difficult types of pain that any person can suffer, especially as it affects a person’s ability to move and perform the activities of his daily life. It relates to goals, operations, developments, and others.', 'تعتبر آلام العظام من أصعب أنواع الآلام التي يمكن أن يعاني منها أي إنسان، خاصة أنها تؤثر على قدرة الإنسان على الحركة وأداء أنشطة حياته اليومية. يتعلق الأمر بالأهداف والعمليات والتطورات وغيرها.', 'Operations', 'Happy Patients', 'Year Experience', NULL, 'عمليات', 'المرضى السعداء', 'خبرة سنة', 'تعيينات', '100', '50', '20', '150', '2024-04-08 20:08:02', '2024-04-08 20:08:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_sections`
--
ALTER TABLE `banner_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_sections`
--
ALTER TABLE `doctor_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_sections`
--
ALTER TABLE `banner_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_sections`
--
ALTER TABLE `doctor_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
