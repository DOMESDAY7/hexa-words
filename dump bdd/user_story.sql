-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 30 oct. 2021 à 16:58
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `idiots`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_story`
--

CREATE TABLE `user_story` (
  `id` int(11) NOT NULL,
  `nickname` varchar(256) NOT NULL,
  `story` text NOT NULL,
  `id_perso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_story`
--

INSERT INTO `user_story` (`id`, `nickname`, `story`, `id_perso`) VALUES
(10, 'andry', 'tesst', 1),
(11, 'lolilol', 'testotest', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user_story`
--
ALTER TABLE `user_story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user_story`
--
ALTER TABLE `user_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
