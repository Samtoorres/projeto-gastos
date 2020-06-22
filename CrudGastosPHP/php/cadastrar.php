<?php
    
    $usuario = $_GET['usuario'];
    $senhas = $_GET['senha'];
    $email = $_GET['email'];
    
    $host_name = "sql308.epizy.com";
    $db_usuario = "epiz_25992695";
    $db_senha = "rY3hjG5EKuP";
    $db_name = "epiz_25992695_phpgasto";
    
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