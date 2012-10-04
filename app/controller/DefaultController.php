<?php

class DefaultController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (isset($this->session->usuario)) {
            $this->response->redirect("panel");
        } else {
            $this->response->redirect("login");
        }
    }

}