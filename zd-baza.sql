-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2021 г., 16:29
-- Версия сервера: 5.6.37
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
-- База данных: `zd-baza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kassir`
--

CREATE TABLE `kassir` (
  `id` int(11) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kassir`
--

INSERT INTO `kassir` (`id`, `l_name`, `name`, `m_name`, `login`, `password`) VALUES
(1, 'Махмудов', 'Мухаммад', 'Абдумаджидович', 'mma', 'muhammad'),
(2, 'Самедов', 'Андрей', 'Андреевич', 'saa', 'andrey'),
(3, 'Манонов', 'Фарух', 'Абдусамадович', 'mfa', 'farukh'),
(4, 'Саидова', 'Наргиза', 'Абдуманоновна', 'cna', 'nargiza');

-- --------------------------------------------------------

--
-- Структура таблицы `mesto`
--

CREATE TABLE `mesto` (
  `id_mesto` int(11) NOT NULL,
  `id_poezd` int(11) NOT NULL,
  `number_vagon` int(11) NOT NULL,
  `number_mesto` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `id_reis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mesto`
--

INSERT INTO `mesto` (`id_mesto`, `id_poezd`, `number_vagon`, `number_mesto`, `status`, `id_reis`) VALUES
(1, 1, 1, 1, 0, 1),
(2, 1, 1, 2, 1, 1),
(3, 1, 1, 3, 1, 1),
(4, 1, 1, 4, 0, 1),
(5, 1, 1, 5, 1, 1),
(6, 1, 1, 6, 1, 1),
(7, 1, 1, 7, 0, 1),
(8, 1, 1, 8, 1, 1),
(9, 1, 1, 9, 0, 1),
(10, 1, 1, 10, 1, 1),
(11, 1, 1, 11, 1, 1),
(12, 1, 1, 12, 0, 1),
(13, 1, 1, 13, 1, 1),
(14, 1, 1, 14, 0, 1),
(15, 1, 1, 15, 1, 1),
(16, 1, 1, 16, 1, 1),
(17, 1, 1, 17, 0, 1),
(18, 1, 1, 18, 1, 1),
(19, 1, 1, 19, 1, 1),
(20, 1, 1, 20, 1, 1),
(21, 1, 1, 21, 1, 1),
(22, 1, 1, 22, 1, 1),
(23, 1, 1, 23, 1, 1),
(24, 1, 1, 24, 1, 1),
(25, 1, 1, 25, 1, 1),
(26, 1, 1, 26, 1, 1),
(27, 1, 1, 27, 1, 1),
(28, 1, 1, 28, 1, 1),
(29, 1, 1, 29, 1, 1),
(30, 1, 1, 30, 0, 1),
(31, 1, 1, 31, 1, 1),
(32, 1, 1, 32, 1, 1),
(38, 1, 1, 33, 1, 1),
(39, 1, 1, 34, 1, 1),
(40, 1, 1, 35, 1, 1),
(41, 1, 1, 36, 1, 1),
(42, 1, 2, 1, 0, 1),
(43, 1, 2, 2, 0, 1),
(44, 1, 2, 3, 1, 1),
(45, 1, 2, 4, 1, 1),
(46, 1, 2, 5, 0, 1),
(47, 1, 2, 6, 1, 1),
(48, 1, 2, 7, 0, 1),
(49, 1, 2, 8, 1, 1),
(50, 1, 2, 9, 0, 1),
(51, 1, 2, 10, 0, 1),
(52, 1, 2, 11, 1, 1),
(53, 1, 2, 12, 0, 1),
(54, 1, 2, 13, 1, 1),
(55, 1, 2, 14, 1, 1),
(56, 1, 2, 15, 0, 1),
(57, 1, 2, 16, 0, 1),
(58, 1, 2, 17, 1, 1),
(59, 1, 2, 18, 1, 1),
(60, 1, 2, 19, 1, 1),
(61, 1, 2, 20, 0, 1),
(62, 1, 2, 21, 0, 1),
(63, 1, 2, 22, 1, 1),
(64, 1, 2, 23, 0, 1),
(65, 1, 2, 24, 1, 1),
(66, 1, 2, 25, 0, 1),
(67, 1, 2, 26, 1, 1),
(68, 1, 2, 27, 0, 1),
(69, 1, 2, 28, 1, 1),
(70, 1, 2, 29, 1, 1),
(71, 1, 2, 30, 0, 1),
(72, 1, 2, 31, 0, 1),
(73, 1, 2, 32, 1, 1),
(74, 1, 2, 33, 0, 1),
(75, 1, 2, 34, 1, 1),
(76, 1, 2, 35, 0, 1),
(77, 1, 2, 36, 0, 1),
(78, 1, 3, 1, 1, 1),
(79, 1, 3, 2, 1, 1),
(80, 1, 3, 3, 1, 1),
(81, 1, 3, 4, 1, 1),
(82, 1, 3, 5, 1, 1),
(83, 1, 3, 6, 0, 1),
(84, 1, 3, 7, 1, 1),
(85, 1, 3, 8, 1, 1),
(86, 1, 3, 9, 0, 1),
(87, 1, 3, 10, 1, 1),
(88, 1, 3, 11, 1, 1),
(89, 1, 3, 12, 1, 1),
(90, 1, 3, 13, 1, 1),
(91, 1, 3, 14, 1, 1),
(92, 1, 3, 15, 0, 1),
(93, 1, 3, 16, 1, 1),
(94, 1, 3, 17, 1, 1),
(95, 1, 3, 18, 1, 1),
(96, 1, 3, 19, 1, 1),
(97, 1, 3, 20, 1, 1),
(98, 1, 3, 21, 1, 1),
(99, 1, 3, 22, 1, 1),
(100, 1, 3, 23, 1, 1),
(101, 1, 3, 24, 1, 1),
(102, 1, 3, 25, 1, 1),
(103, 1, 3, 26, 1, 1),
(104, 1, 3, 27, 1, 1),
(105, 1, 3, 28, 1, 1),
(106, 1, 3, 29, 1, 1),
(107, 1, 3, 30, 0, 1),
(108, 1, 3, 31, 1, 1),
(109, 1, 3, 32, 0, 1),
(110, 1, 3, 33, 1, 1),
(111, 1, 3, 34, 1, 1),
(112, 1, 3, 35, 1, 1),
(113, 1, 3, 36, 0, 1),
(114, 1, 4, 1, 0, 1),
(115, 1, 4, 2, 1, 1),
(116, 1, 4, 3, 1, 1),
(117, 1, 4, 4, 1, 1),
(118, 1, 4, 5, 1, 1),
(119, 1, 4, 6, 0, 1),
(120, 1, 4, 7, 1, 1),
(121, 1, 4, 8, 1, 1),
(122, 1, 4, 9, 1, 1),
(123, 1, 4, 10, 0, 1),
(124, 1, 4, 11, 1, 1),
(125, 1, 4, 12, 1, 1),
(126, 1, 4, 13, 0, 1),
(127, 1, 4, 14, 1, 1),
(128, 1, 4, 15, 1, 1),
(129, 1, 4, 16, 1, 1),
(130, 1, 4, 17, 1, 1),
(131, 1, 4, 18, 1, 1),
(132, 1, 4, 19, 1, 1),
(133, 1, 4, 20, 1, 1),
(134, 1, 4, 21, 1, 1),
(135, 1, 4, 22, 0, 1),
(136, 1, 4, 23, 1, 1),
(137, 1, 4, 24, 1, 1),
(138, 1, 4, 25, 1, 1),
(139, 1, 4, 26, 1, 1),
(140, 1, 4, 27, 1, 1),
(141, 1, 4, 28, 1, 1),
(142, 1, 4, 29, 1, 1),
(143, 1, 4, 30, 1, 1),
(144, 1, 4, 31, 1, 1),
(145, 1, 4, 32, 1, 1),
(146, 1, 4, 33, 1, 1),
(147, 1, 4, 34, 1, 1),
(148, 1, 4, 35, 1, 1),
(149, 1, 4, 36, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `oplata`
--

CREATE TABLE `oplata` (
  `id_oplata` int(11) NOT NULL,
  `id_passanger` int(11) NOT NULL,
  `id_kassir` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `sdacha_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oplata`
--

INSERT INTO `oplata` (`id_oplata`, `id_passanger`, `id_kassir`, `cena`, `sdacha_s`) VALUES
(1, 5, 1, 150, 150),
(2, 7, 1, 150, 150),
(3, 8, 1, 150, 150),
(4, 9, 1, 150, 150),
(5, 11, 1, 150, 150),
(6, 12, 1, 150, 150),
(7, 13, 1, 150, 150),
(8, 14, 1, 150, 150),
(9, 15, 1, 150, 150),
(10, 16, 1, 150, 150),
(11, 17, 1, 150, 150),
(14, 20, 1, 150, 200),
(15, 21, 1, 150, 300),
(16, 22, 1, 150, 500),
(19, 23, 1, 150, 150),
(21, 28, 1, 150, 200),
(22, 29, 1, 150, 1000),
(23, 30, 1, 150, 300),
(25, 32, 1, 150, 400),
(31, 33, 1, 150, 150),
(32, 34, 1, 150, 500),
(33, 35, 1, 150, 200),
(34, 36, 1, 150, 300),
(35, 37, 1, 150, 400),
(36, 38, 1, 150, 500),
(37, 39, 1, 150, 400),
(38, 40, 1, 150, 150),
(40, 42, 1, 150, 300),
(43, 45, 1, 150, 150),
(44, 46, 2, 150, 150),
(45, 47, 4, 150, 500),
(46, 49, 4, 150, 150),
(47, 50, 4, 150, 150),
(48, 51, 4, 150, 150),
(49, 52, 1, 150, 300),
(50, 53, 1, 150, 150),
(51, 54, 2, 150, 300),
(52, 55, 1, 150, 150);

-- --------------------------------------------------------

--
-- Структура таблицы `passanger`
--

CREATE TABLE `passanger` (
  `id_passenger` int(11) NOT NULL,
  `id_reis` int(11) NOT NULL,
  `id_mesto` int(11) NOT NULL,
  `id_kassir` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `l_name` varchar(60) NOT NULL,
  `m_name` varchar(60) NOT NULL,
  `passport_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `passanger`
--

INSERT INTO `passanger` (`id_passenger`, `id_reis`, `id_mesto`, `id_kassir`, `name`, `l_name`, `m_name`, `passport_number`) VALUES
(5, 1, 9, 1, 'Мухаммад', 'Махмудов', 'Абдумаджидович', 1234567890),
(7, 1, 1, 1, 'Ибрагим', 'Махмудов', 'Михаилович', 123456781),
(8, 1, 42, 1, 'Иван', 'Иванов', 'Иванович', 111111111),
(9, 1, 7, 1, 'Андрей', 'Антонов', 'Андреевич', 222222222),
(11, 1, 12, 1, 'Андрей', 'Иванов', 'Андреевич', 222222221),
(12, 1, 17, 1, 'Сергей', 'Иванов', 'Андреевич', 897867543),
(13, 1, 14, 1, 'Ахмад', 'Ахмадов', 'Ахмадович', 123412345),
(14, 1, 4, 1, 'Анвар', 'Махмудов', 'Касимович', 435678981),
(15, 1, 46, 1, 'Анна', 'Николаевеа', 'Самадовна', 456789098),
(16, 1, 83, 1, 'Рафаэл', 'Гулов', 'Антонович', 234556789),
(17, 1, 86, 1, 'Матин', 'Джураев', 'Андреевич', 234234234),
(20, 1, 50, 1, 'Сергей', 'Пушкин', 'Андреевич', 666789023),
(21, 1, 48, 1, 'Надя', 'Надя', 'Надя', 234578123),
(22, 1, 119, 1, 'Александр', 'Иванов', 'Михайлович', 454545455),
(23, 1, 53, 1, 'Мехрангез', 'Абдуллоева', 'Абдуллаевна', 345678901),
(28, 1, 123, 1, 'Сергей', 'Махмудов', 'Андреевич', 333333333),
(29, 1, 43, 1, 'Абдурауф', 'Рашидов', 'Рашидович', 456534546),
(30, 1, 92, 1, 'Пак', 'Николай', 'Андреевич', 456789234),
(32, 1, 107, 1, 'Мухаммаджон', 'Манонов', 'Манонович', 987654321),
(33, 1, 126, 1, 'Олег', 'Олегов', 'Андреевич', 671234561),
(34, 1, 56, 1, 'Сафар', 'Джураев', 'Сафарович', 763456879),
(35, 1, 77, 1, 'Мухаммад', 'Бойматов', 'Мансурович', 675745879),
(36, 1, 135, 1, 'Амир', 'Кадиров', 'Ашурович', 675634271),
(37, 1, 113, 1, 'Игорь', 'Иванов', 'Андреевич', 567898231),
(38, 1, 76, 1, 'Салим', 'Махмудов', 'Салимович', 678757471),
(39, 1, 61, 1, 'Салим', 'Санчаров', 'Салимович', 456789012),
(40, 1, 62, 1, 'Сано', 'Санчаров', 'Салимович', 456787901),
(42, 1, 66, 1, 'Ибрагим', 'Магамедов', 'Магамедович', 457821341),
(45, 1, 68, 1, 'Аня', 'Абдуллоева', 'Абдуллаевна', 90999881),
(46, 1, 71, 2, 'Ибрагим', 'Иванов', 'Андреевич', 111111111),
(47, 1, 74, 4, 'Барно', 'Шарофатова', 'Мухаммадилиева', 890978901),
(49, 1, 72, 4, 'Мухаммад', 'Бойматов', 'Ганиевич', 123456781),
(50, 1, 114, 4, 'Мадина', 'Ганиева', 'Абдуллаевна', 567898456),
(51, 1, 64, 4, 'Мухаммад', 'Махмудов', 'Андреевич', 666789023),
(52, 1, 51, 1, 'Андрей', 'Махмудов', 'Андреевич', 123456718),
(53, 1, 30, 1, 'Мухаммад', 'Ахмадов', 'Андреевич', 666789023),
(54, 1, 109, 2, 'Аня', 'Иванова', 'Андреевна', 123456235),
(55, 1, 57, 1, 'Мансур', 'Бойматов', 'Салимович', 567898456);

--
-- Триггеры `passanger`
--
DELIMITER $$
CREATE TRIGGER `status_mesto` AFTER INSERT ON `passanger` FOR EACH ROW UPDATE mesto SET mesto.status=0 WHERE mesto.id_reis=NEW.id_reis AND mesto.id_mesto=NEW.id_mesto
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `poezd`
--

CREATE TABLE `poezd` (
  `id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `poezd`
--

INSERT INTO `poezd` (`id`, `p_name`) VALUES
(1, '100Х'),
(2, '101Д'),
(3, '102К'),
(4, '104Т');

-- --------------------------------------------------------

--
-- Структура таблицы `reis`
--

CREATE TABLE `reis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_poezd` int(11) NOT NULL,
  `st_otpr` varchar(60) NOT NULL,
  `st_prih` varchar(60) NOT NULL,
  `date_otpr` date NOT NULL,
  `date_prih` date NOT NULL,
  `time_otpr` time NOT NULL,
  `time_prih` time NOT NULL,
  `cena` int(11) NOT NULL,
  `kol_mest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reis`
--

INSERT INTO `reis` (`id`, `id_poezd`, `st_otpr`, `st_prih`, `date_otpr`, `date_prih`, `time_otpr`, `time_prih`, `cena`, `kol_mest`) VALUES
(1, 1, 'Худжанд', 'Душанбе', '2021-01-27', '2021-01-28', '22:00:00', '02:00:00', 150, 144),
(2, 2, 'Душанбе', 'Худжанд', '2021-01-29', '2021-01-29', '11:00:00', '15:00:00', 100, 144),
(3, 3, 'Душанбе', 'Куляб', '2021-01-27', '2021-01-27', '08:00:00', '09:00:00', 60, 144),
(4, 3, 'Куляб', 'Душанбе', '2021-01-30', '2021-01-30', '10:00:00', '11:00:00', 60, 144);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kassir`
--
ALTER TABLE `kassir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `mesto`
--
ALTER TABLE `mesto`
  ADD PRIMARY KEY (`id_mesto`),
  ADD KEY `id_poezd` (`id_poezd`),
  ADD KEY `id_mesto` (`id_mesto`),
  ADD KEY `id_reis` (`id_reis`);

--
-- Индексы таблицы `oplata`
--
ALTER TABLE `oplata`
  ADD PRIMARY KEY (`id_oplata`),
  ADD KEY `id_passanger` (`id_passanger`),
  ADD KEY `id_kassir` (`id_kassir`);

--
-- Индексы таблицы `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`id_passenger`),
  ADD KEY `id_mesto` (`id_mesto`),
  ADD KEY `id_passenger` (`id_passenger`),
  ADD KEY `id_kassir` (`id_kassir`);

--
-- Индексы таблицы `poezd`
--
ALTER TABLE `poezd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `reis`
--
ALTER TABLE `reis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_poezd` (`id_poezd`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`),
  ADD KEY `id_5` (`id`),
  ADD KEY `id_6` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kassir`
--
ALTER TABLE `kassir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `mesto`
--
ALTER TABLE `mesto`
  MODIFY `id_mesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT для таблицы `oplata`
--
ALTER TABLE `oplata`
  MODIFY `id_oplata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT для таблицы `passanger`
--
ALTER TABLE `passanger`
  MODIFY `id_passenger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблицы `reis`
--
ALTER TABLE `reis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `mesto`
--
ALTER TABLE `mesto`
  ADD CONSTRAINT `mesto_ibfk_1` FOREIGN KEY (`id_poezd`) REFERENCES `poezd` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `oplata`
--
ALTER TABLE `oplata`
  ADD CONSTRAINT `oplata_ibfk_1` FOREIGN KEY (`id_passanger`) REFERENCES `passanger` (`id_passenger`) ON UPDATE CASCADE,
  ADD CONSTRAINT `oplata_ibfk_2` FOREIGN KEY (`id_kassir`) REFERENCES `kassir` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `passanger`
--
ALTER TABLE `passanger`
  ADD CONSTRAINT `passanger_ibfk_1` FOREIGN KEY (`id_mesto`) REFERENCES `mesto` (`id_mesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `passanger_ibfk_2` FOREIGN KEY (`id_kassir`) REFERENCES `kassir` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reis`
--
ALTER TABLE `reis`
  ADD CONSTRAINT `reis_ibfk_1` FOREIGN KEY (`id_poezd`) REFERENCES `poezd` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
