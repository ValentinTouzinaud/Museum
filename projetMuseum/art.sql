-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210926.4834c5fe7d
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 28 déc. 2021 à 15:28
-- Version du serveur : 8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `art`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int DEFAULT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mdp`) VALUES
(1, 'admin17', 'azerty'),
(2, 'admin18', '$2y$10$PvWQxtiX8Or5aNAEk2d6G.wN1Jh85WKiInWYhHkozyKJpTeKPaqzq');

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `id` int NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `date_artiste` varchar(50) NOT NULL,
  `date_oeuvre` int NOT NULL,
  `peinture` varchar(75) NOT NULL,
  `genre` varchar(75) NOT NULL,
  `url` varchar(200) NOT NULL,
  `texte` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`id`, `nom`, `prenom`, `date_artiste`, `date_oeuvre`, `peinture`, `genre`, `url`, `texte`) VALUES
(1, 'van Gogh', 'Vincent', '1853 à 1890', 1888, 'La Nuit étoilée', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/390px-Starry_Night_Over_the_Rhone.jpg', 'Le fait de peindre la nuit a intrigué Van Gogh. La nuit et ses effets de lumière ont fourni à Van Gogh un sujet pour plusieurs de ses peintures plus célèbres, comme la \"Terrasse du café le soir\". La nuit fut une grande inspiration pour lui.'),
(2, 'van Gogh', 'Vincent', '1853 à 1890', 1889, 'La Nuit étoilée', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/390px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg', 'L\'œuvre rassemble à la fois une observation directe du sujet, et l\'ajout d\'éléments pour la composition. Le ciel occupe la majorité du tableau et est composé de volutes et de tourbillons rappelant des nébuleuses. Les étoiles et la Lune sont entourées par des touches de peinture créant ainsi un halo. L\'inspiration de celui-ci fut débordante.'),
(3, 'van Gogh', 'Vincent', '1853 à 1890', 1886, 'Autoportrait avec pipe', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Vincent_van_Gogh_-_Self-portrait_with_pipe_-_Google_Art_Project.jpg/331px-Vincent_van_Gogh_-_Self-portrait_with_pipe_-_Google_Art_Project.jpg', 'Un de ces nombreux autoportraits. Celui-ci a donc pris une pipe pour en faire un exemplaire original.'),
(4, 'van Gogh', 'Vincent', '1853 à 1890', 1889, 'Champ de blé avec cyprès', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Wheat-Field-with-Cypresses-%281889%29-Vincent-van-Gogh-Met.jpg/390px-Wheat-Field-with-Cypresses-%281889%29-Vincent-van-Gogh-Met.jpg', 'Cette oeuvre a été créée à Saint-Rémy-de-Provence près d\'Arles, en France, lorsque van Gogh se faisait soigner au Monastère Saint-Paul-de-Mausole.'),
(5, 'van Gogh', 'Vincent', '1853 à 1890', 1890, 'Route avec un cyprès et une étoile', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Van_Gogh_-_Country_road_in_Provence_by_night.jpg/390px-Van_Gogh_-_Country_road_in_Provence_by_night.jpg', 'Le tableau représente un paysage de Provence avec une route et un cyprès au centre, deux personnages en bas à droite et une étoile en haut à gauche. Le style et le sujet sont très proches du tableau plus connu La Nuit étoilée (1889).'),
(6, 'de Vinci', 'Léonard', '1452 à 1519', 1503, 'La Joconde', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/390px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg', 'La Joconde est devenue un tableau éminemment célèbre car, depuis sa réalisation, nombre d\'artistes l\'ont pris comme référence. À l\'époque romantique, les artistes ont été fascinés par ce tableau et ont contribué à développer le mythe qui l\'entoure, en faisant de ce tableau l’une des oeuvres d\'art les plus célèbres du monde.'),
(7, 'de Vinci', 'Léonard', '1452 à 1519', 1490, 'Homme de Vitruve', 'Peinture de science', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Vitruvian_Man_by_Leonardo_da_Vinci.jpg/390px-Vitruvian_Man_by_Leonardo_da_Vinci.jpg', 'Célèbre représentation des proportions idéales parfaites du corps humain parfaitement inscrit dans un cercle (centre : le nombril) et un carré (centre : les organes génitaux) (symbolique du cercle et du carré), l\'Homme de Vitruve est un symbole allégorique emblématique de l’Humanisme.'),
(8, 'de Vinci', 'Léonard', '1452 à 1519', 1512, 'Autoportrait de Léonard de Vinci', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Leonardo_da_Vinci_-_presumed_self-portrait_-_WGA12798.jpg/390px-Leonardo_da_Vinci_-_presumed_self-portrait_-_WGA12798.jpg', 'Cet autoportrait représente la tête d\'un vieil homme en vue de trois quarts, tourné vers la droite du spectateur. Le visage a un nez aquilin et est marqué par des rides profondes sur le front et des poches sous les yeux. Il est représenté fatigué et vieux, signe qu\'il est en fin de vie. Il a un air sage, marqué par l\'expérience.'),
(9, 'de Vinci', 'Léonard', '1452 à 1519', 1480, 'Tête d\'ours', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Da_Vinci_-_Head_of_a_Bear.jpg/405px-Da_Vinci_-_Head_of_a_Bear.jpg', 'L\'inspiration et la délicatesse de cette peinture nous montre que Léonard de Vinci avait une grande passion pour la peinture.'),
(10, 'Monet', 'Claude', '1840 à 1926', 1875, 'La promenade', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Monet_Umbrella.JPG/390px-Monet_Umbrella.JPG', 'Cette peinture était l\'une des dix-huit toiles de Monet pour le Deuxième salon impressionniste qui a eu lieu en avril 1876. Bien entendu, le salon n\'avait pas ce nom à l\'époque. Exposée sous le titre La Promenade, elle a été peu remarquée à l\'époque mais les rares commentaires étaient favorables.'),
(11, 'Monet', 'Claude', '1840 à 1926', 1868, 'La Pie', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Claude_Monet_-_The_Magpie_-_Google_Art_Project.jpg/390px-Claude_Monet_-_The_Magpie_-_Google_Art_Project.jpg', 'En 1868, Monet fait une tentative de suicide, car il a des difficultés financières. Profitant du développement du chemin de fer, il décide de prendre le train pour aller passer l’hiver et l’automne à Etretat en Normandie. Il y redécouvre les paysages enneigés qui lui sont chers.'),
(12, 'Monet', 'Claude', '1840 à 1926', 1885, 'Les Falaises à Étretat', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Claude_Monet_The_Cliffs_at_Etretat.jpg/390px-Claude_Monet_The_Cliffs_at_Etretat.jpg', 'Les Falaises d\'Étretat était une grande source d\'inspiration pour Claude Monet. Celui-ci à peint plus de 15 oeuvres de cette falaise. '),
(13, 'Monet', 'Claude', '1840 à 1926', 1845, 'La Japonaise', 'Peinture de portrait', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Claude_Monet-Madame_Monet_en_costume_japonais.jpg/228px-Claude_Monet-Madame_Monet_en_costume_japonais.jpg', 'Célèbre peinture de Claude Monet qui peint une japonaise.'),
(14, 'Monet', 'Claude', '1840 à 1926', 1899, 'Nymphéas et pont japonais', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/The_Water-Lily_Pond_-_Google_Arts_%26_Culture.jpg/225px-The_Water-Lily_Pond_-_Google_Arts_%26_Culture.jpg', 'Les Nymphéas est une série d\'environ 250 peintures à l\'huile impressionnistes élaborées par le peintre français Claude Monet pendant les 31 dernières années de sa vie. Ces peintures représentent le jardin de fleurs, et plus particulièrement le bassin de nénuphars, de la maison du peintre à Giverny.'),
(15, 'Monet', 'Claude', '1840 à 1926', 1886, 'Champ de coquelicots', 'Peinture de paysage', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Monet%2C_Claude_-_Poppy_Field.jpg/390px-Monet%2C_Claude_-_Poppy_Field.jpg', 'Champ de coquelicots est une huile sur toile du peintre impressionniste français Claude Monet datant de 1886.');

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `nom_r` varchar(50) NOT NULL,
  `prenom_r` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo_r` varchar(50) NOT NULL,
  `mdp_r` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `nom_r`, `prenom_r`, `email`, `pseudo_r`, `mdp_r`) VALUES
(6, 'bernard', 'peche', 'blabla2@gmil.com', 'KeepSand', '$2y$10$0phsAdsN6UI8qhvjxC3cF.AdmAAqDS.lcHxoQdNYnXa/3W4bM3pki'),
(7, 'biche', 'boche', 'buche@gmail.com', 'byche', '$2y$10$x0iMiWGErvjVhNdtEMR.p.B.uJhu6dtySCHBd/bjYd52zY9jLDo1i'),
(8, 't', 't', 't@gmail.com', 't', '$2y$10$PvWQxtiX8Or5aNAEk2d6G.wN1Jh85WKiInWYhHkozyKJpTeKPaqzq');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `jour` varchar(15) NOT NULL,
  `heure` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `jour`, `heure`) VALUES
(1, 'Lundi', '9h00 à 11h00'),
(2, 'Lundi', '13h00 à 15h00'),
(3, 'Lundi', '15h30 à 17h30'),
(4, 'Mardi', '9h00 à 11h00'),
(5, 'Mardi', '13h00 à 15h00'),
(6, 'Mardi', '15h30 à 17h30'),
(7, 'Mercredi', '8h00 à 10h00'),
(8, 'Mercredi', '10h30 à 12h30'),
(9, 'Mercredi', '14h00 à 16h00'),
(10, 'Jeudi', '9h00 à 11h00'),
(11, 'Jeudi', '13h00 à 15h00'),
(12, 'Jeudi', '15h30 à 17h30'),
(13, 'Vendredi', '9h00 à 11h00'),
(14, 'Vendredi', '13h00 à 15h00'),
(15, 'Vendredi', '15h30 à 17h30'),
(16, 'Samedi', '8h00 à 10h00'),
(17, 'Samedi', '10h30 à 12h30'),
(18, 'Samedi', '14h00 à 16h00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
