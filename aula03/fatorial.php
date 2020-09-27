<?php
    $valor = $_POST["valor"];

    $fat = 1;

    for($i = 1; $i <= $valor; $i ++){
        $fat = $fat * $i;
    }

    echo "O fatorial de $valor é $fat.";