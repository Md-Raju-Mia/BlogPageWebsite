-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 07:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobimana_mobimanager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `become_our_partner`
--

CREATE TABLE `become_our_partner` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `orgName` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `issueDescription` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `become_our_partner`
--

INSERT INTO `become_our_partner` (`id`, `name`, `email`, `orgName`, `mobile`, `issueDescription`) VALUES
(3, 'Test', 'testwasim@gmail.com', 'test', '0177682916', 'aaaa                      ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `orgName` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `issueTitle` varchar(500) DEFAULT NULL,
  `issueDescription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `orgName`, `mobile`, `issueTitle`, `issueDescription`) VALUES
(49, 'Md. Talal Wasim', 'md.talalwasim@gmail.com', 'Inovex Idea Solution', '01776829136', 'Hello from Wasim', 'Hello MobiManager.\r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(200) NOT NULL,
  `title` varchar(400) NOT NULL,
  `postcatagory` varchar(50) NOT NULL,
  `posttag` varchar(50) NOT NULL,
  `coverimage` varchar(255) NOT NULL,
  `thumbnailimage` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `postcatagory`, `posttag`, `coverimage`, `thumbnailimage`, `content`, `date`) VALUES
(53, 'Raju', 'It\'s MobiManager Post Difference between long title and short title', 'Article', 'Popular', 'forms/uploads/engineering gear wallpaper2.jpg', 'forms/uploads/unnamed (1).jpg', '<p style=\"text-align: center;\">This is my textarea to be replaced with HTML editor.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg\" width=\"457\" height=\"257\"></p>\r\n<p>&nbsp;</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-02 14:54:50'),
(55, 'Alamin Vai', 'Faruk Sir First Post Difference between long title and short title', 'News', 'Trends', 'uploads/12333.jpg', 'uploads/90384ec915f3240a53d821c1cbab15fb.jpg', '<h3 style=\"text-align: center;\"><strong>Hello Cat&nbsp;</strong></h3>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp\" alt=\"\" width=\"500\" height=\"500\"></p>\r\n<p>&nbsp;</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-02 22:15:18'),
(56, 'Raju', 'Todays Demo Post', 'Case Study', 'Trends', 'uploads/angry-tiger-wallpaper-preview.jpg', 'uploads/download (1).jpg', '<p style=\"text-align: center;\">This is my textarea to be replaced with HTML editor.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg?size=626&amp;ext=jpg&amp;ga=GA1.1.1413502914.1719964800&amp;semt=ais_user\" alt=\"\" width=\"500\" height=\"286\"></p>\r\n<p>&nbsp;</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-03 14:32:41'),
(57, 'Raju', 'It\'s MobiManager Post Difference between long title and short title', 'Article', 'Technology', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', 'uploads/pics-photos-cute-love-birds-wallpapers-cute-love-birds-hd-wallpapers-PIC-HWB214158.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p><img src=\"https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg?size=626&amp;ext=jpg&amp;ga=GA1.1.1413502914.1719964800&amp;semt=ais_user\" alt=\"\" width=\"626\" height=\"358\"></p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-03 14:33:44'),
(58, 'Arnab', 'it\'s thursday post Difference between long title and short title', 'News', 'Technology', 'uploads/computer engineering science tech brain wallpaper background.jpg', 'uploads/computer engineering science tech wallpaper background.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>Hello</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 05:59:12'),
(59, 'Wasim Vai', 'Difference between long title and short title', 'Article', 'Trends', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', 'uploads/technology desktop wallpaper 3d technology wallpaper computer tech.jpg', '<p>This is my textarea to be replaced with HTML editor</p>\r\n<p>&nbsp;</p>\r\n<p>hello everyone.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 06:07:52'),
(60, 'Alamin ', 'It\'s my thursday Post', 'Case Study', 'Trends', 'uploads/engineering gear wallpaper2.jpg', 'uploads/c7457ae2dd824f34a641babd3a51a919.jpg', '<p>This is my textarea to be replaced with HTML editor.<br>Hello future engineers, welcome to your painful life</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 06:09:29'),
(62, 'Raju', 'Need Case Study Post', 'Case Study', 'Trends', 'uploads/675540.jpg', 'uploads/unnamed (1).jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>This is my textarea to be replaced with HTML editor.</p>', '2024-07-04 09:17:17'),
(63, 'Raju', 'Case Study Post', 'Case Study', 'Popular', 'uploads/HD Desktop Technology Wallpaper Backgrounds For Download.jpg', 'uploads/HD Desktop Technology Wallpaper Backgrounds For Download (3).jpg', '<p>This is my textarea to be replaced with HTML editor.</p>', '2024-07-04 10:03:14'),
(64, 'Alamin Vai', 'It\'s MobiManager Post Difference between long title and short title', 'Case Study', 'Technology', 'uploads/ANTIVIRUS ROBOT HD ComputersNEWhd wallpaperswidescreen wallpapers.jpg', 'uploads/flowers-high-definition-hd-wallpaper.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 10:25:33'),
(66, 'Raju', 'News Post 2', 'News', 'Trends', 'uploads/6d124b129b4ab5cb3d35835aa8884a97.jpg', 'forms/uploads/images.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:07:10'),
(67, 'Alamin', 'It\'s my thursday Post', 'News', 'Trends', 'uploads/25 Top Famous Computer Engineering Wallpaper.jpg', 'uploads/pexels-photo-753626.jpeg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:08:06'),
(68, 'Wasim', 'It\'s MobiManager Post Difference between long title and short title', 'News', 'Popular', 'uploads/angry-tiger-wallpaper-preview.jpg', 'uploads/angry-tiger-wallpaper-preview.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:08:44'),
(69, 'Arnab', 'It\'s my thursday Post Difference between long title and short title', 'News', 'Trends', 'uploads/Beautiful-background-peacock-pair-Hd-wallpaper-Beautiful-HD-Wallpaper-pair-Peacocks-3840x2160-1920x1200.jpg', 'uploads/Beautiful-background-peacock-pair-Hd-wallpaper-Beautiful-HD-Wallpaper-pair-Peacocks-3840x2160-1920x1200.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>Difference between long title and short titl</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:09:46'),
(70, 'Ratul', 'It\'s my thursday Post Difference between long title and short title', 'News', 'Trends', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', 'uploads/BEAUTIFUL-NATURE-WALLPAPER-HD.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:37:44'),
(71, 'Raju', 'It\'s MobiManager Post', 'News', 'Technology', 'uploads/42215wide.jpg', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:38:22'),
(72, 'Raju', 'It\'s MobiManager Post Difference between long title and short title', 'News', 'Trends', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', 'uploads/engineering wallpaper 1.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:39:13'),
(73, 'Alamin ', 'It\'s my thursday Post Difference between long title and short title', 'News', 'Trends', 'uploads/A B C D E F Wallpapers Collections Top 10 engineering.jpg', 'uploads/HD Factory Wallpapers For Your Factory Desktop Tablet Wallpaper.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:41:43'),
(74, 'Raju', 'It\'s MobiManager Post', 'News', 'Trends', 'uploads/HD Desktop Technology Wallpaper Backgrounds For Download (3).jpg', 'uploads/download desktop wallpapers engineering for desktop mobile and pc size.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:42:17'),
(75, 'Raju', 'It\'s MobiManager Post Difference between long title and short title', 'News', 'Trends', 'uploads/water nature yellow birds duckling duck 1920x1080 wallpaper_www.wallpaperhi.com_92.jpg', 'forms/uploads/images (3).jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:57:52'),
(76, 'Raju', 'It\'s my thursday Post', 'News', 'Technology', 'uploads/6d124b129b4ab5cb3d35835aa8884a97.jpg', 'uploads/Very Funny wallpaper Engineering.gif', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:58:22'),
(77, 'Raju', 'It\'s MobiManager Post', 'News', 'Popular', 'uploads/363536-toucan-parrot-bird-tropical-16-748x468.jpg', 'uploads/THE BEST NEW WALLPAPER COLLECTION 3D transformer robot wallpaper.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:59:18'),
(78, 'Alamin Vai', 'It\'s my thursday Post Difference between long title and short title', 'News', 'Trends', 'uploads/6d124b129b4ab5cb3d35835aa8884a97.jpg', 'uploads/water nature yellow birds duckling duck 1920x1080 wallpaper_www.wallpaperhi.com_92.jpg', '<p>This is my textarea to be replaced with HTML editor.</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 12:59:52'),
(79, 'Alamin Vai', 'Difference between long title and short title', 'News', 'Popular', 'uploads/25 Top Famous Computer Engineering Wallpaper.jpg', 'uploads/robot circuits computer technology desktop 1680x1050 hd wallpaper.jpg', '<p>This is my textarea to be replaced with HTML editor.&nbsp;</p>\r\n<p>A well-organized paragraph supports or develops a single controlling idea, which is expressed in a sentence called the topic sentence. A topic sentence has several important functions: it substantiates or supports an essay&rsquo;s thesis statement; it unifies the content of a paragraph and directs the order of the sentences; and it advises the reader of the subject to be discussed and how the paragraph will discuss it. Readers generally look to the first few sentences in a paragraph to determine the subject and perspective of the paragraph. That&rsquo;s why it&rsquo;s often best to put the topic sentence at the very beginning of the paragraph. In some cases, however, it&rsquo;s more effective to place another sentence before the topic sentence&mdash;for example, a sentence linking the current paragraph to the previous one, or one providing background information.</p>\r\n<p>Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer&mdash;perhaps indirectly&mdash;to a main point. The vast majority of your paragraphs, however, should have a topic sentence.</p>', '2024-07-04 13:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `request_demo`
--

CREATE TABLE `request_demo` (
  `id` int(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `orgName` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `numberOfSubscription` int(50) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `comments` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_demo`
--

INSERT INTO `request_demo` (`id`, `name`, `email`, `orgName`, `mobile`, `numberOfSubscription`, `userType`, `comments`) VALUES
(3, 'Md. Talal Wasim', 'md.talalwasim@gmail.com', 'Inovex Idea Solution', '01776829136', 10, 'Trial', 'Hi all, I want to trial your product. Please inform me.\r\n                    '),
(7, 'Tajwar ', 'roteco1083@mcenb.com', 'mcenb', '01930043130', 50, 'Trial', '\r\n                    '),
(8, 'SHARIF AHMED', 'sharif.rcis@gmail.com', 'SYED ALAM', '01821765715', 1, 'Trial', '\r\n                    '),
(9, 'LEEYUMIN', 'aiden020408@mopius.co.kr', 'mopius', '821000000000', 10, 'Trial', '\r\n                    i want a demo service for BYOD. please send Email to me. Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(50) NOT NULL,
  `ticketNumber` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `orgName` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `issueTitle` varchar(300) DEFAULT NULL,
  `issueDescription` varchar(2000) DEFAULT NULL,
  `attachment` blob DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `ticketNumber`, `name`, `email`, `orgName`, `mobile`, `issueTitle`, `issueDescription`, `attachment`, `status`) VALUES
(45, 'TN#193592305', 'Md. Talal Wasim', 'md.talalwasim@gmail.com', 'Inovex Idea Solution', '01776829136', 'MDM Product Support Request', 'Hello, I need urgent Support for MDM. I am facing issue with device enrollment process through qr code generator.', NULL, 'Processing'),
(46, 'TN#8859973215', 'Shahed Ahmed', 'shahedahmed@gmail.com', 'UIU', '01776812138', 'Mobile Device Management Related Issue', 'Facing issue, Please contact with me asap, I need urgent support.', NULL, 'Completed'),
(48, 'TN#6570937', 'Raju', 'raju.iit3@gmail.com', 'Inovex Idea Solution LTd', '01751843119', 'Checking ', 'NO need              ', NULL, 'Received'),
(49, 'TN#1690031', 'Raju Mia', '', 'NSTU', '01751843119', 'fkjdslfjklsdf', '          ldskfjksldfjdsl            ', NULL, 'Received'),
(50, 'TN#2368669992', 'Raju Mia', '', 'NSTU', '01751843119', 'fjdslkfjdskljf', '                 kfklfdsjfdslfkds     ', NULL, 'Received'),
(51, 'TN#2368669992', 'Raju Mia', '', 'NSTU', '01751843119', 'dsfkldsjkl', '          dkjfsdfljdslkjfs            ', NULL, 'Received'),
(52, 'TN#752726738', 'Raju Mia', '', 'NSTU', '01751843119', 'lfklsfdsklf', '               kjdfkldsfj       ', NULL, 'Received');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `become_our_partner`
--
ALTER TABLE `become_our_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_demo`
--
ALTER TABLE `request_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `become_our_partner`
--
ALTER TABLE `become_our_partner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `request_demo`
--
ALTER TABLE `request_demo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
