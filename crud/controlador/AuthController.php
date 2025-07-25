<?php

include_once __DIR__.'./../modelo/Conexao.php';
include_once __DIR__.'./../modelo/Usuario.php';
include_once __DIR__.'./../modelo/UsuarioDAO.php';

 class AuthController{

    public function login(){

    $dao = new UsuarioDAO();

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = $dao->autenticar($email,$senha);
   
        if(isset($usuario)){
            $_SESSION['usuario']=$usuario->id;
            header("Location:rota.php?rota=home");
        }
        else{
            header("Location:rota.php");
        }
    }
        else{
            header("Location:rota.php");
        }
    }
}

?>