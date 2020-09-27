<?php
    //var_dump ($_POST);
    //Recebendo valores do formulário
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $sinal = $_POST["sinal"];

    $sinal;
    
    if(($valor1 > 0) && ($valor1 > $valor2)){
       
        switch ($sinal) {
        case '+':
            echo "$valor1 + $valor2 = " . ($valor1 + $valor2) . "<br>";
            //echo "$valor1 + $valor2 = " . $valor1 + $valor2 . "<br>";
            break;
            
        case '-':
            echo "$valor1 - $valor2 = " . ($valor1 - $valor2) . "<br>";
            break;
            
        case '*':
            echo "$valor1 x $valor2 = " . ($valor1 * $valor2) . "<br>";
            break;

        case '/':
            echo "$valor1 / $valor2 = " . ($valor1 / $valor2) . "<br>";
            break;
            
        default:
            echo "Valores incorretos. Tente novamente";
            break;
        } 
        
    }
    echo "Valores incorretos. Tente novamente";