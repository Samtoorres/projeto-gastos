<?php

$nome = $_POST['name'];
$valor = $_POST['valorG'];

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "phpprojetov2";

$conn = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);

$result_usuario = "INSERT INTO gastos(nome,valor)
VALUES ('$nome', '$valor')";
if ($conn->query($result_usuario) === TRUE) {
    echo "<script>
                alert('cadastrado com sucesso');
                window.location.href = 'putNumero.html';
              </script>";
}else {
    echo "Erro: " . $result_usuario . "<br>" . $conn->error . "<br>";
}

$conn->close();

?>