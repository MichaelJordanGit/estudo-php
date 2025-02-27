<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções anonimas</title>
</head>
<body>
<?php
        $nome = "Pafuncio";
        $sobrenome = "atanagildo";
        $idade = 15;



         $mostrarDados = function($nome){ //função anonima declada declada dentro da variavel $mostrarDados
            echo $nome;
        };
        $mostrarDados($nome);

        function mostraOutrosDados(){
            $nome = "Mario";
            echo $nome;
        }
        mostraOutrosDados();
    ?>
</body>
</html>