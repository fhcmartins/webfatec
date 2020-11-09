<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execução</title>
</head>
<body>
    
    <div>
        <?php
            $x = $_POST["x"];
            $y = $_POST["y"];
            $f = $_POST["frase"];

            $result = $x * $y;
            
            echo "<br><br> O resultado é: " . $result;

            echo "<br><br> A frase é: " . $f;
        ?>
    </div>

</body>
</html>
