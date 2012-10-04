<?php

class Model {

    protected $db = NULL;
    protected $table = '';
    protected $session = NULL;

    public function __construct() {
        $this->session = Session::getInstance();
        $this->db = MySQL::getInstance();
    }

    public function listar() {
        $results = $this->db->QueryArray("select * from " . $this->table);
        return $results;
    }

    public function guardar(array $data, $id = NULL) {
        if (!empty($data)) {
            $this->db->InsertRow($this->table, $data);
        }
    }

    public function eliminar($id = NULL) {
        if ($id !== NULL) {
            $filter["id"] = $id;
            $this->db->DeleteRows($this->table, $filter);
        }
    }

}

?>