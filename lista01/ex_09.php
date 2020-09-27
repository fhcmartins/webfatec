<?php
    //Informando os valores
    $varA = $_POST["varA"];
    $varB = $_POST["varB"];

    if($varA > $varB){
        echo "A maior que B.";
    }
    else{
        echo "A menor que B.";
    }