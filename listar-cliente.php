<?php 

    include_once 'conexao.php';

    $sql = "select * from cliente";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        echo "<table border='1'>
                <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Endereço</td> 
                <td></td>
                </tr>";

        while($row = mysqli_fetch_assoc($resultado)){
            $idcliente = $row['idcliente'];
            $nome = $row['nome'];
            $telefone = $row['telefone'];
            $email = $row['email'];
            $endereco = $row['endereco'];


            echo "<tr>
            
                    <td>$idcliente</td>
                    <td>$nome</td>
                    <td>$telefone</td>
                    <td>$email</td>
                    <td>$endereco</td>
                    <td><a href='ClienteExcluir.php?idcliente=$idcliente'>Excluir</a></td>
            </tr>";
        }

        echo "</table>";

        $conexao->close();

    }else{
        echo "Nenhum cliente cadastrado!";
    }

?>