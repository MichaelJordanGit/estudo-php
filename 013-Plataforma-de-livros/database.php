<?php


class DB
{
    private $pdo;

    public function __construct(){
        require "conexao.php";
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
        //$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }   
    // fetchAll tras todos registros da query
    public function livros($pesquisa = '')
    {
        require "conexao.php";       

        $sql = "";
        
        if($pesquisa){
            $pesquisa = trim($pesquisa);

            $sql = "where
            
            usuario_id = 2
            and( titulo like $pesquisa'
            or autor like '%$pesquisa%' 
            or descricao like'%$pesquisa%')";
           
        }
        
        $query = $this->pdo->query("select * from livro $sql");
        $query->execute();

        
        $itens =  $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $itens);
        
    }

    public function livro($id){
        
        require "conexao.php";
        $sql .= " where id = " . $id;
        $query = $this->pdo->query("select * from livro");
        $itens =  $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $itens);
    }

    public function livros2($pesquisa = ''){
        require "conexao.php";
        //$prepare = $this->pdo->prepare("select * from livro where usuario_id = 1");
        $prepare = $this->pdo->prepare("select * from livro where usuario_id = 2 and titulo like :pesquisa");
        $prepare->bindValue(':pesquisa', "%$pesquisa%"); //esse 
        $prepare->execute();

        $itens = $prepare->fetchAll();
        return array_map(fn($item) => Livro::make($item), $itens);
    }
}

