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

            $penultimo = 0;
            $ultimo = 1;

            // Queremos o 10º número da sequência Fibonnaci
            // como já informamos os 2 primeiros, limitamos o 
            // laço com $i de zero até oito.
            for($i = 0; $i < 8; $i++){
                $atual = $penultimo + $ultimo;

                $penultimo = $ultimo;
                $ultimo = $atual;
            }

            echo "O 10º valor da sequência Fibonacci é $atual";

        ?>

    </div>
</body>
</html>