<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: /meus-livros');
    exit();
}

if(!auth()){
    abort(403);
}

$usuario_id= auth()->id;
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$ano_lancamento = $_POST['ano_lancamento'];


$validacao = Validacao::validar([
    'titulo' => ['required', 'min:3'],
    'autor' => ['required'],
    'descricao' => ['required'],
    'ano_lancamento' => ['required'],
], $_POST);

if($validacao->naoPassou()){
    header('location: /meus-livros');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
$imagem = "images/$novoNome.$extensao";
move_uploaded_file($_FILES['imagem']['tmp_name'],__DIR__.'/../public/'.$imagem);



$pdo->query("insert into livro (titulo, autor, descricao, ano_lancamento, usuario_id, imagem)
    values (:titulo, :autor, :descricao, :ano_lancamento, :usuario_id, :imagem)", null,
    compact('titulo', 'autor', 'descricao', 'ano_lancamento', 'usuario_id', 'imagem'));

    flash()->push('mensagem', 'Cadastrado com sucesso!!'); 
    header('location: /meus-livros');
    exit();

?>