<?php
$id = $_REQUEST['id'];
$pdo = new DB;
$livro = $pdo
->query(
    query:"select * from livro where id = :id", 
    class:Livro::class, 
    params:['id'=>$_GET['id']])
->fetch();

$avaliacoes = $pdo->query
("select * from avaliacoes where livro_id = :id", 
Avaliacao::class, 
['id' => $_GET['id']])->fetchAll();

view('livro', compact('livro', 'avaliacoes'));

