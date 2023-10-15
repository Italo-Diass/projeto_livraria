<?php

    include_once 'conexao.php';

    $idcliente = $_GET['idcliente'];

    $sql = "delete from cliente where idcliente = '$idcliente' ";

    if(mysqli_query($conexao, $sql)){
        echo "Cliente excluído";
    }else{
        echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>