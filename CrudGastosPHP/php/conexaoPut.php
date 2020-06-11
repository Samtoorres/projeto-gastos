<?php

$nome = $_POST['name'];
$valor = $_POST['valorG'];

$host_name = "sql10.freesqldatabase.com";
$db_usuario = "sql10347628";
$db_senha = "WakNl2MEWT";
$db_name = "sql10347628";

$conn = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);

$result_usuario = "INSERT INTO gastos(nome,valor)
VALUES ('$nome', '$valor')";
if ($conn->query($result_usuario) === TRUE) {
    echo "<script>
                alert('cadastrado com sucesso');
                window.location.href = '../putValor.html';
              </script>";
}else {
    echo "Erro: " . $result_usuario . "<br>" . $conn->error . "<br>";
}

$conn->close();

?>