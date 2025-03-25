<?php
require 'conexao.php';
$mensagem = $_REQUEST['mensagem'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    $validacao = Validacao::validar([
        //'nome' => ['required'],
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ], $_POST);

    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }

    if (!$email || !$senha) {
        die("Erro: Email e senha são obrigatórios.");
    }

    // Correção: Usando prepare() e execute() ao invés de query()
    $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $consulta->execute([
        'email' => $email,
        'senha' => $senha
    ]);
    $usuario = $consulta->fetchObject(Usuario::class);
    if ($usuario) {
        $_SESSION['auth'] = $usuario;
        $_SESSION['mensagem'] = 'Seja bem vindo ' . $usuario->nome . '!';
        header('location: /');
        exit();
    }
}

view('login', compact('mensagem'));


// $mensagem = $_REQUEST['mensagem'] ?? '';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     $usuario = $pdo->query(
//         query: "SELECT * FROM usuarios WHERE email = :email AND senha = :senha", 
//         class: Usuario::class,
//         params: compact('email', 'senha'))->fetch();

//     if($usuario){
//         $_SESSION['auth'] = $usuario;
//         $_SESSION['mensagem'] = 'Seja bem vindo ' .$usuario['nome'] . '!';
//         header('location: /');
//         exit();
//     }
        
// }

// view('login', compact('mensagem'));
