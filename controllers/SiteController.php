<?php


namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * @return string|string[]
     */
    public function home()
    {
        $params  = [
          'name' => 'Kaiyrkhan'
        ];
        return $this->render('home',$params);
    }

    /**
     * @return string
     */
    public function contact()
    {
        return $this->render('contact');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;


        return "Handling submitted data";
    }

}