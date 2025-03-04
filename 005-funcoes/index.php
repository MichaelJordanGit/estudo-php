<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <div>
    <?php
        $nome = "Pafuncio";
        $sobrenome = "atanagildo";
        $idade = 15;

        function mostrarDados($nome){
            echo $nome;
        }
        mostrarDados($nome);

        function mostraOutrosDados(){
            $nome = "Mario";
            echo $nome;
        }
        mostraOutrosDados();
    ?>
    </div>

</body>
</html>