<?php

// CONFIGURACION DE LA BASE DE DATOS 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","j25BrI40");
define("DB_DBNAME","tractomotriz");

// CONFIGURACION DE LOS DIRECTORIOS
define("DIR_CTL","app/controller/");
define("DIR_MOD","app/model/");
define("DIR_VIW","app/view/");
define("DIR_OBJ","app/object/");
define("DIR_LIB","lib/common/");
define("DIR_PDF","lib/tcpdf/");
define("DIR_HLP","lib/helper/");


// CONFIGURACION DE URL
define("SITE_PROT","http");
define("SITE_URL",SITE_PROT."://".$_SERVER['HTTP_HOST']."/tractomotriz/");
define("DIR_INC",$_SERVER['DOCUMENT_ROOT']."/tractomotriz/app/view/includes/");

date_default_timezone_set('America/Costa_Rica');

?>