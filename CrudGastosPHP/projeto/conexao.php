 <?php

$usuario = $_GET['usuario'];
$senhas = $_GET['senha'];

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "phpprojeto";

// Criar conexão
$conn = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);


    $tenta_achar = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senhas'" ;
    $resultado = $conn->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senhas;
        header('location:acesso.html');//redireciona para a página de acesso');
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.html';
            </script>";
      }
      $conn->close();
?>
