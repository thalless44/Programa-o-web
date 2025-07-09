<?php

include_once __DIR__.'./modelo/Conexao.php';
include_once __DIR__.'./modelo/Usuario.php';
include_once __DIR__.'./modelo/UsuarioDAO.php';
include_once __DIR__.'./controlador/AuthController.php';

//session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:rota.php");

}

?>

<table>
    <tr>
        <th> ID </th>
        <th> NOME </th>
        <th> EMAIL </th>
    </tr>


<?php

$dao = new UsuarioDAO();
$lista = $dao->lista_todos();

foreach($lista as $usuario){
    echo $usuario->id;
    echo $usuario->nome;
    echo $usuario->email;

}

?>

</table>