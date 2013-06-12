<?php

// CONFIGURACION DE LA BASE DE DATOS 
define("DB_HOST", "localhost");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_DBNAME", "");

// CONFIGURACION DE LOS DIRECTORIOS
define("DIR_CTL", "app/controller/");
define("DIR_MOD", "app/model/");
define("DIR_VIW", "app/view/");
define("DIR_OBJ", "app/object/");
define("DIR_LIB", "lib/common/");
define("DIR_PDF", "lib/tcpdf/");
define("DIR_HLP", "lib/helper/");

// CONFIGURACION DEL CONTROLADOR POR DEFECTO
define("default_controller", "<nombre del controlador>");

// CONFIGURACION DE URL
define("SITE_PROT", "http");
define("SITE_URL", SITE_PROT . "://" . $_SERVER['HTTP_HOST'] . "/<carpeta del sitio>/");
define("DIR_INC", $_SERVER['DOCUMENT_ROOT'] . "/<carpeta del sitio>/app/view/includes/");

date_default_timezone_set('America/Costa_Rica');
?>