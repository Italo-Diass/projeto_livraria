<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
<body>
    <h2>Cadastro de Usuario</h2>
    <form action="UsuarioSalvar.php" method="POST">
        Nome: <input type="text" name="nome"> <br>
        E-mail: <input type="text" name="email"> <br>
        Senha: <input type="password" name="senha"> <br>
        <input type="submit" value="Cadastrar">

    </form>
</body>
</html> 