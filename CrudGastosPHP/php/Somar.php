<?php

$host_name = "sql308.epizy.com";
$db_usuario = "epiz_25992695";
$db_senha = "rY3hjG5EKuP";
$db_name = "epiz_25992695_phpgasto";

$conectar = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);

$buscar = mysqli_query($conectar,"SELECT SUM(valor) AS Soma FROM gastos");

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
                        <h2 class="form-heading text-center">Soma dos Gastos</h2>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Total dos gastos a pagar</th>
                                </tr>
                        </thead>
                        <tbody>
                             <?php while ($dado = mysqli_fetch_assoc($buscar)) {?>
                                <tr>
                                    <td><?php echo "R$ = ".$dado['Soma']?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                        </table>
                        <a href="../acesso.html"><button type="button" class="btn btn-lg btn-danger btn-block" value="Cancelar" onclick="redirecionamento();">Voltar</button></a>
                    </form>
	            </div>
            </div>
        </div>
        <script src="../bootstrap-4.5.0-dist/js/jquery-3.4.1.min.js"></script>
        <script src="../https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="../bootstrap-4.5.0-dist/js/javascriptsistema.js"></script>
    </body>
</html>