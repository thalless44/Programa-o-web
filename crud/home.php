<?php
    session_start();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Home</title>
</head>
<body>

<nav> <a href="rota.php?rota=logout"> Sair </a> <br> <a href="rota.php?rota=cadastro"> CADASTRAR USUÁRIO </a> </nav>


    <h2>Lista de Usuários</h2>

    <main>
        <?php require "listarUsuarios.php" ?>

</main>


    
</body>
</html>