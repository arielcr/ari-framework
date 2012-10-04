<?php

class Usuario extends Model {

    private $id_usuario;
    private $id_rol;
    private $fecha_creacion;
    private $username;
    private $nombre;
    private $email;
    private $ingreso_fecha;
    private $ingreso_total;
    private $ingreso_ip;
    private $privilegios;
    private $estado;

    public function __construct($_usuario = NULL) {

        parent::__construct();

        if (!is_null($_usuario)) {
            $this->id_usuario = $_usuario->id_usuario;
            $this->id_rol = $_usuario->id_rol;
            $this->fecha_creacion = $_usuario->fecha_creacion;
            $this->username = $_usuario->username;
            $this->nombre = $_usuario->nombre;
            $this->email = $_usuario->email;
            $this->ingreso_fecha = $_usuario->ingreso_fecha;
            $this->ingreso_total = $_usuario->ingreso_total;
            $this->ingreso_ip = $_usuario->ingreso_ip;
            $this->privilegios = $this->obtenerPrivilegios();
            $this->estado = $_usuario->estado;
        }
    }

    public function datos() {
        return array("id_usuario" => $this->id_usuario,
            "id_rol" => $this->id_rol,
            "fecha_creacion" => $this->fecha_creacion,
            "username" => $this->username,
            "nombre" => $this->nombre,
            "email" => $this->email,
            "ingreso_fecha" => $this->ingreso_fecha,
            "ingreso_total" => $this->ingreso_total,
            "ingreso_ip" => $this->ingreso_ip,
            "privilegios" => $this->privilegios,
            "estado" => $this->estado);
    }

    private function obtenerPrivilegios() {
        $privilegios = array();
        $privilegios_q = $this->db->QueryArray("SELECT p.nombre AS nombre FROM privilegio p INNER JOIN privilegio_x_rol pxr ON p.id_privilegio = pxr.id_privilegio WHERE pxr.id_rol = " . $this->id_rol);

        if ($this->db->RowCount() > 0) {
            foreach ($privilegios_q as $privilegio) {
                $privilegios[] = $privilegio['nombre'];
            }
        }

        return $privilegios;
    }

}

?>