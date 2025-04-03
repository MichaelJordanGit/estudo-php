<?php
$id = $_REQUEST['id'];
$pdo = new DB;
$livro = Livro::get($_GET['id']);

$avaliacoes = $pdo->query(
        "select * from avaliacoes where livro_id = :id",
        Avaliacao::class,
        ['id' => $_GET['id']]
    )->fetchAll();

view('livro', compact('livro', 'avaliacoes'));
