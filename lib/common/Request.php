<?php

class Request extends Model {

    public $get = array();
    public $post = array();
    public $files = array();
    public $server = array();

    public function __construct() {

        parent::__construct();

        $_GET = $this->clean($_GET);
        $_POST = $this->clean($_POST);
        $_FILES = $this->clean($_FILES);
        $_SERVER = $this->clean($_SERVER);

        $this->get = $_GET;
        $this->post = $_POST;
        $this->files = $_FILES;
        $this->server = $_SERVER;
    }

    public function clean($data) {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                unset($data[$key]);

                $data[$this->clean($key)] = $this->clean($value);
            }
        } else {
            $data = htmlspecialchars(mysql_real_escape_string($data), ENT_COMPAT);
        }

        return $data;
    }

}

?>