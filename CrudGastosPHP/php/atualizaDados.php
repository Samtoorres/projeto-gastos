<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$valor= $_POST['valor'];

$host_name = "sql308.epizy.com";
$db_usuario = "epiz_25992695";
$db_senha = "rY3hjG5EKuP";
$db_name = "epiz_25992695_phpgasto";

$conecta = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);

//Pesquisa
$sql = mysqli_query($conecta, "SELECT * FROM gastos WHERE id = '$id'");
if (mysqli_num_rows($sql) > 0) {

    //Atualiza
    $sql = "UPDATE gastos SET nome='$nome', valor='$valor' WHERE id='$id'";
    if ($conecta->query($sql) === TRUE) {
        echo "<script> 
                alert('Dados atualizados com sucesso!');
                window.location.href = '../acesso.html';
            </script>";
    }
} else {
    echo "<script> 
                alert('Erro na atualização do contato. Id não encontrado.');
                window.location.href = '../atualizaDados.html';
            </script>" . $conecta->error;
}

$conecta->close();
?>