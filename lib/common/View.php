<?php

class View {

    private $viewfile = 'default_view.php';
    private $properties = array();

    public static function factory($viewfile = '') {
        return new self($viewfile);
    }

    public function __construct($viewfile = '') {
        if ($viewfile !== '') {
            $viewfile = DIR_VIW . $viewfile . '.php';
            if (file_exists($viewfile)) {
                $this->viewfile = $viewfile;
            }
        }
    }

    public function __set($property, $value) {
        if (!isset($this->$property)) {
            $this->properties[$property] = $value;
        }
    }

    public function __get($property) {
        if (isset($this->properties[$property])) {
            return $this->properties[$property];
        }
    }

    public function display() {
        extract($this->properties);
        ob_start();
        include($this->viewfile);
        return ob_get_clean();
    }

}

?>