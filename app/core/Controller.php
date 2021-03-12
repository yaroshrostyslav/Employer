<?php

namespace app\core;

abstract class Controller{
    public $model;
    public $view;
    protected $data;

    public function __construct(){
        $this->view = new View();
    }
}