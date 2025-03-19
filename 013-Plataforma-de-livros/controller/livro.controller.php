<?php
$id = $_REQUEST['id'];
$pdo = new DB;
$livro = $pdo
->query(
    query:"select * from livro where id = :id", 
    class:Livro::class, 
    params:['id'=>$_GET['id']])
->fetch();

view('livro', ['livro' => $livro]);

