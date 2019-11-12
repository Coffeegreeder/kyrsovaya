-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 18 2019 г., 15:19
-- Версия сервера: 5.6.41
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `template`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `id_zakaza` int(11) NOT NULL,
  `id_tovara` int(11) NOT NULL,
  `kolvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_tovara` int(11) NOT NULL,
  `kolvo` int(11) NOT NULL,
  `id_session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--

CREATE TABLE `email` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gorod`
--

CREATE TABLE `gorod` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gorod`
--

INSERT INTO `gorod` (`id`, `name`) VALUES
(1, 'Санкт-Петербург'),
(2, 'Москва'),
(3, 'Екатеринбург'),
(4, 'Тюмень'),
(5, 'Сочи'),
(6, 'Краснодар'),
(7, 'Калининград'),
(8, 'Нижний Новгород');

-- --------------------------------------------------------

--
-- Структура таблицы `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
(1, 'фантастика'),
(2, 'ужасы'),
(3, 'роман'),
(4, 'книги для детей'),
(5, 'образование'),
(6, 'наука'),
(7, 'искусство'),
(8, 'графические романы, комиксы, манга'),
(9, 'религия и философия'),
(10, 'деловая литература'),
(11, 'красота, здоровье, спорт'),
(12, 'увлечения');

-- --------------------------------------------------------

--
-- Структура таблицы `recomended`
--

CREATE TABLE `recomended` (
  `id` int(11) NOT NULL,
  `id_tovara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recomended`
--

INSERT INTO `recomended` (`id`, `id_tovara`) VALUES
(4, 7),
(1, 8),
(2, 12),
(3, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`) VALUES
(1, 'ТРК \"Галерея\", Лиговский проспект, 30 А'),
(2, 'ТРК \"Пик\", ул. Ефимова, 2'),
(3, 'Невский пр., 46'),
(4, 'ТЦ \"МЕГА Дыбенко\", Мурманское шоссе, 12 км '),
(5, 'ТРК \"Гранд Каньон\", пр. Энгельса, 154');

-- --------------------------------------------------------

--
-- Структура таблицы `limit`
--

CREATE TABLE `limit` (
  `id` int(11) NOT NULL,
  `id_tovara` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `kolvo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `limit`
--

INSERT INTO `limit` (`id`, `id_tovara`, `id_shop`, `kolvo`) VALUES
(15, 7, 1, '100'),
(16, 7, 2, '100'),
(17, 7, 3, '100'),
(18, 7, 4, '100'),
(19, 7, 5, '100'),
(20, 8, 1, '100'),
(21, 8, 2, '100'),
(23, 8, 3, '100'),
(24, 8, 4, '100'),
(25, 8, 5, '100'),
(26, 9, 1, '100'),
(27, 9, 2, '100'),
(28, 9, 3, '100'),
(29, 9, 4, '100'),
(30, 9, 5, '100'),
(31, 10, 1, '100'),
(32, 10, 2, '100'),
(33, 10, 3, '100'),
(34, 10, 4, '100'),
(35, 10, 5, '100'),
(36, 11, 1, '100'),
(37, 11, 2, '100'),
(38, 11, 3, '100'),
(39, 11, 4, '100'),
(40, 11, 5, '100'),
(41, 12, 1, '100'),
(42, 12, 2, '100'),
(43, 12, 3, '100'),
(44, 12, 4, '100'),
(46, 12, 5, '100'),
(47, 13, 1, '100'),
(48, 13, 2, '100'),
(49, 13, 3, '100'),
(50, 13, 4, '100'),
(51, 13, 5, '100'),
(52, 21, 1, '100'),
(53, 21, 2, '100'),
(54, 21, 3, '100'),
(55, 21, 4, '100'),
(56, 21, 5, '100'),
(62, 24, 1, '100'),
(63, 24, 2, '100'),
(64, 24, 3, '100'),
(65, 24, 4, '100'),
(66, 24, 5, '100');

-- --------------------------------------------------------

--
-- Структура таблицы `tovari`
--

CREATE TABLE `tovari` (
  `id` int(3) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `avtor` tinytext,
  `price` int(11) NOT NULL,
  `god` int(4) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `opisanie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovari`
--

INSERT INTO `tovari` (`id`, `foto`, `name`, `avtor`, `price`, `god`, `id_tag`, `opisanie`) VALUES
(7, '../web/images/shop/DorianGray.jpg', 'Портрет Дориана Грея', 'Оскар Уайльд', 350, 1890, 3, '«Портре́т Дориа́на Гре́я» — единственный опубликованный роман Оскара Уайльда. В жанровом отношении представляет смесь романа воспитания с моральной притчей. Существует в двух версиях — в 14 главах и в 20 главах, — в новое отдельное издание были добавлены главы III, V, XV-XVIII.'),
(8, '../web/images/shop/zov.jpg', 'Зов Ктулху', 'Говард Лавкрафт', 300, 1928, 2, '«Зов Кту́лху» — рассказ Г.Ф. Лавкрафта в жанре лавкрафтовских ужасов, написанный в 1926 году. В нём впервые появляется Ктулху — божество, которому поклоняются адепты жестокого культа.'),
(9, '../web/images/shop/onegin.jpg', 'Евгений Онегин', 'Александр Пушкин', 250, 1833, 3, 'Евге́ний Оне́гин — роман в стихах русского поэта Александра Сергеевича Пушкина, написанный в 1823—1830 годах, одно из самых значительных произведений русской словесности. Повествование ведётся от имени безымянного автора, который представился добрым приятелем Онегина.'),
(10, '../web/images/shop/grozovoypereval.jpg', 'Грозовой перевал', 'Эмили Бронте', 350, 1847, 3, '«Грозово́й перева́л» — единственный роман английской писательницы и поэтессы XIX века Эмили Бронте и самое известное её произведение.'),
(11, '../web/images/shop/neznaykanalune.jpg', 'Незнайка на Луне', 'Николай Носов', 400, 1965, 4, '«Незнайка на Луне» — роман-сказка Николая Носова из серии о приключениях Незнайки с элементами антиутопии и научной фантастики. Это третья и заключительная часть трилогии романов Носова о Незнайке после произведений «Приключения Незнайки и его друзей» и «Незнайка в Солнечном городе».'),
(12, '../web/images/shop/metro2033.jpg', 'Метро 2033', 'Дмитрий Глуховский', 600, 2005, 1, '«Метро́ 2033» — постапокалиптический роман Дмитрия Глуховского, описывающий жизнь людей в московском метро после ядерной войны на Земле. Выпущен издательством «Эксмо» в 2005 году и переиздан издательством «Популярная литература» в 2007 году.'),
(13, '../web/images/shop/algebra7kol.jpg', 'Алгебра. 7 класс', 'Юрий Колягин', 600, 2018, 5, 'Данный учебник является первой частью линии учебников алгебры для 7-9 классов, отвечающих всем требованиям федерального государственного образовательного стандарта основного общего образования. Изложение учебного материала ведётся на доступном уровне с учётом деятельностного подхода.'),
(21, '../web/images/shop/1013159044.jpg', 'Цвет волшебства', 'Терри Преттчет', 350, 1983, 1, '«Цвет волшебства́» — юмористическое фэнтези известного английского писателя Терри Пратчетта, опубликовано в 1983 году. Первая книга из цикла «Плоский мир», включающего 41 произведение. Цвет волшебства — это октарин, восьмой цвет радуги Плоского мира'),
(22, '../web/images/shop/101_tumth370x400.jpg', 'Коран', 'Аллах', 45000, 632, 9, 'Полностью ручная работа.\r\nФирменный подарочный футляр в комплекте.\r\nМатериал: Серебро 925*, кожа, цирконий'),
(24, '../web/images/shop/580471fe8ae74b7839235332.jpg', 'Наруто (все тома)', 'Масаси Кисимото', 15000, 2001, 8, '«Наруто» — манга Масаси Кисимото в жанре сёнэн. Главным её героем является Наруто Удзумаки, шумный и непоседливый ниндзя-подросток, который мечтает достичь всеобщего признания и стать Хокагэ — главой своего селения и сильнейшим ниндзя.');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `fio` text NOT NULL,
  `adres` text NOT NULL,
  `id_gorod` int(11) NOT NULL,
  `indeks` int(6) NOT NULL,
  `comment` text NOT NULL,
  `oplata` text NOT NULL,
  `number` int(15) NOT NULL,
  `ip` text NOT NULL,
  `card` text NOT NULL,
  `date` text NOT NULL,
  `cvc` text NOT NULL,
  `fullprice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_zakaza` (`id_zakaza`,`id_tovara`),
  ADD KEY `id_tovara` (`id_tovara`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tovara` (`id_tovara`),
  ADD KEY `id_session` (`id_session`);

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gorod`
--
ALTER TABLE `gorod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recomended`
--
ALTER TABLE `recomended`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tovara` (`id_tovara`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `limit`
--
ALTER TABLE `limit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_shop` (`id_shop`),
  ADD KEY `id_tovara` (`id_tovara`);

--
-- Индексы таблицы `tovari`
--
ALTER TABLE `tovari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gorod` (`id_gorod`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gorod`
--
ALTER TABLE `gorod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `recomended`
--
ALTER TABLE `recomended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `limit`
--
ALTER TABLE `limit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `tovari`
--
ALTER TABLE `tovari`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `adm`
--
ALTER TABLE `adm`
  ADD CONSTRAINT `adm_ibfk_1` FOREIGN KEY (`id_zakaza`) REFERENCES `zakaz` (`id`),
  ADD CONSTRAINT `adm_ibfk_2` FOREIGN KEY (`id_tovara`) REFERENCES `tovari` (`id`);

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_tovara`) REFERENCES `tovari` (`id`);

--
-- Ограничения внешнего ключа таблицы `recomended`
--
ALTER TABLE `recomended`
  ADD CONSTRAINT `recomended_ibfk_1` FOREIGN KEY (`id_tovara`) REFERENCES `tovari` (`id`);

--
-- Ограничения внешнего ключа таблицы `limit`
--
ALTER TABLE `limit`
  ADD CONSTRAINT `limit_ibfk_1` FOREIGN KEY (`id_tovara`) REFERENCES `tovari` (`id`),
  ADD CONSTRAINT `limit_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id`);

--
-- Ограничения внешнего ключа таблицы `tovari`
--
ALTER TABLE `tovari`
  ADD CONSTRAINT `tovari_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`);

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_1` FOREIGN KEY (`id_gorod`) REFERENCES `gorod` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
