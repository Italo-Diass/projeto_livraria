<?php
    include_once 'conexao.php';

    $nomefantasia = $_POST['nomefantasia'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


    $sql = "insert into fornecedor (nomefantasia, telefone, email, endereco, cidade, estado)" .  "values ('$nomefantasia', '$telefone', '$email', '$endereco', '$cidade', '$estado')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Fornecedor cadastrado!";
    }else{
        echo "Erro" . $sql . 
        "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>