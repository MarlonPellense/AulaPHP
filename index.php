<?php
include('conexao.php')
if(isset($_POST['usuario']) && isset($POST['senha'])){
    if(strlen(string: $_POST['usuario']) == 0){
        echo 'Usuário não informado.'; 
    } else if(strlen(string: $_POST['senha']) == 0){
        echo 'Preencha sua senha.';
    } else {
        
        $usuario = $mysqli->real_escape_string(string: $_POST['usuario']);
        $senha = $mysqli->real_escape_string(string: $_POST['senha']);
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query(query: $sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header(header: "Location: painel.php");
        } else{
            echo "Falha ao logar! E-mail ou senha incorretos.";
        }
    
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemaPHP</title>
</head>
<body>
    
</body>
</html>