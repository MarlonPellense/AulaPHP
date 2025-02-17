<?php
$usuario = 'root';
$senha = '';
$database = 'sistema';
$host = 'localhost';

$mysqli = new mysqli(hostname: $host, username: $usuario, password: $senha, database: $database);

if (mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
