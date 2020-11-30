<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do banco de dados</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3 class="h3">Listagem do Banco de Dados</h3>
    <?php
        //Tabela com o cabeçalho dos dados
        echo "<center><table border=1 bordercolor: white>";
        echo "<tr>";
        echo "<th>NOME COMPLETO</th>";
        echo "<th>TELEFONE</th>";
        echo "<th>EMAIL</th>";
        echo "<th>SENHA</th";
        echo "</tr>";

        //Conexão ao banco de dados
        $conexao = mysqli_connect('localhost','root','','projeto') or die('Erro ao conectar ao banco'.mysqli_error());
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");

        //Utilizando while para obtenção dos dados
        while ($registro = mysqli_fetch_array($resultado))
        {
            $id_usuario = $registro['id_usuario'];                                                      //alteração  para o editar
            $nome = $registro['nome'];
            $telefone = $registro['telefone'];
            $email = $registro['email'];
            $senha = $registro['senha'];
            echo "<tr>";
            echo "<td>".$nome."</td>";
            echo "<td>".$telefone."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$senha."</td>";
            echo "<tr>";
        }
        mysqli_close($conexao);
        echo "</table></center>";
    ?>

    <div class="btn">
        <a href="areaPrivada.php"><strong>Voltar</strong></a>
    </div>
</body>
</html>