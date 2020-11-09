<?php

    //Function
    function diaatual(){

        //busca a data atual do sistema
        $hoje = getdate();

        switch ($hoje["wday"]) {
            
            case '1':
                return "Domingo";
                break;
            
            case '2':
                return "Segunda";
                break;
        
            case '3':
                return "Terça";
                break;
            
            case '4':
                return "Quarta";
                break;
                
            case '5':
                return "Quinta";
                break;
            
            case '6':
                return "Sexta";
                break;
            
            case '0':
                return "Sábado";
            break;
            
        }

    }

    $hoje = getdate();
    echo $hoje["wday"];
    echo "<br>";
    $dia = diaatual();
    echo $dia;