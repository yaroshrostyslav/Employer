<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\IndexModel;
use app\models\UserModel;


class IndexController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new IndexModel();
    }

    public function index(){
        $user = new UserModel();
        if ($user->isAuth()){
            $this->data = ['title' => "New Employee"];
            $this->view->show('employeeNew.tpl', $this->data);
        }else{
            $this->data = ['title' => "Authorization"];
            $this->view->show('login.tpl', $this->data);
        }
    }

}