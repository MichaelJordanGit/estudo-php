<?php
$id = $_REQUEST['id'];
$db = new DB;
$livro = $db->livros($id);
if(!$id){
}
view('livro', ['livro' => $livro]);

