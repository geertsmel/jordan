-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 24 avr. 2022 à 17:41
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jordan`
--

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

CREATE TABLE `basket` (
  `basket_id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `public` char(1) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `sport` varchar(10) NOT NULL,
  `image` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`basket_id`, `nom`, `prix`, `matiere`, `public`, `couleur`, `modele`, `sport`, `image`) VALUES
(1, 'Air Jordan 1 Mid', '119.99', 'cuir', 'f', 'blanc', 'mid', 'lifestyle', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/4fbc343c-08be-4911-a8c6-9bee8dbc800a/chaussure-air-jordan-1-mid-pour-Ct9zLk.png'),
(2, 'Air Jordan 1 Elevate Low SE', '139.99', 'cuir', 'f', 'blanc bleu', 'low', 'lifestyle', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/8e01e221-8c4e-4964-97aa-828474f5fe3f/chaussure-air-jordan-1-elevate-low-se-pour-l2m75n.png'),
(3, 'Jordan Air 200E', '134.99', 'daim', 'h', 'noir gris blan rouge', 'low', 'basketball', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/624ee219-7ddc-4883-8bbb-c66ee67db536/chaussure-jordan-air-200e-pour-4JJb1D.png'),
(4, 'Jordan Point Lane', '139.99', 'cuir', 'h', 'noir gris blanc rouge', 'low', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/c999f240-9796-4e36-87c3-ce1775660ac5/chaussure-jordan-point-lane-pour-53LZr6.png'),
(5, 'Air Jordan 1 Low', '109.99', 'cuir', 'h', 'noir gris blanc corail', 'low', 'lifestyle', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f94e20ea-4f1c-4eea-8276-248d42409bf4/chaussure-air-jordan-1-low-pour-jSGqgN.png'),
(6, 'Air Jordan 7 Retro SE', '199.99', 'cuir', 'h', 'scintillant saphir noir', 'max', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/e6fce5cf-1be1-4218-a31f-79300e5fd8fb/chaussure-air-jordan-7-retro-se-pour-tLZGGl.png'),
(7, 'Jordan Series .05', '84.99', 'daim', 'h', 'curry blanc noir orange', 'low', 'lifestyle', ' https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/bbcd3515-a8f0-4dbd-b599-bf3781972a16/chaussure-jordan-series-5-pour-Fz32Dl.png'),
(8, 'Air Jordan 1 Mid SE', '129.99', 'daim', 'x', 'gris noir bleu', 'mid', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/3afbf954-5a5b-4c40-b63e-843c21afe246/chaussure-air-jordan-1-mid-se-LpC4cS.png'),
(9, 'Air Jordan 1 Elevate Low', '129.99', 'cuir', 'f', 'blanc onyx', 'low', 'lyfestyle', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/b51fd349-3ed2-493d-bd94-221534f79964/chaussure-air-jordan-1-elevate-low-pour-g0tdmj.png'),
(10, 'Air Jordan 1 Low SE', '119.99', 'cuir', 'f', 'violet beige noir', 'low', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/c8a781ba-da99-4a84-b803-0db28cbc1e9c/chaussure-air-jordan-1-low-se-pour-nJHBnH.png'),
(11, 'Sky Jordan 1', '54.99', 'cuir', 'b', 'noir blanc rouge', 'max', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/fb160da1-8c14-46a5-b4c1-803dd044a79c/chaussure-sky-jordan-1-pour-et-petit-MSmJl2.png'),
(12, 'Jordan 1', '39.99', 'cuir', 'b', 'blanc orange noir', 'max', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/3ae72c83-56e6-46a6-a446-96b05429c229/chausson-jordan-1-pour-bVwpsg.png'),
(13, 'Air Jordan 1 Acclimate', '149.99', 'cuir', 'f', 'prune améthyste blanc', 'max', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/52c3b515-b43a-4d62-b11c-d6392fe1b81a/chaussures-air-jordan-1-acclimate-pour-jvc8f1.png'),
(14, 'Zion 1', '49.99', 'synthétique', 'b', 'blanc or bleu', 'low', 'basket', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/2c7ec5cf-d63a-46b7-b2dd-f0e8c3f6c40d/chaussure-zion-1-pour-et-petit-BFHP0L.png'),
(15, 'Jordan 1 Low Alt', '49.99', 'cuir', 'b', 'orange blanc noir', 'low', 'lifestyle', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/5eb78362-73d9-46f4-bf5a-36c9212d80c4/chaussures-jordan-1-low-alt-pour-et-petit-Dtl8lw.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
