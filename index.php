<?php

/* CONTROLADOR FRONTAL DE LA APLICACION */

// ARCHIVO DE CONFIGURACION
include_once("config/config.inc.php");

spl_autoload_register(NULL, FALSE);
spl_autoload_extensions('.php');
spl_autoload_register(array('Autoloader', 'load'));

class ClassNotFoundException extends Exception {
    
}

class Autoloader {

    public static function load($class) {
        if (class_exists($class, FALSE)) {
            return;
        }

        $file = $class . '.php';

        // VERIFICACION DE LOS ARCHIVOS
        if (file_exists(DIR_CTL . $file)) {
            $path = DIR_CTL;
        } else
        if (file_exists(DIR_LIB . $file)) {
            $path = DIR_LIB;
        } else
        if (file_exists(DIR_PDF . $file)) {
            $path = DIR_PDF;
        } else
        if (file_exists(DIR_HLP . $file)) {
            $path = DIR_HLP;
        } else
        if (file_exists(DIR_MOD . $file)) {
            $path = DIR_MOD;
        } else
        if (file_exists(DIR_OBJ . $file)) {
            $path = DIR_OBJ;
        } else {
            eval('class ' . $class . '{}');
            throw new Exception('Archivo ' . $file . ' no encontrado.');
        }

        require_once($path . $file);

        unset($file);

        if (!class_exists($class, FALSE)) {
            eval('class ' . $class . '{}');
            throw new ClassNotFoundException('Clase ' . $class . ' no encontrada.');
        }
    }

}

// CARGA DEL CONTROLADOR
try {
    Dispatcher::dispatch();
} catch (ClassNotFoundException $e) {
    echo $e->getMessage();
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>