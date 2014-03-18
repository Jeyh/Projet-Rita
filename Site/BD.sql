-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 18 Mars 2014 à 12:19
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`ID`, `Nom`, `IDCatM`, `URL`, `screen`) VALUES
(1, 'assiette', 9, './Modèles/Assiette.max', './images/Modeles/assiette.jpg'),
(2, 'Assiette01', 9, './Modèles/Assiette01.max', './images/Modeles/Assiette01.jpg'),
(3, 'Chaise', 10, './Modèles/Chaise.max', './images/Modeles/Chaise.jpg'),
(4, 'canapé', 10, './Modèles/canapé.max', './images/Modeles/canapé.png'),
(5, 'Chaise2', 10, './Modèles/chaise2.max', './images/Modeles/chaise2.jpg'),
(6, 'Table2', 10, './Modèles/table2.max', './images/Modeles/table2.jpg'),
(7, 'Chaise3', 10, './Modèles/Chaise3.max', './images/Modeles/chaise3.jpg'),
(8, 'Couteau', 9, './Modèles/Couteau.max', './images/Modeles/Couteau.jpg'),
(9, 'Tasse', 9, './Modèles/tasse.max', './images/Modeles/tasse.jpg'),
(10, 'Fauteuil', 10, './Modèles/Fauteuil.max', './images/Modeles/Fauteuil.jpg'),
(11, 'Hi-Fi', 14, './Modèles/Hi-Fi.max', './images/Modeles/Hi-Fi.jpg'),
(12, 'Ordinateur', 15, './Modèles/Ordinateur.max', './images/Modeles/Ordinateur.jpg'),
(13, 'Portable', 16, './Modèles/Portable.max', './images/Modeles/Portable.jpg'),
(14, 'pupitre', 11, './Modèles/pupitre.max', './images/Modeles/pupitre.jpg'),
(15, 'Tasse01', 9, './Modèles/Tasse01.max', './images/Modeles/Tasse01.jpg'),
(16, 'Tasse02', 9, './Modèles/Tasse02.max', './images/Modeles/Tasse02.jpg'),
(17, 'Vase01', 8, './Modèles/Vase01.max', './images/Modeles/Vase01.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
