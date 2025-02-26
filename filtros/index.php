<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para filtrar dados</title>
</head>
<body>
    <h1>Funções para filtrar dados</h1>

    <?php
    $projetos = [
        [
         "titulo" => "Projeto 1",
         "finalizado" => false,
         "data" => "2026-10-05",
         "descricao" => "Sistema de Vendas"
 
        ],
        [
         "titulo" => "Projeto 2",
         "finalizado" => true,
         "data" => "2024-05-05",
         "descricao" => "Loja Virtual"
 
        ],
        [
        "titulo" => "Projeto 3",
        "finalizado" => true,
        "data" => "2025-04-30",
        "descricao" => "Landing Page Curso de PHP"
    
        ],
        [
        "titulo" => "Projeto 4",
        "finalizado" => false,
        "data" => "2026-03-03",
        "descricao" => "Site de loja de eletrônicos"
    
        ],
        [
        "titulo" => "Projeto 5",
        "finalizado" => true,
        "data" => "2024-12-30",
        "descricao" => "Sistema para gestão de PetShop"
    
        ],
        [
        "titulo" => "Projeto 6",
        "finalizado" => true,
        "data" => "2025-05-08",
        "descricao" => "Loja virtual de suplementos e artigos para academias"
    
       ]
        
 ]
            
    ?>

<ul>
<?php
        function filterProjetos($projetos){
           $filtrados = [];
           foreach ($projetos as $projeto){
            if($projeto["finalizado"] == true){
                $filtrados [] = $projeto;
            }
           }
           return $filtrados;
        }
    ?>

<?php foreach(filterProjetos($projetos) as $projeto){
    echo "<li> {$projeto['titulo']}  </li>";  //. para concatenar o codigo com as tags html
    echo "<li> {$projeto['data']} </li>"; 
    echo "<li> {$projeto['descricao']} </li>";
    echo "<hr>";
}

?>

</ul>
</body>
</html>