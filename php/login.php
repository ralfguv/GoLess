<?php

    include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email'])== 0) {
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha'])== 0) {
        echo "Preencha sua senha";
    }else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastro_goless WHERE email = '$email' and password = '$senha' ";
        $sql_query = $conn->query($sql_code) or die("Falha na Execução do Codigo SQL: " . $mysqli->error); 
        
        $quantidade = $sql_query-> num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("location: ../views/dashboard.html");

        } else {

            header("location: ../views/login.html");
            $mensagem = '<label id="erroruser">E-mail ou Senha Incorretos!!!</label>';
            //inserir script para mostrar label de usuarios de senha incorretos na pagina de login
        }
    }
}
?>