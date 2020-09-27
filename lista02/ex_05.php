<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercicio 05</title>
</head>

<body>

    <div>

        <?php

            //Recebendo valores do formulário
            $valor = $_POST["valor"];
            $soma = 0;
            $i = 1;

            while($i <= $valor){
                echo " $i ";
                $soma = $soma + $i;
                $i++;
            }

            echo "<br><br>";
            echo "O somatório é $soma.";

        ?>

    </div>

</body>

</html>