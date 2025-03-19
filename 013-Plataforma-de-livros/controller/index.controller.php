<?php
$pesquisa = $_REQUEST['pesquisar'] ?? '';
$pdo = new DB;
$livros = $pdo->query(
    query:"select * from livro where titulo like :filtro", 
    class: Livro::class,
    params: ['filtro' => "%$pesquisa%"]
)
->fetchAll();
view('index', ['livros' => $livros]);
