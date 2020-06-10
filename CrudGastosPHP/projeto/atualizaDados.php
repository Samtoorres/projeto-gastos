<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$valor= $_POST['valor'];

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$banco = "phpprojetov2";
// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $banco);

//Pesquisa
$sql = mysqli_query($conecta, "SELECT * FROM gastos WHERE id = '$id'");
if (mysqli_num_rows($sql) > 0) {

    //Atualiza
    $sql = "UPDATE gastos SET nome='$nome', valor='$valor' WHERE id='$id'";
    if ($conecta->query($sql) === TRUE) {
        echo "<script> 
                alert('Dados atualizados com sucesso!');
                window.location.href = 'acesso.html';
            </script>";
    }
} else {
    echo "<script> 
                alert('Erro na atualização do contato. Id não encontrado.');
                window.location.href = 'atualizaDados.html';
            </script>" . $conecta->error;
}

$conecta->close();
?>