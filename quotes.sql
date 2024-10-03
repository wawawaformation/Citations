-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 oct. 2024 à 06:46
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
-- Base de données : `quotes`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `birthday` date NOT NULL,
  `deathday` date DEFAULT NULL,
  `biography` text DEFAULT NULL,
  `src` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `author`, `birthday`, `deathday`, `biography`, `src`) VALUES
(1, 'Victor Hugo', '1802-02-26', '1885-06-22', '<p><strong>Victor Hugo</strong>, né le 26 février 1802 à Besançon et mort le 22 mai 1885 à Paris, est l\'un des plus grands écrivains français du XIXe siècle. Auteur prolifique, il est connu pour ses œuvres littéraires majeures, notamment <em>Les Misérables</em> (1862) et <em>Notre-Dame de Paris</em> (1831). Hugo est une figure emblématique du mouvement romantique, engagé aussi bien en poésie, en théâtre qu\'en roman. Homme politique et fervent défenseur des droits de l\'homme, il a combattu pour l\'abolition de la peine de mort et lutté contre l\'injustice sociale. Exilé pendant plusieurs années pour ses idées républicaines, il est aujourd\'hui une figure centrale de la culture française.</p>\r\n', 'https://www.francepodcasts.com/wp-content/uploads/2023/05/Victor-Hugo.jpg'),
(2, 'Nelson Mandela', '1918-07-18', '2013-12-05', '<p><strong>Nelson Mandela</strong>, né le 18 juillet 1918 à Mvezo, en Afrique du Sud, et mort le 5 décembre 2013 à Johannesburg, est une figure emblématique de la lutte contre l\'apartheid et un symbole mondial de justice et de réconciliation. Militant politique et avocat, il a rejoint l\'<abbr title=\"African National Congress\">ANC</abbr> (African National Congress) pour combattre le régime raciste de l\'apartheid. En 1962, il est arrêté et emprisonné pendant 27 ans. Libéré en 1990, Mandela a joué un rôle clé dans les négociations qui ont conduit à la fin de l\'apartheid. En 1994, il devient le premier président noir de l\'Afrique du Sud, marquant une nouvelle ère de démocratie et d\'égalité dans le pays. Prix Nobel de la paix en 1993, il a consacré sa vie à la lutte pour la liberté, la dignité et la réconciliation.</p>\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3YKAh66vKb7uyWs93uO18K2vLRiwXmyynWg&shttps://courier.unesco.org/sites/default/files/styles/paragraph_medium_desktop/article/courier/photos/nelson_mandela.jpg.webp'),
(3, 'Renaud', '1952-05-11', NULL, '<p><strong>Renaud Séchan</strong>, né le 11 mai 1952 à Paris, est un chanteur, auteur-compositeur et acteur français, figure incontournable de la chanson contestataire. Connu simplement sous le nom de <strong>Renaud</strong>, il a marqué des générations avec ses chansons engagées, souvent empreintes de critique sociale, de poésie et d\'humour. Avec des titres comme <em>Laisse béton</em> (1977), <em>Mistral gagnant</em> (1985), et <em>Hexagone</em> (1975), il aborde des thèmes tels que les injustices sociales, la politique, l\'amour et la nostalgie. Renaud est également un symbole de rébellion et de liberté, souvent engagé pour des causes humanitaires et écologiques. Bien que ses problèmes de santé et sa lutte contre l\'alcoolisme aient influencé sa carrière, il reste l\'une des voix les plus emblématiques de la chanson française.</p>\r\n', 'https://www.programme-tv.net/imgre/fit/~1~tel~2023~04~06~dd9e7d9d-3ef5-47fb-9d4a-441e74c0f39b.jpeg/1200x600/crop-from/top/quality/80/renaud-ce-lourd-secret-de-famille-decouvert-pendant-son-adolescence.jpg'),
(4, 'Davidov', '1975-09-07', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` varchar(256) NOT NULL,
  `explanation` text DEFAULT NULL,
  `authors_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `explanation`, `authors_id`) VALUES
(1, 'C\'est de l\'enfer des pauvres qu\'est fait le paradis des riches', '<p>Dans cette citation, <strong>Victor Hugo</strong> dénonce les inégalités sociales criantes de son époque, qui trouvent écho encore aujourd\'hui. Il exprime ici une critique acerbe du capitalisme et de la société de classes, où la richesse des uns se construit souvent sur la souffrance des autres. L\'« <em>enfer des pauvres</em> » représente les conditions de vie déplorables des plus démunis, leur exploitation, leur exclusion, tandis que le « <em>paradis des riches</em> » symbolise l\'opulence et le confort acquis au prix de cette exploitation.</p>\r\n', 1),
(2, 'La mélancolie, c\'est le bonheur d\'être triste.', '<p>Dans cette citation extraite de <em>Les Misérables</em> (1862), <strong>Victor Hugo</strong> exprime un paradoxe subtil sur la nature humaine. La mélancolie est ici décrite comme un état émotionnel complexe où la tristesse peut apporter une forme de satisfaction ou de sérénité. C\'est une tristesse douce et apaisante, qui ne plonge pas dans le désespoir, mais permet au contraire une réflexion profonde sur la vie et sur soi-même. Cette phrase montre la capacité de l\'homme à trouver une sorte de beauté ou d\'équilibre même dans la douleur.</p>\r\n', 1),
(3, 'L\'éducation est l\'arme la plus puissante qu\'on puisse utiliser pour changer le monde.', '<p>Cette citation souligne la foi profonde de <strong>Nelson Mandela</strong> dans le pouvoir de l\'éducation pour transformer les sociétés. Pour lui, l\'éducation ne se contente pas de transmettre des connaissances, elle donne aussi les moyens d\'agir, d\'émanciper les individus et de construire un monde plus juste. Mandela considérait l\'accès à l\'éducation comme un droit fondamental, et un levier essentiel pour combattre l\'injustice, l\'oppression et la pauvreté. Par cette phrase, il nous rappelle que l\'instruction est un outil puissant pour créer des changements durables et positifs.</p>\r\n', 2),
(4, 'Je ne perds jamais. Soit je gagne, soit j\'apprends.', '<p>Cette citation incarne la philosophie de résilience et de persévérance de <strong>Nelson Mandela</strong>. Plutôt que de voir la défaite comme un échec, il la considère comme une opportunité d\'apprendre et de grandir. Mandela a souvent fait face à des situations difficiles, que ce soit en prison ou dans sa lutte contre l\'apartheid, mais il a toujours su transformer l\'adversité en une force. Cette citation inspire à ne jamais se décourager face aux obstacles, mais à les utiliser comme des leçons pour progresser, renforçant l\'idée que chaque expérience, qu\'elle soit victorieuse ou difficile, est un moyen de s\'améliorer.</p>\r\n', 2),
(5, 'Être né sous l\'signe de l\'Hexagone, c\'est pas c\'qu\'on fait d\'mieux en ce moment.', '<p>Extrait de sa chanson <em>Hexagone</em> (1975), cette phrase est une critique acerbe de la société française des années 1970. <strong>Renaud</strong> y dénonce l\'hypocrisie, le conformisme et le chauvinisme de la France. \"L\'Hexagone\" désigne la forme géographique de la France, et Renaud utilise cette métaphore pour exprimer sa déception face aux maux de la société, comme la xénophobie, les injustices et l’indifférence face aux problèmes sociaux. Cette chanson reste emblématique de l\'esprit contestataire de l\'artiste.</p>\r\n', 3),
(6, 'Errare humanum est, perseverare diabolicum', '<p>\"<em>L\'erreur est humaine, persévérer dans l\'erreur est diabolique.</em>\"</p>\r\n<p>Cette phrase exprime l\'idée que se tromper est une part naturelle de la condition humaine, car nous sommes tous susceptibles de faire des erreurs. Cependant, continuer délibérément à répéter les mêmes erreurs sans en tirer de leçons est considéré comme un comportement dangereux ou condamnable. La citation souligne l\'importance de reconnaître ses erreurs et de changer de cap plutôt que de s\'obstiner dans de mauvaises décisions ou actions.</p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `password` varchar(256) DEFAULT NULL,
  `token` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `mail`, `password`, `token`, `created_at`) VALUES
(1, 'DAvid', 'Legrand', 'wawawaformation@lesacteursduweb.fr', '$2y$10$S7ab8bDliH5.IxYeZIa2tOzhRwJ5W.GPqZ/NKNYj9N.48KxnDvX1G', NULL, '2024-09-29 07:43:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteurs_id` (`authors_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`lastname`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_ibfk_1` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
