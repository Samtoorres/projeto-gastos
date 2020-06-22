<?php

    $id = $_POST['iD'];

    $host_name = "sql308.epizy.com";
    $db_usuario = "epiz_25992695";
    $db_senha = "rY3hjG5EKuP";
    $db_name = "epiz_25992695_phpgasto";
    
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
                alert('Erro ao excluir gasto. Id não encontrado.');
                window.location.href = '../excluirDespesa.html';
            </script>";
    }
    
    mysqli_close($conecta);
?>