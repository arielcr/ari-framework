<?php

class UsuarioModel extends Model {

    public $usuario;

    public function __construct() {
        parent::__construct();
    }

    public function validar($username, $password) {
        $db_usuario = (substr(trim($username), 0, 20));
        $db_password = md5(substr(trim($password), 0, 10));

        $usuario = $this->db->QuerySingleRow(sprintf("SELECT * FROM usuario WHERE username = '%s' AND password = '%s' AND estado = 1 ", $db_usuario, $db_password));

        if ($this->db->RowCount() > 0) {
            $this->db->Query("UPDATE usuario SET ingreso_total = (ingreso_total + 1), ingreso_fecha = NOW(), ingreso_ip = '{$_SERVER['REMOTE_ADDR']}' WHERE id_usuario = " . $usuario->id_usuario);
            $this->usuario = new Usuario($usuario);
            return true;
        }

        return false;
    }

    public function obtenerUsuarios() {
        $usuarios = $this->db->QueryArray("SELECT u.id_usuario, u.estado, r.tipo as rol, u.username, u.nombre, u.ingreso_fecha, u.ingreso_ip, u.ingreso_total FROM usuario u INNER JOIN rol r ON u.id_rol = r.id_rol ORDER BY u.id_usuario DESC");
        return $usuarios;
    }

    public function obtenerUsuario($id_usuario) {
        $usuario = $this->db->QuerySingleRow("SELECT u.id_usuario, u.estado, r.tipo as rol, r.id_rol, u.username, u.nombre, u.ingreso_fecha, u.ingreso_ip, u.ingreso_total, u.fecha_creacion FROM usuario u INNER JOIN rol r ON u.id_rol = r.id_rol WHERE u.id_usuario = $id_usuario ");
        return $usuario;
    }

    public function obtenerRoles() {
        $roles = $this->db->QueryArray("SELECT * FROM rol ORDER BY nombre ASC");
        return $roles;
    }

    public function crearUsuario($form) {
        $usuario = trim($form['usuario']);
        $password = md5(trim($form['password']));

        $datos["id_rol"] = $form['rol'];
        $datos["username"] = MySQL::SQLValue($usuario);
        $datos["password"] = MySQL::SQLValue($password);
        $datos["nombre"] = MySQL::SQLValue($form['nombre']);
        $datos["ingreso_total"] = 0;
        $datos["estado"] = $form['estado'];
        $datos["fecha_creacion"] = MySQL::SQLValue(date("Y-m-d H:i:s"), MySQL::SQLVALUE_DATETIME);

        $this->db->InsertRow("usuario", $datos);

        $id_usuario = $this->db->GetLastInsertID();
    }

    public function modificarUsuario($form) {
        $usuario = trim($form['usuario']);

        if (isset($form['password'])) {
            $password = md5(trim($form['password']));
            $datos["password"] = MySQL::SQLValue($password);
        }

        $datos["id_rol"] = $form['rol'];
        $datos["username"] = MySQL::SQLValue($usuario);
        $datos["nombre"] = MySQL::SQLValue($form['nombre']);
        $datos["estado"] = $form['estado'];
        $filtro["id_usuario"] = $form['id_usuario'];

        $this->db->UpdateRows("usuario", $datos, $filtro);
    }

    public function eliminarUsuario($id_usuario) {
        $filtro["id_usuario"] = $id_usuario;
        $this->db->DeleteRows("usuario", $filtro);
    }

}

?>
