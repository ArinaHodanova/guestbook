-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2022 г., 16:06
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook_table`
--

CREATE TABLE `guestbook_table` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `text` varchar(130) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `guestbook_table`
--

INSERT INTO `guestbook_table` (`id`, `name`, `text`, `date`) VALUES
(74, 'Иван', 'Привет. Тестовое сообщение', '2022-08-23'),
(75, 'Петя', 'Привет. Петя ', '2022-08-23'),
(76, '', '', '2022-08-23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `guestbook_table`
--
ALTER TABLE `guestbook_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `guestbook_table`
--
ALTER TABLE `guestbook_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
