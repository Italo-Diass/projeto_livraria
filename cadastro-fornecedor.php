<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fornecedor</title>
</head>
<body>
    <h2>Cadastro de Fornecedor</h2>
    <form action="FornecedorSalvar.php" method="POST">
        Nome Fantasia: <input type="text" name="nomefantasia"> <br>
        Telefone: <input type="text" name="telefone"> <br>
        E-mail: <input type="text" name="email"> <br>
        Endereço: <input type="text" name="endereco"> <br>
        Cidade: <input type="text" name="cidade"> <br>
        Estado: <input type="text" name="estado"> <br>
        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>