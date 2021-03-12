<?php

namespace app\core;

class View{

    public function show($template, $data){
        require_once "app/views/".$template.".php";
    }

    public static function redirect($page){
        header("Location: /$page");
    }
}