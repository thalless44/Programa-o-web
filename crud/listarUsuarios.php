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
<?php

$dao = new UsuarioDAO();
$lista = $dao->lista_todos();

foreach($lista as $usuario){
    echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> NOME </th>";
        echo "<th> EMAIL </th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . $usuario->id . "</td>";
        echo "<td>" . $usuario->nome . "</td>";
        echo "<td>" . $usuario->email . "</td>";
        echo "</tr>";

}

?>

</table>