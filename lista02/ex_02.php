<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 02</title>
</head>

<body>

    <div>
        <?php

        echo "Tipo de Triângulo <br><br>";

            //Recebendo os valores do formulário
            $ladoA = $_POST["A"];
            $ladoB = $_POST["B"];
            $ladoC = $_POST["C"];

            if ($ladoA == $ladoB && $ladoB == $ladoC && $ladoC == $ladoA) {
                echo "***** Triângulo Equilátero *****";
            }elseif ($ladoA == $ladoB || $ladoB == $ladoC || $ladoC == $ladoA) {
                echo "***** Triângulo Isósceles *****";
            }else {
                echo "***** Triângulo Escaleno *****";
            }

        ?>
    </div>

</body>

</html>