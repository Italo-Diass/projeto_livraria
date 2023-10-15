<?php

    include_once 'conexao.php';

    $idfornecedor = $_GET['idfornecedor'];

    $sql = "delete from fornecedor where idfornecedor = '$idfornecedor' ";

    if(mysqli_query($conexao, $sql)){
        echo "Fornecedor excluído";
    }else{
        echo "Erro: " .$sql. "<br>" . mysqli_error($conexao);
    }

    $conexao->close();

?>