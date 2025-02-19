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
            background-image: url(https://th.bing.com/th/id/R.834024e9ee06e44550a6eced58598257?rik=Bsn8sgF9CCy2Kw&riu=http%3a%2f%2farmory.visualsoldiers.com%2fwp-content%2fuploads%2f2017%2f11%2fretro-palm2-min.gif&ehk=bNNbMxnhEfUmy7JX3DR7zLDk8uaBKBhBy2fArBuhSGE%3d&risl=&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;


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