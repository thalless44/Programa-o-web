<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="rota.php?rota=autenticacao" method="post">
        <label for="email" > login </label>
        <input type="email" id="email" name="email">

        <label for="senha" > senha </label>
        <input type="senha" id="senha" name="senha">

        <input type="submit" value="autenticar">




    </form>
    <form action="rota.php?rota=cadastro" method="post">

        <input type="submit" value="cadastro">
    </form> 

</body>
</html>