<?php

use yii\db\Migration;

class m160824_112031_add_translations extends Migration
{
    public function up()
    {        $this->execute("
        INSERT INTO `source_message` (`id`, `category`, `message`) VALUES
(1,	'app',	'Home of little joys'),
(2,	'app',	'-- select brood --'),
(3,	'app',	'ID'),
(4,	'app',	'Name'),
(5,	'app',	'Description'),
(6,	'app',	'Date Create'),
(7,	'app',	'Date Update'),
(8,	'app',	'Common Status ID'),
(9,	'app',	'Date of birth'),
(10,	'app',	'Breed ID'),
(11,	'app',	'Url'),
(12,	'app',	'Local'),
(13,	'app',	'Default'),
(14,	'app',	'Source Message'),
(15,	'app',	'Language'),
(16,	'app',	'Translation'),
(17,	'app',	'Link'),
(18,	'app',	'Brood ID'),
(19,	'app',	'Pet Status ID'),
(20,	'app',	'Titles'),
(21,	'app',	'Gender'),
(22,	'app',	'Size'),
(23,	'app',	'Mother ID'),
(24,	'app',	'Is our pet'),
(25,	'app',	'Color'),
(26,	'app',	'Father name'),
(27,	'app',	'Father link'),
(28,	'app',	'Source Url'),
(29,	'app',	'Alt'),
(30,	'app',	'Pet ID'),
(31,	'app',	'Status'),
(32,	'app',	'Category'),
(33,	'app',	'Message'),
(34,	'app',	'Breeds'),
(35,	'app',	'Broods'),
(36,	'app',	'Pets'),
(37,	'app',	'Messages'),
(38,	'app',	'Gallery'),
(39,	'app',	'Our friends'),
(40,	'app',	'Create'),
(41,	'app',	'Update'),
(42,	'app',	'Search'),
(43,	'app',	'Reset'),
(44,	'app',	'Create Breed'),
(45,	'app',	'Update {modelClass}: '),
(46,	'app',	'Delete'),
(47,	'app',	'Are you sure you want to delete this item?'),
(48,	'app',	'Enter birth date ...'),
(49,	'app',	'Create Brood'),
(50,	'app',	'Create Lang'),
(51,	'app',	'Langs'),
(52,	'app',	'Logout'),
(53,	'app',	'Menu'),
(54,	'app',	'Our dogs'),
(55,	'app',	'Puppies'),
(56,	'app',	'Contacts'),
(57,	'app',	'Create Message'),
(58,	'app',	'Create Our Friend'),
(59,	'app',	'Our Friends'),
(60,	'app',	'Male'),
(61,	'app',	'Female'),
(62,	'app',	'-- select breed --'),
(63,	'app',	'Create Pet'),
(64,	'app',	'Create Pet Status'),
(65,	'app',	'Pet Statuses'),
(66,	'app',	'Lesya Usatyuk'),
(67,	'app',	'Owner & Breeder'),
(68,	'app',	'@@Nursery «@@'),
(69,	'app',	'Our location'),
(70,	'app',	'Vinnytsia'),
(71,	'app',	'Ukraine'),
(72,	'app',	'How to contact'),
(73,	'app',	'Mon - Fri'),
(74,	'app',	'Error'),
(75,	'app',	'The above error occurred while the Web server was processing your request.'),
(76,	'app',	'Please contact us if you think this is a server error. Thank you.'),
(77,	'app',	'We are happy that the owners are great dogs. We value them for their devotion, love and trust in us. We hope that you share our love for these cute babies! And let each day spent with the smallest dog in the world fills your life enthusiasm, happiness and positive!'),
(78,	'app',	'view all'),
(79,	'app',	'Nursery «Home of little joys»'),
(80,	'app',	'Login'),
(81,	'app',	'Official sites canine federations and clubs'),
(82,	'app',	'Bloodline'),
(83,	'app',	'Create Slide'),
(84,	'app',	'Slides'),
(85,	'app',	'message'),
(86,	'app',	'to lang:'),
(87,	'app',	'Date of birth: '),
(88,	'app',	'Gender: '),
(89,	'app',	'Size: '),
(90,	'app',	'Color: '),
(91,	'app',	'Titles: '),
(92,	'app',	'Mother: '),
(93,	'app',	'Father: ');
        ");
        
        $this->execute("
            INSERT INTO `message` (`id`, `language`, `translation`) VALUES
            (1,	'en',	NULL),
            (1,	'ru',	NULL),
            (2,	'en',	NULL),
            (2,	'ru',	'-- Выбирете помет --'),
            (3,	'en',	NULL),
            (3,	'ru',	NULL),
            (4,	'en',	NULL),
            (4,	'ru',	'Имя'),
            (5,	'en',	NULL),
            (5,	'ru',	'Описание'),
            (6,	'en',	NULL),
            (6,	'ru',	'Дата создания'),
            (7,	'en',	NULL),
            (7,	'ru',	'Дата обновления'),
            (8,	'en',	NULL),
            (8,	'ru',	'Общий статус'),
            (9,	'en',	NULL),
            (9,	'ru',	'Дата рождения'),
            (10,	'en',	NULL),
            (10,	'ru',	'Порода'),
            (11,	'en',	NULL),
            (11,	'ru',	'Ссылка'),
            (12,	'en',	NULL),
            (12,	'ru',	'Локаль'),
            (13,	'en',	NULL),
            (13,	'ru',	'По-умолчанию'),
            (14,	'en',	NULL),
            (14,	'ru',	'Исходное сообщение'),
            (15,	'en',	NULL),
            (15,	'ru',	'Язык'),
            (16,	'en',	NULL),
            (16,	'ru',	'Перевод'),
            (17,	'en',	NULL),
            (17,	'ru',	'Ссылка'),
            (18,	'en',	NULL),
            (18,	'ru',	'Помёт'),
            (19,	'en',	NULL),
            (19,	'ru',	'Статус щенка'),
            (20,	'en',	NULL),
            (20,	'ru',	'Титулы'),
            (21,	'en',	NULL),
            (21,	'ru',	'Пол'),
            (22,	'en',	NULL),
            (22,	'ru',	'Размер'),
            (23,	'en',	NULL),
            (23,	'ru',	'Мать'),
            (24,	'en',	NULL),
            (24,	'ru',	'Наш щенок'),
            (25,	'en',	NULL),
            (25,	'ru',	'Цвет'),
            (26,	'en',	NULL),
            (26,	'ru',	'Имя отца'),
            (27,	'en',	NULL),
            (27,	'ru',	'Ссылка на отца'),
            (28,	'en',	NULL),
            (28,	'ru',	'Исходная ссылка'),
            (29,	'en',	NULL),
            (29,	'ru',	'Альтернативный текст'),
            (30,	'en',	NULL),
            (30,	'ru',	'Щенок'),
            (31,	'en',	NULL),
            (31,	'ru',	'Статус'),
            (32,	'en',	NULL),
            (32,	'ru',	'Категория'),
            (33,	'en',	NULL),
            (33,	'ru',	'Сообщение'),
            (34,	'en',	NULL),
            (34,	'ru',	'Породы'),
            (35,	'en',	NULL),
            (35,	'ru',	'Помёты'),
            (36,	'en',	NULL),
            (36,	'ru',	'Щенки'),
            (37,	'en',	NULL),
            (37,	'ru',	'Сообщения'),
            (38,	'en',	NULL),
            (38,	'ru',	'Галерея'),
            (39,	'en',	NULL),
            (39,	'ru',	'Наши друзья'),
            (40,	'en',	NULL),
            (40,	'ru',	'Добавить'),
            (41,	'en',	NULL),
            (41,	'ru',	'Обновить'),
            (42,	'en',	NULL),
            (42,	'ru',	'Поиск'),
            (43,	'en',	NULL),
            (43,	'ru',	'Сбросить'),
            (44,	'en',	NULL),
            (44,	'ru',	'Добавить породу'),
            (45,	'en',	NULL),
            (45,	'ru',	'Обновить {modelClass}: '),
            (46,	'en',	NULL),
            (46,	'ru',	'Удалить'),
            (47,	'en',	NULL),
            (47,	'ru',	'Удалить?'),
            (48,	'en',	NULL),
            (48,	'ru',	'Введите дату рождения...'),
            (49,	'en',	NULL),
            (49,	'ru',	'Добавить помёт'),
            (50,	'en',	NULL),
            (50,	'ru',	'Добавить язык'),
            (51,	'en',	NULL),
            (51,	'ru',	'Языки'),
            (52,	'en',	NULL),
            (52,	'ru',	'Выход'),
            (53,	'en',	NULL),
            (53,	'ru',	'Меню'),
            (54,	'en',	NULL),
            (54,	'ru',	'Наши собаки'),
            (55,	'en',	NULL),
            (55,	'ru',	'Щенки'),
            (56,	'en',	NULL),
            (56,	'ru',	'Контакты'),
            (57,	'en',	NULL),
            (57,	'ru',	'Добавить сообщение'),
            (58,	'en',	NULL),
            (58,	'ru',	'Добавить нашего друга'),
            (59,	'en',	NULL),
            (59,	'ru',	'Наши друзья'),
            (60,	'en',	NULL),
            (60,	'ru',	'Кобель'),
            (61,	'en',	NULL),
            (61,	'ru',	'Сука'),
            (62,	'en',	NULL),
            (62,	'ru',	'-- Выбирете породу --'),
            (63,	'en',	NULL),
            (63,	'ru',	'Добавить щенка'),
            (64,	'en',	NULL),
            (64,	'ru',	'Добавить статус щенка'),
            (65,	'en',	NULL),
            (65,	'ru',	'Статусы щенков'),
            (66,	'en',	NULL),
            (66,	'ru',	'Леся Усатюк'),
            (67,	'en',	NULL),
            (67,	'ru',	'Владелец & Заводчик'),
            (68,	'en',	NULL),
            (68,	'ru',	NULL),
            (69,	'en',	NULL),
            (69,	'ru',	'Где мы?'),
            (70,	'en',	NULL),
            (70,	'ru',	'Винница'),
            (71,	'en',	NULL),
            (71,	'ru',	'Украина'),
            (72,	'en',	NULL),
            (72,	'ru',	'Как связаться?'),
            (73,	'en',	NULL),
            (73,	'ru',	'Пн - Пт'),
            (74,	'en',	NULL),
            (74,	'ru',	'Ошибка'),
            (75,	'en',	NULL),
            (75,	'ru',	'Произошла ошибка во время обработки вашего запроса веб-сервером.'),
            (76,	'en',	NULL),
            (76,	'ru',	'Пожалуйста, свяжитесь с нами, если вы думаете, что это ошибка сервера. Спасибо.'),
            (77,	'en',	NULL),
            (77,	'ru',	'Мы счастливы, что являемся владельцами великолепных собак. Мы ценим их за преданность, любовь и доверие к нам. Надеемся, что Вы разделите с нами любовь к этим милым малышам! И пусть каждый день, проведённый с самой маленькой собакой в мире наполняет Вашу жизнь задором, счастьем и позитивом!'),
            (78,	'en',	NULL),
            (78,	'ru',	'Посмотреть всех'),
            (79,	'en',	NULL),
            (79,	'ru',	'Питомник «Home of little joys»'),
            (80,	'en',	NULL),
            (80,	'ru',	'Войти'),
            (81,	'en',	NULL),
            (81,	'ru',	'Официальные сайты кинологических федераций и клубов'),
            (82,	'en',	NULL),
            (82,	'ru',	'Родословная'),
            (83,	'en',	NULL),
            (83,	'ru',	'Добавить слайд'),
            (84,	'en',	NULL),
            (84,	'ru',	'Слайды'),
            (85,	'en',	NULL),
            (85,	'ru',	'сообщение'),
            (86,	'en',	NULL),
            (86,	'ru',	'на язык: '),
            (87,	'en',	NULL),
            (87,	'ru',	'Дата рождения: '),
            (88,	'en',	NULL),
            (88,	'ru',	'Пол: '),
            (89,	'en',	NULL),
            (89,	'ru',	'Размер: '),
            (90,	'en',	NULL),
            (90,	'ru',	'Цвет: '),
            (91,	'en',	NULL),
            (91,	'ru',	'Титулы: '),
            (92,	'en',	NULL),
            (92,	'ru',	'Мать: '),
            (93,	'en',	NULL),
            (93,	'ru',	'Отец: ');
      ");
    }

    public function down()
    {
    }
}
