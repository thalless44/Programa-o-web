<?php

include_once __DIR__.'./modelo/Conexao.php';
include_once __DIR__.'./modelo/Usuario.php';
include_once __DIR__.'./modelo/UsuarioDAO.php';
include_once __DIR__.'./modelo/UsuarioDAO.php';
include_once __DIR__.'./controlador/AuthController.php';
include_once __DIR__.'./controlador/CadastroController.php';
session_start();


if(isset($_GET['rota'])){
    $rota = $_GET['rota'];
}else{
    $rota="login";
}

switch($rota){
    case 'login':

        if(isset($_SESSION['usuario'])){
            header("Location:home.php");
        }
        require "login.php";
        break;

    case 'autenticacao':
        $aut = new AuthController();
        $aut->login();
        break;
    
    case 'cadastro':
        $cadastro = new CadastroController();
        if (!empty($_POST)) {
            header("Location:login.php");
            break;
        }  $cadastro->cadastro();
        header("Location:cadastroUsuario.php");
        break;

        

    case 'home':
        header("Location:home.php");
        break;

    case 'logout':
            session_destroy();

            header("Location:rota.php");
            break;


    default:
    echo "rota desconhecida";
}

?>