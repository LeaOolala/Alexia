-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 mai 2024 à 20:14
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lpva`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''article',
  `article_birth` date NOT NULL COMMENT 'Date de naissance de l''article',
  `article_mod_date` date NOT NULL COMMENT 'Date  de modification de l''article',
  `article_images` varchar(255) NOT NULL COMMENT 'Les images de mon article',
  `article_content` text NOT NULL COMMENT 'Contenu de l''article',
  `article_title` varchar(150) NOT NULL COMMENT 'Titre de l''article',
  `article_intro` text NOT NULL COMMENT 'Contenu de l''intro de l''article',
  `article_pays` int NOT NULL DEFAULT '0',
  `article_type` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `article_pays` (`article_pays`),
  KEY `article_type` (`article_type`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`article_id`, `article_birth`, `article_mod_date`, `article_images`, `article_content`, `article_title`, `article_intro`, `article_pays`, `article_type`) VALUES
(1, '2024-05-14', '2024-05-14', 'lisbonne.jpg', ' <div>\n            <h3 class=\"centerText noir\">Les Quartiers Périphériques de Lisbonne</h3>\n            <p>Promenez-vous dans les rues étroites de Mouraria, l\'un des quartiers les plus anciens et les plus authentiques de Lisbonne, où vous pourrez vous imprégner de l\'atmosphère multiculturelle et découvrir des trésors cachés tels que des boutiques artisanales et des cafés pittoresques. Ou explorez le quartier d\'Alcântara, moins fréquenté par les touristes, pour une immersion authentique dans la vie locale et une vue imprenable sur le pont du 25 avril.</p>\n        </div>\n    \n        <div>\n            <h3 class=\"centerText noir\">Les marchés traditionnels de Lisbonne</h3>\n            <p>Plongez dans l\'ambiance animée des marchés traditionnels de Lisbonne, où les étals débordent de produits locaux frais et de spécialités régionales. Le marché de Campo de Ourique est un incontournable pour les amateurs de gastronomie, avec ses stands colorés proposant une grande variété de produits, des fruits de mer fraîchement pêchés aux fromages artisanaux en passant par les pâtisseries traditionnelles. Laissez-vous séduire par les arômes alléchants et les saveurs authentiques de la cuisine portugaise.</p>\n        </div>\n    \n        <div>\n            <h3 class=\"centerText noir\">Les Trésors Cachés au Cœur de la Ville</h3>\n            <p>Même au cœur de Lisbonne, il est possible de découvrir des lieux emblématiques méconnus qui offrent une véritable évasion dans un autre monde. Le Palácio dos Marqueses de Fronteira, par exemple, est un joyau caché niché au milieu d\'un jardin luxuriant, où vous pourrez admirer des azulejos magnifiquement ornés et des sculptures élégantes tout en vous imprégnant de l\'histoire et de la culture du Portugal.</p>\n        </div>\n        \n        <!--CONCLUSION-->\n        <div>\n            <h2 class=\"centerText noir\">Conclusion</h2>\n            <p>En explorant ces trésors cachés, vous découvrirez une toute nouvelle facette de Lisbonne, riche en histoire, en culture et en charme. Alors, laissez-vous séduire par la beauté unique de la capitale portugaise et partez à la découverte de ses secrets les mieux gardés. Que vous soyez un amateur d\'histoire, un passionné de gastronomie ou simplement en quête d\'aventure, Lisbonne vous réserve des surprises inattendues qui vous laisseront des souvenirs impérissables.</p>\n        </div>\n        <!-- divs vides pour espacer le conclusion de la suite-->\n        <div></div>\n        <div></div>', 'Explorez les Trésors Cachés de Lisbonne', 'Lorsque l\'on évoque Lisbonne, on pense souvent à ses célèbres attractions touristiques telles que le quartier de l\'Alfama, le château de São Jorge ou encore le monastère des Hiéronymites. Cependant, au-delà de ces incontournables, la capitale portugaise regorge de joyaux méconnus qui méritent d\'être explorés. Que vous soyez un voyageur avide d\'aventure ou simplement en quête d\'authenticité, Lisbonne offre une multitude d\'expériences uniques qui vous permettront de découvrir la ville sous un angle différent.', 2, 0),
(2, '2024-03-25', '2024-03-25', 'map.jpg', '<h2 class=\"centerText noir w75\">Les étapes essentielles pour une aventure sur la route réussie</h2>\r\n        \r\n        <ul class=\"bdLeft w75 articleContent columnDirection w50\">\r\n            <li>\r\n                <h4 class=\"noir inter\">Choisissez votre itinéraire :</h4>\r\n                <p>Déterminez les destinations que vous souhaitez visiter et planifiez un itinéraire flexible qui vous permettra de découvrir le maximum de sites en fonction de votre temps disponible.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Préparez votre véhicule :</h4>\r\n                <p>Assurez-vous que votre véhicule est en bon état de fonctionnement et qu\'il est équipé de tout le nécessaire pour votre voyage, comme des pneus de rechange, une trousse de premiers secours et un kit d\'urgence.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Trouvez un hébergement :</h4>\r\n                <p>Recherchez des options d\'hébergement le long de votre itinéraire, que ce soit des campings, des auberges de jeunesse ou des hôtels, et réservez à l\'avance pour éviter les surprises à votre arrivée.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Prévoyez un budget :</h4>\r\n                <p>Déterminez un budget pour votre road trip en tenant compte des frais de carburant, d\'hébergement, de repas et d\'activités. Prévoyez également une marge de manœuvre pour les imprévus.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Emportez des cartes et des guides :</h4>\r\n                <p>Bien que la technologie soit pratique, il est toujours utile d\'avoir des cartes physiques et des guides de voyage pour vous orienter et découvrir des lieux hors des sentiers battus.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Soyez prêt pour l\'aventure :</h4>\r\n                <p>Restez ouvert aux imprévus et prêt à sortir de votre zone de confort. Les meilleures expériences de voyage sont souvent celles qui ne sont pas planifiées à l\'avance.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Respectez les règles de conduite et les coutumes locales :</h4>\r\n                <p>Informez-vous sur les règles de conduite et les coutumes locales des pays que vous traversez et respectez-les pour éviter les problèmes et favoriser des interactions positives avec les habitants.</p>\r\n            </li>\r\n        </ul>\r\n    \r\n        <!--CONCLUSION-->\r\n        <div class=\"w75\">\r\n            <h2 class=\"centerText noir\">Conclusion</h2>\r\n            <p>En explorant Séville, vous plongez dans l\'âme même de l\'Andalousie, où la passion, la joie de vivre et la convivialité sont omniprésentes. Laissez-vous séduire par la magie de cette ville inoubliable et partez à la découverte de ses trésors cachés qui vous laisseront des souvenirs impérissables.</p>\r\n        </div>', 'Comment planifier un road trip inoubliable en Europe', 'Un road trip à travers l\'Europe est une aventure inoubliable qui vous permet de découvrir une multitude de paysages, de cultures et de traditions en un seul voyage. Voici quelques étapes essentielles pour planifier votre road trip et en faire une expérience mémorable.', 999, 2),
(3, '2024-04-11', '2024-04-11', 'Séville.jpg', '<div>\r\n            <h3 class=\"centerText noir\">Découverte des Ruelles Pittoresques</h3>\r\n            <p>Lorsque vous arpentez les rues de Séville, vous êtes transporté dans un monde où le passé et le présent se mêlent harmonieusement. Les ruelles étroites du quartier juif, avec leurs murs blanchis à la chaux et leurs balcons fleuris, vous invitent à flâner et à découvrir les secrets cachés de la ville.</p>\r\n        </div>\r\n    \r\n        <div>\r\n            <h3 class=\"centerText noir\">Exploration des Palais Majestueux</h3>\r\n            <p>Les palais somptueux de Séville, tels que l\'Alcazar et la Casa de Pilatos, témoignent de la grandeur passée de la ville et de son héritage mauresque. En vous promenant dans leurs jardins luxuriants et leurs salles magnifiquement décorées, vous vous imprégnez de l\'histoire et de la beauté de l\'Andalousie.</p>\r\n        </div>\r\n    \r\n        <div>\r\n            <h3 class=\"centerText noir\">Dégustation des saveurs Andalouses</h3>\r\n            <p>Mais ce n\'est pas seulement l\'architecture qui fait le charme de Séville, c\'est aussi sa cuisine délicieusement ensoleillée. Des tapas traditionnelles aux saveurs exotiques aux desserts sucrés comme le célèbre flan de la ville, chaque bouchée est une explosion de goûts et de sensations qui vous transporte au cœur de la culture andalouse.</p>\r\n        </div>\r\n\r\n        <!--CONCLUSION-->\r\n        <div>\r\n            <h2 class=\"centerText noir\">Conclusion</h2>\r\n            <p>En explorant Séville, vous plongez dans l\'âme même de l\'Andalousie, où la passion, la joie de vivre et la convivialité sont omniprésentes. Laissez-vous séduire par la magie de cette ville inoubliable et partez à la découverte de ses trésors cachés qui vous laisseront des souvenirs impérissables.</p>\r\n        </div>', 'Séville : Un Voyage dans l\'Âme Andalouse', 'Séville, joyau de l\'Andalousie, est une ville qui captive les âmes avec son charme envoûtant et son ambiance vibrante. Nichée le long des rives du Guadalquivir, Séville regorge de trésors à découvrir, des ruelles sinueuses aux palais somptueux en passant par les délices culinaires qui ravissent les papilles.', 1, 0),
(4, '2024-05-20', '2024-05-20', 'backpack.jpg', '<h2 class=\"centerText noir w75 \">Comment optimiser votre sac à dos pour une aventure sans stress</h2>\r\n        \r\n        <ul class=\"bdLeft w75 articleContent columnDirection w50\">\r\n            <li>\r\n                <h4 class=\"noir inter\">Faites une liste de contrôle :</h4>\r\n                <p>Avant de partir, élaborez une liste de tous les articles essentiels que vous devez emporter. Cela vous aidera à éviter d\'oublier quelque chose d\'important.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Choisissez le bon sac à dos :</h4>\r\n                <p>Optez pour un sac à dos léger et confortable, doté de multiples compartiments pour une organisation facile.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Priorisez les articles polyvalents :</h4>\r\n                <p>Choisissez des vêtements et des accessoires polyvalents qui peuvent être portés de différentes manières et assortis entre eux.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Emportez des articles de toilette miniatures :</h4>\r\n                <p>Investissez dans des produits de toilette en format voyage pour réduire l\'encombrement dans votre sac à dos.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Utilisez des sacs de rangement :</h4>\r\n                <p>Utilisez des sacs de rangement pour compartimenter vos affaires et maximiser l\'espace disponible dans votre sac à dos.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Optez pour des vêtements techniques :</h4>\r\n                <p>Les vêtements techniques sont légers, compacts et faciles à sécher, ce qui en fait un choix idéal pour les voyages.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Limitez les gadgets électroniques :</h4>\r\n                <p>Ne surchargez pas votre sac à dos avec des gadgets électroniques inutiles. Limitez-vous à l\'essentiel, comme un téléphone portable et un appareil photo.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Évitez les objets lourds et encombrants :</h4>\r\n                <p>Optez pour des versions compactes et légères de vos articles de voyage, comme une serviette de voyage en microfibre au lieu d\'une serviette traditionnelle.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">N\'oubliez pas l\'essentiel :</h4>\r\n                <p>Assurez-vous d\'emporter les articles essentiels tels que des médicaments, des documents de voyage et de l\'argent liquide dans votre sac à dos.</p>\r\n            </li>\r\n            <li>\r\n                <h4 class=\"noir inter\">Gardez une marge de manœuvre pour les souvenirs:</h4>\r\n                <p>Laissez un peu d\'espace dans votre sac à dos pour les souvenirs que vous ramènerez chez vous, mais ne surchargez pas votre sac à dos avec des objets inutiles.</p>\r\n            </li>\r\n        </ul>\r\n    \r\n        <!--CONCLUSION-->\r\n        <div class=\"w75\">\r\n            <h2 class=\"centerText noir\">Conclusion</h2>\r\n            <p>Avec ces astuces simples, vous pouvez voyager léger et efficacement, en profitant pleinement de chaque moment de votre aventure sans vous sentir alourdi par votre sac à dos.</p>\r\n        </div>\r\n        <!-- divs vides pour espacer le conclusion de la suite-->\r\n        <div></div>\r\n        <div></div>', 'Astuces pour voyager léger et efficacement', 'Voyager léger est la clé pour profiter pleinement de chaque instant de votre aventure. Voici 10 astuces pratiques pour optimiser votre sac à dos et simplifier votre voyage, vous permettant ainsi de voyager avec aisance et sans stress.', 999, 2),
(5, '2024-05-14', '2024-05-14', 'paella.jpg', '<div>\r\n            <h2 class=\"centerText noir\">Recette</h2>\r\n\r\n            <!--INGREDIENTS-->\r\n            <h3 class=\"centerText noir\">Ingrédients</h3>\r\n            <div class=\"articleContent\">\r\n                <ul class=\"inter gap5 columnDirection alignLeft\">\r\n                    <li>300g de riz à paëlla</li>\r\n                    <li>500g de fruits de mer mélangés </br>(crevettes, moules, calmars)</li>\r\n                    <li>200g de chorizo tranché</li>\r\n                    <li>1 oignon, haché</li>\r\n                    <li>2 gousses d\'ail, émincées</li>\r\n                    <li>1 poivron rouge, coupé en dés</li>\r\n                </ul>\r\n                <ul class=\"inter gap5 columnDirection alignLeft\">\r\n                <li>1 tomate, coupée en dés</li>\r\n                    <li>1 cuillère à café de safran</li>\r\n                    <li>1 cuillère à café de paprika</li>\r\n                    <li>1 litre de bouillon de volaille</li>\r\n                    <li>Sel et poivre au goût</li>\r\n                    <li>Huile d\'olive</li> \r\n                </ul>\r\n            </div>\r\n        </div>    \r\n            \r\n        <!--INSTRUCTIONS-->\r\n        <div>\r\n            <h3 class=\"centerText noir\">Instructions</h3>\r\n            <ol class=\"inter columnDirection alignLeft gap25\">\r\n                <li>\r\n                    Dans une grande poêle à paëlla ou une poêle à fond large, faites chauffer un peu d\'huile d\'olive à feu moyen. Ajoutez l\'oignon, l\'ail, le poivron rouge et faites revenir pendant quelques minutes jusqu\'à ce qu\'ils soient tendres.\r\n                </li>\r\n                <li>\r\n                    Ajoutez le chorizo tranché et faites cuire pendant quelques minutes jusqu\'à ce qu\'il soit légèrement doré.\r\n                </li>\r\n                <li>\r\n                    Ajoutez les fruits de mer mélangés et faites cuire jusqu\'à ce qu\'ils soient légèrement dorés.\r\n                </li>\r\n                <li>\r\n                    Ajoutez le riz à paëlla et remuez pour bien enrober les grains d\'huile.\r\n                </li>\r\n                <li>\r\n                    Ajoutez la tomate, le safran, le paprika et le bouillon de volaille. Assaisonnez avec du sel et du poivre selon votre goût.\r\n                </li>\r\n                <li>     \r\n                    Laissez mijoter à feu moyen pendant environ 20 minutes ou jusqu\'à ce que le riz soit cuit et que tout le liquide soit absorbé.\r\n                </li>\r\n                <li>\r\n                    Retirez du feu et laissez reposer pendant quelques minutes avant de servir.\r\n                </li>\r\n                <li>\r\n                    Servez la paëlla chaude, garnie de quartiers de citron frais, et dégustez ce festin de saveurs méditerranéennes avec vos proches.\r\n                </li>\r\n            </ol>\r\n        </div>\r\n        \r\n        <!-- divs vides pour espacer le conclusion de la suite-->\r\n        <div></div>\r\n        <div></div>\r\n<!--FOOTER-->\r\n</div></div>', 'Paëlla espagnole traditionnelle', 'La paëlla espagnole est bien plus qu\'un simple plat ; c\'est un symbole de la cuisine méditerranéenne, un festin de saveurs qui évoque les chaudes journées ensoleillées et les repas conviviaux en famille. Apprenez à préparer cette recette emblématique chez vous et laissez-vous transporter par les délices de l\'Espagne.', 1, 3),
(6, '2024-05-03', '2024-05-03', 'algarve.jpg', '<div>\r\n            <h3 class=\"centerText noir\">Un paradis caché au sud du Portugal</h3>\r\n            <p>\r\n                L\'Algarve est célèbre à travers le monde pour ses falaises dorées qui se dressent majestueusement au-dessus de l\'océan Atlantique. Ces formations géologiques spectaculaires offrent des panoramas à couper le souffle, où le contraste entre le bleu profond de la mer et le doré des falaises crée des paysages d\'une beauté saisissante. \r\n                </br></br>\r\n                Pour les amateurs de randonnée, ces falaises offrent également d\'innombrables sentiers à explorer, offrant des vues panoramiques à couper le souffle sur la côte et l\'arrière-pays.\r\n                </br></br>\r\n                Parmi les sites les plus impressionnants de l\'Algarve, la Praia da Marinha se distingue comme l\'une des plus belles plages du monde. Célèbre pour ses eaux cristallines et ses formations rocheuses uniques, cette plage offre un décor de carte postale où le temps semble s\'arrêter. \r\n                </br></br>\r\n                La Praia de Benagil, avec sa célèbre grotte marine accessible uniquement par la mer, est également un incontournable de la région. Explorez ses eaux turquoises et découvrez les secrets cachés de cette merveille naturelle.\r\n                </br></br>\r\n                En plus de ses paysages côtiers époustouflants, l\'Algarve regorge de villages pittoresques et de villes historiques qui vous transportent dans le passé. \r\n                Perdez-vous dans les rues pavées de Lagos, imprégnez-vous de l\'atmosphère animée de Tavira et plongez dans l\'histoire fascinante de Faro, la capitale régionale. \r\n                </br></br>\r\n                Chaque coin de l\'Algarve raconte une histoire, témoignant de la richesse culturelle et de l\'héritage historique de la région.\r\n                </br></br>\r\n                Détendez-vous sur ses falaises dorées, plongez dans ses eaux cristallines et laissez-vous envoûter par la beauté sauvage et préservée de cette région portugaise, où chaque instant est une véritable invitation au voyage.\r\n            </p>\r\n        </div>\r\n        \r\n        <!--CONCLUSION-->\r\n        <div>\r\n            <h2 class=\"centerText noir\">Conclusion</h2>\r\n            <p>\r\n            Que vous recherchiez des plages isolées pour vous détendre, des sentiers de randonnée panoramiques pour vous ressourcer ou une immersion culturelle pour nourrir votre curiosité, l\'Algarve a tout pour plaire.\r\n            </p>\r\n        </div>\r\n        <!-- divs vides pour espacer le conclusion de la suite-->\r\n        <div></div>\r\n        <div></div>', 'Les falaises dorées de l\'Algarve', 'L\'Algarve, cette région enchanteresse située au sud du Portugal, est bien plus qu\'une simple destination de vacances. C\'est un véritable paradis pour les amoureux de la nature, les passionnés d\'histoire et les chercheurs d\'authenticité. Explorez avec nous les trésors cachés de cette perle portugaise et laissez-vous envoûter par sa beauté sauvage et authentique, qui ne manquera pas de vous charmer au premier regard.', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `comment_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du commentaire',
  `comment_content` varchar(255) NOT NULL COMMENT 'Contenu du commentaire',
  `comment_owner` varchar(150) NOT NULL COMMENT 'Nom de la personne qui a écrit le commentaire',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `pays_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du pays',
  `pays_name` varchar(150) NOT NULL COMMENT 'Nom du pays',
  PRIMARY KEY (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`pays_id`, `pays_name`) VALUES
(1, 'Espagne'),
(2, 'Portugal'),
(999, 'aucun');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int NOT NULL AUTO_INCREMENT COMMENT 'id du type d''article',
  `type_name` varchar(50) NOT NULL COMMENT 'nom du type d''article',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(0, 'aucun'),
(2, 'conseil'),
(3, 'recette');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''utilisateur',
  `user_email` varchar(150) NOT NULL COMMENT 'Email de l''utilisateur',
  `user_name` varchar(150) NOT NULL COMMENT 'Nom de l''utilisateur',
  `user_password` varchar(250) NOT NULL COMMENT 'Mot de passe de l''utilisateur',
  `user_role` varchar(1) NOT NULL COMMENT 'Role = $ Admin',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_password`, `user_role`) VALUES
(9, 'degli.esposti.lea@gmail.com', 'Léa', '$2y$10$ugk3AuTRgnKX7C5mFmD.1.q6G1RLVCih2/Cv212cs7khdaOO46D6W', ''),
(12, 'nai0@gmail.com', 'Léa', '$2y$10$mI9FJkYWE9xwQufR648QqOEoVNsRkDwK1NLEq7WS4kjgLtjwidfQK', ''),
(13, 'degli.esposti.lea@gmail.com', 'li', '$2y$10$.YJJNVv1rZStV6CYHMMco.JMG/WJG9fLOpIygPqFIQLAw11m1KYs.', ''),
(14, 'degli.esposti.lea@gmail.com', 'test', '$2y$10$nZpAMtOkXbraqR0dnAZXGOCJ.QLbcZ8Uo9AglgkxOOuozZHyJeztG', ''),
(15, 'test@test.com', 'Testons', '$2y$10$wXnJLb1F0qMzftjUUMuKZe7ouGiE6lTFAVkDFLSKVIPcd5xDG6J36', ''),
(16, 'luanosamsung@gmail.com', 'Luano', '$2y$10$qaVLobbcbERABbnJrdtctORHwGgdSWd0kBMTLextlcFX5WcCSmwey', ''),
(17, 'li@gmail.com', 'li', '$2y$10$Aqd/.TXoEFIReA3GrlAeK.Zt12jGJlFX87nbH45dnzq6fR/WNCDmC', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`article_pays`) REFERENCES `pays` (`pays_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`article_type`) REFERENCES `type` (`type_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
