<?php

function carregarController()
{
    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);


    if (!$controller) $controller = 'index';
    if (!file_exists("controller/{$controller}.controller.php")) {
        http_response_code(404);
        echo "Pagina não existe";
        die();
    }
}

require "controller/{$controller}.controller.php";


carregarController();
