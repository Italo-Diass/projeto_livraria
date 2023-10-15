<?php
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "insert into usuario (nome, email, senha)" .  "values ('$nome', '$email', '$senha')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado!";
    }else{
        echo "Erro" . $sql . 
        "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>