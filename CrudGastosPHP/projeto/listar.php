<?php

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "phpprojeto";

$conectar = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);
$buscar = mysqli_query($conectar,"SELECT * FROM numerot")or die(mysql_error);

$conectar->close();
?>
<html>

<!DOCTYPE html>
<html>
    <head>   
        <title>Lista</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/css/style.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/css/style.css">
        <link rel="shortcut icon" href="bootstrap/img/favicon.ico" sizes="16x16">
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form class="formulario" method="GET" action="conexao.php">
                        <h2 class="form-heading text-center">Lista de Gastos</h2>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">nome</th>
                            <th scope="col">valor do gasto</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php while ($dado = $buscar->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $dado["id"] ?></td>
                                    <td><?php echo $dado["nome"] ?></td>
                                    <td><?php echo $dado["numero"] ?></td>
                                </tr>
                                <?php }?>
                        
                        </tbody>
                        </table>
                        <a href="acesso.html"><button type="button" class="btn btn-lg btn-danger btn-block" value="Cancelar" onclick="redirecionamento();">Voltar</button></a>
                    </form>
	            </div>
            </div>
        </div>
        <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="bootstrap/js/javascriptsistema.js"></script>
    </body>
</html>