<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>

<body>

    <div>

        <?php

            //Recebendo valores
            $val = $_POST["valor"];
            $numDivisores = 0;

            for($i = 1; $i <= $val; $i++){
                
                if($val % $i == 0){
                    $numDivisores += 1;
                }
                
            }

            if($numDivisores == 2){
                echo "O número $val É PRIMO!";
            } else {
                echo "O número $val NÃO É PRIMO!";
            }

        ?>

    </div>

</body>

</html>