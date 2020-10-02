<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>

    <div>
        
        <br><br><br>
        <?php

            $massMat = 1;
            $cont = 0;

            while ($massMat > 0.1) {
                $massMat = $massMat * 0.75;
                $cont++;
            }

            $res = $cont * 0.5;

            echo "São necessários $res minutos para reduzir a massa do material a um nível menor de 10%."

        ?>

    </div>
</body>
</html>