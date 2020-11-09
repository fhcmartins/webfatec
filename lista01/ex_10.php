<?php
    //Recebendo o valor do formulário
    $h = $_POST["altura"];

    //Calculos
    //Atura para homens
    $pesoH = (72.7 * $h) - 58;
    $pesoM = (62.1 * $h) - 44.7;

    echo "Se você for Homem seu peso ideal é $pesoH kg, se for mulher seu peso ideal é $pesoM kg.";