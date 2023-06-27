-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 06:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibzrentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Hannan', 'hannan@gmail.com', '$2a$09$QVFpncQjCo917qI6l6uj2eUZOF5.JkDRwQ5Tp0/aOhF66MVU6Mfqu', '2023-06-14 09:39:58', '2023-06-14 09:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `apply_first_sections`
--

CREATE TABLE `apply_first_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `complete_address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_first_sections`
--

INSERT INTO `apply_first_sections` (`id`, `home_town`, `complete_address`, `phone`, `timing`, `email`, `email_text`, `created_at`, `updated_at`) VALUES
(1, 'United Kingdom', '723-727 high road  Seven kings  Ilford  IG38RL', '+44 20 8125 7357', 'Mon to Fri 9am to 6 pm', 'ibzrentals@gmail.com', 'Send us your query anytime!', '2023-06-09 17:33:15', '2023-06-14 21:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `apply_second_sections`
--

CREATE TABLE `apply_second_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_second_sections`
--

INSERT INTO `apply_second_sections` (`id`, `name`, `email`, `city`, `postal_code`, `phone`, `address`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ahad Ali', 'ahad@gmail.com', 'Karachi', '75844', '03111144450', 'Nazimabad', 'Hello? Can you provide some details', '2023-06-26 22:35:36', '2023-06-26 22:35:36'),
(2, 'Muhammad Bilal', 'bilal@gmail.com', 'Karachi', '75600', '03111222540', 'Gulshan e Iqbal', 'Hello? Can you provide some details', '2023-06-26 22:36:56', '2023-06-26 22:36:56'),
(4, 'Muhammad Maaz', 'maaz@gmail.com', 'Karachi', '75922', '0311122540', 'North Karachi', 'Hello can we discuss about a car?', '2023-06-28 00:51:13', '2023-06-28 00:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_about_sections`
--

CREATE TABLE `footer_about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_about_sections`
--

INSERT INTO `footer_about_sections` (`id`, `title`, `about`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Discover the ultimate travel companion with IBZ RENTALS, the premier car rental platform delivering seamless service and top-notch vehicles', '2023-06-10 17:41:01', '2023-06-14 21:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact_sections`
--

CREATE TABLE `footer_contact_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_contact_sections`
--

INSERT INTO `footer_contact_sections` (`id`, `title`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Contact Info', '723-727 high road Seven kings  Ilford  IG38RL', '+44 20 8125 7357', 'ibzrentals@example.com', '2023-06-10 17:52:51', '2023-06-14 21:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer_copyright_sections`
--

CREATE TABLE `footer_copyright_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_copyright_sections`
--

INSERT INTO `footer_copyright_sections` (`id`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Copyright © 2023 All rights reserved ❤ Design and Developed By IBZ RENTALS', '2023-06-13 03:15:26', '2023-06-13 19:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `footer_follow_us_sections`
--

CREATE TABLE `footer_follow_us_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_follow_us_sections`
--

INSERT INTO `footer_follow_us_sections` (`id`, `title`, `text`, `facebook`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'Follow Us', 'Let us be social', 'https://www.facebook.com/IBZMotors', 'https://www.instagram.com/ibzmotorz/', '+44 20 8125 7357', '2023-06-13 03:12:22', '2023-06-14 21:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `footer_newsletter_sections`
--

CREATE TABLE `footer_newsletter_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_newsletter_sections`
--

INSERT INTO `footer_newsletter_sections` (`id`, `title`, `text`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Newsletter', 'ike Stay update with our latest', 'ibzrentals@gmail.com', '2023-06-13 03:00:33', '2023-06-14 21:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `help_first_sections`
--

CREATE TABLE `help_first_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_first_sections`
--

INSERT INTO `help_first_sections` (`id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(2, 'Frequently Asked Questions', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, mmm', '2023-06-09 14:59:27', '2023-06-09 16:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `help_second_sections`
--

CREATE TABLE `help_second_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help_second_sections`
--

INSERT INTO `help_second_sections` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2023-06-09 15:23:08', '2023-06-09 16:27:02'),
(2, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2023-06-09 15:23:08', '2023-06-09 15:23:08'),
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2023-06-09 15:23:08', '2023-06-09 16:27:02'),
(4, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2023-06-09 15:23:08', '2023-06-09 15:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_fifth_sections`
--

CREATE TABLE `home_fifth_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_fifth_sections`
--

INSERT INTO `home_fifth_sections` (`id`, `title`, `image1`, `image2`, `image3`, `description1`, `description2`, `description3`, `created_at`, `updated_at`) VALUES
(6, 'We will help you in everything', 'XFyUu.20230605094710.png', 'ZX5bS.20230605094710.png', 'UknTo.20230605094710.png', 'We explain in every detail.', 'Take as much time as you need.', 'We give 100% satisfaction..', '2023-06-05 16:32:05', '2023-06-05 16:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_first_sections`
--

CREATE TABLE `home_first_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_first_sections`
--

INSERT INTO `home_first_sections` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Rent a Car Now!', 'Our efficient and friendly team are here to assist you in selecting the right vehicle from our diverse fleet of brand new cars & vans in order to get the right vehicle for your specific needs and budget. We are open 7 days a week and offer 24/7 support on all hires.', 'Q1QuU.20230605102637.png', '2023-06-05 15:43:32', '2023-06-05 17:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `home_fourth_sections`
--

CREATE TABLE `home_fourth_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_fourth_sections`
--

INSERT INTO `home_fourth_sections` (`id`, `image`, `created_at`, `updated_at`) VALUES
(20, '65Q7v.20230612181936.png', '2023-06-13 01:19:36', '2023-06-13 01:19:36'),
(21, 'BqLZw.20230612181936.png', '2023-06-13 01:19:36', '2023-06-13 01:19:36'),
(22, 'QHT1G.20230612181936.png', '2023-06-13 01:19:36', '2023-06-13 01:19:36'),
(23, 'Ii9Dp.20230612181936.png', '2023-06-13 01:19:36', '2023-06-13 01:19:36'),
(24, '7ACI6.20230612181936.png', '2023-06-13 01:19:36', '2023-06-13 01:19:36'),
(25, 'gva9X.20230612192410.png', '2023-06-13 02:24:10', '2023-06-13 02:24:10'),
(26, 'DovQg.20230612192410.png', '2023-06-13 02:24:10', '2023-06-13 02:24:10'),
(27, '2My16.20230612192418.png', '2023-06-13 02:24:18', '2023-06-13 02:24:18'),
(28, 'q49AD.20230612192418.png', '2023-06-13 02:24:18', '2023-06-13 02:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `home_second_sections`
--

CREATE TABLE `home_second_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_second_sections`
--

INSERT INTO `home_second_sections` (`id`, `title`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
(11, 'Trusted By', '8tDuF.20230605085109.png', 'cMuBz.20230605090100.png', '0V7Ob.20230605090100.png', 'pPROt.20230605090100.png', '2023-06-05 15:51:09', '2023-06-05 16:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_sixth_sections`
--

CREATE TABLE `home_sixth_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `left_text` varchar(255) NOT NULL,
  `left_button_text` varchar(255) NOT NULL,
  `left_image` varchar(255) NOT NULL,
  `right_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sixth_sections`
--

INSERT INTO `home_sixth_sections` (`id`, `left_text`, `left_button_text`, `left_image`, `right_image`, `created_at`, `updated_at`) VALUES
(5, 'Get in touch if you are looking for...', 'PCO Vehicle Hire', 'hcZyi.20230626192728.jpg', 'MQPWQ.20230626192547.png', '2023-06-05 16:56:46', '2023-06-27 02:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_third_sections`
--

CREATE TABLE `home_third_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_third_sections`
--

INSERT INTO `home_third_sections` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Brilliant Customer Service', 'Experience unparalleled customer service with our exceptional rent-a-car service. Our dedicated team goes the extra mile to ensure your satisfaction, providing seamless transactions and personalized assistance that will make your journey smooth and memorable. Trust us to deliver an outstanding rental experience tailored to your needs, making your travel dreams a reality.\r\n\r\nDiscover a new level of customer service excellence at IBZ Rentals. From the moment you step through our doors, our dedicated team is committed to providing you with an exceptional experience. With attention to detail and a genuine passion for customer satisfaction, we go above and beyond to ensure your journey is seamless, reliable, and truly unforgettable. Trust us to exceed your expectations and make your rental experience extraordinary.', 'g11ys.20230605090709.jpg', '2023-06-05 16:07:09', '2023-06-05 16:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_01_140636_create_home_first_sections_table', 1),
(6, '2023_06_01_151659_create_home_second_sections_table', 2),
(7, '2023_06_01_160632_create_home_third_sections_table', 3),
(8, '2023_06_01_165125_create_home_fourth_sections_table', 4),
(9, '2023_06_01_172659_create_home_fifth_sections_table', 5),
(10, '2023_06_01_173533_create_home_sixth_sections_table', 6),
(11, '2023_06_04_101126_create_home__fifth__sections_table', 7),
(12, '2023_06_04_101846_create_home_fifth_sections_table', 8),
(13, '2023_06_05_104340_create_pco_cars_first_sections_table', 9),
(14, '2023_06_05_134013_create_pco_cars_second_sections_table', 10),
(15, '2023_06_05_143457_create_pco_cars_third_sections_table', 11),
(16, '2023_06_06_191127_create_pco_cars_about_sections_table', 12),
(17, '2023_06_07_114017_create_pco_carss_contact_sections_table', 13),
(18, '2023_06_08_163333_create_pco_cars_feature_sections_table', 14),
(19, '2023_06_08_174159_create_help_first_sections_table', 15),
(20, '2023_06_08_174414_create_help_second_sections_table', 16),
(21, '2023_06_09_100304_create_apply_first_sections_table', 17),
(22, '2023_06_09_100717_create_apply_second_sections_table', 18),
(23, '2023_06_10_102508_create_footer_about_sections_table', 19),
(24, '2023_06_10_102723_create_footer_contact_sections_table', 19),
(25, '2023_06_10_102816_create_footer_newsletter_sections_table', 19),
(26, '2023_06_10_102900_create_footer_follow_us_sections_table', 19),
(27, '2023_06_10_102934_create_footer_copyright_sections_table', 19),
(28, '2023_06_17_192937_create_pco_cars_images_table', 20),
(29, '2023_06_21_124719_create_pco_cars_third_section_heads_table', 21),
(30, '2023_06_22_122142_create_pco_cars_about_sections_table', 22),
(31, '2023_06_22_123610_create_pco_cars_feature_sections_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pco_carss_contact_sections`
--

CREATE TABLE `pco_carss_contact_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_carss_contact_sections`
--

INSERT INTO `pco_carss_contact_sections` (`id`, `text`, `address`, `number`, `created_at`, `updated_at`) VALUES
(1, 'CALL US NOW:', 'CHADWELL HEATH 01268 987 793', 'ILFORD 020 7998 8383', '2023-06-07 18:55:55', '2023-06-07 19:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_about_sections`
--

CREATE TABLE `pco_cars_about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text NOT NULL,
  `pco_cars_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_about_sections`
--

INSERT INTO `pco_cars_about_sections` (`id`, `about`, `pco_cars_id`, `created_at`, `updated_at`) VALUES
(8, 'The Mercedes-Benz G-Class, sometimes colloquially called the G-Wagen[3] (as an abbreviation of Geländewagen) is a four-wheel drive automobile manufactured by Magna Steyr (formerly Steyr-Daimler-Puch) in Austria and sold by Mercedes-Benz. Originally developed as a military off-roader, later more luxurious models were added to the line. In certain markets, it was sold under the Puch name as Puch G until 2000.The G-Wagen is characterised by its boxy styling and body-on-frame construction. It uses three fully locking differentials, one of the few passenger car vehicles to have such a feature.Despite the introduction of an intended replacement, the unibody SUV Mercedes-Benz GL-Class in 2006, the G-Class is still in production and is one of the longest-produced vehicles in Daimler\'s history, with a span of 43 years. Only the Unimog surpasses it.[4] In 2018, Mercedes-Benz launched a technically new second generation, still with only minor design changes.The 200 GE was built specifically for Italian markets and other markets where a heavy tax penalty was incurred for engines larger than 2 litres. The 300 GD was the most popular model while the 280 GE was the most powerful. Despite the availability of turbocharged diesel engines in other Mercedes-Benz vehicles, one was never fitted to the W460.', 26, '2023-06-27 02:45:45', '2023-06-27 02:45:45'),
(9, 'The Honda Civic (Japanese: ホンダ・シビック, Hepburn: Honda Shibikku) is a series of automobiles manufactured by Honda since 1972. Since 2000, the Civic has been categorized as a compact car, while previously it occupied the subcompact class.[by whom?] As of 2021, the Civic is positioned between the Honda Fit/City and Honda Accord in Honda\'s global car line-up.The first-generation Civic was introduced in July 1972 as a two-door coupe model,[2] followed by a three-door hatchback that September. With a 1,169 cc transverse engine and front-wheel drive like the British Mini, the car provided good interior space despite overall small dimensions.[3] Initially gaining a reputation for being fuel-efficient, reliable and environmentally friendly, later iterations have become known for performance and sportiness, especially the Civic Type R, Civic VTi, Civic GTi and Civic SiR/Si.The Civic has been repeatedly rebadged for international markets, and served as the basis for the Honda CR-X, the Honda CR-X del Sol, the Concerto, the first generation Prelude, the Civic Shuttle (later to become the Orthia) and the CR-V (which, by extension, was used as the basis for the Honda FR-V).The Civic is one of the all-time best-selling automobiles in the world, with over 27 million units sold since 1972 as of 2021.[7][8]', 27, '2023-06-27 02:54:45', '2023-06-27 02:54:45'),
(11, 'The Mercedes-Benz GLS, formerly Mercedes-Benz GL-Class, is a full-size luxury SUV produced by Mercedes-Benz since 2006. In each of its generations it is a three-row, seven-passenger vehicle positioned above the GLE (formerly Mercedes-Benz M-Class before 2016).[4] The GLS is considered the flagship of the marque\'s SUV lineup, although the body-on-frame G-Class (originally intended for military off-roading but also offered in luxurious trims) is more expensive and has been in production longer.The GLS shares the same unibody architecture with the GLE. Most GLS vehicles are assembled at the Mercedes plant in Alabama, except for a small number of early 2007 production vehicles which were manufactured in Germany. The first generation model (X164) was manufactured between 2006 and 2012 and was replaced in 2013 by the new generation GL-Class (X166).From 2016 with the release of the facelifted second generation model, the GL-Class was renamed to GLS as per the revised nomenclature adopted by Mercedes. Under this scheme, SUVs use the base name \"GL\", followed by the model\'s placement in Mercedes-Benz hierarchy. The \"G\" is for geländewagen (German for off-road vehicle) and alludes the long-running G-Class. This is followed by the letter \"L\" that acts as a linkage with the letter \"S\", the SUV equivalent to the S-Class, marketing the GLS as the corresponding SUV to the S-Class full-size sedan.[5][6]', 28, '2023-06-27 03:19:07', '2023-06-27 03:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_feature_sections`
--

CREATE TABLE `pco_cars_feature_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature` varchar(255) NOT NULL,
  `pco_cars_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_feature_sections`
--

INSERT INTO `pco_cars_feature_sections` (`id`, `feature`, `pco_cars_id`, `created_at`, `updated_at`) VALUES
(13, 'Engine Type - inline six-cylinder OM656', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(14, 'Displacement (cc) - 2925', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(15, 'Max Power - 325.86bhp@3600-4200rpm', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(16, 'Max Torque - 700Nm@1200-3200rpm', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(17, 'No. of cylinder - 4', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(18, 'Fuel Supply System - direct injection', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(19, 'Transmission Type - Automatic', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(20, 'Acceleration - 6.4', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(21, 'Ground Clearance (Laden) - 241', 26, '2023-06-27 02:50:54', '2023-06-27 02:50:54'),
(22, 'ARAI Mileage - 16.5 kmpl', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(23, 'Engine Displacement (cc) - 1799', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(24, 'Max Power (bhp@rpm) - 139@6500rpm', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(25, 'Seating Capacity - 5', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(26, 'Boot Space (Litres) - 430 re', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(27, 'Body Type - Sedan', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(28, 'No. of cylinder - 4', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(29, 'Max Torque (nm@rpm) - 174@4300rpm', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(30, 'TransmissionType - Auto', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(31, 'Fuel Tank Capacity - 47.0', 27, '2023-06-27 02:57:59', '2023-06-27 02:57:59'),
(33, 'Fuel Type - Petrol', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(34, 'No. of cylinder - 6', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(35, 'Max Torque (nm@rpm) - 500Nm@1600-4500rpm', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(36, 'TransmissionType - Automatic', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(37, 'Engine Displacement (cc) - 2999', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(38, 'Max Power (bhp@rpm) - 362.07bhp5500-6100bhp', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(39, 'Seating Capacity - 7', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14'),
(40, 'TransmissionType - Automatic', 28, '2023-06-27 03:22:14', '2023-06-27 03:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_first_sections`
--

CREATE TABLE `pco_cars_first_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_first_sections`
--

INSERT INTO `pco_cars_first_sections` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PCO Car Hire', 'We want to help you earn a living right now. Rent on Uber-ready Pco Car with KJPCO today!', 'hKBje.20230605160853.jpg', '2023-06-05 17:59:04', '2023-06-05 23:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_images`
--

CREATE TABLE `pco_cars_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `pco_cars_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_images`
--

INSERT INTO `pco_cars_images` (`id`, `car_image`, `pco_cars_id`, `created_at`, `updated_at`) VALUES
(66, 'LUf6f.20230626194401.jpg', 26, '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(67, '7m7Vd.20230626194401.jpg', 26, '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(68, 'kzrOA.20230626194401.jpg', 26, '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(69, '45Qot.20230626194401.jpg', 26, '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(70, 'Yx3xQ.20230626194401.jpg', 26, '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(71, 'Y6MlA.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(72, 'dEfMU.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(73, 'RfnMw.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(74, 'vBouk.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(75, 'Wg2mP.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(76, 'OThn2.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(77, '4mR2s.20230626195318.jpg', 27, '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(78, '8psRP.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24'),
(79, 'ntuV2.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24'),
(80, 'BGAsH.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24'),
(81, 'lhxDJ.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24'),
(82, 'FzIBP.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24'),
(83, 'jHwdt.20230626200624.jpg', 28, '2023-06-27 03:06:24', '2023-06-27 03:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_second_sections`
--

CREATE TABLE `pco_cars_second_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `days_limit` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `gear_box` varchar(255) NOT NULL,
  `doors` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `engine_size` varchar(255) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `car_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_second_sections`
--

INSERT INTO `pco_cars_second_sections` (`id`, `car_name`, `condition`, `price`, `days_limit`, `car_type`, `year`, `mileage`, `fuel_type`, `gear_box`, `doors`, `seats`, `engine_size`, `body_type`, `colour`, `car_code`, `image`, `created_at`, `updated_at`) VALUES
(26, 'Mercedes G-CLASS SUV', 'Used 19/20 Plote', '$500', 'Per week', 'Fully Hybrid Car', '2022', '69,871 Miles', 'Petrol', 'Automatic', '4', '5', '1.6L', 'Hatchback', 'Gray', 'Mercedes G-CLASS SUVb65571d', 'aGXDZ.20230626194401.jpg', '2023-06-27 02:44:01', '2023-06-27 02:44:01'),
(27, 'Honda Civic 2016', 'Used 19/20 Plote', '$350', 'Per week', 'Fully Hybrid Car', '2016', '69,871 Miles', 'Petrol', 'Automatic', '4', '5', '1.6L', 'Hatchback', 'Gray', 'Honda Civic 201635b54a4', '4RzWQ.20230626195318.jpg', '2023-06-27 02:53:18', '2023-06-27 02:53:18'),
(28, 'GLS 450 SUV', 'Used 19/20 Plote', '$400', 'Per week', 'Fully Hybrid Car', '2019', '69,871 Miles', 'Petrol', 'Automatic', '4', '5', '1.6L', 'Hatchback', 'Gray', 'GLS 450 SUV4bd16b0', 'NDYB0.20230626200624.jpg', '2023-06-27 03:06:24', '2023-06-27 03:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_third_sections`
--

CREATE TABLE `pco_cars_third_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_third_sections`
--

INSERT INTO `pco_cars_third_sections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(12, 'yfM74.20230626203813.png', 'Value-Added Extras', 'Seamless Journey: Comfort, Security, and Peace of Mind with Value-Added Extras.', '2023-06-27 03:38:13', '2023-06-27 03:38:13'),
(13, 'NQaxg.20230626203813.png', 'Safety Assured', 'Our rental cars undergo meticulous maintenance, ensuring they are in perfect condition.', '2023-06-27 03:38:13', '2023-06-27 03:38:13'),
(14, 'HRXgR.20230626203813.png', 'Easy & Fast Booking', 'Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.', '2023-06-27 03:38:13', '2023-06-27 03:38:13'),
(15, 'EPiar.20230626203813.png', 'Customer Satisfaction', 'Globally user centric method interactive. Seamlessly revolutionize unique portals corporate collaboration.', '2023-06-27 03:38:13', '2023-06-27 03:38:13'),
(16, 'PpNp5.20230626203813.png', 'How old do I need to be to rent a car?', 'Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.', '2023-06-27 03:38:13', '2023-06-27 03:42:16'),
(17, 'BCeZf.20230626203813.png', 'What documents do I need to provide when renting a car?', 'Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.', '2023-06-27 03:38:13', '2023-06-27 03:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `pco_cars_third_section_heads`
--

CREATE TABLE `pco_cars_third_section_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_of_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pco_cars_third_section_heads`
--

INSERT INTO `pco_cars_third_section_heads` (`id`, `title`, `title_of_text`, `created_at`, `updated_at`) VALUES
(3, 'Why choose Us?', 'The trusted source for why choose us', '2023-06-27 03:30:21', '2023-06-27 03:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_first_sections`
--
ALTER TABLE `apply_first_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_second_sections`
--
ALTER TABLE `apply_second_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_about_sections`
--
ALTER TABLE `footer_about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_contact_sections`
--
ALTER TABLE `footer_contact_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_copyright_sections`
--
ALTER TABLE `footer_copyright_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_follow_us_sections`
--
ALTER TABLE `footer_follow_us_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_newsletter_sections`
--
ALTER TABLE `footer_newsletter_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_first_sections`
--
ALTER TABLE `help_first_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_second_sections`
--
ALTER TABLE `help_second_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_fifth_sections`
--
ALTER TABLE `home_fifth_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_first_sections`
--
ALTER TABLE `home_first_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_fourth_sections`
--
ALTER TABLE `home_fourth_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_second_sections`
--
ALTER TABLE `home_second_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sixth_sections`
--
ALTER TABLE `home_sixth_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_third_sections`
--
ALTER TABLE `home_third_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pco_carss_contact_sections`
--
ALTER TABLE `pco_carss_contact_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pco_cars_about_sections`
--
ALTER TABLE `pco_cars_about_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pco_cars_about_sections_pco_cars_id_foreign` (`pco_cars_id`);

--
-- Indexes for table `pco_cars_feature_sections`
--
ALTER TABLE `pco_cars_feature_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pco_cars_feature_sections_pco_cars_id_foreign` (`pco_cars_id`);

--
-- Indexes for table `pco_cars_first_sections`
--
ALTER TABLE `pco_cars_first_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pco_cars_images`
--
ALTER TABLE `pco_cars_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pco_cars_images_pco_cars_id_foreign` (`pco_cars_id`);

--
-- Indexes for table `pco_cars_second_sections`
--
ALTER TABLE `pco_cars_second_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pco_cars_third_sections`
--
ALTER TABLE `pco_cars_third_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pco_cars_third_section_heads`
--
ALTER TABLE `pco_cars_third_section_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_first_sections`
--
ALTER TABLE `apply_first_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_second_sections`
--
ALTER TABLE `apply_second_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_about_sections`
--
ALTER TABLE `footer_about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_contact_sections`
--
ALTER TABLE `footer_contact_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_copyright_sections`
--
ALTER TABLE `footer_copyright_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_follow_us_sections`
--
ALTER TABLE `footer_follow_us_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_newsletter_sections`
--
ALTER TABLE `footer_newsletter_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help_first_sections`
--
ALTER TABLE `help_first_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `help_second_sections`
--
ALTER TABLE `help_second_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_fifth_sections`
--
ALTER TABLE `home_fifth_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_first_sections`
--
ALTER TABLE `home_first_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_fourth_sections`
--
ALTER TABLE `home_fourth_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `home_second_sections`
--
ALTER TABLE `home_second_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_sixth_sections`
--
ALTER TABLE `home_sixth_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_third_sections`
--
ALTER TABLE `home_third_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pco_carss_contact_sections`
--
ALTER TABLE `pco_carss_contact_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pco_cars_about_sections`
--
ALTER TABLE `pco_cars_about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pco_cars_feature_sections`
--
ALTER TABLE `pco_cars_feature_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pco_cars_first_sections`
--
ALTER TABLE `pco_cars_first_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pco_cars_images`
--
ALTER TABLE `pco_cars_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pco_cars_second_sections`
--
ALTER TABLE `pco_cars_second_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pco_cars_third_sections`
--
ALTER TABLE `pco_cars_third_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pco_cars_third_section_heads`
--
ALTER TABLE `pco_cars_third_section_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pco_cars_about_sections`
--
ALTER TABLE `pco_cars_about_sections`
  ADD CONSTRAINT `pco_cars_about_sections_pco_cars_id_foreign` FOREIGN KEY (`pco_cars_id`) REFERENCES `pco_cars_second_sections` (`id`);

--
-- Constraints for table `pco_cars_feature_sections`
--
ALTER TABLE `pco_cars_feature_sections`
  ADD CONSTRAINT `pco_cars_feature_sections_pco_cars_id_foreign` FOREIGN KEY (`pco_cars_id`) REFERENCES `pco_cars_second_sections` (`id`);

--
-- Constraints for table `pco_cars_images`
--
ALTER TABLE `pco_cars_images`
  ADD CONSTRAINT `pco_cars_images_pco_cars_id_foreign` FOREIGN KEY (`pco_cars_id`) REFERENCES `pco_cars_second_sections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
