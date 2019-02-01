-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : db768248684.hosting-data.io
-- Généré le :  mer. 30 jan. 2019 à 15:49
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db768248684`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `password`) VALUES
(542, 'zohir', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE `composant` (
  `idComposant` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `composant`
--

INSERT INTO `composant` (`idComposant`, `name`, `image`) VALUES
(1, 'schema 1', 'schema_1.svg'),
(2, 'schema 2', 'schema_2.svg'),
(3, 'schema 3', 'schema_3.svg'),
(4, 'schema 4', 'schema_4.svg'),
(5, 'schema 5', 'schema_5.svg'),
(6, 'schema 6', 'schema_6.svg');

-- --------------------------------------------------------

--
-- Structure de la table `contain`
--

CREATE TABLE `contain` (
  `idFile` int(11) NOT NULL,
  `idComposant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

CREATE TABLE `file` (
  `idFile` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `content` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `published` int(1) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `idUser`, `content`, `date`, `published`) VALUES
(1, 2, 'bonjour, je viens de ', '2019-01-16 09:14:35', 1),
(2, 2, 'bonjour, je viens de ', '2019-01-16 09:15:09', 1),
(3, 3, 'afagae', '2019-01-16 09:16:38', 1),
(4, 3, 'eagd', '2019-01-16 10:50:49', 1),
(5, 33, 'gagaeeacara', '2019-01-30 00:45:27', -1),
(6, 29, 'btyfyfèygioiçihuyg', '2019-01-30 10:01:34', -1),
(7, 29, 'dcghzajdjzagbdchjzabdcza', '2019-01-30 10:05:16', -1),
(8, 33, 'aaafexgrzz aaxzd', '2019-01-30 10:14:31', -1);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `idPage` int(11) NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `controller` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `template` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_robots` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_themecolor` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`idPage`, `title`, `url`, `controller`, `template`, `meta_description`, `meta_robots`, `meta_themecolor`) VALUES
(1, 'Zone de modélisation Simstudio', '/', 'home.php', 'home.tpl', NULL, NULL, NULL),
(2, 'Connexion Simstudio', '/connexion', 'login.php', 'login.tpl', NULL, NULL, NULL),
(3, 'Inscription Simstudio', '/inscription', 'register.php', 'register.tpl', NULL, NULL, NULL),
(4, 'FAQ Simstudio', '/faq', 'faq.php', 'faq.tpl', NULL, NULL, NULL),
(6, 'Mon compte Simstudio', '/compte', 'account.php', 'account.tpl', NULL, NULL, NULL),
(5, 'Contacter Simstudio', '/contact', 'contact.php', 'contact.tpl', NULL, NULL, NULL),
(7, 'Mon profil Simstudio', '/compte/profil', 'profile.php', 'profile.tpl', NULL, NULL, NULL),
(8, 'Mot de passe oublié', '/mot-de-passe-oublie', 'forgottenpassword.php', 'forgottenpassword.tpl', NULL, NULL, NULL),
(9, 'Deconnexion', '/logout', 'logout.php', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `share`
--

CREATE TABLE `share` (
  `idUser` int(11) NOT NULL,
  `idFile` int(11) NOT NULL,
  `privilege` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `name`, `firstname`, `email`, `password`, `date`) VALUES
(1, 't1', 't2', 'ab@cd.fr', '7c222fb2927d828af22f592134e8932480637c0d', '0000-00-00 00:00:00'),
(2, 't2', 't3', 'ab@cd.fr', '356a192b7913b04c54574d18c28d46e6395428ab', '0000-00-00 00:00:00'),
(3, 'tes', 'tes', 'zz@zz.fr', '356a192b7913b04c54574d18c28d46e6395428ab', '0000-00-00 00:00:00'),
(22, 'TestLastname', 'TestFirstname', 'test@test.fr', '107d348bff437c999a9ff192adcb78cb03b8ddc6', '2019-01-17 23:43:05'),
(23, 'amine', 'tamimi', 'amine@gmail.com', '32c79b367e93cd18d70918685d9958f9e7c30fa8', '2019-01-18 08:57:55'),
(24, 'az', 'feo', 'mep@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2019-01-19 13:03:38'),
(26, 'KOURA', 'Ma\'nsour', 'kouramansour@gmail.com', '7f325d39836e35e5242f314056e95e50d98f2e07', '2019-01-22 11:23:17'),
(27, 'jiji', 'kiki', 'janaoui.kenza@gmail.com', '3d34305edcd72dbb132231619fa9b9038b1f3c73', '2019-01-22 11:23:38'),
(29, 'Kirscher', 'Arnaud', 'arnaud.kirscher.student@gmail.com', 'a419925176534fd1c62d48e1b75200bba71075b5', '2019-01-22 13:56:58'),
(33, 'apz', 'zozo', 'zohirmalti@gmail.com', 'de5131bfae926b98c74d9521353782aeeac267fe', '2019-01-22 14:27:10'),
(34, 'amine', 'tam', 'amine@test.com', '3a960464d36c1b8bad183ed57ee79c0e39953cce', '2019-01-25 08:52:05'),
(35, 'FORNES', 'Clément', 'clementfornes@gmail.com', '1e0d20bd2183953cd1c295e8ba6d8d48e9d14a62', '2019-01-30 09:38:12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `composant`
--
ALTER TABLE `composant`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `contain`
--
ALTER TABLE `contain`
  ADD PRIMARY KEY (`idFile`,`idComposant`);

--
-- Index pour la table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idFile`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`idPage`);

--
-- Index pour la table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`idUser`,`idFile`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;

--
-- AUTO_INCREMENT pour la table `composant`
--
ALTER TABLE `composant`
  MODIFY `idComposant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `file`
--
ALTER TABLE `file`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `idPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
