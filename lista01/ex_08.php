<?php
    //Recebendo o valor da variável
    $valor = $_POST["valor"];

    if($valor < 10){
        echo "O número digitado é menor que 10.";
    }
    else{
        echo "O número digitado é maior que 10.";
    }