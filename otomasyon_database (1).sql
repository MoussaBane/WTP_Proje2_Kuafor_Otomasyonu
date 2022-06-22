-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 19:31
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `otomasyon_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `kullanicitable`
--

CREATE TABLE `kullanicitable` (
  `ID` int(11) NOT NULL,
  `AdSoyad` varchar(30) DEFAULT NULL,
  `Mail` varchar(30) DEFAULT NULL,
  `Tel` varchar(11) DEFAULT NULL,
  `Cinsiyet` varchar(5) DEFAULT NULL,
  `Pass_word` varchar(70) NOT NULL,
  `Kategori` varchar(9) DEFAULT 'KULLANICI'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `kullanicitable`
--

INSERT INTO `kullanicitable` (`ID`, `AdSoyad`, `Mail`, `Tel`, `Cinsiyet`, `Pass_word`, `Kategori`) VALUES
(18, 'LamineSieta', 'lamine.sieta@gmail.com', '05446887234', 'Erkek', 'fe2592b42a727e977f055947385b709cc82b16b9a87f88c6abf3900d65d0cdc3', 'KULLANICI'),
(19, 'MoussaBane', 'banemoussa2001@gmail.com', '05446887789', 'Erkek', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'ADMIN'),
(21, 'Kullanici2Soyadi2', 'kullanici2.soyadi2@gmail.com', '05446887234', 'Erkek', '890814b04557ed1045b7f301d35cda66516af2cb75635a75264c712c5463eaaf', 'KULLANICI'),
(22, 'Kullanici3Soyadi3', 'kullanici3.soyad3@gmail.com', '05446887256', 'Kadin', '0649e5db0d236ee29682689cd209acaad2d2545ab65f2a755ae86046fd61e30c', 'KULLANICI'),
(23, 'Kullanici4Soyad4', 'kullanici4.soyad4@gmail.com', '05446887788', 'Kadin', '92581c25223fc12cf5429f0a58cd8eb0deb325e528800b57dcb9a7ba2e818005', 'KULLANICI');

-- --------------------------------------------------------

--
-- Structure de la table `randevutable`
--

CREATE TABLE `randevutable` (
  `ID` int(11) NOT NULL,
  `Kullanici_ID` int(11) DEFAULT NULL,
  `Model` varchar(30) DEFAULT NULL,
  `RandevuDurumu` varchar(20) DEFAULT 'BEKLEMEDE',
  `RandevuTarih` date DEFAULT curdate(),
  `RandevuSaat` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `randevutable`
--

INSERT INTO `randevutable` (`ID`, `Kullanici_ID`, `Model`, `RandevuDurumu`, `RandevuTarih`, `RandevuSaat`) VALUES
(4, 18, 'Duzenli', 'BEKLEMEDE', '2022-06-22', '05:34:00'),
(6, 23, 'Pixie saç kesimi', 'BEKLEMEDE', '2022-06-29', '00:59:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `kullanicitable`
--
ALTER TABLE `kullanicitable`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `randevutable`
--
ALTER TABLE `randevutable`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `kullanicitable` (`Kullanici_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `kullanicitable`
--
ALTER TABLE `kullanicitable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `randevutable`
--
ALTER TABLE `randevutable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `randevutable`
--
ALTER TABLE `randevutable`
  ADD CONSTRAINT `kullanicitable` FOREIGN KEY (`Kullanici_ID`) REFERENCES `kullanicitable` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `randevutable_ibfk_1` FOREIGN KEY (`Kullanici_ID`) REFERENCES `kullanicitable` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
