-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 26 2022 р., 13:48
-- Версія сервера: 10.4.22-MariaDB
-- Версія PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `elearning`
--

-- --------------------------------------------------------

--
-- Структура таблиці `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `course_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacher_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `subject_id`, `teacher_id`, `student_id`) VALUES
(10, '2022-В1', 'Англійська мова', '8', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `cys` varchar(100) CHARACTER SET utf8 NOT NULL,
  `department` varchar(100) CHARACTER SET utf8 NOT NULL,
  `major` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `course`
--

INSERT INTO `course` (`course_id`, `cys`, `department`, `major`) VALUES
(9, '2022-В1', 'Факультет іноземних мов', 'None');

-- --------------------------------------------------------

--
-- Структура таблиці `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `incharge` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `department` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `department`
--

INSERT INTO `department` (`dep_id`, `incharge`, `title`, `department`) VALUES
(7, 'Богдан Гута', 'Іноземні мови', 'Факультет іноземних мов');

-- --------------------------------------------------------

--
-- Структура таблиці `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) CHARACTER SET utf8 NOT NULL,
  `fdatein` varchar(200) CHARACTER SET utf8 NOT NULL,
  `fdesc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`) VALUES
(32, 'uploads/4373_File_Англійська_за_4_тижні.pdf', '2022-11-26 14:41:39', 'Швидко вивчити', 8, 10, 'Англійська за 4 тижні'),
(33, 'uploads/8911_File_Вивчаємо_англійську..pdf', '2022-11-26 14:42:17', 'текст', 8, 10, 'Англійська для початківців');

-- --------------------------------------------------------

--
-- Структура таблиці `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cys` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `location` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `middle_name`, `cys`, `subject_id`, `teacher_id`, `username`, `password`, `location`) VALUES
(17, 'Володимир', 'Довбань', 'Іванович', '', '', 0, 'Volodia', '123', 'uploads/letra-n-md.png'),
(19, 'Степан', 'Абдулаєв', 'Миколайович', '', '', 0, 'Stepan', '123', 'uploads/images (3).jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `category`) VALUES
(9, '2', 'Німецька мова', '-'),
(8, '1', 'Англійська мова', '-');

-- --------------------------------------------------------

--
-- Структура таблиці `sws`
--

CREATE TABLE `sws` (
  `sws_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `cys` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subject_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `sws`
--

INSERT INTO `sws` (`sws_id`, `student_id`, `teacher_id`, `cys`, `subject_id`, `class_id`) VALUES
(12, 17, 8, '2022-В1', 'Англійська мова', 10),
(14, 19, 8, '2022-В1', 'Англійська мова', 10);

-- --------------------------------------------------------

--
-- Структура таблиці `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(7, '2020-2021'),
(6, '2021-2022'),
(8, '2019-2020');

-- --------------------------------------------------------

--
-- Структура таблиці `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(100) CHARACTER SET utf8 NOT NULL,
  `department` varchar(100) CHARACTER SET utf8 NOT NULL,
  `student_id` int(11) NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `middlename`, `department`, `student_id`, `location`) VALUES
(8, 'Bohdan', '123', 'Богдан', 'Гута', 'Степанович', 'Іноземні мови', 0, 'uploads/ava.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `teacher_student`
--

CREATE TABLE `teacher_student` (
  `teacher_student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `teacher_student`
--

INSERT INTO `teacher_student` (`teacher_student_id`, `teacher_id`, `student_id`) VALUES
(13, 8, 19),
(7, 2, 16),
(12, 8, 17);

-- --------------------------------------------------------

--
-- Структура таблиці `teacher_suject`
--

CREATE TABLE `teacher_suject` (
  `teacher_subject_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `teacher_suject`
--

INSERT INTO `teacher_suject` (`teacher_subject_id`, `subject_id`, `teacher_id`) VALUES
(12, 5, 2),
(11, 7, 2),
(6, 6, 1),
(13, 8, 8),
(14, 9, 8),
(15, 0, 8);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(11, 'admin', '123', 'Богдан', 'Гута');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Індекси таблиці `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Індекси таблиці `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Індекси таблиці `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Індекси таблиці `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Індекси таблиці `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Індекси таблиці `sws`
--
ALTER TABLE `sws`
  ADD PRIMARY KEY (`sws_id`);

--
-- Індекси таблиці `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Індекси таблиці `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Індекси таблиці `teacher_student`
--
ALTER TABLE `teacher_student`
  ADD PRIMARY KEY (`teacher_student_id`);

--
-- Індекси таблиці `teacher_suject`
--
ALTER TABLE `teacher_suject`
  ADD PRIMARY KEY (`teacher_subject_id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблиці `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблиці `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `sws`
--
ALTER TABLE `sws`
  MODIFY `sws_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблиці `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `teacher_student`
--
ALTER TABLE `teacher_student`
  MODIFY `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблиці `teacher_suject`
--
ALTER TABLE `teacher_suject`
  MODIFY `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
