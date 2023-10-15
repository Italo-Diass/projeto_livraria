<?php
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];


    $sql = "insert into cliente (nome, telefone, email, endereco)" .  "values ('$nome', '$telefone', '$email', '$endereco')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Cliente cadastrado!";
    }else{
        echo "Erro" . $sql . 
        "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>