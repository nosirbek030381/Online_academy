-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 29 2023 г., 09:59
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online_akademy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(200) NOT NULL,
  `parol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `login`, `parol`) VALUES
(0, '', '', ''),
(0, '0000', '655656', '0000'),
(0, 'aa', 'ASA', '12345'),
(0, 'aaa', 'aaasss', 'sssaaa'),
(0, 'aaasss', '', ''),
(0, 'aad', 'aas', 'saa'),
(0, 'aas', '', ''),
(0, 'asal', '4141', '123'),
(0, 'asdfas', 'sadf', '0000'),
(0, 'asdfg', 'asdfgh', '11111'),
(0, 'ass', '', ''),
(0, 'Aziz ', 'estet', 'gelik'),
(0, 'Bekzod', 'bekzod', '454545'),
(0, 'Eldor', 'eldo90', 'eldo09'),
(0, 'Jalol', 'jalol1234', '123456789'),
(0, 'Kamoladdin', 'Kamol4565', '4565'),
(0, 'Kamoladdin4565', '', ''),
(0, 'Mirzabek', 'xusainovmirzabek@gmail.com', 'Mirzabek3555'),
(0, 'nnnm', 'nnn', 'nnnm'),
(0, 'Nosir', 'nosir', '5555'),
(0, 'olma', 'olma3555', '1153555'),
(0, 'olma3555', '', ''),
(0, 'qqq', 'asa', 'qqqq'),
(0, 'salom', 'salom ', 'salom'),
(0, 'sojida', 'sojida8073', '8073'),
(0, 'sojida8073', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
