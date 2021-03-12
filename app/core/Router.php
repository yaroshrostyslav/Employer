<?php

namespace app\core;

class Router{

    public function getRoute(){
        $controllerName = 'IndexController';
        $action = 'index';

        $route = explode('/', $_SERVER['REQUEST_URI']);

        if (isset($route[1]) && $route[1] !== ''){
            $controllerName = ucfirst($route[1]."Controller");
        }

        $c = 'app\controllers\\'.$controllerName;

        if (class_exists($c)){
            $controller = new $c;
            if (method_exists($controller, $route[2])){
                $action = $route[2];
            }
            $controller->$action();
        }else{
            echo "HTTP/1.0 404 Not Found";
            header("HTTP/1.0 404 Not Found");
            exit();
        }

    }

}