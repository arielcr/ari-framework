<?php

class Controller {

    protected $session = NULL;
    protected $response = NULL;
    protected $request = NULL;

    public function __construct() {
        $this->session = Session::getInstance();
        $this->response = Response::getInstance();
        $this->request = new Request();
    }

}

?>