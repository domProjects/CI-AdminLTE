-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ci_adminlte`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

ALTER TABLE `groups` CHANGE `bgcolor` `bgcolor` CHAR(7) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#607D8B';

--
-- Contenu de la table `groups`
--

UPDATE `groups` SET `id` = 1,`name` = 'admin',`description` = 'Administrator',`bgcolor` = '#F44336' WHERE `groups`.`id` = 1;
UPDATE `groups` SET `id` = 2,`name` = 'members',`description` = 'General User',`bgcolor` = '#2196F3' WHERE `groups`.`id` = 2;