-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 27 Octobre 2019 à 22:23
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `us4`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `ID` int(11) NOT NULL,
  `NomAp` varchar(50) NOT NULL,
  `PrenomAp` varchar(50) NOT NULL,
  `Profil` varchar(50) NOT NULL,
  `TelAp` int(50) NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `Session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `apprenant`
--

INSERT INTO `apprenant` (`ID`, `NomAp`, `PrenomAp`, `Profil`, `TelAp`, `Etat`, `Session`) VALUES
(7, 'Diop', 'Abdoulaye', 'Apprenant', 776641526, 'Presentiel', 'promo2'),
(10, 'Diop', 'Rama', 'AD', 775562342, 'Présentiel', 'Promo2');

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `ID` int(11) NOT NULL,
  `Jour` date NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `choix`
--

INSERT INTO `choix` (`ID`, `Jour`, `Nom`) VALUES
(1, '2019-10-15', 'Hamburger'),
(3, '2019-10-16', 'Spaghetti bolognaise'),
(4, '2019-10-09', 'Hambuger');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `ID` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`ID`, `Login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Nom_plat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`ID`, `Nom_plat`) VALUES
(5, 'Thiébou dieune'),
(6, 'chawarma'),
(7, 'Mafé');

-- --------------------------------------------------------

--
-- Structure de la table `planification`
--

CREATE TABLE `planification` (
  `ID` int(11) NOT NULL,
  `Jour_planif` date NOT NULL,
  `Menu1` varchar(50) NOT NULL,
  `Menu2` varchar(50) NOT NULL,
  `Menu3` varchar(50) NOT NULL,
  `Menu4` varchar(50) NOT NULL,
  `Menu5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `planification`
--

INSERT INTO `planification` (`ID`, `Jour_planif`, `Menu1`, `Menu2`, `Menu3`, `Menu4`, `Menu5`) VALUES
(3, '2019-10-11', 'Hambuger', 'Thiébou dieune', 'Soupe kandia', 'Spaghetti bolognaise', 'couss-couss');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `planification`
--
ALTER TABLE `planification`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `choix`
--
ALTER TABLE `choix`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `planification`
--
ALTER TABLE `planification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
