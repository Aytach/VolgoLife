-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 30 2019 г., 05:57
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `volgolife`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(256) NOT NULL,
  `leadtime` time NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advertisements`
--

INSERT INTO `advertisements` (`id`, `name`, `price`, `description`, `leadtime`, `email`) VALUES
(1, '\"Изготовление стендов\"', 2300, 'В современном мире очень важно выделить нужную информацию, сделать ее доступной и легко обновляемой. Для этих целей незаменимы информационные стенды.', '07:35:00', 'Stends@Volgograd.org'),
(2, '\"Информационный стенд\"\r\n', 1800, 'Мы предлагаем услуги по производству рекламных материалов. Привлекательные цены, кратчайшие сроки и гарантия качества.', '12:10:00', 'Stends@ofLife.org'),
(3, '\"Стенд для детского сада\"', 2100, 'Для детских садов мы разработали фигурные полноцветные стенды, яркие, красочные, создающие атмосферу в дошкольных учереждениях.', '08:50:00', 'NewStends@gmail.com'),
(4, ' \"Information stands\"', 3200, 'Production of various stands to order', '07:15:00', 'stands@posters.org');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `data` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `login`, `password`, `data`) VALUES
(2, 'alexey', 'alexey1212', 'Поздравляем с регистрацией! Вам предоставляется персональная скидка на экскурсию!'),
(3, 'ivan', 'ivan1234', 'Скидка 15% на выставки!'),
(4, 'mariya', 'masha1997', '25% специально для вас!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
