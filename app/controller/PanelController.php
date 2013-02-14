<?php

class PanelController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->userDevice = new IsMobile();
    }

    public function index() {
        if (!isset($this->session->usuario)) {
            $this->response->redirect("login");
        } else {
            $view          = new View('panel');
            $view->titulo  = 'Panel';
            $view->usuario = $this->session->usuario;

            if ($this->userDevice->isMobile()) {
                echo 'Es un dispositivo movil';
            }

            echo $view->display();
        }
    }

}