<?php
    include_once 'config.php';
    include_once 'dashboard.php';

    $horatd1 = $horatd + 1;

    $dados = "SELECT * FROM compromissos WHERE hora>=$horatd and hora<$horatd1 LIMIT 20";
    $result_dados = $conn->query($dados);

?>