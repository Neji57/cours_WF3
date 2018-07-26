-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 26 juil. 2018 à 16:17
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sf_exo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `user_id`, `title`, `content`, `date_create`, `date_update`) VALUES
(30, 1, 'Bulbizarre', '<p>Bulbi bulbizarre</p>', '2018-07-09 13:27:50', '2018-07-09 16:51:01'),
(31, 1, 'Salameche', '<p>Il pr&eacute;f&egrave;re les endroits chauds. En cas de pluie, de la vapeur se forme autour de sa queue.</p>', '2018-07-09 13:31:02', '2018-07-09 16:50:39'),
(32, 1, 'Carapuce', '<p>Son dos durcit avec l\'&acirc;ge et devient une super carapace. Il peut cracher des jets d\'&eacute;cume.</p>', '2018-07-09 13:31:58', '2018-07-09 16:50:26'),
(33, 1, 'Chenipan', '<p>Ses petites pattes sont &eacute;quip&eacute;es de ventouses, lui permettant de grimper aux murs.</p>', '2018-07-09 13:33:01', '2018-07-09 16:50:11'),
(34, 1, 'Aspicot', '<p>Il se nourrit de feuilles dans les for&ecirc;ts. L\'aiguillon sur son front est empoisonn&eacute;.</p>', '2018-07-09 13:33:54', '2018-07-09 16:49:53'),
(35, 1, 'Roucool', '<p>Il est souvent vu dans les for&ecirc;ts. Il brasse l\'air de ses ailes pr&egrave;s du sol pour projeter du sable.</p>', '2018-07-09 13:34:39', '2018-07-09 16:49:38'),
(36, 1, 'Rattata', '<p>Sa morsure est tr&egrave;s puissante. Petit et rapide, on en voit un peu partout.</p>', '2018-07-09 13:35:45', '2018-07-09 16:49:12'),
(37, 1, 'Piafabec', '<table cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Il chasse les insectes dans les hautes herbes. Ses petites ailes lui permettent de voler tr&egrave;s vite.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-09 13:49:38', '2018-07-09 16:48:47'),
(38, 1, 'Abo', '<table width=\"437\" cellspacing=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Il se d&eacute;place en silence pour d&eacute;vorer des oeufs de ROUCOOL ou de PIAFABEC.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-09 13:50:23', '2018-07-09 16:48:06'),
(39, 1, 'Pikachu', '<p>Quand plusieurs de ces POK&eacute;MON se r&eacute;unissent, ils provoquent de gigantesques orages.</p>', '2018-07-09 13:51:03', '2018-07-09 16:47:54'),
(40, 1, 'Sabelette', '<p>Il s\'enterre dans les r&eacute;gions arides et d&eacute;sertiques. Il &eacute;merge seulement pour chasser.</p>', '2018-07-09 13:51:59', '2018-07-09 16:47:45'),
(41, 1, 'Nidoran F', '<p>Ce POK&eacute;MON est h&eacute;riss&eacute; de dards empoisonn&eacute;s. Les femelles ont des dards plus petits.</p>', '2018-07-09 13:52:37', '2018-07-09 16:47:34'),
(42, 1, 'Nidoran M', '<p>Son ou&iuml;e tr&egrave;s fine l\'avertit du danger. Plus ses cornes sont grandes, plus son poison est mortel.</p>', '2018-07-09 13:53:29', '2018-07-09 16:47:28'),
(43, 1, 'Melofee', '<p>Tr&egrave;s recherch&eacute; pour son aura mystique, il est tr&egrave;s rare et ne vit que dans des endroits pr&eacute;cis.</p>', '2018-07-09 13:54:39', '2018-07-09 16:47:14'),
(44, 1, 'Goupix', '<p>Il n\'a qu\'une seule queue &agrave; la naissance. Sa queue se divise &agrave; la pointe au fil des ans.</p>', '2018-07-09 13:55:19', '2018-07-09 16:47:05'),
(45, 1, 'Rondoudou', '<p>Quand ses yeux s\'illuminent, il chante une myst&eacute;rieuse berceuse.</p>', '2018-07-09 13:55:58', '2018-07-09 16:46:58'),
(46, 1, 'Nosferapti', '<p>Se d&eacute;place en colonie dans les endroits sombres. Il s\'oriente gr&acirc;ce aux ultrasons.</p>', '2018-07-09 13:56:37', '2018-07-09 16:46:48'),
(47, 1, 'Mystherbe', '<p>Pendant la journ&eacute;e il se cache sous terre. Il s\'aventure la nuit pour planter des graines.</p>', '2018-07-09 13:57:20', '2018-07-09 16:46:20'),
(48, 1, 'Paras', '<p>Les champignons sur son dos se nourrissent des nutriments de leur h&ocirc;te insecto&iuml;de.</p>', '2018-07-09 13:59:05', '2018-07-09 16:46:11'),
(49, 2, 'Fantiminus', '<p>Bouh</p>', '2018-07-09 16:45:49', '2018-07-09 16:45:49');

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_category`
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
(48, 15),
(49, 12);

-- --------------------------------------------------------

--
-- Structure de la table `article_follow`
--

CREATE TABLE `article_follow` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
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
-- Structure de la table `user`
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
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'Picobuu', 'picobuu', 'steve.toffano@gmail.com', 'steve.toffano@gmail.com', 1, NULL, '$2y$13$JyJI3tSWlH5X3dZvLnYti.169fOUKbPD/GcBN13WSvk1iKruokA/.', '2018-07-09 10:56:28', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),
(2, 'Red', 'red', 'red@gmail.com', 'red@gmail.com', 1, NULL, '$2y$13$WqnlUpogp0CwwEYgOt0CzOhUFvThAF4HnDhZ6VXkURwZaAc7Q5BWq', '2018-07-10 15:59:43', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66A76ED395` (`user_id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`article_id`,`category_id`),
  ADD KEY `IDX_53A4EDAA7294869C` (`article_id`),
  ADD KEY `IDX_53A4EDAA12469DE2` (`category_id`);

--
-- Index pour la table `article_follow`
--
ALTER TABLE `article_follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F3D3F07294869C` (`article_id`),
  ADD KEY `IDX_2F3D3F0A76ED395` (`user_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `article_follow`
--
ALTER TABLE `article_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `FK_53A4EDAA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_53A4EDAA7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_follow`
--
ALTER TABLE `article_follow`
  ADD CONSTRAINT `FK_2F3D3F07294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `FK_2F3D3F0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
