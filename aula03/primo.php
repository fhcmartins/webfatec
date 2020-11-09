<?php

    $valor = $_POST["valor"];

    $quant_resto = 0;

    for($i = 1; $i <= $valor; $i++){
        
        $resto = $valor % $i;

        if($resto == 0){
            $quant_resto = $quant_resto + 1;
        }
    }

    if($quant_resto > 2){
        echo 'Valor não é primo';
    }
    else{
        echo 'Valor é primo!';
    }