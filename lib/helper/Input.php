<?php

class Input {

    private static $instance = NULL;

    // get Singleton instance of Input class
    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // get $_GET variable
    public static function get($var = NULL) {
        if (!isset($_GET[$var])) {
            return $var;
        }
        return mysql_real_escape_string(trim($_GET[$var]));
    }

    // get $_POST variable
    public static function post($var = NULL) {
        if (!isset($_POST[$var])) {
            return $var;
        }
        return mysql_real_escape_string(trim($_POST[$var]));
    }

}

// End Input class