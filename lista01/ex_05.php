<?php
    //Recebendo o valor do formulário
    $lado = $_POST["lado"];

    //Calculando a área do quadrado
    $expoente = 2;
    $area = pow($lado, $expoente);
    $dobro = $area * 2;

    //Resultado
    echo "A área do quadrado é $area.<br><br>";
    echo "O dobro da área é $dobro";