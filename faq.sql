-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2017 г., 10:23
-- Версия сервера: 5.7.13
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `qa6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `login` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `login`, `surname`, `name`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$s/l9Cba2kTu385dW1F0zne4u7Q1.u8GVsUQDgAN8C2.yW5DT/5P0e', 'superAdmin'),
(3, 'admin2', 'admin2', 'admin2', '$2y$10$FyPGp.sSuNbkR472ikEbSOCBeVttwRGq6jsJY8wacp4BTt2eUVNa6', 'admin'),
(5, 'admin3', 'admin3', 'admin3', '$2y$10$jIHT4wHod/3UTehvhxRC6OGRR38AsMmVVZ8JU0O0otynYNBTWluCC', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `forbiddens`
--

CREATE TABLE IF NOT EXISTS `forbiddens` (
  `id` int(10) unsigned NOT NULL,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `forbiddens`
--

INSERT INTO `forbiddens` (`id`, `word`) VALUES
(8, 'медведев'),
(12, 'москва'),
(7, 'порошенко'),
(6, 'путин');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_01_01_100923_create_topics_table', 1),
(2, '2017_01_02_100924_create_questions_table', 1),
(3, '2017_01_03_100925_create_admins_table', 1),
(4, '2017_01_04_100926_create_fobiddens_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `topic_id`, `status`, `author_name`, `text`, `answer`) VALUES
(9, '2017-03-05', '2017-03-07', 14, 0, 'Вячеслав', 'Какое небесное тело в астрологии «отвечает» за понедельник?', 'Луна'),
(10, '2017-03-05', '2017-03-06', 14, 1, 'Вячеслав', 'Какой из этих знаков зодиака приходится на лето?', 'Рак'),
(11, '2017-03-05', '2017-03-06', 14, 1, 'Вячеслав', 'Как называется яркая звезда - альфа Скорпиона?', 'Антарес'),
(12, '2017-03-05', '2017-03-06', 15, 1, 'Вячеслав', 'В каком южноамериканском городе стоит 38-метровая статуя Иисуса Христа?', 'Рио де жанейро'),
(13, '2017-03-05', '2017-03-05', 15, 1, 'Вячеслав', 'В каком городе находилось одно из семи чудес света Сады Семирамиды?', 'Вавилон'),
(14, '2017-03-05', '2017-03-05', 15, 1, 'Вячеслав', 'Какой город являлся целью всех крестовых походов?', ' 	Иерусалим'),
(15, '2017-03-05', '2017-03-05', 16, 1, 'Вячеслав', 'Мехом какого животного отделана шапка Мономаха?', ' 	Соболь'),
(16, '2017-03-05', '2017-03-05', 16, 1, 'Вячеслав', 'Как называется русская охотничья порода собак?', ' 	Борзая'),
(17, '2017-03-05', '2017-03-05', 16, 1, 'Вячеслав', 'Как звали любимую лошадь Петра I ?', 'Лизетта'),
(19, '2017-03-05', '2017-03-07', 14, 0, 'Вячеслав', 'Кого в русских сказках называют Топтыгин?', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `title`) VALUES
(14, 'Астрология'),
(15, 'География'),
(16, 'Животные');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_login_unique` (`login`);

--
-- Индексы таблицы `forbiddens`
--
ALTER TABLE `forbiddens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forbiddens_word_unique` (`word`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_topic_id_foreign` (`topic_id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `forbiddens`
--
ALTER TABLE `forbiddens`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
