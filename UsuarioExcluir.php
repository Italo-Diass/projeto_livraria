<?php

    include_once 'conexao.php';

    $idusuario = $_GET['idusuario'];

    $sql = "delete from usuario where idusuario = '$idusuario' ";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário excluído";
    }else{
        echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>