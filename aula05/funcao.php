<?php

    //Funcao
    function mensagem_acerto(){

        echo "***** TAREFA EXECUTADA COM SUCESSO! ***** <br>";

    }

    function mensagem_erro(){

        echo "***** ERRO NA EXECUÇÃO DA TAREFA! ***** <br>";

    }

    $voto = $_POST["voto"];

    switch ($voto) {
        case '1':
            echo "Você votou no CANDIDATO 1 <br>";
            mensagem_acerto();
            break;
        
        case '2':
            echo "Você votou no CANDIATO 2 <br>";
            mensagem_acerto();
            break;
        
        case '3':
            echo "Você votou no CANDIDATO 3 <br>";
            mensagem_acerto();
            break;

        default:
            mensagem_erro();
            break;
    }