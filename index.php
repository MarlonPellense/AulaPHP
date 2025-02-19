<?php #Adicionar botão de e-mail
include('conexao.php');
if(isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['email'])) {

    if(strlen($_POST['usuario']) == 0) {
        echo "Usuario não informado";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' AND email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: painel.php");
        } else {
            echo "Falha ao logar! E-mail, nome ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(https://th.bing.com/th/id/R.834024e9ee06e44550a6eced58598257?rik=Bsn8sgF9CCy2Kw&riu=http%3a%2f%2farmory.visualsoldiers.com%2fwp-content%2fuploads%2f2017%2f11%2fretro-palm2-min.gif&ehk=bNNbMxnhEfUmy7JX3DR7zLDk8uaBKBhBy2fArBuhSGE%3d&risl=&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
        }
        .tela-login{
            background-color: rgba(116, 14, 23, 0.62);
            position:absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 20px;
            color: whitesmoke;
        }

        input{
            background-color: rgba(148, 48, 110, 0.2);
            padding: 16px;
            border: none;
            outline: none;
            font-size: 18px;
            color: #D5404A;
            border-radius: 20px;
        }
        button{
            background-color: rgba(148, 48, 110, 0.8);
            border: none;
            outline: none;
            padding: 16px;
            width: 100%;
            border-radius: 12px;
            color: white;
            font-size: 20px;
        }
        button:hover{
            background-color: rgba(114, 29, 86, 0.8);
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="tela-login">
    <h1>Login</h1>
    <form action="" method="POST">
        <br>
            <input type="text" name="usuario" placeholder="Usuário">
            <br><br>      
            <input type="password" name="senha" placeholder="Senha">
            <br><br>   
            <input type="text" name="email" placeholder="E-mail">
            <br><br>   
            <button type="submit">Entrar</button>
    </form>
    </div>
</body>
</html>