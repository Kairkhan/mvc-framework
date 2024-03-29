<?php


namespace app\core;

/**
 * Class Controller
 * @package app\core
 */
class Controller
{
    public string $layout = 'main';

    /**
     * @param $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @param $view
     * @param array $params
     * @return string|string[]
     */
    public function render($view,$params=[])
    {
        return Application::$app->router->renderView($view,$params);
    }

}