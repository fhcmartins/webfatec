<?php

    //Recebendo os valores do formulário
    $valor = $_POST["valor"];
    $opcao = $_POST["opcao"];

    //função para elevar ao quadrado
    function quadrado($quadrado){
        
        $i = 0;

        $i = $quadrado * $quadrado;

        return $i;

    }

    function cubo($cubo){

        //$i = 0;
        $res = 1;

        for ($i = 0; $i < 3; $i++){
            $res = $res * $valor;
        }

        return res;
        
    }

    function somatorio($somatorio){
        
        $som = 0;

        for ($i = 1; $i <= $valor; $i++){
            $som = $som + $i;
        }

        return $som;
    }

    function fatorial($fatorial){

        $fat = 1;

        for ($i = $fatorial; $i > 0; $i--){
            $fat = $fat * $fatorial;
        }

        return $fat;
    }

    switch ($opcao) {
        case '1':
            $quadrado($valor);
            break;
        
        case '2':
            $cubo($valor);
            break;

        case '3':
            $somatorio($valor);
            break;
        
        case '4':
            $fatorial($valor);
            break;
        
        default:
            echo ("**** Opção inexistente ****");
            break;
    }

