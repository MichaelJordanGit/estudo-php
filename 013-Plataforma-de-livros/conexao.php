<?php
    $host = "localhost";
    $dbname = "db_livros";
    $usuario = "michael";
    $senha = "Michael123!";

    try{
        //criando a conexao com o banco 
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
        
        //Configurando para lançar exceções em caso de erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        die("Erro na conexão".$e->getMessage());
        
    }

?>
 



