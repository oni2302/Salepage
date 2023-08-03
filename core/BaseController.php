<?php
class BaseController
{

    public function renderView($view, $data = [])
    {
        extract($data);
        if (file_exists(_ROOT . '/app/Views/' . $view . '.php')) {
            require_once _ROOT . '/app/Views/' . $view . '.php';
        }
    }



    public function getModel($name)
    {
        if (file_exists(_ROOT . '/app/Models/' . $name . '.php')) {
            require_once _ROOT . '/app/Models/' . $name . '.php';
            if (class_exists($name)) {
                $model = new $name();
                return $model;
            }
        }
        return false;
    }
}
