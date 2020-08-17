-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 17 août 2020 à 18:26
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-learning`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(15) NOT NULL,
  `matiere` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `acces` int(2) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invitation`
--

CREATE TABLE `invitation` (
  `id` int(3) NOT NULL,
  `etudiant` varchar(50) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(2) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `acces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `statut` int(2) NOT NULL,
  `matiere` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `email`, `mdp`, `nom`, `statut`, `matiere`) VALUES
(1, 'yasmine.jerbi@ensi-uma.tn', '1234567', 'yasmine', 2, ''),
(2, 'firas@gmail.com', '14', 'firas', 2, ''),
(3, 'tarak3072@yahoo.fr', '11', 'jerbi', 1, ''),
(4, 'ytre@ihlg.g', 'a', 'ddddddd', 2, ''),
(5, 'yt@gmail.yn', '147852369', 'hhh', 2, ''),
(6, 'imed@gmail.com', '1245789663', 'imed', 1, 'oriente objet'),
(7, 'amina@gmail.com', '14523698', 'amina', 2, ''),
(8, 'amir@yahoo.fr', '145236987', 'amir', 2, ''),
(9, 'dlkcl@krf.gg', '145236987', 'dddddddlkij', 1, ''),
(10, 'dlkcl@krf.ggt', 'mpoiuyt5555', 'hjk', 1, ''),
(11, 'a@gmail.com', '145236987', 'aaa', 2, ''),
(12, 'offfffffflh@llh.hg', '14523698785', 'b', 1, ''),
(13, 'amina@gmail.comk', '785412369', 'aaalkj', 1, ''),
(14, 'dd@kfkf.ffd', '145236987', 'e', 2, ''),
(15, 'gg@jj.hh', '147852369', 'gg', 1, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
