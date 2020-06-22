 <?php

$email = $_GET['usuario'];
$senhas = $_GET['senha'];

$host_name = "sql308.epizy.com";
$db_usuario = "epiz_25992695";
$db_senha = "rY3hjG5EKuP";
$db_name = "epiz_25992695_phpgasto";

$conn = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);


    $tenta_achar = "SELECT * FROM usuario WHERE email='$email' AND senha='$senhas'" ;
    $resultado = $conn->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senhas;
        header('location:../acesso.html');//redireciona para a página de acesso');
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = '../index.html';
            </script>";
      }
      $conn->close();
?>
