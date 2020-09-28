-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 28 juil. 2018 à 23:01
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `curator_studio_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `sous_titre` varchar(255) DEFAULT NULL,
  `description` text,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `sous_titre`, `description`, `img`) VALUES
(228, 'Gâteau myrtilles', 'Myrtilles', 'Un gâteau est une pâtisserie préparée d\'une pâte sucrée à base de farine, d\'oeufs et de beurre1. Il doit être cuit au four, généralement dans un moule. Il peut être garni de crème, de fruits, de chocolat ou de glaçage.', 'baked-goods.jpg'),
(229, 'Cake Pops', 'Chocolat', 'Un cake pop, ou parfois pop cake, est un type de gâteau en forme de sucette. Il s\'agit généralement d\'un petit gâteau arrondi de la taille d\'une grosse bille qui est recouvert d\'un glaçage, de chocolat ou de décorations, puis est fixé sur un bâton de sucettes.', 'cake-pops.jpg'),
(231, 'Gâteau aux fruits', 'Multi Fruits', 'Un gâteau est une pâtisserie préparée d\'une pâte sucrée à base de farine, d\'oeufs et de beurre1. Il doit être cuit au four, généralement dans un moule. Il peut être garni de crème, de fruits, de chocolat ou de glaçage.', 'cake.jpg'),
(232, 'Gâteau Abricot', 'Abricot', 'Un gâteau est une pâtisserie préparée d\'une pâte sucrée à base de farine, d\'oeufs et de beurre1. Il doit être cuit au four, généralement dans un moule. Il peut être garni de crème, de fruits, de chocolat ou de glaçage.', 'cake2.jpg'),
(233, 'Etoiles à la cannelle', 'Cannelle', 'Les biscuits de Noël sont des assortiments de petites pâtisseries, préparées traditionnellement durant les fêtes de fin d\'année, dans les pays germaniques et nombreux pays et régions du monde.', 'cinnamon-stars.jpg'),
(234, 'Croissant', 'Amande', 'Un croissant est une viennoiserie à base d\'une pâte levée feuilletée spécifique, la pâte à croissant, qui comporte de la levure et une proportion importante de beurre.', 'croissants.jpg'),
(253, 'Cupcake', 'Chocolat Caramel', 'Un cupcake (anglicisme), petit gâteau ou gâtelet (ou fairy cake, « gâteau de fée » comme il est connu en Angleterre) est un petit gâteau d\'origine américaine souvent très coloré en portion individuelle, ayant la forme du muffin, cuit dans un moule en papier et généralement recouvert de glaçage et parfois décoré.\r\n', 'cupcakes.jpg'),
(261, 'Macarons', 'Framboise', 'Le macaron est un petit gâteau d\'amande, granuleux et moelleux, à la forme arrondie, d\'environ 3 à 5 cm de diamètre, spécialité de plusieurs villes et régions françaises, et dont la recette et l\'aspect varient : Amiens, Boulay, Chartres, Cormery, Joyeuse, Le Dorat, Massiac, Montmorillon, Nancy, Réau, Saint-Émilion, Sainte-Croix Lannion ou Sault.\r\n', 'macarons.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
