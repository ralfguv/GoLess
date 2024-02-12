<?php

require_once 'config.php';


//pegando dados do formulario
$nome = $_POST['nome'];
$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirma_senha = $_POST['password-confirm'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');


//verificar se cadastro ja existe usando o campo CNPJ

//if($cnpj===$_POST['cnpj']) {
//    header('Location: ../views/register.html');
//    die("Cadastro já existe");
//    echo "<script>alert('Cadastro já existe');</script>";
//}


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