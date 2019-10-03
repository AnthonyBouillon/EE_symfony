-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 03 oct. 2019 à 16:29
-- Version du serveur :  5.7.24
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
-- Base de données :  `exercice_symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `material`
--

INSERT INTO `material` (`id`, `name`, `content`, `price`, `quantity`, `created_at`) VALUES
(51, 'Nom du produit numéro : 1', 'Contenu de l\'articled', 19.99, -2, '2019-10-03 13:24:10'),
(52, 'Un vase datant de 1982', 'Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte', 128.98, 16, '2019-10-03 15:04:49'),
(53, 'Nom du produit numéro : 3', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(54, 'Nom du produit numéro : 4', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(55, 'Nom du produit numéro : 5', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(56, 'Nom du produit numéro : 6', 'fggfdfdgfgg', 19.99, 0, '2019-10-03 13:51:11'),
(57, 'Nom du produit numéro : 7', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(58, 'Nom du produit numéro : 8', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(59, 'Nom du produit numéro : 9', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(60, 'Nom du produit numéro : 10', 'Contenu de l\'article', 19.99, 0, '2019-10-03 13:24:10'),
(61, 'Nom du produit numéro : 11', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(62, 'Nom du produit numéro : 12', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(63, 'Nom du produit numéro : 13', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(64, 'Nom du produit numéro : 14', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(65, 'Nom du produit numéro : 15', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(66, 'Nom du produit numéro : 16', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(67, 'Nom du produit numéro : 17', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(68, 'Nom du produit numéro : 18', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(69, 'Nom du produit numéro : 19', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(70, 'Nom du produit numéro : 20', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(71, 'Nom du produit numéro : 21', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(72, 'Nom du produit numéro : 22', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(73, 'Nom du produit numéro : 23', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(74, 'Nom du produit numéro : 24', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(75, 'Nom du produit numéro : 25', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(76, 'Nom du produit numéro : 26', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(77, 'Nom du produit numéro : 27', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(78, 'Nom du produit numéro : 28', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(79, 'Nom du produit numéro : 29', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(80, 'Nom du produit numéro : 30', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(81, 'Nom du produit numéro : 31', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(82, 'Nom du produit numéro : 32', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(83, 'Nom du produit numéro : 33', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(84, 'Nom du produit numéro : 34', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(85, 'Nom du produit numéro : 35', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(86, 'Nom du produit numéro : 36', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(87, 'Nom du produit numéro : 37', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(88, 'Nom du produit numéro : 38', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(89, 'Nom du produit numéro : 39', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(90, 'Nom du produit numéro : 40', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(91, 'Nom du produit numéro : 41', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(92, 'Nom du produit numéro : 42', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(93, 'Nom du produit numéro : 43', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(94, 'Nom du produit numéro : 44', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(95, 'Nom du produit numéro : 45', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(96, 'Nom du produit numéro : 46', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(97, 'Nom du produit numéro : 47', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(98, 'Nom du produit numéro : 48', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(99, 'Nom du produit numéro : 49', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10'),
(100, 'Nom du produit numéro : 50', 'Contenu de l\'article', 19.99, 10, '2019-10-03 13:24:10');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191003131636', '2019-10-03 13:16:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
