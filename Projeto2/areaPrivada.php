<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto de conclusão de curso</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1 class="h1">Seja Bem Vindo(a)!</h1><br/>
    <br/>
    <br/>
    <br/>
    <form name="consulta" action="consulta.php" method="POST">
         <center><input type="submit" name="consulta-completa" value="Exibir Listagem"></center><br/>
    </form>
    <a href="cadastrar.php"><center><input type="submit" name="cadastrar-novo" value="Cadastrar Usuário(a)"></center><br/></a>
        
    
        <div class="btn">
            <a href="sair.php"><strong>Sair</strong></a>
        </div>

</body>
</html>
