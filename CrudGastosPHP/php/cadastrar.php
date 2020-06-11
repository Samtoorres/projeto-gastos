<?php
    
    $usuario = $_GET['usuario'];
    $senhas = $_GET['senha'];
    $email = $_GET['email'];
    
    $host_name = "sql10.freesqldatabase.com";
    $db_usuario = "sql10347628";
    $db_senha = "WakNl2MEWT";
    $db_name = "sql10347628";
    
    $conecta = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);
    
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