<?php


class DB
{
    private $pdo;

    public function __construct()
    {

        require "conexao.php";

        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
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
