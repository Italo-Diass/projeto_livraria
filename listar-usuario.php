<?php 

    include_once 'conexao.php';

    $sql = "select * from usuario";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        echo "<table border='1'>
                <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
                <td></td>
                </tr>";

        while($row = mysqli_fetch_assoc($resultado)){
            $idusuario = $row['idusuario'];
            $nome = $row['nome'];
            $email = $row['email'];

            echo "<tr>
            
                    <td>$idusuario</td>
                    <td>$nome</td>
                    <td>$email</td>
                    <td><a href='UsuarioExcluir.php?idusuario=$idusuario'>Excluir</a></td>
            </tr>";
        }

        echo "</table>";

        $conexao->close();

    }else{
        echo "Nenhum usuário cadastrado!";
    }

?>