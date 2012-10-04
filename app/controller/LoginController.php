<?php

class LoginController extends Controller {

    private $usuario_model = NULL;

    public function __construct() {
        parent::__construct();
        $this->usuario_model = new UsuarioModel();
    }

    public function index() {
        if (isset($this->session->usuario)) {
            $this->response->redirect("inicio");
        } else {
            $view = new View('login');
            $view->titulo = 'Login';
            $view->sesion_invalida = (isset($this->session->invalida)) ? true : false;
            unset($this->session->invalida);

            echo $view->display();
        }
    }

    public function validar() {

        if ($this->request->post['ingresar']) {
            $username = $this->request->post['username'];
            $password = $this->request->post['password'];

            if ($this->usuario_model->validar($username, $password)) {
                $this->session->usuario = $this->usuario_model->usuario->datos();
                $this->response->redirect("panel");
            } else {
                $this->session->invalida = 1;
                $this->response->redirect("login");
            }
        }
    }

    public function salir() {
        unset($this->session->usuario);
        $this->response->redirect("login");
    }

}