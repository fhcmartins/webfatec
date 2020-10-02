<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Teste de Banco de Dados</title> -->
</head>

<body>

    <div>

        <?php

            //definindo o acesso ao banco
            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "agenda";

            $conn = mysqli_connect($server, $user, $pass, $db);

            //Verificando a conexão
            if(!$conn){

                die("Conexão Falhou!!!".mysqli_connect_error());

            }

            //Recebendo variáveis do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            //Inserindo dados
            $sql = "INSERT INTO contatos(nome, email) VALUES('$nome', '$email')";

            if ($conn -> query($sql) === TRUE){
                echo "Cadastro realizado com sucesso";
            } else {
                echo "ERRO" . $sql . "<br>" . $conn -> error;
            }
            
        ?>

    </div>


</body>

</html>