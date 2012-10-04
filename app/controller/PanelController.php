<?php

class PanelController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (!isset($this->session->usuario)) {
            $this->response->redirect("login");
        } else {
            $view = new View('panel');
            $view->titulo = 'Panel';
            $view->usuario = $this->session->usuario;

            echo $view->display();
        }
    }

}