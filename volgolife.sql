-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2019 г., 20:36
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
-- Структура таблицы `advertisement`
--

CREATE TABLE `advertisement` (
  `id_advertisements` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `leadtime` time NOT NULL,
  `email` varchar(256) NOT NULL,
  `id_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advertisement`
--

INSERT INTO `advertisement` (`id_advertisements`, `name`, `price`, `description`, `leadtime`, `email`, `id_orders`) VALUES
(1, '\"Изготовление стендов\"', 1800, 'В современном мире очень важно выделить нужную информацию, сделать ее доступной и легко обновляемой. Для этих целей незаменимы информационные стенды.', '08:50:00', 'Stends@gmail.com', 1),
(2, '\"Информационный стенд\"', 2100, 'Мы предлагаем услуги по производству рекламных материалов. Привлекательные цены, кратчайшие сроки и гарантия качества.', '18:50:00', 'stend@volgmail.com', 2),
(3, '\"Стенд для детского сада\"', 4300, 'Для детских садов мы разработали фигурные полноцветные стенды, яркие, красочные, создающие атмосферу в дошкольных учереждениях.', '07:35:00', 'Stenfor@yougmail.com', 3),
(5, '\"Лучшие стенды\"', 2100, 'Быстрое и своевременное выполнение стендов на заказ', '18:50:00', 'Stend1@23gmail.com', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `advertisements`
--

CREATE TABLE `advertisements` (
  `id_advertisements` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(256) NOT NULL,
  `leadtime` time NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advertisements`
--

INSERT INTO `advertisements` (`id_advertisements`, `name`, `price`, `description`, `leadtime`, `email`, `id_customer`) VALUES
(22, 'Информационные стенды', 3350, 'Изготовление различных стендов на заказ', '07:15:00', 'stands@posters.org', 54),
(23, 'Стенды для школ', 5670, 'Интересные, яркие и познавательные стенды только у нас. ', '14:35:00', 'stands@school1.org', 40),
(24, 'Стенд для офиса', 4578, 'Качественный и недорогой стенд на заказ.', '16:35:00', 'stands@OfiH.org', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `assessment` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id_customer`, `review`, `assessment`, `img`) VALUES
(40, 'Хорошo', 8, 'uploads/123.jpeg'),
(54, 'Замечательно!!!', 10, 'uploads/________________________________________.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `number` int(255) NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `assessment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_orders`, `number`, `reviews`, `assessment`) VALUES
(1, 155, 'Своевременное и качественное выполнение работы', 5),
(2, 124, 'Хорошая работа', 9),
(3, 234, 'Очень креативно', 10),
(4, 230, 'Спасибо, хорошая работа', 7);

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
(4, 'mariya', 'masha1997', '25% специально для вас!'),
(5, 'admin', '0987654321', 'Добро пожаловать Администратор');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id_advertisements`),
  ADD KEY `id_orders` (`id_orders`);

--
-- Индексы таблицы `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id_advertisements`),
  ADD KEY `id_orders` (`id_customer`) USING BTREE;

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id_advertisements` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id_advertisements` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`id_orders`) REFERENCES `volgolif`.`orders` (`id_orders`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `advertisements`
--
ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
