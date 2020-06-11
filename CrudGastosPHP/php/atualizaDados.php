<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$valor= $_POST['valor'];

$host_name = "sql10.freesqldatabase.com";
$db_usuario = "sql10347628";
$db_senha = "WakNl2MEWT";
$db_name = "sql10347628";

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