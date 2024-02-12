<?php


//configurações de credenciais
$server = 'localhost';
$user = 'root';
$key = '';
$banco = 'goless_register';
$tabela = 'cadastro_goless';

//iniciando conexao com o banco de dados

$conn = new mysqli($server, $user, $key, $banco);

//verificar conexao
if($conn ->connect_error) {
    die("Falha ao se conectar com o banco de dados: ".$conn->connect_error);
}


?>