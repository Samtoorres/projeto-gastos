<?php
    session_start();//Inicia uma nova sessão ou resume uma sessão existente
    
    $usuario=$_GET['usuario'];//obtém o login digitado
    $senha=$_GET['senha'];//obtém a senha digitada
    
    //dados de acesso ao banco
    $local="localhost";
    $usuario_BD="root";
    $senha_BD="";
    $base="phpprojetov2";
    
    $conn = new mysqli($local, $usuario_BD, $senha_BD,$base);
    //verificação de login e senha estão corretos
    $tenta_achar = "SELECT * FROM usuario WHERE email='$usuario' AND senha='$senha'" ;
    $resultado = $conn->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['email'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:acesso.html');//redireciona para a página de acesso
    }
    else{
        session_unset();//remove todas as variáveis de sessão
        session_destroy();//destroi a sessão
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.html';
            </script>";
      }
    
?>
