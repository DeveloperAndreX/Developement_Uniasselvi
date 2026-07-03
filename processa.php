<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

mysqli_close($conexao);



?>