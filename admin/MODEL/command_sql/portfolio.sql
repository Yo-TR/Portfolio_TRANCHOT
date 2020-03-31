-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 29 fév. 2020 à 22:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Identifiant` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Mail`, `Password`, `Identifiant`, `Nom`, `Prenom`) VALUES
(1, 'ytranchot@gmail.com', '1234', 'Yo_tcht', 'Yoann', 'Tranchot');

-- --------------------------------------------------------

--
-- Structure de la table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `ID_Contact` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Texte` text COLLATE utf8_roman_ci NOT NULL,
  `Date` date NOT NULL,
  `Mail` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liste_page`
--

DROP TABLE IF EXISTS `liste_page`;
CREATE TABLE IF NOT EXISTS `liste_page` (
  `ID_Page` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Page` varchar(255) NOT NULL,
  `Chemin` varchar(255) NOT NULL,
  `Parent` varchar(255) NOT NULL,
  `Niveau` int(11) NOT NULL,
  `ID_Template` int(11) NOT NULL,
  PRIMARY KEY (`ID_Page`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste_page`
--

INSERT INTO `liste_page` (`ID_Page`, `Nom_Page`, `Chemin`, `Parent`, `Niveau`, `ID_Template`) VALUES
(1, 'about', '/index.php?page=about', '', 1, 0),
(2, 'accueil', '/index.php', '', 1, 0),
(3, 'competences', '/index.php?page=competences', '', 1, 0),
(4, 'contact', 'visiteur/VUE/php/contact.php', '', 1, 0),
(5, 'project', '/index.php?page=project', '', 1, 0),
(6, 'Audiovisuel', '/index.php?page=vue_project&content=Audiovisuel', 'project', 2, 0),
(7, 'Programation', '/index.php?page=vue_project&content=Programation', 'project', 2, 0),
(8, 'Multimedia', '/index.php?page=vue_project&content=Multimedia', 'project', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `ID_Media` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `Adress` text COLLATE utf8_roman_ci NOT NULL,
  `Position` int(11) NOT NULL,
  `ID_Page` int(11) NOT NULL,
  `Lien` text COLLATE utf8_roman_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Media`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`ID_Media`, `Type`, `Adress`, `Position`, `ID_Page`, `Lien`, `Titre`) VALUES
(1, 'img', '/visiteur/VUE/image/carrousel.jpg', 2, 7, '', 'carrousel'),
(2, 'img', '/visiteur/VUE/image/film_metier.png', 1, 6, '', 'film_metier'),
(3, 'img', '/visiteur/VUE/image/flag-for-guadeloupe_1f1ec-1f1f5.png', 1, 0, '', 'flag'),
(4, 'img', '/visiteur/VUE/image/souris.jpg', 1, 7, '', 'souris'),
(5, 'img', '/visiteur/VUE/image/teammeca.jpg', 4, 7, '', 'teammeca'),
(6, 'img', '/visiteur/VUE/image/tower defense.jpg', 3, 7, '', 'tower'),
(7, 'img', '/visiteur/VUE/image/y.png', 1, 0, '', 'y'),
(8, 'img', '/visiteur/VUE/image/yoann.png', 1, 0, '', 'yoann');

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `Nom_template` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `ID_Template` int(11) NOT NULL AUTO_INCREMENT,
  `CSS_path` text COLLATE utf8_roman_ci NOT NULL,
  `JS_path` text COLLATE utf8_roman_ci NOT NULL,
  PRIMARY KEY (`ID_Template`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `ID_Texte` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Page` int(11) NOT NULL,
  `Texte` text COLLATE utf8_roman_ci NOT NULL,
  `Position` int(11) NOT NULL,
  PRIMARY KEY (`ID_Texte`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`ID_Texte`, `ID_Page`, `Texte`, `Position`) VALUES
(1, 1, '<p>Bonjour\r\nJe prépare actuellement un diplôme universitaire métier du multimédia et de l\'internet. Je souhaiterais acquérir davantage d\'expérience dans le monde professionnel. Les languages de programmation comme le HTML, le CSS, le Javascript ou le PHP sont les outils de développement que j’apprends à utiliser. D’ailleurs mon diplôme m’aide à affiner mes armes pour devenir développeur web. Assimiler les méthodes agiles m’aide à approfondir des compétences comme la conception et le développement me permettant ainsi de travailler plus efficacement.Jeune volontaire et dynamique je reste à votre disposition pour de plus amples informations.</p>', 1);

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

DROP TABLE IF EXISTS `titre`;
CREATE TABLE IF NOT EXISTS `titre` (
  `ID_Titre` int(11) NOT NULL AUTO_INCREMENT,
  `Taille` varchar(8) COLLATE utf8_roman_ci NOT NULL,
  `Contenu` varchar(255) COLLATE utf8_roman_ci NOT NULL,
  `ID_Page` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Lien` varchar(255) COLLATE utf8_roman_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Titre`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci;

--
-- Déchargement des données de la table `titre`
--

INSERT INTO `titre` (`ID_Titre`, `Taille`, `Contenu`, `ID_Page`, `Position`, `Lien`) VALUES
(1, '', 'YOANN TRANCHOT', 2, 2, ''),
(2, '', 'Bonjour, je m\'appelle', 2, 2, ''),
(3, '', 'MOI', 1, 2, ''),
(4, 'h1', 'Développement', 1, 2, ''),
(5, 'h1', 'Design', 1, 2, ''),
(6, '', 'HTML', 2, 2, ''),
(7, '', 'JavaScript', 2, 2, ''),
(8, '', 'PHP', 2, 2, ''),
(9, '', 'SQL', 2, 2, ''),
(10, '', 'CSS', 2, 2, ''),
(11, '', 'Photoshop', 2, 3, ''),
(12, '', 'Illustrator', 2, 3, ''),
(13, '', 'AUDIOVISUEL', 5, 1, ''),
(14, '', 'PROGRAMATION', 5, 1, ''),
(15, '', 'MULTIMÉDIA', 5, 1, ''),
(16, '', 'CDP - Motion', 5, 1, 'UuLsSFWqLc4'),
(17, '', 'Le chef de projet - ITW', 5, 1, '6X4rqUCNH3o'),
(18, '', 'Jitter Click', 5, 1, 'programation/Jitter_click/index.html'),
(19, '', 'Machine de l\'Ile', 5, 1, 'programation/Machin_de_l\'ile_sem2/accueil.html'),
(20, '', 'Tower Defense', 5, 1, 'programation/projet-tower-defense/index.html\"'),
(21, '', 'Team Meca', 5, 1, 'programation/TeamMeca_Tranchot/index.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
