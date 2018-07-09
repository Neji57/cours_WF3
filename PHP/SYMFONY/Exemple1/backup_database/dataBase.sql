←
 phpMyAdmin
HomeEmpty session dataphpMyAdmin documentationDocumentationNavigation panel settingsReload navigation panel
RecentFavorites
Collapse allUnlink from main panel
New
Expand/CollapseDatabase operationsexo1_userslist
Expand/CollapseDatabase operationsinformation_schema
Expand/CollapseDatabase operationsmysql
Expand/CollapseDatabase operationsperformance_schema
Database operationssf_exo
NewNew
Expand/CollapseStructurearticle
Expand/CollapseStructurearticle_category
Expand/CollapseStructurearticle_follow
Expand/CollapseStructurecategory
Expand/CollapseStructureuser
Expand/CollapseDatabase operationsvehicule
Expand/CollapseDatabase operationswordpress_theme
Server: localhost:3306 »Database: sf_exo
Structure Structure
SQL SQL
Search Search
Query Query
Export Export
Import Import
Operations Operations
Privileges Privileges
Routines Routines
Events Events
More
Click on the bar to scroll to top of page
SQL Query Console Console
ascending descending Order: Debug SQL Execution order Time taken Order by: Group queries
Options Set default
 Always expand query messages
 Show query history at start
 Show current browsing query
  Execute queries on Enter and insert new line with Shift + Enter. To make this permanent, view settings.
 Switch to dark theme
[ Back ]


-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2018 at 04:29 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sf_exo`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `date_create`, `date_update`, `user_id`) VALUES
(30, 'Bulbizarre', '<p>Bulbi bulbizarre</p>', '2018-07-09 13:27:50', '2018-07-09 13:27:50', 1),
(31, 'Salameche', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Il pr&eacute;f&egrave;re les endroits chauds. En cas de pluie, de la vapeur se forme autour de sa queue.</span></p>', '2018-07-09 13:31:02', '2018-07-09 13:31:02', 1),
(32, 'Carapuce', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Son dos durcit avec l\'&acirc;ge et devient une super carapace. Il peut cracher des jets d\'&eacute;cume.</span></p>', '2018-07-09 13:31:58', '2018-07-09 13:31:58', 1),
(33, 'Chenipan', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Ses petites pattes sont &eacute;quip&eacute;es de ventouses, lui permettant de grimper aux murs.</span></p>', '2018-07-09 13:33:01', '2018-07-09 13:33:01', 1),
(34, 'Aspicot', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Il se nourrit de feuilles dans les for&ecirc;ts. L\'aiguillon sur son front est empoisonn&eacute;.</span></p>', '2018-07-09 13:33:54', '2018-07-09 13:33:54', 1),
(35, 'Roucool', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Il est souvent vu dans les for&ecirc;ts. Il brasse l\'air de ses ailes pr&egrave;s du sol pour projeter du sable.</span></p>', '2018-07-09 13:34:39', '2018-07-09 13:34:39', 1),
(36, 'Rattata', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Sa morsure est tr&egrave;s puissante. Petit et rapide, on en voit un peu partout.</span></p>', '2018-07-09 13:35:45', '2018-07-09 13:35:45', 1),
(37, 'Piafabec', '<table class=\"fiche_poke\" style=\"font-size: 13px; border: 2px solid #cc2b05; color: #96230b; font-family: \'Open Sans\', sans-serif; background-color: #edf4f7;\" cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"fiche_poke3\" style=\"padding: 5px; border: 1px solid #ffbf35; background-color: #fffebd;\"><br class=\"Apple-interchange-newline\" />Il chasse les insectes dans les hautes herbes. Ses petites ailes lui permettent de voler tr&egrave;s vite.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-09 13:49:38', '2018-07-09 13:49:38', 1),
(38, 'Abo', '<table class=\"fiche_poke\" style=\"font-size: 13px; border: 2px solid #cc2b05; color: #96230b; font-family: \'Open Sans\', sans-serif; background-color: #edf4f7;\" cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"fiche_poke3\" style=\"padding: 5px; border: 1px solid #ffbf35; background-color: #fffebd;\"><br class=\"Apple-interchange-newline\" />Il se d&eacute;place en silence pour d&eacute;vorer des oeufs de ROUCOOL ou de PIAFABEC.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-09 13:50:23', '2018-07-09 13:50:23', 1),
(39, 'Pikachu', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Quand plusieurs de ces POK&eacute;MON se r&eacute;unissent, ils provoquent de gigantesques orages.</span></p>', '2018-07-09 13:51:03', '2018-07-09 13:51:03', 1),
(40, 'Sabelette', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Il s\'enterre dans les r&eacute;gions arides et d&eacute;sertiques. Il &eacute;merge seulement pour chasser.</span></p>', '2018-07-09 13:51:59', '2018-07-09 13:51:59', 1),
(41, 'Nidoran F', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Ce POK&eacute;MON est h&eacute;riss&eacute; de dards empoisonn&eacute;s. Les femelles ont des dards plus petits.</span></p>', '2018-07-09 13:52:37', '2018-07-09 13:52:37', 1),
(42, 'Nidoran M', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Son ou&iuml;e tr&egrave;s fine l\'avertit du danger. Plus ses cornes sont grandes, plus son poison est mortel.</span></p>', '2018-07-09 13:53:29', '2018-07-09 13:53:29', 1),
(43, 'Melofee', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Tr&egrave;s recherch&eacute; pour son aura mystique, il est tr&egrave;s rare et ne vit que dans des endroits pr&eacute;cis.</span></p>', '2018-07-09 13:54:39', '2018-07-09 13:54:39', 1),
(44, 'Goupix', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Il n\'a qu\'une seule queue &agrave; la naissance. Sa queue se divise &agrave; la pointe au fil des ans.</span></p>', '2018-07-09 13:55:19', '2018-07-09 13:55:19', 1),
(45, 'Rondoudou', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Quand ses yeux s\'illuminent, il chante une myst&eacute;rieuse berceuse.</span></p>', '2018-07-09 13:55:58', '2018-07-09 13:55:58', 1),
(46, 'Nosferapti', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Se d&eacute;place en colonie dans les endroits sombres. Il s\'oriente gr&acirc;ce aux ultrasons.</span></p>', '2018-07-09 13:56:37', '2018-07-09 13:56:37', 1),
(47, 'Mystherbe', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Pendant la journ&eacute;e il se cache sous terre. Il s\'aventure la nuit pour planter des graines.</span></p>', '2018-07-09 13:57:20', '2018-07-09 13:57:20', 1),
(48, 'Paras', '<p><span style=\"color: #96230b; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #fffebd;\">Les champignons sur son dos se nourrissent des nutriments de leur h&ocirc;te insecto&iuml;de.</span></p>', '2018-07-09 13:59:05', '2018-07-09 13:59:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`article_id`, `category_id`) VALUES
(30, 9),
(30, 11),
(31, 7),
(32, 8),
(33, 15),
(34, 11),
(34, 15),
(35, 13),
(35, 14),
(36, 13),
(37, 13),
(37, 14),
(38, 11),
(39, 10),
(40, 16),
(41, 11),
(42, 11),
(43, 17),
(44, 7),
(45, 13),
(45, 17),
(46, 11),
(46, 14),
(47, 9),
(47, 11),
(48, 9),
(48, 15);

-- --------------------------------------------------------

--
-- Table structure for table `article_follow`
--

CREATE TABLE `article_follow` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(7, 'Feu'),
(8, 'Eau'),
(9, 'Plante'),
(10, 'Elektrik'),
(11, 'Poison'),
(12, 'Spectre'),
(13, 'Normal'),
(14, 'Vol'),
(15, 'Insecte'),
(16, 'Sol'),
(17, 'Fée');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'Picobuu', 'picobuu', 'steve.toffano@gmail.com', 'steve.toffano@gmail.com', 1, NULL, '$2y$13$JyJI3tSWlH5X3dZvLnYti.169fOUKbPD/GcBN13WSvk1iKruokA/.', '2018-07-09 10:56:28', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),
(2, 'Red', 'red', 'red@gmail.com', 'red@gmail.com', 1, NULL, '$2y$13$WqnlUpogp0CwwEYgOt0CzOhUFvThAF4HnDhZ6VXkURwZaAc7Q5BWq', '2018-07-09 14:25:49', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66A76ED395` (`user_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`article_id`,`category_id`),
  ADD KEY `IDX_53A4EDAA7294869C` (`article_id`),
  ADD KEY `IDX_53A4EDAA12469DE2` (`category_id`);

--
-- Indexes for table `article_follow`
--
ALTER TABLE `article_follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F3D3F07294869C` (`article_id`),
  ADD KEY `IDX_2F3D3F0A76ED395` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `article_follow`
--
ALTER TABLE `article_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `FK_53A4EDAA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53A4EDAA7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_follow`
--
ALTER TABLE `article_follow`
  ADD CONSTRAINT `FK_2F3D3F07294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_2F3D3F0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

[ Back ]

Open new phpMyAdmin window