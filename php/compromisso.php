<?php
    
    include_once 'config.php';

    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $descricao = $_POST['descricao'];


    $smtp = $conn->prepare("INSERT INTO compromissos (titulo, data, hora, descricao) VALUES (?, ?, ?, ?)");
    $smtp->bind_param("ssss", $titulo, $data, $hora, $descricao);

    if($smtp->execute()) {
        header('location: ../php/dashboard.php');
    } else {
        echo "Erro ao Adicionar: " .$smtp->error;
    };

    $smtp->close();
    $conn->close();



?>