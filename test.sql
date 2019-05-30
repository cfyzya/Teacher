-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2019 г., 22:59
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Teachers`
--

CREATE TABLE `Teachers` (
  `Name` text NOT NULL,
  `secondName` text NOT NULL,
  `patronymic` text NOT NULL,
  `BirthDate` text NOT NULL,
  `address` text NOT NULL,
  `Language` text NOT NULL,
  `Education` text NOT NULL,
  `Expirience` text NOT NULL,
  `Proffesion` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Teachers`
--

INSERT INTO `Teachers` (`Name`, `secondName`, `patronymic`, `BirthDate`, `address`, `Language`, `Education`, `Expirience`, `Proffesion`, `id`) VALUES
('Валерия', 'Иванова', 'Ивановна', '1999-12-02', 'Ул.Шахтерская 12/13', 'Английский', 'Высшее', '2 года', 'Учитель английского языка', 3),
('Виктория', 'Петрова', 'Игоревна', '2000-01-02', 'Ул,Оборонная 34', 'Немецкий', 'Высшее', '5 лет', 'Учитель математики', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `Password`) VALUES
(36, 'cfyzya', '202cb962ac59075b964b07152d234b70'),
(37, 'cfyzya', '123'),
(38, 'cfyzyasadasfa', '202cb962ac59075b964b07152d234b70'),
(39, 'cfyzyasadasfa', '202cb962ac59075b964b07152d234b70'),
(40, 'cfyzya', '202cb962ac59075b964b07152d234b70'),
(41, 'cfyzya', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
