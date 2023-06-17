-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Cze 2023, 09:49
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `journal`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `article_name` varchar(1000) NOT NULL,
  `article_text` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `tag_id_tag` int(11) NOT NULL,
  `article_author_id` int(11) NOT NULL,
  `is_public` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `article`
--

INSERT INTO `article` (`id_article`, `article_name`, `article_text`, `date`, `tag_id_tag`, `article_author_id`, `is_public`) VALUES
(1, 'Aktualizacje prawa drogowego w roku 2023', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-16', 1, 2, 1),
(2, 'Polska nisko w rankingach czytelnictwa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-16', 1, 2, 1),
(3, 'Polska reprezentacja zdobywa drugie miejsce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-06', 6, 2, 1),
(5, 'Wzrosty na rynku amerykańskim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-03', 3, 2, 1),
(6, 'Toyota ogłosiła nowy model samochodu hybrydowego', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-06', 6, 3, 1),
(7, 'Prezydent USA spotkał się z premierem Meksyku', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-06', 4, 4, 1),
(8, 'Propozycja nowego prawa w Unii Europejskiej', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-10', 2, 4, 1),
(9, 'Coraz więcej turystów odwiedza Polskę', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-10', 1, 4, 1),
(10, 'Wartość dolara pobija rekordy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-06', 3, 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `article_history`
--

CREATE TABLE `article_history` (
  `article_id_article` int(11) NOT NULL,
  `id_article_modification` int(11) NOT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by_who` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `roles_names` varchar(45) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `active_since_date` date DEFAULT NULL,
  `active_until_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id_roles`, `roles_names`, `is_active`, `active_since_date`, `active_until_date`) VALUES
(1, 'admin', 1, '2023-04-16', NULL),
(2, 'journalist', 1, '2023-04-16', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `tag_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tag`
--

INSERT INTO `tag` (`id_tag`, `tag_name`) VALUES
(1, 'Polska'),
(2, 'Europa'),
(3, 'Ekonomia'),
(4, 'Polityka'),
(5, 'Sport'),
(6, 'Technologia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_users`, `login`, `password`, `email`, `name`, `created_date`) VALUES
(1, 'admin', 'admin', 'email@email.com', 'Jan Kowalski', '2023-04-16'),
(2, 'jnowak', 'jnowak', 'jnowak@email.com', 'Jan Nowak', '2023-04-16'),
(3, 'astudencki', 'astudencki', 'astudencki@email.com', 'Arkadiusz Studencki', '2023-04-03'),
(4, 'psosnowski', 'psosnowski', 'psosnowski@email.com', 'Patryk Sosnowski', '2023-04-05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_has_roles`
--

CREATE TABLE `users_has_roles` (
  `users_id_users` int(11) NOT NULL,
  `roles_id_roles` int(11) NOT NULL,
  `when_role_was_given` date NOT NULL,
  `when_role_was_taken_away` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users_has_roles`
--

INSERT INTO `users_has_roles` (`users_id_users`, `roles_id_roles`, `when_role_was_given`, `when_role_was_taken_away`) VALUES
(1, 1, '2023-04-16', NULL),
(2, 2, '2023-04-16', NULL),
(3, 2, '2023-04-16', NULL),
(4, 2, '2023-04-16', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_modification_history`
--

CREATE TABLE `users_modification_history` (
  `id_modification` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL,
  `modified_date` date DEFAULT NULL,
  `modified_by_who` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `tag_id_tag` (`tag_id_tag`),
  ADD KEY `article_author_id` (`article_author_id`);

--
-- Indeksy dla tabeli `article_history`
--
ALTER TABLE `article_history`
  ADD PRIMARY KEY (`id_article_modification`),
  ADD KEY `article_id_article` (`article_id_article`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indeksy dla tabeli `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeksy dla tabeli `users_has_roles`
--
ALTER TABLE `users_has_roles`
  ADD KEY `users_id_users` (`users_id_users`),
  ADD KEY `roles_id_roles` (`roles_id_roles`);

--
-- Indeksy dla tabeli `users_modification_history`
--
ALTER TABLE `users_modification_history`
  ADD PRIMARY KEY (`id_modification`),
  ADD KEY `users_id_users` (`users_id_users`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `article_history`
--
ALTER TABLE `article_history`
  MODIFY `id_article_modification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users_modification_history`
--
ALTER TABLE `users_modification_history`
  MODIFY `id_modification` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`article_author_id`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`tag_id_tag`) REFERENCES `tag` (`id_tag`);

--
-- Ograniczenia dla tabeli `article_history`
--
ALTER TABLE `article_history`
  ADD CONSTRAINT `article_history_ibfk_1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`);

--
-- Ograniczenia dla tabeli `users_has_roles`
--
ALTER TABLE `users_has_roles`
  ADD CONSTRAINT `users_has_roles_ibfk_1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `users_has_roles_ibfk_2` FOREIGN KEY (`roles_id_roles`) REFERENCES `roles` (`id_roles`);

--
-- Ograniczenia dla tabeli `users_modification_history`
--
ALTER TABLE `users_modification_history`
  ADD CONSTRAINT `users_modification_history_ibfk_1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
