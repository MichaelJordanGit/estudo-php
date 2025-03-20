<?php

$mensagem = $_REQUEST['mensagem'] ?? '';
view('login', compact('mensagem'));


// compac vira um aarray com a chave mensagem passando com uma variavel a mensagm
//GET = pegar
//POST = enviar
//PUT = atualizar bloco de informações
//PATCH = atualizações de um campo só 
//DELETE = deleção
?>