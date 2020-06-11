<?php

    $id = $_POST['iD'];

    $host_name = "sql10.freesqldatabase.com";
    $db_usuario = "sql10347628";
    $db_senha = "WakNl2MEWT";
    $db_name = "sql10347628";
    
    $conecta = mysqli_connect($host_name,$db_usuario,$db_senha,$db_name);
    
    // apagar registro
    $sql = "DELETE FROM gastos WHERE id ='$id'";
    $result = mysqli_query($conecta, $sql);

    if (mysqli_affected_rows($conecta)) {
        echo "<script>
            alert('Contato excluído com sucesso!');
            window.location.href = '../acesso.html';   
        </script>";
    } 
    else {
        echo  
            "<script>
                alert('Erro ao excluir Contato. Id não encontrado.');
                window.location.href = '../excluirContato.html';
            </script>";
    }
    
    mysqli_close($conecta);
?>