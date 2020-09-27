<?php
    //Recebendo o valor do formulário
    $valor = $_POST["numero"];

    //Escolhendo o dia da semana
    switch ($valor) {
        case '1':
            echo "O dia é Domingo.";
            break;
        
        case '2':
            echo "O dia é Segunda.";
            break;

        case '3':
            echo "O dia é Terça.";
            break;

        case '4':
            echo "O dia é Quarta.";
            break;

        case '5':
            echo "O dia é Quinta.";
            break;

        case '6':
            echo "O dia é Sexta.";
            break;
        
        case '7':
            echo "O dia é Sábado.";
            break;

        default:
            echo "Opção digitada inválida.";
            break;
    }