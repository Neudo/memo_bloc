-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 mai 2021 à 15:33
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memo_blocs`
--

-- --------------------------------------------------------

--
-- Structure de la table `bloc`
--

DROP TABLE IF EXISTS `bloc`;
CREATE TABLE IF NOT EXISTS `bloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL,
  `color` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bloc`
--

INSERT INTO `bloc` (`id`, `title`, `description`, `content`, `color`, `date`) VALUES
(1, 'test', 'test numero 1', 'AZEERRKLTRJKLREKGLEQRKJGSLJGEH5HBKJ jlkfjflmgjsgklerjg kjglmjhgkqrjghkmjfb rkmeje', 'blue', '0000-00-00 00:00:00'),
(2, 'testsql', 'sql', 'fromsql', 'red', '2021-05-11 12:56:39'),
(3, 'test2', '222', '2222', 'yellow', '2021-05-11 12:57:19'),
(4, 'g', 'g', 'g', '#ffff88', '2021-05-11 13:48:10'),
(5, 'gg', 'gg', 'gg', '#ffff88', '2021-05-11 13:48:36'),
(7, 'i', 'i', 'i', '#ffff88', '2021-05-11 15:03:51'),
(9, '😮', 'r', 'r', '#ffff88', '2021-05-11 15:22:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
