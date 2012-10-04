<?php

class Response {

    private static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    function redirect($path) {
        if ($path != "REFERER") {
            header('Location: ' . SITE_URL . $path);
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

}

?>