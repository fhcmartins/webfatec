<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo_ex_02.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Lista 3</title>
</head>

<body>

    <div>

        <?php
            $v1 = $_POST["base"];
            $v2 = $_POST["expoente"];
            
            function pot($base, $exp){
                
                $i = 0;
                $res = 1;
            
                for($i = 1; $i <= $exp; $i++){
                    
                    $res = $base * $res;
                }
            
                return $res;
            
            }
            
            echo pot($v1, $v2);
        ?>
    </div>
</body>

</html>