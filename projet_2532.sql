-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 avr. 2024 à 05:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_2532`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numCh` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `capacite` varchar(255) NOT NULL,
  `vue` varchar(255) NOT NULL,
  `superficie` int(11) NOT NULL,
  `idHotel` int(11) NOT NULL,
  `libre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numCh`, `prix`, `capacite`, `vue`, `superficie`, `idHotel`, `libre`) VALUES
(40, 220, 'double', 'vue sur jardin', 29, 1, 'vrai'),
(15, 250, 'double', 'mer', 50, 1, 'vrai'),
(28, 180, 'simple', 'ville', 40, 1, 'vrai'),
(42, 220, 'double', 'montagne', 60, 1, 'vrai'),
(53, 150, 'simple', 'mer', 45, 1, 'vrai'),
(67, 290, 'double', 'ville', 55, 1, 'vrai'),
(71, 200, 'simple', 'montagne', 48, 1, 'vrai'),
(85, 270, 'double', 'ville', 58, 1, 'vrai'),
(97, 130, 'simple', 'mer', 42, 1, 'vrai'),
(100, 300, 'double', 'montagne', 62, 1, 'vrai'),
(12, 150, 'simple', 'mer', 45, 2, 'vrai'),
(23, 280, 'double', 'montagne', 60, 2, 'vrai'),
(35, 200, 'simple', 'ville', 40, 2, 'vrai'),
(48, 220, 'double', 'mer', 55, 2, 'vrai'),
(57, 180, 'simple', 'montagne', 48, 2, 'vrai'),
(61, 270, 'double', 'ville', 58, 2, 'vrai'),
(75, 190, 'simple', 'ville', 42, 2, 'vrai'),
(86, 230, 'double', 'montagne', 62, 2, 'vrai'),
(92, 250, 'simple', 'ville', 45, 2, 'vrai'),
(99, 300, 'double', 'mer', 65, 2, 'vrai'),
(10, 200, 'simple', 'ville', 50, 3, 'faux'),
(25, 250, 'double', 'montagne', 60, 3, 'vrai'),
(37, 180, 'simple', 'mer', 40, 3, 'vrai'),
(42, 280, 'double', 'ville', 55, 3, 'vrai'),
(53, 150, 'simple', 'montagne', 48, 3, 'vrai'),
(68, 270, 'double', 'mer', 58, 3, 'vrai'),
(71, 190, 'simple', 'ville', 42, 3, 'vrai'),
(84, 220, 'double', 'montagne', 62, 3, 'vrai'),
(98, 300, 'simple', 'ville', 45, 3, 'vrai'),
(14, 180, 'simple', 'ville', 45, 4, 'vrai'),
(28, 250, 'double', 'mer', 60, 4, 'vrai'),
(36, 200, 'simple', 'montagne', 40, 4, 'vrai'),
(47, 280, 'double', 'ville', 55, 4, 'vrai'),
(55, 150, 'simple', 'mer', 48, 4, 'vrai'),
(67, 270, 'double', 'montagne', 58, 4, 'vrai'),
(74, 190, 'simple', 'ville', 42, 4, 'vrai'),
(86, 220, 'double', 'montagne', 62, 4, 'vrai'),
(99, 300, 'simple', 'ville', 45, 4, 'vrai'),
(10, 220, 'simple', 'ville', 45, 5, 'vrai'),
(22, 280, 'double', 'mer', 60, 5, 'vrai'),
(35, 180, 'simple', 'montagne', 40, 5, 'vrai'),
(48, 250, 'double', 'ville', 55, 5, 'vrai'),
(57, 200, 'simple', 'mer', 48, 5, 'vrai'),
(68, 270, 'double', 'montagne', 58, 5, 'vrai'),
(71, 190, 'simple', 'ville', 42, 5, 'vrai'),
(86, 300, 'double', 'montagne', 62, 5, 'vrai'),
(97, 150, 'simple', 'ville', 45, 5, 'vrai'),
(10, 280, 'simple', 'ville', 45, 6, 'vrai'),
(23, 220, 'double', 'mer', 60, 6, 'vrai'),
(34, 150, 'simple', 'montagne', 40, 6, 'vrai'),
(47, 300, 'double', 'ville', 55, 6, 'vrai'),
(56, 200, 'simple', 'mer', 48, 6, 'vrai'),
(65, 270, 'double', 'montagne', 58, 6, 'vrai'),
(71, 190, 'simple', 'ville', 42, 6, 'vrai'),
(88, 250, 'double', 'montagne', 62, 6, 'vrai'),
(99, 180, 'simple', 'ville', 45, 6, 'vrai'),
(12, 220, 'simple', 'ville', 45, 7, 'vrai'),
(25, 280, 'double', 'mer', 60, 7, 'vrai'),
(36, 150, 'simple', 'montagne', 40, 7, 'vrai'),
(49, 300, 'double', 'ville', 55, 7, 'vrai'),
(58, 200, 'simple', 'mer', 48, 7, 'vrai'),
(67, 270, 'double', 'montagne', 58, 7, 'vrai'),
(71, 190, 'simple', 'ville', 42, 7, 'vrai'),
(82, 250, 'double', 'montagne', 62, 7, 'vrai'),
(95, 180, 'simple', 'ville', 45, 7, 'vrai'),
(11, 250, 'simple', 'ville', 45, 8, 'vrai'),
(24, 180, 'double', 'mer', 60, 8, 'vrai'),
(37, 300, 'simple', 'montagne', 40, 8, 'vrai'),
(48, 220, 'double', 'ville', 55, 8, 'vrai'),
(59, 200, 'simple', 'mer', 48, 8, 'vrai'),
(63, 270, 'double', 'montagne', 58, 8, 'vrai'),
(71, 190, 'simple', 'ville', 42, 8, 'vrai'),
(86, 280, 'double', 'montagne', 62, 8, 'vrai'),
(95, 150, 'simple', 'ville', 45, 8, 'vrai'),
(12, 220, 'simple', 'ville', 45, 9, 'vrai'),
(23, 280, 'double', 'mer', 60, 9, 'vrai'),
(35, 150, 'simple', 'montagne', 40, 9, 'vrai'),
(48, 300, 'double', 'ville', 55, 9, 'vrai'),
(57, 200, 'simple', 'mer', 48, 9, 'vrai'),
(66, 270, 'double', 'montagne', 58, 9, 'vrai'),
(71, 190, 'simple', 'ville', 42, 9, 'vrai'),
(82, 250, 'double', 'montagne', 62, 9, 'vrai'),
(95, 180, 'simple', 'ville', 45, 9, 'vrai'),
(99, 230, 'double', 'mer', 65, 9, 'vrai'),
(10, 250, 'simple', 'ville', 45, 10, 'vrai'),
(21, 180, 'double', 'mer', 60, 10, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 10, 'vrai'),
(44, 220, 'double', 'ville', 55, 10, 'vrai'),
(55, 200, 'simple', 'mer', 48, 10, 'vrai'),
(67, 270, 'double', 'montagne', 58, 10, 'vrai'),
(71, 190, 'simple', 'ville', 42, 10, 'vrai'),
(83, 250, 'double', 'montagne', 62, 10, 'vrai'),
(95, 180, 'simple', 'ville', 45, 10, 'vrai'),
(100, 230, 'double', 'mer', 65, 10, 'vrai'),
(12, 250, 'simple', 'ville', 45, 11, 'vrai'),
(23, 180, 'double', 'mer', 60, 11, 'vrai'),
(35, 300, 'simple', 'montagne', 40, 11, 'vrai'),
(48, 220, 'double', 'ville', 55, 11, 'vrai'),
(57, 200, 'simple', 'mer', 48, 11, 'vrai'),
(66, 270, 'double', 'montagne', 58, 11, 'vrai'),
(71, 190, 'simple', 'ville', 42, 11, 'vrai'),
(82, 250, 'double', 'montagne', 62, 11, 'vrai'),
(95, 180, 'simple', 'ville', 45, 11, 'vrai'),
(99, 230, 'double', 'mer', 65, 11, 'vrai'),
(11, 250, 'simple', 'ville', 45, 12, 'vrai'),
(22, 180, 'double', 'mer', 60, 12, 'vrai'),
(34, 300, 'simple', 'montagne', 40, 12, 'vrai'),
(47, 220, 'double', 'ville', 55, 12, 'vrai'),
(56, 200, 'simple', 'mer', 48, 12, 'vrai'),
(69, 270, 'double', 'montagne', 58, 12, 'vrai'),
(71, 190, 'simple', 'ville', 42, 12, 'vrai'),
(83, 250, 'double', 'montagne', 62, 12, 'vrai'),
(95, 180, 'simple', 'ville', 45, 12, 'vrai'),
(100, 230, 'double', 'mer', 65, 12, 'vrai'),
(10, 250, 'simple', 'ville', 45, 13, 'vrai'),
(21, 180, 'double', 'mer', 60, 13, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 13, 'vrai'),
(44, 220, 'double', 'ville', 55, 13, 'vrai'),
(55, 200, 'simple', 'mer', 48, 13, 'vrai'),
(66, 270, 'double', 'montagne', 58, 13, 'vrai'),
(71, 190, 'simple', 'ville', 42, 13, 'vrai'),
(82, 250, 'double', 'montagne', 62, 13, 'vrai'),
(95, 180, 'simple', 'ville', 45, 13, 'vrai'),
(99, 230, 'double', 'mer', 65, 13, 'vrai'),
(10, 250, 'simple', 'ville', 45, 14, 'vrai'),
(21, 180, 'double', 'mer', 60, 14, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 14, 'vrai'),
(44, 220, 'double', 'ville', 55, 14, 'vrai'),
(55, 200, 'simple', 'mer', 48, 14, 'vrai'),
(66, 270, 'double', 'montagne', 58, 14, 'vrai'),
(71, 190, 'simple', 'ville', 42, 14, 'vrai'),
(82, 250, 'double', 'montagne', 62, 14, 'vrai'),
(95, 180, 'simple', 'ville', 45, 14, 'vrai'),
(99, 230, 'double', 'mer', 65, 14, 'vrai'),
(10, 250, 'simple', 'ville', 45, 15, 'vrai'),
(21, 180, 'double', 'mer', 60, 15, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 15, 'vrai'),
(44, 220, 'double', 'ville', 55, 15, 'vrai'),
(55, 200, 'simple', 'mer', 48, 15, 'vrai'),
(66, 270, 'double', 'montagne', 58, 15, 'vrai'),
(71, 190, 'simple', 'ville', 42, 15, 'vrai'),
(82, 250, 'double', 'montagne', 62, 15, 'vrai'),
(95, 180, 'simple', 'ville', 45, 15, 'vrai'),
(99, 230, 'double', 'mer', 65, 15, 'vrai'),
(10, 250, 'simple', 'ville', 45, 16, 'vrai'),
(21, 180, 'double', 'mer', 60, 16, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 16, 'vrai'),
(44, 220, 'double', 'ville', 55, 16, 'vrai'),
(55, 200, 'simple', 'mer', 48, 16, 'vrai'),
(66, 270, 'double', 'montagne', 58, 16, 'vrai'),
(71, 190, 'simple', 'ville', 42, 16, 'vrai'),
(82, 250, 'double', 'montagne', 62, 16, 'vrai'),
(95, 180, 'simple', 'ville', 45, 16, 'vrai'),
(99, 230, 'double', 'mer', 65, 16, 'vrai'),
(10, 250, 'simple', 'ville', 45, 17, 'vrai'),
(21, 180, 'double', 'mer', 60, 17, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 17, 'vrai'),
(44, 220, 'double', 'ville', 55, 17, 'vrai'),
(55, 200, 'simple', 'mer', 48, 17, 'vrai'),
(66, 270, 'double', 'montagne', 58, 17, 'vrai'),
(71, 190, 'simple', 'ville', 42, 17, 'vrai'),
(82, 250, 'double', 'montagne', 62, 17, 'vrai'),
(95, 180, 'simple', 'ville', 45, 17, 'vrai'),
(99, 230, 'double', 'mer', 65, 17, 'vrai'),
(10, 250, 'simple', 'ville', 45, 18, 'vrai'),
(21, 180, 'double', 'mer', 60, 18, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 18, 'vrai'),
(44, 220, 'double', 'ville', 55, 18, 'vrai'),
(55, 200, 'simple', 'mer', 48, 18, 'vrai'),
(66, 270, 'double', 'montagne', 58, 18, 'vrai'),
(71, 190, 'simple', 'ville', 42, 18, 'vrai'),
(82, 250, 'double', 'montagne', 62, 18, 'vrai'),
(95, 180, 'simple', 'ville', 45, 18, 'vrai'),
(99, 230, 'double', 'mer', 65, 18, 'vrai'),
(10, 250, 'simple', 'ville', 45, 19, 'vrai'),
(21, 180, 'double', 'mer', 60, 19, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 19, 'vrai'),
(44, 220, 'double', 'ville', 55, 19, 'vrai'),
(55, 200, 'simple', 'mer', 48, 19, 'faux'),
(66, 270, 'double', 'montagne', 58, 19, 'vrai'),
(71, 190, 'simple', 'ville', 42, 19, 'vrai'),
(82, 250, 'double', 'montagne', 62, 19, 'vrai'),
(95, 180, 'simple', 'ville', 45, 19, 'vrai'),
(99, 230, 'double', 'mer', 65, 19, 'vrai'),
(10, 250, 'simple', 'ville', 45, 20, 'vrai'),
(21, 180, 'double', 'mer', 60, 20, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 20, 'vrai'),
(44, 220, 'double', 'ville', 55, 20, 'vrai'),
(55, 200, 'simple', 'mer', 48, 20, 'vrai'),
(66, 270, 'double', 'montagne', 58, 20, 'vrai'),
(71, 190, 'simple', 'ville', 42, 20, 'vrai'),
(82, 250, 'double', 'montagne', 62, 20, 'vrai'),
(95, 180, 'simple', 'ville', 45, 20, 'vrai'),
(99, 230, 'double', 'mer', 65, 20, 'vrai'),
(10, 250, 'simple', 'ville', 45, 21, 'vrai'),
(21, 180, 'double', 'mer', 60, 21, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 21, 'vrai'),
(44, 220, 'double', 'ville', 55, 21, 'vrai'),
(55, 200, 'simple', 'mer', 48, 21, 'vrai'),
(66, 270, 'double', 'montagne', 58, 21, 'vrai'),
(71, 190, 'simple', 'ville', 42, 21, 'vrai'),
(82, 250, 'double', 'montagne', 62, 21, 'vrai'),
(95, 180, 'simple', 'ville', 45, 21, 'vrai'),
(99, 230, 'double', 'mer', 65, 21, 'vrai'),
(10, 250, 'simple', 'ville', 45, 22, 'vrai'),
(21, 180, 'double', 'mer', 60, 22, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 22, 'vrai'),
(44, 220, 'double', 'ville', 55, 22, 'vrai'),
(55, 200, 'simple', 'mer', 48, 22, 'vrai'),
(66, 270, 'double', 'montagne', 58, 22, 'vrai'),
(71, 190, 'simple', 'ville', 42, 22, 'vrai'),
(82, 250, 'double', 'montagne', 62, 22, 'vrai'),
(95, 180, 'simple', 'ville', 45, 22, 'vrai'),
(99, 230, 'double', 'mer', 65, 22, 'vrai'),
(10, 250, 'simple', 'ville', 45, 23, 'vrai'),
(21, 180, 'double', 'mer', 60, 23, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 23, 'vrai'),
(44, 220, 'double', 'ville', 55, 23, 'vrai'),
(55, 200, 'simple', 'mer', 48, 23, 'vrai'),
(66, 270, 'double', 'montagne', 58, 23, 'vrai'),
(71, 190, 'simple', 'ville', 42, 23, 'vrai'),
(82, 250, 'double', 'montagne', 62, 23, 'vrai'),
(95, 180, 'simple', 'ville', 45, 23, 'vrai'),
(99, 230, 'double', 'mer', 65, 23, 'vrai'),
(10, 250, 'simple', 'ville', 45, 24, 'vrai'),
(21, 180, 'double', 'mer', 60, 24, 'vrai'),
(33, 300, 'simple', 'montagne', 40, 24, 'vrai'),
(44, 220, 'double', 'ville', 55, 24, 'vrai'),
(55, 200, 'simple', 'mer', 48, 24, 'vrai'),
(66, 270, 'double', 'montagne', 58, 24, 'vrai'),
(71, 190, 'simple', 'ville', 42, 24, 'vrai'),
(82, 250, 'double', 'montagne', 62, 24, 'vrai'),
(95, 180, 'simple', 'ville', 45, 24, 'vrai'),
(99, 230, 'double', 'mer', 65, 24, 'vrai'),
(25, 250, 'simple', 'ville', 45, 25, 'vrai'),
(37, 180, 'double', 'mer', 60, 25, 'vrai'),
(43, 300, 'simple', 'montagne', 40, 25, 'vrai'),
(56, 220, 'double', 'ville', 55, 25, 'vrai'),
(61, 200, 'simple', 'mer', 48, 25, 'vrai'),
(72, 270, 'double', 'montagne', 58, 25, 'vrai'),
(81, 190, 'simple', 'ville', 42, 25, 'vrai'),
(85, 250, 'double', 'montagne', 62, 25, 'vrai'),
(91, 180, 'simple', 'ville', 45, 25, 'vrai'),
(99, 230, 'double', 'mer', 65, 25, 'vrai'),
(25, 250, 'simple', 'ville', 45, 26, 'vrai'),
(37, 180, 'double', 'mer', 60, 26, 'vrai'),
(43, 300, 'simple', 'montagne', 40, 26, 'vrai'),
(56, 220, 'double', 'ville', 55, 26, 'vrai'),
(61, 200, 'simple', 'mer', 48, 26, 'vrai'),
(72, 270, 'double', 'montagne', 58, 26, 'vrai'),
(81, 190, 'simple', 'ville', 42, 26, 'vrai'),
(85, 250, 'double', 'montagne', 62, 26, 'vrai'),
(91, 180, 'simple', 'ville', 45, 26, 'vrai'),
(99, 230, 'double', 'mer', 65, 26, 'vrai'),
(25, 250, 'simple', 'ville', 45, 27, 'vrai'),
(37, 180, 'double', 'mer', 60, 27, 'vrai'),
(43, 300, 'simple', 'montagne', 40, 27, 'vrai'),
(56, 220, 'double', 'ville', 55, 27, 'vrai'),
(61, 200, 'simple', 'mer', 48, 27, 'vrai'),
(72, 270, 'double', 'montagne', 58, 27, 'vrai'),
(81, 190, 'simple', 'ville', 42, 27, 'vrai'),
(85, 250, 'double', 'montagne', 62, 27, 'vrai'),
(91, 180, 'simple', 'ville', 45, 27, 'vrai'),
(99, 230, 'double', 'mer', 65, 27, 'vrai'),
(22, 250, 'simple', 'ville', 45, 28, 'vrai'),
(34, 180, 'double', 'mer', 60, 28, 'vrai'),
(42, 300, 'simple', 'montagne', 40, 28, 'vrai'),
(55, 220, 'double', 'ville', 55, 28, 'vrai'),
(66, 200, 'simple', 'mer', 48, 28, 'vrai'),
(73, 270, 'double', 'montagne', 58, 28, 'faux'),
(82, 190, 'simple', 'ville', 42, 28, 'vrai'),
(88, 250, 'double', 'montagne', 62, 28, 'vrai'),
(91, 180, 'simple', 'ville', 45, 28, 'vrai'),
(98, 230, 'double', 'mer', 65, 28, 'vrai'),
(25, 250, 'simple', 'ville', 45, 29, 'vrai'),
(37, 180, 'double', 'mer', 60, 29, 'vrai'),
(43, 300, 'simple', 'montagne', 40, 29, 'vrai'),
(56, 220, 'double', 'ville', 55, 29, 'vrai'),
(61, 200, 'simple', 'mer', 48, 29, 'vrai'),
(72, 270, 'double', 'montagne', 58, 29, 'vrai'),
(81, 190, 'simple', 'ville', 42, 29, 'vrai'),
(85, 250, 'double', 'montagne', 62, 29, 'vrai'),
(91, 180, 'simple', 'ville', 45, 29, 'vrai'),
(99, 230, 'double', 'mer', 65, 29, 'vrai'),
(21, 250, 'simple', 'ville', 45, 30, 'vrai'),
(32, 180, 'double', 'mer', 60, 30, 'vrai'),
(45, 300, 'simple', 'montagne', 40, 30, 'vrai'),
(57, 220, 'double', 'ville', 55, 30, 'vrai'),
(62, 200, 'simple', 'mer', 48, 30, 'vrai'),
(73, 270, 'double', 'montagne', 58, 30, 'vrai'),
(81, 190, 'simple', 'ville', 42, 30, 'vrai'),
(86, 250, 'double', 'montagne', 62, 30, 'vrai'),
(92, 180, 'simple', 'ville', 45, 30, 'vrai'),
(98, 230, 'double', 'mer', 65, 30, 'vrai'),
(24, 250, 'simple', 'ville', 45, 31, 'vrai'),
(36, 180, 'double', 'mer', 60, 31, 'vrai'),
(41, 300, 'simple', 'montagne', 40, 31, 'vrai'),
(54, 220, 'double', 'ville', 55, 31, 'vrai'),
(66, 200, 'simple', 'mer', 48, 31, 'vrai'),
(75, 270, 'double', 'montagne', 58, 31, 'vrai'),
(84, 190, 'simple', 'ville', 42, 31, 'vrai'),
(87, 250, 'double', 'montagne', 62, 31, 'vrai'),
(93, 180, 'simple', 'ville', 45, 31, 'vrai'),
(97, 230, 'double', 'mer', 65, 31, 'vrai'),
(23, 250, 'simple', 'ville', 45, 32, 'vrai'),
(35, 180, 'double', 'mer', 60, 32, 'vrai'),
(40, 300, 'simple', 'montagne', 40, 32, 'vrai'),
(53, 220, 'double', 'ville', 55, 32, 'vrai'),
(65, 200, 'simple', 'mer', 48, 32, 'vrai'),
(74, 270, 'double', 'montagne', 58, 32, 'vrai'),
(83, 190, 'simple', 'ville', 42, 32, 'vrai'),
(86, 250, 'double', 'montagne', 62, 32, 'vrai'),
(94, 180, 'simple', 'ville', 45, 32, 'vrai'),
(96, 230, 'double', 'mer', 65, 32, 'vrai'),
(22, 250, 'simple', 'ville', 45, 33, 'vrai'),
(34, 180, 'double', 'mer', 60, 33, 'vrai'),
(42, 300, 'simple', 'montagne', 40, 33, 'vrai'),
(55, 220, 'double', 'ville', 55, 33, 'vrai'),
(61, 200, 'simple', 'mer', 48, 33, 'vrai'),
(72, 270, 'double', 'montagne', 58, 33, 'vrai'),
(81, 190, 'simple', 'ville', 42, 33, 'vrai'),
(85, 250, 'double', 'montagne', 62, 33, 'vrai'),
(91, 180, 'simple', 'ville', 45, 33, 'vrai'),
(99, 230, 'double', 'mer', 65, 33, 'vrai'),
(5, 250, 'simple', 'ville', 45, 34, 'vrai'),
(12, 180, 'double', 'mer', 60, 34, 'vrai'),
(17, 300, 'simple', 'montagne', 40, 34, 'vrai'),
(23, 220, 'double', 'ville', 55, 34, 'vrai'),
(28, 200, 'simple', 'mer', 48, 34, 'vrai'),
(32, 270, 'double', 'montagne', 58, 34, 'vrai'),
(37, 190, 'simple', 'ville', 42, 34, 'vrai'),
(40, 250, 'double', 'montagne', 62, 34, 'vrai'),
(8, 180, 'simple', 'ville', 45, 34, 'vrai'),
(14, 230, 'double', 'mer', 65, 34, 'vrai'),
(25, 120, 'simple', 'ville', 45, 35, 'vrai'),
(9, 149, 'double', 'mer', 60, 35, 'vrai'),
(15, 300, 'simple', 'montagne', 40, 35, 'vrai'),
(20, 220, 'double', 'ville', 55, 35, 'vrai'),
(25, 200, 'simple', 'mer', 48, 35, 'vrai'),
(31, 270, 'double', 'montagne', 58, 35, 'vrai'),
(36, 190, 'simple', 'ville', 42, 35, 'vrai'),
(38, 250, 'double', 'montagne', 62, 35, 'vrai'),
(4, 180, 'simple', 'ville', 45, 35, 'vrai'),
(18, 230, 'double', 'mer', 65, 35, 'vrai'),
(7, 250, 'simple', 'ville', 45, 36, 'vrai'),
(13, 180, 'double', 'mer', 60, 36, 'vrai'),
(19, 300, 'simple', 'montagne', 40, 36, 'vrai'),
(22, 220, 'double', 'ville', 55, 36, 'vrai'),
(27, 200, 'simple', 'mer', 48, 36, 'vrai'),
(33, 270, 'double', 'montagne', 58, 36, 'vrai'),
(39, 190, 'simple', 'ville', 42, 36, 'vrai'),
(1, 250, 'double', 'montagne', 62, 36, 'vrai'),
(10, 180, 'simple', 'ville', 45, 36, 'vrai'),
(26, 230, 'double', 'mer', 65, 36, 'vrai'),
(2, 250, 'simple', 'ville', 45, 37, 'vrai'),
(8, 180, 'double', 'mer', 60, 37, 'vrai'),
(11, 300, 'simple', 'montagne', 40, 37, 'vrai'),
(16, 220, 'double', 'ville', 55, 37, 'vrai'),
(21, 200, 'simple', 'mer', 48, 37, 'vrai'),
(29, 270, 'double', 'montagne', 58, 37, 'vrai'),
(35, 190, 'simple', 'ville', 42, 37, 'vrai'),
(6, 250, 'double', 'montagne', 62, 37, 'vrai'),
(24, 180, 'simple', 'ville', 45, 37, 'vrai'),
(30, 230, 'double', 'mer', 65, 37, 'vrai'),
(4, 250, 'simple', 'ville', 45, 38, 'vrai'),
(14, 180, 'double', 'mer', 60, 38, 'vrai'),
(23, 300, 'simple', 'montagne', 40, 38, 'vrai'),
(28, 220, 'double', 'ville', 55, 38, 'vrai'),
(32, 200, 'simple', 'mer', 48, 38, 'vrai'),
(36, 270, 'double', 'montagne', 58, 38, 'vrai'),
(39, 190, 'simple', 'ville', 42, 38, 'vrai'),
(5, 250, 'double', 'montagne', 62, 38, 'vrai'),
(17, 180, 'simple', 'ville', 45, 38, 'vrai'),
(25, 230, 'double', 'mer', 65, 38, 'vrai'),
(1, 250, 'simple', 'ville', 45, 39, 'vrai'),
(9, 180, 'double', 'mer', 60, 39, 'vrai'),
(12, 300, 'simple', 'montagne', 40, 39, 'vrai'),
(15, 220, 'double', 'ville', 55, 39, 'vrai'),
(20, 200, 'simple', 'mer', 48, 39, 'vrai'),
(26, 270, 'double', 'montagne', 58, 39, 'vrai'),
(34, 190, 'simple', 'ville', 42, 39, 'vrai'),
(8, 250, 'double', 'montagne', 62, 39, 'vrai'),
(19, 180, 'simple', 'ville', 45, 39, 'vrai'),
(30, 230, 'double', 'mer', 65, 39, 'vrai'),
(25, 200, 'simple', 'ville', 28, 40, 'vrai'),
(42, 280, 'double', 'mer', 32, 40, 'vrai'),
(61, 150, 'simple', 'montagne', 18, 40, 'vrai'),
(55, 300, 'double', 'ville', 36, 40, 'vrai'),
(30, 170, 'simple', 'mer', 22, 40, 'vrai'),
(68, 220, 'simple', 'ville', 25, 40, 'vrai'),
(48, 260, 'double', 'montagne', 30, 40, 'faux'),
(12, 130, 'simple', 'ville', 20, 40, 'vrai'),
(50, 190, 'simple', 'mer', 24, 40, 'vrai'),
(64, 290, 'double', 'ville', 34, 40, 'vrai');

-- --------------------------------------------------------

--
-- Structure de la table `chhotel`
--

CREATE TABLE `chhotel` (
  `id` int(11) NOT NULL,
  `nbrHotel` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numTel` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table contenant les 5 chaines hotelieres';

--
-- Déchargement des données de la table `chhotel`
--

INSERT INTO `chhotel` (`id`, `nbrHotel`, `email`, `numTel`, `adresse`, `nom`) VALUES
(1, 8, 'ChaineHTL1@gmail.com', '0123456789', '123 Rue de la Fontaine\r\n75001 ', 'Chaine1'),
(2, 8, 'ChaineHTL2@gmail.com', '0123456789', '122 Rue de la Fontaine\r\n75001 ', 'Chaine2'),
(3, 8, 'ChaineHTL3@gmail.com', '012345678910', '121 Rue de la Fontaine\r\n75001 ', 'Chaine3'),
(4, 8, 'ChaineHTL4@gmail.com', '0123456789', '120 Rue de la Fontaine\r\n75001 ', 'Chaine4'),
(5, 8, 'ChaineHTL5@gmail.com', '0123456789', '119 Rue de la Fontaine\r\n75001 ', 'Chaine5');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idRes` int(11) NOT NULL,
  `nas` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idRes`, `nas`, `nom`, `adresse`) VALUES
(11, 12345, 'Dondi', 'adada');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `nas` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `idHotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `categorie` int(11) NOT NULL,
  `nbreCh` int(11) NOT NULL,
  `numTel` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `idCh` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `email`, `categorie`, `nbreCh`, `numTel`, `adresse`, `ville`, `idCh`, `nom`) VALUES
(1, 'hotel1@gmail.com', 1, 10, '5141234567', '123 Rue Principale', 'ottawa', 1, 'hotel1'),
(2, 'hotel2@gmail.com', 2, 10, '5142345678', '456 Avenue Secondaire', 'toronto', 1, 'hotel2'),
(3, 'hotel3@gmail.com', 3, 10, '5143456789', '789 Boulevard Tertiaire', 'montreal', 1, 'hotel3'),
(4, 'hotel4@gmail.com', 4, 10, '5144567890', '1010 Rue Quaternaire', 'vancouver', 1, 'hotel4'),
(5, 'hotel5@gmail.com', 5, 10, '5145678901', '1111 Avenue Cinquième', 'ottawa', 1, 'hotel5'),
(6, 'hotel6@gmail.com', 1, 10, '5146789012', '2222 Boulevard Sixième', 'toronto', 1, 'hotel6'),
(7, 'hotel7@gmail.com', 2, 10, '5147890123', '3333 Rue Septième', 'montreal', 1, 'hotel7'),
(8, 'hotel8@gmail.com', 3, 10, '5148901234', '4444 Avenue Huitième', 'vancouver', 1, 'hotel8'),
(9, 'hotel9@gmail.com', 4, 10, '5149012345', '5555 Boulevard Neuvième', 'ottawa', 2, 'hotel9'),
(10, 'hotel10@gmail.com', 5, 10, '5140123456', '6666 Rue Dixième', 'toronto', 2, 'hotel10'),
(11, 'hotel11@gmail.com', 2, 10, '5142345678', '456 Avenue Secondaire', 'toronto', 2, 'hotel11'),
(12, 'hotel12@gmail.com', 3, 10, '5143456789', '789 Boulevard Tertiaire', 'montreal', 2, 'hotel12'),
(13, 'hotel13@gmail.com', 4, 10, '5144567890', '1010 Rue Quaternaire', 'vancouver', 2, 'hotel13'),
(14, 'hotel14@gmail.com', 5, 10, '5145678901', '1111 Avenue Cinquième', 'ottawa', 2, 'hotel14'),
(15, 'hotel15@gmail.com', 1, 10, '5146789012', '2222 Boulevard Sixième', 'toronto', 2, 'hotel15'),
(16, 'hotel16@gmail.com', 2, 10, '5147890123', '3333 Rue Septième', 'montreal', 2, 'hotel16'),
(17, 'hotel17@gmail.com', 3, 10, '5148901234', '4444 Avenue Huitième', 'vancouver', 3, 'hotel17'),
(18, 'hotel18@gmail.com', 4, 10, '5149012345', '5555 Boulevard Neuvième', 'ottawa', 3, 'hotel18'),
(19, 'hotel19@gmail.com', 5, 10, '5140123456', '6666 Rue Dixième', 'toronto', 3, 'hotel19'),
(20, 'hotel20@gmail.com', 1, 10, '5141234567', '7777 Avenue Onzième', 'montreal', 3, 'hotel20'),
(21, 'hotel21@gmail.com', 1, 10, '5141234567', '123 Rue Principale', 'ottawa', 3, 'hotel21'),
(22, 'hotel22@gmail.com', 2, 10, '5142345678', '456 Avenue Secondaire', 'toronto', 3, 'hotel22'),
(23, 'hotel23@gmail.com', 3, 10, '5143456789', '789 Boulevard Tertiaire', 'montreal', 3, 'hotel23'),
(24, 'hotel24@gmail.com', 4, 10, '5144567890', '1010 Rue Quaternaire', 'vancouver', 3, 'hotel24'),
(25, 'hotel25@gmail.com', 5, 10, '5145678901', '1111 Avenue Cinquième', 'ottawa', 4, 'hotel25'),
(26, 'hotel26@gmail.com', 1, 10, '5146789012', '2222 Boulevard Sixième', 'toronto', 4, 'hotel26'),
(27, 'hotel27@gmail.com', 2, 10, '5147890123', '3333 Rue Septième', 'montreal', 4, 'hotel27'),
(28, 'hotel28@gmail.com', 3, 10, '5148901234', '4444 Avenue Huitième', 'vancouver', 4, 'hotel28'),
(29, 'hotel29@gmail.com', 4, 10, '5149012345', '5555 Boulevard Neuvième', 'ottawa', 4, 'hotel29'),
(30, 'hotel30@gmail.com', 5, 10, '5140123456', '6666 Rue Dixième', 'toronto', 4, 'hotel30'),
(31, 'hotel31@gmail.com', 1, 10, '5141234567', '123 Rue Principale', 'ottawa', 4, 'hotel31'),
(32, 'hotel32@gmail.com', 2, 10, '5142345678', '456 Avenue Secondaire', 'toronto', 4, 'hotel32'),
(33, 'hotel33@gmail.com', 3, 10, '5143456789', '789 Boulevard Tertiaire', 'montreal', 5, 'hotel33'),
(34, 'hotel34@gmail.com', 4, 10, '5144567890', '1010 Rue Quaternaire', 'vancouver', 5, 'hotel34'),
(35, 'hotel35@gmail.com', 5, 10, '5145678901', '1111 Avenue Cinquième', 'ottawa', 5, 'hotel35'),
(36, 'hotel36@gmail.com', 1, 10, '5146789012', '2222 Boulevard Sixième', 'toronto', 5, 'hotel36'),
(37, 'hotel37@gmail.com', 2, 10, '5147890123', '3333 Rue Septième', 'montreal', 5, 'hotel37'),
(38, 'hotel38@gmail.com', 3, 10, '5148901234', '4444 Avenue Huitième', 'vancouver', 5, 'hotel38'),
(39, 'hotel39@gmail.com', 4, 10, '5149012345', '5555 Boulevard Neuvième', 'ottawa', 5, 'hotel39'),
(40, 'hotel40@gmail.com', 5, 10, '5140123456', '6666 Rue Dixième', 'toronto', 5, 'hotel40');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `nas` int(11) NOT NULL,
  `nomClient` varchar(255) NOT NULL,
  `dateD` varchar(255) NOT NULL,
  `dateF` varchar(255) NOT NULL,
  `paiement` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `numChambre` int(11) NOT NULL,
  `idHotel` int(11) NOT NULL,
  `idCh` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `idRes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chhotel`
--
ALTER TABLE `chhotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idRes`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`nas`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idRes`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chhotel`
--
ALTER TABLE `chhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `nas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
