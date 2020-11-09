<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Lista 3</title>
</head>

<body>
    <div>

        <?php

            $aluno = $_POST["aluno"];

            $media;

            //Funcao
            function media(){
            
                $nota01 = $_POST["nota01"];
                $nota02 = $_POST["nota02"];
                $nota03 = $_POST["nota03"];
                $nota04 = $_POST["nota04"];

                $media = ($nota01 + $nota02 + $nota03 + $nota04) / 4;

                return $media;

            }

            function aprovado(){

                echo "***** Você está APROVADO ***** <br>";
        
            }
        
            function reprovado(){
        
                echo "***** Você está REPROVADO ***** <br>";
        
            }

            if(media() >= 5) {
                echo "$aluno sua méidia é " . media() . "<br><br>";
                aprovado();
            }
            else {
                echo "$aluno sua méidia é " . media() . "<br><br>";
                reprovado();
            }

        ?>

    </div>
</body>

</html>