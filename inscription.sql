-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Décembre 2016 à 09:27 
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
  `cosplay` varchar(255) DEFAULT NULL, 
  `mercredi` varchar(255) DEFAULT NULL, 
  `jeudi` varchar(255) DEFAULT NULL, 
  `vendredi` varchar(255) DEFAULT NULL, 
  `samedi` varchar(255) DEFAULT NULL, 
  `dimanche` varchar(255) DEFAULT NULL,
  `validation` tinyint(1) DEFAULT '0',
  `genre` tinytext 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `prenom`, `nom`, `adresse`, `ville`, `code`, `email`, `birthdate`, `cosplay`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `validation`, `genre`) VALUES
(8, 'Geraud', 'Masselin', '22 boulvard Jean', 'Cergy', '97282', 'geraud.mas@gmail.com', '06/05/1995', 'non', 'absent', 'present', 'absent', 'present', 'absent', 1, 'M'), 
(9, 'Ars', 'Camille', '9 rue lakanal', 'ST Cloud', '92210', 'arccam@yahoo.fr', '1992', 'oui', 'absent', 'absent', 'present', 'absent', 'present', 0, 'Mme'), 
(10, 'bla', 'bla', 'bla', 'bla', '42215', 'bla@gmail.com', '15/25/1995', 'oui', 'absent', 'absent', 'absent', 'absent', 'present', 2, 'Mme'); 
 
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
