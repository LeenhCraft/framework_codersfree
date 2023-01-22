<?php

namespace App\Controllers;

class Controller
{
    public function view($route, $data = [])
    {
        extract($data);//extrae los datos del array y los convierte en variables
        $route = str_replace(".", "/", $route);
        if (file_exists("../resources/views/{$route}.php")) {
            ob_start();
            include_once "../resources/views/{$route}.php";
            $content = ob_get_clean();
            return $content;
        } else {
            return "404 el archivo no existe";
        }
    }
}
