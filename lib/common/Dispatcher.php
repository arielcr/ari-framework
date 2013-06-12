<?php

/* class Dispatcher {

  public static function dispatch() {

  //REMOTO
  //$url = explode('/', $_SERVER['REQUEST_URI']);
  $url = explode('/', trim($_SERVER['REQUEST_URI'], "/"));

  array_shift($url);

  $controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'DefaultController';

  $method = !empty($url[1]) ? $url[1] : 'index';

  $arg = !empty($url[2]) ? $url[2] : NULL;

  $cont = new $controller;

  $cont->$method($arg);
  }

  } */

class Dispatcher {

    /**
     * Dispatch function - delegates action to other function and passes parameters to it
     */
    public static function dispatch() {

        // Stear clear, allow only leters, numbers and slashes
        if (!empty($raw_route) and preg_match('/^[\p{L}\/\d]++$/uD', $_SERVER["REQUEST_URI"]) == 0) {
            die("Invalid URL");
        }

        // Extract parameters
        $url_pieces = explode("/", $_SERVER["REQUEST_URI"]);
        array_shift($url_pieces);

        $site_root_pieces = explode("/", DIR_ROOT);

        $diff = array_diff($url_pieces, $site_root_pieces);

        /**
         * Modify this section to count the array keys and assign as Controller/Method/Arguments
         */
        $controller = !empty($diff[3]) ? ucfirst($diff[3]) . 'Controller' : 'DefaultController';

        $method = array();

        if (count($url_pieces) > 3) {
            if (!empty($url_pieces[4])) {
                $method = $url_pieces[4];
            } else {
                $method = 'index';
            }
        }

        $arg = !empty($url[5]) ? $url[5] : NULL;

        // All checked, execute requested funcion with provided parameters
        $cont = new $controller;
        $cont->$method($arg);
    }

}