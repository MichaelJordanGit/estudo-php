<?php
//representação de um registro do banco de dados em forma de classe
class Livro {
   
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $usuario_id;



    public static function make($item){

           $livro = new Livro();
           $livro->id = $item['id'];
           $livro->titulo = $item['titulo'];
           $livro->autor = $item['autor'];
           $livro->descricao = $item['descricao'];
           $livro->usuario_id = $item['usuario_id'];

           return $livro;
    }
}
?>