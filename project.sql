-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 22 sep. 2022 à 13:10
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int NOT NULL,
  `id_clothes` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`,`id_clothes`),
  KEY `cart_items_clothes0_FK` (`id_clothes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `clothes`
--

DROP TABLE IF EXISTS `clothes`;
CREATE TABLE IF NOT EXISTS `clothes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float NOT NULL,
  `stock` int NOT NULL,
  `id_types` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clothes_types_FK` (`id_types`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clothes`
--

INSERT INTO `clothes` (`id`, `description`, `price`, `stock`, `id_types`, `image`, `name`) VALUES
(7, 'Une robe classe pour les temps froids', 17.99, 10, 2, 'product-f8.jpg', 'Robe bordeaux foncé'),
(8, 'Une robe courte et légère', 29.99, 10, 2, 'product-f1.jpg', 'Robe bleu'),
(9, 'Un style urbain de tous les jours', 17.99, 10, 2, 'product-f2.jpg', 'Eobe style marron clair'),
(10, 'Une robe sympa pour vos soirées', 16.99, 5, 2, 'product-f3.jpg', 'Robe courte vert'),
(11, 'Une magnifique robe de soirée', 16.99, 5, 2, 'product-f4.jpg', 'Robe noire'),
(12, 'Des petites fleures !', 9.99, 5, 2, 'product-f5.jpg\r\n', 'Robe fleuri rouge'),
(13, 'Une robe courte et légère', 12, 5, 2, 'product-f6.jpg', 'Robe bleu pour grande tailles'),
(14, 'Robe au style moderne', 15, 10, 2, 'product-f7.jpg', 'Robe grise'),
(15, 'Un classique !', 3.99, 10, 4, 'k1.jpg', 'Short kaki'),
(17, 'Pour être à la mode comme les stars', 13.99, 10, 4, 'k2.png', 'Chaussure montante blanche-rose'),
(22, 'Un jean résistant et à la mode', 6.99, 10, 4, 'k3.jpg', 'Jean bleu'),
(23, 'Une jolie chemise à manches courtes', 4.99, 10, 4, 'k4.jpg', 'Chemise bleu clair'),
(24, 'Une chemise très mode usa', 6.99, 10, 4, 'k5.jpg', 'Chemise bleu style'),
(25, 'un pull mignon', 5.99, 10, 4, 'k6.jpg', 'Pull à manches courtes'),
(26, 'Un pull de Brooklyn !', 6.99, 10, 4, 'k8.jpg', 'Pullover gris'),
(27, 'Un gilet pour les petits temps froids', 5.99, 10, 4, 'k9.jpg', 'Gilet beige'),
(28, 'Chaussure confectionné en daim', 19.99, 10, 1, 'product-1.jpg', 'Sneakers style'),
(29, 'Chemise résistante à la pluie', 20.99, 10, 1, 'product-2.jpg', 'Chemise imper'),
(30, 'De belles chaussures pour se balader ou le bureau', 17.99, 10, 1, 'product-3.jpg', 'Chaussures bleu'),
(31, 'Chemise résistante à la pluie', 20.99, 10, 1, 'product-2.jpg', 'Chemise imper'),
(32, 'Du velours !', 24.99, 10, 1, 'product-4.jpg', 'Chemise en velours marron'),
(33, 'Imprimé', 6.99, 10, 1, 'product-5.jpg', 'T-shirt noir imprimé'),
(34, 'De la laine pour lutter contre le froid', 5.99, 10, 1, 'product-6.jpg', 'Grosse écharpe grise'),
(35, 'Polo ajusté et impec !', 7.99, 10, 1, 'product-8.jpg', 'Polo bleu '),
(36, 'Des fleurs qui rappellent un été', 6.99, 10, 1, 'product-9.jpg', 'T-shirt fleuri'),
(37, 'Comme les militaires', 12.99, 10, 1, 'product-12.jpg', 'Veste camo'),
(38, 'Lunettes fashion !', 2.99, 10, 1, 'glasses.jpg', 'Lunettes de soleil dorée');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_purchase` date NOT NULL,
  `id_users` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_users_FK` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int NOT NULL,
  `id_orders` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`,`id_orders`),
  KEY `purchases_orders0_FK` (`id_orders`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(4, 'Enfant');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_clothes0_FK` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id`),
  ADD CONSTRAINT `cart_items_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_types_FK` FOREIGN KEY (`id_types`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_clothes_FK` FOREIGN KEY (`id`) REFERENCES `clothes` (`id`),
  ADD CONSTRAINT `purchases_orders0_FK` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
