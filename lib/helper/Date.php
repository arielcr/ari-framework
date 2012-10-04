<?php

class Date {

    private static $instance = NULL;
    private static $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    private static $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre");

    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function fechaLarga() {
        return self::$dias[date('w') - 1] . " " . date('d') . " de " . self::$meses[date('n') - 1] . " de " . date('Y');
    }

    public static function fechaCorta() {
        return date('d-m-Y');
    }

    public static function formatoFechaLarga($fecha) {
        $f = strtotime($fecha);
        return self::$dias[date('w', $f) - 1] . " " . date('d', $f) . " de " . self::$meses[date('n', $f) - 1] . " de " . date('Y', $f);
    }

    public static function formatoFechaCorta($fecha) {
        $f = strtotime($fecha);
        return date('d-m-Y', $f);
    }

    public static function formatoFechaWP($fecha) {
        $f = strtotime($fecha);
        return date('j', $f) . " " . self::$meses[date('n', $f) - 1] . ", " . date('Y', $f);
    }

}