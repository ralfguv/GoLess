<?php

//pegando dados do formulario
$name = $_POST['name'];
$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

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

$smtp = $conn->prepare("INSERT INTO cadastro_goless (name, razao, cnpj, email, password, password_confirm, data, hora) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$smtp->bind_param("ssssss", $nome, $razao, $cnpj, $email, $password, $password_confirm, $data_atual, $hora_atual);

if($smtp->execute()) {
    echo "Cadastro Efetuado com Sucesso";
} else{
    echo "erro no envio da mensagem: ".$smtp->error;
};

$smtp->close();
$conn->close();

?>