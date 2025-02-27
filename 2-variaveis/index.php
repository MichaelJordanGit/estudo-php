<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando Variaveis</title>
</head>
<body>
    <?php 
    $nome = "michael";
    $saudacao = "Ola";
    $titulo = $saudacao . " " . $nome;
    $ano = 2025;
    ?>
    <h1>
    <?php 
        
        echo $titulo ; // aqui o comando echo esta imprimindo o valor da variavel $saudacao

    ?>
      </h1>
      <p>
        <?php 
        echo $ano;
        ?>
      </p>
</body>
</html>