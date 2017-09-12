-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 12 Septembre 2017 à 09:45
-- Version du serveur: 5.5.55-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `skincsbenef`
--

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `collection`
--

INSERT INTO `collection` (`id`, `name`) VALUES
(1, 'Cache'),
(2, 'Chop Shop'),
(3, 'Cobblestone'),
(4, 'Operation Hydra'),
(5, 'Chroma 3'),
(6, 'Gamma');

-- --------------------------------------------------------

--
-- Structure de la table `link_order_skin`
--

CREATE TABLE IF NOT EXISTS `link_order_skin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_order` int(10) unsigned NOT NULL,
  `id_skin` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=289 ;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`id`, `id_user`, `status`, `date`) VALUES
(1, 1, 'cart', '2017-09-08 09:50:48'),
(2, 1, 'cart', '2017-09-08 09:51:20'),
(3, 1, 'cart', '2017-09-08 09:51:48'),
(4, 3, 'cart', '2017-09-08 11:14:59'),
(5, 2, 'cart', '2017-09-08 11:19:27'),
(6, 1, 'cart', '2017-09-08 11:21:37'),
(7, 4, 'cart', '2017-09-08 12:39:43');

-- --------------------------------------------------------

--
-- Structure de la table `rarity`
--

CREATE TABLE IF NOT EXISTS `rarity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `rarity`
--

INSERT INTO `rarity` (`id`, `name`) VALUES
(1, 'Consumer Grade'),
(2, 'Industrial Grade'),
(3, 'Mil-Spec'),
(4, 'Restricted'),
(5, 'Classified'),
(6, 'Covert');

-- --------------------------------------------------------

--
-- Structure de la table `skin`
--

CREATE TABLE IF NOT EXISTS `skin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_weapon` int(11) NOT NULL,
  `id_rarity` int(11) NOT NULL,
  `id_collection` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=93 ;

--
-- Contenu de la table `skin`
--

INSERT INTO `skin` (`id`, `name`, `id_type`, `id_weapon`, `id_rarity`, `id_collection`, `price`) VALUES
(1, 'Cerberus', 2, 16, 4, 1, 9.23),
(2, 'Styx', 2, 14, 4, 1, 2.51),
(3, 'Reactor', 1, 5, 3, 1, 3.38),
(4, 'Toxic', 1, 9, 3, 1, 2.56),
(5, 'Setting Sun', 3, 24, 3, 1, 0.94),
(6, 'Bone Machine', 4, 30, 3, 1, 0.73),
(7, 'Nuclear Garden', 3, 22, 3, 1, 0.93),
(8, 'Hot Shot', 1, 4, 2, 1, 0.79),
(9, 'Radiation Hazard', 2, 12, 2, 1, 0.42),
(10, 'Fallout Warning', 2, 20, 2, 1, 0.42),
(11, 'Contamination', 1, 7, 2, 1, 0.33),
(12, 'Chemical Green', 3, 25, 2, 1, 0.43),
(13, 'Nuclear Waste', 4, 32, 2, 1, 0.19),
(14, 'Hot Rod', 2, 17, 5, 2, 63.62),
(15, 'Twilight Galaxy', 1, 5, 5, 2, 11.75),
(16, 'Bulldozer', 2, 20, 4, 2, 15.3),
(17, 'Duelist', 1, 3, 4, 2, 7.44),
(18, 'Whiteout', 1, 7, 3, 2, 40.56),
(19, 'Fade', 3, 22, 3, 2, 4.56),
(20, 'Emerald', 1, 1, 3, 2, 2.91),
(21, 'Nitro', 1, 4, 3, 2, 6.45),
(22, 'Full Stop', 3, 23, 3, 2, 1.1),
(23, 'Night', 1, 2, 2, 2, 8.91),
(24, 'Para Green', 1, 10, 2, 2, 0.87),
(25, 'Urban Rubble', 2, 16, 2, 2, 0.58),
(26, 'Army Sheen', 1, 1, 1, 2, 0.11),
(27, 'Army Sheen', 2, 19, 1, 2, 0.11),
(28, 'Seabird', 4, 31, 1, 2, 0.15),
(29, 'Impact Drill', 4, 27, 1, 2, 0.15),
(30, 'Dragon Lore', 2, 13, 6, 3, 1867.12),
(31, 'Knight', 2, 17, 5, 3, 240.86),
(32, 'Hand Cannon', 1, 2, 4, 3, 34.53),
(33, 'Chalice', 1, 1, 4, 3, 25.2),
(34, 'Dark Age', 3, 24, 3, 3, 3.86),
(35, 'Chainmail', 1, 6, 3, 3, 3.84),
(36, 'Royal Blue', 1, 10, 2, 3, 9.41),
(37, 'Silver', 4, 27, 2, 3, 0.41),
(38, 'Green Apple', 4, 28, 2, 3, 0.39),
(39, 'Rust Coat', 4, 29, 2, 3, 0.44),
(40, 'Indigo', 3, 22, 1, 3, 0.34),
(41, 'Storm', 3, 26, 1, 3, 0.26),
(42, 'Storm', 2, 19, 1, 3, 0.23),
(43, 'Briar', 1, 3, 1, 3, 0.13),
(44, 'Oni Taiji', 2, 13, 6, 4, 419.39),
(45, 'Hyper Beast', 1, 4, 6, 4, 214.41),
(46, 'Hellfire', 2, 18, 5, 4, 62.92),
(47, 'Cobra Strike', 1, 3, 5, 4, 147.13),
(48, 'Sugar Rush', 2, 16, 5, 4, 21.13),
(49, 'Orbit Mk01', 2, 11, 4, 4, 27.54),
(50, 'Death''s Head', 2, 21, 4, 4, 5.35),
(51, 'Red Rock', 1, 7, 4, 4, 7.38),
(52, 'Death Grip', 3, 26, 4, 4, 7.24),
(53, 'Woodsman', 1, 6, 4, 4, 4.41),
(54, 'Blueprint', 1, 10, 3, 4, 26.48),
(55, 'Briefing', 2, 17, 3, 4, 10.28),
(56, 'Cut Out', 1, 9, 3, 4, 2.22),
(57, 'Hard Water', 4, 27, 3, 4, 1.32),
(58, 'Aloha', 3, 22, 3, 4, 1.07),
(59, 'Macabre', 2, 14, 3, 4, 1.09),
(60, 'Chantico''s Fire', 2, 17, 6, 5, 310.35),
(61, 'Judgement of Anubis', 3, 25, 6, 5, 31.86),
(62, 'Asiimov', 1, 7, 5, 5, 57.87),
(63, 'Fleet Flock', 2, 12, 5, 5, 24.73),
(64, 'Ghost Crusader', 2, 21, 4, 5, 10.06),
(65, 'Red Astor', 1, 1, 4, 5, 9.64),
(66, 'Re-Entry', 1, 9, 4, 5, 4.05),
(67, 'Black Tie', 4, 30, 4, 5, 4.44),
(68, 'Firefight', 2, 16, 4, 5, 4.52),
(69, 'Atlas', 2, 20, 3, 5, 1.35),
(70, 'Bioleak', 3, 24, 3, 5, 0.79),
(71, 'Oceanic', 1, 6, 3, 5, 0.78),
(72, 'Ventilators', 1, 3, 3, 5, 0.65),
(73, 'Sepctre', 2, 21, 3, 5, 0.58),
(74, 'Orange Crash', 4, 31, 3, 5, 0.61),
(75, 'Fubar', 4, 29, 3, 5, 0.26),
(76, 'Mecha Industries', 2, 17, 6, 6, 137.56),
(77, 'Wasteland Rebel', 1, 5, 6, 6, 49.31),
(78, 'Desolate Space', 2, 18, 5, 6, 91.87),
(79, 'Imperial Dragon', 1, 6, 5, 6, 13.8),
(80, 'Bloodsport', 2, 19, 5, 6, 10.89),
(81, 'Phobos', 2, 13, 4, 6, 9.47),
(82, 'Reboot', 1, 8, 4, 6, 12.5),
(83, 'Aristocrat', 2, 12, 4, 6, 4.36),
(84, 'Chopper', 3, 26, 4, 6, 4.36),
(85, 'Limelight', 4, 29, 4, 6, 5.51),
(86, 'Violent Daimyo', 1, 4, 3, 6, 2.85),
(87, 'Aerial', 2, 20, 3, 6, 1.5),
(88, 'Iron Clad', 1, 7, 3, 6, 1.81),
(89, 'Ice Cap', 1, 9, 3, 6, 1.07),
(90, 'Carnivore', 3, 22, 3, 6, 1.17),
(91, 'Exo', 4, 28, 3, 6, 0.71),
(92, 'Harvester', 3, 25, 3, 6, 0.83);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Pistols'),
(2, 'Rifles'),
(3, 'SMGs'),
(4, 'Heavys'),
(5, 'Knives');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nickname`, `password`, `mail`) VALUES
(1, 'root', 'troiswa', ''),
(2, 'root', 'troiswa', 'qds@dqs.fd'),
(3, 'rootaze', 'troiswa', 'fsdfs@fsdf.fr'),
(4, 'Lanaya', '$2y$10$MRUzC3JjnkJHKn4QUoKcMuTE8qHtjVNMXj94iMvPSF4eBb0VhtC1W', 'lanaya@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `weapon`
--

CREATE TABLE IF NOT EXISTS `weapon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Contenu de la table `weapon`
--

INSERT INTO `weapon` (`id`, `name`, `id_type`) VALUES
(1, 'CZ75-Auto', 1),
(2, 'Desert Eagle', 1),
(3, 'Dual Berettas', 1),
(4, 'Five-SeveN', 1),
(5, 'Glock-18', 1),
(6, 'P2000', 1),
(7, 'P250', 1),
(8, 'R8 Revolver', 1),
(9, 'Tec-9', 1),
(10, 'USP-S', 1),
(11, 'AK-47', 2),
(12, 'AUG', 2),
(13, 'AWP', 2),
(14, 'FAMAS', 2),
(15, 'G3SG1', 2),
(16, 'Galil AR', 2),
(17, 'M4A1-S', 2),
(18, 'M4A4', 2),
(19, 'SCAR-20', 2),
(20, 'SG 553', 2),
(21, 'SSG 08', 2),
(22, 'MAC-10', 3),
(23, 'MP7', 3),
(24, 'MP9', 3),
(25, 'PP-Bizon', 3),
(26, 'P90', 3),
(27, 'MAG-7', 4),
(28, 'Nova', 4),
(29, 'Sawed-Off', 4),
(30, 'XM1014', 4),
(31, 'M249', 4),
(32, 'Negev', 4),
(33, 'Bayonet', 5),
(34, 'Bowie Knife', 5),
(35, 'Butterfly Knife', 5),
(36, 'Falchion Knife', 5),
(37, 'Flip Knife', 5),
(38, 'Gut Knife', 5),
(39, 'Huntsman Knife', 5),
(40, 'Karambit', 5),
(41, 'M9 Bayonet', 5),
(42, 'Shadow Daggers', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
