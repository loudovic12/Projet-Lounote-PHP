-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 fév. 2019 à 18:34
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lounote`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `etudiants_id` int(10) UNSIGNED DEFAULT NULL,
  `professeurs_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `etudiants_id` (`etudiants_id`),
  KEY `professeurs_id` (`professeurs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`ID`, `Date`, `etudiants_id`, `professeurs_id`) VALUES
(1, '2019-02-21', 1, NULL),
(2, '2019-02-20', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NomC` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`ID`, `NomC`) VALUES
(1, 'BTS SIO SLAM'),
(2, 'BTS SIO SISR'),
(3, 'BTS SIO CPRP');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Matiere` varchar(30) NOT NULL,
  `Classe` int(11) UNSIGNED DEFAULT NULL,
  `Contenu` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `Classe` (`Classe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`ID`, `Matiere`, `Classe`, `Contenu`) VALUES
(2, 'fgergdf', 2, 'sdfgdfg'),
(3, 'Science', 1, 'Science'),
(4, 'Programmation', 2, 'Programmation'),
(5, 'MÃ©ca', 3, 'MÃ©ca');

-- --------------------------------------------------------

--
-- Structure de la table `direction`
--

DROP TABLE IF EXISTS `direction`;
CREATE TABLE IF NOT EXISTS `direction` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL,
  `IDProf` int(11) UNSIGNED DEFAULT NULL,
  `IDeleve` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDProf` (`IDProf`),
  KEY `IDeleve` (`IDeleve`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `direction`
--

INSERT INTO `direction` (`ID`, `Nom`, `Prenom`, `Mail`, `MDP`, `IDProf`, `IDeleve`) VALUES
(1, 'Hébert', 'Margaux', 'margaux@direc.fr', 'test123', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL,
  `Classe` int(11) UNSIGNED NOT NULL,
  `Presence` int(11) UNSIGNED DEFAULT NULL,
  `Retard` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Presence` (`Presence`),
  KEY `Classe` (`Classe`),
  KEY `Presence_2` (`Presence`),
  KEY `Classe_2` (`Classe`),
  KEY `Presence_3` (`Presence`),
  KEY `Classe_3` (`Classe`),
  KEY `Presence_4` (`Presence`),
  KEY `Presence_5` (`Presence`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `Nom`, `Prenom`, `Mail`, `MDP`, `Classe`, `Presence`, `Retard`) VALUES
(1, 'Martin', 'Mistère', 'martin@etu.fr', 'test123', 1, 1, ''),
(2, 'Louis', '14', 'louis@etu.fr', 'test123', 2, NULL, NULL),
(3, 'Karim', 'De Nada', 'karim@etu@.fr', 'test123', 3, NULL, NULL),
(26, 'Hallo', 'La terre', 'halo@etu.fr', 'test123', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL,
  `Classe` int(11) UNSIGNED DEFAULT NULL,
  `PresProf` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PresProf` (`PresProf`),
  KEY `Classe` (`Classe`),
  KEY `PresProf_2` (`PresProf`),
  KEY `Classe_2` (`Classe`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`ID`, `Nom`, `Prenom`, `Mail`, `MDP`, `Classe`, `PresProf`) VALUES
(1, 'Jean', 'De La Fontaine', 'jean@prof.fr', 'test123', 1, '2'),
(2, 'Michel', 'De Caprio', 'michel@prof.fr', 'test123', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `retards`
--

DROP TABLE IF EXISTS `retards`;
CREATE TABLE IF NOT EXISTS `retards` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_retard` varchar(10) COLLATE utf8_bin NOT NULL,
  `minute_retard` int(10) NOT NULL,
  `etudiants_id` int(10) DEFAULT NULL,
  `professeurs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `fk_etudiants_abs` FOREIGN KEY (`etudiants_id`) REFERENCES `etudiants` (`ID`),
  ADD CONSTRAINT `fk_professeurs_abs` FOREIGN KEY (`professeurs_id`) REFERENCES `professeurs` (`ID`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_classe` FOREIGN KEY (`Classe`) REFERENCES `classe` (`ID`);

--
-- Contraintes pour la table `direction`
--
ALTER TABLE `direction`
  ADD CONSTRAINT `idetu` FOREIGN KEY (`IDeleve`) REFERENCES `etudiants` (`ID`),
  ADD CONSTRAINT `idprof` FOREIGN KEY (`IDProf`) REFERENCES `professeurs` (`ID`);

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `cla` FOREIGN KEY (`Classe`) REFERENCES `classe` (`ID`);

--
-- Contraintes pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `class` FOREIGN KEY (`Classe`) REFERENCES `classe` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
