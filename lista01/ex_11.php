<?php
    //Recebendoos valores informados
    $pgtohra = $_POST["pgtoHora"];
    $hrTrab = $_POST["hrTrab"];

    //Tendo referencia 22 dias trabalhandos
    $salBruto = ($pgtohra * $hrTrab) * 22;
    $inss = $salBruto * 0.08;
    $ir = ($salBruto - $inss) * 0.11;
    $sindicato = $salBruto / 30;
    $salLiquido = $salBruto - ($inss + $ir + $sindicato);

    echo "Salário Bruto: R$ ".number_format($salBruto,2).".<br><br>";
    echo "Descontos:<br>";
    echo "* INSS: R$ ".number_format($inss,2).".<br>";
    echo "* Imposto de Renda: R$ ".number_format($ir,2).".<br>";
    echo "* Sindicato: R$ ".number_format($sindicato,2).".<br><br>";
    echo "Salário líquido: R$ ".number_format($salLiquido,2),".<br>";