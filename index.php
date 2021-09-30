<?php
/** Примитивный загрузчик классов */
spl_autoload_register(function ($class_name) {
    include 'controllers/' . $class_name . '.php';
});

/** Логика роутинга */
$query = $_GET['q'] ?? null;

switch($query){
/** Если пользователь перешел на страницу О сайте */
    case 'about':
        SiteController::action('about');
        break;

        /** Если пользователь перешел на страницу Контакты */
    case 'contact':
        SiteController::action('contact');
        break;

    /** Если пользователь находится на главной странице либо запрос не обработан */
    default:
        SiteController::action('index');
        break;
}