-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 14:11
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base_sportive`
--

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

DROP TABLE IF EXISTS `conseil`;
CREATE TABLE IF NOT EXISTS `conseil` (
  `id_conseil` int(11) NOT NULL AUTO_INCREMENT,
  `conseil` varchar(10) NOT NULL,
  PRIMARY KEY (`id_conseil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `id_programme` int(10) NOT NULL AUTO_INCREMENT,
  `type_programme` varchar(30) NOT NULL,
  PRIMARY KEY (`id_programme`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `programme`
--

INSERT INTO `programme` (`id_programme`, `type_programme`) VALUES
(1, 'tonic'),
(2, 'intensif'),
(3, 'forme'),
(4, 'tonicintensifforme'),
(5, 'tonicintensif'),
(6, 'tonicforme'),
(7, 'intensifforme');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_programme` int(10) NOT NULL,
  `imc` int(20) NOT NULL,
  `pseudo` varchar(10) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `id_programme`, `imc`, `pseudo`, `motdepasse`) VALUES
(10, 2, 24, 'lll', '123'),
(9, 2, 24, 'lll', '123'),
(8, 2, 24, 'caca', '123'),
(7, 2, 24, 'mathis', '123'),
(11, 2, 24, 'lll', '123'),
(12, 2, 24, 'ddd', 'aaa'),
(13, 2, 24, 'ddd', 'aaa'),
(14, 2, 24, 'ddd', 'aaa'),
(15, 2, 24, 'ddd', 'aaa'),
(16, 2, 24, 'aaa', '123'),
(17, 2, 24, 'aaa', '123'),
(18, 2, 24, 'aaa', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
