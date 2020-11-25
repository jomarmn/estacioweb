<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies, página 2</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['nome']))
            echo "Seu nome é $_COOKIE[nome].";
        else
            echo "Eu não sei o seu nome.";
    ?>
</body>
</html>