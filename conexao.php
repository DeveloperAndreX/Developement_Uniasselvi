<?php
// arquivo de conexão com o banco de dados

$hostname = "localhost";
$user = "root";
$password = "root";
$dbname = "cadastro";
$port = "3307";

$conexao = mysqli_connect($hostname, $user, $password, $dbname, $port);

if(!$conexao) {
   mysqli_connect_errno() . mysqli_connect_error() .  print("Falha na conexãao com o banco de Dados");
   }
    
?>