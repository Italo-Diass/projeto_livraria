<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "123456";
    $database = "livraria";
    $conexao = new mysqli(
        $servidor,
        $usuario,
        $senha,
        $database
    );
    if ($conexao->connect_error){
        die("Conexão Falhou: " . $conexao->connect_error ); 
    }
   // echo "Conexão feita com sucesso!";

?>

