-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Février 2020 à 16:14
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Identifiant` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `Mail`, `Password`, `Identifiant`, `Nom`, `Prénom`) VALUES
(1, 'ytranchot@gmail.com', '1234', 'Yo_tcht', 'Yoann', 'Tranchot');

-- --------------------------------------------------------

--
-- Structure de la table `liste_page`
--

CREATE TABLE `liste_page` (
  `ID` int(11) NOT NULL,
  `Nom_Page` varchar(255) NOT NULL,
  `Chemin` varchar(255) NOT NULL,
  `Parent` varchar(255) NOT NULL,
  `Niveau` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `liste_page`
--

INSERT INTO `liste_page` (`ID`, `Nom_Page`, `Chemin`, `Parent`, `Niveau`) VALUES
(1, 'about', '/index.php?page=about', '', 1),
(2, 'accueil', '/index.php', '', 1),
(3, 'competences', '/index.php?page=competences', '', 1),
(4, 'contact', 'visiteur/VUE/php/contact.php', '', 1),
(5, 'project', '/index.php?page=project', '', 1),
(6, 'Audiovisuel', '/index.php?page=vue_project&content=Audiovisuel', 'project', 2),
(7, 'Programation', '/index.php?page=vue_project&content=Programation', 'project', 2),
(8, 'Multimedia', '/index.php?page=vue_project&content=Multimedia', 'project', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `liste_page`
--
ALTER TABLE `liste_page`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `liste_page`
--
ALTER TABLE `liste_page`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
