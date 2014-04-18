-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 18 Kwi 2014, 20:05
-- Wersja serwera: 5.5.24-log
-- Wersja PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `return-true`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `on_forum` int(2) NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(64) NOT NULL,
  `pluses` int(64) NOT NULL,
  `minuses` int(64) NOT NULL,
  `category_id` int(64) NOT NULL,
  `tags` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `on_forum`, `title`, `content`, `author_id`, `pluses`, `minuses`, `category_id`, `tags`, `date`) VALUES
(1, 0, 'JAkiś tytuł pierwszego artykułu', 'yiashljkvah,knb ,kvhsdbkfavhnf bafukhj,van jhv, fnavmk,gnhajvn ahnvaljhfvnamfhjc akfjhavkg', 3, 0, 0, 0, '', '2014-02-17 13:49:33');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `link_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `moderators` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_to_category`
--

CREATE TABLE IF NOT EXISTS `category_to_category` (
  `parent_id` int(64) NOT NULL,
  `child_id` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `author_id` int(64) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `topic_id` int(11) NOT NULL,
  `first` int(11) NOT NULL,
  `spam` int(11) NOT NULL,
  `type` enum('article','topic') COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `pointed` int(2) NOT NULL,
  `points_min` int(64) NOT NULL,
  `points_max` int(64) NOT NULL,
  `description` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'login'),
(3, 'moderator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `role_id` int(64) NOT NULL,
  `user_id` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `roles_users`
--

INSERT INTO `roles_users` (`role_id`, `user_id`) VALUES
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `category_id` int(64) NOT NULL,
  `tags` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(64) NOT NULL,
  `blogged` int(2) NOT NULL,
  `pinned` int(2) NOT NULL,
  `last_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `signature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `exp` int(64) NOT NULL,
  `birthdate` date NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `signature`, `first_name`, `last_name`, `nick`, `exp`, `birthdate`, `join_date`, `last_login`, `city`) VALUES
(1, 'pawel', '1fbf78d00ec2133bf49e9a0eee64adb70f1d52e04c2aaa311f64f77bde8c16fe', 'pawel@xelium.pl', '', '', '', '', 'pawel', 0, '0000-00-00', '2014-02-07 20:12:10', '0000-00-00 00:00:00', ''),
(2, 'tester', '66466cfdfe325412ab0bb60b51a757cbf63843deebfec4a02b3e0691a32f0171', 'test@test.pl', '', '', '', '', 'testerek', 0, '0000-00-00', '2014-02-07 20:27:58', '0000-00-00 00:00:00', ''),
(3, 'test1', '7e468ab1dca01aaac069ee85ec50ec5149033383853aaff6b62d3d9f4d8e6bbb', 'test1@test.pl', '', 'A taki tam opis!! asdadad adadada', 'Pawcio', 'Moje', 'test1', 0, '1993-08-26', '2014-02-07 20:35:53', '0000-00-00 00:00:00', 'Otwock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
