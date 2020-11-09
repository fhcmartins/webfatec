<?php
    //Recebendo valor do formulário
    $mes = $_POST["mes"];

    switch ($mes) {
        case '1':
        case '2':
        case '3':
            echo "Primeiro Trimestre";
            break;
        
        case '4':
        case '5':
        case '6':
            echo "Segundo Trimestre";
            break;
        
        case '7':
        case '8':
        case '9':
            echo "Terceiro Trimestre";
            break;
        
        case '10':
        case '11':
        case '12':
            echo "Quarto Trimestre";
            break;
        
        default:
            echo "Digitou opção inválida";
            break;
    }