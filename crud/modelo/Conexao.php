<?php 
 class Conexao{
    public static function getConexao(){
        //mysqli__connect("localhost","usurio","senha","bd");

        //Classe PDO conection  $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
       
        return  new PDO('mysql:host=localhost;dbname=crud',"root","admin", 
            [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

 }