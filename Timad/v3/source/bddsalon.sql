-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Janvier 2017 à 16:22
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddsalon`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `idsalon` int(11) NOT NULL,
  `idpers` int(11) NOT NULL,
  `Com` longtext NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `idpers` int(11) NOT NULL,
  `mdp` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `idsalon` int(11) NOT NULL,
  `News` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `idsalon` int(11) NOT NULL,
  `idpers` int(11) NOT NULL,
  `Note` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `idsalon` int(11) NOT NULL,
  `type` text NOT NULL,
  `prix` int(11) NOT NULL,
  `temps` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE `salon` (
  `idsalon` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Gerant` text NOT NULL,
  `Adresse 1` text NOT NULL,
  `Adresse 2` text NOT NULL,
  `Ville` text NOT NULL,
  `CP` int(11) NOT NULL,
  `Gpslattitude` float NOT NULL,
  `GpsLongitude` float NOT NULL,
  `Mail` text NOT NULL,
  `Tel` int(11) NOT NULL,
  `Site` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salon`
--

INSERT INTO `salon` (`idsalon`, `Nom`, `Gerant`, `Adresse 1`, `Adresse 2`, `Ville`, `CP`, `Gpslattitude`, `GpsLongitude`, `Mail`, `Tel`, `Site`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 12300, 1, 2, 'test', 102030405, 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`idpers`);

--
-- Index pour la table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idsalon`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
