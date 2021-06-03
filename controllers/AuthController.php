<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        $registerModel = new RegisterModel();

        if($request->isPost()){

            $registerModel->loadData($request->getBody());

            if($registerModel->validate()  && $registerModel->register()){
                return 'success';
            }


            return $this->render('register',[
               'model' => $registerModel
            ]);
        }

        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $registerModel
        ]);
    }
}