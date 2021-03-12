<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\EmployeeModel;
use app\models\UserModel;

class EmployeeController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new EmployeeModel();
    }

    public function index(){
        $employees = $this->model->getAll();
        $this->data = ['title' => "Employees", 'employees' => $employees];
        $this->view->show('employees.tpl', $this->data);
    }

    public function new(){
        $this->data = ['title' => "New Employee"];
        $this->view->show('employeeNew.tpl', $this->data);
    }

    public function add(){
        $create = $this->model->create($_POST);
        $this->view::redirect('employee');
    }

    public function search(){
        $this->data = ['title' => "Search Employee"];
        $this->view->show('employeeSearch.tpl', $this->data);
    }

    public function find(){
        $find = $this->model->find($_POST);
        echo json_encode(array(
            'data' => $find['data'],
            'count' => $find['count']
        ));
    }


}