-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 sep. 2021 à 11:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crm jure`
--

-- --------------------------------------------------------

--
-- Structure de la table `conclure`
--

DROP TABLE IF EXISTS `conclure`;
CREATE TABLE IF NOT EXISTS `conclure` (
  `ID_SessionExamen` char(5) NOT NULL,
  `ID_formation` char(5) NOT NULL,
  PRIMARY KEY (`ID_SessionExamen`,`ID_formation`),
  KEY `Conclure_Formation0_FK` (`ID_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` char(5) NOT NULL,
  `Nom_contact` char(25) NOT NULL,
  `Prenom_contact` char(25) DEFAULT NULL,
  `Tel_contact` int(11) NOT NULL,
  `Tel2_contact` int(11) DEFAULT NULL,
  `Mail_contact` char(50) DEFAULT NULL,
  `NumeroAdresse_Contact` int(11) DEFAULT NULL,
  `LibelleAdresse_Contact` char(75) DEFAULT NULL,
  `ComplementAdresse_Contact` char(75) DEFAULT NULL,
  `VilleAdresse_Contact` char(75) DEFAULT NULL,
  `CodePostalAdresse_Contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID_Contact`, `Nom_contact`, `Prenom_contact`, `Tel_contact`, `Tel2_contact`, `Mail_contact`, `NumeroAdresse_Contact`, `LibelleAdresse_Contact`, `ComplementAdresse_Contact`, `VilleAdresse_Contact`, `CodePostalAdresse_Contact`) VALUES
('BEBER', 'Henry-Moisi', 'Bernard', 630303030, 231300330, 'beber.sauvelemonde@accolada.fr', 3, 'Rue du bullshit', '3E gauche', 'PARIS', 75000),
('BLUE', 'Bleue', 'Fleur', 636373839, 231323334, 'fleur.bleue@youpi.com', 55, 'Bld du gazon', 'Allée B', 'Jardin sur Erdre', 65321),
('JARDI', 'Jardylalaland', '', 2757575, 0, 'ca.existe.pas@newyork.times.co', 6, 'Rue du jardin', '', 'Caen', 14000);

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `ID_Habilitation` char(5) NOT NULL,
  `ID_Jure` char(5) NOT NULL,
  PRIMARY KEY (`ID_Habilitation`,`ID_Jure`),
  KEY `Detenir_Jure0_FK` (`ID_Jure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detenir`
--

INSERT INTO `detenir` (`ID_Habilitation`, `ID_Jure`) VALUES
('BOTAN', 'JFLEU');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID_Entreprise` char(5) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_Entreprise`),
  KEY `Entreprise_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`ID_Entreprise`, `ID_Contact`) VALUES
('EJARD', 'JARDI');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `ID_formateur` char(5) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_formateur`),
  KEY `Formateur_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`ID_formateur`, `ID_Contact`) VALUES
('FBEBE', 'BEBER');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ID_formation` char(5) NOT NULL,
  `Libelle_Formation` char(255) NOT NULL,
  `Date_DebutFormation` date NOT NULL,
  `Date_FinFormation` date NOT NULL,
  `ID_formateur` char(5) NOT NULL,
  `ID_formationPattern` char(5) NOT NULL,
  PRIMARY KEY (`ID_formation`),
  KEY `Formation_Formateur_FK` (`ID_formateur`),
  KEY `Formation_FormationPattern0_FK` (`ID_formationPattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`ID_formation`, `Libelle_Formation`, `Date_DebutFormation`, `Date_FinFormation`, `ID_formateur`, `ID_formationPattern`) VALUES
('1BISO', 'FOR-BISOU-01-1969', '1969-01-01', '1970-01-01', 'FBEBE', 'BISOU');

-- --------------------------------------------------------

--
-- Structure de la table `formationpattern`
--

DROP TABLE IF EXISTS `formationpattern`;
CREATE TABLE IF NOT EXISTS `formationpattern` (
  `ID_formationPattern` char(5) NOT NULL,
  `Libelle_formationPatern` char(255) NOT NULL,
  `Descriptif_formation` char(255) NOT NULL,
  PRIMARY KEY (`ID_formationPattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formationpattern`
--

INSERT INTO `formationpattern` (`ID_formationPattern`, `Libelle_formationPatern`, `Descriptif_formation`) VALUES
('BISOU', 'Compétences de marque d\'affection cycle 3', 'Module 1 : Déontologie du Big bisou\r\nModule 2 : Les bisounours, mythe ou réalité ?\r\nModule 3 : Le french kiss en entreprise\r\nModule 4 : Potentiel de succion à l\'international'),
('TAPMA', 'Space claquettes & mariachi', 'Module 1 : tapeti-tapeta en apesanteur\r\nModule 2 : turbo maracas sur autoroute\r\nModule 3 : claquettes tout terrain\r\nModule 4 : guitare hero sur cactus');

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `ID_Habilitation` char(5) NOT NULL,
  `Libelle_Habilitation` char(50) NOT NULL,
  `DebutValidite_Habilitation` date NOT NULL,
  `FinValidite_Habilitation` date NOT NULL,
  `VisibleVALCES` tinyint(1) NOT NULL,
  `VisibleCERES` tinyint(1) NOT NULL,
  `EnAttenteValidation` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Habilitation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `habilitation`
--

INSERT INTO `habilitation` (`ID_Habilitation`, `Libelle_Habilitation`, `DebutValidite_Habilitation`, `FinValidite_Habilitation`, `VisibleVALCES`, `VisibleCERES`, `EnAttenteValidation`) VALUES
('BOTAN', 'Botanique et biscuit vegan', '1967-05-12', '1994-06-01', 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `jure`
--

DROP TABLE IF EXISTS `jure`;
CREATE TABLE IF NOT EXISTS `jure` (
  `ID_Jure` char(5) NOT NULL,
  `Specialite_Jure` char(50) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_Jure`),
  KEY `Jure_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jure`
--

INSERT INTO `jure` (`ID_Jure`, `Specialite_Jure`, `ID_Contact`) VALUES
('JFLEU', 'Jardinage', 'BLUE');

-- --------------------------------------------------------

--
-- Structure de la table `mailpattern`
--

DROP TABLE IF EXISTS `mailpattern`;
CREATE TABLE IF NOT EXISTS `mailpattern` (
  `Libelle_MailPattern` char(255) NOT NULL,
  `Content_MailPatern` char(255) NOT NULL,
  PRIMARY KEY (`Libelle_MailPattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mailpattern`
--

INSERT INTO `mailpattern` (`Libelle_MailPattern`, `Content_MailPatern`) VALUES
('Commencer un nouveau modèle de mail', 'Bonjour,\r\n\r\nXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXX\r\nXXXXXXXXXXXXXXXXXXXX\r\n\r\nCordialement,\r\n\r\nYYY\r\n\r\n'),
('Information de session d\'examen XXX', 'Bonjour,\r\n\r\nVeuillez trouver en PJ les informations relatives à la session d\'examen\r\nXXX\r\n\r\nCordialement,\r\n\r\nYYY'),
('Preparation de session', 'Bonjour,\r\n\r\nLa session \r\nXXX\r\nde la formation\r\nYYY\r\naura lieu du :\r\nZZZ\r\nau\r\nAAA\r\nMerci de mettre en place les équipements appropriés.\r\n\r\nCordialement,\r\n\r\nBBB'),
('Proposition de participation à un jury', 'Bonjour,\r\n\r\nLe formateur\r\nXXX\r\nvous propose de participer au jury de la formation\r\nZZZ\r\nLa session d\'examen se déroulera du\r\nYYY\r\nau\r\nAAA\r\n\r\nMerci de confirmer votre venu avant le\r\nBBB\r\nCordialement,\r\nXXX'),
('Recrutement de jurés', 'Bonjour,\r\n\r\nMerci de démarcher en recrutement les personnes suivantes :\r\nAAAnom\r\nAABnum\r\nAACmail\r\n\r\nBBAnom\r\nBBBnum\r\nBBCmail\r\n\r\nCCAnom\r\nCCBnum\r\nCCCmail\r\n\r\nCordialement,\r\n\r\nXXX');

-- --------------------------------------------------------

--
-- Structure de la table `proposer`
--

DROP TABLE IF EXISTS `proposer`;
CREATE TABLE IF NOT EXISTS `proposer` (
  `ID_Entreprise` char(5) NOT NULL,
  `ID_Jure` char(5) NOT NULL,
  PRIMARY KEY (`ID_Entreprise`,`ID_Jure`),
  KEY `Proposer_Jure0_FK` (`ID_Jure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proposer`
--

INSERT INTO `proposer` (`ID_Entreprise`, `ID_Jure`) VALUES
('EJARD', 'JFLEU');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `Libelle_Service` char(50) NOT NULL,
  `Mail_Service` char(50) NOT NULL,
  PRIMARY KEY (`Libelle_Service`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Libelle_Service`, `Mail_Service`) VALUES
('Direction des formations', 'DIR.chef@academou.fr'),
('Service préparation des examens', 'SEC.prea-exam@academou.fr'),
('Service Recrutement', 'RH.recrutement@academou.fr');

-- --------------------------------------------------------

--
-- Structure de la table `sessionexamen`
--

DROP TABLE IF EXISTS `sessionexamen`;
CREATE TABLE IF NOT EXISTS `sessionexamen` (
  `ID_SessionExamen` char(5) NOT NULL,
  `Libelle_SessionExamen` char(50) NOT NULL,
  `Debut_SessionExamen` date NOT NULL,
  `Fin_SessionExamen` date NOT NULL,
  PRIMARY KEY (`ID_SessionExamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sessionexamen`
--

INSERT INTO `sessionexamen` (`ID_SessionExamen`, `Libelle_SessionExamen`, `Debut_SessionExamen`, `Fin_SessionExamen`) VALUES
('01BIS', 'Examen 1 - formation 1 - BISOU - 1969', '1969-08-01', '1969-08-04');

-- --------------------------------------------------------

--
-- Structure de la table `statufier`
--

DROP TABLE IF EXISTS `statufier`;
CREATE TABLE IF NOT EXISTS `statufier` (
  `ID_Jure` char(5) NOT NULL,
  `ID_SessionExamen` char(5) NOT NULL,
  `Commentaire` char(5) NOT NULL,
  `Statut` char(5) NOT NULL,
  PRIMARY KEY (`ID_Jure`,`ID_SessionExamen`),
  KEY `Statufier_SessionExamen0_FK` (`ID_SessionExamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statufier`
--

INSERT INTO `statufier` (`ID_Jure`, `ID_SessionExamen`, `Commentaire`, `Statut`) VALUES
('JFLEU', '01BIS', '', 'OK');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom_Utilisateur` char(50) NOT NULL,
  `MotDePasse_Utilisateur` char(50) NOT NULL,
  `Statut_Utilisateur` char(50) NOT NULL,
  PRIMARY KEY (`ID_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_Utilisateur`, `Nom_Utilisateur`, `MotDePasse_Utilisateur`, `Statut_Utilisateur`) VALUES
(55324, 'MECHANT_Bernard', '', 'formateur'),
(66548, 'SYMPA_Francis', '', 'formateur'),
(77986, 'STATUE_Marcelle', '', 'formateur'),
(88654, 'MOU_Gislaine', '', 'Admin'),
(99326, 'MOU_Patrick', '', 'Admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `Entreprise_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);

--
-- Contraintes pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `Formateur_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);

--
-- Contraintes pour la table `jure`
--
ALTER TABLE `jure`
  ADD CONSTRAINT `Jure_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
