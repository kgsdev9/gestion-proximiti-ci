-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 21 août 2023 à 15:18
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `proximiti-produ`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisans`
--

CREATE TABLE `artisans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_whattsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_adhesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_intervention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `speciality_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `artisans`
--

INSERT INTO `artisans` (`id`, `name`, `slug`, `prenom`, `telephone`, `num_whattsapp`, `adresse`, `photo`, `email`, `description`, `commune`, `date_adhesion`, `zone_intervention`, `status`, `created_at`, `updated_at`, `speciality_id`) VALUES
(8, 'ORO', 'oro', 'Ange bryan', '0574083828', '0574083828', 'Akadjoba', 'WhatsApp Image 2023-08-03 à 10.46.42.jpg', 'email@gmail.com', 'LM/03/08/23/PEINTRE - DECORATEUR', 'Yopougon', '2023-06-21', 'YOPOUGON', 'Disponible', '2023-08-03 15:20:52', '2023-08-16 10:03:29', 10),
(9, 'KOFFI', 'koffi', 'Kouame', '0504642105', '0504642105', 'Cimitière', 'IMG_9586.JPG', 'email@gmail.com', 'LM 08/08/2023', 'Yopougon', '2023-07-13', 'YOPOUGON', 'Disponible', '2023-08-08 14:01:50', '2023-08-12 10:02:41', 20),
(13, 'KOUO', 'kouo', 'Assiman Bile David', '0788395464', '0788395464', 'Eglise catholique', 'KOUAO ASSIMAN.JPG', 'email@gmail.com', 'LM 08/08/2023', 'Port - Bouet', '2023-07-17', 'Port - Bouet', 'Disponible', '2023-08-08 14:47:52', '2023-08-16 09:41:34', 24),
(14, 'COULIBALY', 'coulibaly', 'Hamed', '0769993998', '0769993998', 'ST ROUX', 'WhatsApp Image 2023-07-17 à 13.09.24.jpg', 'email@gmail.COM', 'LM 08/08/2023', 'Bingerville', '2023-07-17', 'Bingerville', 'Disponible', '2023-08-08 14:53:42', '2023-08-12 09:34:55', 10),
(15, 'ALIKO', 'aliko', 'Brou', '0141658891', '0141658891', 'STATION PETRO IVOIRE', 'WhatsApp Image 2023-07-12 à 19.32.25.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Cocody', '2023-06-26', 'Cocody', 'Disponible', '2023-08-08 15:16:57', '2023-08-12 09:09:11', 10),
(16, 'WANDA', 'wanda', 'Gervais Cesaire', '0778621789', '0778621789', 'PHARMACIE DES ALLES', 'WhatsApp Image 2023-07-05 à 11.55.17.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Cocody', '2023-06-21', 'Cocody', 'Disponible', '2023-08-08 15:24:55', '2023-08-16 10:08:41', 10),
(17, 'BOUTOU', 'boutou', 'Ibocou Carine', '0758201740', '0758201740', 'Nouvelle dimenssion', 'WhatsApp Image 2023-07-12 à 19.29.25.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Cocody', '2023-07-10', 'Cocody', 'Disponible', '2023-08-08 15:30:19', '2023-08-12 09:23:58', 10),
(18, 'DOUMBIA', 'doumbia', 'Mamadou', '0767671605', '0759873491', 'CARREFOUR 2 eme ARRONDISSEMENT', 'WhatsApp Image 2023-07-20 à 17.49.04.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Abobo', '2023-07-20', 'Abobo', 'Disponible', '2023-08-08 15:35:39', '2023-08-12 09:43:22', 24),
(19, 'ONSEYOGBEU', 'onseyogbeu', 'Gue Donald', '0709321501', '0709321501', 'GARE SIL', 'WhatsApp Image 2023-07-21 à 17.14.07.jpg', 'email@gmail.com', 'LM 08/08/08', 'Yopouguon', '2023-07-06', 'YOPOUGON', 'Disponible', '2023-08-08 15:39:55', '2023-08-16 10:02:21', 10),
(20, 'YOMAN', 'yoman', 'N\'goran Germain', '0749347610', '0749347610', 'PHARMACUE ABOBOTE', 'WhatsApp Image 2023-08-02 à 18.23.38.jpg', 'email@gamail.com', 'LM 08/08/2023', 'Abobo', '2023-06-20', 'Abobo', 'Disponible', '2023-08-08 15:46:07', '2023-08-16 10:17:52', 24),
(21, 'ATAKPEMI', 'atakpemi', 'Luc', '0575627659', '0575627659', 'SANTE', 'WhatsApp Image 2023-08-04 à 17.54.51.jpg', 'email@gmail.com', 'LM 08/08/2023', 'BINGERVILLE', '2023-07-20', 'Bingerville', 'Disponible', '2023-08-08 15:53:21', '2023-08-12 09:20:04', 5),
(22, 'DANHO', 'danho', 'Rivarol', '0554915409', '0554915409', 'GROUPE ESAM', 'WhatsApp Image 2023-08-05 à 11.10.55.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Yopougon', '2023-07-27', 'YOPOUGON', 'Disponible', '2023-08-08 16:02:34', '2023-08-16 08:39:40', 5),
(23, 'SHERIF', 'sherif', 'Mohamed', '0102567254', '0102567254', 'GENDARMERIE', 'WhatsApp Image 2023-07-21 à 10.55.08.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Yopougon', '2023-07-20', 'YOPOUGON', 'Disponible', '2023-08-08 16:15:30', '2023-08-16 10:05:56', 25),
(24, 'AME', 'ame', 'AGBELESSESSI', '0101397427', '0101397427', 'COLLEGE LA PEROUSSE', 'WhatsApp Image 2023-07-21 à 17.08.50.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Cocody', '2023-06-27', 'Cocody', 'Disponible', '2023-08-08 16:29:56', '2023-08-12 09:06:11', 26),
(25, 'ATCHOBA', 'atchoba', 'Benjamin', '0171537978', '0171537978', 'CAMPEMENT', 'WhatsApp Image 2023-07-21 à 17.12.58.jpg', 'email@gmail.com', 'LM 08/08/2023', 'koumassi', '2023-07-11', 'koumassi', 'Disponible', '2023-08-08 16:34:39', '2023-08-12 09:23:19', 24),
(26, 'GNOHOHI', 'gnohohi', 'GOGOUA SIMPLICE', '0501887686', '0566886108', 'station shell', 'WhatsApp Image 2023-07-21 à 16.52.37.jpg', 'email@gmail.com', 'LM 08/08/2023', 'Bingerville', '2023-07-10', 'Bingerville', 'Disponible', '2023-08-08 17:08:06', '2023-08-12 09:54:48', 23),
(27, 'DOUMBIA', 'doumbia', 'Ahmed', '0778028464', '0778028464', 'COOPEC', 'WhatsApp Image 2023-07-12 à 19.19.22.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Yopougon', '2023-06-29', 'YOPOUGON', 'Disponible', '2023-08-09 10:26:30', '2023-08-12 09:42:03', 28),
(28, 'KONE', 'kone', 'Yaya', '0586560800', '0586560800', 'GESCO', 'WhatsApp Image 2023-08-09 à 11.57.12.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Yopougon', '2023-07-12', 'YOPOUGON', 'Disponible', '2023-08-09 10:30:54', '2023-08-12 10:08:24', 20),
(29, 'YAO', 'yao', 'Kouassi franck carl', '0787830447', '0787830447', 'BEL AIR', 'WhatsApp Image 2023-08-09 à 11.57.55.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Yopougon', '2023-07-11', 'YOPOUGON', 'Disponible', '2023-08-09 10:49:01', '2023-08-16 10:14:58', 15),
(30, 'SIKA', 'sika', 'Komlan', '0150333004', '0150333004', 'CAMPEMENT', 'WhatsApp Image 2023-07-21 à 13.16.37.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Bingerville', '2023-07-10', 'Bingerville', 'Disponible', '2023-08-09 11:00:47', '2023-08-16 10:07:46', 23),
(31, 'SIDIBE', 'sidibe', 'Fousseni', '0767480440', '0767480440', 'ETAGE NOIR', 'SIDIBE (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Abobo', '2023-07-12', 'Abobo', 'Disponible', '2023-08-09 11:41:57', '2023-08-16 10:06:42', 1),
(33, 'OUENA', 'ouena', 'Kobina Dawuda', '0555516529', '0555516529', 'CARREFOUR BANDJI', 'OUENA (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Bingerville', '2023-07-12', 'Bingerville', 'Disponible', '2023-08-09 11:46:26', '2023-08-16 10:04:49', 1),
(34, 'KOFFI', 'koffi', 'Kouame fulgence', '0153671118', '0153671118', 'COLLEGE GAOUSSOU', 'WhatsApp Image 2023-07-24 à 11.26.43.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Anyama', '2023-07-24', 'anyama', 'Disponible', '2023-08-09 11:53:01', '2023-08-16 09:28:07', 15),
(35, 'GBANE', 'gbane', 'Issouf', '0170910743', '0170910743', 'NOUVELLE GARE', 'WhatsApp Image 2023-07-26 à 18.01.54 (2).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Bingerville', '2023-07-26', 'Bingerville', 'Disponible', '2023-08-09 11:57:07', '2023-08-16 09:07:35', 15),
(36, 'NAOUNOU', 'naounou', 'Jean marc', '0554975528', '0554975528', 'nouvelle gare', 'Nounou tagro jean marc (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Bingerville', '2023-06-23', 'Bingerville', 'Disponible', '2023-08-09 12:00:44', '2023-08-17 10:21:07', 15),
(37, 'COULIBALY', 'coulibaly', 'Mamadou', '0545326970', '0545326970', 'CIMITIERE', 'WhatsApp Image 2023-07-31 à 11.38.42 (1).jpg', 'email@gamail.com', 'LM 09/08/2023', 'BINGERVILLE', '2023-07-31', 'BINGERVILLE', 'Disponible', '2023-08-09 13:46:29', '2023-08-12 09:36:01', 24),
(38, 'COFFIE', 'coffie', 'Henrie philippe', '0708489790', '0708489790', 'BELLE COTE', 'WhatsApp Image 2023-07-04 à 18.32.32 (1).jpg', 'email@gmail.com', 'LM 08/08/2023', 'Cocody', '2023-06-04', 'Cocody', 'Disponible', '2023-08-09 13:54:18', '2023-08-12 09:32:49', 24),
(39, 'GNAMAKOU', 'gnamakou', 'Koami edmond', '0101962608', '0101962608', 'CITE LAURIER', 'ID GNAMAKOU (2).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Bingerville', '2023-06-26', 'bingerville', 'Disponible', '2023-08-09 14:07:56', '2023-08-16 09:10:22', 23),
(40, 'N\'GORAN', 'ngoran', 'Koffi', '0545818332', '0545818332', 'PHARMACIE VALDOIRE', 'WhatsApp Image 2023-07-19 à 16.02.32 (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Cocody', '2023-07-19', 'Cocody', 'Disponible', '2023-08-09 14:20:22', '2023-08-16 09:53:16', 23),
(41, 'CISSE', 'cisse', 'Abdoulaye', '0504054404', '0757269590', 'PHARMACIE ALICIA', 'WhatsApp Image 2023-07-21 à 15.11.50 (2).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Yopougon', '2023-07-12', 'YOPOUGON', 'Disponible', '2023-08-09 14:27:43', '2023-08-16 08:51:12', 20),
(42, 'GBANE', 'gbane', 'Bahmoriba', '0505251572', '0505251572', 'NOUVELLE GARE', 'WhatsApp Image 2023-07-26 à 18.02.26 (3).jpg', 'email@gmail.com', 'LM 09/08/2023', 'bingerville', '2023-07-26', 'Bingerville', 'Disponible', '2023-08-09 14:45:55', '2023-08-16 08:58:24', 5),
(43, 'KOUASSI', 'kouassi', 'Salomon', '0545818332', '0545818332', 'COLLEGE FIGUIER', 'kouassi salomon.jpg', 'email@gmail.com', 'LM 09/08/2023', 'BINGERVILLE', '2023-07-27', 'Bingerville', 'Disponible', '2023-08-09 14:55:29', '2023-08-16 09:40:09', 5),
(44, 'DION', 'dion', 'KAIN CHRISTIAN', '0585910507', '0585910507', 'PHARMACIE ENICA', 'WhatsApp Image 2023-07-04 à 17.19.19 (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'Cocody', '2023-06-24', 'Cocody', 'Disponible', '2023-08-09 15:01:31', '2023-08-12 09:40:50', 17),
(45, 'KOUTOU', 'koutou', 'GUEHISSOU', '0759590421', '0759590421', 'CHU COCODY', 'koutou.jpg', 'email@gmail.com', 'LM 09/08/2023', 'Cocody', '2023-06-30', 'Cocody', 'Disponible', '2023-08-09 15:28:00', '2023-08-16 09:44:10', 10),
(46, 'GNAN', 'gnan', 'VENANCE', '0546174276', '0546174276', 'GENIE 2000', 'WhatsApp Image 2023-07-21 à 12.35.46 (1).jpg', 'email@gmail.com', 'LM 09/08/2023', 'cocody', '2023-06-22', 'Cocody', 'Disponible', '2023-08-09 15:32:57', '2023-08-12 09:50:52', 10),
(47, 'KPANGNI', 'kpangni', 'ATTA KOUASSI DOMINIQUE', '0758453801', '0758453801', 'AGRIPAC', 'WhatsApp Image 2023-08-11 à 10.14.37.jpg', 'email@gmail.com', 'LM 11/08/2023', 'Abobo', '2023-08-08', 'Abobo', 'Disponible', '2023-08-11 08:25:29', '2023-08-16 09:51:14', 15),
(48, 'KARAMOKO', 'karamoko', 'SOUALIHO', '0150557641', '0150557641', 'NOUVELLE GARE', 'WhatsApp Image 2023-08-11 à 10.27.33 (1).jpg', 'email@gmail.com', 'LM 11/08/2023', 'Bingerville', '2023-07-09', 'Bingerville', 'Disponible', '2023-08-11 08:30:13', '2023-08-12 10:00:25', 10),
(49, 'KOUASSI', 'kouassi', 'Djere andre', '0707011018', '0707011018', 'belle ville', 'WhatsApp Image 2023-07-31 à 10.49.24.jpg', 'email@gmail.com', 'LM 11/08/2023', 'Abobo', '2023-07-17', 'Abobo', 'Disponible', '2023-08-11 13:30:51', '2023-08-17 10:19:41', 26),
(50, 'IRIE', 'irie', 'BI IRIE FULGENCE', '0586949017', '0586949017', 'ETAGE CARRELE', 'WhatsApp Image 2023-08-16 à 11.17.12.jpg', 'email@gmail.com', 'LM 11/08/2023', 'Yopouguon', '2023-07-15', 'YOPOUGON', 'Disponible', '2023-08-11 13:42:37', '2023-08-16 09:18:00', 20),
(51, 'IRIE', 'irie', 'BI TRA ARMEL', '0546769410', '0546769410', 'ETAGE CARRELE', 'irie bi tra.jpg', 'email@gmail.com', 'LM 11/08/2023', 'Yopouguon', '2023-07-15', 'YOPOUGON', 'Disponible', '2023-08-11 13:46:51', '2023-08-16 09:22:20', 20),
(52, 'KOUASSI', 'kouassi', 'Aristide', '0708414767', '0708414767', 'LAURIER', 'kouassi aristide.jpg', 'email@gmail.com', '11/07/2023', 'Cocody', '2023-07-11', 'Cocody', 'Disponible', '2023-08-11 13:50:55', '2023-08-16 09:33:45', 1),
(53, 'KOUADIO', 'KOUADIO', 'KONAN RENE', '0505318846', '0505318846', 'Restaurent shish', 'WhatsApp Image 2023-08-11 à 17.21.44.jpg', 'email@gmail.com', 'LM 11/08/2023', 'Cocody', '2023-07-17', 'Cocody', 'Disponible', '2023-08-11 15:34:55', '2023-08-11 15:34:55', 29),
(54, 'DBONAHO', 'DBONAHO', 'Ange', '0779426310', '0779426310', 'EGLISE CATHOLIQUE', 'DBONAHO.jpg', 'email@gmail.com', 'LM 16/08/2023', 'yopouguon', '2023-06-26', 'YOPOUGON', 'Disponible', '2023-08-16 10:43:23', '2023-08-16 10:43:23', 20),
(55, 'KOMI', 'KOMI', 'MOUSSA', '0554289463', '0554289463', 'CAMPEMENT', 'WhatsApp Image 2023-07-21 à 17.08.50.jpg', 'email@gmail.com', 'LM 10/08/2023', 'koumassi', '2023-07-03', 'koumassi', 'Disponible', '2023-08-16 11:13:30', '2023-08-16 11:13:30', 30),
(56, 'Ochou', 'Ochou', 'Abbe yannick', '0787571347', '0787571347', 'ADOHA', 'ochou.jpg', 'email@gmail.com', 'LM 17/08/2023', 'bingerville', '2023-07-12', 'Bingerville', 'Disponible', '2023-08-17 09:47:14', '2023-08-17 09:47:14', 23),
(57, 'ANANI', 'ANANI', 'KOUAKOU DESIRE', '0101957241', '0101957241', '0101957241', 'ANANI.jpg', 'email@gmail.com', 'LM 17/08/2023', 'port bouet', '2023-06-26', 'Port - Bouet', 'Disponible', '2023-08-17 09:59:00', '2023-08-17 09:59:00', 15),
(58, 'N\'guessan', 'N\'guessan', 'kouassi jacques', '0574326353', '0574326353', 'GRAND CARREFOUR KOUMASSI', 'JACQUE KOUASSI.jpg', 'email@gmail.com', 'LM 17/08/2023', 'koumassi', '2023-07-28', 'koumassi', 'Disponible', '2023-08-17 10:14:18', '2023-08-17 10:14:18', 15),
(59, 'GUYAN', 'GUYAN', 'Fabrice', '0585226112', '0585226112', 'SOCOCE', 'GUYAN.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-07-01', 'Cocody', 'Disponible', '2023-08-17 10:32:55', '2023-08-17 10:32:55', 23),
(60, 'ZOH', 'ZOH', 'OULAI', '0576340722', '0586840912', 'FAYA', 'zoh oula.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-06-22', 'Cocody', 'Disponible', '2023-08-17 10:43:04', '2023-08-17 10:43:04', 10),
(61, 'HOUNHOZOUKOU', 'HOUNHOZOUKOU', 'Celestin Massao', '0501887686', '0501887686', 'Garage massa', 'HOUANHOZOUKOU.JPG', 'email@gmail.com', 'LM 17/08/2023', 'Bingerville', '2023-07-17', 'Bingerville', 'Disponible', '2023-08-17 10:46:45', '2023-08-17 10:46:45', 23),
(62, 'BASSOLE', 'BASSOLE', 'ALPHONSE', '0501887686', '0501887686', 'PHARMACIE ENICA', 'BASSOLE.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-06-04', 'Cocody', 'Disponible', '2023-08-17 10:53:19', '2023-08-17 10:53:19', 28),
(63, 'YAOVI', 'YAOVI', 'NOEL', '0501887686', '0501887686', 'PHARMACIE INOX', 'YAOVI.jpg', 'email@gmail.com', 'LM 17/08/2023', 'yopouguon', '2023-08-28', 'YOPOUGON', 'Disponible', '2023-08-17 10:57:33', '2023-08-17 10:57:33', 26),
(64, 'DALEBA', 'DALEBA', 'OSE', '0501887686', '0501887686', 'KM17', 'DALEBA.jpg', 'email@gmail.com', 'LM 17/09/2023', 'yopouguon', '2023-07-19', 'YOPOUGON', 'Disponible', '2023-08-17 11:01:00', '2023-08-17 11:01:00', 10),
(65, 'DIARRASSOUBA', 'DIARRASSOUBA', 'Aboubacar', '0501887686', '0501887686', 'BESSIKOI', 'DIRASSOUBA.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-08-16', 'Cocody', 'Disponible', '2023-08-17 12:51:08', '2023-08-17 12:51:08', 20),
(66, 'SETOUNKPATIN', 'SETOUNKPATIN', 'HOUNDJANTO PAMPHILE', '0501887686', '0501887686', '9 KILO', 'PAMPHILE.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-08-16', 'Cocody', 'Disponible', '2023-08-17 12:56:36', '2023-08-17 12:56:36', 20),
(67, 'TRAORE', 'TRAORE', 'LAMINE', '0501887686', '0501887686', 'POLI CLINIQUE', 'traore lamine.jpg', 'email@gmail.com', 'LM 17/08/2023', 'abobo', '2023-08-14', 'Abobo', 'Disponible', '2023-08-17 13:54:44', '2023-08-17 13:54:44', 20),
(68, 'KAN', 'KAN', 'Koffi salomon', '0501887686', '0501887686', 'ANGRE CHATEAU', 'KAN KOFFI.jpg', 'email@gmail.com', 'LM 17/08/2023', 'cocody', '2023-08-08', 'Cocody', 'Disponible', '2023-08-17 14:00:33', '2023-08-17 14:00:33', 15),
(69, 'ASSI', 'ASSI', 'AMON JUSTIN', '0501887686', '0501887686', 'GENDARMERIE', 'ASSI.jpg', 'email@gmail.com', 'LM 08/08/2023', 'yopouguon', '2023-07-15', 'YOPOUGON', 'Disponible', '2023-08-17 15:02:55', '2023-08-17 15:02:55', 5),
(70, 'kone', 'kone', 'ismael', '0565538893', '0565538893', 'Ecole mission bingerville', 'kone ismael.jpg', 'email@gmail.com', 'Travailleur indépendant', 'bingerville', '2023-07-11', 'Bingerville', 'Disponible', '2023-08-18 10:01:48', '2023-08-18 10:01:48', 31),
(71, 'kouassi', 'kouassi', 'yao kam arsène', '0554738741', '0554738741', 'Sogephia magasin', 'kouassi yao kan arsène.jpg', 'email@gmail.com', 'Travailleur indépendant', 'yopougon', '2023-07-10', 'yopougon', 'Disponible', '2023-08-18 10:39:50', '2023-08-18 10:39:50', 1),
(72, 'kohigo', 'kohigo', 'richmond', '0140341141', '0140341141', 'STATION SHELL', 'KOHIGO RICHMOND.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'yopougon', '2023-07-12', 'yopougon', 'Disponible', '2023-08-18 10:45:03', '2023-08-18 10:45:03', 10),
(73, 'BLEU', 'BLEU', 'JEAN MARC', '0544204533', '0544204533', 'PHARMACIE EUNICA', 'BLEU JEAN MARC.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'palmeraie', '2023-06-24', 'cocody', 'Disponible', '2023-08-18 10:50:15', '2023-08-18 10:50:15', 20),
(74, 'BLEU', 'BLEU', 'JEAN MARC', '0544204533', '0544204533', 'PHARMACIE EUNICA', 'BLEU JEAN MARC.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'palmeraie', '2023-06-24', 'cocody', 'Disponible', '2023-08-18 10:50:17', '2023-08-18 10:50:17', 20),
(75, 'OUATTARA', 'OUATTARA', 'MAMANDOU', '0709833817', '0709833817', 'PREFECTURE DE POLICE', 'OUATTARA MAMANDOU.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'abobo', '2023-07-11', 'abobo', 'Disponible', '2023-08-18 10:55:16', '2023-08-18 10:55:16', 23),
(76, 'KONATE', 'KONATE', 'KARIM', '0759815546', '0759815546', 'KOUMASSI 05', 'KONATE KARIM.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'koumassi', '2023-08-18', 'koumassi', 'Disponible', '2023-08-18 11:06:24', '2023-08-18 11:06:24', 32),
(77, 'KONATE', 'KONATE', 'KARIM', '0759815546', '0759815546', 'KOUMASSI 05', 'KONATE KARIM.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'koumassi', '2023-08-18', 'koumassi', 'Disponible', '2023-08-18 11:06:39', '2023-08-18 11:06:39', 32),
(78, 'BAMBA', 'BAMBA', 'MOUSSA', '0748004589', '0748004589', 'COMMISSARIAT 23e', 'BAMBA MOUSSA.jpg', 'email@gmail.com', 'TRAVAILLEUR INDEPENDANT', 'yopougon', '2023-08-18', 'yopougon', 'Disponible', '2023-08-18 11:12:13', '2023-08-18 11:12:13', 10);

-- --------------------------------------------------------

--
-- Structure de la table `artisan_speciality`
--

CREATE TABLE `artisan_speciality` (
  `id` bigint UNSIGNED NOT NULL,
  `artisan_id` bigint UNSIGNED NOT NULL,
  `speciality_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeCommande` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int NOT NULL,
  `quantite` int NOT NULL,
  `telephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomfournisseur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addresfournisseur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `designation`, `codeCommande`, `prix`, `quantite`, `telephone`, `status`, `email`, `description`, `nomfournisseur`, `addresfournisseur`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Ordinateur portable', 'PROXIMITI1234', 34, 2, '+225456577887', 'base', 'stephane@gmail.c', 'Le domaine convergence.proximiti.pro n\'est pas correctement configuré sur l\'IPv4 ', 'ABRO BOOS', 'PARIS FRANCE', 68, '2023-08-21 11:38:06', '2023-08-21 11:38:06');

-- --------------------------------------------------------

--
-- Structure de la table `entrees`
--

CREATE TABLE `entrees` (
  `id` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entrees`
--

INSERT INTO `entrees` (`id`, `designation`, `montant`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stephane', '2333', 'DESCRERFGHJKL', '2023-08-21 12:13:05', '2023-08-21 12:13:05');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artisan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `image`, `artisan_id`, `created_at`, `updated_at`) VALUES
(5, '1692627146_CamScanner 18-08-2023 15.44 - Copie (2).pdf', 15, '2023-08-21 12:12:26', '2023-08-21 12:12:26'),
(6, '1692627146_CamScanner 18-08-2023 15.44 - Copie.pdf', 15, '2023-08-21 12:12:26', '2023-08-21 12:12:26'),
(7, '1692627147_CamScanner 18-08-2023 15.44.pdf', 15, '2023-08-21 12:12:27', '2023-08-21 12:12:27');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_24_145312_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_24_145216_create_artisans_table', 1),
(7, '2023_07_24_145239_create_specialities_table', 1),
(8, '2023_07_24_145256_create_media_table', 1),
(9, '2023_07_25_095423_create_artisan_speciality_table', 1),
(10, '2023_07_25_104552_add_speciality_id_to_artisans_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mission_artisans`
--

CREATE TABLE `mission_artisans` (
  `id` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `artisan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission_artisans`
--

INSERT INTO `mission_artisans` (`id`, `designation`, `description`, `date_debut`, `date_fin`, `artisan_id`, `created_at`, `updated_at`) VALUES
(1, 'Depannage d\'un client à cocody', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio cum vitae. Mollitia magnam fugiat vero deserunt libero praesentium molestiae reiciendis quod assumenda nesciunt nam, dolor expedita nemo quam adipisci.', '2021-04-02', '2022-04-02', 1, NULL, NULL),
(2, 'Evenement 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio cum vitae. Mollitia magnam fugiat vero deserunt libero praesentium molestiae reiciendis quod assumenda nesciunt nam, dolor expedita nemo quam adipisci.', '2021-04-10', '2021-04-10', 1, NULL, NULL),
(3, 'Evenement 3', 'Mon artisan de controle', '2021-04-20', '2021-04-22', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'manager', NULL, NULL),
(3, 'moderateur', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `id` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialities`
--

INSERT INTO `specialities` (`id`, `libelle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'plombier', 'Plomberie', NULL, '2023-08-03 15:08:01'),
(2, 'Mecaniciendfgh', 'mecaniciensdcfgsd', NULL, '2023-07-27 12:17:51'),
(3, 'Maintenancier', 'maitenancier', NULL, NULL),
(5, 'Plaquiste-Staffeur', 'Réalise le placo ou le staff', '2023-08-02 16:54:50', '2023-08-02 16:54:50'),
(10, 'Peintre', 'Peintre-Designer-Graphiste-Enduiseur', '2023-08-03 15:08:57', '2023-08-03 15:08:57'),
(13, 'Technicien Froid - Climatiseur', 'Technicien Froid - Climatiseur', '2023-08-05 08:38:21', '2023-08-05 08:38:21'),
(15, 'Electricité', 'Electricien-Plaquiste-Basse Tension et Luminaire', '2023-08-08 12:37:58', '2023-08-08 12:37:58'),
(17, 'Nettoyeur', 'service d\'entretien', '2023-08-08 12:38:36', '2023-08-08 12:38:36'),
(20, 'Ferronnier-Soudeur', 'LM 08/08/2023', '2023-08-08 13:26:39', '2023-08-08 13:46:24'),
(23, 'Maçon', 'LM 08/08/2023', '2023-08-08 14:26:55', '2023-08-08 14:26:55'),
(24, 'Menuisier - Ebeniste', 'LM 08/08/2023', '2023-08-08 14:42:31', '2023-08-08 14:42:31'),
(25, 'Menuiserie Aluminium', 'LM 08/08/2023', '2023-08-08 16:08:57', '2023-08-12 08:51:17'),
(26, 'VITRIER', 'LM 08/08/2023', '2023-08-08 16:26:14', '2023-08-08 16:26:14'),
(27, 'Etanchéiste', 'LM 09/08/2023', '2023-08-09 10:23:43', '2023-08-09 10:23:43'),
(28, 'Etanchéiste', 'LM 09/08/2023', '2023-08-09 10:23:43', '2023-08-09 10:23:43'),
(29, 'Carreleur', 'LM 11/08/2023', '2023-08-11 15:31:24', '2023-08-12 08:52:15'),
(30, 'SOUDEUR', 'LM', '2023-08-16 11:09:55', '2023-08-16 11:09:55'),
(31, 'tapissier', 'tapissier décorateur', '2023-08-18 09:50:30', '2023-08-18 09:50:30'),
(32, 'FROID/CLIMATISATION', 'FROID CLIMATISATION', '2023-08-18 11:03:24', '2023-08-18 11:03:24'),
(33, 'FROID/CLIMATISATION', 'FROID CLIMATISATION', '2023-08-18 11:03:24', '2023-08-18 11:03:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Proximiti CI', 'labro@proximiti.ci', '2023-07-26 10:36:45', '$2y$10$XgStilffzths/DQgIFmzmeV8xm2GbFnaqQ/iY1bNjLigalUg9Eniy', 1, 'E2ouvYgKPV4nAsld5a4DideuzAeq9zlaTDDxemgDOdSClJawHjW2DnJMfjRh', '2023-07-26 10:36:45', '2023-08-11 13:50:38'),
(17, 'Godou', 'cgodou@proximiti.ci', NULL, '$2y$10$SE5z3vct5/lBIAa4z5ouJeX8QrAMmbQf51aO3r/00zqhH6/T3aFp2', 2, NULL, '2023-08-11 13:51:35', '2023-08-11 13:51:35'),
(18, 'Guy Stephane', 'kgsdev8@gmail.com', NULL, '$2y$10$/l.OrN7nEzr4W8QBSthMke0fNPPcrzsfezS6JQ6U0mF/tBBihVmyO', 1, NULL, '2023-08-12 14:57:39', '2023-08-12 14:57:39');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artisans`
--
ALTER TABLE `artisans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artisans_speciality_id_foreign` (`speciality_id`);

--
-- Index pour la table `artisan_speciality`
--
ALTER TABLE `artisan_speciality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artisan_speciality_artisan_id_foreign` (`artisan_id`),
  ADD KEY `artisan_speciality_speciality_id_foreign` (`speciality_id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_artisan_id_foreign` (`artisan_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mission_artisans`
--
ALTER TABLE `mission_artisans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mission_artisans_artisan_id_foreign` (`artisan_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artisans`
--
ALTER TABLE `artisans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `artisan_speciality`
--
ALTER TABLE `artisan_speciality`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `entrees`
--
ALTER TABLE `entrees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `mission_artisans`
--
ALTER TABLE `mission_artisans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artisans`
--
ALTER TABLE `artisans`
  ADD CONSTRAINT `artisans_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`);

--
-- Contraintes pour la table `artisan_speciality`
--
ALTER TABLE `artisan_speciality`
  ADD CONSTRAINT `artisan_speciality_artisan_id_foreign` FOREIGN KEY (`artisan_id`) REFERENCES `artisans` (`id`),
  ADD CONSTRAINT `artisan_speciality_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`);

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_artisan_id_foreign` FOREIGN KEY (`artisan_id`) REFERENCES `artisans` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
