<?php

    echo "<h2>Resposta do Exercício</h2>";

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    $result = $valor1 * $valor2;

    echo 'O resultado é '. $result;
    
?>