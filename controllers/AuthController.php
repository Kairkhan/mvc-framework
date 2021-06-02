<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthController extends  Controller
{
    /**
     * @return string|string[]
     */
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function register(Request $request)
    {
        if($request->isPost()){
            return "Handle submitted data";
        }

        $this->setLayout('auth');
        return $this->render('register');
    }
}