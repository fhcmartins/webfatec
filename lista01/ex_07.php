<?php
    //Recebendo valor do formulário
    $temp = $_POST["temp"];

    //Convertendo °C para °F

    $fah = ($temp * (9/5) + 32);

    echo "$temp °C corresponde a $fah °F.";
    