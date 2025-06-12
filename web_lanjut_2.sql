-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2025 at 07:16 AM
-- Server version: 5.5.16
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_lanjut_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bootcamps`
--

CREATE TABLE `bootcamps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int(11) NOT NULL DEFAULT '0',
  `original_price` decimal(10,2) NOT NULL,
  `discounted_price` decimal(10,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `lectures` int(11) NOT NULL DEFAULT '0',
  `skill_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quizzes` int(11) NOT NULL DEFAULT '0',
  `certificate` tinyint(1) NOT NULL DEFAULT '0',
  `pass_percentage` int(11) NOT NULL DEFAULT '0',
  `deadline` date DEFAULT NULL,
  `instructor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `learnings` text COLLATE utf8mb4_unicode_ci,
  `certification_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bootcamps`
--

INSERT INTO `bootcamps` (`id`, `title`, `duration`, `students`, `original_price`, `discounted_price`, `image`, `start_date`, `lectures`, `skill_level`, `language`, `quizzes`, `certificate`, `pass_percentage`, `deadline`, `instructor`, `description`, `category`, `learnings`, `certification_info`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Bootcamp', '19h 17m 35s', 400, 59000.00, 49000.00, 'img/bootcamp-1.png', '2025-05-31', 23, 'Intermediate', 'English', 25, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Laravel from scratch.', 'chatgpt', '[\"Understand Laravel basics\",\"Build web applications\",\"Master MVC architecture\",\"Deploy Laravel applications\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(2, 'Bootcamp Belajar Bahasa Jepang', '19h 17m 35s', 400, 59000.00, 49000.00, 'img/jepang.jpg', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Japanese from scratch.', 'chatgpt', '[\"Understand Japanese basics\",\"Master Hiragana and Katakana\",\"Learn basic Kanji\",\"Practice Japanese greetings\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(3, 'Bootcamp Belajar HTML CSS JS', '19h 17m 35s', 400, 59000.00, 49000.00, 'img/HTML CSS JS.jpg', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn web development with HTML, CSS, and JavaScript.', 'chatgpt', '[\"Understand HTML basics\",\"Style with CSS\",\"Add interactivity with JavaScript\",\"Build responsive websites\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(4, 'Bootcamp Belajar Data Sains', '19h 17m 35s', 400, 59000.00, 49000.00, 'img/Sains data.jpg', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Data Science from scratch.', 'data-science', '[\"Understand Data Science basics\",\"Master Python for Data Science\",\"Learn data analysis\",\"Work with datasets\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(5, 'Bootcamp Belajar Sains Data & Big Data', '19h 17m 35s', 400, 200000.00, 150000.00, 'img/sainsdata.png', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Data Science and Big Data from scratch.', 'data-science', '[\"Understand Data Science basics\",\"Learn Big Data concepts\",\"Master data processing\",\"Analyze large datasets\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(6, 'Bootcamp Belajar Python Dasar', '19h 17m 35s', 400, 200000.00, 150000.00, 'img/python.png', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Python from scratch.', 'python', '[\"Understand Data Science basics\",\"Learn Big Data concepts\",\"Master data processing\",\"Analyze large datasets\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(7, 'Bootcamp Belajar Machine Learning', '19h 17m 35s', 400, 200000.00, 150000.00, 'img/Machine Learning.png', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Machine Learning from scratch.', 'machine-learning', '[\"Understand Data Science basics\",\"Learn Big Data concepts\",\"Master data processing\",\"Analyze large datasets\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(8, 'Bootcamp Belajar Basic Deep Learning', '19h 17m 35s', 400, 200000.00, 150000.00, 'img/Deep Learning.png', '2025-05-31', 9, 'Intermediate', 'Indonesian', 9, 1, 90, '2025-12-31', 'Daniel Silva', 'Learn Basic Deep Learning from scratch.', 'deep-learning', '[\"Understand Deep Learning basics\",\"Learn Deep Learning concepts\",\"Master Deep Learning processing\",\"Analyze large Deep Learning\"]', NULL, '2025-05-31 00:13:31', '2025-05-31 00:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(12, '0001_01_01_000001_create_cache_table', 1),
(13, '0001_01_01_000002_create_jobs_table', 1),
(14, '2025_02_12_103238_create_bootcamps_table', 1),
(15, '2025_02_23_001712_create_seminars_table', 1),
(16, '2025_02_23_002353_create_users_table', 1),
(17, '2025_02_23_140737_create_modules_table', 1),
(18, '2025_02_23_140910_create_videos_table', 1),
(19, '2025_03_11_094748_create_purchases_table', 1),
(20, '2025_04_02_050044_create_user_bootcamp_progress_table', 1),
(21, '2025_05_28_092408_create_personal_access_tokens_table', 1),
(22, '2025_05_31_041138_add_category_to_bootcamps_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bootcamp_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `bootcamp_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introduction to Laravel', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(2, 1, 'Laravel Struktur', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(3, 1, 'Laravel komponen', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(4, 1, 'View dan model', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(5, 1, 'Database', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(6, 1, 'Eloquent ORM dan post', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(7, 1, 'Seeder', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(8, 1, 'Problem', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(9, 1, 'Redesign', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(10, 1, 'Searching', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(11, 1, 'Pagination', 'Learn the basics of Laravel.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(12, 2, 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo', 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(13, 2, 'Cara Menulis Hiragana Dan Katakana Lengkap 46 Huruf', 'Cara Menulis Hiragana Lengkap 46 Huruf.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(14, 2, 'Tanda Baca Aturan Dasar Huruf Hiragana & Katakana', 'Tanda Baca Aturan Dasar Huruf Hiragana & Katakana.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(15, 2, 'Belajar Huruf Kanji Jepang Dasar', 'Belajar Huruf Kanji Jepang Dasar.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(16, 2, 'Belajar Salam Yang Benar Dalam Bahasa Jepang', 'Belajar Salam Yang Benar Dalam Bahasa Jepang.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(17, 2, 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang', 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(18, 3, 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula', 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(19, 3, 'HTML CSS JS (Implementasi Logika Sederhana)', 'HTML CSS JS (Implementasi Logika Sederhana).', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(20, 3, 'HTML CSS BOOTSTRAP Untuk Pemula', 'HTML CSS BOOTSTRAP Untuk Pemula.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(21, 3, 'HTML CSS JS (Cetrekan Lampu)', 'HTML CSS JS (Cetrekan Lampu).', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(22, 3, 'HTML CSS JS (LocalStorage Browser)', 'HTML CSS JS (LocalStorage Browser).', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(23, 3, 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit', 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(24, 3, 'Javascript Backend (NODE JS) Untuk Pemula', 'Javascript Backend (NODE JS) Untuk Pemula.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(25, 3, 'Web GENERATOR Password HTML Bootstrap JS', 'Web GENERATOR Password HTML Bootstrap JS.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(26, 4, 'Dasar Data Sains', 'Dasar Data Sains.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(27, 4, 'Data Sains List', 'Data Sains List.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(28, 4, 'Data Sains List Pt 2', 'Data Sains List Pt 2.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(29, 4, 'Sains Data Python Basic', 'Sains Data Python Basic.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(30, 5, 'Pengantar Sains Data - Pendahuluan Sains Data & Big Data', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(31, 5, 'Pengantar Sains Data: Model & Algoritma di Sains Data', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(32, 5, 'Pengantar Sains Data - Peluang & Tantangan di Sains Data & Big Data ', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(33, 5, 'Distribusi variabel acak diskrit ', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(34, 5, 'Inferensi statistika taksiran titik', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(35, 5, ' ANOVA 1 arah dan Uji chi square', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(36, 6, 'Pengantar Python', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(37, 6, 'Cara Kerja Python', 'Introduction to Data Science and Big Data.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(38, 7, 'Belajar Machine Learning dengan Python Scikit-Learn', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(39, 7, 'Dataset pada Scikit-Learn', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(40, 7, 'Classification dengan KNN', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(41, 7, 'Linear Regression', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(42, 7, 'Encoding & One Hot Encoding', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(43, 7, 'Bag of Words & Stop Word Filtering', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(44, 7, 'Vector Machine Classification', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(45, 8, 'Basic Deep Learning', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(46, 8, 'CNN with PyTorch | Deep Learning Basic', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(47, 8, 'Menghandle data Time Series di PyTorch | Deep Learning Basic', 'Introduction to Machine Learning dengan Python.', '2025-05-31 00:13:31', '2025-05-31 00:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bootcamp_id` bigint(20) UNSIGNED NOT NULL,
  `payment_status` enum('pending','success','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `snap_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `bootcamp_id`, `payment_status`, `snap_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'success', NULL, '2025-06-01 06:26:50', '2025-06-01 06:26:50'),
(2, 1, 2, 'success', NULL, '2025-06-01 06:45:27', '2025-06-01 06:45:27'),
(3, 1, 3, 'success', NULL, '2025-06-01 08:51:20', '2025-06-01 08:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `review_count` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discounted_price` decimal(10,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_date` date NOT NULL,
  `students` int(11) NOT NULL DEFAULT '0',
  `lectures` int(11) NOT NULL DEFAULT '0',
  `skill_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quizzes` int(11) NOT NULL DEFAULT '0',
  `certificate` tinyint(1) NOT NULL DEFAULT '0',
  `pass_percentage` int(11) NOT NULL DEFAULT '0',
  `deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `title`, `instructor`, `description`, `rating`, `review_count`, `price`, `discounted_price`, `image`, `image2`, `created_at`, `updated_at`, `start_date`, `students`, `lectures`, `skill_level`, `language`, `quizzes`, `certificate`, `pass_percentage`, `deadline`) VALUES
(1, 'Economy Discusion', 'Kukuh Arisetyawan dan Nadila Primastika', 'Seminar \"Economy Discussion\" membahas perkembangan ekonomi digital yang dipengaruhi oleh AI seperti ChatGPT, Midjourney, dan DALL·E. Dipandu oleh Kukuh Arisetyawan dan Nadila Primastika, peserta akan mempelajari penerapan AI dalam bisnis, media sosial, SEO, dan prompt engineering.Dengan 23 materi, 25 kuis, dan sertifikat bagi peserta yang lulus, seminar ini cocok untuk level intermediate yang ingin memahami tren ekonomi modern secara praktis dan aplikatif.', 4.6, 1335, 249000.00, 139000.00, 'img/Economy Discusion.jpeg', 'img/bootcamp-1.png', '2025-05-31 00:13:34', '2025-05-31 00:13:34', '2025-08-30', 400, 23, 'Intermediate', 'English', 25, 1, 90, '2023-12-25'),
(2, 'Momic 2024', 'D4 Manajemen Informatika', 'Seminar ini yang diadakan oleh mahasiswa universitas negeri surabaya manajemen infomatika untuk melatih teman teman dalam mengatur srategi dalam permainan momic.', 4.8, 500, 299000.00, 199000.00, 'img/Momic.jpeg', 'img/bootcamp-1.png', '2025-05-31 00:13:34', '2025-05-31 00:13:34', '2025-08-30', 400, 23, 'Intermediate', 'English', 25, 1, 90, '2023-12-25'),
(3, 'Open Volunteer', 'Arsa Surabaya', 'Seminar ini yang diadakan oleh arsa surabaya untuk membantu teman teman yang ingin menjadi volunteer', 4.7, 300, 249000.00, 149000.00, 'img/Open Vol.jpeg', 'img/bootcamp-1.png', '2025-05-31 00:13:34', '2025-05-31 00:13:34', '2025-08-30', 400, 23, 'Intermediate', 'English', 25, 1, 90, '2023-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('My7PnRO09EOY0xpXgXQwjODVrnQ7HyBLK7CtTY7m', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZUJmTDdnOG1jQng4SEdjSExENEwxQU5XQ1h2NmE3aGdhVDJ2dEpuUCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYm9vdGNhbXAvMS9kZXNrcmlwc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1749527556),
('ub9FbTpbq461m3FglJ9vyGODXV0pyNVZqTkwsE8c', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic0IwNDVubUR5VnhaWkluemF1eUk5YW9ROWUyVHZta3ppSWJMYkM3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZW1pbmFyLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1748794353);

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
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adit', 'arfian.23001@mhs.unesa.ac.id', NULL, '$2y$12$oO68zIXiFyu/NT7R7XC3AunoXUZ34zy6MwgMw7lYHpULRi8Q8N9bK', 'user', NULL, '2025-05-31 00:14:01', '2025-05-31 00:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_bootcamp_progress`
--

CREATE TABLE `user_bootcamp_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bootcamp_id` bigint(20) UNSIGNED NOT NULL,
  `watched_videos` text COLLATE utf8mb4_unicode_ci,
  `progress_percentage` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_watched_at` timestamp NULL DEFAULT NULL,
  `certificate_claimed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bootcamp_progress`
--

INSERT INTO `user_bootcamp_progress` (`id`, `user_id`, `bootcamp_id`, `watched_videos`, `progress_percentage`, `last_watched_at`, `certificate_claimed`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '[]', 100, '2025-06-01 06:28:31', 1, '2025-06-01 06:27:00', '2025-06-01 06:28:37'),
(2, 1, 2, '[]', 100, '2025-06-01 06:47:18', 1, '2025-06-01 06:45:37', '2025-06-01 06:47:37'),
(3, 1, 3, '[]', 100, '2025-06-01 08:52:34', 1, '2025-06-01 08:51:29', '2025-06-01 08:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `module_id`, `title`, `youtube_link`, `duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel instalasi', 'https://www.youtube.com/watch?v=T1TR-RGf2Pw', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(2, 1, 'Laravel Konfigurasi', 'https://www.youtube.com/watch?v=nW60yGRoUrs', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(3, 2, 'Struktur Folder', 'https://www.youtube.com/watch?v=x55ndgkD2QI', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(4, 3, 'Blade Templating Engine', 'https://www.youtube.com/watch?v=vDx6VA-6a6Y', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(5, 3, 'Blade Component', 'https://www.youtube.com/watch?v=00o1vJYTp4I', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(6, 4, 'View Data', 'https://www.youtube.com/watch?v=76YsC4EjGE4', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(7, 4, 'Model', 'https://www.youtube.com/watch?v=dzjBbvKjbaQ', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(8, 5, 'Database & Migration', 'https://www.youtube.com/watch?v=eghZY9-3Wko', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(9, 6, 'Eloquent ORM & Post Model', 'https://www.youtube.com/watch?v=dW3-33iMYkk', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(10, 6, 'Model Factories', 'https://www.youtube.com/watch?v=1wWXyO4iuBA', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(11, 6, 'Eloquent Relationship', 'https://www.youtube.com/watch?v=S2eh1VnHu40', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(12, 6, 'Post Category', 'https://www.youtube.com/watch?v=jineNX34OYE', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(13, 7, 'Post Category', 'https://www.youtube.com/watch?v=rAv8C0Nf9uk', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(14, 8, 'N + 1 Problem', 'https://www.youtube.com/watch?v=K2p6Mtz5P20', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(15, 9, 'Redesign UI', 'https://www.youtube.com/watch?v=uVRN9DzUAU8', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(16, 10, 'Searching', 'https://www.youtube.com/watch?v=8hhaAsRFAJs', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(17, 11, 'Pagination', 'https://www.youtube.com/watch?v=HP3CdxX9oak', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(18, 12, 'Belajar Bahasa Jepang Dari Nol Dengan Buku Minna no Nihongo', 'https://www.youtube.com/watch?v=ofZXuYp_teQ', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(19, 13, 'Cara Menulis Hiragana Lengkap 46 Huruf ', 'https://www.youtube.com/watch?v=p6Dr8LPDcng', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(20, 13, 'Cara Menulis Huruf Katakana Lengkap 46 Huruf ', 'https://www.youtube.com/watch?v=NWUwUlGELus', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(21, 14, 'Tanda Baca Huruf Hiragana & Katakana', 'https://www.youtube.com/watch?v=854nJLMprsE', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(22, 14, 'Aturan Dasar Penulisan Huruf Katakana Dalam Kosakata Serapan ', 'https://www.youtube.com/watch?v=k-p1KPTeY04', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(23, 15, 'Belajar Huruf Kanji Jepang Dasar', 'https://www.youtube.com/watch?v=aoRDFurRdAU', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(24, 16, 'Belajar Salam Yang Benar Dalam Bahasa Jepang', 'https://www.youtube.com/watch?v=0WQN0m3DjvU', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(25, 17, 'Bilangan, Aksen & Intonasi Dalam Bahasa Jepang', 'https://www.youtube.com/watch?v=7_Y_X56ml4w', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(26, 18, 'Belajar Membuat WEBSITE Dari 0 Sampai Di PUBLISH Untuk Pemula', 'https://www.youtube.com/watch?v=71a2zeC71gk', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(27, 19, 'HTML CSS JS (Implementasi Logika Sederhana)', 'https://www.youtube.com/watch?v=Mb6Np6QURDY', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(28, 20, 'HTML CSS BOOTSTRAP Untuk Pemula', 'https://www.youtube.com/watch?v=igwNyjc7Ii8', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(29, 21, 'HTML CSS JS (Cetrekan Lampu)', 'https://www.youtube.com/watch?v=vQeJIa-ZYm4', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(30, 22, 'HTML CSS JS (LocalStorage Browser)', 'https://www.youtube.com/watch?v=QUpyv31Nyso', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(31, 23, 'Membuat WEBSITE HTML CSS & JS (Dark Mode) Sampai Publish Ke Replit', 'https://www.youtube.com/watch?v=QIpWKTHKcqM', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(32, 24, 'Javascript Backend (NODE JS) Untuk Pemula', 'https://www.youtube.com/watch?v=kLUI9LISP5k', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(33, 25, 'Web GENERATOR Password HTML Bootstrap JS', 'https://www.youtube.com/watch?v=XqJYMlCpYQA', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(34, 26, 'Apa Itu Data Science', 'https://www.youtube.com/watch?v=_ozeKsOtqHI', '5m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(35, 26, 'Tutorial Python Dasar Hello World dan Kaggle', 'https://www.youtube.com/watch?v=sJzO99kRmj8', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(36, 26, 'Tutorial Python Dasar Variable dan Types', 'https://www.youtube.com/watch?v=kFkE_15n7f4', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(37, 27, 'Python List', 'https://www.youtube.com/watch?v=3ObZ7fDLG_c', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(38, 27, 'Tutorial Python Access List Items', 'https://www.youtube.com/watch?v=V67FQH6zAyE', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(39, 27, 'Tutorial Python Change List Item', 'https://www.youtube.com/watch?v=uxX9PKC_Sug', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(40, 28, 'Tutorial Python Add List Item', 'https://www.youtube.com/watch?v=GT3oIbZFjgU', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(41, 28, 'Tutorial Python Remove List Item', 'https://www.youtube.com/watch?v=62Scviz4EKA', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(42, 28, 'Tutorial Python List Loop', 'https://www.youtube.com/watch?v=rZ231v2aByY', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(43, 28, 'Tutorial Python Sort List', 'https://www.youtube.com/watch?v=K3Nl5vYV2cU', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(44, 28, 'Tutorial Python List Copy dan Join', 'https://www.youtube.com/watch?v=DzSHJr509SY', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(45, 29, 'Tutorial Python Basic Operator', 'https://www.youtube.com/watch?v=3kifuPQH8wY', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(46, 29, 'Tutorial Python String Formatting', 'https://www.youtube.com/watch?v=a7W75iPizNo', '7m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(47, 30, 'Pengantar Sains Data & Big Data', 'https://www.youtube.com/watch?v=ybxwS6rTSU8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(48, 30, 'Pengantar Tipe & Format Data', 'https://www.youtube.com/watch?v=wUda4Wo36vA', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(49, 30, 'Pengantar Tipe & Format Data', 'https://www.youtube.com/watch?v=Tn34pEFEq6w', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(50, 31, 'Model & Algoritma', 'https://www.youtube.com/watch?v=97ef82BMHvg', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(51, 31, 'Model & Algoritma', 'https://www.youtube.com/watch?v=RfOwKm9Ccs8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(52, 32, 'Peluang & Tantangan', 'https://www.youtube.com/watch?v=8iUzsUkUTzk', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(53, 32, 'Peluang & Tantangan', 'https://www.youtube.com/watch?v=xI0oIADfL6M', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(54, 33, 'variabel acak diskrit (1)', 'https://www.youtube.com/watch?v=F10F5fhfPH0', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(55, 33, 'variabel acak diskrit (2)', 'https://www.youtube.com/watch?v=k3tOjvvMer0', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(56, 33, 'variabel acak diskrit (3)', 'https://www.youtube.com/watch?v=aIAMVxJ27so', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(57, 33, 'variabel acak diskrit (4)', 'https://www.youtube.com/watch?v=QEq5IoHG_Xo', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(58, 33, 'variabel acak diskrit (5)', 'https://www.youtube.com/watch?v=ipYw_a1syZk', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(59, 33, 'variabel acak diskrit (6)', 'https://www.youtube.com/watch?v=TjqWmnwnoAM', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(60, 34, 'statistika_taksiran titik', 'https://www.youtube.com/watch?v=VCz7r2mbb2c', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(61, 34, 'Inferensi statistika taksiran interval', 'https://www.youtube.com/watch?v=Kjo18dFaoN4', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(62, 34, 'Inferensi statistika pengujian hipotesis', 'https://www.youtube.com/watch?v=xcxqlT4-Gww', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(63, 35, 'Inferensi statistika pengujian hipotesis', 'https://www.youtube.com/watch?v=una7Uc_vZvM', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(64, 35, 'Inferensi statistika pengujian hipotesis', 'https://www.youtube.com/watch?v=Uvkr2IAMWGY', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(65, 36, 'Apa Itu Python', 'https://www.youtube.com/watch?v=iA8lLwmtKQM?si', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(66, 36, 'Installasi Python di Windows', 'https://www.youtube.com/watch?v=xETkm9H6aaY', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(67, 36, 'Installasi Python di Mac', 'https://www.youtube.com/watch?v=HSAm6s10G7g', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(68, 37, 'bytecode', 'https://www.youtube.com/watch?v=-auWrbiaoGc', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(69, 37, 'Mengenal Variabel', 'https://www.youtube.com/watch?v=gxmTFXfrMzk', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(70, 37, 'Tipe Data', 'https://www.youtube.com/watch?v=b3X0CH98Y9g', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(71, 38, 'Python Scikit-Learn', 'https://www.youtube.com/watch?v=Rk1VmHk_kUo', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(72, 38, 'Pengenalan Machine Learning', 'https://www.youtube.com/watch?v=vqgucRK5K1A', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(73, 39, 'Sample Dataset pada Scikit-Learn', 'https://www.youtube.com/watch?v=mSO2hJln0OY', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(74, 39, 'Machine Learning Workflow dengan Scikit-Learn', 'https://www.youtube.com/watch?v=tiREcHrtDLo', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(75, 39, 'Data Preprocessing dengan Scikit-Learn', 'https://www.youtube.com/watch?v=smNnhEd26Ek', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(76, 39, 'Simple Linear Regression dengan Scikit-Learn', 'https://www.youtube.com/watch?v=lcjq7-2zMSA', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(77, 40, 'Classification dengan KNN | K-Nearest Neighbours', 'https://www.youtube.com/watch?v=4zARMcgc7hA', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(78, 40, 'Regression dengan KNN | K-Nearest Neighbours', 'https://www.youtube.com/watch?v=W8adIcfv16M', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(79, 41, 'Multiple Linear Regression & Polynomial Regression', 'https://www.youtube.com/watch?v=nWJUJenAyB8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(80, 42, 'Label Encoding & One Hot Encoding | Categorical Encoding', 'https://www.youtube.com/watch?v=WWbyYFPHDH8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(81, 43, 'Bag of Words & Stop Word Filtering | Text Processing', 'https://www.youtube.com/watch?v=U30sF4m0bd0', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(82, 43, 'TF-IDF Term Frequency - Inverse Document Frequency', 'https://www.youtube.com/watch?v=f0a1XXmaQp8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(83, 43, 'Logistic Regression pada Binary Classification Task', 'https://www.youtube.com/watch?v=oe7DW4rSH1o', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(84, 43, 'Naive Bayes Classification', 'https://www.youtube.com/watch?v=Sj1ybuDDf9I', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(85, 44, 'Support Vector Machine Classification | SVM', 'https://www.youtube.com/watch?v=z69XYXpvVrE', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(86, 44, 'Decision Tree Classification | Pohon Keputusan', 'https://www.youtube.com/watch?v=5wwXKtLkyqs', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(87, 44, 'Random Forest Classification | Hutan Acak', 'https://www.youtube.com/watch?v=yKovaQ6tyV8', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(88, 45, 'Convolutional Neural Network (CNN)', 'https://www.youtube.com/watch?v=6Hb81DxD7yw', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(89, 45, 'Augmentasi Data Image', 'https://www.youtube.com/watch?v=T8lt6Xy99o0', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(90, 46, 'Klasifikasi Hama dengan CNN', 'https://www.youtube.com/watch?v=tG-J6RJeXcA', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(91, 46, 'Arsitektur CNN yang Populer', 'https://www.youtube.com/watch?v=SKmO5kQf8Bk', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(92, 46, 'Konsep Transfer Learning', 'https://www.youtube.com/watch?v=qM7ByzMai2Y', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(93, 46, 'Klasifikasi Panorama Multilabel di PyTorch', 'https://www.youtube.com/watch?v=hLaRQLkfX_g', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(94, 47, 'Mobilenet V2 untuk Transfer Learning', 'https://www.youtube.com/watch?v=8IXjfoob-oU', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31'),
(95, 47, 'Fine Tuning pada Transfer Learning', 'https://www.youtube.com/watch?v=8IXjfoob-oU', '9m', '2025-05-31 00:13:31', '2025-05-31 00:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bootcamps`
--
ALTER TABLE `bootcamps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modules_bootcamp_id_foreign` (`bootcamp_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_bootcamp_id_foreign` (`bootcamp_id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bootcamp_progress`
--
ALTER TABLE `user_bootcamp_progress`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_bootcamp_progress_user_id_bootcamp_id_unique` (`user_id`,`bootcamp_id`),
  ADD KEY `user_bootcamp_progress_user_id_index` (`user_id`),
  ADD KEY `user_bootcamp_progress_bootcamp_id_index` (`bootcamp_id`),
  ADD KEY `user_bootcamp_progress_progress_percentage_index` (`progress_percentage`),
  ADD KEY `user_bootcamp_progress_last_watched_at_index` (`last_watched_at`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_module_id_foreign` (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bootcamps`
--
ALTER TABLE `bootcamps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_bootcamp_progress`
--
ALTER TABLE `user_bootcamp_progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_bootcamp_id_foreign` FOREIGN KEY (`bootcamp_id`) REFERENCES `bootcamps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_bootcamp_id_foreign` FOREIGN KEY (`bootcamp_id`) REFERENCES `bootcamps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_bootcamp_progress`
--
ALTER TABLE `user_bootcamp_progress`
  ADD CONSTRAINT `user_bootcamp_progress_bootcamp_id_foreign` FOREIGN KEY (`bootcamp_id`) REFERENCES `bootcamps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_bootcamp_progress_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
