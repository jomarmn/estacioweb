<?php
    $b = setcookie('nome','Fabrica de Software');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies, página 2</title>
</head>
<body>
<?php
        if(isset($_COOKIE['contador'])){
            setcookie('contador',($_COOKIE['contador']+1));
        }
        else{
            setcookie('contador',1);
        }

        echo "Você visitou essa página ".$_COOKIE['contador']. " Vezes";
    ?>
</body>
</html>