-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 01 Septembre 2017 à 16:54
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
(4, 'Gods and Monsters'),
(5, 'Overpass'),
(6, 'Rising Sun');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

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
(28, 'Seabird', 4, 27, 1, 2, 0.15),
(29, 'Impact Drill', 4, 31, 1, 2, 0.15);

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
(4, 'Heavy'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `weapon`
--

CREATE TABLE IF NOT EXISTS `weapon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

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
