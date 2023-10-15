<?php 

    include_once 'conexao.php';

    $sql = "select * from fornecedor";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        echo "<table border='1'>
                <tr>
                <td>ID</td>
                <td>Nome Fantasia</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Endereço</td>
                <td>Cidade</td> 
                <td>Estado</td>
                <td></td>
                </tr>";

        while($row = mysqli_fetch_assoc($resultado)){
            $idfornecedor = $row['idfornecedor'];
            $nomefantasia = $row['nomefantasia'];
            $telefone = $row['telefone'];
            $email = $row['email'];
            $endereco = $row['endereco'];
            $cidade = $row['cidade'];
            $estado = $row['estado'];


            echo "<tr>
            
                    <td>$idfornecedor</td>
                    <td>$nomefantasia</td>
                    <td>$telefone</td>
                    <td>$email</td>
                    <td>$endereco</td>
                    <td>$cidade</td>
                    <td>$estado</td>
                    <td><a href='FornecedorExcluir.php?idfornecedor=$idfornecedor'>Excluir</a></td>
            
            </tr>";
        }

        echo "</table>";

        $conexao->close();

    }else{
        echo "Nenhum fornecedor cadastrado!";
    }

?>