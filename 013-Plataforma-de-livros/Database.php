<?php


class DB
{
    private $pdo;

    public function __construct(){
        
        require "conexao.php";

        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    }  
    
    public function query($query, $class = null, $params = []){
        $prepare = $this->pdo->prepare($query);
        if($class){
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);

        return $prepare;
    }
    // fetchAll tras todos registros da query
//     public function livros($pesquisa = '')
//     {
//         $pesquisa = trim($pesquisa);
//         require "conexao.php";
        
        
//         $prepare = $this->pdo->prepare("select * from livro where usuario_id = 2 and titulo like :pesquisa");
//         $prepare->bindValue(':pesquisa', "%$pesquisa%");
//         $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
//         $prepare->execute();
//         return $prepare->fetchAll();
        
//     }

//     public function livro($id){
//         $prepare = $this->pdo->prepare("select * from livro where id = :id");
//         $prepare->bindValue('id', $id);
//         $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
//         $prepare->execute();
//         return $prepare->fetch();
       
//     }

   
 }

