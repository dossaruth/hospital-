-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 19 mai 2021 à 17:08
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_hospital`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateEnregistrement` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mdp`, `nom`, `email`, `dateEnregistrement`) VALUES
(1, 'ilci', '$2y$10$NjLsQmle4udIrKQcItnuQe0pn9GWIEDqiUajB7y1hFjh23rjNKPJe', 'James', 'allan@hotmail.fr', '2020-12-09 11:27:08'),
(2, 'roun', 'roun', 'Kane', 'rounn@ggg.fr', '2020-12-09 11:32:11'),
(3, 'MARTIN LIAM', '$2y$10$aAGxvjvhSwrkk9N918qY6egddDHBvoW97OH9JTr62/A7G85R7GdQi', 'MARTIN LIAM', 'martin@gmail.com', '2021-05-19 17:46:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
