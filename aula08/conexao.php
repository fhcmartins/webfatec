<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    if($connect -> connect_error){
        // informando qual o erro da conexão
        die("Falha na conexao:" . "" . $connect -> connect_error);
    }
    // }else {
    //     echo "Conexão realizada com sucesso";
    // }