<?php
include_once("conexao.php");

$sql_select = "SELECT * FROM usuarios";
$sql_consulta = mysqli_query($conexao, $sql_select);
$records = mysqli_num_rows($sql_consulta);


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Consultas</title>
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
                    <h1 class="title-1">Consultas</h1>
                    <hr><br><br>

                    <form method="get" action="">
                        Filtrar por Profissão: <input type="text" name="filtro" class="campo" placeholder="Pesquise" required autofocus>
                        <input type="submit" value="pesquisar" class="btn">
                    </form>
                    <?php
                    print("Registros encontrados N° $records ")."<br>";
                  

                    ?>

                    
                </section>
                <footer id="rodape"><h3 id="titleh3">Universidade Leonardo da Vinci - 2026 Todos os Direitos Reservados</h3></footer>
        </div>
        
    </body>
</html>