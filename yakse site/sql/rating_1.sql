-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2022 г., 17:45
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yakse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id`, `name`, `group`, `points`) VALUES
(1, 'Владимировна Вероника Макаровна', 'ПКС 19', '2,4'),
(2, 'Филипский Николай Викторович', 'ИСИП 19/2', '3,3'),
(3, 'Волков Артем Юрьевич', 'ИСИП 19/2', '3,7'),
(4, 'Ларчук Влдаислав Олегович', 'ИСИП 19/2', '10'),
(5, 'Донау Павел Александрович', 'ИСИП 19/2', '7,4'),
(6, 'Екимов Максим Русланович', 'ИСИП 19/2', '5,9'),
(7, 'Тарасов Фёдор Маркович', 'РЭТ 18', '4,6'),
(8, 'Сидоров Руслан Владимирович', 'ССА 21/2', '5,5'),
(9, 'Ивановна Ангелелина Елисеевна', 'РЭТ 19/2', '8,9'),
(10, 'Дьяконова Нина Александровна', 'ИСИП 19/2', '2,8'),
(11, 'Семенов Роман Арьсеньевич', 'ПКС 20', '1,5'),
(12, 'Захаров Макар Петрович', 'ОИБ 19', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
