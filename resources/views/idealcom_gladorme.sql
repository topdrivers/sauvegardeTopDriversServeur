-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 10 fév. 2018 à 10:24
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `idealcom_gladorme`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id_demande` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `societe` varchar(32) NOT NULL,
  `msg` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id_demande`, `type`, `nom`, `prenom`, `email`, `tel`, `societe`, `msg`, `ip`, `date`) VALUES
(1, 'site', 'Ladorme', 'Guillaume', 'mail@gladorme.fr', '0682209302', 'Gladorme', 'Je souhaiterai commander un site vitrine pour exposer mes peintures.', '127.0.0.1', 1518106314);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `email`, `password`) VALUES
(1, 'demo@demo.fr', '$2y$10$Ip3l.DCGq9mh5AQvuTyV8uMEV/CyH0Jqc99f9bDS7cAOJXO5f.Sf2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
