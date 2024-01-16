-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 jan. 2024 à 16:03
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Fast`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `sous_categorie_id` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `sous_categorie_id`, `nom`, `description`) VALUES
(1, NULL, ' Piano haut', 'Piano de type haut'),
(2, 1, 'Piano haut rouge', 'rouge de ouf'),
(3, 1, 'Piano haut noir', 'noir élégant'),
(4, 1, 'Piano haut blanc', 'blanc classique'),
(5, 1, 'Piano haut bleu', 'bleu apaisant'),
(6, NULL, 'Basse', 'Wah basse'),
(7, 6, 'Basse 4 cordes', 'Pour les amateurs de 4 cordes'),
(8, 6, 'Basse 5 cordes', 'Pour les amateurs de 5 cordes'),
(9, 6, 'Basse fretless', 'Pour les amateurs de fretless'),
(10, 6, 'Basse acoustique', 'Pour les amateurs de basses acoustiques'),
(11, NULL, 'Guitar electrique', 'Guitar de fou'),
(12, 11, 'Guitar Les Paul', 'Pour les amateurs de Les Paul'),
(13, 11, 'Guitar Stratocaster', 'Pour les amateurs de Stratocaster'),
(14, 11, 'Guitar Telecaster', 'Pour les amateurs de Telecaster'),
(15, 11, 'Guitar hollow body', 'Pour les amateurs de guitares hollow body'),
(16, NULL, 'Synthétique', 'synth'),
(17, 16, 'Synthé analogique', 'Pour les amateurs de synthés analogiques'),
(18, 16, 'Synthé numérique', 'Pour les amateurs de synthés numériques'),
(19, 16, 'Workstation', 'Pour les amateurs de workstations'),
(20, 16, 'Synthé modulaire', 'Pour les amateurs de synthés modulaires'),
(21, NULL, 'VST', 'Bon VST'),
(22, 21, 'Instruments virtuels', 'Pour les amateurs d\'instruments virtuels'),
(23, 21, 'Effets virtuels', 'Pour les amateurs d\'effets virtuels'),
(24, 21, 'Outils de production', 'Pour les amateurs d\'outils de production virtuels'),
(25, 21, 'VST gratuits', 'Pour les amateurs de VST gratuits'),
(26, NULL, 'MAO', 'Logiciel de compo'),
(27, 26, 'DAW (Digital Audio Workstation)', 'Pour les amateurs de DAW'),
(28, 26, 'Plugins MAO', 'Pour les amateurs de plugins MAO'),
(29, 26, 'Séquenceurs', 'Pour les amateurs de séquenceurs'),
(30, 26, 'MAO mobile', 'Pour les amateurs de MAO mobile'),
(31, NULL, 'Micro', 'microphone'),
(32, 31, 'Micros à condensateur', 'Pour les amateurs de micros à condensateur'),
(33, 31, 'Micros dynamiques', 'Pour les amateurs de micros dynamiques'),
(34, 31, 'Micros à ruban', 'Pour les amateurs de micros à ruban'),
(35, 31, 'Accessoires micro', 'Pour les amateurs d\'accessoires micro'),
(36, NULL, 'Enceintes', 'Monitoring'),
(37, 36, 'Enceintes de studio', 'Pour les amateurs d\'enceintes de studio'),
(38, 36, 'Enceintes amplifiées', 'Pour les amateurs d\'enceintes amplifiées'),
(39, 36, 'Subwoofers', 'Pour les amateurs de subwoofers'),
(40, 36, 'Accessoires enceintes', 'Pour les amateurs d\'accessoires enceintes');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `montant_total` varchar(255) DEFAULT NULL,
  `reduction` varchar(255) DEFAULT NULL,
  `tva` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `utilisateur_id`, `date_commande`, `statut`, `montant_total`, `reduction`, `tva`) VALUES
(1, 1, '2024-01-16 14:26:18', 'En cours', '50.00', '5.00', '10.00');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `produit_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `quantite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`produit_id`, `commande_id`, `quantite`) VALUES
(4, 1, '5');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom`, `adresse`, `telephone`, `email`) VALUES
(1, 'Teurki', '15 rue de doullens', '0712345678', 'four@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `libelle_court` varchar(255) DEFAULT NULL,
  `libelle_long` varchar(255) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `reduction` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie_id`, `libelle_court`, `libelle_long`, `prix`, `stock`, `reduction`) VALUES
(1, 2, 'Produit Piano haut rouge 1', 'Produit Piano haut rouge - Description 1', '29.99', 8, '7'),
(2, 2, 'Produit Piano haut rouge 2', 'Produit Piano haut rouge - Description 2', '59.98', 8, '14'),
(3, 2, 'Produit Piano haut rouge 3', 'Produit Piano haut rouge - Description 3', '89.97', 8, '21'),
(4, 2, 'Produit Piano haut rouge 4', 'Produit Piano haut rouge - Description 4', '119.96', 8, '28');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `coefficient` varchar(255) NOT NULL,
  `adresse_livraison` varchar(255) NOT NULL,
  `adresse_facturation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `telephone`, `cp`, `adresse`, `ville`, `type`, `coefficient`, `adresse_livraison`, `adresse_facturation`) VALUES
(1, 'test@hotmail.fr', '[\"ROLE_USER\"]', '0000', 'Diouf', 'Julien', '0713445689', '80000', '20 rue de l\'afpa', 'Amiens', 'particulier', '0.25', '20 rue de l\'afpa', '20 rue de l\'afpa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_497DD634365BF48` (`sous_categorie_id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67DFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`produit_id`,`commande_id`),
  ADD KEY `IDX_DC302E56F347EFB` (`produit_id`),
  ADD KEY `IDX_DC302E5682EA2E54` (`commande_id`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC27BCF5E72D` (`categorie_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_497DD634365BF48` FOREIGN KEY (`sous_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_DC302E5682EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `FK_DC302E56F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
