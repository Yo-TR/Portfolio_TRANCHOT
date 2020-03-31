-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 31 mars 2020 à 10:36
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
-- Base de données :  `tranchot_portfolio`
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
-- Structure de la table `categorie_menu`
--

DROP TABLE IF EXISTS `categorie_menu`;
CREATE TABLE IF NOT EXISTS `categorie_menu` (
  `Id_categorie_menu` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Id_menu_principal` int(11) NOT NULL,
  PRIMARY KEY (`Id_categorie_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_menu`
--

INSERT INTO `categorie_menu` (`Id_categorie_menu`, `Nom`, `Id_menu_principal`) VALUES
(1, 'Audiovisuel', 4),
(2, 'Programation', 4),
(3, 'Multimédia', 4),
(4, 'Communication', 4);

-- --------------------------------------------------------

--
-- Structure de la table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `ID_contact_form` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Texte` text NOT NULL,
  `Date` date NOT NULL,
  `Mail` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_contact_form`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact_form`
--

INSERT INTO `contact_form` (`ID_contact_form`, `Nom`, `Prenom`, `Texte`, `Date`, `Mail`) VALUES
(1, '', '', '', '2020-03-06', '');

-- --------------------------------------------------------

--
-- Structure de la table `liste_page`
--

DROP TABLE IF EXISTS `liste_page`;
CREATE TABLE IF NOT EXISTS `liste_page` (
  `ID_liste_page` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Page` varchar(255) NOT NULL,
  `Chemin` varchar(255) NOT NULL,
  `Niveau` int(11) NOT NULL,
  `ID_Template` int(11) NOT NULL,
  PRIMARY KEY (`ID_liste_page`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste_page`
--

INSERT INTO `liste_page` (`ID_liste_page`, `Nom_Page`, `Chemin`, `Niveau`, `ID_Template`) VALUES
(1, 'about', '/index.php?page=about', 1, 0),
(2, 'accueil', '/index.php', 1, 0),
(3, 'competences', '/index.php?page=competences', 1, 0),
(4, 'contact', '/index.php?page=contact', 1, 0),
(5, 'project', '/index.php?page=project', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `menu_principal`
--

DROP TABLE IF EXISTS `menu_principal`;
CREATE TABLE IF NOT EXISTS `menu_principal` (
  `Id_menu_principal` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_menu_principal`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu_principal`
--

INSERT INTO `menu_principal` (`Id_menu_principal`, `Nom`, `lien`) VALUES
(1, 'Accueil', 'index.php'),
(2, 'À propos', 'index.php?page=about'),
(3, 'Compétences', 'index.php?page=competences'),
(4, 'Projets', 'index.php?page=project'),
(5, 'Contact', 'index.php?page=contact');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `ID_projets` int(11) NOT NULL AUTO_INCREMENT,
  `Type_media` varchar(255) NOT NULL,
  `Chemin_img` text NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `adresse_projet` varchar(255) NOT NULL,
  `Domaine` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_projets`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`ID_projets`, `Type_media`, `Chemin_img`, `Titre`, `adresse_projet`, `Domaine`) VALUES
(35, 'img', 'Programation/carrousel.jpg', 'carrousel', 'programation/Machin_de_l\'ile_sem2/accueil.html', 'Programation'),
(36, 'img', 'autres/film_metier.png', 'film_metier', '', NULL),
(37, 'img', 'autres/flag-for-guadeloupe_1f1ec-1f1f5.png', 'flag', '', NULL),
(38, 'img', 'Programation/souris.jpg', 'souris', 'programation/Jitter_click/index.php', 'Programation'),
(39, 'img', 'Programation/teammeca.jpg', 'teammeca', 'programation/TeamMeca_Tranchot/index.php', 'Programation'),
(40, 'img', 'Programation/tower defense.jpg', 'tower', 'programation/projet-tower-defense/index.php', 'Programation'),
(41, 'img', 'autres/y.png', 'y', '', NULL),
(42, 'img', 'autres/yoann.png', 'yoann', '', NULL),
(43, 'img', 'Audiovisuel/film_metier.png', 'Le chef de projet - ITW', '6X4rqUCNH3o', 'Audiovisuel'),
(44, 'img', 'Audiovisuel/film_metier.png', 'CDP - Motion', 'UuLsSFWqLc4', 'Audiovisuel'),
(47, 'youtube', '/Audiovisuel/Image-2_exportPlan de travail 1.jpg', 'Video Youtube', 'UdeMNfZK444', 'Audiovisuel'),
(48, 'article', '/Communication/Plan de travail 1.png', 'Maëlys', '/visiteur/VUE/php/create/Maelys.php', 'Communication'),
(56, 'article', '/Communication/032020_img_square_1157.png', 'Template replace', '/visiteur/VUE/php/create/template_replace.php', 'Communication'),
(57, 'article', '/Communication/032020_img_square_1136.png', 'Template replace rsq8', '/visiteur/VUE/php/create/template_replace_rsq8.php', 'Communication');

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `Nom_template` varchar(255) NOT NULL,
  `ID_Template` int(11) NOT NULL AUTO_INCREMENT,
  `CSS_path` text NOT NULL,
  `JS_path` text NOT NULL,
  PRIMARY KEY (`ID_Template`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`Nom_template`, `ID_Template`, `CSS_path`, `JS_path`) VALUES
('', 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `ID_Texte` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Page` int(11) NOT NULL,
  `Texte` text NOT NULL,
  `Position` int(11) NOT NULL,
  PRIMARY KEY (`ID_Texte`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `Taille` varchar(8) NOT NULL,
  `Contenu` varchar(255) NOT NULL,
  `ID_Page` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Lien` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Titre`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

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
(18, '', 'Jitter Click', 5, 1, 'programation/Jitter_click/index.html'),
(19, '', 'Machine de l\'Ile', 5, 1, 'programation/Machin_de_l\'ile_sem2/accueil.html'),
(20, '', 'Tower Defense', 5, 1, 'programation/projet-tower-defense/index.html\"'),
(21, '', 'Team Meca', 5, 1, 'programation/TeamMeca_Tranchot/index.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
