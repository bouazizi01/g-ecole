-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Janvier 2017 à 23:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_ajout` date NOT NULL,
  `module` varchar(100) NOT NULL,
  `docs` varchar(100) NOT NULL,
  `niveau` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`id`, `titre`, `type`, `date_ajout`, `module`, `docs`, `niveau`, `user_id`) VALUES
(1, 'document de j2ee', 'cours', '2016-12-01', 'J2EE', 'supportj2eeservletjspm-Youssfi.pdf', 5, 1),
(3, 'Cours Administration Linux', 'Cours', '2017-01-03', 'Oracle', 'administration-reseau_20_10_2016.pdf', 3, 5),
(4, 'TP DHCP Administration Linux', 'TP', '2017-01-03', 'Administration', 'DHCP.pdf', 5, 5),
(5, 'Cours Oracle', 'Cours', '2017-01-12', 'Administration', '3G.pptx', 4, 3),
(6, 'Cours Administration Linux', 'Cours', '2017-01-12', 'Programmation Mobile', 'Les Diagrammes.pdf', 5, 3),
(8, 'Vo IP', 'Cours', '2017-01-12', 'Vo IP', '3G.pptx', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `documents_administratif`
--

CREATE TABLE IF NOT EXISTS `documents_administratif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `cne` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date_ajout` date NOT NULL,
  `validation_admin` int(11) NOT NULL DEFAULT '0',
  `niveau` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `documents_administratif`
--

INSERT INTO `documents_administratif` (`id`, `nom`, `prenom`, `filiere`, `cne`, `type`, `date_ajout`, `validation_admin`, `niveau`, `id_etudiant`) VALUES
(3, 'Lakbir', 'ABDERRAHIM', 'IRM', 'MC238089', 'Convention de stage', '2017-01-09', 1, 5, 1),
(4, 'Lakbir', 'ABDERRAHIM', 'IRM', 'MC238089', 'Diplôme Bac+3', '2017-01-10', 1, 5, 1),
(5, 'Lakbir', 'ABDERRAHIM', 'MSI', 'MC238089', 'Attestation de réussite', '2017-01-10', 0, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `niveau` int(11) NOT NULL DEFAULT '0',
  `modules` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Matricule` (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `tel`, `email`, `matricule`, `role`, `niveau`, `modules`, `photo`, `active`) VALUES
(1, 'Lakbir', 'Abderrahim', '0602074607', 'lakbir@supemir.com', 'SUPEMIR201757', 'ETUDIANT', 5, '', 'Profile1.png', 1),
(2, 'Bouazizi', 'abderrazzak', '0639629469', 'bouazizi@supemir.com', 'SUPEMIR201756', 'ETUDIANT', 5, '', 'Profile1.png', 0),
(3, 'Harik', 'Mohammed', '0655897414', 'med.harik@gmail.com', 'SUPEMIR2017HM', 'PROF', 0, 'PHP Framework, BD', 'Profile1.png', 1),
(4, 'Bousseta', 'Brahim', '0658974100', 'bousetta@gmail.com', 'SUPEMIR2017BB', 'PROF', 0, 'Android, Oracle', 'Profile1.png', 0),
(5, 'Admin', 'Admin', '06612247350', 'supemir@supemir.com', 'nimda', 'ADMIN', 0, 'null', 'Profile1.png', 1),
(6, 'Houssam', 'Alami', '0689521475', 'h.alami@supemir.com', 'SUPEMIR201755', 'ETUDIANT', 5, '', 'Profile1.png', 1),
(7, 'Ahlam', 'Zeroual', '0655891111', 'ahlam@supemir.com', 'SUPEMIR201754', 'ETUDIANT', 5, '', 'Profile1.png', 1),
(12, 'Ali', 'Malcom', '0611578400', 'ali.malcom@supemir.com', 'SUPEMIR201753', 'ETUDIANT', 5, '', 'Profile1.png', 1),
(14, 'Lionel', 'Missiong', '0655852147', 'lionel.missiong@supemir.com', 'SUPEMIR201752', 'ETUDIANT', 5, '', 'Profile1.png', 0),
(37, 'Avele', 'Gleen', '0608992147', 'gleen@supemir.com', 'SUPEMIR201751', 'ETUDIANT', 5, '', 'Profile1.png', 0),
(38, 'El Khaila', 'Hind', '0611274810', 'hind.khaila@supemir.com', 'SUPEMIR2017310', 'ETUDIANT', 3, '', 'Profile1.png', 0),
(39, 'Peggy', 'Pouvi', '0688951475', 'peggy@supemir.com', 'SUPEMIR201741', 'ETUDIANT', 4, '', 'Profile1.png', 1),
(50, 'Rachid', 'Bahadi', '06020746082', 'lakbir1993@gmail.com', 'SUPEMIR20175500', 'ETUDIANT', 0, '', 'Profile1.png', 0),
(55, 'Youssef', 'Zizza', '0639629469', 'youssef.ziza@gmail.com', 'SUPEMIR201755P', 'PROF', 0, 'Securité Internet', 'Profile1.png', 0),
(56, 'Yassine', 'Khazri', '0688951475', 'yassine.khazri@gmail.com', 'SUPEMIR2017P1', 'PROF', 0, 'Gestion Projet', 'Profile1.png', 0),
(57, 'Mohammed', 'Anouar', '0688952147', 'mohammed.anouar@gmail.com', 'SUPEMIR2017MA', 'PROF', 0, 'Anglais', 'Profile1.png', 1),
(58, 'Hammadi', 'xxx', '0689574100', 'hammadi@supemir.com', 'SUPEMIR201735', 'ETUDIANT', 3, '', 'Profile1.png', 0),
(59, 'Toumi', 'Hicham', '0655893214', 'hicham@gmail.com', 'SUPEMIR2017HT', 'PROF', 0, 'Administration', 'Profile1.png', 0),
(61, 'Youssef', 'Tahiri', '0611478523', 'tahiri@gmail.com', 'SUPEMIR2017YT', 'PROF', 0, 'Math', 'Profile1.png', 0),
(64, 'Abdelghani', 'Bahadi', '06020746082', 'lakbir1993@gmail.com', 'SUPEMIR20175700', 'PROF', 3, '', 'Profile1.png', 0),
(65, 'Hajar', 'Sefouh', '0698741453', 'hajar@supemir.ma', 'SUPEMIR201717', 'PROF', 1, '', 'Profile1.png', 0),
(66, 'Imane', 'Imane', '0655896524', 'imane@supemir.com', 'SUPEMIR201738', 'ETUDIANT', 3, '', 'Profile1.png', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
