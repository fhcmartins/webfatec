<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 04</title>
</head>
<body>
    
    <div>

        <?php

            /* Recebendo valores */
            $valor = $_POST["valor"];
            $fat = 1;

            /* Calculando fatorial */
            for($i = 1; $i <= $valor; $i++){
            
                $fat = $fat * $i;

            }

            echo "$fat";

        ?>

    </div>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 04</title>
</head>
<body>
    
    <div>

        <?php

            /* Recebendo valores */
            $valor = $_POST["valor"];
            $fat = 1;

            /* Calculando fatorial */
            for($i = 1; $i <= $valor; $i++){
            
                $fat = $fat * $i;

            }

            echo "$fat";

        ?>

    </div>

</body>
</html>
>>>>>>> 61b4f10721e96409d4d04178caaffcae3270147e
