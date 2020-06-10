<?php

    $id = $_POST['iD'];

    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $banco = "phpprojetov2";

    // Criar conexão
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $banco);
    
    // apagar registro
    $sql = "DELETE FROM gastos WHERE id ='$id'";
    $result = mysqli_query($conecta, $sql);

    if (mysqli_affected_rows($conecta)) {
        echo "<script>
            alert('Contato excluído com sucesso!');
            window.location.href = 'acesso.html';   
        </script>";
    } 
    else {
        echo  
            "<script>
                alert('Erro ao excluir Contato. Id não encontrado.');
                window.location.href = 'excluirContato.html';
            </script>";
    }
    
    mysqli_close($conecta);
?>