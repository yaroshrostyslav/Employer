<?php


namespace app\controllers;


use app\core\Controller;
use app\core\View;
use app\models\UserModel;

class UserController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new UserModel();
    }

    public function login(){
        $login = $_POST['login'];
        $login = $this->model->checkUser($login);
        if ($login !== false){
            $_SESSION['auth'] = true;
            $this->view::redirect('employee');
        }else{
            $this->view::redirect('index');
        }
    }

}