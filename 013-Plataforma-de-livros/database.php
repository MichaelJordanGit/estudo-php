<?php


class DB
{

    // fetchAll tras todos registros da query
    public function livros($id = null)
    {
        require "conexao.php";

         $sql = "select * from livro";
        if (!is_null($id)) {
            $sql .= " where id = " . $id;
            
        }
        $query = $pdo->query($sql);

        $itens =  $query->fetchAll();

        $retorno = [];
        foreach ($itens as $item) {
            $livro = new Livro;

            $livro->id = $item['id'];
            $livro->titulo = $item['titulo'];
            $livro->autor = $item['autor'];
            $livro->descricao = $item['descricao'];

            $retorno[] = $livro;
        }
        return $retorno;
    }

}
