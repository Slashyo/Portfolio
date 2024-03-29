-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 17 mars 2023 à 14:25
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id des liens',
  `titre` varchar(255) NOT NULL COMMENT 'titre des liens ',
  `description` text NOT NULL COMMENT 'description plus detaillee',
  `image` text NOT NULL COMMENT 'url de l image',
  `url` varchar(255) NOT NULL COMMENT 'url du lien ',
  `categorie` int(11) DEFAULT NULL COMMENT 'numero qui sert a la categorie',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id`, `titre`, `description`, `image`, `url`, `categorie`) VALUES
(1, 'MDN Web Docs', 'MDN Web Docs, précédemment Mozilla Developer Network et anciennement Mozilla Developer Center, est un dépôt de documentation et une ressource d\'apprentissage pour les développeurs web utilisés par Mozilla, Microsoft, Google et Samsung.', 'https://cdn.mos.cms.futurecdn.net/aTdmzmFTab5SFem7xxSjjZ.jpg', 'https://developer.mozilla.org/fr/', 1),
(2, 'PHP.net', 'PHP.net est le site regroupant toute la documentation officiel de PHP', 'https://www.php.net/images/meta-image.png', 'https://www.php.net/manual/fr/index.php', 1),
(3, 'Openclassroom', 'Site proposant une offre variée de cours en ligne notamment sur le développement web. ', 'https://upload.wikimedia.org/wikipedia/fr/0/0d/Logo_OpenClassrooms.png', 'https://openclassrooms.com/fr/', 2),
(4, 'W3schools', 'Un site qui propose des formations et des informations sur les langages web.', 'https://yt3.googleusercontent.com/dW6to0x5Crmeh7yi-YPLcQRqVrBtx2BSh8eoKTJbE8NbjloQ0sqlmdszIlxokJU_97-ndOt_=s900-c-k-c0x00ffffff-no-rj', 'https://www.w3schools.com/', 1),
(5, 'Grafikart', 'Grafikart est un site offrant des tutoriels et des vidéos en français sur les différents langages de programmation utilisés dans le web .', 'https://www.ledevweb.fr/images/grafikart.jpg', 'https://grafikart.fr/', 2),
(9, 'Google Fonts', 'Google Fonts est un service d’hébergement gratuit de polices d’écritures pour le Web, démarré en 2010. Ces polices sont sous licences libres dont principalement la licence Apache et la SIL OFL.', 'https://k-graphiste.com/wp-content/uploads/2022/02/Google-font.jpg', 'https://fonts.google.com/', 4),
(10, 'Image Color Picker', 'Image Color Picker est un site qui permet de télécharger une image. Vous pouvez sélectionner un point précis de celle-ci afin d en tirer la couleur en RGB ou hexadécimal. Une fois la couleur sélectionnée, des palettes couleurs sont proposées en rapport avec celle-ci.  ', 'https://htmlcolorcodes.com/assets/images/color-picker/html-color-codes-color-wheel-analogous-thumb.png', 'https://imagecolorpicker.com/fr', 4),
(11, 'Pexels', 'Traduit de l\'anglais-Pexels est un fournisseur de photographies et de séquences d\'archives. Il a été fondé en Allemagne en 2014 et gère une bibliothèque avec plus de 3,2 millions de photos et de vidéos gratuites.', 'https://f.hellowork.com/bdmtools/2020/01/Pexels.jpg', 'https://www.pexels.com/fr-fr/', 4);

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

DROP TABLE IF EXISTS `travaux`;
CREATE TABLE IF NOT EXISTS `travaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `travaux`
--

INSERT INTO `travaux` (`id`, `titre`, `description`, `image_url`, `url`) VALUES
(1, 'Site Préformation', 'Ceci est mon premier \'site\' fait en préformation. Grace à ce projet vous pouvez voir mon évolution depuis le début de l\'année sur le côté responsive et tout le reste :)', 'img/Capture_d’écran_2023-03-13_112644.png', 'https://2022.webdev-cf2m.be/tom/'),
(4, 'Site T.I2', 'Ceci est le site de notre T.I2, dans ce site les consignes étaient de faire un formulaire responsive qui s\'envoi dans une base de donnée et affiche les information envoyées en dessous du formulaire quand le captcha est validé.', 'img/icone-livre-or-association-des-dessins-contre-les-bobos-768x768.png', 'http://2022.webdev-cf2m.be/tom/livredor/public/'),
(3, 'Site Français', 'Ceci est le site pour notre projet en français avec toutes nos réalisations durant le cours de l\'année.', 'img/Capture2023-03-15.png', 'https://2022.webdev-cf2m.be/tom/francais/public/'),
(5, 'Site CodePen', 'Ceci est un site créer à l\'aide de code CodePen pour une journée porte ouverte entre toutes les formation du CF2M', 'img/Captured’écran2023.png', 'https://2022.webdev-cf2m.be/tom/porteouverte/');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
