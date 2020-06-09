<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$numero = $_POST['numero'];

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$banco = "phpprojeto";
// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $banco);

//Pesquisa
$sql = mysqli_query($conecta, "SELECT * FROM numerot WHERE id = '$id'");
if (mysqli_num_rows($sql) > 0) {

    //Atualiza
    $sql = "UPDATE numerot SET nome='$nome', numero='$numero' WHERE id='$id'";
    if ($conecta->query($sql) === TRUE) {
        echo "<script> 
                alert('Dados atualizados com sucesso!');
                window.location.href = 'acesso.php';
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