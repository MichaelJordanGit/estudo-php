<?php
$pdo = new DB;
$livros = livro::all($_REQUEST['pesquisar'] ?? '');
view('index', ['livros' => $livros]);
