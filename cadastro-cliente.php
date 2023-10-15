<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>

<body>
    <h2>Cadastro de Cliente</h2>
    <form action="ClienteSalvar.php" method="POST">
        Nome: <input type="text" name="nome"> <br>
        Telefone: <input type="number" name="telefone"> <br>
        E-mail: <input type="text" name="email"> <br>
        Endereço: <input type="text" name="endereco"> <br>
        <input type="submit" value="Cadastrar">

    </form>
</body>

</html>