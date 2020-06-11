<?php
    session_start();//Inicia uma nova sessão ou resume uma sessão existente
    
    $usuario=$_GET['usuario'];//obtém o login digitado
    $senha=$_GET['senha'];//obtém a senha digitada
    
    //dados de acesso ao banco
    $host_name = "sql10.freesqldatabase.com";
    $db_usuario = "sql10347628";
    $db_senha = "WakNl2MEWT";
    $db_name = "sql10347628";
    
    $conn = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);
    //verificação de login e senha estão corretos
    $tenta_achar = "SELECT * FROM usuario WHERE email='$usuario' AND senha='$senha'" ;
    $resultado = $conn->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $usuario;
        $_SESSION['senha'] = $senha;
        echo "<script>
                alert('Logado com sucesso!');
                window.location.href = '../acesso.html';
            </script>";
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = '../index.html';
            </script>";
      }
    
?>
