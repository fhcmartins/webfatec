<?php
    //Recebendo o valor para ser calculado
    $valor = $_POST["valor"];

    //Convertendo metros para centímetros
    $convert = $valor * 100;

    //resultado
    echo "$valor metros(s) corresponde(m) à $convert centímetros.";