<?php

   

    require_once 'config.php';


    $lembrete = $_POST['lembrete'];
    $data_atual = date('d/m/Y');
    $hora_atual = date('H:i:s');

        $smtp = $conn->prepare("INSERT INTO lembretes (lembrete, data, hora) VALUES (?, ?, ?)");
        $smtp->bind_param("sss", $lembrete, $data_atual, $hora_atual);
    
        if($smtp->execute()) {
            header('location: ../php/dashboard.php#tabela-notas');
        } else {
            echo "Erro ao Adicionar: " .$smtp->error;
        };
    
        $smtp->close();
        $conn->close();

?>