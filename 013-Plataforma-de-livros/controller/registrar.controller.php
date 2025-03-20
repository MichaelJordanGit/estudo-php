<?php
$pdo = new DB;
 if($_SERVER['REQUEST_METHOD']=='POST'){  
    $validacoes = []; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_confirmacao = $_POST['email_confirmacao'];
    $senha = $_POST['senha'];


    //nome precisa ser obrigatorio
    if(strlen($nome)== 0){
        $validacoes[] = 'O nome é obrigatorio.';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validacoes[] = 'O email é invalido';
    }
    if($email != $email_confirmacao){
        $validacoes[] = 'E-mails não conferem. Verifique!!!';
    }

    if(strlen($senha)== 0){
        $validacoes[] = 'A senha é obrigatoria';
    }
    if(strlen($senha) < 8 || strlen($senha) > 30){
        $validacoes[] = 'A senha precisa ter no minimo 8 caracteres e no maximo 30 caracteres';
    }
    if(!str_contains($senha, '*')){
        $validacoes[] = 'A senha deve ter pelo menos um *';
    }
    if(sizeof($validacoes) > 0){
       $_SESSION['validacoes'] = '';
       header('location: /login');
       exit();


       view('login', compact('validacoes'));
       
    }

       $resultado =  $pdo->query(
            query:"insert into usuarios (nome, email, senha)values(:nome, :email, :senha)",
            params: [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha']
            ]
        
        );
        header('location: /login?mensagem=Registrado com sucesso');
        exit();
  

 }

 ?>