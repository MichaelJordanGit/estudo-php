<?php
require 'dados.php';
$id = $_REQUEST['id'];
$filtrado = array_filter($livros, function ($l) use ($id) {
    return $l['id'] == $id;
});
$livro = array_pop($filtrado); // array pop retorna o ultimo elemento do array

view('livro');
