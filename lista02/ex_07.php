<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Exercício 07</title>
</head>

<body>

    <div>

        <br><br><br>
        <?php

            $valor01 = $_POST["num01"];
            $valor02 = $_POST["num02"];
            $aux = 0;

            //Alterando os valores se $valor02 for menor que $valor01
            if($valor01 > $valor02){
                $aux = $valor02;
                $valor02 = $valor01;
                $valor01 = $aux;
            }
            
            $i = $valor01 + 1;

            while($i < $valor02){
                echo "$i ";
                $i++;
            }

        ?>

    </div>

</body>

</html>