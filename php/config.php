<?php


//configurações de credenciais
$server = 'localhost';
$user = 'root';
$key = '';
$port = 3306;
$banco = 'goless_register';
$tabela = 'cadastro_goless';

//iniciando conexao com o banco de dados

//try{
//    $conn = new PDO("mysql:host=$server; port=$port;dbname=" . $banco, $user, $key,);
//        echo"";
//    } 
    //verificar conexao
//    catch(PDOException $err){
//        echo ("Falha ao se conectar com o banco de dados: ".$err->getMessage());


$conn = new mysqli($server, $user, $key, $banco);

//verificar conexao
if($conn ->connect_error) {
    die("Falha ao se conectar com o banco de dados: ".$conn->connect_error);
}


?>