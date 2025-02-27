<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Meu Portifólio</h1>
    <?php
    $projeto = "meu Portifólio";
    $finalizado = true;
    $dataProjeto = "2025-05-05";
    $descricao = "Meu primeiro portifolio escrito em PHP";

    $projetos = [
       [
        "titulo" => "Meu Portifólio",
        "status" => false,
        "data" => "2025-05-05",
        "descricao" => "Meu primeiro portifolio escrito em PHP"

       ],
       [
        "titulo" => "Meu Portifólio",
        "status" => true,
        "data" => "2025-05-05",
        "descricao" => "Meu primeiro portifolio escrito em PHP"

       ]
       /** 
        * "meu portifolio",
        *"Lista de tarefas",
        *"Controle de leitura de livros",
        *"<a href = 'http://www.google.com' /> Google",
       */
        
    ];
   
    ?>

    <h1><?php $titulo ?></h1>
    <p><?php $subtitulo ?></p>
    <p><?php $ano ?></p>

    <hr>
    <div style="background: green">
    <ul>

        <?php foreach($projetos as $projeto){
            echo "<li> {$projeto['titulo']}  </li>";  //. para concatenar o codigo com as tags html
            echo "<li> {$projeto['data']} </li>"; 
            echo "<li> {$projeto['descricao']} </li>";
            echo "<hr>";
        }
        
        ?>
        
    </ul>
    </div>



</body>
</html>