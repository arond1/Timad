-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Mars 2017 à 13:49
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salon`
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

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`idsalon`, `idpers`, `Com`, `Date`) VALUES
(1, 2, 'Le service de se salon est tout simplement hors du commun, je le recommande chaudement à qui veut une belle manucure et un coupe de cheveux sublime', '2017-03-02');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `idpers` int(11) NOT NULL,
  `mdp` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`idpers`, `mdp`, `mail`) VALUES
(2, '1234', 'poubelle170000@gmail.com'),
(1, 'gerant', 'toto@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE `salon` (
  `idsalon` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Adresse 1` text NOT NULL,
  `Ville` text NOT NULL,
  `CP` int(11) NOT NULL,
  `Gpslattitude` float NOT NULL,
  `GpsLongitude` float NOT NULL,
  `Tel` int(11) NOT NULL,
  `Prix` int(11) NOT NULL DEFAULT '1',
  `idgerant` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salon`
--

INSERT INTO `salon` (`idsalon`, `Nom`, `Adresse 1`, `Ville`, `CP`, `Gpslattitude`, `GpsLongitude`, `Tel`, `Prix`, `idgerant`) VALUES
(1, 'Beauté fatale', '75 avenue Foch', 'Paris', 75300, 1.22458, 2.55738, 615817483, 37, 1);

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
