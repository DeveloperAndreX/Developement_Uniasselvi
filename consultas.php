<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql_select = "SELECT * FROM usuarios where profissao like '%$filtro%'order by nome";
$sql_consulta = mysqli_query($conexao, $sql_select);
$records = mysqli_num_rows($sql_consulta);




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
                        Filtrar por Profissão: <input id="placeholder1" type="text" name="filtro" class="campo" placeholder="Pesquise" required autofocus>
                        <input type="submit" value="Pesquisar" class="btn">
                    </form>
                    <?php
                    print "Resultado da Pesquisa com a palavra <strong> $filtro </strong><br><br>";
                    
                    print "Registros encontrados N° $records "."<br>";

                    print("<br><br>");

                    while($exibirRegistros = mysqli_fetch_array($sql_consulta)){

                      $codigo = $exibirRegistros[0];
                      $nome = $exibirRegistros[1];
                      $email = $exibirRegistros[2];
                      $profissao = $exibirRegistros[3];

                      print "<article>";

                       print "$codigo<br>";
                       print "$nome  <br>";  
                       print "$email <br>";
                       print "$profissao";

                      print "</article>";
        


                    };

                 mysqli_close($conexao);
                  

                    ?>

                    
                </section>
                <footer id="rodape"><h3 id="titleh3">Universidade Leonardo da Vinci - 2026 Todos os Direitos Reservados</h3></footer>
        </div>
        
    </body>
</html>