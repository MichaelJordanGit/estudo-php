<?php
require 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ], $_POST);

    if ($validacao->naoPassou('login')) {
        header('location: /login');
        exit();
    }

    if (!$email || !$senha) {
        die("Erro: Email e senha são obrigatórios.");
    }

    // Correção: Usando prepare() e execute() ao invés de query()
    $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $consulta->execute([
        'email' => $email,
    ]);
    $usuario = $consulta->fetchObject(Usuario::class);
    if ($usuario) {
        //VALIDAR SENHA
        if(! password_verify($_POST['senha'], $usuario->senha)){
            flash()->push('validacoes_login', ['Usuario ou senha estão incorretos!']);
            header('location: /login');
            exit();
        }

        $_SESSION['auth'] = $usuario;
        // session()->push('auth', $usuario);      ----> vai ser usado depois na proxima refatoração
        flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');
        header('location: /');
        exit();
    }
}

view('login');
