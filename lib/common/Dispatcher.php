<?php

class Dispatcher {

    public static function dispatch() {

        //REMOTO
        //$url = explode('/', $_SERVER['REQUEST_URI']);
        $url = explode('/', trim($_SERVER['REQUEST_URI'], "/"));

        array_shift($url);

        $controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'DefaultController';

        $method = !empty($url[1]) ? $url[1] : 'index';

        $arg = !empty($url[2]) ? $url[2] : NULL;

        $cont = new $controller;

        $cont->$method($arg);
    }

}

?>