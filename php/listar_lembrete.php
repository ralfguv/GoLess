<?php
    include_once 'config.php';


    $dados = "SELECT * FROM lembretes LIMIT 07";
    $result_dados = $conn->query($dados);

?>