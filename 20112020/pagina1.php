<?php
    $b = setcookie('nome','Fábrica de Software');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies, pagina 1</title>
</head>
<body> <?php
    if($b)
        echo "Cookie enviado com sucesso";
    else
        echo "Erro ao enviar o cookie.";
        ?>
</body>
</html>