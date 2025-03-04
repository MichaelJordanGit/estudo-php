<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais e Booleanos</title>
</head>
<body>
    <?php
    $projeto = "meu portifolio";
    $finalizado = 0;
    $dataProjeto = "2025-10-10";
    $descricao = "meu portifolio. Escrito em PHP";
    $ano = 2020;
    
    ?>
<hr>
    <div>
        
        <div <?php
        if ((2025 - $ano) > 2)
        ?> style = "background-color: red" >
        <?php
            if($finalizado == true){
                echo "positivo finalizado";
            }
            else{
                echo "não finalizado";
            }
            ?>
            
        </div>
        </div>
        <h1><?php $projeto?></h1>
        <p><?php $descricao?></p>
        <div>
            <div><?php $dataProjeto?>
            </div>

            <?php
            if($finalizado == true){
                echo "positivo finalizado";
            }
            else{
                echo "não finalizado";
            }
            ?>
        </div>

    </div>
</body>
</html>