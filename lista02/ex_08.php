<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    
    <div>
        <br><br><br>
        <?php

            $altChico = 1.5;
            $cresChico = 0.02;
            $altJuca = 1.1;
            $cresJuca = 0.03;
            $cont = 0;

            while ($altChico > $altJuca) {
                $altChico = $altChico + $cresChico;
                $altJuca = $altJuca + $cresJuca;
                $cont++;
            }
            
            echo "Serão necessários $cont anos para que Juca seja maior que Chico.";

        ?>

    </div>

</body>
</html>