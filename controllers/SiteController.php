<?php

class SiteController extends BaseController
{

    function showMenu()
    {
        return '<div class="menu">
                <a href="./">Главная</a><a href="./index.php?q=contact">Контакты</a>
                <a href="./index.php?q=about">О сайте</a>
            </div>';
    }

/**
* Отображает страницу Главная.
* @return string
*/
    function index()
    {
        $this->render('index');
    }

/**
* Отображает страницу Контакты.
* @return string
*/
    function contact()
    {

    }
/**
* Отображает страницу О сайте.
* @return string
*/
    function about()
    {

    }
}