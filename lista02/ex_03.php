<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 3</title>
</head>

<body>
    
    <div>

        <?php

            //Recebendo valores do formulário
            $valor = $_POST["valor"];
            $i = 0;

            echo "Tabuada do $valor <br><br>";

            while($i <= 10){
                echo "$valor x $i = " . ($valor * $i) . "<br>";
                $i++;
            }
        ?>

    </div>

</body>

</html>