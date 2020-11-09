<?php

$valor = $_POST["valor"];

$cont = 0;

while ($cont <= 10) {
    
    echo "$cont x $valor = ".$cont * $valor."<br>";
    $cont++;

}