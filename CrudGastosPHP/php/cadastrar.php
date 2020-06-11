<?php
    
    $usuario = $_GET['usuario'];
    $senhas = $_GET['senha'];
    $email = $_GET['email'];
    
    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $nome_banco = "phpprojetov2";

  // Criar conexão
  $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
    
  $sql = "INSERT INTO usuario (usuario, email, senha)
       VALUES ('$usuario', '$email', '$senhas')";
  
  if ($conecta->query($sql) === TRUE) {
      echo "<script>
              alert('cadastrado com sucesso');
              window.location.href = '../index.html';
            </script>";
          
  } else {
      echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
  }
  $conecta->close();
?>