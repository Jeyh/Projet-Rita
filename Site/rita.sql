-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 17 Janvier 2014 à 07:41
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `rita`
--
CREATE DATABASE IF NOT EXISTS `rita` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rita`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `IDCat` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Nom`, `Image`, `IDCat`) VALUES
(1, 'Vehicule', './images/Categories/vehicule.jpg', -1),
(2, 'Electronique', './images/Categories/electronique.jpg', -1),
(3, 'Mobilier', './images/Categories/mobilier.jpg', -1),
(4, 'Divertissement', './images/Categories/divertissement.jpg', -1),
(5, 'DeuxRoues', './images/Categories/deuxroues.jpg', 1),
(6, 'QuatreRoues', './images/Categories/quatreroues.jpg', 1),
(7, 'Musique', './images/Categories/musique.jpg', 4),
(8, 'Decoration', './images/Categories/decoration.jpg', 3),
(9, 'Vaiselle', './images/Categories/vaisselle.jpg', 3),
(10, 'Meubles', './images/Categories/meubles.jpg', 3),
(11, 'Divers', './images/Categories/divers.jpg', 3),
(12, 'Fournitures', './images/Categories/fournitures.jpg', 3),
(13, 'Sport', './images/Categories/sport.jpg', 4),
(14, 'Audio', './images/Categories/audio.jpg', 2),
(15, 'Ordinateur', './images/Categories/ordinateur.jpg', 2),
(16, 'Telephone', './images/Categories/telephone.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE IF NOT EXISTS `modele` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `IDCatM` int(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`ID`, `Nom`, `IDCatM`, `URL`, `screen`) VALUES
(1, 'Tasse', 9, './Modèles/tasse.max', './images/Modeles/tasse.jpg'),
(2, 'Velo', 5, './Modèles/velo.max', './images/Modeles/velo.jpg'),
(3, 'Trotinette', 5, './Modèles/trotinette.max', './images/Modeles/trotinette.jpg'),
(4, 'Guitare', 7, './Modèles/guitare.max', './images/Modeles/guitare.jpg'),
(5, 'Vase', 8, './Modèles/vase.max', './images/Modeles/vase.jpg'),
(6, 'Table', 10, './Modèles/table.max', './images/Modeles/table.jpg'),
(7, 'Stylo', 12, './Modèles/stylo.max', './images/Modeles/stylo.jpg'),
(8, 'Ballon', 13, './Modèles/ballon.max', './images/Modeles/ballon.jpg'),
(9, 'Tasse', 9, './Modèles/tasse.max', './images/Modeles/tasse.jpg'),
(10, 'Verre', 9, './Modèles/verre.max', './images/Modeles/verre.jpg'),
(11, 'Couverts', 9, './Modèles/couverts.jpg', './images/Modeles/couverts.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
