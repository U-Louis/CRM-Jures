-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2021 at 11:42 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_jures`
--

-- --------------------------------------------------------

--
-- Table structure for table `conclure`
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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` char(5) NOT NULL,
  `Nom_contact` char(25) NOT NULL,
  `Prenom_contact` char(25) DEFAULT NULL,
  `Tel_contact` int(11) DEFAULT NULL,
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
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID_Contact`, `Nom_contact`, `Prenom_contact`, `Tel_contact`, `Tel2_contact`, `Mail_contact`, `NumeroAdresse_Contact`, `LibelleAdresse_Contact`, `ComplementAdresse_Contact`, `VilleAdresse_Contact`, `CodePostalAdresse_Contact`) VALUES
('1', 'Rapace', 'Ludovic', 201020405, 601020405, 'r.ludovic@gmail.com', 10, 'rue des marrons', '', 'Orrinshire', 64891),
('10', 'Dupuy', 'Gaétan ', 201020490, 601020490, 'd.gaetan@gmail.com', 16, 'avenue des cavendish', '', 'BananawarholLand', 89130),
('11', 'Rémy', 'Richard', 204620405, 604620405, 'r.richard@gmail.com', 21, 'boulevard des mariés', '', 'Marriedland', 10000),
('12', 'Gérin', 'Côme', 266020405, 666020405, 'g.come@gmail.com', 89, 'rue des biscuits', '', 'Caelkirk', 53530),
('13', 'Loup', 'Isaac', 204112405, 604112405, 'l.isaac@gmail.com', 29, 'rue des gels étranges', '', 'Tarmsworth', 64720),
('14', 'Rousselot', 'Noël', 201020494, 601020494, 'r.noel@gmail.com', 19, 'rue des kiwis', '', 'Arkkukari', 45987),
('15', 'Arsenault', 'Jean-Jacques', 201020492, 601020492, 'a.jj@gmail.com', 17, 'impasse des blanquettes', '', 'Oss', 117),
('16', 'Joubert', 'Edouard', 201020489, 601020489, 'j.edouard@gmail.com', 24, 'rue des épines', '', 'Calcheth', 51200),
('17', 'Mazet', 'Boniface', 201028477, 601028477, 'm.boniface@gmail.com', 31, 'rue des malabars', '', 'Everwinter', 12530),
('18', 'Renou', 'Natanaël', 201020436, 601020436, 'r.natanael@gmail.com', 12, 'impasse des acacias', '', 'Rochdale', 35210),
('19', 'Bombelles', 'Alceste', 201020474, 601020474, 'b.alceste@gmail.com', 50, 'rue des tonnelets', '', 'Pinnella', 14530),
('2', 'Brunet', 'Bertrand ', 202020405, 602020405, 'b.brunet@gmail.com', 13, 'rue des fraisiers', '', 'Burrafirth', 74980),
('20', 'Thibodeau', 'Ladislas', 201020472, 601020472, 't.ladislas@gmail.com', 14, 'impasse des chacals', '', 'Ramshorn', 21320),
('21', 'Raoult', 'Michaël ', 201020466, 601020466, 'r.michael@gmail.com', 30, 'rue des plaisirs sombres', '', 'Fanfoss', 14131),
('22', 'Arceneaux', 'Dimitri', 201020468, 601020468, 'a.dimitri@gmail.com', 55, 'boulevard de la fièvre', '', 'Acomb', 62741),
('23', 'Thibault', 'Jean ', 201020469, 601020469, 't.jean@gmail.com', 12, 'rue des marmusots', '', 'Easthallow', 85260),
('24', 'Reverdin', 'Alex', 201020470, 601020470, 'r.alex@gmail.com', 2, 'rue des mulots échancrés', '', 'Iyesgarth', 13702),
('25', 'Dutoit', 'Augustin ', 201020471, 601020471, 'd.augustin@gmail.com', 13, 'rue des lingots d’or', '', 'Kald', 24950),
('26', 'Dupuy', 'Denis ', 201020472, 601020472, 'd.denis@gmail.com', 10, 'boulevard du boudin', '', 'Penzance', 70830),
('27', 'Nicollier', 'Didier ', 201020473, 601020473, 'n.didier@gmail.com', 21, 'rue des boulangeries', '', 'Penzance', 70830),
('28', 'Saint-Pierre', 'Jean-Michel', 201020453, 601020453, 's.jm@gmail.com', 64, 'rue des perles grises', '', 'Easthallow', 85260),
('29', 'Didier', 'Gaston ', 201020474, 601020474, 'd.gaston_du_14@gmail.com', 3, 'rue des jacinthes', '', 'Orrinshire', 64891),
('3', 'Gaumont', 'Louis ', 201023405, 601023405, 'g.louis@gmail.com', 24, 'rue des baies noires', '', 'Nuxvar', 53120),
('30', 'Pélissier', 'Grüt', 201020475, 601020475, 'p.grut@gmail.com', 12, 'boulevard des canadiens', '', 'Ilragorn', 34120),
('31', 'Loupe', 'Estelle ', 201020476, 601020476, 'l.estelle@gmail.com', 17, 'rue des marmusots', '', 'Easthallow', 85260),
('32', 'Donnet', 'Maïté ', 201020411, 601020411, 'd.maite@gmail.com', 12, 'rue des concombres', '', 'Nuxvar', 53120),
('33', 'Renaudin', 'Roxane ', 201020478, 601020478, 'r.roxane@gmail.com', 16, 'impasse des mortadelles', '', 'Samoussaland', 10231),
('34', 'Duchamp', 'Monique ', 201020479, 601020479, 'd.monique@gmail.com', 15, 'rue des concombres', '', 'Nuxvar', 53120),
('35', 'Tourneur', 'Patricia ', 201020480, 601020480, 't.patricia@gmail.com', 12, 'rue de la défaite', '', 'Pinnella', 14530),
('36', 'Kléber', 'Nadège ', 201020481, 601020481, 'k.nadege@gmail.com', 13, 'impasses de l’ivresse', '', 'Pinnella', 14530),
('37', 'Trintignant', 'Eugénie ', 201020482, 601020482, 't.eugenie@gmail.com', 21, 'boulevard des mariés', '', 'Marriedland', 10000),
('38', 'Delisle', 'Léone ', 201020483, 601020483, 'd.leone@gmail.com', 4, 'rue des myrtilles', '', 'Ballachulish', 45632),
('39', 'Silvestre', 'Élisa ', 201020484, 601020484, 's.elisa@gmail.com', 5, 'rue des oranges', '', 'Llanybydder', 94820),
('4', 'Peltier', 'Gaston ', 203020405, 601023405, 'p.gaston@gmail.com', 32, 'boulevard des canadiens', '', 'Ilragorn', 34120),
('40', 'Courtet', 'Nicoline ', 201020485, 601020485, 'c.nicoline@gmail.com', 16, 'boulevard des mandarines', '', 'Llanybydder', 94820),
('41', 'Bissonnette', 'Flora ', 201020486, 601020486, 'b.flora@gmail.com', 13, 'rue des pêches blanches', '', 'Llanybydder', 94820),
('42', 'DeVilliers', 'Nadège ', 201020405, 601020405, 'd.nadege_la_bg@gmail.com', 21, 'impasse des péons', '', 'Orgrimmar', 53781),
('43', 'Crozier', 'France ', 203120405, 603120405, 'c.france@gmail.com', 12, 'rue du puits de soleil', '', 'Lune-d’argent', 94862),
('44', 'Paquin', 'Dorothée ', 245020405, 645020405, 'p.dorothee@gmail.com', 14, 'rue des quartiers marchands', '', 'Fossoyeuse', 1234),
('45', 'Duval', 'Isabelle', 201093305, 601093305, 'd.isabelle@gmail.com', 20, 'rue des boomers', '', 'Mossley', 55564),
('46', 'Brousseau', 'Micheline ', 278920405, 678920405, 'b.micheline@gmail.com', 10, 'impasse des chandeliers', '', 'Snowbush', 24446),
('47', 'Touchard', 'Pascale', 201070406, 601070406, 't.pascale@gmail.com', 95, 'place des pailles d’or', '', 'Lu', 97978),
('48', 'Cortot', 'Léa', 201420409, 601420409, 'c.lea18@gmail.com', 81, 'place des bruits roses', '', 'Kshhh', 63222),
('49', 'Plantier', 'Rolande', 240440405, 640440405, 'p.rolande@gmail.com', 81, 'place des bruits blancs', '', 'Pshhh', 63444),
('5', 'Barnier', 'Nicolas ', 201020431, 601020431, 'b.nicolas@gmail.com', 15, 'boulevard des cauchemars', '', 'Mirefield', 12530),
('50', 'Piaget', 'Michèle ', 266021405, 666021405, 'p.michelee@gmail.com', 92, 'impasse des bonbons', '', 'Carambar', 14359),
('51', 'Trintignant', 'Enzo ', 266600405, 666600405, 't.enzo@gmail.com', 89, 'rue des clowns tristes', '', 'Claethorpes', 77871),
('52', 'Dior', 'Élisée ', 201030300, 601030300, 'd.elisee@gmail.com', 90, 'impasse de la mare aux canards', '', 'Boum', 89869),
('53', 'Blanchet', 'Jean-François', 222220405, 622220405, 'b.jf@gmail.com', 81, 'rue des drôles d’odeurs', '', 'Kipu', 71113),
('54', 'Gouin', 'Gaëtan ', 211120405, 611120405, 'g.gaetan@laposte.net', 10, 'rue des cucurbitacés', '', 'Aberdyfi', 51490),
('55', 'Alméras', 'Égide ', 201021111, 601021111, 'a.egide@gmail.com', 6, 'rue des baleines', '', 'Whalesland', 61646),
('56', 'Lortie', 'Gaël ', 201045614, 601045614, 'l.gael@aol.com', 13, 'rue des opinel', '', 'Sacoupe', 93201),
('57', 'Jacquier', 'Maximilien ', 299999405, 699999405, 'j.maximilien@gmail.com', 11, 'rue tartelettes', '', 'Sacoupe', 93201),
('58', 'Vaugeois', 'Hervé ', 208888405, 608888405, 'v.herve@gmail.com', 7, 'allée des fougères', '', 'Phizoul', 58575),
('59', 'Boutet', 'Pierre-Marie', 201620775, 601620775, 'b.pm@wanadoo.fr', 8, 'allées des demi-chaises', '', 'Boum', 99871),
('6', 'Dujardin', 'Jean-Baptiste', 201710405, 601710405, 'd.jb@gmail.com', 22, 'rue des framboises', '', 'Chepstow', 45620),
('60', 'Bachelot', 'Jacques ', 205510405, 605510405, 'b.jacques@gmail.com', 10, 'rue de la chute', '', 'Boum', 99871),
('61', 'Masson', 'Charles ', 299999991, 699999991, 'm.charles@gmail.com', 24, 'rue de l’ennui', '', 'Boum', 99871),
('62', 'Deniau', 'Guy ', 201465043, 601465043, 'd.guy@gmail.com', 13, 'avenue des champions', '', 'Boum', 51465),
('63', 'Delon', 'Stanislas ', 201020300, 601020300, 'd.stanislas@gmail.com', 10, 'rue zizou', '', 'Sacoupe', 93201),
('64', 'Bourcier', 'Raymond ', 201110407, 601110407, 'b.raymond@gmail.com', 1, 'rue des classeurs', '', 'Zumork', 14230),
('65', 'Lémery', 'Alban ', 231310405, 631310405, 'lemery.a@gmail.com', 7, 'rue des renards', '', 'Ruseland', 33312),
('66', 'Beauvais', 'Catherine ', 213132005, 613132005, 'beau.cath@gmail.com', 3, 'impasse des charbonniers', '', 'Mirfieldz', 13156),
('67', 'Poullain', 'Aurore ', 200000408, 600000408, 'p.aurore@gmail.com', 4, 'rue des champs', '', 'Troutberk', 77477),
('68', 'Millet', 'Éva ', 201070707, 601070707, 'millet.eva@copaindavant.fr', 2, 'rue des sabres lasers', '', 'Vador', 11211),
('69', 'Dembélé', 'Céleste ', 203435333, 603435333, 'd.celeste@gmail.com', 91, 'rue des algues', '', 'Zumork', 14230),
('7', 'Delafose', 'Omer ', 271020405, 671020405, 'd.omer@gmail.com', 10, 'rue des beaux pieds', '', 'Edinburgh', 12460),
('70', 'Aubert', 'Victoria ', 206020291, 606020291, 'aubert.victoria@gmail.com', 4, 'rue des gros gibiers', '', 'Zumork', 14230),
('8', 'Peltier', 'Robert ', 203050405, 603050405, 'p.robert@gmail.com', 11, 'rue des galettes', '', 'Pinnella', 14530),
('9', 'Baillairgé', 'Gabriel ', 244020405, 644020405, 'b.gabriel@hotmail.fr', 14, 'impasse des cookies', '', 'Caelkirk', 53530),
('BEBER', 'Henry-Moisi', 'Bernard', 630303030, 231300330, 'beber.sauvelemonde@accolada.fr', 3, 'Rue du bullshit', '3E gauche', 'PARIS', 75000),
('BLUE', 'Bleue', 'Fleur', 636373839, 231323334, 'fleur.bleue@youpi.com', 55, 'Bld du gazon', 'Allée B', 'Jardin sur Erdre', 65321),
('JARDI', 'Jardylalaland', '', 2757575, 0, 'ca.existe.pas@newyork.times.co', 6, 'Rue du jardin', '', 'Caen', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `correspondre`
--

DROP TABLE IF EXISTS `correspondre`;
CREATE TABLE IF NOT EXISTS `correspondre` (
  `ID_formationPattern` char(5) NOT NULL,
  `ID_Habilitation` char(5) NOT NULL,
  PRIMARY KEY (`ID_formationPattern`,`ID_Habilitation`),
  KEY `correspondre_Habilitation0_FK` (`ID_Habilitation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detenir`
--

DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `ID_Habilitation` char(5) NOT NULL,
  `ID_Jure` char(5) NOT NULL,
  PRIMARY KEY (`ID_Habilitation`,`ID_Jure`),
  KEY `Detenir_Jure0_FK` (`ID_Jure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID_Entreprise` char(5) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_Entreprise`),
  KEY `Entreprise_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `ID_formateur` char(5) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_formateur`),
  KEY `Formateur_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ID_formation` char(5) NOT NULL,
  `Libelle_Formation` char(255) NOT NULL,
  `Date_DebutFormation` date DEFAULT NULL,
  `Date_FinFormation` date DEFAULT NULL,
  `ID_formateur` char(5) NOT NULL,
  `ID_formationPattern` char(5) NOT NULL,
  PRIMARY KEY (`ID_formation`),
  KEY `Formation_Formateur_FK` (`ID_formateur`),
  KEY `Formation_FormationPattern0_FK` (`ID_formationPattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formationpattern`
--

DROP TABLE IF EXISTS `formationpattern`;
CREATE TABLE IF NOT EXISTS `formationpattern` (
  `ID_formationPattern` char(5) NOT NULL,
  `Libelle_formationPatern` char(255) NOT NULL,
  `Descriptif_formation` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID_formationPattern`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `ID_Habilitation` char(5) NOT NULL,
  `Libelle_Habilitation` char(50) NOT NULL,
  `DebutValidite_Habilitation` date DEFAULT NULL,
  `FinValidite_Habilitation` date DEFAULT NULL,
  `VisibleVALCES` tinyint(1) NOT NULL,
  `VisibleCERES` tinyint(1) NOT NULL,
  `EnAttenteValidation` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Habilitation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jure`
--

DROP TABLE IF EXISTS `jure`;
CREATE TABLE IF NOT EXISTS `jure` (
  `ID_Jure` char(5) NOT NULL,
  `ID_Contact` char(5) NOT NULL,
  PRIMARY KEY (`ID_Jure`),
  KEY `Jure_Contact_FK` (`ID_Contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessionexamen`
--

DROP TABLE IF EXISTS `sessionexamen`;
CREATE TABLE IF NOT EXISTS `sessionexamen` (
  `ID_SessionExamen` char(5) NOT NULL,
  `Libelle_SessionExamen` char(50) NOT NULL,
  `Debut_SessionExamen` date DEFAULT NULL,
  `Fin_SessionExamen` date DEFAULT NULL,
  PRIMARY KEY (`ID_SessionExamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialiste`
--

DROP TABLE IF EXISTS `specialiste`;
CREATE TABLE IF NOT EXISTS `specialiste` (
  `ID_Jure` char(5) NOT NULL,
  `libelle_specialite` char(50) NOT NULL,
  PRIMARY KEY (`ID_Jure`,`libelle_specialite`),
  KEY `specialiste_specialite0_FK` (`libelle_specialite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `libelle_specialite` char(50) NOT NULL,
  PRIMARY KEY (`libelle_specialite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `statufier`
--

DROP TABLE IF EXISTS `statufier`;
CREATE TABLE IF NOT EXISTS `statufier` (
  `ID_Jure` char(5) NOT NULL,
  `ID_SessionExamen` char(5) NOT NULL,
  `Commentaire` char(5) DEFAULT NULL,
  `Statut` char(5) NOT NULL,
  PRIMARY KEY (`ID_Jure`,`ID_SessionExamen`),
  KEY `Statufier_SessionExamen0_FK` (`ID_SessionExamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `travailler`
--

DROP TABLE IF EXISTS `travailler`;
CREATE TABLE IF NOT EXISTS `travailler` (
  `ID_Entreprise` char(5) NOT NULL,
  `ID_Jure` char(5) NOT NULL,
  PRIMARY KEY (`ID_Entreprise`,`ID_Jure`),
  KEY `Travailler_Jure0_FK` (`ID_Jure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom_Utilisateur` char(50) NOT NULL,
  `MotDePasse_Utilisateur` char(50) DEFAULT NULL,
  `Statut_Utilisateur` char(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conclure`
--
ALTER TABLE `conclure`
  ADD CONSTRAINT `Conclure_Formation0_FK` FOREIGN KEY (`ID_formation`) REFERENCES `formation` (`ID_formation`),
  ADD CONSTRAINT `Conclure_SessionExamen_FK` FOREIGN KEY (`ID_SessionExamen`) REFERENCES `sessionexamen` (`ID_SessionExamen`);

--
-- Constraints for table `correspondre`
--
ALTER TABLE `correspondre`
  ADD CONSTRAINT `correspondre_FormationPattern_FK` FOREIGN KEY (`ID_formationPattern`) REFERENCES `formationpattern` (`ID_formationPattern`),
  ADD CONSTRAINT `correspondre_Habilitation0_FK` FOREIGN KEY (`ID_Habilitation`) REFERENCES `habilitation` (`ID_Habilitation`);

--
-- Constraints for table `detenir`
--
ALTER TABLE `detenir`
  ADD CONSTRAINT `Detenir_Habilitation_FK` FOREIGN KEY (`ID_Habilitation`) REFERENCES `habilitation` (`ID_Habilitation`),
  ADD CONSTRAINT `Detenir_Jure0_FK` FOREIGN KEY (`ID_Jure`) REFERENCES `jure` (`ID_Jure`);

--
-- Constraints for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `Entreprise_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);

--
-- Constraints for table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `Formateur_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `Formation_Formateur_FK` FOREIGN KEY (`ID_formateur`) REFERENCES `formateur` (`ID_formateur`),
  ADD CONSTRAINT `Formation_FormationPattern0_FK` FOREIGN KEY (`ID_formationPattern`) REFERENCES `formationpattern` (`ID_formationPattern`);

--
-- Constraints for table `jure`
--
ALTER TABLE `jure`
  ADD CONSTRAINT `Jure_Contact_FK` FOREIGN KEY (`ID_Contact`) REFERENCES `contact` (`ID_Contact`);

--
-- Constraints for table `specialiste`
--
ALTER TABLE `specialiste`
  ADD CONSTRAINT `specialiste_Jure_FK` FOREIGN KEY (`ID_Jure`) REFERENCES `jure` (`ID_Jure`),
  ADD CONSTRAINT `specialiste_specialite0_FK` FOREIGN KEY (`libelle_specialite`) REFERENCES `specialite` (`libelle_specialite`);

--
-- Constraints for table `statufier`
--
ALTER TABLE `statufier`
  ADD CONSTRAINT `Statufier_Jure_FK` FOREIGN KEY (`ID_Jure`) REFERENCES `jure` (`ID_Jure`),
  ADD CONSTRAINT `Statufier_SessionExamen0_FK` FOREIGN KEY (`ID_SessionExamen`) REFERENCES `sessionexamen` (`ID_SessionExamen`);

--
-- Constraints for table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `Travailler_Entreprise_FK` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`),
  ADD CONSTRAINT `Travailler_Jure0_FK` FOREIGN KEY (`ID_Jure`) REFERENCES `jure` (`ID_Jure`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
