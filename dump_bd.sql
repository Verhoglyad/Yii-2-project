-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2018 г., 15:05
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `design`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `position`, `text`, `category`) VALUES
(4, 'Maria Peterson', 'INTERIOR DESIGN DIRECTOR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'designer'),
(5, 'Mark Twist', 'ARCHITECTURE DIRECTOR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'designer'),
(6, 'Mark Twist', 'ARCHITECTURE DIRECTOR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'director'),
(7, 'Mark Twist', 'ARCHITECTURE DIRECTOR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'director'),
(9, '1223213', 'designer', 'designerdesignerdesignerdesignerdesignerdesignerdesignerdesignerdesignerdesigner', 'ванная');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`) VALUES
(2),
(3),
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- Структура таблицы `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_product`
--

INSERT INTO `category_product` (`id`, `parent_id`, `name`, `description`) VALUES
(1, 0, 'Кухня', 'Диваны, кровати...'),
(2, 0, 'Гостинная', 'Диваны, кровати...'),
(3, 1, 'Стулья', 'Диваны, кровати...'),
(4, 1, 'Столы', 'Диваны, кровати...'),
(5, 0, 'Спальня', 'Диваны, кровати...'),
(6, 5, 'что-то', 'Диваны, кровати...'),
(14, 2, 'Стулья', 'Диваны, кровати...'),
(15, 2, 'Столы', 'Диваны, кровати...'),
(16, 0, 'Еще одна', 'Диваны, кровати...'),
(19, 16, 'подкатегория №1', 'Диваны, кровати...'),
(20, 16, 'подкатегория №2', 'Диваны, кровати...');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1522414585),
('m140622_111540_create_image_table', 1522414588),
('m140622_111545_add_name_to_image_table', 1522414588);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `client` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `category_id`, `title`, `text`, `client`, `review`, `date`) VALUES
(3, 'спальня', 'Bedroom 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'John', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n', 'Вчера'),
(4, 'кухня', 'Кухня такая то 2', 'Очень классная', 'Вася', '', '20 января 2017'),
(6, 'спальня', 'Bedroom 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'John', '', 'Вчера'),
(7, 'гостиная', '123', 'gfdcvb cvb edafd dsdv ', 'asd ', '88888 888888888 8888888 888888888 888888888', 'asd '),
(10, 'экстерьер', 'Proba', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem facilis iste nihil repudiandae! Beatae consequatur culpa, dicta earum eveniet officia praesentium provident recusandae reiciendis repellendus repudiandae sit temporibus voluptate!', 'Уася', 'lorem', 'завтра'),
(11, 'спальня', '5555', '55555', '123', '', '123'),
(12, 'ванная', 'dsfsdfsdf', 'sdfsdfsdfsdfdsf', '123', '', '123'),
(13, 'гостиная', '123', '123', '123', '', '123'),
(15, 'спальня', 'sksksks', 'Lorem ipsum dolor sit amet, quo ei altera qualisque gubergren. Ad mel iuvaret percipit singulis, eam id vitae euripidis, laudem aliquam nec cu. Wisi singulis pri cu, vis equidem intellegat expetendis et, ut sea ipsum luptatum lucilius. Altera fierent salutandi has ei, stet option perfecto ei cum. Appareat intellegebat at nam, saperet laboramus referrentur te est, lobortis accommodare ea eam.\r\nEt ullum ridens aliquip his, exerci feugait est cu. An ius dolorum accusamus efficiantur, simul nihil ignota eam at, suas etiam tritani et vis. Duo dicant perfecto eu. Nam malis animal et. Mel placerat patrioque sententiae ea, duo ridens oblique laoreet eu, graeco voluptua dissentiunt nec ea.\r\n\r\nVix velit oportere eu, soleat admodum ad pri. Ut eum quem tation, ne his tantas ubique. Harum deserunt scriptorem eam cu, per viris oratio ad. Duo deleniti mediocrem ad, id nam zril eleifend assentior. Cum et ullum dicam tempor. Possim viderer no qui.\r\n\r\nNe sit dicta nonumes. Per saepe soleat labores ei. Corpora expetendis te sit, cu omnium quaestio eos, eam eu euismod percipitur. Id vis wisi moderatius intellegam. Ne illud facete consulatu his, nec habemus comprehensam te, sapientem patrioque honestatis an mei.\r\n\r\nNominavi senserit iudicabit ne sea, cu falli simul causae vix, qui at sonet verterem interpretaris. Mea in melius numquam, cu sed mundi delenit. Cu sea vidit atqui doming, mei quem recusabo volutpat ex, viderer civibus qui an. His ludus nominavi eu, discere eripuit qui at, viderer necessitatibus nam ea. Usu ea idque meliore, omnis oratio molestiae his ad. Sit ut erat discere democritum. Nam te legendos deseruisse definitionem.', 'Зипуля', 'Круто', '12 02 1999');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `hit` enum('0','1') NOT NULL,
  `sale` enum('0','1') NOT NULL,
  `main` enum('0','1') NOT NULL,
  `main_mid` enum('0','1') NOT NULL,
  `discount` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `old_price`, `tags`, `hit`, `sale`, `main`, `main_mid`, `discount`, `material`, `style`, `brand`, `dimension`) VALUES
(1, 6, 'Sofa Modern', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 1500, 487, 'sofa, blue, red, orange, living room, еще один тэг', '0', '1', '1', '0', 'Скидка 20%', 'хороший', 'modern', 'ololo', '185cm x 90cm x 70cm'),
(2, 4, 'Диван классный', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 455, 228, '123 123 123 123', '1', '0', '0', '1', '', 'Хороший', 'Стильный', 'asd', '123х69х890'),
(3, 3, 'Диван', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 250, 487, '123123', '1', '1', '0', '0', 'Скидка 20%', '0', '123', 'asd', '123'),
(4, 15, 'cccccc', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 212, 487, '123', '0', '1', '0', '0', '', '0', '123', 'asd', '123'),
(6, 19, 'fdgfdg dfg dg ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 1488, 487, '123', '0', '1', '0', '0', '', '0', '123', 'asd', '123'),
(7, 14, 'смчсвыа ыва ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 333, 487, 'гостиная, диван, красный, модерн', '0', '1', '0', '0', '', '0', '', 'asd', ''),
(8, 15, 'нннек е ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 876, 228, '123', '0', '0', '0', '0', '', '0', '123', '123', '123'),
(9, 14, 'нннек е  cccc', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 876, 228, '123', '0', '0', '0', '0', '', '0', '123', '', '123'),
(10, 14, 'нннек е ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 876, 228, '123123', '0', '1', '0', '0', '123', '0', '123', '123', '123'),
(11, 3, 'Стул', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 876, 228, '123', '0', '0', '0', '0', 'Скидка 15%', '0', '123', 'jjjj', '123'),
(12, 14, 'нннек е ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 99, 228, '', '1', '0', '0', '0', '', '0', '', '', ''),
(13, 15, 'нннек е ', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 233, 228, '', '0', '1', '0', '0', '', '0', '', '', ''),
(14, 14, 'нннек е 22222', 'Duis eget leo venenatis, accumsan erat nec, tempor odio. Nulla facilisi. Curabitur eu accumsan turpis. Ut sollicitudin adipiscing enim, sed gravida elit imperdiet nec. Praesent sed suscipit tortor, sit amet sagittis eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce\r\n\r\npharetra aliquam ante sed aliquet. Aenean bibendum sem et purus cursus pharetra. Morbi turpis quam, adipiscing in posuere quis, bibendum sit amet elit. Sed convallis fringilla porta. In aliquet, tortor non laoreet aliquam, magna elit.', 342, 228, '123', '1', '0', '0', '0', '123', '0', '123', '', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
