<?php

//"Chamando a conexão.php
require ("conexao.php");


    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $fone = $_POST["fone"];

    //inserção dos dados
    $sql = "INSERT INTO empresa.cliente (nome, email,fone) values ('$nome', '$email', '$fone')";

    if($connect -> query($sql) === TRUE){
        echo "Cadastro efetuado com sucesso!";
    } else {
        echo 'Error: ' . $sql . $connect -> connect_error;
    }
