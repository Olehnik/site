-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2015 г., 23:37
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phpblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'HTML коддинг'),
(2, 'PHP мысли'),
(3, 'Photoshop');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(5) NOT NULL,
  `cat` int(1) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `view` int(7) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `mini_img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `cat`, `meta_d`, `meta_k`, `description`, `text`, `view`, `author`, `date`, `mini_img`, `title`) VALUES
(1, 3, 'Природа цвета', 'цвет, фотошоп', '<p>В смысловой цельности текста отражаются те связи и зависимости, которые имеются в самой действительности (общественные события, явления&nbsp;природы,человек, его внешний облик и&nbsp;внутренний мир, предметы неживой природы и&nbsp;т.&nbsp;д.).</p>\r\n', '<p>В смысловой цельности текста отражаются те связи и зависимости, которые имеются в самой действительности (общественные события, явления&nbsp;природы,человек, его внешний облик и&nbsp;внутренний мир, предметы неживой природы и&nbsp;т.&nbsp;д.).</p>\r\n          <p>Единство предмета речи&nbsp;&mdash; это тема высказывания. Тема&nbsp;&mdash; это&nbsp;<em>смысловое ядро текста, конденсированное и обобщённое содержание текста</em>.<img src="files/060515/colors/13.jpg" width="382" height="265" /></p>\r\n          <p>Понятие &laquo;содержание высказывания&raquo; связано с категорией информативности речи и присуще только тексту. Оно сообщает читателю индивидуально-авторское понимание отношений между явлениями, их значимости во всех сферах придают ему смысловую цельность.</p>\r\n          <p>В большом тексте ведущая тема распадается на ряд составляющих подтем; подтемы членятся на более дробные, на абзацы (микротемы).<img src="files/060515/colors/12.jpg" width="300" height="300" /></p>\r\n          <p>Завершённость высказывания связана со смысл<img src="files/060515/colors/11.jpg" width="300" height="300" />овой цельностью текста. Показателем законченности текста является возможность подобрать к нему&nbsp;заголовок, отражающий его содержание.</p>', 0, 'Никита Олехник', '2015-05-06', 'files/060515/colors/mini.jpg', 'Природа цвета в фотошопе'),
(2, 3, 'Растровая графика', 'растр, фотошоп', '    <p>Photoshop 10.0, датируемый апрелем 2007 года, имеет название Photoshop CS3.</p>', '  <p>Photoshop 8.0, датируемый октябрём 2003 года, имел название Photoshop CS, так как начал относиться к новой линейке продуктов компании&nbsp;<a href="https://ru.wikipedia.org/wiki/Adobe_Systems" title="Adobe Systems">Adobe Systems</a>&nbsp;&mdash; Creative Suite<a href="https://ru.wikipedia.org/wiki/Adobe_Photoshop#cite_note-11">[11]</a>.<img src="files/060515/colors/12.jpg" width="300" height="300" /></p>\r\n          <p>Photoshop 10.0, датируемый апрелем 2007 года, имеет название Photoshop CS3. Аббревиатура CS3 означает, что продукт интегрирован в третью версию пакета программ&nbsp;<a href="https://ru.wikipedia.org/wiki/Adobe_Creative_Suite" title="Adobe Creative Suite">Adobe Creative Suite</a>. В предыдущих продуктах &mdash; Photoshop CS и CS2, c целью отличия от прежних версий и укрепления принадлежности к новой линейке продуктов, был изменён символ программы: вместо изображения глаза, которое присутствовало в версиях с 3-й по 7-ю, в стилевом решении использовалось изображение&nbsp;<a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D0%BE" title="Перо">перьев</a>. В Photoshop CS3 в иконке приложения и экране-заставке используются буквы из названия продукта &laquo;Ps&raquo; на синем градиентном фоне. Список нововведений включает в себя новый интерфейс,&nbsp;увеличенную скорость работы<a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F:%D0%A1%D1%81%D1%8B%D0%BB%D0%BA%D0%B8_%D0%BD%D0%B0_%D0%B8%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D0%BA%D0%B8" title="Википедия:Ссылки на источники">[<em>источник&nbsp;не&nbsp;указан&nbsp;207&nbsp;дней</em>]</a>, новый&nbsp;<a href="https://ru.wikipedia.org/wiki/Adobe_Bridge" title="Adobe Bridge">Adobe Bridge</a>, новые фильтры и инструменты, а также приложение&nbsp;<a href="https://ru.wikipedia.org/w/index.php?title=Adobe_Device_Central&amp;action=edit&amp;redlink=1" title="Adobe Device Central (страница отсутствует)">Adobe Device Central</a><a href="https://en.wikipedia.org/wiki/Adobe_Device_Central" title="en:Adobe Device Central"><span title="Версия статьи &laquo;Adobe Device Central&raquo; на английском языке">[en]</span></a>, позволяющее осуществлять предварительный просмотр работы в шаблонах популярных устройств, например мобильных телефонов.</p>          \r\n          <p>&nbsp;</p>', 0, 'Никита Олехник', '2015-05-07', 'files/060515/colors/mini.jpg', 'Растровая графика'),
(3, 2, 'Маскирование ссылки', 'маска', '<p> Wget же, например, поддерживает загрузку URL, указанных в файле. Таким образом можно составить список файлов, а в любое удобное время скачать их с помощью wget. Интерфейс командной строки позволяет управлять wget из других программ и&nbsp;скриптов, что используется при автоматизации загрузки файлов (регулярные обновления.</p>', '<p>Wget является неинтерактивной программой. Это означает, что после её запуска пользователь может повлиять на её работу только с помощью средств управления процессами операционной системы. Как правило, для этого используются сочетания клавиш Ctrl+C при необходимости прерывания работы программы и Ctrl+Z для помещения текущего задания в фон. Современные&nbsp;web-браузеры как правило имеют функцию закачки файлов, однако так как браузер рассчитан на интерактивный режим работы, то скачивание большого количества файлов вручную может быть утомительным. Браузеры, как правило, не предоставляют средств для автоматизации подобных задач.</p>\r\n        <p> Wget же, например, поддерживает загрузку URL, указанных в файле. Таким образом можно составить список файлов, а в любое удобное время скачать их с помощью wget. Интерфейс командной строки позволяет управлять wget из других программ и&nbsp;скриптов, что используется при автоматизации загрузки файлов (регулярные обновления, мониторинг доступности сер<img src="files/060515/colors/13.jpg" width="400" height="273" />вера и&nbsp;т.&nbsp;д.).</p>\r\n          <p>Wget позволяет загружать любые файлы во всеимирной паутине(в том числе и HTML-страницы) по протоколам http и https, а также файлы и списки директорий по протоколу ftp.</p>\r\n          <p>Файлы можно скачивать рекурсивно по ссылкам в HTML страницах, как с одного сайта с определённой глубиной следования по ссылкам, так и с нескольких. Помимо этого, при загрузке по ftp файлы можно скачивать &laquo;по маске&raquo; имени (то есть можно задавать с помощью &laquo;*&raquo; группу файлов).</p>\r\n          <p><img src="files/060515/colors/11.jpg" width="300" height="300" /></p>\r\n          <p>Wget поддерживает докачку файла в случае обрыва соединения.</p>', 0, 'Никита Олехник', '2015-05-07', 'files/060515/colors/mini.jpg', 'Маскирование ссылки'),
(4, 2, 'Перевод сайтов', 'сайт, перевод', '<p>Всемирная паутина &ndash; глобальный источник информации, здесь можно найти все что угодно. Однако как бы ни была полезна найденная информация, если сайт иноязычный, без переводчика не обойтись. Для таких случаев простые переводчики текстов мало подойдут, поскольку объем информации на сайте может быть значителен, и перевод всех текстов займет немало времени. </p>', '<p align="justify">&nbsp;Всемирная паутина &ndash; глобальный источник информации, здесь можно найти все что угодно. Однако как бы ни была полезна найденная информация, если сайт иноязычный, без переводчика не обойтись. Для таких случаев простые переводчики текстов мало подойдут, поскольку объем информации на сайте может быть значителен, и перевод всех текстов займет немало времени. </p>\r\n          <p align="justify">Для перевода онлайн информации существуют сервисы перевода сайтов, которые специально ориентированы на перевод страниц в интернете. Такие онлайн переводчики сайтов помогут без труда и почти мгновенно перевести нужную страницу, не прибегая к дорогостоящим услугам переводчиков или поиска необходимых слов в словаре, тем более, что такого рода переводчики сайтов онлайн, как правило, бесплатны.</p>\r\n          <p align="justify">&nbsp;&nbsp; Если взглянуть на все существующие бесплатные онлайн переводчики текстов и сайтов, можно выделить двух лидеров: сервисы перевода сайтов Google Translate и Promt. Перевод сайта онлайн от Google Translate и Promt отличается высоким качеством и учетом всех нюансов, коими обладает текст в сети интернет, в том числе соответствие специфической лексики, употребляемой на сайтах.</p>\r\n          <p align="justify"><img src="files/060515/colors/12.jpg" width="300" height="300" /></p>\r\n          <p align="justify">&nbsp;&nbsp; С бесплатными онлайн переводчиками сайтов Google Translate и Promt Вы сможете узнавать об окружающем Вас мире намного больше, находить более полную информацию и общаться с людьми из других стран!</p>          \r\n          <p>&nbsp;</p>', 0, 'Никита Олехник', '2015-05-07', 'files/060515/colors/mini.jpg', 'Перевод сайтов'),
(5, 1, 'Как поменять цвет полосы прокрутки', 'цвет, полоса', '<p><strong>Красный цвет</strong>&nbsp;прежде всего ассоциируется с кровью и огнем. Его символические значения очень многообразны и, порой, противоречивы. Красное символизирует радость, красоту, любовь и полноту жизни, а с другой стороны &mdash; вражду, месть, войну. Красный цвет издревле связывается с агрессивностью и сексуальными желаниями.</p>', '<p><strong>Красный цвет</strong>&nbsp;прежде всего ассоциируется с кровью и огнем. Его символические значения очень многообразны и, порой, противоречивы. Красное символизирует радость, красоту, любовь и полноту жизни, а с другой стороны &mdash; вражду, месть, войну. Красный цвет издревле связывается с агрессивностью и сексуальными желаниями.<br />\r\n          <br />\r\n          Красный является основным геральдическим цветом. На знамени он символизирует бунт, революцию, борьбу. Интересно, что у многих племен Африки, Америки и Австралии воины, готовясь к схватке, раскрашивали тело и лицо в красный цвет. Карфагенцы и спартанцы носили во время войны красную одежду. В древнем Китае повстанцы называли себя &laquo;красные воины&raquo;, &laquo;красные копья&raquo;, &laquo;красные брови&raquo;..</p>\r\n          <p><img src="files/060515/colors/11.jpg" width="300" height="300" /><br />\r\n            <br />\r\n            Красное обозначает также власть, величие. В Византии только императрица имела право носить красные сапожки. Император подписывался пурпурными чернилами, восседал на пурпурном троне. У многих народов красный цвет символизирует юг, пламя и жару.<br />\r\n            <br />\r\n            <strong>Белый цвет</strong>&nbsp;символизирует чистоту, незапятнанность, невинность, добродетель, радость. Он ассоциируется с дневным светом, а также с производящей силой, которая воплощена в молоке и яйце. С белизной связано представление о явном, общепринятом, законным, истинном.<br />\r\n            <br />\r\n          В Древнем Риме весталки носили белые платья и белые вуали. Еще с античности белый цвет имел значение отрешенности от мирского, устремления к духовной простоте. В христианской традиции белое обозначает родство с божественным светом. В белом изображаются ангелы, святые и праведники. У некоторых народов белую одежду носили цари и жрецы, что символизировало торжественность и величие.</p>', 0, 'Никита Олехник', '2015-05-07', 'files/060515/colors/mini.jpg', 'Как поменять цвет полосы прокрутки'),
(6, 1, 'Маскируем тэги', 'тэг', '<p>Специальные программы просмотра HTML-документов, которые часто называют браузерами, служат для интерпретации файлов, размеченных по правилам языка HTML, форматирования их в виде Web-страниц и отображении их содержимого на экране компьютера пользователя. Существует большое количество программ-браузеров, разработанных различными компаниями, однако, на сегодняшний день из всего разнообразия программ явно выделяются две программы-лидера &mdash; Netscape Communicator и Microsoft Internet Explorer.</p>', '<p>Специальные программы просмотра HTML-документов, которые часто называют браузерами, служат для интерпретации файлов, размеченных по правилам языка HTML, форматирования их в виде Web-страниц и отображении их содержимого на экране компьютера пользователя. Существует большое количество программ-браузеров, разработанных различными компаниями, однако, на сегодняшний день из всего разнообразия программ явно выделяются две программы-лидера &mdash; Netscape Communicator и Microsoft Internet Explorer.</p>\r\n          <p><img src="files/060515/colors/12.jpg" width="300" height="300" /></p>\r\n          <p>Программа Netscape Navigator разработана компанией Netscape Communications Corporation. Как и у многих программных продуктов, существует ряд версий этой программы. Последней версией программы Netscape Communicator на момент написания книги являлась версия 4.7. Программа Internet Explorer разработана компанией Microsoft. Последняя версия этой программы &mdash; 5.0.</p>\r\n          <p>Другие браузеры значительно отстают по популярности. Несколько лет назад браузер компании Netscape занимал ведущее место среди браузеров, более двух третей пользователей применяли именно эту программу просмотра. Выпустив свой браузер, компания Microsoft приложила огромные усилия для завоевания этой части рынка. В средствах массовой информации часто</p>\r\n          <p>встречались сообщения о войне между браузерами за пользователей. Сейчас эти два браузера сравнимы по популярности. Росту популярности браузера Microsoft способствует включение браузера в состав операционной системы Windows 98, однако, в конечном счете, выбор браузера остается за пользователем.</p>\r\n          <p>Современные браузеры обладают широкими возможностями, но основным для них является интерпретация документов, размеченных по правилам HTML. Описанию этих правил, в основном, и посвящена данная книга. В первой части мы рассмотрим лишь основополагающие принципы построения HTML-документов.</p>\r\n          <p>Чтобы понять, что собой представляет язык разметки, вспомним старые добрые времена, когда многие работали с текстовыми редакторами типа WordStar. В них для выделения какой-либо фразы, например, полужирным шрифтом, в ее начале и в конце ставились специальные отметки (/<span lang="en-us" xml:lang="en-us">B</span>&nbsp;и /<span lang="en-us" xml:lang="en-us">b</span>).</p>', 0, 'Никита Олехник', '2015-05-07', 'files/060515/colors/mini.jpg', 'Маскируем тэги');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `title`, `meta_d`, `meta_k`, `text`, `page`) VALUES
(1, 'Блог странного веб-дизайнера', 'Блог о странном веб-дизайнере', 'PHP,HTML,CSS', '<p>Меня зовут Никита.Здесь я буду делать уроки.</p>', 'index');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
