-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db.3wa.io
-- Généré le : mer. 06 avr. 2022 à 08:32
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1-log
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vincentnguyen_general`
--

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_product`, `user_id`) VALUES
(24, 41, 7),
(26, 40, 7),
(27, 38, 7),
(28, 37, 7),
(29, 36, 7),
(30, 35, 7),
(31, 32, 7),
(32, 31, 7),
(33, 30, 7),
(34, 4, 7),
(35, 5, 7),
(36, 6, 7),
(38, 8, 7),
(39, 50, 7);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `pieces` varchar(10) NOT NULL,
  `garage` varchar(5) NOT NULL,
  `SdB` varchar(10) NOT NULL,
  `prix` int(11) NOT NULL,
  `charges` int(11) NOT NULL,
  `notaire` int(11) NOT NULL,
  `explic` text NOT NULL,
  `img_p` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `ZIP` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `ref`, `type`, `pieces`, `garage`, `SdB`, `prix`, `charges`, `notaire`, `explic`, `img_p`, `img_1`, `img_2`, `img_3`, `img_4`, `adress1`, `adress2`, `ville`, `ZIP`, `date`) VALUES
(1, '#1', 'location', 'T1', 'oui', '1', 120000, 10000, 12000, 'texte', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'appart.jpg', 'adresse1', 'adresse2', 'Angers', '49000', '2022-02-13'),
(2, '#2', 'location', 'T4', 'non', '2', 625, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(3, '#', 'location', 'T2', 'non', '1', 690, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(4, '#', 'achat', 'T3', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(5, '#', 'location', 'T4', 'non', '1', 707, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(6, '#', 'achat', 'T5', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(7, '#', 'location', 'T5+', 'non', '1', 724, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(8, '#', 'achat', 'T1', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(9, '#', 'location', 'T1 bis', 'non', '1', 741, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(10, '#', 'achat', 'T2', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(11, '#', 'location', 'T3', 'non', '1', 758, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(12, '#', 'achat', 'T4', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(13, '#', 'location', 'T5', 'non', '1', 775, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(14, '#', 'achat', 'T5+', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(15, '#', 'location', 'T1', 'non', '1', 792, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(16, '#', 'achat', 'T1 bis', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(17, '#', 'location', 'T2', 'non', '1', 809, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(18, '#', 'achat', 'T3', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(19, '#', 'location', 'T4', 'non', '1', 826, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(20, '#', 'achat', 'T5', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(21, '#', 'location', 'T5+', 'non', '1', 843, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(22, '#', 'achat', 'T1', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(23, '#', 'location', 'T1 bis', 'non', '1', 860, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(24, '#', 'achat', 'T2', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(25, '#', 'location', 'T3', 'non', '1', 877, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(26, '#', 'achat', 'T4', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(27, '#', 'location', 'T5', 'non', '1', 894, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(28, '#', 'achat', 'T5+', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(29, '#', 'location', 'T1', 'non', '1', 911, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(30, '#', 'achat', 'T1 bis', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(31, '#', 'location', 'T2', 'non', '1', 928, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(32, '#', 'achat', 'T3', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(33, '#', 'location', 'T4', 'non', '1', 945, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(34, '#', 'achat', 'T5', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(35, '#', 'location', 'T5+', 'non', '1', 962, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(36, '#', 'achat', 'T1', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(37, '#', 'location', 'T1 bis', 'non', '1', 979, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(38, '#', 'achat', 'T2', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(39, '#', 'location', 'T3', 'non', '1', 996, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(40, '#', 'achat', 'T4', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(41, '#', 'location', 'T5', 'non', '1', 1013, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(42, '#', 'achat', 'T5+', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(43, '#', 'location', 'T1', 'non', '1', 1030, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(44, '#', 'achat', 'T1 bis', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(45, '#', 'location', 'T2', 'non', '1', 1047, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(46, '#', 'achat', 'T3', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(47, '#', 'location', 'T4', 'non', '1', 1064, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'tour.jpg', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(48, '#', 'achat', 'T5', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'appart.jpg', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(49, '#', 'location', 'T5+', 'non', '1', 1081, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(50, '#', 'achat', 'T1', 'non', '1', 125000, 0, 12000, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(51, '#', 'location', 'T1 bis', 'non', '1', 1098, 128, 0, 'Location disponible le 2/06/2022<br>Vue imprenable sur le château d\'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00', 'slider-01.jpg', 'slider-02.jpg', 'tour.jpg', 'appart.jpg', 'maison.jpg', '12 rue des ventes', 'lieu dit ViviJean', 'Angers', '49000', '2022-02-13'),
(54, '#52', 'achat', 'T4', 'oui', '2', 150000, 0, 15000, 'Texte', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'appart.jpg', '49 rue des vignes', 'apt 451', 'Angers', '49000', '2022-02-13'),
(55, '#5212', 'achat', 'T4', 'oui', '2', 150000, 0, 15000, 'Texte', 'maison.jpg', 'maison2.jpg', 'slider-01.jpg', 'slider-02.jpg', 'appart.jpg', '49 rue des vignes', 'apt 451', 'Angers', '49000', '2022-02-13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'New', 'New', 'NewEmail@mail.fr', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-02-22 12:15:31', '2022-02-22 14:30:32'),
(2, 'Lenoir', 'Christophe', 'jonny@mail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-02-22 12:15:31', '2022-02-22 12:15:31'),
(3, 'Labattue', 'Jean-Jacques', 'christophe@mail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-02-22 12:15:31', '2022-02-22 12:15:31'),
(4, 'Dupont', 'Albert', 'albert@mail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-02-22 12:15:31', '2022-02-22 12:15:31'),
(7, 'Nguyen', 'Vincent', 'vincentnguyen332@gmail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'admin', '2022-03-03 10:22:44', '2022-03-03 10:22:44'),
(17, 'Lesonter', 'Didie', 'didie2@mail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-03-09 10:36:43', '2022-03-09 10:36:43'),
(20, 'nguyen', 'vincent', 'fgvhhvg@gmail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-03-09 12:05:21', '2022-03-09 12:05:21'),
(21, 'nguyen', 'vincent', 'deed@mail.fr', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-03-09 12:08:35', '2022-03-09 12:08:35'),
(23, 'Ennoyotie', 'vincent', 'didier@mail.com', '$2y$10$BlEBrUpbCRGuiav9ed2a/.y9cOcLz5kK4hfwI9abUhOinkA/4VATW', 'user', '2022-03-11 10:02:01', '2022-03-11 10:02:01'),
(25, 'Ennoyotie', 'vincent', 'didier1@mail.com', '$2y$10$FtLOrSOV0E9zofaTmU1HK.QKh1hkwzKhaPoM6RsZBHQBB6.OF6tTa', 'user', '2022-03-11 11:22:11', '2022-03-11 11:22:11'),
(26, 'nguyen', 'sarah', 'sarah@gmail.com', '$2y$10$jh6Yoj2kwAIvfUdCbEgzE.QQW3IgAa.jV/ro2cW5AvPltTJoPs3u.', 'user', '2022-03-18 03:31:51', '2022-03-18 03:31:51'),
(27, 'nguyen', 'sarah', 'sarah1@gmail.com', '$2y$10$66xTpAubJijmcrV6to5NRuq5BMtbmTW3kXSY8a0fB6ZNV4I2dfLT.', 'user', '2022-03-18 03:42:34', '2022-03-18 03:42:34'),
(28, 'nguyen', 'sarah', 'sarah0@gmail.com', '$2y$10$oqeJ0XgJ6G7dAUM9qz5WWeGQGTwr.FfkIgAY/kaBUhk3TvWWk5f6a', 'user', '2022-03-18 04:38:16', '2022-03-18 04:38:16'),
(29, 'nguyen', 'sarah', 'sarah2@gmail.com', '$2y$10$YlJExwAMAVPwXq.p198klOyv2.olxWuHofuQJdji1BHs2avoUwg/K', 'user', '2022-03-23 18:16:33', '2022-03-23 18:16:33'),
(34, 'nguyen', 'sarah', 'sarah3@gmail.com', '$2y$10$iRwC7v6VjbojjCrg.oHTAOFn8ZIlEEshHo5BXH5f6FOAs5WEupgaW', 'user', '2022-03-23 19:05:54', '2022-03-23 19:05:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_product` (`id_product`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_product`) REFERENCES `produits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
