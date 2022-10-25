<?php
    require 'config.php';
    include 'artigos.php';
    $artigo1 = new artigo1();
    $artigo1 =  
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach ($artigo1 as $artigo1) { ?>
        <h2>
        <a href= <?php echo $artigo1['link']?>>
            <?php echo $artigo1['titulo']?>
        </a>
        </h2>
        <p>
        <?php echo $artigo1['conteudo']?>
        </p>  
    
       <?php } ?>
        
</body>

</html>