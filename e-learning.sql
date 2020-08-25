-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 25 août 2020 à 20:19
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
  `prof` varchar(30) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `url` varchar(250) NOT NULL,
  `date` datetime(6) NOT NULL,
  `limite` datetime(6) NOT NULL,
  `genre` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `matiere`, `prof`, `titre`, `nom`, `url`, `date`, `limite`, `genre`) VALUES
(175, 'francais', 'amel', 'lkjhg', 'cours -art.html', 'cp/cours -art.html', '2020-08-24 18:10:00.000000', '0000-00-00 00:00:00.000000', 0),
(176, 'francais', 'amel', '^pkjhg', 'cours -art.html', 'cp/cours -art.html', '2020-08-24 18:12:00.000000', '0000-00-00 00:00:00.000000', 0),
(177, 'francais', 'amel', '^pkjhg', 'cours -art.html', 'cp/cours -art.html', '2020-08-24 18:13:00.000000', '0000-00-00 00:00:00.000000', 0),
(178, 'eee', 'amel', 'lkjhg', 'contact.html', 'cp/contact.html', '2020-08-24 23:01:00.000000', '0000-00-00 00:00:00.000000', 0),
(179, 'eee', 'amel', 'bo,ngikfk', 'blog.html', 'ep/blog.html', '2020-08-24 23:02:00.000000', '2020-08-22 20:20:00.000000', 1),
(180, 'eee', 'amel', 'lkjhg', 'cours -art.html', 'cp/cours -art.html', '2020-08-24 23:04:00.000000', '0000-00-00 00:00:00.000000', 0),
(181, 'd', 'amel', 'mlkjh', 'cours - phy.html', 'cp/cours - phy.html', '2020-08-25 01:24:00.000000', '0000-00-00 00:00:00.000000', 0),
(182, 'd', 'amel', 'mlkjh', 'cours - programmation.html', 'cp/cours - programmation.html', '2020-08-25 01:24:00.000000', '0000-00-00 00:00:00.000000', 0),
(183, 'd', 'amel', 'mlkjh', 'cours -art.html', 'cp/cours -art.html', '2020-08-25 01:24:00.000000', '0000-00-00 00:00:00.000000', 0),
(184, 'last', 'amel', 'mlk', 'acceuil.php', 'cp/acceuil.php', '2020-08-25 02:02:00.000000', '0000-00-00 00:00:00.000000', 0),
(185, 'architecture', 'amel', 'lkjhg', 'aaaamel.php', 'cp/aaaamel.php', '2020-08-25 15:40:00.000000', '0000-00-00 00:00:00.000000', 0),
(186, 'architecture', 'amel', 'lkjhg', 'acceuil.php', 'cp/acceuil.php', '2020-08-25 15:40:00.000000', '0000-00-00 00:00:00.000000', 0),
(187, 'architecture', 'amel', 'lkjhg', 'administrateur.php', 'cp/administrateur.php', '2020-08-25 15:40:00.000000', '0000-00-00 00:00:00.000000', 0),
(189, 'anglais7', 'amel', 'mlk', 'cours -art.html', 'cp/cours -art.html', '2020-08-25 16:19:00.000000', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Structure de la table `fields`
--

CREATE TABLE `fields` (
  `id` int(30) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `matiere` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invitation`
--

CREATE TABLE `invitation` (
  `id` int(3) NOT NULL,
  `etudiant` varchar(50) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `acces` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(200) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `acces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`, `prof`, `acces`) VALUES
(28, 'francais', 'amel', '0');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(300) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `statut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `email`, `mdp`, `nom`, `statut`) VALUES
(8, 'amir@yahoo.fr', '145236987', 'amir', 2),
(9, 'dlkcl@krf.gg', '145236987', 'dddddddlkij', 1),
(10, 'dlkcl@krf.ggt', 'mpoiuyt5555', 'hjk', 1),
(11, 'a@gmail.com', '145236987', 'aaa', 2),
(12, 'offfffffflh@llh.hg', '14523698785', 'b', 1),
(13, 'amina@gmail.comk', '785412369', 'aaalkj', 1),
(14, 'dd@kfkf.ffd', '145236987', 'e', 2),
(15, 'gg@jj.hh', '147852369', 'gg', 1),
(16, 'dlkcl@krf.ggd', 'dddddddddddddddddddddd', 'd', 2),
(17, 'dfjnj@kjkjh.gg', '145236988', 'dkdkd', 0),
(18, 'lkjh@hkjgfh.gf', '145236987', 'aaaaaa', 0),
(19, 'gkkg@khkh.mdm', '$2y$10$hOLdOGymjqB1ka4noYI06Ou', 'aminaj.lk', 2),
(20, 'aymen@gmail.com', '$2y$10$AzV.KeFG.alRyl0llxpFSe4', 'aymen', 2),
(21, 'amer@yahoo.com', '$2y$10$9g8kow3OIuF5an3XYB2oheo', 'amer', 2),
(22, 'ab@gmail.com', '$2y$10$fPWTpHeFrp1602mFjKcCIuI', 'a', 2),
(23, 'bbb@llhlh.gg', '$2y$10$hZ0SVBgtIyDjrYwIk0lOp.x', 'blkj', 2),
(24, 'cc@uuu.yy', '$2y$10$vgszdzexURKtwVCgZNCXyelK7GWKOH7VVTYNaTRMb80jXiSX/gtkO', 'cc', 2),
(25, 'ss@lh.gg', '$2y$10$Lg/iQaNUWsCSTKTyHjRw7OBWL/m6lBzfN2jugedP.2LYnQLFNvI1K', 'sx', 2),
(26, 'yasmine@gmail.com', '$2y$10$74u74LDiqVB6xq0PYiZQH.ThYaMRYilS6YiZqgSHWCezanQIvRcHC', 'yasmina', 1),
(27, 'yasmine1@gmail.com', '$2y$10$6C6LCQ7fZcCF9gBr2eVutuHsWQB1sXoXdVDsKEZDmav.YgcMFjk9u', 'yasmina2', 1),
(28, 'amel@hjyy.tt', '$2y$10$oajQteJy3E3CD/2fHWH/LeKktH4brFpPougcJeWysMU8qUgJwBvSq', 'amel', 1),
(29, 'ameni.jer.@j.td', '$2y$10$60lYEg0YFuQkns8RC.H2L.LZJnr2PBU3uEjJnlKuMPwhzBiOMFitG', 'ameni', 2);

-- --------------------------------------------------------

--
-- Structure de la table `public`
--

CREATE TABLE `public` (
  `id` int(15) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `url` varchar(90) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `acces` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fields`
--
ALTER TABLE `fields`
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
-- Index pour la table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT pour la table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
