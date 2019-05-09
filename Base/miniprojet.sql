-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 08 Mai 2019 à 16:59
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `miniprojet`
--
CREATE DATABASE IF NOT EXISTS `miniprojet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `miniprojet`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Classique'),
(2, 'Basket');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `password` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `id_Categorie` int(11) NOT NULL,
  `prix` decimal(20,2) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `id_Categorie`, `prix`, `image`) VALUES
(1, 'class1', 'DESCRIPTION1', 1, '100.00', 'image1'),
(2, 'class2', 'DESCRIPTION2', 1, '100.00', 'image2'),
(3, 'class3', 'DESCRIPTION3', 1, '100.00', 'image3'),
(4, 'class4', 'DESCRIPTION4', 1, '100.00', 'image4'),
(5, 'class5', 'DESCRIPTION5', 1, '100.00', 'image5'),
(6, 'class6', 'DESCRIPTION6', 1, '100.00', 'image6'),
(7, 'class7', 'DESCRIPTION7', 1, '100.00', 'image7'),
(8, 'class8', 'DESCRIPTION8', 1, '100.00', 'image8'),
(9, 'class9', 'DESCRIPTION9', 1, '100.00', 'image9'),
(10, 'class10', 'DESCRIPTION10', 1, '100.00', 'image10'),
(11, 'basket1', 'DESCRIPTION11', 2, '90.00', 'image11'),
(12, 'basket2', 'DESCRIPTION12', 2, '90.00', 'image12'),
(13, 'basket3', 'DESCRIPTION13', 2, '90.00', 'image13'),
(14, 'basket4', 'DESCRIPTION14', 2, '90.00', 'image14'),
(15, 'basket5', 'DESCRIPTION15', 2, '90.00', 'image15'),
(16, 'basket6', 'DESCRIPTION16', 2, '90.00', 'image16'),
(17, 'basket7', 'DESCRIPTION17', 2, '90.00', 'image17'),
(18, 'basket8', 'DESCRIPTION18', 2, '90.00', 'image18'),
(19, 'basket9', 'DESCRIPTION19', 2, '90.00', 'image19'),
(20, 'basket10', 'DESCRIPTION20', 2, '90.00', 'image20');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `produit_categorie`
--
CREATE TABLE IF NOT EXISTS `produit_categorie` (
`id` int(11)
,`nom` varchar(200)
,`description` varchar(2000)
,`categorie` varchar(30)
,`prix` decimal(20,2)
,`image` varchar(200)
);
-- --------------------------------------------------------

--
-- Structure de la vue `produit_categorie`
--
DROP TABLE IF EXISTS `produit_categorie`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `produit_categorie` AS select `produit`.`id` AS `id`,`produit`.`nom` AS `nom`,`produit`.`description` AS `description`,`categorie`.`nom` AS `categorie`,`produit`.`prix` AS `prix`,`produit`.`image` AS `image` from (`produit` join `categorie` on((`categorie`.`id` = `produit`.`id_Categorie`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
