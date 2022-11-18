<?php 
    @session_start();
    require_once("../conexao.php"); 
    echo @$_SESSION['nomeUsuaro'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?=$nomeSistema?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
        

    </body>
</html>