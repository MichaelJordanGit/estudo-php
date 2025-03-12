<?php 
$host = 'localhost';
$dbname = 'db_book_wise';
$usuario = 'root';
$senha = '';


try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pde-> setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);
    echo"conexão bem sucedida";
}catch

?>