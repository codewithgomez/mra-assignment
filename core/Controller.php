<?php
namespace app\core;
use app\core\Application;

class Controller{
public string $layout = 'main';
public function setLayout($layout){
    $this->layout =$layout;
}
public function render($view, $params = []){
    return Application::$app->router->renderView($view, $params);
}
public function isAuthorized(){
    if (isset($_COOKIE['username']) && $_COOKIE['username'] != "false" ) {
         return true;
    } else {
        return false;
     }
}
}