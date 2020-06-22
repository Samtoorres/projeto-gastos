<?php

$nome = $_POST['name'];
$valor = $_POST['valorG'];

$host_name = "sql308.epizy.com";
$db_usuario = "epiz_25992695";
$db_senha = "rY3hjG5EKuP";
$db_name = "epiz_25992695_phpgasto";

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