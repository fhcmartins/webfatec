<?php

$valor = $_POST["valor"];

while ($valor < 10) {
    echo "Executando pelo While: $valor";
    echo "<br>";
    $valor++;
}

do {
    echo "Executando pelo do While: $valor";
    echo "<br>";
    $valor++;
} while ($valor < 10);