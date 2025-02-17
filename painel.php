<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        body{
            background-image: url(https://kajabi-storefronts-production.global.ssl.fastly.net/kajabi-storefronts-production/themes/1015903/settings_images/8SaFOfpQwOrjEbfBAQZV_ezgif.com-optimize.gif)



        }
    </style>
</head>
<body>
    <p>
        Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.
    </p>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>