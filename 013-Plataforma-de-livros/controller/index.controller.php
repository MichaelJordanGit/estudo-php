<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';
$livros = (new DB)->livros2($pesquisar);

view('index', ['livros' => $livros]);
