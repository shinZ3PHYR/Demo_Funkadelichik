-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Octobre 2015 à 15:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `f@kebase`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(11) NOT NULL,
  `Prenom` varchar(11) NOT NULL,
  `Adresse` text NOT NULL,
  `CoordLat` float NOT NULL,
  `CoordLong` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`ID`, `Nom`, `Prenom`, `Adresse`, `CoordLat`, `CoordLong`) VALUES
(1, 'Reed', 'Lou', 'Somewhere in the sky', 0, 0),
(2, 'Nagato', 'Yuki', 'Somewhere In Tokyo', 35.6895, 139.692),
(3, 'Suzumiya', 'Haruhi', 'Somewhere in Japan', 34.7375, 135.342),
(4, 'Allard', 'Florian', '4 allee des coquetiers 93250 VILLEMOMBLE', 48.8931, 2.49956);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
