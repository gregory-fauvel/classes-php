-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 fév. 2020 à 18:04
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `classe`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `firstname`, `lastname`) VALUES
(1, 'greg', '$2y$10$k3y3rKnkm8/qy24GuuLCyO96USY7KQU.ldlBv9uPIOcHQEQFaPAiG', 'greg@gmail.com', 'greg', 'fauvel'),
(2, 'GREG18', '$2y$10$yzrlLPLP7pQ/gXn59neitOcmeDOqKY5FITB.TXPRrO8UYxBzQ7/M6', 'fauvel411@gmail.com', 'sam', 'sam'),
(4, 'test', '$2y$10$dK70kuLdRYbL.q3HzFFIqOIN1p6RiHOVNikneJysRD39MOgVQyjMS', 'test', 'test', 'test'),
(6, 'admin', '$2y$10$3l6XKBlYmeAd/EOAVuaP5OFvAkwI.ZswXz5C7DHnvxXcYVqxCUduO', 'fauvel411@gmail.com', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
