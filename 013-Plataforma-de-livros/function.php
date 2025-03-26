<?php
function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require "views/templates/app.php";
}

function dd(...$dump)
{
    dump($dump);
    exit();
}

function dump(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}

function abort($code)
{
    http_response_code($code);
    view($code);

    die();
}

function flash()
{
    return new Flash;
}

function conexao($chave = null)
{

    $con = require 'conexao.php';
    if (strlen($chave) > 0) {
        return $con[$chave];
    }
    return $con;
}
