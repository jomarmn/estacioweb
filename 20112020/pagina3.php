<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['visitas']))
            $_SESSION['visitas'] = 0;
    ?>
    Está é a sua visita número
    <?php echo $_SESSION['visitas']++ ?>.
</body>
</html>