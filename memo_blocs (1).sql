-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 mai 2021 à 16:34
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
  `color` varchar(256) NOT NULL DEFAULT '#ffff88',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bloc`
--

INSERT INTO `bloc` (`id`, `title`, `description`, `content`, `color`, `date`) VALUES
(1, 'test', 'test numero 1', 'AZEERRKLTRJKLREKGLEQRKJGSLJGEH5HBKJ jlkfjflmgjsgklerjg kjglmjhgkqrjghkmjfb rkmeje', 'blue', '0000-00-00 00:00:00'),
(2, 'testsql', 'sql', 'fromsql', 'red', '2021-05-11 12:56:39'),
(3, 'test2', '222', '2222', 'yellow', '2021-05-11 12:57:19'),
(9, '😮', 'r', 'r', '#ffff88', '2021-05-11 15:22:03'),
(10, 'ajouté', 'un', 'de', '#ffff88', '2021-05-11 15:41:14'),
(12, 'uu', 'uu', 'uu', '#ffff88', '2021-05-11 15:49:16'),
(13, 'tttttttttttttt', 'ttttttttt', 'tttttt', '', '2021-05-11 15:50:50'),
(14, 'test saut ', 'test ', 'y\r\ny\r\ny\r\ny\r\ny\r\n', '', '2021-05-11 15:54:52'),
(15, 'ha', 'haaa', 'hahaaha', '', '2021-05-11 16:22:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
