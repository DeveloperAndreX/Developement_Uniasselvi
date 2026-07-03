<?php
// Arquivo de conexão com o banco de dados;
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect(
    $hostname, $user, $password, $database
);

if(!$conexao) {
    print("Falha na conexão com o banco de Dados").mysqli_connect_errno().mysqli_connect_error();

}

?>