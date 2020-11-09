<?php
    //Recebendoos valores informados
    $pgtohra = $_POST["pgtoHora"];
    $hrTrab = $_POST["hrTrab"];

    //Tendo referencia 20 dias trabalhandos
    $total = ($pgtohra * $hrTrab) * 20;

    echo "Sua remuneração nesse mês é de R$ $total.";