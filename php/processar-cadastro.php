<?php

if (empty($_POST['name'])) {
    $errors['name'] = 'Name required';
}

//pegando dados do formulario
$nome = $_POST['nome'];
$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirma_senha = $_POST['password-confirm'];
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

$smtp = $conn->prepare("INSERT INTO cadastro_goless (nome, razao, cnpj, email, password, data, hora) VALUES (?, ?, ?, ?, ?, ?, ?)");
$smtp->bind_param("sssssss", $nome, $razao, $cnpj, $email, $password, $data_atual, $hora_atual);

if($smtp->execute()) {
    header('Location: ../views/login.html');
    echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
} else{
    echo "erro no envio da mensagem: ".$smtp->error;
};

$smtp->close();
$conn->close();

?>