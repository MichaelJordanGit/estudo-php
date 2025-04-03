<?php


class DB
{
    private $pdo;
    private $host = "localhost";
    private $dbname = "db_livros";
    private $usuario = "michael";
    private $senha = "Michael123!";

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->usuario, $this->senha);
    }

    public function query($query, $class = null, $params = [])
    { 
        $prepare = $this->pdo->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class); 
        }
        $prepare->execute($params);
        return $prepare;
    }
}

$pdo = new DB(conexao('pdo'));
