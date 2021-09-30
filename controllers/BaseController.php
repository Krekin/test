<?php

class BaseController
{
    static function action($actionName = null)
    {
        $controller = new static();
        return $controller->$actionName();
    }

    function render($viewFileName = null)
    {
        require './views/' . $viewFileName . '.php';
    }

}
