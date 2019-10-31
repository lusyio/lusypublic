<?php

namespace app\controllers;

use app\core\Controller;

class HistoryController extends Controller
{
    public function indexAction()
    {
        $versions = [
            [
                'icon' => 'far',
                'iconColor' => 'icon-not-complete',
                'version' => 'v1.0.6',
                'date' => 'в разработке',
                'news' =>
                    'Канбан доска',
                'changes' =>
                    'Чаты с разными участниками и темами',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.5',
                'date' => '31 октября 2019',
                'news' =>
                    'Функция повторения задач для самозадач!Добавлен раздел помощь и подсказки с кратким описанием функций',
                'changes' =>
                    'Группировка сообщений при отправке на e-mail!Исправлены и доработаны некоторые функции',
                'img' => 'lusy-105.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.4',
                'date' => '25 сентября 2019',
                'news' =>
                    'Партнерская программа, которая позволяет рекомендовать Lusy друзьям и получать за это бесплатные дни Premium-функционала',
                'changes' =>
                    'Поиск по надзадачам на странице создания задачи',
                'img' => 'lusy-104.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.3',
                'date' => '10 сентября 2019',
                'news' =>
                    'Фильтры и сортировка на странице "задачи"',
                'changes' =>
                    'Добавлена возможность отписаться от писем!Переделаны подпункты для задач!Добавили оформление для удаленных файлов!Сделали возможность менять пароль без указания текущего пароля!Если вы пользуетесь системой единолично, то при создании задач вы по умолчанию будете "ответственным"',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.2',
                'date' => '28 августа 2019',
                'news' =>
                    'Сообщения об ачивках пользователей в общем чате',
                'changes' =>
                    'Переработанный файловый менеджер!Предпросмотр фотографий и файлов!Небольшие правки по дизайну',
                'img' => 'lusy-102.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.1',
                'date' => '16 августа 2019',
                'news' =>
                    'Функция редактирования существующих задач!Система Drag and Drop для загрузки файлов',
                'changes' =>
                    'Новые шаблоны писем - полезные и красочные',
            ],
            [
                'icon' => 'fas',
                'iconColor' => 'icon-complete',
                'version' => 'v1.0.0',
                'date' => '31 июля 2019',
                'news' =>
                    'Внедрены подпункты для задач',
                'changes' =>
                    'Вторая версия отчетов - теперь есть общий отчет и детальный по каждому сотруднику!Отладка множества функции - провели тотальную полировку!Поправлена логика некоторых достижений!Мобильная адаптация всех страниц',
                'img' => 'lusy-reports.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Beta  v0.9.0',
                'date' => '19 июля 2019',
                'news' =>
                    'Добавлены подзадачи',
                'changes' =>
                    'Четвертая версия дизайна системы!Новый блок задач на dashboard!Переделан дизайн журнала!Новый дизайн и функционал страницы создания задачи!Вторая версия обратной связи - теперь внутри системы диалогов',
                'img' => 'lusy-beta-version-9.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Beta  v0.8.0',
                'date' => '10 июля 2019',
                'news' =>
                    'Создана страница настроек компании!Добавлена отложенная отправка писем!На главной добавлен график выполненных задач!Подключена оплата с рекуррентными платежами!Разработана первая версия обратной связи!Добавлены дни рождения для пользователей!Разработана система промокодов',
                'changes' =>
                    'Добавлена анимация для элементов журнала',
                'img' => 'lusy-beta-payment.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Beta  v0.7.0',
                'date' => '30 июня 2019',
                'news' =>
                    'Разработана первая версия отчетов!Созданы первые 25 достижений!Разработана страница "достижения!Добавлены первые события при регистрации пользователя"',
                'changes' =>
                    'Доработан функционал для "самозадач"!Доработана страница профиля - теперь более информативная',
                'img' => 'lusy-beta-awards.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Beta  v0.6.0',
                'date' => '15 июня 2019',
                'news' =>
                    'Добавлен учет часового пояса!Появилось отображение "онлайна" пользователей!Добавлена возможность загрузки файлов в комментариях!Разработана страница "компания"!Разработна страница "настройки"!Сделана интеграция с Google Drive и DropBox',
                'changes' =>
                    'Проведена первичная мобильная адаптация',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Beta  v0.5.0',
                'date' => '31 мая 2019',
                'news' =>
                    'Добавлены возможность загрузить аватарку или сгенерировать из имени',
                'changes' =>
                    'Третья версия дизайна системы!Новый вид карточек на странице задач!Прогресс-бар в строке дедлайна!Доработан файловый менеджер (отображение занимаемого диского пространства, удаление файлов и т.д.)!Для многих элементов добавлены всплывающие подсказки!В системе появились соисполнители для задач!Переработан процесс регистрации, авторизации, восстановления пароля и приглашения новых пользователей!Доработаны события. Теперь они разделены на события по задачам, комментариям и системные!Добавлена дополнительная информация и социальные сети на странице профиля!Разаработаны первые шаблоны для писем и настроен почтовый сервер',
                'img' => 'lusy-beta-version.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Alpha  v0.4.0',
                'date' => '30 апр. 2019',
                'news' =>
                    'Создана страница "задачи" с поиском и сортировкой задач по: имени, статусу, постановщику, ответственному, дедлайну и т.п.!Разработан модуль управления задачами (завершение, отмена, перенос срока и т.д.)!Разработан блок переноса срока в карточке задачи!Разработан блок управления участниками задачи!Разработан базовый функционал файлового менеджера!Разработан поиск по названию задач, файлов, комментариев!Внедрены веб-сокеты для обновления в блоке уведомлений',
                'changes' =>
                    'Новый вид страницы создания задачи с визуальным редактором описания!Новый вид и логика работы блока уведомлений',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Alpha  v0.3.0',
                'date' => '1 марта 2019',
                'news' =>
                    'В тестовом виде добавлены уровни для пользователей',
                'changes' =>
                    'Вторая версия дизайна системы!На dashboard появились виджеты с отображением статистики',
                'img' => 'lusy-alpha-version.jpg',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Alpha  v0.2.0',
                'date' => '15 фев. 2019',
                'news' =>
                    'Разработана первая версия блока уведомлений',
                'changes' =>
                    'Задачи разделены по статусам!Заложена основа для "достижений"',
            ],
            [
                'icon' => 'far',
                'iconColor' => 'icon-complete',
                'version' => 'Alpha  v0.1.0',
                'date' => '23 янв. 2019',
                'news' =>
                    'Разработана архитектура базы данных!Разработан прототип, в котором есть регистрация, авторизация, dashboard с виджетами, базовый функционал создания задач, карточки задач, лог событий',
                'changes' =>
                    'Первая версия дизайна системы',
                'img' => 'lusy-first-version.jpg',
            ],
        ];
        $vars = [
            'versions' => $versions,
        ];
        $this->view->render('История версий', $vars);
    }

}
