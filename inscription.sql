-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Novembre 2016 à 11:41
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `event`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `code` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `birthdate` tinytext NOT NULL,
  `cosplay` tinyint(1) NOT NULL,
  `mercredi` tinyint(1) DEFAULT '0',
  `jeudi` tinyint(1) NOT NULL DEFAULT '0',
  `vendredi` tinyint(1) DEFAULT '0',
  `samedi` tinyint(1) NOT NULL DEFAULT '0',
  `dimanche` tinyint(1) NOT NULL DEFAULT '0',
  `validation` tinyint(1) DEFAULT '0',
  `genre` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `prenom`, `nom`, `adresse`, `ville`, `code`, `email`, `birthdate`, `cosplay`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `validation`, `genre`) VALUES
(4, 'Arnold', 'Masselin', '90 rue Lakanal', 'Rueil_Malmaison', '92500', 'nolf@gmail.com', '06/07/1992', 1, 0, 1, 0, 1, 1, 0, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
