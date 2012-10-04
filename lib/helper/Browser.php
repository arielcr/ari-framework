<?php

class Browser {

    private static $instance = NULL;

    public function __construct() {
        
    }

    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function isIE() {

        $ie = 'MSIE';
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $pos = stripos($user_agent, $ie);
        $is_ie = false;

        if ($pos === false) {
            $is_ie = false;
        } else {
            $is_ie = true;
        }

        return $is_ie;
    }

}

?>
