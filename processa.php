<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "INSERT INTO usuarios(nome,email,profissao) VALUES ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$row = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="css/style_sheets.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consultas</li></a>
                </ul>
            </nav>
                <section>
                    <h1 class="title-1">Confirmação de Cadastro</h1>
                    <hr><br><br>
                    <?php
                    if($row == 1){
                        print("Cadastro Efetuado com Sucesso!");

                    }else{
                        print("Cadastro não Efetuado. <br> ja existe um usuario com este e-mail");
                    }
                    ?>
                 </section>
                <footer id="rodape"><h3 id="titleh3">Universidade Leonardo da Vinci - 2026 Todos os Direitos Reservados</h3></footer>
        </div>
        
    </body>
</html>